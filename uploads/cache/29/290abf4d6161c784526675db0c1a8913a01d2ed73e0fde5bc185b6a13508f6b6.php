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

/* footer.twig.html */
class __TwigTemplate_31a05cb3f250a72867483476063bca9eb9c2f5304a172355ff2621d0ffb166b7 extends Template
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
        // line 25
        echo "
<span class=\"inline-block font-bold\">
    ";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Powered by"), "html", null, true);
        echo " <a class=\"text-";
        echo twig_escape_filter($this->env, ($context["themeColour"] ?? null), "html", null, true);
        echo "-800\" target='_blank' href='https://gibbonedu.org'>EduCentral</a> ";
        echo twig_escape_filter($this->env, ($context["versionName"] ?? null), "html", null, true);
        echo "<br/>
</span> 
<br/>
<span class=\"text-xs\">
    ";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Founded by Tinashe Matanda at AmericanSpaces"), "html", null, true);
        echo " | ";
        echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Built by Tinashe Matanda"), "html", null, true);
        echo "<br/>
    Copyright © <a class=\"text-";
        // line 32
        echo twig_escape_filter($this->env, ($context["themeColour"] ?? null), "html", null, true);
        echo "-800\" target='_blank' href='http://gibbonedu.org'>Cybernash Tech</a> 2010-";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " | CyberNash™<br/>
    ";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Created under the"), "html", null, true);
        echo " <a class=\"text-";
        echo twig_escape_filter($this->env, ($context["themeColour"] ?? null), "html", null, true);
        echo "-800\" target='_blank' href='https://www.gnu.org/licenses/gpl.html'>GNU GPL</a> |
    <a class=\"text-";
        // line 34
        echo twig_escape_filter($this->env, ($context["themeColour"] ?? null), "html", null, true);
        echo "-800\" target='_blank' href='https://gibbonedu.org/about/#ourTeam'>";
        echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Credits"), "html", null, true);
        echo "</a> | 
    <a class=\"text-";
        // line 35
        echo twig_escape_filter($this->env, ($context["themeColour"] ?? null), "html", null, true);
        echo "-800\" target='_blank' href='https://gibbonedu.org/about/#translators'>";
        echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Translators"), "html", null, true);
        echo "</a> | 
    <a class=\"text-";
        // line 36
        echo twig_escape_filter($this->env, ($context["themeColour"] ?? null), "html", null, true);
        echo "-800\" target='_blank' href='https://gibbonedu.org/support/'>";
        echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Support"), "html", null, true);
        echo "</a>
    <br/>
    ";
        // line 38
        echo twig_escape_filter($this->env, ($context["footerThemeAuthor"] ?? null), "html", null, true);
        echo "<br/>
</span>
";
    }

    public function getTemplateName()
    {
        return "footer.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 38,  82 => 36,  76 => 35,  70 => 34,  64 => 33,  58 => 32,  52 => 31,  41 => 27,  37 => 25,);
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


Dear theme editors,

Gibbon is an open source project, freely available for you to modify and share. 
However, it's important to keep the information you see here in the footer intact. 
This is vital legal information for us to have, as it shows who created Gibbon, 
and that it is released under the GNU GPL.

Please keep the names and copyrights as they're shown here. You are welcome to 
edit the style of the text to suit your theme.

Thank you,
The Gibbon Team

-->#}

<span class=\"inline-block font-bold\">
    {{ __('Powered by') }} <a class=\"text-{{ themeColour }}-800\" target='_blank' href='https://gibbonedu.org'>EduCentral</a> {{ versionName }}<br/>
</span> 
<br/>
<span class=\"text-xs\">
    {{ __('Founded by Tinashe Matanda at AmericanSpaces') }} | {{ __('Built by Tinashe Matanda') }}<br/>
    Copyright © <a class=\"text-{{ themeColour }}-800\" target='_blank' href='http://gibbonedu.org'>Cybernash Tech</a> 2010-{{ 'now'|date('Y') }} | CyberNash™<br/>
    {{ __('Created under the') }} <a class=\"text-{{ themeColour }}-800\" target='_blank' href='https://www.gnu.org/licenses/gpl.html'>GNU GPL</a> |
    <a class=\"text-{{ themeColour }}-800\" target='_blank' href='https://gibbonedu.org/about/#ourTeam'>{{ __('Credits') }}</a> | 
    <a class=\"text-{{ themeColour }}-800\" target='_blank' href='https://gibbonedu.org/about/#translators'>{{ __('Translators') }}</a> | 
    <a class=\"text-{{ themeColour }}-800\" target='_blank' href='https://gibbonedu.org/support/'>{{ __('Support') }}</a>
    <br/>
    {{ footerThemeAuthor }}<br/>
</span>
", "footer.twig.html", "C:\\xampp\\htdocs\\gibbon\\resources\\templates\\footer.twig.html");
    }
}
