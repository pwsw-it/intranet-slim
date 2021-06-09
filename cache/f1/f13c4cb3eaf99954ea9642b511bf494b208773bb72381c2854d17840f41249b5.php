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

/* contact_new.twig */
class __TwigTemplate_7642a3aa010598e18aa78e9f17f16592204682dbbddf10478c86ea055d069ffa extends Template
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
        $this->parent = $this->loadTemplate("base.html", "contact_new.twig", 1);
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
<h1>Nowy wydział</h1>

<form method=\"POST\" action=\"/contact/new\">
Wydział: <input name=\"bcode\"  ><br />
Nazwisko: <input name=\"name\"  ><br />
Funkcja: <input name=\"function\"  ><br />
Emailo: <input name=\"email\"  ><br />
Telefon: <input name=\"phone\"  ><br />
Uwagi: <input name=\"notes\" ><br />


<input type=\"submit\" value=\"ZAPISZ\">
</form>
";
    }

    public function getTemplateName()
    {
        return "contact_new.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "contact_new.twig", "/media/jurek/dev/projekty/webmaster/intranet/slim/templates/contact_new.twig");
    }
}
