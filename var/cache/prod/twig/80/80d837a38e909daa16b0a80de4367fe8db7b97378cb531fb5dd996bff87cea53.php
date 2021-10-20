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
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "flashbag", [], "method"), "get", [0 => "paymentDataKOStatus"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 13
            echo "            <div class=\"row\" style=\"width: 95%; margin-left: 2.5%; margin-top: 10px; margin-bottom: -10px;\">
                <div class=\"alert alert-danger\" role=\"alert\" style=\"margin-bottom: 0\">
                    ";
            // line 15
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "flashbag", [], "method"), "get", [0 => "paymentDataOKStatus"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 20
            echo "            <div class=\"row\" style=\"width: 95%; margin-left: 2.5%; margin-top: 10px; margin-bottom: -10px;\">
                <div class=\"alert alert-success\" role=\"alert\" style=\"margin-bottom: 0\">
                    ";
            // line 22
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "        <div class=\"container\">
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
                    <form class=\"form\" action=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nutritionist_payment_data_delete");
        echo "\" method=\"post\">
                        ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["nc_cards"] ?? $this->getContext($context, "nc_cards")));
        foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
            // line 42
            echo "                            <div class=\"card-item\">
                                <span class=\"form-control card-input\"><strong> ";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["card"], "name", []), "html", null, true);
            echo " </strong> - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["card"], "ncDigits", []), "html", null, true);
            echo " - <strong> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["card"], "ncExpMonth", []), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["card"], "ncExpYear", []), "html", null, true);
            echo " </strong></span>
                                <input type=\"hidden\" name=\"_card_delete\" value=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["card"], "idCard", []), "html", null, true);
            echo "\"/>
                                <input class=\"btn delete-button\" type=\"submit\" value=\"Borrar\"/>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['card'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "                    </form>
                </div>
                <div class=\"col-sm-12\">
                    <div id=\"receipts\">
                        <h3>Mis Recibos</h3>
                        <table class=\"table table-dark table-striped\">
                            <tr>
                                <th>Recibo</th>
                                <th>Cliente</th>
                                <th>Importe</th>
                                <th>Estado</th>
                                <th>Fecha</th>
                            </tr>
                            ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["receipts"] ?? $this->getContext($context, "receipts")));
        foreach ($context['_seq'] as $context["_key"] => $context["receipt"]) {
            // line 62
            echo "                                <tr>
                                    <td>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["receipt"], "description", []), "html", null, true);
            echo "</td>
                                    <td>";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["receipt"], "customer_name", []), "html", null, true);
            echo "</td>
                                    <td>";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["receipt"], "amount", []), "html", null, true);
            echo "</td>
                                    <td>";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($context["receipt"], "status", []), "html", null, true);
            echo "</td>
                                    <td>";
            // line 67
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["receipt"], "dateAdd", []), "Y-m-d"), "html", null, true);
            echo "</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['receipt'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "                        </table>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-6\" style=\"display: inline-flex\">
                <div class=\"card-fields\">
                    <form class=\"form\" action=\"";
        // line 76
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nutritionist_payment_data");
        echo "\" method=\"post\">
                        <label for=\"nombre\">Nombre:</label><input type=\"text\" id=\"name\" name=\"_name\" class=\"form-control\"/>
                        <label for=\"card-number\">Número Cuenta:</label><input type=\"text\" maxlength=\"20\" id=\"card-number\" name=\"_card-number\" class=\"form-control\"/>
                        <label for=\"expiration-date\">Fecha Caducidad:</label><input type=\"date\" id=\"expiration-date\" name=\"_expiration-date\" class=\"form-control\"/>
                        <div class=\"save-button-item\" style=\"width: 100%;\">
                            <input class=\"btn save-button\" type=\"submit\" value=\"Guardar\"/>
                        </div>
                    </form>
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
        return array (  203 => 76,  195 => 70,  186 => 67,  182 => 66,  178 => 65,  174 => 64,  170 => 63,  167 => 62,  163 => 61,  148 => 48,  138 => 44,  128 => 43,  125 => 42,  121 => 41,  117 => 40,  101 => 26,  91 => 22,  87 => 20,  82 => 19,  72 => 15,  68 => 13,  64 => 12,  60 => 10,  58 => 9,  52 => 6,  46 => 2,  34 => 1,);
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
        {% for message in  app.session.flashbag().get('paymentDataKOStatus') %}
            <div class=\"row\" style=\"width: 95%; margin-left: 2.5%; margin-top: 10px; margin-bottom: -10px;\">
                <div class=\"alert alert-danger\" role=\"alert\" style=\"margin-bottom: 0\">
                    {{ message }}
                </div>
            </div>
        {% endfor %}
        {% for message in  app.session.flashbag().get('paymentDataOKStatus') %}
            <div class=\"row\" style=\"width: 95%; margin-left: 2.5%; margin-top: 10px; margin-bottom: -10px;\">
                <div class=\"alert alert-success\" role=\"alert\" style=\"margin-bottom: 0\">
                    {{ message }}
                </div>
            </div>
        {% endfor %}
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
                    <form class=\"form\" action=\"{{ path(\"nutritionist_payment_data_delete\") }}\" method=\"post\">
                        {% for card in nc_cards %}
                            <div class=\"card-item\">
                                <span class=\"form-control card-input\"><strong> {{ card.name }} </strong> - {{ card.ncDigits }} - <strong> {{ card.ncExpMonth }}/{{ card.ncExpYear }} </strong></span>
                                <input type=\"hidden\" name=\"_card_delete\" value=\"{{ card.idCard }}\"/>
                                <input class=\"btn delete-button\" type=\"submit\" value=\"Borrar\"/>
                            </div>
                        {% endfor %}
                    </form>
                </div>
                <div class=\"col-sm-12\">
                    <div id=\"receipts\">
                        <h3>Mis Recibos</h3>
                        <table class=\"table table-dark table-striped\">
                            <tr>
                                <th>Recibo</th>
                                <th>Cliente</th>
                                <th>Importe</th>
                                <th>Estado</th>
                                <th>Fecha</th>
                            </tr>
                            {% for receipt in receipts %}
                                <tr>
                                    <td>{{ receipt.description }}</td>
                                    <td>{{ receipt.customer_name }}</td>
                                    <td>{{ receipt.amount }}</td>
                                    <td>{{ receipt.status }}</td>
                                    <td>{{ receipt.dateAdd|date('Y-m-d') }}</td>
                                </tr>
                            {% endfor %}
                        </table>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-6\" style=\"display: inline-flex\">
                <div class=\"card-fields\">
                    <form class=\"form\" action=\"{{ path(\"nutritionist_payment_data\") }}\" method=\"post\">
                        <label for=\"nombre\">Nombre:</label><input type=\"text\" id=\"name\" name=\"_name\" class=\"form-control\"/>
                        <label for=\"card-number\">Número Cuenta:</label><input type=\"text\" maxlength=\"20\" id=\"card-number\" name=\"_card-number\" class=\"form-control\"/>
                        <label for=\"expiration-date\">Fecha Caducidad:</label><input type=\"date\" id=\"expiration-date\" name=\"_expiration-date\" class=\"form-control\"/>
                        <div class=\"save-button-item\" style=\"width: 100%;\">
                            <input class=\"btn save-button\" type=\"submit\" value=\"Guardar\"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    </html>
{% endblock %}
", "@Nutritionist/nutritionist-payment-data.html.twig", "/shared/httpd/nutrik/src/NutritionistBundle/Resources/views/nutritionist-payment-data.html.twig");
    }
}
