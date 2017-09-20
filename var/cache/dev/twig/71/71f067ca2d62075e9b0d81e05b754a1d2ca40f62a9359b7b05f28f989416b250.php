<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_d2a6d81416efe885fca4adb2b4bd95199ddac1bd45a9450642e397abbad784c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_39fdc2a3dba5c96a3099c7a100644a312eced2fe8597bc4c8c45142aff0a7c03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39fdc2a3dba5c96a3099c7a100644a312eced2fe8597bc4c8c45142aff0a7c03->enter($__internal_39fdc2a3dba5c96a3099c7a100644a312eced2fe8597bc4c8c45142aff0a7c03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        $__internal_9931e8542e864e73bc9aff95f54479fbd3917dd3da7ced41ebf9b316ada7b966 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9931e8542e864e73bc9aff95f54479fbd3917dd3da7ced41ebf9b316ada7b966->enter($__internal_9931e8542e864e73bc9aff95f54479fbd3917dd3da7ced41ebf9b316ada7b966_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_39fdc2a3dba5c96a3099c7a100644a312eced2fe8597bc4c8c45142aff0a7c03->leave($__internal_39fdc2a3dba5c96a3099c7a100644a312eced2fe8597bc4c8c45142aff0a7c03_prof);

        
        $__internal_9931e8542e864e73bc9aff95f54479fbd3917dd3da7ced41ebf9b316ada7b966->leave($__internal_9931e8542e864e73bc9aff95f54479fbd3917dd3da7ced41ebf9b316ada7b966_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  29 => 4,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_user_show\">
    <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
    <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
</div>
", "FOSUserBundle:Profile:show_content.html.twig", "/Users/paolocremaschi/html/incipit/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show_content.html.twig");
    }
}
