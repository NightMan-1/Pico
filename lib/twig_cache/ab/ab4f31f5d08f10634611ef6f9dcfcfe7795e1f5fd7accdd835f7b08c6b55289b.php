<?php

/* blog-page.html */
class __TwigTemplate_1dca1238faf0b6b160d57a6e1a9337e5ff870524b22b19e39e9e6977933e51e9 extends Twig_Template
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
        $this->loadTemplate("head.twig", "blog-page.html", 1)->display($context);
        // line 2
        echo "

<div class=\"container\">
    <div class=\"meta pull-right\">
        <i class=\"text-muted fa fa-clock-o\"></i>
        <span class=\"text-danger\"><abbr class=\"published\" title=\"";
        // line 7
        echo twig_localized_date_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["meta"] ?? null), "date", array()), "full", "full", ($context["locale"] ?? null));
        echo "\">";
        echo twig_localized_date_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["meta"] ?? null), "date", array()), "medium", "none", ($context["locale"] ?? null));
        echo "</abbr></span>
    </div>
</div>

<section class=\"section section-center- article animated- fadeIn-\"> ";
        // line 12
        echo "    <div class=\"container\">

        <h2 class=\"section-title\"><span>";
        // line 14
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["meta"] ?? null), "title", array());
        echo "</span></h2>

        ";
        // line 16
        echo ($context["content"] ?? null);
        echo "

        ";
        // line 18
        if (($context["images"] ?? null)) {
            // line 19
            echo "        <div class=\"gallery\">
            ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 21
                echo "            <div class=\"item ";
                echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["meta"] ?? null), "gallery", array());
                echo " hover-effect imageLink\" data-link=\"slider:0; index:";
                echo twig_get_attribute($this->env, $this->getSourceContext(), $context["image"], "id", array());
                echo "\">
                <img class=\"lazy\" data-original=\"";
                // line 22
                echo twig_get_attribute($this->env, $this->getSourceContext(), $context["image"], "thumb", array());
                echo "\" alt=\"\" width=\"";
                echo twig_get_attribute($this->env, $this->getSourceContext(), $context["image"], "w", array());
                echo "\" height=\"";
                echo twig_get_attribute($this->env, $this->getSourceContext(), $context["image"], "h", array());
                echo "\" src=\"";
                echo ($context["theme_url"] ?? null);
                echo "/img/00000000.png\">
                <span class=\"overlay\"><i class=\"fa fa-search-plus\"></i></span>
            </div>

            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "        </div>


        <div class=\"sliderHolder\" data-elem=\"sliderHolder\">
            <div id=\"g1\" class=\"slider\" data-elem=\"slider\" data-options=\"initShow:false; resetScrollDuration:1;\" data-show=\"autoAlpha:1; display:block\" data-hide=\"autoAlpha:0; display:none\">
                <div class=\"sliderBg blackBgAlpha90\"></div>
                <div class=\"slides\" data-elem=\"slides\" data-options=\"preloaderUrl:";
            // line 33
            echo ($context["theme_url"] ?? null);
            echo "/TouchNSwipe/preloader.gif; resizeDuration:1; adjustHeight:-30\" ></div>
                <div class=\"controlHolder\">
                    <div class=\"autoPlayIcon controlPos1\" data-elem=\"autoPlay\" data-on=\"background-position:-25px 0px;\" data-off=\"background-position:0px 0px;\"> </div>
                    <div class=\"prevIcon controlPos2\" data-elem=\"prev\" data-on=\"autoAlpha:1; cursor: pointer;\" data-off=\"autoAlpha:0.5; cursor:default\"> </div>
                    <div class=\"nextIcon controlPos3\" data-elem=\"next\" data-on=\"autoAlpha:1; cursor: pointer;\" data-off=\"autoAlpha:0.5; cursor:default\"> </div>
                    <div class=\"zoomOutIcon controlPos4\" data-elem=\"zoomOut\" data-on=\"autoAlpha:1; cursor: pointer;\" data-off=\"autoAlpha:0.5; cursor:default\"> </div>
                    <div class=\"zoomInIcon controlPos5\" data-elem=\"zoomIn\" data-on=\"autoAlpha:1; cursor: pointer;\" data-off=\"autoAlpha:0.5; cursor:default\"> </div>
                    <div class=\"closeIcon controlPos7\" data-elem=\"close\"></div>
                </div>
                <ul data-elem=\"items\">
                    ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 44
                echo "                    <li><img data-original=\"";
                echo twig_get_attribute($this->env, $this->getSourceContext(), $context["image"], "url", array());
                echo "\"/></li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "                </ul>
            </div>
        </div>



        ";
        }
        // line 53
        echo "
        <div class=\"clearfix\"></div>
    </div>
</section>


";
        // line 59
        $this->loadTemplate("footer.twig", "blog-page.html", 59)->display($context);
    }

    public function getTemplateName()
    {
        return "blog-page.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 59,  127 => 53,  118 => 46,  109 => 44,  105 => 43,  92 => 33,  84 => 27,  67 => 22,  60 => 21,  56 => 20,  53 => 19,  51 => 18,  46 => 16,  41 => 14,  37 => 12,  28 => 7,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "blog-page.html", "/Users/nightman/Dropbox/My Site/themes/nm2015/blog-page.html");
    }
}
