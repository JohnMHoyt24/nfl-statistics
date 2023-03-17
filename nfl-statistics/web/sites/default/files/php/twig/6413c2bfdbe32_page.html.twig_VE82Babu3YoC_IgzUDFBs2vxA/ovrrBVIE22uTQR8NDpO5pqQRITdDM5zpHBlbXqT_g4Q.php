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

/* themes/thex/templates/layout/page.html.twig */
class __TwigTemplate_8bd1f50af6e2ca49554e793e56276194 extends Template
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
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_left", [], "any", false, false, true, 1) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_right", [], "any", false, false, true, 1))) {
            // line 2
            echo "  ";
            $this->loadTemplate("@thex/template-parts/header/header-top.html.twig", "themes/thex/templates/layout/page.html.twig", 2)->display($context);
        }
        // line 4
        $this->loadTemplate("@thex/template-parts/header/header.html.twig", "themes/thex/templates/layout/page.html.twig", 4)->display($context);
        // line 5
        if (( !($context["is_front"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_header", [], "any", false, false, true, 5))) {
            // line 6
            echo "  ";
            $this->loadTemplate("@thex/template-parts/header/header-page.html.twig", "themes/thex/templates/layout/page.html.twig", 6)->display($context);
        }
        // line 8
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 8)) {
            // line 9
            echo "  ";
            $this->loadTemplate("@thex/template-parts/highlighted.html.twig", "themes/thex/templates/layout/page.html.twig", 9)->display($context);
        }
        // line 11
        echo "<div class=\"main-wrapper\">
  <div class=\"container\">
    <a id=\"main-content\" tabindex=\"-1\"></a>
    <div class=\"main-container\">
      <main id=\"main\" class=\"main-content\">
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_top", [], "any", false, false, true, 16)) {
            // line 17
            echo "          ";
            $this->loadTemplate("@thex/template-parts/content-parts/content_top.html.twig", "themes/thex/templates/layout/page.html.twig", 17)->display($context);
            // line 18
            echo "        ";
        }
        // line 19
        echo "        <div class=\"node-content\">
          ";
        // line 20
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
        echo "
        </div>
        ";
        // line 22
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom", [], "any", false, false, true, 22)) {
            // line 23
            echo "          ";
            $this->loadTemplate("@thex/template-parts/content-parts/content_bottom.html.twig", "themes/thex/templates/layout/page.html.twig", 23)->display($context);
            // line 24
            echo "        ";
        }
        // line 25
        echo "      </main>
    ";
        // line 26
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 26)) {
            // line 27
            echo "      ";
            $this->loadTemplate("@thex/template-parts/sidebar/sidebar_left.html.twig", "themes/thex/templates/layout/page.html.twig", 27)->display($context);
            // line 28
            echo "    ";
        }
        // line 29
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 29)) {
            // line 30
            echo "      ";
            $this->loadTemplate("@thex/template-parts/sidebar/sidebar_right.html.twig", "themes/thex/templates/layout/page.html.twig", 30)->display($context);
            // line 31
            echo "    ";
        }
        // line 32
        echo "    </div><!--/main-container -->
  </div><!--/container -->
</div><!--/main-wrapper -->
";
        // line 35
        $this->loadTemplate("@thex/template-parts/footer/footer.html.twig", "themes/thex/templates/layout/page.html.twig", 35)->display($context);
    }

    public function getTemplateName()
    {
        return "themes/thex/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 35,  110 => 32,  107 => 31,  104 => 30,  101 => 29,  98 => 28,  95 => 27,  93 => 26,  90 => 25,  87 => 24,  84 => 23,  82 => 22,  77 => 20,  74 => 19,  71 => 18,  68 => 17,  66 => 16,  59 => 11,  55 => 9,  53 => 8,  49 => 6,  47 => 5,  45 => 4,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/thex/templates/layout/page.html.twig", "/var/www/html/web/themes/thex/templates/layout/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1, "include" => 2);
        static $filters = array("escape" => 20);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'include'],
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
