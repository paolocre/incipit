<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_3d3c47cb40a2c4ccefe78d8fdeaa398b8e75971be1b59064e9d8e7b9cee61a13 extends Twig_Template
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
        $__internal_885e68a3c8e35ee6415b00c9a43df8caca77847c3be0562341e5017761ee1d12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_885e68a3c8e35ee6415b00c9a43df8caca77847c3be0562341e5017761ee1d12->enter($__internal_885e68a3c8e35ee6415b00c9a43df8caca77847c3be0562341e5017761ee1d12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_67c34f54e1342d163f4640a465d750e623fba45073382eed67ec1ff58e4eb805 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67c34f54e1342d163f4640a465d750e623fba45073382eed67ec1ff58e4eb805->enter($__internal_67c34f54e1342d163f4640a465d750e623fba45073382eed67ec1ff58e4eb805_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_885e68a3c8e35ee6415b00c9a43df8caca77847c3be0562341e5017761ee1d12->leave($__internal_885e68a3c8e35ee6415b00c9a43df8caca77847c3be0562341e5017761ee1d12_prof);

        
        $__internal_67c34f54e1342d163f4640a465d750e623fba45073382eed67ec1ff58e4eb805->leave($__internal_67c34f54e1342d163f4640a465d750e623fba45073382eed67ec1ff58e4eb805_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/Users/paolocremaschi/html/incipit/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
