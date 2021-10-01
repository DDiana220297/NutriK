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

/* @Customer/about.html.twig */
class __TwigTemplate_6e9eb6d3b897f42b41fa23a8c77f2454169996d491000403cbb3e29f85e7037e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'title' => [$this, 'block_title'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Customer/about.html.twig"));

        // line 1
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_content($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 2
        echo "    <!DOCTYPE HTML>
    <html lang=\"es\">
    <header>
        <meta charset=\"utf-8\"/>
        <title>
            ";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        // line 8
        echo "        </title>
        <!-- Latest compiled and minified CSS -->
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/bootstrap.css"), "html", null, true);
        echo "\">

        <!-- Optional theme -->
        <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/bootstrap-theme.css"), "html", null, true);
        echo "\">

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>

        <!-- Latest compiled and minified JavaScript -->
        <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/bootstrap.js"), "html", null, true);
        echo "\"></script>

        <!-- Header stylesheet-->
        <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/header.css"), "html", null, true);
        echo "\" />

        <!-- Menu component javascript -->
        <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/js/MenuComponent.js"), "html", null, true);
        echo "\"></script>

        <!-- Customs JS -->
        <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework//js/customs.js"), "html", null, true);
        echo "\"></script>
    </header>
    <section id=\"default-header\">
        ";
        // line 31
        $this->loadTemplate("header.html.twig", "@Customer/about.html.twig", 31)->display($context);
        // line 32
        echo "    </section>
    <section id=\"customer-header\">
        ";
        // line 34
        $this->loadTemplate("customerheader.html.twig", "@Customer/about.html.twig", 34)->display($context);
        // line 35
        echo "    </section>
    <section id=\"content\">
        Content Default
    </section>
    <footer>
        Trabajo de fin de grado Nutrik
    </footer>
    </html>
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

    public function getTemplateName()
    {
        return "@Customer/about.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  122 => 7,  107 => 35,  105 => 34,  101 => 32,  99 => 31,  93 => 28,  87 => 25,  81 => 22,  75 => 19,  66 => 13,  60 => 10,  56 => 8,  54 => 7,  47 => 2,  35 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% block content %}
    <!DOCTYPE HTML>
    <html lang=\"es\">
    <header>
        <meta charset=\"utf-8\"/>
        <title>
            {% block title %} NutriK {% endblock %}
        </title>
        <!-- Latest compiled and minified CSS -->
        <link rel=\"stylesheet\" href=\"{{ asset('public/css/bootstrap.css') }}\">

        <!-- Optional theme -->
        <link rel=\"stylesheet\" href=\"{{ asset('public/css/bootstrap-theme.css') }}\">

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>

        <!-- Latest compiled and minified JavaScript -->
        <script src=\"{{ asset('public/js/bootstrap.js') }}\"></script>

        <!-- Header stylesheet-->
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/framework/css/header.css') }}\" />

        <!-- Menu component javascript -->
        <script src=\"{{ asset('bundles/framework/js/MenuComponent.js') }}\"></script>

        <!-- Customs JS -->
        <script src=\"{{ asset('bundles/framework//js/customs.js') }}\"></script>
    </header>
    <section id=\"default-header\">
        {% include 'header.html.twig' %}
    </section>
    <section id=\"customer-header\">
        {% include 'customerheader.html.twig' %}
    </section>
    <section id=\"content\">
        Content Default
    </section>
    <footer>
        Trabajo de fin de grado Nutrik
    </footer>
    </html>
{% endblock %}
", "@Customer/about.html.twig", "/shared/httpd/nutrik/src/CustomerBundle/Resources/views/about.html.twig");
    }
}
