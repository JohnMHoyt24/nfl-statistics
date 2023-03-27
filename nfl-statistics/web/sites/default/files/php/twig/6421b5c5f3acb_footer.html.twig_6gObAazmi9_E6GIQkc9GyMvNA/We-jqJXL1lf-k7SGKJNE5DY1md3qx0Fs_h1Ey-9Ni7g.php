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

/* @thex/template-parts/footer/footer.html.twig */
class __TwigTemplate_d7ee57f954b1c37c8ddceaf16c8a5802 extends Template
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
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_top", [], "any", false, false, true, 1)) {
            // line 2
            echo "  ";
            $this->loadTemplate("@thex/template-parts/footer/footer-top.html.twig", "@thex/template-parts/footer/footer.html.twig", 2)->display($context);
        }
        // line 4
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_one", [], "any", false, false, true, 4) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_two", [], "any", false, false, true, 4)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_three", [], "any", false, false, true, 4)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_four", [], "any", false, false, true, 4))) {
            // line 5
            echo "  ";
            $this->loadTemplate("@thex/template-parts/footer/footer-blocks.html.twig", "@thex/template-parts/footer/footer.html.twig", 5)->display($context);
        }
        // line 7
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom_left", [], "any", false, false, true, 7) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom_right", [], "any", false, false, true, 7))) {
            // line 8
            echo "  ";
            $this->loadTemplate("@thex/template-parts/footer/footer-bottom-blocks.html.twig", "@thex/template-parts/footer/footer.html.twig", 8)->display($context);
        }
        // line 10
        $this->loadTemplate("@thex/template-parts/footer/footer-bottom.html.twig", "@thex/template-parts/footer/footer.html.twig", 10)->display($context);
        // line 11
        if (($context["scrolltotop_on"] ?? null)) {
            // line 12
            echo "  ";
            $this->loadTemplate("@thex/template-parts/components/scrolltotop.html.twig", "@thex/template-parts/footer/footer.html.twig", 12)->display($context);
        }
    }

    public function getTemplateName()
    {
        return "@thex/template-parts/footer/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 12,  59 => 11,  57 => 10,  53 => 8,  51 => 7,  47 => 5,  45 => 4,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@thex/template-parts/footer/footer.html.twig", "/var/www/html/web/themes/thex/templates/template-parts/footer/footer.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1, "include" => 2);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'include'],
                [],
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
