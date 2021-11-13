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

/* @Nutritionist/nutritionist-all-customers.html.twig */
class __TwigTemplate_9ea655a641077fdf7a63b02735e1433725fc7ab0ef16d61da28ab5813e8c38be extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Nutritionist/nutritionist-all-customers.html.twig"));

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
        $this->loadTemplate("header.html.twig", "@Nutritionist/nutritionist-all-customers.html.twig", 9)->display($context);
        // line 10
        echo "    </section>
    <section id=\"nutritionist-customers\">
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "flashbag", [], "method"), "get", [0 => "customersKOStatus"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 13
            echo "            <div class=\"row\" style=\"width: 92%; margin-left: 4%; margin-top: 10px; margin-bottom: -40px;\">
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "flashbag", [], "method"), "get", [0 => "customersOKStatus"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 20
            echo "            <div class=\"row\" style=\"width: 92%; margin-left: 4%; margin-top: 10px; margin-bottom: -40px;\">
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
            <div class=\"col-sm-12\">
                <div id=\"customers-block\">
                    <div class=\"col-sm-12 customers-header\">
                        <div class=\"col-sm-1\" style=\"padding: 15px 0; color: white\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-people-fill\" viewBox=\"0 0 16 16\">
                                <path d=\"M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z\"/>
                                <path fill-rule=\"evenodd\" d=\"M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z\"/>
                                <path d=\"M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z\"/>
                            </svg>
                        </div>
                        <div class=\"col-sm-10\" style=\"padding: 20px 0;color: white;\">
                            <h3 style=\"display: inline-flex; margin-top: 7px; margin-left: -85px\">Clientes
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-info-circle\" viewBox=\"0 0 16 16\" style=\"width: 2rem; height: 2rem; margin-top: 3px; margin-left: 8px\"
                                     onclick=\"openModal('openMyInfoModal')\">
                                    <path d=\"M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z\"/>
                                    <path d=\"m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z\"/>
                                </svg>
                            </h3>
                            <button style=\"display: none\" type=\"button\" class=\"btn btn-primary\" id=\"openMyInfoModal\" data-toggle=\"modal\" data-target=\"#infoModal\"></button>
                            <div class=\"modal fade\" id=\"infoModal\">
                                <div class=\"modal-dialog\">
                                    <div class=\"modal-content\" style=\"height: 15rem;width: 50rem;padding: 40px 30px;\">
                                        <!-- Modal body -->
                                        <span>

                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-1\" style=\"padding: 15px 0;\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-person-plus-fill\" viewBox=\"0 0 16 16\" style=\"float: right; color: white\"
                                 onclick=\"redirectTo('nutritionist-add-customer')\">
                                <path d=\"M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z\"/>
                                <path fill-rule=\"evenodd\" d=\"M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z\"/>
                            </svg>
                        </div>
                    </div>
                    <form class=\"form customers-finder\" action=\"";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nutritionist_all_customers");
        echo "\" method=\"post\">
                        <div class=\"col-sm-12\">
                            <nav class=\"navbar navbar-light bg-light\">
                                <div class=\"container-fluid\">
                                    <input class=\"form-control me-2\" type=\"search\" placeholder=\"Buscar Cliente\" aria-label=\"Search\" name=\"customer_search\">
                                    <button class=\"btn btn-outline-success\" type=\"submit\">Buscar</button>
                                    <button class=\"btn btn-outline-success\" style=\"width: 17.3%\" type=\"submit\">Crear relación con clientes seleccionados</button>
                                </div>
                            </nav>
                        </div>
                        <div class=\"col-sm-12 customers-list\">
                            ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customers"] ?? $this->getContext($context, "customers")));
        foreach ($context['_seq'] as $context["_key"] => $context["customer"]) {
            // line 77
            echo "                                <div class=\"customer-entry\">
                                    <div class=\"col-sm-11 customer-entry-resume\">
                                        <div class=\"col-sm-3\"><input type=\"checkbox\" value=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($context["customer"], "idUser", []), "html", null, true);
            echo "\" style=\"width: fit-content; margin-bottom: 10px;\" name=\"customer_dependency_ids[]\"/></div>
                                        <div class=\"col-sm-3\">";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($context["customer"], "firstname", []), "html", null, true);
            echo "</div>
                                        <div class=\"col-sm-3\">";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($context["customer"], "lastname", []), "html", null, true);
            echo "</div>
                                        <div class=\"col-sm-3\">";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($context["customer"], "email", []), "html", null, true);
            echo "</div>
                                    </div>
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "                        </div>
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
        return "@Nutritionist/nutritionist-all-customers.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  186 => 86,  176 => 82,  172 => 81,  168 => 80,  164 => 79,  160 => 77,  156 => 76,  142 => 65,  101 => 26,  91 => 22,  87 => 20,  82 => 19,  72 => 15,  68 => 13,  64 => 12,  60 => 10,  58 => 9,  52 => 6,  46 => 2,  34 => 1,);
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
    <section id=\"nutritionist-customers\">
        {% for message in  app.session.flashbag().get('customersKOStatus') %}
            <div class=\"row\" style=\"width: 92%; margin-left: 4%; margin-top: 10px; margin-bottom: -40px;\">
                <div class=\"alert alert-danger\" role=\"alert\" style=\"margin-bottom: 0\">
                    {{ message }}
                </div>
            </div>
        {% endfor %}
        {% for message in  app.session.flashbag().get('customersOKStatus') %}
            <div class=\"row\" style=\"width: 92%; margin-left: 4%; margin-top: 10px; margin-bottom: -40px;\">
                <div class=\"alert alert-success\" role=\"alert\" style=\"margin-bottom: 0\">
                    {{ message }}
                </div>
            </div>
        {% endfor %}
        <div class=\"container\">
            <div class=\"col-sm-12\">
                <div id=\"customers-block\">
                    <div class=\"col-sm-12 customers-header\">
                        <div class=\"col-sm-1\" style=\"padding: 15px 0; color: white\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-people-fill\" viewBox=\"0 0 16 16\">
                                <path d=\"M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z\"/>
                                <path fill-rule=\"evenodd\" d=\"M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z\"/>
                                <path d=\"M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z\"/>
                            </svg>
                        </div>
                        <div class=\"col-sm-10\" style=\"padding: 20px 0;color: white;\">
                            <h3 style=\"display: inline-flex; margin-top: 7px; margin-left: -85px\">Clientes
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-info-circle\" viewBox=\"0 0 16 16\" style=\"width: 2rem; height: 2rem; margin-top: 3px; margin-left: 8px\"
                                     onclick=\"openModal('openMyInfoModal')\">
                                    <path d=\"M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z\"/>
                                    <path d=\"m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z\"/>
                                </svg>
                            </h3>
                            <button style=\"display: none\" type=\"button\" class=\"btn btn-primary\" id=\"openMyInfoModal\" data-toggle=\"modal\" data-target=\"#infoModal\"></button>
                            <div class=\"modal fade\" id=\"infoModal\">
                                <div class=\"modal-dialog\">
                                    <div class=\"modal-content\" style=\"height: 15rem;width: 50rem;padding: 40px 30px;\">
                                        <!-- Modal body -->
                                        <span>

                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-1\" style=\"padding: 15px 0;\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-person-plus-fill\" viewBox=\"0 0 16 16\" style=\"float: right; color: white\"
                                 onclick=\"redirectTo('nutritionist-add-customer')\">
                                <path d=\"M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z\"/>
                                <path fill-rule=\"evenodd\" d=\"M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z\"/>
                            </svg>
                        </div>
                    </div>
                    <form class=\"form customers-finder\" action=\"{{ path(\"nutritionist_all_customers\") }}\" method=\"post\">
                        <div class=\"col-sm-12\">
                            <nav class=\"navbar navbar-light bg-light\">
                                <div class=\"container-fluid\">
                                    <input class=\"form-control me-2\" type=\"search\" placeholder=\"Buscar Cliente\" aria-label=\"Search\" name=\"customer_search\">
                                    <button class=\"btn btn-outline-success\" type=\"submit\">Buscar</button>
                                    <button class=\"btn btn-outline-success\" style=\"width: 17.3%\" type=\"submit\">Crear relación con clientes seleccionados</button>
                                </div>
                            </nav>
                        </div>
                        <div class=\"col-sm-12 customers-list\">
                            {% for customer in customers %}
                                <div class=\"customer-entry\">
                                    <div class=\"col-sm-11 customer-entry-resume\">
                                        <div class=\"col-sm-3\"><input type=\"checkbox\" value=\"{{ customer.idUser }}\" style=\"width: fit-content; margin-bottom: 10px;\" name=\"customer_dependency_ids[]\"/></div>
                                        <div class=\"col-sm-3\">{{ customer.firstname }}</div>
                                        <div class=\"col-sm-3\">{{ customer.lastname }}</div>
                                        <div class=\"col-sm-3\">{{ customer.email }}</div>
                                    </div>
                                </div>
                            {% endfor %}
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    </html>
{% endblock %}
", "@Nutritionist/nutritionist-all-customers.html.twig", "/shared/httpd/nutrik/src/NutritionistBundle/Resources/views/nutritionist-all-customers.html.twig");
    }
}
