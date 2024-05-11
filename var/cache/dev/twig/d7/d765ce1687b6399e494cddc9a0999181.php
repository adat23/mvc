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

/* api.html.twig */
class __TwigTemplate_2d4996f0688c7d098a0bf82fbb865bff extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "api.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "api.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "api.html.twig", 1);
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

        echo "Api";
        
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

        // line 6
        echo "    <h1>Routes</h1>
    <p>Listan nedan har länkar till alla routes på denna hemsida</p>
    <ul class=\"api\">
        <li><a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">/</a>  - Hemsidan</li>
        <li><a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("about");
        echo "\">/about</a>    - En sida med information om mig</li>
        <li><a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("report");
        echo "\">/report</a>  - Sidan med rapporter</li>
        <li><a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lucky_number");
        echo "\">/lucky</a> - Ett spel där du kan hoppas på en kattbild</li>
        <li><a href=\"/lucky/number\">/lucky/number</a>   - Slumpar fram ett lyckonummer</li>
        <li><a href=\"/lucky/hi\">/lucky/hi</a>   - En sida som säger Hej!</li>

        <li><a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("session");
        echo "\">/session</a>    - Visa sessions information samt ta bort session</li>
        <li><a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("init_deck");
        echo "\">/card/deckinit</a>    - Initiera kortleken </li>
        <li><a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deck");
        echo "\">/card/deck</a> - Visa och initiera kortleken</li>
        <li><a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shuffle");
        echo "\">/card/deck/shuffle</a>  - Visa kortleken blandad</li>
        <li><a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("joker");
        echo "\">/card/deck/joker</a> - Visa jokrar i till kortleken</li>
        <li><a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("draw");
        echo "\">/card/deck/draw</a>    - Dra ett kort</li>
        <li><a href=\"/card/deck/draw/5\">/card/deck/draw/:number</a>  - Dra godtyckligt antal kort(5 per standard)</li>


        <li><a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api");
        echo "\">/api</a>    - Denna sida</li>
        <li><a href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("quote");
        echo "\">/api/quote</a>    - Få ett quote framslumpat.</li>
        <li><a href=\"/api/lucky/number\">/api/lucky/number</a>   - Api version av lyckonummer</li>
        <li><a href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("apideck");
        echo "\">/api/deck</a>   - Api version av att visa och initiera kortleken</li>
        <li><a href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("apishuffle");
        echo "\">/api/deck/shuffle</a>    - Api verison av visa kortleken blandad</li>
        <li><a href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("apidraw");
        echo "\">/api/deck/draw</a>  - Api version av dra ett kort</li>
        <li><a href=\"/api/deck/draw/5\">/api/deck/draw/:number</a>   - Api version av dra godtyckligt antal kort(5 per standard)</li>
    </ul>
";
        // line 33
        $this->loadTemplate("footer.html.twig", "api.html.twig", 33)->display($context);
        // line 34
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
        return "api.html.twig";
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
        return array (  164 => 34,  162 => 33,  156 => 30,  152 => 29,  148 => 28,  143 => 26,  139 => 25,  132 => 21,  128 => 20,  124 => 19,  120 => 18,  116 => 17,  112 => 16,  105 => 12,  101 => 11,  97 => 10,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Api{% endblock %}

{% block body %}
    <h1>Routes</h1>
    <p>Listan nedan har länkar till alla routes på denna hemsida</p>
    <ul class=\"api\">
        <li><a href=\"{{ path('home') }}\">/</a>  - Hemsidan</li>
        <li><a href=\"{{ path('about') }}\">/about</a>    - En sida med information om mig</li>
        <li><a href=\"{{ path('report') }}\">/report</a>  - Sidan med rapporter</li>
        <li><a href=\"{{ path('lucky_number') }}\">/lucky</a> - Ett spel där du kan hoppas på en kattbild</li>
        <li><a href=\"/lucky/number\">/lucky/number</a>   - Slumpar fram ett lyckonummer</li>
        <li><a href=\"/lucky/hi\">/lucky/hi</a>   - En sida som säger Hej!</li>

        <li><a href=\"{{ path('session') }}\">/session</a>    - Visa sessions information samt ta bort session</li>
        <li><a href=\"{{ path('init_deck') }}\">/card/deckinit</a>    - Initiera kortleken </li>
        <li><a href=\"{{ path('deck') }}\">/card/deck</a> - Visa och initiera kortleken</li>
        <li><a href=\"{{ path('shuffle') }}\">/card/deck/shuffle</a>  - Visa kortleken blandad</li>
        <li><a href=\"{{ path('joker') }}\">/card/deck/joker</a> - Visa jokrar i till kortleken</li>
        <li><a href=\"{{ path('draw') }}\">/card/deck/draw</a>    - Dra ett kort</li>
        <li><a href=\"/card/deck/draw/5\">/card/deck/draw/:number</a>  - Dra godtyckligt antal kort(5 per standard)</li>


        <li><a href=\"{{ path('api') }}\">/api</a>    - Denna sida</li>
        <li><a href=\"{{ path('quote') }}\">/api/quote</a>    - Få ett quote framslumpat.</li>
        <li><a href=\"/api/lucky/number\">/api/lucky/number</a>   - Api version av lyckonummer</li>
        <li><a href=\"{{ path('apideck') }}\">/api/deck</a>   - Api version av att visa och initiera kortleken</li>
        <li><a href=\"{{ path('apishuffle') }}\">/api/deck/shuffle</a>    - Api verison av visa kortleken blandad</li>
        <li><a href=\"{{ path('apidraw') }}\">/api/deck/draw</a>  - Api version av dra ett kort</li>
        <li><a href=\"/api/deck/draw/5\">/api/deck/draw/:number</a>   - Api version av dra godtyckligt antal kort(5 per standard)</li>
    </ul>
{% include \"footer.html.twig\" %}

{% endblock %}
", "api.html.twig", "/home/adam/dbwebb-kurser/mvc/me/report/templates/api.html.twig");
    }
}
