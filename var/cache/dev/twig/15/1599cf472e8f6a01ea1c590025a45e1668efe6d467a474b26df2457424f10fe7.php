<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_7db6f492e97e61dbf64944fbcecd37bdda859fc6789e5bb4c8a68e9edb70f1d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9817a16d51d2ddee532972ba46684fc874069c0a00f111bee5df369e92021a2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9817a16d51d2ddee532972ba46684fc874069c0a00f111bee5df369e92021a2b->enter($__internal_9817a16d51d2ddee532972ba46684fc874069c0a00f111bee5df369e92021a2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_ca1db52e4ba19eaa2741072b5c014f7f822eb5db3c0b8c53cb86123a9b6d7f26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca1db52e4ba19eaa2741072b5c014f7f822eb5db3c0b8c53cb86123a9b6d7f26->enter($__internal_ca1db52e4ba19eaa2741072b5c014f7f822eb5db3c0b8c53cb86123a9b6d7f26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9817a16d51d2ddee532972ba46684fc874069c0a00f111bee5df369e92021a2b->leave($__internal_9817a16d51d2ddee532972ba46684fc874069c0a00f111bee5df369e92021a2b_prof);

        
        $__internal_ca1db52e4ba19eaa2741072b5c014f7f822eb5db3c0b8c53cb86123a9b6d7f26->leave($__internal_ca1db52e4ba19eaa2741072b5c014f7f822eb5db3c0b8c53cb86123a9b6d7f26_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7cda05c9c09cf28a682f85827075dfad355cf4e0dc4d9c9d8a897052d9f28e8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cda05c9c09cf28a682f85827075dfad355cf4e0dc4d9c9d8a897052d9f28e8e->enter($__internal_7cda05c9c09cf28a682f85827075dfad355cf4e0dc4d9c9d8a897052d9f28e8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_11e007878fa92f3850c5cf7c72e85c84cecfa1681cd2e2ccd233d3e2e8fc08ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11e007878fa92f3850c5cf7c72e85c84cecfa1681cd2e2ccd233d3e2e8fc08ec->enter($__internal_11e007878fa92f3850c5cf7c72e85c84cecfa1681cd2e2ccd233d3e2e8fc08ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_11e007878fa92f3850c5cf7c72e85c84cecfa1681cd2e2ccd233d3e2e8fc08ec->leave($__internal_11e007878fa92f3850c5cf7c72e85c84cecfa1681cd2e2ccd233d3e2e8fc08ec_prof);

        
        $__internal_7cda05c9c09cf28a682f85827075dfad355cf4e0dc4d9c9d8a897052d9f28e8e->leave($__internal_7cda05c9c09cf28a682f85827075dfad355cf4e0dc4d9c9d8a897052d9f28e8e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e19b50c36b7c9f35849b8805441db82aa6edda8a58fee215168179230c3b540f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e19b50c36b7c9f35849b8805441db82aa6edda8a58fee215168179230c3b540f->enter($__internal_e19b50c36b7c9f35849b8805441db82aa6edda8a58fee215168179230c3b540f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bcc635b6192435c264798128c870ed2b64602fb9018ecd124016c392ce2141fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcc635b6192435c264798128c870ed2b64602fb9018ecd124016c392ce2141fa->enter($__internal_bcc635b6192435c264798128c870ed2b64602fb9018ecd124016c392ce2141fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_bcc635b6192435c264798128c870ed2b64602fb9018ecd124016c392ce2141fa->leave($__internal_bcc635b6192435c264798128c870ed2b64602fb9018ecd124016c392ce2141fa_prof);

        
        $__internal_e19b50c36b7c9f35849b8805441db82aa6edda8a58fee215168179230c3b540f->leave($__internal_e19b50c36b7c9f35849b8805441db82aa6edda8a58fee215168179230c3b540f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/Users/paolocremaschi/html/incipit/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
