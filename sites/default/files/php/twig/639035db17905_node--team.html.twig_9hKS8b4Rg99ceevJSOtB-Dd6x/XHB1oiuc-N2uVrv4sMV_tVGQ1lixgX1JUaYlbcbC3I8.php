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

/* themes/custom/conbiz/templates/node/node--team.html.twig */
class __TwigTemplate_889fd65c8c243a7f91c148a4bdfa07a91ce243b6f8fbd4ec6bc994644e5e6766 extends \Twig\Template
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
        // line 14
        if ((($context["view_mode"] ?? null) == "teaser")) {
            echo " 
  
  <div class=\"team-block team-v1\">
    <div class=\"team-image\">
      ";
            // line 18
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_team_image", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
            echo "
    </div>
    <div class=\"team-content\">
      <div class=\"team-header\">
        <h3 class=\"team-name\"><a href=\"";
            // line 22
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 22, $this->source), "html", null, true);
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_name", [], "any", false, false, true, 22), "value", [], "any", false, false, true, 22), 22, $this->source));
            echo "</a></h3>
        ";
            // line 23
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_position", [], "any", false, false, true, 23), "value", [], "any", false, false, true, 23)) {
                echo "   
          <div class=\"team-job\">";
                // line 24
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_position", [], "any", false, false, true, 24), "value", [], "any", false, false, true, 24), 24, $this->source));
                echo "</div>
        ";
            }
            // line 26
            echo "      </div>
      <div class=\"team-inner\">
        <h3 class=\"team-name\"><a href=\"";
            // line 28
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 28, $this->source), "html", null, true);
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_name", [], "any", false, false, true, 28), "value", [], "any", false, false, true, 28), 28, $this->source));
            echo "</a></h3>
        ";
            // line 29
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_position", [], "any", false, false, true, 29), "value", [], "any", false, false, true, 29)) {
                echo "   
          <div class=\"team-job\">";
                // line 30
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_position", [], "any", false, false, true, 30), "value", [], "any", false, false, true, 30), 30, $this->source));
                echo "</div>
        ";
            }
            // line 32
            echo "        <div class=\"socials-team\">
          ";
            // line 33
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_facebook", [], "any", false, false, true, 33), "value", [], "any", false, false, true, 33)) {
                // line 34
                echo "            <a class=\"gva-social\" href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_facebook", [], "any", false, false, true, 34), "value", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
                echo "\"><i class=\"fab fa-facebook\"></i></a>
          ";
            }
            // line 35
            echo " 
          ";
            // line 36
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_google", [], "any", false, false, true, 36), "value", [], "any", false, false, true, 36)) {
                // line 37
                echo "            <a class=\"gva-social\" href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_google", [], "any", false, false, true, 37), "value", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
                echo "\"><i class=\"fab fa-google\"></i></a>
          ";
            }
            // line 38
            echo " 
          ";
            // line 39
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_pinterest", [], "any", false, false, true, 39), "value", [], "any", false, false, true, 39)) {
                // line 40
                echo "            <a class=\"gva-social\" href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_pinterest", [], "any", false, false, true, 40), "value", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
                echo "\"><i class=\"fab fa-pinterest\"></i></a>
          ";
            }
            // line 41
            echo " 
          ";
            // line 42
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_twitter", [], "any", false, false, true, 42), "value", [], "any", false, false, true, 42)) {
                // line 43
                echo "            <a class=\"gva-social\" href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_twitter", [], "any", false, false, true, 43), "value", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
                echo "\"><i class=\"fab fa-twitter\"></i></a>
          ";
            }
            // line 44
            echo " 
        </div>
        <a href=\"";
            // line 46
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 46, $this->source), "html", null, true);
            echo "\" class=\"btn-theme\"><i class=\"fa fa-angle-double-right\" aria-hidden=\"true\"></i></a>
      </div>
      
    </div>
  </div>

