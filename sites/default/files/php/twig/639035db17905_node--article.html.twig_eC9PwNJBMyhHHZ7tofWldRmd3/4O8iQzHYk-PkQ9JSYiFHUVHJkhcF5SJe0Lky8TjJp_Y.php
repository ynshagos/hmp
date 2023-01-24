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

/* themes/custom/conbiz/templates/node/node--article.html.twig */
class __TwigTemplate_f61a5942408b93ef63ceaf1fd374e5310f3de4f6b2a4e4431393623bb3e7d4e0 extends \Twig\Template
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
<!-- Start Display article for teaser page -->
";
        // line 15
        if ((($context["view_mode"] ?? null) == "teaser")) {
            echo " 
  <div class=\"post-block teaser-1\">
    <div class=\"post-image\">
      ";
            // line 18
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
            echo "
    </div>
    <div class=\"post-content\">
      <h3 class=\"post-title\"> <a href=\"";
            // line 21
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 21, $this->source), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 21, $this->source), "html", null, true);
            echo "</a> </h3>
      <div class=\"post-desc\">
        ";
            // line 23
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
            echo "
      </div>
      <div class=\"post-meta\">
        <span class=\"post-created\"><i class=\"far fa-calendar-alt\"></i> ";
            // line 26
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "getCreatedTime", [], "method", false, false, true, 26), 26, $this->source), "d M, Y"), "html", null, true);
            echo " </span>
        <span class=\"post-comment\"> 
          <i class=\"far fa-comments\"></i>";
            // line 28
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["comment_count"] ?? null), 28, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Comments"));
            echo "
        </span>
      </div>                
    </div>
  </div>

";
        } elseif ((        // line 34
($context["view_mode"] ?? null) == "teaser_2")) {
            echo " 
  <div class=\"post-block teaser-2\">
    <div class=\"post-image\">
      ";
            // line 37
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
            echo "
    </div>
    <div class=\"post-content\"><div class=\"content-inner\">
      <h3 class=\"post-title\"> <a href=\"";
            // line 40
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 40, $this->source), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 40, $this->source), "html", null, true);
            echo "</a> </h3> 
      <div class=\"post-desc\">
        ";
            // line 42
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
            echo "
      </div>
      <div class=\"post-meta\">
        <span class=\"post-created\"><i class=\"far fa-calendar-alt\"></i> ";
            // line 45
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "getCreatedTime", [], "method", false, false, true, 45), 45, $this->source), "d M, Y"), "html", null, true);
            echo " </span>
      <span class=\"post-comment\"> 
        <i class=\"far fa-comments\"></i>";
            // line 47
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["comment_count"] ?? null), 47, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Comments"));
            echo "
      </span>
      </div>     
    </div></div>
  </div>

";
        } elseif ((        // line 53
($context["view_mode"] ?? null) == "teaser_3")) {
            echo " 
  <div class=\"post-block teaser-3\">
    <div class=\"post-image\">
      ";
            // line 56
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
            echo "
    </div>
    <div class=\"post-content\"><div class=\"content-inner\">
      <div class=\"post-meta\">
        <span class=\"post-categories\"><i class=\"far fa-user\"></i>";
            // line 60
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_post_category", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
            echo "</span>
        <span class=\"post-created\"><i class=\"far fa-calendar-alt\"></i> ";
            // line 61
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "getCreatedTime", [], "method", false, false, true, 61), 61, $this->source), "d M, Y"), "html", null, true);
            echo " </span>
        <span class=\"post-comment\"> 
          <i class=\"far fa-comments\"></i>";
            // line 63
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["comment_count"] ?? null), 63, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Comments"));
            echo "
        </span>
      </div>
      <h3 class=\"post-title\"> <a href=\"";
            // line 66
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 66, $this->source), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 66, $this->source), "html", null, true);
            echo "</a> </h3> 
      <div class=\"post-desc\">
        ";
            // line 68
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 68), 68, $this->source), "html", null, true);
            echo "
      </div>
      <div class=\"link-readmore\">
        <a class=\" btn-inline\" href=\"";
            // line 71
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 71, $this->source), "html", null, true);
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Read more"));
            echo "</a>
      </div>    
    </div></div>
  </div>

