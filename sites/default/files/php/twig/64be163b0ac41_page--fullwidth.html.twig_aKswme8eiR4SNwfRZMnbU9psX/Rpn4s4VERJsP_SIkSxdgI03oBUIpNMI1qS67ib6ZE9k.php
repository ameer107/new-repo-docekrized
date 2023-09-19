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

/* themes/custom/stack/templates/layout/page--fullwidth.html.twig */
class __TwigTemplate_04faa13cd48155beaf90eb491f8c8236 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'navbar' => [$this, 'block_navbar'],
            'header_first' => [$this, 'block_header_first'],
            'header_second' => [$this, 'block_header_second'],
            'main' => [$this, 'block_main'],
            'action_links' => [$this, 'block_action_links'],
            'help' => [$this, 'block_help'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 59
        $context["container"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 59), "fluid_container", [], "any", false, false, true, 59)) ? ("container-fluid") : ("container"));
        // line 60
        echo "

  <a id=\"top\"></a>
";
        // line 63
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "user_left", [], "any", false, false, true, 63) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "user_right", [], "any", false, false, true, 63))) {
            // line 64
            echo "\t<div class=\"nav-utility\">
\t  ";
            // line 65
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "user_left", [], "any", false, false, true, 65)) {
                // line 66
                echo "\t  <div class=\"module left\">
\t    ";
                // line 67
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "user_left", [], "any", false, false, true, 67), 67, $this->source), "html", null, true);
                echo "
\t  </div>
      ";
            }
            // line 70
            echo "       
\t  ";
            // line 71
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "user_right", [], "any", false, false, true, 71)) {
                // line 72
                echo "\t  <div class=\"module right\">
\t    ";
                // line 73
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "user_right", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
                echo "
\t  </div>
      ";
            }
            // line 76
            echo "\t</div>
    ";
        }
        // line 78
        echo "\t
";
        // line 80
        echo "<div class=\"nav-container\" ";
        if (($context["mainmenu_sticky"] ?? null)) {
            echo " data-scroll-class='360px:pos-fixed' ";
        }
        echo ">
  ";
        // line 81
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 81) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 81)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "branding", [], "any", false, false, true, 81))) {
            // line 82
            echo "  ";
            $this->displayBlock('navbar', $context, $blocks);
        }
        // line 134
        echo "</div>

";
        // line 137
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_first", [], "any", false, false, true, 137)) {
            // line 138
            echo "<div class=\"header-wrapper\">
  <div role=\"header\" class=\"header-container ";
            // line 139
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 139, $this->source), "html", null, true);
            echo " \">
    <div class=\"row\">

      ";
            // line 143
            echo "\t  
\t   ";
            // line 145
            $context["header_first_classes"] = [0 => ((twig_get_attribute($this->env, $this->source,             // line 146
($context["page"] ?? null), "header_second", [], "any", false, false, true, 146)) ? ("col-sm-9") : ("")), 1 => ((twig_test_empty(twig_get_attribute($this->env, $this->source,             // line 147
($context["page"] ?? null), "header_second", [], "any", false, false, true, 147))) ? ("col-sm-12") : (""))];
            // line 150
            echo "\t  
      ";
            // line 151
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_first", [], "any", false, false, true, 151)) {
                // line 152
                echo "        ";
                $this->displayBlock('header_first', $context, $blocks);
                // line 157
                echo "      ";
            }
            // line 158
            echo "\t  
\t  ";
            // line 160
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_second", [], "any", false, false, true, 160)) {
                // line 161
                echo "        ";
                $this->displayBlock('header_second', $context, $blocks);
                // line 166
                echo "      ";
            }
            // line 167
            echo "\t  
\t</div>
  </div>
</div>
";
        }
        // line 173
        echo "
";
        // line 175
        $this->displayBlock('main', $context, $blocks);
        // line 202
        echo "

";
        // line 204
        if (((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "postscript_first", [], "any", false, false, true, 204) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "postscript_second", [], "any", false, false, true, 204)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "postscript_third", [], "any", false, false, true, 204)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "postscript_fouth", [], "any", false, false, true, 204)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 204))) {
            // line 205
            $this->displayBlock('footer', $context, $blocks);
        }
        // line 233
        echo "
