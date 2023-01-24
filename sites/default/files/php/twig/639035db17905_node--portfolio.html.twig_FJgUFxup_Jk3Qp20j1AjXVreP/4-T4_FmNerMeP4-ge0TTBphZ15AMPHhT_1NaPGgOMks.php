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

/* themes/custom/conbiz/templates/node/node--portfolio.html.twig */
class __TwigTemplate_8c92983d336ea98919bef8b12a85ada9351d51f1f1c9cb0e4f2e46dfaeb14f68 extends \Twig\Template
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
        $context["classes"] = [0 => "node", 1 => ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 4
($context["node"] ?? null), "bundle", [], "any", false, false, true, 4), 4, $this->source))), 2 => ((twig_get_attribute($this->env, $this->source,         // line 5
($context["node"] ?? null), "isPromoted", [], "method", false, false, true, 5)) ? ("node--promoted") : ("")), 3 => ((twig_get_attribute($this->env, $this->source,         // line 6
($context["node"] ?? null), "isSticky", [], "method", false, false, true, 6)) ? ("node--sticky") : ("")), 4 => (( !twig_get_attribute($this->env, $this->source,         // line 7
($context["node"] ?? null), "isPublished", [], "method", false, false, true, 7)) ? ("node--unpublished") : ("")), 5 => ((        // line 8
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 8, $this->source)))) : ("")), 6 => "clearfix"];
        // line 12
        echo "
<!-- Start Display article for teaser page -->

";
        // line 15
        if ((($context["view_mode"] ?? null) == "teaser")) {
            // line 16
            echo "
  <div class=\"portfolio-v1\">      
    <div class=\"portfolio-content\">
      <div class=\"portfolio-images\">
        ";
            // line 20
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_portfolio_images", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
            echo "
        <a class=\"link\" href=\"";
            // line 21
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 21, $this->source), "html", null, true);
            echo "\"><i class=\"fa fa-link\"></i></a>
        <a class=\"btn-readmore\" href=\"";
            // line 22
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 22, $this->source), "html", null, true);
            echo "\"><i class=\"fa fa-angle-double-right\" aria-hidden=\"true\"></i></a>
      </div>
      <div class=\"content-inner\">
        <div class=\"portfolio-information\">
          <h2 class=\"title\"> <a href=\"";
            // line 26
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 26, $this->source), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 26, $this->source), "html", null, true);
            echo "</a> </h2>
          <div class=\"portfolio-hover\">
            <div class=\"desc\">";
            // line 28
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
            echo "</div>
          </div>
        </div>    
      </div>
    </div>
  </div>

";
        } elseif ((        // line 35
($context["view_mode"] ?? null) == "teaser_2")) {
            // line 36
            echo "  ";
            ob_start(function () { return ''; });
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
            $context["body"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 37
            echo "
  <div class=\"portfolio-v2\">      
    <div class=\"portfolio-content\">
      <div class=\"content-inner\">
        <div class=\"portfolio-information\">
          <h2 class=\"title\"><a href=\"";
            // line 42
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 42, $this->source), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 42, $this->source), "html", null, true);
            echo "</a> </h2>
          <div class=\"desc\">";
            // line 43
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
            echo "</div>
        </div>
        <div class=\"action\"><a class=\"btn-readmore\" href=\"";
            // line 45
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 45, $this->source), "html", null, true);
            echo "\"><i class=\"fa fa-angle-double-right\" aria-hidden=\"true\"></i></a></div>
      </div>
      <div class=\"portfolio-images\">
        ";
            // line 48
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_portfolio_images", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
            echo "
        <a class=\"link\" href=\"";
            // line 49
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 49, $this->source), "html", null, true);
            echo "\"><i class=\"fa fa-link\"></i></a>
      </div>
    </div>
  </div>

";
        } elseif ((        // line 54
($context["view_mode"] ?? null) == "teaser_3")) {
            // line 55
            echo "    ";
            ob_start(function () { return ''; });
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
            $context["body"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 56
            echo "    <div class=\"portfolio-v3 portfolio-item\">      
      <div class=\"images\">
        ";
            // line 58
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_portfolio_images", [], "any", false, false, true, 58), 58, $this->source), "html", null, true);
            echo "
      </div>
      <div class=\"portfolio-content\">
        <div class=\"content-inner\">
          <div class=\"category\">";
            // line 62
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_portfolio_tags", [], "any", false, false, true, 62), 62, $this->source), "html", null, true);
            echo "</div>
          <h3 class=\"title\"><a href=\"";
            // line 63
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 63, $this->source), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 63, $this->source), "html", null, true);
            echo "</a></h3>    
        </div>
      </div>
    </div>

