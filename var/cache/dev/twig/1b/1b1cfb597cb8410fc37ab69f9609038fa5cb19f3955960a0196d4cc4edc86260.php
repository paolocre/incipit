<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_dc857ce0eb360e6badbc1c69e03716cfbc58bdbd2bd38a4e3a2f0541a83e84f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_c3a44cdf0bd0b2e6272b78bd1f9804dc926f091eeea753d256def03800176d18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3a44cdf0bd0b2e6272b78bd1f9804dc926f091eeea753d256def03800176d18->enter($__internal_c3a44cdf0bd0b2e6272b78bd1f9804dc926f091eeea753d256def03800176d18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_4de06d03a30e23e8a320c037e3203199bab9ae47e286681edda07e0006b66334 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4de06d03a30e23e8a320c037e3203199bab9ae47e286681edda07e0006b66334->enter($__internal_4de06d03a30e23e8a320c037e3203199bab9ae47e286681edda07e0006b66334_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3a44cdf0bd0b2e6272b78bd1f9804dc926f091eeea753d256def03800176d18->leave($__internal_c3a44cdf0bd0b2e6272b78bd1f9804dc926f091eeea753d256def03800176d18_prof);

        
        $__internal_4de06d03a30e23e8a320c037e3203199bab9ae47e286681edda07e0006b66334->leave($__internal_4de06d03a30e23e8a320c037e3203199bab9ae47e286681edda07e0006b66334_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b007e0429f0e52a27e6a9def5dd84db2f8bae866d605dffc07b0de007972d8fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b007e0429f0e52a27e6a9def5dd84db2f8bae866d605dffc07b0de007972d8fd->enter($__internal_b007e0429f0e52a27e6a9def5dd84db2f8bae866d605dffc07b0de007972d8fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_fdc7415f64999df2bf6af687830c53a9a115e1f34e6cf659fe30dd7e89339d09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdc7415f64999df2bf6af687830c53a9a115e1f34e6cf659fe30dd7e89339d09->enter($__internal_fdc7415f64999df2bf6af687830c53a9a115e1f34e6cf659fe30dd7e89339d09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_fdc7415f64999df2bf6af687830c53a9a115e1f34e6cf659fe30dd7e89339d09->leave($__internal_fdc7415f64999df2bf6af687830c53a9a115e1f34e6cf659fe30dd7e89339d09_prof);

        
        $__internal_b007e0429f0e52a27e6a9def5dd84db2f8bae866d605dffc07b0de007972d8fd->leave($__internal_b007e0429f0e52a27e6a9def5dd84db2f8bae866d605dffc07b0de007972d8fd_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/Users/paolocremaschi/html/incipit/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list.html.twig");
    }
}