";
        } elseif ((        // line 52
($context["view_mode"] ?? null) == "teaser_2")) {
            // line 53
            echo "
  <div class=\"team-block team-v2\">
    <div class=\"team-image\">
      ";
            // line 56
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_team_image", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
            echo "
      <a href=\"";
            // line 57
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 57, $this->source), "html", null, true);
            echo "\" class=\"btn-theme\"><i class=\"fa fa-plus\" aria-hidden=\"true\"></i></a>
    </div>
    <div class=\"team-content\"><div class=\"team-inner\">
      <h3 class=\"team-name\"><a href=\"";
            // line 60
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 60, $this->source), "html", null, true);
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_name", [], "any", false, false, true, 60), "value", [], "any", false, false, true, 60), 60, $this->source));
            echo "</a></h3>
      ";
            // line 61
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_position", [], "any", false, false, true, 61), "value", [], "any", false, false, true, 61)) {
                echo "   
        <div class=\"team-job\">";
                // line 62
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_position", [], "any", false, false, true, 62), "value", [], "any", false, false, true, 62), 62, $this->source));
                echo "</div>
      ";
            }
            // line 64
            echo "      <div class=\"socials-team\">
        ";
            // line 65
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_facebook", [], "any", false, false, true, 65), "value", [], "any", false, false, true, 65)) {
                // line 66
                echo "          <a class=\"gva-social\" href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_facebook", [], "any", false, false, true, 66), "value", [], "any", false, false, true, 66), 66, $this->source), "html", null, true);
                echo "\"><i class=\"fab fa-facebook\"></i></a>
        ";
            }
            // line 67
            echo " 
        ";
            // line 68
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_google", [], "any", false, false, true, 68), "value", [], "any", false, false, true, 68)) {
                // line 69
                echo "          <a class=\"gva-social\" href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_google", [], "any", false, false, true, 69), "value", [], "any", false, false, true, 69), 69, $this->source), "html", null, true);
                echo "\"><i class=\"fab fa-google\"></i></a>
        ";
            }
            // line 70
            echo " 
        ";
            // line 71
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_pinterest", [], "any", false, false, true, 71), "value", [], "any", false, false, true, 71)) {
                // line 72
                echo "          <a class=\"gva-social\" href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_pinterest", [], "any", false, false, true, 72), "value", [], "any", false, false, true, 72), 72, $this->source), "html", null, true);
                echo "\"><i class=\"fab fa-pinterest\"></i></a>
        ";
            }
            // line 73
            echo " 
        ";
            // line 74
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_twitter", [], "any", false, false, true, 74), "value", [], "any", false, false, true, 74)) {
                // line 75
                echo "          <a class=\"gva-social\" href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_twitter", [], "any", false, false, true, 75), "value", [], "any", false, false, true, 75), 75, $this->source), "html", null, true);
                echo "\"><i class=\"fab fa-twitter\"></i></a>
        ";
            }
            // line 76
            echo " 
      </div></div>
      
    </div>
  </div>

