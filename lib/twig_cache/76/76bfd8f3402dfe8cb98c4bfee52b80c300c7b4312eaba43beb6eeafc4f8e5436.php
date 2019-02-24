<?php

/* @admin/login.html */
class __TwigTemplate_18bde8813c49b8a00353ecc517bdbfd2e4d4a263004ca25ab59947f6060231c5 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\" class=\"no-js\">
<head>
\t<meta charset=\"utf-8\" />
\t<title>Pico Admin Login</title>

\t<link href=\"";
        // line 7
        echo ($context["base_url"] ?? null);
        echo "/lib/pico_admin/assets/css/bootstrap.css\" rel=\"stylesheet\">
\t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css\">
\t<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,700,700italic&subset=latin,cyrillic,cyrillic-ext' rel='stylesheet' type='text/css'>
\t<link href=\"";
        // line 10
        echo ($context["base_url"] ?? null);
        echo "/lib/pico_admin/assets/css/style.css\" rel=\"stylesheet\">

\t<meta name=\"robots\" content=\"noindex, nofollow\" />

</head>
<body>

<div class=\"container\">

\t<form class=\"login-form\" method=\"post\" action=\"\">
\t\t<h2 class=\"form-login-heading text-center\">Pico Admin Login</h2>
\t\t<br>
\t\t";
        // line 22
        if (($context["login_error"] ?? null)) {
            // line 23
            echo "\t\t<div class=\"alert alert-danger\" role=\"alert\">
\t\t\t<p class=\"text-center\">";
            // line 24
            echo ($context["login_error"] ?? null);
            echo "</p>
\t\t</div>
\t\t";
        }
        // line 27
        echo "
\t\t<label for=\"password\" class=\"sr-only\">Password</label>
\t\t<input type=\"password\" id=\"password\" class=\"form-control\" placeholder=\"Password\" name=\"password\" required>
\t\t<button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\"><i class=\"fa fa-sign-in\"></i> Login</button>
\t</form>

</div> <!-- /container -->


</body>
</html>";
    }

    public function getTemplateName()
    {
        return "@admin/login.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 27,  53 => 24,  50 => 23,  48 => 22,  33 => 10,  27 => 7,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\" class=\"no-js\">
<head>
\t<meta charset=\"utf-8\" />
\t<title>Pico Admin Login</title>

\t<link href=\"{{ base_url }}/lib/pico_admin/assets/css/bootstrap.css\" rel=\"stylesheet\">
\t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css\">
\t<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,700,700italic&subset=latin,cyrillic,cyrillic-ext' rel='stylesheet' type='text/css'>
\t<link href=\"{{ base_url }}/lib/pico_admin/assets/css/style.css\" rel=\"stylesheet\">

\t<meta name=\"robots\" content=\"noindex, nofollow\" />

</head>
<body>

<div class=\"container\">

\t<form class=\"login-form\" method=\"post\" action=\"\">
\t\t<h2 class=\"form-login-heading text-center\">Pico Admin Login</h2>
\t\t<br>
\t\t{% if login_error %}
\t\t<div class=\"alert alert-danger\" role=\"alert\">
\t\t\t<p class=\"text-center\">{{ login_error }}</p>
\t\t</div>
\t\t{% endif %}

\t\t<label for=\"password\" class=\"sr-only\">Password</label>
\t\t<input type=\"password\" id=\"password\" class=\"form-control\" placeholder=\"Password\" name=\"password\" required>
\t\t<button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\"><i class=\"fa fa-sign-in\"></i> Login</button>
\t</form>

</div> <!-- /container -->


</body>
</html>", "@admin/login.html", "/Users/nightman/Dropbox/My Site/lib/pico_admin/templates/login.html");
    }
}
