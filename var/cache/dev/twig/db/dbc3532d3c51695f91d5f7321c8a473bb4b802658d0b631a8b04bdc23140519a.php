<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_afabcaa289a78be0d6362e0d3a9fa74b7734b1209c3d08c48f48c2a56b87ee74 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@FOSUser/layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e42ec47e49178e8aee113af69a784e5025bdd3601dcda85f3409fa41589cf4c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e42ec47e49178e8aee113af69a784e5025bdd3601dcda85f3409fa41589cf4c4->enter($__internal_e42ec47e49178e8aee113af69a784e5025bdd3601dcda85f3409fa41589cf4c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_277b103c596e0b939910dc2440f26b57261768fad2ce99ece0bf74f70e205376 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_277b103c596e0b939910dc2440f26b57261768fad2ce99ece0bf74f70e205376->enter($__internal_277b103c596e0b939910dc2440f26b57261768fad2ce99ece0bf74f70e205376_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e42ec47e49178e8aee113af69a784e5025bdd3601dcda85f3409fa41589cf4c4->leave($__internal_e42ec47e49178e8aee113af69a784e5025bdd3601dcda85f3409fa41589cf4c4_prof);

        
        $__internal_277b103c596e0b939910dc2440f26b57261768fad2ce99ece0bf74f70e205376->leave($__internal_277b103c596e0b939910dc2440f26b57261768fad2ce99ece0bf74f70e205376_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c880474ff7fccf4c8e1d8a1e68c298a97356f7c59bb97d34b4c02ba62ad1ecdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c880474ff7fccf4c8e1d8a1e68c298a97356f7c59bb97d34b4c02ba62ad1ecdb->enter($__internal_c880474ff7fccf4c8e1d8a1e68c298a97356f7c59bb97d34b4c02ba62ad1ecdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4e7fb3107e98c437eb89c1da7c59f2ee6a0573bc3359fc111f97be5d5307c509 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e7fb3107e98c437eb89c1da7c59f2ee6a0573bc3359fc111f97be5d5307c509->enter($__internal_4e7fb3107e98c437eb89c1da7c59f2ee6a0573bc3359fc111f97be5d5307c509_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div>
        ";
        // line 5
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 6
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
            <a href=\"";
            // line 7
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                ";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
            </a>
        ";
        } else {
            // line 11
            echo "            <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
        ";
        }
        // line 13
        echo "    </div>

    ";
        // line 15
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 16
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 17
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 18
                    echo "                <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                    ";
                    // line 19
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 22
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "    ";
        }
        // line 24
        echo "
    <div>
        ";
        // line 26
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 28
        echo "    </div>
";
        
        $__internal_4e7fb3107e98c437eb89c1da7c59f2ee6a0573bc3359fc111f97be5d5307c509->leave($__internal_4e7fb3107e98c437eb89c1da7c59f2ee6a0573bc3359fc111f97be5d5307c509_prof);

        
        $__internal_c880474ff7fccf4c8e1d8a1e68c298a97356f7c59bb97d34b4c02ba62ad1ecdb->leave($__internal_c880474ff7fccf4c8e1d8a1e68c298a97356f7c59bb97d34b4c02ba62ad1ecdb_prof);

    }

    // line 26
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f1ec68f58fc4da9151c22c35926821a49d297fff73099c25c831139e5fca5820 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1ec68f58fc4da9151c22c35926821a49d297fff73099c25c831139e5fca5820->enter($__internal_f1ec68f58fc4da9151c22c35926821a49d297fff73099c25c831139e5fca5820_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2553cb8e06156cde22158feadc6a505ce5e036eaf833ba5ec838774bb3197673 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2553cb8e06156cde22158feadc6a505ce5e036eaf833ba5ec838774bb3197673->enter($__internal_2553cb8e06156cde22158feadc6a505ce5e036eaf833ba5ec838774bb3197673_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 27
        echo "        ";
        
        $__internal_2553cb8e06156cde22158feadc6a505ce5e036eaf833ba5ec838774bb3197673->leave($__internal_2553cb8e06156cde22158feadc6a505ce5e036eaf833ba5ec838774bb3197673_prof);

        
        $__internal_f1ec68f58fc4da9151c22c35926821a49d297fff73099c25c831139e5fca5820->leave($__internal_f1ec68f58fc4da9151c22c35926821a49d297fff73099c25c831139e5fca5820_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 27,  134 => 26,  123 => 28,  121 => 26,  117 => 24,  114 => 23,  108 => 22,  99 => 19,  94 => 18,  89 => 17,  84 => 16,  82 => 15,  78 => 13,  70 => 11,  64 => 8,  60 => 7,  55 => 6,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <div>
        {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
            {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |
            <a href=\"{{ path('fos_user_security_logout') }}\">
                {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
            </a>
        {% else %}
            <a href=\"{{ path('fos_user_security_login') }}\">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>
        {% endif %}
    </div>

    {% if app.request.hasPreviousSession %}
        {% for type, messages in app.session.flashbag.all() %}
            {% for message in messages %}
                <div class=\"flash-{{ type }}\">
                    {{ message }}
                </div>
            {% endfor %}
        {% endfor %}
    {% endif %}

    <div>
        {% block fos_user_content %}
        {% endblock fos_user_content %}
    </div>
{% endblock %}
", "@FOSUser/layout.html.twig", "/Users/paolocremaschi/html/incipit/app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
