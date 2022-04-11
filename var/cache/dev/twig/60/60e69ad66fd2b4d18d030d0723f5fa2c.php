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

/* /home/posts.html.twig */
class __TwigTemplate_2a0ae5058ffa0fed288f9033f7ae4611 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/home/posts.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/home/posts.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 1, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 2
            echo "
\t<div class=\"col-md-3\">
\t\t<div class=\"row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative\">
\t\t\t<div class=\"col p-4 d-flex flex-column position-static\">
\t\t\t \t
\t\t\t\t<img class=\"me-3\" width=\"100%\" src=\"";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "image", [], "any", false, false, false, 7), "html", null, true);
            echo "\" alt=\"\">
\t\t\t\t\t
\t\t\t\t<a class=\"btn btn-link\" href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor-posts", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "user", [], "any", false, false, false, 9), "id", [], "any", false, false, false, 9)]), "html", null, true);
            echo "\">
\t\t\t\t\t<strong  >";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "user", [], "any", false, false, false, 10), "firstname", [], "any", false, false, false, 10), "html", null, true);
            echo "</strong>
\t\t\t\t</a>
\t\t\t\t<h3 class=\"mb-0\">";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 12)), "truncate", [0 => 6, 1 => "..."], "method", false, false, false, 12), "html", null, true);
            echo "</h3>
\t\t\t\t<div class=\"mb-1 text-muted\">
\t\t\t\t\t<a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("date-posts", ["date" => twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "publishedDate", [], "any", false, false, false, 14), "Y-m-d")]), "html", null, true);
            echo "\">
\t\t\t\t\t\t";
            // line 15
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "publishedDate", [], "any", false, false, false, 15), "d/m/Y"), "html", null, true);
            echo "</a>
\t\t\t\t</div>
\t\t\t\t<p class=\"mb-auto\">";
            // line 17
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_replace_filter(twig_striptags(twig_get_attribute($this->env, $this->source, $context["post"], "content", [], "any", false, false, false, 17)), ["&nbsp;" => ""]), 0, 50), "html", null, true);
            echo "
\t\t\t\t\t...</p>
\t\t\t\t<a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post-detail", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 19)]), "html", null, true);
            echo " \" class=\"\">Lire</a>
\t\t\t\t<mark>Entreprise:</mark>
\t\t\t\t";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["post"], "categories", [], "any", false, false, false, 21));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 22
                echo "\t\t\t\t\t<a class=\"btn btn-primary\" role=\"button\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category-posts", ["name" => twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 22)]), "html", null, true);
                echo "\">
\t\t\t\t\t\t<strong  >";
                // line 23
                echo twig_escape_filter($this->env, $context["category"], "html", null, true);
                echo "</strong>
\t\t\t\t\t</a>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "\t\t\t</div>

\t\t</div>
\t</div>


";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "/home/posts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 26,  101 => 23,  96 => 22,  92 => 21,  87 => 19,  82 => 17,  77 => 15,  73 => 14,  68 => 12,  63 => 10,  59 => 9,  54 => 7,  47 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for post in posts %}

\t<div class=\"col-md-3\">
\t\t<div class=\"row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative\">
\t\t\t<div class=\"col p-4 d-flex flex-column position-static\">
\t\t\t \t
\t\t\t\t<img class=\"me-3\" width=\"100%\" src=\"{{ post.image}}\" alt=\"\">
\t\t\t\t\t
\t\t\t\t<a class=\"btn btn-link\" href=\"{{ path('editor-posts', { id: post.user.id}) }}\">
\t\t\t\t\t<strong  >{{post.user.firstname}}</strong>
\t\t\t\t</a>
\t\t\t\t<h3 class=\"mb-0\">{{post.title  |u.truncate(6, '...')}}</h3>
\t\t\t\t<div class=\"mb-1 text-muted\">
\t\t\t\t\t<a href=\"{{ path('date-posts', { date: post.publishedDate|date(\"Y-m-d\")}) }}\">
\t\t\t\t\t\t{{ post.publishedDate|date(\"d/m/Y\")}}</a>
\t\t\t\t</div>
\t\t\t\t<p class=\"mb-auto\">{{ post.content|striptags|replace({'&nbsp;': ''})|slice(0,50)}}
\t\t\t\t\t...</p>
\t\t\t\t<a href=\"{{ path('post-detail', { id: post.id}) }} \" class=\"\">Lire</a>
\t\t\t\t<mark>Entreprise:</mark>
\t\t\t\t{%  for category in post.categories %}
\t\t\t\t\t<a class=\"btn btn-primary\" role=\"button\" href=\"{{ path('category-posts', { name: category.name}) }}\">
\t\t\t\t\t\t<strong  >{{category}}</strong>
\t\t\t\t\t</a>
\t\t\t\t{% endfor %}
\t\t\t</div>

\t\t</div>
\t</div>


{% endfor %}
", "/home/posts.html.twig", "/Users/pabios/Documents/3wa/symfony/blogsf01/templates/home/posts.html.twig");
    }
}
