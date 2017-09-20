<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_3223e0f9522de4c37d9c7322f662d6ba3b2a2df77596e5c466ef565c34fcf0fc extends Twig_Template
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
        $__internal_04491cd0d4af77e6fd07e9e91e1483a4935d2272f787d54044bef2b97ab0a3d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04491cd0d4af77e6fd07e9e91e1483a4935d2272f787d54044bef2b97ab0a3d7->enter($__internal_04491cd0d4af77e6fd07e9e91e1483a4935d2272f787d54044bef2b97ab0a3d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_1d11f66d5d9fbb52150689c2fdf9685b68ee19a4e3dd2c672e2719efeab7aabf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d11f66d5d9fbb52150689c2fdf9685b68ee19a4e3dd2c672e2719efeab7aabf->enter($__internal_1d11f66d5d9fbb52150689c2fdf9685b68ee19a4e3dd2c672e2719efeab7aabf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_04491cd0d4af77e6fd07e9e91e1483a4935d2272f787d54044bef2b97ab0a3d7->leave($__internal_04491cd0d4af77e6fd07e9e91e1483a4935d2272f787d54044bef2b97ab0a3d7_prof);

        
        $__internal_1d11f66d5d9fbb52150689c2fdf9685b68ee19a4e3dd2c672e2719efeab7aabf->leave($__internal_1d11f66d5d9fbb52150689c2fdf9685b68ee19a4e3dd2c672e2719efeab7aabf_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "/Users/paolocremaschi/html/incipit/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
