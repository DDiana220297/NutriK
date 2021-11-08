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

/* @Nutritionist/nutritionist-assign-plans.html.twig */
class __TwigTemplate_10702a9f65803063b0e67aaeb8ea329fec0365435fab1f0ae0897a4013405d0a extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Nutritionist/nutritionist-assign-plans.html.twig"));

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
        $this->loadTemplate("header.html.twig", "@Nutritionist/nutritionist-assign-plans.html.twig", 9)->display($context);
        // line 10
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/wizard-customer-plan-form.css"), "html", null, true);
        echo "\" />
        <!-- Wizard Form JS -->
        <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/js/wizard-customer-plan.js"), "html", null, true);
        echo "\"></script>
    </section>
    <section id=\"nutritionist-assign-plan\">
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "flashbag", [], "method"), "get", [0 => "assignPlanstKOStatus"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 16
            echo "            <div class=\"row\" style=\"width: 92%; margin-left: 4%; margin-top: 10px; margin-bottom: -10px;\">
                <div class=\"alert alert-danger\" role=\"alert\" style=\"margin-bottom: 0\">
                    ";
            // line 18
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "        <div class=\"container\">
            <div class=\"col-sm-12\">
                <div id=\"assign-plan-content-block\">
                    <div class=\"col-sm-12\">
                        <h2>Asignar planificaciones</h2>
                        <form id=\"msform\" action=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nutritionist_assign_plans");
        echo "\" method=\"post\" novalidate>
                            <!-- progressbar -->
                            <ul id=\"progressbar\">
                                <li class=\"active\" id=\"assign-customer\"><strong>Elige el Cliente</strong></li>
                                <li id=\"assign-plans\"><strong>Elige la planificación</strong></li>
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
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customers"] ?? $this->getContext($context, "customers")));
        foreach ($context['_seq'] as $context["_key"] => $context["customer"]) {
            // line 48
            echo "                                            <div class=\"customer-entry\">
                                                <div class=\"col-sm-11 customer-entry-resume\">
                                                    <div class=\"col-sm-2\"><input type=\"checkbox\" value=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["customer"], "idUser", []), "html", null, true);
            echo "\" style=\"width: 15px; height: 15px\" name=\"plan_customer\" id=\"plan_customer\"></div>
                                                    <div class=\"col-sm-3\" style=\"text-align: start\">";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["customer"], "firstname", []), "html", null, true);
            echo "</div>
                                                    <div class=\"col-sm-3\" style=\"text-align: center\">";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["customer"], "lastname", []), "html", null, true);
            echo "</div>
                                                    <div class=\"col-sm-4\" style=\"text-align: end\">";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["customer"], "email", []), "html", null, true);
            echo "</div>
                                                </div>
                                            </div>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "                                    </div>
                                </div>
                                <input type=\"button\" name=\"next\" class=\"next action-button\" value=\"Siguiente\"/>
                            </fieldset>
                            <fieldset>
                                <div class=\"form-card\">
                                    <h2 style=\"color: #00766c; text-align: center\">Selecciona las planificaciones</h2>
                                    <ul id=\"weekly-plans-block\">
                                        ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["plans"] ?? $this->getContext($context, "plans")));
        foreach ($context['_seq'] as $context["_key"] => $context["plan"]) {
            // line 66
            echo "                                            <li class=\"plan-entry\">
                                                <div class=\"col-sm-8\">
                                                    <div class=\"col-sm-1\"><input type=\"checkbox\" value=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["plan"], "idPlan", []), "html", null, true);
            echo "\" style=\"width: 20px;margin-top: 25px;height: 15px;\" name=\"assign_plans[]\"></div>
                                                    <div class=\"col-sm-11\"><strong>";
            // line 69
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["plan"], "dateAdd", []), "Y-m-d H:i:s"), "html", null, true);
            echo "</strong><p>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["plan"], "description", []), "html", null, true);
            echo "</p></div>
                                                </div>
                                                <div class=\"col-sm-4\" style=\"padding: 0\">
                                                    <div class=\"col-sm-12\" style=\"padding: 0\">
                                                        <label for=\"plan_date_from\" style=\"width: 10rem\">Fecha inicio:</label><input name=\"plan_date_from[";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($context["plan"], "idPlan", []), "html", null, true);
            echo "]\" id=\"plan_date_from\" value=\"\" type=\"date\" style=\"margin: 0 0 10px 10px;width: 22rem;\"/>
                                                        <label for=\"plan_date_to\" style=\"width: 10rem\">Fecha fin:</label><input name=\"plan_date_to[";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($context["plan"], "idPlan", []), "html", null, true);
            echo "]\" id=\"plan_date_to\" value=\"\" type=\"date\" style=\"margin: 0 0 0 10px;width: 22rem;\"/>
                                                    </div>
                                                </div>
                                            </li>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plan'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "                                    </ul>
                                </div>
                                <input type=\"button\" name=\"previous\" class=\"previous action-button-previous\" value=\"Previo\"/>
                                <input type=\"button\" name=\"next\" class=\"next action-button\" value=\"Siguiente\"/>
                            </fieldset>
                            <fieldset>
                                <div class=\"form-card\">
                                    <h2 style=\"color: #00766c; text-align: center\">Notas adicionales</h2>
                                    <div class=\"col-sm-6\" style=\"margin-left: 25%\">
                                        <input type=\"text\" id=\"plan_notes\" name=\"plan_notes\" class=\"form-control\"/>
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
        return "@Nutritionist/nutritionist-assign-plans.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  196 => 79,  185 => 74,  181 => 73,  172 => 69,  168 => 68,  164 => 66,  160 => 65,  150 => 57,  140 => 53,  136 => 52,  132 => 51,  128 => 50,  124 => 48,  120 => 47,  97 => 27,  90 => 22,  80 => 18,  76 => 16,  72 => 15,  66 => 12,  60 => 10,  58 => 9,  52 => 6,  46 => 2,  34 => 1,);
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
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/framework/css/wizard-customer-plan-form.css') }}\" />
        <!-- Wizard Form JS -->
        <script src=\"{{ asset('bundles/framework/js/wizard-customer-plan.js') }}\"></script>
    </section>
    <section id=\"nutritionist-assign-plan\">
        {% for message in  app.session.flashbag().get('assignPlanstKOStatus') %}
            <div class=\"row\" style=\"width: 92%; margin-left: 4%; margin-top: 10px; margin-bottom: -10px;\">
                <div class=\"alert alert-danger\" role=\"alert\" style=\"margin-bottom: 0\">
                    {{ message }}
                </div>
            </div>
        {% endfor %}
        <div class=\"container\">
            <div class=\"col-sm-12\">
                <div id=\"assign-plan-content-block\">
                    <div class=\"col-sm-12\">
                        <h2>Asignar planificaciones</h2>
                        <form id=\"msform\" action=\"{{ path(\"nutritionist_assign_plans\") }}\" method=\"post\" novalidate>
                            <!-- progressbar -->
                            <ul id=\"progressbar\">
                                <li class=\"active\" id=\"assign-customer\"><strong>Elige el Cliente</strong></li>
                                <li id=\"assign-plans\"><strong>Elige la planificación</strong></li>
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
                                                    <div class=\"col-sm-2\"><input type=\"checkbox\" value=\"{{ customer.idUser }}\" style=\"width: 15px; height: 15px\" name=\"plan_customer\" id=\"plan_customer\"></div>
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
                                    <h2 style=\"color: #00766c; text-align: center\">Selecciona las planificaciones</h2>
                                    <ul id=\"weekly-plans-block\">
                                        {% for plan in plans %}
                                            <li class=\"plan-entry\">
                                                <div class=\"col-sm-8\">
                                                    <div class=\"col-sm-1\"><input type=\"checkbox\" value=\"{{ plan.idPlan }}\" style=\"width: 20px;margin-top: 25px;height: 15px;\" name=\"assign_plans[]\"></div>
                                                    <div class=\"col-sm-11\"><strong>{{ plan.dateAdd|date('Y-m-d H:i:s') }}</strong><p>{{ plan.description }}</p></div>
                                                </div>
                                                <div class=\"col-sm-4\" style=\"padding: 0\">
                                                    <div class=\"col-sm-12\" style=\"padding: 0\">
                                                        <label for=\"plan_date_from\" style=\"width: 10rem\">Fecha inicio:</label><input name=\"plan_date_from[{{ plan.idPlan }}]\" id=\"plan_date_from\" value=\"\" type=\"date\" style=\"margin: 0 0 10px 10px;width: 22rem;\"/>
                                                        <label for=\"plan_date_to\" style=\"width: 10rem\">Fecha fin:</label><input name=\"plan_date_to[{{ plan.idPlan }}]\" id=\"plan_date_to\" value=\"\" type=\"date\" style=\"margin: 0 0 0 10px;width: 22rem;\"/>
                                                    </div>
                                                </div>
                                            </li>
                                        {% endfor %}
                                    </ul>
                                </div>
                                <input type=\"button\" name=\"previous\" class=\"previous action-button-previous\" value=\"Previo\"/>
                                <input type=\"button\" name=\"next\" class=\"next action-button\" value=\"Siguiente\"/>
                            </fieldset>
                            <fieldset>
                                <div class=\"form-card\">
                                    <h2 style=\"color: #00766c; text-align: center\">Notas adicionales</h2>
                                    <div class=\"col-sm-6\" style=\"margin-left: 25%\">
                                        <input type=\"text\" id=\"plan_notes\" name=\"plan_notes\" class=\"form-control\"/>
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
", "@Nutritionist/nutritionist-assign-plans.html.twig", "/shared/httpd/nutrik/src/NutritionistBundle/Resources/views/nutritionist-assign-plans.html.twig");
    }
}
