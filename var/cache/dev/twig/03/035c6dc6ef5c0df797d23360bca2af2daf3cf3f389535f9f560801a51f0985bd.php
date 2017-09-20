<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_8696d5ff766125ecb6b04905857e879bd5fb61eb5a5b7eb95f4a39b457a6ffd3 extends Twig_Template
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
        $__internal_b2ae6e73e04b7cf0339b024b4a0842a4e028b8745488c0d9d6ef70263067480d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2ae6e73e04b7cf0339b024b4a0842a4e028b8745488c0d9d6ef70263067480d->enter($__internal_b2ae6e73e04b7cf0339b024b4a0842a4e028b8745488c0d9d6ef70263067480d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_e55ea4f7bc6fb93a1a97044ce2ac73953eee55aecd93ef04b77078e79bf34f69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e55ea4f7bc6fb93a1a97044ce2ac73953eee55aecd93ef04b77078e79bf34f69->enter($__internal_e55ea4f7bc6fb93a1a97044ce2ac73953eee55aecd93ef04b77078e79bf34f69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_b2ae6e73e04b7cf0339b024b4a0842a4e028b8745488c0d9d6ef70263067480d->leave($__internal_b2ae6e73e04b7cf0339b024b4a0842a4e028b8745488c0d9d6ef70263067480d_prof);

        
        $__internal_e55ea4f7bc6fb93a1a97044ce2ac73953eee55aecd93ef04b77078e79bf34f69->leave($__internal_e55ea4f7bc6fb93a1a97044ce2ac73953eee55aecd93ef04b77078e79bf34f69_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/Users/paolocremaschi/html/incipit/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
