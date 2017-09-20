<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_e4355484f57b3dee029e3bad8e495b78644825105a5cf98ea3a4a261fb105bc1 extends Twig_Template
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
        $__internal_f3dbb80c0458692b382626d64e4d330e3a8d2ac6a5eb85b3cc4e590d22e82788 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3dbb80c0458692b382626d64e4d330e3a8d2ac6a5eb85b3cc4e590d22e82788->enter($__internal_f3dbb80c0458692b382626d64e4d330e3a8d2ac6a5eb85b3cc4e590d22e82788_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_0d1636994b566910cdb05a34661b66141928deb0230a2ac4ed406c3319e03b9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d1636994b566910cdb05a34661b66141928deb0230a2ac4ed406c3319e03b9d->enter($__internal_0d1636994b566910cdb05a34661b66141928deb0230a2ac4ed406c3319e03b9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_f3dbb80c0458692b382626d64e4d330e3a8d2ac6a5eb85b3cc4e590d22e82788->leave($__internal_f3dbb80c0458692b382626d64e4d330e3a8d2ac6a5eb85b3cc4e590d22e82788_prof);

        
        $__internal_0d1636994b566910cdb05a34661b66141928deb0230a2ac4ed406c3319e03b9d->leave($__internal_0d1636994b566910cdb05a34661b66141928deb0230a2ac4ed406c3319e03b9d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/Users/paolocremaschi/html/incipit/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
