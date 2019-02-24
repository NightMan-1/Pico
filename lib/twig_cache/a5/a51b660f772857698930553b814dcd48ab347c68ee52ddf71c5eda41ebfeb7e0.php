<?php

/* blog-page.html */
class __TwigTemplate_da1c993f31d1be73c7da5ce7c9d23015bf7d98e26f76799c6654d282c3c45140 extends Twig_Template
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
        $this->loadTemplate("head.twig", "blog-page.html", 1)->display($context);
        // line 2
        echo "

<div class=\"container\">
    <div class=\"meta pull-right\">
        <i class=\"text-muted fa fa-clock-o\"></i>
        <span class=\"text-danger\"><abbr class=\"published\" title=\"";
        // line 7
        echo twig_localized_date_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["meta"] ?? null), "date", array()), "full", "full", ($context["locale"] ?? null));
        echo "\">";
        echo twig_localized_date_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["meta"] ?? null), "date", array()), "medium", "none", ($context["locale"] ?? null));
        echo "</abbr></span>
    </div>
</div>

<section class=\"section section-center- article animated- fadeIn-\"> ";
        // line 12
        echo "    <div class=\"container\">

        <h2 class=\"section-title\"><span>";
        // line 14
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["meta"] ?? null), "title", array());
        echo "</span></h2>

        ";
        // line 16
        echo ($context["content"] ?? null);
        echo "

        ";
        // line 18
        if (($context["images"] ?? null)) {
            // line 19
            echo "        <div id=\"gallery\">
            ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 21
                echo "            <a href=\"";
                echo twig_get_attribute($this->env, $this->getSourceContext(), $context["image"], "url", array());
                echo "\" class=\"item hover-effect imageLink-\" data-exthumbimage=\"";
                echo twig_get_attribute($this->env, $this->getSourceContext(), $context["image"], "thumb", array());
                echo "\">
                <img class=\"lazy\" data-original=\"";
                // line 22
                echo twig_get_attribute($this->env, $this->getSourceContext(), $context["image"], "thumb", array());
                echo "\" src=\"";
                echo ($context["theme_url"] ?? null);
                echo "/img/00000000.png\" width=\"";
                echo twig_get_attribute($this->env, $this->getSourceContext(), $context["image"], "w", array());
                echo "\" height=\"";
                echo twig_get_attribute($this->env, $this->getSourceContext(), $context["image"], "h", array());
                echo "\">
                <span class=\"overlay\"><i class=\"fa fa-search-plus\"></i></span>
            </a>
            ";
                // line 31
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "        </div>

        ";
        }
        // line 36
        echo "
        <div class=\"clearfix\"></div>
    </div>
</section>


";
        // line 42
        $this->loadTemplate("footer.twig", "blog-page.html", 42)->display($context);
    }

    public function getTemplateName()
    {
        return "blog-page.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 42,  91 => 36,  86 => 33,  79 => 31,  67 => 22,  60 => 21,  56 => 20,  53 => 19,  51 => 18,  46 => 16,  41 => 14,  37 => 12,  28 => 7,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%include \"head.twig\" %}


<div class=\"container\">
    <div class=\"meta pull-right\">
        <i class=\"text-muted fa fa-clock-o\"></i>
        <span class=\"text-danger\"><abbr class=\"published\" title=\"{{ meta.date|localizeddate('full', 'full', locale) }}\">{{ meta.date|localizeddate('medium', 'none', locale) }}</abbr></span>
    </div>
</div>

<section class=\"section section-center- article animated- fadeIn-\"> {#<!-- при включении анимации, в хроме слайдер перестает быть в самом верху - портится z-index -->#}
    <div class=\"container\">

        <h2 class=\"section-title\"><span>{{ meta.title }}</span></h2>

        {{ content }}

        {% if images %}
        <div id=\"gallery\">
            {% for image in images %}
            <a href=\"{{ image.url }}\" class=\"item hover-effect imageLink-\" data-exthumbimage=\"{{ image.thumb }}\">
                <img class=\"lazy\" data-original=\"{{ image.thumb }}\" src=\"{{ theme_url }}/img/00000000.png\" width=\"{{ image.w }}\" height=\"{{ image.h }}\">
                <span class=\"overlay\"><i class=\"fa fa-search-plus\"></i></span>
            </a>
            {#
            <div class=\"item {{ meta.gallery }} hover-effect imageLink\" data-link=\"slider:0; index:{{image.id}}\">
                <img class=\"lazy\" data-original=\"{{ image.thumb }}\" alt=\"\" width=\"{{ image.w }}\" height=\"{{ image.h }}\" src=\"{{ theme_url }}/img/00000000.png\">
                <span class=\"overlay\"><i class=\"fa fa-search-plus\"></i></span>
            </div>
            #}

            {% endfor %}
        </div>

        {% endif %}

        <div class=\"clearfix\"></div>
    </div>
</section>


{%include \"footer.twig\" %}
", "blog-page.html", "/Users/nightman/Dropbox/My Site/themes/nm2015/blog-page.html");
    }
}
