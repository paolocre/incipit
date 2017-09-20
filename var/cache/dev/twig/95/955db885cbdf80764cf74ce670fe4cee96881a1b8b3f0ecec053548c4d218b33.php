<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_1eec25b079a05787991f241f9ec132524debb47d43bae92c9371ea37a41cd434 extends Twig_Template
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
        $__internal_0ae761564bb7665547b3593950ec9928923c02f14c7a111ca448dceaa29cd05c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ae761564bb7665547b3593950ec9928923c02f14c7a111ca448dceaa29cd05c->enter($__internal_0ae761564bb7665547b3593950ec9928923c02f14c7a111ca448dceaa29cd05c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_45931951c943428cda72e2a108c916ff5a73a56c9b35fca4d55dcb9f3a1aa99b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45931951c943428cda72e2a108c916ff5a73a56c9b35fca4d55dcb9f3a1aa99b->enter($__internal_45931951c943428cda72e2a108c916ff5a73a56c9b35fca4d55dcb9f3a1aa99b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_0ae761564bb7665547b3593950ec9928923c02f14c7a111ca448dceaa29cd05c->leave($__internal_0ae761564bb7665547b3593950ec9928923c02f14c7a111ca448dceaa29cd05c_prof);

        
        $__internal_45931951c943428cda72e2a108c916ff5a73a56c9b35fca4d55dcb9f3a1aa99b->leave($__internal_45931951c943428cda72e2a108c916ff5a73a56c9b35fca4d55dcb9f3a1aa99b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/Users/paolocremaschi/html/incipit/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
