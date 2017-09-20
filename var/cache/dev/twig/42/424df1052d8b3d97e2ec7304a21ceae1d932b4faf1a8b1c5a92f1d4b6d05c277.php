<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_8adbbb672375a5b9b13f4211de61ea5aba7a844d41552c826a190920e0966e56 extends Twig_Template
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
        $__internal_b3ea679298e46b040ef130dd052f780021e8a9004e5f73533ee65eea7b095c15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3ea679298e46b040ef130dd052f780021e8a9004e5f73533ee65eea7b095c15->enter($__internal_b3ea679298e46b040ef130dd052f780021e8a9004e5f73533ee65eea7b095c15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_214d920dfd8eaf02917c7a6c6c5f231131c18fdad30ba02afba5ddf20b2a526b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_214d920dfd8eaf02917c7a6c6c5f231131c18fdad30ba02afba5ddf20b2a526b->enter($__internal_214d920dfd8eaf02917c7a6c6c5f231131c18fdad30ba02afba5ddf20b2a526b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_b3ea679298e46b040ef130dd052f780021e8a9004e5f73533ee65eea7b095c15->leave($__internal_b3ea679298e46b040ef130dd052f780021e8a9004e5f73533ee65eea7b095c15_prof);

        
        $__internal_214d920dfd8eaf02917c7a6c6c5f231131c18fdad30ba02afba5ddf20b2a526b->leave($__internal_214d920dfd8eaf02917c7a6c6c5f231131c18fdad30ba02afba5ddf20b2a526b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.js.twig", "/Users/paolocremaschi/html/incipit/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
