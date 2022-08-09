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

/* messages/read.html.twig */
class __TwigTemplate_e7a4ab760471c38bfe63a166bc60b5be extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "messages/read.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "messages/read.html.twig"));

        $this->parent = $this->loadTemplate("user.html.twig", "messages/read.html.twig", 1);
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

    <div class=\"d-flex align-items-center justify-content-between\">
      <a href=\"#\" class=\"logo d-flex align-items-center\">
        <img src=\"assets/img/logoCCT.PNG\" alt=\"\">
        <span class=\"d-none d-lg-block titleP\">CarComponentTool</span>
      </a>
      <i class=\"bi bi-list toggle-sidebar-btn\"></i>
    </div><!-- End Logo -->

    <div class=\"search-bar\">
      <form class=\"search-form d-flex align-items-center\" method=\"POST\" action=\"#\">
        <input type=\"text\" name=\"query\" placeholder=\"Search\" title=\"Enter search keyword\">
        <button type=\"submit\" title=\"Search\"><i class=\"bi bi-search\"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class=\"header-nav ms-auto\">
      <ul class=\"d-flex align-items-center\">

        <li class=\"nav-item d-block d-lg-none\">
          <a class=\"nav-link nav-icon search-bar-toggle \" href=\"#\">
            <i class=\"bi bi-search\"></i>
          </a>
        </li><!-- End Search Icon-->



       

        <li class=\"nav-item dropdown pe-3\">

          <a class=\"nav-link nav-profile d-flex align-items-center pe-0\" href=\"#\" data-bs-toggle=\"dropdown\">
            <img src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../build/images/logoothers/FT.jpg"), "html", null, true);
        echo "\" alt=\"Profile\" class=\"rounded-circle\">
            <span class=\"d-none d-md-block dropdown-toggle ps-2\">";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 40, $this->source); })()), "user", [], "any", false, false, false, 40), "fullname", [], "any", false, false, false, 40), "html", null, true);
        echo "</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow profile\">
            <li class=\"dropdown-header\">
              <h6>";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "user", [], "any", false, false, false, 45), "fullname", [], "any", false, false, false, 45), "html", null, true);
        echo "</h6> 
              <span>";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 46, $this->source); })()), "user", [], "any", false, false, false, 46), "hereas", [], "any", false, false, false, 46), "html", null, true);
        echo "</span>
            </li>
            <li>
              <hr class=\"dropdown-divider\">
            </li>

            
            

            <li>
              <a class=\"dropdown-item d-flex align-items-center\" href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">
                <i class=\"bi bi-box-arrow-right\"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <main id=\"main\" class=\"main\">   
            <h1>courier service</h1>
            <div class=\"card\">
            
            <div class=\"card-body\">
              <h5 class=\"card-title\" style=\"float : right; margin-right : 10px;\">";
        // line 75
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 75, $this->source); })()), "createdAt", [], "any", false, false, false, 75)), "html", null, true);
        echo "</h5>

              <!-- Default Accordion -->
              <div class=\"accordion\" id=\"accordionExample\">
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\" id=\"headingOne\">
                    <button class=\"accordion-button \" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseOne\" aria-expanded=\"flase\" aria-controls=\"collapseOne\">
                      Message from ";
        // line 82
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 82, $this->source); })()), "sender", [], "any", false, false, false, 82), "fullname", [], "any", false, false, false, 82), "html", null, true);
        echo " titled : \"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 82, $this->source); })()), "title", [], "any", false, false, false, 82), "html", null, true);
        echo "\".
                    </button>
                  </h2>
                  <div id=\"collapseOne\" class=\"accordion-collapse collapse\" aria-labelledby=\"headingOne\" data-bs-parent=\"#accordionExample\">
                    <div class=\"accordion-body\">
                      ";
        // line 87
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 87, $this->source); })()), "message", [], "any", false, false, false, 87), "html", null, true);
        echo "
                    </div>
                  </div>
                </div>
              </div><!-- End Default Accordion Example -->
              <a style=\"margin-top :10px;\" href=\"";
        // line 92
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("received");
        echo "\" class=\"btn btn-primary\">MailBox</a>
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
        return "messages/read.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 92,  194 => 87,  184 => 82,  174 => 75,  152 => 56,  139 => 46,  135 => 45,  127 => 40,  123 => 39,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'user.html.twig' %}

