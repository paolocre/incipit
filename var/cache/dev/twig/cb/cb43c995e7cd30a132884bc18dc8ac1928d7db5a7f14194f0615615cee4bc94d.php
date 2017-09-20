<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_f6531d2dff64266a12d627c7be99e50a0325a9145ef217bf934c05342ae34817 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_95456bd90955f26d9ce6feca7a4e05c74db229e505342501d3853b51d3492f2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95456bd90955f26d9ce6feca7a4e05c74db229e505342501d3853b51d3492f2c->enter($__internal_95456bd90955f26d9ce6feca7a4e05c74db229e505342501d3853b51d3492f2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_4d6049e8502f986cfe8cc238192290b5247c97570280d2636db6f706a2fe724a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d6049e8502f986cfe8cc238192290b5247c97570280d2636db6f706a2fe724a->enter($__internal_4d6049e8502f986cfe8cc238192290b5247c97570280d2636db6f706a2fe724a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_95456bd90955f26d9ce6feca7a4e05c74db229e505342501d3853b51d3492f2c->leave($__internal_95456bd90955f26d9ce6feca7a4e05c74db229e505342501d3853b51d3492f2c_prof);

        
        $__internal_4d6049e8502f986cfe8cc238192290b5247c97570280d2636db6f706a2fe724a->leave($__internal_4d6049e8502f986cfe8cc238192290b5247c97570280d2636db6f706a2fe724a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_67ae7a20fd15ce75a43fd8f47823208fd9260a16aa29ec93d55767779477cdbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67ae7a20fd15ce75a43fd8f47823208fd9260a16aa29ec93d55767779477cdbc->enter($__internal_67ae7a20fd15ce75a43fd8f47823208fd9260a16aa29ec93d55767779477cdbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c0cb00546ed996d73a269de0f7f55fefdab0a8e0d51ecc7fd9b41b3f43542ba5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0cb00546ed996d73a269de0f7f55fefdab0a8e0d51ecc7fd9b41b3f43542ba5->enter($__internal_c0cb00546ed996d73a269de0f7f55fefdab0a8e0d51ecc7fd9b41b3f43542ba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_c0cb00546ed996d73a269de0f7f55fefdab0a8e0d51ecc7fd9b41b3f43542ba5->leave($__internal_c0cb00546ed996d73a269de0f7f55fefdab0a8e0d51ecc7fd9b41b3f43542ba5_prof);

        
        $__internal_67ae7a20fd15ce75a43fd8f47823208fd9260a16aa29ec93d55767779477cdbc->leave($__internal_67ae7a20fd15ce75a43fd8f47823208fd9260a16aa29ec93d55767779477cdbc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/Users/paolocremaschi/html/incipit/vendor/friendsofsymfony/user-bundle/Resources/views/Group/new.html.twig");
    }
}
