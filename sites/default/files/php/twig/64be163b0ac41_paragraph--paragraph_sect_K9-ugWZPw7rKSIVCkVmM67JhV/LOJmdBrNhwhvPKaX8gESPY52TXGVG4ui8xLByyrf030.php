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

/* themes/custom/stack/templates/paragraph/paragraph--paragraph_section.html.twig */
class __TwigTemplate_e2c8f1b02d0b9a297db48aadea5ac0fe extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'paragraph' => [$this, 'block_paragraph'],
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 42
        $context["classes"] = [0 => "paragraph", 1 => ("paragraph--type--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 44
($context["paragraph"] ?? null), "bundle", [], "any", false, false, true, 44), 44, $this->source))), 2 => twig_trim_filter($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 45
($context["paragraph"] ?? null), "field_paragraph_extra_class", [], "any", false, false, true, 45), "value", [], "any", false, false, true, 45), 45, $this->source))), 3 => ((        // line 46
($context["view_mode"] ?? null)) ? (("paragraph--view-mode--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 46, $this->source)))) : (""))];
        // line 49
        $this->displayBlock('paragraph', $context, $blocks);
    }

    public function block_paragraph($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 50
        echo "  <section";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 50), 50, $this->source), "html", null, true);
        echo " ";
        if (twig_trim_filter($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_paragraph_id", [], "any", false, false, true, 50), "value", [], "any", false, false, true, 50)))) {
            echo " id=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_trim_filter($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_paragraph_id", [], "any", false, false, true, 50), "value", [], "any", false, false, true, 50), 50, $this->source))), "html", null, true);
            echo "\"  ";
        }
        echo " ";
        if (twig_trim_filter($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_data_gradient_bg", [], "any", false, false, true, 50), "value", [], "any", false, false, true, 50)))) {
            echo " data-gradient-bg=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_trim_filter($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_data_gradient_bg", [], "any", false, false, true, 50), "value", [], "any", false, false, true, 50), 50, $this->source))), "html", null, true);
            echo "\" ";
        }
        echo " >
    ";
        // line 51
        if (twig_trim_filter($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_paragraph_container", [], "any", false, false, true, 51), "value", [], "any", false, false, true, 51)))) {
            echo " <div class=\"container ";
            if (twig_trim_filter($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_content_vertical_center", [], "any", false, false, true, 51), "value", [], "any", false, false, true, 51)))) {
                echo "pos-vertical-center";
            }
            echo "\"> ";
        }
        // line 52
        echo "    ";
        $this->displayBlock('content', $context, $blocks);
        // line 55
        echo "    ";
        if (twig_trim_filter($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_paragraph_container", [], "any", false, false, true, 55), "value", [], "any", false, false, true, 55)))) {
            echo " </div> ";
        }
        // line 56
        echo "  </section>
";
    }

    // line 52
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "\t
      ";
        // line 53
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 53, $this->source), "field_paragraph_extra_class", "field_content_vertical_center", "field_paragraph_id", "field_data_gradient_bg", "field_paragraph_container"), "html", null, true);
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "themes/custom/stack/templates/paragraph/paragraph--paragraph_section.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 53,  91 => 52,  86 => 56,  81 => 55,  78 => 52,  70 => 51,  53 => 50,  46 => 49,  44 => 46,  43 => 45,  42 => 44,  41 => 42,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/stack/templates/paragraph/paragraph--paragraph_section.html.twig", "/Users/personal/Documents/workspace/sites/renewal-proj-new/themes/custom/stack/templates/paragraph/paragraph--paragraph_section.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 42, "block" => 49, "if" => 50);
        static $filters = array("clean_class" => 44, "trim" => 45, "render" => 45, "escape" => 50, "without" => 53);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if'],
                ['clean_class', 'trim', 'render', 'escape', 'without'],
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