{% block title %}CCT{% endblock %}

{% block body %}
<header id=\"header\" class=\"header fixed-top d-flex align-items-center\">

    <div class=\"d-flex align-items-center justify-content-between\">
      <a href=\"#\" class=\"logo d-flex align-items-center\">
        <img src=\"assets/img/logoCCT.PNG\" alt=\"\">
        <span class=\"d-none d-lg-block titleP\">CarComponentTool</span>
      </a>
      <i class=\"bi bi-list toggle-sidebar-btn\"></i>
    </div><!-- End Logo -->

    <div class=\"search-bar\">
      <form class=\"search-form d-flex align-items-center\" method=\"POST\" action=\"#\">
        <input type=\"text\" name=\"query\" placeholder=\"Search\" title=\"Enter search keyword\">
        <button type=\"submit\" title=\"Search\"><i class=\"bi bi-search\"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class=\"header-nav ms-auto\">
      <ul class=\"d-flex align-items-center\">

        <li class=\"nav-item d-block d-lg-none\">
          <a class=\"nav-link nav-icon search-bar-toggle \" href=\"#\">
            <i class=\"bi bi-search\"></i>
          </a>
        </li><!-- End Search Icon-->



       

        <li class=\"nav-item dropdown pe-3\">

          <a class=\"nav-link nav-profile d-flex align-items-center pe-0\" href=\"#\" data-bs-toggle=\"dropdown\">
            <img src=\"{{ asset('../build/images/logoothers/FT.jpg') }}\" alt=\"Profile\" class=\"rounded-circle\">
            <span class=\"d-none d-md-block dropdown-toggle ps-2\">{{app.user.fullname}}</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow profile\">
            <li class=\"dropdown-header\">
              <h6>{{app.user.fullname}}</h6> 
              <span>{{app.user.hereas}}</span>
            </li>
            <li>
              <hr class=\"dropdown-divider\">
            </li>

            
            

            <li>
              <a class=\"dropdown-item d-flex align-items-center\" href=\"{{ path('app_logout') }}\">
                <i class=\"bi bi-box-arrow-right\"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <main id=\"main\" class=\"main\">   
            <h1>courier service</h1>
            <div class=\"card\">
            
            <div class=\"card-body\">
              <h5 class=\"card-title\" style=\"float : right; margin-right : 10px;\">{{ message.createdAt|date }}</h5>

              <!-- Default Accordion -->
              <div class=\"accordion\" id=\"accordionExample\">
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\" id=\"headingOne\">
                    <button class=\"accordion-button \" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseOne\" aria-expanded=\"flase\" aria-controls=\"collapseOne\">
                      Message from {{ message.sender.fullname }} titled : \"{{ message.title }}\".
                    </button>
                  </h2>
                  <div id=\"collapseOne\" class=\"accordion-collapse collapse\" aria-labelledby=\"headingOne\" data-bs-parent=\"#accordionExample\">
                    <div class=\"accordion-body\">
                      {{ message.message }}
                    </div>
                  </div>
                </div>
              </div><!-- End Default Accordion Example -->
              <a style=\"margin-top :10px;\" href=\"{{path(\"received\")}}\" class=\"btn btn-primary\">MailBox</a>
            </div>
          </div>

        </div>
  </main>

{% endblock %}
", "messages/read.html.twig", "C:\\Users\\21653\\Desktop\\backupppps\\cct_ce\\templates\\messages\\read.html.twig");
    }
}
