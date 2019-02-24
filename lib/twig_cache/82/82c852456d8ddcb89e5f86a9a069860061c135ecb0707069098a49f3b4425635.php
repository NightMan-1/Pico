<?php

/* @admin/backup.html */
class __TwigTemplate_9c89bcb70c345b2ba2a570ab471486146c99a11b2bcb2ba68b762db30e223ef0 extends Twig_Template
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
        $this->loadTemplate("@admin/head.twig", "@admin/backup.html", 1)->display($context);
        // line 2
        echo "<!-- Content Wrapper. Contains page content -->
<div class=\"content-wrapper\">
    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
        <h1>Резервное копирование</h1>
    </section>

    <!-- Main content -->
    <section class=\"content\">

        ";
        // line 12
        if (($context["archive_list"] ?? null)) {
            // line 13
            echo "        <div class=\"box\">
            <div class=\"box-header with-border\">
                <h3 class=\"box-title\">Список архивов</h3>
            </div><!-- /.box-header -->
            <div class=\"box-body\">
                <table class=\"table table-hover\">
                    <thead>
                    <tr>
                        <th>Имя файла</th>
                        <th>Дата создания</th>
                        <th>Размер</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["archive_list"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 29
                echo "                    <tr>
                        <td><a href=\"";
                // line 30
                echo ($context["base_url"] ?? null);
                echo "/backup/";
                echo twig_get_attribute($this->env, $this->getSourceContext(), $context["file"], "name", array());
                echo "\">";
                echo twig_get_attribute($this->env, $this->getSourceContext(), $context["file"], "name", array());
                echo "</a></td>
                        <td>";
                // line 31
                echo twig_get_attribute($this->env, $this->getSourceContext(), $context["file"], "time", array());
                echo "</td>
                        <td>";
                // line 32
                echo twig_get_attribute($this->env, $this->getSourceContext(), $context["file"], "size", array());
                echo "</td>
                        <td><a href=\"";
                // line 33
                echo ($context["base_url"] ?? null);
                echo "/admin/backup?delete=";
                echo twig_get_attribute($this->env, $this->getSourceContext(), $context["file"], "name", array());
                echo "\" class=\"btn btn-sm btn-danger\"><i class=\"fa fa-trash\"></i> Удалить</a> </td>
                    </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "                    </tbody>
                </table>
            </div><!-- ./box-body -->
            <div class=\"box-footer\">
                <a href=\"";
            // line 40
            echo ($context["base_url"] ?? null);
            echo "/admin/backup?createarchive\" class=\"btn btn-primary\"><i class=\"fa fa-file-archive-o\"></i> Создать новый архив</a>
            </div><!-- /.box-footer -->
        </div>
    ";
        } else {
            // line 44
            echo "        <p>Не одного архива пока не сделано...</p>
        <a href=\"";
            // line 45
            echo ($context["base_url"] ?? null);
            echo "/admin/backup?createarchive\" class=\"btn btn-primary\"><i class=\"fa fa-file-archive-o\"></i> Создать новый архив</a>
    ";
        }
        // line 47
        echo "

    </section><!-- /.content -->
</div><!-- /.content-wrapper -->

";
        // line 52
        $this->loadTemplate("@admin/footer.twig", "@admin/backup.html", 52)->display($context);
    }

    public function getTemplateName()
    {
        return "@admin/backup.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 52,  107 => 47,  102 => 45,  99 => 44,  92 => 40,  86 => 36,  75 => 33,  71 => 32,  67 => 31,  59 => 30,  56 => 29,  52 => 28,  35 => 13,  33 => 12,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%include \"@admin/head.twig\" %}
<!-- Content Wrapper. Contains page content -->
<div class=\"content-wrapper\">
    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
        <h1>Резервное копирование</h1>
    </section>

    <!-- Main content -->
    <section class=\"content\">

        {% if archive_list %}
        <div class=\"box\">
            <div class=\"box-header with-border\">
                <h3 class=\"box-title\">Список архивов</h3>
            </div><!-- /.box-header -->
            <div class=\"box-body\">
                <table class=\"table table-hover\">
                    <thead>
                    <tr>
                        <th>Имя файла</th>
                        <th>Дата создания</th>
                        <th>Размер</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for file in archive_list %}
                    <tr>
                        <td><a href=\"{{ base_url }}/backup/{{file.name}}\">{{file.name}}</a></td>
                        <td>{{file.time}}</td>
                        <td>{{file.size}}</td>
                        <td><a href=\"{{ base_url }}/admin/backup?delete={{file.name}}\" class=\"btn btn-sm btn-danger\"><i class=\"fa fa-trash\"></i> Удалить</a> </td>
                    </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div><!-- ./box-body -->
            <div class=\"box-footer\">
                <a href=\"{{ base_url }}/admin/backup?createarchive\" class=\"btn btn-primary\"><i class=\"fa fa-file-archive-o\"></i> Создать новый архив</a>
            </div><!-- /.box-footer -->
        </div>
    {% else %}
        <p>Не одного архива пока не сделано...</p>
        <a href=\"{{ base_url }}/admin/backup?createarchive\" class=\"btn btn-primary\"><i class=\"fa fa-file-archive-o\"></i> Создать новый архив</a>
    {% endif %}


    </section><!-- /.content -->
</div><!-- /.content-wrapper -->

{%include \"@admin/footer.twig\" %}", "@admin/backup.html", "/Users/nightman/Dropbox/My Site/lib/pico_admin/templates/backup.html");
    }
}
