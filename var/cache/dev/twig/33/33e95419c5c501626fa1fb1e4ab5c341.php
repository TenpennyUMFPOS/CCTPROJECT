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

/* messages/received.html.twig */
class __TwigTemplate_e7b7400c186efe14ba4e4d50d7c6c8d6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "messages/received.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "messages/received.html.twig"));

        $this->parent = $this->loadTemplate("user.html.twig", "messages/received.html.twig", 1);
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
        echo "<header id=\"header\" class=\"header fixed-top d-flex align-items-center\">

\t<div class=\"d-flex align-items-center justify-content-between\">
\t\t<a href=\"#\" class=\"logo d-flex align-items-center\">
\t\t\t<img src=\"assets/img/logoCCT.PNG\" alt=\"\">
\t\t\t<span class=\"d-none d-lg-block titleP\">CarComponentTool</span>
\t\t</a>
\t\t<i class=\"bi bi-list toggle-sidebar-btn\"></i>
\t</div>
\t<!-- End Logo -->

\t<div class=\"search-bar\">
\t\t<form class=\"search-form d-flex align-items-center\" method=\"POST\" action=\"#\">
\t\t\t<input type=\"text\" name=\"query\" placeholder=\"Search\" title=\"Enter search keyword\">
\t\t\t<button type=\"submit\" title=\"Search\">
\t\t\t\t<i class=\"bi bi-search\"></i>
\t\t\t</button>
\t\t</form>
\t</div>
\t<!-- End Search Bar -->

\t<nav class=\"header-nav ms-auto\">
\t\t<ul class=\"d-flex align-items-center\">

\t\t\t<li class=\"nav-item d-block d-lg-none\">
\t\t\t\t<a class=\"nav-link nav-icon search-bar-toggle \" href=\"#\">
\t\t\t\t\t<i class=\"bi bi-search\"></i>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<!-- End Search Icon-->

\t\t\t

\t\t\t

\t\t\t<li class=\"nav-item dropdown pe-3\">

\t\t\t\t<a class=\"nav-link nav-profile d-flex align-items-center pe-0\" href=\"#\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t<img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../build/images/logoothers/FT.jpg"), "html", null, true);
        echo "\" alt=\"Profile\" class=\"rounded-circle\">
\t\t\t\t\t<span class=\"d-none d-md-block dropdown-toggle ps-2\">";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "user", [], "any", false, false, false, 45), "fullname", [], "any", false, false, false, 45), "html", null, true);
        echo "</span>
\t\t\t\t</a>
\t\t\t\t<!-- End Profile Iamge Icon -->

\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow profile\">
\t\t\t\t\t<li class=\"dropdown-header\">
\t\t\t\t\t\t<h6>";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "user", [], "any", false, false, false, 51), "fullname", [], "any", false, false, false, 51), "html", null, true);
        echo "</h6>
\t\t\t\t\t\t<span>";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "user", [], "any", false, false, false, 52), "hereas", [], "any", false, false, false, 52), "html", null, true);
        echo "</span>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t</li>


\t\t\t\t\t<li>
\t\t\t\t\t\t<a class=\"dropdown-item d-flex align-items-center\" href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">
\t\t\t\t\t\t\t<i class=\"bi bi-box-arrow-right\"></i>
\t\t\t\t\t\t\t<span>Sign Out</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>

\t\t\t\t</ul>
\t\t\t\t<!-- End Profile Dropdown Items -->
\t\t\t</li>
\t\t\t<!-- End Profile Nav -->

\t\t</ul>
\t</nav>
\t<!-- End Icons Navigation -->

</header>
<!-- End Header -->

<main id=\"main\" class=\"main\">

\t<div class=\"row\">
\t\t<div class=\"col-12\">
\t\t\t<h1>MailBox</h1>
\t\t\t<p>
\t\t\t\tYou have reecieved a total of
\t\t\t\t";
        // line 85
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 85, $this->source); })()), "user", [], "any", false, false, false, 85), "received", [], "any", false, false, false, 85)), "html", null, true);
        echo "
\t\t\t\tmessages.
\t\t\t</p>
\t\t</div>


\t</div>
\t";
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 92, $this->source); })()), "user", [], "any", false, false, false, 92), "received", [], "any", false, false, false, 92));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 93
            echo "\t\t";
            $context["bold"] = "";
            // line 94
            echo "\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["message"], "isRead", [], "any", false, false, false, 94) == 0)) {
                // line 95
                echo "\t\t\t";
                $context["bold"] = " fw-bold";
                // line 96
                echo "\t\t";
            }
            // line 97
            echo "\t\t<div class=\"card\">
\t\t\t<div class=\"card-body\">
\t\t\t\t<h5 class=\"card-title ";
            // line 99
            echo twig_escape_filter($this->env, (isset($context["bold"]) || array_key_exists("bold", $context) ? $context["bold"] : (function () { throw new RuntimeError('Variable "bold" does not exist.', 99, $this->source); })()), "html", null, true);
            echo "\">You got a new Message from \" ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "sender", [], "any", false, false, false, 99), "fullname", [], "any", false, false, false, 99), "html", null, true);
            echo " \" at ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "createdAt", [], "any", false, false, false, 99)), "html", null, true);
            echo " titled  <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("read", ["id" => twig_get_attribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 99)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "title", [], "any", false, false, false, 99), "html", null, true);
            echo "</a>
        </h5>
