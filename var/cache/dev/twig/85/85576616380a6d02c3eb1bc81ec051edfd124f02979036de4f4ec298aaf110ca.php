<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_8f797635c6560fcf0931d89d6d05cc91c8d4cbbe7d51be4498a2d1830255611d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_27523df676c541b8f8bb641d5925de837fd8bc95570d63b8dc20c05471c20cf9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27523df676c541b8f8bb641d5925de837fd8bc95570d63b8dc20c05471c20cf9->enter($__internal_27523df676c541b8f8bb641d5925de837fd8bc95570d63b8dc20c05471c20cf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_753794cf296e98d45866b4bff82c54f7b31603e66194fdb4b8b3500cda23e3b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_753794cf296e98d45866b4bff82c54f7b31603e66194fdb4b8b3500cda23e3b7->enter($__internal_753794cf296e98d45866b4bff82c54f7b31603e66194fdb4b8b3500cda23e3b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27523df676c541b8f8bb641d5925de837fd8bc95570d63b8dc20c05471c20cf9->leave($__internal_27523df676c541b8f8bb641d5925de837fd8bc95570d63b8dc20c05471c20cf9_prof);

        
        $__internal_753794cf296e98d45866b4bff82c54f7b31603e66194fdb4b8b3500cda23e3b7->leave($__internal_753794cf296e98d45866b4bff82c54f7b31603e66194fdb4b8b3500cda23e3b7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c677f8aacedd6d97a21eade44760246c68611ceb9e5a965e80e91b4a6c6b6d6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c677f8aacedd6d97a21eade44760246c68611ceb9e5a965e80e91b4a6c6b6d6f->enter($__internal_c677f8aacedd6d97a21eade44760246c68611ceb9e5a965e80e91b4a6c6b6d6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b121b6e4009d484326a7407a75eb0f05ed35c4bfded0c28520d5e1a2a2487d70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b121b6e4009d484326a7407a75eb0f05ed35c4bfded0c28520d5e1a2a2487d70->enter($__internal_b121b6e4009d484326a7407a75eb0f05ed35c4bfded0c28520d5e1a2a2487d70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_b121b6e4009d484326a7407a75eb0f05ed35c4bfded0c28520d5e1a2a2487d70->leave($__internal_b121b6e4009d484326a7407a75eb0f05ed35c4bfded0c28520d5e1a2a2487d70_prof);

        
        $__internal_c677f8aacedd6d97a21eade44760246c68611ceb9e5a965e80e91b4a6c6b6d6f->leave($__internal_c677f8aacedd6d97a21eade44760246c68611ceb9e5a965e80e91b4a6c6b6d6f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
", "@FOSUser/Registration/register.html.twig", "/Users/paolocremaschi/html/incipit/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
