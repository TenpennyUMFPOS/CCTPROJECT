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

/* user.html.twig */
class __TwigTemplate_0b93421f797e77798ca85acf555040c2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/logoothers/logo2.png"), "html", null, true);
        echo "\">
        ";
        // line 8
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "
        ";
        // line 12
        $this->displayBlock('javascripts', $context, $blocks);
        // line 15
        echo "    </head>
    <style>
        body {
            display:flex;
            flex-direction:column;
        }
    </style>
    

  <aside id=\"sidebar\" class=\"sidebar\">

    <ul class=\"sidebar-nav\" id=\"sidebar-nav\">

      
      <li class=\"nav-heading\">Pages</li>

      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user");
        echo "\">
          <i class=\"bi bi-person\"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_mycars");
        echo "\">
          <i class=\"ri-car-line\"></i>
          <span>My cars</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_search_mechanics");
        echo "\">
          <i class=\"bi bi-tools\"></i>
          <span>Search for mechanics</span>
        </a>
      </li>

      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_messages");
        echo "\">
          <i class=\"bi bi-card-checklist\"></i>
          <span>courier service</span>
        </a>
      </li>

      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("received");
        echo "\">
          <i class=\"bi bi-mailbox\"></i>
          <span>MailBox</span>
        </a>
      </li>

      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" href=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("premium");
        echo "\">
          <i class=\"bi bi-shield-check\"></i>
          <span>Get CCT Premium</span>
        </a>
      </li>


      





   >

    </ul>

  </aside><!-- End Sidebar-->
    
      ";
        // line 86
        $this->displayBlock('body', $context, $blocks);
        // line 88
        echo "


       <footer id=\"footer\" class=\"footer\">
    <div class=\"copyright\">
      &copy; Copyright <strong><span>Car Component Tool</span></strong>. All Rights Reserved W.A.E
    </div>
    </div>
  </footer><!-- End Footer -->
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
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

    // line 8
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "            ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 13
        echo "            ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 86
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 87
        echo "      ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 87,  246 => 86,  233 => 13,  223 => 12,  210 => 9,  200 => 8,  181 => 5,  162 => 88,  160 => 86,  138 => 67,  128 => 60,  118 => 53,  108 => 46,  98 => 39,  88 => 32,  69 => 15,  67 => 12,  64 => 11,  61 => 8,  57 => 6,  53 => 5,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}CCT{% endblock %}</title>
        <link rel=\"icon\" src=\"{{ asset('build/images/logoothers/logo2.png') }}\">
        {# Run `composer require symfony/webpack-encore-bundle` to start using Symfony UX #}
        {% block stylesheets %}
            {{ encore_entry_link_tags('app') }}
        {% endblock %}

        {% block javascripts %}
            {{ encore_entry_script_tags('app') }}
        {% endblock %}
    </head>
    <style>
        body {
            display:flex;
            flex-direction:column;
        }
    </style>
    

  <aside id=\"sidebar\" class=\"sidebar\">

    <ul class=\"sidebar-nav\" id=\"sidebar-nav\">

      
      <li class=\"nav-heading\">Pages</li>

      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" href=\"{{path('app_user') }}\">
          <i class=\"bi bi-person\"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" href=\"{{ path('app_mycars') }}\">
          <i class=\"ri-car-line\"></i>
          <span>My cars</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" href=\"{{ path('app_search_mechanics') }}\">
          <i class=\"bi bi-tools\"></i>
          <span>Search for mechanics</span>
        </a>
      </li>

      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" href=\"{{ path('app_messages') }}\">
          <i class=\"bi bi-card-checklist\"></i>
          <span>courier service</span>
        </a>
      </li>

      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" href=\"{{ path('received') }}\">
          <i class=\"bi bi-mailbox\"></i>
          <span>MailBox</span>
        </a>
      </li>

      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" href=\"{{ path('premium') }}\">
          <i class=\"bi bi-shield-check\"></i>
          <span>Get CCT Premium</span>
        </a>
      </li>


      





   >

    </ul>

  </aside><!-- End Sidebar-->
    
      {% block body %}
      {% endblock %}



       <footer id=\"footer\" class=\"footer\">
    <div class=\"copyright\">
      &copy; Copyright <strong><span>Car Component Tool</span></strong>. All Rights Reserved W.A.E
    </div>
    </div>
  </footer><!-- End Footer -->
</html>", "user.html.twig", "C:\\Users\\21653\\Desktop\\backupppps\\cct_ce\\templates\\user.html.twig");
    }
}
