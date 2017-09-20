<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_31120c1833cf7490632a8a8ee3fde613ecc3e866a0da60c93ff2f05340a45e73 extends Twig_Template
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
        $__internal_c397c1d98f0b889064b8e2fc84f1cf28e8df010cebd98a4923a5b2ad93c1aecf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c397c1d98f0b889064b8e2fc84f1cf28e8df010cebd98a4923a5b2ad93c1aecf->enter($__internal_c397c1d98f0b889064b8e2fc84f1cf28e8df010cebd98a4923a5b2ad93c1aecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_480a3f93f5b6dc1b87c46a4baa6dbe9344c572a7dd384c86b30ac66e07225820 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_480a3f93f5b6dc1b87c46a4baa6dbe9344c572a7dd384c86b30ac66e07225820->enter($__internal_480a3f93f5b6dc1b87c46a4baa6dbe9344c572a7dd384c86b30ac66e07225820_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_c397c1d98f0b889064b8e2fc84f1cf28e8df010cebd98a4923a5b2ad93c1aecf->leave($__internal_c397c1d98f0b889064b8e2fc84f1cf28e8df010cebd98a4923a5b2ad93c1aecf_prof);

        
        $__internal_480a3f93f5b6dc1b87c46a4baa6dbe9344c572a7dd384c86b30ac66e07225820->leave($__internal_480a3f93f5b6dc1b87c46a4baa6dbe9344c572a7dd384c86b30ac66e07225820_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/Users/paolocremaschi/html/incipit/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
