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

/* reservation/HotelRoomsFilter.html.twig */
class __TwigTemplate_8bd559e384926f1e85b7e5bcd75e71dd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/HotelRoomsFilter.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/HotelRoomsFilter.html.twig"));

        // line 1
        echo "<section class=\"mt-4\">
    <h3 class=\"title text-center\">Récapitulatif de votre réservation</h3>
    <p class=\"text-center fs-4\">Du ";
        // line 3
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 3, $this->source); })()), "startdate", [], "any", false, false, false, 3), "d-m-y"), "html", null, true);
        echo " au ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 3, $this->source); })()), "enddate", [], "any", false, false, false, 3), "d-m-y"), "html", null, true);
        echo " </p>
    <hr class=\"w-100 my-2 text-success\">
    <div class=\"d-flex mt-3\">
            <div class=\"row\">
                <div id=\"room";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 7, $this->source); })()), "hotelRooms", [], "any", false, false, false, 7), "id", [], "any", false, false, false, 7), "html", null, true);
        echo "\" class=\"carousel slide carousel-fade col-md-6\" data-bs-interval=\"false\" data-bs-ride=\"carousel\">
                    <div class=\"carousel-inner\">
                        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 9, $this->source); })()), "hotelRooms", [], "any", false, false, false, 9), "images", [], "any", false, false, false, 9));
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
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 10
            echo "                            <div class=\"carousel-item ";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 10) == 1)) {
                echo " active ";
            }
            echo "\">
                                <img class=\"d-block w-100\" src=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/HotelRoom/" . twig_get_attribute($this->env, $this->source, $context["image"], "bin", [], "any", false, false, false, 11))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "name", [], "any", false, false, false, 11), "html", null, true);
            echo "\">
                            </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "                    </div>
                    <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#room";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 15, $this->source); })()), "hotelRooms", [], "any", false, false, false, 15), "id", [], "any", false, false, false, 15), "html", null, true);
        echo "\" data-bs-slide=\"prev\">
                        <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                        <span class=\"visually-hidden\">Previous</span>
                    </button>
                    <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#room";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 19, $this->source); })()), "hotelRooms", [], "any", false, false, false, 19), "id", [], "any", false, false, false, 19), "html", null, true);
        echo "\" data-bs-slide=\"next\">
                        <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                        <span class=\"visually-hidden\">Next</span>
                    </button>
                </div>
                <div class=\"col-md-6\">
                    <div class=\"d-flex justify-content-between align-items-center my-2\">
                        <h2>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 26, $this->source); })()), "hotels", [], "any", false, false, false, 26), "html", null, true);
        echo "</h2>
                        <span class=\"fs-6 badge bg-success text-dark title\">";
        // line 27
        echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 27, $this->source); })()), "hotelRooms", [], "any", false, false, false, 27), "price", [], "any", false, false, false, 27), 0) * ((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 27, $this->source); })()), "endDate", [], "any", false, false, false, 27), "U") - twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 27, $this->source); })()), "startDate", [], "any", false, false, false, 27), "U")) / 86400)), "html", null, true);
        echo "€ pour ";
        echo twig_escape_filter($this->env, ((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 27, $this->source); })()), "endDate", [], "any", false, false, false, 27), "U") - twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 27, $this->source); })()), "startDate", [], "any", false, false, false, 27), "U")) / 86400), "html", null, true);
        echo " nuit(s)</span>
                    </div>
                    <span class=\"fs-4\">";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 29, $this->source); })()), "hotelRooms", [], "any", false, false, false, 29), "title", [], "any", false, false, false, 29), "html", null, true);
        echo "</span>
                    <p style=\"text-align: justify\">";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 30, $this->source); })()), "hotelRooms", [], "any", false, false, false, 30), "description", [], "any", false, false, false, 30), "html", null, true);
        echo "</p>
                    <p class=\"text-decoration-underline\">Heure d'arrivée : À partir de 14h00</p>
                    <p class=\"text-decoration-underline\">Heure de départ : Avant 10h00</p>
                    <div class=\"d-flex justify-content-around align-items-center my-2\">
                            <a class=\"btn btn-info\" href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_confirm");
        echo "\">Réserver mon séjour</a>
                    </div>
                </div>
            </div>
    </div>
</section>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "reservation/HotelRoomsFilter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 34,  139 => 30,  135 => 29,  128 => 27,  124 => 26,  114 => 19,  107 => 15,  104 => 14,  85 => 11,  78 => 10,  61 => 9,  56 => 7,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"mt-4\">
    <h3 class=\"title text-center\">Récapitulatif de votre réservation</h3>
    <p class=\"text-center fs-4\">Du {{ data.startdate | date('d-m-y') }} au {{ data.enddate | date('d-m-y') }} </p>
    <hr class=\"w-100 my-2 text-success\">
    <div class=\"d-flex mt-3\">
            <div class=\"row\">
                <div id=\"room{{ data.hotelRooms.id }}\" class=\"carousel slide carousel-fade col-md-6\" data-bs-interval=\"false\" data-bs-ride=\"carousel\">
                    <div class=\"carousel-inner\">
                        {% for image in data.hotelRooms.images %}
                            <div class=\"carousel-item {%if loop.index == 1%} active {%endif%}\">
                                <img class=\"d-block w-100\" src=\"{{ asset('img/HotelRoom/'~ image.bin) }}\" alt=\"{{ image.name }}\">
                            </div>
                        {% endfor %}
                    </div>
                    <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#room{{ data.hotelRooms.id }}\" data-bs-slide=\"prev\">
                        <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                        <span class=\"visually-hidden\">Previous</span>
                    </button>
                    <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#room{{ data.hotelRooms.id }}\" data-bs-slide=\"next\">
                        <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                        <span class=\"visually-hidden\">Next</span>
                    </button>
                </div>
                <div class=\"col-md-6\">
                    <div class=\"d-flex justify-content-between align-items-center my-2\">
                        <h2>{{ data.hotels }}</h2>
                        <span class=\"fs-6 badge bg-success text-dark title\">{{ (data.hotelRooms.price | number_format(0))*((data.endDate | date('U') - data.startDate | date('U'))/86400) }}€ pour {{ (data.endDate | date('U') - data.startDate | date('U'))/86400 }} nuit(s)</span>
                    </div>
                    <span class=\"fs-4\">{{ data.hotelRooms.title }}</span>
                    <p style=\"text-align: justify\">{{ data.hotelRooms.description }}</p>
                    <p class=\"text-decoration-underline\">Heure d'arrivée : À partir de 14h00</p>
                    <p class=\"text-decoration-underline\">Heure de départ : Avant 10h00</p>
                    <div class=\"d-flex justify-content-around align-items-center my-2\">
                            <a class=\"btn btn-info\" href=\"{{ path('app_reservation_confirm') }}\">Réserver mon séjour</a>
                    </div>
                </div>
            </div>
    </div>
</section>
", "reservation/HotelRoomsFilter.html.twig", "C:\\xampp\\apps\\test\\templates\\reservation\\HotelRoomsFilter.html.twig");
    }
}
