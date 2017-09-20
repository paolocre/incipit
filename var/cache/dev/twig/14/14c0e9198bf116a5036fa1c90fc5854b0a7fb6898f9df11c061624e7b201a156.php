<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_9e8a53a8f3573c2d38fd49424dca2e1b2edc4036dd887b1721d2fe5a9fb4938f extends Twig_Template
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
        $__internal_6816f70a6efacd22e1bf4cbca9e4106cd7bef1d989123e4d53e80717f219827d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6816f70a6efacd22e1bf4cbca9e4106cd7bef1d989123e4d53e80717f219827d->enter($__internal_6816f70a6efacd22e1bf4cbca9e4106cd7bef1d989123e4d53e80717f219827d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_e479764c925e645e063ef125ae0c2a683dad2c82a65138868a349515af14e878 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e479764c925e645e063ef125ae0c2a683dad2c82a65138868a349515af14e878->enter($__internal_e479764c925e645e063ef125ae0c2a683dad2c82a65138868a349515af14e878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_6816f70a6efacd22e1bf4cbca9e4106cd7bef1d989123e4d53e80717f219827d->leave($__internal_6816f70a6efacd22e1bf4cbca9e4106cd7bef1d989123e4d53e80717f219827d_prof);

        
        $__internal_e479764c925e645e063ef125ae0c2a683dad2c82a65138868a349515af14e878->leave($__internal_e479764c925e645e063ef125ae0c2a683dad2c82a65138868a349515af14e878_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/Users/paolocremaschi/html/incipit/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
