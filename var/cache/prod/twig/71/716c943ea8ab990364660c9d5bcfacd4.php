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

/* client_area/index.html.twig */
class __TwigTemplate_95b7ee218446103a88e5c8a86dfd6d02 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "client_area/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Hypnos | Vos réservations";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <main class=\"container\">
        ";
        // line 7
        if ( !twig_test_empty(($context["reservation"] ?? null))) {
            // line 8
            echo "            <h1 class=\"my-4 rounded-3 text-center p-3 bg-info text-dark\">Gérer mes réservations</h1>
            ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [0 => "success_delete"], "method", false, false, false, 9));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 10
                echo "                <div class=\"alert alert-success text-center\" role=\"alert\">
                    ";
                // line 11
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "                <article class=\"row align-items-md-stretch\">
                    ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["reservation"]);
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
                // line 16
                echo "                        <section class=\"col-md-6 mb-4\">
                            <div class=\"p-3 text-dark bg-success rounded-3\">
                                <p class=\"mb-3 fs-4 d-flex justify-content-center\">Du ";
                // line 18
                echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "startdate", [], "any", false, false, false, 18), "medium", "medium", "EEEE dd MMMM YYYY", null, "gregorian", "fr"), "html", null, true);
                echo " au ";
                echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "endDate", [], "any", false, false, false, 18), "medium", "medium", "EEEE dd MMMM YYYY", null, "gregorian", "fr"), "html", null, true);
                echo "</p>
                                <div class=\"d-flex mb-3\">
                                    <div class=\"col-6 d-flex flex-column justify-content-center align-items-center\">
                                        <img class=\"img-fluid rounded-3\" src=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset(twig_get_attribute($this->env, $this->source, $context["reservation"], "hotels", [], "any", false, false, false, 21), "imageFiles"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservation"], "hotels", [], "any", false, false, false, 21), "name", [], "any", false, false, false, 21), "html", null, true);
                echo "\">
                                    </div>
                                    <div class=\"col-6 d-flex flex-column justify-content-center align-items-center\">
                                        <h2 class=\"title fs-4\">";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservation"], "hotels", [], "any", false, false, false, 24), "name", [], "any", false, false, false, 24), "html", null, true);
                echo "</h2>
                                        <p class=\"mb-1 fs-5\">";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservation"], "hotelRooms", [], "any", false, false, false, 25), "title", [], "any", false, false, false, 25), "html", null, true);
                echo "</p>
                                        <p class=\"fs-5\">Prix : ";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "totalPrice", [], "any", false, false, false, 26), "html", null, true);
                echo "€ le séjour </p>
                                    </div>
                                </div>
                                ";
                // line 29
                if ((twig_date_format_filter($this->env, twig_date_modify_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "startDate", [], "any", false, false, false, 29), "-3 days"), "y/m/d") >= twig_date_format_filter($this->env, "now", "y/m/d"))) {
                    // line 30
                    echo "                                    <div class=\"d-flex justify-content-center align-items-center\">
                                        ";
                    // line 31
                    $this->loadTemplate("reservation/delete_form.html.twig", "client_area/index.html.twig", 31)->display($context);
                    // line 32
                    echo "                                    </div>
                                ";
                } elseif ((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source,                 // line 33
$context["reservation"], "endDate", [], "any", false, false, false, 33), "y/m/d") < twig_date_format_filter($this->env, "now", "y/m/d"))) {
                    // line 34
                    echo "                                    <div class=\"d-flex justify-content-center align-items-center\">
                                        <a class=\"btn btn-info disabled align-items-center\">Séjour honoré</a>
                                    </div>
                                ";
                } else {
                    // line 38
                    echo "                                    <div class=\"d-flex justify-content-center align-items-center\">
                                        <a class=\"btn disabled btn-info align-items-center\">L'annulation n'est plus disponible</a>
                                    </div>
                                ";
                }
                // line 42
                echo "                            </div>
                        </section>
                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "                </article>
        ";
        } else {
            // line 47
            echo "            <article class=\"mt-4\">
                <section class=\"border border-white rounded-3 p-5\">
                    <h1>Pas de séjour réservé... pour l'instant !</h1>
                    <p class=\"fs-4\">Il est temps de ressortir vos valises et de préparer votre prochain séjour</p>
                    <a href=\"";
            // line 51
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation");
            echo "\" class=\"btn btn-info\">Réserver un séjour</a>
                </section>
            </article>
        ";
        }
        // line 55
        echo "    </main>
";
    }

    public function getTemplateName()
    {
        return "client_area/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 55,  186 => 51,  180 => 47,  176 => 45,  160 => 42,  154 => 38,  148 => 34,  146 => 33,  143 => 32,  141 => 31,  138 => 30,  136 => 29,  130 => 26,  126 => 25,  122 => 24,  114 => 21,  106 => 18,  102 => 16,  85 => 15,  82 => 14,  73 => 11,  70 => 10,  66 => 9,  63 => 8,  61 => 7,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "client_area/index.html.twig", "C:\\xampp\\apps\\test\\templates\\client_area\\index.html.twig");
    }
}
