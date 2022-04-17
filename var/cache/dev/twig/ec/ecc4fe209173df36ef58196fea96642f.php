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

/* emails/reservationConfirm.html.twig */
class __TwigTemplate_fda8aa4316ec8603775ffe67df65a7b6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/reservationConfirm.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/reservationConfirm.html.twig"));

        // line 1
        echo "<h3 class=\"text-center title\">Votre réservation est confirmée</h3>
<p class=\"text-center fs-5\">Nous serons ravis de vous accueillir à ";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 2, $this->source); })()), "hotels", [], "any", false, false, false, 2), "html", null, true);
        echo "</p>
<hr>
<p>Du ";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 4, $this->source); })()), "startdate", [], "any", false, false, false, 4), "medium", "medium", "EEEE dd MMMM YYYY", null, "gregorian", "fr"), "html", null, true);
        echo "</p>
<p>Au ";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 5, $this->source); })()), "enddate", [], "any", false, false, false, 5), "medium", "medium", "EEEE dd MMMM YYYY", null, "gregorian", "fr"), "html", null, true);
        echo "</p>
<hr>
<p>Adresse de l'hôtel :</p>
<p>";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 8, $this->source); })()), "hotels", [], "any", false, false, false, 8), "address", [], "any", false, false, false, 8), "html", null, true);
        echo "</p>
<p>";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 9, $this->source); })()), "hotels", [], "any", false, false, false, 9), "city", [], "any", false, false, false, 9), "html", null, true);
        echo "</p>
<hr>
<p>Prix Total:</p>
<p>";
        // line 12
        echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 12, $this->source); })()), "hotelRooms", [], "any", false, false, false, 12), "price", [], "any", false, false, false, 12), 0) * ((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 12, $this->source); })()), "endDate", [], "any", false, false, false, 12), "U") - twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 12, $this->source); })()), "startDate", [], "any", false, false, false, 12), "U")) / 86400)), "html", null, true);
        echo "€ TTC</p>
<hr>
<span>Règlement sur place</span>
<span>Annulation possible 3 jours avant la date d'arrivée</span>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "emails/reservationConfirm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 12,  65 => 9,  61 => 8,  55 => 5,  51 => 4,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h3 class=\"text-center title\">Votre réservation est confirmée</h3>
<p class=\"text-center fs-5\">Nous serons ravis de vous accueillir à {{ data.hotels }}</p>
<hr>
<p>Du {{ data.startdate | format_datetime(locale='fr', pattern=\"EEEE dd MMMM YYYY\") }}</p>
<p>Au {{ data.enddate | format_datetime(locale='fr', pattern=\"EEEE dd MMMM YYYY\") }}</p>
<hr>
<p>Adresse de l'hôtel :</p>
<p>{{ data.hotels.address }}</p>
<p>{{ data.hotels.city }}</p>
<hr>
<p>Prix Total:</p>
<p>{{ (data.hotelRooms.price | number_format(0))*((data.endDate | date('U') - data.startDate | date('U'))/86400) }}€ TTC</p>
<hr>
<span>Règlement sur place</span>
<span>Annulation possible 3 jours avant la date d'arrivée</span>", "emails/reservationConfirm.html.twig", "C:\\xampp\\apps\\test\\templates\\emails\\reservationConfirm.html.twig");
    }
}
