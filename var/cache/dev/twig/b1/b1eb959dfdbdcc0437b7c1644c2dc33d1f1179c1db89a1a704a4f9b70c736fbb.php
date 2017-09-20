<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_34f5c3177a7dbe50fe322725a58a85c4eb08b6e3060ed7a80d0314893240703d extends Twig_Template
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
        $__internal_1db180b4c3294b436b8707a335ecc949269ad3d6049ad10b3610a29bc0f3d451 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1db180b4c3294b436b8707a335ecc949269ad3d6049ad10b3610a29bc0f3d451->enter($__internal_1db180b4c3294b436b8707a335ecc949269ad3d6049ad10b3610a29bc0f3d451_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_d91a8b449cd9e9536c08443a3a767de61db32a29f525777efd2ab15a0c57fc1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d91a8b449cd9e9536c08443a3a767de61db32a29f525777efd2ab15a0c57fc1c->enter($__internal_d91a8b449cd9e9536c08443a3a767de61db32a29f525777efd2ab15a0c57fc1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_1db180b4c3294b436b8707a335ecc949269ad3d6049ad10b3610a29bc0f3d451->leave($__internal_1db180b4c3294b436b8707a335ecc949269ad3d6049ad10b3610a29bc0f3d451_prof);

        
        $__internal_d91a8b449cd9e9536c08443a3a767de61db32a29f525777efd2ab15a0c57fc1c->leave($__internal_d91a8b449cd9e9536c08443a3a767de61db32a29f525777efd2ab15a0c57fc1c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/Users/paolocremaschi/html/incipit/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
