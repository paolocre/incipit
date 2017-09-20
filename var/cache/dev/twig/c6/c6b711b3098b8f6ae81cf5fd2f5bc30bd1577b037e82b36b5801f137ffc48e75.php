<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_bb4249dc71239c0410b8b8cee29b4ca713f1cd099a70b93709c74f909653baf7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_26c96195a9f39fefcec7f6866f76d67c615c92f8c04ba89e4b20dbe4df4b4135 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26c96195a9f39fefcec7f6866f76d67c615c92f8c04ba89e4b20dbe4df4b4135->enter($__internal_26c96195a9f39fefcec7f6866f76d67c615c92f8c04ba89e4b20dbe4df4b4135_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_e581c083bd3ff80c7cbb2a4ea62f6c93f4e514d42331dca18c3a5a3849acda6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e581c083bd3ff80c7cbb2a4ea62f6c93f4e514d42331dca18c3a5a3849acda6b->enter($__internal_e581c083bd3ff80c7cbb2a4ea62f6c93f4e514d42331dca18c3a5a3849acda6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_26c96195a9f39fefcec7f6866f76d67c615c92f8c04ba89e4b20dbe4df4b4135->leave($__internal_26c96195a9f39fefcec7f6866f76d67c615c92f8c04ba89e4b20dbe4df4b4135_prof);

        
        $__internal_e581c083bd3ff80c7cbb2a4ea62f6c93f4e514d42331dca18c3a5a3849acda6b->leave($__internal_e581c083bd3ff80c7cbb2a4ea62f6c93f4e514d42331dca18c3a5a3849acda6b_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_94500155f4200faeb8fe8d3c2a8068fc87210e63fe5af21455c4e6499187b633 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94500155f4200faeb8fe8d3c2a8068fc87210e63fe5af21455c4e6499187b633->enter($__internal_94500155f4200faeb8fe8d3c2a8068fc87210e63fe5af21455c4e6499187b633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5cbbf7c06f86796ba58a61060fcbe25c0aa05ab3c41a2c9884373daf4f1ab681 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cbbf7c06f86796ba58a61060fcbe25c0aa05ab3c41a2c9884373daf4f1ab681->enter($__internal_5cbbf7c06f86796ba58a61060fcbe25c0aa05ab3c41a2c9884373daf4f1ab681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_5cbbf7c06f86796ba58a61060fcbe25c0aa05ab3c41a2c9884373daf4f1ab681->leave($__internal_5cbbf7c06f86796ba58a61060fcbe25c0aa05ab3c41a2c9884373daf4f1ab681_prof);

        
        $__internal_94500155f4200faeb8fe8d3c2a8068fc87210e63fe5af21455c4e6499187b633->leave($__internal_94500155f4200faeb8fe8d3c2a8068fc87210e63fe5af21455c4e6499187b633_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/Users/paolocremaschi/html/incipit/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
