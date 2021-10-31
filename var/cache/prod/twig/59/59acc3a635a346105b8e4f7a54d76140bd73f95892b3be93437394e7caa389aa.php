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

/* @Nutritionist/nutritionist-edit-appointment.html.twig */
class __TwigTemplate_67f534950b1d73e9ba18c1300bb774788f24f440696b552d3f8133a22bcab753 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Nutritionist/nutritionist-edit-appointment.html.twig"));

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
        $this->loadTemplate("header.html.twig", "@Nutritionist/nutritionist-edit-appointment.html.twig", 9)->display($context);
        // line 10
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/wizard-form.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/appointment-calendar.css"), "html", null, true);
        echo "\" />
        <!-- Wizard Form JS -->
        <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/js/wizard.js"), "html", null, true);
        echo "\"></script>
    </section>
    <section id=\"nutritionist-appointment\">
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "flashbag", [], "method"), "get", [0 => "editAppointmentKOStatus"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 17
            echo "            <div class=\"row\" style=\"width: 92%; margin-left: 4%; margin-top: 10px; margin-bottom: -10px;\">
                <div class=\"alert alert-danger\" role=\"alert\" style=\"margin-bottom: 0\">
                    ";
            // line 19
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "        <div class=\"container\">
            <div class=\"col-sm-12\">
                <div id=\"appointment-content-block\">
                    <div class=\"col-sm-12\">
                        <h2>Programar Consulta</h2>
                        <form id=\"msform\" action=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nutritionist_edit_appointment", ["id_appointment" => ($context["id_appointment"] ?? $this->getContext($context, "id_appointment"))]), "html", null, true);
        echo "\" method=\"post\">
                            <!-- progressbar -->
                            <ul id=\"progressbar\">
                                <li class=\"active\" id=\"appointment-date\"><strong>Fecha Consulta</strong></li>
                                <li id=\"appointment-hour\"><strong>Hora Consulta</strong></li>
                                <li id=\"appointment-customer\"><strong>Cliente Consulta</strong></li>
                                <li id=\"confirm\"><strong>Confirmación</strong></li>
                            </ul> <!-- fieldsets -->
                            <fieldset>
                                <div class=\"form-card\">
                                    <input name=\"appointment_date\" id=\"appointment_date\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["appointment"] ?? $this->getContext($context, "appointment")), "date", []), "Y-m-d"), "html", null, true);
        echo "\" type=\"date\"/>
                                </div>
                                <input type=\"button\" name=\"next\" class=\"next action-button\" value=\"Siguiente\"/>
                            </fieldset>
                            <fieldset>
                                <div class=\"form-card\">
                                    <h2 style=\"color: #00766c; text-align: center\">Elige una hora para la consulta</h2>
                                    <p style=\"text-align: center; font-size: 20px; margin-top: 3%; margin-bottom: 3%\"> El horario permitido para la consulta es de 09:00 a 19:00. Para modificarlo, es necesario ajustar dicho horario en la configuracion de su perfil</p>
                                    <label for=\"appointment_hour\" style=\"margin-right: 10px\"></label>
                                    <input type=\"time\" id=\"appointment_hour\" name=\"appointment_hour\" min=\"09:00\" max=\"19:00\" style=\"width: 50%; margin-left: 25%\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["appointment"] ?? $this->getContext($context, "appointment")), "date", []), "H:i:s"), "html", null, true);
        echo "\" required=\"required\">
                                    <p style=\"text-align: center; font-size: 20px;\"> Indica una breve descripción para la consulta</p>
                                    <label for=\"appointment_description\" style=\"margin-right: 10px\"></label>
                                    <input type=\"text\" class=\"form-control\" id=\"appointment_description\" name=\"appointment_description\" style=\"width: 60%;margin-left: 21%;height: 10rem;border: 1px solid #ccc;border-radius: 10px;\" value=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute(($context["appointment"] ?? $this->getContext($context, "appointment")), "description", []), "html", null, true);
        echo "\" required=\"required\">
                                </div>
                                <input type=\"button\" name=\"previous\" class=\"previous action-button-previous\" value=\"Previo\"/>
                                <input type=\"button\" name=\"next\" class=\"next action-button\" value=\"Siguiente\"/>
                            </fieldset>
                            <fieldset>
                                <div class=\"form-card\">
                                    <h2 style=\"color: #00766c; text-align: center\">Selecciona el cliente</h2>
                                    <nav class=\"navbar navbar-light bg-light\" style=\"height: 7rem;\">
                                        <div class=\"container-fluid\">
                                            <div class=\"d-flex customers-finder\" style=\"margin: 15px 0;\">
                                                <input class=\"form-control me-2\" type=\"search\" placeholder=\"Buscar\" aria-label=\"Search\" name=\"appointment_customer_search\"
                                                       style=\"width: 68.5%; display: inline-flex; margin-left: 14.3%;border: 1px solid #00766c;border-radius: 5px;\"/>
                                                <button class=\"btn btn-outline-success\" id=\"appointment-customer-search-button\" name=\"submit\" value=\"Buscar\">Buscar</button>
                                            </div>
                                        </div>
                                    </nav>
                                    <div id=\"appointment-customers-block\">
                                        ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customers"] ?? $this->getContext($context, "customers")));
        foreach ($context['_seq'] as $context["_key"] => $context["customer"]) {
            // line 69
            echo "                                            <div class=\"customer-entry\">
                                                <div class=\"col-sm-11 customer-entry-resume\">
                                                    <div class=\"col-sm-2\"><input type=\"checkbox\" value=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($context["customer"], "idUser", []), "html", null, true);
            echo "\" ";
            if (($this->getAttribute($context["customer"], "idUser", []) == $this->getAttribute(($context["appointment"] ?? $this->getContext($context, "appointment")), "idCustomer", []))) {
                echo " checked ";
            }
            echo " style=\"width: 15px; height: 15px\" name=\"appointment_customer\" id=\"appointment-customer\"></div>
                                                    <div class=\"col-sm-3\" style=\"text-align: start\">";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($context["customer"], "firstname", []), "html", null, true);
            echo "</div>
                                                    <div class=\"col-sm-3\" style=\"text-align: center\">";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($context["customer"], "lastname", []), "html", null, true);
            echo "</div>
                                                    <div class=\"col-sm-4\" style=\"text-align: end\">";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($context["customer"], "email", []), "html", null, true);
            echo "</div>
                                                </div>
                                            </div>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "                                    </div>
                                </div>
                                <input type=\"button\" name=\"previous\" class=\"previous action-button-previous\" value=\"Previo\"/>
                                <input type=\"button\" name=\"next\" class=\"next action-button\" value=\"Siguiente\"/>
                            </fieldset>
                            <fieldset>
                                <div class=\"form-card\">
                                    <div class=\"col-sm-6\" style=\"margin-left: 25%\">
                                        <label for=\"appointment_duration\">Duración consulta (min):</label>
                                        <input type=\"number\" id=\"appointment_duration\" name=\"appointment_duration\" class=\"form-control\" style=\"padding: 0; border: 1px solid #00766c; border-radius: 5px; margin-bottom: 20px; margin-top: 20px; height: 45px;\" value=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->getAttribute(($context["appointment"] ?? $this->getContext($context, "appointment")), "duration", []), "html", null, true);
        echo "\"/>

                                        <label for=\"appointment_type\">Tipo consulta:</label>
                                        <select id=\"appointment_type\" name=\"appointment_type\" class=\"form-control\">
                                            <option value=\"1\" ";
        // line 91
        if (($this->getAttribute(($context["appointment"] ?? $this->getContext($context, "appointment")), "appointmentType", []) == 1)) {
            echo "selected";
        }
        echo ">Presencial</option>
                                            <option value=\"2\" ";
        // line 92
        if (($this->getAttribute(($context["appointment"] ?? $this->getContext($context, "appointment")), "appointmentType", []) == 2)) {
            echo "selected";
        }
        echo ">Virtual</option>
                                        </select>
                                        <label for=\"appointment_link\">Añadir enlace videollamada (opcional):</label>
                                        <input type=\"text\" id=\"appointment_link\" name=\"appointment_link\" class=\"form-control\" style=\"padding: 0; border: 1px solid #00766c; border-radius: 5px; margin-bottom: 20px; margin-top: 20px; height: 45px;\" value=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->getAttribute(($context["appointment"] ?? $this->getContext($context, "appointment")), "appointmentLink", []), "html", null, true);
        echo "\"/>
                                    </div>
                                </div>
                                <input type=\"button\" name=\"previous\" class=\"previous action-button-previous\" value=\"Previo\"/>
                                <input type=\"submit\" name=\"submit\" class=\"action-button\" value=\"Confirmar\"/>
                            </fieldset>
                        </form>
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
        return "@Nutritionist/nutritionist-edit-appointment.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  219 => 95,  211 => 92,  205 => 91,  198 => 87,  187 => 78,  177 => 74,  173 => 73,  169 => 72,  161 => 71,  157 => 69,  153 => 68,  132 => 50,  126 => 47,  114 => 38,  101 => 28,  94 => 23,  84 => 19,  80 => 17,  76 => 16,  70 => 13,  65 => 11,  60 => 10,  58 => 9,  52 => 6,  46 => 2,  34 => 1,);
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
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/framework/css/wizard-form.css') }}\" />
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/framework/css/appointment-calendar.css') }}\" />
        <!-- Wizard Form JS -->
        <script src=\"{{ asset('bundles/framework/js/wizard.js') }}\"></script>
    </section>
    <section id=\"nutritionist-appointment\">
        {% for message in  app.session.flashbag().get('editAppointmentKOStatus') %}
            <div class=\"row\" style=\"width: 92%; margin-left: 4%; margin-top: 10px; margin-bottom: -10px;\">
                <div class=\"alert alert-danger\" role=\"alert\" style=\"margin-bottom: 0\">
                    {{ message }}
                </div>
            </div>
        {% endfor %}
        <div class=\"container\">
            <div class=\"col-sm-12\">
                <div id=\"appointment-content-block\">
                    <div class=\"col-sm-12\">
                        <h2>Programar Consulta</h2>
                        <form id=\"msform\" action=\"{{ path(\"nutritionist_edit_appointment\",{\"id_appointment\":id_appointment}) }}\" method=\"post\">
                            <!-- progressbar -->
                            <ul id=\"progressbar\">
                                <li class=\"active\" id=\"appointment-date\"><strong>Fecha Consulta</strong></li>
                                <li id=\"appointment-hour\"><strong>Hora Consulta</strong></li>
                                <li id=\"appointment-customer\"><strong>Cliente Consulta</strong></li>
                                <li id=\"confirm\"><strong>Confirmación</strong></li>
                            </ul> <!-- fieldsets -->
                            <fieldset>
                                <div class=\"form-card\">
                                    <input name=\"appointment_date\" id=\"appointment_date\" value=\"{{ appointment.date|date('Y-m-d') }}\" type=\"date\"/>
                                </div>
                                <input type=\"button\" name=\"next\" class=\"next action-button\" value=\"Siguiente\"/>
                            </fieldset>
                            <fieldset>
                                <div class=\"form-card\">
                                    <h2 style=\"color: #00766c; text-align: center\">Elige una hora para la consulta</h2>
                                    <p style=\"text-align: center; font-size: 20px; margin-top: 3%; margin-bottom: 3%\"> El horario permitido para la consulta es de 09:00 a 19:00. Para modificarlo, es necesario ajustar dicho horario en la configuracion de su perfil</p>
                                    <label for=\"appointment_hour\" style=\"margin-right: 10px\"></label>
                                    <input type=\"time\" id=\"appointment_hour\" name=\"appointment_hour\" min=\"09:00\" max=\"19:00\" style=\"width: 50%; margin-left: 25%\" value=\"{{ appointment.date|date('H:i:s') }}\" required=\"required\">
                                    <p style=\"text-align: center; font-size: 20px;\"> Indica una breve descripción para la consulta</p>
                                    <label for=\"appointment_description\" style=\"margin-right: 10px\"></label>
                                    <input type=\"text\" class=\"form-control\" id=\"appointment_description\" name=\"appointment_description\" style=\"width: 60%;margin-left: 21%;height: 10rem;border: 1px solid #ccc;border-radius: 10px;\" value=\"{{ appointment.description}}\" required=\"required\">
                                </div>
                                <input type=\"button\" name=\"previous\" class=\"previous action-button-previous\" value=\"Previo\"/>
                                <input type=\"button\" name=\"next\" class=\"next action-button\" value=\"Siguiente\"/>
                            </fieldset>
                            <fieldset>
                                <div class=\"form-card\">
                                    <h2 style=\"color: #00766c; text-align: center\">Selecciona el cliente</h2>
                                    <nav class=\"navbar navbar-light bg-light\" style=\"height: 7rem;\">
                                        <div class=\"container-fluid\">
                                            <div class=\"d-flex customers-finder\" style=\"margin: 15px 0;\">
                                                <input class=\"form-control me-2\" type=\"search\" placeholder=\"Buscar\" aria-label=\"Search\" name=\"appointment_customer_search\"
                                                       style=\"width: 68.5%; display: inline-flex; margin-left: 14.3%;border: 1px solid #00766c;border-radius: 5px;\"/>
                                                <button class=\"btn btn-outline-success\" id=\"appointment-customer-search-button\" name=\"submit\" value=\"Buscar\">Buscar</button>
                                            </div>
                                        </div>
                                    </nav>
                                    <div id=\"appointment-customers-block\">
                                        {% for customer in customers %}
                                            <div class=\"customer-entry\">
                                                <div class=\"col-sm-11 customer-entry-resume\">
                                                    <div class=\"col-sm-2\"><input type=\"checkbox\" value=\"{{ customer.idUser }}\" {% if customer.idUser == appointment.idCustomer %} checked {% endif %} style=\"width: 15px; height: 15px\" name=\"appointment_customer\" id=\"appointment-customer\"></div>
                                                    <div class=\"col-sm-3\" style=\"text-align: start\">{{ customer.firstname }}</div>
                                                    <div class=\"col-sm-3\" style=\"text-align: center\">{{ customer.lastname }}</div>
                                                    <div class=\"col-sm-4\" style=\"text-align: end\">{{ customer.email }}</div>
                                                </div>
                                            </div>
                                        {% endfor %}
                                    </div>
                                </div>
                                <input type=\"button\" name=\"previous\" class=\"previous action-button-previous\" value=\"Previo\"/>
                                <input type=\"button\" name=\"next\" class=\"next action-button\" value=\"Siguiente\"/>
                            </fieldset>
                            <fieldset>
                                <div class=\"form-card\">
                                    <div class=\"col-sm-6\" style=\"margin-left: 25%\">
                                        <label for=\"appointment_duration\">Duración consulta (min):</label>
                                        <input type=\"number\" id=\"appointment_duration\" name=\"appointment_duration\" class=\"form-control\" style=\"padding: 0; border: 1px solid #00766c; border-radius: 5px; margin-bottom: 20px; margin-top: 20px; height: 45px;\" value=\"{{ appointment.duration }}\"/>

                                        <label for=\"appointment_type\">Tipo consulta:</label>
                                        <select id=\"appointment_type\" name=\"appointment_type\" class=\"form-control\">
                                            <option value=\"1\" {% if appointment.appointmentType == 1 %}selected{% endif %}>Presencial</option>
                                            <option value=\"2\" {% if appointment.appointmentType == 2 %}selected{% endif %}>Virtual</option>
                                        </select>
                                        <label for=\"appointment_link\">Añadir enlace videollamada (opcional):</label>
                                        <input type=\"text\" id=\"appointment_link\" name=\"appointment_link\" class=\"form-control\" style=\"padding: 0; border: 1px solid #00766c; border-radius: 5px; margin-bottom: 20px; margin-top: 20px; height: 45px;\" value=\"{{ appointment.appointmentLink }}\"/>
                                    </div>
                                </div>
                                <input type=\"button\" name=\"previous\" class=\"previous action-button-previous\" value=\"Previo\"/>
                                <input type=\"submit\" name=\"submit\" class=\"action-button\" value=\"Confirmar\"/>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </html>
{% endblock %}
", "@Nutritionist/nutritionist-edit-appointment.html.twig", "/shared/httpd/nutrik/src/NutritionistBundle/Resources/views/nutritionist-edit-appointment.html.twig");
    }
}
