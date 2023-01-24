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

/* themes/custom/conbiz/templates/node/node--service.html.twig */
class __TwigTemplate_6f702f7b9299928b6e53c580d6fac6f0f56c5b07037569c809d5d8b303ffed68 extends \Twig\Template
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
        // line 2
        $context["classes"] = [0 => "node", 1 => "node-detail", 2 => ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 5
($context["node"] ?? null), "bundle", [], "any", false, false, true, 5), 5, $this->source))), 3 => ((twig_get_attribute($this->env, $this->source,         // line 6
($context["node"] ?? null), "isPromoted", [], "method", false, false, true, 6)) ? ("node--promoted") : ("")), 4 => ((twig_get_attribute($this->env, $this->source,         // line 7
($context["node"] ?? null), "isSticky", [], "method", false, false, true, 7)) ? ("node--sticky") : ("")), 5 => (( !twig_get_attribute($this->env, $this->source,         // line 8
($context["node"] ?? null), "isPublished", [], "method", false, false, true, 8)) ? ("node--unpublished") : ("")), 6 => ((        // line 9
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 9, $this->source)))) : ("")), 7 => "clearfix"];
        // line 13
        echo "
";
        // line 14
        if ((($context["view_mode"] ?? null) == "teaser")) {
            echo " 
  <div class=\"service-block\">
    <div class=\"box-content\">
       <div class=\"frontend\">
          <div class=\"service-block-content\">
            ";
            // line 19
            if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_service_icon", [], "any", false, false, true, 19)) {
                // line 20
                echo "              <div class=\"service-icon\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_service_icon", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
                echo "</div>
            ";
            }
            // line 21
            echo "  
            <div class=\"service-content\">
              <h3 class=\"title\"><a href=\"";
            // line 23
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 23, $this->source), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 23, $this->source), "html", null, true);
            echo "</a></h3>
              <div class=\"desc\">";
            // line 24
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
            echo "</div>
              <div class=\"readmore\"><a class=\"btn-gray\" href=\"";
            // line 25
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 25, $this->source), "html", null, true);
            echo "\"><i class=\"fa fa-angle-double-right\" aria-hidden=\"true\"></i></a></div>
            </div>    
          </div>   
       </div>
       <div class=\"backend\">
          <div class=\"service-images lightGallery\">";
            // line 30
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_service_images", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
            echo "</div>
       </div>
    </div>
  </div> 

";
        } elseif ((        // line 35
($context["view_mode"] ?? null) == "teaser_2")) {
            // line 36
            echo "
  <div class=\"service-block-2\"> 
    ";
            // line 38
            if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_service_icon", [], "any", false, false, true, 38)) {
                // line 39
                echo "      <div class=\"service-icon\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_service_icon", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
                echo "</div>
    ";
            }
            // line 40
            echo " 
    <div class=\"service-content\"> 
      <div class=\"service-images\">";
            // line 42
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_service_images", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
            echo "</div>
      <div class=\"content-inner\"> 
        <h3 class=\"title\"><a href=\"";
            // line 44
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 44, $this->source), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 44, $this->source), "html", null, true);
            echo "</a></h3>
        <div class=\"desc\">";
            // line 45
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
            echo "</div>
        <div class=\"readmore\"><a class=\"btn-white\" href=\"";
            // line 46
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 46, $this->source), "html", null, true);
            echo "\"><span>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Learn More"));
            echo "</span><i class=\"fa fa-angle-double-right\" aria-hidden=\"true\"></i></a></div>
      </div>
    </div>
  </div>

";
        } elseif ((        // line 51
($context["view_mode"] ?? null) == "teaser_3")) {
            // line 52
            echo "
  <div class=\"service-block-3\">      
    <div class=\"service-images lightGallery\">";
            // line 54
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_service_images", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
            echo "</div>
    <div class=\"service-content\">
       <div class=\"content-inner\">
          ";
            // line 57
            if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_service_icon", [], "any", false, false, true, 57)) {
                // line 58
                echo "            <div class=\"service-icon\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_service_icon", [], "any", false, false, true, 58), 58, $this->source), "html", null, true);
                echo "</div>
          ";
            }
            // line 59
            echo " 
          <div class=\"content-bottom\">
              <h3 class=\"title\"><a href=\"";
            // line 61
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 61, $this->source), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 61, $this->source), "html", null, true);
            echo "</a></h3>
              <div class=\"desc\">";
            // line 62
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 62), 62, $this->source), "html", null, true);
            echo "</div>
              <div class=\"read-more\">
              <a class=\"link-readmore btn-inline\" href=\"";
            // line 64
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 64, $this->source), "html", null, true);
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Read more"));
            echo "</a>
            </div>
          </div>  
       </div>    
    </div>
  </div>

";
        } else {
            // line 72
            echo "
<article";
            // line 73
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 73), 73, $this->source), "html", null, true);
            echo ">
  <div class=\"service-block-singe\">
    <div class=\"service-images-inner\">
      ";
            // line 76
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_service_images", [], "any", false, false, true, 76), 76, $this->source), "html", null, true);
            echo "
      ";
            // line 77
            if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_service_icon", [], "any", false, false, true, 77))) {
                // line 78
                echo "          <div class=\"service-icon\"><span class=\"icon\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_service_icon", [], "any", false, false, true, 78), 78, $this->source), "html", null, true);
                echo "</span></div>
        ";
            }
            // line 80
            echo "    </div>
    <div class=\"post-content\">
      ";
            // line 82
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 82, $this->source), "html", null, true);
            echo "
         <h1";
            // line 83
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "post-title"], "method", false, false, true, 83), 83, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 83, $this->source), "html", null, true);
            echo "</h1>
      ";
            // line 84
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 84, $this->source), "html", null, true);
            echo "      

      <div";
            // line 86
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => "node__content", 1 => "clearfix"], "method", false, false, true, 86), 86, $this->source), "html", null, true);
            echo ">
        ";
            // line 87
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 87, $this->source), "field_service_images", "field_service_icon", "comment"), "html", null, true);
            echo "
      </div>
      <div id=\"node-single-comment\">
        <div id=\"comments\">
          ";
            // line 91
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "comment", [], "any", false, false, true, 91), 91, $this->source), "html", null, true);
            echo "
        </div>  
      </div>

    </div>

  </div>

</article>

<!-- End Display article for detail page -->
";
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/conbiz/templates/node/node--service.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 91,  230 => 87,  226 => 86,  221 => 84,  215 => 83,  211 => 82,  207 => 80,  201 => 78,  199 => 77,  195 => 76,  189 => 73,  186 => 72,  173 => 64,  168 => 62,  162 => 61,  158 => 59,  152 => 58,  150 => 57,  144 => 54,  140 => 52,  138 => 51,  128 => 46,  124 => 45,  118 => 44,  113 => 42,  109 => 40,  103 => 39,  101 => 38,  97 => 36,  95 => 35,  87 => 30,  79 => 25,  75 => 24,  69 => 23,  65 => 21,  59 => 20,  57 => 19,  49 => 14,  46 => 13,  44 => 9,  43 => 8,  42 => 7,  41 => 6,  40 => 5,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/conbiz/templates/node/node--service.html.twig", "D:\\www BU\\101422\\BU111022\\hmp\\themes\\custom\\conbiz\\templates\\node\\node--service.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 2, "if" => 14);
        static $filters = array("clean_class" => 5, "escape" => 20, "t" => 46, "render" => 77, "without" => 87);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape', 't', 'render', 'without'],
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
