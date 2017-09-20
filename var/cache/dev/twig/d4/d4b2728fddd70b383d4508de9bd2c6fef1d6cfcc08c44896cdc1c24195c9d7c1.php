<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_01f51919ce56e22c3d95ec38d6d0b067f66d7a28a249c0157031c603493cf748 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ac52b7e54333dab1684c301563e5cb3cdc5c38fd37a5d98e9c6f87b63928d323 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac52b7e54333dab1684c301563e5cb3cdc5c38fd37a5d98e9c6f87b63928d323->enter($__internal_ac52b7e54333dab1684c301563e5cb3cdc5c38fd37a5d98e9c6f87b63928d323_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_e495a0925a79babfa59374d46805fb2640fe21054d93d79a59e7dd40877c4f53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e495a0925a79babfa59374d46805fb2640fe21054d93d79a59e7dd40877c4f53->enter($__internal_e495a0925a79babfa59374d46805fb2640fe21054d93d79a59e7dd40877c4f53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac52b7e54333dab1684c301563e5cb3cdc5c38fd37a5d98e9c6f87b63928d323->leave($__internal_ac52b7e54333dab1684c301563e5cb3cdc5c38fd37a5d98e9c6f87b63928d323_prof);

        
        $__internal_e495a0925a79babfa59374d46805fb2640fe21054d93d79a59e7dd40877c4f53->leave($__internal_e495a0925a79babfa59374d46805fb2640fe21054d93d79a59e7dd40877c4f53_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7aa543eb1c1e3116e3755ba79f52fe93aa4a531f1ba8bd7997f3b645f45782c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7aa543eb1c1e3116e3755ba79f52fe93aa4a531f1ba8bd7997f3b645f45782c8->enter($__internal_7aa543eb1c1e3116e3755ba79f52fe93aa4a531f1ba8bd7997f3b645f45782c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_09222fecb849ec21cf40ae63e77a05298513e04c739c0a36633ead41e9a9b3c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09222fecb849ec21cf40ae63e77a05298513e04c739c0a36633ead41e9a9b3c5->enter($__internal_09222fecb849ec21cf40ae63e77a05298513e04c739c0a36633ead41e9a9b3c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_09222fecb849ec21cf40ae63e77a05298513e04c739c0a36633ead41e9a9b3c5->leave($__internal_09222fecb849ec21cf40ae63e77a05298513e04c739c0a36633ead41e9a9b3c5_prof);

        
        $__internal_7aa543eb1c1e3116e3755ba79f52fe93aa4a531f1ba8bd7997f3b645f45782c8->leave($__internal_7aa543eb1c1e3116e3755ba79f52fe93aa4a531f1ba8bd7997f3b645f45782c8_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "/Users/paolocremaschi/html/incipit/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
