<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_a1d264c351596849d6761ebfa1b0363bd8a548da0f70fd593f321874c5770a81 extends Twig_Template
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
        $__internal_09affa05adc3b275f9325d4f5f43d774cec88e327399c9f5543a4b40624c6fa3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09affa05adc3b275f9325d4f5f43d774cec88e327399c9f5543a4b40624c6fa3->enter($__internal_09affa05adc3b275f9325d4f5f43d774cec88e327399c9f5543a4b40624c6fa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_d77d417307778ef1d0cb44edac40942fbe8c49d6388db78e98c387a638ec8999 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d77d417307778ef1d0cb44edac40942fbe8c49d6388db78e98c387a638ec8999->enter($__internal_d77d417307778ef1d0cb44edac40942fbe8c49d6388db78e98c387a638ec8999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_09affa05adc3b275f9325d4f5f43d774cec88e327399c9f5543a4b40624c6fa3->leave($__internal_09affa05adc3b275f9325d4f5f43d774cec88e327399c9f5543a4b40624c6fa3_prof);

        
        $__internal_d77d417307778ef1d0cb44edac40942fbe8c49d6388db78e98c387a638ec8999->leave($__internal_d77d417307778ef1d0cb44edac40942fbe8c49d6388db78e98c387a638ec8999_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/Users/paolocremaschi/html/incipit/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
