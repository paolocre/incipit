<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_cb230b1740e3114965f610a23af3642fcaa04b81dc9b94643cf3debfc7f1d74f extends Twig_Template
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
        $__internal_0821ea72c78077ce3536e8cf0d858b3b94837d7845c03e04f1416c33e731414b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0821ea72c78077ce3536e8cf0d858b3b94837d7845c03e04f1416c33e731414b->enter($__internal_0821ea72c78077ce3536e8cf0d858b3b94837d7845c03e04f1416c33e731414b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_c40d97449b0fec5d9078e2d02df3a79a5aaa1739089f2065b81b2ad49a023f9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c40d97449b0fec5d9078e2d02df3a79a5aaa1739089f2065b81b2ad49a023f9a->enter($__internal_c40d97449b0fec5d9078e2d02df3a79a5aaa1739089f2065b81b2ad49a023f9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_0821ea72c78077ce3536e8cf0d858b3b94837d7845c03e04f1416c33e731414b->leave($__internal_0821ea72c78077ce3536e8cf0d858b3b94837d7845c03e04f1416c33e731414b_prof);

        
        $__internal_c40d97449b0fec5d9078e2d02df3a79a5aaa1739089f2065b81b2ad49a023f9a->leave($__internal_c40d97449b0fec5d9078e2d02df3a79a5aaa1739089f2065b81b2ad49a023f9a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/Users/paolocremaschi/html/incipit/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
