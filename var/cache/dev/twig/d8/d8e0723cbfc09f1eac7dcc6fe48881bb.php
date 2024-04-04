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

/* report.html.twig */
class __TwigTemplate_3c374490b87d4bea9bc98e6acb2ddc63 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "report.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "report.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "report.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Rapport";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        echo "  
<h1>Redovisning</h1>
<div class=\"report\">
    <div class=\"links\">
        <ul>
            <li><a href=\"#kmom01\">Kmom01</a></li>
            <li><a href=\"#kmom02\">Kmom02</a></li>
            <li><a href=\"#kmom03\">Kmom03</a></li>
            <li><a href=\"#kmom04\">Kmom04</a></li>
            <li><a href=\"#kmom05\">Kmom05</a></li>
            <li><a href=\"#kmom06\">Kmom06</a></li>
            <li><a href=\"#kmom07\">Kmom07/10</a></li>
        </ul>
    </div>
    <div class=\"text\">

        <h2 id=\"kmom01\">kmom01</h2>

        <p>Här kommer redovisningstexten för detta kursmoment.</p>

        <h2 id=\"kmom02\">kmom02</h2>

        <p>Här kommer redovisningstexten för detta kursmoment.</p>

        <h2 id=\"kmom03\">kmom03</h2>

        <p>Här kommer redovisningstexten för detta kursmoment.</p>

        <h2 id=\"kmom04\">kmom04</h2>

        <p>Här kommer redovisningstexten för detta kursmoment.</p>

        <h2 id=\"kmom05\">kmom05</h2>

        <p>Här kommer redovisningstexten för detta kursmoment.</p>

        <h2 id=\"kmom06\">kmom06</h2>

        <p>Här kommer redovisningstexten för detta kursmoment.</p>

        <h2 id=\"kmom07\">kmom07/10</h2>

        <p>Här kommer redovisningstexten för detta kursmoment.</p>
    </div>
</div>
";
        // line 50
        $this->loadTemplate("footer.html.twig", "report.html.twig", 50)->display($context);
        // line 51
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "report.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  136 => 51,  134 => 50,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Rapport{% endblock %}

{% block body %}  
<h1>Redovisning</h1>
<div class=\"report\">
    <div class=\"links\">
        <ul>
            <li><a href=\"#kmom01\">Kmom01</a></li>
            <li><a href=\"#kmom02\">Kmom02</a></li>
            <li><a href=\"#kmom03\">Kmom03</a></li>
            <li><a href=\"#kmom04\">Kmom04</a></li>
            <li><a href=\"#kmom05\">Kmom05</a></li>
            <li><a href=\"#kmom06\">Kmom06</a></li>
            <li><a href=\"#kmom07\">Kmom07/10</a></li>
        </ul>
    </div>
    <div class=\"text\">

        <h2 id=\"kmom01\">kmom01</h2>

        <p>Här kommer redovisningstexten för detta kursmoment.</p>

        <h2 id=\"kmom02\">kmom02</h2>

        <p>Här kommer redovisningstexten för detta kursmoment.</p>

        <h2 id=\"kmom03\">kmom03</h2>

        <p>Här kommer redovisningstexten för detta kursmoment.</p>

        <h2 id=\"kmom04\">kmom04</h2>

        <p>Här kommer redovisningstexten för detta kursmoment.</p>

        <h2 id=\"kmom05\">kmom05</h2>

        <p>Här kommer redovisningstexten för detta kursmoment.</p>

        <h2 id=\"kmom06\">kmom06</h2>

        <p>Här kommer redovisningstexten för detta kursmoment.</p>

        <h2 id=\"kmom07\">kmom07/10</h2>

        <p>Här kommer redovisningstexten för detta kursmoment.</p>
    </div>
</div>
{% include \"footer.html.twig\" %}

{% endblock %}

", "report.html.twig", "/home/adam/dbwebb-kurser/mvc/me/report/symfony/app/templates/report.html.twig");
    }
}
