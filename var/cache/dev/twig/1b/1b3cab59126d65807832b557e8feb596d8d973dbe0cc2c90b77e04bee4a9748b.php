<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_d7fbf7c6a0dfac30509226a0b6d2aa6472ab488d619d2064c569dc9bedb43930 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_ff93975b15d581a8986e0910601e7ae32d0d14c676699455bb0746ceb9d9dcf5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff93975b15d581a8986e0910601e7ae32d0d14c676699455bb0746ceb9d9dcf5->enter($__internal_ff93975b15d581a8986e0910601e7ae32d0d14c676699455bb0746ceb9d9dcf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_b66485b65773d5459b8a6dda37d91748834f15e566574a315bada999acffccec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b66485b65773d5459b8a6dda37d91748834f15e566574a315bada999acffccec->enter($__internal_b66485b65773d5459b8a6dda37d91748834f15e566574a315bada999acffccec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff93975b15d581a8986e0910601e7ae32d0d14c676699455bb0746ceb9d9dcf5->leave($__internal_ff93975b15d581a8986e0910601e7ae32d0d14c676699455bb0746ceb9d9dcf5_prof);

        
        $__internal_b66485b65773d5459b8a6dda37d91748834f15e566574a315bada999acffccec->leave($__internal_b66485b65773d5459b8a6dda37d91748834f15e566574a315bada999acffccec_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_73925eb5f8b89a4e4f61d17bd2f37c51f24e67e9093c55e21b2d00b45a36e7e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73925eb5f8b89a4e4f61d17bd2f37c51f24e67e9093c55e21b2d00b45a36e7e7->enter($__internal_73925eb5f8b89a4e4f61d17bd2f37c51f24e67e9093c55e21b2d00b45a36e7e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_38e91387361f2f80dfd3d281246fcf065989200d0926240430c023d1d2c3f283 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38e91387361f2f80dfd3d281246fcf065989200d0926240430c023d1d2c3f283->enter($__internal_38e91387361f2f80dfd3d281246fcf065989200d0926240430c023d1d2c3f283_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_38e91387361f2f80dfd3d281246fcf065989200d0926240430c023d1d2c3f283->leave($__internal_38e91387361f2f80dfd3d281246fcf065989200d0926240430c023d1d2c3f283_prof);

        
        $__internal_73925eb5f8b89a4e4f61d17bd2f37c51f24e67e9093c55e21b2d00b45a36e7e7->leave($__internal_73925eb5f8b89a4e4f61d17bd2f37c51f24e67e9093c55e21b2d00b45a36e7e7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/Users/paolocremaschi/html/incipit/vendor/friendsofsymfony/user-bundle/Resources/views/Group/edit.html.twig");
    }
}
