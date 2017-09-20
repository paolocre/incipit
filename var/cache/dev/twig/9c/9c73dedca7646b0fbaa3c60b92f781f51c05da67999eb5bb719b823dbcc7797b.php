<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_0367cebd603c65cd73f9f896be675902d7d1032538db024b3abd4088e1ea7a9b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_0d2dfaa3de9e985f88bd96b5f3e75701b4d2b54d72743176401aea51d43ba735 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d2dfaa3de9e985f88bd96b5f3e75701b4d2b54d72743176401aea51d43ba735->enter($__internal_0d2dfaa3de9e985f88bd96b5f3e75701b4d2b54d72743176401aea51d43ba735_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_1005d626418438403891bd238999e86ec78e2a4f14c90d8458967d747403600f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1005d626418438403891bd238999e86ec78e2a4f14c90d8458967d747403600f->enter($__internal_1005d626418438403891bd238999e86ec78e2a4f14c90d8458967d747403600f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d2dfaa3de9e985f88bd96b5f3e75701b4d2b54d72743176401aea51d43ba735->leave($__internal_0d2dfaa3de9e985f88bd96b5f3e75701b4d2b54d72743176401aea51d43ba735_prof);

        
        $__internal_1005d626418438403891bd238999e86ec78e2a4f14c90d8458967d747403600f->leave($__internal_1005d626418438403891bd238999e86ec78e2a4f14c90d8458967d747403600f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a08d1f52db2f5a9023d65fd11c66e725d25897d5cc8dc244e5e5a487b7ce4737 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a08d1f52db2f5a9023d65fd11c66e725d25897d5cc8dc244e5e5a487b7ce4737->enter($__internal_a08d1f52db2f5a9023d65fd11c66e725d25897d5cc8dc244e5e5a487b7ce4737_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b3f206eaa84482396179769e8bffad063ba08b1c25371835a794b163c0b442ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3f206eaa84482396179769e8bffad063ba08b1c25371835a794b163c0b442ef->enter($__internal_b3f206eaa84482396179769e8bffad063ba08b1c25371835a794b163c0b442ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_b3f206eaa84482396179769e8bffad063ba08b1c25371835a794b163c0b442ef->leave($__internal_b3f206eaa84482396179769e8bffad063ba08b1c25371835a794b163c0b442ef_prof);

        
        $__internal_a08d1f52db2f5a9023d65fd11c66e725d25897d5cc8dc244e5e5a487b7ce4737->leave($__internal_a08d1f52db2f5a9023d65fd11c66e725d25897d5cc8dc244e5e5a487b7ce4737_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/Users/paolocremaschi/html/incipit/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show.html.twig");
    }
}
