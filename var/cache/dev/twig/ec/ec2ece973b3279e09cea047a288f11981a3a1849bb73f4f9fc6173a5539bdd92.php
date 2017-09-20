<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_a7b37095c69f1e8d7b81c41ba2dbcc90e8c8a4c580707021f71aa3d7dcf6843f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_c4ec748cda34786feca32e7568c2aade9d3366d709cd6bce15c197d38303af07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4ec748cda34786feca32e7568c2aade9d3366d709cd6bce15c197d38303af07->enter($__internal_c4ec748cda34786feca32e7568c2aade9d3366d709cd6bce15c197d38303af07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_50a9b1f410e49951451a650c7ac2e9773929c231f8a3f4d6002842b9bc6d02ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50a9b1f410e49951451a650c7ac2e9773929c231f8a3f4d6002842b9bc6d02ed->enter($__internal_50a9b1f410e49951451a650c7ac2e9773929c231f8a3f4d6002842b9bc6d02ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4ec748cda34786feca32e7568c2aade9d3366d709cd6bce15c197d38303af07->leave($__internal_c4ec748cda34786feca32e7568c2aade9d3366d709cd6bce15c197d38303af07_prof);

        
        $__internal_50a9b1f410e49951451a650c7ac2e9773929c231f8a3f4d6002842b9bc6d02ed->leave($__internal_50a9b1f410e49951451a650c7ac2e9773929c231f8a3f4d6002842b9bc6d02ed_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_017708c2e1def1ddeb832d06548608d980594626ac4fea70fd43a7c3ac67bb7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_017708c2e1def1ddeb832d06548608d980594626ac4fea70fd43a7c3ac67bb7e->enter($__internal_017708c2e1def1ddeb832d06548608d980594626ac4fea70fd43a7c3ac67bb7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ae65ae9352cbc970c0c01122643f1c9ce4c221b97e5d4a0c4b512bc5e8703882 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae65ae9352cbc970c0c01122643f1c9ce4c221b97e5d4a0c4b512bc5e8703882->enter($__internal_ae65ae9352cbc970c0c01122643f1c9ce4c221b97e5d4a0c4b512bc5e8703882_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_ae65ae9352cbc970c0c01122643f1c9ce4c221b97e5d4a0c4b512bc5e8703882->leave($__internal_ae65ae9352cbc970c0c01122643f1c9ce4c221b97e5d4a0c4b512bc5e8703882_prof);

        
        $__internal_017708c2e1def1ddeb832d06548608d980594626ac4fea70fd43a7c3ac67bb7e->leave($__internal_017708c2e1def1ddeb832d06548608d980594626ac4fea70fd43a7c3ac67bb7e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/Users/paolocremaschi/html/incipit/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
