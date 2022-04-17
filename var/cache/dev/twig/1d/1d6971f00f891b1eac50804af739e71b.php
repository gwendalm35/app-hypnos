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

/* hotel_rooms/index.html.twig */
class __TwigTemplate_5f30f23d39911671f0c8202aa5bcb627 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "hotel_rooms/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "hotel_rooms/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "hotel_rooms/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hypnos | Nos suites | ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 7, $this->source); })()), "hotels", [], "any", false, false, false, 7), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 10
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 11
        echo "
<main>
    <article class=\"container mt-3\">
        <section class=\"background-home\" style=\"background: url('";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset(twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 14, $this->source); })()), "hotels", [], "any", false, false, false, 14), "imageFiles"), "html", null, true);
        echo "') center no-repeat;background-size:cover;
                border-radius:10px;
                height:450px\">
            <div class=\"d-flex h-100 flex-column justify-content-center text-center align-items-center\">
                <div class=\"d-flex flex-column bg-dark border border-success border-3 p-5\">
                    <h1 class=\"title\">";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 19, $this->source); })()), "hotels", [], "any", false, false, false, 19), "html", null, true);
        echo "</h1>
                    <hr class=\"text-success w-50 m-auto my-2\">
                    <span class=\"text-uppercase fs-5\">Choisissez votre suite</span>
                </div>
            </div>
        </section>

        <section class=\"mt-5\">
            <h3 class=\"my-4 rounded-3 text-center p-3 bg-info text-dark\">Nos Suites</h3>
            <hr class=\"w-25 my-2 text-success hr-center\">
            <div class=\"row justify-content-between mt-4\">
                ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["hotelrooms"]) || array_key_exists("hotelrooms", $context) ? $context["hotelrooms"] : (function () { throw new RuntimeError('Variable "hotelrooms" does not exist.', 30, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["room"]) {
            // line 31
            echo "        <article class=\"col-12 mb-3\">
            <div class=\"card p-3 img-card bg-success text-color\">
                <div class=\"row \">

                    <div class=\"d-none d-md-block col-md-5 col-lg-4\">
                        <p class=\"card__img\" style=\"background-image: url('";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["room"], "imageFile"), "html", null, true);
            echo "');\"></p>
                    </div>

                    <div class=\"col-12 col-md-7 col-lg-8 d-flex flex-column justify-content-between\">
                        <div class=\"mb-3 px-0\">
                            <h4 class=\"card-title text-dark\"> ";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["room"], "title", [], "any", false, false, false, 41), "html", null, true);
            echo "</h4>
                            <h6 class=\"card-subtitle mb-2\">à partir de ";
            // line 42
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["room"], "price", [], "any", false, false, false, 42), 0), "html", null, true);
            echo " € / nuit</h6>
                            <div class=\"d-md-none \">
                                <p class=\"card__img\" style=\"background-image: url('";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["room"], "imageFile"), "html", null, true);
            echo "');\"></p>
                            </div>
                            <p class=\"card-text pb-2 pb-md-0 py-md-2\">";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["room"], "description", [], "any", false, false, false, 46), "html", null, true);
            echo "</p>
                            <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["room"], "bookinglink", [], "any", false, false, false, 47), "html", null, true);
            echo "\" class=\"card-text pb-2 pb-md-0 py-md-2\">Lien booking.com</a>
                        </div>
                        <div class=\"text-center row px-2 d-flex justify-content-center justify-content-md-end\">
                            <button type=\"button\" class=\"col-5 btn bg-offwhite border-gold rounded-pill text-dblue px-2 mx-2 btn-info\" data-bs-toggle=\"modal\" data-bs-target=\"#N";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["room"], "id", [], "any", false, false, false, 50), "html", null, true);
            echo " \">galerie d'images</button>
                            <a type=\"button\" href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation", ["suite" => twig_get_attribute($this->env, $this->source, $context["room"], "id", [], "any", false, false, false, 51), "hotel" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["room"], "hotels", [], "any", false, false, false, 51), "id", [], "any", false, false, false, 51)]), "html", null, true);
            echo "\" class=\"col-5 btn bg-gold rounded-pill text-offwhite px-2 mx-2 btn-info\">réserver</a>
                        </div>
                    </div>
                </div>
            </div>

        </article>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['room'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "        </section>


        ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["hotelrooms"]) || array_key_exists("hotelrooms", $context) ? $context["hotelrooms"] : (function () { throw new RuntimeError('Variable "hotelrooms" does not exist.', 63, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["poom"]) {
            // line 64
            echo "
        <div class=\"modal fade\" id=\"N";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["poom"], "id", [], "any", false, false, false, 65), "html", null, true);
            echo "\" data-bs-backdrop=\"static\" data-bs-keyboard=\"false\" tabindex=\"-1\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-lg\" role=\"document\">

                <div class=\"modal-content\">
                    <div class=\"modal-body mb-0 p-0\">
                            <div class=\"col-md-5 my-5\">
                                    <div class=\"carousel-inner\">
                                            <div class=\"carousel-item active \">
                                                ";
            // line 73
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["poom"], "images", [], "any", false, false, false, 73));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 74
                echo "                                                <img class=\"d-block w-100 img-fluid\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/HotelRoom/" . twig_get_attribute($this->env, $this->source, $context["image"], "bin", [], "any", false, false, false, 74))), "html", null, true);
                echo "\" alt=\"image\">
                                                    <br>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "                                            </div>
                                    </div>

                            </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Close</button>
                    </div>
                </div>
            </div>
        </div>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['poom'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "









        <section class=\"text-center mt-5\">
            <h3 class=\"title\">Nos Services Premium</h3>
            <hr class=\"w-25 m-auto my-2 text-success\">
            <span class=\"text-uppercase\">Détendez vous pendant votre séjour</span>
            <div class=\"row\">
                <div class=\"col-4 col-md-3 mt-4 d-flex flex-column\">
                    <i class=\"fa-solid fa-person-swimming fa-4x\"></i>
                    <span class=\"fs-5\">Piscine</span>
                </div>
                <div class=\"col-4 col-md-3 mt-4 d-flex flex-column\">
                    <i class=\"fa-solid fa-spa fa-4x\"></i>
                    <span class=\"fs-5\">Espace détente</span>
                </div>
                <div class=\"col-4 col-md-3 mt-4 d-flex flex-column\">
                    <i class=\"fa-solid fa-dumbbell fa-4x\"></i>
                    <span class=\"fs-5\">Salle de sport</span>
                </div>
                <div class=\"col-4 col-md-3 mt-4 d-flex flex-column\">
                    <i class=\"fa-solid fa-mug-saucer fa-4x\"></i>
                    <span class=\"fs-5\">Petit-déjeuner</span>
                </div>
                <div class=\"col-4 col-md-3 mt-4 d-flex flex-column\">
                    <i class=\"fa-solid fa-martini-glass fa-4x\"></i>
                    <span class=\"fs-5\">Bar</span>
                </div>
                <div class=\"col-4 col-md-3 mt-4 d-flex flex-column\">
                    <i class=\"fa-solid fa-water-ladder fa-4x\"></i>
                    <span class=\"fs-5\">Spa privatif</span>
                </div>
                <div class=\"col-4 col-md-3 mt-4 d-flex flex-column\">
                    <i class=\"fa-solid fa-utensils fa-4x\"></i>
                    <span class=\"fs-5\">Restaurant gastronomique</span>
                </div>
                <div class=\"col-4 col-md-3 mt-4 d-flex flex-column\">
                    <i class=\"fa-solid fa-cart-flatbed-suitcase fa-4x\"></i>
                    <span class=\"fs-5\">Porte bagage</span>
                </div>
            </div>
        </section>
    </article>
</main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "hotel_rooms/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 90,  239 => 77,  229 => 74,  225 => 73,  214 => 65,  211 => 64,  207 => 63,  202 => 60,  187 => 51,  183 => 50,  177 => 47,  173 => 46,  168 => 44,  163 => 42,  159 => 41,  151 => 36,  144 => 31,  140 => 30,  126 => 19,  118 => 14,  113 => 11,  103 => 10,  83 => 7,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block stylesheets %}
    <link href=\"{{ asset('assets/style.css') }}\" rel=\"stylesheet\" type=\"text/css\"/>
{% endblock %}

{% block title %}Hypnos | Nos suites | {{ hotel.hotels }}{% endblock %}


{% block content %}

<main>
    <article class=\"container mt-3\">
        <section class=\"background-home\" style=\"background: url('{{ vich_uploader_asset(hotel.hotels, 'imageFiles') }}') center no-repeat;background-size:cover;
                border-radius:10px;
                height:450px\">
            <div class=\"d-flex h-100 flex-column justify-content-center text-center align-items-center\">
                <div class=\"d-flex flex-column bg-dark border border-success border-3 p-5\">
                    <h1 class=\"title\">{{ hotel.hotels }}</h1>
                    <hr class=\"text-success w-50 m-auto my-2\">
                    <span class=\"text-uppercase fs-5\">Choisissez votre suite</span>
                </div>
            </div>
        </section>

        <section class=\"mt-5\">
            <h3 class=\"my-4 rounded-3 text-center p-3 bg-info text-dark\">Nos Suites</h3>
            <hr class=\"w-25 my-2 text-success hr-center\">
            <div class=\"row justify-content-between mt-4\">
                {% for room in hotelrooms %}
        <article class=\"col-12 mb-3\">
            <div class=\"card p-3 img-card bg-success text-color\">
                <div class=\"row \">

                    <div class=\"d-none d-md-block col-md-5 col-lg-4\">
                        <p class=\"card__img\" style=\"background-image: url('{{ vich_uploader_asset(room, 'imageFile') }}');\"></p>
                    </div>

                    <div class=\"col-12 col-md-7 col-lg-8 d-flex flex-column justify-content-between\">
                        <div class=\"mb-3 px-0\">
                            <h4 class=\"card-title text-dark\"> {{ room.title }}</h4>
                            <h6 class=\"card-subtitle mb-2\">à partir de {{ room.price | number_format(0) }} € / nuit</h6>
                            <div class=\"d-md-none \">
                                <p class=\"card__img\" style=\"background-image: url('{{ vich_uploader_asset(room, 'imageFile') }}');\"></p>
                            </div>
                            <p class=\"card-text pb-2 pb-md-0 py-md-2\">{{ room.description }}</p>
                            <a href=\"{{ room.bookinglink }}\" class=\"card-text pb-2 pb-md-0 py-md-2\">Lien booking.com</a>
                        </div>
                        <div class=\"text-center row px-2 d-flex justify-content-center justify-content-md-end\">
                            <button type=\"button\" class=\"col-5 btn bg-offwhite border-gold rounded-pill text-dblue px-2 mx-2 btn-info\" data-bs-toggle=\"modal\" data-bs-target=\"#N{{ room.id }} \">galerie d'images</button>
                            <a type=\"button\" href=\"{{ path('app_reservation', {suite: room.id, hotel: room.hotels.id}) }}\" class=\"col-5 btn bg-gold rounded-pill text-offwhite px-2 mx-2 btn-info\">réserver</a>
                        </div>
                    </div>
                </div>
            </div>

        </article>
            </div>
            {% endfor %}
        </section>


        {% for poom in hotelrooms %}

        <div class=\"modal fade\" id=\"N{{ poom.id }}\" data-bs-backdrop=\"static\" data-bs-keyboard=\"false\" tabindex=\"-1\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-lg\" role=\"document\">

                <div class=\"modal-content\">
                    <div class=\"modal-body mb-0 p-0\">
                            <div class=\"col-md-5 my-5\">
                                    <div class=\"carousel-inner\">
                                            <div class=\"carousel-item active \">
                                                {% for image in poom.images %}
                                                <img class=\"d-block w-100 img-fluid\" src=\"{{ asset('img/HotelRoom/'~ image.bin) }}\" alt=\"image\">
                                                    <br>
                                                {% endfor %}
                                            </div>
                                    </div>

                            </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Close</button>
                    </div>
                </div>
            </div>
        </div>

        {% endfor %}










        <section class=\"text-center mt-5\">
            <h3 class=\"title\">Nos Services Premium</h3>
            <hr class=\"w-25 m-auto my-2 text-success\">
            <span class=\"text-uppercase\">Détendez vous pendant votre séjour</span>
            <div class=\"row\">
                <div class=\"col-4 col-md-3 mt-4 d-flex flex-column\">
                    <i class=\"fa-solid fa-person-swimming fa-4x\"></i>
                    <span class=\"fs-5\">Piscine</span>
                </div>
                <div class=\"col-4 col-md-3 mt-4 d-flex flex-column\">
                    <i class=\"fa-solid fa-spa fa-4x\"></i>
                    <span class=\"fs-5\">Espace détente</span>
                </div>
                <div class=\"col-4 col-md-3 mt-4 d-flex flex-column\">
                    <i class=\"fa-solid fa-dumbbell fa-4x\"></i>
                    <span class=\"fs-5\">Salle de sport</span>
                </div>
                <div class=\"col-4 col-md-3 mt-4 d-flex flex-column\">
                    <i class=\"fa-solid fa-mug-saucer fa-4x\"></i>
                    <span class=\"fs-5\">Petit-déjeuner</span>
                </div>
                <div class=\"col-4 col-md-3 mt-4 d-flex flex-column\">
                    <i class=\"fa-solid fa-martini-glass fa-4x\"></i>
                    <span class=\"fs-5\">Bar</span>
                </div>
                <div class=\"col-4 col-md-3 mt-4 d-flex flex-column\">
                    <i class=\"fa-solid fa-water-ladder fa-4x\"></i>
                    <span class=\"fs-5\">Spa privatif</span>
                </div>
                <div class=\"col-4 col-md-3 mt-4 d-flex flex-column\">
                    <i class=\"fa-solid fa-utensils fa-4x\"></i>
                    <span class=\"fs-5\">Restaurant gastronomique</span>
                </div>
                <div class=\"col-4 col-md-3 mt-4 d-flex flex-column\">
                    <i class=\"fa-solid fa-cart-flatbed-suitcase fa-4x\"></i>
                    <span class=\"fs-5\">Porte bagage</span>
                </div>
            </div>
        </section>
    </article>
</main>
{% endblock %}
", "hotel_rooms/index.html.twig", "C:\\xampp\\apps\\test\\templates\\hotel_rooms\\index.html.twig");
    }
}
