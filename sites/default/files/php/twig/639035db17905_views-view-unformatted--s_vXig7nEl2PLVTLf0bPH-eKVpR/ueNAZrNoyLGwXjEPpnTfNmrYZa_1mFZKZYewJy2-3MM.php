<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/conbiz/templates/views-view-unformatted--sdg--block_1.html.twig */
class __TwigTemplate_4065f0acb1d2a1403c5c384a24a8efdc130463b39478afaffd0e4c2e818e46a4 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "\t\t\t\t\t<!--<div class=\"row\">
\t\t\t\t\t\t<div id=\"tagline-block\" style=\"text-align: center;\">
\t\t\t\t\t\t\t<h2>Helping governments and stakeholders make the SDGs a reality</h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>\t
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col\" style=\"margin-bottom:2em;\">
\t\t\t\t\t\t   <section class=\"events-area ptb-140 bg-1\">
\t\t\t\t\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t\t\t\t\t<div class=\"row\">  -->
\t\t\t\t\t\t\t\t\t\t";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            echo "\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t";
            // line 13
            $context["row_classes"] = [0 => ((            // line 14
($context["default_row_class"] ?? null)) ? (twig_cycle([0 => "even", 1 => "odd"], $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 14), 14, $this->source))) : ("")), 1 => "views-row"];
            // line 18
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            $context["parity"] = twig_cycle([0 => "mainsdgbox1", 1 => "mainsdgbox2", 2 => "mainsdgbox3", 3 => "mainsdgbox4", 4 => "mainsdgbox5", 5 => "mainsdgbox6", 6 => "mainsdgbox7", 7 => "mainsdgbox8", 8 => "mainsdgbox9", 9 => "mainsdgbox10", 10 => "mainsdgbox11", 11 => "mainsdgbox12", 12 => "mainsdgbox13", 13 => "mainsdgbox14", 14 => "mainsdgbox15", 15 => "mainsdgbox16", 16 => "mainsdgbox17"], $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 18), 18, $this->source));
            // line 19
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            $context["sdgbox"] = "sdgbox";
            // line 20
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if ((($context["parity"] ?? null) == "mainsdgbox2")) {
                // line 21
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<div ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "attributes", [], "any", false, false, true, 21), "addClass", [0 => ($context["sdgbox"] ?? null)], "method", false, false, true, 21), 21, $this->source), "html", null, true);
                echo " ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "setAttribute", [0 => "id", 1 => ($context["parity"] ?? null)], "method", false, false, true, 21), 21, $this->source), "html", null, true);
                echo " style=\"display:block;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 22
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 25
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<div ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "attributes", [], "any", false, false, true, 25), "addClass", [0 => ($context["sdgbox"] ?? null)], "method", false, false, true, 25), 25, $this->source), "html", null, true);
                echo " ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "setAttribute", [0 => "id", 1 => ($context["parity"] ?? null)], "method", false, false, true, 25), 25, $this->source), "html", null, true);
                echo " style=\"display:none;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 26
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 29
            echo "\t\t\t\t\t\t\t\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "

