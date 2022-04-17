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

/* home/index.html.twig */
class __TwigTemplate_5e66e855e72fe52fc2b03cb6aa936424 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <main>
        <article class=\"container mt-3\">
            <section class=\"background-home\">
                <div class=\"d-flex h-75 flex-column justify-content-end text-center align-items-center\">
                    <h1 class=\"title-background\">Bienvenue sur le site du groupe Hypnos !</h1>
                    <a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation");
        echo "\" class=\"btn btn-info\">Réserver maintenant</a>
                </div>
            </section>
            <section class=\"row mt-5\">
                <div class=\"col-lg-6\">
                    <img class=\"rounded-3 img-fluid\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./img/twig/mardan-palace-2.jpg"), "html", null, true);
        echo "\" alt=\"Hypnos hôtels\">
                </div>
                <div class=\"col-lg-6 d-flex flex-column justify-content-center mt-3 mt-lg-0\">
                    <span>Groupe Hotelier HYPNOS </span>
                    <h2 class=\"title text-success\">Notre histoire</h2>
                    <p style=\"text-align: justify\">Hypnos est un groupe hôtelier fondé en 2004. Propriétaire de 7 établissements dans les quatre
                        coins de l’hexagone, chacun de ces hôtels s’avère être une destination idéale pour les couples
                        en quête d’un séjour romantique à deux.
                        Chaque suite au design luxueux inclut des services hauts de gamme (un spa privatif
                        notamment), de quoi plonger pleinement dans une atmosphère chic-romantique.
                        Hypnos souhaiterait ne pas dépendre uniquement de sites tiers comme Booking.com pour la
                        location de ses chambres. C’est pourquoi le groupe hôtelier aimerait être pourvu de son
                        propre système de réservation sur un nouveau site web.
                        Information importante : Le paiement n'est pas une fonctionnalité à envisager, car il se fait
                        obligatoirement sur place.
                    </p>
                </div>
            </section>
            <section class=\"text-center mt-5\">
                <h3 class=\"title\">Nos Services Premium</h3>
                <hr class=\"w-25 m-auto my-2 text-success\">
                <span class=\"text-uppercase\">Détendez-vous pendant votre séjour</span>
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
            <section class=\"background-end mt-4\">
                <div class=\"d-flex h-75 flex-column justify-content-end text-center align-items-center\">
                    <h2 class=\"fs-1 title-background\">Vivez un séjour unique !</h2>
                    <a href=\"";
        // line 74
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation");
        echo "\" class=\"btn btn-info\">Réserver maintenant</a>
                </div>
            </section>
        </article>
    </main>
";
    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 74,  65 => 14,  57 => 9,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/index.html.twig", "C:\\xampp\\apps\\test\\templates\\home\\index.html.twig");
    }
}