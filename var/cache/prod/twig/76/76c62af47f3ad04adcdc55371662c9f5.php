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
class __TwigTemplate_09d93aa96f71a2a3b35f660e46f6ae99 extends Template
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
        echo "<h3 class=\"text-center title\">Votre réservation est confirmée</h3>
<p class=\"text-center fs-5\">Nous serons ravis de vous accueillir à ";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "hotels", [], "any", false, false, false, 2), "html", null, true);
        echo "</p>
<hr>
<p>Du ";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "startdate", [], "any", false, false, false, 4), "medium", "medium", "EEEE dd MMMM YYYY", null, "gregorian", "fr"), "html", null, true);
        echo "</p>
<p>Au ";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "enddate", [], "any", false, false, false, 5), "medium", "medium", "EEEE dd MMMM YYYY", null, "gregorian", "fr"), "html", null, true);
        echo "</p>
<hr>
<p>Adresse de l'hôtel :</p>
<p>";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "hotels", [], "any", false, false, false, 8), "address", [], "any", false, false, false, 8), "html", null, true);
        echo "</p>
<p>";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "hotels", [], "any", false, false, false, 9), "city", [], "any", false, false, false, 9), "html", null, true);
        echo "</p>
<hr>
<p>Prix Total:</p>
<p>";
        // line 12
        echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "hotelRooms", [], "any", false, false, false, 12), "price", [], "any", false, false, false, 12), 0) * ((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "endDate", [], "any", false, false, false, 12), "U") - twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "startDate", [], "any", false, false, false, 12), "U")) / 86400)), "html", null, true);
        echo "€ TTC</p>
<hr>
<span>Règlement sur place</span>
<span>Annulation possible 3 jours avant la date d'arrivée</span>";
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
        return array (  65 => 12,  59 => 9,  55 => 8,  49 => 5,  45 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "emails/reservationConfirm.html.twig", "C:\\xampp\\apps\\test\\templates\\emails\\reservationConfirm.html.twig");
    }
}
