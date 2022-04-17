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

/* @styles/app.css */
class __TwigTemplate_1d82a54e2fdabb7c094af04e12aa9c1b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@styles/app.css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@styles/app.css"));

        // line 1
        echo "@font-face {
    font-family: 'Antique';
    src: url('./fonts/Antique-Regular.otf') format('opentype');
}

@font-face {
    font-family: 'Archane';
    src: url('./fonts/Archane.woff2') format('woff2');
}
.background-home{
    background: url(\"./img/homepage/img-homepage.webp\") center;
    background-size: cover;
    height: 450px;
    border-radius: 10px;
}
.background-end{
    background: url(\"./img/homepage/img-backgroundend.webp\") center;
    background-size: cover;
    height: 450px;
    border-radius: 10px;
}
.title-background{
    padding: 10px;
    backdrop-filter: brightness(40%);
}";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@styles/app.css";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("@font-face {
    font-family: 'Antique';
    src: url('./fonts/Antique-Regular.otf') format('opentype');
}

@font-face {
    font-family: 'Archane';
    src: url('./fonts/Archane.woff2') format('woff2');
}
.background-home{
    background: url(\"./img/homepage/img-homepage.webp\") center;
    background-size: cover;
    height: 450px;
    border-radius: 10px;
}
.background-end{
    background: url(\"./img/homepage/img-backgroundend.webp\") center;
    background-size: cover;
    height: 450px;
    border-radius: 10px;
}
.title-background{
    padding: 10px;
    backdrop-filter: brightness(40%);
}", "@styles/app.css", "C:\\xampp\\apps\\test\\assets\\styles\\app.css");
    }
}
