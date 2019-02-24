<?php

/* @admin/articles.html */
class __TwigTemplate_51d1674388e5a13558a4faaa43410364bcd05a5f5c20feba76ac6758c4ac1095 extends Twig_Template
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
        $this->loadTemplate("@admin/head.twig", "@admin/articles.html", 1)->display($context);
        // line 2
        echo "
<!-- Content Wrapper. Contains page content -->
<div class=\"content-wrapper\">
\t<!-- Content Header (Page header) -->
\t<section class=\"content-header\">
\t\t<div class=\"btn-group pull-right\" role=\"group\">
\t\t\t<button type=\"button\" class=\"btn btn-primary btn-sm\" data-toggle=\"modal\" data-target=\"#addFolder\"><i class=\"fa fa-folder\"></i> Добавить инфоблок</button>
\t\t\t<button type=\"button\" class=\"btn btn-success btn-sm\" data-toggle=\"modal\" data-target=\"#addFile\"><i class=\"fa fa-plus\"></i> Добавить запись</button>
\t\t</div>
\t\t<h1>Записи</h1>
\t</section>

\t<!-- Main content -->
\t<section class=\"content\">
\t\t<div class=\"box\">
\t\t\t<div class=\"box-body\">
\t\t\t\t<table class=\"table table-hover\" id=\"table-articles\">
\t\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t<th>Заголовок</th>
\t\t\t\t\t\t<th>Рубрика</th>
\t\t\t\t\t\t<th nowrap=\"nowrap\">Дата</th>
\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            if (($this->getAttribute($context["page"], "pagetype", array()) && ($this->getAttribute($context["page"], "pagetype", array()) == "infoblock-page"))) {
                // line 29
                echo "\t\t\t\t\t<tr class=\"article-control-line\">
\t\t\t\t\t\t<td style=\"width: 5em;\">";
                // line 30
                if ($this->getAttribute($context["page"], "thumbsmall", array())) {
                    echo "<img src=\"";
                    echo $this->getAttribute($context["page"], "thumbsmall", array());
                    echo "\" width=\"100%\">";
                }
                echo "</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<b>";
                // line 32
                echo $this->getAttribute($context["page"], "title", array());
                echo "</b>
\t\t\t\t\t\t\t<div class=\"article-control\">
\t\t\t\t\t\t\t\t";
                // line 34
                if (($this->getAttribute($context["page"], "content_type", array()) == ".html")) {
                    // line 35
                    echo "\t\t\t\t\t\t\t\t<a href=\"";
                    echo ($context["base_url"] ?? null);
                    echo "/admin/edit?file=";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "file", array()));
                    echo "\" class=\"text-primary\"><i class=\"fa fa-pencil\"></i> Изменить</a>
\t\t\t\t\t\t\t\t";
                }
                // line 37
                echo "\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($context["page"], "content_type", array()) == ".md")) {
                    // line 38
                    echo "\t\t\t\t\t\t\t\t<a href=\"";
                    echo ($context["base_url"] ?? null);
                    echo "/admin/md-to-html?file=";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "file", array()));
                    echo "\" class=\"text-primary\"><i class=\"fa fa-html5\"></i> MD->HTML</a>
\t\t\t\t\t\t\t\t";
                }
                // line 40
                echo "\t\t\t\t\t\t\t\t<a href=\"";
                echo ($context["base_url"] ?? null);
                echo "/admin/code?file=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "file", array()));
                echo "\" title=\"редактировать код\"><i class=\"fa fa-code\"></i> CODE</a>
\t\t\t\t\t\t\t\t<a href=\"";
                // line 41
                echo ($context["base_url"] ?? null);
                echo "/admin/articles?delete=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "file", array()));
                echo "\" class=\"text-danger\"><i class=\"fa fa-trash-o\"></i> Удалить</a>
\t\t\t\t\t\t\t\t<a href=\"";
                // line 42
                echo $this->getAttribute($context["page"], "url", array());
                echo "\" class=\"text-info\" target=\"_blank\"><i class=\"fa fa-eye\"></i> Перейти</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td style=\"width: 12em; white-space: nowrap;\">";
                // line 45
                echo $this->getAttribute($context["page"], "category", array());
                echo "</td>
