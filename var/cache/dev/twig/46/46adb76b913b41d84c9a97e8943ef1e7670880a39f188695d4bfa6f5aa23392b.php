<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_126f9d29f853e2cae2b1b3eae1a15db7b503b27c39443e9259a0801a9aea4fb6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c0af38c0f4f453a4d161e4d74a79bc15c0cb560187962541630327b70e45cb82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0af38c0f4f453a4d161e4d74a79bc15c0cb560187962541630327b70e45cb82->enter($__internal_c0af38c0f4f453a4d161e4d74a79bc15c0cb560187962541630327b70e45cb82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_f41d908c75f2caf0b76b83cdb1ea2d11be0b617663c6c3059c42a8696cd5b278 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f41d908c75f2caf0b76b83cdb1ea2d11be0b617663c6c3059c42a8696cd5b278->enter($__internal_f41d908c75f2caf0b76b83cdb1ea2d11be0b617663c6c3059c42a8696cd5b278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0af38c0f4f453a4d161e4d74a79bc15c0cb560187962541630327b70e45cb82->leave($__internal_c0af38c0f4f453a4d161e4d74a79bc15c0cb560187962541630327b70e45cb82_prof);

        
        $__internal_f41d908c75f2caf0b76b83cdb1ea2d11be0b617663c6c3059c42a8696cd5b278->leave($__internal_f41d908c75f2caf0b76b83cdb1ea2d11be0b617663c6c3059c42a8696cd5b278_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_511b633407a813c4a58076d3f45dc6f11bd59551cd351409f16987e9d1246754 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_511b633407a813c4a58076d3f45dc6f11bd59551cd351409f16987e9d1246754->enter($__internal_511b633407a813c4a58076d3f45dc6f11bd59551cd351409f16987e9d1246754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c52f5aef8c1bf9f0947dc124b010ffea36ec157ec1d1341e5b1aa43eba652612 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c52f5aef8c1bf9f0947dc124b010ffea36ec157ec1d1341e5b1aa43eba652612->enter($__internal_c52f5aef8c1bf9f0947dc124b010ffea36ec157ec1d1341e5b1aa43eba652612_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_c52f5aef8c1bf9f0947dc124b010ffea36ec157ec1d1341e5b1aa43eba652612->leave($__internal_c52f5aef8c1bf9f0947dc124b010ffea36ec157ec1d1341e5b1aa43eba652612_prof);

        
        $__internal_511b633407a813c4a58076d3f45dc6f11bd59551cd351409f16987e9d1246754->leave($__internal_511b633407a813c4a58076d3f45dc6f11bd59551cd351409f16987e9d1246754_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_34d892e29aa37cf767c5429b22e11ed7f05903eac61fdc7a18b4f1b654b62854 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34d892e29aa37cf767c5429b22e11ed7f05903eac61fdc7a18b4f1b654b62854->enter($__internal_34d892e29aa37cf767c5429b22e11ed7f05903eac61fdc7a18b4f1b654b62854_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3487293266f526840fe9a42eaa69e75424c0cb508a813b52c1b85ff3f53e20d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3487293266f526840fe9a42eaa69e75424c0cb508a813b52c1b85ff3f53e20d5->enter($__internal_3487293266f526840fe9a42eaa69e75424c0cb508a813b52c1b85ff3f53e20d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3487293266f526840fe9a42eaa69e75424c0cb508a813b52c1b85ff3f53e20d5->leave($__internal_3487293266f526840fe9a42eaa69e75424c0cb508a813b52c1b85ff3f53e20d5_prof);

        
        $__internal_34d892e29aa37cf767c5429b22e11ed7f05903eac61fdc7a18b4f1b654b62854->leave($__internal_34d892e29aa37cf767c5429b22e11ed7f05903eac61fdc7a18b4f1b654b62854_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_520cd75fa4f016160d6e9a8b0712721d26fe43a59148d7f287e85627e8779c75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_520cd75fa4f016160d6e9a8b0712721d26fe43a59148d7f287e85627e8779c75->enter($__internal_520cd75fa4f016160d6e9a8b0712721d26fe43a59148d7f287e85627e8779c75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e8e2a70b821d4bd1622a4c2bdaf402ded59af6f0b6cdb2c7ac96d5adb92c68f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8e2a70b821d4bd1622a4c2bdaf402ded59af6f0b6cdb2c7ac96d5adb92c68f1->enter($__internal_e8e2a70b821d4bd1622a4c2bdaf402ded59af6f0b6cdb2c7ac96d5adb92c68f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_e8e2a70b821d4bd1622a4c2bdaf402ded59af6f0b6cdb2c7ac96d5adb92c68f1->leave($__internal_e8e2a70b821d4bd1622a4c2bdaf402ded59af6f0b6cdb2c7ac96d5adb92c68f1_prof);

        
        $__internal_520cd75fa4f016160d6e9a8b0712721d26fe43a59148d7f287e85627e8779c75->leave($__internal_520cd75fa4f016160d6e9a8b0712721d26fe43a59148d7f287e85627e8779c75_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Users/paolocremaschi/html/incipit/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
