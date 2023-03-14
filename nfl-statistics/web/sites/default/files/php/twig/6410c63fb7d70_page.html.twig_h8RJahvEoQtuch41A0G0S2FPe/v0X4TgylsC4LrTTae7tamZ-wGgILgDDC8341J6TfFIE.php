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

/* themes/zurb_foundation/templates/page.html.twig */
class __TwigTemplate_477c7899937579bd49f33af284960b57 extends Template
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
        // line 48
        echo "
<div class=\"off-canvas-wrapper\">
  <div class=\"inner-wrap off-canvas-wrapper-inner\" id=\"inner-wrap\" data-off-canvas-wrapper>
    <aside id=\"left-off-canvas-menu\" class=\"off-canvas left-off-canvas-menu position-left\" role=\"complementary\" data-off-canvas>
      ";
        // line 52
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "left_off_canvas", [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
        echo "
    </aside>

    <aside id=\"right-off-canvas-menu\" class=\"off-canvas right-off-canvas-menu position-right\" role=\"complementary\" data-off-canvas>
      ";
        // line 56
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "right_off_canvas", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
        echo "
    </aside>

    <div class=\"off-canvas-content\" data-off-canvas-content>
      ";
        // line 60
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "meta_header", [], "any", false, false, true, 60)) {
            // line 61
            echo "        ";
            if (($context["meta_header_grid"] ?? null)) {
                // line 62
                echo "          <div class=\"grid-container\">
        ";
            }
            // line 64
            echo "        ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "meta_header", [], "any", false, false, true, 64), 64, $this->source), "html", null, true);
            echo "
        ";
            // line 65
            if (($context["meta_header_grid"] ?? null)) {
                // line 66
                echo "          </div>
        ";
            }
            // line 68
            echo "      ";
        }
        // line 69
        echo "
      <header class=\"header\" role=\"banner\" aria-label=\"";
        // line 70
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Site header"));
        echo "\">
        ";
        // line 71
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 71)) {
            // line 72
            echo "          <div class=\"grid-container\">
            ";
            // line 73
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 76
        echo "      </header>

      ";
        // line 78
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 78)) {
            // line 79
            echo "        <div class=\"l-help grid-container\">
          ";
            // line 80
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 80), 80, $this->source), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 83
        echo "
      <div class=\"grid-container\">
        <main id=\"main\" class=\"grid-x grid-margin-x\" role=\"main\">
          <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 87
        echo "
          ";
        // line 88
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 88)) {
            // line 89
            echo "            <div id=\"highlighted\" class=\"cell\">
              ";
            // line 90
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 90), 90, $this->source), "html", null, true);
            echo "
            </div>
          ";
        }
        // line 93
        echo "
          ";
        // line 94
        if (($context["breadcrumb"] ?? null)) {
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["breadcrumb"] ?? null), 94, $this->source), "html", null, true);
            echo " ";
        }
        // line 95
        echo "
          <div class=\"";
        // line 96
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_grid"] ?? null), 96, $this->source), "html", null, true);
        echo "\">
            ";
        // line 97
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 97), 97, $this->source), "html", null, true);
        echo "
          </div>
          ";
        // line 99
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 99)) {
            // line 100
            echo "            <div id=\"sidebar-first\" class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_first_grid"] ?? null), 100, $this->source), "html", null, true);
            echo " sidebar\" role=\"complementary\">
              ";
            // line 101
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 101), 101, $this->source), "html", null, true);
            echo "
            </div>
          ";
        }
        // line 104
        echo "          ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 104)) {
            // line 105
            echo "            <div id=\"sidebar-second\" class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_sec_grid"] ?? null), 105, $this->source), "html", null, true);
            echo " sidebar\" role=\"complementary\">
              ";
            // line 106
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 106), 106, $this->source), "html", null, true);
            echo "
            </div>
          ";
        }
        // line 109
        echo "
        </main>
      </div>

      ";
        // line 113
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 113) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_middle", [], "any", false, false, true, 113)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_last", [], "any", false, false, true, 113))) {
            // line 114
            echo "        <footer class=\"grid-container footer\" id=\"footer\">
          <div class=\"grid-x grid-margin-x\">

            ";
            // line 117
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 117)) {
                // line 118
                echo "              <div id=\"footer-first\" class=\"cell large-4\">
                ";
                // line 119
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 119), 119, $this->source), "html", null, true);
                echo "
              </div>
            ";
            }
            // line 122
            echo "
            ";
            // line 123
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_middle", [], "any", false, false, true, 123)) {
                // line 124
                echo "              <div id=\"footer-middle\" class=\"cell large-4\">
                ";
                // line 125
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_middle", [], "any", false, false, true, 125), 125, $this->source), "html", null, true);
                echo "
              </div>
            ";
            }
            // line 128
            echo "
            ";
            // line 129
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_last", [], "any", false, false, true, 129)) {
                // line 130
                echo "              <div id=\"footer-last\" class=\"cell large-4\">
                ";
                // line 131
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_last", [], "any", false, false, true, 131), 131, $this->source), "html", null, true);
                echo "
              </div>
            ";
            }
            // line 134
            echo "
          </div>
        </footer>
      ";
        }
        // line 138
        echo "
      ";
        // line 139
        if (($context["block_copyright_show"] ?? null)) {
            // line 140
            echo "        <div class=\"bottom-bar callout secondary grid-x\">

          ";
            // line 142
            if ( !($context["block_copyright_custom_text"] ?? null)) {
                // line 143
                echo "            <p>&copy; ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
                echo " ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null), 143, $this->source), "html", null, true);
                echo " ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("All rights reserved."));
                echo "</p>
          ";
            } else {
                // line 145
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["block_copyright"] ?? null), 145, $this->source), "html", null, true);
                echo "
          ";
            }
            // line 147
            echo "
        </div>
      ";
        }
        // line 150
        echo "
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/zurb_foundation/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  272 => 150,  267 => 147,  261 => 145,  251 => 143,  249 => 142,  245 => 140,  243 => 139,  240 => 138,  234 => 134,  228 => 131,  225 => 130,  223 => 129,  220 => 128,  214 => 125,  211 => 124,  209 => 123,  206 => 122,  200 => 119,  197 => 118,  195 => 117,  190 => 114,  188 => 113,  182 => 109,  176 => 106,  171 => 105,  168 => 104,  162 => 101,  157 => 100,  155 => 99,  150 => 97,  146 => 96,  143 => 95,  137 => 94,  134 => 93,  128 => 90,  125 => 89,  123 => 88,  120 => 87,  115 => 83,  109 => 80,  106 => 79,  104 => 78,  100 => 76,  94 => 73,  91 => 72,  89 => 71,  85 => 70,  82 => 69,  79 => 68,  75 => 66,  73 => 65,  68 => 64,  64 => 62,  61 => 61,  59 => 60,  52 => 56,  45 => 52,  39 => 48,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/zurb_foundation/templates/page.html.twig", "/var/www/html/web/themes/zurb_foundation/templates/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 60);
        static $filters = array("escape" => 52, "t" => 70, "date" => 143);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 't', 'date'],
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
