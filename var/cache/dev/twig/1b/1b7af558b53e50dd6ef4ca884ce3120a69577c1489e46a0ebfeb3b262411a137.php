<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_cc1dc1b697ced378c3968c2336c4b3a5548f6c3a7871763acf4ca50bd3618b8a extends Twig_Template
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
        $__internal_d2a195a21adef8b0613c74136d31db56f2b19303f8877822c453aea8c6ec5241 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2a195a21adef8b0613c74136d31db56f2b19303f8877822c453aea8c6ec5241->enter($__internal_d2a195a21adef8b0613c74136d31db56f2b19303f8877822c453aea8c6ec5241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_e3ec653ee91c774e193d1ee191e5a75770f18de71cff1cf94f0e9e7df01c427c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3ec653ee91c774e193d1ee191e5a75770f18de71cff1cf94f0e9e7df01c427c->enter($__internal_e3ec653ee91c774e193d1ee191e5a75770f18de71cff1cf94f0e9e7df01c427c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_d2a195a21adef8b0613c74136d31db56f2b19303f8877822c453aea8c6ec5241->leave($__internal_d2a195a21adef8b0613c74136d31db56f2b19303f8877822c453aea8c6ec5241_prof);

        
        $__internal_e3ec653ee91c774e193d1ee191e5a75770f18de71cff1cf94f0e9e7df01c427c->leave($__internal_e3ec653ee91c774e193d1ee191e5a75770f18de71cff1cf94f0e9e7df01c427c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/Users/paolocremaschi/html/incipit/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
