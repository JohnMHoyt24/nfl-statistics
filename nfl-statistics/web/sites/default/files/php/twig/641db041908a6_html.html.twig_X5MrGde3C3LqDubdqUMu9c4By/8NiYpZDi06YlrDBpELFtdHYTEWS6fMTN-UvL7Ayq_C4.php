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

/* themes/thex/templates/layout/html.html.twig */
class __TwigTemplate_4a7d6c1a8c3b4b74eebdfe29db226bcc extends Template
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
        // line 28
        $context["body_classes"] = [0 => (( !        // line 29
($context["root_path"] ?? null)) ? ("homepage") : ("site-page")), 1 => ((        // line 30
($context["node_type"] ?? null)) ? (("page-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["node_type"] ?? null), 30, $this->source)))) : ("")), 2 => ((        // line 31
($context["logged_in"] ?? null)) ? ("user-logged-in") : ("user-guest")), 3 => ((( !twig_get_attribute($this->env, $this->source,         // line 32
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 32) &&  !twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 32))) ? ("no-sidebar") : ("")), 4 => (((twig_get_attribute($this->env, $this->source,         // line 33
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 33) &&  !twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 33))) ? ("one-sidebar sidebar-left") : ("")), 5 => (((twig_get_attribute($this->env, $this->source,         // line 34
($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 34) &&  !twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 34))) ? ("one-sidebar sidebar-right") : ("")), 6 => (((twig_get_attribute($this->env, $this->source,         // line 35
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 35) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 35))) ? ("two-sidebar") : (""))];
        // line 38
        echo "<!DOCTYPE html>
<html";
        // line 39
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["html_attributes"] ?? null), 39, $this->source), "html", null, true);
        echo ">
  <head>
    <head-placeholder token=\"";
        // line 41
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 41, $this->source), "html", null, true);
        echo "\">
    <title>";
        // line 42
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->safeJoin($this->env, $this->sandbox->ensureToStringAllowed(($context["head_title"] ?? null), 42, $this->source), " | "));
        echo "</title>
    <css-placeholder token=\"";
        // line 43
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 43, $this->source), "html", null, true);
        echo "\">
    <js-placeholder token=\"";
        // line 44
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 44, $this->source), "html", null, true);
        echo "\">
  </head>
  <body";
        // line 46
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["body_classes"] ?? null)], "method", false, false, true, 46), 46, $this->source), "html", null, true);
        echo ">
    ";
        // line 51
        echo "    <a href=\"#main-content\" class=\"visually-hidden focusable\">
      ";
        // line 52
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Skip to main content"));
        echo "
    </a>
    ";
        // line 54
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_top"] ?? null), 54, $this->source), "html", null, true);
        echo "
    ";
        // line 55
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page"] ?? null), 55, $this->source), "html", null, true);
        echo "
    ";
        // line 56
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_bottom"] ?? null), 56, $this->source), "html", null, true);
        echo "
    <js-bottom-placeholder token=\"";
        // line 57
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 57, $this->source), "html", null, true);
        echo "\">
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "themes/thex/templates/layout/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 57,  93 => 56,  89 => 55,  85 => 54,  80 => 52,  77 => 51,  73 => 46,  68 => 44,  64 => 43,  60 => 42,  56 => 41,  51 => 39,  48 => 38,  46 => 35,  45 => 34,  44 => 33,  43 => 32,  42 => 31,  41 => 30,  40 => 29,  39 => 28,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/thex/templates/layout/html.html.twig", "/var/www/html/web/themes/thex/templates/layout/html.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 28);
        static $filters = array("clean_class" => 30, "escape" => 39, "safe_join" => 42, "t" => 52);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['clean_class', 'escape', 'safe_join', 't'],
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
