<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_81f4f9786c986438eed02a815145f5888175182f7f378b27aa524f263d7b89f9 extends Twig_Template
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
        $__internal_7e1a7c5a300cd79a0b7016eb640708e11fcffde1ba4ebcd93a65700ab22fea2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e1a7c5a300cd79a0b7016eb640708e11fcffde1ba4ebcd93a65700ab22fea2d->enter($__internal_7e1a7c5a300cd79a0b7016eb640708e11fcffde1ba4ebcd93a65700ab22fea2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_8aef67601549a4f4262a8216e45d4394a824749d61d8d0c157e532507bc521e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8aef67601549a4f4262a8216e45d4394a824749d61d8d0c157e532507bc521e8->enter($__internal_8aef67601549a4f4262a8216e45d4394a824749d61d8d0c157e532507bc521e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_7e1a7c5a300cd79a0b7016eb640708e11fcffde1ba4ebcd93a65700ab22fea2d->leave($__internal_7e1a7c5a300cd79a0b7016eb640708e11fcffde1ba4ebcd93a65700ab22fea2d_prof);

        
        $__internal_8aef67601549a4f4262a8216e45d4394a824749d61d8d0c157e532507bc521e8->leave($__internal_8aef67601549a4f4262a8216e45d4394a824749d61d8d0c157e532507bc521e8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/Users/paolocremaschi/html/incipit/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
