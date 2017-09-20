<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_38f9faa4e4993fdba8231b43a239e30d2d196573e1fafc75c94060dbbb4ef957 extends Twig_Template
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
        $__internal_721a5ab263bc39da29b861e9aa8d1d4b9e7ff0560b5b9a8510b027a39e34cd02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_721a5ab263bc39da29b861e9aa8d1d4b9e7ff0560b5b9a8510b027a39e34cd02->enter($__internal_721a5ab263bc39da29b861e9aa8d1d4b9e7ff0560b5b9a8510b027a39e34cd02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_83fd0a94f44ba7d1b28108d494298a1fd4c077477e82707ae28b9bc607802b50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83fd0a94f44ba7d1b28108d494298a1fd4c077477e82707ae28b9bc607802b50->enter($__internal_83fd0a94f44ba7d1b28108d494298a1fd4c077477e82707ae28b9bc607802b50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_721a5ab263bc39da29b861e9aa8d1d4b9e7ff0560b5b9a8510b027a39e34cd02->leave($__internal_721a5ab263bc39da29b861e9aa8d1d4b9e7ff0560b5b9a8510b027a39e34cd02_prof);

        
        $__internal_83fd0a94f44ba7d1b28108d494298a1fd4c077477e82707ae28b9bc607802b50->leave($__internal_83fd0a94f44ba7d1b28108d494298a1fd4c077477e82707ae28b9bc607802b50_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/Users/paolocremaschi/html/incipit/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
