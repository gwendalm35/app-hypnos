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

/* reservation/reservationConfirm.html.twig */
class __TwigTemplate_5748719096956fc6685ea4a64d933c4e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $this->parent = $this->loadTemplate("base.html.twig", "reservation/reservationConfirm.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "    <main>
        <article>
            <section>
                <div class=\"modal-dialog modal-lg\">
                    <div class=\"modal-content text-dark\">
                        <div class=\"modal-body\">
                            <h3 class=\"text-center title\">Votre réservation est confirmée</h3>
                            <p class=\"text-center fs-5\">Nous serons ravis de vous accueillir à ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "hotels", [], "any", false, false, false, 10), "html", null, true);
        echo "</p>
                            <hr>
                            <div class=\"d-flex justify-content-around container\">
                                <div class=\"d-flex flex-column align-items-center\">
                                    <p class=\"mb-0 fs-4\">Du</p>
                                    <p class=\"m-0 fs-3\">";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "startdate", [], "any", false, false, false, 15), "medium", "medium", "EEEE dd MMMM YYYY", null, "gregorian", "fr"), "html", null, true);
        echo "</p>
                                </div>
                                <div class=\"d-flex justify-content-center align-items-center\">
                                    <i class=\"fa-solid fa-arrow-right-long fa-2xl\"></i>
                                </div>
                                <div class=\"d-flex flex-column align-items-center\">
                                    <p class=\"mb-0 fs-4\">Au</p>
                                    <p class=\"m-0 fs-3\">";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "enddate", [], "any", false, false, false, 22), "medium", "medium", "EEEE dd MMMM YYYY", null, "gregorian", "fr"), "html", null, true);
        echo "</p>
                                </div>
                            </div>
                            <hr>
                            <div class=\"row container\">
                                <div class=\"d-flex flex-column col\">
                                    <p class=\"fs-4 mb-1 text-decoration-underline\">Adresse de l'hôtel :</p>
                                    <p class=\"mb-0 fs-5\">";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "hotels", [], "any", false, false, false, 29), "address", [], "any", false, false, false, 29), "html", null, true);
        echo "</p>
                                    <p class=\"fs-5\">";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "hotels", [], "any", false, false, false, 30), "city", [], "any", false, false, false, 30), "html", null, true);
        echo "</p>
                                </div>
                                <div class=\"d-flex justify-content-end align-items-center col\">
                                    <a class=\"btn btn-info\" target=\"_blank\" href=\"https://www.google.fr/maps/place/";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "hotels", [], "any", false, false, false, 33), "address", [], "any", false, false, false, 33), "html", null, true);
        echo ",+";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "hotels", [], "any", false, false, false, 33), "city", [], "any", false, false, false, 33), "html", null, true);
        echo "\">Voir l'itinéraire</a>
                                </div>
                            </div>
                            <hr>
                            <div class=\"row container\">
                                <div class=\"d-flex flex-column col\">
                                    <p class=\"fs-4 mb-1 text-decoration-underline\">Prix Total:</p>
                                </div>
                                <div class=\"d-flex justify-content-end align-items-center col\">
                                    <p class=\"mb-0 fs-4\">";
        // line 42
        echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "hotelRooms", [], "any", false, false, false, 42), "price", [], "any", false, false, false, 42), 0) * ((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "endDate", [], "any", false, false, false, 42), "U") - twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "startDate", [], "any", false, false, false, 42), "U")) / 86400)), "html", null, true);
        echo "€ TTC</p>
                                </div>
                            </div>
                            <hr>
                        </div>
                        <span class=\"text-center fs-5\">Règlement sur place</span>
                        <span class=\"text-center fs-5\">Annulation possible 3 jours avant la date d'arrivée</span>
                        <span class=\"text-center fs-6 text-warning\">Un email de confirmation vient de vous être envoyée à l'adresse : ";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "users", [], "any", false, false, false, 49), "email", [], "any", false, false, false, 49), "html", null, true);
        echo "</span>
                        <div class=\"modal-footer justify-content-center mt-4\">
                            <a class=\"btn btn-info\" href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">Retourner à la page d'accueil</a>
                        </div>
                    </div>
                </div>
            </section>
        </article>
    </main>
";
    }

    public function getTemplateName()
    {
        return "reservation/reservationConfirm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 51,  121 => 49,  111 => 42,  97 => 33,  91 => 30,  87 => 29,  77 => 22,  67 => 15,  59 => 10,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "reservation/reservationConfirm.html.twig", "C:\\xampp\\apps\\test\\templates\\reservation\\reservationConfirm.html.twig");
    }
}
