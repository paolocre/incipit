<?php

/* FOSUserBundle:Group:list_content.html.twig */
class __TwigTemplate_4c0b7587427e8f7589cdf6f751c78ca7f63aa49ca9575ced81d7d03a44e8f85e extends Twig_Template
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
        $__internal_d2f2e8e5da0e7c18b9912a37e7746fb43f1e0fac156e423039a1eaffd181d3c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2f2e8e5da0e7c18b9912a37e7746fb43f1e0fac156e423039a1eaffd181d3c1->enter($__internal_d2f2e8e5da0e7c18b9912a37e7746fb43f1e0fac156e423039a1eaffd181d3c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list_content.html.twig"));

        $__internal_66cbad2082116a35f50ffb59f3b507c3c0032d61d5acb75a77b7afb6122f2a3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66cbad2082116a35f50ffb59f3b507c3c0032d61d5acb75a77b7afb6122f2a3f->enter($__internal_66cbad2082116a35f50ffb59f3b507c3c0032d61d5acb75a77b7afb6122f2a3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list_content.html.twig"));

        // line 1
        echo "<div class=\"fos_user_group_list\">
    <ul>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 4
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_group_show", array("groupName" => $this->getAttribute($context["group"], "getName", array(), "method"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "getName", array(), "method"), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "    </ul>
</div>
";
        
        $__internal_d2f2e8e5da0e7c18b9912a37e7746fb43f1e0fac156e423039a1eaffd181d3c1->leave($__internal_d2f2e8e5da0e7c18b9912a37e7746fb43f1e0fac156e423039a1eaffd181d3c1_prof);

        
        $__internal_66cbad2082116a35f50ffb59f3b507c3c0032d61d5acb75a77b7afb6122f2a3f->leave($__internal_66cbad2082116a35f50ffb59f3b507c3c0032d61d5acb75a77b7afb6122f2a3f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 6,  33 => 4,  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"fos_user_group_list\">
    <ul>
    {% for group in groups %}
        <li><a href=\"{{ path('fos_user_group_show', {'groupName': group.getName()} ) }}\">{{ group.getName() }}</a></li>
    {% endfor %}
    </ul>
</div>
", "FOSUserBundle:Group:list_content.html.twig", "/Users/paolocremaschi/html/incipit/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list_content.html.twig");
    }
}
