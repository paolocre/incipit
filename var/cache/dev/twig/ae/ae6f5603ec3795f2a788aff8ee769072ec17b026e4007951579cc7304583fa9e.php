<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_608d077a45db74815e9cfe15a07f61cee5cc96ff34105f8115b0417467fdebad extends Twig_Template
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
        $__internal_f0e0a0012a4a916848dc2dc701aa355a3cf78fdd1affccca092914822137efb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0e0a0012a4a916848dc2dc701aa355a3cf78fdd1affccca092914822137efb9->enter($__internal_f0e0a0012a4a916848dc2dc701aa355a3cf78fdd1affccca092914822137efb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_d1708af714ad2114209264893546ce0b5483afec12978ca9f797b860e6500954 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1708af714ad2114209264893546ce0b5483afec12978ca9f797b860e6500954->enter($__internal_d1708af714ad2114209264893546ce0b5483afec12978ca9f797b860e6500954_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_f0e0a0012a4a916848dc2dc701aa355a3cf78fdd1affccca092914822137efb9->leave($__internal_f0e0a0012a4a916848dc2dc701aa355a3cf78fdd1affccca092914822137efb9_prof);

        
        $__internal_d1708af714ad2114209264893546ce0b5483afec12978ca9f797b860e6500954->leave($__internal_d1708af714ad2114209264893546ce0b5483afec12978ca9f797b860e6500954_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/Users/paolocremaschi/html/incipit/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
