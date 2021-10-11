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

/* @Nutritionist/nutritionist-payment-data.html.twig */
class __TwigTemplate_87d5ac61a1b380f02b0a62974386ea76b86af193284164fac8327fdd7741c7db extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Nutritionist/nutritionist-payment-data.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/nutritionistpages.css"), "html", null, true);
        echo "\" />
    </header>
    <section id=\"default-header\">
        ";
        // line 9
        $this->loadTemplate("header.html.twig", "@Nutritionist/nutritionist-payment-data.html.twig", 9)->display($context);
        // line 10
        echo "    </section>
    <section id=\"nutritionist-payment-data\">
        <div class=\"container\">
            <div class=\"col-sm-6\">
                <div class=\"col-sm-12\">
                    <div class=\"card-header\">
                        <div class=\"col-sm-1\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-bank\" viewBox=\"0 0 16 16\">
                                <path d=\"M8 .95 14.61 4h.89a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H15v7a.5.5 0 0 1 .485.379l.5 2A.5.5 0 0 1 15.5 17H.5a.5.5 0 0 1-.485-.621l.5-2A.5.5 0 0 1 1 14V7H.5a.5.5 0 0 1-.5-.5v-2A.5.5 0 0 1 .5 4h.89L8 .95zM3.776 4h8.447L8 2.05 3.776 4zM2 7v7h1V7H2zm2 0v7h2.5V7H4zm3.5 0v7h1V7h-1zm2 0v7H12V7H9.5zM13 7v7h1V7h-1zm2-1V5H1v1h14zm-.39 9H1.39l-.25 1h13.72l-.25-1z\"/>
                            </svg>
                        </div>
                        <div class=\"col-sm-9\">
                            <h3>Mis Datos Bancarios</h3>
                        </div>
                    </div>
                    <br/>
                    <div class=\"card-item\">
                        <label for=\"card_1\"></label><input type=\"text\"  id=\"card_1\" name=\"_card_1\" class=\"form-control card-input\"/>
                        <input class=\"btn delete-button\" type=\"submit\" value=\"Borrar\"/>
                    </div>
                    <div class=\"card-item\">
                        <label for=\"card_1\"></label><input type=\"text\"  id=\"card_1\" name=\"_card_1\" class=\"form-control card-input\"/>
                        <input class=\"btn delete-button\" type=\"submit\" value=\"Borrar\"/>
                    </div>
                </div>
                <div class=\"col-sm-12\">
                    <div id=\"receipts\">
                        <h3 style=\"margin-left: 10px\">Proximos Recibos</h3>
                        <ul style=\"margin-top: 20px\">
                            <li>Recibo consulta cliente - Jane Doe</li>
                            <li>Recibo consulta cliente - David López</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-6\" style=\"display: inline-flex\">
                <div class=\"card-fields\">
                    <label for=\"nombre\">Nombre:</label><input type=\"text\" id=\"nombre\" name=\"_nombre\" class=\"form-control\"/>
                    <label for=\"card-number\">Número Cuenta:</label><input type=\"number\" id=\"card-number\" name=\"_card-number\" class=\"form-control\"/>
                    <label for=\"expiration-date\">Fecha Caducidad:</label><input type=\"date\" id=\"expiration-date\" name=\"_expiration-date\" class=\"form-control\"/>
                    <div class=\"save-button-item\" style=\"width: 100%;\">
                        <input class=\"btn save-button\" type=\"submit\" value=\"Guardar\"/>
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
        return "@Nutritionist/nutritionist-payment-data.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  60 => 10,  58 => 9,  52 => 6,  46 => 2,  34 => 1,);
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
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/framework/css/nutritionistpages.css') }}\" />
    </header>
    <section id=\"default-header\">
        {% include 'header.html.twig' %}
    </section>
    <section id=\"nutritionist-payment-data\">
        <div class=\"container\">
            <div class=\"col-sm-6\">
                <div class=\"col-sm-12\">
                    <div class=\"card-header\">
                        <div class=\"col-sm-1\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-bank\" viewBox=\"0 0 16 16\">
                                <path d=\"M8 .95 14.61 4h.89a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H15v7a.5.5 0 0 1 .485.379l.5 2A.5.5 0 0 1 15.5 17H.5a.5.5 0 0 1-.485-.621l.5-2A.5.5 0 0 1 1 14V7H.5a.5.5 0 0 1-.5-.5v-2A.5.5 0 0 1 .5 4h.89L8 .95zM3.776 4h8.447L8 2.05 3.776 4zM2 7v7h1V7H2zm2 0v7h2.5V7H4zm3.5 0v7h1V7h-1zm2 0v7H12V7H9.5zM13 7v7h1V7h-1zm2-1V5H1v1h14zm-.39 9H1.39l-.25 1h13.72l-.25-1z\"/>
                            </svg>
                        </div>
                        <div class=\"col-sm-9\">
                            <h3>Mis Datos Bancarios</h3>
                        </div>
                    </div>
                    <br/>
                    <div class=\"card-item\">
                        <label for=\"card_1\"></label><input type=\"text\"  id=\"card_1\" name=\"_card_1\" class=\"form-control card-input\"/>
                        <input class=\"btn delete-button\" type=\"submit\" value=\"Borrar\"/>
                    </div>
                    <div class=\"card-item\">
                        <label for=\"card_1\"></label><input type=\"text\"  id=\"card_1\" name=\"_card_1\" class=\"form-control card-input\"/>
                        <input class=\"btn delete-button\" type=\"submit\" value=\"Borrar\"/>
                    </div>
                </div>
                <div class=\"col-sm-12\">
                    <div id=\"receipts\">
                        <h3 style=\"margin-left: 10px\">Proximos Recibos</h3>
                        <ul style=\"margin-top: 20px\">
                            <li>Recibo consulta cliente - Jane Doe</li>
                            <li>Recibo consulta cliente - David López</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-6\" style=\"display: inline-flex\">
                <div class=\"card-fields\">
                    <label for=\"nombre\">Nombre:</label><input type=\"text\" id=\"nombre\" name=\"_nombre\" class=\"form-control\"/>
                    <label for=\"card-number\">Número Cuenta:</label><input type=\"number\" id=\"card-number\" name=\"_card-number\" class=\"form-control\"/>
                    <label for=\"expiration-date\">Fecha Caducidad:</label><input type=\"date\" id=\"expiration-date\" name=\"_expiration-date\" class=\"form-control\"/>
                    <div class=\"save-button-item\" style=\"width: 100%;\">
                        <input class=\"btn save-button\" type=\"submit\" value=\"Guardar\"/>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </html>
{% endblock %}
", "@Nutritionist/nutritionist-payment-data.html.twig", "/shared/httpd/nutrik/src/NutritionistBundle/Resources/views/nutritionist-payment-data.html.twig");
    }
}
