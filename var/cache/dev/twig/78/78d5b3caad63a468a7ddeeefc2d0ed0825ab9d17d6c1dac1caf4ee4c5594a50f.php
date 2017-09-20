<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_e4ea56bab3502f3da936ffd9a103a86239b82b19856d93c74d0c3c27071128c6 extends Twig_Template
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
        $__internal_c14b7e299014709b9769fe61ed97fd28662cc8399225a3e5def87c2bddc45550 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c14b7e299014709b9769fe61ed97fd28662cc8399225a3e5def87c2bddc45550->enter($__internal_c14b7e299014709b9769fe61ed97fd28662cc8399225a3e5def87c2bddc45550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_f1302b1a1e7789a86f7fa0dd141d420133fa4ffc223f3e01f72f2a1497f92c57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1302b1a1e7789a86f7fa0dd141d420133fa4ffc223f3e01f72f2a1497f92c57->enter($__internal_f1302b1a1e7789a86f7fa0dd141d420133fa4ffc223f3e01f72f2a1497f92c57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_c14b7e299014709b9769fe61ed97fd28662cc8399225a3e5def87c2bddc45550->leave($__internal_c14b7e299014709b9769fe61ed97fd28662cc8399225a3e5def87c2bddc45550_prof);

        
        $__internal_f1302b1a1e7789a86f7fa0dd141d420133fa4ffc223f3e01f72f2a1497f92c57->leave($__internal_f1302b1a1e7789a86f7fa0dd141d420133fa4ffc223f3e01f72f2a1497f92c57_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "/Users/paolocremaschi/html/incipit/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
