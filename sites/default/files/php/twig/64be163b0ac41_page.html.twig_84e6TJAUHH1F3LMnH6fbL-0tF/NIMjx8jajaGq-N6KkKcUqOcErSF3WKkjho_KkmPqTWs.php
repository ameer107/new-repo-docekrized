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

/* themes/custom/stack/templates/layout/page.html.twig */
class __TwigTemplate_de6a57f0e2fd9f69bc7ecf7d90f8ac62 extends Template
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
            'title' => [$this, 'block_title'],
            'main' => [$this, 'block_main'],
            'sidebar_first' => [$this, 'block_sidebar_first'],
            'highlighted' => [$this, 'block_highlighted'],
            'breadcrumb' => [$this, 'block_breadcrumb'],
            'action_links' => [$this, 'block_action_links'],
            'help' => [$this, 'block_help'],
            'content' => [$this, 'block_content'],
            'sidebar_second' => [$this, 'block_sidebar_second'],
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
        // line 62
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "user_left", [], "any", false, false, true, 62) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "user_right", [], "any", false, false, true, 62))) {
            // line 63
            echo "\t<div class=\"nav-utility\">
\t  ";
            // line 64
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "user_left", [], "any", false, false, true, 64)) {
                // line 65
                echo "\t  <div class=\"module left\">
\t    ";
                // line 66
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "user_left", [], "any", false, false, true, 66), 66, $this->source), "html", null, true);
                echo "
\t  </div>
      ";
            }
            // line 69
            echo "       
\t  ";
            // line 70
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "user_right", [], "any", false, false, true, 70)) {
                // line 71
                echo "\t  <div class=\"module right\">
\t    ";
                // line 72
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "user_right", [], "any", false, false, true, 72), 72, $this->source), "html", null, true);
                echo "
\t  </div>
      ";
            }
            // line 75
            echo "\t</div>
    ";
        }
        // line 77
        echo "\t
";
        // line 79
        echo "<div class=\"nav-container\" ";
        if (($context["mainmenu_sticky"] ?? null)) {
            echo " data-scroll-class='360px:pos-fixed' ";
        }
        echo ">
  ";
        // line 80
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 80) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 80)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "branding", [], "any", false, false, true, 80))) {
            // line 81
            echo "  ";
            $this->displayBlock('navbar', $context, $blocks);
        }
        // line 133
        echo "</div>

";
        // line 136
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_first", [], "any", false, false, true, 136)) {
            // line 137
            echo "<div class=\"header-wrapper\">
  <div role=\"header\" class=\"header-container ";
            // line 138
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 138, $this->source), "html", null, true);
            echo " \">
    <div class=\"row\">

      ";
            // line 142
            echo "\t  
\t   ";
            // line 144
            $context["header_first_classes"] = [0 => ((twig_get_attribute($this->env, $this->source,             // line 145
($context["page"] ?? null), "header_second", [], "any", false, false, true, 145)) ? ("col-sm-9") : ("")), 1 => ((twig_test_empty(twig_get_attribute($this->env, $this->source,             // line 146
($context["page"] ?? null), "header_second", [], "any", false, false, true, 146))) ? ("col-sm-12") : (""))];
            // line 149
            echo "\t  
      ";
            // line 150
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_first", [], "any", false, false, true, 150)) {
                // line 151
                echo "        ";
                $this->displayBlock('header_first', $context, $blocks);
                // line 156
                echo "      ";
            }
            // line 157
            echo "\t  
\t  ";
            // line 159
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_second", [], "any", false, false, true, 159)) {
                // line 160
                echo "        ";
                $this->displayBlock('header_second', $context, $blocks);
                // line 165
                echo "      ";
            }
            // line 166
            echo "\t  
\t</div>
  </div>
</div>
";
        }
        // line 172
        echo "
";
        // line 174
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, true, 174)) {
            // line 175
            echo "<div class=\"title-wrapper\">
      ";
            // line 177
            echo "      ";
            $this->displayBlock('title', $context, $blocks);
            // line 179
            echo "\t 
</div>
";
        }
        // line 183
        echo "
";
        // line 185
        $this->displayBlock('main', $context, $blocks);
        // line 263
        echo "
";
        // line 264
        if (((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "postscript_first", [], "any", false, false, true, 264) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "postscript_second", [], "any", false, false, true, 264)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "postscript_third", [], "any", false, false, true, 264)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "postscript_fouth", [], "any", false, false, true, 264)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 264))) {
            // line 265
            $this->displayBlock('footer', $context, $blocks);
        }
    }

    // line 81
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 82
        echo "    ";
        // line 83
        $context["navbar_classes"] = [0 =>         // line 84
($context["mainmenu_class"] ?? null), 1 =>         // line 85
($context["mainmenu_transparent"] ?? null)];
        // line 88
        echo "  
    <div class=\"bar bar--sm d-block d-lg-none\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-3 col-sm-2\">
