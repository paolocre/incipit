<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_f0d4b89f2b2a6a3e4ae13e51b38fb6bafa54d0b64da4acb72b89c1cc0dffe80f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_0a0a7f78575420945a7a9e6151e5961a30f914f8f6eb5875070d533695d04d6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a0a7f78575420945a7a9e6151e5961a30f914f8f6eb5875070d533695d04d6e->enter($__internal_0a0a7f78575420945a7a9e6151e5961a30f914f8f6eb5875070d533695d04d6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_eeba4337d4ac2e2bf8aa6cc1721240ead0f5d472a697024791a8f48ce4027580 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eeba4337d4ac2e2bf8aa6cc1721240ead0f5d472a697024791a8f48ce4027580->enter($__internal_eeba4337d4ac2e2bf8aa6cc1721240ead0f5d472a697024791a8f48ce4027580_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a0a7f78575420945a7a9e6151e5961a30f914f8f6eb5875070d533695d04d6e->leave($__internal_0a0a7f78575420945a7a9e6151e5961a30f914f8f6eb5875070d533695d04d6e_prof);

        
        $__internal_eeba4337d4ac2e2bf8aa6cc1721240ead0f5d472a697024791a8f48ce4027580->leave($__internal_eeba4337d4ac2e2bf8aa6cc1721240ead0f5d472a697024791a8f48ce4027580_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8551d466532b55e545671fbad58b12cb6e2db5dcc73f4ae71a171a0cb59fc38a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8551d466532b55e545671fbad58b12cb6e2db5dcc73f4ae71a171a0cb59fc38a->enter($__internal_8551d466532b55e545671fbad58b12cb6e2db5dcc73f4ae71a171a0cb59fc38a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a8a852aa66d06dbda4525dbfd987e9f61e62a2005131b97109955b00066381ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8a852aa66d06dbda4525dbfd987e9f61e62a2005131b97109955b00066381ab->enter($__internal_a8a852aa66d06dbda4525dbfd987e9f61e62a2005131b97109955b00066381ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_a8a852aa66d06dbda4525dbfd987e9f61e62a2005131b97109955b00066381ab->leave($__internal_a8a852aa66d06dbda4525dbfd987e9f61e62a2005131b97109955b00066381ab_prof);

        
        $__internal_8551d466532b55e545671fbad58b12cb6e2db5dcc73f4ae71a171a0cb59fc38a->leave($__internal_8551d466532b55e545671fbad58b12cb6e2db5dcc73f4ae71a171a0cb59fc38a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/Users/paolocremaschi/html/incipit/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
