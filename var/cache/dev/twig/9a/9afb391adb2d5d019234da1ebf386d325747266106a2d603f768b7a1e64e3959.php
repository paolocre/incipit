<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_4172787ee9b0292af8be48e9ef6f4e1e163ffc9d66aa7785c5e34d0e9e096195 extends Twig_Template
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
        $__internal_d94084574951a74b7e6e163bd1f5a7989a5510d84f0cc043b5f0d834a9c3d866 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d94084574951a74b7e6e163bd1f5a7989a5510d84f0cc043b5f0d834a9c3d866->enter($__internal_d94084574951a74b7e6e163bd1f5a7989a5510d84f0cc043b5f0d834a9c3d866_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_5caf2fcf29b05048034e33caa2ec8a432255b36abf97bd182ab9c83859c23cd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5caf2fcf29b05048034e33caa2ec8a432255b36abf97bd182ab9c83859c23cd7->enter($__internal_5caf2fcf29b05048034e33caa2ec8a432255b36abf97bd182ab9c83859c23cd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_d94084574951a74b7e6e163bd1f5a7989a5510d84f0cc043b5f0d834a9c3d866->leave($__internal_d94084574951a74b7e6e163bd1f5a7989a5510d84f0cc043b5f0d834a9c3d866_prof);

        
        $__internal_5caf2fcf29b05048034e33caa2ec8a432255b36abf97bd182ab9c83859c23cd7->leave($__internal_5caf2fcf29b05048034e33caa2ec8a432255b36abf97bd182ab9c83859c23cd7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/Users/paolocremaschi/html/incipit/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
