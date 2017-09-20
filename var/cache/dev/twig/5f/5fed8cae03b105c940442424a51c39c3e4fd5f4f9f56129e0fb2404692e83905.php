<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_2b672c2c84e269772b29e207fc5accf16e335f13e9f32527afd92dce0d34bca0 extends Twig_Template
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
        $__internal_a2ea9f2523b6a8e784d2eddfc3ba0a926714f536f81f16e755e4c60394a9892e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2ea9f2523b6a8e784d2eddfc3ba0a926714f536f81f16e755e4c60394a9892e->enter($__internal_a2ea9f2523b6a8e784d2eddfc3ba0a926714f536f81f16e755e4c60394a9892e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_4297861267dcba3fe1c85905c63a112ca20e75a4886fb64e98a8058b2f7d4788 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4297861267dcba3fe1c85905c63a112ca20e75a4886fb64e98a8058b2f7d4788->enter($__internal_4297861267dcba3fe1c85905c63a112ca20e75a4886fb64e98a8058b2f7d4788_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_a2ea9f2523b6a8e784d2eddfc3ba0a926714f536f81f16e755e4c60394a9892e->leave($__internal_a2ea9f2523b6a8e784d2eddfc3ba0a926714f536f81f16e755e4c60394a9892e_prof);

        
        $__internal_4297861267dcba3fe1c85905c63a112ca20e75a4886fb64e98a8058b2f7d4788->leave($__internal_4297861267dcba3fe1c85905c63a112ca20e75a4886fb64e98a8058b2f7d4788_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/Users/paolocremaschi/html/incipit/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
