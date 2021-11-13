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

/* @Nutritionist/schedule-appointment.html.twig */
class __TwigTemplate_c71860b524a371c9dd9e601f469dd981b8adca70323a1e49fe2f8329504f3c97 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Nutritionist/schedule-appointment.html.twig"));

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
        $this->loadTemplate("header.html.twig", "@Nutritionist/schedule-appointment.html.twig", 9)->display($context);
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "flashbag", [], "method"), "get", [0 => "scheduleAppointmentKOStatus"], "method"));
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nutritionist_schedule_appointment");
        echo "\" method=\"post\" novalidate>
                                <!-- progressbar -->
                                <ul id=\"progressbar\">
                                    <li class=\"active\" id=\"appointment-customer\"><strong>Cliente Consulta</strong></li>
                                    <li id=\"appointment-date\"><strong>Fecha Consulta</strong></li>
                                    <li id=\"appointment-hour\"><strong>Hora Consulta</strong></li>
                                    <li id=\"confirm\"><strong>Confirmación</strong></li>
                                </ul> <!-- fieldsets -->
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
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customers"] ?? $this->getContext($context, "customers")));
        foreach ($context['_seq'] as $context["_key"] => $context["customer"]) {
            // line 50
            echo "                                                <div class=\"customer-entry\">
                                                    <div class=\"col-sm-11 customer-entry-resume\">
                                                        <div class=\"col-sm-2\"><input type=\"checkbox\" value=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["customer"], "idUser", []), "html", null, true);
            echo "\" style=\"width: 15px; height: 15px\" name=\"appointment_customer\" id=\"appointment-customer\"></div>
                                                        <div class=\"col-sm-3\" style=\"text-align: start\">";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["customer"], "firstname", []), "html", null, true);
            echo "</div>
                                                        <div class=\"col-sm-3\" style=\"text-align: center\">";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["customer"], "lastname", []), "html", null, true);
            echo "</div>
                                                        <div class=\"col-sm-4\" style=\"text-align: end\">";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["customer"], "email", []), "html", null, true);
            echo "</div>
                                                    </div>
                                                </div>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "                                        </div>
                                    </div>
                                    <input type=\"button\" name=\"next\" class=\"next action-button\" value=\"Siguiente\"/>
                                </fieldset>
                                <fieldset>
                                    <div class=\"form-card\">
                                        <body>
                                        <h2 style=\"color: #00766c; text-align: center\">Elige una fecha en el calendario</h2>
                                        <div class=\"elegant-calendar\">
                                            <div id=\"header\" class=\"clearfix\">
                                                <div class=\"pre-button\"><</div>
                                                <div class=\"head-info\">
                                                    <span class=\"head-day\"></span>
                                                    <span class=\"head-month\"></span>
                                                </div>
                                                <div class=\"next-button\">></div>
                                            </div>
                                            <table id=\"appointment-calendar\">
                                                <thead>
                                                <tr>
                                                    <th>Sun</th>
                                                    <th>Mon</th>
                                                    <th>Tue</th>
                                                    <th>Wed</th>
                                                    <th>Thu</th>
                                                    <th>Fri</th>
                                                    <th>Sat</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
                                                <tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
                                                <tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
                                                <tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
                                                <tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
                                                <tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
                                                </tbody>
                                            </table>
                                            <input name=\"appointment_date\" id=\"appointment_date\" value=\"\" type=\"date\" style=\"display: none\"/>
                                        </div>
                                        </body>
                                    </div>
                                    <input type=\"button\" name=\"previous\" class=\"previous action-button-previous\" value=\"Previo\"/>
                                    <input type=\"button\" name=\"next\" class=\"next action-button\" value=\"Siguiente\"/>
                                </fieldset>
                                <fieldset>
                                    <div class=\"form-card\">
                                        <h2 style=\"color: #00766c; text-align: center\">Elige una hora para la consulta</h2>
                                        <p style=\"text-align: center; font-size: 20px; margin-top: 3%; margin-bottom: 3%\"> El horario permitido para la consulta es de 09:00 a 19:00. Para modificarlo, es necesario ajustar dicho horario en la configuracion de su perfil</p>
                                        <label for=\"appointment_hour\" style=\"margin-right: 10px\"></label>
                                        <input type=\"time\" id=\"appointment_hour\" name=\"appointment_hour\" min=\"09:00\" max=\"19:00\" style=\"width: 50%; margin-left: 25%\" value=\"11:00\" required=\"required\">
                                        <p style=\"text-align: center; font-size: 20px;\"> Indica una breve descripción para la consulta</p>
                                        <label for=\"appointment_description\" style=\"margin-right: 10px\"></label>
                                        <input type=\"text\" class=\"form-control\" id=\"appointment_description\" name=\"appointment_description\" style=\"width: 60%;margin-left: 21%;height: 10rem;border: 1px solid #ccc;border-radius: 10px;\"  required=\"required\">
                                    </div>
                                    <input type=\"button\" name=\"previous\" class=\"previous action-button-previous\" value=\"Previo\"/>
                                    <input type=\"button\" name=\"next\" class=\"next action-button\" value=\"Siguiente\"/>
                                </fieldset>
                                <fieldset>
                                    <div class=\"form-card\">
                                        <div class=\"col-sm-6\" style=\"margin-left: 25%\">
                                            <label for=\"appointment_duration\">Duración consulta (min):</label>
                                            <input type=\"number\" id=\"appointment_duration\" name=\"appointment_duration\" class=\"form-control\" style=\"padding: 0; border: 1px solid #00766c; border-radius: 5px; margin-bottom: 20px; margin-top: 20px; height: 45px;\"/>

                                            <label for=\"appointment_type\">Tipo consulta:</label>
                                            <select id=\"appointment_type\" name=\"appointment_type\" class=\"form-control\" >
                                                <option value=\"1\">Presencial</option>
                                                <option value=\"2\">Virtual</option>
                                            </select>
                                            <label for=\"appointment_link\">Añadir enlace videollamada (opcional):</label>
                                            <input type=\"text\" id=\"appointment_link\" name=\"appointment_link\" class=\"form-control\" style=\"padding: 0; border: 1px solid #00766c; border-radius: 5px; margin-bottom: 20px; margin-top: 20px; height: 45px;\"/>
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
        return "@Nutritionist/schedule-appointment.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  155 => 59,  145 => 55,  141 => 54,  137 => 53,  133 => 52,  129 => 50,  125 => 49,  101 => 28,  94 => 23,  84 => 19,  80 => 17,  76 => 16,  70 => 13,  65 => 11,  60 => 10,  58 => 9,  52 => 6,  46 => 2,  34 => 1,);
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
        {% for message in  app.session.flashbag().get('scheduleAppointmentKOStatus') %}
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
                            <form id=\"msform\" action=\"{{ path(\"nutritionist_schedule_appointment\") }}\" method=\"post\" novalidate>
                                <!-- progressbar -->
                                <ul id=\"progressbar\">
                                    <li class=\"active\" id=\"appointment-customer\"><strong>Cliente Consulta</strong></li>
                                    <li id=\"appointment-date\"><strong>Fecha Consulta</strong></li>
                                    <li id=\"appointment-hour\"><strong>Hora Consulta</strong></li>
                                    <li id=\"confirm\"><strong>Confirmación</strong></li>
                                </ul> <!-- fieldsets -->
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
                                                        <div class=\"col-sm-2\"><input type=\"checkbox\" value=\"{{ customer.idUser }}\" style=\"width: 15px; height: 15px\" name=\"appointment_customer\" id=\"appointment-customer\"></div>
                                                        <div class=\"col-sm-3\" style=\"text-align: start\">{{ customer.firstname }}</div>
                                                        <div class=\"col-sm-3\" style=\"text-align: center\">{{ customer.lastname }}</div>
                                                        <div class=\"col-sm-4\" style=\"text-align: end\">{{ customer.email }}</div>
                                                    </div>
                                                </div>
                                            {% endfor %}
                                        </div>
                                    </div>
                                    <input type=\"button\" name=\"next\" class=\"next action-button\" value=\"Siguiente\"/>
                                </fieldset>
                                <fieldset>
                                    <div class=\"form-card\">
                                        <body>
                                        <h2 style=\"color: #00766c; text-align: center\">Elige una fecha en el calendario</h2>
                                        <div class=\"elegant-calendar\">
                                            <div id=\"header\" class=\"clearfix\">
                                                <div class=\"pre-button\"><</div>
                                                <div class=\"head-info\">
                                                    <span class=\"head-day\"></span>
                                                    <span class=\"head-month\"></span>
                                                </div>
                                                <div class=\"next-button\">></div>
                                            </div>
                                            <table id=\"appointment-calendar\">
                                                <thead>
                                                <tr>
                                                    <th>Sun</th>
                                                    <th>Mon</th>
                                                    <th>Tue</th>
                                                    <th>Wed</th>
                                                    <th>Thu</th>
                                                    <th>Fri</th>
                                                    <th>Sat</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
                                                <tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
                                                <tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
                                                <tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
                                                <tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
                                                <tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
                                                </tbody>
                                            </table>
                                            <input name=\"appointment_date\" id=\"appointment_date\" value=\"\" type=\"date\" style=\"display: none\"/>
                                        </div>
                                        </body>
                                    </div>
                                    <input type=\"button\" name=\"previous\" class=\"previous action-button-previous\" value=\"Previo\"/>
                                    <input type=\"button\" name=\"next\" class=\"next action-button\" value=\"Siguiente\"/>
                                </fieldset>
                                <fieldset>
                                    <div class=\"form-card\">
                                        <h2 style=\"color: #00766c; text-align: center\">Elige una hora para la consulta</h2>
                                        <p style=\"text-align: center; font-size: 20px; margin-top: 3%; margin-bottom: 3%\"> El horario permitido para la consulta es de 09:00 a 19:00. Para modificarlo, es necesario ajustar dicho horario en la configuracion de su perfil</p>
                                        <label for=\"appointment_hour\" style=\"margin-right: 10px\"></label>
                                        <input type=\"time\" id=\"appointment_hour\" name=\"appointment_hour\" min=\"09:00\" max=\"19:00\" style=\"width: 50%; margin-left: 25%\" value=\"11:00\" required=\"required\">
                                        <p style=\"text-align: center; font-size: 20px;\"> Indica una breve descripción para la consulta</p>
                                        <label for=\"appointment_description\" style=\"margin-right: 10px\"></label>
                                        <input type=\"text\" class=\"form-control\" id=\"appointment_description\" name=\"appointment_description\" style=\"width: 60%;margin-left: 21%;height: 10rem;border: 1px solid #ccc;border-radius: 10px;\"  required=\"required\">
                                    </div>
                                    <input type=\"button\" name=\"previous\" class=\"previous action-button-previous\" value=\"Previo\"/>
                                    <input type=\"button\" name=\"next\" class=\"next action-button\" value=\"Siguiente\"/>
                                </fieldset>
                                <fieldset>
                                    <div class=\"form-card\">
                                        <div class=\"col-sm-6\" style=\"margin-left: 25%\">
                                            <label for=\"appointment_duration\">Duración consulta (min):</label>
                                            <input type=\"number\" id=\"appointment_duration\" name=\"appointment_duration\" class=\"form-control\" style=\"padding: 0; border: 1px solid #00766c; border-radius: 5px; margin-bottom: 20px; margin-top: 20px; height: 45px;\"/>

                                            <label for=\"appointment_type\">Tipo consulta:</label>
                                            <select id=\"appointment_type\" name=\"appointment_type\" class=\"form-control\" >
                                                <option value=\"1\">Presencial</option>
                                                <option value=\"2\">Virtual</option>
                                            </select>
                                            <label for=\"appointment_link\">Añadir enlace videollamada (opcional):</label>
                                            <input type=\"text\" id=\"appointment_link\" name=\"appointment_link\" class=\"form-control\" style=\"padding: 0; border: 1px solid #00766c; border-radius: 5px; margin-bottom: 20px; margin-top: 20px; height: 45px;\"/>
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
", "@Nutritionist/schedule-appointment.html.twig", "/shared/httpd/nutrik/src/NutritionistBundle/Resources/views/schedule-appointment.html.twig");
    }
}
