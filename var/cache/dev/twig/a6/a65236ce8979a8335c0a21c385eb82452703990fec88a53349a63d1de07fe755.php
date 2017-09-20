<?php

/* :todo:edit.html.twig */
class __TwigTemplate_2c9db0bf19c875fb31c18900208cc4d4ca1880543ca39f0a18ca7ff582d93dc2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":todo:edit.html.twig", 1);
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
        $__internal_ea40b6219fbcf6dfa9b00150c532d50bed89e296093f1da6f23568c62b5c5963 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea40b6219fbcf6dfa9b00150c532d50bed89e296093f1da6f23568c62b5c5963->enter($__internal_ea40b6219fbcf6dfa9b00150c532d50bed89e296093f1da6f23568c62b5c5963_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":todo:edit.html.twig"));

        $__internal_3205d31cddf1855427e55a2511261b544e099390698d8d0e9752d6e180b7b9a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3205d31cddf1855427e55a2511261b544e099390698d8d0e9752d6e180b7b9a9->enter($__internal_3205d31cddf1855427e55a2511261b544e099390698d8d0e9752d6e180b7b9a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":todo:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea40b6219fbcf6dfa9b00150c532d50bed89e296093f1da6f23568c62b5c5963->leave($__internal_ea40b6219fbcf6dfa9b00150c532d50bed89e296093f1da6f23568c62b5c5963_prof);

        
        $__internal_3205d31cddf1855427e55a2511261b544e099390698d8d0e9752d6e180b7b9a9->leave($__internal_3205d31cddf1855427e55a2511261b544e099390698d8d0e9752d6e180b7b9a9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a3cf3b6db701ad54465180ce3807c9370c3401c2ca5b7ba8605d6d4eba5adb8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3cf3b6db701ad54465180ce3807c9370c3401c2ca5b7ba8605d6d4eba5adb8d->enter($__internal_a3cf3b6db701ad54465180ce3807c9370c3401c2ca5b7ba8605d6d4eba5adb8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f06c8781453cc4c4b726745fb2c444919c30f3234dbdb344e95a3b5fb6e892ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f06c8781453cc4c4b726745fb2c444919c30f3234dbdb344e95a3b5fb6e892ab->enter($__internal_f06c8781453cc4c4b726745fb2c444919c30f3234dbdb344e95a3b5fb6e892ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<a class=\"btn btn-default\" href=\"/todos\">Back to all todos</a>
<hr>
<h1 class=\"page-header\">Create Todo</h1>
";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_f06c8781453cc4c4b726745fb2c444919c30f3234dbdb344e95a3b5fb6e892ab->leave($__internal_f06c8781453cc4c4b726745fb2c444919c30f3234dbdb344e95a3b5fb6e892ab_prof);

        
        $__internal_a3cf3b6db701ad54465180ce3807c9370c3401c2ca5b7ba8605d6d4eba5adb8d->leave($__internal_a3cf3b6db701ad54465180ce3807c9370c3401c2ca5b7ba8605d6d4eba5adb8d_prof);

    }

    public function getTemplateName()
    {
        return ":todo:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 9,  58 => 8,  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
<a class=\"btn btn-default\" href=\"/todos\">Back to all todos</a>
<hr>
<h1 class=\"page-header\">Create Todo</h1>
{{ form_start(form) }}
{{ form_widget(form) }}
{{ form_end(form) }}
{% endblock %}", ":todo:edit.html.twig", "/Users/paolocremaschi/html/incipit/app/Resources/views/todo/edit.html.twig");
    }
}
