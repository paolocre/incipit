<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_1c7f2f9e0ead445c50662a935a923e0dbec4afebc3937d2910b7782cfe913323 extends Twig_Template
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
        $__internal_7a81201c2ae34027c52a527eaed1c86451b15e57332af4ba8f5ec103176e8426 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a81201c2ae34027c52a527eaed1c86451b15e57332af4ba8f5ec103176e8426->enter($__internal_7a81201c2ae34027c52a527eaed1c86451b15e57332af4ba8f5ec103176e8426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_0962b0e3e161b196bb06be932499042aafc0d1c699e90268698e042252ac4c7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0962b0e3e161b196bb06be932499042aafc0d1c699e90268698e042252ac4c7d->enter($__internal_0962b0e3e161b196bb06be932499042aafc0d1c699e90268698e042252ac4c7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_7a81201c2ae34027c52a527eaed1c86451b15e57332af4ba8f5ec103176e8426->leave($__internal_7a81201c2ae34027c52a527eaed1c86451b15e57332af4ba8f5ec103176e8426_prof);

        
        $__internal_0962b0e3e161b196bb06be932499042aafc0d1c699e90268698e042252ac4c7d->leave($__internal_0962b0e3e161b196bb06be932499042aafc0d1c699e90268698e042252ac4c7d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/Users/paolocremaschi/html/incipit/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