";
        } elseif ((        // line 82
($context["view_mode"] ?? null) == "teaser_3")) {
            // line 83
            echo "
<div";
            // line 84
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 84), 84, $this->source), "html", null, true);
            echo ">
    <div class=\"team-block team-v3\">
    <div class=\"team-image\">
      ";
            // line 87
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_team_image", [], "any", false, false, true, 87), 87, $this->source), "html", null, true);
            echo "
      <div class=\"socials-team\">
        ";
            // line 89
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_facebook", [], "any", false, false, true, 89), "value", [], "any", false, false, true, 89)) {
                // line 90
                echo "          <a class=\"gva-social\" href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_facebook", [], "any", false, false, true, 90), "value", [], "any", false, false, true, 90), 90, $this->source), "html", null, true);
                echo "\"><i class=\"fab fa-facebook\"></i></a>
        ";
            }
            // line 91
            echo " 
        ";
            // line 92
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_google", [], "any", false, false, true, 92), "value", [], "any", false, false, true, 92)) {
                // line 93
                echo "          <a class=\"gva-social\" href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_google", [], "any", false, false, true, 93), "value", [], "any", false, false, true, 93), 93, $this->source), "html", null, true);
                echo "\"><i class=\"fab fa-google\"></i></a>
        ";
            }
            // line 94
            echo " 
        ";
            // line 95
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_pinterest", [], "any", false, false, true, 95), "value", [], "any", false, false, true, 95)) {
                // line 96
                echo "          <a class=\"gva-social\" href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_pinterest", [], "any", false, false, true, 96), "value", [], "any", false, false, true, 96), 96, $this->source), "html", null, true);
                echo "\"><i class=\"fab fa-pinterest\"></i></a>
        ";
            }
            // line 97
            echo " 
        ";
            // line 98
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_twitter", [], "any", false, false, true, 98), "value", [], "any", false, false, true, 98)) {
                // line 99
                echo "          <a class=\"gva-social\" href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_twitter", [], "any", false, false, true, 99), "value", [], "any", false, false, true, 99), 99, $this->source), "html", null, true);
                echo "\"><i class=\"fab fa-twitter\"></i></a>
        ";
            }
            // line 100
            echo " 
      </div>
    </div>
    <div class=\"team-content\">
      <h3 class=\"team-name\"><a href=\"";
            // line 104
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 104, $this->source), "html", null, true);
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_name", [], "any", false, false, true, 104), "value", [], "any", false, false, true, 104), 104, $this->source));
            echo "</a></h3>
      <div class=\"team-job\">";
            // line 105
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_position", [], "any", false, false, true, 105), "value", [], "any", false, false, true, 105), 105, $this->source));
            echo "</div>
      <div class=\"team-skills\">
        ";
            // line 107
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_skills", [], "any", false, false, true, 107));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 108
                echo "          ";
                $context["skill"] = twig_split_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "value", [], "any", false, false, true, 108), 108, $this->source), "--");
                // line 109
                echo "          ";
                if (((($__internal_compile_0 = ($context["skill"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["0"] ?? null) : null) && (($__internal_compile_1 = ($context["skill"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["1"] ?? null) : null))) {
                    // line 110
                    echo "            <div class=\"team-skill\">
              <div class=\"progress-label\">";
                    // line 111
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_2 = ($context["skill"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["0"] ?? null) : null), 111, $this->source), "html", null, true);
                    echo "</div>
               <div class=\"progress\">
                 <div class=\"progress-bar\" data-progress-animation=\"";
                    // line 113
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_3 = ($context["skill"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["1"] ?? null) : null), 113, $this->source), "html", null, true);
                    echo "%\"><span></span></div>
                 <span class=\"percentage\"><span></span>";
                    // line 114
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_4 = ($context["skill"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["1"] ?? null) : null), 114, $this->source), "html", null, true);
                    echo "%</span>
              </div>
            </div>
          ";
                }
                // line 117
                echo "  
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 118
            echo " 
      </div>
    </div>
  </div>
</div>

