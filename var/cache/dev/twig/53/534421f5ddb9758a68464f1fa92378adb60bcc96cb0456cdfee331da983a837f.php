<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_9da11d6220d24485f559c5af8e9ac7f0efd88c63c83dac4dee9820379c40a776 extends Twig_Template
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
        $__internal_4baf454b23e8d7eda6a259edb75069b5ec815bbce8528c5efef966ab2acac4a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4baf454b23e8d7eda6a259edb75069b5ec815bbce8528c5efef966ab2acac4a0->enter($__internal_4baf454b23e8d7eda6a259edb75069b5ec815bbce8528c5efef966ab2acac4a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_e05ed66d2eeb5a9c4554acdd68572b9cda07d2925874f3d4d6693b7ea6c54b9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e05ed66d2eeb5a9c4554acdd68572b9cda07d2925874f3d4d6693b7ea6c54b9b->enter($__internal_e05ed66d2eeb5a9c4554acdd68572b9cda07d2925874f3d4d6693b7ea6c54b9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_4baf454b23e8d7eda6a259edb75069b5ec815bbce8528c5efef966ab2acac4a0->leave($__internal_4baf454b23e8d7eda6a259edb75069b5ec815bbce8528c5efef966ab2acac4a0_prof);

        
        $__internal_e05ed66d2eeb5a9c4554acdd68572b9cda07d2925874f3d4d6693b7ea6c54b9b->leave($__internal_e05ed66d2eeb5a9c4554acdd68572b9cda07d2925874f3d4d6693b7ea6c54b9b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/Users/paolocremaschi/html/incipit/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
