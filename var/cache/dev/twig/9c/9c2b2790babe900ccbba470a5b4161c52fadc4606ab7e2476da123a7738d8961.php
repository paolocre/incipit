<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_9c806dd7dfd15734508e5ecd857748ddff474cb3b519999cb3754602a4981050 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_a3814fdf15d637464089b7d3ae258afd7c14de5102bcfa2dd743e64ff12e8979 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3814fdf15d637464089b7d3ae258afd7c14de5102bcfa2dd743e64ff12e8979->enter($__internal_a3814fdf15d637464089b7d3ae258afd7c14de5102bcfa2dd743e64ff12e8979_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_50de6463ec7a456a55c480c286233d1642372964bba062bc7c98d787c740237b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50de6463ec7a456a55c480c286233d1642372964bba062bc7c98d787c740237b->enter($__internal_50de6463ec7a456a55c480c286233d1642372964bba062bc7c98d787c740237b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3814fdf15d637464089b7d3ae258afd7c14de5102bcfa2dd743e64ff12e8979->leave($__internal_a3814fdf15d637464089b7d3ae258afd7c14de5102bcfa2dd743e64ff12e8979_prof);

        
        $__internal_50de6463ec7a456a55c480c286233d1642372964bba062bc7c98d787c740237b->leave($__internal_50de6463ec7a456a55c480c286233d1642372964bba062bc7c98d787c740237b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bfc02a9e9f3447a033004f2d1caeedbbd3e2cf1bf4da9d71700c23c0cbae97f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfc02a9e9f3447a033004f2d1caeedbbd3e2cf1bf4da9d71700c23c0cbae97f9->enter($__internal_bfc02a9e9f3447a033004f2d1caeedbbd3e2cf1bf4da9d71700c23c0cbae97f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9d2ea159947a7f778f8134d94d1acfd624e68d08655b390169eec680afd4d15a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d2ea159947a7f778f8134d94d1acfd624e68d08655b390169eec680afd4d15a->enter($__internal_9d2ea159947a7f778f8134d94d1acfd624e68d08655b390169eec680afd4d15a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_9d2ea159947a7f778f8134d94d1acfd624e68d08655b390169eec680afd4d15a->leave($__internal_9d2ea159947a7f778f8134d94d1acfd624e68d08655b390169eec680afd4d15a_prof);

        
        $__internal_bfc02a9e9f3447a033004f2d1caeedbbd3e2cf1bf4da9d71700c23c0cbae97f9->leave($__internal_bfc02a9e9f3447a033004f2d1caeedbbd3e2cf1bf4da9d71700c23c0cbae97f9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/Users/paolocremaschi/html/incipit/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show.html.twig");
    }
}
