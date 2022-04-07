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

/* base.html.twig */
class __TwigTemplate_5e6cb9e8429c616200893c4499a360c9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>
\t\t\t";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        // line 9
        echo "\t\t</title>
\t\t";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "
\t\t";
        // line 14
        $this->displayBlock('javascripts', $context, $blocks);
        // line 17
        echo "\t</head>
\t
\t
\t  <body>
\t\t 
    
\t <header class=\"navbar navbar-dark sticky-top bg-primary flex-md-nowrap p-0 shadow\">
\t\t<a href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" class=\"navbar-brand col-md-3 col-lg-2 me-0 px-3\">Pabiosoft</a>

\t\t<button class=\"navbar-toggler position-absolute d-md-none collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#sidebarMenu\" aria-controls=\"sidebarMenu\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t  <span class=\"navbar-toggler-icon\"></span>
\t\t</button>
\t\t<form action=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search");
        echo "\" class=\"d-flex col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3\">
\t\t\t<input type=\"search\" id=\"search\" list=\"searchList\" name=\"search\" class=\"me-2 form-control form-control-dark\" placeholder=\"Search...\" aria-label=\"Search\">
\t\t\t<button class=\"btn btn-success\" type=\"submit\">Search</button>
\t\t</form>
\t\t<datalist id=\"searchList\"></datalist>

\t\t 
\t\t 
\t  </header>
\t  
\t  <div class=\"container-fluid\">
\t\t<div class=\"row\">
\t\t  <nav id=\"sidebarMenu\" class=\"col-md-3 col-lg-2 d-md-block bg-light sidebar collapse\">
\t\t\t<div class=\"position-sticky pt-3\">
\t\t\t  <ul class=\"nav flex-column \"  >
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t  <a class=\"nav-link active\" aria-current=\"page\" href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">
\t\t\t\t\t<span data-feather=\"home\"></span>
\t\t\t\t\tDashboard
\t\t\t\t  </a>
\t\t\t\t</li>

\t\t\t\t 
\t\t\t\t";
        // line 52
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "user", [], "any", false, false, false, 52)) {
            // line 53
            echo "\t\t\t\t<li class=\"nav-item\">
\t\t\t\t  <a class=\"nav-link\" href=\" ";
            // line 54
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post");
            echo "\">
\t\t\t\t\t<span data-feather=\"shopping-cart\"></span>
\t\t\t\t\tFiche 
\t\t\t\t  </a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\" ";
            // line 60
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
            echo "\">
\t\t\t\t\t  <span data-feather=\"shopping-cart\"></span>
\t\t\t\t\t  Collaborateur 
\t\t\t\t\t</a>
\t\t\t\t  </li>

\t\t\t\t  ";
            // line 66
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 66, $this->source); })()), "user", [], "any", false, false, false, 66), "roles", [], "any", false, false, false, 66), 0, [], "array", false, false, false, 66) == "ROLE_ADMIN")) {
                // line 67
                echo "\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" target=\"_blank\" href=\" ";
                // line 68
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
                echo "\">
\t\t\t\t\t\t<span data-feather=\"shopping-cart\"></span>
\t\t\t\t\t\tGestion  
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t";
            }
            // line 74
            echo "\t\t\t\t";
        }
        // line 75
        echo "\t\t\t
\t\t\t\t\t
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t  <a class=\"nav-link\" href=\"";
        // line 78
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_faq");
        echo "\">
\t\t\t\t\t<span data-feather=\"layers\"></span>
\t\t\t\t\tComment ça marche ?
\t\t\t\t  </a>
\t\t\t\t</li>
\t\t\t  </ul>
\t  
\t\t\t<hr>
\t\t\t<div class=\"dropdown\">
\t\t\t  <a href=\"#\" class=\"d-flex align-items-center link-dark text-decoration-none dropdown-toggle\" id=\"dropdownUser2\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t";
        // line 88
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 88, $this->source); })()), "user", [], "any", false, false, false, 88)) {
            // line 89
            echo "\t\t\t\t<img src=\"https://www.pinclipart.com/picdir/middle/559-5594866_necktie-drawing-vector-round-avatar-user-icon-png.png\" alt=\"\" width=\"32\" height=\"32\" class=\"rounded-circle me-2\">
\t\t\t\t<strong>";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 90, $this->source); })()), "user", [], "any", false, false, false, 90), "firstname", [], "any", false, false, false, 90), "html", null, true);
            echo "</strong>
\t\t\t\t";
        } else {
            // line 92
            echo "\t\t\t\t<img src=\"https://png.pngtree.com/png-vector/20190919/ourlarge/pngtree-user-login-or-authenticate-icon-on-gray-background-flat-icon-ve-png-image_1742031.jpg\" alt=\"\" width=\"32\" height=\"32\" class=\"rounded-circle me-2\">
\t\t\t\t<strong>Connect toi</strong>
\t\t\t\t";
        }
        // line 95
        echo "\t\t\t  </a>
