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

/* user/editprofile.html.twig */
class __TwigTemplate_dd9d92c1d45379d90a89117d66d6fb28 extends Template
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
        return "user.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/editprofile.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/editprofile.html.twig"));

        $this->parent = $this->loadTemplate("user.html.twig", "user/editprofile.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "CCT";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<header id=\"header\" class=\"header fixed-top d-flex align-items-center\">

\t\t<div class=\"d-flex align-items-center justify-content-between\">
\t\t\t<a href=\"#\" class=\"logo d-flex align-items-center\">
\t\t\t\t<img src=\"assets/img/logoCCT.PNG\" alt=\"\">
\t\t\t\t<span class=\"d-none d-lg-block titleP\">CarComponentTool</span>
\t\t\t</a>
\t\t\t<i class=\"bi bi-list toggle-sidebar-btn\"></i>
\t\t</div>
\t\t<!-- End Logo -->

\t\t<div class=\"search-bar\">
\t\t\t<form class=\"search-form d-flex align-items-center\" method=\"POST\" action=\"#\">
\t\t\t\t<input type=\"text\" name=\"query\" placeholder=\"Search\" title=\"Enter search keyword\">
\t\t\t\t<button type=\"submit\" title=\"Search\">
\t\t\t\t\t<i class=\"bi bi-search\"></i>
\t\t\t\t</button>
\t\t\t</form>
\t\t</div>
\t\t<!-- End Search Bar -->

\t\t<nav class=\"header-nav ms-auto\">
\t\t\t<ul class=\"d-flex align-items-center\">

\t\t\t\t<li class=\"nav-item d-block d-lg-none\">
\t\t\t\t\t<a class=\"nav-link nav-icon search-bar-toggle \" href=\"#\">
\t\t\t\t\t\t<i class=\"bi bi-search\"></i>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<!-- End Search Icon-->

\t\t\t

\t\t\t\t

\t\t\t\t<li class=\"nav-item dropdown pe-3\">

\t\t\t\t\t<a class=\"nav-link nav-profile d-flex align-items-center pe-0\" href=\"#\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t<img src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../build/images/logoothers/FT.jpg"), "html", null, true);
        echo "\" alt=\"Profile\" class=\"rounded-circle\">
\t\t\t\t\t\t<span class=\"d-none d-md-block dropdown-toggle ps-2\">";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 43, $this->source); })()), "user", [], "any", false, false, false, 43), "fullname", [], "any", false, false, false, 43), "html", null, true);
        echo "</span>
\t\t\t\t\t</a>
\t\t\t\t\t<!-- End Profile Iamge Icon -->

\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow profile\">
\t\t\t\t\t\t<li class=\"dropdown-header\">
\t\t\t\t\t\t\t<h6>";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "user", [], "any", false, false, false, 49), "fullname", [], "any", false, false, false, 49), "html", null, true);
        echo "</h6>
\t\t\t\t\t\t\t<span>";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "user", [], "any", false, false, false, 50), "hereas", [], "any", false, false, false, 50), "html", null, true);
        echo "</span>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t</li>


\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"dropdown-item d-flex align-items-center\" href=\"";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-box-arrow-right\"></i>
\t\t\t\t\t\t\t\t<span>Sign Out</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t</ul>
\t\t\t\t\t<!-- End Profile Dropdown Items -->
\t\t\t\t</li>
\t\t\t\t<!-- End Profile Nav -->

\t\t\t</ul>
\t\t</nav>
\t\t<!-- End Icons Navigation -->

\t</header>
\t<!-- End Header -->
\t<main id=\"main\" class=\"main\">
\t\t<section class=\"section profile\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-xl-8\">
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"card-body pt-3\">
\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"tab-pane fade show active profile-overview\" id=\"profile-overview\">

\t\t\t\t\t\t\t\t<!-- Profile Edit Form -->
\t\t\t\t\t\t\t\t";
        // line 85
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), 'form_start');
        echo "
