<?php

/* page-index.html */
class __TwigTemplate_8730b8a7b06f5f1ba52c0eb790bce3463ab04f143e3ae2b48db47cbd40c421cc extends Twig_Template
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
        $this->loadTemplate("head.twig", "page-index.html", 1)->display($context);
        // line 2
        echo "
";
        // line 3
        echo ($context["content"] ?? null);
        echo "

";
        // line 5
        $this->loadTemplate("footer.twig", "page-index.html", 5)->display($context);
    }

    public function getTemplateName()
    {
        return "page-index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 5,  24 => 3,  21 => 2,  19 => 1,);
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

{{ content }}

{%include \"footer.twig\" %}", "page-index.html", "C:\\Users\\NightMan\\Dropbox\\My Site\\themes\\nm2015\\page-index.html");
    }
}
