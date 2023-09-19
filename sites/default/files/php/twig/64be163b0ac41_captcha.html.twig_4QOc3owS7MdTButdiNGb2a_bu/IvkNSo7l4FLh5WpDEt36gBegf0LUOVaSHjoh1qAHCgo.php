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

/* modules/contrib/captcha/templates/captcha.html.twig */
class __TwigTemplate_1c2b5fc086c2150f8f250af0cdd2bf6b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'captcha' => [$this, 'block_captcha'],
            'captcha_display' => [$this, 'block_captcha_display'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "
";
        // line 20
        echo "
";
        // line 22
        $context["classes"] = [0 => "captcha", 1 => \Drupal\Component\Utility\Html::getClass(("captcha-type-challenge--" . $this->sandbox->ensureToStringAllowed((($__internal_compile_0 =         // line 24
($context["element"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#captcha_type_challenge"] ?? null) : null), 24, $this->source)))];
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('captcha', $context, $blocks);
    }

    public function block_captcha($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "\t";
        if (($context["is_visible"] ?? null)) {
            // line 30
            echo "\t\t";
            $this->displayBlock('captcha_display', $context, $blocks);
            // line 45
            echo "\t";
        } else {
            // line 46
            echo "\t\t";
            // line 48
            echo "\t\t";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["element"] ?? null), 48, $this->source), "html", null, true);
            echo "
\t";
        }
    }

    // line 30
    public function block_captcha_display($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        echo "\t\t\t<fieldset ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 31), 31, $this->source), "html", null, true);
        echo ">
\t\t\t\t";
        // line 32
        if (($context["title"] ?? null)) {
            // line 33
            echo "\t\t\t\t\t<label class=\"captcha__title js-form-required form-required\">
\t\t\t\t\t\t";
            // line 34
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 34, $this->source), "html", null, true);
            echo "
\t\t\t\t\t</label>
\t\t\t\t";
        }
        // line 37
        echo "\t\t\t\t<div class=\"captcha__element\">
\t\t\t\t\t";
        // line 38
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["element"] ?? null), 38, $this->source), "html", null, true);
        echo "
\t\t\t\t</div>
\t\t\t\t";
        // line 40
        if (($context["description"] ?? null)) {
            // line 41
            echo "\t\t\t\t\t<div class=\"captcha__description description\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["description"] ?? null), 41, $this->source), "html", null, true);
            echo "</div>
\t\t\t\t";
        }
        // line 43
        echo "\t\t\t</fieldset>
\t\t";
    }

    public function getTemplateName()
    {
        return "modules/contrib/captcha/templates/captcha.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 43,  109 => 41,  107 => 40,  102 => 38,  99 => 37,  93 => 34,  90 => 33,  88 => 32,  83 => 31,  79 => 30,  71 => 48,  69 => 46,  66 => 45,  63 => 30,  60 => 29,  53 => 28,  50 => 27,  48 => 24,  47 => 22,  44 => 20,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/captcha/templates/captcha.html.twig", "/Users/personal/Documents/workspace/sites/renewal-proj-new/modules/contrib/captcha/templates/captcha.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 22, "block" => 28, "if" => 29);
        static $filters = array("clean_class" => 24, "escape" => 48);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if'],
                ['clean_class', 'escape'],
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
