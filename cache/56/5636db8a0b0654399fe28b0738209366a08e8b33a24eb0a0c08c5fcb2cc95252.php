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

/* branches.twig */
class __TwigTemplate_7676908c3c2812f38333f8af91d9729c666b8af253f4c9b728598a6fffe64030 extends Template
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
        $this->parent = $this->loadTemplate("base.html", "branches.twig", 1);
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
<h1>Wydziały</h1>
<table class=\"table\">
    <thead>
      <tr>
        <th scope=\"col\">#</th>
        <th scope=\"col\">Wydział - nazwa</th>
        <th scope=\"col\">Wydział - skrót</th>
        <th scope=\"col\">operacje</th>
      </tr>
    </thead>
    <tbody>
<tr><td>id</td><td>nazwa</td><td>operacje</td></tr>
";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["branches"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["branch"]) {
            // line 20
            echo "<tr><td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["branch"], "id", [], "any", false, false, false, 20), "html", null, true);
            echo "</td><td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["branch"], "branch", [], "any", false, false, false, 20), "html", null, true);
            echo "</td><td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["branch"], "bcode", [], "any", false, false, false, 20), "html", null, true);
            echo "</td>
    <td><a href=\"/branch/edit?id=";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["branch"], "id", [], "any", false, false, false, 21), "html", null, true);
            echo "\">EDYCJA</a>&nbsp;
        <a href=\"/branch/delete?id=";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["branch"], "id", [], "any", false, false, false, 22), "html", null, true);
            echo "\">USUN</a>&nbsp;
        <a href=\"/contact?bcode=";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["branch"], "bcode", [], "any", false, false, false, 23), "html", null, true);
            echo "\">KONTAKTY</a>
    
    </td></tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['branch'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "</tbody>
</table>

<a href=\"/branch/new\">
    NOWY WYDZIAŁ
</a>
";
    }

    public function getTemplateName()
    {
        return "branches.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 27,  94 => 23,  90 => 22,  86 => 21,  77 => 20,  73 => 19,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "branches.twig", "/media/jurek/dev/projekty/webmaster/intranet/slim/templates/branches.twig");
    }
}
