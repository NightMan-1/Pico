<?php

/* index.html */
class __TwigTemplate_a1284fa7708a9dc37c9e03869267759edee7f49dac6a7cf91ad6fc15dc86a268 extends Twig_Template
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
        $this->loadTemplate("head.twig", "index.html", 1)->display($context);
        // line 2
        echo "
<section class=\"section section-center- article-  animated fadeIn\">
    <div class=\"container\">

        <h2 class=\"section-title\"><span class=\"text-info\">";
        // line 6
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["meta"] ?? null), "title", array());
        echo "</span></h2>

        ";
        // line 8
        echo ($context["content"] ?? null);
        echo "

        <div class=\"clearfix\"></div>
    </div>
</section>


";
        // line 15
        $this->loadTemplate("footer.twig", "index.html", 15)->display($context);
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 15,  32 => 8,  27 => 6,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%include \"head.twig\" %}

<section class=\"section section-center- article-  animated fadeIn\">
    <div class=\"container\">

        <h2 class=\"section-title\"><span class=\"text-info\">{{ meta.title }}</span></h2>

        {{ content }}

        <div class=\"clearfix\"></div>
    </div>
</section>


{%include \"footer.twig\" %}", "index.html", "/Users/nightman/Dropbox/My Site/themes/nm2015/index.html");
    }
}