\t\t\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t\t\t<label for=\"fullName\" class=\"col-md-4 col-lg-3 col-form-label\">Full Name</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-8 col-lg-9\">
\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" id=\"fullName\" ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "Fullname", [], "any", false, false, false, 89), 'widget');
        echo "
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t\t\t<label for=\"region\" class=\"col-md-4 col-lg-3 col-form-label\">Region</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-8 col-lg-9\">
\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" id=\"region\" ";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "region", [], "any", false, false, false, 96), 'widget');
        echo "
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t\t\t<label for=\"Phone\" class=\"col-md-4 col-lg-3 col-form-label\">Phone</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-8 col-lg-9\">
\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" id=\"Phone\" ";
        // line 104
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), "phone", [], "any", false, false, false, 104), 'widget');
        echo "
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t\t\t<label for=\"Twitter\" class=\"col-md-4 col-lg-3 col-form-label\">Twitter Profile</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-8 col-lg-9\">
\t\t\t\t\t\t\t\t\t\t<input name=\"twitter\" type=\"text\" class=\"form-control\" id=\"Twitter\" value=\"https://twitter.com/#\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t\t\t<label for=\"Facebook\" class=\"col-md-4 col-lg-3 col-form-label\">Facebook Profile</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-8 col-lg-9\">
\t\t\t\t\t\t\t\t\t\t<input name=\"facebook\" type=\"text\" class=\"form-control\" id=\"Facebook\" value=\"https://facebook.com/#\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t\t\t<label for=\"Instagram\" class=\"col-md-4 col-lg-3 col-form-label\">Instagram Profile</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-8 col-lg-9\">
\t\t\t\t\t\t\t\t\t\t<input name=\"instagram\" type=\"text\" class=\"form-control\" id=\"Instagram\" value=\"https://instagram.com/#\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t\t\t<label for=\"Linkedin\" class=\"col-md-4 col-lg-3 col-form-label\">Linkedin Profile</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-8 col-lg-9\">
\t\t\t\t\t\t\t\t\t\t<input name=\"linkedin\" type=\"text\" class=\"form-control\" id=\"Linkedin\" value=\"https://linkedin.com/#\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\" ";
        // line 138
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 138, $this->source); })()), "Save", [], "any", false, false, false, 138), 'widget');
        echo "
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        // line 141
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 141, $this->source); })()), 'form_end');
        echo "

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>

\t\t</main>
\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "user/editprofile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 141,  251 => 138,  214 => 104,  203 => 96,  193 => 89,  186 => 85,  156 => 58,  145 => 50,  141 => 49,  132 => 43,  128 => 42,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'user.html.twig' %}
{% block title %}CCT{% endblock %}
{% block body %}
\t<header id=\"header\" class=\"header fixed-top d-flex align-items-center\">

\t\t<div class=\"d-flex align-items-center justify-content-between\">
\t\t\t<a href=\"#\" class=\"logo d-flex align-items-center\">
\t\t\t\t<img src=\"assets/img/logoCCT.PNG\" alt=\"\">
\t\t\t\t<span class=\"d-none d-lg-block titleP\">CarComponentTool</span>
\t\t\t</a>
\t\t\t<i class=\"bi bi-list toggle-sidebar-btn\"></i>
\t\t</div>
\t\t<!-- End Logo -->

\t\t<div class=\"search-bar\">
\t\t\t<form class=\"search-form d-flex align-items-center\" method=\"POST\" action=\"#\">
\t\t\t\t<input type=\"text\" name=\"query\" placeholder=\"Search\" title=\"Enter search keyword\">
\t\t\t\t<button type=\"submit\" title=\"Search\">
\t\t\t\t\t<i class=\"bi bi-search\"></i>
\t\t\t\t</button>
\t\t\t</form>
\t\t</div>
\t\t<!-- End Search Bar -->

\t\t<nav class=\"header-nav ms-auto\">
\t\t\t<ul class=\"d-flex align-items-center\">

\t\t\t\t<li class=\"nav-item d-block d-lg-none\">
\t\t\t\t\t<a class=\"nav-link nav-icon search-bar-toggle \" href=\"#\">
\t\t\t\t\t\t<i class=\"bi bi-search\"></i>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<!-- End Search Icon-->

