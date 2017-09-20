<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_37954d791f212663cc8c9eb709d239e704c996105fc02b8db6cc8f4336933274 extends Twig_Template
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
        $__internal_01d052b35d656c2a55c476fde1a1e5b1d681086974fe635e1b5a21d61fbeca1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01d052b35d656c2a55c476fde1a1e5b1d681086974fe635e1b5a21d61fbeca1d->enter($__internal_01d052b35d656c2a55c476fde1a1e5b1d681086974fe635e1b5a21d61fbeca1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_8f53d34ab8251d90672a716e18b7e992576b27e471f1c6bc663eac45fc316ae6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f53d34ab8251d90672a716e18b7e992576b27e471f1c6bc663eac45fc316ae6->enter($__internal_8f53d34ab8251d90672a716e18b7e992576b27e471f1c6bc663eac45fc316ae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_01d052b35d656c2a55c476fde1a1e5b1d681086974fe635e1b5a21d61fbeca1d->leave($__internal_01d052b35d656c2a55c476fde1a1e5b1d681086974fe635e1b5a21d61fbeca1d_prof);

        
        $__internal_8f53d34ab8251d90672a716e18b7e992576b27e471f1c6bc663eac45fc316ae6->leave($__internal_8f53d34ab8251d90672a716e18b7e992576b27e471f1c6bc663eac45fc316ae6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/Users/paolocremaschi/html/incipit/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
