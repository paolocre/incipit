<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_5390b84b48348256ff891d4fbe3d59406dc5309f04a6400df6cb7f05609d507f extends Twig_Template
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
        $__internal_6308048056975f10ff00abc2498905d8b82a6084a00a84f2193725c68acb2960 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6308048056975f10ff00abc2498905d8b82a6084a00a84f2193725c68acb2960->enter($__internal_6308048056975f10ff00abc2498905d8b82a6084a00a84f2193725c68acb2960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_a6467443425c081078632b1e815e68881064e538d2008c5d0a28f21785521354 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6467443425c081078632b1e815e68881064e538d2008c5d0a28f21785521354->enter($__internal_a6467443425c081078632b1e815e68881064e538d2008c5d0a28f21785521354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_6308048056975f10ff00abc2498905d8b82a6084a00a84f2193725c68acb2960->leave($__internal_6308048056975f10ff00abc2498905d8b82a6084a00a84f2193725c68acb2960_prof);

        
        $__internal_a6467443425c081078632b1e815e68881064e538d2008c5d0a28f21785521354->leave($__internal_a6467443425c081078632b1e815e68881064e538d2008c5d0a28f21785521354_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.rdf.twig", "/Users/paolocremaschi/html/incipit/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
