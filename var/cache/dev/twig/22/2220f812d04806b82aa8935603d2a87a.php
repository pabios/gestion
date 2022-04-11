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
class __TwigTemplate_87cab80d3757804aceba1fb30be025dd extends Template
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
\t\t<!-- prix du gazoir + avance espace  retirer a montant convenu -->
\t\t<meta charset=\"UTF-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<title>
\t\t\t";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        // line 11
        echo "\t\t</title>
\t\t";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "
\t\t";
        // line 16
        $this->displayBlock('javascripts', $context, $blocks);
        // line 19
        echo "\t</head>
\t
\t
\t  <body>
\t\t 
    
\t <header class=\"navbar navbar-dark sticky-top bg-primary flex-md-nowrap p-0 shadow\">
\t\t<a href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" class=\"navbar-brand col-md-3 col-lg-2 me-0 px-3\">Manager</a>

\t\t<button class=\"navbar-toggler position-absolute d-md-none collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#sidebarMenu\" aria-controls=\"sidebarMenu\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t  <span class=\"navbar-toggler-icon\"></span>
\t\t</button>
\t\t<form action=\"";
        // line 31
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
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">
\t\t\t\t\t<span data-feather=\"home\"></span>
\t\t\t\t\tDashboard
\t\t\t\t  </a>
\t\t\t\t</li>

\t\t\t\t 
\t\t\t\t";
        // line 54
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "user", [], "any", false, false, false, 54)) {
            // line 55
            echo "\t\t\t\t<li class=\"nav-item\">
\t\t\t\t  <a class=\"nav-link\" href=\" ";
            // line 56
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post");
            echo "\">
\t\t\t\t\t<span data-feather=\"shopping-cart\"></span>
\t\t\t\t\tFiche 
\t\t\t\t  </a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\" ";
            // line 62
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
            echo "\">
\t\t\t\t\t  <span data-feather=\"shopping-cart\"></span>
\t\t\t\t\t  Collaborateur 
\t\t\t\t\t</a>
\t\t\t\t  </li>

\t\t\t\t  ";
            // line 68
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 68, $this->source); })()), "user", [], "any", false, false, false, 68), "roles", [], "any", false, false, false, 68), 0, [], "array", false, false, false, 68) == "ROLE_ADMIN")) {
                // line 69
                echo "\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" target=\"_blank\" href=\" ";
                // line 70
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
                echo "\">
\t\t\t\t\t\t<span data-feather=\"shopping-cart\"></span>
\t\t\t\t\t\tGestion  
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t";
            }
            // line 76
            echo "\t\t\t\t";
        }
        // line 77
        echo "\t\t\t
\t\t\t\t\t
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t  <a class=\"nav-link\" href=\"";
        // line 80
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
        // line 90
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 90, $this->source); })()), "user", [], "any", false, false, false, 90)) {
            // line 91
            echo "\t\t\t\t<img src=\"https://www.pinclipart.com/picdir/middle/559-5594866_necktie-drawing-vector-round-avatar-user-icon-png.png\" alt=\"\" width=\"32\" height=\"32\" class=\"rounded-circle me-2\">
\t\t\t\t<strong>";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 92, $this->source); })()), "user", [], "any", false, false, false, 92), "firstname", [], "any", false, false, false, 92), "html", null, true);
            echo "</strong>
\t\t\t\t";
        } else {
            // line 94
            echo "\t\t\t\t<img src=\"https://png.pngtree.com/png-vector/20190919/ourlarge/pngtree-user-login-or-authenticate-icon-on-gray-background-flat-icon-ve-png-image_1742031.jpg\" alt=\"\" width=\"32\" height=\"32\" class=\"rounded-circle me-2\">
\t\t\t\t<strong>Connect toi</strong>
\t\t\t\t";
        }
        // line 97
        echo "\t\t\t  </a>
\t\t\t  <ul class=\"dropdown-menu text-small shadow\" aria-labelledby=\"dropdownUser2\">
\t\t\t\t";
        // line 99
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 99, $this->source); })()), "user", [], "any", false, false, false, 99)) {
            // line 100
            echo "\t\t\t
\t\t\t\t<li><a class=\"dropdown-item\" href=\"";
            // line 101
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\">Deconnexion</a></li>
\t\t\t\t";
        } else {
            // line 103
            echo "\t\t\t
\t\t\t\t<li><a class=\"dropdown-item\" href=\"";
            // line 104
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\">Connexion</a></li>
\t\t\t\t<li><a class=\"dropdown-item\" href=\"";
            // line 105
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
            echo "\">Inscription</a></li>
\t\t\t\t";
        }
        // line 107
        echo "\t\t\t\t<li><hr class=\"dropdown-divider\"></li>
\t\t\t\t";
        // line 108
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 108, $this->source); })()), "user", [], "any", false, false, false, 108)) {
            // line 109
            echo "\t\t\t\t<li><a class=\"dropdown-item\" href=\"#\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 109, $this->source); })()), "user", [], "any", false, false, false, 109), "firstname", [], "any", false, false, false, 109), "html", null, true);
            echo "</a></li>
\t\t\t\t";
        }
        // line 111
        echo "\t\t\t  </ul>
