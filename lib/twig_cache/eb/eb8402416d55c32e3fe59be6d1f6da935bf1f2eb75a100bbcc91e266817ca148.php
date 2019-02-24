<?php

/* page.html */
class __TwigTemplate_e30409f8ad51325612ddb05403ccb71b26e1391e96ae56534796341a333ac1f0 extends Twig_Template
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
        $this->loadTemplate("head.twig", "page.html", 1)->display($context);
        // line 2
        echo "
";
        // line 3
        echo ($context["content"] ?? null);
        echo "

";
        // line 5
        $this->loadTemplate("footer.twig", "page.html", 5)->display($context);
    }

    public function getTemplateName()
    {
        return "page.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 5,  24 => 3,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%include \"head.twig\" %}

{{ content }}

{%include \"footer.twig\" %}", "page.html", "/Users/nightman/Dropbox/My Site/themes/nm2015/page.html");
    }
}
