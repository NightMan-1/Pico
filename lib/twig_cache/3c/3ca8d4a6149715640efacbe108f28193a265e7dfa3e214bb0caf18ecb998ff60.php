<?php

/* @admin/import.html */
class __TwigTemplate_b3e54149c0f2ff91a737701b37d6c19e818ab1e11bc33987b9239cc1673f6dbf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->loadTemplate("@admin/head.twig", "@admin/import.html", 1)->display($context);
        // line 2
        echo "<!-- Content Wrapper. Contains page content -->
<div class=\"content-wrapper\">
    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
        <h1>Импорт данных из Wordpress</h1>
    </section>

    <!-- Main content -->
    <section class=\"content\">

        <form enctype=\"multipart/form-data\" method=\"post\" action=\"";
        // line 12
        echo ($context["base_url"] ?? null);
        echo "/admin/import-wp\">
        <div class=\"box\">
            <div class=\"box-body\">
                <div class=\"form-group\">
                    <label for=\"xml_main\">Основной XML файл данных:</label>
                    <input type=\"file\" id=\"xml_main\" name=\"xml_main\" required>
                </div>
                <br>
                <p><b>Инструкция по импорту фотографий из NextGEN Gallery:</b></p>
                <ol>
                    <li>установите плагин <a href=\"https://wordpress.org/plugins/database-browser/\" target=\"_blank\">Database Browser</a></li>
                    <li>в плагине необходимо выбрать 2 таблицы: <b>wp_ngg_gallery</b> и <b>wp_ngg_pictures</b></li>
                    <li>экспортируйте таблицы в <b>XML</b> формат и загрузите через форму ниже</li>
                </ol>
                <div class=\"form-group\">
                    <label for=\"xml_wp_ngg_gallery\">XML для таблицы wp_ngg_gallery:</label>
                    <input type=\"file\" id=\"xml_wp_ngg_gallery\" name=\"xml_wp_ngg_gallery\">
                </div>
                <div class=\"form-group\">
                    <label for=\"xml_wp_ngg_pictures\">XML для таблицы wp_ngg_pictures:</label>
                    <input type=\"file\" id=\"xml_wp_ngg_pictures\" name=\"xml_wp_ngg_pictures\">
                </div>
                <br>
                <div class=\"alert alert-info\">
                    В процессе импорта будут скачены все фотографии, это может занять продолжительное время, будте терпеливы.
                </div>
            </div><!-- ./box-body -->
            <div class=\"box-footer\">
                <button type=\"submit\" class=\"btn btn-success\"><i class=\"fa fa-download\"></i> Импортировать</button>
            </div><!-- /.box-footer -->
        </div>
        </form>

    </section><!-- /.content -->
</div><!-- /.content-wrapper -->

";
        // line 48
        $this->loadTemplate("@admin/footer.twig", "@admin/import.html", 48)->display($context);
    }

    public function getTemplateName()
    {
        return "@admin/import.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 48,  33 => 12,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%include \"@admin/head.twig\" %}
<!-- Content Wrapper. Contains page content -->
<div class=\"content-wrapper\">
    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
        <h1>Импорт данных из Wordpress</h1>
    </section>

    <!-- Main content -->
    <section class=\"content\">

        <form enctype=\"multipart/form-data\" method=\"post\" action=\"{{ base_url }}/admin/import-wp\">
        <div class=\"box\">
            <div class=\"box-body\">
                <div class=\"form-group\">
                    <label for=\"xml_main\">Основной XML файл данных:</label>
                    <input type=\"file\" id=\"xml_main\" name=\"xml_main\" required>
                </div>
                <br>
                <p><b>Инструкция по импорту фотографий из NextGEN Gallery:</b></p>
                <ol>
                    <li>установите плагин <a href=\"https://wordpress.org/plugins/database-browser/\" target=\"_blank\">Database Browser</a></li>
                    <li>в плагине необходимо выбрать 2 таблицы: <b>wp_ngg_gallery</b> и <b>wp_ngg_pictures</b></li>
                    <li>экспортируйте таблицы в <b>XML</b> формат и загрузите через форму ниже</li>
                </ol>
                <div class=\"form-group\">
                    <label for=\"xml_wp_ngg_gallery\">XML для таблицы wp_ngg_gallery:</label>
                    <input type=\"file\" id=\"xml_wp_ngg_gallery\" name=\"xml_wp_ngg_gallery\">
                </div>
                <div class=\"form-group\">
                    <label for=\"xml_wp_ngg_pictures\">XML для таблицы wp_ngg_pictures:</label>
                    <input type=\"file\" id=\"xml_wp_ngg_pictures\" name=\"xml_wp_ngg_pictures\">
                </div>
                <br>
                <div class=\"alert alert-info\">
                    В процессе импорта будут скачены все фотографии, это может занять продолжительное время, будте терпеливы.
                </div>
            </div><!-- ./box-body -->
            <div class=\"box-footer\">
                <button type=\"submit\" class=\"btn btn-success\"><i class=\"fa fa-download\"></i> Импортировать</button>
            </div><!-- /.box-footer -->
        </div>
        </form>

    </section><!-- /.content -->
</div><!-- /.content-wrapper -->

{%include \"@admin/footer.twig\" %}", "@admin/import.html", "/Users/nightman/Dropbox/My Site/lib/pico_admin/templates/import.html");
    }
}