\t\t\t\t\t\t<td style=\"width: 8em; white-space: nowrap;\">";
                // line 46
                echo $this->getAttribute($context["page"], "date", array());
                echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "\t\t\t\t\t</tbody>
\t\t\t\t</table>

\t\t\t</div><!-- /.box-body -->
\t\t</div>


\t\t<!-- Modal -->
\t\t<div class=\"modal fade\" id=\"addFile\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
\t\t\t<form action=\"";
        // line 58
        echo ($context["base_url"] ?? null);
        echo "/admin/new\" method=\"post\">
\t\t\t\t<input type=\"hidden\" name=\"infoblock\" value=\"true\">
\t\t\t\t<div class=\"modal-dialog\" role=\"document\">
\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t\t\t\t\t\t\t<h4 class=\"modal-title\" id=\"myModalLabel\">Создание записи</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"pageTitle\">Заголовок страницы:</label>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"pageTitle\" name=\"pageTitle\" required>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"pageFileName\">Имя файла:</label>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"pageFileName\" name=\"pageFileName\" required placeholder=\"example.html\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"infoblockName\">Инфоблок:</label>
\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"infoblockName\" id=\"infoblockName\">
\t\t\t\t\t\t\t\t\t";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["infoblock_list"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["infoblock"]) {
            // line 79
            echo "\t\t\t\t\t\t\t\t\t<option value=\"";
            echo $this->getAttribute($context["infoblock"], "folder", array());
            echo "\">";
            echo $this->getAttribute($context["infoblock"], "name", array());
            echo "</option>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['infoblock'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Создать</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>

\t\t<div class=\"modal fade\" id=\"addFolder\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel2\">
\t\t\t<form action=\"";
        // line 93
        echo ($context["base_url"] ?? null);
        echo "/admin/new\" method=\"post\">
\t\t\t\t<input type=\"hidden\" name=\"infoblock\" value=\"true\">
\t\t\t\t<div class=\"modal-dialog\" role=\"document\">
\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t\t\t\t\t\t\t<h4 class=\"modal-title\" id=\"myModalLabel2\">Создание инфоблока</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"folderTitle\">Заголовок раздела:</label>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"folderTitle\" name=\"folderTitle\" required>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"folderName\">Имя раздела:</label>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"folderName\" name=\"folderName\" required placeholder=\"folder\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Создать</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>


\t</section><!-- /.content -->
</div><!-- /.content-wrapper -->

