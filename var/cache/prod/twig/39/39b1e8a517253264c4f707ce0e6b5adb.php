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

/* head.html.twig */
class __TwigTemplate_c23d3f6fdc0a96822a06897f51ce37d4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <meta name=\"robots\" content=\"all\">
    <meta name=\"description\" content=\"Hypnos est un groupe hôtelier fondé en 2004. Propriétaire de 7 établissements dans les quatre
coins de l’hexagone, chacun de ces hôtels s’avère être une destination idéale pour les couples
en quête d’un séjour romantique à deux.
Chaque suite au design luxueux inclut des services hauts de gamme (un spa privatif
notamment), de quoi plonger pleinement dans une atmosphère chic-romantique.
Hypnos souhaiterait ne pas dépendre uniquement de sites tiers comme Booking.com pour la
location de ses chambres. C’est pourquoi le groupe hôtelier aimerait être pourvu de son
propre système de réservation sur un nouveau site web.
Information importante : Le paiement n'est pas une fonctionnalité à envisager, car il se fait
obligatoirement sur place.
\">
    <title>";
        // line 17
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/favicon/apple-touch-icon.png"), "html", null, true);
        echo "\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/favicon/favicon-32x32.png"), "html", null, true);
        echo "\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/favicon/favicon-16x16.png"), "html", null, true);
        echo "\">
    <script src=\"https://kit.fontawesome.com/e98cd34f75.js\" crossorigin=\"anonymous\"></script>
    ";
        // line 22
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 26
        echo "
    ";
        // line 27
        $this->displayBlock('javascripts', $context, $blocks);
        // line 30
        echo "</head>";
    }

    // line 17
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Groupe Hôtelier Hypnos";
    }

    // line 22
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
        ";
        // line 24
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "
    ";
    }

    // line 27
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "        ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "head.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 28,  108 => 27,  102 => 24,  97 => 23,  93 => 22,  86 => 17,  82 => 30,  80 => 27,  77 => 26,  75 => 22,  70 => 20,  66 => 19,  62 => 18,  58 => 17,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "head.html.twig", "C:\\xampp\\apps\\test\\templates\\head.html.twig");
    }
}
