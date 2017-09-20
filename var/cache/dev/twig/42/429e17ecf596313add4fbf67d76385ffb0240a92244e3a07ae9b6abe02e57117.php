<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_aae31445689fc8ee557e24c1db5d7e13adda4833200a109b8c3c25fadf032fa3 extends Twig_Template
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
        $__internal_b02d945352950807368419acd01e4df1fd067e3c26418ab8932693a35f156524 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b02d945352950807368419acd01e4df1fd067e3c26418ab8932693a35f156524->enter($__internal_b02d945352950807368419acd01e4df1fd067e3c26418ab8932693a35f156524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_2f0483cc355c254ed0ca7105c8b1900db04f371756f621c11738f5a5d6fe26ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f0483cc355c254ed0ca7105c8b1900db04f371756f621c11738f5a5d6fe26ed->enter($__internal_2f0483cc355c254ed0ca7105c8b1900db04f371756f621c11738f5a5d6fe26ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_b02d945352950807368419acd01e4df1fd067e3c26418ab8932693a35f156524->leave($__internal_b02d945352950807368419acd01e4df1fd067e3c26418ab8932693a35f156524_prof);

        
        $__internal_2f0483cc355c254ed0ca7105c8b1900db04f371756f621c11738f5a5d6fe26ed->leave($__internal_2f0483cc355c254ed0ca7105c8b1900db04f371756f621c11738f5a5d6fe26ed_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/Users/paolocremaschi/html/incipit/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
