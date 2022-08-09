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

/* home/pages_home.html.twig */
class __TwigTemplate_c689bff2e35def2bbe0454f66ee59fee extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/pages_home.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/pages_home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/pages_home.html.twig", 1);
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

        echo "Hello HomeController!";
        
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
        echo "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>
<header id=\"header\" class=\"header fixed-top d-flex align-items-center\">

        <div class=\"d-flex align-items-center justify-content-between\">
          <a href=\"#\" class=\"logo d-flex align-items-center\">
            <span class=\"d-none d-lg-block titleP\" >CarComponentTool</span>
          </a>
          
        </div><!-- End Logo -->
    
       
    
        <nav class=\"header-nav ms-auto\">
          <ul class=\"d-flex align-items-center\">
    
            <li class=\"nav-item d-block d-lg-none\">
              <a class=\"nav-link nav-icon search-bar-toggle \" href=\"#\">
                <i class=\"bi bi-search\"></i>
              </a>
            </li><!-- End Search Icon-->
            
            <li class=\"nav-item dropdown pe-3 newhere\">
    
              <a class=\"nav-link nav-profile d-flex align-items-center pe-0\" href=\"#\" data-bs-toggle=\"dropdown\">
                
                <span class=\"d-none d-md-block dropdown-toggle ps-2 nw\">New Here?</span>
              </a><!-- End Profile Iamge Icon -->
    
              <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow profile\">
                <li>
                    <a class=\"dropdown-item d-flex align-items-center\" href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\" >
                      <i class=\"bi bi-box-arrow-in-right\"></i>
                      <span>Sign in</span>
                    </a>
                  </li>
    
                <li>
               
    
                <li>
                  <a class=\"dropdown-item d-flex align-items-center\" href=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\">
                    <i class=\"bi bi-clipboard-check\"></i>
                    <span>Register</span>
                  </a>
                </li>
    
              </ul><!-- End Profile Dropdown Items -->
            </li><!-- End Profile Nav -->
    
          </ul>
        </nav><!-- End Icons Navigation -->
    
      </header><!-- End Header -->
      <div  class=\"default\">
        <div class=\"title\">
          <span>Convert the right people, with the<br> right 
            calls-to-action,at the right time. </span>
            <p>
            YOUR CAR IS IN SAFE HANDS, 
You can't find a good mechanic to fix your car ? nor other people who had the same problem as you?
\"CCT\"  is your safest option that helps you find the best mechanics for your car ASAP.
            </p>
        </div>
        <div class=\"defaultimage\">
          <img src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/logoothers/logo2.png"), "html", null, true);
        echo "\" />
        </div>
      </div>
      <div class=\"col-xl-10\" style=\"margin-left:50px;\">
      
        <footer id=\"footerhome\" class=\"footerhome\">
        <div class=\"copyright\">
          &copy; Copyright <strong><span>Car Component Tool</span></strong>. All Rights Reserved W.A.E
        </div>
      </footer><!-- End Footer -->
    
      <a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "home/pages_home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 74,  136 => 50,  123 => 40,  88 => 7,  78 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello HomeController!{% endblock %}


{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>
<header id=\"header\" class=\"header fixed-top d-flex align-items-center\">

        <div class=\"d-flex align-items-center justify-content-between\">
          <a href=\"#\" class=\"logo d-flex align-items-center\">
            <span class=\"d-none d-lg-block titleP\" >CarComponentTool</span>
          </a>
          
        </div><!-- End Logo -->
    
       
    
        <nav class=\"header-nav ms-auto\">
          <ul class=\"d-flex align-items-center\">
    
            <li class=\"nav-item d-block d-lg-none\">
              <a class=\"nav-link nav-icon search-bar-toggle \" href=\"#\">
                <i class=\"bi bi-search\"></i>
              </a>
            </li><!-- End Search Icon-->
            
            <li class=\"nav-item dropdown pe-3 newhere\">
    
              <a class=\"nav-link nav-profile d-flex align-items-center pe-0\" href=\"#\" data-bs-toggle=\"dropdown\">
                
                <span class=\"d-none d-md-block dropdown-toggle ps-2 nw\">New Here?</span>
              </a><!-- End Profile Iamge Icon -->
    
              <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow profile\">
                <li>
                    <a class=\"dropdown-item d-flex align-items-center\" href=\"{{path('app_login')}}\" >
                      <i class=\"bi bi-box-arrow-in-right\"></i>
                      <span>Sign in</span>
                    </a>
                  </li>
    
                <li>
               
    
                <li>
                  <a class=\"dropdown-item d-flex align-items-center\" href=\"{{path('app_register')}}\">
                    <i class=\"bi bi-clipboard-check\"></i>
                    <span>Register</span>
                  </a>
                </li>
    
              </ul><!-- End Profile Dropdown Items -->
            </li><!-- End Profile Nav -->
    
          </ul>
        </nav><!-- End Icons Navigation -->
    
      </header><!-- End Header -->
      <div  class=\"default\">
        <div class=\"title\">
          <span>Convert the right people, with the<br> right 
            calls-to-action,at the right time. </span>
            <p>
            YOUR CAR IS IN SAFE HANDS, 
You can't find a good mechanic to fix your car ? nor other people who had the same problem as you?
\"CCT\"  is your safest option that helps you find the best mechanics for your car ASAP.
            </p>
        </div>
        <div class=\"defaultimage\">
          <img src=\"{{ asset('build/images/logoothers/logo2.png') }}\" />
        </div>
      </div>
      <div class=\"col-xl-10\" style=\"margin-left:50px;\">
      
        <footer id=\"footerhome\" class=\"footerhome\">
        <div class=\"copyright\">
          &copy; Copyright <strong><span>Car Component Tool</span></strong>. All Rights Reserved W.A.E
        </div>
      </footer><!-- End Footer -->
    
      <a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>

{% endblock %}
", "home/pages_home.html.twig", "C:\\Users\\21653\\Desktop\\backupppps\\cct_ce\\templates\\home\\pages_home.html.twig");
    }
}
