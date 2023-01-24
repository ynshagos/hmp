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

/* themes/custom/conbiz/templates/page/header.html.twig */
class __TwigTemplate_0b3bb11077256fa9ad9957b790f7c18b28ee1e65a417839523801272fdab2908 extends \Twig\Template
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
        echo "<header id=\"header\" class=\"header-default\">
  
  ";
        // line 3
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topbar", [], "any", false, false, true, 3)) {
            // line 4
            echo "    <div class=\"topbar\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-12\">
            <div class=\"topbar-content-inner clearfix";
            // line 8
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "language", [], "any", false, false, true, 8)) {
                echo " has-language-block";
            }
            echo "\"> 
              <div class=\"topbar-content\">";
            // line 9
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topbar", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
            echo "</div>
              <div class=\"topbar-right\">
              ";
            // line 11
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 11)) {
                // line 12
                echo "                <div class=\"gva-search-region search-region\">
                  <span class=\"icon\"><i class=\"fas fa-search\"></i></span>
                  <div class=\"search-content\">  
                    ";
                // line 15
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
                echo "
                  </div>  
                </div>
              ";
            }
            // line 19
            echo "              ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "language", [], "any", false, false, true, 19)) {
                // line 20
                echo "                <div class=\"language-region\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "language", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
                echo "</div>
              ";
            }
            // line 22
            echo "              </div>
            </div>  
          </div>
        </div>
      </div>
    </div>
  ";
        }
        // line 29
        echo "
  ";
        // line 30
        $context["class_sticky"] = "";
        // line 31
        echo "  ";
        if ((($context["sticky_menu"] ?? null) == 1)) {
            // line 32
            echo "    ";
            $context["class_sticky"] = "gv-sticky-menu";
            // line 33
            echo "  ";
        }
        echo "  

   <div class=\"header-main ";
        // line 35
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["class_sticky"] ?? null), 35, $this->source), "html", null, true);
        echo "\">
      <div class=\"container header-content-layout\">
          <div class=\"row\">
            <div class=\"col-12\">
              <div class=\"header-main-inner p-relative\">
                <div class=\"header-inner clearfix\">
                  <div class=\"branding\">
                    ";
        // line 42
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "branding", [], "any", false, false, true, 42)) {
            // line 43
            echo "                      ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "branding", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
            echo "
                    ";
        }
        // line 45
        echo "                  </div>
                  
                  <div class=\"main-menu\">
                    <div class=\"area-main-menu\">
                      <div class=\"area-inner\">
                        <div class=\"gva-offcanvas-mobile\">
                          <div class=\"close-offcanvas hidden\"><i class=\"fa fa-times\"></i></div>
                          <div class=\"main-menu-inner\">
                            ";
        // line 53
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "main_menu", [], "any", false, false, true, 53)) {
            // line 54
            echo "                              ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "main_menu", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
            echo "
                            ";
        }
        // line 56
        echo "                          </div>

                          ";
        // line 58
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "offcanvas", [], "any", false, false, true, 58)) {
            // line 59
            echo "                            <div class=\"after-offcanvas hidden\">
                              ";
            // line 60
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "offcanvas", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
            echo "
                            </div>
                          ";
        }
        // line 63
        echo "                        </div>
                        
                        <div id=\"menu-bar\" class=\"menu-bar menu-bar-mobile d-lg-none d-xl-none\">
                          <span class=\"one\"></span>
                          <span class=\"two\"></span>
                          <span class=\"three\"></span>
                        </div>
                      </div>
                    </div>
                  </div>  

                  ";
        // line 74
        if ( !twig_test_empty($this->extensions['Drupal\gavias_hook_themer\TwigExtension']->themeSetting("link_btn_header"))) {
            // line 75
            echo "                  <div class=\"header-button d-none d-lg-block d-md-block\">
                      <a href=\"";
            // line 76
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\gavias_hook_themer\TwigExtension']->themeSetting("link_btn_header"), "html", null, true);
            echo "\" class=\"btn-gray\">
                        <span>";
            // line 77
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t($this->extensions['Drupal\gavias_hook_themer\TwigExtension']->themeSetting("text_btn_header")));
            echo "</span></a>
                  </div>
                ";
        }
        // line 80
        echo "              </div>
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
        return "themes/custom/conbiz/templates/page/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 80,  184 => 77,  180 => 76,  177 => 75,  175 => 74,  162 => 63,  156 => 60,  153 => 59,  151 => 58,  147 => 56,  141 => 54,  139 => 53,  129 => 45,  123 => 43,  121 => 42,  111 => 35,  105 => 33,  102 => 32,  99 => 31,  97 => 30,  94 => 29,  85 => 22,  79 => 20,  76 => 19,  69 => 15,  64 => 12,  62 => 11,  57 => 9,  51 => 8,  45 => 4,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/conbiz/templates/page/header.html.twig", "D:\\www BU\\101422\\BU111022\\hmp\\themes\\custom\\conbiz\\templates\\page\\header.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 3, "set" => 30);
        static $filters = array("escape" => 9, "t" => 77);
        static $functions = array("gva_theme_setting" => 74);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                ['escape', 't'],
                ['gva_theme_setting']
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
