<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_6c642e6621bcefecfaaa4bf57d60c4db8d4b0f358f00b55ffc2a8fcc2bfb9962 extends Twig_Template
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
        $__internal_e7a1c4962bbac5f7b637b492537078a9586fa034698592db9edd762a5da81f86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7a1c4962bbac5f7b637b492537078a9586fa034698592db9edd762a5da81f86->enter($__internal_e7a1c4962bbac5f7b637b492537078a9586fa034698592db9edd762a5da81f86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_d959424ac1d13b68014331dd46977d5ddb83ffb893a625c782811cf2a4c0bb56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d959424ac1d13b68014331dd46977d5ddb83ffb893a625c782811cf2a4c0bb56->enter($__internal_d959424ac1d13b68014331dd46977d5ddb83ffb893a625c782811cf2a4c0bb56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_e7a1c4962bbac5f7b637b492537078a9586fa034698592db9edd762a5da81f86->leave($__internal_e7a1c4962bbac5f7b637b492537078a9586fa034698592db9edd762a5da81f86_prof);

        
        $__internal_d959424ac1d13b68014331dd46977d5ddb83ffb893a625c782811cf2a4c0bb56->leave($__internal_d959424ac1d13b68014331dd46977d5ddb83ffb893a625c782811cf2a4c0bb56_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 2,);
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

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "FOSUserBundle:Group:show_content.html.twig", "/Users/paolocremaschi/html/incipit/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show_content.html.twig");
    }
}
