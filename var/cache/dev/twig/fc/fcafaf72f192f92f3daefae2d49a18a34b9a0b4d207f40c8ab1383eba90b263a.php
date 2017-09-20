<?php

/* @FOSUser/Registration/register_content.html.twig */
class __TwigTemplate_7a37d3108f70088003c0d67630db74b1534833808e383a41ce1982fa0166340a extends Twig_Template
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
        $__internal_1dc11784122710a60faa4ad45d69623fcab5e66b4d0d78e0a75519ff5b879502 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1dc11784122710a60faa4ad45d69623fcab5e66b4d0d78e0a75519ff5b879502->enter($__internal_1dc11784122710a60faa4ad45d69623fcab5e66b4d0d78e0a75519ff5b879502_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        $__internal_50c662f071232b241ddc6093085516b4aa1de00b4e30fbc6554a8dfe13228a31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50c662f071232b241ddc6093085516b4aa1de00b4e30fbc6554a8dfe13228a31->enter($__internal_50c662f071232b241ddc6093085516b4aa1de00b4e30fbc6554a8dfe13228a31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        // line 2
        echo "<div class=\"form-group\">
    ";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "
        ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <div>
            <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
        </div>
    ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
</div>
";
        
        $__internal_1dc11784122710a60faa4ad45d69623fcab5e66b4d0d78e0a75519ff5b879502->leave($__internal_1dc11784122710a60faa4ad45d69623fcab5e66b4d0d78e0a75519ff5b879502_prof);

        
        $__internal_50c662f071232b241ddc6093085516b4aa1de00b4e30fbc6554a8dfe13228a31->leave($__internal_50c662f071232b241ddc6093085516b4aa1de00b4e30fbc6554a8dfe13228a31_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register_content.html.twig";
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
<div class=\"form-group\">
    {{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}
        {{ form_widget(form) }}
        <div>
            <input type=\"submit\" value=\"{{ 'registration.submit'|trans }}\" />
        </div>
    {{ form_end(form) }}
</div>
", "@FOSUser/Registration/register_content.html.twig", "/Users/paolocremaschi/html/incipit/app/Resources/FOSUserBundle/views/Registration/register_content.html.twig");
    }
}
