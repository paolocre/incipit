<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_904f72b347b2e0b6567378e3d2660436a066a12f97bb8927c5077708092dc48b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_80ca295361c8df4a9580734619ee38773e5f35ef5060b9e0ec0a4438e74f9374 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80ca295361c8df4a9580734619ee38773e5f35ef5060b9e0ec0a4438e74f9374->enter($__internal_80ca295361c8df4a9580734619ee38773e5f35ef5060b9e0ec0a4438e74f9374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_1cf1cc8de8e4252f742f630d99533ee020de5bf3af4904fa223bcef7a6157345 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cf1cc8de8e4252f742f630d99533ee020de5bf3af4904fa223bcef7a6157345->enter($__internal_1cf1cc8de8e4252f742f630d99533ee020de5bf3af4904fa223bcef7a6157345_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80ca295361c8df4a9580734619ee38773e5f35ef5060b9e0ec0a4438e74f9374->leave($__internal_80ca295361c8df4a9580734619ee38773e5f35ef5060b9e0ec0a4438e74f9374_prof);

        
        $__internal_1cf1cc8de8e4252f742f630d99533ee020de5bf3af4904fa223bcef7a6157345->leave($__internal_1cf1cc8de8e4252f742f630d99533ee020de5bf3af4904fa223bcef7a6157345_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_413b43f5aa01cd8fb77f2e9980df819065564dc8a1184eb3abfb39860bb03fa2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_413b43f5aa01cd8fb77f2e9980df819065564dc8a1184eb3abfb39860bb03fa2->enter($__internal_413b43f5aa01cd8fb77f2e9980df819065564dc8a1184eb3abfb39860bb03fa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d09849f83b8346548f18641e297d3406f0ae5429d4a33ace56e4ef47f1301017 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d09849f83b8346548f18641e297d3406f0ae5429d4a33ace56e4ef47f1301017->enter($__internal_d09849f83b8346548f18641e297d3406f0ae5429d4a33ace56e4ef47f1301017_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_d09849f83b8346548f18641e297d3406f0ae5429d4a33ace56e4ef47f1301017->leave($__internal_d09849f83b8346548f18641e297d3406f0ae5429d4a33ace56e4ef47f1301017_prof);

        
        $__internal_413b43f5aa01cd8fb77f2e9980df819065564dc8a1184eb3abfb39860bb03fa2->leave($__internal_413b43f5aa01cd8fb77f2e9980df819065564dc8a1184eb3abfb39860bb03fa2_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_1caa2bede82b5f362bc893c5f2a40976a1c63f89edb7dd46bc0c47507b357d13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1caa2bede82b5f362bc893c5f2a40976a1c63f89edb7dd46bc0c47507b357d13->enter($__internal_1caa2bede82b5f362bc893c5f2a40976a1c63f89edb7dd46bc0c47507b357d13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_68414d5c17022ee7d28234b4e5d1f2ff72de21f2d016a99c632d84773711be2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68414d5c17022ee7d28234b4e5d1f2ff72de21f2d016a99c632d84773711be2a->enter($__internal_68414d5c17022ee7d28234b4e5d1f2ff72de21f2d016a99c632d84773711be2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_68414d5c17022ee7d28234b4e5d1f2ff72de21f2d016a99c632d84773711be2a->leave($__internal_68414d5c17022ee7d28234b4e5d1f2ff72de21f2d016a99c632d84773711be2a_prof);

        
        $__internal_1caa2bede82b5f362bc893c5f2a40976a1c63f89edb7dd46bc0c47507b357d13->leave($__internal_1caa2bede82b5f362bc893c5f2a40976a1c63f89edb7dd46bc0c47507b357d13_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/Users/paolocremaschi/html/incipit/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
