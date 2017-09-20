<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_73468cd9ccb10ce1e43908b99c270e1133ca0c67ea9872a10a47cca5dd1cf0d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_e63d6ab582589c52ed69fa3d94b84a32687d2a00999092c7e7f9301140790135 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e63d6ab582589c52ed69fa3d94b84a32687d2a00999092c7e7f9301140790135->enter($__internal_e63d6ab582589c52ed69fa3d94b84a32687d2a00999092c7e7f9301140790135_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_49ad55ca36cd819bfe170d26a457a4e9abbcb44c19484c78167d3b327ad29764 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49ad55ca36cd819bfe170d26a457a4e9abbcb44c19484c78167d3b327ad29764->enter($__internal_49ad55ca36cd819bfe170d26a457a4e9abbcb44c19484c78167d3b327ad29764_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e63d6ab582589c52ed69fa3d94b84a32687d2a00999092c7e7f9301140790135->leave($__internal_e63d6ab582589c52ed69fa3d94b84a32687d2a00999092c7e7f9301140790135_prof);

        
        $__internal_49ad55ca36cd819bfe170d26a457a4e9abbcb44c19484c78167d3b327ad29764->leave($__internal_49ad55ca36cd819bfe170d26a457a4e9abbcb44c19484c78167d3b327ad29764_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_99e3c6ad8711cf282747945b65da08fc29f08656faf0c498896874e0f8841ed2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99e3c6ad8711cf282747945b65da08fc29f08656faf0c498896874e0f8841ed2->enter($__internal_99e3c6ad8711cf282747945b65da08fc29f08656faf0c498896874e0f8841ed2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_440ee90b4e602ebcc67d9c2473ba891c55669e2bae95f37a8906380bd16d70be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_440ee90b4e602ebcc67d9c2473ba891c55669e2bae95f37a8906380bd16d70be->enter($__internal_440ee90b4e602ebcc67d9c2473ba891c55669e2bae95f37a8906380bd16d70be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_440ee90b4e602ebcc67d9c2473ba891c55669e2bae95f37a8906380bd16d70be->leave($__internal_440ee90b4e602ebcc67d9c2473ba891c55669e2bae95f37a8906380bd16d70be_prof);

        
        $__internal_99e3c6ad8711cf282747945b65da08fc29f08656faf0c498896874e0f8841ed2->leave($__internal_99e3c6ad8711cf282747945b65da08fc29f08656faf0c498896874e0f8841ed2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "/Users/paolocremaschi/html/incipit/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/check_email.html.twig");
    }
}
