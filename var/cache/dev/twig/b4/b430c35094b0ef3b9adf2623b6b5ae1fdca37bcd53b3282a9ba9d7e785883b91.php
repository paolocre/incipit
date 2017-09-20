<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_207b7ef03fcc2ad20f6800f9d8566566c59b5353e3cc4511ea2d835d4a0bffba extends Twig_Template
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
        $__internal_5354138cd67086a593ebe5ff312525a54398140b09a0216ec6ca9081f6e97eb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5354138cd67086a593ebe5ff312525a54398140b09a0216ec6ca9081f6e97eb3->enter($__internal_5354138cd67086a593ebe5ff312525a54398140b09a0216ec6ca9081f6e97eb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_ef866dcac8dffaeadee8034f3f1bd9b5e96308f3b7c081a3baf7164e00021f22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef866dcac8dffaeadee8034f3f1bd9b5e96308f3b7c081a3baf7164e00021f22->enter($__internal_ef866dcac8dffaeadee8034f3f1bd9b5e96308f3b7c081a3baf7164e00021f22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_5354138cd67086a593ebe5ff312525a54398140b09a0216ec6ca9081f6e97eb3->leave($__internal_5354138cd67086a593ebe5ff312525a54398140b09a0216ec6ca9081f6e97eb3_prof);

        
        $__internal_ef866dcac8dffaeadee8034f3f1bd9b5e96308f3b7c081a3baf7164e00021f22->leave($__internal_ef866dcac8dffaeadee8034f3f1bd9b5e96308f3b7c081a3baf7164e00021f22_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/Users/paolocremaschi/html/incipit/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
