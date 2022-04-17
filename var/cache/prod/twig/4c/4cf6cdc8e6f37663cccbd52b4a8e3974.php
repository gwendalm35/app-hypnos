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

/* header.html.twig */
class __TwigTemplate_511425ae8b7cd81a254bf876bf3bcead extends Template
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
        // line 1
        echo "<header class=\"container bg-black\">
\t<nav class=\"navbar navbar-expand-lg navbar-dark\">
\t\t<div class=\"container-fluid\">
\t\t\t<a class=\"navbar-brand\" href=\"";
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">
\t\t\t\t<img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo6.jpg"), "html", null, true);
        echo "\" alt=\"logo\" height=\"80\">
\t\t\t</a>
\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t</button>
\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
\t\t\t\t<ul class=\"navbar-nav m-auto mb-2 mb-lg-0 fs-5\">
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t";
        // line 13
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 13), "get", [0 => "_route"], "method", false, false, false, 13) == "app_home")) {
            // line 14
            echo "\t\t\t\t\t\t<a class=\"nav-link active\" aria-current=\"page\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
            echo "\">Accueil</a>
\t\t\t\t\t\t";
        } else {
            // line 16
            echo "\t\t\t\t\t\t<a class=\"nav-link\" aria-current=\"page\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
            echo "\">Accueil</a>
\t\t\t\t\t\t";
        }
        // line 18
        echo "\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t";
        // line 20
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 20), "get", [0 => "_route"], "method", false, false, false, 20) == "app_hotel")) {
            // line 21
            echo "\t\t\t\t\t\t<a class=\"nav-link active\" aria-current=\"page\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hotel");
            echo "\">Nos Hôtels</a>
\t\t\t\t\t\t";
        } else {
            // line 23
            echo "\t\t\t\t\t\t<a class=\"nav-link\" aria-current=\"page\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hotel");
            echo "\">Nos Hôtels</a>
\t\t\t\t\t\t";
        }
        // line 25
        echo "\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t";
        // line 27
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 27), "get", [0 => "_route"], "method", false, false, false, 27) == "app_reservation")) {
            // line 28
            echo "\t\t\t\t\t\t<a class=\"nav-link active\" aria-current=\"page\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation");
            echo "\">Réservation</a>
\t\t\t\t\t\t";
        } else {
            // line 30
            echo "\t\t\t\t\t\t<a class=\"nav-link\" aria-current=\"page\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation");
            echo "\">Réservation</a>
\t\t\t\t\t\t";
        }
        // line 32
        echo "\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t";
        // line 34
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 34), "get", [0 => "_route"], "method", false, false, false, 34) == "app_contact")) {
            // line 35
            echo "\t\t\t\t\t\t<a class=\"nav-link active\" aria-current=\"page\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
            echo "\">Nous contacter</a>
\t\t\t\t\t\t";
        } else {
            // line 37
            echo "\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
            echo "\">Nous contacter</a>
\t\t\t\t\t\t";
        }
        // line 39
        echo "\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t";
        // line 42
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 42)) {
            // line 43
            echo "\t\t\t\t\t<button class=\"btn btn-info dropdown-toggle text-dark d-flex align-items-center\" type=\"button\" id=\"dropdownMenuButton1\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\tBonjour ";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 44), "firstname", [], "any", false, false, false, 44), "html", null, true);
            echo " ! <i class=\"fa-solid fa-user-check ms-2\"></i>
\t\t\t\t\t</button>
\t\t\t\t\t";
        } else {
            // line 47
            echo "\t\t\t\t\t<button class=\"btn btn-info dropdown-toggle text-dark d-flex align-items-center\" type=\"button\" id=\"dropdownMenuButton1\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t<i class=\"fa-solid fa-circle-user me-2\"></i> Se connecter
\t\t\t\t\t</button>
\t\t\t\t\t";
        }
        // line 51
        echo "\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-lg-end\" aria-labelledby=\"dropdownMenuButton1\">
\t\t\t\t\t\t";
        // line 52
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 52)) {
            // line 53
            echo "\t\t\t\t\t\t";
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_GERANT"))) {
                // line 54
                echo "\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
                echo "\">Accéder au panneau d'administration</a></li>
\t\t\t\t\t\t";
            }
            // line 56
            echo "\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client_area");
            echo "\">Gérer mes réservations</a></li>
\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"";
            // line 57
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_info");
            echo "\">Modifiers mes informations personnelles</a></li>
\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"";
            // line 58
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Se déconnecter</a></li>
\t\t\t\t\t\t";
        } else {
            // line 60
            echo "\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Se connecter</a></li>
\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"";
            // line 61
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">S'inscrire</a></li>
\t\t\t\t\t\t";
        }
        // line 63
        echo "\t\t\t\t\t\t<li><hr class=\"dropdown-divider\"></li>
\t\t\t\t\t\t<li><a class=\"dropdown-item\">Aide</a></li>
\t\t\t\t\t\t<li><a class=\"dropdown-item\">Conditions générales de ventes</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t
\t\t\t</div>
\t\t</div>
\t</nav>
</header>
";
    }

    public function getTemplateName()
    {
        return "header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 63,  180 => 61,  175 => 60,  170 => 58,  166 => 57,  161 => 56,  155 => 54,  152 => 53,  150 => 52,  147 => 51,  141 => 47,  135 => 44,  132 => 43,  130 => 42,  125 => 39,  119 => 37,  113 => 35,  111 => 34,  107 => 32,  101 => 30,  95 => 28,  93 => 27,  89 => 25,  83 => 23,  77 => 21,  75 => 20,  71 => 18,  65 => 16,  59 => 14,  57 => 13,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "header.html.twig", "C:\\xampp\\apps\\test\\templates\\header.html.twig");
    }
}
