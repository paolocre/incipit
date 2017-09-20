<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_a894e203d64fc4f5781b4c7b71d89f1c4bae555e03d7135df0961babe42e81dd extends Twig_Template
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
        $__internal_f059cae7fb51e8ba75ee2d3ab8fb55c120fd44b44d00e6f9c400afc90f4205ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f059cae7fb51e8ba75ee2d3ab8fb55c120fd44b44d00e6f9c400afc90f4205ea->enter($__internal_f059cae7fb51e8ba75ee2d3ab8fb55c120fd44b44d00e6f9c400afc90f4205ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_c00d1f604810d4dff9ac3678686e5a95d0c8e57e79bfafc8a74717d7a1c87c68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c00d1f604810d4dff9ac3678686e5a95d0c8e57e79bfafc8a74717d7a1c87c68->enter($__internal_c00d1f604810d4dff9ac3678686e5a95d0c8e57e79bfafc8a74717d7a1c87c68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_f059cae7fb51e8ba75ee2d3ab8fb55c120fd44b44d00e6f9c400afc90f4205ea->leave($__internal_f059cae7fb51e8ba75ee2d3ab8fb55c120fd44b44d00e6f9c400afc90f4205ea_prof);

        
        $__internal_c00d1f604810d4dff9ac3678686e5a95d0c8e57e79bfafc8a74717d7a1c87c68->leave($__internal_c00d1f604810d4dff9ac3678686e5a95d0c8e57e79bfafc8a74717d7a1c87c68_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/Users/paolocremaschi/html/incipit/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
