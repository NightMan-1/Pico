<?php

/* @admin/settings.html */
class __TwigTemplate_225433d092e4276a29efb7b465a89b7d09c3e023344780f5423a67c3d262fd02 extends Twig_Template
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


{%include \"@admin/footer.twig\" %}", "@admin/settings.html", "/Users/nightman/Dropbox/My Site/lib/pico_admin/templates/settings.html");
    }
}
