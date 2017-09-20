<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_beb21384708b7fce70142673076643bf4701a2536699ef3f1150a9b33abd0d29 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cfd2273382c2eb02df89c11efe39a653e67040164d5fe6b207a5a11f9656b726 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfd2273382c2eb02df89c11efe39a653e67040164d5fe6b207a5a11f9656b726->enter($__internal_cfd2273382c2eb02df89c11efe39a653e67040164d5fe6b207a5a11f9656b726_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_efce4e0d08c7019303efcbe54687f07c40b45ff374d0b2208b87fd4177524887 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efce4e0d08c7019303efcbe54687f07c40b45ff374d0b2208b87fd4177524887->enter($__internal_efce4e0d08c7019303efcbe54687f07c40b45ff374d0b2208b87fd4177524887_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_cfd2273382c2eb02df89c11efe39a653e67040164d5fe6b207a5a11f9656b726->leave($__internal_cfd2273382c2eb02df89c11efe39a653e67040164d5fe6b207a5a11f9656b726_prof);

        
        $__internal_efce4e0d08c7019303efcbe54687f07c40b45ff374d0b2208b87fd4177524887->leave($__internal_efce4e0d08c7019303efcbe54687f07c40b45ff374d0b2208b87fd4177524887_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c3d923c4644d8c4c4308d54aafa222d3cfa7ea735329504d726c1eefc4cfc9c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3d923c4644d8c4c4308d54aafa222d3cfa7ea735329504d726c1eefc4cfc9c4->enter($__internal_c3d923c4644d8c4c4308d54aafa222d3cfa7ea735329504d726c1eefc4cfc9c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_90c99b334a86fbc7f5e4b467a6979906ec002608ddafafd4124580b684ce4092 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90c99b334a86fbc7f5e4b467a6979906ec002608ddafafd4124580b684ce4092->enter($__internal_90c99b334a86fbc7f5e4b467a6979906ec002608ddafafd4124580b684ce4092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_90c99b334a86fbc7f5e4b467a6979906ec002608ddafafd4124580b684ce4092->leave($__internal_90c99b334a86fbc7f5e4b467a6979906ec002608ddafafd4124580b684ce4092_prof);

        
        $__internal_c3d923c4644d8c4c4308d54aafa222d3cfa7ea735329504d726c1eefc4cfc9c4->leave($__internal_c3d923c4644d8c4c4308d54aafa222d3cfa7ea735329504d726c1eefc4cfc9c4_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_1798bfd2487cdfe8cfff505a28a360e435c1b46e87b59cc45926c062ff8bfde0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1798bfd2487cdfe8cfff505a28a360e435c1b46e87b59cc45926c062ff8bfde0->enter($__internal_1798bfd2487cdfe8cfff505a28a360e435c1b46e87b59cc45926c062ff8bfde0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9afa1e39844c8cb08a45bec514314499c97bf2ad16b068b237ad7d4ec43c92b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9afa1e39844c8cb08a45bec514314499c97bf2ad16b068b237ad7d4ec43c92b7->enter($__internal_9afa1e39844c8cb08a45bec514314499c97bf2ad16b068b237ad7d4ec43c92b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_9afa1e39844c8cb08a45bec514314499c97bf2ad16b068b237ad7d4ec43c92b7->leave($__internal_9afa1e39844c8cb08a45bec514314499c97bf2ad16b068b237ad7d4ec43c92b7_prof);

        
        $__internal_1798bfd2487cdfe8cfff505a28a360e435c1b46e87b59cc45926c062ff8bfde0->leave($__internal_1798bfd2487cdfe8cfff505a28a360e435c1b46e87b59cc45926c062ff8bfde0_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_e6d7f8f5dc78328221ac5d8fbb2819a47f5e4e3426528a0c4577de429590c3e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6d7f8f5dc78328221ac5d8fbb2819a47f5e4e3426528a0c4577de429590c3e8->enter($__internal_e6d7f8f5dc78328221ac5d8fbb2819a47f5e4e3426528a0c4577de429590c3e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_27266624e699dab9ae29b84626691262f608da590957f0f6f11e4e8fed8372fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27266624e699dab9ae29b84626691262f608da590957f0f6f11e4e8fed8372fa->enter($__internal_27266624e699dab9ae29b84626691262f608da590957f0f6f11e4e8fed8372fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_27266624e699dab9ae29b84626691262f608da590957f0f6f11e4e8fed8372fa->leave($__internal_27266624e699dab9ae29b84626691262f608da590957f0f6f11e4e8fed8372fa_prof);

        
        $__internal_e6d7f8f5dc78328221ac5d8fbb2819a47f5e4e3426528a0c4577de429590c3e8->leave($__internal_e6d7f8f5dc78328221ac5d8fbb2819a47f5e4e3426528a0c4577de429590c3e8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/Users/paolocremaschi/html/incipit/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
