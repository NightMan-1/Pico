<?php

/* @admin/head.twig */
class __TwigTemplate_780d8a66164c402a97a390bb957d37ef752155fae7da4b9dfe35c7154df828cb extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\" class=\"no-js\">
<head>
    <meta charset=\"utf-8\" />
    <title>Pico Admin Login</title>

    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo ($context["base_url"] ?? null);
        echo "/lib/pico_admin/assets/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo ($context["base_url"] ?? null);
        echo "/lib/pico_admin/assets/css/AdminLTE.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo ($context["base_url"] ?? null);
        echo "/lib/pico_admin/assets/css/skins/skin-black.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo ($context["base_url"] ?? null);
        echo "/lib/pico_admin/assets/css/pnotify.custom.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo ($context["base_url"] ?? null);
        echo "/lib/pico_admin/assets/datepicker/bootstrap-datepicker3.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo ($context["base_url"] ?? null);
        echo "/lib/pico_admin/assets/datatables/dataTables.bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo ($context["base_url"] ?? null);
        echo "/lib/pico_admin/assets/css/style.css\">

    <!--
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,700,700italic&subset=latin,cyrillic,cyrillic-ext' rel='stylesheet' type='text/css'>
    <link href=\"";
        // line 19
        echo ($context["base_url"] ?? null);
        echo "/lib/pico_admin/assets/css/pnotify.custom.min.css\" rel=\"stylesheet\">
    <link href=\"";
        // line 20
        echo ($context["base_url"] ?? null);
        echo "/lib/pico_admin/assets/css/style.css\" rel=\"stylesheet\">
    -->
    <meta name=\"robots\" content=\"noindex, nofollow\" />

</head>

