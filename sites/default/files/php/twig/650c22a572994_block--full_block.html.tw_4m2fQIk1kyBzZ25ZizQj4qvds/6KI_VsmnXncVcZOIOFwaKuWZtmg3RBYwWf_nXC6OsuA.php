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

/* themes/custom/stack/templates/block/block--full_block.html.twig */
class __TwigTemplate_88b9168e7e83039147f39293feac4755 extends Template
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
        // line 48
        $context["bg_img"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_block_background_image", [], "any", false, false, true, 48)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#items"] ?? null) : null), "entity", [], "any", false, false, true, 48), "uri", [], "any", false, false, true, 48), "value", [], "any", false, false, true, 48);
        // line 49
        if ( !(null === ($context["bg_img"] ?? null))) {
            // line 50
            echo "\t";
            $context["bg_img_url"] = $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(($context["bg_img"] ?? null), 50, $this->source));
            // line 51
            echo "\t";
            $context["image_class"] = "imagebg";
        } else {
            // line 53
            echo "\t";
            $context["bg_img_url"] = "/";
            // line 54
            echo "\t";
            $context["image_class"] = "";
        }
        // line 56
        echo "
";
        // line 58
        $context["classes"] = [0 => "block", 1 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 60
($context["configuration"] ?? null), "provider", [], "any", false, false, true, 60), 60, $this->source))), 2 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 61
($context["plugin_id"] ?? null), 61, $this->source))), 3 => twig_lower_filter($this->env, twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 62
($context["content"] ?? null), "field_block_extra_class", [], "any", false, false, true, 62), 62, $this->source))))), 4 => "clearfix", 5 =>         // line 64
($context["image_class"] ?? null)];
        // line 67
        echo "<section";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 67), 67, $this->source), "html", null, true);
        echo "  id=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_replace_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_block_id", [], "any", false, false, true, 67), 67, $this->source))), ["
" => "", " " => ""]), "html", null, true);
        echo "\" ";
        if (twig_replace_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_block_data_overlay", [], "any", false, false, true, 67))), ["
" => "", " " => ""])) {
            echo " data-overlay=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_replace_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_block_data_overlay", [], "any", false, false, true, 67), 67, $this->source))), ["
" => "", " " => ""]), "html", null, true);
            echo "\" ";
        }
        echo " >
  
  ";
        // line 69
        if ((($context["bg_img_url"] ?? null) != "/")) {
            // line 70
            echo "\t<div class=\"background-image-holder\">
       <img alt=\"background\" src=\"";
            // line 71
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bg_img_url"] ?? null), 71, $this->source), "html", null, true);
            echo "\" />
    </div>
  ";
        }
        // line 74
        echo "  ";
        if ((twig_lower_filter($this->env, twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_block_container", [], "any", false, false, true, 74))))) == "on")) {
            // line 75
            echo "    <div class=\"container ";
            if ((twig_lower_filter($this->env, twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_content_vertical_center", [], "any", false, false, true, 75))))) == "on")) {
                echo " pos-vertical-center ";
            }
            echo " \">
  ";
        }
        // line 77
        echo "    ";
        $this->displayBlock('content', $context, $blocks);
        // line 80
        echo "\t
  ";
        // line 81
        if ((twig_lower_filter($this->env, twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_block_container", [], "any", false, false, true, 81))))) == "on")) {
            echo " </div> ";
        }
        // line 82
        echo "  
</section>






";
    }

    // line 77
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 78
        echo "      ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 78, $this->source), "field_block_extra_class", "field_block_background_image", "field_content_vertical_center", "field_block_data_overlay", "field_block_id", "field_block_container"), "html", null, true);
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "themes/custom/stack/templates/block/block--full_block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 78,  128 => 77,  116 => 82,  112 => 81,  109 => 80,  106 => 77,  98 => 75,  95 => 74,  89 => 71,  86 => 70,  84 => 69,  67 => 67,  65 => 64,  64 => 62,  63 => 61,  62 => 60,  61 => 58,  58 => 56,  54 => 54,  51 => 53,  47 => 51,  44 => 50,  42 => 49,  40 => 48,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/stack/templates/block/block--full_block.html.twig", "/var/www/html/themes/custom/stack/templates/block/block--full_block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 48, "if" => 49, "block" => 77);
        static $filters = array("clean_class" => 60, "lower" => 62, "trim" => 62, "striptags" => 62, "render" => 62, "escape" => 67, "replace" => 67, "without" => 78);
        static $functions = array("file_url" => 50);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['clean_class', 'lower', 'trim', 'striptags', 'render', 'escape', 'replace', 'without'],
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
