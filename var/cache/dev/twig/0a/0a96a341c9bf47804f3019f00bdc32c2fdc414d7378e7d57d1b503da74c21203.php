<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_3d89c4191ac98f411cc2970513796e0df2d7487183baa7b27441312b77d02ec2 extends Twig_Template
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
        $__internal_40912ecd5382f05328fe09bee11c4ac8adf0ecfe43d18c8f99ef5c625e57a4c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40912ecd5382f05328fe09bee11c4ac8adf0ecfe43d18c8f99ef5c625e57a4c9->enter($__internal_40912ecd5382f05328fe09bee11c4ac8adf0ecfe43d18c8f99ef5c625e57a4c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_25a69d6da7def32a87a36d7a7b39b02615241e61ca2df061381236c34ceb85f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25a69d6da7def32a87a36d7a7b39b02615241e61ca2df061381236c34ceb85f4->enter($__internal_25a69d6da7def32a87a36d7a7b39b02615241e61ca2df061381236c34ceb85f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_40912ecd5382f05328fe09bee11c4ac8adf0ecfe43d18c8f99ef5c625e57a4c9->leave($__internal_40912ecd5382f05328fe09bee11c4ac8adf0ecfe43d18c8f99ef5c625e57a4c9_prof);

        
        $__internal_25a69d6da7def32a87a36d7a7b39b02615241e61ca2df061381236c34ceb85f4->leave($__internal_25a69d6da7def32a87a36d7a7b39b02615241e61ca2df061381236c34ceb85f4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/Users/paolocremaschi/html/incipit/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
