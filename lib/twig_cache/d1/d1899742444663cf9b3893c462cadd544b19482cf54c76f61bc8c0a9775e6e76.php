<?php

/* footer.twig */
class __TwigTemplate_da6393b20937c6007f314fbad082c115d37cfd314115dd6e20be3c3af234c95b extends Twig_Template
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
        echo "</section><!-- /.container  /#content-->

<footer id=\"footer\" class=\"midnight-blue\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-6\">
                Powered by <a href=\"http://picocms.org/\" target=\"_blank\">Pico</a> | Theme by <a target=\"_blank\" href=\"http://shapebootstrap.net/\" title=\"Free Twitter Bootstrap WordPress Themes and HTML templates\">ShapeBootstrap</a>.

            </div>
            <div class=\"col-sm-6\">
                <ul class=\"pull-right\">
                    <li><a href=\"#\">Home</a></li>
                    <li><a href=\"#\">About Us</a></li>
                    <li><a href=\"#\">Faq</a></li>
                    <li><a href=\"#\">Contact Us</a></li>
                    <li><a id=\"gototop\" class=\"gototop\" href=\"#\"><i class=\"icon-chevron-up\"></i></a></li><!--#gototop-->
                </ul>
            </div>
        </div>
    </div>
</footer><!--/#footer-->

<script src=\"";
        // line 23
        echo ($context["theme_url"] ?? null);
        echo "/js/jquery.js\"></script>
<script src=\"";
        // line 24
        echo ($context["theme_url"] ?? null);
        echo "/js/bootstrap.min.js\"></script>
<script src=\"";
        // line 25
        echo ($context["theme_url"] ?? null);
        echo "/js/main.js\"></script>

<script src=\"";
        // line 27
        echo ($context["theme_url"] ?? null);
        echo "/js/jquery.lazyload.min.js\"></script>
<script src=\"";
        // line 28
        echo ($context["theme_url"] ?? null);
        echo "/js/blocksit.js\"></script>
<script src=\"";
        // line 29
        echo ($context["theme_url"] ?? null);
        echo "/swipebox/jquery.swipebox.js\"></script>
<script src=\"";
        // line 30
        echo ($context["theme_url"] ?? null);
        echo "/js/script.js\"></script>


</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 30,  64 => 29,  60 => 28,  56 => 27,  51 => 25,  47 => 24,  43 => 23,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("</section><!-- /.container  /#content-->

<footer id=\"footer\" class=\"midnight-blue\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-6\">
                Powered by <a href=\"http://picocms.org/\" target=\"_blank\">Pico</a> | Theme by <a target=\"_blank\" href=\"http://shapebootstrap.net/\" title=\"Free Twitter Bootstrap WordPress Themes and HTML templates\">ShapeBootstrap</a>.

            </div>
            <div class=\"col-sm-6\">
                <ul class=\"pull-right\">
                    <li><a href=\"#\">Home</a></li>
                    <li><a href=\"#\">About Us</a></li>
                    <li><a href=\"#\">Faq</a></li>
                    <li><a href=\"#\">Contact Us</a></li>
                    <li><a id=\"gototop\" class=\"gototop\" href=\"#\"><i class=\"icon-chevron-up\"></i></a></li><!--#gototop-->
                </ul>
            </div>
        </div>
    </div>
</footer><!--/#footer-->

<script src=\"{{ theme_url }}/js/jquery.js\"></script>
<script src=\"{{ theme_url }}/js/bootstrap.min.js\"></script>
<script src=\"{{ theme_url }}/js/main.js\"></script>

<script src=\"{{ theme_url }}/js/jquery.lazyload.min.js\"></script>
<script src=\"{{ theme_url }}/js/blocksit.js\"></script>
<script src=\"{{ theme_url }}/swipebox/jquery.swipebox.js\"></script>
<script src=\"{{ theme_url }}/js/script.js\"></script>


</body>
</html>
", "footer.twig", "/Users/nightman/Dropbox/My Site/themes/flat-theme/footer.twig");
    }
}
