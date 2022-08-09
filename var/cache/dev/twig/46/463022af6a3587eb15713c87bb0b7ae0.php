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

/* /premium.html.twig */
class __TwigTemplate_177df86d6ce685f6af89b35be88b475c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/premium.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/premium.html.twig"));

        $this->parent = $this->loadTemplate("user.html.twig", "/premium.html.twig", 1);
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

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
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
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../build/images/logoothers/FT.jpg"), "html", null, true);
        echo "\" alt=\"Profile\" class=\"rounded-circle\">
\t\t\t\t\t\t<span class=\"d-none d-md-block dropdown-toggle ps-2\">";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "user", [], "any", false, false, false, 44), "fullname", [], "any", false, false, false, 44), "html", null, true);
        echo "</span>
\t\t\t\t\t</a>
\t\t\t\t\t<!-- End Profile Iamge Icon -->

\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow profile\">
\t\t\t\t\t\t<li class=\"dropdown-header\">
\t\t\t\t\t\t\t<h6>";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "user", [], "any", false, false, false, 50), "fullname", [], "any", false, false, false, 50), "html", null, true);
        echo "</h6>
\t\t\t\t\t\t\t<span>";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "user", [], "any", false, false, false, 51), "hereas", [], "any", false, false, false, 51), "html", null, true);
        echo "</span>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t</li>


\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"dropdown-item d-flex align-items-center\" href=\"";
        // line 59
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
<main id=\"main\" class=\"main\">
<div class=\"alert alert-info alert-dismissible fade show\" role=\"alert\">
                <i class=\"bi bi-info-circle me-1\"></i>
                Attention : You cannot get Premium unless you're a mechanic ! 
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
              </div>
<div class=\"card\">

            <div class=\"card-body\">
              <h5 class=\"card-title\">Complete the following steps</h5>

              <!-- Multi Columns Form -->
              <form class=\"row g-3\">
                <div class=\"col-md-12\">
                  <label for=\"inputName5\" class=\"form-label\">Your Name</label>
                  <input type=\"text\" class=\"form-control\" id=\"inputName5\">
                </div>
                <div class=\"col-md-6\">
                  <label for=\"inputEmail5\" class=\"form-label\">Email</label>
                  <input type=\"email\" class=\"form-control\" id=\"inputEmail5\">
                </div>
                <div class=\"col-md-6\">
                  <label for=\"inputPassword5\" class=\"form-label\">Password</label>
                  <input type=\"password\" class=\"form-control\" id=\"inputPassword5\">
                </div>
                <div class=\"col-12\">
                  <label for=\"inputAddress5\" class=\"form-label\">Address</label>
                  <input type=\"text\" class=\"form-control\" id=\"inputAddres5s\" placeholder=\"1234 Main St\">
                </div>
                <div class=\"col-12\">
                  <label for=\"inputAddress2\" class=\"form-label\">Address 2</label>
                  <input type=\"text\" class=\"form-control\" id=\"inputAddress2\" placeholder=\"Apartment, studio, or floor\">
                </div>
                <div class=\"col-md-6\">
                  <label for=\"inputCity\" class=\"form-label\">City</label>
                  <input type=\"text\" class=\"form-control\" id=\"inputCity\">
                </div>
                <div class=\"col-md-4\">
                  <label for=\"inputState\" class=\"form-label\">State</label>
                  <input type=\"text\" class=\"form-control\" id=\"inputStat\">
                </div>
                <div class=\"col-md-2\">
                  <label for=\"inputZip\" class=\"form-label\">Zip</label>
                  <input type=\"text\" class=\"form-control\" id=\"inputZip\">
                </div>
                <div class=\"col-12\">
                  <div class=\"form-check\">
                    <input class=\"form-check-input\" type=\"checkbox\" id=\"gridCheck\">
                    <label class=\"form-check-label\" for=\"gridCheck\">
                      Check me out
                    </label>
                  </div>
                </div>
                <div class=\"text-center\">
                  <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
                  <button type=\"reset\" class=\"btn btn-secondary\">Reset</button>
                </div>
              </form><!-- End Multi Columns Form -->

            </div>
          </div>

        </div>
          </main>
          ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "/premium.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 59,  145 => 51,  141 => 50,  132 => 44,  128 => 43,  88 => 5,  78 => 4,  59 => 2,  36 => 1,);
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
<main id=\"main\" class=\"main\">
<div class=\"alert alert-info alert-dismissible fade show\" role=\"alert\">
                <i class=\"bi bi-info-circle me-1\"></i>
                Attention : You cannot get Premium unless you're a mechanic ! 
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
              </div>
<div class=\"card\">

            <div class=\"card-body\">
              <h5 class=\"card-title\">Complete the following steps</h5>

              <!-- Multi Columns Form -->
              <form class=\"row g-3\">
                <div class=\"col-md-12\">
                  <label for=\"inputName5\" class=\"form-label\">Your Name</label>
                  <input type=\"text\" class=\"form-control\" id=\"inputName5\">
                </div>
                <div class=\"col-md-6\">
                  <label for=\"inputEmail5\" class=\"form-label\">Email</label>
                  <input type=\"email\" class=\"form-control\" id=\"inputEmail5\">
                </div>
                <div class=\"col-md-6\">
                  <label for=\"inputPassword5\" class=\"form-label\">Password</label>
                  <input type=\"password\" class=\"form-control\" id=\"inputPassword5\">
                </div>
                <div class=\"col-12\">
                  <label for=\"inputAddress5\" class=\"form-label\">Address</label>
                  <input type=\"text\" class=\"form-control\" id=\"inputAddres5s\" placeholder=\"1234 Main St\">
                </div>
                <div class=\"col-12\">
                  <label for=\"inputAddress2\" class=\"form-label\">Address 2</label>
                  <input type=\"text\" class=\"form-control\" id=\"inputAddress2\" placeholder=\"Apartment, studio, or floor\">
                </div>
                <div class=\"col-md-6\">
                  <label for=\"inputCity\" class=\"form-label\">City</label>
                  <input type=\"text\" class=\"form-control\" id=\"inputCity\">
                </div>
                <div class=\"col-md-4\">
                  <label for=\"inputState\" class=\"form-label\">State</label>
                  <input type=\"text\" class=\"form-control\" id=\"inputStat\">
                </div>
                <div class=\"col-md-2\">
                  <label for=\"inputZip\" class=\"form-label\">Zip</label>
                  <input type=\"text\" class=\"form-control\" id=\"inputZip\">
                </div>
                <div class=\"col-12\">
                  <div class=\"form-check\">
                    <input class=\"form-check-input\" type=\"checkbox\" id=\"gridCheck\">
                    <label class=\"form-check-label\" for=\"gridCheck\">
                      Check me out
                    </label>
                  </div>
                </div>
                <div class=\"text-center\">
                  <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
                  <button type=\"reset\" class=\"btn btn-secondary\">Reset</button>
                </div>
              </form><!-- End Multi Columns Form -->

            </div>
          </div>

        </div>
          </main>
          {% endblock %}", "/premium.html.twig", "C:\\Users\\21653\\Desktop\\backupppps\\cct_ce\\templates\\premium.html.twig");
    }
}
