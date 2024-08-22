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

/* foot.twig.html */
class __TwigTemplate_98ccdfb1699e046db3c06832d2b32247951c2e074760263cd194dd4f0625f855 extends Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "
";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "extraFoot", [], "any", false, false, false, 14));
        foreach ($context['_seq'] as $context["_key"] => $context["code"]) {
            // line 15
            echo "    ";
            echo $context["code"];
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['code'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "
";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "scriptsFoot", [], "any", false, false, false, 18));
        foreach ($context['_seq'] as $context["_key"] => $context["asset"]) {
            // line 19
            echo "    ";
            $context["assetVersion"] = (( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["asset"], "version", [], "any", false, false, false, 19))) ? (twig_get_attribute($this->env, $this->source, $context["asset"], "version", [], "any", false, false, false, 19)) : (($context["version"] ?? null)));
            // line 20
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, $context["asset"], "type", [], "any", false, false, false, 20) == "inline")) {
                // line 21
                echo "        <script type=\"text/javascript\">";
                echo twig_get_attribute($this->env, $this->source, $context["asset"], "src", [], "any", false, false, false, 21);
                echo "</script>
    ";
            } else {
                // line 23
                echo "        <script type=\"text/javascript\" src=\"";
                echo twig_escape_filter($this->env, ($context["absoluteURL"] ?? null), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["asset"], "src", [], "any", false, false, false, 23), "html", null, true);
                echo "?v=";
                echo twig_escape_filter($this->env, ($context["assetVersion"] ?? null), "html", null, true);
                echo ".";
                echo twig_escape_filter($this->env, ($context["cacheString"] ?? null), "html", null, true);
                echo "\"></script>
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "foot.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 23,  66 => 21,  63 => 20,  60 => 19,  56 => 18,  53 => 17,  44 => 15,  40 => 14,  37 => 13,);
    }

    public function getSourceContext()
    {
        return new Source("{#<!--
Gibbon: the flexible, open school platform
Founded by Ross Parker at ICHK Secondary. Built by Ross Parker, Sandra Kuipers and the Gibbon community (https://gibbonedu.org/about/)
Copyright © 2010, Gibbon Foundation
Gibbon™, Gibbon Education Ltd. (Hong Kong)

This is a Gibbon template file, written in HTML and Twig syntax.
For info about editing, see: https://twig.symfony.com/doc/2.x/

Page Foot: Outputs at the bottom, right before the closing </body> tag.
Useful for scripts that need to execute after the page has loaded.
-->#}

{% for code in page.extraFoot %}
    {{ code|raw }}
{% endfor %}

{% for asset in page.scriptsFoot %}
    {% set assetVersion = asset.version is not empty ? asset.version : version %}
    {% if asset.type == 'inline' %}
        <script type=\"text/javascript\">{{ asset.src|raw }}</script>
    {% else %}
        <script type=\"text/javascript\" src=\"{{ absoluteURL }}/{{ asset.src }}?v={{ assetVersion }}.{{ cacheString }}\"></script>
    {% endif %}
{% endfor %}
", "foot.twig.html", "C:\\xampp\\htdocs\\gibbon\\resources\\templates\\foot.twig.html");
    }
}
