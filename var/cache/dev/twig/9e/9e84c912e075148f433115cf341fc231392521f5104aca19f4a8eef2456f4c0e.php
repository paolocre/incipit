<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_6eacc0aae9acfac5a48013bcc1b1b67ef20e84fbda1fe446bf5e155a5b07145d extends Twig_Template
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
        $__internal_6e811e007049d90a3f94ed577239644031a88ab3132cedeee1de6fd983d40b6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e811e007049d90a3f94ed577239644031a88ab3132cedeee1de6fd983d40b6a->enter($__internal_6e811e007049d90a3f94ed577239644031a88ab3132cedeee1de6fd983d40b6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_e41dfae7203664d44eaa22f67331a9439bbff03a29f190037cb826935e5eb9da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e41dfae7203664d44eaa22f67331a9439bbff03a29f190037cb826935e5eb9da->enter($__internal_e41dfae7203664d44eaa22f67331a9439bbff03a29f190037cb826935e5eb9da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_6e811e007049d90a3f94ed577239644031a88ab3132cedeee1de6fd983d40b6a->leave($__internal_6e811e007049d90a3f94ed577239644031a88ab3132cedeee1de6fd983d40b6a_prof);

        
        $__internal_e41dfae7203664d44eaa22f67331a9439bbff03a29f190037cb826935e5eb9da->leave($__internal_e41dfae7203664d44eaa22f67331a9439bbff03a29f190037cb826935e5eb9da_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/Users/paolocremaschi/html/incipit/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
