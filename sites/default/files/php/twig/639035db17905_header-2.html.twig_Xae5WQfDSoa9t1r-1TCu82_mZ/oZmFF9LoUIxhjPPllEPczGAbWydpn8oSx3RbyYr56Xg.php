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

/* themes/custom/conbiz/templates/page/header-2.html.twig */
class __TwigTemplate_f3972363dff726fd1fd6ba049a4ae901e396cadff10cc7f9663e073fcd025006 extends \Twig\Template
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
        echo "<header id=\"header\" class=\"header-2\">
  ";
        // line 2
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topbar", [], "any", false, false, true, 2)) {
            // line 3
            echo "    <div class=\"topbar\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-12\">
            <div class=\"topbar-content-inner clearfix";
            // line 7
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "language", [], "any", false, false, true, 7)) {
                echo " has-language-block";
            }
            echo "\"> 
              <div class=\"topbar-content\">";
            // line 8
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topbar", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
            echo "</div>
              <div class=\"topbar-right\">
              ";
            // line 10
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 10)) {
                // line 11
                echo "                <div class=\"gva-search-region search-region\">
                  <span class=\"icon\"><i class=\"fas fa-search\"></i></span>
                  <div class=\"search-content\">  
                    ";
                // line 14
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
                echo "
                  </div>  
                </div>
              ";
            }
            // line 18
            echo "              ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "language", [], "any", false, false, true, 18)) {
                // line 19
                echo "                <div class=\"language-region\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "language", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
                echo "</div>
              ";
            }
            // line 21
            echo "              </div>
            </div>  
          </div>
        </div>
      </div>
    </div>
  ";
        }
        // line 28
        echo "  ";
        $context["class_sticky"] = "";
        // line 29
        echo "  ";
        if ((($context["sticky_menu"] ?? null) == 1)) {
            // line 30
            echo "    ";
            $context["class_sticky"] = "gv-sticky-menu";
            // line 31
            echo "  ";
        }
        echo "  

   <div class=\"header-main ";
        // line 33
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["class_sticky"] ?? null), 33, $this->source), "html", null, true);
        echo " ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "language", [], "any", false, false, true, 33)) {
            echo " has-language-block";
        }
        echo "\">
      <div class=\"container header-content-layout\">
          <div class=\"row\">
            <div class=\"col-12\">
              <div class=\"header-main-inner p-relative\">
                <div class=\"header-inner clearfix\">
                  <div class=\"branding\">
                    ";
        // line 40
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "branding", [], "any", false, false, true, 40)) {
            // line 41
            echo "                      ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "branding", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
            echo "
                    ";
        }
        // line 42
        echo "  
                  </div>
                
                  <div class=\"main-menu\">
                    <div class=\"area-main-menu\">
                      <div class=\"area-inner\">
                          <div class=\"gva-offcanvas-mobile\">
                            <div class=\"close-offcanvas hidden\"><i class=\"fa fa-times\"></i></div>
                            <div class=\"main-menu-inner\">
                              ";
        // line 51
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "main_menu", [], "any", false, false, true, 51)) {
            // line 52
            echo "                                ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "main_menu", [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
            echo "
                              ";
        }
        // line 54
        echo "                            </div>

                            ";
        // line 56
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "offcanvas", [], "any", false, false, true, 56)) {
            // line 57
            echo "                              <div class=\"after-offcanvas hidden\">
                                ";
            // line 58
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "offcanvas", [], "any", false, false, true, 58), 58, $this->source), "html", null, true);
            echo "
                              </div>
                           ";
        }
        // line 61
        echo "                          </div> 
                          
                          <div id=\"menu-bar\" class=\"menu-bar menu-bar-mobile d-lg-none d-xl-none\">
                            <span class=\"one\"></span>
                            <span class=\"two\"></span>
                            <span class=\"three\"></span>
                          </div>
                           
                      </div>
                    </div>
                  </div>  
                
                ";
        // line 73
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_right", [], "any", false, false, true, 73)) {
            // line 74
            echo "                  <div class=\"header-right d-none d-lg-block\">
                    ";
            // line 75
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_right", [], "any", false, false, true, 75), 75, $this->source), "html", null, true);
            echo "
                  </div>
                ";
        }
        // line 77
        echo " 
                </div> 
              </div>

            </div>
         </div>
      </div>
   </div>

</header>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/conbiz/templates/page/header-2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 77,  183 => 75,  180 => 74,  178 => 73,  164 => 61,  158 => 58,  155 => 57,  153 => 56,  149 => 54,  143 => 52,  141 => 51,  130 => 42,  124 => 41,  122 => 40,  108 => 33,  102 => 31,  99 => 30,  96 => 29,  93 => 28,  84 => 21,  78 => 19,  75 => 18,  68 => 14,  63 => 11,  61 => 10,  56 => 8,  50 => 7,  44 => 3,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/conbiz/templates/page/header-2.html.twig", "D:\\www BU\\101422\\BU111022\\hmp\\themes\\custom\\conbiz\\templates\\page\\header-2.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 2, "set" => 28);
        static $filters = array("escape" => 8);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
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
