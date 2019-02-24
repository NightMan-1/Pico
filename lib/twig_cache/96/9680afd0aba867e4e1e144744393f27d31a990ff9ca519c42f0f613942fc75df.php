<?php

/* footer.twig */
class __TwigTemplate_29d619f557e6a2094755b6fc12e16428c821dd6572c6fd9a0972df30eddd5540 extends Twig_Template
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
";
        // line 32
        echo "
<script type=\"text/javascript\" src=\"";
        // line 33
        echo ($context["theme_url"] ?? null);
        echo "/js/all-in-one.js\" async defer></script>

<!--https://tech.yandex.ru/browser/constructor/-->
<script src=\"https://yastatic.net/browser-updater/v1/script.js\" charset=\"utf-8\"></script><script>var yaBrowserUpdater = new ya.browserUpdater.init({\"lang\":\"ru\",\"browsers\":{\"yabrowser\":\"15.12\",\"chrome\":\"54\",\"ie\":\"10\",\"opera\":\"41\",\"safari\":\"8\",\"fx\":\"49\",\"iron\":\"35\",\"flock\":\"Infinity\",\"palemoon\":\"25\",\"camino\":\"Infinity\",\"maxthon\":\"4.5\",\"seamonkey\":\"2.3\"},\"theme\":\"yellow\"});</script>


";
        // line 39
        $this->loadTemplate("analytics.twig", "footer.twig", 39)->display($context);
        // line 53
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
        return array (  53 => 53,  51 => 39,  42 => 33,  39 => 32,  35 => 15,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
</main>


</div> <!-- #page -->

<footer id=\"footer\" class=\"site-footer\">
    <div class=\"container\">
        <div class=\"copyright\"><p>Copyright © 2009-2017 <a href=\"mailto:sergey@fsky.info\">NightMan</a>. All Rights Reserved.<br /> Powered by <a href=\"http://picocms.org/\" target=\"_blank\">Pico</a></p></div>
    </div>
</footer>


<div class=\"scroll-to-top\" data-spy=\"affix\" data-offset-top=\"200\"><a href=\"#page\" class=\"smooth-scroll\"><i class=\"fa fa-arrow-up\"></i></a></div>
<script type=\"text/javascript\" src=\"{{ theme_url }}/js/pace.min.js\"></script>
{#
<script type=\"text/javascript\" src=\"{{ theme_url }}/js/jquery-3.1.1.min.js\"></script>
<script type=\"text/javascript\" src=\"{{ theme_url }}/js/bootstrap.min.js\"></script>
<script type=\"text/javascript\" src=\"{{ theme_url }}/js/jquery.isotope.min.js\"></script>
<script type=\"text/javascript\" src=\"{{ theme_url }}/js/blocksit.js\"></script>
<script type=\"text/javascript\" src=\"{{ theme_url }}/js/lazyload.min.js\"></script>
<script type=\"text/javascript\" src=\"{{ theme_url }}/js/fastclick.js\"></script>
<script type=\"text/javascript\" src=\"{{ theme_url }}/js/jquery.appear.js\"></script>
<script src=\"{{ theme_url }}/lightgallery/js/lightgallery.min.js\"></script>
<script src=\"{{ theme_url }}/lightgallery/js/lg-autoplay.min.js\"></script>
<script src=\"{{ theme_url }}/lightgallery/js/lg-zoom.min.js\"></script>
<script src=\"{{ theme_url }}/lightgallery/js/lg-hash.min.js\"></script>
<script src=\"{{ theme_url }}/lightgallery/js/lg-thumbnail.min.js\"></script>
<script src=\"{{ theme_url }}/lightgallery/js/lg-fullscreen.min.js\"></script>
<script type=\"text/javascript\" src=\"{{ theme_url }}/js/main.js\"></script>
#}

<script type=\"text/javascript\" src=\"{{ theme_url }}/js/all-in-one.js\" async defer></script>

<!--https://tech.yandex.ru/browser/constructor/-->
<script src=\"https://yastatic.net/browser-updater/v1/script.js\" charset=\"utf-8\"></script><script>var yaBrowserUpdater = new ya.browserUpdater.init({\"lang\":\"ru\",\"browsers\":{\"yabrowser\":\"15.12\",\"chrome\":\"54\",\"ie\":\"10\",\"opera\":\"41\",\"safari\":\"8\",\"fx\":\"49\",\"iron\":\"35\",\"flock\":\"Infinity\",\"palemoon\":\"25\",\"camino\":\"Infinity\",\"maxthon\":\"4.5\",\"seamonkey\":\"2.3\"},\"theme\":\"yellow\"});</script>


{% include 'analytics.twig' %}
{#

        {% if SITEDEBUG %}
            <script type=\"text/javascript\">
                \$(document).ready(function() {
                    console.log(\"Time until DOMready: \", Date.now()-timerStart);
                });
                \$(window).load(function() {
                    console.log(\"Time until everything loaded: \", Date.now()-timerStart);
                });
            </script>
        {% endif %}
#}
</body>
</html>


", "footer.twig", "C:\\Users\\NightMan\\Dropbox\\My Site\\themes\\nm2015\\footer.twig");
    }
}