<!-- End Display article for teaser page -->
";
        } else {
            // line 78
            echo "<!-- Start Display article for detail page -->

<article";
            // line 80
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 80), 80, $this->source), "html", null, true);
            echo ">
  <div class=\"post-block\">
      
    <div class=\"post-thumbnail post-";
            // line 83
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["post_format"] ?? null), 83, $this->source), "html", null, true);
            echo "\">
      ";
            // line 84
            if (((($context["post_format"] ?? null) == "video") || ((($context["post_format"] ?? null) == "audio") && ($context["gva_iframe"] ?? null)))) {
                // line 85
                echo "        ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["gva_iframe"] ?? null), 85, $this->source));
                echo "
      ";
            } elseif (((            // line 86
($context["post_format"] ?? null) == "gallery") && twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_post_gallery", [], "any", false, false, true, 86))) {
                // line 87
                echo "        ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_post_gallery", [], "any", false, false, true, 87), 87, $this->source), "html", null, true);
                echo "
      ";
            } else {
                // line 89
                echo "        ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 89), 89, $this->source), "html", null, true);
                echo "
      ";
            }
            // line 90
            echo "  
    </div>

    <div class=\"post-content\">
      <div class=\"post-meta\">
        <span class=\"categories\"><i class=\"far fa-user\"></i>";
            // line 95
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_post_category", [], "any", false, false, true, 95), 95, $this->source), "html", null, true);
            echo "</span>
        <span class=\"post-created\"><i class=\"far fa-calendar-alt\"></i> ";
            // line 96
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "getCreatedTime", [], "method", false, false, true, 96), 96, $this->source), "d M, Y"), "html", null, true);
            echo " </span>
        <span class=\"post-comment\"> 
          <i class=\"far fa-comments\"></i>";
            // line 98
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["comment_count"] ?? null), 98, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Comments"));
            echo "
        </span>
      </div>
      ";
            // line 101
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 101, $this->source), "html", null, true);
            echo "
         <h1";
            // line 102
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "post-title"], "method", false, false, true, 102), 102, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 102, $this->source), "html", null, true);
            echo "</h1>
      ";
            // line 103
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 103, $this->source), "html", null, true);
            echo "  
      ";
            // line 104
            if (($context["display_submitted"] ?? null)) {
                // line 105
                echo "        <div class=\"node__meta hidden\">
          ";
                // line 106
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_picture"] ?? null), 106, $this->source), "html", null, true);
                echo "
          <span";
                // line 107
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_attributes"] ?? null), 107, $this->source), "html", null, true);
                echo ">
            ";
                // line 108
                echo t("Submitted by @author_name on @date", array("@author_name" => ($context["author_name"] ?? null), "@date" => ($context["date"] ?? null), ));
                // line 109
                echo "          </span>
          ";
                // line 110
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["metadata"] ?? null), 110, $this->source), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 113
            echo "
      <div";
            // line 114
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => "node__content", 1 => "clearfix"], "method", false, false, true, 114), 114, $this->source), "html", null, true);
            echo ">
        ";
            // line 115
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 115, $this->source), "field_image", "field_post_category", "field_post_format", "field_post_type", "field_post_embed", "field_post_gallery", "comment"), "html", null, true);
            echo "
      </div>
      <div id=\"node-single-comment\">
        ";
            // line 118
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "comment", [], "any", false, false, true, 118), 118, $this->source), "html", null, true);
            echo "
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
        return "themes/custom/conbiz/templates/node/node--article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  297 => 118,  291 => 115,  287 => 114,  284 => 113,  278 => 110,  275 => 109,  273 => 108,  269 => 107,  265 => 106,  262 => 105,  260 => 104,  256 => 103,  250 => 102,  246 => 101,  238 => 98,  233 => 96,  229 => 95,  222 => 90,  216 => 89,  210 => 87,  208 => 86,  203 => 85,  201 => 84,  197 => 83,  191 => 80,  187 => 78,  175 => 71,  169 => 68,  162 => 66,  154 => 63,  149 => 61,  145 => 60,  138 => 56,  132 => 53,  121 => 47,  116 => 45,  110 => 42,  103 => 40,  97 => 37,  91 => 34,  80 => 28,  75 => 26,  69 => 23,  62 => 21,  56 => 18,  50 => 15,  46 => 13,  44 => 9,  43 => 8,  42 => 7,  41 => 6,  40 => 5,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/conbiz/templates/node/node--article.html.twig", "D:\\www BU\\101422\\BU111022\\hmp\\themes\\custom\\conbiz\\templates\\node\\node--article.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 2, "if" => 15, "trans" => 108);
        static $filters = array("clean_class" => 5, "escape" => 18, "date" => 26, "t" => 28, "raw" => 85, "without" => 115);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'trans'],
                ['clean_class', 'escape', 'date', 't', 'raw', 'without'],
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
