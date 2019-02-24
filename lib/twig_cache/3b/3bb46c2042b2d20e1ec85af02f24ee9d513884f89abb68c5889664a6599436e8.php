<?php

/* @admin/theme.html */
class __TwigTemplate_eb78593048427fbcca66ed54c36d16a0edb70185b0c1428e632b8f329463cbfb extends Twig_Template
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
        $this->loadTemplate("@admin/head.twig", "@admin/theme.html", 1)->display($context);
        // line 2
        echo "
<!-- Content Wrapper. Contains page content -->
<div class=\"content-wrapper\">
    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
        <h1>Шаблоны сайта</h1>
    </section>

    <!-- Main content -->
    <section class=\"content\">

        <div class=\"row\">
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["theme_list"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
            // line 15
            echo "            <div class=\"col-xs-12 col-sm-6 col-lg-4\">
                <div class=\"box\">
                    <div class=\"box-header with-border\">
                        <h3 class=\"box-title\">";
            // line 18
            echo twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["theme"], "general", array()), "name", array());
            echo "</h3>
                    </div><!-- /.box-header -->
                    <div class=\"box-body\">
                        ";
            // line 21
            if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["theme"], "general", array()), "thumbnail", array())) {
                // line 22
                echo "                        <img src=\"/";
                echo twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["theme"], "general", array()), "thumbnail", array());
                echo "\"/>
                        ";
            }
            // line 24
            echo "                        <div class=\"clearfix\"></div>
                        <br>
                        <div class=\"row\">
                            <div class=\"col-sm-12 col-md-6\">
                                <b>Автор:</b> <a href=\"";
            // line 28
            echo twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["theme"], "general", array()), "url", array());
            echo "\">";
            echo twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["theme"], "general", array()), "author", array());
            echo "</a><br>
                                <b>Версия:</b> ";
            // line 29
            echo twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["theme"], "general", array()), "version", array());
            echo "
                            </div>
                            <div class=\"col-sm-12 col-md-6 text-right\">
                                <a href=\"/admin/theme?enable=";
            // line 32
            echo twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["theme"], "general", array()), "folder", array());
            echo "\" class=\"btn btn-sm btn-success\" ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["theme"], "general", array()), "folder", array()) == twig_get_attribute($this->env, $this->getSourceContext(), ($context["config"] ?? null), "theme", array()))) {
                echo "disabled=\"disabled\"";
            }
            echo " ><i class=\"fa fa-toggle-on\"></i> включить</a>
                            </div>
                        </div>
                        <br>
                        ";
            // line 36
            echo twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["theme"], "general", array()), "description", array());
            echo "
                    </div><!-- /.box-body -->
                </div>
            </div>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "        </div>


    </section><!-- /.content -->
</div><!-- /.content-wrapper -->


";
        // line 49
        $this->loadTemplate("@admin/footer.twig", "@admin/theme.html", 49)->display($context);
    }

    public function getTemplateName()
    {
        return "@admin/theme.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 49,  99 => 42,  87 => 36,  76 => 32,  70 => 29,  64 => 28,  58 => 24,  52 => 22,  50 => 21,  44 => 18,  39 => 15,  35 => 14,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%include \"@admin/head.twig\" %}

<!-- Content Wrapper. Contains page content -->
<div class=\"content-wrapper\">
    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
        <h1>Шаблоны сайта</h1>
    </section>

    <!-- Main content -->
    <section class=\"content\">

        <div class=\"row\">
        {% for theme in theme_list %}
            <div class=\"col-xs-12 col-sm-6 col-lg-4\">
                <div class=\"box\">
                    <div class=\"box-header with-border\">
                        <h3 class=\"box-title\">{{ theme.general.name }}</h3>
                    </div><!-- /.box-header -->
                    <div class=\"box-body\">
                        {% if theme.general.thumbnail %}
                        <img src=\"/{{theme.general.thumbnail}}\"/>
                        {% endif %}
                        <div class=\"clearfix\"></div>
                        <br>
                        <div class=\"row\">
                            <div class=\"col-sm-12 col-md-6\">
                                <b>Автор:</b> <a href=\"{{theme.general.url}}\">{{theme.general.author}}</a><br>
                                <b>Версия:</b> {{theme.general.version}}
                            </div>
                            <div class=\"col-sm-12 col-md-6 text-right\">
                                <a href=\"/admin/theme?enable={{theme.general.folder}}\" class=\"btn btn-sm btn-success\" {%if theme.general.folder == config.theme %}disabled=\"disabled\"{% endif %} ><i class=\"fa fa-toggle-on\"></i> включить</a>
                            </div>
                        </div>
                        <br>
                        {{theme.general.description}}
                    </div><!-- /.box-body -->
                </div>
            </div>

        {% endfor %}
        </div>


    </section><!-- /.content -->
</div><!-- /.content-wrapper -->


{%include \"@admin/footer.twig\" %}", "@admin/theme.html", "/Users/nightman/Dropbox/My Site/lib/pico_admin/templates/theme.html");
    }
}
