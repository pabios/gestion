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

/* faq/faq.html.twig */
class __TwigTemplate_ca13097921bdcfc71f0fcbca2a7460e3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "faq/faq.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "faq/faq.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "faq/faq.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<div class=\"card-deck\">
    <div class=\"card\">
        
      <div class=\"card-body\">
        <h5 class=\"card-title\">FAQ</h5>
        <p class=\"card-text\"> </p>
      </div>
      <div class=\"card-footer\">
        <small style=\"font-size: medium;\"  >Garder un oeil sur son entreprise est de fois chose pas évident. 
            Avoir  un outils de gestion centraliser  qui permet a vos gérant de mettre a jour les différents flux de l’entreprise. 
            
            <h4>La plateforme comporte deux parties</h4>
            <p>Une Interface pour vos gérant  et une Interface administrateur pour vous.</p> 
           <p>L’interface administrateur vous permet de donner des pouvoir à vos employer, de gérer vos inventaires ( supprimer mètre a jour et d’ajouter  de nouvelle service a votre équipe. )</p> 
           <h4>Différents onglet </h4>
           <p>Différents onglets apparaitrons selon le poste que vous occuper dans l’entreprise et selon le pouvoir que votre PDG vous est attribuer.</p>
           <h4>Inscription </h4>
           <p>Votre bosse vous demandera tout simplement de venir s’inscrire sur la plateforme.
            Dès lors au moment de cette inscription vous aurez tout simplement a choisir le nom de votre entreprise sur la liste déroulant.</p>
           <h4>Connection </h4>
            <p>Une fois inscrit vous pourrez vous connecter et accéder a votre interface  qui sera a présent basique jusqu’a ce que votre responsable vous affiler different rôle dans l’entreprise. 
                Si votre inscription n’est pas valider par votre responsable dans un délai  de 48h alors votre compte sera automatiquement supprimer incluant  tout vos mouvements récent sur votre compte. </p>
        </small>
      </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "faq/faq.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

<div class=\"card-deck\">
    <div class=\"card\">
        
      <div class=\"card-body\">
        <h5 class=\"card-title\">FAQ</h5>
        <p class=\"card-text\"> </p>
      </div>
      <div class=\"card-footer\">
        <small style=\"font-size: medium;\"  >Garder un oeil sur son entreprise est de fois chose pas évident. 
            Avoir  un outils de gestion centraliser  qui permet a vos gérant de mettre a jour les différents flux de l’entreprise. 
            
            <h4>La plateforme comporte deux parties</h4>
            <p>Une Interface pour vos gérant  et une Interface administrateur pour vous.</p> 
           <p>L’interface administrateur vous permet de donner des pouvoir à vos employer, de gérer vos inventaires ( supprimer mètre a jour et d’ajouter  de nouvelle service a votre équipe. )</p> 
           <h4>Différents onglet </h4>
           <p>Différents onglets apparaitrons selon le poste que vous occuper dans l’entreprise et selon le pouvoir que votre PDG vous est attribuer.</p>
           <h4>Inscription </h4>
           <p>Votre bosse vous demandera tout simplement de venir s’inscrire sur la plateforme.
            Dès lors au moment de cette inscription vous aurez tout simplement a choisir le nom de votre entreprise sur la liste déroulant.</p>
           <h4>Connection </h4>
            <p>Une fois inscrit vous pourrez vous connecter et accéder a votre interface  qui sera a présent basique jusqu’a ce que votre responsable vous affiler different rôle dans l’entreprise. 
                Si votre inscription n’est pas valider par votre responsable dans un délai  de 48h alors votre compte sera automatiquement supprimer incluant  tout vos mouvements récent sur votre compte. </p>
        </small>
      </div>
    </div>
</div>
{% endblock   %}
", "faq/faq.html.twig", "/Users/pabios/Documents/3wa/symfony/blogsf01/templates/faq/faq.html.twig");
    }
}
