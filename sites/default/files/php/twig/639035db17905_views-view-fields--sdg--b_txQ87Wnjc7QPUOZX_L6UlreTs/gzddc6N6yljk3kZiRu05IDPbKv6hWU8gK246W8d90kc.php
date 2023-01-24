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

/* themes/custom/conbiz/templates/views-view-fields--sdg--block_1.html.twig */
class __TwigTemplate_3634be196bfc5e029f1a54b41f436218ea29b6743f25546b826bb3a0ac6469bc extends \Twig\Template
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
        echo "
\t\t\t
\t\t\t\t<!--<div class=\"row\">
\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t<h2><a href=\"#\">";
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "title", [], "any", false, false, true, 5), "content", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
        echo " </a></h2>
\t\t\t\t\t\t<h3>";
        // line 6
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_description", [], "any", false, false, true, 6), "content", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
        echo "</h3>
\t\t\t\t\t\t<a href=\"#\" class=\"read d-none d-md-none\">Read more</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row numbers-line\">
\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t  <a href=\"#\"><span class=\"our-number\">
\t\t\t\t\t\t  ";
        // line 14
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_target", [], "any", false, false, true, 14), "content", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
        echo "               <br></span> targets</a>
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t  <a href=\"#\"><span class=\"our-number\">
\t\t\t\t\t\t\t";
        // line 20
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_partnership", [], "any", false, false, true, 20), "content", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
        echo "                    <br></span> partnerships</a>
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t  <span class=\"our-number\">
\t\t\t\t\t\t\t";
        // line 26
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_publication", [], "any", false, false, true, 26), "content", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
        echo "                    <br></span> publications
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t  <span class=\"our-number\">
\t\t\t\t\t\t\t";
        // line 32
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_document", [], "any", false, false, true, 32), "content", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
        echo "<br></span> documents
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>-->
\t\t\t\t<div class=\"gsc-column col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12  \" style=\"padding-bottom:50px\">
\t\t\t\t\t<div class=\"column-inner  bg-size-cover  \">
\t\t\t\t\t\t<div class=\"column-content-inner\">
\t\t\t\t\t\t\t<div class=\"widget gsc-heading  align-left style-1 \">
            
\t\t\t\t\t\t\t\t<div class=\"heading-content clearfix\">
\t\t\t\t\t\t\t\t\t<div class=\"sub-title sdg\">
\t\t\t\t\t\t\t\t\t\t<span>";
        // line 43
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "title", [], "any", false, false, true, 43), "content", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<h2 class=\"title\">
\t\t\t\t\t\t\t\t\t\t<span><strong>";
        // line 46
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_description", [], "any", false, false, true, 46), "content", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
        echo "</strong></span>\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</h2>                
\t\t\t\t\t\t\t\t</div>                       
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"gbb-row-wrapper\">
\t\t\t\t\t\t\t\t<div class=\" gbb-row  bg-size-cover \" style=\"\">
\t\t\t\t\t\t\t\t\t<div class=\"bb-inner  \">  
\t\t\t\t\t\t\t\t\t\t<div class=\"bb-container container\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row row-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"gsc-column col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12  \">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"column-inner  bg-size-cover  \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"column-content-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"widget gsc-icon-box left box-margin-medium\">
               
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"highlight-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-inner \">   
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-container fa-3x   color-theme\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon zmdi zmdi-collection-bookmark\"></span>                                                   
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
               
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"highlight_content verticle-align-top\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"title text-black\">Targets</h3>                     
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"desc text-gray \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>";
        // line 73
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_target", [], "any", false, false, true, 73), "content", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
        echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>                     
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>                
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>                         
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>  
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
        
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"gsc-column col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12  \">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"column-inner  bg-size-cover  \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"column-content-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"widget gsc-icon-box left box-margin-medium\">               
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"highlight-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-inner \">   
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-container fa-3x   color-theme\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon zmdi zmdi-coffee\"></span>                                                    
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
               
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"highlight_content verticle-align-top\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"title text-black\">Partnerships</h3>                     
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"desc text-gray \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>";
        // line 96
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_partnership", [], "any", false, false, true, 96), "content", [], "any", false, false, true, 96), 96, $this->source), "html", null, true);
        echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>                     
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>                
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>                         
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>  
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>        
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>  
\t\t\t\t\t\t\t\t</div>  
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"gbb-row-wrapper\">
\t\t\t\t\t\t\t\t<div class=\" gbb-row  bg-size-cover \" style=\"\">
\t\t\t\t\t\t\t\t\t<div class=\"bb-inner  \">  
\t\t\t\t\t\t\t\t\t\t<div class=\"bb-container container\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row row-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"gsc-column col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12  \">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"column-inner  bg-size-cover  \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"column-content-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"widget gsc-icon-box left box-margin-small\">               
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"highlight-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-inner \">   
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-container fa-3x   color-theme\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon zmdi zmdi-favorite-outline\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>               
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"highlight_content verticle-align-top\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"title text-black\">Publications</h3>                     
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    <div class=\"desc text-gray \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>";
        // line 127
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_publication", [], "any", false, false, true, 127), "content", [], "any", false, false, true, 127), 127, $this->source), "html", null, true);
        echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>                     
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>                
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>                         
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>  
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>        
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"gsc-column col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12  \">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"column-inner  bg-size-cover  \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"column-content-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"widget gsc-icon-box left box-margin-small\">               
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"highlight-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-inner \">   
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-container fa-3x   color-theme\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon zmdi zmdi-account-add\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>               
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"highlight_content verticle-align-top\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"title text-black\">Documents</h3>                     
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"desc text-gray \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>";
        // line 148
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_document", [], "any", false, false, true, 148), "content", [], "any", false, false, true, 148), 148, $this->source), "html", null, true);
        echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>                     
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>                
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>                         
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>  
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>        
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>  
\t\t\t\t\t\t\t\t</div>  
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>  
\t\t\t\t\t</div>        
\t\t\t\t</div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/conbiz/templates/views-view-fields--sdg--block_1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 148,  197 => 127,  163 => 96,  137 => 73,  107 => 46,  101 => 43,  87 => 32,  78 => 26,  69 => 20,  60 => 14,  49 => 6,  45 => 5,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/conbiz/templates/views-view-fields--sdg--block_1.html.twig", "D:\\www BU\\101422\\BU111022\\hmp\\themes\\custom\\conbiz\\templates\\views-view-fields--sdg--block_1.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 5);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
