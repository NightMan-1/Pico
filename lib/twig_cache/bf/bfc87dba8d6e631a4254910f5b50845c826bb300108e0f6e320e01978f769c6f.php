<?php

/* blog-index.html */
class __TwigTemplate_38765637d308408b46dd26f2a15b6a74ca72795a9e3d47afeaaa7593cac0ee6d extends Twig_Template
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
        $this->loadTemplate("head.twig", "blog-index.html", 1)->display($context);
        // line 2
        echo "


<section class=\"section section-center- article\">
    <div class=\"container\">

        ";
        // line 8
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["filter"] ?? null), "name", array())) {
            // line 9
            echo "        <h2 class=\"section-title\" style=\"margin-bottom: 0; margin-top: 0.7em\"><span>Раздел: ";
            echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["filter"] ?? null), "name", array());
            echo "</span></h2>
        ";
        }
        // line 11
        echo "
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["paged_pages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 13
            echo "        <div class=\"row\">
            <div class=\"col-lg-2 visible-lg\"></div>
            <div class=\"col-xs-12 col-lg-8\">
                <article class=\"post appear\" data-ride=\"animated\" data-animation=\"fadeIn\" data-delay=\"100\">
                    <div class=\"row\">
                        <div class=\"col-sm-9\">
                            <h3 class=\"pull-left\"><a href=\"";
            // line 19
            echo twig_get_attribute($this->env, $this->getSourceContext(), $context["article"], "url", array());
            echo "\" rel=\"bookmark\" title=\"Permalink to ";
            echo strip_tags(twig_get_attribute($this->env, $this->getSourceContext(), $context["article"], "title", array()));
            echo "\" class=\"text-info\"><span>";
            echo twig_get_attribute($this->env, $this->getSourceContext(), $context["article"], "title", array());
            echo "</span></a></h3>
                        </div>

                        <div class=\"col-sm-3\">
                            <div class=\"pull-right clocktag\">
                                <i class=\"text-muted fa fa-clock-o\"></i>
                                <span class=\"text-danger\"><abbr class=\"published\" title=\"";
            // line 25
            echo twig_localized_date_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["article"], "date", array()), "full", "full", ($context["locale"] ?? null));
            echo "\">";
            echo twig_localized_date_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["article"], "date", array()), "medium", "none", ($context["locale"] ?? null));
            echo "</abbr></span>
                            </div>
                        </div>
                    </div>

                    ";
            // line 30
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["article"], "thumbbig", array())) {
                // line 31
                echo "                    <a href=\"";
                echo twig_get_attribute($this->env, $this->getSourceContext(), $context["article"], "url", array());
                echo "\" class=\"thumbnail-\">
                        <img alt=\"";
                // line 32
                echo strip_tags(twig_get_attribute($this->env, $this->getSourceContext(), $context["article"], "title", array()));
                echo "\" src=\"";
                echo twig_get_attribute($this->env, $this->getSourceContext(), $context["article"], "thumbbig", array());
                echo "\">
                    </a>
                    ";
            }
            // line 35
            echo "
                    ";
            // line 36
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["article"], "thumbbig", array()) && twig_get_attribute($this->env, $this->getSourceContext(), $context["article"], "excerpt", array()))) {
                // line 37
                echo "                    <div class=\"m05\"></div>
                    ";
            }
            // line 39
            echo "
                    ";
            // line 40
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["article"], "excerpt", array())) {
                // line 41
                echo "                    <p>";
                echo twig_get_attribute($this->env, $this->getSourceContext(), $context["article"], "excerpt", array());
                echo "</p>
                    ";
            }
            // line 43
            echo "
                    <div class=\"panel-footer\">
                        ";
            // line 45
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["article"], "tags", array())) {
                // line 46
                echo "                            <i class=\"fa fa-tag\"></i>&nbsp;&nbsp;
                            ";
                // line 47
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["article"], "tags", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                    // line 48
                    echo "                            <a href=\"";
                    echo ($context["base_url"] ?? null);
                    echo "/";
                    echo twig_get_attribute($this->env, $this->getSourceContext(), $context["article"], "category", array());
                    echo "?tag=";
                    echo $context["tag"];
                    echo "\"><span class=\"label label-info\">";
                    echo $context["tag"];
                    echo "</span></a>&nbsp;
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 50
                echo "                        ";
            }
            // line 51
            echo "                    </div>
                </article>
            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "

        ";
        // line 58
        if ((($context["total_pages"] ?? null) > 1)) {
            // line 59
            echo "        <div class=\"row\">
            <div class=\"col-lg-2 visible-lg\"></div>
            <div class=\"col-xs-12 col-lg-8\">
                <nav role=\"navigation\">
                    <ul class=\"cd-pagination move-buttons\">
                        <li class=\"button\"><a ";
            // line 64
            if ((($context["page_number"] ?? null) == 1)) {
                echo "class=\"disabled\"";
            }
            echo " href=\"?PAGE=";
            echo (($context["page_number"] ?? null) - 1);
            echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["filter"] ?? null), "url", array());
            echo "\" aria-label=\"Previous\"><i class=\"fa fa-arrow-left\"></i> Назад</a></li>
                        ";
            // line 65
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pagination_num_links"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 66
                echo "                        <li><a ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["page"], "number", array()) == ($context["page_number"] ?? null))) {
                    echo "class=\"current\"";
                }
                echo " href=\"";
                echo twig_get_attribute($this->env, $this->getSourceContext(), $context["page"], "url", array());
                echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["filter"] ?? null), "url", array());
                echo "\">";
                echo twig_get_attribute($this->env, $this->getSourceContext(), $context["page"], "number", array());
                echo "</a></li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "                        <li class=\"button\"><a ";
            if ((($context["page_number"] ?? null) == ($context["total_pages"] ?? null))) {
                echo "class=\"disabled\"";
            }
            echo " href=\"?PAGE=";
            echo (($context["page_number"] ?? null) + 1);
            echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["filter"] ?? null), "url", array());
            echo "\" aria-label=\"Next\">Вперед <i class=\"fa fa-arrow-right\"></i></a></li>
                    </ul>
                </nav> <!-- cd-pagination-wrapper -->
            </div>
        </div>
        ";
        }
        // line 74
        echo "


        <div class=\"clearfix\"></div>
    </div>
