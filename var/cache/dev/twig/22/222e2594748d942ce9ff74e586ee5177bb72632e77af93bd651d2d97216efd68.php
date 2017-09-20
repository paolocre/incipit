<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_24a37b672924dc81e8ec3deaa819ff63d6098425765879650caa073f54a28a3a extends Twig_Template
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
        $__internal_f2084a9b05e445691ef246376c028998f4282c9f2886c2f4a337134868b3155c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2084a9b05e445691ef246376c028998f4282c9f2886c2f4a337134868b3155c->enter($__internal_f2084a9b05e445691ef246376c028998f4282c9f2886c2f4a337134868b3155c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_f159f9d75839f565333be3d3f8446b0c15f17848b3f9ca505e3f60a0d8685142 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f159f9d75839f565333be3d3f8446b0c15f17848b3f9ca505e3f60a0d8685142->enter($__internal_f159f9d75839f565333be3d3f8446b0c15f17848b3f9ca505e3f60a0d8685142_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_f2084a9b05e445691ef246376c028998f4282c9f2886c2f4a337134868b3155c->leave($__internal_f2084a9b05e445691ef246376c028998f4282c9f2886c2f4a337134868b3155c_prof);

        
        $__internal_f159f9d75839f565333be3d3f8446b0c15f17848b3f9ca505e3f60a0d8685142->leave($__internal_f159f9d75839f565333be3d3f8446b0c15f17848b3f9ca505e3f60a0d8685142_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/Users/paolocremaschi/html/incipit/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
