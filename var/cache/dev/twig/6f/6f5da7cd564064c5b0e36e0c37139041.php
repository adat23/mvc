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

/* home.html.twig */
class __TwigTemplate_c318147d0defc85a160b41245916f8f8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home.html.twig", 1);
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

        echo "Hem";
        
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
        echo "    <h1>Hem</h1>

    <main>
        <article>
            <div class=\"home\">
                <div class=\"bilder\">
                    <figure class=\"jag\"><img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/jag.jpg"), "html", null, true);
        echo "\" alt=\"jag\"></figure>
                    <figure class=\"katter\">
                        <img class=\"katter\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/katter.png"), "html", null, true);
        echo "\" alt=\"katter\">
                    <figcaption>Från vänster: Windy, Neppy & Ariel</figcaption>
                    </figure>
                </div>
                <div class=\"text\">
                    <p>Mitt namn är Adam Antonsson, jag är 34år gammal i skrivande stund och har sedan gymnasiet egentligen varit intresserad av programmering men inte riktigt fått tummen ur
                        till att börja lära mig. </p>
                    <p>Nu har jag sedan i hösten 2023 gått kurser på BTH för att lära mig och se om jag kan tycka att detta är något för mig, hitills har det varit fantastiskt givande och roligt
                        och verkar fortsätta på samma sätt. </p>
                    <p>Jag arbetar i Försvarsmakten och bor i Karlskrona, så arbete på 100% tillsammans med studier känns vissa gånger tugnt men väldigt skönt att allting sker på distans och 
                        att det hitills inte varit några lektioner eller liknande med obligatorisk närvaro har gjort att detta överhuvudtaget är möjligt för min del. </p>
                    <p>Jag bor tillsammans med min sambo och våra tre katter som ofta får agera motiv i de olika kursmomenten då det ska vara bilder med.</p>
                </div>
            </div>
        </article>
    </main>

";
        // line 31
        $this->loadTemplate("footer.html.twig", "home.html.twig", 31)->display($context);
        // line 32
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
        return "home.html.twig";
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
        return array (  123 => 32,  121 => 31,  101 => 14,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Hem{% endblock %}

{% block body %}
    <h1>Hem</h1>

    <main>
        <article>
            <div class=\"home\">
                <div class=\"bilder\">
                    <figure class=\"jag\"><img src=\"{{ asset('build/images/jag.jpg') }}\" alt=\"jag\"></figure>
                    <figure class=\"katter\">
                        <img class=\"katter\" src=\"{{ asset('build/images/katter.png') }}\" alt=\"katter\">
                    <figcaption>Från vänster: Windy, Neppy & Ariel</figcaption>
                    </figure>
                </div>
                <div class=\"text\">
                    <p>Mitt namn är Adam Antonsson, jag är 34år gammal i skrivande stund och har sedan gymnasiet egentligen varit intresserad av programmering men inte riktigt fått tummen ur
                        till att börja lära mig. </p>
                    <p>Nu har jag sedan i hösten 2023 gått kurser på BTH för att lära mig och se om jag kan tycka att detta är något för mig, hitills har det varit fantastiskt givande och roligt
                        och verkar fortsätta på samma sätt. </p>
                    <p>Jag arbetar i Försvarsmakten och bor i Karlskrona, så arbete på 100% tillsammans med studier känns vissa gånger tugnt men väldigt skönt att allting sker på distans och 
                        att det hitills inte varit några lektioner eller liknande med obligatorisk närvaro har gjort att detta överhuvudtaget är möjligt för min del. </p>
                    <p>Jag bor tillsammans med min sambo och våra tre katter som ofta får agera motiv i de olika kursmomenten då det ska vara bilder med.</p>
                </div>
            </div>
        </article>
    </main>

{% include \"footer.html.twig\" %}

{% endblock %}

", "home.html.twig", "/home/adam/dbwebb-kurser/mvc/me/report/symfony/app/templates/home.html.twig");
    }
}
