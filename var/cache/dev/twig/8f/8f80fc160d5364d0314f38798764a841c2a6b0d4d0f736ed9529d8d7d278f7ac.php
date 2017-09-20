<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_ff745af4c9785908df5f50f3220a611a7a8150c8acb4b2d4fa58002236a15742 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
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
        $__internal_293be62f16cc02227c5e9d0518fe364f3e78e0d0a58e4dcb99c8e219534926b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_293be62f16cc02227c5e9d0518fe364f3e78e0d0a58e4dcb99c8e219534926b4->enter($__internal_293be62f16cc02227c5e9d0518fe364f3e78e0d0a58e4dcb99c8e219534926b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_7b6d30ad2b6f0677a11d4def61a253f02bd34bf2539711ee6ab09f6bd4c7fbbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b6d30ad2b6f0677a11d4def61a253f02bd34bf2539711ee6ab09f6bd4c7fbbe->enter($__internal_7b6d30ad2b6f0677a11d4def61a253f02bd34bf2539711ee6ab09f6bd4c7fbbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_293be62f16cc02227c5e9d0518fe364f3e78e0d0a58e4dcb99c8e219534926b4->leave($__internal_293be62f16cc02227c5e9d0518fe364f3e78e0d0a58e4dcb99c8e219534926b4_prof);

        
        $__internal_7b6d30ad2b6f0677a11d4def61a253f02bd34bf2539711ee6ab09f6bd4c7fbbe->leave($__internal_7b6d30ad2b6f0677a11d4def61a253f02bd34bf2539711ee6ab09f6bd4c7fbbe_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_18c1adee1e2d11d255faf76252ab220aa597cee51eaa1d3f04c4cdad52d80eb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18c1adee1e2d11d255faf76252ab220aa597cee51eaa1d3f04c4cdad52d80eb6->enter($__internal_18c1adee1e2d11d255faf76252ab220aa597cee51eaa1d3f04c4cdad52d80eb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5af7dea1cb19f1983a5085425e1bb584089c4a08654fd1c2bdd3c777fb2c9363 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5af7dea1cb19f1983a5085425e1bb584089c4a08654fd1c2bdd3c777fb2c9363->enter($__internal_5af7dea1cb19f1983a5085425e1bb584089c4a08654fd1c2bdd3c777fb2c9363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_5af7dea1cb19f1983a5085425e1bb584089c4a08654fd1c2bdd3c777fb2c9363->leave($__internal_5af7dea1cb19f1983a5085425e1bb584089c4a08654fd1c2bdd3c777fb2c9363_prof);

        
        $__internal_18c1adee1e2d11d255faf76252ab220aa597cee51eaa1d3f04c4cdad52d80eb6->leave($__internal_18c1adee1e2d11d255faf76252ab220aa597cee51eaa1d3f04c4cdad52d80eb6_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d3b366af4992b1ac983b13ccf5856911785cd457cd613f564a8df3bd74ef9c3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3b366af4992b1ac983b13ccf5856911785cd457cd613f564a8df3bd74ef9c3d->enter($__internal_d3b366af4992b1ac983b13ccf5856911785cd457cd613f564a8df3bd74ef9c3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_683f0c8f82b4408529aec412fe5d84abadfb0c0925948c4d96d4c546f1996bec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_683f0c8f82b4408529aec412fe5d84abadfb0c0925948c4d96d4c546f1996bec->enter($__internal_683f0c8f82b4408529aec412fe5d84abadfb0c0925948c4d96d4c546f1996bec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_683f0c8f82b4408529aec412fe5d84abadfb0c0925948c4d96d4c546f1996bec->leave($__internal_683f0c8f82b4408529aec412fe5d84abadfb0c0925948c4d96d4c546f1996bec_prof);

        
        $__internal_d3b366af4992b1ac983b13ccf5856911785cd457cd613f564a8df3bd74ef9c3d->leave($__internal_d3b366af4992b1ac983b13ccf5856911785cd457cd613f564a8df3bd74ef9c3d_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b7e63c5cd319c2364cb73a75fde8a096c702d594d9e342ac0c0883c1a60e2ba9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7e63c5cd319c2364cb73a75fde8a096c702d594d9e342ac0c0883c1a60e2ba9->enter($__internal_b7e63c5cd319c2364cb73a75fde8a096c702d594d9e342ac0c0883c1a60e2ba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_650718088af8b90aae4e808ef64f591b80276d239920dcf476dc8b33d6038c45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_650718088af8b90aae4e808ef64f591b80276d239920dcf476dc8b33d6038c45->enter($__internal_650718088af8b90aae4e808ef64f591b80276d239920dcf476dc8b33d6038c45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_650718088af8b90aae4e808ef64f591b80276d239920dcf476dc8b33d6038c45->leave($__internal_650718088af8b90aae4e808ef64f591b80276d239920dcf476dc8b33d6038c45_prof);

        
        $__internal_b7e63c5cd319c2364cb73a75fde8a096c702d594d9e342ac0c0883c1a60e2ba9->leave($__internal_b7e63c5cd319c2364cb73a75fde8a096c702d594d9e342ac0c0883c1a60e2ba9_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
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
", "@WebProfiler/Collector/exception.html.twig", "/Users/paolocremaschi/html/incipit/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
