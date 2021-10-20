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

/* @Customer/didactic-content.html.twig */
class __TwigTemplate_cb3a2e659eda18681a327bc073bbe6347d9413ffefbedd844a52e4bc74260fb5 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Customer/didactic-content.html.twig"));

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
            <!-- Login Page stylesheet-->
            <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/customerpages.css"), "html", null, true);
        echo "\" />
        </header>
        <section id=\"default-header\">
            ";
        // line 9
        $this->loadTemplate("header.html.twig", "@Customer/didactic-content.html.twig", 9)->display($context);
        // line 10
        echo "        </section>
        <section id=\"customer-header\">
            ";
        // line 12
        $this->loadTemplate("customerheader.html.twig", "@Customer/didactic-content.html.twig", 12)->display($context);
        // line 13
        echo "        </section>
        <section id=\"didactic-content\">
            <div class=\"container\">
                <div class=\"col-sm-3 didactic-content-filters\">
                    <h2>Categorias</h2>
                </div>
                <div class=\"col-sm-8 didactic-content-content\">
                    <nav class=\"navbar navbar-light bg-light\">
                        <div class=\"container-fluid\">
                            <form class=\"d-flex didactic-content-finder\">
                                <input class=\"form-control me-2\" type=\"search\" placeholder=\"Buscar\" aria-label=\"Search\">
                                <button class=\"btn btn-outline-success\" type=\"submit\">Buscar</button>
                            </form>
                        </div>
                    </nav>
                </div>
            </div>
        </section>
    </html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Customer/didactic-content.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 13,  64 => 12,  60 => 10,  58 => 9,  52 => 6,  46 => 2,  34 => 1,);
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
            <!-- Login Page stylesheet-->
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/framework/css/customerpages.css') }}\" />
        </header>
        <section id=\"default-header\">
            {% include 'header.html.twig' %}
        </section>
        <section id=\"customer-header\">
            {% include 'customerheader.html.twig' %}
        </section>
        <section id=\"didactic-content\">
            <div class=\"container\">
                <div class=\"col-sm-3 didactic-content-filters\">
                    <h2>Categorias</h2>
                </div>
                <div class=\"col-sm-8 didactic-content-content\">
                    <nav class=\"navbar navbar-light bg-light\">
                        <div class=\"container-fluid\">
                            <form class=\"d-flex didactic-content-finder\">
                                <input class=\"form-control me-2\" type=\"search\" placeholder=\"Buscar\" aria-label=\"Search\">
                                <button class=\"btn btn-outline-success\" type=\"submit\">Buscar</button>
                            </form>
                        </div>
                    </nav>
                </div>
            </div>
        </section>
    </html>
{% endblock %}
", "@Customer/didactic-content.html.twig", "/shared/httpd/nutrik/src/CustomerBundle/Resources/views/didactic-content.html.twig");
    }
}
