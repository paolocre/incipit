<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_339126da287ccec2e7e2691172203842a30b85eef50beda4de2d4fd63c1f1f6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_d8081d6bb1b9b46335e17aba74ec02e0073884565714d1faf90664316ed8b7a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8081d6bb1b9b46335e17aba74ec02e0073884565714d1faf90664316ed8b7a9->enter($__internal_d8081d6bb1b9b46335e17aba74ec02e0073884565714d1faf90664316ed8b7a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_104d3bc7f2c6e0001c810487fde88e7481a35ef191b17150475a0dad4eb37163 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_104d3bc7f2c6e0001c810487fde88e7481a35ef191b17150475a0dad4eb37163->enter($__internal_104d3bc7f2c6e0001c810487fde88e7481a35ef191b17150475a0dad4eb37163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8081d6bb1b9b46335e17aba74ec02e0073884565714d1faf90664316ed8b7a9->leave($__internal_d8081d6bb1b9b46335e17aba74ec02e0073884565714d1faf90664316ed8b7a9_prof);

        
        $__internal_104d3bc7f2c6e0001c810487fde88e7481a35ef191b17150475a0dad4eb37163->leave($__internal_104d3bc7f2c6e0001c810487fde88e7481a35ef191b17150475a0dad4eb37163_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_284d54b4df86c5fb271e17e777192695469993d32996d532901fdbf8dedc9939 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_284d54b4df86c5fb271e17e777192695469993d32996d532901fdbf8dedc9939->enter($__internal_284d54b4df86c5fb271e17e777192695469993d32996d532901fdbf8dedc9939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_29902a2ee06673ef30dadeec8c1043d6f566840dfae8ceead15647e9d86103ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29902a2ee06673ef30dadeec8c1043d6f566840dfae8ceead15647e9d86103ce->enter($__internal_29902a2ee06673ef30dadeec8c1043d6f566840dfae8ceead15647e9d86103ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_29902a2ee06673ef30dadeec8c1043d6f566840dfae8ceead15647e9d86103ce->leave($__internal_29902a2ee06673ef30dadeec8c1043d6f566840dfae8ceead15647e9d86103ce_prof);

        
        $__internal_284d54b4df86c5fb271e17e777192695469993d32996d532901fdbf8dedc9939->leave($__internal_284d54b4df86c5fb271e17e777192695469993d32996d532901fdbf8dedc9939_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
", "FOSUserBundle:Security:login.html.twig", "/Users/paolocremaschi/html/incipit/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
