<?php

/* head.twig */
class __TwigTemplate_b7fe12d19ca44594ba35e2d824cc4a8aba346ecd64b2dc396d6a65ef978186f4 extends Twig_Template
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
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>";
        // line 8
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["meta"] ?? null), "title", array())) {
            echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["meta"] ?? null), "title", array());
            echo " | ";
        }
        echo ($context["site_title"] ?? null);
        echo "</title>
    ";
        // line 9
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["meta"] ?? null), "description", array())) {
            // line 10
            echo "        <meta name=\"description\" content=\"";
            echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["meta"] ?? null), "description", array());
            echo "\">
    ";
        }
        // line 11
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["meta"] ?? null), "robots", array())) {
            // line 12
            echo "        <meta name=\"robots\" content=\"";
            echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["meta"] ?? null), "robots", array());
            echo "\">
    ";
        }
        // line 14
        echo "
    <link href=\"";
        // line 15
        echo ($context["base_url"] ?? null);
        echo "/feed\" type=\"application/atom+xml\" rel=\"alternate\" title=\"ATOM Feed\" />

    <link href=\"";
        // line 17
        echo ($context["theme_url"] ?? null);
        echo "/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css\">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,700,700italic&subset=latin,cyrillic,cyrillic-ext' rel='stylesheet' type='text/css'>
    <link href=\"";
        // line 20
        echo ($context["theme_url"] ?? null);
        echo "/css/animate.css\" rel=\"stylesheet\">
    <link href=\"";
        // line 21
        echo ($context["theme_url"] ?? null);
        echo "/swipebox/swipebox.css\" rel=\"stylesheet\">
    <link href=\"";
        // line 22
        echo ($context["theme_url"] ?? null);
        echo "/css/main.css\" rel=\"stylesheet\">
    <link href=\"";
        // line 23
        echo ($context["theme_url"] ?? null);
        echo "/css/custom.css\" rel=\"stylesheet\">
    <!--[if lt IE 9]>
    <script src=\"";
        // line 25
        echo ($context["theme_url"] ?? null);
        echo "/js/html5shiv.js\"></script>
    <script src=\"";
        // line 26
        echo ($context["theme_url"] ?? null);
        echo "/js/respond.min.js\"></script>
    <![endif]-->

</head>
<body>
<header class=\"navbar navbar-inverse navbar-fixed-top wet-asphalt\" role=\"banner\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"";
        // line 40
        echo ($context["base_url"] ?? null);
        echo "\">";
        echo ($context["site_title"] ?? null);
        echo "</a>
        </div>
        <div class=\"collapse navbar-collapse\">
            <ul class=\"nav navbar-nav navbar-right\">
                ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["page_navigation"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 45
            echo "                    ";
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["page"], "sub", array(), "array", true, true)) {
                // line 46
                echo "                        ";
                $context["subpageactive"] = 0;
                // line 47
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["page"], "sub", array(), "array"));
                foreach ($context['_seq'] as $context["_key"] => $context["subpage"]) {
                    // line 48
                    echo "                            ";
                    if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["current_page"] ?? null), "url", array()) == twig_get_attribute($this->env, $this->getSourceContext(), $context["subpage"], "url", array()))) {
                        $context["subpageactive"] = 1;
                    }
                    // line 49
                    echo "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subpage'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 50
                echo "
                        <li class=\"dropdown ";
                // line 51
                if ((($context["subpageactive"] ?? null) == 1)) {
                    echo "active";
                }
                echo "\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">";
                // line 52
                echo twig_get_attribute($this->env, $this->getSourceContext(), $context["page"], "title", array());
                echo " <i class=\"fa fa-angle-down\"></i></a>
                            <ul class=\"dropdown-menu\">
                                ";
                // line 54
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["page"], "sub", array(), "array"));
                foreach ($context['_seq'] as $context["_key"] => $context["subpage"]) {
                    // line 55
                    echo "                                    <li";
                    if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["current_page"] ?? null), "url", array()) == twig_get_attribute($this->env, $this->getSourceContext(), $context["subpage"], "url", array()))) {
                        echo " class=\"active\"";
                    }
                    echo "><a href=\"";
                    echo twig_get_attribute($this->env, $this->getSourceContext(), $context["subpage"], "url", array());
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->getSourceContext(), $context["subpage"], "title", array());
                    echo "</a></li>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subpage'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 57
                echo "                            </ul>
                        </li>
                    ";
            } else {
                // line 60
                echo "                        <li";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["current_page"] ?? null), "url", array()) == twig_get_attribute($this->env, $this->getSourceContext(), $context["page"], "url", array()))) {
                    echo " class=\"active\"";
                }
                echo "><a href=\"";
                echo twig_get_attribute($this->env, $this->getSourceContext(), $context["page"], "url", array());
                echo "\">";
                echo twig_get_attribute($this->env, $this->getSourceContext(), $context["page"], "title", array());
                echo "</a></li>
                    ";
            }
            // line 62
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "            </ul>
        </div>
    </div>
