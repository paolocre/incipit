<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_6c044566affe5f83db0708fd87ebed333f2c428ea9b96f9aaba808547d413e31 extends Twig_Template
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
        $__internal_8f7e38b1477b1d33436ac0d2f3368fb4f777195e54ae7dc3f4ffe2dc65178ef1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f7e38b1477b1d33436ac0d2f3368fb4f777195e54ae7dc3f4ffe2dc65178ef1->enter($__internal_8f7e38b1477b1d33436ac0d2f3368fb4f777195e54ae7dc3f4ffe2dc65178ef1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_a34c9162ca5182813cd0c00d724f88fbefae0093f0220add57cb584c7e8c36f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a34c9162ca5182813cd0c00d724f88fbefae0093f0220add57cb584c7e8c36f8->enter($__internal_a34c9162ca5182813cd0c00d724f88fbefae0093f0220add57cb584c7e8c36f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_8f7e38b1477b1d33436ac0d2f3368fb4f777195e54ae7dc3f4ffe2dc65178ef1->leave($__internal_8f7e38b1477b1d33436ac0d2f3368fb4f777195e54ae7dc3f4ffe2dc65178ef1_prof);

        
        $__internal_a34c9162ca5182813cd0c00d724f88fbefae0093f0220add57cb584c7e8c36f8->leave($__internal_a34c9162ca5182813cd0c00d724f88fbefae0093f0220add57cb584c7e8c36f8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/Users/paolocremaschi/html/incipit/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
