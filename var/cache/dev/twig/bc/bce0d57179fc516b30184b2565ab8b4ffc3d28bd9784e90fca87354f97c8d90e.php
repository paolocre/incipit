<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_520d2edee525c3a95165d6ed96ddc238a904b01b470b6a5abc48624d8cf55778 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b8340ae4fbbddb1c0e1c49e81268e9ba700c0adc84ff299eb675bc027de931c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8340ae4fbbddb1c0e1c49e81268e9ba700c0adc84ff299eb675bc027de931c9->enter($__internal_b8340ae4fbbddb1c0e1c49e81268e9ba700c0adc84ff299eb675bc027de931c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_ecf347c85c13c89abca8a16c3554eb86b0b48eacbc08610698ea47b08354e118 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecf347c85c13c89abca8a16c3554eb86b0b48eacbc08610698ea47b08354e118->enter($__internal_ecf347c85c13c89abca8a16c3554eb86b0b48eacbc08610698ea47b08354e118_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8340ae4fbbddb1c0e1c49e81268e9ba700c0adc84ff299eb675bc027de931c9->leave($__internal_b8340ae4fbbddb1c0e1c49e81268e9ba700c0adc84ff299eb675bc027de931c9_prof);

        
        $__internal_ecf347c85c13c89abca8a16c3554eb86b0b48eacbc08610698ea47b08354e118->leave($__internal_ecf347c85c13c89abca8a16c3554eb86b0b48eacbc08610698ea47b08354e118_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_551b2a3ad630101aa546a9cc035db0ad35e3a5ddddd381f1dc75e029196cfb8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_551b2a3ad630101aa546a9cc035db0ad35e3a5ddddd381f1dc75e029196cfb8a->enter($__internal_551b2a3ad630101aa546a9cc035db0ad35e3a5ddddd381f1dc75e029196cfb8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_20ff8d10265e9b496aab11aa268b7b0af31dfe14cbe6766a7119059a2621fb22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20ff8d10265e9b496aab11aa268b7b0af31dfe14cbe6766a7119059a2621fb22->enter($__internal_20ff8d10265e9b496aab11aa268b7b0af31dfe14cbe6766a7119059a2621fb22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_20ff8d10265e9b496aab11aa268b7b0af31dfe14cbe6766a7119059a2621fb22->leave($__internal_20ff8d10265e9b496aab11aa268b7b0af31dfe14cbe6766a7119059a2621fb22_prof);

        
        $__internal_551b2a3ad630101aa546a9cc035db0ad35e3a5ddddd381f1dc75e029196cfb8a->leave($__internal_551b2a3ad630101aa546a9cc035db0ad35e3a5ddddd381f1dc75e029196cfb8a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/Users/paolocremaschi/html/incipit/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
