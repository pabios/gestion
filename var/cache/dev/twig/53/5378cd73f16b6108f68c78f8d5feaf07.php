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

/* @EasyAdmin/crud/index.html.twig */
class __TwigTemplate_79be5f428cf3fcba11983a06d188145d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body_id' => [$this, 'block_body_id'],
            'body_class' => [$this, 'block_body_class'],
            'configured_head_contents' => [$this, 'block_configured_head_contents'],
            'configured_body_contents' => [$this, 'block_configured_body_contents'],
            'configured_stylesheets' => [$this, 'block_configured_stylesheets'],
            'configured_javascripts' => [$this, 'block_configured_javascripts'],
            'content_title' => [$this, 'block_content_title'],
            'page_actions' => [$this, 'block_page_actions'],
            'filters' => [$this, 'block_filters'],
            'global_actions' => [$this, 'block_global_actions'],
            'batch_actions' => [$this, 'block_batch_actions'],
            'main' => [$this, 'block_main'],
            'table_head' => [$this, 'block_table_head'],
            'table_body' => [$this, 'block_table_body'],
            'entity_actions' => [$this, 'block_entity_actions'],
            'table_body_empty' => [$this, 'block_table_body_empty'],
            'table_footer' => [$this, 'block_table_footer'],
            'paginator' => [$this, 'block_paginator'],
            'delete_form' => [$this, 'block_delete_form'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 4
        return $this->loadTemplate(twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 4, $this->source); })()), "templatePath", [0 => "layout"], "method", false, false, false, 4), "@EasyAdmin/crud/index.html.twig", 4);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/crud/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/crud/index.html.twig"));

        // line 5
        $context["__internal_cd75d14ec54efd4dbe82cdeab4f8414a67d85bef8f0d58c9385b56f5a7417508"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 5, $this->source); })()), "i18n", [], "any", false, false, false, 5), "translationDomain", [], "any", false, false, false, 5);
        // line 10
        $context["ea_field_assts"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 10, $this->source); })()), "crud", [], "any", false, false, false, 10), "fieldAssets", [0 => twig_constant("EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Crud::PAGE_INDEX")], "method", false, false, false, 10);
        // line 47
        $context["has_batch_actions"] = (twig_length_filter($this->env, (isset($context["batch_actions"]) || array_key_exists("batch_actions", $context) ? $context["batch_actions"] : (function () { throw new RuntimeError('Variable "batch_actions" does not exist.', 47, $this->source); })())) > 0);
        // line 4
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 7
    public function block_body_id($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_id"));

        (((twig_length_filter($this->env, (isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new RuntimeError('Variable "entities" does not exist.', 7, $this->source); })())) > 0)) ? (print (twig_escape_filter($this->env, ("ea-index-" . twig_get_attribute($this->env, $this->source, twig_first($this->env, (isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new RuntimeError('Variable "entities" does not exist.', 7, $this->source); })())), "name", [], "any", false, false, false, 7)), "html", null, true))) : (print ("")));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 8
    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("ea-index" . (((twig_length_filter($this->env, (isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new RuntimeError('Variable "entities" does not exist.', 8, $this->source); })())) > 0)) ? ((" ea-index-" . twig_get_attribute($this->env, $this->source, twig_first($this->env, (isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new RuntimeError('Variable "entities" does not exist.', 8, $this->source); })())), "name", [], "any", false, false, false, 8))) : (""))), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 12
    public function block_configured_head_contents($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "configured_head_contents"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "configured_head_contents"));

        // line 13
        echo "    ";
        $this->displayParentBlock("configured_head_contents", $context, $blocks);
        echo "
    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["ea_field_assts"]) || array_key_exists("ea_field_assts", $context) ? $context["ea_field_assts"] : (function () { throw new RuntimeError('Variable "ea_field_assts" does not exist.', 14, $this->source); })()), "headContents", [], "any", false, false, false, 14));
        foreach ($context['_seq'] as $context["_key"] => $context["htmlContent"]) {
            // line 15
            echo "        ";
            echo $context["htmlContent"];
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['htmlContent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 19
    public function block_configured_body_contents($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "configured_body_contents"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "configured_body_contents"));

        // line 20
        echo "    ";
        $this->displayParentBlock("configured_body_contents", $context, $blocks);
        echo "
    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["ea_field_assts"]) || array_key_exists("ea_field_assts", $context) ? $context["ea_field_assts"] : (function () { throw new RuntimeError('Variable "ea_field_assts" does not exist.', 21, $this->source); })()), "bodyContents", [], "any", false, false, false, 21));
        foreach ($context['_seq'] as $context["_key"] => $context["htmlContent"]) {
            // line 22
            echo "        ";
            echo $context["htmlContent"];
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['htmlContent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 26
    public function block_configured_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "configured_stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "configured_stylesheets"));

        // line 27
        echo "    ";
        $this->displayParentBlock("configured_stylesheets", $context, $blocks);
        echo "
    ";
        // line 28
        echo twig_include($this->env, $context, "@EasyAdmin/includes/_css_assets.html.twig", ["assets" => twig_get_attribute($this->env, $this->source, (isset($context["ea_field_assts"]) || array_key_exists("ea_field_assts", $context) ? $context["ea_field_assts"] : (function () { throw new RuntimeError('Variable "ea_field_assts" does not exist.', 28, $this->source); })()), "cssAssets", [], "any", false, false, false, 28)], false);
        echo "
    ";
        // line 29
        echo twig_include($this->env, $context, "@EasyAdmin/includes/_encore_link_tags.html.twig", ["assets" => twig_get_attribute($this->env, $this->source, (isset($context["ea_field_assts"]) || array_key_exists("ea_field_assts", $context) ? $context["ea_field_assts"] : (function () { throw new RuntimeError('Variable "ea_field_assts" does not exist.', 29, $this->source); })()), "webpackEncoreAssets", [], "any", false, false, false, 29)], false);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 32
    public function block_configured_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "configured_javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "configured_javascripts"));

        // line 33
        echo "    ";
        $this->displayParentBlock("configured_javascripts", $context, $blocks);
        echo "
    ";
        // line 34
        echo twig_include($this->env, $context, "@EasyAdmin/includes/_js_assets.html.twig", ["assets" => twig_get_attribute($this->env, $this->source, (isset($context["ea_field_assts"]) || array_key_exists("ea_field_assts", $context) ? $context["ea_field_assts"] : (function () { throw new RuntimeError('Variable "ea_field_assts" does not exist.', 34, $this->source); })()), "jsAssets", [], "any", false, false, false, 34)], false);
        echo "
    ";
        // line 35
        echo twig_include($this->env, $context, "@EasyAdmin/includes/_encore_script_tags.html.twig", ["assets" => twig_get_attribute($this->env, $this->source, (isset($context["ea_field_assts"]) || array_key_exists("ea_field_assts", $context) ? $context["ea_field_assts"] : (function () { throw new RuntimeError('Variable "ea_field_assts" does not exist.', 35, $this->source); })()), "webpackEncoreAssets", [], "any", false, false, false, 35)], false);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 38
    public function block_content_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_title"));

        // line 39
        ob_start();
        // line 40
        $context["custom_page_title"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 40, $this->source); })()), "crud", [], "any", false, false, false, 40), "customPageTitle", [0 => "index"], "method", false, false, false, 40);
        // line 41
        echo "        ";
        echo (((null === (isset($context["custom_page_title"]) || array_key_exists("custom_page_title", $context) ? $context["custom_page_title"] : (function () { throw new RuntimeError('Variable "custom_page_title" does not exist.', 41, $this->source); })()))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 42
(isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 42, $this->source); })()), "crud", [], "any", false, false, false, 42), "defaultPageTitle", [0 => "index"], "method", false, false, false, 42), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 42, $this->source); })()), "i18n", [], "any", false, false, false, 42), "translationParameters", [], "any", false, false, false, 42), "EasyAdminBundle")) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(        // line 43
(isset($context["custom_page_title"]) || array_key_exists("custom_page_title", $context) ? $context["custom_page_title"] : (function () { throw new RuntimeError('Variable "custom_page_title" does not exist.', 43, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 43, $this->source); })()), "i18n", [], "any", false, false, false, 43), "translationParameters", [], "any", false, false, false, 43),         // line 5
(isset($context["__internal_cd75d14ec54efd4dbe82cdeab4f8414a67d85bef8f0d58c9385b56f5a7417508"]) || array_key_exists("__internal_cd75d14ec54efd4dbe82cdeab4f8414a67d85bef8f0d58c9385b56f5a7417508", $context) ? $context["__internal_cd75d14ec54efd4dbe82cdeab4f8414a67d85bef8f0d58c9385b56f5a7417508"] : (function () { throw new RuntimeError('Variable "__internal_cd75d14ec54efd4dbe82cdeab4f8414a67d85bef8f0d58c9385b56f5a7417508" does not exist.', 5, $this->source); })()))));
        $___internal_parse_0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 39
        echo twig_spaceless($___internal_parse_0_);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 48
    public function block_page_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_actions"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_actions"));

        // line 49
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 49, $this->source); })())) > 0)) {
            // line 50
            echo "        <div class=\"datagrid-filters\">
            ";
            // line 51
            $this->displayBlock('filters', $context, $blocks);
            // line 64
            echo "        </div>
    ";
        }
        // line 66
        echo "
    ";
        // line 67
        $this->displayBlock('global_actions', $context, $blocks);
        // line 74
        echo "    ";
        $this->displayBlock('batch_actions', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 51
    public function block_filters($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "filters"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "filters"));

        // line 52
        echo "                ";
        $context["applied_filters"] = twig_get_array_keys_filter(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, true, false, 52), "query", [], "any", false, true, false, 52), "all", [], "any", false, true, false, 52), "filters", [], "array", true, true, false, 52)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, true, false, 52), "query", [], "any", false, true, false, 52), "all", [], "any", false, true, false, 52), "filters", [], "array", false, false, false, 52), [])) : ([])));
        // line 53
        echo "                <div class=\"btn-group action-filters\">
                    <a href=\"#\" data-href=\"";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "setAction", [0 => "renderFilters"], "method", false, false, false, 54), "includeReferrer", [], "method", false, false, false, 54), "html", null, true);
        echo "\" class=\"btn btn-secondary btn-labeled btn-labeled-right action-filters-button disabled ";
        echo (((isset($context["applied_filters"]) || array_key_exists("applied_filters", $context) ? $context["applied_filters"] : (function () { throw new RuntimeError('Variable "applied_filters" does not exist.', 54, $this->source); })())) ? ("action-filters-applied") : (""));
        echo "\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-filters\">
                        <i class=\"fa fa-filter fa-fw\"></i> ";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filter.title", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 55, $this->source); })()), "i18n", [], "any", false, false, false, 55), "translationParameters", [], "any", false, false, false, 55), "EasyAdminBundle"), "html", null, true);
        if ((isset($context["applied_filters"]) || array_key_exists("applied_filters", $context) ? $context["applied_filters"] : (function () { throw new RuntimeError('Variable "applied_filters" does not exist.', 55, $this->source); })())) {
            echo " <span class=\"text-primary\">(";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["applied_filters"]) || array_key_exists("applied_filters", $context) ? $context["applied_filters"] : (function () { throw new RuntimeError('Variable "applied_filters" does not exist.', 55, $this->source); })())), "html", null, true);
            echo ")</span>";
        }
        // line 56
        echo "                    </a>
                    ";
        // line 57
        if ((isset($context["applied_filters"]) || array_key_exists("applied_filters", $context) ? $context["applied_filters"] : (function () { throw new RuntimeError('Variable "applied_filters" does not exist.', 57, $this->source); })())) {
            // line 58
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "unset", [0 => "filters"], "method", false, false, false, 58), "html", null, true);
            echo "\" class=\"btn btn-secondary action-filters-reset\">
                            <i class=\"fa fa-close\"></i>
                        </a>
                    ";
        }
        // line 62
        echo "                </div>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 67
    public function block_global_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "global_actions"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "global_actions"));

        // line 68
        echo "        <div class=\"global-actions\">
            ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["global_actions"]) || array_key_exists("global_actions", $context) ? $context["global_actions"] : (function () { throw new RuntimeError('Variable "global_actions" does not exist.', 69, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
            // line 70
            echo "                ";
            echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, $context["action"], "templatePath", [], "any", false, false, false, 70), ["action" => $context["action"]], false);
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "        </div>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 74
    public function block_batch_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "batch_actions"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "batch_actions"));

        // line 75
        echo "        ";
        if ((isset($context["has_batch_actions"]) || array_key_exists("has_batch_actions", $context) ? $context["has_batch_actions"] : (function () { throw new RuntimeError('Variable "has_batch_actions" does not exist.', 75, $this->source); })())) {
            // line 76
            echo "            <div class=\"batch-actions\" style=\"display: none\">
                ";
            // line 77
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["batch_actions"]) || array_key_exists("batch_actions", $context) ? $context["batch_actions"] : (function () { throw new RuntimeError('Variable "batch_actions" does not exist.', 77, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 78
                echo "                    ";
                echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, $context["action"], "templatePath", [], "any", false, false, false, 78), ["action" => $context["action"]], false);
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
            echo "            </div>
        ";
        }
        // line 82
        echo "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 85
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 86
        echo "    ";
        // line 87
        echo "    ";
        $context["sort_field_name"] = twig_first($this->env, twig_get_array_keys_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 87, $this->source); })()), "request", [], "any", false, false, false, 87), "get", [0 => "sort"], "method", false, false, false, 87)));
        // line 88
        echo "    ";
        $context["sort_order"] = twig_first($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 88, $this->source); })()), "request", [], "any", false, false, false, 88), "get", [0 => "sort"], "method", false, false, false, 88));
        // line 89
        echo "    ";
        $context["some_results_are_hidden"] = false;
        // line 90
        echo "    ";
        $context["has_footer"] = (twig_length_filter($this->env, (isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new RuntimeError('Variable "entities" does not exist.', 90, $this->source); })())) != 0);
        // line 91
        echo "    ";
        $context["has_search"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 91, $this->source); })()), "crud", [], "any", false, false, false, 91), "isSearchEnabled", [], "any", false, false, false, 91);
        // line 92
        echo "    ";
        $context["has_filters"] = (twig_length_filter($this->env, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 92, $this->source); })())) > 0);
        // line 93
        echo "    ";
        $context["num_results"] = twig_length_filter($this->env, (isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new RuntimeError('Variable "entities" does not exist.', 93, $this->source); })()));
        // line 94
        echo "
    <table class=\"table datagrid ";
        // line 95
        echo ((twig_test_empty((isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new RuntimeError('Variable "entities" does not exist.', 95, $this->source); })()))) ? ("datagrid-empty") : (""));
        echo "\">
        ";
        // line 96
        if (((isset($context["num_results"]) || array_key_exists("num_results", $context) ? $context["num_results"] : (function () { throw new RuntimeError('Variable "num_results" does not exist.', 96, $this->source); })()) > 0)) {
            // line 97
            echo "            <thead>
            ";
            // line 98
            $this->displayBlock('table_head', $context, $blocks);
            // line 131
            echo "            </thead>
        ";
        }
        // line 133
        echo "
        <tbody>
        ";
        // line 135
        $this->displayBlock('table_body', $context, $blocks);
        // line 216
        echo "        </tbody>

        <tfoot>
        ";
        // line 219
        $this->displayBlock('table_footer', $context, $blocks);
        // line 221
        echo "        </tfoot>
    </table>

    ";
        // line 224
        if ((twig_length_filter($this->env, (isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new RuntimeError('Variable "entities" does not exist.', 224, $this->source); })())) > 0)) {
            // line 225
            echo "        <div class=\"content-panel-footer without-padding without-border\">
            ";
            // line 226
            $this->displayBlock('paginator', $context, $blocks);
            // line 229
            echo "        </div>
    ";
        }
        // line 231
        echo "
    ";
        // line 232
        $this->displayBlock('delete_form', $context, $blocks);
        // line 235
        echo "
    ";
        // line 236
        if ((isset($context["has_filters"]) || array_key_exists("has_filters", $context) ? $context["has_filters"] : (function () { throw new RuntimeError('Variable "has_filters" does not exist.', 236, $this->source); })())) {
            // line 237
            echo "        ";
            echo twig_include($this->env, $context, "@EasyAdmin/crud/includes/_filters_modal.html.twig");
            echo "
    ";
        }
        // line 239
        echo "
    ";
        // line 240
        if ((isset($context["has_batch_actions"]) || array_key_exists("has_batch_actions", $context) ? $context["has_batch_actions"] : (function () { throw new RuntimeError('Variable "has_batch_actions" does not exist.', 240, $this->source); })())) {
            // line 241
            echo "        ";
            echo twig_include($this->env, $context, "@EasyAdmin/crud/includes/_batch_action_modal.html.twig", [], false);
            echo "
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 98
    public function block_table_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_head"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_head"));

        // line 99
        echo "                <tr>
                    ";
        // line 100
        if ((isset($context["has_batch_actions"]) || array_key_exists("has_batch_actions", $context) ? $context["has_batch_actions"] : (function () { throw new RuntimeError('Variable "has_batch_actions" does not exist.', 100, $this->source); })())) {
            // line 101
            echo "                        <th>
                            <div class=\"form-check\">
                                <span><input type=\"checkbox\" class=\"form-check-input form-batch-checkbox-all\"></span>
                            </div>
                        </th>
                    ";
        }
        // line 107
        echo "
                    ";
        // line 108
        $context["ea_sort_asc"] = twig_constant("EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Option\\SortOrder::ASC");
        // line 109
        echo "                    ";
        $context["ea_sort_desc"] = twig_constant("EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Option\\SortOrder::DESC");
        // line 110
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((((twig_get_attribute($this->env, $this->source, twig_first($this->env, (isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new RuntimeError('Variable "entities" does not exist.', 110, $this->source); })())), "fields", [], "any", true, true, false, 110) &&  !(null === twig_get_attribute($this->env, $this->source, twig_first($this->env, (isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new RuntimeError('Variable "entities" does not exist.', 110, $this->source); })())), "fields", [], "any", false, false, false, 110)))) ? (twig_get_attribute($this->env, $this->source, twig_first($this->env, (isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new RuntimeError('Variable "entities" does not exist.', 110, $this->source); })())), "fields", [], "any", false, false, false, 110)) : ([])));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 111
            echo "                        ";
            $context["is_sorting_field"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 111, $this->source); })()), "search", [], "any", false, false, false, 111), "isSortingField", [0 => twig_get_attribute($this->env, $this->source, $context["field"], "property", [], "any", false, false, false, 111)], "method", false, false, false, 111);
            // line 112
            echo "                        ";
            $context["next_sort_direction"] = (((isset($context["is_sorting_field"]) || array_key_exists("is_sorting_field", $context) ? $context["is_sorting_field"] : (function () { throw new RuntimeError('Variable "is_sorting_field" does not exist.', 112, $this->source); })())) ? ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 112, $this->source); })()), "search", [], "any", false, false, false, 112), "sortDirection", [0 => twig_get_attribute($this->env, $this->source, $context["field"], "property", [], "any", false, false, false, 112)], "method", false, false, false, 112) == (isset($context["ea_sort_desc"]) || array_key_exists("ea_sort_desc", $context) ? $context["ea_sort_desc"] : (function () { throw new RuntimeError('Variable "ea_sort_desc" does not exist.', 112, $this->source); })()))) ? ((isset($context["ea_sort_asc"]) || array_key_exists("ea_sort_asc", $context) ? $context["ea_sort_asc"] : (function () { throw new RuntimeError('Variable "ea_sort_asc" does not exist.', 112, $this->source); })())) : ((isset($context["ea_sort_desc"]) || array_key_exists("ea_sort_desc", $context) ? $context["ea_sort_desc"] : (function () { throw new RuntimeError('Variable "ea_sort_desc" does not exist.', 112, $this->source); })())))) : ((isset($context["ea_sort_desc"]) || array_key_exists("ea_sort_desc", $context) ? $context["ea_sort_desc"] : (function () { throw new RuntimeError('Variable "ea_sort_desc" does not exist.', 112, $this->source); })())));
            // line 113
            echo "                        ";
            $context["column_icon"] = (((isset($context["is_sorting_field"]) || array_key_exists("is_sorting_field", $context) ? $context["is_sorting_field"] : (function () { throw new RuntimeError('Variable "is_sorting_field" does not exist.', 113, $this->source); })())) ? (((((isset($context["next_sort_direction"]) || array_key_exists("next_sort_direction", $context) ? $context["next_sort_direction"] : (function () { throw new RuntimeError('Variable "next_sort_direction" does not exist.', 113, $this->source); })()) == (isset($context["ea_sort_desc"]) || array_key_exists("ea_sort_desc", $context) ? $context["ea_sort_desc"] : (function () { throw new RuntimeError('Variable "ea_sort_desc" does not exist.', 113, $this->source); })()))) ? ("fa-arrow-up") : ("fa-arrow-down"))) : ("fa-sort"));
            // line 114
            echo "
                        <th class=\"";
            // line 115
            echo (((isset($context["is_sorting_field"]) || array_key_exists("is_sorting_field", $context) ? $context["is_sorting_field"] : (function () { throw new RuntimeError('Variable "is_sorting_field" does not exist.', 115, $this->source); })())) ? ("sorted") : (""));
            echo " ";
            echo ((twig_get_attribute($this->env, $this->source, $context["field"], "isVirtual", [], "any", false, false, false, 115)) ? ("field-virtual") : (""));
            echo " header-for-";
            echo twig_escape_filter($this->env, twig_join_filter(twig_array_filter($this->env, twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "cssClass", [], "any", false, false, false, 115), " "), function ($__class__) use ($context, $macros) { $context["class"] = $__class__; return (is_string($__internal_compile_0 = (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 115, $this->source); })())) && is_string($__internal_compile_1 = "field-") && ('' === $__internal_compile_1 || 0 === strpos($__internal_compile_0, $__internal_compile_1))); }), ""), "html", null, true);
            echo " text-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "textAlign", [], "any", false, false, false, 115), "html", null, true);
            echo "\" dir=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 115, $this->source); })()), "i18n", [], "any", false, false, false, 115), "textDirection", [], "any", false, false, false, 115), "html", null, true);
            echo "\">
                            ";
            // line 116
            if (twig_get_attribute($this->env, $this->source, $context["field"], "isSortable", [], "any", false, false, false, 116)) {
                // line 117
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(["page" => 1, "sort" => [twig_get_attribute($this->env, $this->source, $context["field"], "property", [], "any", false, false, false, 117) => (isset($context["next_sort_direction"]) || array_key_exists("next_sort_direction", $context) ? $context["next_sort_direction"] : (function () { throw new RuntimeError('Variable "next_sort_direction" does not exist.', 117, $this->source); })())]]), "includeReferrer", [], "method", false, false, false, 117), "html", null, true);
                echo "\">
                                    ";
                // line 118
                echo twig_get_attribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, false, 118);
                echo " <i class=\"fa fa-fw ";
                echo twig_escape_filter($this->env, (isset($context["column_icon"]) || array_key_exists("column_icon", $context) ? $context["column_icon"] : (function () { throw new RuntimeError('Variable "column_icon" does not exist.', 118, $this->source); })()), "html", null, true);
                echo "\"></i>
                                </a>
                            ";
            } else {
                // line 121
                echo "                                <span>";
                echo twig_get_attribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, false, 121);
                echo "</span>
                            ";
            }
            // line 123
            echo "                        </th>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        echo "
                    <th ";
        // line 126
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 126, $this->source); })()), "crud", [], "any", false, false, false, 126), "showEntityActionsAsDropdown", [], "any", false, false, false, 126)) {
            echo "width=\"10px\"";
        }
        echo " dir=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 126, $this->source); })()), "i18n", [], "any", false, false, false, 126), "textDirection", [], "any", false, false, false, 126), "html", null, true);
        echo "\">
                        <span class=\"sr-only\">";
        // line 127
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.entity_actions", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 127, $this->source); })()), "i18n", [], "any", false, false, false, 127), "translationParameters", [], "any", false, false, false, 127), "EasyAdminBundle"), "html", null, true);
        echo "</span>
                    </th>
                </tr>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 135
    public function block_table_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_body"));

        // line 136
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new RuntimeError('Variable "entities" does not exist.', 136, $this->source); })()));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 137
            echo "                ";
            if ( !twig_get_attribute($this->env, $this->source, $context["entity"], "isAccessible", [], "any", false, false, false, 137)) {
                // line 138
                echo "                    ";
                $context["some_results_are_hidden"] = true;
                // line 139
                echo "                ";
            } else {
                // line 140
                echo "                    <tr data-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entity"], "primaryKeyValueAsString", [], "any", false, false, false, 140), "html", null, true);
                echo "\">
                        ";
                // line 141
                if ((isset($context["has_batch_actions"]) || array_key_exists("has_batch_actions", $context) ? $context["has_batch_actions"] : (function () { throw new RuntimeError('Variable "has_batch_actions" does not exist.', 141, $this->source); })())) {
                    // line 142
                    echo "                            <td class=\"batch-actions-selector\">
                                <div class=\"form-check\">
                                    <input type=\"checkbox\" class=\"form-check-input form-batch-checkbox\" value=\"";
                    // line 144
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entity"], "primaryKeyValue", [], "any", false, false, false, 144), "html", null, true);
                    echo "\">
                                </div>
                            </td>
                        ";
                }
                // line 148
                echo "
                        ";
                // line 149
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["entity"], "fields", [], "any", false, false, false, 149));
                foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                    // line 150
                    echo "                            <td data-label=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, false, 150), "html_attr");
                    echo "\" class=\"";
                    echo (((twig_get_attribute($this->env, $this->source, $context["field"], "property", [], "any", false, false, false, 150) == (isset($context["sort_field_name"]) || array_key_exists("sort_field_name", $context) ? $context["sort_field_name"] : (function () { throw new RuntimeError('Variable "sort_field_name" does not exist.', 150, $this->source); })()))) ? ("sorted") : (""));
                    echo " text-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "textAlign", [], "any", false, false, false, 150), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "cssClass", [], "any", false, false, false, 150), "html", null, true);
                    echo "\" dir=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 150, $this->source); })()), "i18n", [], "any", false, false, false, 150), "textDirection", [], "any", false, false, false, 150), "html", null, true);
                    echo "\">
                                ";
                    // line 151
                    echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, $context["field"], "templatePath", [], "any", false, false, false, 151), ["field" => $context["field"], "entity" => $context["entity"]], false);
                    echo "
                            </td>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 154
                echo "
                        ";
                // line 155
                $this->displayBlock('entity_actions', $context, $blocks);
                // line 182
                echo "                    </tr>

                ";
            }
            // line 185
            echo "            ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 186
            echo "                ";
            $this->displayBlock('table_body_empty', $context, $blocks);
            // line 206
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 207
        echo "
            ";
        // line 208
        if ((isset($context["some_results_are_hidden"]) || array_key_exists("some_results_are_hidden", $context) ? $context["some_results_are_hidden"] : (function () { throw new RuntimeError('Variable "some_results_are_hidden" does not exist.', 208, $this->source); })())) {
            // line 209
            echo "                <tr class=\"datagrid-row-empty\">
                    <td class=\"text-center\" colspan=\"";
            // line 210
            echo twig_escape_filter($this->env, (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_first($this->env, (isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new RuntimeError('Variable "entities" does not exist.', 210, $this->source); })())), "fields", [], "any", false, false, false, 210)) + 1), "html", null, true);
            echo "\">
                        <span class=\"datagrid-row-empty-message\"><i class=\"fa fa-lock mr-1\"></i> ";
            // line 211
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("datagrid.hidden_results", [], "EasyAdminBundle"), "html", null, true);
            echo "</span>
                    </td>
                </tr>
            ";
        }
        // line 215
        echo "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 155
    public function block_entity_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "entity_actions"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "entity_actions"));

        // line 156
        echo "                            <td class=\"actions ";
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 156, $this->source); })()), "crud", [], "any", false, false, false, 156), "showEntityActionsAsDropdown", [], "any", false, false, false, 156)) ? ("actions-as-dropdown") : (""));
        echo "\">
                                ";
        // line 157
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 157, $this->source); })()), "actions", [], "any", false, false, false, 157), "count", [], "any", false, false, false, 157) > 0)) {
            // line 158
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 158, $this->source); })()), "crud", [], "any", false, false, false, 158), "showEntityActionsAsDropdown", [], "any", false, false, false, 158)) {
                // line 159
                echo "                                        <div class=\"dropdown dropdown-actions\">
                                            <a class=\"dropdown-toggle\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                                ";
                // line 162
                echo "                                                ";
                // line 163
                echo "                                                <svg xmlns=\"http://www.w3.org/2000/svg\" height=\"21\" width=\"21\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z\" />
                                                </svg>
                                            </a>

                                            <div class=\"dropdown-menu dropdown-menu-right\">
                                                ";
                // line 169
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 169, $this->source); })()), "actions", [], "any", false, false, false, 169));
                foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                    // line 170
                    echo "                                                    ";
                    echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, $context["action"], "templatePath", [], "any", false, false, false, 170), ["action" => $context["action"], "entity" => (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 170, $this->source); })()), "isIncludedInDropdown" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 170, $this->source); })()), "crud", [], "any", false, false, false, 170), "showEntityActionsAsDropdown", [], "any", false, false, false, 170)], false);
                    echo "
                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 172
                echo "                                            </div>
                                        </div>
                                    ";
            } else {
                // line 175
                echo "                                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 175, $this->source); })()), "actions", [], "any", false, false, false, 175));
                foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                    // line 176
                    echo "                                            ";
                    echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, $context["action"], "templatePath", [], "any", false, false, false, 176), ["action" => $context["action"], "entity" => (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 176, $this->source); })()), "isIncludedInDropdown" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 176, $this->source); })()), "crud", [], "any", false, false, false, 176), "showEntityActionsAsDropdown", [], "any", false, false, false, 176)], false);
                    echo "
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 178
                echo "                                    ";
            }
            // line 179
            echo "                                ";
        }
        // line 180
        echo "                            </td>
                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 186
    public function block_table_body_empty($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_body_empty"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_body_empty"));

        // line 187
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 14));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 188
            echo "                        <tr class=\"empty-row\">
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span></span></td>
                        </tr>

                        ";
            // line 197
            if ((3 == twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 197))) {
                // line 198
                echo "                            <tr class=\"no-results\">
                                <td colspan=\"100\">
                                    ";
                // line 200
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("datagrid.no_results", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 200, $this->source); })()), "i18n", [], "any", false, false, false, 200), "translationParameters", [], "any", false, false, false, 200), "EasyAdminBundle"), "html", null, true);
                echo "
                                </td>
                            </tr>
                        ";
            }
            // line 204
            echo "                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 205
        echo "                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 219
    public function block_table_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_footer"));

        // line 220
        echo "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 226
    public function block_paginator($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "paginator"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "paginator"));

        // line 227
        echo "                ";
        echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 227, $this->source); })()), "templatePath", [0 => "crud/paginator"], "method", false, false, false, 227), ["render_detailed_pagination" =>  !(isset($context["some_results_are_hidden"]) || array_key_exists("some_results_are_hidden", $context) ? $context["some_results_are_hidden"] : (function () { throw new RuntimeError('Variable "some_results_are_hidden" does not exist.', 227, $this->source); })())]);
        echo "
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 232
    public function block_delete_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "delete_form"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "delete_form"));

        // line 233
        echo "        ";
        echo twig_include($this->env, $context, "@EasyAdmin/crud/includes/_delete_form.html.twig", array(), false);
        echo "
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/crud/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1042 => 233,  1032 => 232,  1019 => 227,  1009 => 226,  999 => 220,  989 => 219,  979 => 205,  965 => 204,  958 => 200,  954 => 198,  952 => 197,  941 => 188,  923 => 187,  913 => 186,  902 => 180,  899 => 179,  896 => 178,  887 => 176,  882 => 175,  877 => 172,  868 => 170,  864 => 169,  856 => 163,  854 => 162,  850 => 159,  847 => 158,  845 => 157,  840 => 156,  830 => 155,  820 => 215,  813 => 211,  809 => 210,  806 => 209,  804 => 208,  801 => 207,  795 => 206,  792 => 186,  779 => 185,  774 => 182,  772 => 155,  769 => 154,  760 => 151,  747 => 150,  743 => 149,  740 => 148,  733 => 144,  729 => 142,  727 => 141,  722 => 140,  719 => 139,  716 => 138,  713 => 137,  694 => 136,  684 => 135,  670 => 127,  662 => 126,  659 => 125,  652 => 123,  646 => 121,  638 => 118,  633 => 117,  631 => 116,  619 => 115,  616 => 114,  613 => 113,  610 => 112,  607 => 111,  602 => 110,  599 => 109,  597 => 108,  594 => 107,  586 => 101,  584 => 100,  581 => 99,  571 => 98,  557 => 241,  555 => 240,  552 => 239,  546 => 237,  544 => 236,  541 => 235,  539 => 232,  536 => 231,  532 => 229,  530 => 226,  527 => 225,  525 => 224,  520 => 221,  518 => 219,  513 => 216,  511 => 135,  507 => 133,  503 => 131,  501 => 98,  498 => 97,  496 => 96,  492 => 95,  489 => 94,  486 => 93,  483 => 92,  480 => 91,  477 => 90,  474 => 89,  471 => 88,  468 => 87,  466 => 86,  456 => 85,  446 => 82,  442 => 80,  433 => 78,  429 => 77,  426 => 76,  423 => 75,  413 => 74,  402 => 72,  393 => 70,  389 => 69,  386 => 68,  376 => 67,  365 => 62,  357 => 58,  355 => 57,  352 => 56,  345 => 55,  339 => 54,  336 => 53,  333 => 52,  323 => 51,  312 => 74,  310 => 67,  307 => 66,  303 => 64,  301 => 51,  298 => 50,  295 => 49,  285 => 48,  275 => 39,  272 => 5,  271 => 43,  270 => 42,  268 => 41,  266 => 40,  264 => 39,  254 => 38,  242 => 35,  238 => 34,  233 => 33,  223 => 32,  211 => 29,  207 => 28,  202 => 27,  192 => 26,  175 => 22,  171 => 21,  166 => 20,  156 => 19,  139 => 15,  135 => 14,  130 => 13,  120 => 12,  101 => 8,  82 => 7,  72 => 4,  70 => 47,  68 => 10,  66 => 5,  53 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("{# @var ea \\EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext #}
{# @var entities \\EasyCorp\\Bundle\\EasyAdminBundle\\Collection\\EntityDtoCollection #}
{# @var paginator \\EasyCorp\\Bundle\\EasyAdminBundle\\Orm\\EntityPaginator #}
{% extends ea.templatePath('layout') %}
{% trans_default_domain ea.i18n.translationDomain %}

{% block body_id entities|length > 0 ? 'ea-index-' ~ entities|first.name : '' %}
{% block body_class 'ea-index' ~ (entities|length > 0 ? ' ea-index-' ~ entities|first.name : '') %}

{% set ea_field_assts = ea.crud.fieldAssets(constant('EasyCorp\\\\Bundle\\\\EasyAdminBundle\\\\Config\\\\Crud::PAGE_INDEX')) %}

{% block configured_head_contents %}
    {{ parent() }}
    {% for htmlContent in ea_field_assts.headContents %}
        {{ htmlContent|raw }}
    {% endfor %}
{% endblock %}

{% block configured_body_contents %}
    {{ parent() }}
    {% for htmlContent in ea_field_assts.bodyContents %}
        {{ htmlContent|raw }}
    {% endfor %}
{% endblock %}

{% block configured_stylesheets %}
    {{ parent() }}
    {{ include('@EasyAdmin/includes/_css_assets.html.twig', { assets: ea_field_assts.cssAssets }, with_context = false) }}
    {{ include('@EasyAdmin/includes/_encore_link_tags.html.twig', { assets: ea_field_assts.webpackEncoreAssets }, with_context = false) }}
{% endblock %}

{% block configured_javascripts %}
    {{ parent() }}
    {{ include('@EasyAdmin/includes/_js_assets.html.twig', { assets: ea_field_assts.jsAssets }, with_context = false) }}
    {{ include('@EasyAdmin/includes/_encore_script_tags.html.twig', { assets: ea_field_assts.webpackEncoreAssets }, with_context = false) }}
{% endblock %}

{% block content_title %}
    {%- apply spaceless -%}
        {% set custom_page_title = ea.crud.customPageTitle('index') %}
        {{ custom_page_title is null
            ? (ea.crud.defaultPageTitle('index')|trans(ea.i18n.translationParameters, 'EasyAdminBundle'))|raw
            : (custom_page_title|trans(ea.i18n.translationParameters))|raw }}
    {%- endapply -%}
{% endblock %}

{% set has_batch_actions = batch_actions|length > 0 %}
{% block page_actions %}
    {% if filters|length > 0 %}
        <div class=\"datagrid-filters\">
            {% block filters %}
                {% set applied_filters = ea.request.query.all['filters']|default([])|keys %}
                <div class=\"btn-group action-filters\">
                    <a href=\"#\" data-href=\"{{ ea_url().setAction('renderFilters').includeReferrer() }}\" class=\"btn btn-secondary btn-labeled btn-labeled-right action-filters-button disabled {{ applied_filters ? 'action-filters-applied' }}\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-filters\">
                        <i class=\"fa fa-filter fa-fw\"></i> {{ 'filter.title'|trans(ea.i18n.translationParameters, 'EasyAdminBundle') }}{% if applied_filters %} <span class=\"text-primary\">({{ applied_filters|length }})</span>{% endif %}
                    </a>
                    {% if applied_filters %}
                        <a href=\"{{ ea_url().unset('filters') }}\" class=\"btn btn-secondary action-filters-reset\">
                            <i class=\"fa fa-close\"></i>
                        </a>
                    {% endif %}
                </div>
            {% endblock filters %}
        </div>
    {% endif %}

    {% block global_actions %}
        <div class=\"global-actions\">
            {% for action in global_actions %}
                {{ include(action.templatePath, { action: action }, with_context = false) }}
            {% endfor %}
        </div>
    {% endblock global_actions %}
    {% block batch_actions %}
        {% if has_batch_actions %}
            <div class=\"batch-actions\" style=\"display: none\">
                {% for action in batch_actions %}
                    {{ include(action.templatePath, { action: action }, with_context = false) }}
                {% endfor %}
            </div>
        {% endif %}
    {% endblock %}
{% endblock page_actions %}

{% block main %}
    {# sort can be multiple; let's consider the sorting field the first one #}
    {% set sort_field_name = app.request.get('sort')|keys|first %}
    {% set sort_order = app.request.get('sort')|first %}
    {% set some_results_are_hidden = false %}
    {% set has_footer = entities|length != 0 %}
    {% set has_search = ea.crud.isSearchEnabled %}
    {% set has_filters = filters|length > 0 %}
    {% set num_results = entities|length %}

    <table class=\"table datagrid {{ entities is empty ? 'datagrid-empty' }}\">
        {% if num_results > 0 %}
            <thead>
            {% block table_head %}
                <tr>
                    {% if has_batch_actions %}
                        <th>
                            <div class=\"form-check\">
                                <span><input type=\"checkbox\" class=\"form-check-input form-batch-checkbox-all\"></span>
                            </div>
                        </th>
                    {% endif %}

                    {% set ea_sort_asc = constant('EasyCorp\\\\Bundle\\\\EasyAdminBundle\\\\Config\\\\Option\\\\SortOrder::ASC') %}
                    {% set ea_sort_desc = constant('EasyCorp\\\\Bundle\\\\EasyAdminBundle\\\\Config\\\\Option\\\\SortOrder::DESC') %}
                    {% for field in entities|first.fields ?? [] %}
                        {% set is_sorting_field = ea.search.isSortingField(field.property) %}
                        {% set next_sort_direction = is_sorting_field ? (ea.search.sortDirection(field.property) == ea_sort_desc ? ea_sort_asc : ea_sort_desc) : ea_sort_desc %}
                        {% set column_icon = is_sorting_field ? (next_sort_direction == ea_sort_desc ? 'fa-arrow-up' : 'fa-arrow-down') : 'fa-sort' %}

                        <th class=\"{{ is_sorting_field ? 'sorted' }} {{ field.isVirtual ? 'field-virtual' }} header-for-{{ field.cssClass|split(' ')|filter(class => class starts with 'field-')|join('') }} text-{{ field.textAlign }}\" dir=\"{{ ea.i18n.textDirection }}\">
                            {% if field.isSortable %}
                                <a href=\"{{ ea_url({ page: 1, sort: { (field.property): next_sort_direction } }).includeReferrer() }}\">
                                    {{ field.label|raw }} <i class=\"fa fa-fw {{ column_icon }}\"></i>
                                </a>
                            {% else %}
                                <span>{{ field.label|raw }}</span>
                            {% endif %}
                        </th>
                    {% endfor %}

                    <th {% if ea.crud.showEntityActionsAsDropdown %}width=\"10px\"{% endif %} dir=\"{{ ea.i18n.textDirection }}\">
                        <span class=\"sr-only\">{{ 'action.entity_actions'|trans(ea.i18n.translationParameters, 'EasyAdminBundle') }}</span>
                    </th>
                </tr>
            {% endblock table_head %}
            </thead>
        {% endif %}

        <tbody>
        {% block table_body %}
            {% for entity in entities %}
                {% if not entity.isAccessible %}
                    {% set some_results_are_hidden = true %}
                {% else %}
                    <tr data-id=\"{{ entity.primaryKeyValueAsString }}\">
                        {% if has_batch_actions %}
                            <td class=\"batch-actions-selector\">
                                <div class=\"form-check\">
                                    <input type=\"checkbox\" class=\"form-check-input form-batch-checkbox\" value=\"{{ entity.primaryKeyValue }}\">
                                </div>
                            </td>
                        {% endif %}

                        {% for field in entity.fields %}
                            <td data-label=\"{{ field.label|e('html_attr') }}\" class=\"{{ field.property == sort_field_name ? 'sorted' }} text-{{ field.textAlign }} {{ field.cssClass }}\" dir=\"{{ ea.i18n.textDirection }}\">
                                {{ include(field.templatePath, { field: field, entity: entity }, with_context = false) }}
                            </td>
                        {% endfor %}

                        {% block entity_actions %}
                            <td class=\"actions {{ ea.crud.showEntityActionsAsDropdown ? 'actions-as-dropdown' }}\">
                                {% if entity.actions.count > 0 %}
                                    {% if ea.crud.showEntityActionsAsDropdown %}
                                        <div class=\"dropdown dropdown-actions\">
                                            <a class=\"dropdown-toggle\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                                {# don't use FontAwesome 'fa-ellipsis-h' icon here because it doesn't look good #}
                                                {# this icon is 'dots-horizontal' icon from https://heroicons.com/ #}
                                                <svg xmlns=\"http://www.w3.org/2000/svg\" height=\"21\" width=\"21\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z\" />
                                                </svg>
                                            </a>

                                            <div class=\"dropdown-menu dropdown-menu-right\">
                                                {% for action in entity.actions %}
                                                    {{ include(action.templatePath, { action: action, entity: entity, isIncludedInDropdown: ea.crud.showEntityActionsAsDropdown }, with_context = false) }}
                                                {% endfor %}
                                            </div>
                                        </div>
                                    {% else %}
                                        {% for action in entity.actions %}
                                            {{ include(action.templatePath, { action: action, entity: entity, isIncludedInDropdown: ea.crud.showEntityActionsAsDropdown }, with_context = false) }}
                                        {% endfor %}
                                    {% endif %}
                                {% endif %}
                            </td>
                        {% endblock entity_actions %}
                    </tr>

                {% endif %}
            {% else %}
                {% block table_body_empty %}
                    {% for i in 1..14 %}
                        <tr class=\"empty-row\">
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span></span></td>
                        </tr>

                        {% if 3 == loop.index %}
                            <tr class=\"no-results\">
                                <td colspan=\"100\">
                                    {{ 'datagrid.no_results'|trans(ea.i18n.translationParameters, 'EasyAdminBundle') }}
                                </td>
                            </tr>
                        {% endif %}
                    {% endfor %}
                {% endblock table_body_empty %}
            {% endfor %}

            {% if some_results_are_hidden %}
                <tr class=\"datagrid-row-empty\">
                    <td class=\"text-center\" colspan=\"{{ entities|first.fields|length + 1 }}\">
                        <span class=\"datagrid-row-empty-message\"><i class=\"fa fa-lock mr-1\"></i> {{ 'datagrid.hidden_results'|trans({}, 'EasyAdminBundle') }}</span>
                    </td>
                </tr>
            {% endif %}
        {% endblock table_body %}
        </tbody>

        <tfoot>
        {% block table_footer %}
        {% endblock table_footer %}
        </tfoot>
    </table>

    {% if entities|length > 0 %}
        <div class=\"content-panel-footer without-padding without-border\">
            {% block paginator %}
                {{ include(ea.templatePath('crud/paginator'), { render_detailed_pagination: not some_results_are_hidden }) }}
            {% endblock paginator %}
        </div>
    {% endif %}

    {% block delete_form %}
        {{ include('@EasyAdmin/crud/includes/_delete_form.html.twig', with_context = false) }}
    {% endblock delete_form %}

    {% if has_filters %}
        {{ include('@EasyAdmin/crud/includes/_filters_modal.html.twig') }}
    {% endif %}

    {% if has_batch_actions %}
        {{ include('@EasyAdmin/crud/includes/_batch_action_modal.html.twig', {}, with_context = false) }}
    {% endif %}
{% endblock main %}
", "@EasyAdmin/crud/index.html.twig", "/Users/pabios/Documents/3wa/symfony/blogsf01/vendor/easycorp/easyadmin-bundle/src/Resources/views/crud/index.html.twig");
    }
}