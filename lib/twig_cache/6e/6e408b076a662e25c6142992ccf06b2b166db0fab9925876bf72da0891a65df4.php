<?php

/* index.html */
class __TwigTemplate_e106740a163de851b7405c1f4c00995e2267f42a059eb04b8d4397054eecc8e4 extends Twig_Template
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
        echo $this->getAttribute(($context["meta"] ?? null), "title", array());
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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
