<?php

/* analytics.twig */
class __TwigTemplate_a4bf5970f9c16a6e4ba59f87684ee87c9ec9f64b37c5d15bcced303e510c542e extends Twig_Template
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
<!-- Yandex.Metrika counter --> <script type=\"text/javascript\"> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter20065072 = new Ya.Metrika({ id:20065072, clickmap:true, trackLinks:true, accurateTrackBounce:true, trackHash:true }); } catch(e) { } }); var n = d.getElementsByTagName(\"script\")[0], s = d.createElement(\"script\"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = \"text/javascript\"; s.async = true; s.src = \"https://mc.yandex.ru/metrika/watch.js\"; if (w.opera == \"[object Opera]\") { d.addEventListener(\"DOMContentLoaded\", f, false); } else { f(); } })(document, window, \"yandex_metrika_callbacks\"); </script> <noscript><div><img src=\"https://mc.yandex.ru/watch/20065072\" style=\"position:absolute; left:-9999px;\" alt=\"\" /></div></noscript> <!-- /Yandex.Metrika counter -->
";
    }

    public function getTemplateName()
    {
        return "analytics.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "analytics.twig", "/Users/nightman/Dropbox/My Site/themes/nm2015/analytics.twig");
    }
}
