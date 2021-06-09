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

/* branch_edit.twig */
class __TwigTemplate_c45dee270966dfee30c1e2622caf61ec1be1d1d74ccd7de094535ac0c573d9c3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html", "branch_edit.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Wydziały";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
<h1>Edycja wydziału</h1>
<form method=\"POST\" action=\"/branch/update\">
<input type='hidden' name=\"id\" value='";
        // line 9
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "' >
wydział/instytut:<br />
  kod (skrót): <input name=\"bcode\" value='";
        // line 11
        echo twig_escape_filter($this->env, ($context["bcode"] ?? null), "html", null, true);
        echo "' ><br />
  nazwa: <input name=\"branch\" value='";
        // line 12
        echo twig_escape_filter($this->env, ($context["branch"] ?? null), "html", null, true);
        echo "' ><br />
<input type=\"submit\" value=\"ZAPISZ\">
</form>

";
    }

    public function getTemplateName()
    {
        return "branch_edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 12,  68 => 11,  63 => 9,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "branch_edit.twig", "/media/jurek/dev/projekty/webmaster/intranet/slim/templates/branch_edit.twig");
    }
}
