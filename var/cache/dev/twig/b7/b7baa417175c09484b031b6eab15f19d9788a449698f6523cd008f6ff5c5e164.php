<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_a5f4964b8dd2411fb4b93db10fd09e972e9a4fc40c61ab201c92f8f0befe5dec extends Twig_Template
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
        $__internal_7ad2cd5e11051ac4c2275e0609411dd7f2f2727a18db8a2d319c280d6347c4b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ad2cd5e11051ac4c2275e0609411dd7f2f2727a18db8a2d319c280d6347c4b8->enter($__internal_7ad2cd5e11051ac4c2275e0609411dd7f2f2727a18db8a2d319c280d6347c4b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_d1a28310eba0e77cf36d0d8961deeffb460053f1425202fadb787d19d60fb003 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1a28310eba0e77cf36d0d8961deeffb460053f1425202fadb787d19d60fb003->enter($__internal_d1a28310eba0e77cf36d0d8961deeffb460053f1425202fadb787d19d60fb003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_7ad2cd5e11051ac4c2275e0609411dd7f2f2727a18db8a2d319c280d6347c4b8->leave($__internal_7ad2cd5e11051ac4c2275e0609411dd7f2f2727a18db8a2d319c280d6347c4b8_prof);

        
        $__internal_d1a28310eba0e77cf36d0d8961deeffb460053f1425202fadb787d19d60fb003->leave($__internal_d1a28310eba0e77cf36d0d8961deeffb460053f1425202fadb787d19d60fb003_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/Users/paolocremaschi/html/incipit/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
