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

/* hotel/index.html.twig */
class __TwigTemplate_c869e5085b7eef41ca23a3b5cf07c345 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "hotel/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Hypnos | Nos Hôtels";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <main>
        <article class=\"container\">
            <h1 class=\"my-4 rounded-3 text-center p-3 bg-info text-dark\">Nos Hôtels</h1>
            <hr class=\"w-25 m-auto my-2 text-success mb-4\">
            <div class=\"row\">
                ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["hotels"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["hotel"]) {
            // line 12
            echo "                    <section class=\" col-md-4 mb-4 \">
                        <div class=\"card bg-success text-color\">
                        <img class=\"img-fluid\" src=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["hotel"], "imageFiles"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "name", [], "any", false, false, false, 14), "html", null, true);
            echo "\">
                        <h2 class=\"title mt-3 fs-3 \">";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "name", [], "any", false, false, false, 15), "html", null, true);
            echo "</h2>
                        <span class=\"text-success \">";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "city", [], "any", false, false, false, 16), "html", null, true);
            echo "</span>
                        <p style=\"text-align: justify\">";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "description", [], "any", false, false, false, 17), "html", null, true);
            echo "</p>
                        <div class=\"d-flex justify-content-center \">
                            <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hotel_rooms", ["id" => twig_get_attribute($this->env, $this->source, $context["hotel"], "id", [], "any", false, false, false, 19)]), "html", null, true);
            echo "\" class=\"btn btn-info\"><i class=\"fa-solid fa-plus\"></i> Voir les suites</a>
                        </div>
                        </div>

                    </section>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hotel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "            </div>
        </article>
    </main>
";
    }

    public function getTemplateName()
    {
        return "hotel/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 25,  92 => 19,  87 => 17,  83 => 16,  79 => 15,  73 => 14,  69 => 12,  65 => 11,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "hotel/index.html.twig", "C:\\xampp\\apps\\test\\templates\\hotel\\index.html.twig");
    }
}
