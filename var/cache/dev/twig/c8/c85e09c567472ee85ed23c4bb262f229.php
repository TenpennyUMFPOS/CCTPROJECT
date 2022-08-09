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

/* registration/register.html.twig */
class __TwigTemplate_e0535835c517c9b1d969592018ad7c93 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Register
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
\t<main>
\t\t<div class=\"container\">

\t\t\t<section class=\"section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center\">

\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<!-- End Logo -->

\t\t\t\t\t\t\t<div class=\"card mb-3\">

\t\t\t\t\t\t\t\t<div class=\"card-body\">

\t\t\t\t\t\t\t\t\t<div class=\"pt-4 pb-2\">
\t\t\t\t\t\t\t\t\t\t<h5 class=\"card-title text-center pb-0 fs-4\">Create an Account</h5>
\t\t\t\t\t\t\t\t\t\t<p class=\"text-center small\">Enter your personal details to create account</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<form class=\"row g-3 needs-validation\"";
        // line 27
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 27, $this->source); })()), 'form_start');
        echo "
\t\t\t\t\t\t\t\t\t
                                    <div class=\"col-12\">
                                        
                                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 31, $this->source); })()), "fullname", [], "any", false, false, false, 31), 'row');
        echo "
                                        <div class=\"invalid-feedback\">Please, enter your name!</div>
                                    </div>
\t\t\t\t\t\t\t\t\t
                                    <div class=\"col-12\">
                                    
                                    <label>Email</label>
\t\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" id=\"yourPassword\" required ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 38, $this->source); })()), "email", [], "any", false, false, false, 38), 'widget');
        echo "
                                    <div class=\"invalid-feedback\">Please enter a valid Email adddress!</div>
                                    </div>
                                    <div class=\"col-12\">
\t\t\t\t\t\t\t\t\t";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 42, $this->source); })()), "region", [], "any", false, false, false, 42), 'row');
        echo "
                                    <div class=\"invalid-feedback\">Please, enter your Region!</div>
                                    </div>

                                    <div class=\"col-12\">
\t\t\t\t\t\t\t\t\t<label>Phone</label>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 49, $this->source); })()), "phone", [], "any", false, false, false, 49), 'widget');
        echo "
                                    <div class=\"invalid-feedback\">Please, enter your name!</div>
                                    </div>

                                    <div class=\"col-12\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 57, $this->source); })()), "hereas", [], "any", false, false, false, 57), 'row');
        echo "
                                    <div class=\"invalid-feedback\">Please, enter your name!</div>
                                    </div>
                                    <div class=\"col-12\">
\t\t\t\t\t\t\t\t\t";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 61, $this->source); })()), "plainPassword", [], "any", false, false, false, 61), 'row', ["label" => "Password"]);
        echo "
                                    <div class=\"invalid-feedback\">Please, enter your name!</div>
                                    </div>
                                    <div class=\"col-12\">
                                    <div class=\"form-check\">
\t\t\t\t\t\t\t\t\t";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 66, $this->source); })()), "agreeTerms", [], "any", false, false, false, 66), 'row');
        echo "
                                    </div>
                                    </div>
                                    
                                    <div class=\"col-12\">
\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary w-100\">Register</button>
                                    </div>
\t\t\t\t\t\t\t\t\t";
        // line 73
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 73, $this->source); })()), 'form_end');
        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</section>
\t\t\t\t\t<div></main>
\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 73,  171 => 66,  163 => 61,  156 => 57,  145 => 49,  135 => 42,  128 => 38,  118 => 31,  111 => 27,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Register
{% endblock %}

{% block body %}

\t<main>
\t\t<div class=\"container\">

\t\t\t<section class=\"section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center\">

\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<!-- End Logo -->

\t\t\t\t\t\t\t<div class=\"card mb-3\">

\t\t\t\t\t\t\t\t<div class=\"card-body\">

\t\t\t\t\t\t\t\t\t<div class=\"pt-4 pb-2\">
\t\t\t\t\t\t\t\t\t\t<h5 class=\"card-title text-center pb-0 fs-4\">Create an Account</h5>
\t\t\t\t\t\t\t\t\t\t<p class=\"text-center small\">Enter your personal details to create account</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<form class=\"row g-3 needs-validation\"{{ form_start(registrationForm) }}
\t\t\t\t\t\t\t\t\t
                                    <div class=\"col-12\">
                                        
                                        {{ form_row(registrationForm.fullname) }}
                                        <div class=\"invalid-feedback\">Please, enter your name!</div>
                                    </div>
\t\t\t\t\t\t\t\t\t
                                    <div class=\"col-12\">
                                    
                                    <label>Email</label>
\t\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" id=\"yourPassword\" required {{ form_widget(registrationForm.email) }}
                                    <div class=\"invalid-feedback\">Please enter a valid Email adddress!</div>
                                    </div>
                                    <div class=\"col-12\">
\t\t\t\t\t\t\t\t\t{{ form_row(registrationForm.region) }}
                                    <div class=\"invalid-feedback\">Please, enter your Region!</div>
                                    </div>

                                    <div class=\"col-12\">
\t\t\t\t\t\t\t\t\t<label>Phone</label>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t{{ form_widget(registrationForm.phone) }}
                                    <div class=\"invalid-feedback\">Please, enter your name!</div>
                                    </div>

                                    <div class=\"col-12\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t{{ form_row(registrationForm.hereas) }}
                                    <div class=\"invalid-feedback\">Please, enter your name!</div>
                                    </div>
                                    <div class=\"col-12\">
\t\t\t\t\t\t\t\t\t{{ form_row(registrationForm.plainPassword, { label: 'Password' }) }}
                                    <div class=\"invalid-feedback\">Please, enter your name!</div>
                                    </div>
                                    <div class=\"col-12\">
                                    <div class=\"form-check\">
\t\t\t\t\t\t\t\t\t{{ form_row(registrationForm.agreeTerms) }}
                                    </div>
                                    </div>
                                    
                                    <div class=\"col-12\">
\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary w-100\">Register</button>
                                    </div>
\t\t\t\t\t\t\t\t\t{{ form_end(registrationForm) }}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</section>
\t\t\t\t\t<div></main>
\t\t\t\t{% endblock %}
", "registration/register.html.twig", "C:\\Users\\21653\\Desktop\\backupppps\\cct_ce\\templates\\registration\\register.html.twig");
    }
}
