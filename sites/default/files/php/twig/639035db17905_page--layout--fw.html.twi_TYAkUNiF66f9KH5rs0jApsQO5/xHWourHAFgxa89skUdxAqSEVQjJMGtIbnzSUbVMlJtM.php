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

/* themes/custom/conbiz/templates/page/page-layout/page--layout--fw.html.twig */
class __TwigTemplate_750762b32292a6b77c6893b7e834a17d30511dbd8c2049eb686dd07c78e06976 extends \Twig\Template
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
        // line 7
        $context["has_breadcrumb"] = "";
        // line 8
        echo "<div class=\"gva-body-wrapper\">
\t<div class=\"body-page gva-body-page\">
\t   ";
        // line 10
        $this->loadTemplate(($context["header_skin"] ?? null), "themes/custom/conbiz/templates/page/page-layout/page--layout--fw.html.twig", 10)->display($context);
        // line 11
        echo "\t\t
\t\t";
        // line 12
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumbs", [], "any", false, false, true, 12)) {
            // line 13
            echo "\t\t\t";
            $context["has_breadcrumb"] = " has-breadcrumb";
            // line 14
            echo "\t\t\t<div class=\"breadcrumbs\">
\t\t\t\t";
            // line 15
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumbs", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
            echo "
\t\t\t</div>
\t\t";
        }
        // line 18
        echo "
\t\t<div role=\"main\" class=\"main main-page";
        // line 19
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["has_breadcrumb"] ?? null), 19, $this->source), "html", null, true);
        echo "\">
\t\t
\t\t\t<div class=\"clearfix\"></div>

\t\t\t";
        // line 23
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 23)) {
            // line 24
            echo "\t\t\t\t<div class=\"help gav-help-region\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"content-inner\">
\t\t\t\t\t\t\t";
            // line 27
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 32
        echo "\t\t\t
\t\t\t<div class=\"clearfix\"></div>
\t\t\t";
        // line 34
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "before_content", [], "any", false, false, true, 34)) {
            // line 35
            echo "\t\t\t\t<div class=\"before_content area\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t";
            // line 39
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "before_content", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
            echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 45
        echo "\t\t\t
\t\t\t<div class=\"clearfix\"></div>
\t\t\t
\t\t\t<div id=\"content\" class=\"content content-full\">
\t\t\t\t<div class=\"container-full container-bg\">
\t\t\t\t\t";
        // line 50
        $this->loadTemplate("@conbiz/page/main-full.html.twig", "themes/custom/conbiz/templates/page/page-layout/page--layout--fw.html.twig", 50)->display($context);
        // line 51
        echo "\t\t\t\t</div>
\t\t\t</div>

\t\t\t";
        // line 54
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 54)) {
            // line 55
            echo "\t\t\t\t<div class=\"highlighted area\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t";
            // line 57
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
            echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 61
        echo "
\t\t\t";
        // line 62
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "after_content", [], "any", false, false, true, 62)) {
            // line 63
            echo "\t\t\t\t<div class=\"area after-content\">
\t\t\t\t\t<div class=\"container\">
\t\t          \t<div class=\"content-inner\">
\t\t\t\t\t\t\t ";
            // line 66
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "after_content", [], "any", false, false, true, 66), 66, $this->source), "html", null, true);
            echo "
\t\t          \t</div>
\t        \t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 71
        echo "\t\t\t
\t\t</div>
\t</div>

\t";
        // line 75
        $this->loadTemplate("@conbiz/page/footer.html.twig", "themes/custom/conbiz/templates/page/page-layout/page--layout--fw.html.twig", 75)->display($context);
        // line 76
        echo "</div>
<script>
   imageMapResize();
</script>
";
        // line 80
        $this->loadTemplate("@conbiz/page/parts/quick-side.html.twig", "themes/custom/conbiz/templates/page/page-layout/page--layout--fw.html.twig", 80)->display($context);
    }

    public function getTemplateName()
    {
        return "themes/custom/conbiz/templates/page/page-layout/page--layout--fw.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 80,  163 => 76,  161 => 75,  155 => 71,  147 => 66,  142 => 63,  140 => 62,  137 => 61,  130 => 57,  126 => 55,  124 => 54,  119 => 51,  117 => 50,  110 => 45,  101 => 39,  95 => 35,  93 => 34,  89 => 32,  81 => 27,  76 => 24,  74 => 23,  67 => 19,  64 => 18,  58 => 15,  55 => 14,  52 => 13,  50 => 12,  47 => 11,  45 => 10,  41 => 8,  39 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/conbiz/templates/page/page-layout/page--layout--fw.html.twig", "D:\\www BU\\101422\\BU111022\\hmp\\themes\\custom\\conbiz\\templates\\page\\page-layout\\page--layout--fw.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 7, "include" => 10, "if" => 12);
        static $filters = array("escape" => 15);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'include', 'if'],
                ['escape'],
                []
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
