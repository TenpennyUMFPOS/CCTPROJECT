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

/* /mechanics.html.twig */
class __TwigTemplate_ee4144e8ab3e16907f413239d9232a4e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/mechanics.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/mechanics.html.twig"));

        $this->parent = $this->loadTemplate("user.html.twig", "/mechanics.html.twig", 1);
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


\t\t\t\t<li class=\"nav-item dropdown pe-3\">

\t\t\t\t\t<a class=\"nav-link nav-profile d-flex align-items-center pe-0\" href=\"#\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t<img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../build/images/logoothers/FT.jpg"), "html", null, true);
        echo "\" alt=\"Profile\" class=\"rounded-circle\">
\t\t\t\t\t\t<span class=\"d-none d-md-block dropdown-toggle ps-2\">";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "user", [], "any", false, false, false, 42), "fullname", [], "any", false, false, false, 42), "html", null, true);
        echo "</span>
\t\t\t\t\t</a>
\t\t\t\t\t<!-- End Profile Iamge Icon -->

\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow profile\">
\t\t\t\t\t\t<li class=\"dropdown-header\">
\t\t\t\t\t\t\t<h6>";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 48, $this->source); })()), "user", [], "any", false, false, false, 48), "fullname", [], "any", false, false, false, 48), "html", null, true);
        echo "</h6>
\t\t\t\t\t\t\t<span>";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "user", [], "any", false, false, false, 49), "hereas", [], "any", false, false, false, 49), "html", null, true);
        echo "</span>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t</li>


\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"dropdown-item d-flex align-items-center\" href=\"";
        // line 57
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
\t\t<div class=\"col-12\">
\t\t\t<h1>Search for Mechanics</h1>
\t\t\t<p>
\t\t\t\tThere are 
\t\t\t\t";
        // line 81
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 81, $this->source); })()), "user", [], "any", false, false, false, 81), "mechanics", [], "any", false, false, false, 81)), "html", null, true);
        echo "
\t\t\t\tmechanic(s) that are currently available
\t\t\t</p>
\t\t</div>
        ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 85, $this->source); })()), "user", [], "any", false, false, false, 85), "mechanics", [], "any", false, false, false, 85));
        foreach ($context['_seq'] as $context["_key"] => $context["mechanic"]) {
            // line 86
            echo "\t\t\t<div class=\"card\">
\t\t\t\t<div class=\"card-body profile-card pt-4 d-flex flex-column align-items-center\">

\t\t\t\t\t

\t\t\t\t\t\t<img src=\"";
            // line 91
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../build/images/logoothers/default.jpg"), "html", null, true);
            echo "\" alt=\"Profile\" class=\"rounded-circle\">


\t\t\t\t\t\t<h2>";
            // line 94
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mechanic"], "name", [], "any", false, false, false, 94), "html", null, true);
            echo "</h2>


\t\t\t\t\t\t<h3>";
            // line 97
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mechanic"], "speciality", [], "any", false, false, false, 97), "html", null, true);
            echo "<h3>


\t\t\t\t\t\t\t\t<div class=\"social-links mt-2\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"twitter\">
\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-twitter\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"facebook\">
\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-facebook\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"instagram\">
\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-instagram\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"linkedin\">
\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-linkedin\"></i>
\t\t\t\t\t\t\t\t\t</a>
                                    <a style=\"text-decoration:underline white;\" href=\"";
            // line 113
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("send");
            echo "\" class=\"linkedin\">
                                    <i class=\"bi bi-chat-text-fill\"></i>
                                    </a>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mechanic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        echo "\t\t\t</section>
\t\t</main>
\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "/mechanics.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 124,  229 => 113,  210 => 97,  204 => 94,  198 => 91,  191 => 86,  187 => 85,  180 => 81,  153 => 57,  142 => 49,  138 => 48,  129 => 42,  125 => 41,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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
\t\t<div class=\"col-12\">
\t\t\t<h1>Search for Mechanics</h1>
\t\t\t<p>
\t\t\t\tThere are 
\t\t\t\t{{app.user.mechanics|length}}
\t\t\t\tmechanic(s) that are currently available
\t\t\t</p>
\t\t</div>
        {% for mechanic in app.user.mechanics %}
\t\t\t<div class=\"card\">
\t\t\t\t<div class=\"card-body profile-card pt-4 d-flex flex-column align-items-center\">

\t\t\t\t\t

\t\t\t\t\t\t<img src=\"{{ asset('../build/images/logoothers/default.jpg') }}\" alt=\"Profile\" class=\"rounded-circle\">


\t\t\t\t\t\t<h2>{{mechanic.name}}</h2>


\t\t\t\t\t\t<h3>{{mechanic.speciality}}<h3>


\t\t\t\t\t\t\t\t<div class=\"social-links mt-2\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"twitter\">
\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-twitter\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"facebook\">
\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-facebook\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"instagram\">
\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-instagram\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"linkedin\">
\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-linkedin\"></i>
\t\t\t\t\t\t\t\t\t</a>
                                    <a style=\"text-decoration:underline white;\" href=\"{{path(\"send\")}}\" class=\"linkedin\">
                                    <i class=\"bi bi-chat-text-fill\"></i>
                                    </a>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
                {% endfor %}
\t\t\t</section>
\t\t</main>
\t{% endblock %}
", "/mechanics.html.twig", "C:\\Users\\21653\\Desktop\\backupppps\\cct_ce\\templates\\mechanics.html.twig");
    }
}