";
        // line 123
        $this->loadTemplate("@admin/footer.twig", "@admin/articles.html", 123)->display($context);
    }

    public function getTemplateName()
    {
        return "@admin/articles.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 123,  188 => 93,  174 => 81,  163 => 79,  159 => 78,  136 => 58,  125 => 49,  115 => 46,  111 => 45,  105 => 42,  99 => 41,  92 => 40,  84 => 38,  81 => 37,  73 => 35,  71 => 34,  66 => 32,  57 => 30,  54 => 29,  49 => 28,  21 => 2,  19 => 1,);
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
\t<!-- Content Header (Page header) -->
\t<section class=\"content-header\">
\t\t<div class=\"btn-group pull-right\" role=\"group\">
\t\t\t<button type=\"button\" class=\"btn btn-primary btn-sm\" data-toggle=\"modal\" data-target=\"#addFolder\"><i class=\"fa fa-folder\"></i> Добавить инфоблок</button>
\t\t\t<button type=\"button\" class=\"btn btn-success btn-sm\" data-toggle=\"modal\" data-target=\"#addFile\"><i class=\"fa fa-plus\"></i> Добавить запись</button>
\t\t</div>
\t\t<h1>Записи</h1>
\t</section>

\t<!-- Main content -->
\t<section class=\"content\">
\t\t<div class=\"box\">
\t\t\t<div class=\"box-body\">
\t\t\t\t<table class=\"table table-hover\" id=\"table-articles\">
\t\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t<th>Заголовок</th>
\t\t\t\t\t\t<th>Рубрика</th>
\t\t\t\t\t\t<th nowrap=\"nowrap\">Дата</th>
\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t{% for page in pages %}{% if page.pagetype and page.pagetype == 'infoblock-page' %}
\t\t\t\t\t<tr class=\"article-control-line\">
\t\t\t\t\t\t<td style=\"width: 5em;\">{% if page.thumbsmall %}<img src=\"{{ page.thumbsmall }}\" width=\"100%\">{% endif %}</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<b>{{ page.title }}</b>
\t\t\t\t\t\t\t<div class=\"article-control\">
\t\t\t\t\t\t\t\t{% if page.content_type == '.html' %}
\t\t\t\t\t\t\t\t<a href=\"{{ base_url }}/admin/edit?file={{ page.file|escape }}\" class=\"text-primary\"><i class=\"fa fa-pencil\"></i> Изменить</a>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t{% if page.content_type == '.md' %}
\t\t\t\t\t\t\t\t<a href=\"{{ base_url }}/admin/md-to-html?file={{ page.file|escape }}\" class=\"text-primary\"><i class=\"fa fa-html5\"></i> MD->HTML</a>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t<a href=\"{{ base_url }}/admin/code?file={{ page.file|escape }}\" title=\"редактировать код\"><i class=\"fa fa-code\"></i> CODE</a>
\t\t\t\t\t\t\t\t<a href=\"{{ base_url }}/admin/articles?delete={{ page.file|escape }}\" class=\"text-danger\"><i class=\"fa fa-trash-o\"></i> Удалить</a>
\t\t\t\t\t\t\t\t<a href=\"{{ page.url }}\" class=\"text-info\" target=\"_blank\"><i class=\"fa fa-eye\"></i> Перейти</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td style=\"width: 12em; white-space: nowrap;\">{{page.category}}</td>
\t\t\t\t\t\t<td style=\"width: 8em; white-space: nowrap;\">{{ page.date }}</td>
\t\t\t\t\t</tr>
\t\t\t\t\t{% endif %}{% endfor %}
\t\t\t\t\t</tbody>
\t\t\t\t</table>

\t\t\t</div><!-- /.box-body -->
\t\t</div>


\t\t<!-- Modal -->
\t\t<div class=\"modal fade\" id=\"addFile\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
\t\t\t<form action=\"{{ base_url }}/admin/new\" method=\"post\">
\t\t\t\t<input type=\"hidden\" name=\"infoblock\" value=\"true\">
\t\t\t\t<div class=\"modal-dialog\" role=\"document\">
\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t\t\t\t\t\t\t<h4 class=\"modal-title\" id=\"myModalLabel\">Создание записи</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"pageTitle\">Заголовок страницы:</label>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"pageTitle\" name=\"pageTitle\" required>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"pageFileName\">Имя файла:</label>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"pageFileName\" name=\"pageFileName\" required placeholder=\"example.html\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"infoblockName\">Инфоблок:</label>
\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"infoblockName\" id=\"infoblockName\">
\t\t\t\t\t\t\t\t\t{% for infoblock in infoblock_list %}
\t\t\t\t\t\t\t\t\t<option value=\"{{infoblock.folder}}\">{{infoblock.name}}</option>
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Создать</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>

\t\t<div class=\"modal fade\" id=\"addFolder\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel2\">
\t\t\t<form action=\"{{ base_url }}/admin/new\" method=\"post\">
\t\t\t\t<input type=\"hidden\" name=\"infoblock\" value=\"true\">
\t\t\t\t<div class=\"modal-dialog\" role=\"document\">
\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t\t\t\t\t\t\t<h4 class=\"modal-title\" id=\"myModalLabel2\">Создание инфоблока</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"folderTitle\">Заголовок раздела:</label>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"folderTitle\" name=\"folderTitle\" required>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"folderName\">Имя раздела:</label>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"folderName\" name=\"folderName\" required placeholder=\"folder\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Создать</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>


\t</section><!-- /.content -->
</div><!-- /.content-wrapper -->

{%include \"@admin/footer.twig\" %}", "@admin/articles.html", "C:\\Users\\NightMan\\Dropbox\\My Site\\lib\\pico_admin\\templates\\articles.html");
    }
}
