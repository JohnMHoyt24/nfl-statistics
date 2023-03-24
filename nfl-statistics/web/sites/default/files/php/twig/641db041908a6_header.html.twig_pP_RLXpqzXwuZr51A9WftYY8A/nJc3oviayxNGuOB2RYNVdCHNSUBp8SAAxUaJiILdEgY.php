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

/* @thex/template-parts/header/header.html.twig */
class __TwigTemplate_8fc19aa20f986b20d4845610c1049642 extends Template
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
        echo "<header class=\"header\">
  <div class=\"container\">
    <div class=\"header-container\">
      ";
        // line 4
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 4)) {
            // line 5
            echo "        <div class=\"site-brand\">
          ";
            // line 6
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
            echo "
        </div> <!--/.site-branding -->
      ";
        }
        // line 9
        echo "      ";
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 9) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search_box", [], "any", false, false, true, 9))) {
            // line 10
            echo "      <div class=\"header-right\">
        ";
            // line 11
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 11)) {
                // line 12
                echo "          <div class=\"mobile-menu\"><span></span></div> ";
                // line 13
                echo "          <div class=\"primary-menu-wrapper\">
            <div class=\"menu-wrap\">
              <div class=\"close-mobile-menu\">x</div>
              ";
                // line 16
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
                echo "
            </div> <!-- /.menu-wrap -->
          </div> <!-- /.primary-menu-wrapper -->
        ";
            }
            // line 19
            echo " <!--  end if for -->
        ";
            // line 20
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search_box", [], "any", false, false, true, 20)) {
                // line 21
                echo "          ";
                $this->loadTemplate("@thex/template-parts/header/search.html.twig", "@thex/template-parts/header/header.html.twig", 21)->display($context);
                // line 22
                echo "        ";
            }
            // line 23
            echo "      </div> <!-- /.header-right -->
    ";
        }
        // line 25
        echo "    </div><!-- /header-container -->
  </div><!-- /container -->
</header><!-- /header -->
";
    }

    public function getTemplateName()
    {
        return "@thex/template-parts/header/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 25,  88 => 23,  85 => 22,  82 => 21,  80 => 20,  77 => 19,  70 => 16,  65 => 13,  63 => 12,  61 => 11,  58 => 10,  55 => 9,  49 => 6,  46 => 5,  44 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@thex/template-parts/header/header.html.twig", "/var/www/html/web/themes/thex/templates/template-parts/header/header.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 4, "include" => 21);
        static $filters = array("escape" => 6);
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
