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

/* base.html.twig */
class __TwigTemplate_c6223bb2ee217bf1549aa08f6e2bb85e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'body_javascript' => [$this, 'block_body_javascript'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\" xmlns=\"http://www.w3.org/1999/html\">
    ";
        // line 3
        $this->loadTemplate("head.html.twig", "base.html.twig", 3)->display($context);
        // line 4
        echo "    <body class=\"bg-dark\">
    ";
        // line 5
        $this->loadTemplate("header.html.twig", "base.html.twig", 5)->display($context);
        // line 6
        echo "    <br>
        ";
        // line 7
        $this->displayBlock('content', $context, $blocks);
        // line 8
        echo "    <br><br>
    <footer class=\"py-3 my-4 container bg-black\">
        <div class=\"d-flex flex-column justify-content-center flex-lg-row justify-content-lg-between mb-4\">
            <div class=\"d-flex justify-content-center\">
                <a class=\"nav-link px-2 text-white\">CGV</a>
            </div>
            <div class=\"d-flex justify-content-center align-items-center mt-4 mt-lg-0\">
                <a class=\"nav-link px-2 text-white\">Mentions légales</a>
            </div>
        </div>
        <ul class=\"nav justify-content-center border-bottom pb-3 mb-3\">
            <li class=\"nav-item\" ><a class=\"btn btn-outline-light btn-floating m-1\" href=\"https://www.facebook.com/\" role=\"button\"
            ><i class=\"fab fa-facebook-f\"></i
                    ></a></li>
            <li class=\"nav-item\" ><a class=\"btn btn-outline-light btn-floating m-1\" href=\"https://www.twitter.com/\" role=\"button\"
                ><i class=\"fab fa-twitter\"></i
                    ></a></li>
            <li class=\"nav-item\" ><a class=\"btn btn-outline-light btn-floating m-1\" href=\"https://www.google.com/\" role=\"button\"
                ><i class=\"fab fa-google\"></i
                    ></a></li>
            <li class=\"nav-item\" ><a class=\"btn btn-outline-light btn-floating m-1\" href=\"https://www.instagram.com/\" role=\"button\"
                ><i class=\"fab fa-instagram\"></i
                    ></a></li>
            <li class=\"nav-item\" ><a class=\"btn btn-outline-light btn-floating m-1\" href=\"https://www.linkedin.com/\" role=\"button\"
                ><i class=\"fab fa-linkedin-in\"></i
                    ></a></li>
            <li class=\"nav-item\" ><a class=\"btn btn-outline-light btn-floating m-1\" href=\"https://www.github.com/\" role=\"button\"
                ><i class=\"fab fa-github\"></i
                    ></a></li>
            <li class=\"nav-item\"><a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client_area");
        echo "\" class=\"nav-link px-2 text-white\">Mes réservations</a></li>
        </ul>
        <p class=\"text-center text-white\">© ";
        // line 39
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " Hypnos, Gwendal Ménager</p>
    </footer>
    ";
        // line 41
        $this->displayBlock('body_javascript', $context, $blocks);
        // line 42
        echo "    </body>
</html>
";
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 41
    public function block_body_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 41,  104 => 7,  98 => 42,  96 => 41,  91 => 39,  86 => 37,  55 => 8,  53 => 7,  50 => 6,  48 => 5,  45 => 4,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "C:\\xampp\\apps\\test\\templates\\base.html.twig");
    }
}
