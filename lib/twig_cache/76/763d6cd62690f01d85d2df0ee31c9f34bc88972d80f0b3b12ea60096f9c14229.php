<?php

/* @admin/menu.html */
class __TwigTemplate_6f8afb5f766d4ba5376f44499141c26e1e21a0ffc5c9974f419c1174d2c8a56b extends Twig_Template
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
        $this->loadTemplate("@admin/head.twig", "@admin/menu.html", 1)->display($context);
        // line 2
        echo "
<!-- Content Wrapper. Contains page content -->
<div class=\"content-wrapper\">
    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
        <h1>Навигация</h1>
    </section>

    <!-- Main content -->
    <section class=\"content\">

        <p>ToDo :)</p>

    </section><!-- /.content -->
</div><!-- /.content-wrapper -->


";
        // line 19
        $this->loadTemplate("@admin/footer.twig", "@admin/menu.html", 19)->display($context);
    }

    public function getTemplateName()
    {
        return "@admin/menu.html";
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
        <h1>Навигация</h1>
    </section>

    <!-- Main content -->
    <section class=\"content\">

        <p>ToDo :)</p>

    </section><!-- /.content -->
</div><!-- /.content-wrapper -->


{%include \"@admin/footer.twig\" %}", "@admin/menu.html", "/Users/nightman/Dropbox/My Site/lib/pico_admin/templates/menu.html");
    }
}
