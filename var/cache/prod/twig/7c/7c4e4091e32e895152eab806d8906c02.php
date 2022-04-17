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
class __TwigTemplate_cb129c053a78d79c14b2f88a1c6f3bc9 extends Template
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
        echo "<section class=\"mt-4\">
    <h3 class=\"title text-center\">Récapitulatif de votre réservation</h3>
    <p class=\"text-center fs-4\">Du ";
        // line 3
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "startdate", [], "any", false, false, false, 3), "d-m-y"), "html", null, true);
        echo " au ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "enddate", [], "any", false, false, false, 3), "d-m-y"), "html", null, true);
        echo " </p>
    <hr class=\"w-100 my-2 text-success\">
    <div class=\"d-flex mt-3\">
            <div class=\"row\">
                <div id=\"room";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "hotelRooms", [], "any", false, false, false, 7), "id", [], "any", false, false, false, 7), "html", null, true);
        echo "\" class=\"carousel slide carousel-fade col-md-6\" data-bs-interval=\"false\" data-bs-ride=\"carousel\">
                    <div class=\"carousel-inner\">
                        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "hotelRooms", [], "any", false, false, false, 9), "images", [], "any", false, false, false, 9));
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "hotelRooms", [], "any", false, false, false, 15), "id", [], "any", false, false, false, 15), "html", null, true);
        echo "\" data-bs-slide=\"prev\">
                        <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                        <span class=\"visually-hidden\">Previous</span>
                    </button>
                    <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#room";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "hotelRooms", [], "any", false, false, false, 19), "id", [], "any", false, false, false, 19), "html", null, true);
        echo "\" data-bs-slide=\"next\">
                        <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                        <span class=\"visually-hidden\">Next</span>
                    </button>
                </div>
                <div class=\"col-md-6\">
                    <div class=\"d-flex justify-content-between align-items-center my-2\">
                        <h2>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "hotels", [], "any", false, false, false, 26), "html", null, true);
        echo "</h2>
                        <span class=\"fs-6 badge bg-success text-dark title\">";
        // line 27
        echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "hotelRooms", [], "any", false, false, false, 27), "price", [], "any", false, false, false, 27), 0) * ((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "endDate", [], "any", false, false, false, 27), "U") - twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "startDate", [], "any", false, false, false, 27), "U")) / 86400)), "html", null, true);
        echo "€ pour ";
        echo twig_escape_filter($this->env, ((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "endDate", [], "any", false, false, false, 27), "U") - twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "startDate", [], "any", false, false, false, 27), "U")) / 86400), "html", null, true);
        echo " nuit(s)</span>
                    </div>
                    <span class=\"fs-4\">";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "hotelRooms", [], "any", false, false, false, 29), "title", [], "any", false, false, false, 29), "html", null, true);
        echo "</span>
                    <p style=\"text-align: justify\">";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "hotelRooms", [], "any", false, false, false, 30), "description", [], "any", false, false, false, 30), "html", null, true);
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
        return array (  140 => 34,  133 => 30,  129 => 29,  122 => 27,  118 => 26,  108 => 19,  101 => 15,  98 => 14,  79 => 11,  72 => 10,  55 => 9,  50 => 7,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "reservation/HotelRoomsFilter.html.twig", "C:\\xampp\\apps\\test\\templates\\reservation\\HotelRoomsFilter.html.twig");
    }
}
