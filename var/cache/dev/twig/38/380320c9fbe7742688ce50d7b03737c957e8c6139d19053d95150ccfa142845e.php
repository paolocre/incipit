<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_a024dafbc5674a8ba25deb5c4217d1e2ec04411af345cbad092b266948505bbd extends Twig_Template
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
        $__internal_cc3cf37fc56af0e0080c3a08eb0aa31ff279e02bc8aefbfc5cc600fce6922e6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc3cf37fc56af0e0080c3a08eb0aa31ff279e02bc8aefbfc5cc600fce6922e6a->enter($__internal_cc3cf37fc56af0e0080c3a08eb0aa31ff279e02bc8aefbfc5cc600fce6922e6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_312ceaebf68415dafaa196e7f99a1116c8b0905771d489d8a576dfeb65ef3582 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_312ceaebf68415dafaa196e7f99a1116c8b0905771d489d8a576dfeb65ef3582->enter($__internal_312ceaebf68415dafaa196e7f99a1116c8b0905771d489d8a576dfeb65ef3582_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_cc3cf37fc56af0e0080c3a08eb0aa31ff279e02bc8aefbfc5cc600fce6922e6a->leave($__internal_cc3cf37fc56af0e0080c3a08eb0aa31ff279e02bc8aefbfc5cc600fce6922e6a_prof);

        
        $__internal_312ceaebf68415dafaa196e7f99a1116c8b0905771d489d8a576dfeb65ef3582->leave($__internal_312ceaebf68415dafaa196e7f99a1116c8b0905771d489d8a576dfeb65ef3582_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.atom.twig", "/Users/paolocremaschi/html/incipit/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
