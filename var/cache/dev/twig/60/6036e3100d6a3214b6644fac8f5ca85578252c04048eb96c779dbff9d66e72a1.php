<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_090a497550a3d612f9916fc406230fcf0d812ebee7cdbc3338ec3eefb3137a41 extends Twig_Template
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
        $__internal_3c4a36f90d559bf85c9f86461797f063e764206d3ede2e83deb2c42172c89e03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c4a36f90d559bf85c9f86461797f063e764206d3ede2e83deb2c42172c89e03->enter($__internal_3c4a36f90d559bf85c9f86461797f063e764206d3ede2e83deb2c42172c89e03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_66e5359ebab13432178e53359b3f51c489e21f342c85b1583e5f987ad0f0a1cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66e5359ebab13432178e53359b3f51c489e21f342c85b1583e5f987ad0f0a1cf->enter($__internal_66e5359ebab13432178e53359b3f51c489e21f342c85b1583e5f987ad0f0a1cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_3c4a36f90d559bf85c9f86461797f063e764206d3ede2e83deb2c42172c89e03->leave($__internal_3c4a36f90d559bf85c9f86461797f063e764206d3ede2e83deb2c42172c89e03_prof);

        
        $__internal_66e5359ebab13432178e53359b3f51c489e21f342c85b1583e5f987ad0f0a1cf->leave($__internal_66e5359ebab13432178e53359b3f51c489e21f342c85b1583e5f987ad0f0a1cf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/Users/paolocremaschi/html/incipit/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
