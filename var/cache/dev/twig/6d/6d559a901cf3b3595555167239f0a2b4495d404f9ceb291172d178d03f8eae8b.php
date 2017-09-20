<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_2b078ac8f66d1fd1caee51c16b76923fa7f2642c95db443468bafa87bd913e73 extends Twig_Template
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
        $__internal_8f08d97e269701a9ab83b04416ec591c8dc6a5252420661156103662c5c87ab9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f08d97e269701a9ab83b04416ec591c8dc6a5252420661156103662c5c87ab9->enter($__internal_8f08d97e269701a9ab83b04416ec591c8dc6a5252420661156103662c5c87ab9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_fb953b00db48adcbb21f601b5a710c43cb9348e9a4d67ee4f8c5c2245e475abe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb953b00db48adcbb21f601b5a710c43cb9348e9a4d67ee4f8c5c2245e475abe->enter($__internal_fb953b00db48adcbb21f601b5a710c43cb9348e9a4d67ee4f8c5c2245e475abe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_8f08d97e269701a9ab83b04416ec591c8dc6a5252420661156103662c5c87ab9->leave($__internal_8f08d97e269701a9ab83b04416ec591c8dc6a5252420661156103662c5c87ab9_prof);

        
        $__internal_fb953b00db48adcbb21f601b5a710c43cb9348e9a4d67ee4f8c5c2245e475abe->leave($__internal_fb953b00db48adcbb21f601b5a710c43cb9348e9a4d67ee4f8c5c2245e475abe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/Users/paolocremaschi/html/incipit/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