<!-- End Display article for teaser page -->
";
        } else {
            // line 126
            echo "<!-- Start Display article for detail page -->

<article";
            // line 128
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 128), "addClass", [0 => "node-detail"], "method", false, false, true, 128), 128, $this->source), "html", null, true);
            echo ">
  <div class=\"team-single-page\">
    <div class=\"team-inner\">
      <div class=\"row\">
        <div class=\"col-lg-5 col-md-6 col-sm-12 col-xs-12\">
          <div class=\"team-image\">
            ";
            // line 134
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_team_image", [], "any", false, false, true, 134), 134, $this->source), "html", null, true);
            echo "
            <div class=\"team-name\">
              <h2 class=\"name\">";
            // line 136
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_name", [], "any", false, false, true, 136), "value", [], "any", false, false, true, 136), 136, $this->source));
            echo "</h2>
              <div class=\"job\">";
            // line 137
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_position", [], "any", false, false, true, 137), "value", [], "any", false, false, true, 137), 137, $this->source));
            echo "</div>
              <div class=\"socials\">
                ";
            // line 139
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_facebook", [], "any", false, false, true, 139), "value", [], "any", false, false, true, 139)) {
                // line 140
                echo "                  <a class=\"gva-social\" href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_facebook", [], "any", false, false, true, 140), "value", [], "any", false, false, true, 140), 140, $this->source), "html", null, true);
                echo "\"><i class=\"fab fa-facebook\"></i></a>
                ";
            }
            // line 141
            echo " 
                ";
            // line 142
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_google", [], "any", false, false, true, 142), "value", [], "any", false, false, true, 142)) {
                // line 143
                echo "                  <a class=\"gva-social\" href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_google", [], "any", false, false, true, 143), "value", [], "any", false, false, true, 143), 143, $this->source), "html", null, true);
                echo "\"><i class=\"fab fa-google\"></i></a>
                ";
            }
            // line 144
            echo " 
                ";
            // line 145
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_pinterest", [], "any", false, false, true, 145), "value", [], "any", false, false, true, 145)) {
                // line 146
                echo "                  <a class=\"gva-social\" href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_pinterest", [], "any", false, false, true, 146), "value", [], "any", false, false, true, 146), 146, $this->source), "html", null, true);
                echo "\"><i class=\"fab fa-pinterest\"></i></a>
                ";
            }
            // line 147
            echo " 
                ";
            // line 148
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_twitter", [], "any", false, false, true, 148), "value", [], "any", false, false, true, 148)) {
                // line 149
                echo "                  <a class=\"gva-social\" href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_twitter", [], "any", false, false, true, 149), "value", [], "any", false, false, true, 149), 149, $this->source), "html", null, true);
                echo "\"><i class=\"fab fa-twitter\"></i></a>
                ";
            }
            // line 150
            echo " 
              </div>
            </div>
          </div>
        </div>
        <div class=\"col-lg-7 col-md-6 col-sm-12 col-xs-12\">
          <div class=\"team-content\">
            <div class=\"team-description\">
              <h2 class=\"name\">";
            // line 158
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Information"));
            echo "</h2>
              <div class=\"content-inner\">";
            // line 159
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_team_description", [], "any", false, false, true, 159), 159, $this->source), "html", null, true);
            echo "</div>
            </div>
            <div class=\"team-skills\">
              <h3>";
            // line 162
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Best Skills"));
            echo "</h2>
              <div class=\"team-skill-content\">
                ";
            // line 164
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_skills", [], "any", false, false, true, 164));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 165
                echo "                  ";
                $context["skill"] = twig_split_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "value", [], "any", false, false, true, 165), 165, $this->source), "--");
                // line 166
                echo "                  ";
                if (((($__internal_compile_5 = ($context["skill"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["0"] ?? null) : null) && (($__internal_compile_6 = ($context["skill"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["1"] ?? null) : null))) {
                    // line 167
                    echo "                    <div class=\"team-skill\">
                      <div class=\"pieChart\" data-bar-color=\"#f94d1c\" data-bar-width=\"130\" data-percent=\"";
                    // line 168
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_7 = ($context["skill"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["1"] ?? null) : null), 168, $this->source), "html", null, true);
                    echo "\">
                         <span>";
                    // line 169
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_8 = ($context["skill"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["1"] ?? null) : null), 169, $this->source), "html", null, true);
                    echo "%</span>  
                      </div>
                      <div class=\"skill-label\">";
                    // line 171
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_9 = ($context["skill"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["0"] ?? null) : null), 171, $this->source), "html", null, true);
                    echo "</div>
                    </div>
                  ";
                }
                // line 173
                echo "  
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 174
            echo " 
              </div>
            </div>
          </div>
        </div>
      </div>
      

      <div class=\"team-info\">
        <div class=\"row\">
          <div class=\"col-lg-5 col-md-6 col-sm-12 col-xs-12\">
            <div class=\"team-contact\">
              <h2 class=\"name hidden\">";
            // line 186
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Contact Info"));
            echo "</h2>
              <div class=\"content-inner\">";
            // line 187
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_team_contact", [], "any", false, false, true, 187), 187, $this->source), "html", null, true);
            echo "</div>
            </div>
          </div>
          <div class=\"col-lg-7 col-md-6 col-sm-12 col-xs-12\">
            <div class=\"team-education\">
              <h2 class=\"name hidden\">";
            // line 192
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Education"));
            echo "</h2>
              <div class=\"content-inner\">";
            // line 193
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_team_education", [], "any", false, false, true, 193), 193, $this->source), "html", null, true);
            echo "</div>
            </div>
            
          </div>
        </div>
      </div>
      <div class=\"content\">
        ";
            // line 200
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 200), 200, $this->source), "html", null, true);
            echo "
        <div class=\"team-quote\"> ";
            // line 201
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_team_quote", [], "any", false, false, true, 201), 201, $this->source), "html", null, true);
            echo " </div>
        ";
            // line 202
            if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "comment", [], "any", false, false, true, 202)) {
                // line 203
                echo "          <div id=\"node-single-comment\">
            ";
                // line 204
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "comment", [], "any", false, false, true, 204), 204, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 206
            echo "  
      </div> 
    </div>
    <div";
            // line 209
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => "node__content", 1 => "clearfix"], "method", false, false, true, 209), 209, $this->source), "html", null, true);
            echo ">
      ";
            // line 210
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 210, $this->source), "field_team_name", "field_team_contact", "field_team_image", "field_team_skills", "field_team_contact", "field_team_quote", "field_team_social", "field_team_education", "field_team_position", "field_team_email", "field_team_description", "comment"), "html", null, true);
            echo "
    </div>
    

  </div>
