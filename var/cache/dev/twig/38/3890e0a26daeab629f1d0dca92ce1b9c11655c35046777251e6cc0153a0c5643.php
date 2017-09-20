<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_e827bb8971dc3d4b214c13959c84b1fbe4c8f72214a0f4839affa378c6f137bf extends Twig_Template
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
        $__internal_7a998dcb09d38cccc4a14637ede31a608ea9464cec87be666ffd4719b6bc3b4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a998dcb09d38cccc4a14637ede31a608ea9464cec87be666ffd4719b6bc3b4a->enter($__internal_7a998dcb09d38cccc4a14637ede31a608ea9464cec87be666ffd4719b6bc3b4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_cea984703f195cc52a16b5d870fccb0cc72182aa019c9d42952cebe268f8571e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cea984703f195cc52a16b5d870fccb0cc72182aa019c9d42952cebe268f8571e->enter($__internal_cea984703f195cc52a16b5d870fccb0cc72182aa019c9d42952cebe268f8571e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_7a998dcb09d38cccc4a14637ede31a608ea9464cec87be666ffd4719b6bc3b4a->leave($__internal_7a998dcb09d38cccc4a14637ede31a608ea9464cec87be666ffd4719b6bc3b4a_prof);

        
        $__internal_cea984703f195cc52a16b5d870fccb0cc72182aa019c9d42952cebe268f8571e->leave($__internal_cea984703f195cc52a16b5d870fccb0cc72182aa019c9d42952cebe268f8571e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/Users/paolocremaschi/html/incipit/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
