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

/* @Customer/progress.html.twig */
class __TwigTemplate_4b396793b827deaca9ff20506832ae91851c6ac6951724a663632bf3ab668a52 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Customer/progress.html.twig"));

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
        $this->loadTemplate("header.html.twig", "@Customer/progress.html.twig", 9)->display($context);
        // line 10
        echo "    </section>
    <section id=\"customer-header\">
        ";
        // line 12
        $this->loadTemplate("customerheader.html.twig", "@Customer/progress.html.twig", 12)->display($context);
        // line 13
        echo "    </section>
    <section id=\"customer-progress\">
        <div class=\"container\">
            <div class=\"col-sm-8\">
                <div id=\"customer-progress-graphics\">

                </div>
            </div>
            <div class=\"col-sm-4\">
                <div id=\"customer-progress-metrics\">
                    <h3>Registrar métricas:</h3>
                    <div id=\"customer-progress-fields\" style=\"margin-top: 30px\">
                        <label for=\"weight\">Peso:</label><input type=\"text\" id=\"weight\" name=\"_weight\" class=\"form-control\"/>
                        <label for=\"fat-percentage\">% Grasa corporal:</label><input type=\"text\" id=\"fat-percentage\" name=\"_fat-percentage\" class=\"form-control\"/>
                        <label for=\"muscle-percentage\">% Masa muscular:</label><input type=\"text\" id=\"muscle-percentage\" name=\"_muscle-percentage\" class=\"form-control\"/>
                        <label for=\"liquids-percentage\">% Líquidos:</label><input type=\"text\" id=\"liquids-percentage\" name=\"_liquids-percentage\" class=\"form-control\"/>
                        <div class=\"save-button-item\" style=\"width: 100%; margin-top: 35px\">
                            <input class=\"btn save-button\" type=\"submit\" value=\"Guardar\"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Customer/progress.html.twig";
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
    <section id=\"customer-progress\">
        <div class=\"container\">
            <div class=\"col-sm-8\">
                <div id=\"customer-progress-graphics\">

                </div>
            </div>
            <div class=\"col-sm-4\">
                <div id=\"customer-progress-metrics\">
                    <h3>Registrar métricas:</h3>
                    <div id=\"customer-progress-fields\" style=\"margin-top: 30px\">
                        <label for=\"weight\">Peso:</label><input type=\"text\" id=\"weight\" name=\"_weight\" class=\"form-control\"/>
                        <label for=\"fat-percentage\">% Grasa corporal:</label><input type=\"text\" id=\"fat-percentage\" name=\"_fat-percentage\" class=\"form-control\"/>
                        <label for=\"muscle-percentage\">% Masa muscular:</label><input type=\"text\" id=\"muscle-percentage\" name=\"_muscle-percentage\" class=\"form-control\"/>
                        <label for=\"liquids-percentage\">% Líquidos:</label><input type=\"text\" id=\"liquids-percentage\" name=\"_liquids-percentage\" class=\"form-control\"/>
                        <div class=\"save-button-item\" style=\"width: 100%; margin-top: 35px\">
                            <input class=\"btn save-button\" type=\"submit\" value=\"Guardar\"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </html>
{% endblock %}
", "@Customer/progress.html.twig", "/shared/httpd/nutrik/src/CustomerBundle/Resources/views/progress.html.twig");
    }
}
