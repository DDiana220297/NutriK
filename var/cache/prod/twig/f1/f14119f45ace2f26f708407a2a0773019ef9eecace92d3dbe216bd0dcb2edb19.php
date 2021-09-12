<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @App/pruebas/index.html.twig */
class __TwigTemplate_7de7c6f56ceac5340de6833f8f6a3423088177cb26eccee8eec60318716964c7 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'container' => [$this, 'block_container'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@App/pruebas/index.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "@App/pruebas/index.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_container($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        // line 5
        echo "    ";
        $this->displayParentBlock("container", $context, $blocks);
        echo "
    ";
        // line 6
        echo twig_escape_filter($this->env, ($context["texto"] ?? $this->getContext($context, "texto")), "html", null, true);
        echo "
    <hr/>
    ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["frutas"] ?? $this->getContext($context, "frutas")), "manzana", []), "html", null, true);
        echo "

    ";
        // line 10
        $context["variable"] = "Hello darkness ma old fren";
        // line 11
        echo "
    ";
        // line 12
        echo twig_escape_filter($this->env, ($context["variable"] ?? $this->getContext($context, "variable")), "html", null, true);
        echo "

    <hr/>
    <h1>Recorremos el array de productos que hemos mandado desde el controlador</h1>
    <ul>
        ";
        // line 17
        if ((twig_length_filter($this->env, ($context["productos"] ?? $this->getContext($context, "productos"))) > 10)) {
            // line 18
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["productos"] ?? $this->getContext($context, "productos")));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 19
                echo "                <li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "producto", []), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "precio", []), "html", null, true);
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "        ";
        }
        // line 22
        echo "    </ul>

    <h3>Probando include</h3>
    ";
        // line 25
        echo twig_include($this->env, $context, "@App/pruebas/partial.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@App/pruebas/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 25,  100 => 22,  97 => 21,  86 => 19,  81 => 18,  79 => 17,  71 => 12,  68 => 11,  66 => 10,  61 => 8,  56 => 6,  51 => 5,  45 => 4,  29 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{# app/Resources/views/blog/layout.html.twig #}
{% extends 'layout.html.twig' %}

{% block container %}
    {{ parent() }}
    {{ texto }}
    <hr/>
    {{ frutas.manzana }}

    {% set variable = \"Hello darkness ma old fren\" %}

    {{ variable }}

    <hr/>
    <h1>Recorremos el array de productos que hemos mandado desde el controlador</h1>
    <ul>
        {% if productos|length > 10 %}
            {% for i in productos %}
                <li>{{ i.producto }} - {{ i.precio }}</li>
            {% endfor %}
        {% endif %}
    </ul>

    <h3>Probando include</h3>
    {{ include('@App/pruebas/partial.html.twig') }}
{% endblock %}
", "@App/pruebas/index.html.twig", "/shared/httpd/nutrik/src/AppBundle/Resources/views/pruebas/index.html.twig");
    }
}