";
    }

    // line 82
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 83
        echo "    ";
        // line 84
        $context["navbar_classes"] = [0 =>         // line 85
($context["mainmenu_class"] ?? null), 1 =>         // line 86
($context["mainmenu_transparent"] ?? null)];
        // line 89
        echo "  
    <div class=\"bar bar--sm d-block d-lg-none\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-3 col-sm-2\">
\t        ";
        // line 94
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "branding", [], "any", false, false, true, 94), 94, $this->source), "html", null, true);
        echo "
          </div>
          <div class=\"col-9 col-sm-10 text-end\">
            <a href=\"#\" class=\"hamburger-toggle\" data-toggle-class=\"#menu1;d-none d-sm-block\">
              <i class=\"icon icon--sm stack-interface stack-menu\"></i>
            </a>
          </div>
        </div>
        <!--end of row-->
      </div>
      <!--end of container-->
    </div>
    <!--end bar-->
\t
\t<nav id=\"menu1\" class=\"bar bar--sm bar-1 d-none d-lg-block ";
        // line 108
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["mainmenu_class"] ?? null), 108, $this->source), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["mainmenu_transparent"] ?? null), 108, $this->source), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["mainmenu_hover"] ?? null), 108, $this->source), "html", null, true);
        echo "\" ";
        if (($context["mainmenu_sticky"] ?? null)) {
            echo " data-scroll-class='360px:pos-fixed' ";
        }
        echo ">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-1 col-sm-2 d-none d-sm-block\">
            <div class=\"bar__module\">
              ";
        // line 113
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "branding", [], "any", false, false, true, 113), 113, $this->source), "html", null, true);
        echo "
            </div>
            <!--end module-->
          </div>
\t\t  
\t\t  
\t\t  ";
        // line 119
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 119)) {
            // line 120
            echo "          <div class=\"col-md-11 col-sm-12 text-md-end text-start text-sm-start\">
            <div class=\"bar__module\">
\t\t\t  ";
            // line 122
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 122), 122, $this->source), "html", null, true);
            echo "
\t        </div>
          </div>
          ";
        }
        // line 125
        echo " 
\t  
\t    </div>
      </div>
    </nav>
\t  
\t  
  ";
    }

    // line 152
    public function block_header_first($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 153
        echo "          <div ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["header_first_classes"] ?? null)], "method", false, false, true, 153), 153, $this->source), "html", null, true);
        echo " role=\"headingfirst\">
            ";
        // line 154
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_first", [], "any", false, false, true, 154), 154, $this->source), "html", null, true);
        echo "
          </div>
        ";
    }

    // line 161
    public function block_header_second($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 162
        echo "          <div class=\"col-sm-3\" role=\"headingsecond\">
            ";
        // line 163
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_second", [], "any", false, false, true, 163), 163, $this->source), "html", null, true);
        echo "
          </div>
        ";
    }

    // line 175
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 176
        echo "  <div role=\"main\" id=\"main-container\" class=\"main-container js-quickedit-main-content\">
      <div";
        // line 177
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => ($context["content_classes"] ?? null)], "method", false, false, true, 177), 177, $this->source), "html", null, true);
        echo ">
\t\t
        ";
        // line 180
        echo "        ";
        if (($context["action_links"] ?? null)) {
            // line 181
            echo "          ";
            $this->displayBlock('action_links', $context, $blocks);
            // line 184
            echo "        ";
        }
        // line 185
        echo "
        ";
        // line 187
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 187)) {
            // line 188
            echo "          ";
            $this->displayBlock('help', $context, $blocks);
            // line 191
            echo "        ";
        }
        // line 192
        echo "
        ";
        // line 194
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 198
        echo "      </div>

  </div>