</header><!--/header-->


<section id=\"content\" class=\"container\">
";
    }

    public function getTemplateName()
    {
        return "head.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 63,  189 => 62,  177 => 60,  172 => 57,  157 => 55,  153 => 54,  148 => 52,  142 => 51,  139 => 50,  133 => 49,  128 => 48,  123 => 47,  120 => 46,  117 => 45,  113 => 44,  104 => 40,  87 => 26,  83 => 25,  78 => 23,  74 => 22,  70 => 21,  66 => 20,  60 => 17,  55 => 15,  52 => 14,  46 => 12,  44 => 11,  38 => 10,  36 => 9,  28 => 8,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>{% if meta.title %}{{ meta.title }} | {% endif %}{{ site_title }}</title>
    {% if meta.description %}
        <meta name=\"description\" content=\"{{ meta.description }}\">
    {% endif %}{% if meta.robots %}
        <meta name=\"robots\" content=\"{{ meta.robots }}\">
    {% endif %}

    <link href=\"{{ base_url }}/feed\" type=\"application/atom+xml\" rel=\"alternate\" title=\"ATOM Feed\" />

    <link href=\"{{ theme_url }}/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css\">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,700,700italic&subset=latin,cyrillic,cyrillic-ext' rel='stylesheet' type='text/css'>
    <link href=\"{{ theme_url }}/css/animate.css\" rel=\"stylesheet\">
    <link href=\"{{ theme_url }}/swipebox/swipebox.css\" rel=\"stylesheet\">
    <link href=\"{{ theme_url }}/css/main.css\" rel=\"stylesheet\">
    <link href=\"{{ theme_url }}/css/custom.css\" rel=\"stylesheet\">
    <!--[if lt IE 9]>
    <script src=\"{{ theme_url }}/js/html5shiv.js\"></script>
    <script src=\"{{ theme_url }}/js/respond.min.js\"></script>
    <![endif]-->

</head>
<body>
<header class=\"navbar navbar-inverse navbar-fixed-top wet-asphalt\" role=\"banner\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"{{ base_url }}\">{{ site_title }}</a>
        </div>
        <div class=\"collapse navbar-collapse\">
            <ul class=\"nav navbar-nav navbar-right\">
                {% for page in page_navigation %}
                    {% if page['sub'] is defined %}
                        {% set subpageactive = 0 %}
                        {% for subpage in page['sub'] %}
                            {%  if  current_page.url == subpage.url%}{% set subpageactive = 1 %}{% endif %}
                        {% endfor %}

                        <li class=\"dropdown {% if subpageactive == 1 %}active{% endif %}\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">{{ page.title }} <i class=\"fa fa-angle-down\"></i></a>
                            <ul class=\"dropdown-menu\">
                                {% for subpage in page['sub'] %}
                                    <li{%  if  current_page.url == subpage.url%} class=\"active\"{% endif %}><a href=\"{{ subpage.url }}\">{{ subpage.title }}</a></li>
                                {% endfor %}
                            </ul>
                        </li>
                    {% else %}
                        <li{%  if  current_page.url == page.url%} class=\"active\"{% endif %}><a href=\"{{ page.url }}\">{{ page.title }}</a></li>
                    {% endif %}
                {% endfor %}
            </ul>
        </div>
    </div>
</header><!--/header-->


<section id=\"content\" class=\"container\">
", "head.twig", "/Users/nightman/Dropbox/My Site/themes/flat-theme/head.twig");
    }
}
