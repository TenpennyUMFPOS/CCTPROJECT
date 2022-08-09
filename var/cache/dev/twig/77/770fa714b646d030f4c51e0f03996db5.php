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

/* security/login.html.twig */
class __TwigTemplate_445d213940f9194f3ff3831272301e1d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
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

        echo "Log in!
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
        echo "\t<main>
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
\t\t\t\t\t\t\t\t\t\t<h5 class=\"card-title text-center pb-0 fs-4\">Login to Your Account</h5>
\t\t\t\t\t\t\t\t\t\t<p class=\"text-center small\">Enter your email & password to login</p>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t
                                    <form method=\"post\" class=\"row g-3 needs-validation\">
\t\t\t\t\t\t\t\t\t\t";
        // line 29
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 29, $this->source); })())) {
            // line 30
            echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 30, $this->source); })()), "messageKey", [], "any", false, false, false, 30), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 30, $this->source); })()), "messageData", [], "any", false, false, false, 30), "security"), "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 32
        echo "
\t\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"inputEmail\" class=\"form-label\">Email</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group has-validation\">

\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"email\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 37, $this->source); })()), "html", null, true);
        echo "\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" required autofocus>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\" id=\"inputGroupPrepend\">@</span>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"invalid-feedback\">Please enter your email.</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"inputPassword\" class=\"form-label\">Password</label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"invalid-feedback\">Please enter your password!</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" name=\"remember\" value=\"true\" id=\"rememberMe\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"rememberMe\">Remember me</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<input
\t\t\t\t\t\t\t\t\t\ttype=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">

\t\t\t\t\t\t\t\t\t\t";
        // line 68
        echo "\t\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-lg btn-primary w-100\" type=\"submit\">
\t\t\t\t\t\t\t\t\t\t\t\tSign in
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t\t<p class=\"small mb-0\">Don't have account?
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 75
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\">Create an account</a>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</form>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</section>

\t\t</div>
\t</main>
\t<!-- End #main -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 75,  155 => 68,  150 => 56,  128 => 37,  121 => 32,  115 => 30,  113 => 29,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Log in!
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
\t\t\t\t\t\t\t\t\t\t<h5 class=\"card-title text-center pb-0 fs-4\">Login to Your Account</h5>
\t\t\t\t\t\t\t\t\t\t<p class=\"text-center small\">Enter your email & password to login</p>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t
                                    <form method=\"post\" class=\"row g-3 needs-validation\">
\t\t\t\t\t\t\t\t\t\t{% if error %}
\t\t\t\t\t\t\t\t\t\t\t<div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
\t\t\t\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"inputEmail\" class=\"form-label\">Email</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group has-validation\">

\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" required autofocus>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\" id=\"inputGroupPrepend\">@</span>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"invalid-feedback\">Please enter your email.</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"inputPassword\" class=\"form-label\">Password</label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"invalid-feedback\">Please enter your password!</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" name=\"remember\" value=\"true\" id=\"rememberMe\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"rememberMe\">Remember me</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<input
\t\t\t\t\t\t\t\t\t\ttype=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">

\t\t\t\t\t\t\t\t\t\t{#
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        Uncomment this section and add a remember_me option below your firewall to activate remember me functionality.
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        See https://symfony.com/doc/current/security/remember_me.html
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        <div class=\"checkbox mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            <label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                <input type=\"checkbox\" name=\"_remember_me\"> Remember me
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    #}
\t\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-lg btn-primary w-100\" type=\"submit\">
\t\t\t\t\t\t\t\t\t\t\t\tSign in
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t\t<p class=\"small mb-0\">Don't have account?
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{path('app_register')}}\">Create an account</a>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</form>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</section>

\t\t</div>
\t</main>
\t<!-- End #main -->
{% endblock %}
", "security/login.html.twig", "C:\\Users\\21653\\Desktop\\backupppps\\cct_ce\\templates\\security\\login.html.twig");
    }
}
