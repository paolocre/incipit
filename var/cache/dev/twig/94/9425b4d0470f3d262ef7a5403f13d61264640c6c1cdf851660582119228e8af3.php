<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_7394a095354d7a0af196a51e46d88f8211521825c44ed7f5719f9adda08824a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_c90a96485bd418df58de3d4197d69a5cf4e11d0b30032f1176958387d7b3c52f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c90a96485bd418df58de3d4197d69a5cf4e11d0b30032f1176958387d7b3c52f->enter($__internal_c90a96485bd418df58de3d4197d69a5cf4e11d0b30032f1176958387d7b3c52f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_13ecc231a8bd7e409bf6b88b4e304ff8fd88d0560cf92a69955192f14dac27d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13ecc231a8bd7e409bf6b88b4e304ff8fd88d0560cf92a69955192f14dac27d1->enter($__internal_13ecc231a8bd7e409bf6b88b4e304ff8fd88d0560cf92a69955192f14dac27d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c90a96485bd418df58de3d4197d69a5cf4e11d0b30032f1176958387d7b3c52f->leave($__internal_c90a96485bd418df58de3d4197d69a5cf4e11d0b30032f1176958387d7b3c52f_prof);

        
        $__internal_13ecc231a8bd7e409bf6b88b4e304ff8fd88d0560cf92a69955192f14dac27d1->leave($__internal_13ecc231a8bd7e409bf6b88b4e304ff8fd88d0560cf92a69955192f14dac27d1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_565ac3d4cd4a93e1e40f9a5b8065e34602b4f029088ca9671234ccbe437d88c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_565ac3d4cd4a93e1e40f9a5b8065e34602b4f029088ca9671234ccbe437d88c2->enter($__internal_565ac3d4cd4a93e1e40f9a5b8065e34602b4f029088ca9671234ccbe437d88c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_fa5525b47a9e4be69d27d754128315ee2ef08a2a34332551eed9f036d745e3d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa5525b47a9e4be69d27d754128315ee2ef08a2a34332551eed9f036d745e3d5->enter($__internal_fa5525b47a9e4be69d27d754128315ee2ef08a2a34332551eed9f036d745e3d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_fa5525b47a9e4be69d27d754128315ee2ef08a2a34332551eed9f036d745e3d5->leave($__internal_fa5525b47a9e4be69d27d754128315ee2ef08a2a34332551eed9f036d745e3d5_prof);

        
        $__internal_565ac3d4cd4a93e1e40f9a5b8065e34602b4f029088ca9671234ccbe437d88c2->leave($__internal_565ac3d4cd4a93e1e40f9a5b8065e34602b4f029088ca9671234ccbe437d88c2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/Users/paolocremaschi/html/incipit/vendor/friendsofsymfony/user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
