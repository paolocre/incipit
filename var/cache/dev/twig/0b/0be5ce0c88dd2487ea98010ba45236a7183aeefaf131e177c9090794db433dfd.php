<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_7871db9a5994c39a5e1f8fdd94727e77c1683ce6ff34cf013ec989ca94670e54 extends Twig_Template
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
        $__internal_ad617fa7409e1cfc5b2195d08b07e9f51bb547ed6d534b4a74e4175dbbc6541e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad617fa7409e1cfc5b2195d08b07e9f51bb547ed6d534b4a74e4175dbbc6541e->enter($__internal_ad617fa7409e1cfc5b2195d08b07e9f51bb547ed6d534b4a74e4175dbbc6541e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_1c8069776e9c5ffaa5245813235b5ecfa1500c0c0f50975c64cb1942b97ab7ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c8069776e9c5ffaa5245813235b5ecfa1500c0c0f50975c64cb1942b97ab7ac->enter($__internal_1c8069776e9c5ffaa5245813235b5ecfa1500c0c0f50975c64cb1942b97ab7ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_ad617fa7409e1cfc5b2195d08b07e9f51bb547ed6d534b4a74e4175dbbc6541e->leave($__internal_ad617fa7409e1cfc5b2195d08b07e9f51bb547ed6d534b4a74e4175dbbc6541e_prof);

        
        $__internal_1c8069776e9c5ffaa5245813235b5ecfa1500c0c0f50975c64cb1942b97ab7ac->leave($__internal_1c8069776e9c5ffaa5245813235b5ecfa1500c0c0f50975c64cb1942b97ab7ac_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
", "TwigBundle:Exception:error.js.twig", "/Users/paolocremaschi/html/incipit/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
