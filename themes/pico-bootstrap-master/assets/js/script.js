/**
 * Created by NightMan on 19.07.2015.
 */
$(document).ready(function() {

    function SortGallery() {
        //if (busy == 0){
        //	busy = 1;
        //	setTimeout(function() {
        console.log("call BlocksIt");

        if ($(document).width() >= 1200 ){
            var CnumOfCol = 4;
        }else if ($(document).width() >= 992 ){
            var CnumOfCol = 4;
        }else if ($(document).width() >= 768 ){
            var CnumOfCol = 3;
        }else if ($(document).width() < 768 ){
            var CnumOfCol = 2;
        }

        $('.image-gallery').BlocksIt({
            numOfCol:CnumOfCol,
            offsetX: 8,
            offsetY: 8
        });
        //		busy = 0;
        //	}, 300);
        //}
    };
    SortGallery();
    window.onresize = function(event) {
        SortGallery();
    };

    $("img.lazy").lazyload({
        effect : "fadeIn",
        threshold : 300,
        //load:function(){
        //SortGallery();
        //}
    });

    $( '.swipebox' ).swipebox();

});
