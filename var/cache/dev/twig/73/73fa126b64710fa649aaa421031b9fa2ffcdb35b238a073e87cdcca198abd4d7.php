<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_4b3f262fc8be21973574807af7e2ba9163adf67298e2e824ad9d8ff162433505 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a9b7e5d063d4c3debecbfb00921dd6cfe8da2d75adbf5a175619bbee97d0cd4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9b7e5d063d4c3debecbfb00921dd6cfe8da2d75adbf5a175619bbee97d0cd4c->enter($__internal_a9b7e5d063d4c3debecbfb00921dd6cfe8da2d75adbf5a175619bbee97d0cd4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_d953d404ac2af16fa4b179481d350e4fb537b5bdc2639048ca219cb4cfd606a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d953d404ac2af16fa4b179481d350e4fb537b5bdc2639048ca219cb4cfd606a7->enter($__internal_d953d404ac2af16fa4b179481d350e4fb537b5bdc2639048ca219cb4cfd606a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_a9b7e5d063d4c3debecbfb00921dd6cfe8da2d75adbf5a175619bbee97d0cd4c->leave($__internal_a9b7e5d063d4c3debecbfb00921dd6cfe8da2d75adbf5a175619bbee97d0cd4c_prof);

        
        $__internal_d953d404ac2af16fa4b179481d350e4fb537b5bdc2639048ca219cb4cfd606a7->leave($__internal_d953d404ac2af16fa4b179481d350e4fb537b5bdc2639048ca219cb4cfd606a7_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_3e42c7920311118641542f940282127065e7a46635bcae2aab0ee0f272b09bda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e42c7920311118641542f940282127065e7a46635bcae2aab0ee0f272b09bda->enter($__internal_3e42c7920311118641542f940282127065e7a46635bcae2aab0ee0f272b09bda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_88e8d3446e94592844f579a241ae5abf27d86ee229899e7da96cb579eeb388d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88e8d3446e94592844f579a241ae5abf27d86ee229899e7da96cb579eeb388d8->enter($__internal_88e8d3446e94592844f579a241ae5abf27d86ee229899e7da96cb579eeb388d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_88e8d3446e94592844f579a241ae5abf27d86ee229899e7da96cb579eeb388d8->leave($__internal_88e8d3446e94592844f579a241ae5abf27d86ee229899e7da96cb579eeb388d8_prof);

        
        $__internal_3e42c7920311118641542f940282127065e7a46635bcae2aab0ee0f272b09bda->leave($__internal_3e42c7920311118641542f940282127065e7a46635bcae2aab0ee0f272b09bda_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_133a621c5528420aa0a0d102d6e8e91cc7e7ff4105fb64cc7b5b505d14deb322 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_133a621c5528420aa0a0d102d6e8e91cc7e7ff4105fb64cc7b5b505d14deb322->enter($__internal_133a621c5528420aa0a0d102d6e8e91cc7e7ff4105fb64cc7b5b505d14deb322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_4736baa55a0e3688510e0c9ff3e1277b69dd639f16ec0315faa95216ab7ad658 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4736baa55a0e3688510e0c9ff3e1277b69dd639f16ec0315faa95216ab7ad658->enter($__internal_4736baa55a0e3688510e0c9ff3e1277b69dd639f16ec0315faa95216ab7ad658_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_4736baa55a0e3688510e0c9ff3e1277b69dd639f16ec0315faa95216ab7ad658->leave($__internal_4736baa55a0e3688510e0c9ff3e1277b69dd639f16ec0315faa95216ab7ad658_prof);

        
        $__internal_133a621c5528420aa0a0d102d6e8e91cc7e7ff4105fb64cc7b5b505d14deb322->leave($__internal_133a621c5528420aa0a0d102d6e8e91cc7e7ff4105fb64cc7b5b505d14deb322_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_2b08c968b87190a6f91c264acb47dc7ad5516688affc74d18d7e444c7e99ea33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b08c968b87190a6f91c264acb47dc7ad5516688affc74d18d7e444c7e99ea33->enter($__internal_2b08c968b87190a6f91c264acb47dc7ad5516688affc74d18d7e444c7e99ea33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_8a44f5b8d52765083124a08e4e9a3e6881bd040f9cac84d4273750e903fc76e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a44f5b8d52765083124a08e4e9a3e6881bd040f9cac84d4273750e903fc76e4->enter($__internal_8a44f5b8d52765083124a08e4e9a3e6881bd040f9cac84d4273750e903fc76e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_8a44f5b8d52765083124a08e4e9a3e6881bd040f9cac84d4273750e903fc76e4->leave($__internal_8a44f5b8d52765083124a08e4e9a3e6881bd040f9cac84d4273750e903fc76e4_prof);

        
        $__internal_2b08c968b87190a6f91c264acb47dc7ad5516688affc74d18d7e444c7e99ea33->leave($__internal_2b08c968b87190a6f91c264acb47dc7ad5516688affc74d18d7e444c7e99ea33_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
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
{% block subject %}
{%- autoescape false -%}
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "/Users/paolocremaschi/html/incipit/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/email.txt.twig");
    }
}