";
        } elseif ((        // line 68
($context["view_mode"] ?? null) == "teaser_4")) {
            // line 69
            echo "  <div class=\"portfolio-v4\">      
      <div class=\"images\">
        ";
            // line 71
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_portfolio_images", [], "any", false, false, true, 71), 71, $this->source), "html", null, true);
            echo "
        <a class=\"link\" href=\"";
            // line 72
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 72, $this->source), "html", null, true);
            echo "\"><i class=\"fa fa-link\"></i></a>
      </div>
      <div class=\"portfolio-content\">
        <div class=\"content-inner\">
          <h2 class=\"title\"> <a href=\"";
            // line 76
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 76, $this->source), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 76, $this->source), "html", null, true);
            echo "</a> </h2>
          <div class=\"desc\">";
            // line 77
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
            echo "</div>
          <div class=\"action\"><a class=\"btn-white\" href=\"";
            // line 78
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 78, $this->source), "html", null, true);
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Read More"));
            echo "<i class=\"fa fa-angle-double-right\" aria-hidden=\"true\"></i></a></div>
        </div>    
      </div>
  </div>
";
        } else {
            // line 83
            echo "
<!-- Start Display article for detail page -->
";
            // line 85
            $context["xcol"] = "col-md-12 col-sm-12 col-xs-12";
            // line 86
            if (($context["informations"] ?? null)) {
                // line 87
                echo "  ";
                $context["xcol"] = "col-md-6 col-sm-12 col-xs-12";
            }
            // line 89
            echo "
<article";
            // line 90
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 90), "addClass", [0 => "node-detail"], "method", false, false, true, 90), 90, $this->source), "html", null, true);
            echo ">
  <div class=\"portfolio-single\">
    
    <div class=\"row\">
      <div class=\"";
            // line 94
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["xcol"] ?? null), 94, $this->source), "html", null, true);
            echo "\"> 
        <div class=\"post-thumbnail\">
          ";
            // line 96
            if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_portfolio_images", [], "any", false, false, true, 96)) {
                // line 97
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_portfolio_images", [], "any", false, false, true, 97), 97, $this->source), "html", null, true);
                echo " 
          ";
            }
            // line 99
            echo "        </div>
      </div>
      ";
            // line 101
            if (($context["informations"] ?? null)) {
                // line 102
                echo "      <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["xcol"] ?? null), 102, $this->source), "html", null, true);
                echo "\">
        <div class=\"portfolio-informations\">
          ";
                // line 104
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["informations"] ?? null), 104, $this->source));
                echo "
        </div>
      </div>  
      ";
            }
            // line 108
            echo "    </div> 
     
    <div class=\"post-content\">
      <div class=\"post-meta\">
        <span class=\"post-categories\">";
            // line 112
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_portfolio_tags", [], "any", false, false, true, 112), 112, $this->source), "html", null, true);
            echo "</span><span class=\"line\"></span><span class=\"post-created\"> ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["date"] ?? null), 112, $this->source), "html", null, true);
            echo " </span>
      </div>
      ";
            // line 114
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 114, $this->source), "html", null, true);
            echo "
         <h1";
            // line 115
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "post-title"], "method", false, false, true, 115), 115, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 115, $this->source), "html", null, true);
            echo "</h1>
      ";
            // line 116
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 116, $this->source), "html", null, true);
            echo "         
      
      <div";
            // line 118
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => "node__content", 1 => "clearfix"], "method", false, false, true, 118), 118, $this->source), "html", null, true);
            echo ">
        ";
            // line 119
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 119, $this->source), "field_portfolio_images", "field_portfolio_tags", "field_portfolio_information", "comment"), "html", null, true);
            echo "
      </div>

      ";
            // line 122
            if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "comment", [], "any", false, false, true, 122)) {
                // line 123
                echo "        <div id=\"node-single-comment\">
          ";
                // line 124
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "comment", [], "any", false, false, true, 124), 124, $this->source), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 127
            echo "
    </div>

  </div>

</article>

<!-- End Display article for detail page -->
";
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/conbiz/templates/node/node--portfolio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  306 => 127,  300 => 124,  297 => 123,  295 => 122,  289 => 119,  285 => 118,  280 => 116,  274 => 115,  270 => 114,  263 => 112,  257 => 108,  250 => 104,  244 => 102,  242 => 101,  238 => 99,  232 => 97,  230 => 96,  225 => 94,  218 => 90,  215 => 89,  211 => 87,  209 => 86,  207 => 85,  203 => 83,  193 => 78,  189 => 77,  183 => 76,  176 => 72,  172 => 71,  168 => 69,  166 => 68,  156 => 63,  152 => 62,  145 => 58,  141 => 56,  136 => 55,  134 => 54,  126 => 49,  122 => 48,  116 => 45,  111 => 43,  105 => 42,  98 => 37,  93 => 36,  91 => 35,  81 => 28,  74 => 26,  67 => 22,  63 => 21,  59 => 20,  53 => 16,  51 => 15,  46 => 12,  44 => 8,  43 => 7,  42 => 6,  41 => 5,  40 => 4,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/conbiz/templates/node/node--portfolio.html.twig", "D:\\www BU\\101422\\BU111022\\hmp\\themes\\custom\\conbiz\\templates\\node\\node--portfolio.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 2, "if" => 15);
        static $filters = array("clean_class" => 4, "escape" => 20, "t" => 78, "raw" => 104, "without" => 119);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape', 't', 'raw', 'without'],
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