<body class=\"hold-transition skin-black sidebar-mini\">
<div class=\"wrapper\">
    <header class=\"main-header\">
        <a href=\"";
        // line 29
        echo ($context["base_url"] ?? null);
        echo "/admin\" class=\"logo\">
            <span class=\"logo-mini\"><b>Pico</b></span>
            <span class=\"logo-lg\"><b>Pico</b> Admin</span>
        </a>
        <nav class=\"navbar navbar-static-top\" role=\"navigation\">
            <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                <span class=\"sr-only\">Toggle navigation</span>
            </a>
            <div class=\"navbar-custom-menu\">
                <ul class=\"nav navbar-nav\">
                    <!-- Control Sidebar Toggle Button -->
                    <li><a href=\"";
        // line 40
        echo ($context["base_url"] ?? null);
        echo "\" target=\"_blank\" title=\"перейти на сайт\"><i class=\"fa fa-external-link\"></i> <span class=\"hidden-xs hidden-sm\">Открыть сайт</span></a></li>
                    ";
        // line 41
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["server"] ?? null), "cache_enable_menu", array())) {
            echo "<li";
            if ((($context["menu"] ?? null) == "settings")) {
                echo " class=\"active\"";
            }
            echo ">11";
            echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["server"] ?? null), "cache_enable_menu", array());
            echo "<a href=\"";
            echo ($context["flush_cache_url"] ?? null);
            echo "\"><i class=\"fa fa-recycle\"></i> <span class=\"hidden-xs hidden-sm\">Очистить кеш</span></a></li>";
        }
        // line 42
        echo "                    <li";
        if ((($context["menu"] ?? null) == "settings")) {
            echo " class=\"active\"";
        }
        echo "><a href=\"";
        echo ($context["base_url"] ?? null);
        echo "/admin/settings\"><i class=\"fa fa-gears\"></i> <span class=\"hidden-xs hidden-sm\">Настройки</span></a></li>
                    <li><a href=\"";
        // line 43
        echo ($context["base_url"] ?? null);
        echo "/admin/logout\"><i class=\"fa fa-sign-out\"></i> <span class=\"hidden-xs hidden-sm\">Выход</span></a></li>

                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class=\"main-sidebar\">

        <section class=\"sidebar\">
            <!-- Sidebar Menu -->
            <ul class=\"sidebar-menu\">
                <li";
        // line 55
        if ((($context["menu"] ?? null) == "dashboard")) {
            echo " class=\"active\"";
        }
        echo "><a href=\"";
        echo ($context["base_url"] ?? null);
        echo "/admin\"><i class=\"fa fa-tachometer\"></i> <span>Консоль</span></a></li>
                <li class=\"header\">Контент</li>
                <li";
        // line 57
        if ((($context["menu"] ?? null) == "articles")) {
            echo " class=\"active\"";
        }
        echo "><a href=\"";
        echo ($context["base_url"] ?? null);
        echo "/admin/articles\"><i class=\"fa fa-newspaper-o\"></i> <span>Записи</span></a></li>
                <li";
        // line 58
        if ((($context["menu"] ?? null) == "pages")) {
            echo " class=\"active\"";
        }
        echo "><a href=\"";
        echo ($context["base_url"] ?? null);
        echo "/admin/pages\"><i class=\"fa fa-file-text-o\"></i> <span>Страницы</span></a></li>
                <li";
        // line 59
        if ((($context["menu"] ?? null) == "gallery")) {
            echo " class=\"active\"";
        }
        echo "><a href=\"";
        echo ($context["base_url"] ?? null);
        echo "/admin/gallery\"><i class=\"fa fa-camera\"></i> <span>Фотографии</span></a></li>
                <li";
        // line 60
        if ((($context["menu"] ?? null) == "files")) {
            echo " class=\"active\"";
        }
        echo "><a href=\"";
        echo ($context["base_url"] ?? null);
        echo "/admin/files\"><i class=\"fa fa-files-o\"></i> <span>Файлы</span></a></li>
                <li class=\"header\">Общее</li>
                <li";
        // line 62
        if ((($context["menu"] ?? null) == "theme")) {
            echo " class=\"active\"";
        }
        echo "><a href=\"";
        echo ($context["base_url"] ?? null);
        echo "/admin/theme\"><i class=\"fa fa-paint-brush\"></i> <span>Шаблоны</span></a></li>
                <li";
        // line 63
        if ((($context["menu"] ?? null) == "menu")) {
            echo " class=\"active\"";
        }
        echo "><a href=\"";
        echo ($context["base_url"] ?? null);
        echo "/admin/menu\"><i class=\"fa fa-bars\"></i> <span>Навигация</span></a></li>
                <li class=\"header\">Служебное</li>
                <li";
        // line 65
        if ((($context["menu"] ?? null) == "backup")) {
            echo " class=\"active\"";
        }
        echo "><a href=\"";
        echo ($context["base_url"] ?? null);
        echo "/admin/backup\"><i class=\"fa fa-hdd-o\"></i> <span>Backup</span></a></li>
                <li";
        // line 66
        if ((($context["menu"] ?? null) == "import")) {
            echo " class=\"active\"";
        }
        echo "><a href=\"";
        echo ($context["base_url"] ?? null);
        echo "/admin/import\"><i class=\"fa fa-download\"></i> <span>Импорт</span></a></li>
            </ul><!-- /.sidebar-menu -->

        </section>
        <!-- /.sidebar -->
    </aside>




";
    }

    public function getTemplateName()
    {
        return "@admin/head.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 66,  189 => 65,  180 => 63,  172 => 62,  163 => 60,  155 => 59,  147 => 58,  139 => 57,  130 => 55,  115 => 43,  106 => 42,  94 => 41,  90 => 40,  76 => 29,  64 => 20,  60 => 19,  53 => 15,  49 => 14,  45 => 13,  41 => 12,  37 => 11,  33 => 10,  28 => 8,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@admin/head.twig", "/Users/nightman/Dropbox/My Site/lib/pico_admin/templates/head.twig");
    }
}
