<?php

/* @admin/pages.html */
class __TwigTemplate_e437aeb58bf09639c9f87c428ac25022a2369b6c11dc564174b915f776bc3699 extends Twig_Template
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
        $this->loadTemplate("@admin/head.twig", "@admin/pages.html", 1)->display($context);
        // line 2
        echo "<!-- Content Wrapper. Contains page content -->
<div class=\"content-wrapper\">
    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
        <div class=\"btn-group pull-right\" role=\"group\">
            <button type=\"button\" class=\"btn btn-primary btn-sm\" data-toggle=\"modal\" data-target=\"#addFolder\"><i class=\"fa fa-folder\"></i> Добавить раздел</button>
            <button type=\"button\" class=\"btn btn-success btn-sm\" data-toggle=\"modal\" data-target=\"#addFile\"><i class=\"fa fa-plus\"></i> Добавить страницу</button>
            <button type=\"button\" class=\"btn btn-warning btn-sm\" id=\"savePagesList\"><i class=\"fa fa-plus\"></i> Сохранить изменения</button>
        </div>
        <h1>Страницы</h1>
    </section>

    <!-- Main content -->
    <section class=\"content\">
        <div class=\"box\">
            <div class=\"box-body\">
                <ol class=\"pages-list vertical\">
                    <li data-name=\"index\">
                        <div class=\"link\">
                        <i class=\"fa fa-arrows\"></i> &nbsp;  ";
        // line 22
        echo "                        <i class=\"fa fa fa-file-o\"></i> &nbsp; ";
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["files_tree"] ?? null), "title", array());
        echo "
                        <span class=\"control\">
                            <a href=\"";
        // line 24
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["files_tree"] ?? null), "url", array());
        echo "\" target=\"_blank\" title=\"открыть\" class=\"m-l-1\"><i class=\"fa fa-eye\"></i> перейти</a>
                            ";
        // line 25
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["files_tree"] ?? null), "content_type", array()) == ".html")) {
            // line 26
            echo "                            <a href=\"";
            echo ($context["base_url"] ?? null);
            echo "/admin/edit?file=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["files_tree"] ?? null), "file", array()));
            echo "\" title=\"редактировать\"><i class=\"fa fa-pencil\"></i> изменить</a>
                            ";
        }
        // line 28
        echo "                            ";
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["files_tree"] ?? null), "content_type", array()) == ".md")) {
            // line 29
            echo "                            <a href=\"";
            echo ($context["base_url"] ?? null);
            echo "/admin/md-to-html?file=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["files_tree"] ?? null), "file", array()));
            echo "\" class=\"text-primary\"><i class=\"fa fa-html5\"></i> MD->HTML</a>
                            ";
        }
        // line 31
        echo "                            <a href=\"";
        echo ($context["base_url"] ?? null);
        echo "/admin/code?file=";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["files_tree"] ?? null), "file", array()));
        echo "\" title=\"редактировать код\"><i class=\"fa fa-code\"></i> CODE</a>
                            <a href=\"";
        // line 32
        echo ($context["base_url"] ?? null);
        echo "/admin/pages?delete=";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["files_tree"] ?? null), "file", array()));
        echo "\" title=\"удалить\" class=\"text-danger\"><i class=\"fa fa-trash-o\"></i> удалить</a>
                        </span>
                        </div>
                    </li>

                    ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["files_tree"] ?? null), "sub", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 38
            echo "                    <li data-name=\"";
            echo twig_get_attribute($this->env, $this->getSourceContext(), $context["page"], "file", array());
            echo "\">
                        <div class=\"link\">
                        <i class=\"fa fa-arrows\"></i> &nbsp;
                        <i class=\"fa fa fa-";
            // line 41
            echo twig_get_attribute($this->env, $this->getSourceContext(), $context["page"], "type", array());
            echo "-o\"></i> &nbsp; ";
            echo twig_get_attribute($this->env, $this->getSourceContext(), $context["page"], "title", array());
            echo "
                        <span class=\"control\">
                            <a href=\"";
            // line 43
            echo twig_get_attribute($this->env, $this->getSourceContext(), $context["page"], "url", array());
            echo "\" target=\"_blank\" title=\"открыть\" class=\"m-l-1\"><i class=\"fa fa-eye\"></i> перейти</a>
                            ";
            // line 44
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["page"], "content_type", array()) == ".html")) {
                // line 45
                echo "                            <a href=\"";
                echo ($context["base_url"] ?? null);
                echo "/admin/edit?file=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["page"], "file", array()));
                echo "\" title=\"редактировать\"><i class=\"fa fa-pencil\"></i> изменить</a>
                            ";
            }
            // line 47
            echo "                            ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["page"], "content_type", array()) == ".md")) {
                // line 48
                echo "                            <a href=\"";
                echo ($context["base_url"] ?? null);
                echo "/admin/md-to-html?file=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["page"], "file", array()));
                echo "\" class=\"text-primary\"><i class=\"fa fa-html5\"></i> MD->HTML</a>
                            ";
            }
            // line 50
            echo "                            <a href=\"";
            echo ($context["base_url"] ?? null);
            echo "/admin/code?file=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["page"], "file", array()));
            echo "\" title=\"редактировать код\"><i class=\"fa fa-code\"></i> CODE</a>
                            <a href=\"";
            // line 51
            echo ($context["base_url"] ?? null);
            echo "/admin/pages?delete=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["page"], "file", array()));
            echo "\" title=\"удалить\" class=\"text-danger\"><i class=\"fa fa-trash-o\"></i> удалить</a>
                        </span>
                        </div>
                        ";
            // line 54
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["page"], "type", array()) == "folder")) {
                // line 55
                echo "                            <ol>
                                ";
                // line 56
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["page"], "sub", array())) {
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["page"], "sub", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                        // line 57
                        echo "                                <li data-name=\"";
                        echo twig_get_attribute($this->env, $this->getSourceContext(), $context["page"], "file", array());
                        echo "\">
                                    <div class=\"link\">
                                    <i class=\"fa fa-arrows\"></i> &nbsp;
                                    <i class=\"fa fa fa-";
                        // line 60
                        echo twig_get_attribute($this->env, $this->getSourceContext(), $context["page"], "type", array());
                        echo "-o\"></i> &nbsp; ";
                        echo twig_get_attribute($this->env, $this->getSourceContext(), $context["page"], "title", array());
                        echo "
                                    <span class=\"control\">
                                        <a href=\"";
                        // line 62
                        echo twig_get_attribute($this->env, $this->getSourceContext(), $context["page"], "url", array());
                        echo "\" target=\"_blank\" title=\"открыть\" class=\"m-l-1\"><i class=\"fa fa-eye\"></i> перейти</a>
                                        ";
                        // line 63
                        if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["page"], "content_type", array()) == ".html")) {
                            // line 64
                            echo "                                        <a href=\"";
                            echo ($context["base_url"] ?? null);
                            echo "/admin/edit?file=";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["page"], "file", array()));
                            echo "\" title=\"редактировать\"><i class=\"fa fa-pencil\"></i> изменить</a>
                                        ";
                        }
                        // line 66
                        echo "                                        ";
                        if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["page"], "content_type", array()) == ".md")) {
                            // line 67
                            echo "                                        <a href=\"";
                            echo ($context["base_url"] ?? null);
                            echo "/admin/md-to-html?file=";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["page"], "file", array()));
                            echo "\" class=\"text-primary\"><i class=\"fa fa-html5\"></i> MD->HTML</a>
                                        ";
                        }
                        // line 69
                        echo "                                        <a href=\"";
                        echo ($context["base_url"] ?? null);
                        echo "/admin/code?file=";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["page"], "file", array()));
                        echo "\" title=\"редактировать код\"><i class=\"fa fa-code\"></i> CODE</a>
                                        <a href=\"";
                        // line 70
                        echo ($context["base_url"] ?? null);
                        echo "/admin/pages?delete=";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["page"], "file", array()));
                        echo "\" title=\"удалить\" class=\"text-danger\"><i class=\"fa fa-trash-o\"></i> удалить</a>
                                    </span>
                                    </div>
                                    ";
                        // line 73
                        if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["page"], "type", array()) == "folder")) {
                            // line 74
                            echo "                                    <ol>
                                        ";
                            // line 75
                            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["page"], "sub", array())) {
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["page"], "sub", array()));
                                foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                                    // line 76
                                    echo "                                        <li data-name=\"";
                                    echo twig_get_attribute($this->env, $this->getSourceContext(), $context["page"], "file", array());
                                    echo "\">
                                            <div class=\"link\">
                                            <i class=\"fa fa-arrows\"></i> &nbsp;
                                            <i class=\"fa fa fa-";
                                    // line 79
                                    echo twig_get_attribute($this->env, $this->getSourceContext(), $context["page"], "type", array());
                                    echo "-o\"></i> &nbsp; ";
                                    echo twig_get_attribute($this->env, $this->getSourceContext(), $context["page"], "title", array());
                                    echo "
                                            <span class=\"control\">
                                                <a href=\"";
                                    // line 81
                                    echo twig_get_attribute($this->env, $this->getSourceContext(), $context["page"], "url", array());
                                    echo "\" target=\"_blank\" title=\"открыть\" class=\"m-l-1\"><i class=\"fa fa-eye\"></i> перейти</a>
                                                ";
                                    // line 82
                                    if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["page"], "content_type", array()) == ".html")) {
                                        // line 83
                                        echo "                                                <a href=\"";
                                        echo ($context["base_url"] ?? null);
                                        echo "/admin/edit?file=";
                                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["page"], "file", array()));
                                        echo "\" title=\"редактировать\"><i class=\"fa fa-pencil\"></i> изменить</a>
                                                ";
                                    }
                                    // line 85
                                    echo "                                                ";
                                    if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["page"], "content_type", array()) == ".md")) {
                                        // line 86
                                        echo "                                                <a href=\"";
                                        echo ($context["base_url"] ?? null);
                                        echo "/admin/md-to-html?file=";
                                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["page"], "file", array()));
                                        echo "\" class=\"text-primary\"><i class=\"fa fa-html5\"></i> MD->HTML</a>
                                                ";
                                    }
                                    // line 88
                                    echo "                                                <a href=\"";
                                    echo ($context["base_url"] ?? null);
                                    echo "/admin/code?file=";
                                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["page"], "file", array()));
                                    echo "\" title=\"редактировать код\"><i class=\"fa fa-code\"></i> CODE</a>
                                                <a href=\"";
                                    // line 89
                                    echo ($context["base_url"] ?? null);
                                    echo "/admin/pages?delete=";
                                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["page"], "file", array()));
                                    echo "\" title=\"удалить\" class=\"text-danger\"><i class=\"fa fa-trash-o\"></i> удалить</a>
                                            </span>
                                            </div>
                                        </li>
                                        ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                            }
                            // line 94
                            echo "                                    </ol>
                                    ";
                        }
                        // line 96
                        echo "                                </li>

                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                }
                // line 99
                echo "                            </ol>
                        ";
            }
            // line 101
            echo "                    </li>


                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "                </ol>

            </div>
        </div>
