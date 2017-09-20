<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_a058ddd36d5bea341b4bfdadb7ed68e4fed77002676b1cce14f1ce77e4056a43 extends Twig_Template
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
        $__internal_02453a2df1d7a17b8a684db6045ce2008e8a641f54dd9cd7f4225f923241c161 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02453a2df1d7a17b8a684db6045ce2008e8a641f54dd9cd7f4225f923241c161->enter($__internal_02453a2df1d7a17b8a684db6045ce2008e8a641f54dd9cd7f4225f923241c161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_ac75bef1974590dff17cc0f93fef305b77acc7bccad4c9a06aefd507a5f3adb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac75bef1974590dff17cc0f93fef305b77acc7bccad4c9a06aefd507a5f3adb5->enter($__internal_ac75bef1974590dff17cc0f93fef305b77acc7bccad4c9a06aefd507a5f3adb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_02453a2df1d7a17b8a684db6045ce2008e8a641f54dd9cd7f4225f923241c161->leave($__internal_02453a2df1d7a17b8a684db6045ce2008e8a641f54dd9cd7f4225f923241c161_prof);

        
        $__internal_ac75bef1974590dff17cc0f93fef305b77acc7bccad4c9a06aefd507a5f3adb5->leave($__internal_ac75bef1974590dff17cc0f93fef305b77acc7bccad4c9a06aefd507a5f3adb5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/Users/paolocremaschi/html/incipit/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