";
    }

    // line 181
    public function block_action_links($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 182
        echo "            <ul class=\"action-links\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["action_links"] ?? null), 182, $this->source), "html", null, true);
        echo "</ul>
          ";
    }

    // line 188
    public function block_help($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 189
        echo "            ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 189), 189, $this->source), "html", null, true);
        echo "
          ";
    }

    // line 194
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 195
        echo "          <a id=\"main-content\"></a>
          ";
        // line 196
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 196), 196, $this->source), "html", null, true);
        echo "
        ";
    }

    // line 205
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 206
        echo "<footer class=\"footer-1\" role=\"contentinfo\">
  <div class=\"container\">
\t<!-- postscript -->
\t";
        // line 209
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "postscript_first", [], "any", false, false, true, 209) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "postscript_second", [], "any", false, false, true, 209)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "postscript_third", [], "any", false, false, true, 209)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "postscript_fouth", [], "any", false, false, true, 209))) {
            // line 210
            echo "    <div id=\"postscript\" class=\"postscript row\">
          <div class=\"col-lg-3 col-md-3 col-sm-12 col-12 postscript_first\">
            ";
            // line 212
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "postscript_first", [], "any", false, false, true, 212), 212, $this->source), "html", null, true);
            echo "
          </div>
          <div class=\"col-lg-3 col-md-3 col-sm-12 col-12 postscript_second\">
            ";
            // line 215
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "postscript_second", [], "any", false, false, true, 215), 215, $this->source), "html", null, true);
            echo "
          </div>
          <div class=\"col-lg-3 col-md-3 col-sm-12 col-12 postscript_third\">
            ";
            // line 218
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "postscript_third", [], "any", false, false, true, 218), 218, $this->source), "html", null, true);
            echo "
          </div>
          <div class=\"col-lg-3 col-md-3 col-sm-12 col-12 postscript_fouth\">
            ";
            // line 221
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "postscript_fouth", [], "any", false, false, true, 221), 221, $this->source), "html", null, true);
            echo "
          </div>
    </div>
    ";
        }
        // line 225
        echo "\t
    ";
        // line 226
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 226)) {
            // line 227
            echo "\t  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 227), 227, $this->source), "html", null, true);
            echo "
\t";
        }
        // line 229
        echo "  </div>
</footer>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/stack/templates/layout/page--fullwidth.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  420 => 229,  414 => 227,  412 => 226,  409 => 225,  402 => 221,  396 => 218,  390 => 215,  384 => 212,  380 => 210,  378 => 209,  373 => 206,  369 => 205,  363 => 196,  360 => 195,  356 => 194,  349 => 189,  345 => 188,  338 => 182,  334 => 181,  327 => 198,  324 => 194,  321 => 192,  318 => 191,  315 => 188,  312 => 187,  309 => 185,  306 => 184,  303 => 181,  300 => 180,  295 => 177,  292 => 176,  288 => 175,  281 => 163,  278 => 162,  274 => 161,  267 => 154,  262 => 153,  258 => 152,  247 => 125,  240 => 122,  236 => 120,  234 => 119,  225 => 113,  209 => 108,  192 => 94,  185 => 89,  183 => 86,  182 => 85,  181 => 84,  179 => 83,  175 => 82,  170 => 233,  167 => 205,  165 => 204,  161 => 202,  159 => 175,  156 => 173,  149 => 167,  146 => 166,  143 => 161,  140 => 160,  137 => 158,  134 => 157,  131 => 152,  129 => 151,  126 => 150,  124 => 147,  123 => 146,  122 => 145,  119 => 143,  113 => 139,  110 => 138,  108 => 137,  104 => 134,  100 => 82,  98 => 81,  91 => 80,  88 => 78,  84 => 76,  78 => 73,  75 => 72,  73 => 71,  70 => 70,  64 => 67,  61 => 66,  59 => 65,  56 => 64,  54 => 63,  49 => 60,  47 => 59,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/stack/templates/layout/page--fullwidth.html.twig", "/Users/personal/Documents/workspace/sites/renewal-proj-new/themes/custom/stack/templates/layout/page--fullwidth.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 59, "if" => 63, "block" => 82);
        static $filters = array("escape" => 67);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
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
