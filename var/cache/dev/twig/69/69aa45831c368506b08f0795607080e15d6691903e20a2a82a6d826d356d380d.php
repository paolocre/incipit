<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_b1cee4bc8b5c0942487186f3c65ad3fe4ad7637b767389ac123d14af27d86e9a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_937804ec4eb16a0042530e5c5ae5dd74fa55919eec67274d5208818bfa733c7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_937804ec4eb16a0042530e5c5ae5dd74fa55919eec67274d5208818bfa733c7c->enter($__internal_937804ec4eb16a0042530e5c5ae5dd74fa55919eec67274d5208818bfa733c7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_fcf14d9ef09940aa01524d2733b1d06f0fce6be76a471244c5611108e3d14b8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcf14d9ef09940aa01524d2733b1d06f0fce6be76a471244c5611108e3d14b8f->enter($__internal_fcf14d9ef09940aa01524d2733b1d06f0fce6be76a471244c5611108e3d14b8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_937804ec4eb16a0042530e5c5ae5dd74fa55919eec67274d5208818bfa733c7c->leave($__internal_937804ec4eb16a0042530e5c5ae5dd74fa55919eec67274d5208818bfa733c7c_prof);

        
        $__internal_fcf14d9ef09940aa01524d2733b1d06f0fce6be76a471244c5611108e3d14b8f->leave($__internal_fcf14d9ef09940aa01524d2733b1d06f0fce6be76a471244c5611108e3d14b8f_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_53649737ce614e8b8c0d0668bbe006efebbeb61ec33c0222de586ce9f4d0d66d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53649737ce614e8b8c0d0668bbe006efebbeb61ec33c0222de586ce9f4d0d66d->enter($__internal_53649737ce614e8b8c0d0668bbe006efebbeb61ec33c0222de586ce9f4d0d66d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_61cbbc189e308285cd2309fca5613324a8909dedd40afe7d3d13686a62f7c965 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61cbbc189e308285cd2309fca5613324a8909dedd40afe7d3d13686a62f7c965->enter($__internal_61cbbc189e308285cd2309fca5613324a8909dedd40afe7d3d13686a62f7c965_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_61cbbc189e308285cd2309fca5613324a8909dedd40afe7d3d13686a62f7c965->leave($__internal_61cbbc189e308285cd2309fca5613324a8909dedd40afe7d3d13686a62f7c965_prof);

        
        $__internal_53649737ce614e8b8c0d0668bbe006efebbeb61ec33c0222de586ce9f4d0d66d->leave($__internal_53649737ce614e8b8c0d0668bbe006efebbeb61ec33c0222de586ce9f4d0d66d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
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
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:confirmed.html.twig", "/Users/paolocremaschi/html/incipit/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/confirmed.html.twig");
    }
}
