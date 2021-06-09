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

/* index.html */
class __TwigTemplate_9e23e894d1594871f5b720eb47f536f19e1833f1037e3f2c6496b93351864c90 extends Template
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
        $this->parent = $this->loadTemplate("base.html", "index.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Start";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo " <div class=\"jumbotron\">
  <h1>Książka adresowa</h1>
 </div>

 <div class=\"row\">
  <div class=\"col-md-4\">
   <h3>Dokumentacja</h3>
   <p><a href=\"/docs/v1\" target=\"_blank\">Dokumentacja</a></p>
  </div>

  <div class=\"col-md-4\">
   <h3>Wydziały</h3>
   <p><a href=\"/branch\">Wydziały / komórki</a></p>
  </div>

  <div class=\"col-md-4\">

 </div>

 <div class=\"row\">
  <div class=\"col-md-12\">

  </div>
 </div>

";
    }

    public function getTemplateName()
    {
        return "index.html";
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
        return new Source("", "index.html", "/media/jurek/dev/projekty/webmaster/intranet/slim/templates/index.html");
    }
}
