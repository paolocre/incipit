<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_8e5c82b447fdff23566d6eec0a9b1097112907d973983c6cb81700fa55772fd6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ba1283eefdb306eacaeec22c401a7f7d30925a8f372568c7ef59ea46ccd1b213 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba1283eefdb306eacaeec22c401a7f7d30925a8f372568c7ef59ea46ccd1b213->enter($__internal_ba1283eefdb306eacaeec22c401a7f7d30925a8f372568c7ef59ea46ccd1b213_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_25381a337a5abe7e39fd8035b8e74c584bfc0725f08c4d9642cb0a801f647d30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25381a337a5abe7e39fd8035b8e74c584bfc0725f08c4d9642cb0a801f647d30->enter($__internal_25381a337a5abe7e39fd8035b8e74c584bfc0725f08c4d9642cb0a801f647d30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba1283eefdb306eacaeec22c401a7f7d30925a8f372568c7ef59ea46ccd1b213->leave($__internal_ba1283eefdb306eacaeec22c401a7f7d30925a8f372568c7ef59ea46ccd1b213_prof);

        
        $__internal_25381a337a5abe7e39fd8035b8e74c584bfc0725f08c4d9642cb0a801f647d30->leave($__internal_25381a337a5abe7e39fd8035b8e74c584bfc0725f08c4d9642cb0a801f647d30_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_4c9c5bb161b1873ad86aa5315fb328dca6101cb567a7c4e699e020bec3ed4db3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c9c5bb161b1873ad86aa5315fb328dca6101cb567a7c4e699e020bec3ed4db3->enter($__internal_4c9c5bb161b1873ad86aa5315fb328dca6101cb567a7c4e699e020bec3ed4db3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_0317733f9719f7c4f8af1f9f0205cc4e2541114ea5114d0a48b2db61a43c1963 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0317733f9719f7c4f8af1f9f0205cc4e2541114ea5114d0a48b2db61a43c1963->enter($__internal_0317733f9719f7c4f8af1f9f0205cc4e2541114ea5114d0a48b2db61a43c1963_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_0317733f9719f7c4f8af1f9f0205cc4e2541114ea5114d0a48b2db61a43c1963->leave($__internal_0317733f9719f7c4f8af1f9f0205cc4e2541114ea5114d0a48b2db61a43c1963_prof);

        
        $__internal_4c9c5bb161b1873ad86aa5315fb328dca6101cb567a7c4e699e020bec3ed4db3->leave($__internal_4c9c5bb161b1873ad86aa5315fb328dca6101cb567a7c4e699e020bec3ed4db3_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_97e0e114e088d61aaa9af68843825f619aaafc4e25554bda3f58def9cb65e9e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97e0e114e088d61aaa9af68843825f619aaafc4e25554bda3f58def9cb65e9e6->enter($__internal_97e0e114e088d61aaa9af68843825f619aaafc4e25554bda3f58def9cb65e9e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b2c32b235fda071bc8c304cc087d44faa3c92b535761d34a57c9188ba5987c60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2c32b235fda071bc8c304cc087d44faa3c92b535761d34a57c9188ba5987c60->enter($__internal_b2c32b235fda071bc8c304cc087d44faa3c92b535761d34a57c9188ba5987c60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_b2c32b235fda071bc8c304cc087d44faa3c92b535761d34a57c9188ba5987c60->leave($__internal_b2c32b235fda071bc8c304cc087d44faa3c92b535761d34a57c9188ba5987c60_prof);

        
        $__internal_97e0e114e088d61aaa9af68843825f619aaafc4e25554bda3f58def9cb65e9e6->leave($__internal_97e0e114e088d61aaa9af68843825f619aaafc4e25554bda3f58def9cb65e9e6_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/Users/paolocremaschi/html/incipit/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
