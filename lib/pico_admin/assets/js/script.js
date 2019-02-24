/**
 * Created by NightMan on 12.03.2017.
 */
$(document).ready(function() {

    function initGlobal() {
        $("#filemanager iframe").height($(".content-wrapper").outerHeight() - $(".content-header").outerHeight() - $(".main-footer").outerHeight());
        if ($('#tinymce_editor').length>0) {
            $("#ace_editor").height($(".content-wrapper").outerHeight() - parseInt($(".tab-content").offset().top));
            $("#tinymce_editor").attr('rows', parseInt($("#ace_editor").outerHeight() / parseInt($("p").css("font-size")) / 2));
        };
        if ($('#code-editor').length>0){
            $("#code-editor").height($(".content-wrapper").outerHeight() - parseInt($("#code-editor").offset().top));

        };
    };

    initGlobal();

    var resizeTimer;
    $(window).resize(function() {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(initGlobal, 100);
    });


    //download progress for WP import
    if ($('#wp-import').length>0 && totalfilesfordownloading) {
        function getProgress(){
            $.ajax({
                url: '/admin/import-wp-download',
                success: function(data) {
                    var p = (data*100)/totalfilesfordownloading;
                    if (p>100){p=100;}
                    console.log(data + " of " + totalfilesfordownloading);
                    $(".progress-bar").text(Math.round(p)+'%');
                    $(".progress-bar").width(p+"%");
                    if(data<totalfilesfordownloading){
                        getProgress();
                    }else{
                        //$(".progress-bar").hide();
                        $("#alldone").show();
                        $(".progress-bar").removeClass('active');

                    }
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                    alert("some error");
                }
            });
        }
        getProgress();
    }


    $('.input-group.date').datepicker({
        format: "yyyy.mm.dd",
        todayBtn: "linked",
        language: "ru",
        autoclose: true,
        todayHighlight: true
    });

    $('#table-articles').DataTable( {
        "order": [[ 3, 'desc' ], [ 1, 'asc' ]],
        "language": {
            "processing": "Подождите...",
            "search": "Поиск:",
            "lengthMenu": "Показать _MENU_ записей",
            "info": "Записи с _START_ до _END_ из _TOTAL_ записей",
            "infoEmpty": "Записи с 0 до 0 из 0 записей",
            "infoFiltered": "(отфильтровано из _MAX_ записей)",
            "infoPostFix": "",
            "loadingRecords": "Загрузка записей...",
            "zeroRecords": "Записи отсутствуют.",
            "emptyTable": "В таблице отсутствуют данные",
            "paginate": {
                "first": "Первая",
                "previous": "Предыдущая",
                "next": "Следующая",
                "last": "Последняя"
            },
            "aria": {
                "sortAscending": ": активировать для сортировки столбца по возрастанию",
                "sortDescending": ": активировать для сортировки столбца по убыванию"
            }
        }
    } );

    //editor
    //TODO
    if ($('#tinymce_editor').length>0){
        $("#tinymce_editor").val( $("#defaultcontent").html() );
        $("#ace_editor").text( $("#defaultcontent").html() );

        tinymce.init({
            selector: "#tinymce_editor",
            language : 'ru',
            browser_spellcheck : true,
            gecko_spellcheck: false,
            plugins: [
                "advlist autolink lists link image charmap preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code fullscreen",
                "insertdatetime media nonbreaking save table contextmenu directionality",
                "emoticons  paste textcolor colorpicker textpattern codemirror"
            ],
            toolbar1: "preview  code |  undo redo | styleselect | bold italic forecolor backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media emoticons",
            image_advtab: true,
            external_filemanager_path:"/lib/filemanager/",
            filemanager_title:"Responsive Filemanager" ,
            external_plugins: { "filemanager" : "/lib/filemanager/plugin.min.js"},
            filemanager_access_key:"295a0da46b5633a0643e52edc799ed80" ,
            codemirror: {
                indentOnInit: true, // Whether or not to indent code on init.
                path: '/lib/tinymce/plugins/codemirror/codemirror-5.24.2', // Path to CodeMirror distribution
                config: {           // CodeMirror config object
                    mode: 'application/x-httpd-php',
                    lineNumbers: true,
                },
                jsFiles: [          // Additional JS files to load
                    'mode/clike/clike.js',
                    'mode/php/php.js'
                ]
            }
        });

        var editor = ace.edit("ace_editor");
        editor.$blockScrolling = Infinity;
        //editor.setTheme("ace/theme/monokaimonokai");
        //editor.setTheme("ace/theme/cobalt");
        editor.setTheme("ace/theme/crimson_editor");
        //editor.setTheme("ace/theme/merbivore_soft");
        editor.getSession().setMode("ace/mode/"+aceMode);

        //html -> visual
        $("#link_visual").click(function(event) {
            event.preventDefault();
            if ($('.tab-pane.active').attr('id') == 'html'){
                tinyMCE.activeEditor.setContent( editor.getValue() );
            }
        });

        //visual -> html
        $("#link_html").click(function(event) {
            event.preventDefault();
            if ($('.tab-pane.active').attr('id') == 'visual'){
                editor.setValue( tinyMCE.activeEditor.getContent() + "\n" );
                editor.gotoLine(0, 0 , 0);
            }
        });

        //save
        $("#save").click(function(event) {
            event.preventDefault();
            if ($('.tab-pane.active').attr('id') == 'visual'){
                var formData = tinyMCE.activeEditor.getContent();
            }else if ($('.tab-pane.active').attr('id') == 'html'){
                var formData = editor.getValue();
            }
            if ( $('#navhidden').prop( "checked" ) ){var navhidden = 'checked';
            }else {var navhidden = '';}

            var posting = $.post( '/admin/save', {
                file: $('#file_name').text(),
                editor: 'visual',
                content: formData,
                title: $('#pagetitle').val(),
                description: $('#description').val(),
                date: $('#date').val(),
                navorder: $('#navorder').val(),
                navtitle: $('#navtitle').val(),
                template: $("#template :selected").val(),
                navhidden: navhidden
            } );

            posting.done(function( data ) {
                //alert(data);
                new PNotify({
                    title: data,
                    type: 'success',
                    icon: false
                });
            });
            posting.error(function( xhr, textStatus, errorThrown ) {
                new PNotify({
                    title: 'Error',
                    text: xhr.responseText,
                    type: 'error',
                    icon: false
                });
            });
        });

    }

    //code editor
    if ($('#code-editor').length>0){

        var editor = ace.edit("code-editor");
        editor.$blockScrolling = Infinity;
        editor.setTheme("ace/theme/crimson_editor");
        editor.getSession().setMode("ace/mode/"+aceMode);
        $("#save").click(function(event) {
            event.preventDefault();
            var posting = $.post( '/admin/save', { file: $('#file_name').text(), data: editor.getValue(), editor: 'code' } );
            posting.done(function( data ) {
                new PNotify({
                    title: data,
                    type: 'success',
                    icon: false
                });
            });
            posting.error(function( xhr, textStatus, errorThrown ) {
                new PNotify({
                    title: 'Error',
                    text: xhr.responseText,
                    type: 'error',
                    icon: false
                });
            });
        });


    }

    //pages list
    var oldContainer;
    $("ol.pages-list").sortable({
        handle: 'i.fa-arrows',
        afterMove: function (placeholder, container) {
            if(oldContainer != container){
                if(oldContainer)
                    oldContainer.el.removeClass("active");
                container.el.addClass("active");

                oldContainer = container;
            }
        },
        onDrop: function ($item, container, _super) {
            container.el.removeClass("active");
            _super($item, container);
        }
    });

    $("#savePagesList").click(function(event) {
        event.preventDefault();
        var data = $("ol.pages-list").sortable("serialize").get();
        var jsonString = JSON.stringify(data);
        document.location.href = "/admin/pages?pagesdata=" + jsonString;
        //alert( jsonString );
        /*
        $.ajax({
            type: "POST",
            url: "/admin/pages",
            // The key needs to match your method's input parameter (case-sensitive).
            data: "pagesdata=" + jsonString,
            success: function(data){
                document.location.href = "/admin/pages";
            },
            failure: function(errMsg) {
                document.location.href = "/admin/pages";
            }
        });
        */
    });



});
