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

/* @styles/global.scss */
class __TwigTemplate_177bbbd342011b57ed672a80d2ee9dd1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@styles/global.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@styles/global.scss"));

        // line 1
        echo "\$green:   #FEEAA6 !default;
\$cyan:    #DE9151 !default;
\$gray-900: #333333 !default;

@import \"bootstrap/scss/bootstrap\";
@import \"js-datepicker/src/datepicker\";

body{
  font-family: 'Antique', sans-serif;
  color: white;
}
.title{
  font-family: 'Archane', sans-serif;
}";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@styles/global.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("\$green:   #FEEAA6 !default;
\$cyan:    #DE9151 !default;
\$gray-900: #333333 !default;

@import \"bootstrap/scss/bootstrap\";
@import \"js-datepicker/src/datepicker\";

body{
  font-family: 'Antique', sans-serif;
  color: white;
}
.title{
  font-family: 'Archane', sans-serif;
}", "@styles/global.scss", "C:\\xampp\\apps\\test\\assets\\styles\\global.scss");
    }
}
