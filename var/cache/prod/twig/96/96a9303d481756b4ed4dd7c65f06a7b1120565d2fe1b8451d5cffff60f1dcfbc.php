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

/* register.html.twig */
class __TwigTemplate_bf6a48f16e122a1e9b8da870c314dde88c5bce26fcec8f06a07210f3d1b8b6c2 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "register.html.twig"));

        // line 1
        echo "
<!DOCTYPE HTML>
<html lang=\"es\">
<head>
    <meta charset=\"utf-8\"/>
    <title>
        ";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        // line 8
        echo "    </title>
    <!-- Login Page stylesheet-->
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/loginpage.css"), "html", null, true);
        echo "\" />
</head>
<body>
";
        // line 13
        $this->displayBlock('content', $context, $blocks);
        // line 36
        echo "</body>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " NutriK ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 13
    public function block_content($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 14
        echo "    <div class=\"container\">
        <div class=\"row title\">
            <h1>NutriK</h1>
        </div>
        <div class=\"row logincarousel\">
            <div class=\"col-sm-12\">
                ";
        // line 20
        $this->loadTemplate("carousel.html.twig", "register.html.twig", 20)->display($context);
        // line 21
        echo "            </div>
        </div>
        ";
        // line 23
        if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []) != null)) {
            // line 24
            echo "            ";
            echo twig_var_dump($this->env, $context, [0 => $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", [])]);
            echo "
        ";
        }
        // line 26
        echo "        <div class=\"row registerform\">
            <div class=\"col-sm-6\">
                <h2>Registrate</h2>
                ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                ";
        // line 30
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
    <div class=\"clearfix\"></div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 30,  111 => 29,  106 => 26,  100 => 24,  98 => 23,  94 => 21,  92 => 20,  84 => 14,  78 => 13,  66 => 7,  57 => 36,  55 => 13,  49 => 10,  45 => 8,  43 => 7,  35 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("
<!DOCTYPE HTML>
<html lang=\"es\">
<head>
    <meta charset=\"utf-8\"/>
    <title>
        {% block title %} NutriK {% endblock %}
    </title>
    <!-- Login Page stylesheet-->
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/framework/css/loginpage.css') }}\" />
</head>
<body>
{% block content %}
    <div class=\"container\">
        <div class=\"row title\">
            <h1>NutriK</h1>
        </div>
        <div class=\"row logincarousel\">
            <div class=\"col-sm-12\">
                {% include 'carousel.html.twig' %}
            </div>
        </div>
        {% if app.user != null %}
            {{ dump(app.user) }}
        {% endif %}
        <div class=\"row registerform\">
            <div class=\"col-sm-6\">
                <h2>Registrate</h2>
                {{ form_start(form) }}
                {{ form_end(form) }}
            </div>
        </div>
    </div>
    <div class=\"clearfix\"></div>
{% endblock %}
</body>

", "register.html.twig", "/shared/httpd/nutrik/app/Resources/views/register.html.twig");
    }
}
