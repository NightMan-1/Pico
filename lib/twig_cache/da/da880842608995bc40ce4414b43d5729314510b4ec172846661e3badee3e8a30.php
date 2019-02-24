<?php

/* @admin/files.html */
class __TwigTemplate_6dae42ba8499f3e5fae4661f2a41d761c48d1c328291d53915d428a987d8751c extends Twig_Template
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
        $this->loadTemplate("@admin/head.twig", "@admin/files.html", 1)->display($context);
        // line 2
        echo "
<!-- Content Wrapper. Contains page content -->
<div class=\"content-wrapper\">
    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
        <h1>Управление файлами</h1>
    </section>

    <!-- Main content -->
    <section class=\"content\">

<div id=\"filemanager\">
    <iframe style=\"width:100%;height:20em;border:1px solid #e5e5e5; margin: 0;\" src=\"";
        // line 14
        echo ($context["base_url"] ?? null);
        echo "/lib/filemanager/dialog.php?akey=295a0da46b5633a0643e52edc799ed80\"></iframe>
</div>

    </section><!-- /.content -->
</div><!-- /.content-wrapper -->

";
        // line 20
        $this->loadTemplate("@admin/footer.twig", "@admin/files.html", 20)->display($context);
    }

    public function getTemplateName()
    {
        return "@admin/files.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 20,  35 => 14,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%include \"@admin/head.twig\" %}

<!-- Content Wrapper. Contains page content -->
<div class=\"content-wrapper\">
    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
        <h1>Управление файлами</h1>
    </section>

    <!-- Main content -->
    <section class=\"content\">

<div id=\"filemanager\">
    <iframe style=\"width:100%;height:20em;border:1px solid #e5e5e5; margin: 0;\" src=\"{{ base_url }}/lib/filemanager/dialog.php?akey=295a0da46b5633a0643e52edc799ed80\"></iframe>
</div>

    </section><!-- /.content -->
</div><!-- /.content-wrapper -->

{%include \"@admin/footer.twig\" %}", "@admin/files.html", "/Users/nightman/Dropbox/My Site/lib/pico_admin/templates/files.html");
    }
}
