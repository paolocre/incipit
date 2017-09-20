<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_5822d96dc649f46e30dff249a3a71de6a19ae062cb782a290b55e829dac1467e extends Twig_Template
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
        $__internal_e3af34e1f43c3f6994ea42eb5c4c08e3060f1c04b38ba729ed9bffedca578f5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3af34e1f43c3f6994ea42eb5c4c08e3060f1c04b38ba729ed9bffedca578f5b->enter($__internal_e3af34e1f43c3f6994ea42eb5c4c08e3060f1c04b38ba729ed9bffedca578f5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_bb47953f2e9576a94f3ee5a1f7ca10f52a724a8f700bf039ad395477640a19f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb47953f2e9576a94f3ee5a1f7ca10f52a724a8f700bf039ad395477640a19f7->enter($__internal_bb47953f2e9576a94f3ee5a1f7ca10f52a724a8f700bf039ad395477640a19f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_e3af34e1f43c3f6994ea42eb5c4c08e3060f1c04b38ba729ed9bffedca578f5b->leave($__internal_e3af34e1f43c3f6994ea42eb5c4c08e3060f1c04b38ba729ed9bffedca578f5b_prof);

        
        $__internal_bb47953f2e9576a94f3ee5a1f7ca10f52a724a8f700bf039ad395477640a19f7->leave($__internal_bb47953f2e9576a94f3ee5a1f7ca10f52a724a8f700bf039ad395477640a19f7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3814bd292b3420269e0a790aba33c09dfbd7a935c4b9be610618775c695ad8f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3814bd292b3420269e0a790aba33c09dfbd7a935c4b9be610618775c695ad8f3->enter($__internal_3814bd292b3420269e0a790aba33c09dfbd7a935c4b9be610618775c695ad8f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_097db867e272e26abfab988070e56ebff0e80ea56975d4e4467f14cdcfcb9c0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_097db867e272e26abfab988070e56ebff0e80ea56975d4e4467f14cdcfcb9c0d->enter($__internal_097db867e272e26abfab988070e56ebff0e80ea56975d4e4467f14cdcfcb9c0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_097db867e272e26abfab988070e56ebff0e80ea56975d4e4467f14cdcfcb9c0d->leave($__internal_097db867e272e26abfab988070e56ebff0e80ea56975d4e4467f14cdcfcb9c0d_prof);

        
        $__internal_3814bd292b3420269e0a790aba33c09dfbd7a935c4b9be610618775c695ad8f3->leave($__internal_3814bd292b3420269e0a790aba33c09dfbd7a935c4b9be610618775c695ad8f3_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_21412a1996e5a18af7ffe286995f4213624522b1a98189cbea39c801cc36fcf0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21412a1996e5a18af7ffe286995f4213624522b1a98189cbea39c801cc36fcf0->enter($__internal_21412a1996e5a18af7ffe286995f4213624522b1a98189cbea39c801cc36fcf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_cdcbba6df2a546caa642b4f797883df4035f024217fbbb551ffd63eb22472149 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdcbba6df2a546caa642b4f797883df4035f024217fbbb551ffd63eb22472149->enter($__internal_cdcbba6df2a546caa642b4f797883df4035f024217fbbb551ffd63eb22472149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_cdcbba6df2a546caa642b4f797883df4035f024217fbbb551ffd63eb22472149->leave($__internal_cdcbba6df2a546caa642b4f797883df4035f024217fbbb551ffd63eb22472149_prof);

        
        $__internal_21412a1996e5a18af7ffe286995f4213624522b1a98189cbea39c801cc36fcf0->leave($__internal_21412a1996e5a18af7ffe286995f4213624522b1a98189cbea39c801cc36fcf0_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_6a35d950eb9cd83149a332b6294c0348289afdd6948d2b3fcab582391f317702 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a35d950eb9cd83149a332b6294c0348289afdd6948d2b3fcab582391f317702->enter($__internal_6a35d950eb9cd83149a332b6294c0348289afdd6948d2b3fcab582391f317702_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_91e986fa0080f22d49245a6efe06e4afbdd407727fa57582441c88fa40e4515d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91e986fa0080f22d49245a6efe06e4afbdd407727fa57582441c88fa40e4515d->enter($__internal_91e986fa0080f22d49245a6efe06e4afbdd407727fa57582441c88fa40e4515d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_91e986fa0080f22d49245a6efe06e4afbdd407727fa57582441c88fa40e4515d->leave($__internal_91e986fa0080f22d49245a6efe06e4afbdd407727fa57582441c88fa40e4515d_prof);

        
        $__internal_6a35d950eb9cd83149a332b6294c0348289afdd6948d2b3fcab582391f317702->leave($__internal_6a35d950eb9cd83149a332b6294c0348289afdd6948d2b3fcab582391f317702_prof);

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
