<?php

/* @admin/settings.html */
class __TwigTemplate_9a0a79bd63b397482f4a301634ddc1b0226e30bec0157f9ba719b84da4575252 extends Twig_Template
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
        $this->loadTemplate("@admin/head.twig", "@admin/settings.html", 1)->display($context);
        // line 2
        echo "
<!-- Content Wrapper. Contains page content -->
<div class=\"content-wrapper\">
    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
        <h1>Настройки сайта</h1>
    </section>

    <!-- Main content -->
    <section class=\"content\">

        <p>ToDo :)</p>

    </section><!-- /.content -->
</div><!-- /.content-wrapper -->


";
        // line 19
        $this->loadTemplate("@admin/footer.twig", "@admin/settings.html", 19)->display($context);
    }

    public function getTemplateName()
    {
        return "@admin/settings.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 19,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%include \"@admin/head.twig\" %}

<!-- Content Wrapper. Contains page content -->
<div class=\"content-wrapper\">
    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
        <h1>Настройки сайта</h1>
    </section>

    <!-- Main content -->
    <section class=\"content\">

        <p>ToDo :)</p>

    </section><!-- /.content -->
</div><!-- /.content-wrapper -->


{%include \"@admin/footer.twig\" %}", "@admin/settings.html", "C:\\Users\\NightMan\\Dropbox\\My Site\\lib\\pico_admin\\templates\\settings.html");
    }
}
