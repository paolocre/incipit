<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_bc578be23cd80f135dfd4cc54eed7c0f2dcd1a36c5f1af8d58e55c0d88bdef11 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c96b72203551b63b03f025733f250c6471f39daf4b5802dcd5b25d457883e6b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c96b72203551b63b03f025733f250c6471f39daf4b5802dcd5b25d457883e6b8->enter($__internal_c96b72203551b63b03f025733f250c6471f39daf4b5802dcd5b25d457883e6b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_31c9cf47238aaec095e2108353984d9f9dcb5b825746fc3019cfd722234b5638 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31c9cf47238aaec095e2108353984d9f9dcb5b825746fc3019cfd722234b5638->enter($__internal_31c9cf47238aaec095e2108353984d9f9dcb5b825746fc3019cfd722234b5638_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_c96b72203551b63b03f025733f250c6471f39daf4b5802dcd5b25d457883e6b8->leave($__internal_c96b72203551b63b03f025733f250c6471f39daf4b5802dcd5b25d457883e6b8_prof);

        
        $__internal_31c9cf47238aaec095e2108353984d9f9dcb5b825746fc3019cfd722234b5638->leave($__internal_31c9cf47238aaec095e2108353984d9f9dcb5b825746fc3019cfd722234b5638_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_2e58c748d5a7c873624a6892a712ca4f5735c68d84bdf020b9c376ef0f94d518 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e58c748d5a7c873624a6892a712ca4f5735c68d84bdf020b9c376ef0f94d518->enter($__internal_2e58c748d5a7c873624a6892a712ca4f5735c68d84bdf020b9c376ef0f94d518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_47a027d5b5842e7c0cd2f5afb22c5a930e4c54558b5f9c820c8a6fac23f12ce4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47a027d5b5842e7c0cd2f5afb22c5a930e4c54558b5f9c820c8a6fac23f12ce4->enter($__internal_47a027d5b5842e7c0cd2f5afb22c5a930e4c54558b5f9c820c8a6fac23f12ce4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_47a027d5b5842e7c0cd2f5afb22c5a930e4c54558b5f9c820c8a6fac23f12ce4->leave($__internal_47a027d5b5842e7c0cd2f5afb22c5a930e4c54558b5f9c820c8a6fac23f12ce4_prof);

        
        $__internal_2e58c748d5a7c873624a6892a712ca4f5735c68d84bdf020b9c376ef0f94d518->leave($__internal_2e58c748d5a7c873624a6892a712ca4f5735c68d84bdf020b9c376ef0f94d518_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_38f4ae2929d4fb794d78ff2a0e33cd45f20938bd487fdeedbad39d6489e4a838 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38f4ae2929d4fb794d78ff2a0e33cd45f20938bd487fdeedbad39d6489e4a838->enter($__internal_38f4ae2929d4fb794d78ff2a0e33cd45f20938bd487fdeedbad39d6489e4a838_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_f11de7af0c89682c4d9d23b317ffa573c9672baacc296b8e8b0921713efc89a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f11de7af0c89682c4d9d23b317ffa573c9672baacc296b8e8b0921713efc89a5->enter($__internal_f11de7af0c89682c4d9d23b317ffa573c9672baacc296b8e8b0921713efc89a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_f11de7af0c89682c4d9d23b317ffa573c9672baacc296b8e8b0921713efc89a5->leave($__internal_f11de7af0c89682c4d9d23b317ffa573c9672baacc296b8e8b0921713efc89a5_prof);

        
        $__internal_38f4ae2929d4fb794d78ff2a0e33cd45f20938bd487fdeedbad39d6489e4a838->leave($__internal_38f4ae2929d4fb794d78ff2a0e33cd45f20938bd487fdeedbad39d6489e4a838_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_aa522670e1480f4c38aa0ab6e56b0cf90349e8bb71c476e6818f520b732946e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa522670e1480f4c38aa0ab6e56b0cf90349e8bb71c476e6818f520b732946e1->enter($__internal_aa522670e1480f4c38aa0ab6e56b0cf90349e8bb71c476e6818f520b732946e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_cbb7d62c6bb2dd8a5e28275f12a6b7345192537f1ba4edd8becc734bdf399bd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbb7d62c6bb2dd8a5e28275f12a6b7345192537f1ba4edd8becc734bdf399bd3->enter($__internal_cbb7d62c6bb2dd8a5e28275f12a6b7345192537f1ba4edd8becc734bdf399bd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_cbb7d62c6bb2dd8a5e28275f12a6b7345192537f1ba4edd8becc734bdf399bd3->leave($__internal_cbb7d62c6bb2dd8a5e28275f12a6b7345192537f1ba4edd8becc734bdf399bd3_prof);

        
        $__internal_aa522670e1480f4c38aa0ab6e56b0cf90349e8bb71c476e6818f520b732946e1->leave($__internal_aa522670e1480f4c38aa0ab6e56b0cf90349e8bb71c476e6818f520b732946e1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "/Users/paolocremaschi/html/incipit/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/email.txt.twig");
    }
}
