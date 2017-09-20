<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_fc8d50b4ddaf604f422b05df6bd2514d63ecc83ac9533c9dcebb31515095dd1c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_9ccda2ed997e1cd20ce1e14499b03ce0d657a2e154ae5bdd50f3399797eb8d80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ccda2ed997e1cd20ce1e14499b03ce0d657a2e154ae5bdd50f3399797eb8d80->enter($__internal_9ccda2ed997e1cd20ce1e14499b03ce0d657a2e154ae5bdd50f3399797eb8d80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_a7ccff61934a030600f517c99d08564ad4945ce114fa256d891c01b497f02a10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7ccff61934a030600f517c99d08564ad4945ce114fa256d891c01b497f02a10->enter($__internal_a7ccff61934a030600f517c99d08564ad4945ce114fa256d891c01b497f02a10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ccda2ed997e1cd20ce1e14499b03ce0d657a2e154ae5bdd50f3399797eb8d80->leave($__internal_9ccda2ed997e1cd20ce1e14499b03ce0d657a2e154ae5bdd50f3399797eb8d80_prof);

        
        $__internal_a7ccff61934a030600f517c99d08564ad4945ce114fa256d891c01b497f02a10->leave($__internal_a7ccff61934a030600f517c99d08564ad4945ce114fa256d891c01b497f02a10_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_52c36d6b65c85e8f14ec81bf30e018a3d5c87f45e62bd1fac7c3bffbeb24ac8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52c36d6b65c85e8f14ec81bf30e018a3d5c87f45e62bd1fac7c3bffbeb24ac8e->enter($__internal_52c36d6b65c85e8f14ec81bf30e018a3d5c87f45e62bd1fac7c3bffbeb24ac8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5a49bcbd8f60aad175cb71213ddad30289203df91de2ec441f805ea3a8676918 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a49bcbd8f60aad175cb71213ddad30289203df91de2ec441f805ea3a8676918->enter($__internal_5a49bcbd8f60aad175cb71213ddad30289203df91de2ec441f805ea3a8676918_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_5a49bcbd8f60aad175cb71213ddad30289203df91de2ec441f805ea3a8676918->leave($__internal_5a49bcbd8f60aad175cb71213ddad30289203df91de2ec441f805ea3a8676918_prof);

        
        $__internal_52c36d6b65c85e8f14ec81bf30e018a3d5c87f45e62bd1fac7c3bffbeb24ac8e->leave($__internal_52c36d6b65c85e8f14ec81bf30e018a3d5c87f45e62bd1fac7c3bffbeb24ac8e_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_35eebdb1a2aeffd77484b6fa6b8280e178e282fd72fd24db8e9632d94fb6eb7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35eebdb1a2aeffd77484b6fa6b8280e178e282fd72fd24db8e9632d94fb6eb7c->enter($__internal_35eebdb1a2aeffd77484b6fa6b8280e178e282fd72fd24db8e9632d94fb6eb7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0a3b3a8e5d19bf06c6a68b236c7382361fddc3d036e6cae0cafefe51c56d1f16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a3b3a8e5d19bf06c6a68b236c7382361fddc3d036e6cae0cafefe51c56d1f16->enter($__internal_0a3b3a8e5d19bf06c6a68b236c7382361fddc3d036e6cae0cafefe51c56d1f16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_0a3b3a8e5d19bf06c6a68b236c7382361fddc3d036e6cae0cafefe51c56d1f16->leave($__internal_0a3b3a8e5d19bf06c6a68b236c7382361fddc3d036e6cae0cafefe51c56d1f16_prof);

        
        $__internal_35eebdb1a2aeffd77484b6fa6b8280e178e282fd72fd24db8e9632d94fb6eb7c->leave($__internal_35eebdb1a2aeffd77484b6fa6b8280e178e282fd72fd24db8e9632d94fb6eb7c_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e5b9ebd6217670a21023043a1db407dbcfd28cccd853d821f48d2b20eef57b4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5b9ebd6217670a21023043a1db407dbcfd28cccd853d821f48d2b20eef57b4f->enter($__internal_e5b9ebd6217670a21023043a1db407dbcfd28cccd853d821f48d2b20eef57b4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a085bb9d656a0406fead50b99aebd61dd5a06db9e4fbe4423518e9181ced66a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a085bb9d656a0406fead50b99aebd61dd5a06db9e4fbe4423518e9181ced66a7->enter($__internal_a085bb9d656a0406fead50b99aebd61dd5a06db9e4fbe4423518e9181ced66a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_a085bb9d656a0406fead50b99aebd61dd5a06db9e4fbe4423518e9181ced66a7->leave($__internal_a085bb9d656a0406fead50b99aebd61dd5a06db9e4fbe4423518e9181ced66a7_prof);

        
        $__internal_e5b9ebd6217670a21023043a1db407dbcfd28cccd853d821f48d2b20eef57b4f->leave($__internal_e5b9ebd6217670a21023043a1db407dbcfd28cccd853d821f48d2b20eef57b4f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/Users/paolocremaschi/html/incipit/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
