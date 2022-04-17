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

/* reservation/index.html.twig */
class __TwigTemplate_c34bf2806db8c8460c85b6dc7d5f9b05 extends Template
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
            'body_javascript' => [$this, 'block_body_javascript'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "reservation/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Hypnos | Réservation";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <main>
        <article class=\"container mt-3\">
            <section class=\"background-home\">
                <div class=\"d-flex h-75 flex-column justify-content-end text-center align-items-center\">
                    <h1 class=\"title-background\">Vous y êtes presque !</h1>
                </div>
            </section>
            <section class=\"mt-3\">
                ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["class" => "row d-flex justify-content-arround", "id" => "form_reservation"]]);
        echo "
                    <div class=\"col-6 col-md-2\">
                        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "start_date", [], "any", false, false, false, 16), 'row');
        echo "
                    </div>
                    <div class=\"col-6 col-md-2\">
                        ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "end_date", [], "any", false, false, false, 19), 'row');
        echo "
                    </div>
                    <div class=\"col-6 col-md-3\">
                        ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "hotels", [], "any", false, false, false, 22), 'row');
        echo "
                    </div>
                    <div class=\"col-6 col-md-3\">
                        ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "hotelRooms", [], "any", false, false, false, 25), 'row');
        echo "
                    </div>
                    <div class=\"col-md-2 d-flex justify-content-center align-items-end\">
                        ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Rechercher", [], "any", false, false, false, 28), 'row');
        echo "
                    </div>
                ";
        // line 30
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
            </section>
            <section id=\"result\">
                ";
        // line 33
        if ( !(null === ($context["data"] ?? null))) {
            // line 34
            echo "                    ";
            $this->loadTemplate("reservation/HotelRoomsFilter.html.twig", "reservation/index.html.twig", 34)->display($context);
            // line 35
            echo "                ";
        }
        // line 36
        echo "                ";
        if ((null === ($context["reservationExisting"] ?? null))) {
            // line 37
            echo "                    <p class=\"text-center text-warning\">La suite recherchée n'est malheureusement pas disponible pour ces dates... Veuillez en choisir une autre</p>
                ";
        }
        // line 39
        echo "            </section>
        </article>
    </main>
";
    }

    // line 44
    public function block_body_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 45
        echo "    <script type=\"module\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/datepicker/datepicker.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/datepicker/datepickerload.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/form-reservation-ajax.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "reservation/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 47,  140 => 46,  135 => 45,  131 => 44,  124 => 39,  120 => 37,  117 => 36,  114 => 35,  111 => 34,  109 => 33,  103 => 30,  98 => 28,  92 => 25,  86 => 22,  80 => 19,  74 => 16,  69 => 14,  59 => 6,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "reservation/index.html.twig", "C:\\xampp\\apps\\test\\templates\\reservation\\index.html.twig");
    }
}
