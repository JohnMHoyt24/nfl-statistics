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

/* block.html.twig */
class __TwigTemplate_c3960546c738b909b76dd352f65c2cd2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 43
        $context["classes"] = [0 => "block", 1 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 45
($context["configuration"] ?? null), "provider", [], "any", false, false, true, 45), 45, $this->source))), 2 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 46
($context["plugin_id"] ?? null), 46, $this->source)))];
        // line 49
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 49), 49, $this->source), "html", null, true);
        echo ">
  ";
        // line 50
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 50, $this->source), "html", null, true);
        echo "
  ";
        // line 51
        if (($context["label"] ?? null)) {
            // line 52
            echo "    <h2 ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_attributes"] ?? null), 52, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 52, $this->source), "html", null, true);
            echo "</h2>
  ";
        }
        // line 54
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 54, $this->source), "html", null, true);
        echo "

  ";
        // line 56
        if (twig_length_filter($this->env, ($context["content_attributes"] ?? null))) {
            // line 57
            echo "  <div ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_attributes"] ?? null), 57, $this->source), "html", null, true);
            echo ">
    ";
        }
        // line 59
        echo "
    ";
        // line 60
        $this->displayBlock('content', $context, $blocks);
        // line 63
        echo "
    ";
        // line 64
        if (twig_length_filter($this->env, ($context["content_attributes"] ?? null))) {
            // line 65
            echo "  </div>
  ";
        }
        // line 67
        echo "
</div>
";
    }

    // line 60
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 61
        echo "      ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 61, $this->source), "html", null, true);
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 61,  97 => 60,  91 => 67,  87 => 65,  85 => 64,  82 => 63,  80 => 60,  77 => 59,  71 => 57,  69 => 56,  63 => 54,  55 => 52,  53 => 51,  49 => 50,  44 => 49,  42 => 46,  41 => 45,  40 => 43,);
    }

    public function getSourceContext()
    {
        return new Source("", "block.html.twig", "themes/zurb_foundation/templates/block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 43, "if" => 51, "block" => 60);
        static $filters = array("clean_class" => 45, "escape" => 49, "length" => 56);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['clean_class', 'escape', 'length'],
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
