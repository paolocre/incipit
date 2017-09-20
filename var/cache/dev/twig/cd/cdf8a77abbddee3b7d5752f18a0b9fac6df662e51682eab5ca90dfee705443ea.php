<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_6e976f8b65a81c21affc1ecaf9a24ba05f917b1e59d98ff62190a6231c84be59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2c93c207b2b3ca55e54294414c011a1d59f373626ac57ad35e63cac4aa465b10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c93c207b2b3ca55e54294414c011a1d59f373626ac57ad35e63cac4aa465b10->enter($__internal_2c93c207b2b3ca55e54294414c011a1d59f373626ac57ad35e63cac4aa465b10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_805d1def6147ba1bf2eda06aaa823d1b9eeca136191b712b033351d81ed1bb28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_805d1def6147ba1bf2eda06aaa823d1b9eeca136191b712b033351d81ed1bb28->enter($__internal_805d1def6147ba1bf2eda06aaa823d1b9eeca136191b712b033351d81ed1bb28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c93c207b2b3ca55e54294414c011a1d59f373626ac57ad35e63cac4aa465b10->leave($__internal_2c93c207b2b3ca55e54294414c011a1d59f373626ac57ad35e63cac4aa465b10_prof);

        
        $__internal_805d1def6147ba1bf2eda06aaa823d1b9eeca136191b712b033351d81ed1bb28->leave($__internal_805d1def6147ba1bf2eda06aaa823d1b9eeca136191b712b033351d81ed1bb28_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ec99f3b3795f48b4bb18e54598ec93c3a7663cc5b3982e721fd72669f2b5a1a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec99f3b3795f48b4bb18e54598ec93c3a7663cc5b3982e721fd72669f2b5a1a0->enter($__internal_ec99f3b3795f48b4bb18e54598ec93c3a7663cc5b3982e721fd72669f2b5a1a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c5738c0f6976af38215cac92f1d2a97e084098fd22be86058be2ea6d7c32d64c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5738c0f6976af38215cac92f1d2a97e084098fd22be86058be2ea6d7c32d64c->enter($__internal_c5738c0f6976af38215cac92f1d2a97e084098fd22be86058be2ea6d7c32d64c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if (($context["targetUrl"] ?? $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, ($context["targetUrl"] ?? $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_c5738c0f6976af38215cac92f1d2a97e084098fd22be86058be2ea6d7c32d64c->leave($__internal_c5738c0f6976af38215cac92f1d2a97e084098fd22be86058be2ea6d7c32d64c_prof);

        
        $__internal_ec99f3b3795f48b4bb18e54598ec93c3a7663cc5b3982e721fd72669f2b5a1a0->leave($__internal_ec99f3b3795f48b4bb18e54598ec93c3a7663cc5b3982e721fd72669f2b5a1a0_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/confirmed.html.twig", "/Users/paolocremaschi/html/incipit/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/confirmed.html.twig");
    }
}
