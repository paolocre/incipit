<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_9dc4ab1c639887871af2fe9b769dd0e1233e18070e265322add2a00a1f9984c5 extends Twig_Template
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
        $__internal_0d214aa6770fba15db840b85be63ef9ec093841a7616808c5e1e4a87469ab315 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d214aa6770fba15db840b85be63ef9ec093841a7616808c5e1e4a87469ab315->enter($__internal_0d214aa6770fba15db840b85be63ef9ec093841a7616808c5e1e4a87469ab315_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_9579061f6fb286916d6a3620fe4766b9fd1d0f636ab57ee34ef499ec5c33b3cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9579061f6fb286916d6a3620fe4766b9fd1d0f636ab57ee34ef499ec5c33b3cd->enter($__internal_9579061f6fb286916d6a3620fe4766b9fd1d0f636ab57ee34ef499ec5c33b3cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_0d214aa6770fba15db840b85be63ef9ec093841a7616808c5e1e4a87469ab315->leave($__internal_0d214aa6770fba15db840b85be63ef9ec093841a7616808c5e1e4a87469ab315_prof);

        
        $__internal_9579061f6fb286916d6a3620fe4766b9fd1d0f636ab57ee34ef499ec5c33b3cd->leave($__internal_9579061f6fb286916d6a3620fe4766b9fd1d0f636ab57ee34ef499ec5c33b3cd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/Users/paolocremaschi/html/incipit/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
