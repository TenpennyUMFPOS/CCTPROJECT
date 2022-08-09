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

/* user/index.html.twig */
class __TwigTemplate_836b5afdd2a4352bbeed70e1b0013e68 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent = $this->loadTemplate("user.html.twig", "user/index.html.twig", 1);
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

        echo "CCT";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
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

\t\t\t\t<!-- End Notification Nav -->

\t\t\t\t

\t\t\t\t<li class=\"nav-item dropdown pe-3\">

\t\t\t\t\t<a class=\"nav-link nav-profile d-flex align-items-center pe-0\" href=\"#\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t<img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/logoothers/FT.jpg"), "html", null, true);
        echo "\" alt=\"Profile\" class=\"rounded-circle\">
\t\t\t\t\t\t<span class=\"d-none d-md-block dropdown-toggle ps-2\">";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "user", [], "any", false, false, false, 45), "fullname", [], "any", false, false, false, 45), "html", null, true);
        echo "</span>
\t\t\t\t\t</a>
\t\t\t\t\t<!-- End Profile Iamge Icon -->

\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow profile\">
\t\t\t\t\t\t<li class=\"dropdown-header\">
\t\t\t\t\t\t\t<h6>";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "user", [], "any", false, false, false, 51), "fullname", [], "any", false, false, false, 51), "html", null, true);
        echo "</h6>
\t\t\t\t\t\t\t<span>";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "user", [], "any", false, false, false, 52), "hereas", [], "any", false, false, false, 52), "html", null, true);
        echo "</span>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t</li>


\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"dropdown-item d-flex align-items-center\" href=\"";
        // line 60
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
\t\t\t\t<div class=\"col-xl-4\">

\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"card-body profile-card pt-4 d-flex flex-column align-items-center\">

\t\t\t\t\t\t\t<img src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/logoothers/FT.jpg"), "html", null, true);
        echo "\" alt=\"Profile\" class=\"rounded-circle\">
\t\t\t\t\t\t\t<h2>";
        // line 87
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 87, $this->source); })()), "user", [], "any", false, false, false, 87), "fullname", [], "any", false, false, false, 87), "html", null, true);
        echo "</h2>
\t\t\t\t\t\t\t<h3>";
        // line 88
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 88, $this->source); })()), "user", [], "any", false, false, false, 88), "hereas", [], "any", false, false, false, 88), "html", null, true);
        echo "</h3>
\t\t\t\t\t\t\t<div class=\"social-links mt-2\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"twitter\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-twitter\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"facebook\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-facebook\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"instagram\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-instagram\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"linkedin\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-linkedin\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t\t<div class=\"col-xl-8\">

\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"card-body pt-3\">
\t\t\t\t\t\t\t<!-- Bordered Tabs -->
\t\t\t\t\t\t\t<ul class=\"nav nav-tabs nav-tabs-bordered\">

\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 117
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user");
        echo "\">
\t\t\t\t\t\t\t\t\t\t<button style=\"text-decoration:underline white;\" class=\"nav-link active\" data-bs-toggle=\"tab\" data-bs-target=\"#profile-overview\">Overview</button>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 123
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_editprofile");
        echo "\">
\t\t\t\t\t\t\t\t\t\t<button style=\"text-decoration:underline white;\" class=\"nav-link\" data-bs-toggle=\"tab\" data-bs-target=\"#profile-edit\">Edit Profile</button>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<div class=\"tab-content pt-2\">

\t\t\t\t\t\t\t\t<div class=\"tab-pane fade show active profile-overview\" id=\"profile-overview\">

\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">Profile Details</h5>

\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-3 col-md-4 label \">Full Name</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-9 col-md-8\">";
        // line 139
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 139, $this->source); })()), "user", [], "any", false, false, false, 139), "fullname", [], "any", false, false, false, 139), "html", null, true);
        echo "</div>
\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-3 col-md-4 label\">Region</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-9 col-md-8\">";
        // line 145
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 145, $this->source); })()), "user", [], "any", false, false, false, 145), "region", [], "any", false, false, false, 145), "html", null, true);
        echo "</div>
\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-3 col-md-4 label\">Phone</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-9 col-md-8\">";
        // line 151
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 151, $this->source); })()), "user", [], "any", false, false, false, 151), "phone", [], "any", false, false, false, 151), "html", null, true);
        echo "</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-3 col-md-4 label\">Email</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-9 col-md-8\">";
        // line 156
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 156, $this->source); })()), "user", [], "any", false, false, false, 156), "email", [], "any", false, false, false, 156), "html", null, true);
        echo "</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- End Bordered Tabs -->

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t</main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  279 => 156,  271 => 151,  262 => 145,  253 => 139,  234 => 123,  225 => 117,  193 => 88,  189 => 87,  185 => 86,  156 => 60,  145 => 52,  141 => 51,  132 => 45,  128 => 44,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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

\t\t\t\t<!-- End Notification Nav -->

\t\t\t\t

\t\t\t\t<li class=\"nav-item dropdown pe-3\">

\t\t\t\t\t<a class=\"nav-link nav-profile d-flex align-items-center pe-0\" href=\"#\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t<img src=\"{{ asset('build/images/logoothers/FT.jpg') }}\" alt=\"Profile\" class=\"rounded-circle\">
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
\t\t\t\t<div class=\"col-xl-4\">

\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"card-body profile-card pt-4 d-flex flex-column align-items-center\">

\t\t\t\t\t\t\t<img src=\"{{ asset('build/images/logoothers/FT.jpg') }}\" alt=\"Profile\" class=\"rounded-circle\">
\t\t\t\t\t\t\t<h2>{{app.user.fullname}}</h2>
\t\t\t\t\t\t\t<h3>{{app.user.hereas}}</h3>
\t\t\t\t\t\t\t<div class=\"social-links mt-2\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"twitter\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-twitter\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"facebook\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-facebook\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"instagram\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-instagram\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"linkedin\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-linkedin\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t\t<div class=\"col-xl-8\">

\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"card-body pt-3\">
\t\t\t\t\t\t\t<!-- Bordered Tabs -->
\t\t\t\t\t\t\t<ul class=\"nav nav-tabs nav-tabs-bordered\">

\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a href=\"{{path('app_user')}}\">
\t\t\t\t\t\t\t\t\t\t<button style=\"text-decoration:underline white;\" class=\"nav-link active\" data-bs-toggle=\"tab\" data-bs-target=\"#profile-overview\">Overview</button>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a href=\"{{path('app_editprofile')}}\">
\t\t\t\t\t\t\t\t\t\t<button style=\"text-decoration:underline white;\" class=\"nav-link\" data-bs-toggle=\"tab\" data-bs-target=\"#profile-edit\">Edit Profile</button>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<div class=\"tab-content pt-2\">

\t\t\t\t\t\t\t\t<div class=\"tab-pane fade show active profile-overview\" id=\"profile-overview\">

\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">Profile Details</h5>

\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-3 col-md-4 label \">Full Name</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-9 col-md-8\">{{app.user.fullname}}</div>
\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-3 col-md-4 label\">Region</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-9 col-md-8\">{{app.user.region}}</div>
\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-3 col-md-4 label\">Phone</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-9 col-md-8\">{{app.user.phone}}</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-3 col-md-4 label\">Email</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-9 col-md-8\">{{app.user.email}}</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- End Bordered Tabs -->

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t</main>
{% endblock %}
", "user/index.html.twig", "C:\\Users\\21653\\Desktop\\backupppps\\cct_ce\\templates\\user\\index.html.twig");
    }
}
