<?php

/* head.twig */
class __TwigTemplate_9e60293f744dcf1b1ec5d05624ae321dbbf7092874939e48ae9a6535fe543a8e extends Twig_Template
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
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["meta"] ?? null), "title", array())) {
            echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["meta"] ?? null), "title", array());
            echo " | ";
        }
        echo ($context["site_title"] ?? null);
        echo "</title>
    <meta charset=\"utf-8\"/>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    ";
        // line 8
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["meta"] ?? null), "description", array())) {
            // line 9
            echo "        <meta name=\"description\" content=\"";
            echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["meta"] ?? null), "description", array());
            echo "\">
    ";
        }
        // line 10
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["meta"] ?? null), "robots", array())) {
            // line 11
            echo "        <meta name=\"robots\" content=\"";
            echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["meta"] ?? null), "robots", array());
            echo "\">
    ";
        }
        // line 13
        echo "
    ";
        // line 14
        if (($context["SITEDEBUG"] ?? null)) {
            // line 15
            echo "        <script type=\"text/javascript\">
            var timerStart = Date.now();
        </script>
    ";
        }
        // line 19
        echo "

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,700,700italic|Roboto+Slab&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\">

    <link href=\"";
        // line 24
        echo ($context["theme_url"] ?? null);
        echo "/css/animate.min.css\" rel=\"stylesheet\">
    <link href=\"";
        // line 25
        echo ($context["theme_url"] ?? null);
        echo "/css/template.css\" rel=\"stylesheet\">
    <link href=\"";
        // line 26
        echo ($context["theme_url"] ?? null);
        echo "/TouchNSwipe/touchnswipe.css\" rel=\"stylesheet\">
    <link href=\"";
        // line 27
        echo ($context["theme_url"] ?? null);
        echo "/TouchNSwipe/fullscreen_popup.css\" rel=\"stylesheet\">
    <link href=\"";
        // line 28
        echo ($context["theme_url"] ?? null);
        echo "/css/custom.css\" rel=\"stylesheet\">
    ";
        // line 32
        echo "
    <link rel=\"manifest\" href=\"";
        // line 33
        echo ($context["theme_url"] ?? null);
        echo "/manifest.json\">
    <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">


    <!--[if lt IE 9]>
    <script src=\"";
        // line 38
        echo ($context["theme_url"] ?? null);
        echo "/js/ie/html5shiv.js\"></script>
    <script src=\"";
        // line 39
        echo ($context["theme_url"] ?? null);
        echo "/js/ie/respond.min.js\"></script>
    <script src=\"";
        // line 40
        echo ($context["theme_url"] ?? null);
        echo "/js/ie/excanvas.js\"></script>
    <![endif]-->

    ";
        // line 44
        echo "
    <link href=\"";
        // line 45
        echo ($context["base_url"] ?? null);
        echo "/feed\" type=\"application/atom+xml\" rel=\"alternate\" title=\"";
        echo ($context["site_title"] ?? null);
        echo " Full RSS Feed\"/>

    <!-- favicon from http://realfavicongenerator.net/ -->
    <link rel=\"apple-touch-icon\" sizes=\"57x57\" href=\"";
        // line 48
        echo ($context["theme_url"] ?? null);
        echo "/favicon/apple-touch-icon-57x57.png\">
    <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"";
        // line 49
        echo ($context["theme_url"] ?? null);
        echo "/favicon/apple-touch-icon-114x114.png\">
    <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"";
        // line 50
        echo ($context["theme_url"] ?? null);
        echo "/favicon/apple-touch-icon-72x72.png\">
    <link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"";
        // line 51
        echo ($context["theme_url"] ?? null);
        echo "/favicon/apple-touch-icon-144x144.png\">
    <link rel=\"apple-touch-icon\" sizes=\"60x60\" href=\"";
        // line 52
        echo ($context["theme_url"] ?? null);
        echo "/favicon/apple-touch-icon-60x60.png\">
    <link rel=\"apple-touch-icon\" sizes=\"120x120\" href=\"";
        // line 53
        echo ($context["theme_url"] ?? null);
        echo "/favicon/apple-touch-icon-120x120.png\">
    <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"";
        // line 54
        echo ($context["theme_url"] ?? null);
        echo "/favicon/apple-touch-icon-76x76.png\">
    <link rel=\"apple-touch-icon\" sizes=\"152x152\" href=\"";
        // line 55
        echo ($context["theme_url"] ?? null);
        echo "/favicon/apple-touch-icon-152x152.png\">
    <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"";
        // line 56
        echo ($context["theme_url"] ?? null);
        echo "/favicon/apple-touch-icon-180x180.png\">
    <meta name=\"apple-mobile-web-app-title\" content=\"";
        // line 57
        echo ($context["site_title"] ?? null);
        echo "\">
    <link rel=\"shortcut icon\" href=\"";
        // line 58
        echo ($context["theme_url"] ?? null);
        echo "/favicon/favicon.ico\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 59
        echo ($context["theme_url"] ?? null);
        echo "/favicon/favicon-192x192.png\" sizes=\"192x192\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 60
        echo ($context["theme_url"] ?? null);
        echo "/favicon/favicon-160x160.png\" sizes=\"160x160\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 61
        echo ($context["theme_url"] ?? null);
        echo "/favicon/favicon-96x96.png\" sizes=\"96x96\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 62
        echo ($context["theme_url"] ?? null);
        echo "/favicon/favicon-16x16.png\" sizes=\"16x16\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 63
        echo ($context["theme_url"] ?? null);
        echo "/favicon/favicon-32x32.png\" sizes=\"32x32\">
    <meta name=\"msapplication-TileColor\" content=\"#2b5797\">
    <meta name=\"msapplication-TileImage\" content=\"";
        // line 65
        echo ($context["theme_url"] ?? null);
        echo "/favicon/mstile-144x144.png\">
    <meta name=\"msapplication-config\" content=\"";
        // line 66
        echo ($context["theme_url"] ?? null);
        echo "/favicon/browserconfig.xml\">
    <meta name=\"application-name\" content=\"";
        // line 67
        echo ($context["site_title"] ?? null);
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
        // line 94
        echo ($context["base_url"] ?? null);
        echo "\">";
        echo ($context["site_title"] ?? null);
        echo "</a></h1>
                </div>
                <div class=\"collapse navbar-collapse\" id=\"navbar-collapse-1\">
                    <ul id=\"navigation\" class=\"nav navbar-nav navbar-right\">
                        ";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["page_navigation"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 99
            echo "                            ";
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["page"], "sub", array(), "array", true, true)) {
                // line 100
                echo "                                ";
                $context["subpageactive"] = 0;
                // line 101
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["page"], "sub", array(), "array"));
                foreach ($context['_seq'] as $context["_key"] => $context["subpage"]) {
                    // line 102
                    echo "                                    ";
                    if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["current_page"] ?? null), "url", array()) == twig_get_attribute($this->env, $this->getSourceContext(), $context["subpage"], "url", array()))) {
                        $context["subpageactive"] = 1;
                    }
                    // line 103
                    echo "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subpage'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 104
                echo "
                                <li class=\"dropdown ";
                // line 105
                if ((($context["subpageactive"] ?? null) == 1)) {
                    echo "active";
                }
                echo "\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">";
                // line 106
                echo twig_get_attribute($this->env, $this->getSourceContext(), $context["page"], "title", array());
                echo " <i class=\"fa fa-angle-down\"></i></a>
                                    <ul class=\"dropdown-menu\">
                                        ";
                // line 108
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["page"], "sub", array(), "array"));
                foreach ($context['_seq'] as $context["_key"] => $context["subpage"]) {
                    // line 109
                    echo "                                            <li";
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
                // line 111
                echo "                                    </ul>
                                </li>
                            ";
            } else {
                // line 114
                echo "                                <li";
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
            // line 116
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        echo "                        ";
        // line 122
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
        return array (  321 => 122,  319 => 117,  313 => 116,  301 => 114,  296 => 111,  281 => 109,  277 => 108,  272 => 106,  266 => 105,  263 => 104,  257 => 103,  252 => 102,  247 => 101,  244 => 100,  241 => 99,  237 => 98,  228 => 94,  198 => 67,  194 => 66,  190 => 65,  185 => 63,  181 => 62,  177 => 61,  173 => 60,  169 => 59,  165 => 58,  161 => 57,  157 => 56,  153 => 55,  149 => 54,  145 => 53,  141 => 52,  137 => 51,  133 => 50,  129 => 49,  125 => 48,  117 => 45,  114 => 44,  108 => 40,  104 => 39,  100 => 38,  92 => 33,  89 => 32,  85 => 28,  81 => 27,  77 => 26,  73 => 25,  69 => 24,  62 => 19,  56 => 15,  54 => 14,  51 => 13,  45 => 11,  43 => 10,  37 => 9,  35 => 8,  24 => 4,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "head.twig", "/Users/nightman/Dropbox/My Site/themes/nm2015/head.twig");
    }
}