\t\t\t\t\t\t\t\t\t<!--</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>-->
\t\t\t\t\t<div class=\"gsc-column col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12  \">
\t\t\t\t\t\t<div class=\"column-inner  bg-size-cover  \">
\t\t\t\t\t\t\t<div class=\"column-content-inner\">
\t\t\t\t\t\t\t\t<div class=\"widget gsc-image text-center \">
\t\t\t\t\t\t\t\t\t<div class=\"widget-content\">
\t\t\t\t\t\t\t\t\t\t<img id=\"sdgwheel\" alt=\"SDG wheel\" class=\"img-fluid\" usemap=\"#Map\" src=\"/hmp/themes/custom/conbiz/templates/IMG/sdgwheelnumbers455.png\">
\t\t\t\t\t\t\t\t\t\t<!--<map name=\"Map\" id=\"Map\">
\t\t\t\t\t\t\t\t\t\t  <area alt=\"\" title=\"\" shape=\"poly\" coords=\"389,14,492,35,437,176,388,168\" onclick=\"clickBox(1)\">
\t\t\t\t\t\t\t\t\t\t  <area alt=\"\" title=\"\" shape=\"poly\" coords=\"517,43,607,101,502,216,461,189\" onclick=\"clickBox(2)\">
\t\t\t\t\t\t\t\t\t\t  <area alt=\"\" title=\"\" shape=\"poly\" coords=\"524,233,626,117,688,201,552,272\" onclick=\"clickBox(3)\">
\t\t\t\t\t\t\t\t\t\t  <area alt=\"\" title=\"\" shape=\"poly\" coords=\"564,296,700,228,725,324,579,336\" onclick=\"clickBox(4)\">
\t\t\t\t\t\t\t\t\t\t  <area alt=\"\" title=\"\" shape=\"poly\" coords=\"580,367,731,353,723,452,577,412\" onclick=\"clickBox(5)\">
\t\t\t\t\t\t\t\t\t\t  <area alt=\"\" title=\"\" shape=\"poly\" coords=\"567,438,713,483,671,568,548,483\" onclick=\"clickBox(6)\">
\t\t\t\t\t\t\t\t\t\t  <area alt=\"\" title=\"\" shape=\"poly\" coords=\"531,503,649,593,577,663,497,537\" onclick=\"clickBox(7)\">
\t\t\t\t\t\t\t\t\t\t  <area alt=\"\" title=\"\" shape=\"poly\" coords=\"473,549,551,677,458,718,427,568\" onclick=\"clickBox(8)\">
\t\t\t\t\t\t\t\t\t\t  <area alt=\"\" title=\"\" shape=\"poly\" coords=\"354,575,402,574,434,720,326,724\" onclick=\"clickBox(9)\">
\t\t\t\t\t\t\t\t\t\t  <area alt=\"\" title=\"\" shape=\"poly\" coords=\"282,552,327,571,298,719,203,680\" onclick=\"clickBox(10)\">
\t\t\t\t\t\t\t\t\t\t  <area alt=\"\" title=\"\" shape=\"poly\" coords=\"223,503,258,539,179,670,101,598\" onclick=\"clickBox(11)\">
\t\t\t\t\t\t\t\t\t\t  <area alt=\"\" title=\"\" shape=\"poly\" coords=\"185,440,206,483,86,575,37,483\" onclick=\"clickBox(12)\">
\t\t\t\t\t\t\t\t\t\t  <area alt=\"\" title=\"\" shape=\"poly\" coords=\"172,364,175,411,29,458,19,351\" onclick=\"clickBox(13)\">
\t\t\t\t\t\t\t\t\t\t  <area alt=\"\" title=\"\" shape=\"poly\" coords=\"190,290,174,336,23,324,55,223\" onclick=\"clickBox(14)\">
\t\t\t\t\t\t\t\t\t\t  <area alt=\"\" title=\"\" shape=\"poly\" coords=\"230,227,199,266,63,199,126,118\" onclick=\"clickBox(15)\">
\t\t\t\t\t\t\t\t\t\t  <area alt=\"\" title=\"\" shape=\"poly\" coords=\"293,188,249,213,148,98,237,46\" onclick=\"clickBox(16)\">
\t\t\t\t\t\t\t\t\t\t  <area alt=\"\" title=\"\" shape=\"poly\" coords=\"260,35,363,15,367,166,315,177\" onclick=\"clickBox(17)\">
\t\t\t\t\t\t\t\t\t\t</map>-->
\t\t\t\t\t\t\t\t\t\t<map name=\"Map\" id=\"Map\">      
\t\t\t\t\t\t\t\t\t\t\t  <area alt=\"\" title=\"\" shape=\"poly\" coords=\"237,105,267,110,298,23,269,12,237,11,235,61\" onclick=\"clickBox(1)\">
\t\t\t\t\t\t\t\t\t\t\t  <area alt=\"\" title=\"\" shape=\"poly\" coords=\"279,115,304,131,371,63,313,27,299,61,289,93\" onclick=\"clickBox(2)\">
\t\t\t\t\t\t\t\t\t\t\t  <area alt=\"\" title=\"\" shape=\"poly\" coords=\"315,140,335,167,418,123,402,94,379,72\" onclick=\"clickBox(3)\">
\t\t\t\t\t\t\t\t\t\t\t  <area alt=\"\" title=\"\" shape=\"poly\" coords=\"340,178,349,207,445,199,436,165,425,136\" onclick=\"clickBox(4)\">
\t\t\t\t\t\t\t\t\t\t\t  <area alt=\"\" title=\"\" shape=\"poly\" coords=\"351,223,444,214,444,244,440,279,348,253\" onclick=\"clickBox(5)\">
\t\t\t\t\t\t\t\t\t\t\t  <area alt=\"\" title=\"\" shape=\"poly\" coords=\"344,266,435,292,422,322,407,348,330,292\" onclick=\"clickBox(6)\">
\t\t\t\t\t\t\t\t\t\t\t  <area alt=\"\" title=\"\" shape=\"poly\" coords=\"321,304,397,360,376,389,348,407,300,328\" onclick=\"clickBox(7)\">
\t\t\t\t\t\t\t\t\t\t\t  <area alt=\"\" title=\"\" shape=\"poly\" coords=\"287,332,338,413,306,427,278,439,258,344\" onclick=\"clickBox(8)\">
\t\t\t\t\t\t\t\t\t\t\t  <area alt=\"\" title=\"\" shape=\"poly\" coords=\"246,350,263,439,226,444,195,440,214,349\" onclick=\"clickBox(9)\">
\t\t\t\t\t\t\t\t\t\t\t  <area alt=\"\" title=\"\" shape=\"poly\" coords=\"200,345,184,438,146,431,122,412,169,333\" onclick=\"clickBox(10)\">
\t\t\t\t\t\t\t\t\t\t\t  <area alt=\"\" title=\"\" shape=\"poly\" coords=\"159,327,108,407,79,387,58,360,134,305\" onclick=\"clickBox(11)\">
\t\t\t\t\t\t\t\t\t\t\t  <area alt=\"\" title=\"\" shape=\"poly\" coords=\"124,294,50,350,34,323,22,291,110,265\" onclick=\"clickBox(12)\">
\t\t\t\t\t\t\t\t\t\t\t  <area alt=\"\" title=\"\" shape=\"poly\" coords=\"107,252,17,276,11,244,12,212,104,222\" onclick=\"clickBox(13)\">
\t\t\t\t\t\t\t\t\t\t\t  <area alt=\"\" title=\"\" shape=\"poly\" coords=\"108,206,12,199,20,167,31,132,114,177\" onclick=\"clickBox(14)\">
\t\t\t\t\t\t\t\t\t\t\t  <area alt=\"\" title=\"\" shape=\"poly\" coords=\"142,140,122,165,38,120,56,93,78,70\" onclick=\"clickBox(15)\">
\t\t\t\t\t\t\t\t\t\t\t  <area alt=\"\" title=\"\" shape=\"poly\" coords=\"178,115,152,129,89,61,112,42,146,27\" onclick=\"clickBox(16)\">
\t\t\t\t\t\t\t\t\t\t\t  <area alt=\"\" title=\"\" shape=\"poly\" coords=\"224,9,224,105,191,107,156,20,193,12\" onclick=\"clickBox(17)\">
\t\t\t\t\t\t\t\t\t\t</map>
\t\t\t\t\t\t\t\t\t<!-- <img id=\"center-image\" src=\"//sustainabledevelopment.un.org/content/images/image_logo_clean10008_60.jpg\" alt=\"sdg decoration image\"> -->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div> 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t\t";
    }

    public function getTemplateName()
    {
        return "themes/custom/conbiz/templates/views-view-unformatted--sdg--block_1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 30,  108 => 29,  102 => 26,  95 => 25,  89 => 22,  82 => 21,  79 => 20,  76 => 19,  73 => 18,  71 => 14,  70 => 13,  51 => 11,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/conbiz/templates/views-view-unformatted--sdg--block_1.html.twig", "D:\\www BU\\101422\\BU111022\\hmp\\themes\\custom\\conbiz\\templates\\views-view-unformatted--sdg--block_1.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 11, "set" => 13, "if" => 20);
        static $filters = array("escape" => 21);
        static $functions = array("cycle" => 14);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set', 'if'],
                ['escape'],
                ['cycle']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