\t\t\t  <ul class=\"dropdown-menu text-small shadow\" aria-labelledby=\"dropdownUser2\">
\t\t\t\t";
        // line 97
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 97, $this->source); })()), "user", [], "any", false, false, false, 97)) {
            // line 98
            echo "\t\t\t
\t\t\t\t<li><a class=\"dropdown-item\" href=\"";
            // line 99
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\">Deconnexion</a></li>
\t\t\t\t";
        } else {
            // line 101
            echo "\t\t\t
\t\t\t\t<li><a class=\"dropdown-item\" href=\"";
            // line 102
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\">Connexion</a></li>
\t\t\t\t<li><a class=\"dropdown-item\" href=\"";
            // line 103
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
            echo "\">Inscription</a></li>
\t\t\t\t";
        }
        // line 105
        echo "\t\t\t\t<li><hr class=\"dropdown-divider\"></li>
\t\t\t\t";
        // line 106
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 106, $this->source); })()), "user", [], "any", false, false, false, 106)) {
            // line 107
            echo "\t\t\t\t<li><a class=\"dropdown-item\" href=\"#\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 107, $this->source); })()), "user", [], "any", false, false, false, 107), "firstname", [], "any", false, false, false, 107), "html", null, true);
            echo "</a></li>
\t\t\t\t";
        }
        // line 109
        echo "\t\t\t  </ul>
\t\t\t</div>
\t\t  </nav>
\t  
\t\t  <main class=\"col-md-9 ms-sm-auto col-lg-10 px-md-4\">
\t\t\t<div class=\"d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom\">
\t\t\t  ";
        // line 115
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 115, $this->source); })()), "user", [], "any", false, false, false, 115)) {
            // line 116
            echo "\t\t\t  <h3 class=\"card-header\">
\t\t\t\t";
            // line 117
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 117, $this->source); })()), "user", [], "any", false, false, false, 117), "roles", [], "any", false, false, false, 117), 0, [], "array", false, false, false, 117) == "ROLE_ADMIN")) {
                // line 118
                echo "\t\t\t\t<mark>PDG:</mark> 
\t\t\t\t";
            } else {
                // line 120
                echo "\t\t\t\t<mark>Gérant:</mark> 
\t\t\t\t";
            }
            // line 122
            echo "\t\t\t\t";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 122, $this->source); })()), "user", [], "any", false, false, false, 122), "firstname", [], "any", false, false, false, 122), "html", null, true);
            echo " de la société ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 122, $this->source); })()), "user", [], "any", false, false, false, 122), "entreprise", [], "any", false, false, false, 122), "html", null, true);
            echo "
\t\t\t </h3>
\t\t\t\t";
        } else {
            // line 125
            echo "\t\t\t\t<h3 class=\"card-header\"> Votre outils de gestion </h3>
\t\t\t\t";
        }
        // line 127
        echo "\t\t\t  <div class=\"btn-toolbar mb-2 mb-md-0\">
\t\t\t\t  ";
        // line 128
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 128, $this->source); })()), "user", [], "any", false, false, false, 128)) {
            // line 129
            echo "\t\t\t\t\t<div class=\"btn-group me-2\">
\t\t\t\t\t<a href=\"";
            // line 130
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post");
            echo "\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Fiche</button>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"";
            // line 133
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
            echo "\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Collaborateur</button>
\t\t\t\t\t</a>
\t\t\t\t\t";
            // line 136
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 136, $this->source); })()), "user", [], "any", false, false, false, 136), "roles", [], "any", false, false, false, 136), 0, [], "array", false, false, false, 136) == "ROLE_ADMIN")) {
                // line 137
                echo "\t\t\t\t\t<a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
                echo "\" target=\"_blank\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Gestion</button>
\t\t\t\t\t</a>
\t\t\t\t\t";
            }
            // line 141
            echo "\t\t\t\t\t</div>
