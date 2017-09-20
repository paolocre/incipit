<?php

/* :todo:details.html.twig */
class __TwigTemplate_ff555c5db3f8a0e1797e2f167f3e762b95459e10fed055b423bd5a0c94c9f153 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":todo:details.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0124a252e74211147a388a016f4fe58c7fc767a7eeaf9845285f35d7e9137efc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0124a252e74211147a388a016f4fe58c7fc767a7eeaf9845285f35d7e9137efc->enter($__internal_0124a252e74211147a388a016f4fe58c7fc767a7eeaf9845285f35d7e9137efc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":todo:details.html.twig"));

        $__internal_9748ad8be62fc3089e42d1944af2c9e0f26f6a8c0dbfcd6866a3d73511027627 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9748ad8be62fc3089e42d1944af2c9e0f26f6a8c0dbfcd6866a3d73511027627->enter($__internal_9748ad8be62fc3089e42d1944af2c9e0f26f6a8c0dbfcd6866a3d73511027627_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":todo:details.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0124a252e74211147a388a016f4fe58c7fc767a7eeaf9845285f35d7e9137efc->leave($__internal_0124a252e74211147a388a016f4fe58c7fc767a7eeaf9845285f35d7e9137efc_prof);

        
        $__internal_9748ad8be62fc3089e42d1944af2c9e0f26f6a8c0dbfcd6866a3d73511027627->leave($__internal_9748ad8be62fc3089e42d1944af2c9e0f26f6a8c0dbfcd6866a3d73511027627_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d1c44d035782ae60076ca868c68b469bc5e290d84d7d20989b5cb584d72996f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1c44d035782ae60076ca868c68b469bc5e290d84d7d20989b5cb584d72996f6->enter($__internal_d1c44d035782ae60076ca868c68b469bc5e290d84d7d20989b5cb584d72996f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e2018f8b1bed90ae010dae8c69caac05f71ad72a185c89c70ae9315e4486a128 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2018f8b1bed90ae010dae8c69caac05f71ad72a185c89c70ae9315e4486a128->enter($__internal_e2018f8b1bed90ae010dae8c69caac05f71ad72a185c89c70ae9315e4486a128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <a class=\"btn btn-default\" href=\"/todos\">Back to all todos</a>
    <hr>
    <h1 class=\"page-header\">";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["todo"]) ? $context["todo"] : $this->getContext($context, "todo")), "name", array()), "html", null, true);
        echo "</h1>
    <ul class=\"list-group\">
        <li class=\"list-group-item\">Category : ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["todo"]) ? $context["todo"] : $this->getContext($context, "todo")), "category", array()), "html", null, true);
        echo "</li>
        <li class=\"list-group-item\">Priority : ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["todo"]) ? $context["todo"] : $this->getContext($context, "todo")), "priority", array()), "html", null, true);
        echo "</li>
        <li class=\"list-group-item\">Created : ";
        // line 10
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["todo"]) ? $context["todo"] : $this->getContext($context, "todo")), "createDate", array()), "F, j Y, g:i a"), "html", null, true);
        echo "</li>
        <li class=\"list-group-item\">Due : <strong>";
        // line 11
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["todo"]) ? $context["todo"] : $this->getContext($context, "todo")), "dueDate", array()), "F, j Y, g:i a"), "html", null, true);
        echo "</strong></li>
    </ul>
    <p></p>
    <p>
        ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["todo"]) ? $context["todo"] : $this->getContext($context, "todo")), "description", array()), "html", null, true);
        echo "
    </p>
";
        
        $__internal_e2018f8b1bed90ae010dae8c69caac05f71ad72a185c89c70ae9315e4486a128->leave($__internal_e2018f8b1bed90ae010dae8c69caac05f71ad72a185c89c70ae9315e4486a128_prof);

        
        $__internal_d1c44d035782ae60076ca868c68b469bc5e290d84d7d20989b5cb584d72996f6->leave($__internal_d1c44d035782ae60076ca868c68b469bc5e290d84d7d20989b5cb584d72996f6_prof);

    }

    public function getTemplateName()
    {
        return ":todo:details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 15,  70 => 11,  66 => 10,  62 => 9,  58 => 8,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <a class=\"btn btn-default\" href=\"/todos\">Back to all todos</a>
    <hr>
    <h1 class=\"page-header\">{{ todo.name }}</h1>
    <ul class=\"list-group\">
        <li class=\"list-group-item\">Category : {{ todo.category }}</li>
        <li class=\"list-group-item\">Priority : {{ todo.priority }}</li>
        <li class=\"list-group-item\">Created : {{ todo.createDate | date('F, j Y, g:i a') }}</li>
        <li class=\"list-group-item\">Due : <strong>{{ todo.dueDate | date('F, j Y, g:i a') }}</strong></li>
    </ul>
    <p></p>
    <p>
        {{ todo.description }}
    </p>
{% endblock %}", ":todo:details.html.twig", "/Users/paolocremaschi/html/incipit/app/Resources/views/todo/details.html.twig");
    }
}
