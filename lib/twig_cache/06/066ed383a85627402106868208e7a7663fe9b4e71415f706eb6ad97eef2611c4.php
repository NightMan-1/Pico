<?php

/* @admin/gallery.html */
class __TwigTemplate_4601f959ad23f365a26d2f60cb9114172db915b03dbe747702f938fcd90b9e42 extends Twig_Template
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
        $this->loadTemplate("@admin/head.twig", "@admin/gallery.html", 1)->display($context);
        // line 2
        echo "
<!-- Content Wrapper. Contains page content -->
<div class=\"content-wrapper\">
    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
        <h1>Фотографии (галлереи)</h1>
    </section>

    <!-- Main content -->
    <section class=\"content\">

        <p>ToDo :)</p>

    </section><!-- /.content -->
</div><!-- /.content-wrapper -->


";
        // line 19
        $this->loadTemplate("@admin/footer.twig", "@admin/gallery.html", 19)->display($context);
    }

    public function getTemplateName()
    {
        return "@admin/gallery.html";
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
        <h1>Фотографии (галлереи)</h1>
    </section>

    <!-- Main content -->
    <section class=\"content\">

        <p>ToDo :)</p>

    </section><!-- /.content -->
</div><!-- /.content-wrapper -->


{%include \"@admin/footer.twig\" %}", "@admin/gallery.html", "/Users/nightman/Dropbox/My Site/lib/pico_admin/templates/gallery.html");
    }
}
