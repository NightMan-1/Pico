<?php

/* @admin/index.html */
class __TwigTemplate_9b82dd5f71a1945808e40209cac569e95e41fade44aa76c1f5792cd7160280d0 extends Twig_Template
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
        $this->loadTemplate("@admin/head.twig", "@admin/index.html", 1)->display($context);
        // line 2
        echo "
<!-- Content Wrapper. Contains page content -->
<div class=\"content-wrapper\">
    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
        <h1>Консоль сайта</h1>
    </section>

    <!-- Main content -->
    <section class=\"content\">


        <div class=\"row\">
            <div class=\"col-xs-12 col-md-6\">
                <div class=\"box box-info\">
                    <div class=\"box-header with-border\">
                        <h3 class=\"box-title\">Сайт</h3>
                    </div><!-- /.box-header -->
                    <div class=\"box-body\">
                        <p>
                            <b>Название сайта:</b> ";
        // line 22
        echo $this->getAttribute(($context["config"] ?? null), "site_title", array());
        echo "<br>
                            <b>Адрес сайта:</b> <a href=\"";
        // line 23
        echo $this->getAttribute(($context["config"] ?? null), "base_url", array());
        echo "\" target=\"_blank\">";
        echo $this->getAttribute(($context["config"] ?? null), "base_url", array());
        // line 24
        echo "</a><br>
                            <b>Администратор:</b> <a href=\"mailto:";
        // line 25
        echo $this->getAttribute(($context["config"] ?? null), "site_admin_email", array());
        echo "\">";
        echo $this->getAttribute(($context["config"] ?? null), "site_author", array());
        // line 26
        echo "</a>
                        </p>

                        <p>
                            <b>Страниц на сайте:</b> ";
        // line 30
        echo twig_length_filter($this->env, ($context["pages"] ?? null));
        echo "
                        </p>
                    </div><!-- /.box-body -->
                </div>
            </div>
            <div class=\"col-xs-12 col-md-6\">
                <div class=\"box box-primary\">
                    <div class=\"box-header with-border\">
                        <h3 class=\"box-title\">Сервер</h3>
                    </div><!-- /.box-header -->
                    <div class=\"box-body\">
                        <p>
                            <b>PHP версия:</b> ";
        // line 42
        echo $this->getAttribute(($context["server"] ?? null), "phpversion", array());
        echo "<br>
                            <b>Memcache установлен:</b> ";
        // line 43
        echo $this->getAttribute(($context["server"] ?? null), "memcached", array());
        echo "<br>
                            <b>Использование памяти:</b> ";
        // line 44
        echo $this->getAttribute(($context["server"] ?? null), "memory", array());
        echo " <!--(peak ";
        echo $this->getAttribute(($context["server"] ?? null), "memory_max", array());
        echo ")--><br>
                            <b>Кеширование включено:</b> ";
        // line 45
        echo $this->getAttribute(($context["server"] ?? null), "cache_enable", array());
        echo "
                        </p>
                    </div><!-- /.box-body -->
                </div>
            </div>
        </div>

    </section><!-- /.content -->
</div><!-- /.content-wrapper -->


";
        // line 56
        $this->loadTemplate("@admin/footer.twig", "@admin/index.html", 56)->display($context);
    }

    public function getTemplateName()
    {
        return "@admin/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 56,  93 => 45,  87 => 44,  83 => 43,  79 => 42,  64 => 30,  58 => 26,  54 => 25,  51 => 24,  47 => 23,  43 => 22,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%include \"@admin/head.twig\" %}

<!-- Content Wrapper. Contains page content -->
<div class=\"content-wrapper\">
    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
        <h1>Консоль сайта</h1>
    </section>

    <!-- Main content -->
    <section class=\"content\">


        <div class=\"row\">
            <div class=\"col-xs-12 col-md-6\">
                <div class=\"box box-info\">
                    <div class=\"box-header with-border\">
                        <h3 class=\"box-title\">Сайт</h3>
                    </div><!-- /.box-header -->
                    <div class=\"box-body\">
                        <p>
                            <b>Название сайта:</b> {{ config.site_title }}<br>
                            <b>Адрес сайта:</b> <a href=\"{{ config.base_url }}\" target=\"_blank\">{{ config.base_url
                            }}</a><br>
                            <b>Администратор:</b> <a href=\"mailto:{{ config.site_admin_email }}\">{{ config.site_author
                            }}</a>
                        </p>

                        <p>
                            <b>Страниц на сайте:</b> {{ pages|length }}
                        </p>
                    </div><!-- /.box-body -->
                </div>
            </div>
            <div class=\"col-xs-12 col-md-6\">
                <div class=\"box box-primary\">
                    <div class=\"box-header with-border\">
                        <h3 class=\"box-title\">Сервер</h3>
                    </div><!-- /.box-header -->
                    <div class=\"box-body\">
                        <p>
                            <b>PHP версия:</b> {{ server.phpversion }}<br>
                            <b>Memcache установлен:</b> {{ server.memcached|raw }}<br>
                            <b>Использование памяти:</b> {{ server.memory }} <!--(peak {{ server.memory_max }})--><br>
                            <b>Кеширование включено:</b> {{ server.cache_enable|raw }}
                        </p>
                    </div><!-- /.box-body -->
                </div>
            </div>
        </div>

    </section><!-- /.content -->
</div><!-- /.content-wrapper -->


{%include \"@admin/footer.twig\" %}", "@admin/index.html", "C:\\Users\\NightMan\\Dropbox\\My Site\\lib\\pico_admin\\templates\\index.html");
    }
}
