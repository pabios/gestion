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

/* home/index.html.twig */
class __TwigTemplate_8d838c7f452f93f49a32ec71a9246a4f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        echo "
\t<div id=\"posts\" class=\"row mb-2\">
\t\t";
        // line 7
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "user", [], "any", false, false, false, 7)) {
            // line 8
            echo "\t";
            $this->loadTemplate("/home/posts.html.twig", "home/index.html.twig", 8)->display($context);
            // line 9
            echo "\t</div>
\t<button class=\"btn btn-dark mb-5 \" id=\"loadPosts\">Chargez plus d'articles</button>

\t\t";
        } else {
            // line 13
            echo "\t\t 
\t\t  <div class=\"card-footer\">
\t\t\t<div class=\"alert alert-primary\" role=\"alert\">
\t\t\t\tVous n’êtes pas connecter 
\t\t\t  </div>
\t\t\t<small style=\"font-size: medium;\"  >  
\t\t\t\t Veuillez lire la page <a href=\"";
            // line 19
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_faq");
            echo "\" >Comment ça marche</a> si c'est votre première visite
\t\t\t</small>
\t\t</div>
\t\t\t
\t  </div>
\t\t";
        }
        // line 25
        echo "
\t
\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 25,  91 => 19,  83 => 13,  77 => 9,  74 => 8,  72 => 7,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block body %}

\t<div id=\"posts\" class=\"row mb-2\">
\t\t{% if app.user %}
\t{% include \"/home/posts.html.twig\" %}
\t</div>
\t<button class=\"btn btn-dark mb-5 \" id=\"loadPosts\">Chargez plus d'articles</button>

\t\t{% else %}
\t\t 
\t\t  <div class=\"card-footer\">
\t\t\t<div class=\"alert alert-primary\" role=\"alert\">
\t\t\t\tVous n’êtes pas connecter 
\t\t\t  </div>
\t\t\t<small style=\"font-size: medium;\"  >  
\t\t\t\t Veuillez lire la page <a href=\"{{path('home_faq')}}\" >Comment ça marche</a> si c'est votre première visite
\t\t\t</small>
\t\t</div>
\t\t\t
\t  </div>
\t\t{% endif %}

\t
\t{% endblock %}
", "home/index.html.twig", "/Users/pabios/Documents/3wa/symfony/blogsf01/templates/home/index.html.twig");
    }
}
