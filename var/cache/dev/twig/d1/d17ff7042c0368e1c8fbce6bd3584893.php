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

/* footer.html.twig */
class __TwigTemplate_13758cfb206a0e30ed4b9ece099806f0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer.html.twig"));

        // line 1
        echo "


<footer class=\"footer\">
    <div class=\"row\">
        <div class=\"col2 box\">
            Mitt github:
            <ul>
                <li><a href=\"https://github.com/adat23/mvc.git\">Github</a></li>
                <li><a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api");
        echo "\">API</a></li>
                <li><a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("quote");
        echo "\">API-Quote</a></li>
            </ul>
        </div>

        <div class=\"col2 box\">

        DBWEBB:
            <ul>
                <li><a href=\"https://dbwebb.se/kurser/mvc-v2\">Dbwebb</a></li>
                <li><a href=\"https://github.com/dbwebb-se/mvc.git\">Github</a></li>
            </ul>
        </div>
    </div>
    
    <div class=\"row\">
        <div class=\"col1 final\">
        <p>Denna sidan är Copyright &copy; av mig. </p>
        </div>
    </div>
</footer>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "footer.html.twig";
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
        return array (  58 => 11,  54 => 10,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("


<footer class=\"footer\">
    <div class=\"row\">
        <div class=\"col2 box\">
            Mitt github:
            <ul>
                <li><a href=\"https://github.com/adat23/mvc.git\">Github</a></li>
                <li><a href=\"{{ path('api') }}\">API</a></li>
                <li><a href=\"{{ path('quote') }}\">API-Quote</a></li>
            </ul>
        </div>

        <div class=\"col2 box\">

        DBWEBB:
            <ul>
                <li><a href=\"https://dbwebb.se/kurser/mvc-v2\">Dbwebb</a></li>
                <li><a href=\"https://github.com/dbwebb-se/mvc.git\">Github</a></li>
            </ul>
        </div>
    </div>
    
    <div class=\"row\">
        <div class=\"col1 final\">
        <p>Denna sidan är Copyright &copy; av mig. </p>
        </div>
    </div>
</footer>
</body>
</html>", "footer.html.twig", "/home/adam/dbwebb-kurser/mvc/me/report/symfony/app/templates/footer.html.twig");
    }
}
