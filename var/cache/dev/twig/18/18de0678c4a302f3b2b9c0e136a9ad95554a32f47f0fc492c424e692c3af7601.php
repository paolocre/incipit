<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_b7441d40556439ae44c86cf370b3fb71b670e2902210fe00f869841f173cba88 extends Twig_Template
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
        $__internal_631ec7c922f5310d802c91c609667b6e77703c2ac842a84025c02fbc0ad114fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_631ec7c922f5310d802c91c609667b6e77703c2ac842a84025c02fbc0ad114fa->enter($__internal_631ec7c922f5310d802c91c609667b6e77703c2ac842a84025c02fbc0ad114fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_6f1a9aaaaa34c0d9e4b74c34fedb10a367e3296fcdc015b3e0a90a974a19a1c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f1a9aaaaa34c0d9e4b74c34fedb10a367e3296fcdc015b3e0a90a974a19a1c9->enter($__internal_6f1a9aaaaa34c0d9e4b74c34fedb10a367e3296fcdc015b3e0a90a974a19a1c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_631ec7c922f5310d802c91c609667b6e77703c2ac842a84025c02fbc0ad114fa->leave($__internal_631ec7c922f5310d802c91c609667b6e77703c2ac842a84025c02fbc0ad114fa_prof);

        
        $__internal_6f1a9aaaaa34c0d9e4b74c34fedb10a367e3296fcdc015b3e0a90a974a19a1c9->leave($__internal_6f1a9aaaaa34c0d9e4b74c34fedb10a367e3296fcdc015b3e0a90a974a19a1c9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/Users/paolocremaschi/html/incipit/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
