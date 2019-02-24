<?php

/* index.html */
class __TwigTemplate_ff31ee3ec28ad8d5debd299fe376c54d0f474759d3616740ae06f210236de431 extends Twig_Template
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
";
        // line 3
        echo ($context["content"] ?? null);
        echo "

";
        // line 5
        $this->loadTemplate("footer.twig", "index.html", 5)->display($context);
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
        return array (  29 => 5,  24 => 3,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%include \"head.twig\" %}

{{ content }}

{%include \"footer.twig\" %}", "index.html", "/Users/nightman/Dropbox/My Site/themes/flat-theme/index.html");
    }
}
