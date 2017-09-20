<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_26ccac28e93129ff9e6e9e9adb3ed8294de69de07b64920873d38af5a8edd929 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_d3e780106537a6d70365e732775d535b32919e73b2207913495725c099a74ca6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3e780106537a6d70365e732775d535b32919e73b2207913495725c099a74ca6->enter($__internal_d3e780106537a6d70365e732775d535b32919e73b2207913495725c099a74ca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_660087cd4cf0db8bb92d4a18947161109a01ecb322eeae1d5bb125ce4bbb5b0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_660087cd4cf0db8bb92d4a18947161109a01ecb322eeae1d5bb125ce4bbb5b0c->enter($__internal_660087cd4cf0db8bb92d4a18947161109a01ecb322eeae1d5bb125ce4bbb5b0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d3e780106537a6d70365e732775d535b32919e73b2207913495725c099a74ca6->leave($__internal_d3e780106537a6d70365e732775d535b32919e73b2207913495725c099a74ca6_prof);

        
        $__internal_660087cd4cf0db8bb92d4a18947161109a01ecb322eeae1d5bb125ce4bbb5b0c->leave($__internal_660087cd4cf0db8bb92d4a18947161109a01ecb322eeae1d5bb125ce4bbb5b0c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e7a2ef35d4adc26539d9bf57561875cc17289851913e7ac08256e3fe7b402896 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7a2ef35d4adc26539d9bf57561875cc17289851913e7ac08256e3fe7b402896->enter($__internal_e7a2ef35d4adc26539d9bf57561875cc17289851913e7ac08256e3fe7b402896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_527693a9f84b001f343465f81d7ea095028ac604a599852b4e62f8db20e032d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_527693a9f84b001f343465f81d7ea095028ac604a599852b4e62f8db20e032d3->enter($__internal_527693a9f84b001f343465f81d7ea095028ac604a599852b4e62f8db20e032d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_527693a9f84b001f343465f81d7ea095028ac604a599852b4e62f8db20e032d3->leave($__internal_527693a9f84b001f343465f81d7ea095028ac604a599852b4e62f8db20e032d3_prof);

        
        $__internal_e7a2ef35d4adc26539d9bf57561875cc17289851913e7ac08256e3fe7b402896->leave($__internal_e7a2ef35d4adc26539d9bf57561875cc17289851913e7ac08256e3fe7b402896_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7f80dcb1605e7760c60c2ce9a64441c4027593a1a234bbd590e6f6587483fe3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f80dcb1605e7760c60c2ce9a64441c4027593a1a234bbd590e6f6587483fe3f->enter($__internal_7f80dcb1605e7760c60c2ce9a64441c4027593a1a234bbd590e6f6587483fe3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_925d4bb149e2ff2cd0db950a10c5c0b1fa5d6d69f4585a44fa9a829fe6c8e593 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_925d4bb149e2ff2cd0db950a10c5c0b1fa5d6d69f4585a44fa9a829fe6c8e593->enter($__internal_925d4bb149e2ff2cd0db950a10c5c0b1fa5d6d69f4585a44fa9a829fe6c8e593_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_925d4bb149e2ff2cd0db950a10c5c0b1fa5d6d69f4585a44fa9a829fe6c8e593->leave($__internal_925d4bb149e2ff2cd0db950a10c5c0b1fa5d6d69f4585a44fa9a829fe6c8e593_prof);

        
        $__internal_7f80dcb1605e7760c60c2ce9a64441c4027593a1a234bbd590e6f6587483fe3f->leave($__internal_7f80dcb1605e7760c60c2ce9a64441c4027593a1a234bbd590e6f6587483fe3f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_251af2919561e64b8edabb790144343fd781782b966bbeeeda82b1b67070d4d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_251af2919561e64b8edabb790144343fd781782b966bbeeeda82b1b67070d4d3->enter($__internal_251af2919561e64b8edabb790144343fd781782b966bbeeeda82b1b67070d4d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ae4c1fd353168de4a18dd30fb1a916241bcfb6f1ea02f2f831c76d46c0320e53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae4c1fd353168de4a18dd30fb1a916241bcfb6f1ea02f2f831c76d46c0320e53->enter($__internal_ae4c1fd353168de4a18dd30fb1a916241bcfb6f1ea02f2f831c76d46c0320e53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ae4c1fd353168de4a18dd30fb1a916241bcfb6f1ea02f2f831c76d46c0320e53->leave($__internal_ae4c1fd353168de4a18dd30fb1a916241bcfb6f1ea02f2f831c76d46c0320e53_prof);

        
        $__internal_251af2919561e64b8edabb790144343fd781782b966bbeeeda82b1b67070d4d3->leave($__internal_251af2919561e64b8edabb790144343fd781782b966bbeeeda82b1b67070d4d3_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "/Users/paolocremaschi/html/incipit/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
