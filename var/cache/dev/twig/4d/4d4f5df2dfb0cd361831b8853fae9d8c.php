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

/* Bundles/EasyAdminBundle/crud/field/association.html.twig */
class __TwigTemplate_61b78be036fac809227ca36b1acdc8e8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Bundles/EasyAdminBundle/crud/field/association.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Bundles/EasyAdminBundle/crud/field/association.html.twig"));

        // line 4
        if (("toMany" == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 4, $this->source); })()), "customOptions", [], "any", false, false, false, 4), "get", [0 => "associationType"], "method", false, false, false, 4))) {
            // line 5
            echo "    ";
            if (("detail" == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 5, $this->source); })()), "crud", [], "any", false, false, false, 5), "currentPage", [], "any", false, false, false, 5))) {
                // line 6
                echo "        ";
                $context["maxLi"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "customOptions", [], "any", false, true, false, 6), "get", [0 => "maxLi"], "method", true, true, false, 6) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "customOptions", [], "any", false, true, false, 6), "get", [0 => "maxLi"], "method", false, false, false, 6)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "customOptions", [], "any", false, true, false, 6), "get", [0 => "maxLi"], "method", false, false, false, 6)) : (4));
                // line 7
                echo "        ";
                $context["toDisplay"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "customOptions", [], "any", false, true, false, 7), "get", [0 => "toDisplay"], "method", true, true, false, 7) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "customOptions", [], "any", false, true, false, 7), "get", [0 => "toDisplay"], "method", false, false, false, 7)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "customOptions", [], "any", false, true, false, 7), "get", [0 => "toDisplay"], "method", false, false, false, 7)) : (""));
                // line 8
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 8, $this->source); })()), "value", [], "any", false, false, false, 8));
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
                foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                    // line 9
                    echo "            ";
                    if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 9)) {
                        // line 10
                        echo "                <div";
                        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 10, $this->source); })()), "value", [], "any", false, false, false, 10)) > (isset($context["maxLi"]) || array_key_exists("maxLi", $context) ? $context["maxLi"] : (function () { throw new RuntimeError('Variable "maxLi" does not exist.', 10, $this->source); })()))) {
                            echo " style=\"height:";
                            echo twig_escape_filter($this->env, (((isset($context["maxLi"]) || array_key_exists("maxLi", $context) ? $context["maxLi"] : (function () { throw new RuntimeError('Variable "maxLi" does not exist.', 10, $this->source); })()) + 1) * 22.4), "html", null, true);
                            echo "px; overflow:scroll;\"";
                        }
                        echo ">
                <table><tbody>
            ";
                    }
                    // line 13
                    echo "            <tr><td>
                    <span class=\"pr-3\">
                        ";
                    // line 15
                    if ((isset($context["toDisplay"]) || array_key_exists("toDisplay", $context) ? $context["toDisplay"] : (function () { throw new RuntimeError('Variable "toDisplay" does not exist.', 15, $this->source); })())) {
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], (isset($context["toDisplay"]) || array_key_exists("toDisplay", $context) ? $context["toDisplay"] : (function () { throw new RuntimeError('Variable "toDisplay" does not exist.', 15, $this->source); })()), [], "any", false, false, false, 15), "html", null, true);
                    } else {
                        echo twig_escape_filter($this->env, $context["row"], "html", null, true);
                    }
                    // line 16
                    echo "                    </span>
                </td></tr>
            ";
                    // line 18
                    if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 18)) {
                        // line 19
                        echo "                </tbody></table>
                </div>
            ";
                    }
                    // line 22
                    echo "        ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 23
                echo "    ";
            } else {
                // line 24
                echo "        <span class=\"badge badge-secondary\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 24, $this->source); })()), "formattedValue", [], "any", false, false, false, 24), "html", null, true);
                echo "</span>
    ";
            }
        } else {
            // line 27
            echo "    ";
            if ( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 27, $this->source); })()), "customOptions", [], "any", false, false, false, 27), "get", [0 => "relatedUrl"], "method", false, false, false, 27))) {
                // line 28
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 28, $this->source); })()), "customOptions", [], "any", false, false, false, 28), "get", [0 => "relatedUrl"], "method", false, false, false, 28), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 28, $this->source); })()), "formattedValue", [], "any", false, false, false, 28), "html", null, true);
                echo "</a>
    ";
            } else {
                // line 30
                echo "        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 30, $this->source); })()), "formattedValue", [], "any", false, false, false, 30), "html", null, true);
                echo "
    ";
            }
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "Bundles/EasyAdminBundle/crud/field/association.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 30,  134 => 28,  131 => 27,  124 => 24,  121 => 23,  107 => 22,  102 => 19,  100 => 18,  96 => 16,  90 => 15,  86 => 13,  75 => 10,  72 => 9,  54 => 8,  51 => 7,  48 => 6,  45 => 5,  43 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("{# @var ea \\EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext #}
{# @var field \\EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\FieldDto #}
{# @var entity \\EasyCor{# p\\Bundle\\EasyAdminBundle\\Dto\\EntityDto #}
{% if 'toMany' == field.customOptions.get('associationType') %}
    {% if 'detail' == ea.crud.currentPage %}
        {% set maxLi = field.customOptions.get('maxLi')  ?? 4 %}
        {% set toDisplay = field.customOptions.get('toDisplay')  ?? '' %}
        {% for row in field.value %}
            {% if loop.first %}
                <div{% if field.value|length > maxLi %} style=\"height:{{ (maxLi + 1) * 22.4 }}px; overflow:scroll;\"{% endif %}>
                <table><tbody>
            {% endif %}
            <tr><td>
                    <span class=\"pr-3\">
                        {% if toDisplay %}{{ attribute(row,toDisplay) }}{% else %}{{ row }}{% endif %}
                    </span>
                </td></tr>
            {% if loop.last %}
                </tbody></table>
                </div>
            {% endif %}
        {% endfor %}
    {% else %}
        <span class=\"badge badge-secondary\">{{ field.formattedValue }}</span>
    {% endif %}
{% else %}
    {% if field.customOptions.get('relatedUrl') is not null %}
        <a href=\"{{ field.customOptions.get('relatedUrl') }}\">{{ field.formattedValue }}</a>
    {% else %}
        {{ field.formattedValue }}
    {% endif %}
{% endif %}", "Bundles/EasyAdminBundle/crud/field/association.html.twig", "C:\\xampp\\apps\\test\\templates\\Bundles\\EasyAdminBundle\\crud\\field\\association.html.twig");
    }
}
