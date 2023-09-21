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

/* themes/custom/stack/templates/node/node.html.twig */
class __TwigTemplate_1ce3f7e6323b40035f3d2f0803256953 extends Template
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
        // line 69
        $context["classes"] = [0 => "node", 1 => ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 71
($context["node"] ?? null), "bundle", [], "any", false, false, true, 71), 71, $this->source))), 2 => \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 72
($context["node"] ?? null), "bundle", [], "any", false, false, true, 72), 72, $this->source)), 3 => ((twig_get_attribute($this->env, $this->source,         // line 73
($context["node"] ?? null), "isPromoted", [], "method", false, false, true, 73)) ? ("is-promoted") : ("")), 4 => ((twig_get_attribute($this->env, $this->source,         // line 74
($context["node"] ?? null), "isSticky", [], "method", false, false, true, 74)) ? ("is-sticky") : ("")), 5 => (( !twig_get_attribute($this->env, $this->source,         // line 75
($context["node"] ?? null), "isPublished", [], "method", false, false, true, 75)) ? ("is-unpublished") : ("")), 6 => ((        // line 76
($context["view_mode"] ?? null)) ? (\Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 76, $this->source))) : ("")), 7 => "clearfix"];
        // line 80
        echo "<article";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 80), 80, $this->source), "html", null, true);
        echo ">

  ";
        // line 82
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 82, $this->source), "html", null, true);
        echo "
  ";
        // line 83
        if ( !($context["page"] ?? null)) {
            // line 84
            echo "    <h2";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_attributes"] ?? null), 84, $this->source), "html", null, true);
            echo ">
      <a href=\"";
            // line 85
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 85, $this->source), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 85, $this->source), "html", null, true);
            echo "</a>
    </h2>
  ";
        }
        // line 88
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 88, $this->source), "html", null, true);
        echo "

  ";
        // line 90
        if (($context["display_submitted"] ?? null)) {
            // line 91
            echo "    <footer>
      ";
            // line 92
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_picture"] ?? null), 92, $this->source), "html", null, true);
            echo "
      <div";
            // line 93
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["author_attributes"] ?? null), "addClass", [0 => "author header-info"], "method", false, false, true, 93), 93, $this->source), "html", null, true);
            echo ">
\t    <div class=\"article-create-date\">
          ";
            // line 95
            echo t("<i class=\"fa fa-clock-o themecolor-text\"></i> <span class=\"label\">Create:</span> @date", array("@date" => ($context["date"] ?? null), ));
            // line 96
            echo "\t\t</div>
\t\t<div class=\"article-create-date\">
\t\t  ";
            // line 98
            echo t("<i class=\"fa fa-user themecolor-text\"></i> <span class=\"label\">Author:</span> @author_name", array("@author_name" => ($context["author_name"] ?? null), ));
            // line 99
            echo "\t\t</div>
        ";
            // line 100
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["metadata"] ?? null), 100, $this->source), "html", null, true);
            echo "
      </div>
    </footer>
  ";
        }
        // line 104
        echo "
  <div";
        // line 105
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => "content"], "method", false, false, true, 105), 105, $this->source), "html", null, true);
        echo ">
    ";
        // line 106
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 106, $this->source), "field_mainmenu_transparent"), "html", null, true);
        echo "
  </div>

</article>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/stack/templates/node/node.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 106,  113 => 105,  110 => 104,  103 => 100,  100 => 99,  98 => 98,  94 => 96,  92 => 95,  87 => 93,  83 => 92,  80 => 91,  78 => 90,  72 => 88,  64 => 85,  59 => 84,  57 => 83,  53 => 82,  47 => 80,  45 => 76,  44 => 75,  43 => 74,  42 => 73,  41 => 72,  40 => 71,  39 => 69,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/stack/templates/node/node.html.twig", "/var/www/html/themes/custom/stack/templates/node/node.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 69, "if" => 83, "trans" => 95);
        static $filters = array("clean_class" => 71, "escape" => 80, "without" => 106);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'trans'],
                ['clean_class', 'escape', 'without'],
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
