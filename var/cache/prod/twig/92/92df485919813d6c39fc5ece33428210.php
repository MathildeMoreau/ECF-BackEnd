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

/* navigation/navigation.html.twig */
class __TwigTemplate_b06bb1a47332757ad516bc0df8fc20eb extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'navigation' => [$this, 'block_navigation'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('navigation', $context, $blocks);
    }

    public function block_navigation($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "
<nav class=\"navbar\">
    <a class=\"navbar-brand\" href=\"";
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">Accueil</a>
    <a class=\"navbar-brand\" href=\"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">Carte</a>
    <a class=\"navbar-brand\" href=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">Menus</a>
    <a class=\"navbar-brand\" href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation");
        echo "\">Réservation</a>
    <a class=\"navbar-brand\" href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">Contact</a>

</nav>

";
    }

    public function getTemplateName()
    {
        return "navigation/navigation.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  65 => 8,  61 => 7,  57 => 6,  53 => 5,  49 => 4,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "navigation/navigation.html.twig", "/Users/Mathilde/Desktop/DEV/Studi/ECF FullStack/ECF-quai-antique/templates/navigation/navigation.html.twig");
    }
}
