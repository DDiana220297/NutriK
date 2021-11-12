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

/* @Nutritionist/nutritionist-customers.html.twig */
class __TwigTemplate_f4ffd67878ad2c5e1150651873fecd41df4730d560e56728904bfd61bbef4367 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Nutritionist/nutritionist-customers.html.twig"));

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
        $this->loadTemplate("header.html.twig", "@Nutritionist/nutritionist-customers.html.twig", 9)->display($context);
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
                            <h3 style=\"display: inline-flex; margin-top: 7px; margin-left: -85px\">Mis Clientes
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
                                 onclick=\"redirectTo('nutritionist-all-customers')\">
                                <path d=\"M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z\"/>
                                <path fill-rule=\"evenodd\" d=\"M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z\"/>
                            </svg>
                        </div>
                    </div>
                    <div class=\"col-sm-12\">
                        <nav class=\"navbar navbar-light bg-light\">
                            <div class=\"container-fluid\">
                                <form class=\"form customers-finder\" action=\"";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nutritionist_customers");
        echo "\" method=\"post\">
                                    <input class=\"form-control me-2\" type=\"search\" placeholder=\"Buscar Cliente\" aria-label=\"Search\" name=\"customer_search\" style=\"width: 95%; display: inline-block\">
                                    <button class=\"btn btn-outline-success\" type=\"submit\" style=\"margin-bottom: 3px; width: 4.7%; display: inline-block\">Buscar</button>
                                </form>
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
            echo "                            <div class=\"customer-entry\">
                                <div class=\"col-sm-10 customer-entry-resume\">
                                    <div class=\"col-sm-4\">";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($context["customer"], "firstname", []), "html", null, true);
            echo "</div>
                                    <div class=\"col-sm-4\">";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($context["customer"], "lastname", []), "html", null, true);
            echo "</div>
                                    <div class=\"col-sm-4\">";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($context["customer"], "email", []), "html", null, true);
            echo "</div>
                                </div>
                                <div class=\"col-sm-2 customer-entry-actions\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-person-x\" viewBox=\"0 0 16 16\"
                                        onclick=\"deleteCustomerDependency(";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute($context["customer"], "idUser", []), "html", null, true);
            echo ")\">
                                        <path d=\"M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z\"/>
                                        <path fill-rule=\"evenodd\" d=\"M12.146 5.146a.5.5 0 0 1 .708 0L14 6.293l1.146-1.147a.5.5 0 0 1 .708.708L14.707 7l1.147 1.146a.5.5 0 0 1-.708.708L14 7.707l-1.146 1.147a.5.5 0 0 1-.708-.708L13.293 7l-1.147-1.146a.5.5 0 0 1 0-.708z\"/>
                                    </svg>
                                    <form class=\"form\" action=\"";
            // line 89
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nutritionist_delete_customer");
            echo "\" method=\"post\">
                                        <input type=\"submit\" class=\"hidden\" name=\"_customer_dependency_delete\" id=\"customer_dependency_delete_";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute($context["customer"], "idUser", []), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["customer"], "idUser", []), "html", null, true);
            echo "\">
                                    </form>
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-pencil-square\" viewBox=\"0 0 16 16\"
                                        onclick=\"redirectTo('nutritionist-edit-customer','/'+";
            // line 93
            echo twig_escape_filter($this->env, $this->getAttribute($context["customer"], "idUser", []), "html", null, true);
            echo ")\">
                                        <path d=\"M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z\"/>
                                        <path fill-rule=\"evenodd\" d=\"M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z\"/>
                                    </svg>
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-journals\" viewBox=\"0 0 16 16\"
                                        onclick=\"redirectTo('nutritionist-assigned-customer-plans','/'+";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute($context["customer"], "idUser", []), "html", null, true);
            echo ")\">
                                        <path d=\"M5 0h8a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2 2 2 0 0 1-2 2H3a2 2 0 0 1-2-2h1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1H1a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v9a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1H3a2 2 0 0 1 2-2z\"/>
                                        <path d=\"M1 6v-.5a.5.5 0 0 1 1 0V6h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V9h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 2.5v.5H.5a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1H2v-.5a.5.5 0 0 0-1 0z\"/>
                                    </svg>
                                </div>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "                    </div>
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
        return "@Nutritionist/nutritionist-customers.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  219 => 105,  206 => 98,  198 => 93,  190 => 90,  186 => 89,  179 => 85,  172 => 81,  168 => 80,  164 => 79,  160 => 77,  156 => 76,  145 => 68,  101 => 26,  91 => 22,  87 => 20,  82 => 19,  72 => 15,  68 => 13,  64 => 12,  60 => 10,  58 => 9,  52 => 6,  46 => 2,  34 => 1,);
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
                            <h3 style=\"display: inline-flex; margin-top: 7px; margin-left: -85px\">Mis Clientes
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
                                 onclick=\"redirectTo('nutritionist-all-customers')\">
                                <path d=\"M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z\"/>
                                <path fill-rule=\"evenodd\" d=\"M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z\"/>
                            </svg>
                        </div>
                    </div>
                    <div class=\"col-sm-12\">
                        <nav class=\"navbar navbar-light bg-light\">
                            <div class=\"container-fluid\">
                                <form class=\"form customers-finder\" action=\"{{ path(\"nutritionist_customers\") }}\" method=\"post\">
                                    <input class=\"form-control me-2\" type=\"search\" placeholder=\"Buscar Cliente\" aria-label=\"Search\" name=\"customer_search\" style=\"width: 95%; display: inline-block\">
                                    <button class=\"btn btn-outline-success\" type=\"submit\" style=\"margin-bottom: 3px; width: 4.7%; display: inline-block\">Buscar</button>
                                </form>
                            </div>
                        </nav>
                    </div>
                    <div class=\"col-sm-12 customers-list\">
                        {% for customer in customers %}
                            <div class=\"customer-entry\">
                                <div class=\"col-sm-10 customer-entry-resume\">
                                    <div class=\"col-sm-4\">{{ customer.firstname }}</div>
                                    <div class=\"col-sm-4\">{{ customer.lastname }}</div>
                                    <div class=\"col-sm-4\">{{ customer.email }}</div>
                                </div>
                                <div class=\"col-sm-2 customer-entry-actions\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-person-x\" viewBox=\"0 0 16 16\"
                                        onclick=\"deleteCustomerDependency({{ customer.idUser }})\">
                                        <path d=\"M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z\"/>
                                        <path fill-rule=\"evenodd\" d=\"M12.146 5.146a.5.5 0 0 1 .708 0L14 6.293l1.146-1.147a.5.5 0 0 1 .708.708L14.707 7l1.147 1.146a.5.5 0 0 1-.708.708L14 7.707l-1.146 1.147a.5.5 0 0 1-.708-.708L13.293 7l-1.147-1.146a.5.5 0 0 1 0-.708z\"/>
                                    </svg>
                                    <form class=\"form\" action=\"{{ path(\"nutritionist_delete_customer\") }}\" method=\"post\">
                                        <input type=\"submit\" class=\"hidden\" name=\"_customer_dependency_delete\" id=\"customer_dependency_delete_{{ customer.idUser }}\" value=\"{{ customer.idUser }}\">
                                    </form>
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-pencil-square\" viewBox=\"0 0 16 16\"
                                        onclick=\"redirectTo('nutritionist-edit-customer','/'+{{ customer.idUser}})\">
                                        <path d=\"M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z\"/>
                                        <path fill-rule=\"evenodd\" d=\"M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z\"/>
                                    </svg>
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-journals\" viewBox=\"0 0 16 16\"
                                        onclick=\"redirectTo('nutritionist-assigned-customer-plans','/'+{{ customer.idUser}})\">
                                        <path d=\"M5 0h8a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2 2 2 0 0 1-2 2H3a2 2 0 0 1-2-2h1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1H1a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v9a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1H3a2 2 0 0 1 2-2z\"/>
                                        <path d=\"M1 6v-.5a.5.5 0 0 1 1 0V6h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V9h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 2.5v.5H.5a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1H2v-.5a.5.5 0 0 0-1 0z\"/>
                                    </svg>
                                </div>
                            </div>
                        {% endfor %}
                    </div>
                </div>
            </div>
        </div>
    </section>
    </html>
{% endblock %}
", "@Nutritionist/nutritionist-customers.html.twig", "/shared/httpd/nutrik/src/NutritionistBundle/Resources/views/nutritionist-customers.html.twig");
    }
}
