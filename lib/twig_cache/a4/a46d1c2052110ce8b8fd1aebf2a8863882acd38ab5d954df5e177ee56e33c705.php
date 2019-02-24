<?php

/* footer.twig */
class __TwigTemplate_25051eb4fee6b5acf8840cf3c7fdeeedd9ac6fa390351602e79db3effac3c19e extends Twig_Template
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
        echo "
</main>


</div> <!-- #page -->

<footer id=\"footer\" class=\"site-footer\">
    <div class=\"container\">
        <div class=\"copyright\"><p>Copyright © 2009-2017 <a href=\"mailto:sergey@fsky.info\">NightMan</a>. All Rights Reserved.<br /> Powered by <a href=\"http://picocms.org/\" target=\"_blank\">Pico</a></p></div>
    </div>
</footer>


<div class=\"scroll-to-top\" data-spy=\"affix\" data-offset-top=\"200\"><a href=\"#page\" class=\"smooth-scroll\"><i class=\"fa fa-arrow-up\"></i></a></div>
<script type=\"text/javascript\" src=\"";
        // line 15
        echo ($context["theme_url"] ?? null);
        echo "/js/pace.min.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 16
        echo ($context["theme_url"] ?? null);
        echo "/js/jquery-3.1.1.min.js\"></script>
<!--<script type=\"text/javascript\" src=\"";
        // line 17
        echo ($context["theme_url"] ?? null);
        echo "/js/jquery-3.1.1.slim.min.js\"></script>-->
<script type=\"text/javascript\" src=\"";
        // line 18
        echo ($context["theme_url"] ?? null);
        echo "/js/bootstrap.min.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 19
        echo ($context["theme_url"] ?? null);
        echo "/js/jquery.isotope.min.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 20
        echo ($context["theme_url"] ?? null);
        echo "/js/blocksit.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 21
        echo ($context["theme_url"] ?? null);
        echo "/js/jquery.lazyload.min.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 22
        echo ($context["theme_url"] ?? null);
        echo "/js/fastclick.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 23
        echo ($context["theme_url"] ?? null);
        echo "/js/jquery.appear.js\"></script>

<script src=\"";
        // line 25
        echo ($context["theme_url"] ?? null);
        echo "/TouchNSwipe/jquery.mousewheel.min.js\"></script>
<script src=\"";
        // line 26
        echo ($context["theme_url"] ?? null);
        echo "/TouchNSwipe/jquery.hammer.min.js\" type=\"text/javascript\"></script>
<script src=\"";
        // line 27
        echo ($context["theme_url"] ?? null);
        echo "/TouchNSwipe/TweenMax.min.js\" type=\"text/javascript\"></script>
<script src=\"";
        // line 28
        echo ($context["theme_url"] ?? null);
        echo "/TouchNSwipe/TouchNSwipe.js\" type=\"text/javascript\"></script>

<script type=\"text/javascript\" src=\"";
        // line 30
        echo ($context["theme_url"] ?? null);
        echo "/js/main.js\"></script>

";
        // line 35
        echo "
<!--https://tech.yandex.ru/browser/constructor/-->
<script src=\"https://yastatic.net/browser-updater/v1/script.js\" charset=\"utf-8\"></script><script>var yaBrowserUpdater = new ya.browserUpdater.init({\"lang\":\"ru\",\"browsers\":{\"yabrowser\":\"15.12\",\"chrome\":\"54\",\"ie\":\"10\",\"opera\":\"41\",\"safari\":\"8\",\"fx\":\"49\",\"iron\":\"35\",\"flock\":\"Infinity\",\"palemoon\":\"25\",\"camino\":\"Infinity\",\"maxthon\":\"4.5\",\"seamonkey\":\"2.3\"},\"theme\":\"yellow\"});</script>


";
        // line 40
        $this->loadTemplate("analytics.twig", "footer.twig", 40)->display($context);
        // line 54
        echo "</body>
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
        return array (  103 => 54,  101 => 40,  94 => 35,  89 => 30,  84 => 28,  80 => 27,  76 => 26,  72 => 25,  67 => 23,  63 => 22,  59 => 21,  55 => 20,  51 => 19,  47 => 18,  43 => 17,  39 => 16,  35 => 15,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "footer.twig", "/Users/nightman/Dropbox/My Site/themes/nm2015/footer.twig");
    }
}
