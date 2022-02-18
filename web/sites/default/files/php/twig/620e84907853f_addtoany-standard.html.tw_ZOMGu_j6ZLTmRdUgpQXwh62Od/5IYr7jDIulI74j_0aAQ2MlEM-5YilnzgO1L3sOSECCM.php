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

/* modules/contrib/addtoany/templates/addtoany-standard.html.twig */
class __TwigTemplate_d51c972fabd49c9083a9159e6e70465f5885393d250d98fb7e5c537046409442 extends \Twig\Template
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
        // line 19
        ob_start(function () { return ''; });
        // line 20
        echo "
  ";
        // line 21
        if ((($context["button_setting"] ?? null) != "none")) {
            // line 22
            echo "    ";
            ob_start(function () { return ''; });
            // line 23
            echo "      <a class=\"a2a_dd addtoany_share\" href=\"https://www.addtoany.com/share#url=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_urlencode_filter($this->sandbox->ensureToStringAllowed(($context["link_url"] ?? null), 23, $this->source)), "html", null, true);
            echo "&amp;title=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_urlencode_filter($this->sandbox->ensureToStringAllowed(($context["link_title"] ?? null), 23, $this->source)), "html", null, true);
            echo "\">
        ";
            // line 24
            if (($context["button_image"] ?? null)) {
                // line 25
                echo "          <img src=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["button_image"] ?? null), 25, $this->source), "html", null, true);
                echo "\" alt=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Share"));
                echo "\">
        ";
            }
            // line 27
            echo "      </a>
    ";
            $context["universal_button"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 29
            echo "  ";
        }
        // line 30
        echo "
  <span class=\"a2a_kit a2a_kit_size_";
        // line 31
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["buttons_size"] ?? null), 31, $this->source), "html", null, true);
        echo " addtoany_list\" data-a2a-url=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["link_url"] ?? null), 31, $this->source), "html", null, true);
        echo "\" data-a2a-title=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["link_title"] ?? null), 31, $this->source), "html", null, true);
        echo "\">
    ";
        // line 32
        if ((($context["universal_button_placement"] ?? null) == "before")) {
            // line 33
            echo "      ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["universal_button"] ?? null), 33, $this->source), "html", null, true);
            echo "
    ";
        }
        // line 35
        echo "
    ";
        // line 36
        if (($context["addtoany_html"] ?? null)) {
            // line 37
            echo "      ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["addtoany_html"] ?? null), 37, $this->source));
            echo "
    ";
        }
        // line 39
        echo "
    ";
        // line 40
        if ((($context["universal_button_placement"] ?? null) == "after")) {
            // line 41
            echo "      ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["universal_button"] ?? null), 41, $this->source), "html", null, true);
            echo "
    ";
        }
        // line 43
        echo "  </span>

";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "modules/contrib/addtoany/templates/addtoany-standard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 43,  108 => 41,  106 => 40,  103 => 39,  97 => 37,  95 => 36,  92 => 35,  86 => 33,  84 => 32,  76 => 31,  73 => 30,  70 => 29,  66 => 27,  58 => 25,  56 => 24,  49 => 23,  46 => 22,  44 => 21,  41 => 20,  39 => 19,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/addtoany/templates/addtoany-standard.html.twig", "/var/www/web/modules/contrib/addtoany/templates/addtoany-standard.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("spaceless" => 19, "if" => 21, "set" => 22);
        static $filters = array("escape" => 23, "url_encode" => 23, "t" => 25, "raw" => 37);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['spaceless', 'if', 'set'],
                ['escape', 'url_encode', 't', 'raw'],
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
