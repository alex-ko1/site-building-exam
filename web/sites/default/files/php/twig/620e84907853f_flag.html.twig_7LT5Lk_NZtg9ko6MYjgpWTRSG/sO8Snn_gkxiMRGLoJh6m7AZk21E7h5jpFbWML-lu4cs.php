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

/* modules/contrib/flag/templates/flag.html.twig */
class __TwigTemplate_78dfe0352a67f821449be026b1acf5065f70f62efa7ff5a538f9beadab97a407 extends \Twig\Template
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
        // line 17
        ob_start(function () { return ''; });
        // line 19
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("flag/flag.link"), "html", null, true);
        echo "

";
        // line 22
        if ((($context["action"] ?? null) == "unflag")) {
            // line 23
            echo "    ";
            $context["action_class"] = "action-unflag";
        } else {
            // line 25
            echo "    ";
            $context["action_class"] = "action-flag";
        }
        // line 27
        echo "
";
        // line 30
        $context["classes"] = [0 => "flag", 1 => ("flag-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 32
($context["flag"] ?? null), "id", [], "method", false, false, true, 32), 32, $this->source))), 2 => ((("js-flag-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 33
($context["flag"] ?? null), "id", [], "method", false, false, true, 33), 33, $this->source))) . "-") . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["flaggable"] ?? null), "id", [], "method", false, false, true, 33), 33, $this->source)), 3 =>         // line 34
($context["action_class"] ?? null)];
        // line 37
        echo "
";
        // line 39
        $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "setAttribute", [0 => "rel", 1 => "nofollow"], "method", false, false, true, 39);
        // line 40
        echo "
<div class=\"";
        // line 41
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_join_filter($this->sandbox->ensureToStringAllowed(($context["classes"] ?? null), 41, $this->source), " "), "html", null, true);
        echo "\"><a";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 41, $this->source), "html", null, true);
        echo ">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 41, $this->source), "html", null, true);
        echo "</a></div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "modules/contrib/flag/templates/flag.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 41,  69 => 40,  67 => 39,  64 => 37,  62 => 34,  61 => 33,  60 => 32,  59 => 30,  56 => 27,  52 => 25,  48 => 23,  46 => 22,  41 => 19,  39 => 17,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/flag/templates/flag.html.twig", "/var/www/web/modules/contrib/flag/templates/flag.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("spaceless" => 17, "if" => 22, "set" => 23);
        static $filters = array("escape" => 19, "clean_class" => 32, "join" => 41);
        static $functions = array("attach_library" => 19);

        try {
            $this->sandbox->checkSecurity(
                ['spaceless', 'if', 'set'],
                ['escape', 'clean_class', 'join'],
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