<!-- Modal -->
<div class=\"modal fade\" id=\"addFile\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
    <form action=\"";
        // line 111
        echo ($context["base_url"] ?? null);
        echo "/admin/new\" method=\"post\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                <h4 class=\"modal-title\" id=\"myModalLabel\">Создание страницы</h4>
            </div>
            <div class=\"modal-body\">
                <div class=\"form-group\">
                    <label for=\"pageTitle\">Заголовок страницы:</label>
                    <input type=\"text\" class=\"form-control\" id=\"pageTitle\" name=\"pageTitle\" required>
                </div>
                <div class=\"form-group\">
                    <label for=\"pageFileName\">Имя файла:</label>
                    <input type=\"text\" class=\"form-control\" id=\"pageFileName\" name=\"pageFileName\" required placeholder=\"example.html\">
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"submit\" class=\"btn btn-primary\">Создать</button>
            </div>
        </div>
    </div>
    </form>
</div>

<div class=\"modal fade\" id=\"addFolder\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel2\">
    <form action=\"";
        // line 137
        echo ($context["base_url"] ?? null);
        echo "/admin/new\" method=\"post\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                <h4 class=\"modal-title\" id=\"myModalLabel2\">Создание раздела</h4>
            </div>
            <div class=\"modal-body\">
                <div class=\"form-group\">
                    <label for=\"folderTitle\">Заголовок раздела:</label>
                    <input type=\"text\" class=\"form-control\" id=\"folderTitle\" name=\"folderTitle\" required>
                </div>
                <div class=\"form-group\">
                    <label for=\"folderName\">Имя раздела:</label>
                    <input type=\"text\" class=\"form-control\" id=\"folderName\" name=\"folderName\" required placeholder=\"folder\">
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"submit\" class=\"btn btn-primary\">Создать</button>
            </div>
        </div>
    </div>
    </form>
