<?php

/* ::base.html.twig */
class __TwigTemplate_42a4a1dc6b6ff71d8d79cf6382ba36fc18b265bfb50fe94e70c9087c6dab2dc6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6c715b541535112316163f40acaa6ef1dd380b8244b8bf7d8cefc063f6c517c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c715b541535112316163f40acaa6ef1dd380b8244b8bf7d8cefc063f6c517c1->enter($__internal_6c715b541535112316163f40acaa6ef1dd380b8244b8bf7d8cefc063f6c517c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_3a604ecefdd2788a2e8db43c7ccb494951a41d3a9471773c3f02eec6f2c0141c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a604ecefdd2788a2e8db43c7ccb494951a41d3a9471773c3f02eec6f2c0141c->enter($__internal_3a604ecefdd2788a2e8db43c7ccb494951a41d3a9471773c3f02eec6f2c0141c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <!-- Bootstrap core CSS -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css\" integrity=\"sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M\" crossorigin=\"anonymous\">
    </head>

    <body>
        <nav class=\"navbar navbar-expand-md navbar-dark bg-dark\">
            <a class=\"navbar-brand\" href=\"/todos\">TODOS</a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarsExampleDefault\" aria-controls=\"navbarsExampleDefault\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>

            <div class=\"collapse navbar-collapse\" id=\"navbarsExampleDefault\">
                <ul class=\"navbar-nav mr-auto\">
                    <li class=\"nav-item active\">
                        <a class=\"nav-link\" href=\"/\">Home <span class=\"sr-only\">(current)</span></a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/todos/create\">Add</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link disabled\" href=\"#\">Disabled</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class=\"container\">

            <div class=\"starter-template\">
                ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 42
            echo "                    <hr>
                    <p class=\"alert alert-success\">";
            // line 43
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</p>
                    <hr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "                ";
        $this->displayBlock('body', $context, $blocks);
        // line 47
        echo "                
            </div>

        </div><!-- /.container -->

        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js\" integrity=\"sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4\" crossorigin=\"anonymous\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js\" integrity=\"sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1\" crossorigin=\"anonymous\"></script>
        ";
        // line 58
        $this->displayBlock('javascripts', $context, $blocks);
        // line 59
        echo "    </body>
</html>

";
        
        $__internal_6c715b541535112316163f40acaa6ef1dd380b8244b8bf7d8cefc063f6c517c1->leave($__internal_6c715b541535112316163f40acaa6ef1dd380b8244b8bf7d8cefc063f6c517c1_prof);

        
        $__internal_3a604ecefdd2788a2e8db43c7ccb494951a41d3a9471773c3f02eec6f2c0141c->leave($__internal_3a604ecefdd2788a2e8db43c7ccb494951a41d3a9471773c3f02eec6f2c0141c_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_8f03e7b4d35ad73c3d2828d622b49160fccc659273d2f481f7f4ca9f4f2014b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f03e7b4d35ad73c3d2828d622b49160fccc659273d2f481f7f4ca9f4f2014b8->enter($__internal_8f03e7b4d35ad73c3d2828d622b49160fccc659273d2f481f7f4ca9f4f2014b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_54321d74749e0b4ad6c13bb5103345a6e2b19a63a5394d5199cef8d14a9162f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54321d74749e0b4ad6c13bb5103345a6e2b19a63a5394d5199cef8d14a9162f2->enter($__internal_54321d74749e0b4ad6c13bb5103345a6e2b19a63a5394d5199cef8d14a9162f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_54321d74749e0b4ad6c13bb5103345a6e2b19a63a5394d5199cef8d14a9162f2->leave($__internal_54321d74749e0b4ad6c13bb5103345a6e2b19a63a5394d5199cef8d14a9162f2_prof);

        
        $__internal_8f03e7b4d35ad73c3d2828d622b49160fccc659273d2f481f7f4ca9f4f2014b8->leave($__internal_8f03e7b4d35ad73c3d2828d622b49160fccc659273d2f481f7f4ca9f4f2014b8_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3bc301b67405646feac5416f02886b151ace7f12e473b33c47714320296b6fda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bc301b67405646feac5416f02886b151ace7f12e473b33c47714320296b6fda->enter($__internal_3bc301b67405646feac5416f02886b151ace7f12e473b33c47714320296b6fda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f510d2c32f4b1ecefbb769351a39b5834a58aeab62a310f1ee86cbcf6d545a27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f510d2c32f4b1ecefbb769351a39b5834a58aeab62a310f1ee86cbcf6d545a27->enter($__internal_f510d2c32f4b1ecefbb769351a39b5834a58aeab62a310f1ee86cbcf6d545a27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f510d2c32f4b1ecefbb769351a39b5834a58aeab62a310f1ee86cbcf6d545a27->leave($__internal_f510d2c32f4b1ecefbb769351a39b5834a58aeab62a310f1ee86cbcf6d545a27_prof);

        
        $__internal_3bc301b67405646feac5416f02886b151ace7f12e473b33c47714320296b6fda->leave($__internal_3bc301b67405646feac5416f02886b151ace7f12e473b33c47714320296b6fda_prof);

    }

    // line 46
    public function block_body($context, array $blocks = array())
    {
        $__internal_f3e278b5a666e26f761771e512460219efb83d0c93b82b64b07e123092b3ea2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3e278b5a666e26f761771e512460219efb83d0c93b82b64b07e123092b3ea2e->enter($__internal_f3e278b5a666e26f761771e512460219efb83d0c93b82b64b07e123092b3ea2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_85fddf2360d2b6ab4b11f2a25af220a4fcf0b7cc51fecb071b5ba82cdb85f753 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85fddf2360d2b6ab4b11f2a25af220a4fcf0b7cc51fecb071b5ba82cdb85f753->enter($__internal_85fddf2360d2b6ab4b11f2a25af220a4fcf0b7cc51fecb071b5ba82cdb85f753_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_85fddf2360d2b6ab4b11f2a25af220a4fcf0b7cc51fecb071b5ba82cdb85f753->leave($__internal_85fddf2360d2b6ab4b11f2a25af220a4fcf0b7cc51fecb071b5ba82cdb85f753_prof);

        
        $__internal_f3e278b5a666e26f761771e512460219efb83d0c93b82b64b07e123092b3ea2e->leave($__internal_f3e278b5a666e26f761771e512460219efb83d0c93b82b64b07e123092b3ea2e_prof);

    }

    // line 58
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_337a06146408696c7720e8e98c799545cc4145d43524ed5bc9aeb8d2fbc5e47a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_337a06146408696c7720e8e98c799545cc4145d43524ed5bc9aeb8d2fbc5e47a->enter($__internal_337a06146408696c7720e8e98c799545cc4145d43524ed5bc9aeb8d2fbc5e47a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c13ad0cd0b4ec7f8882775dbfd183f2a569d0d2c70b7929dc00ea17a4085ec44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c13ad0cd0b4ec7f8882775dbfd183f2a569d0d2c70b7929dc00ea17a4085ec44->enter($__internal_c13ad0cd0b4ec7f8882775dbfd183f2a569d0d2c70b7929dc00ea17a4085ec44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c13ad0cd0b4ec7f8882775dbfd183f2a569d0d2c70b7929dc00ea17a4085ec44->leave($__internal_c13ad0cd0b4ec7f8882775dbfd183f2a569d0d2c70b7929dc00ea17a4085ec44_prof);

        
        $__internal_337a06146408696c7720e8e98c799545cc4145d43524ed5bc9aeb8d2fbc5e47a->leave($__internal_337a06146408696c7720e8e98c799545cc4145d43524ed5bc9aeb8d2fbc5e47a_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 58,  161 => 46,  144 => 10,  126 => 9,  113 => 59,  111 => 58,  98 => 47,  95 => 46,  86 => 43,  83 => 42,  79 => 41,  45 => 11,  43 => 10,  39 => 9,  29 => 1,);
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
<html lang=\"en\">
    <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>{% block title %}Welcome!{% endblock %}</title>
    {% block stylesheets %}{% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    <!-- Bootstrap core CSS -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css\" integrity=\"sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M\" crossorigin=\"anonymous\">
    </head>

    <body>
        <nav class=\"navbar navbar-expand-md navbar-dark bg-dark\">
            <a class=\"navbar-brand\" href=\"/todos\">TODOS</a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarsExampleDefault\" aria-controls=\"navbarsExampleDefault\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>

            <div class=\"collapse navbar-collapse\" id=\"navbarsExampleDefault\">
                <ul class=\"navbar-nav mr-auto\">
                    <li class=\"nav-item active\">
                        <a class=\"nav-link\" href=\"/\">Home <span class=\"sr-only\">(current)</span></a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/todos/create\">Add</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link disabled\" href=\"#\">Disabled</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class=\"container\">

            <div class=\"starter-template\">
                {% for flash_message in app.session.flashBag.get('notice') %}
                    <hr>
                    <p class=\"alert alert-success\">{{ flash_message }}</p>
                    <hr>
                {% endfor %}
                {% block body %}{% endblock %}
                
            </div>

        </div><!-- /.container -->

        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js\" integrity=\"sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4\" crossorigin=\"anonymous\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js\" integrity=\"sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1\" crossorigin=\"anonymous\"></script>
        {% block javascripts %}{% endblock %}
    </body>
</html>

", "::base.html.twig", "/Users/paolocremaschi/html/incipit/app/Resources/views/base.html.twig");
    }
}
