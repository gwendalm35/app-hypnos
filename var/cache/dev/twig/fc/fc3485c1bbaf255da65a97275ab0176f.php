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

/* security/login.html.twig */
class __TwigTemplate_1adf971346488e3539b7e555f28f21b8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
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

        echo "Hypnos | Se connecter";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <main>
        <article>
            <div class=\"container col-xl-5 mt-4\" style=\"height: calc(100vh - 324px)\">
                <form class=\"d-flex flex-column h-100 justify-content-center\" id=\"formlogin\" method=\"post\">
                    <h1 class=\"mb-4 text-center\">Merci de vous connecter</h1>
                    ";
        // line 11
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 11, $this->source); })())) {
            // line 12
            echo "                        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 12, $this->source); })()), "messageKey", [], "any", false, false, false, 12), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 12, $this->source); })()), "messageData", [], "any", false, false, false, 12), "security"), "html", null, true);
            echo "</div>
                    ";
        }
        // line 14
        echo "                    <div class=\"input-group mb-4\">
                        <span class=\"input-group-text\" id=\"basic-addon1\"><i class=\"fa-solid fa-user\"></i></span>
                        <input type=\"text\" name=\"email\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "\" class=\"form-control\" placeholder=\"Email\" aria-label=\"Email\" aria-describedby=\"basic-addon1\" autocomplete=\"email\" required autofocus>
                    </div>
                    <div class=\"input-group mb-4\">
                        <span class=\"input-group-text\" id=\"basic-addon2\"><i class=\"fa-solid fa-key\"></i></span>
                        <input type=\"password\" id=\"password\" name=\"password\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 20, $this->source); })()), "html", null, true);
        echo "\" class=\"form-control\" placeholder=\"Mot de passe\" aria-label=\"Mot de passe\" aria-describedby=\"basic-addon2\" autocomplete=\"current-password\" required>
                    </div>
                    <input type=\"hidden\" name=\"_csrf_token\"
                           value=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
                    >
                    <button class=\"btn btn-lg btn-info w-100 mt-3\" type=\"submit\">
                        Se connecter
                    </button>
                    <span class=\"text-center mt-3\"><a class=\"text-success\" href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password_request");
        echo "\">Mot de passe oublié ?</a></span>
                    <span class=\"text-center mt-3\">Pas encore inscrit ? <a class=\"text-success\" href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\">Cliquez ici</a></span>
                </form>
            </div>
        </article>
    </main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 29,  128 => 28,  120 => 23,  114 => 20,  107 => 16,  103 => 14,  97 => 12,  95 => 11,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hypnos | Se connecter{% endblock %}

{% block content %}
    <main>
        <article>
            <div class=\"container col-xl-5 mt-4\" style=\"height: calc(100vh - 324px)\">
                <form class=\"d-flex flex-column h-100 justify-content-center\" id=\"formlogin\" method=\"post\">
                    <h1 class=\"mb-4 text-center\">Merci de vous connecter</h1>
                    {% if error %}
                        <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                    {% endif %}
                    <div class=\"input-group mb-4\">
                        <span class=\"input-group-text\" id=\"basic-addon1\"><i class=\"fa-solid fa-user\"></i></span>
                        <input type=\"text\" name=\"email\" value=\"{{ last_username }}\" class=\"form-control\" placeholder=\"Email\" aria-label=\"Email\" aria-describedby=\"basic-addon1\" autocomplete=\"email\" required autofocus>
                    </div>
                    <div class=\"input-group mb-4\">
                        <span class=\"input-group-text\" id=\"basic-addon2\"><i class=\"fa-solid fa-key\"></i></span>
                        <input type=\"password\" id=\"password\" name=\"password\" value=\"{{ last_username }}\" class=\"form-control\" placeholder=\"Mot de passe\" aria-label=\"Mot de passe\" aria-describedby=\"basic-addon2\" autocomplete=\"current-password\" required>
                    </div>
                    <input type=\"hidden\" name=\"_csrf_token\"
                           value=\"{{ csrf_token('authenticate') }}\"
                    >
                    <button class=\"btn btn-lg btn-info w-100 mt-3\" type=\"submit\">
                        Se connecter
                    </button>
                    <span class=\"text-center mt-3\"><a class=\"text-success\" href=\"{{ path('app_forgot_password_request') }}\">Mot de passe oublié ?</a></span>
                    <span class=\"text-center mt-3\">Pas encore inscrit ? <a class=\"text-success\" href=\"{{ path('app_register') }}\">Cliquez ici</a></span>
                </form>
            </div>
        </article>
    </main>
{% endblock %}", "security/login.html.twig", "C:\\xampp\\apps\\test\\templates\\security\\login.html.twig");
    }
}