\t\t\t</div>
\t\t  </nav>
\t  
\t\t  <main class=\"col-md-9 ms-sm-auto col-lg-10 px-md-4\">
\t\t\t<div class=\"d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom\">
\t\t\t  ";
        // line 117
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 117, $this->source); })()), "user", [], "any", false, false, false, 117)) {
            // line 118
            echo "\t\t\t  <h3 class=\"card-header\">
\t\t\t\t";
            // line 119
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 119, $this->source); })()), "user", [], "any", false, false, false, 119), "roles", [], "any", false, false, false, 119), 0, [], "array", false, false, false, 119) == "ROLE_ADMIN")) {
                // line 120
                echo "\t\t\t\t<mark>PDG:</mark> 
\t\t\t\t";
            } else {
                // line 122
                echo "\t\t\t\t<mark>Office:</mark> 
\t\t\t\t";
            }
            // line 124
            echo "\t\t\t\t";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 124, $this->source); })()), "user", [], "any", false, false, false, 124), "firstname", [], "any", false, false, false, 124)), "truncate", [0 => 6, 1 => "."], "method", false, false, false, 124), "html", null, true);
            echo " de la société ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 124, $this->source); })()), "user", [], "any", false, false, false, 124), "entreprise", [], "any", false, false, false, 124)), "truncate", [0 => 5, 1 => ".."], "method", false, false, false, 124), "html", null, true);
            echo "
\t\t\t </h3>
\t\t\t\t";
        } else {
            // line 127
            echo "\t\t\t\t<h3 class=\"card-header\"> Votre outils de gestion </h3>
\t\t\t\t";
        }
        // line 129
        echo "\t\t\t  <div class=\"btn-toolbar mb-2 mb-md-0\">
\t\t\t\t  ";
        // line 130
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 130, $this->source); })()), "user", [], "any", false, false, false, 130)) {
            // line 131
            echo "\t\t\t\t\t<div class=\"btn-group me-2\">
\t\t\t\t\t<a href=\"";
            // line 132
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post");
            echo "\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Fiche</button>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"";
            // line 135
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
            echo "\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Collaborateur</button>
\t\t\t\t\t</a>
\t\t\t\t\t";
            // line 138
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 138, $this->source); })()), "user", [], "any", false, false, false, 138), "roles", [], "any", false, false, false, 138), 0, [], "array", false, false, false, 138) == "ROLE_ADMIN")) {
                // line 139
                echo "\t\t\t\t\t<a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
                echo "\" target=\"_blank\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Gestion</button>
\t\t\t\t\t</a>
\t\t\t\t\t";
            }
            // line 143
            echo "\t\t\t\t\t</div>
\t\t\t\t";
        } else {
            // line 145
            echo "\t\t\t\t\t<div class=\"btn-group me-2\">
\t\t\t\t\t\t<a href=\"";
            // line 146
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Connection</button>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"";
            // line 149
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
            echo "\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Inscription</button>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 154
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
        // line 164
        $this->displayBlock('body', $context, $blocks);
        // line 165
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

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 9
        echo "\t\t\t\tManager
\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "\t\t\t<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\" crossorigin=\"anonymous\">
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 17
        echo "\t\t\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p\" crossorigin=\"anonymous\"></script>
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 164
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
        return array (  544 => 164,  533 => 17,  523 => 16,  512 => 13,  502 => 12,  491 => 9,  481 => 8,  327 => 165,  325 => 164,  311 => 154,  303 => 149,  297 => 146,  294 => 145,  290 => 143,  282 => 139,  280 => 138,  274 => 135,  268 => 132,  265 => 131,  263 => 130,  260 => 129,  256 => 127,  247 => 124,  243 => 122,  239 => 120,  237 => 119,  234 => 118,  232 => 117,  224 => 111,  218 => 109,  216 => 108,  213 => 107,  208 => 105,  204 => 104,  201 => 103,  196 => 101,  193 => 100,  191 => 99,  187 => 97,  182 => 94,  177 => 92,  174 => 91,  172 => 90,  159 => 80,  154 => 77,  151 => 76,  142 => 70,  139 => 69,  137 => 68,  128 => 62,  119 => 56,  116 => 55,  114 => 54,  104 => 47,  85 => 31,  77 => 26,  68 => 19,  66 => 16,  63 => 15,  61 => 12,  58 => 11,  56 => 8,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
\t<head>
\t\t<!-- prix du gazoir + avance espace  retirer a montant convenu -->
\t\t<meta charset=\"UTF-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<title>
\t\t\t{% block title %}
\t\t\t\tManager
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
\t\t<a href=\"{{path('home')}}\" class=\"navbar-brand col-md-3 col-lg-2 me-0 px-3\">Manager</a>

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
\t\t\t\t<mark>Office:</mark> 
\t\t\t\t{% endif %}
\t\t\t\t{{app.user.firstname |u.truncate(6, '.')}} de la société {{app.user.entreprise |u.truncate(5, '..') }}
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
