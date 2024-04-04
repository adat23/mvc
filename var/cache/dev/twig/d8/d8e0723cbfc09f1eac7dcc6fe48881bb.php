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

        <p> Mina förkunskaper inför denna kurs är något begränsade, men förmodligen relativt lik många andra, jag har bara gått 
            Webtec-, Design- och Databaskurserna hittills då jag går halvfartsprogrammet. Det har tagit en del tid för mig att 
            söka i dessa gamla kursmoment för att se i vilket jag skulle hitta de olika informationsdelarna men överlag tycker 
            jag att det har gått bra. <br><br>
            Jag är inte helt hundra på om jag greppat klasser själv men ska göra ett försök att beskriva det så som jag har 
            förstått klasser. <br>
            Klasser i PHP används för att skapa variabler och funktioner, men man kallar det för properties och methods(metoder) 
            i stället. Man skapar en klass som sedan kan nyttjas till flera operationer, som till exempel för att skapa nya 
            användare där alla användare är av samma klass eller med andra order består av samma typ av information, alla 
            användare har ett namn, en epost, ett lösenord, en profilbild osv men själva innehållet är eget för var användare.<br><br> 
            Jag misstänker att det är kodbasen som vi lade in i me/report innan jag själv började skriva något. Denna tycker jag 
            är något överväldigande, framför allt precis i början innan jag börjat arbeta mer med den, men det är ändå väldigt 
            mycket som jag tycker är svårt att greppa riktigt vad jag kan/får ändra på utan att det ska sluta fungera för mig. När 
            jag väl lagt lite mer tid på det och nu när jag börjar bli färdig med kmom01 så känner jag mig lite tryggare med koden, 
            men det är ändå väldigt många filer som jag inte har en aning om vad dom gör för något. Själva strukturen tycker jag dock 
            är bra, det är relativt enkelt att hitta de jag söker, samtidigt som det är lite annorlunda emot vad vi jobbat med 
            tidigare i mappstrukturer och så vidare. <br><br>
            PHP The Right Way var väldigt lång men väldigt välskriven, jag läste inte hela men av det jag läst så tycker jag den var 
            förhållandevis enkel att följa och hade en bra ordningsföljd. Jag tycker personligen att databas delarna var väldigt 
            intressant, både i artikeln och i föregående kurs så det hoppas jag få jobba mer med. Utöver det vet jag inte om det 
            är något jag känner specifikt behöver lyftas fram, jag gillar att dom hade många kodexempel tillsammans med texten som 
            visar vad dom menar på ett sätt som tilltalar mig. <br><br>
            Min TIL under detta kmom var hur snabbt man glömmer mellan kurserna de olika delarna som vi gått igenom och ändå lagt 
            rätt mycket tid på. Även för att göra enklare förändringar, t.ex. hur man arbetar med en .md fil fick jag gå tillbaka 
            och kolla i tidigare kursmoment för att minnas hur det såg ut, detta var dock väldigt kul att få köra lite på igen. <br>
        </p>

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
        // line 75
        $this->loadTemplate("footer.html.twig", "report.html.twig", 75)->display($context);
        // line 76
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
        return array (  161 => 76,  159 => 75,  78 => 5,  59 => 3,  36 => 1,);
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

        <p> Mina förkunskaper inför denna kurs är något begränsade, men förmodligen relativt lik många andra, jag har bara gått 
            Webtec-, Design- och Databaskurserna hittills då jag går halvfartsprogrammet. Det har tagit en del tid för mig att 
            söka i dessa gamla kursmoment för att se i vilket jag skulle hitta de olika informationsdelarna men överlag tycker 
            jag att det har gått bra. <br><br>
            Jag är inte helt hundra på om jag greppat klasser själv men ska göra ett försök att beskriva det så som jag har 
            förstått klasser. <br>
            Klasser i PHP används för att skapa variabler och funktioner, men man kallar det för properties och methods(metoder) 
            i stället. Man skapar en klass som sedan kan nyttjas till flera operationer, som till exempel för att skapa nya 
            användare där alla användare är av samma klass eller med andra order består av samma typ av information, alla 
            användare har ett namn, en epost, ett lösenord, en profilbild osv men själva innehållet är eget för var användare.<br><br> 
            Jag misstänker att det är kodbasen som vi lade in i me/report innan jag själv började skriva något. Denna tycker jag 
            är något överväldigande, framför allt precis i början innan jag börjat arbeta mer med den, men det är ändå väldigt 
            mycket som jag tycker är svårt att greppa riktigt vad jag kan/får ändra på utan att det ska sluta fungera för mig. När 
            jag väl lagt lite mer tid på det och nu när jag börjar bli färdig med kmom01 så känner jag mig lite tryggare med koden, 
            men det är ändå väldigt många filer som jag inte har en aning om vad dom gör för något. Själva strukturen tycker jag dock 
            är bra, det är relativt enkelt att hitta de jag söker, samtidigt som det är lite annorlunda emot vad vi jobbat med 
            tidigare i mappstrukturer och så vidare. <br><br>
            PHP The Right Way var väldigt lång men väldigt välskriven, jag läste inte hela men av det jag läst så tycker jag den var 
            förhållandevis enkel att följa och hade en bra ordningsföljd. Jag tycker personligen att databas delarna var väldigt 
            intressant, både i artikeln och i föregående kurs så det hoppas jag få jobba mer med. Utöver det vet jag inte om det 
            är något jag känner specifikt behöver lyftas fram, jag gillar att dom hade många kodexempel tillsammans med texten som 
            visar vad dom menar på ett sätt som tilltalar mig. <br><br>
            Min TIL under detta kmom var hur snabbt man glömmer mellan kurserna de olika delarna som vi gått igenom och ändå lagt 
            rätt mycket tid på. Även för att göra enklare förändringar, t.ex. hur man arbetar med en .md fil fick jag gå tillbaka 
            och kolla i tidigare kursmoment för att minnas hur det såg ut, detta var dock väldigt kul att få köra lite på igen. <br>
        </p>

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

", "report.html.twig", "/home/adam/dbwebb-kurser/mvc/me/report/templates/report.html.twig");
    }
}
