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

/* api/voirPlus.html.twig */
class __TwigTemplate_c3f0be71daf4ecbb1be7eb743008457f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "api/voirPlus.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "api/voirPlus.html.twig"));

        // line 1
        echo "<div >
    <table class=\"resultat\">

    </table>
</div>
<!-- 
";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 7, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 8
            echo "
\t<div class=\"col-md-3\">
\t\t<div class=\"row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative\">
\t\t\t<div class=\"col p-4 d-flex flex-column position-static\">
\t\t\t\t";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["post"], "categories", [], "any", false, false, false, 12));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 13
                echo "\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category-posts", ["name" => twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 13)]), "html", null, true);
                echo "\">
\t\t\t\t\t\t<strong class=\"d-inline-block mb-2 text-success\">";
                // line 14
                echo twig_escape_filter($this->env, $context["category"], "html", null, true);
                echo "</strong>
\t\t\t\t\t</a>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "\t\t\t\t<img class=\"me-3\" width=\"100%\" src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "image", [], "any", false, false, false, 17), "html", null, true);
            echo "\" alt=\"\">
\t\t\t\t\t
\t\t\t\t<a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor-posts", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "user", [], "any", false, false, false, 19), "id", [], "any", false, false, false, 19)]), "html", null, true);
            echo "\">
\t\t\t\t\t<strong class=\"d-inline-block mb-2 text-warning\">";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "user", [], "any", false, false, false, 20), "email", [], "any", false, false, false, 20), "html", null, true);
            echo "</strong>
\t\t\t\t</a>
\t\t\t\t<h3 class=\"mb-0\">";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 22), "html", null, true);
            echo "</h3>
\t\t\t\t<div class=\"mb-1 text-muted\">
\t\t\t\t\t<a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("date-posts", ["date" => twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "publishedDate", [], "any", false, false, false, 24), "Y-m-d")]), "html", null, true);
            echo "\">
\t\t\t\t\t\t";
            // line 25
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "publishedDate", [], "any", false, false, false, 25), "d/m/Y"), "html", null, true);
            echo "</a>
\t\t\t\t</div>
\t\t\t\t<p class=\"mb-auto\">";
            // line 27
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_replace_filter(twig_striptags(twig_get_attribute($this->env, $this->source, $context["post"], "content", [], "any", false, false, false, 27)), ["&nbsp;" => ""]), 0, 50), "html", null, true);
            echo "
\t\t\t\t\t...</p>
\t\t\t\t<a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post-detail", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 29)]), "html", null, true);
            echo " \" class=\"\">Lire la suite</a>
\t\t\t</div>

\t\t</div>
\t\t\t\t<a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api_post_voir", ["offset" => ((isset($context["offset"]) || array_key_exists("offset", $context) ? $context["offset"] : (function () { throw new RuntimeError('Variable "offset" does not exist.', 33, $this->source); })()) + 5)]), "html", null, true);
            echo " \" class=\"\">Next</a>

\t</div>




";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "-->";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "api/voirPlus.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 41,  120 => 33,  113 => 29,  108 => 27,  103 => 25,  99 => 24,  94 => 22,  89 => 20,  85 => 19,  79 => 17,  70 => 14,  65 => 13,  61 => 12,  55 => 8,  51 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div >
    <table class=\"resultat\">

    </table>
</div>
<!-- 
{% for post in posts %}

\t<div class=\"col-md-3\">
\t\t<div class=\"row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative\">
\t\t\t<div class=\"col p-4 d-flex flex-column position-static\">
\t\t\t\t{% for category in post.categories %}
\t\t\t\t\t<a href=\"{{ path('category-posts', { name: category.name}) }}\">
\t\t\t\t\t\t<strong class=\"d-inline-block mb-2 text-success\">{{category}}</strong>
\t\t\t\t\t</a>
\t\t\t\t{% endfor %}
\t\t\t\t<img class=\"me-3\" width=\"100%\" src=\"{{ post.image}}\" alt=\"\">
\t\t\t\t\t
\t\t\t\t<a href=\"{{ path('editor-posts', { id: post.user.id}) }}\">
\t\t\t\t\t<strong class=\"d-inline-block mb-2 text-warning\">{{post.user.email}}</strong>
\t\t\t\t</a>
\t\t\t\t<h3 class=\"mb-0\">{{post.title}}</h3>
\t\t\t\t<div class=\"mb-1 text-muted\">
\t\t\t\t\t<a href=\"{{ path('date-posts', { date: post.publishedDate|date(\"Y-m-d\")}) }}\">
\t\t\t\t\t\t{{ post.publishedDate|date(\"d/m/Y\")}}</a>
\t\t\t\t</div>
\t\t\t\t<p class=\"mb-auto\">{{ post.content|striptags|replace({'&nbsp;': ''})|slice(0,50)}}
\t\t\t\t\t...</p>
\t\t\t\t<a href=\"{{ path('post-detail', { id: post.id}) }} \" class=\"\">Lire la suite</a>
\t\t\t</div>

\t\t</div>
\t\t\t\t<a href=\"{{ path('api_post_voir', { offset: offset+5}) }} \" class=\"\">Next</a>

\t</div>




{% endfor %}
-->", "api/voirPlus.html.twig", "/Users/pabios/Documents/3wa/symfony/blogsf01/templates/api/voirPlus.html.twig");
    }
}
