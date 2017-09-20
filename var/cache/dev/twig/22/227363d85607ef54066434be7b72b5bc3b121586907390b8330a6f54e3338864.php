<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_91aed4adf6a951bc483dd424056c191baf3e416cacbba8e82613c7d2704f25ba extends Twig_Template
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
        $__internal_72120c1c33782d0e478f0811c389f1ec696ea9314ffde25757918bdbbd19456d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72120c1c33782d0e478f0811c389f1ec696ea9314ffde25757918bdbbd19456d->enter($__internal_72120c1c33782d0e478f0811c389f1ec696ea9314ffde25757918bdbbd19456d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_ce284a26c989f62a00a4d4e4d4f0983fa8fde8d6ee609d4ce741d82f619926ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce284a26c989f62a00a4d4e4d4f0983fa8fde8d6ee609d4ce741d82f619926ad->enter($__internal_ce284a26c989f62a00a4d4e4d4f0983fa8fde8d6ee609d4ce741d82f619926ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_72120c1c33782d0e478f0811c389f1ec696ea9314ffde25757918bdbbd19456d->leave($__internal_72120c1c33782d0e478f0811c389f1ec696ea9314ffde25757918bdbbd19456d_prof);

        
        $__internal_ce284a26c989f62a00a4d4e4d4f0983fa8fde8d6ee609d4ce741d82f619926ad->leave($__internal_ce284a26c989f62a00a4d4e4d4f0983fa8fde8d6ee609d4ce741d82f619926ad_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "/Users/paolocremaschi/html/incipit/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