</div>

    </section><!-- /.content -->
</div><!-- /.content-wrapper -->

";
        // line 165
        $this->loadTemplate("@admin/footer.twig", "@admin/pages.html", 165)->display($context);
    }

    public function getTemplateName()
    {
        return "@admin/pages.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  376 => 165,  345 => 137,  316 => 111,  308 => 105,  299 => 101,  295 => 99,  286 => 96,  282 => 94,  268 => 89,  261 => 88,  253 => 86,  250 => 85,  242 => 83,  240 => 82,  236 => 81,  229 => 79,  222 => 76,  217 => 75,  214 => 74,  212 => 73,  204 => 70,  197 => 69,  189 => 67,  186 => 66,  178 => 64,  176 => 63,  172 => 62,  165 => 60,  158 => 57,  153 => 56,  150 => 55,  148 => 54,  140 => 51,  133 => 50,  125 => 48,  122 => 47,  114 => 45,  112 => 44,  108 => 43,  101 => 41,  94 => 38,  90 => 37,  80 => 32,  73 => 31,  65 => 29,  62 => 28,  54 => 26,  52 => 25,  48 => 24,  42 => 22,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%include \"@admin/head.twig\" %}
<!-- Content Wrapper. Contains page content -->
<div class=\"content-wrapper\">
    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
        <div class=\"btn-group pull-right\" role=\"group\">
            <button type=\"button\" class=\"btn btn-primary btn-sm\" data-toggle=\"modal\" data-target=\"#addFolder\"><i class=\"fa fa-folder\"></i> Добавить раздел</button>
            <button type=\"button\" class=\"btn btn-success btn-sm\" data-toggle=\"modal\" data-target=\"#addFile\"><i class=\"fa fa-plus\"></i> Добавить страницу</button>
            <button type=\"button\" class=\"btn btn-warning btn-sm\" id=\"savePagesList\"><i class=\"fa fa-plus\"></i> Сохранить изменения</button>
        </div>
        <h1>Страницы</h1>
    </section>

    <!-- Main content -->
    <section class=\"content\">
        <div class=\"box\">
            <div class=\"box-body\">
                <ol class=\"pages-list vertical\">
                    <li data-name=\"index\">
                        <div class=\"link\">
                        <i class=\"fa fa-arrows\"></i> &nbsp;  {# index #}
                        <i class=\"fa fa fa-file-o\"></i> &nbsp; {{ files_tree.title }}
                        <span class=\"control\">
                            <a href=\"{{ files_tree.url }}\" target=\"_blank\" title=\"открыть\" class=\"m-l-1\"><i class=\"fa fa-eye\"></i> перейти</a>
                            {% if files_tree.content_type == '.html' %}
                            <a href=\"{{ base_url }}/admin/edit?file={{ files_tree.file|escape }}\" title=\"редактировать\"><i class=\"fa fa-pencil\"></i> изменить</a>
                            {% endif %}
                            {% if files_tree.content_type == '.md' %}
                            <a href=\"{{ base_url }}/admin/md-to-html?file={{ files_tree.file|escape }}\" class=\"text-primary\"><i class=\"fa fa-html5\"></i> MD->HTML</a>
                            {% endif %}
                            <a href=\"{{ base_url }}/admin/code?file={{ files_tree.file|escape }}\" title=\"редактировать код\"><i class=\"fa fa-code\"></i> CODE</a>
                            <a href=\"{{ base_url }}/admin/pages?delete={{ files_tree.file|escape }}\" title=\"удалить\" class=\"text-danger\"><i class=\"fa fa-trash-o\"></i> удалить</a>
                        </span>
                        </div>
                    </li>

                    {% for page in files_tree.sub %}
                    <li data-name=\"{{ page.file }}\">
                        <div class=\"link\">
                        <i class=\"fa fa-arrows\"></i> &nbsp;
                        <i class=\"fa fa fa-{{ page.type }}-o\"></i> &nbsp; {{ page.title }}
                        <span class=\"control\">
                            <a href=\"{{ page.url }}\" target=\"_blank\" title=\"открыть\" class=\"m-l-1\"><i class=\"fa fa-eye\"></i> перейти</a>
                            {% if page.content_type == '.html' %}
                            <a href=\"{{ base_url }}/admin/edit?file={{ page.file|escape }}\" title=\"редактировать\"><i class=\"fa fa-pencil\"></i> изменить</a>
                            {% endif %}
                            {% if page.content_type == '.md' %}
                            <a href=\"{{ base_url }}/admin/md-to-html?file={{ page.file|escape }}\" class=\"text-primary\"><i class=\"fa fa-html5\"></i> MD->HTML</a>
                            {% endif %}
                            <a href=\"{{ base_url }}/admin/code?file={{ page.file|escape }}\" title=\"редактировать код\"><i class=\"fa fa-code\"></i> CODE</a>
                            <a href=\"{{ base_url }}/admin/pages?delete={{ page.file|escape }}\" title=\"удалить\" class=\"text-danger\"><i class=\"fa fa-trash-o\"></i> удалить</a>
                        </span>
                        </div>
                        {% if page.type == 'folder' %}
                            <ol>
                                {% if page.sub %}{% for page in page.sub %}
                                <li data-name=\"{{ page.file }}\">
                                    <div class=\"link\">
                                    <i class=\"fa fa-arrows\"></i> &nbsp;
                                    <i class=\"fa fa fa-{{ page.type }}-o\"></i> &nbsp; {{ page.title }}
                                    <span class=\"control\">
                                        <a href=\"{{ page.url }}\" target=\"_blank\" title=\"открыть\" class=\"m-l-1\"><i class=\"fa fa-eye\"></i> перейти</a>
                                        {% if page.content_type == '.html' %}
                                        <a href=\"{{ base_url }}/admin/edit?file={{ page.file|escape }}\" title=\"редактировать\"><i class=\"fa fa-pencil\"></i> изменить</a>
                                        {% endif %}
                                        {% if page.content_type == '.md' %}
                                        <a href=\"{{ base_url }}/admin/md-to-html?file={{ page.file|escape }}\" class=\"text-primary\"><i class=\"fa fa-html5\"></i> MD->HTML</a>
                                        {% endif %}
                                        <a href=\"{{ base_url }}/admin/code?file={{ page.file|escape }}\" title=\"редактировать код\"><i class=\"fa fa-code\"></i> CODE</a>
                                        <a href=\"{{ base_url }}/admin/pages?delete={{ page.file|escape }}\" title=\"удалить\" class=\"text-danger\"><i class=\"fa fa-trash-o\"></i> удалить</a>
                                    </span>
                                    </div>
                                    {% if page.type == 'folder' %}
                                    <ol>
                                        {% if page.sub %}{% for page in page.sub %}
                                        <li data-name=\"{{ page.file }}\">
                                            <div class=\"link\">
                                            <i class=\"fa fa-arrows\"></i> &nbsp;
                                            <i class=\"fa fa fa-{{ page.type }}-o\"></i> &nbsp; {{ page.title }}
                                            <span class=\"control\">
                                                <a href=\"{{ page.url }}\" target=\"_blank\" title=\"открыть\" class=\"m-l-1\"><i class=\"fa fa-eye\"></i> перейти</a>
                                                {% if page.content_type == '.html' %}
                                                <a href=\"{{ base_url }}/admin/edit?file={{ page.file|escape }}\" title=\"редактировать\"><i class=\"fa fa-pencil\"></i> изменить</a>
                                                {% endif %}
                                                {% if page.content_type == '.md' %}
                                                <a href=\"{{ base_url }}/admin/md-to-html?file={{ page.file|escape }}\" class=\"text-primary\"><i class=\"fa fa-html5\"></i> MD->HTML</a>
                                                {% endif %}
                                                <a href=\"{{ base_url }}/admin/code?file={{ page.file|escape }}\" title=\"редактировать код\"><i class=\"fa fa-code\"></i> CODE</a>
                                                <a href=\"{{ base_url }}/admin/pages?delete={{ page.file|escape }}\" title=\"удалить\" class=\"text-danger\"><i class=\"fa fa-trash-o\"></i> удалить</a>
                                            </span>
                                            </div>
                                        </li>
                                        {% endfor %}{% endif %}
                                    </ol>
                                    {% endif %}
                                </li>

                                {% endfor %}{% endif %}
                            </ol>
                        {% endif %}
                    </li>


                        {% endfor %}
                </ol>

            </div>
        </div>
<!-- Modal -->
<div class=\"modal fade\" id=\"addFile\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
    <form action=\"{{ base_url }}/admin/new\" method=\"post\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                <h4 class=\"modal-title\" id=\"myModalLabel\">Создание страницы</h4>
            </div>
            <div class=\"modal-body\">
                <div class=\"form-group\">
                    <label for=\"pageTitle\">Заголовок страницы:</label>
                    <input type=\"text\" class=\"form-control\" id=\"pageTitle\" name=\"pageTitle\" required>
                </div>
                <div class=\"form-group\">
                    <label for=\"pageFileName\">Имя файла:</label>
                    <input type=\"text\" class=\"form-control\" id=\"pageFileName\" name=\"pageFileName\" required placeholder=\"example.html\">
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"submit\" class=\"btn btn-primary\">Создать</button>
            </div>
        </div>
    </div>
    </form>
</div>

<div class=\"modal fade\" id=\"addFolder\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel2\">
    <form action=\"{{ base_url }}/admin/new\" method=\"post\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                <h4 class=\"modal-title\" id=\"myModalLabel2\">Создание раздела</h4>
            </div>
            <div class=\"modal-body\">
                <div class=\"form-group\">
                    <label for=\"folderTitle\">Заголовок раздела:</label>
                    <input type=\"text\" class=\"form-control\" id=\"folderTitle\" name=\"folderTitle\" required>
                </div>
                <div class=\"form-group\">
                    <label for=\"folderName\">Имя раздела:</label>
                    <input type=\"text\" class=\"form-control\" id=\"folderName\" name=\"folderName\" required placeholder=\"folder\">
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"submit\" class=\"btn btn-primary\">Создать</button>
            </div>
        </div>
    </div>
    </form>
</div>

    </section><!-- /.content -->
</div><!-- /.content-wrapper -->

{%include \"@admin/footer.twig\" %}", "@admin/pages.html", "/Users/nightman/Dropbox/My Site/lib/pico_admin/templates/pages.html");
    }
}
