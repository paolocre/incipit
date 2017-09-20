<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_9cbbab7f9cf89fcd3b1eaf46719abe5916175b74d9498e75a3dcdc20bfde2155 extends Twig_Template
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
        $__internal_d9191fac07ff64acee3e7ad226a9b805fec01315f9ef5a1ae1fbb0b65e7bcfc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9191fac07ff64acee3e7ad226a9b805fec01315f9ef5a1ae1fbb0b65e7bcfc1->enter($__internal_d9191fac07ff64acee3e7ad226a9b805fec01315f9ef5a1ae1fbb0b65e7bcfc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_669f716f34e365c8851b686141e323bdaae7bf6a54b1706f6e0a223abe1a43b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_669f716f34e365c8851b686141e323bdaae7bf6a54b1706f6e0a223abe1a43b9->enter($__internal_669f716f34e365c8851b686141e323bdaae7bf6a54b1706f6e0a223abe1a43b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_d9191fac07ff64acee3e7ad226a9b805fec01315f9ef5a1ae1fbb0b65e7bcfc1->leave($__internal_d9191fac07ff64acee3e7ad226a9b805fec01315f9ef5a1ae1fbb0b65e7bcfc1_prof);

        
        $__internal_669f716f34e365c8851b686141e323bdaae7bf6a54b1706f6e0a223abe1a43b9->leave($__internal_669f716f34e365c8851b686141e323bdaae7bf6a54b1706f6e0a223abe1a43b9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/Users/paolocremaschi/html/incipit/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
