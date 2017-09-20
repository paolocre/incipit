<?php

/* base.html.twig */
class __TwigTemplate_47fd51b039e5f4fb7e336b9f260737cefed48cbce97d781ee1d74e5c39c4c062 extends Twig_Template
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
        $__internal_2bcab5b45f5d56e7bc476522b198c66bf6d52a9855f2ef6801dc1c7c276c0da2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bcab5b45f5d56e7bc476522b198c66bf6d52a9855f2ef6801dc1c7c276c0da2->enter($__internal_2bcab5b45f5d56e7bc476522b198c66bf6d52a9855f2ef6801dc1c7c276c0da2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_95b9266326a1f06bbeb97a56b69d1ce8980edec947475da44b64a00dfddf30be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95b9266326a1f06bbeb97a56b69d1ce8980edec947475da44b64a00dfddf30be->enter($__internal_95b9266326a1f06bbeb97a56b69d1ce8980edec947475da44b64a00dfddf30be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
                <div>
                    ";
        // line 42
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 43
            echo "                        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                        <a class=\"btn btn-danger\" href=\"";
            // line 44
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                            ";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                        </a>
                    ";
        } else {
            // line 48
            echo "                        <a class=\"btn btn-success\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                    ";
        }
        // line 50
        echo "                </div>
                ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 52
            echo "                    <hr>
                    <p class=\"alert alert-success\">";
            // line 53
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</p>
                    <hr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "                ";
        $this->displayBlock('body', $context, $blocks);
        // line 57
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
        // line 68
        $this->displayBlock('javascripts', $context, $blocks);
        // line 69
        echo "    </body>
</html>

";
        
        $__internal_2bcab5b45f5d56e7bc476522b198c66bf6d52a9855f2ef6801dc1c7c276c0da2->leave($__internal_2bcab5b45f5d56e7bc476522b198c66bf6d52a9855f2ef6801dc1c7c276c0da2_prof);

        
        $__internal_95b9266326a1f06bbeb97a56b69d1ce8980edec947475da44b64a00dfddf30be->leave($__internal_95b9266326a1f06bbeb97a56b69d1ce8980edec947475da44b64a00dfddf30be_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_4fe236283d9fd6ef9924ceb93eac6c3b3f44c87f21cd38da9a01a4cfeaf4ec40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fe236283d9fd6ef9924ceb93eac6c3b3f44c87f21cd38da9a01a4cfeaf4ec40->enter($__internal_4fe236283d9fd6ef9924ceb93eac6c3b3f44c87f21cd38da9a01a4cfeaf4ec40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_82f703d4d78a2c8c9df909f467df035b38aa1b58e65c057ff86b8497df4af452 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82f703d4d78a2c8c9df909f467df035b38aa1b58e65c057ff86b8497df4af452->enter($__internal_82f703d4d78a2c8c9df909f467df035b38aa1b58e65c057ff86b8497df4af452_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_82f703d4d78a2c8c9df909f467df035b38aa1b58e65c057ff86b8497df4af452->leave($__internal_82f703d4d78a2c8c9df909f467df035b38aa1b58e65c057ff86b8497df4af452_prof);

        
        $__internal_4fe236283d9fd6ef9924ceb93eac6c3b3f44c87f21cd38da9a01a4cfeaf4ec40->leave($__internal_4fe236283d9fd6ef9924ceb93eac6c3b3f44c87f21cd38da9a01a4cfeaf4ec40_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4e4403c9848966b853c2084b4a46a0ae220bed7f7ee1a8c10d1022100781e9a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e4403c9848966b853c2084b4a46a0ae220bed7f7ee1a8c10d1022100781e9a7->enter($__internal_4e4403c9848966b853c2084b4a46a0ae220bed7f7ee1a8c10d1022100781e9a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_26b900bb0f78186f3b915873c5bd2eaeb975960232acb5024e8407a683e66022 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26b900bb0f78186f3b915873c5bd2eaeb975960232acb5024e8407a683e66022->enter($__internal_26b900bb0f78186f3b915873c5bd2eaeb975960232acb5024e8407a683e66022_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_26b900bb0f78186f3b915873c5bd2eaeb975960232acb5024e8407a683e66022->leave($__internal_26b900bb0f78186f3b915873c5bd2eaeb975960232acb5024e8407a683e66022_prof);

        
        $__internal_4e4403c9848966b853c2084b4a46a0ae220bed7f7ee1a8c10d1022100781e9a7->leave($__internal_4e4403c9848966b853c2084b4a46a0ae220bed7f7ee1a8c10d1022100781e9a7_prof);

    }

    // line 56
    public function block_body($context, array $blocks = array())
    {
        $__internal_21024d8505b53b83e872ebea5a060a691f9a8ed832e472cebeae1ac714b87563 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21024d8505b53b83e872ebea5a060a691f9a8ed832e472cebeae1ac714b87563->enter($__internal_21024d8505b53b83e872ebea5a060a691f9a8ed832e472cebeae1ac714b87563_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2a8f89df37267a0aeb1c6527d4d5c37dcadd1db25d9581ef47fa1837a6d22356 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a8f89df37267a0aeb1c6527d4d5c37dcadd1db25d9581ef47fa1837a6d22356->enter($__internal_2a8f89df37267a0aeb1c6527d4d5c37dcadd1db25d9581ef47fa1837a6d22356_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2a8f89df37267a0aeb1c6527d4d5c37dcadd1db25d9581ef47fa1837a6d22356->leave($__internal_2a8f89df37267a0aeb1c6527d4d5c37dcadd1db25d9581ef47fa1837a6d22356_prof);

        
        $__internal_21024d8505b53b83e872ebea5a060a691f9a8ed832e472cebeae1ac714b87563->leave($__internal_21024d8505b53b83e872ebea5a060a691f9a8ed832e472cebeae1ac714b87563_prof);

    }

    // line 68
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b085d1f87bc64b207b9f52c3a1903c61cb590abf3ebbb363cda88579b1007053 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b085d1f87bc64b207b9f52c3a1903c61cb590abf3ebbb363cda88579b1007053->enter($__internal_b085d1f87bc64b207b9f52c3a1903c61cb590abf3ebbb363cda88579b1007053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_8fce79699bdcd77e1c047978943fa6c868d802953143095717c8daec4e7f433d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fce79699bdcd77e1c047978943fa6c868d802953143095717c8daec4e7f433d->enter($__internal_8fce79699bdcd77e1c047978943fa6c868d802953143095717c8daec4e7f433d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_8fce79699bdcd77e1c047978943fa6c868d802953143095717c8daec4e7f433d->leave($__internal_8fce79699bdcd77e1c047978943fa6c868d802953143095717c8daec4e7f433d_prof);

        
        $__internal_b085d1f87bc64b207b9f52c3a1903c61cb590abf3ebbb363cda88579b1007053->leave($__internal_b085d1f87bc64b207b9f52c3a1903c61cb590abf3ebbb363cda88579b1007053_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 68,  190 => 56,  173 => 10,  155 => 9,  142 => 69,  140 => 68,  127 => 57,  124 => 56,  115 => 53,  112 => 52,  108 => 51,  105 => 50,  97 => 48,  91 => 45,  87 => 44,  82 => 43,  80 => 42,  45 => 11,  43 => 10,  39 => 9,  29 => 1,);
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
                <div>
                    {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                        {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |
                        <a class=\"btn btn-danger\" href=\"{{ path('fos_user_security_logout') }}\">
                            {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
                        </a>
                    {% else %}
                        <a class=\"btn btn-success\" href=\"{{ path('fos_user_security_login') }}\">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>
                    {% endif %}
                </div>
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

", "base.html.twig", "/Users/paolocremaschi/html/incipit/app/Resources/views/base.html.twig");
    }
}
