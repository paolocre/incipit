<?php

/* FOSUserBundle:Profile:edit_content.html.twig */
class __TwigTemplate_f8db1609cc09d7a59ea225698d495eda07300a4632d3a3565199b2314d7a9901 extends Twig_Template
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
        $__internal_efdf3557e4c04301c41e3d062e33e2dcb1c964c486fee665e8dc11c9f54f52c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efdf3557e4c04301c41e3d062e33e2dcb1c964c486fee665e8dc11c9f54f52c7->enter($__internal_efdf3557e4c04301c41e3d062e33e2dcb1c964c486fee665e8dc11c9f54f52c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit_content.html.twig"));

        $__internal_8124e4ba5834defcb7799e106415b1d3863ca4a097fbaf9e45f29354b1e212af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8124e4ba5834defcb7799e106415b1d3863ca4a097fbaf9e45f29354b1e212af->enter($__internal_8124e4ba5834defcb7799e106415b1d3863ca4a097fbaf9e45f29354b1e212af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit"), "attr" => array("class" => "fos_user_profile_edit")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_efdf3557e4c04301c41e3d062e33e2dcb1c964c486fee665e8dc11c9f54f52c7->leave($__internal_efdf3557e4c04301c41e3d062e33e2dcb1c964c486fee665e8dc11c9f54f52c7_prof);

        
        $__internal_8124e4ba5834defcb7799e106415b1d3863ca4a097fbaf9e45f29354b1e212af->leave($__internal_8124e4ba5834defcb7799e106415b1d3863ca4a097fbaf9e45f29354b1e212af_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  37 => 6,  32 => 4,  28 => 3,  25 => 2,);
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

{{ form_start(form, { 'action': path('fos_user_profile_edit'), 'attr': { 'class': 'fos_user_profile_edit' } }) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'profile.edit.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "FOSUserBundle:Profile:edit_content.html.twig", "/Users/paolocremaschi/html/incipit/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/edit_content.html.twig");
    }
}
