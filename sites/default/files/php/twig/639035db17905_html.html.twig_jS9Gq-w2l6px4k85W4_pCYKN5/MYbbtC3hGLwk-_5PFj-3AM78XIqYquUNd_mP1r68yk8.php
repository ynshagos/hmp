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

/* themes/custom/conbiz/templates/page/html.html.twig */
class __TwigTemplate_4fda63619857c3d35983479aac8f4a027fbb55699d7e90ddac087a9686e74d5c extends \Twig\Template
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
        // line 26
        echo "<!DOCTYPE html>
<html";
        // line 27
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["html_attributes"] ?? null), 27, $this->source), "html", null, true);
        echo ">
  <head> 
    <head-placeholder token=\"";
        // line 29
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 29, $this->source));
        echo "\">
    <title>";
        // line 30
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->safeJoin($this->env, $this->sandbox->ensureToStringAllowed(($context["head_title"] ?? null), 30, $this->source), " | "));
        echo "</title>
    <css-placeholder token=\"";
        // line 31
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 31, $this->source));
        echo "\">

    <js-placeholder token=\"";
        // line 33
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 33, $this->source));
        echo "\">

    ";
        // line 35
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["links_google_fonts"] ?? null), 35, $this->source));
        echo "

    ";
        // line 37
        if (($context["customize_css"] ?? null)) {
            // line 38
            echo "      <style type=\"text/css\">
        ";
            // line 39
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["customize_css"] ?? null), 39, $this->source));
            echo "
      </style>
    ";
        }
        // line 42
        echo "
    ";
        // line 43
        if (($context["customize_styles"] ?? null)) {
            // line 44
            echo "      ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["customize_styles"] ?? null), 44, $this->source));
            echo "
    ";
        }
        // line 46
        echo "
    ";
        // line 47
        if (($context["pagebuilder_style"] ?? null)) {
            // line 48
            echo "      <style type=\"text/css\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["pagebuilder_style"] ?? null), 48, $this->source));
            echo "</style>
    ";
        }
        // line 50
        echo "  </head>

  ";
        // line 52
        $context["body_classes"] = [0 => ((        // line 53
($context["logged_in"] ?? null)) ? ("logged-in") : ("")), 1 => (( !        // line 54
($context["root_path"] ?? null)) ? ("frontpage") : (("path-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["root_path"] ?? null), 54, $this->source))))), 2 => ((        // line 55
($context["node_type"] ?? null)) ? (("node--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["node_type"] ?? null), 55, $this->source)))) : ("")), 3 => ((        // line 56
($context["node_id"] ?? null)) ? (("node-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["node_id"] ?? null), 56, $this->source)))) : (""))];
        // line 59
        echo "
  <body";
        // line 60
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["body_classes"] ?? null)], "method", false, false, true, 60), 60, $this->source), "html", null, true);
        echo ">

    <a href=\"#main-content\" class=\"visually-hidden focusable\">
      ";
        // line 63
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Skip to main content"));
        echo "
    </a>

    ";
        // line 66
        if (($context["preloader"] ?? null)) {
            echo " 
      <div id=\"gva-preloader\" >
        <div id=\"preloader-inner\" class=\"cssload-container\">
          <div class=\"wait-text\">";
            // line 69
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Please wait..."));
            echo " </div> 
          <div class=\"cssload-item cssload-moon\"></div>
        </div>
      </div>
    ";
        }
        // line 73
        echo "  

    ";
        // line 75
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_top"] ?? null), 75, $this->source), "html", null, true);
        echo "
    ";
        // line 76
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page"] ?? null), 76, $this->source), "html", null, true);
        echo "
    ";
        // line 77
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_bottom"] ?? null), 77, $this->source), "html", null, true);
        echo "
    <js-bottom-placeholder token=\"";
        // line 78
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 78, $this->source));
        echo "\">
    
    ";
        // line 80
        if (($context["addon_template"] ?? null)) {
            // line 81
            echo "      <div class=\"permission-save-";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["save_customize_permission"] ?? null), 81, $this->source), "html", null, true);
            echo "\">
         ";
            // line 82
            $this->loadTemplate(($context["addon_template"] ?? null), "themes/custom/conbiz/templates/page/html.html.twig", 82)->display($context);
            // line 83
            echo "      </div>  
    ";
        }
        // line 85
        echo "    <div id=\"gva-overlay\"></div>
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/conbiz/templates/page/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 85,  172 => 83,  170 => 82,  165 => 81,  163 => 80,  158 => 78,  154 => 77,  150 => 76,  146 => 75,  142 => 73,  134 => 69,  128 => 66,  122 => 63,  116 => 60,  113 => 59,  111 => 56,  110 => 55,  109 => 54,  108 => 53,  107 => 52,  103 => 50,  97 => 48,  95 => 47,  92 => 46,  86 => 44,  84 => 43,  81 => 42,  75 => 39,  72 => 38,  70 => 37,  65 => 35,  60 => 33,  55 => 31,  51 => 30,  47 => 29,  42 => 27,  39 => 26,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/conbiz/templates/page/html.html.twig", "D:\\www BU\\101422\\BU111022\\hmp\\themes\\custom\\conbiz\\templates\\page\\html.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 37, "set" => 52, "include" => 82);
        static $filters = array("escape" => 27, "raw" => 29, "safe_join" => 30, "clean_class" => 54, "t" => 63);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'include'],
                ['escape', 'raw', 'safe_join', 'clean_class', 't'],
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