\t        ";
        // line 93
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "branding", [], "any", false, false, true, 93), 93, $this->source), "html", null, true);
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
        // line 107
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["mainmenu_class"] ?? null), 107, $this->source), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["mainmenu_transparent"] ?? null), 107, $this->source), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["mainmenu_hover"] ?? null), 107, $this->source), "html", null, true);
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
        // line 112
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "branding", [], "any", false, false, true, 112), 112, $this->source), "html", null, true);
        echo "
            </div>
            <!--end module-->
          </div>
\t\t  
\t\t  
\t\t  ";
        // line 118
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 118)) {
            // line 119
            echo "          <div class=\"col-md-11 col-sm-12 text-md-end text-start text-sm-start\">
            <div class=\"bar__module\">
\t\t\t  ";
            // line 121
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 121), 121, $this->source), "html", null, true);
            echo "
\t        </div>
          </div>
          ";
        }
        // line 124
        echo " 
\t  
\t    </div>
      </div>
    </nav>
\t  
\t  
  ";
    }

    // line 151
    public function block_header_first($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 152
        echo "          <div ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["header_first_classes"] ?? null)], "method", false, false, true, 152), 152, $this->source), "html", null, true);
        echo " role=\"headingfirst\">
            ";
        // line 153
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_first", [], "any", false, false, true, 153), 153, $this->source), "html", null, true);
        echo "
          </div>
        ";
    }

    // line 160
    public function block_header_second($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 161
        echo "          <div class=\"col-sm-3\" role=\"headingsecond\">
            ";
        // line 162
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_second", [], "any", false, false, true, 162), 162, $this->source), "html", null, true);
        echo "
          </div>
        ";
    }

    // line 177
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 178
        echo "          ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, true, 178), 178, $this->source), "html", null, true);
        echo "
      ";
    }

    // line 185
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 186
        echo "  <div role=\"main\" id=\"main-container\" class=\"main-container ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 186, $this->source), "html", null, true);
        echo " js-quickedit-main-content\">
\t
\t<div class=\"row\">
      ";
        // line 190
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 190)) {
            // line 191
            echo "        ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 196
            echo "      ";
        }
        // line 197
        echo "
      ";
        // line 199
        echo "      ";
        // line 200
        $context["content_classes"] = [0 => (((twig_get_attribute($this->env, $this->source,         // line 201
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 201) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 201))) ? ("col-md-6") : ("")), 1 => (((twig_get_attribute($this->env, $this->source,         // line 202
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 202) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 202)))) ? ("col-md-9") : ("")), 2 => (((twig_get_attribute($this->env, $this->source,         // line 203
($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 203) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 203)))) ? ("col-md-8") : ("")), 3 => (((twig_test_empty(twig_get_attribute($this->env, $this->source,         // line 204
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 204)) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 204)))) ? ("col-md-12") : (""))];
        // line 207
        echo "      <div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => ($context["content_classes"] ?? null)], "method", false, false, true, 207), 207, $this->source), "html", null, true);
        echo ">

        ";
        // line 210
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 210)) {
            // line 211
            echo "          ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 214
            echo "        ";
        }
        // line 215
        echo "
        ";
        // line 217
        echo "        ";
        if (($context["breadcrumb"] ?? null)) {
            // line 218
            echo "          ";
            $this->displayBlock('breadcrumb', $context, $blocks);
            // line 221
            echo "        ";
        }
        // line 222
        echo "
        ";
        // line 224
        echo "\t\t";
        if (($context["title"] ?? null)) {
            // line 225
            echo "          <h1";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "page-header"], "method", false, false, true, 225), 225, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 225, $this->source), "html", null, true);
            echo "</h1>
        ";
        }
        // line 227
        echo "\t\t";
        // line 228
        echo "\t\t
        ";
        // line 230
        echo "        ";
        if (($context["action_links"] ?? null)) {
            // line 231
            echo "          ";
            $this->displayBlock('action_links', $context, $blocks);
            // line 234
            echo "        ";
        }
        // line 235
        echo "
        ";
        // line 237
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 237)) {
            // line 238
            echo "          ";
            $this->displayBlock('help', $context, $blocks);
            // line 241
            echo "        ";
        }
        // line 242
        echo "
        ";
        // line 244
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 248
        echo "      </div>

      ";
        // line 251
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 251)) {
            // line 252
            echo "        ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 259
            echo "      ";
        }
        // line 260
        echo "    </div>
  </div>
