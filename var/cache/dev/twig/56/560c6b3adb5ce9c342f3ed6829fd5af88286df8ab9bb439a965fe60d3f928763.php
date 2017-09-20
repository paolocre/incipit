<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_e71f54c2974461908140e91dcf30474d652509a9cb441886853b450a8745d1c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_4844b56b643d49d42c9176f7449128976f6c001e29772730a3e7009df5fa043a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4844b56b643d49d42c9176f7449128976f6c001e29772730a3e7009df5fa043a->enter($__internal_4844b56b643d49d42c9176f7449128976f6c001e29772730a3e7009df5fa043a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_366ac208f9b68769dc3759b2bd6267177ceb8036810624c06a528ed295a05d66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_366ac208f9b68769dc3759b2bd6267177ceb8036810624c06a528ed295a05d66->enter($__internal_366ac208f9b68769dc3759b2bd6267177ceb8036810624c06a528ed295a05d66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4844b56b643d49d42c9176f7449128976f6c001e29772730a3e7009df5fa043a->leave($__internal_4844b56b643d49d42c9176f7449128976f6c001e29772730a3e7009df5fa043a_prof);

        
        $__internal_366ac208f9b68769dc3759b2bd6267177ceb8036810624c06a528ed295a05d66->leave($__internal_366ac208f9b68769dc3759b2bd6267177ceb8036810624c06a528ed295a05d66_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8716cb44f0426ef064f1a010570ff47238ff1906acb07a202dfc98ba95c85ee6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8716cb44f0426ef064f1a010570ff47238ff1906acb07a202dfc98ba95c85ee6->enter($__internal_8716cb44f0426ef064f1a010570ff47238ff1906acb07a202dfc98ba95c85ee6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_193b4af952068c8e36022dcc68676c5bb5a833bad895175c723a1d6c23edb4a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_193b4af952068c8e36022dcc68676c5bb5a833bad895175c723a1d6c23edb4a8->enter($__internal_193b4af952068c8e36022dcc68676c5bb5a833bad895175c723a1d6c23edb4a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_193b4af952068c8e36022dcc68676c5bb5a833bad895175c723a1d6c23edb4a8->leave($__internal_193b4af952068c8e36022dcc68676c5bb5a833bad895175c723a1d6c23edb4a8_prof);

        
        $__internal_8716cb44f0426ef064f1a010570ff47238ff1906acb07a202dfc98ba95c85ee6->leave($__internal_8716cb44f0426ef064f1a010570ff47238ff1906acb07a202dfc98ba95c85ee6_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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

{% block fos_user_content %}
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "/Users/paolocremaschi/html/incipit/app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