\t\t\t

\t\t\t\t

\t\t\t\t<li class=\"nav-item dropdown pe-3\">

\t\t\t\t\t<a class=\"nav-link nav-profile d-flex align-items-center pe-0\" href=\"#\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t<img src=\"{{ asset('../build/images/logoothers/FT.jpg') }}\" alt=\"Profile\" class=\"rounded-circle\">
\t\t\t\t\t\t<span class=\"d-none d-md-block dropdown-toggle ps-2\">{{app.user.fullname}}</span>
\t\t\t\t\t</a>
\t\t\t\t\t<!-- End Profile Iamge Icon -->

\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow profile\">
\t\t\t\t\t\t<li class=\"dropdown-header\">
\t\t\t\t\t\t\t<h6>{{app.user.fullname}}</h6>
\t\t\t\t\t\t\t<span>{{app.user.hereas}}</span>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t</li>


\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"dropdown-item d-flex align-items-center\" href=\"{{ path('app_logout') }}\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-box-arrow-right\"></i>
\t\t\t\t\t\t\t\t<span>Sign Out</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t</ul>
\t\t\t\t\t<!-- End Profile Dropdown Items -->
\t\t\t\t</li>
\t\t\t\t<!-- End Profile Nav -->

\t\t\t</ul>
\t\t</nav>
\t\t<!-- End Icons Navigation -->

\t</header>
\t<!-- End Header -->
\t<main id=\"main\" class=\"main\">
\t\t<section class=\"section profile\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-xl-8\">
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"card-body pt-3\">
\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"tab-pane fade show active profile-overview\" id=\"profile-overview\">

\t\t\t\t\t\t\t\t<!-- Profile Edit Form -->
\t\t\t\t\t\t\t\t{{form_start(form)}}
\t\t\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t\t\t<label for=\"fullName\" class=\"col-md-4 col-lg-3 col-form-label\">Full Name</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-8 col-lg-9\">
\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" id=\"fullName\" {{form_widget(form.Fullname)}}
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t\t\t<label for=\"region\" class=\"col-md-4 col-lg-3 col-form-label\">Region</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-8 col-lg-9\">
\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" id=\"region\" {{form_widget(form.region)}}
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t\t\t<label for=\"Phone\" class=\"col-md-4 col-lg-3 col-form-label\">Phone</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-8 col-lg-9\">
\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" id=\"Phone\" {{form_widget(form.phone)}}
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t\t\t<label for=\"Twitter\" class=\"col-md-4 col-lg-3 col-form-label\">Twitter Profile</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-8 col-lg-9\">
\t\t\t\t\t\t\t\t\t\t<input name=\"twitter\" type=\"text\" class=\"form-control\" id=\"Twitter\" value=\"https://twitter.com/#\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t\t\t<label for=\"Facebook\" class=\"col-md-4 col-lg-3 col-form-label\">Facebook Profile</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-8 col-lg-9\">
\t\t\t\t\t\t\t\t\t\t<input name=\"facebook\" type=\"text\" class=\"form-control\" id=\"Facebook\" value=\"https://facebook.com/#\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t\t\t<label for=\"Instagram\" class=\"col-md-4 col-lg-3 col-form-label\">Instagram Profile</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-8 col-lg-9\">
\t\t\t\t\t\t\t\t\t\t<input name=\"instagram\" type=\"text\" class=\"form-control\" id=\"Instagram\" value=\"https://instagram.com/#\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t\t\t<label for=\"Linkedin\" class=\"col-md-4 col-lg-3 col-form-label\">Linkedin Profile</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-8 col-lg-9\">
\t\t\t\t\t\t\t\t\t\t<input name=\"linkedin\" type=\"text\" class=\"form-control\" id=\"Linkedin\" value=\"https://linkedin.com/#\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\" {{form_widget(form.Save)}}
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{{form_end(form)}}

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>

\t\t</main>
\t{% endblock %}
", "user/editprofile.html.twig", "C:\\Users\\21653\\Desktop\\backupppps\\cct_ce\\templates\\user\\editprofile.html.twig");
    }
}
