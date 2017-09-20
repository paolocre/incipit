<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_6b38662d66d1ce4c34acea89e6af9ad6f67f97b7be7103dee6eabbe5dcb97a49 extends Twig_Template
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
        $__internal_8dbf77d085c5c81f621965e02ee86745133c45c81f6f9bea8cc253da6d6c456a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8dbf77d085c5c81f621965e02ee86745133c45c81f6f9bea8cc253da6d6c456a->enter($__internal_8dbf77d085c5c81f621965e02ee86745133c45c81f6f9bea8cc253da6d6c456a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_902bee0c2c795dafba0c6d77bd152208f75c3679a1c3df2fa87538e0a818d986 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_902bee0c2c795dafba0c6d77bd152208f75c3679a1c3df2fa87538e0a818d986->enter($__internal_902bee0c2c795dafba0c6d77bd152208f75c3679a1c3df2fa87538e0a818d986_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_8dbf77d085c5c81f621965e02ee86745133c45c81f6f9bea8cc253da6d6c456a->leave($__internal_8dbf77d085c5c81f621965e02ee86745133c45c81f6f9bea8cc253da6d6c456a_prof);

        
        $__internal_902bee0c2c795dafba0c6d77bd152208f75c3679a1c3df2fa87538e0a818d986->leave($__internal_902bee0c2c795dafba0c6d77bd152208f75c3679a1c3df2fa87538e0a818d986_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/Users/paolocremaschi/html/incipit/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
