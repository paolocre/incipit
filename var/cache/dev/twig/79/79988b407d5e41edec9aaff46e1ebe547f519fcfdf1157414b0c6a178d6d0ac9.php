<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_ae57863d1fe511f26bb53a7c057dc21cc9570263c7097c474aaa6b85973b3dc7 extends Twig_Template
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
        $__internal_89a0fb4adf1c9ff9b8c07e9112882f1ae01995bea2366420fcfea88081354052 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89a0fb4adf1c9ff9b8c07e9112882f1ae01995bea2366420fcfea88081354052->enter($__internal_89a0fb4adf1c9ff9b8c07e9112882f1ae01995bea2366420fcfea88081354052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_023bf7364fb70f2050be554c482024c82cd3ab262825368231b83f7b831c015d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_023bf7364fb70f2050be554c482024c82cd3ab262825368231b83f7b831c015d->enter($__internal_023bf7364fb70f2050be554c482024c82cd3ab262825368231b83f7b831c015d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_89a0fb4adf1c9ff9b8c07e9112882f1ae01995bea2366420fcfea88081354052->leave($__internal_89a0fb4adf1c9ff9b8c07e9112882f1ae01995bea2366420fcfea88081354052_prof);

        
        $__internal_023bf7364fb70f2050be554c482024c82cd3ab262825368231b83f7b831c015d->leave($__internal_023bf7364fb70f2050be554c482024c82cd3ab262825368231b83f7b831c015d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/Users/paolocremaschi/html/incipit/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
