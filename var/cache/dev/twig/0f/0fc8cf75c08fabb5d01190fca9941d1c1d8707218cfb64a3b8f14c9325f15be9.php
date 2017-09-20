<?php

/* :todo:index.html.twig */
class __TwigTemplate_8e2f2229d77f7326630cf2ad7821dfac4714d5df315aba423d1ea57ab2845ffc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":todo:index.html.twig", 1);
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
        $__internal_ed66bb0e6e174265a3454cdc3185162965e3165476073edeb33d81ae9477e1ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed66bb0e6e174265a3454cdc3185162965e3165476073edeb33d81ae9477e1ee->enter($__internal_ed66bb0e6e174265a3454cdc3185162965e3165476073edeb33d81ae9477e1ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":todo:index.html.twig"));

        $__internal_ffc634eab7eb8568a9d8b0b86ed462a037e3ec8475db2057c9db8db0398a005c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffc634eab7eb8568a9d8b0b86ed462a037e3ec8475db2057c9db8db0398a005c->enter($__internal_ffc634eab7eb8568a9d8b0b86ed462a037e3ec8475db2057c9db8db0398a005c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":todo:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed66bb0e6e174265a3454cdc3185162965e3165476073edeb33d81ae9477e1ee->leave($__internal_ed66bb0e6e174265a3454cdc3185162965e3165476073edeb33d81ae9477e1ee_prof);

        
        $__internal_ffc634eab7eb8568a9d8b0b86ed462a037e3ec8475db2057c9db8db0398a005c->leave($__internal_ffc634eab7eb8568a9d8b0b86ed462a037e3ec8475db2057c9db8db0398a005c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_39a2fe8e2dfd8d1c4e5df0c483cc2574b638e00e0fd82471f20e21707a2f1909 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39a2fe8e2dfd8d1c4e5df0c483cc2574b638e00e0fd82471f20e21707a2f1909->enter($__internal_39a2fe8e2dfd8d1c4e5df0c483cc2574b638e00e0fd82471f20e21707a2f1909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_81d12b40e6a368f942b9931a088af9461847afc9c532e52496a17bf6b814b78f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81d12b40e6a368f942b9931a088af9461847afc9c532e52496a17bf6b814b78f->enter($__internal_81d12b40e6a368f942b9931a088af9461847afc9c532e52496a17bf6b814b78f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1 class=\"page-header\">Latest Todos</h1>
    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th>#</th>
                <th>Todo</th>
                <th>Due date</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["todos"]) ? $context["todos"] : $this->getContext($context, "todos")));
        foreach ($context['_seq'] as $context["_key"] => $context["todo"]) {
            // line 16
            echo "                <tr>
                    <th scope=\"row\">";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["todo"], "id", array()), "html", null, true);
            echo "</th>
                    <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["todo"], "name", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 19
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["todo"], "dueDate", array()), "F, j Y, g:i a"), "html", null, true);
            echo "</td>
                    <td>
                        <a href=\"/todos/details/";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["todo"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-primary\">View</a>
                        <a href=\"/todos/edit/";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["todo"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-success\">Edit</a>
                        <a href=\"/todos/delete/";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["todo"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-danger\">Delete</a>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['todo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "            
        </tbody>
    </table>
";
        
        $__internal_81d12b40e6a368f942b9931a088af9461847afc9c532e52496a17bf6b814b78f->leave($__internal_81d12b40e6a368f942b9931a088af9461847afc9c532e52496a17bf6b814b78f_prof);

        
        $__internal_39a2fe8e2dfd8d1c4e5df0c483cc2574b638e00e0fd82471f20e21707a2f1909->leave($__internal_39a2fe8e2dfd8d1c4e5df0c483cc2574b638e00e0fd82471f20e21707a2f1909_prof);

    }

    public function getTemplateName()
    {
        return ":todo:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 27,  90 => 23,  86 => 22,  82 => 21,  77 => 19,  73 => 18,  69 => 17,  66 => 16,  62 => 15,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1 class=\"page-header\">Latest Todos</h1>
    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th>#</th>
                <th>Todo</th>
                <th>Due date</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            {% for todo in todos %}
                <tr>
                    <th scope=\"row\">{{ todo.id }}</th>
                    <td>{{ todo.name }}</td>
                    <td>{{ todo.dueDate | date('F, j Y, g:i a') }}</td>
                    <td>
                        <a href=\"/todos/details/{{ todo.id }}\" class=\"btn btn-primary\">View</a>
                        <a href=\"/todos/edit/{{ todo.id }}\" class=\"btn btn-success\">Edit</a>
                        <a href=\"/todos/delete/{{ todo.id }}\" class=\"btn btn-danger\">Delete</a>
                    </td>
                </tr>
            {% endfor %}
            
        </tbody>
    </table>
{% endblock %}
", ":todo:index.html.twig", "/Users/paolocremaschi/html/incipit/app/Resources/views/todo/index.html.twig");
    }
}
