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

/* themes/custom/stack/templates/paragraph/paragraph--paragraph_image_bg_block.html.twig */
class __TwigTemplate_f65e9c3471c7e1353b3ea388365f51b6 extends Template
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
        // line 41
        echo "
";
        // line 42
        $context["bg_img"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_paragraph_background_image", [], "any", false, false, true, 42)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#items"] ?? null) : null), "entity", [], "any", false, false, true, 42), "uri", [], "any", false, false, true, 42), "value", [], "any", false, false, true, 42);
        // line 43
        if ( !(null === ($context["bg_img"] ?? null))) {
            // line 44
            echo "\t";
            $context["bg_img_url"] = $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(($context["bg_img"] ?? null), 44, $this->source));
            // line 45
            echo "\t";
            $context["image_class"] = "imagebg";
        } else {
            // line 47
            echo "\t";
            $context["bg_img_url"] = "/";
            // line 48
            echo "\t";
            $context["image_class"] = "";
        }
        // line 51
        $context["classes"] = [0 => "paragraph", 1 => ("paragraph--type--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 53
($context["paragraph"] ?? null), "bundle", [], "any", false, false, true, 53), 53, $this->source))), 2 => twig_trim_filter($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 54
($context["paragraph"] ?? null), "field_paragraph_extra_class", [], "any", false, false, true, 54), "value", [], "any", false, false, true, 54), 54, $this->source))), 3 =>         // line 55
($context["image_class"] ?? null), 4 => ((        // line 56
($context["view_mode"] ?? null)) ? (("paragraph--view-mode--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 56, $this->source)))) : (""))];
        // line 59
        echo "
";
        // line 60
        $this->displayBlock('paragraph', $context, $blocks);
    }

    public function block_paragraph($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 61
        echo "  <section";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 61), 61, $this->source), "html", null, true);
        echo " ";
        if (twig_trim_filter($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_paragraph_id", [], "any", false, false, true, 61), "value", [], "any", false, false, true, 61)))) {
            echo " id=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_striptags($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_paragraph_id", [], "any", false, false, true, 61), "value", [], "any", false, false, true, 61), 61, $this->source)), "html", null, true);
            echo "\"  ";
        }
        echo "  ";
        if (twig_trim_filter($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_paragraph_data_overlay", [], "any", false, false, true, 61), "value", [], "any", false, false, true, 61)))) {
            echo " data-overlay=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_striptags($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_paragraph_data_overlay", [], "any", false, false, true, 61), "value", [], "any", false, false, true, 61), 61, $this->source)), "html", null, true);
            echo "\" ";
        }
        echo " ";
        if (twig_trim_filter($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_data_gradient_bg", [], "any", false, false, true, 61), "value", [], "any", false, false, true, 61)))) {
            echo " data-gradient-bg=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_striptags($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_data_gradient_bg", [], "any", false, false, true, 61), "value", [], "any", false, false, true, 61), 61, $this->source)), "html", null, true);
            echo "\" ";
        }
        echo " >
    ";
        // line 62
        if ((($context["bg_img_url"] ?? null) != "/")) {
            // line 63
            echo "\t<div class=\"background-image-holder\">
       <img alt=\"background\" src=\"";
            // line 64
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bg_img_url"] ?? null), 64, $this->source), "html", null, true);
            echo "\" />
    </div>
\t";
        }
        // line 67
        echo "    <div class=\"container ";
        if (twig_trim_filter($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_content_vertical_center", [], "any", false, false, true, 67), "value", [], "any", false, false, true, 67)))) {
            echo " pos-vertical-center ";
        }
        echo " \">
    ";
        // line 68
        $this->displayBlock('content', $context, $blocks);
        // line 71
        echo "\t</div>
  </section>
";
    }

    // line 68
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "\t
      ";
        // line 69
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 69, $this->source), "field_paragraph_extra_class", "field_paragraph_background_image", "field_content_vertical_center", "field_paragraph_data_overlay", "field_paragraph_id", "field_data_gradient_bg"), "html", null, true);
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "themes/custom/stack/templates/paragraph/paragraph--paragraph_image_bg_block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 69,  127 => 68,  121 => 71,  119 => 68,  112 => 67,  106 => 64,  103 => 63,  101 => 62,  78 => 61,  71 => 60,  68 => 59,  66 => 56,  65 => 55,  64 => 54,  63 => 53,  62 => 51,  58 => 48,  55 => 47,  51 => 45,  48 => 44,  46 => 43,  44 => 42,  41 => 41,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/stack/templates/paragraph/paragraph--paragraph_image_bg_block.html.twig", "/Users/personal/Documents/workspace/sites/renewal-proj-new/themes/custom/stack/templates/paragraph/paragraph--paragraph_image_bg_block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 42, "if" => 43, "block" => 60);
        static $filters = array("clean_class" => 53, "trim" => 54, "render" => 54, "escape" => 61, "striptags" => 61, "without" => 69);
        static $functions = array("file_url" => 44);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['clean_class', 'trim', 'render', 'escape', 'striptags', 'without'],
                ['file_url']
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