";
    }

    // line 191
    public function block_sidebar_first($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 192
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 193
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 193), 193, $this->source), "html", null, true);
        echo "
          </aside>
        ";
    }

    // line 211
    public function block_highlighted($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 212
        echo "            <div class=\"highlighted\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 212), 212, $this->source), "html", null, true);
        echo "</div>
          ";
    }

    // line 218
    public function block_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 219
        echo "            ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["breadcrumb"] ?? null), 219, $this->source), "html", null, true);
        echo "
          ";
    }

    // line 231
    public function block_action_links($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 232
        echo "            <ul class=\"action-links\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["action_links"] ?? null), 232, $this->source), "html", null, true);
        echo "</ul>
          ";
    }

    // line 238
    public function block_help($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 239
        echo "            ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 239), 239, $this->source), "html", null, true);
        echo "
          ";
    }

    // line 244
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 245
        echo "          <a id=\"main-content\"></a>
          ";
        // line 246
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 246), 246, $this->source), "html", null, true);
        echo "
        ";
    }

    // line 252
    public function block_sidebar_second($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 253
        echo "          <aside id=\"sidebar-second\" class=\"col-md-4 d-sm-none d-md-block\" role=\"complementary\">
            <div class=\"sidebar boxed boxed--border boxed--lg bg--secondary\">
              ";
        // line 255
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 255), 255, $this->source), "html", null, true);
        echo "
            </div>
          </aside>
        ";
    }

    // line 265
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 266
        echo "<footer class=\"footer-1\" role=\"contentinfo\">
  <div class=\"container\">
\t<!-- postscript -->
\t";
        // line 269
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "postscript_first", [], "any", false, false, true, 269) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "postscript_second", [], "any", false, false, true, 269)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "postscript_third", [], "any", false, false, true, 269)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "postscript_fouth", [], "any", false, false, true, 269))) {
            // line 270
            echo "    <div id=\"postscript\" class=\"postscript row\">
          <div class=\"col-lg-3 col-md-3 col-sm-12 col-12 postscript_first\">
            ";
            // line 272
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "postscript_first", [], "any", false, false, true, 272), 272, $this->source), "html", null, true);
            echo "
          </div>
          <div class=\"col-lg-3 col-md-3 col-sm-12 col-12 postscript_second\">
            ";
            // line 275
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "postscript_second", [], "any", false, false, true, 275), 275, $this->source), "html", null, true);
            echo "
          </div>
          <div class=\"col-lg-3 col-md-3 col-sm-12 col-12 postscript_third\">
            ";
            // line 278
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "postscript_third", [], "any", false, false, true, 278), 278, $this->source), "html", null, true);
            echo "
          </div>
          <div class=\"col-lg-3 col-md-3 col-sm-12 col-12 postscript_fouth\">
            ";
            // line 281
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "postscript_fouth", [], "any", false, false, true, 281), 281, $this->source), "html", null, true);
            echo "
          </div>
    </div>
    ";
        }
        // line 285
        echo "\t
    ";
        // line 286
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 286)) {
            // line 287
            echo "\t  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 287), 287, $this->source), "html", null, true);
            echo "
\t";
        }
        // line 289
        echo "  </div>
</footer>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/stack/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  576 => 289,  570 => 287,  568 => 286,  565 => 285,  558 => 281,  552 => 278,  546 => 275,  540 => 272,  536 => 270,  534 => 269,  529 => 266,  525 => 265,  517 => 255,  513 => 253,  509 => 252,  503 => 246,  500 => 245,  496 => 244,  489 => 239,  485 => 238,  478 => 232,  474 => 231,  467 => 219,  463 => 218,  456 => 212,  452 => 211,  445 => 193,  442 => 192,  438 => 191,  432 => 260,  429 => 259,  426 => 252,  423 => 251,  419 => 248,  416 => 244,  413 => 242,  410 => 241,  407 => 238,  404 => 237,  401 => 235,  398 => 234,  395 => 231,  392 => 230,  389 => 228,  387 => 227,  379 => 225,  376 => 224,  373 => 222,  370 => 221,  367 => 218,  364 => 217,  361 => 215,  358 => 214,  355 => 211,  352 => 210,  346 => 207,  344 => 204,  343 => 203,  342 => 202,  341 => 201,  340 => 200,  338 => 199,  335 => 197,  332 => 196,  329 => 191,  326 => 190,  319 => 186,  315 => 185,  308 => 178,  304 => 177,  297 => 162,  294 => 161,  290 => 160,  283 => 153,  278 => 152,  274 => 151,  263 => 124,  256 => 121,  252 => 119,  250 => 118,  241 => 112,  225 => 107,  208 => 93,  201 => 88,  199 => 85,  198 => 84,  197 => 83,  195 => 82,  191 => 81,  186 => 265,  184 => 264,  181 => 263,  179 => 185,  176 => 183,  171 => 179,  168 => 177,  165 => 175,  163 => 174,  160 => 172,  153 => 166,  150 => 165,  147 => 160,  144 => 159,  141 => 157,  138 => 156,  135 => 151,  133 => 150,  130 => 149,  128 => 146,  127 => 145,  126 => 144,  123 => 142,  117 => 138,  114 => 137,  112 => 136,  108 => 133,  104 => 81,  102 => 80,  95 => 79,  92 => 77,  88 => 75,  82 => 72,  79 => 71,  77 => 70,  74 => 69,  68 => 66,  65 => 65,  63 => 64,  60 => 63,  58 => 62,  54 => 60,  52 => 59,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/stack/templates/layout/page.html.twig", "/Users/personal/Documents/workspace/sites/renewal-proj-new/themes/custom/stack/templates/layout/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 59, "if" => 62, "block" => 81);
        static $filters = array("escape" => 66);
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
