<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_010742bacd7922f8c0ef3868b50c1fd85132c12a1b910d45f0522f422e756bf5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_add71584933e7aca3900be7806a1855202a994c292c7e40d2da663bc50ce5003 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_add71584933e7aca3900be7806a1855202a994c292c7e40d2da663bc50ce5003->enter($__internal_add71584933e7aca3900be7806a1855202a994c292c7e40d2da663bc50ce5003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_a0c7a03a4e3df1ca0ddfe473e691eb4724c04e46eac43a37775079baec2c3fe9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0c7a03a4e3df1ca0ddfe473e691eb4724c04e46eac43a37775079baec2c3fe9->enter($__internal_a0c7a03a4e3df1ca0ddfe473e691eb4724c04e46eac43a37775079baec2c3fe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_add71584933e7aca3900be7806a1855202a994c292c7e40d2da663bc50ce5003->leave($__internal_add71584933e7aca3900be7806a1855202a994c292c7e40d2da663bc50ce5003_prof);

        
        $__internal_a0c7a03a4e3df1ca0ddfe473e691eb4724c04e46eac43a37775079baec2c3fe9->leave($__internal_a0c7a03a4e3df1ca0ddfe473e691eb4724c04e46eac43a37775079baec2c3fe9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_dad3846ffcb73333a2d1a6e876d717ec54d94094956c125e25d717475b0ed6eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dad3846ffcb73333a2d1a6e876d717ec54d94094956c125e25d717475b0ed6eb->enter($__internal_dad3846ffcb73333a2d1a6e876d717ec54d94094956c125e25d717475b0ed6eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_072814b2e09c501a7606b7e41bef6486ebcd03af05d702061d4d896bf95c216d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_072814b2e09c501a7606b7e41bef6486ebcd03af05d702061d4d896bf95c216d->enter($__internal_072814b2e09c501a7606b7e41bef6486ebcd03af05d702061d4d896bf95c216d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_072814b2e09c501a7606b7e41bef6486ebcd03af05d702061d4d896bf95c216d->leave($__internal_072814b2e09c501a7606b7e41bef6486ebcd03af05d702061d4d896bf95c216d_prof);

        
        $__internal_dad3846ffcb73333a2d1a6e876d717ec54d94094956c125e25d717475b0ed6eb->leave($__internal_dad3846ffcb73333a2d1a6e876d717ec54d94094956c125e25d717475b0ed6eb_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d658f79d6cbe0bc289c80f872c5fabce5a3f176a9ed6e6a9f9632bd392b369fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d658f79d6cbe0bc289c80f872c5fabce5a3f176a9ed6e6a9f9632bd392b369fb->enter($__internal_d658f79d6cbe0bc289c80f872c5fabce5a3f176a9ed6e6a9f9632bd392b369fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7ef90b42e2a96420bbcf7b683b543a330bae36f1c43fc99b34135f10a6c06d97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ef90b42e2a96420bbcf7b683b543a330bae36f1c43fc99b34135f10a6c06d97->enter($__internal_7ef90b42e2a96420bbcf7b683b543a330bae36f1c43fc99b34135f10a6c06d97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7ef90b42e2a96420bbcf7b683b543a330bae36f1c43fc99b34135f10a6c06d97->leave($__internal_7ef90b42e2a96420bbcf7b683b543a330bae36f1c43fc99b34135f10a6c06d97_prof);

        
        $__internal_d658f79d6cbe0bc289c80f872c5fabce5a3f176a9ed6e6a9f9632bd392b369fb->leave($__internal_d658f79d6cbe0bc289c80f872c5fabce5a3f176a9ed6e6a9f9632bd392b369fb_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b8022b3d0f349b9deda204b23a2905aafccd4a537a91c5324c91344bf727a07b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8022b3d0f349b9deda204b23a2905aafccd4a537a91c5324c91344bf727a07b->enter($__internal_b8022b3d0f349b9deda204b23a2905aafccd4a537a91c5324c91344bf727a07b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7368652ddc454a1cde54c86742f862407d05b4161476d37d7ef5ac07a3285e21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7368652ddc454a1cde54c86742f862407d05b4161476d37d7ef5ac07a3285e21->enter($__internal_7368652ddc454a1cde54c86742f862407d05b4161476d37d7ef5ac07a3285e21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7368652ddc454a1cde54c86742f862407d05b4161476d37d7ef5ac07a3285e21->leave($__internal_7368652ddc454a1cde54c86742f862407d05b4161476d37d7ef5ac07a3285e21_prof);

        
        $__internal_b8022b3d0f349b9deda204b23a2905aafccd4a537a91c5324c91344bf727a07b->leave($__internal_b8022b3d0f349b9deda204b23a2905aafccd4a537a91c5324c91344bf727a07b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Users/paolocremaschi/html/incipit/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
