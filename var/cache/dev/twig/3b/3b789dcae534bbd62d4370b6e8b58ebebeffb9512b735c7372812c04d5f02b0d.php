<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_a8766f8ad97ba714943c19ae7e83ef34ee29f5de36831996a90851cab62a26d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_4312539f46183f2898ad7333e9bc615abc67a420549a1ec947cf9f784f232a98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4312539f46183f2898ad7333e9bc615abc67a420549a1ec947cf9f784f232a98->enter($__internal_4312539f46183f2898ad7333e9bc615abc67a420549a1ec947cf9f784f232a98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_3355eb1cb04495a060faa666f710ed2b9a9e5f3c25d782e17db963c933ed2a1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3355eb1cb04495a060faa666f710ed2b9a9e5f3c25d782e17db963c933ed2a1b->enter($__internal_3355eb1cb04495a060faa666f710ed2b9a9e5f3c25d782e17db963c933ed2a1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4312539f46183f2898ad7333e9bc615abc67a420549a1ec947cf9f784f232a98->leave($__internal_4312539f46183f2898ad7333e9bc615abc67a420549a1ec947cf9f784f232a98_prof);

        
        $__internal_3355eb1cb04495a060faa666f710ed2b9a9e5f3c25d782e17db963c933ed2a1b->leave($__internal_3355eb1cb04495a060faa666f710ed2b9a9e5f3c25d782e17db963c933ed2a1b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5f0a965b848b1e9a93a4ed431da678099a0db45a12c64fff590012ef55dabd9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f0a965b848b1e9a93a4ed431da678099a0db45a12c64fff590012ef55dabd9a->enter($__internal_5f0a965b848b1e9a93a4ed431da678099a0db45a12c64fff590012ef55dabd9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_22db609c3180bc90760c7f7fe6fb33e6ade8e5d397dc33873b94808be986ca99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22db609c3180bc90760c7f7fe6fb33e6ade8e5d397dc33873b94808be986ca99->enter($__internal_22db609c3180bc90760c7f7fe6fb33e6ade8e5d397dc33873b94808be986ca99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_22db609c3180bc90760c7f7fe6fb33e6ade8e5d397dc33873b94808be986ca99->leave($__internal_22db609c3180bc90760c7f7fe6fb33e6ade8e5d397dc33873b94808be986ca99_prof);

        
        $__internal_5f0a965b848b1e9a93a4ed431da678099a0db45a12c64fff590012ef55dabd9a->leave($__internal_5f0a965b848b1e9a93a4ed431da678099a0db45a12c64fff590012ef55dabd9a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "/Users/paolocremaschi/html/incipit/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
