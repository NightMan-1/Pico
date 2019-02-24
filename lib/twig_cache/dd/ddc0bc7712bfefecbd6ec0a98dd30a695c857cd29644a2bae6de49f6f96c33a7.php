<?php

/* head.twig */
class __TwigTemplate_ce1242e3994ffb5f4b6fa73980badd7acaba27e9181db15bd06ef9d3c2b92934 extends Twig_Template
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
<html lang=\"ru\" class=\"tr-coretext tr-aa-subpixel\">
<head>
    <title>";
        // line 4
        if ($this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), "title", array())) {
            echo $this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), "title", array());
            echo " | ";
        }
        echo (isset($context["site_title"]) ? $context["site_title"] : null);
        echo "</title>
    <meta charset=\"utf-8\"/>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    ";
        // line 8
        if ($this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), "description", array())) {
            // line 9
            echo "        <meta name=\"description\" content=\"";
            echo $this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), "description", array());
            echo "\">
    ";
        }
        // line 10
        if ($this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), "robots", array())) {
            // line 11
            echo "        <meta name=\"robots\" content=\"";
            echo $this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), "robots", array());
            echo "\">
    ";
        }
        // line 13
        echo "
    ";
        // line 14
        if ((isset($context["SITEDEBUG"]) ? $context["SITEDEBUG"] : null)) {
            // line 15
            echo "        <script type=\"text/javascript\">
            var timerStart = Date.now();
        </script>
    ";
        }
        // line 19
        echo "
<!--
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,700,700italic|Roboto+Slab&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
-->
    <link href=\"https://fonts.googleapis.com/css?family=Istok+Web:400,400i,700,700i|Playfair+Display:400,400i,700,700i\" rel=\"stylesheet\">
    <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\">

    <link rel=\"stylesheet\" href=\"";
        // line 26
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/css/animate.min.css\" media=\"none\" onload=\"if(media!='all')media='all'\">
    <noscript><link rel=\"stylesheet\" href=\"";
        // line 27
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/css/animate.min.css\"></noscript>
    <link rel=\"stylesheet\" href=\"";
        // line 28
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/css/template.min.css\" media=\"none\" onload=\"if(media!='all')media='all'\">
    <noscript><link rel=\"stylesheet\" href=\"";
        // line 29
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/css/template.min.css\"></noscript>
    <link rel=\"stylesheet\" href=\"";
        // line 30
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/lightgallery/css/lightgallery.min.css\" media=\"none\" onload=\"if(media!='all')media='all'\">
    <noscript><link rel=\"stylesheet\" href=\"";
        // line 31
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/lightgallery/css/lightgallery.min.css\"></noscript>
    <link rel=\"stylesheet\" href=\"";
        // line 32
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/css/custom.css\" media=\"none\" onload=\"if(media!='all')media='all'\">
    <noscript><link rel=\"stylesheet\" href=\"";
        // line 33
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/css/custom.css\"></noscript>


    <link rel=\"manifest\" href=\"";
        // line 36
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/manifest.json\">
    <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">


    <!--[if lt IE 9]>
    <script src=\"";
        // line 41
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/js/ie/html5shiv.js\"></script>
    <script src=\"";
        // line 42
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/js/ie/respond.min.js\"></script>
    <script src=\"";
        // line 43
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/js/ie/excanvas.js\"></script>
    <![endif]-->

    ";
        // line 47
        echo "
    <link href=\"";
        // line 48
        echo (isset($context["base_url"]) ? $context["base_url"] : null);
        echo "/feed\" type=\"application/atom+xml\" rel=\"alternate\" title=\"";
        echo (isset($context["site_title"]) ? $context["site_title"] : null);
        echo " Full RSS Feed\"/>

    <!-- favicon from http://realfavicongenerator.net/ -->
    <link rel=\"apple-touch-icon\" sizes=\"57x57\" href=\"";
        // line 51
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/favicon/apple-touch-icon-57x57.png\">
    <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"";
        // line 52
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/favicon/apple-touch-icon-114x114.png\">
    <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"";
        // line 53
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/favicon/apple-touch-icon-72x72.png\">
    <link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"";
        // line 54
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/favicon/apple-touch-icon-144x144.png\">
    <link rel=\"apple-touch-icon\" sizes=\"60x60\" href=\"";
        // line 55
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/favicon/apple-touch-icon-60x60.png\">
    <link rel=\"apple-touch-icon\" sizes=\"120x120\" href=\"";
        // line 56
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/favicon/apple-touch-icon-120x120.png\">
    <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"";
        // line 57
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/favicon/apple-touch-icon-76x76.png\">
    <link rel=\"apple-touch-icon\" sizes=\"152x152\" href=\"";
        // line 58
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/favicon/apple-touch-icon-152x152.png\">
    <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"";
        // line 59
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/favicon/apple-touch-icon-180x180.png\">
    <meta name=\"apple-mobile-web-app-title\" content=\"";
        // line 60
        echo (isset($context["site_title"]) ? $context["site_title"] : null);
        echo "\">
    <link rel=\"shortcut icon\" href=\"";
        // line 61
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/favicon/favicon.ico\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 62
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/favicon/favicon-192x192.png\" sizes=\"192x192\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 63
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/favicon/favicon-160x160.png\" sizes=\"160x160\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 64
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/favicon/favicon-96x96.png\" sizes=\"96x96\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 65
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/favicon/favicon-16x16.png\" sizes=\"16x16\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 66
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/favicon/favicon-32x32.png\" sizes=\"32x32\">
    <meta name=\"msapplication-TileColor\" content=\"#2b5797\">
    <meta name=\"msapplication-TileImage\" content=\"";
        // line 68
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/favicon/mstile-144x144.png\">
    <meta name=\"msapplication-config\" content=\"";
        // line 69
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/favicon/browserconfig.xml\">
    <meta name=\"application-name\" content=\"";
        // line 70
        echo (isset($context["site_title"]) ? $context["site_title"] : null);
        echo "\">

