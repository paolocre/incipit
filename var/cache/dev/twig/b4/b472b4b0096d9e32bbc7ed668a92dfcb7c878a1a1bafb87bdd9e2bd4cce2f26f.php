<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_c575f7fb2255663e23e6e1816d182c5971957fe224247c11a41924491fc0fc66 extends Twig_Template
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
        $__internal_ddd683bb5dd7ca44a4480a730859c92ce2c5210f0860673231a623506b9db4c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddd683bb5dd7ca44a4480a730859c92ce2c5210f0860673231a623506b9db4c7->enter($__internal_ddd683bb5dd7ca44a4480a730859c92ce2c5210f0860673231a623506b9db4c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_a1c4f297a9ac15c46174683a14939509e8f40a7ccbd43d1d1671b564894302fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1c4f297a9ac15c46174683a14939509e8f40a7ccbd43d1d1671b564894302fc->enter($__internal_a1c4f297a9ac15c46174683a14939509e8f40a7ccbd43d1d1671b564894302fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_ddd683bb5dd7ca44a4480a730859c92ce2c5210f0860673231a623506b9db4c7->leave($__internal_ddd683bb5dd7ca44a4480a730859c92ce2c5210f0860673231a623506b9db4c7_prof);

        
        $__internal_a1c4f297a9ac15c46174683a14939509e8f40a7ccbd43d1d1671b564894302fc->leave($__internal_a1c4f297a9ac15c46174683a14939509e8f40a7ccbd43d1d1671b564894302fc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/Users/paolocremaschi/html/incipit/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
