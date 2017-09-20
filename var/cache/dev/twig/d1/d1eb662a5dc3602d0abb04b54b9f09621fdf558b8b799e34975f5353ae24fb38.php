<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_40bc516a5fa62333c44f5a9b218b6061a194371a9380388db3d5503a836cd349 extends Twig_Template
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
        $__internal_cd600b2654ab68c136b5afb03e409a2e07cd846844cc9de972d8e93b1e567877 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd600b2654ab68c136b5afb03e409a2e07cd846844cc9de972d8e93b1e567877->enter($__internal_cd600b2654ab68c136b5afb03e409a2e07cd846844cc9de972d8e93b1e567877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_565d844596c305f7bc8197bf90f4192cff4d5cc6ab98f3914a5a200b5cff5b0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_565d844596c305f7bc8197bf90f4192cff4d5cc6ab98f3914a5a200b5cff5b0f->enter($__internal_565d844596c305f7bc8197bf90f4192cff4d5cc6ab98f3914a5a200b5cff5b0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_cd600b2654ab68c136b5afb03e409a2e07cd846844cc9de972d8e93b1e567877->leave($__internal_cd600b2654ab68c136b5afb03e409a2e07cd846844cc9de972d8e93b1e567877_prof);

        
        $__internal_565d844596c305f7bc8197bf90f4192cff4d5cc6ab98f3914a5a200b5cff5b0f->leave($__internal_565d844596c305f7bc8197bf90f4192cff4d5cc6ab98f3914a5a200b5cff5b0f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/Users/paolocremaschi/html/incipit/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
