<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_a06e7164368eb0d005de9b00500a9ec1bfbf0d81da7a7c27fe49e8a7b68cb158 extends Twig_Template
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
        $__internal_7fc1d01735726ab5bab493ebfe463b279e695505adfd42b65b0f349757adf26f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fc1d01735726ab5bab493ebfe463b279e695505adfd42b65b0f349757adf26f->enter($__internal_7fc1d01735726ab5bab493ebfe463b279e695505adfd42b65b0f349757adf26f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_9609ce8270fb5d1385bbb3dd8b2a57da93e3309cbff81846bcd34e4ba1caf312 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9609ce8270fb5d1385bbb3dd8b2a57da93e3309cbff81846bcd34e4ba1caf312->enter($__internal_9609ce8270fb5d1385bbb3dd8b2a57da93e3309cbff81846bcd34e4ba1caf312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_7fc1d01735726ab5bab493ebfe463b279e695505adfd42b65b0f349757adf26f->leave($__internal_7fc1d01735726ab5bab493ebfe463b279e695505adfd42b65b0f349757adf26f_prof);

        
        $__internal_9609ce8270fb5d1385bbb3dd8b2a57da93e3309cbff81846bcd34e4ba1caf312->leave($__internal_9609ce8270fb5d1385bbb3dd8b2a57da93e3309cbff81846bcd34e4ba1caf312_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/Users/paolocremaschi/html/incipit/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
