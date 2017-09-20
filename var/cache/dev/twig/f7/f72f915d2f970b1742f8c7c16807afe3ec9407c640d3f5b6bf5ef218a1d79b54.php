<?php

/* :todo:create.html.twig */
class __TwigTemplate_030d1750ba67637bf09e76eac2c1814219bb5c1f14a47ac00f0560a4a18b23ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", ":todo:create.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cbf58ee989d8c9c446d2622dbdc82230c652e20c212363ab7b7292315b6104fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbf58ee989d8c9c446d2622dbdc82230c652e20c212363ab7b7292315b6104fd->enter($__internal_cbf58ee989d8c9c446d2622dbdc82230c652e20c212363ab7b7292315b6104fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":todo:create.html.twig"));

        $__internal_785c933b145ec9776a87d64c59e5f33073db07e8121c610672606ac262398fde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_785c933b145ec9776a87d64c59e5f33073db07e8121c610672606ac262398fde->enter($__internal_785c933b145ec9776a87d64c59e5f33073db07e8121c610672606ac262398fde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":todo:create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cbf58ee989d8c9c446d2622dbdc82230c652e20c212363ab7b7292315b6104fd->leave($__internal_cbf58ee989d8c9c446d2622dbdc82230c652e20c212363ab7b7292315b6104fd_prof);

        
        $__internal_785c933b145ec9776a87d64c59e5f33073db07e8121c610672606ac262398fde->leave($__internal_785c933b145ec9776a87d64c59e5f33073db07e8121c610672606ac262398fde_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_9a8a872d1b502ad5f96874ccee8f46798810a6ffdc71117867a9f0c874612c56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a8a872d1b502ad5f96874ccee8f46798810a6ffdc71117867a9f0c874612c56->enter($__internal_9a8a872d1b502ad5f96874ccee8f46798810a6ffdc71117867a9f0c874612c56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_720e846271ebed66806ffe19911450c46571f6f9abf87934293671d7170d6a1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_720e846271ebed66806ffe19911450c46571f6f9abf87934293671d7170d6a1f->enter($__internal_720e846271ebed66806ffe19911450c46571f6f9abf87934293671d7170d6a1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <h1 class=\"page-header\">Add Todo</h1>
    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_720e846271ebed66806ffe19911450c46571f6f9abf87934293671d7170d6a1f->leave($__internal_720e846271ebed66806ffe19911450c46571f6f9abf87934293671d7170d6a1f_prof);

        
        $__internal_9a8a872d1b502ad5f96874ccee8f46798810a6ffdc71117867a9f0c874612c56->leave($__internal_9a8a872d1b502ad5f96874ccee8f46798810a6ffdc71117867a9f0c874612c56_prof);

    }

    public function getTemplateName()
    {
        return ":todo:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 8,  56 => 7,  52 => 6,  49 => 5,  40 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends 'base.html.twig' %}

{% block body %}
    <h1 class=\"page-header\">Add Todo</h1>
    {{ form_start(form) }}
    {{ form_widget(form) }}
    {{ form_end(form) }}
{% endblock %}", ":todo:create.html.twig", "/Users/paolocremaschi/html/incipit/app/Resources/views/todo/create.html.twig");
    }
}
