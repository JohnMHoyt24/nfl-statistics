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

/* themes/zurb_foundation/templates/menu--main.html.twig */
class __TwigTemplate_32498e8684b58ef6729242d269cf27cc extends Template
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
        // line 21
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 22
        echo "
";
        // line 27
        echo "
";
        // line 28
        if (($context["top_bar"] ?? null)) {
            // line 29
            echo "  ";
            if (($context["top_bar_sticky"] ?? null)) {
                // line 30
                echo "  <div id=\"top-bar-sticky-container\" data-sticky-container>
  ";
            }
            // line 32
            echo "    <div ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["top_bar_attributes"] ?? null), 32, $this->source), "html", null, true);
            echo ">
      <div class=\"title-bar\" data-responsive-toggle=\"main-menu\" data-hide-for=\"medium\">
        <button class=\"menu-icon\" type=\"button\" data-toggle></button>
        <div class=\"title-bar-title\">";
            // line 35
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["top_bar_menu_text"] ?? null), 35, $this->source), "html", null, true);
            echo "</div>
      </div>
      <nav class=\"top-bar\" id=\"main-menu\" role=\"navigation\">
        <div class=\"top-bar-left\">
          <ul class=\"dropdown menu\" data-dropdown-menu>
            <li class=\"menu-text\">";
            // line 40
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null), 40, $this->source), "html", null, true);
            echo "</li>
          </ul>
        </div>
        <div class=\"top-bar-right\">
          ";
            // line 44
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [($context["items"] ?? null), ($context["attributes"] ?? null), 0, 1], 44, $context, $this->getSourceContext()));
            echo "
          ";
            // line 45
            if (($context["top_bar_search"] ?? null)) {
                // line 46
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["top_bar_search"] ?? null), 46, $this->source), "html", null, true);
                echo "
          ";
            }
            // line 48
            echo "          ";
            if (($context["top_bar_languageswitcher"] ?? null)) {
                // line 49
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["top_bar_languageswitcher"] ?? null), 49, $this->source), "html", null, true);
                echo "
          ";
            }
            // line 51
            echo "        </div>
      </nav>
    </div>
  ";
            // line 54
            if (($context["top_bar_sticky"] ?? null)) {
                // line 55
                echo "  </div>
  ";
            }
        } else {
            // line 58
            echo "  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [($context["items"] ?? null), ($context["attributes"] ?? null), 0, 0], 58, $context, $this->getSourceContext()));
            echo "
";
        }
        // line 60
        echo "
";
    }

    // line 61
    public function macro_menu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, $__top_bar__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "top_bar" => $__top_bar__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 62
            echo "  ";
            $macros["menus"] = $this;
            // line 63
            echo "  ";
            if (($context["items"] ?? null)) {
                // line 64
                echo "    ";
                if (($context["top_bar"] ?? null)) {
                    // line 65
                    echo "      ";
                    if ((($context["menu_level"] ?? null) == 0)) {
                        // line 66
                        echo "        <ul";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "menu", 1 => "vertical", 2 => "medium-horizontal"], "method", false, false, true, 66), "setAttribute", [0 => "data-responsive-menu", 1 => "drilldown medium-dropdown"], "method", false, false, true, 66), 66, $this->source), "html", null, true);
                        echo ">
      ";
                    } else {
                        // line 68
                        echo "        <ul class=\"submenu menu vertical\" data-submenu>
      ";
                    }
                    // line 70
                    echo "    ";
                } else {
                    // line 71
                    echo "      ";
                    if ((($context["menu_level"] ?? null) == 0)) {
                        // line 72
                        echo "        <ul";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "dropdown", 1 => "menu"], "method", false, false, true, 72), 72, $this->source), "html", null, true);
                        echo " data-dropdown-menu>
      ";
                    } else {
                        // line 74
                        echo "        <ul class=\"menu\">
      ";
                    }
                    // line 76
                    echo "    ";
                }
                // line 77
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 78
                    echo "      ";
                    if (($context["top_bar"] ?? null)) {
                        // line 79
                        echo "        ";
                        // line 80
                        $context["item_classes"] = [0 => (( !twig_test_empty(twig_get_attribute($this->env, $this->source,                         // line 81
$context["item"], "below", [], "any", false, false, true, 81))) ? ("has-submenu") : ("")), 1 => ((twig_get_attribute($this->env, $this->source,                         // line 82
$context["item"], "is_expanded", [], "any", false, false, true, 82)) ? ("menu-item--expanded") : ("")), 2 => ((twig_get_attribute($this->env, $this->source,                         // line 83
$context["item"], "is_collapsed", [], "any", false, false, true, 83)) ? ("menu-item--collapsed") : ("")), 3 => ((twig_get_attribute($this->env, $this->source,                         // line 84
$context["item"], "in_active_trail", [], "any", false, false, true, 84)) ? ("menu-item--active-trail is-active") : (""))];
                        // line 87
                        echo "      ";
                    }
                    // line 88
                    echo "      <li";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 88), "addClass", [0 => ($context["item_classes"] ?? null)], "method", false, false, true, 88), 88, $this->source), "html", null, true);
                    echo ">
        ";
                    // line 89
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 89), 89, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 89), 89, $this->source)), "html", null, true);
                    echo "
        ";
                    // line 90
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 90)) {
                        // line 91
                        echo "            ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 91), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1), ($context["top_bar"] ?? null)], 91, $context, $this->getSourceContext()));
                        echo "
        ";
                    }
                    // line 93
                    echo "      </li>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 95
                echo "    </ul>
  ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "themes/zurb_foundation/templates/menu--main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 95,  215 => 93,  209 => 91,  207 => 90,  203 => 89,  198 => 88,  195 => 87,  193 => 84,  192 => 83,  191 => 82,  190 => 81,  189 => 80,  187 => 79,  184 => 78,  179 => 77,  176 => 76,  172 => 74,  166 => 72,  163 => 71,  160 => 70,  156 => 68,  150 => 66,  147 => 65,  144 => 64,  141 => 63,  138 => 62,  122 => 61,  117 => 60,  111 => 58,  106 => 55,  104 => 54,  99 => 51,  93 => 49,  90 => 48,  84 => 46,  82 => 45,  78 => 44,  71 => 40,  63 => 35,  56 => 32,  52 => 30,  49 => 29,  47 => 28,  44 => 27,  41 => 22,  39 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/zurb_foundation/templates/menu--main.html.twig", "/var/www/html/web/themes/zurb_foundation/templates/menu--main.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 21, "if" => 28, "macro" => 61, "for" => 77, "set" => 80);
        static $filters = array("escape" => 32);
        static $functions = array("link" => 89);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'if', 'macro', 'for', 'set'],
                ['escape'],
                ['link']
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
