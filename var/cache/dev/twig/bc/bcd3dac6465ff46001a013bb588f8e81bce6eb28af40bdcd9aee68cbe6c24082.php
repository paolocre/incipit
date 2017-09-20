<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_72e37d53b3c0ea5b2e0a9828a1eb65dd6176e644353de866bdc311f1ec0027b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
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
        $__internal_13506be0c54fcc6eae10bdcae8a44388aac08a126b791a7df41369a37a3c38a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13506be0c54fcc6eae10bdcae8a44388aac08a126b791a7df41369a37a3c38a3->enter($__internal_13506be0c54fcc6eae10bdcae8a44388aac08a126b791a7df41369a37a3c38a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_318c8d2daf9a78642f378302527e2d89d6692416991d41c3ef78eed04576ae90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_318c8d2daf9a78642f378302527e2d89d6692416991d41c3ef78eed04576ae90->enter($__internal_318c8d2daf9a78642f378302527e2d89d6692416991d41c3ef78eed04576ae90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13506be0c54fcc6eae10bdcae8a44388aac08a126b791a7df41369a37a3c38a3->leave($__internal_13506be0c54fcc6eae10bdcae8a44388aac08a126b791a7df41369a37a3c38a3_prof);

        
        $__internal_318c8d2daf9a78642f378302527e2d89d6692416991d41c3ef78eed04576ae90->leave($__internal_318c8d2daf9a78642f378302527e2d89d6692416991d41c3ef78eed04576ae90_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_29dacf9632a831a7306c94acc0dc18b38d7a5abfcff3e8d7c0ce7e9ad7c713ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29dacf9632a831a7306c94acc0dc18b38d7a5abfcff3e8d7c0ce7e9ad7c713ca->enter($__internal_29dacf9632a831a7306c94acc0dc18b38d7a5abfcff3e8d7c0ce7e9ad7c713ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_fdd0c403c26f4cc511335f555224ca71260eb59f1f528e03ca0b3ee1952fb146 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdd0c403c26f4cc511335f555224ca71260eb59f1f528e03ca0b3ee1952fb146->enter($__internal_fdd0c403c26f4cc511335f555224ca71260eb59f1f528e03ca0b3ee1952fb146_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if (($context["targetUrl"] ?? $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, ($context["targetUrl"] ?? $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_fdd0c403c26f4cc511335f555224ca71260eb59f1f528e03ca0b3ee1952fb146->leave($__internal_fdd0c403c26f4cc511335f555224ca71260eb59f1f528e03ca0b3ee1952fb146_prof);

        
        $__internal_29dacf9632a831a7306c94acc0dc18b38d7a5abfcff3e8d7c0ce7e9ad7c713ca->leave($__internal_29dacf9632a831a7306c94acc0dc18b38d7a5abfcff3e8d7c0ce7e9ad7c713ca_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
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
", "@FOSUser/Registration/confirmed.html.twig", "/Users/paolocremaschi/html/incipit/app/Resources/FOSUserBundle/views/Registration/confirmed.html.twig");
    }
}