</article>

<!-- End Display article for detail page -->
";
        }
        // line 219
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/custom/conbiz/templates/node/node--team.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  567 => 219,  555 => 210,  551 => 209,  546 => 206,  540 => 204,  537 => 203,  535 => 202,  531 => 201,  527 => 200,  517 => 193,  513 => 192,  505 => 187,  501 => 186,  487 => 174,  480 => 173,  474 => 171,  469 => 169,  465 => 168,  462 => 167,  459 => 166,  456 => 165,  452 => 164,  447 => 162,  441 => 159,  437 => 158,  427 => 150,  421 => 149,  419 => 148,  416 => 147,  410 => 146,  408 => 145,  405 => 144,  399 => 143,  397 => 142,  394 => 141,  388 => 140,  386 => 139,  381 => 137,  377 => 136,  372 => 134,  363 => 128,  359 => 126,  349 => 118,  342 => 117,  335 => 114,  331 => 113,  326 => 111,  323 => 110,  320 => 109,  317 => 108,  313 => 107,  308 => 105,  302 => 104,  296 => 100,  290 => 99,  288 => 98,  285 => 97,  279 => 96,  277 => 95,  274 => 94,  268 => 93,  266 => 92,  263 => 91,  257 => 90,  255 => 89,  250 => 87,  244 => 84,  241 => 83,  239 => 82,  231 => 76,  225 => 75,  223 => 74,  220 => 73,  214 => 72,  212 => 71,  209 => 70,  203 => 69,  201 => 68,  198 => 67,  192 => 66,  190 => 65,  187 => 64,  182 => 62,  178 => 61,  172 => 60,  166 => 57,  162 => 56,  157 => 53,  155 => 52,  146 => 46,  142 => 44,  136 => 43,  134 => 42,  131 => 41,  125 => 40,  123 => 39,  120 => 38,  114 => 37,  112 => 36,  109 => 35,  103 => 34,  101 => 33,  98 => 32,  93 => 30,  89 => 29,  83 => 28,  79 => 26,  74 => 24,  70 => 23,  64 => 22,  57 => 18,  50 => 14,  46 => 12,  44 => 8,  43 => 7,  42 => 6,  41 => 5,  40 => 4,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/conbiz/templates/node/node--team.html.twig", "D:\\www BU\\101422\\BU111022\\hmp\\themes\\custom\\conbiz\\templates\\node\\node--team.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 2, "if" => 14, "for" => 107);
        static $filters = array("clean_class" => 4, "escape" => 18, "e" => 22, "split" => 108, "t" => 158, "without" => 210);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['clean_class', 'escape', 'e', 'split', 't', 'without'],
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