\t\t\t\t
\t\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t\t<a style=\"float : right\" href=\"";
            // line 106
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete", ["id" => twig_get_attribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 106)]), "html", null, true);
            echo "\" class=\"btn btn-danger\">Delete</a>
\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<!-- End Vertically centered Modal-->";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "</main>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "messages/received.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 112,  232 => 106,  214 => 99,  210 => 97,  207 => 96,  204 => 95,  201 => 94,  198 => 93,  194 => 92,  184 => 85,  156 => 60,  145 => 52,  141 => 51,  132 => 45,  128 => 44,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'user.html.twig' %}

{% block title %}CCT{% endblock %}

{% block body %}
<header id=\"header\" class=\"header fixed-top d-flex align-items-center\">

\t<div class=\"d-flex align-items-center justify-content-between\">
\t\t<a href=\"#\" class=\"logo d-flex align-items-center\">
\t\t\t<img src=\"assets/img/logoCCT.PNG\" alt=\"\">
\t\t\t<span class=\"d-none d-lg-block titleP\">CarComponentTool</span>
\t\t</a>
\t\t<i class=\"bi bi-list toggle-sidebar-btn\"></i>
\t</div>
\t<!-- End Logo -->

\t<div class=\"search-bar\">
\t\t<form class=\"search-form d-flex align-items-center\" method=\"POST\" action=\"#\">
\t\t\t<input type=\"text\" name=\"query\" placeholder=\"Search\" title=\"Enter search keyword\">
\t\t\t<button type=\"submit\" title=\"Search\">
\t\t\t\t<i class=\"bi bi-search\"></i>
\t\t\t</button>
\t\t</form>
\t</div>
\t<!-- End Search Bar -->

\t<nav class=\"header-nav ms-auto\">
\t\t<ul class=\"d-flex align-items-center\">

\t\t\t<li class=\"nav-item d-block d-lg-none\">
\t\t\t\t<a class=\"nav-link nav-icon search-bar-toggle \" href=\"#\">
\t\t\t\t\t<i class=\"bi bi-search\"></i>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<!-- End Search Icon-->

\t\t\t

\t\t\t

\t\t\t<li class=\"nav-item dropdown pe-3\">

\t\t\t\t<a class=\"nav-link nav-profile d-flex align-items-center pe-0\" href=\"#\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t<img src=\"{{ asset('../build/images/logoothers/FT.jpg') }}\" alt=\"Profile\" class=\"rounded-circle\">
\t\t\t\t\t<span class=\"d-none d-md-block dropdown-toggle ps-2\">{{app.user.fullname}}</span>
\t\t\t\t</a>
\t\t\t\t<!-- End Profile Iamge Icon -->

\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow profile\">
\t\t\t\t\t<li class=\"dropdown-header\">
\t\t\t\t\t\t<h6>{{app.user.fullname}}</h6>
\t\t\t\t\t\t<span>{{app.user.hereas}}</span>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t</li>


\t\t\t\t\t<li>
\t\t\t\t\t\t<a class=\"dropdown-item d-flex align-items-center\" href=\"{{ path('app_logout') }}\">
\t\t\t\t\t\t\t<i class=\"bi bi-box-arrow-right\"></i>
\t\t\t\t\t\t\t<span>Sign Out</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>

\t\t\t\t</ul>
\t\t\t\t<!-- End Profile Dropdown Items -->
\t\t\t</li>
\t\t\t<!-- End Profile Nav -->

\t\t</ul>
\t</nav>
\t<!-- End Icons Navigation -->

</header>
<!-- End Header -->

<main id=\"main\" class=\"main\">

\t<div class=\"row\">
\t\t<div class=\"col-12\">
\t\t\t<h1>MailBox</h1>
\t\t\t<p>
\t\t\t\tYou have reecieved a total of
\t\t\t\t{{app.user.received|length}}
\t\t\t\tmessages.
\t\t\t</p>
\t\t</div>


\t</div>
\t{% for message in app.user.received %}
\t\t{% set bold = \"\" %}
\t\t{% if message.isRead == 0 %}
\t\t\t{% set bold = \" fw-bold\" %}
\t\t{% endif %}
\t\t<div class=\"card\">
\t\t\t<div class=\"card-body\">
\t\t\t\t<h5 class=\"card-title {{bold}}\">You got a new Message from \" {{message.sender.fullname}} \" at {{message.createdAt|date}} titled  <a href=\"{{path(\"read\",{id: message.id}) }}\">{{message.title}}</a>
        </h5>
\t\t\t\t
\t\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t\t<a style=\"float : right\" href=\"{{ path(\"delete\", {id : message.id}) }}\" class=\"btn btn-danger\">Delete</a>
\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<!-- End Vertically centered Modal-->{% endfor %}</main>{% endblock %}
", "messages/received.html.twig", "C:\\Users\\21653\\Desktop\\backupppps\\cct_ce\\templates\\messages\\received.html.twig");
    }
}