\t\t\t\t";
        } else {
            // line 143
            echo "\t\t\t\t\t<div class=\"btn-group me-2\">
\t\t\t\t\t\t<a href=\"";
            // line 144
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Connection</button>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"";
            // line 147
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
            echo "\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Inscription</button>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 152
        echo "\t\t\t\t<a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">
\t\t\t\t<button type=\"button\" class=\"btn btn-sm btn-outline-secondary dropdown-toggle\" >
\t\t\t\t  <span data-feather=\"calendar\"></span>
\t\t\t\t\tDashboard
\t\t\t\t</button>
\t\t\t</a>
\t\t\t  </div>
\t\t\t    
\t\t\t</div>
\t\t\t<div>
\t\t\t\t";
        // line 162
        $this->displayBlock('body', $context, $blocks);
        // line 163
        echo "\t\t\t</div>
\t\t\t<!-- 
\t\t\t<h2>Section title</h2>
\t\t\t<div class=\"table-responsive\">
\t\t\t  <table class=\"table table-striped table-sm\">
\t\t\t\t<thead>
\t\t\t\t  <tr>
\t\t\t\t\t<th scope=\"col\">#</th>
\t\t\t\t\t<th scope=\"col\">Header</th>
\t\t\t\t\t<th scope=\"col\">Header</th>
\t\t\t\t\t<th scope=\"col\">Header</th>
\t\t\t\t\t<th scope=\"col\">Header</th>
\t\t\t\t  </tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t  <tr>
\t\t\t\t\t<td>1,001</td>
\t\t\t\t\t<td>random</td>
\t\t\t\t\t<td>data</td>
\t\t\t\t\t<td>placeholder</td>
\t\t\t\t\t<td>text</td>
\t\t\t\t  </tr>
\t\t\t\t  <tr>
\t\t\t\t\t<td>1,002</td>
\t\t\t\t\t<td>placeholder</td>
\t\t\t\t\t<td>irrelevant</td>
\t\t\t\t\t<td>visual</td>
\t\t\t\t\t<td>layout</td>
\t\t\t\t  </tr>
\t\t\t\t  <tr>
\t\t\t\t\t<td>1,003</td>
\t\t\t\t\t<td>data</td>
\t\t\t\t\t<td>rich</td>
\t\t\t\t\t<td>dashboard</td>
\t\t\t\t\t<td>tabular</td>
\t\t\t\t  </tr>
\t\t\t\t  <tr>
\t\t\t\t\t<td>1,003</td>
\t\t\t\t\t<td>information</td>
\t\t\t\t\t<td>placeholder</td>
\t\t\t\t\t<td>illustrative</td>
\t\t\t\t\t<td>data</td>
\t\t\t\t  </tr>
\t\t\t\t  <tr>
\t\t\t\t\t<td>1,004</td>
\t\t\t\t\t<td>text</td>
\t\t\t\t\t<td>random</td>
\t\t\t\t\t<td>layout</td>
\t\t\t\t\t<td>dashboard</td>
\t\t\t\t  </tr>
\t\t\t\t  <tr>
\t\t\t\t\t<td>1,005</td>
\t\t\t\t\t<td>dashboard</td>
\t\t\t\t\t<td>irrelevant</td>
\t\t\t\t\t<td>text</td>
\t\t\t\t\t<td>placeholder</td>
\t\t\t\t  </tr>
\t\t\t\t  <tr>
\t\t\t\t\t<td>1,006</td>
\t\t\t\t\t<td>dashboard</td>
\t\t\t\t\t<td>illustrative</td>
\t\t\t\t\t<td>rich</td>
\t\t\t\t\t<td>data</td>
\t\t\t\t  </tr>
\t\t\t\t  <tr>
\t\t\t\t\t<td>1,007</td>
\t\t\t\t\t<td>placeholder</td>
\t\t\t\t\t<td>tabular</td>
\t\t\t\t\t<td>information</td>
\t\t\t\t\t<td>irrelevant</td>
\t\t\t\t  </tr>
\t\t\t\t  <tr>
\t\t\t\t\t<td>1,008</td>
\t\t\t\t\t<td>random</td>
\t\t\t\t\t<td>data</td>
\t\t\t\t\t<td>placeholder</td>
\t\t\t\t\t<td>text</td>
\t\t\t\t  </tr>
\t\t\t\t  <tr>
\t\t\t\t\t<td>1,009</td>
\t\t\t\t\t<td>placeholder</td>
\t\t\t\t\t<td>irrelevant</td>
\t\t\t\t\t<td>visual</td>
\t\t\t\t\t<td>layout</td>
\t\t\t\t  </tr>
\t\t\t\t  <tr>
\t\t\t\t\t<td>1,010</td>
\t\t\t\t\t<td>data</td>
\t\t\t\t\t<td>rich</td>
\t\t\t\t\t<td>dashboard</td>
\t\t\t\t\t<td>tabular</td>
\t\t\t\t  </tr>
\t\t\t\t  <tr>
\t\t\t\t\t<td>1,011</td>
\t\t\t\t\t<td>information</td>
\t\t\t\t\t<td>placeholder</td>
\t\t\t\t\t<td>illustrative</td>
\t\t\t\t\t<td>data</td>
\t\t\t\t  </tr>
\t\t\t\t  <tr>
\t\t\t\t\t<td>1,012</td>
\t\t\t\t\t<td>text</td>
\t\t\t\t\t<td>placeholder</td>
\t\t\t\t\t<td>layout</td>
\t\t\t\t\t<td>dashboard</td>
\t\t\t\t  </tr>
\t\t\t\t  <tr>
\t\t\t\t\t<td>1,013</td>
\t\t\t\t\t<td>dashboard</td>
\t\t\t\t\t<td>irrelevant</td>
\t\t\t\t\t<td>text</td>
\t\t\t\t\t<td>visual</td>
\t\t\t\t  </tr>
\t\t\t\t  <tr>
\t\t\t\t\t<td>1,014</td>
\t\t\t\t\t<td>dashboard</td>
\t\t\t\t\t<td>illustrative</td>
\t\t\t\t\t<td>rich</td>
\t\t\t\t\t<td>data</td>
\t\t\t\t  </tr>
\t\t\t\t  <tr>
\t\t\t\t\t<td>1,015</td>
\t\t\t\t\t<td>random</td>
\t\t\t\t\t<td>tabular</td>
\t\t\t\t\t<td>information</td>
\t\t\t\t\t<td>text</td>
\t\t\t\t  </tr>
\t\t\t\t</tbody>
\t\t\t  </table>
\t\t\t</div>
\t\t  </main>
\t\t</div>
\t\t-->
\t  </div>
\t  




\t 
\t\t\t\t 
\t\t</body>
\t</html>
\t<form>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "\t\t\t\tpabiosoft
\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "\t\t\t<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\" crossorigin=\"anonymous\">
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 15
        echo "\t\t\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p\" crossorigin=\"anonymous\"></script>
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 162
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  542 => 162,  531 => 15,  521 => 14,  510 => 11,  500 => 10,  489 => 7,  479 => 6,  325 => 163,  323 => 162,  309 => 152,  301 => 147,  295 => 144,  292 => 143,  288 => 141,  280 => 137,  278 => 136,  272 => 133,  266 => 130,  263 => 129,  261 => 128,  258 => 127,  254 => 125,  245 => 122,  241 => 120,  237 => 118,  235 => 117,  232 => 116,  230 => 115,  222 => 109,  216 => 107,  214 => 106,  211 => 105,  206 => 103,  202 => 102,  199 => 101,  194 => 99,  191 => 98,  189 => 97,  185 => 95,  180 => 92,  175 => 90,  172 => 89,  170 => 88,  157 => 78,  152 => 75,  149 => 74,  140 => 68,  137 => 67,  135 => 66,  126 => 60,  117 => 54,  114 => 53,  112 => 52,  102 => 45,  83 => 29,  75 => 24,  66 => 17,  64 => 14,  61 => 13,  59 => 10,  56 => 9,  54 => 6,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>
\t\t\t{% block title %}
\t\t\t\tpabiosoft
\t\t\t{% endblock %}
\t\t</title>
\t\t{% block stylesheets %}
\t\t\t<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\" crossorigin=\"anonymous\">
\t\t{% endblock %}

\t\t{% block javascripts %}
\t\t\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p\" crossorigin=\"anonymous\"></script>
\t\t{% endblock %}
\t</head>
\t
\t
\t  <body>
\t\t 
    
\t <header class=\"navbar navbar-dark sticky-top bg-primary flex-md-nowrap p-0 shadow\">
\t\t<a href=\"{{path('home')}}\" class=\"navbar-brand col-md-3 col-lg-2 me-0 px-3\">Pabiosoft</a>

\t\t<button class=\"navbar-toggler position-absolute d-md-none collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#sidebarMenu\" aria-controls=\"sidebarMenu\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t  <span class=\"navbar-toggler-icon\"></span>
\t\t</button>
\t\t<form action=\"{{path('search')}}\" class=\"d-flex col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3\">
\t\t\t<input type=\"search\" id=\"search\" list=\"searchList\" name=\"search\" class=\"me-2 form-control form-control-dark\" placeholder=\"Search...\" aria-label=\"Search\">
\t\t\t<button class=\"btn btn-success\" type=\"submit\">Search</button>
\t\t</form>
\t\t<datalist id=\"searchList\"></datalist>

\t\t 
\t\t 
\t  </header>
\t  
\t  <div class=\"container-fluid\">
\t\t<div class=\"row\">
\t\t  <nav id=\"sidebarMenu\" class=\"col-md-3 col-lg-2 d-md-block bg-light sidebar collapse\">
\t\t\t<div class=\"position-sticky pt-3\">
\t\t\t  <ul class=\"nav flex-column \"  >
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t  <a class=\"nav-link active\" aria-current=\"page\" href=\"{{path('home')}}\">
\t\t\t\t\t<span data-feather=\"home\"></span>
\t\t\t\t\tDashboard
\t\t\t\t  </a>
\t\t\t\t</li>

\t\t\t\t 
\t\t\t\t{% if app.user %}
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t  <a class=\"nav-link\" href=\" {{path('post')}}\">
\t\t\t\t\t<span data-feather=\"shopping-cart\"></span>
\t\t\t\t\tFiche 
\t\t\t\t  </a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\" {{path('register')}}\">
\t\t\t\t\t  <span data-feather=\"shopping-cart\"></span>
\t\t\t\t\t  Collaborateur 
\t\t\t\t\t</a>
\t\t\t\t  </li>

\t\t\t\t  {% if (app.user.roles[0] == \"ROLE_ADMIN\") %}
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" target=\"_blank\" href=\" {{path('admin')}}\">
\t\t\t\t\t\t<span data-feather=\"shopping-cart\"></span>
\t\t\t\t\t\tGestion  
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t{% endif %}
\t\t\t\t{% endif %}
\t\t\t
\t\t\t\t\t
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t  <a class=\"nav-link\" href=\"{{path('home_faq')}}\">
\t\t\t\t\t<span data-feather=\"layers\"></span>
\t\t\t\t\tComment ça marche ?
\t\t\t\t  </a>
\t\t\t\t</li>
\t\t\t  </ul>
\t  
\t\t\t<hr>
\t\t\t<div class=\"dropdown\">
\t\t\t  <a href=\"#\" class=\"d-flex align-items-center link-dark text-decoration-none dropdown-toggle\" id=\"dropdownUser2\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t{% if app.user %}
\t\t\t\t<img src=\"https://www.pinclipart.com/picdir/middle/559-5594866_necktie-drawing-vector-round-avatar-user-icon-png.png\" alt=\"\" width=\"32\" height=\"32\" class=\"rounded-circle me-2\">
\t\t\t\t<strong>{{app.user.firstname}}</strong>
\t\t\t\t{% else %}
\t\t\t\t<img src=\"https://png.pngtree.com/png-vector/20190919/ourlarge/pngtree-user-login-or-authenticate-icon-on-gray-background-flat-icon-ve-png-image_1742031.jpg\" alt=\"\" width=\"32\" height=\"32\" class=\"rounded-circle me-2\">
\t\t\t\t<strong>Connect toi</strong>
\t\t\t\t{% endif %}
\t\t\t  </a>
\t\t\t  <ul class=\"dropdown-menu text-small shadow\" aria-labelledby=\"dropdownUser2\">
\t\t\t\t{% if app.user %}
\t\t\t
\t\t\t\t<li><a class=\"dropdown-item\" href=\"{{path('logout')}}\">Deconnexion</a></li>
\t\t\t\t{% else %}
\t\t\t
\t\t\t\t<li><a class=\"dropdown-item\" href=\"{{path('login')}}\">Connexion</a></li>
\t\t\t\t<li><a class=\"dropdown-item\" href=\"{{path('register')}}\">Inscription</a></li>
\t\t\t\t{% endif %}
\t\t\t\t<li><hr class=\"dropdown-divider\"></li>
\t\t\t\t{% if app.user %}
\t\t\t\t<li><a class=\"dropdown-item\" href=\"#\">{{app.user.firstname}}</a></li>
\t\t\t\t{% endif %}
\t\t\t  </ul>
\t\t\t</div>
\t\t  </nav>
\t  
\t\t  <main class=\"col-md-9 ms-sm-auto col-lg-10 px-md-4\">
\t\t\t<div class=\"d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom\">
\t\t\t  {% if app.user %}
\t\t\t  <h3 class=\"card-header\">
\t\t\t\t{% if (app.user.roles[0] == \"ROLE_ADMIN\") %}
\t\t\t\t<mark>PDG:</mark> 
\t\t\t\t{% else %}
\t\t\t\t<mark>Gérant:</mark> 
\t\t\t\t{% endif %}
\t\t\t\t{{app.user.firstname}} de la société {{app.user.entreprise }}
\t\t\t </h3>
\t\t\t\t{% else %}
\t\t\t\t<h3 class=\"card-header\"> Votre outils de gestion </h3>
\t\t\t\t{% endif %}
\t\t\t  <div class=\"btn-toolbar mb-2 mb-md-0\">
\t\t\t\t  {% if app.user %}
\t\t\t\t\t<div class=\"btn-group me-2\">
\t\t\t\t\t<a href=\"{{path('post')}}\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Fiche</button>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"{{path('register')}}\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Collaborateur</button>
\t\t\t\t\t</a>
\t\t\t\t\t{% if (app.user.roles[0] == \"ROLE_ADMIN\") %}
\t\t\t\t\t<a href=\"{{path('admin')}}\" target=\"_blank\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Gestion</button>
\t\t\t\t\t</a>
\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>
\t\t\t\t{% else %}
\t\t\t\t\t<div class=\"btn-group me-2\">
\t\t\t\t\t\t<a href=\"{{path('login')}}\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Connection</button>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"{{path('register')}}\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Inscription</button>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t{% endif %}
\t\t\t\t<a href=\"{{path('home')}}\">
\t\t\t\t<button type=\"button\" class=\"btn btn-sm btn-outline-secondary dropdown-toggle\" >
\t\t\t\t  <span data-feather=\"calendar\"></span>
\t\t\t\t\tDashboard
\t\t\t\t</button>
\t\t\t</a>
\t\t\t  </div>
\t\t\t    
\t\t\t</div>
\t\t\t<div>
\t\t\t\t{% block body %}{% endblock %}
\t\t\t</div>
\t\t\t<!-- 
\t\t\t<h2>Section title</h2>
\t\t\t<div class=\"table-responsive\">
\t\t\t  <table class=\"table table-striped table-sm\">
\t\t\t\t<thead>
\t\t\t\t  <tr>
\t\t\t\t\t<th scope=\"col\">#</th>
\t\t\t\t\t<th scope=\"col\">Header</th>
\t\t\t\t\t<th scope=\"col\">Header</th>
\t\t\t\t\t<th scope=\"col\">Header</th>
\t\t\t\t\t<th scope=\"col\">Header</th>
\t\t\t\t  </tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t  <tr>
\t\t\t\t\t<td>1,001</td>
\t\t\t\t\t<td>random</td>
\t\t\t\t\t<td>data</td>
\t\t\t\t\t<td>placeholder</td>
\t\t\t\t\t<td>text</td>
\t\t\t\t  </tr>
\t\t\t\t  <tr>
\t\t\t\t\t<td>1,002</td>
\t\t\t\t\t<td>placeholder</td>
\t\t\t\t\t<td>irrelevant</td>
\t\t\t\t\t<td>visual</td>
\t\t\t\t\t<td>layout</td>
\t\t\t\t  </tr>
\t\t\t\t  <tr>
\t\t\t\t\t<td>1,003</td>
\t\t\t\t\t<td>data</td>
\t\t\t\t\t<td>rich</td>
\t\t\t\t\t<td>dashboard</td>
\t\t\t\t\t<td>tabular</td>
\t\t\t\t  </tr>
\t\t\t\t  <tr>
\t\t\t\t\t<td>1,003</td>
\t\t\t\t\t<td>information</td>
\t\t\t\t\t<td>placeholder</td>
\t\t\t\t\t<td>illustrative</td>
\t\t\t\t\t<td>data</td>
\t\t\t\t  </tr>
\t\t\t\t  <tr>
\t\t\t\t\t<td>1,004</td>
\t\t\t\t\t<td>text</td>
\t\t\t\t\t<td>random</td>
\t\t\t\t\t<td>layout</td>
\t\t\t\t\t<td>dashboard</td>
\t\t\t\t  </tr>
\t\t\t\t  <tr>
\t\t\t\t\t<td>1,005</td>
\t\t\t\t\t<td>dashboard</td>
\t\t\t\t\t<td>irrelevant</td>
\t\t\t\t\t<td>text</td>
\t\t\t\t\t<td>placeholder</td>
\t\t\t\t  </tr>
\t\t\t\t  <tr>
\t\t\t\t\t<td>1,006</td>
\t\t\t\t\t<td>dashboard</td>
\t\t\t\t\t<td>illustrative</td>
\t\t\t\t\t<td>rich</td>
\t\t\t\t\t<td>data</td>
\t\t\t\t  </tr>
\t\t\t\t  <tr>
\t\t\t\t\t<td>1,007</td>
\t\t\t\t\t<td>placeholder</td>
\t\t\t\t\t<td>tabular</td>
\t\t\t\t\t<td>information</td>
\t\t\t\t\t<td>irrelevant</td>
\t\t\t\t  </tr>
\t\t\t\t  <tr>
\t\t\t\t\t<td>1,008</td>
\t\t\t\t\t<td>random</td>
\t\t\t\t\t<td>data</td>
\t\t\t\t\t<td>placeholder</td>
\t\t\t\t\t<td>text</td>
\t\t\t\t  </tr>
\t\t\t\t  <tr>
\t\t\t\t\t<td>1,009</td>
\t\t\t\t\t<td>placeholder</td>
\t\t\t\t\t<td>irrelevant</td>
\t\t\t\t\t<td>visual</td>
\t\t\t\t\t<td>layout</td>
\t\t\t\t  </tr>
\t\t\t\t  <tr>
\t\t\t\t\t<td>1,010</td>
\t\t\t\t\t<td>data</td>
\t\t\t\t\t<td>rich</td>
\t\t\t\t\t<td>dashboard</td>
\t\t\t\t\t<td>tabular</td>
\t\t\t\t  </tr>
\t\t\t\t  <tr>
\t\t\t\t\t<td>1,011</td>
\t\t\t\t\t<td>information</td>
\t\t\t\t\t<td>placeholder</td>
\t\t\t\t\t<td>illustrative</td>
\t\t\t\t\t<td>data</td>
\t\t\t\t  </tr>
\t\t\t\t  <tr>
\t\t\t\t\t<td>1,012</td>
\t\t\t\t\t<td>text</td>
\t\t\t\t\t<td>placeholder</td>
\t\t\t\t\t<td>layout</td>
\t\t\t\t\t<td>dashboard</td>
\t\t\t\t  </tr>
\t\t\t\t  <tr>
\t\t\t\t\t<td>1,013</td>
\t\t\t\t\t<td>dashboard</td>
\t\t\t\t\t<td>irrelevant</td>
\t\t\t\t\t<td>text</td>
\t\t\t\t\t<td>visual</td>
\t\t\t\t  </tr>
\t\t\t\t  <tr>
\t\t\t\t\t<td>1,014</td>
\t\t\t\t\t<td>dashboard</td>
\t\t\t\t\t<td>illustrative</td>
\t\t\t\t\t<td>rich</td>
\t\t\t\t\t<td>data</td>
\t\t\t\t  </tr>
\t\t\t\t  <tr>
\t\t\t\t\t<td>1,015</td>
\t\t\t\t\t<td>random</td>
\t\t\t\t\t<td>tabular</td>
\t\t\t\t\t<td>information</td>
\t\t\t\t\t<td>text</td>
\t\t\t\t  </tr>
\t\t\t\t</tbody>
\t\t\t  </table>
\t\t\t</div>
\t\t  </main>
\t\t</div>
\t\t-->
\t  </div>
\t  




\t 
\t\t\t\t 
\t\t</body>
\t</html>
\t<form>
", "base.html.twig", "/Users/pabios/Documents/3wa/symfony/blogsf01/templates/base.html.twig");
    }
}
