<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_beaa49550627de995102d7b5c0c0a2f2b57966196781d26ee98060e55c58229d extends Twig_Template
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
        $__internal_75f04fa2a7802eb1da008aa25961b3f399b8dd207afe25a2ac7594788cb09807 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75f04fa2a7802eb1da008aa25961b3f399b8dd207afe25a2ac7594788cb09807->enter($__internal_75f04fa2a7802eb1da008aa25961b3f399b8dd207afe25a2ac7594788cb09807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_16386d54865688497d1b0d2c3fe723e829eaaf450d110fad5e288090b2185979 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16386d54865688497d1b0d2c3fe723e829eaaf450d110fad5e288090b2185979->enter($__internal_16386d54865688497d1b0d2c3fe723e829eaaf450d110fad5e288090b2185979_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_75f04fa2a7802eb1da008aa25961b3f399b8dd207afe25a2ac7594788cb09807->leave($__internal_75f04fa2a7802eb1da008aa25961b3f399b8dd207afe25a2ac7594788cb09807_prof);

        
        $__internal_16386d54865688497d1b0d2c3fe723e829eaaf450d110fad5e288090b2185979->leave($__internal_16386d54865688497d1b0d2c3fe723e829eaaf450d110fad5e288090b2185979_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/Users/paolocremaschi/html/incipit/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