</section>



";
        // line 83
        $this->loadTemplate("footer.twig", "blog-index.html", 83)->display($context);
    }

    public function getTemplateName()
    {
        return "blog-index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 83,  208 => 74,  193 => 68,  177 => 66,  173 => 65,  164 => 64,  157 => 59,  155 => 58,  151 => 56,  141 => 51,  138 => 50,  123 => 48,  119 => 47,  116 => 46,  114 => 45,  110 => 43,  104 => 41,  102 => 40,  99 => 39,  95 => 37,  93 => 36,  90 => 35,  82 => 32,  77 => 31,  75 => 30,  65 => 25,  52 => 19,  44 => 13,  40 => 12,  37 => 11,  31 => 9,  29 => 8,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%include \"head.twig\" %}



<section class=\"section section-center- article\">
    <div class=\"container\">

        {% if filter.name %}
        <h2 class=\"section-title\" style=\"margin-bottom: 0; margin-top: 0.7em\"><span>Раздел: {{ filter.name }}</span></h2>
        {% endif %}

        {% for article in paged_pages %}
        <div class=\"row\">
            <div class=\"col-lg-2 visible-lg\"></div>
            <div class=\"col-xs-12 col-lg-8\">
                <article class=\"post appear\" data-ride=\"animated\" data-animation=\"fadeIn\" data-delay=\"100\">
                    <div class=\"row\">
                        <div class=\"col-sm-9\">
                            <h3 class=\"pull-left\"><a href=\"{{ article.url }}\" rel=\"bookmark\" title=\"Permalink to {{ article.title|striptags }}\" class=\"text-info\"><span>{{ article.title }}</span></a></h3>
                        </div>

                        <div class=\"col-sm-3\">
                            <div class=\"pull-right clocktag\">
                                <i class=\"text-muted fa fa-clock-o\"></i>
                                <span class=\"text-danger\"><abbr class=\"published\" title=\"{{ article.date|localizeddate('full', 'full', locale) }}\">{{ article.date|localizeddate('medium', 'none', locale) }}</abbr></span>
                            </div>
                        </div>
                    </div>

                    {% if article.thumbbig %}
                    <a href=\"{{ article.url }}\" class=\"thumbnail-\">
                        <img alt=\"{{ article.title|striptags }}\" src=\"{{ article.thumbbig }}\">
                    </a>
                    {% endif %}

                    {% if article.thumbbig and article.excerpt %}
                    <div class=\"m05\"></div>
                    {% endif %}

                    {% if article.excerpt %}
                    <p>{{ article.excerpt }}</p>
                    {% endif %}

                    <div class=\"panel-footer\">
                        {% if article.tags %}
                            <i class=\"fa fa-tag\"></i>&nbsp;&nbsp;
                            {% for tag in article.tags %}
                            <a href=\"{{ base_url }}/{{ article.category }}?tag={{ tag }}\"><span class=\"label label-info\">{{ tag }}</span></a>&nbsp;
                            {% endfor %}
                        {% endif %}
                    </div>
                </article>
            </div>
        </div>
        {% endfor %}


        {% if total_pages > 1 %}
        <div class=\"row\">
            <div class=\"col-lg-2 visible-lg\"></div>
            <div class=\"col-xs-12 col-lg-8\">
                <nav role=\"navigation\">
                    <ul class=\"cd-pagination move-buttons\">
                        <li class=\"button\"><a {% if page_number == 1 %}class=\"disabled\"{% endif %} href=\"?PAGE={{page_number-1}}{{ filter.url }}\" aria-label=\"Previous\"><i class=\"fa fa-arrow-left\"></i> Назад</a></li>
                        {% for page in pagination_num_links %}
                        <li><a {% if page.number == page_number %}class=\"current\"{% endif %} href=\"{{page.url}}{{ filter.url }}\">{{page.number}}</a></li>
                        {% endfor %}
                        <li class=\"button\"><a {% if page_number == total_pages %}class=\"disabled\"{% endif %} href=\"?PAGE={{page_number+1}}{{ filter.url }}\" aria-label=\"Next\">Вперед <i class=\"fa fa-arrow-right\"></i></a></li>
                    </ul>
                </nav> <!-- cd-pagination-wrapper -->
            </div>
        </div>
        {% endif %}



        <div class=\"clearfix\"></div>
    </div>
</section>



{%include \"footer.twig\" %}
", "blog-index.html", "/Users/nightman/Dropbox/My Site/themes/nm2015/blog-index.html");
    }
}
