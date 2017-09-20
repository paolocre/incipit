<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_69e6d9723c4d7a5da85fb4917391785023e8450ec8c33c1d8eabb645a9fcee6e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_2a7c4fd7b2004c4c8ad765b384fac7016bdbea794bd49d6fc1be279534a8e7fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a7c4fd7b2004c4c8ad765b384fac7016bdbea794bd49d6fc1be279534a8e7fa->enter($__internal_2a7c4fd7b2004c4c8ad765b384fac7016bdbea794bd49d6fc1be279534a8e7fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_815e5896e65915c06c91f6cbf30dda7283d41f3644a8e6a55b950ab309fed2ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_815e5896e65915c06c91f6cbf30dda7283d41f3644a8e6a55b950ab309fed2ec->enter($__internal_815e5896e65915c06c91f6cbf30dda7283d41f3644a8e6a55b950ab309fed2ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a7c4fd7b2004c4c8ad765b384fac7016bdbea794bd49d6fc1be279534a8e7fa->leave($__internal_2a7c4fd7b2004c4c8ad765b384fac7016bdbea794bd49d6fc1be279534a8e7fa_prof);

        
        $__internal_815e5896e65915c06c91f6cbf30dda7283d41f3644a8e6a55b950ab309fed2ec->leave($__internal_815e5896e65915c06c91f6cbf30dda7283d41f3644a8e6a55b950ab309fed2ec_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2ee604d1793971e6c309c6c40a7c50e627446cf4488ba81f44e1236218d7fe68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ee604d1793971e6c309c6c40a7c50e627446cf4488ba81f44e1236218d7fe68->enter($__internal_2ee604d1793971e6c309c6c40a7c50e627446cf4488ba81f44e1236218d7fe68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9b2ccf5f6c6925497b1e8666f0cdf3819dd01ebd59bcd9718edb7da1eeeff808 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b2ccf5f6c6925497b1e8666f0cdf3819dd01ebd59bcd9718edb7da1eeeff808->enter($__internal_9b2ccf5f6c6925497b1e8666f0cdf3819dd01ebd59bcd9718edb7da1eeeff808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_9b2ccf5f6c6925497b1e8666f0cdf3819dd01ebd59bcd9718edb7da1eeeff808->leave($__internal_9b2ccf5f6c6925497b1e8666f0cdf3819dd01ebd59bcd9718edb7da1eeeff808_prof);

        
        $__internal_2ee604d1793971e6c309c6c40a7c50e627446cf4488ba81f44e1236218d7fe68->leave($__internal_2ee604d1793971e6c309c6c40a7c50e627446cf4488ba81f44e1236218d7fe68_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "/Users/paolocremaschi/html/incipit/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