</head>

<body>
<div id=\"page\">
    <header id=\"header\" class=\"site-header\">
        <nav id=\"topbar\" class=\"site-topbar visible-lg visible-md\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-8\"><small><i>\"Я не терпел поражений. Я просто нашел 10 000 способов, которые не работают.\" Томас Эдисон</i></small></div>
                    <div class=\"social-links col-sm-4\">
                        <a href=\"https://plus.google.com/+SergeyGurinovich\" target=\"_blank\"><i class=\"fa fa-google-plus\"></i></a>
                        <a href=\"http://www.facebook.com/sergey.rus\" target=\"_blank\"><i class=\"fa fa-facebook\"></i></a>
                        <a href=\"http://vkontakte.ru/sergeygur\" target=\"_blank\"><i class=\"fa fa-vk\"></i></a>
                    </div>
                </div>
            </div>
        </nav>

        <nav id=\"navbar\" class=\"site-navbar navbar navbar-static-top one-page-nav\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-collapse-1\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <i class=\"fa fa-bars\"></i>
                    </button>
                    <h1 class=\"navbar-brand\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAC4AAAAqCAMAAAD79pkTAAABxVBMVEXoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDxQ5qMCAAAAlnRSTlMAAQIEBQYHCAkKCwwNDg8QERITFhcYGRocHyEiJicpKi0uMDU2ODk6Ozw9Pj9AQURFR0lKTE1QU1ZZW1xdXmBiZGVoaWttbnFzdHV3fX+BiYqLjpGSlZiZmpudoKGio6Spq6yvsLGztLW2t7m7vL2+wMLDxMXGysvMzdHS09XX2Nnd3+Lj5enq6+/x8vP09fb3+Pn7/P4WnZXzAAABqElEQVR4AY3QCUMMcRgG8GdttFHsoqVE7vuQg3UvyZGDLQeRqJbkWAexckRF0bSVPJ9Xa3bsO807O//fR/ih4tLtRTB3IEteKYOpvV8nyclzMFTbw7zRkzCzjbbBXTDSyIJncZhooeMiTLTTMbQZwapz/K9rMQIdopAKI8g9CtZ+BLlFKR1BgFeUrO0orfIlXc7AEe/YAq+Fn+lyGbbQR3IDFBm67ME/90l+13arXlPqR94R5j2BomaMUgLAatqSUCQp9QK4QdtAJRQpSjuxlY4kNG8ptKGbBcMnyqCoo5A7OMCCU3GoblL4MkJbUywK1fxherVWrYKP4xQmJjjj/dJ18PWUReOfpkmuX7MSvmrGWfQuQ3auSKCEwxQetfFsdQNK6aCQaSxHeG3D8vJlYeii/RR+vmjvI6daQtEYdDuoeLgkAl3FD842PcY0/PRQ88v72dx5dFM8RY83TacvWENw2/h4iprnuzFjXjNc5mSpyF2vhaqbHlY6EYEuNkLhW9eD1mP1Yfiq/yPizocQJMsCq7cOwe4w7/fg3bkwseDDaN/Va/vg6y92yImPFQMqVAAAAABJRU5ErkJggg==\" class=\"logo\"> <a href=\"";
        // line 97
        echo (isset($context["base_url"]) ? $context["base_url"] : null);
        echo "\">";
        echo (isset($context["site_title"]) ? $context["site_title"] : null);
        echo "</a></h1>
                </div>
                <div class=\"collapse navbar-collapse\" id=\"navbar-collapse-1\">
                    <ul id=\"navigation\" class=\"nav navbar-nav navbar-right\">
                        ";
        // line 101
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["page_navigation"]) ? $context["page_navigation"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 102
            echo "                            ";
            if ($this->getAttribute($context["page"], "sub", array(), "array", true, true)) {
                // line 103
                echo "                                ";
                $context["subpageactive"] = 0;
                // line 104
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["page"], "sub", array(), "array"));
                foreach ($context['_seq'] as $context["_key"] => $context["subpage"]) {
                    // line 105
                    echo "                                    ";
                    if (($this->getAttribute((isset($context["current_page"]) ? $context["current_page"] : null), "url", array()) == $this->getAttribute($context["subpage"], "url", array()))) {
                        $context["subpageactive"] = 1;
                    }
                    // line 106
                    echo "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subpage'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 107
                echo "
                                <li class=\"dropdown ";
                // line 108
                if (((isset($context["subpageactive"]) ? $context["subpageactive"] : null) == 1)) {
                    echo "active";
                }
                echo "\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">";
                // line 109
                echo $this->getAttribute($context["page"], "title", array());
                echo " <i class=\"fa fa-angle-down\"></i></a>
                                    <ul class=\"dropdown-menu\">
                                        ";
                // line 111
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["page"], "sub", array(), "array"));
                foreach ($context['_seq'] as $context["_key"] => $context["subpage"]) {
                    // line 112
                    echo "                                            <li";
                    if (($this->getAttribute((isset($context["current_page"]) ? $context["current_page"] : null), "url", array()) == $this->getAttribute($context["subpage"], "url", array()))) {
                        echo " class=\"active\"";
                    }
                    echo "><a href=\"";
                    echo $this->getAttribute($context["subpage"], "url", array());
                    echo "\">";
                    echo $this->getAttribute($context["subpage"], "title", array());
                    echo "</a></li>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subpage'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 114
                echo "                                    </ul>
                                </li>
                            ";
            } else {
                // line 117
                echo "                                <li";
                if (($this->getAttribute((isset($context["current_page"]) ? $context["current_page"] : null), "url", array()) == $this->getAttribute($context["page"], "url", array()))) {
                    echo " class=\"active\"";
                }
                echo "><a href=\"";
                echo $this->getAttribute($context["page"], "url", array());
                echo "\">";
                echo $this->getAttribute($context["page"], "title", array());
                echo "</a></li>
                            ";
            }
            // line 119
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "                        ";
        // line 125
        echo "                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main id=\"main-\" class=\"site-main\">
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
        return array (  334 => 125,  332 => 120,  326 => 119,  314 => 117,  309 => 114,  294 => 112,  290 => 111,  285 => 109,  279 => 108,  276 => 107,  270 => 106,  265 => 105,  260 => 104,  257 => 103,  254 => 102,  250 => 101,  241 => 97,  211 => 70,  207 => 69,  203 => 68,  198 => 66,  194 => 65,  190 => 64,  186 => 63,  182 => 62,  178 => 61,  174 => 60,  170 => 59,  166 => 58,  162 => 57,  158 => 56,  154 => 55,  150 => 54,  146 => 53,  142 => 52,  138 => 51,  130 => 48,  127 => 47,  121 => 43,  117 => 42,  113 => 41,  105 => 36,  99 => 33,  95 => 32,  91 => 31,  87 => 30,  83 => 29,  79 => 28,  75 => 27,  71 => 26,  62 => 19,  56 => 15,  54 => 14,  51 => 13,  45 => 11,  43 => 10,  37 => 9,  35 => 8,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"ru\" class=\"tr-coretext tr-aa-subpixel\">
<head>
    <title>{% if meta.title %}{{ meta.title }} | {% endif %}{{ site_title }}</title>
    <meta charset=\"utf-8\"/>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    {% if meta.description %}
        <meta name=\"description\" content=\"{{ meta.description }}\">
    {% endif %}{% if meta.robots %}
        <meta name=\"robots\" content=\"{{ meta.robots }}\">
    {% endif %}

    {% if SITEDEBUG %}
        <script type=\"text/javascript\">
            var timerStart = Date.now();
        </script>
    {% endif %}

<!--
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,700,700italic|Roboto+Slab&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
-->
    <link href=\"https://fonts.googleapis.com/css?family=Istok+Web:400,400i,700,700i|Playfair+Display:400,400i,700,700i\" rel=\"stylesheet\">
    <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\">

    <link rel=\"stylesheet\" href=\"{{ theme_url }}/css/animate.min.css\" media=\"none\" onload=\"if(media!='all')media='all'\">
    <noscript><link rel=\"stylesheet\" href=\"{{ theme_url }}/css/animate.min.css\"></noscript>
    <link rel=\"stylesheet\" href=\"{{ theme_url }}/css/template.min.css\" media=\"none\" onload=\"if(media!='all')media='all'\">
    <noscript><link rel=\"stylesheet\" href=\"{{ theme_url }}/css/template.min.css\"></noscript>
    <link rel=\"stylesheet\" href=\"{{ theme_url }}/lightgallery/css/lightgallery.min.css\" media=\"none\" onload=\"if(media!='all')media='all'\">
    <noscript><link rel=\"stylesheet\" href=\"{{ theme_url }}/lightgallery/css/lightgallery.min.css\"></noscript>
    <link rel=\"stylesheet\" href=\"{{ theme_url }}/css/custom.css\" media=\"none\" onload=\"if(media!='all')media='all'\">
    <noscript><link rel=\"stylesheet\" href=\"{{ theme_url }}/css/custom.css\"></noscript>


    <link rel=\"manifest\" href=\"{{ theme_url }}/manifest.json\">
    <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">


    <!--[if lt IE 9]>
    <script src=\"{{ theme_url }}/js/ie/html5shiv.js\"></script>
    <script src=\"{{ theme_url }}/js/ie/respond.min.js\"></script>
    <script src=\"{{ theme_url }}/js/ie/excanvas.js\"></script>
    <![endif]-->

    {#<script type=\"text/javascript\" src=\"{{ theme_url }}/js/pace.min.js\"></script>#}

    <link href=\"{{ base_url }}/feed\" type=\"application/atom+xml\" rel=\"alternate\" title=\"{{ site_title }} Full RSS Feed\"/>

    <!-- favicon from http://realfavicongenerator.net/ -->
    <link rel=\"apple-touch-icon\" sizes=\"57x57\" href=\"{{ theme_url }}/favicon/apple-touch-icon-57x57.png\">
    <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"{{ theme_url }}/favicon/apple-touch-icon-114x114.png\">
    <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"{{ theme_url }}/favicon/apple-touch-icon-72x72.png\">
    <link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"{{ theme_url }}/favicon/apple-touch-icon-144x144.png\">
    <link rel=\"apple-touch-icon\" sizes=\"60x60\" href=\"{{ theme_url }}/favicon/apple-touch-icon-60x60.png\">
    <link rel=\"apple-touch-icon\" sizes=\"120x120\" href=\"{{ theme_url }}/favicon/apple-touch-icon-120x120.png\">
    <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"{{ theme_url }}/favicon/apple-touch-icon-76x76.png\">
    <link rel=\"apple-touch-icon\" sizes=\"152x152\" href=\"{{ theme_url }}/favicon/apple-touch-icon-152x152.png\">
    <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"{{ theme_url }}/favicon/apple-touch-icon-180x180.png\">
    <meta name=\"apple-mobile-web-app-title\" content=\"{{ site_title }}\">
    <link rel=\"shortcut icon\" href=\"{{ theme_url }}/favicon/favicon.ico\">
    <link rel=\"icon\" type=\"image/png\" href=\"{{ theme_url }}/favicon/favicon-192x192.png\" sizes=\"192x192\">
    <link rel=\"icon\" type=\"image/png\" href=\"{{ theme_url }}/favicon/favicon-160x160.png\" sizes=\"160x160\">
    <link rel=\"icon\" type=\"image/png\" href=\"{{ theme_url }}/favicon/favicon-96x96.png\" sizes=\"96x96\">
    <link rel=\"icon\" type=\"image/png\" href=\"{{ theme_url }}/favicon/favicon-16x16.png\" sizes=\"16x16\">
    <link rel=\"icon\" type=\"image/png\" href=\"{{ theme_url }}/favicon/favicon-32x32.png\" sizes=\"32x32\">
    <meta name=\"msapplication-TileColor\" content=\"#2b5797\">
    <meta name=\"msapplication-TileImage\" content=\"{{ theme_url }}/favicon/mstile-144x144.png\">
    <meta name=\"msapplication-config\" content=\"{{ theme_url }}/favicon/browserconfig.xml\">
    <meta name=\"application-name\" content=\"{{ site_title }}\">

</head>

<body>
<div id=\"page\">
    <header id=\"header\" class=\"site-header\">
        <nav id=\"topbar\" class=\"site-topbar visible-lg visible-md\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-8\"><small><i>\"Я не терпел поражений. Я просто нашел 10 000 способов, которые не работают.\" Томас Эдисон</i></small></div>
                    <div class=\"social-links col-sm-4\">
                        <a href=\"https://plus.google.com/+SergeyGurinovich\" target=\"_blank\"><i class=\"fa fa-google-plus\"></i></a>
                        <a href=\"http://www.facebook.com/sergey.rus\" target=\"_blank\"><i class=\"fa fa-facebook\"></i></a>
                        <a href=\"http://vkontakte.ru/sergeygur\" target=\"_blank\"><i class=\"fa fa-vk\"></i></a>
                    </div>
                </div>
            </div>
        </nav>

        <nav id=\"navbar\" class=\"site-navbar navbar navbar-static-top one-page-nav\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-collapse-1\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <i class=\"fa fa-bars\"></i>
                    </button>
                    <h1 class=\"navbar-brand\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAC4AAAAqCAMAAAD79pkTAAABxVBMVEXoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDzoTDxQ5qMCAAAAlnRSTlMAAQIEBQYHCAkKCwwNDg8QERITFhcYGRocHyEiJicpKi0uMDU2ODk6Ozw9Pj9AQURFR0lKTE1QU1ZZW1xdXmBiZGVoaWttbnFzdHV3fX+BiYqLjpGSlZiZmpudoKGio6Spq6yvsLGztLW2t7m7vL2+wMLDxMXGysvMzdHS09XX2Nnd3+Lj5enq6+/x8vP09fb3+Pn7/P4WnZXzAAABqElEQVR4AY3QCUMMcRgG8GdttFHsoqVE7vuQg3UvyZGDLQeRqJbkWAexckRF0bSVPJ9Xa3bsO807O//fR/ih4tLtRTB3IEteKYOpvV8nyclzMFTbw7zRkzCzjbbBXTDSyIJncZhooeMiTLTTMbQZwapz/K9rMQIdopAKI8g9CtZ+BLlFKR1BgFeUrO0orfIlXc7AEe/YAq+Fn+lyGbbQR3IDFBm67ME/90l+13arXlPqR94R5j2BomaMUgLAatqSUCQp9QK4QdtAJRQpSjuxlY4kNG8ptKGbBcMnyqCoo5A7OMCCU3GoblL4MkJbUywK1fxherVWrYKP4xQmJjjj/dJ18PWUReOfpkmuX7MSvmrGWfQuQ3auSKCEwxQetfFsdQNK6aCQaSxHeG3D8vJlYeii/RR+vmjvI6daQtEYdDuoeLgkAl3FD842PcY0/PRQ88v72dx5dFM8RY83TacvWENw2/h4iprnuzFjXjNc5mSpyF2vhaqbHlY6EYEuNkLhW9eD1mP1Yfiq/yPizocQJMsCq7cOwe4w7/fg3bkwseDDaN/Va/vg6y92yImPFQMqVAAAAABJRU5ErkJggg==\" class=\"logo\"> <a href=\"{{ base_url }}\">{{ site_title }}</a></h1>
                </div>
                <div class=\"collapse navbar-collapse\" id=\"navbar-collapse-1\">
                    <ul id=\"navigation\" class=\"nav navbar-nav navbar-right\">
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
                        {#
                        {% for p in PAGES|sort(attribute='sortorder') %}
                            <li class=\"{% if navpage == p.slug %}active{% endif %} {% if p == page %}active{% endif %}\"><a href=\"{{ base_url }}/{{ p.url }}\">{{ p.title }}</a></li>
                        {% endfor %}
                        #}
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main id=\"main-\" class=\"site-main\">
", "head.twig", "D:\\Dropbox\\My Site\\themes\\nm2015\\head.twig");
    }
}
