<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_e2cd2f8c969170ff794fabc772ebd8cd04c7c597f2ead3ea5eb17fb1d700a66c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_87f28855b866b7b801fec73c8238de711298677898ab9307ef28eeefb07a6570 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87f28855b866b7b801fec73c8238de711298677898ab9307ef28eeefb07a6570->enter($__internal_87f28855b866b7b801fec73c8238de711298677898ab9307ef28eeefb07a6570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_ded5016c4ca82f5092f89401d05a8226c452697ee9cc398247309f98dba5dcb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ded5016c4ca82f5092f89401d05a8226c452697ee9cc398247309f98dba5dcb7->enter($__internal_ded5016c4ca82f5092f89401d05a8226c452697ee9cc398247309f98dba5dcb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87f28855b866b7b801fec73c8238de711298677898ab9307ef28eeefb07a6570->leave($__internal_87f28855b866b7b801fec73c8238de711298677898ab9307ef28eeefb07a6570_prof);

        
        $__internal_ded5016c4ca82f5092f89401d05a8226c452697ee9cc398247309f98dba5dcb7->leave($__internal_ded5016c4ca82f5092f89401d05a8226c452697ee9cc398247309f98dba5dcb7_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6a41fbf820522537c6debe4e23b262ccc2c048add06f1e881aecea5da82d46d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a41fbf820522537c6debe4e23b262ccc2c048add06f1e881aecea5da82d46d6->enter($__internal_6a41fbf820522537c6debe4e23b262ccc2c048add06f1e881aecea5da82d46d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_fcfa5af067dfbd9932f52335876326ec59fd47716560708f0037da17d99f4f60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcfa5af067dfbd9932f52335876326ec59fd47716560708f0037da17d99f4f60->enter($__internal_fcfa5af067dfbd9932f52335876326ec59fd47716560708f0037da17d99f4f60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_fcfa5af067dfbd9932f52335876326ec59fd47716560708f0037da17d99f4f60->leave($__internal_fcfa5af067dfbd9932f52335876326ec59fd47716560708f0037da17d99f4f60_prof);

        
        $__internal_6a41fbf820522537c6debe4e23b262ccc2c048add06f1e881aecea5da82d46d6->leave($__internal_6a41fbf820522537c6debe4e23b262ccc2c048add06f1e881aecea5da82d46d6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
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
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "/Users/paolocremaschi/html/incipit/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}
