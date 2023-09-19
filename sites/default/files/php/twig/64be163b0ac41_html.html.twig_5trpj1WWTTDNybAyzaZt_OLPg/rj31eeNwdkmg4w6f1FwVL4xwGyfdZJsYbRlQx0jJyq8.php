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

/* themes/custom/stack/templates/html.html.twig */
class __TwigTemplate_44f1fe57f76233aeac5cc2687e251f62 extends Template
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
        $context["body_classes"] = [0 => ((        // line 49
($context["logged_in"] ?? null)) ? ("user-logged-in") : ("")), 1 => (( !        // line 50
($context["root_path"] ?? null)) ? ("path-frontpage") : (("path-not-frontpage path-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["root_path"] ?? null), 50, $this->source))))), 2 => ((        // line 51
($context["node_type"] ?? null)) ? (("page-node-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["node_type"] ?? null), 51, $this->source)))) : ("")), 3 => ((        // line 52
($context["db_offline"] ?? null)) ? ("db-offline") : ("")), 4 => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 53
($context["theme"] ?? null), "settings", [], "any", false, false, true, 53), "navbar_position", [], "any", false, false, true, 53)) ? (("navbar-is-" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 53), "navbar_position", [], "any", false, false, true, 53), 53, $this->source))) : ("")), 5 => ((twig_get_attribute($this->env, $this->source,         // line 54
($context["theme"] ?? null), "has_glyphicons", [], "any", false, false, true, 54)) ? ("has-glyphicons") : ("")), 6 =>         // line 55
($context["mainmenu_hover"] ?? null)];
        // line 58
        echo "<!DOCTYPE html>
<html ";
        // line 59
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["html_attributes"] ?? null), 59, $this->source), "html", null, true);
        echo ">
  <head>
    <head-placeholder token=\"";
        // line 61
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 61, $this->source));
        echo "\">
    <title>";
        // line 62
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->safeJoin($this->env, $this->sandbox->ensureToStringAllowed(($context["head_title"] ?? null), 62, $this->source), " | "));
        echo "</title>
\t
\t<!-- Fontawesome -->
\t<link href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\">
\t
    <css-placeholder token=\"";
        // line 67
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 67, $this->source));
        echo "\">
    <js-placeholder token=\"";
        // line 68
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 68, $this->source));
        echo "\">    

";
        // line 70
        if (((($__internal_compile_0 = ($context["html_attributes"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["dir"] ?? null) : null) == "ltr")) {
            // line 71
            echo "  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("stack/global-styling"), "html", null, true);
            echo "
";
        } elseif (((($__internal_compile_1 =         // line 72
($context["html_attributes"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["dir"] ?? null) : null) == "rtl")) {
            // line 73
            echo "  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("stack/global-styling-rtl"), "html", null, true);
            echo "
";
        }
        // line 75
        echo "
  </head>
  <body";
        // line 77
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["body_classes"] ?? null)], "method", false, false, true, 77), 77, $this->source), "html", null, true);
        echo ">
    <a id=\"start\"></a>
    ";
        // line 79
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_top"] ?? null), 79, $this->source), "html", null, true);
        echo "
    ";
        // line 80
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page"] ?? null), 80, $this->source), "html", null, true);
        echo "
    ";
        // line 81
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_bottom"] ?? null), 81, $this->source), "html", null, true);
        echo "
    <a class=\"back-to-top inner-link\" href=\"#start\" data-scroll-class=\"100vh:active\">
      <i class=\"stack-interface stack-up-open-big\"></i>
    </a>
    <js-bottom-placeholder token=\"";
        // line 85
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 85, $this->source));
        echo "\">
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/stack/templates/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 85,  109 => 81,  105 => 80,  101 => 79,  96 => 77,  92 => 75,  86 => 73,  84 => 72,  79 => 71,  77 => 70,  72 => 68,  68 => 67,  60 => 62,  56 => 61,  51 => 59,  48 => 58,  46 => 55,  45 => 54,  44 => 53,  43 => 52,  42 => 51,  41 => 50,  40 => 49,  39 => 48,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/stack/templates/html.html.twig", "/Users/personal/Documents/workspace/sites/renewal-proj-new/themes/custom/stack/templates/html.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 48, "if" => 70);
        static $filters = array("clean_class" => 50, "escape" => 59, "raw" => 61, "safe_join" => 62);
        static $functions = array("attach_library" => 71);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape', 'raw', 'safe_join'],
                ['attach_library']
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
