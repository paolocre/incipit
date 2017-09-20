<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_672ce66ce36bb0fec0d531aa70f4e572e23ff97d3b5706b3f5721e1fe4edaafb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_67311b0b3e2aa598ea379ce40d5777684a21c694b56c018c66bf02d76ab38400 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67311b0b3e2aa598ea379ce40d5777684a21c694b56c018c66bf02d76ab38400->enter($__internal_67311b0b3e2aa598ea379ce40d5777684a21c694b56c018c66bf02d76ab38400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_98ba1a299518c76fb37657eb7c6c72033a613f7faf7a8f419cfc15326ba88b25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98ba1a299518c76fb37657eb7c6c72033a613f7faf7a8f419cfc15326ba88b25->enter($__internal_98ba1a299518c76fb37657eb7c6c72033a613f7faf7a8f419cfc15326ba88b25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_67311b0b3e2aa598ea379ce40d5777684a21c694b56c018c66bf02d76ab38400->leave($__internal_67311b0b3e2aa598ea379ce40d5777684a21c694b56c018c66bf02d76ab38400_prof);

        
        $__internal_98ba1a299518c76fb37657eb7c6c72033a613f7faf7a8f419cfc15326ba88b25->leave($__internal_98ba1a299518c76fb37657eb7c6c72033a613f7faf7a8f419cfc15326ba88b25_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2029739622f52f83f0799d8e77e42c8511d3fbd773f41159bab73f07badda433 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2029739622f52f83f0799d8e77e42c8511d3fbd773f41159bab73f07badda433->enter($__internal_2029739622f52f83f0799d8e77e42c8511d3fbd773f41159bab73f07badda433_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9d85d7992f859fa822c635887170e86575b0cb57b6ac70a2be82f83a488a14ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d85d7992f859fa822c635887170e86575b0cb57b6ac70a2be82f83a488a14ff->enter($__internal_9d85d7992f859fa822c635887170e86575b0cb57b6ac70a2be82f83a488a14ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_9d85d7992f859fa822c635887170e86575b0cb57b6ac70a2be82f83a488a14ff->leave($__internal_9d85d7992f859fa822c635887170e86575b0cb57b6ac70a2be82f83a488a14ff_prof);

        
        $__internal_2029739622f52f83f0799d8e77e42c8511d3fbd773f41159bab73f07badda433->leave($__internal_2029739622f52f83f0799d8e77e42c8511d3fbd773f41159bab73f07badda433_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/Users/paolocremaschi/html/incipit/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
