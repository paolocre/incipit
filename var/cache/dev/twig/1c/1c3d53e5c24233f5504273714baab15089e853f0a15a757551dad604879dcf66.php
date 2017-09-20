<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_75b97afc0416473d409ca87d7318fbfeed3913d650dd654d7e834b6feb312b07 extends Twig_Template
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
        $__internal_3fd399f29568239fefe05a0ee8c5df61e3a3f9d16653ef5a50ed73acf3d40d8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fd399f29568239fefe05a0ee8c5df61e3a3f9d16653ef5a50ed73acf3d40d8b->enter($__internal_3fd399f29568239fefe05a0ee8c5df61e3a3f9d16653ef5a50ed73acf3d40d8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_d2cc35415ca8ef2e85378dc0dfeb0ebd27e8802b87416990a52a66062bba1d4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2cc35415ca8ef2e85378dc0dfeb0ebd27e8802b87416990a52a66062bba1d4a->enter($__internal_d2cc35415ca8ef2e85378dc0dfeb0ebd27e8802b87416990a52a66062bba1d4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_3fd399f29568239fefe05a0ee8c5df61e3a3f9d16653ef5a50ed73acf3d40d8b->leave($__internal_3fd399f29568239fefe05a0ee8c5df61e3a3f9d16653ef5a50ed73acf3d40d8b_prof);

        
        $__internal_d2cc35415ca8ef2e85378dc0dfeb0ebd27e8802b87416990a52a66062bba1d4a->leave($__internal_d2cc35415ca8ef2e85378dc0dfeb0ebd27e8802b87416990a52a66062bba1d4a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/Users/paolocremaschi/html/incipit/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
