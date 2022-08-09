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

/* /mycars.html.twig */
class __TwigTemplate_3137d6cdfa8012783fa55997232c4e11 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/mycars.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/mycars.html.twig"));

        $this->parent = $this->loadTemplate("user.html.twig", "/mycars.html.twig", 1);
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

\t\t\t\t

\t\t\t\t

\t\t\t\t<li class=\"nav-item dropdown pe-3\">

\t\t\t\t\t<a class=\"nav-link nav-profile d-flex align-items-center pe-0\" href=\"#\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t<img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../build/images/logoothers/FT.jpg"), "html", null, true);
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

\t\t\t\t<div class=\"col-xl-8\">

\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"card-body pt-3\">
\t\t\t\t\t\t\t<!-- Bordered Tabs -->
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"tab-content pt-2\">
\t\t\t\t\t\t\t<h1 style=\"color:#012970;\"> My cars</h1>
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<hr style=\"color:blue;\" >
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div style=\"margin-top:10px;\"  class=\"tab-pane fade show active profile-overview\" id=\"profile-overview\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t";
        // line 99
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 99, $this->source); })()), "user", [], "any", false, false, false, 99), "cars", [], "any", false, false, false, 99));
        foreach ($context['_seq'] as $context["_key"] => $context["car"]) {
            // line 100
            echo "
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-3 col-md-4 label \">Brand</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-9 col-md-8\">";
            // line 103
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["car"], "brand", [], "any", false, false, false, 103), "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-3 col-md-4 label\">Distance crossed</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-9 col-md-8\">";
            // line 109
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["car"], "distance", [], "any", false, false, false, 109), "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-3 col-md-4 label\">Car Power</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-9 col-md-8\">";
            // line 115
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["car"], "power", [], "any", false, false, false, 115), "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<hr style=\"color:blue;\" class=\"dropdown-divider\">
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['car'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        echo "\t\t\t\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 124
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_add_car");
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Add a new Car</button>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
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
        return "/mycars.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 124,  239 => 123,  225 => 115,  216 => 109,  207 => 103,  202 => 100,  198 => 99,  156 => 60,  145 => 52,  141 => 51,  132 => 45,  128 => 44,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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

\t\t\t\t

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
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"card-body pt-3\">
\t\t\t\t\t\t\t<!-- Bordered Tabs -->
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"tab-content pt-2\">
\t\t\t\t\t\t\t<h1 style=\"color:#012970;\"> My cars</h1>
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<hr style=\"color:blue;\" >
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div style=\"margin-top:10px;\"  class=\"tab-pane fade show active profile-overview\" id=\"profile-overview\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t{% for car in app.user.cars %}

\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-3 col-md-4 label \">Brand</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-9 col-md-8\">{{car.brand}}</div>
\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-3 col-md-4 label\">Distance crossed</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-9 col-md-8\">{{car.distance}}</div>
\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-3 col-md-4 label\">Car Power</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-9 col-md-8\">{{car.power}}</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<hr style=\"color:blue;\" class=\"dropdown-divider\">
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{path('user_add_car')}}\">
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Add a new Car</button>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
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
", "/mycars.html.twig", "C:\\Users\\21653\\Desktop\\backupppps\\cct_ce\\templates\\mycars.html.twig");
    }
}
