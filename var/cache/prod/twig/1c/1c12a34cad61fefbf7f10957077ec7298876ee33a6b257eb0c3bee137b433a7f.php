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

/* @Nutritionist/nutritionist-assigned-customer-plans.html.twig */
class __TwigTemplate_f24db6b9a320eb4fc8e1c93c77d7639453f5426d9958f1e70b7f74ea4ee270fb extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Nutritionist/nutritionist-assigned-customer-plans.html.twig"));

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
        <!-- Footer stylesheet-->
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/footer.css"), "html", null, true);
        echo "\" />
    </header>
    <section id=\"default-header\">
        ";
        // line 11
        $this->loadTemplate("header.html.twig", "@Nutritionist/nutritionist-assigned-customer-plans.html.twig", 11)->display($context);
        // line 12
        echo "    </section>
    <section id=\"assigned-customer-plans-section\">
        <div class=\"container\">
            ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "flashbag", [], "method"), "get", [0 => "customerPlanKOStatus"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 16
            echo "                <div class=\"row\" style=\"width: 80%; margin-left: 10%; margin-top: -10px; margin-bottom: 10px;\">
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
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "flashbag", [], "method"), "get", [0 => "customerPlanOKStatus"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 23
            echo "                <div class=\"row\" style=\"width: 80%; margin-left: 10%; margin-top: -10px; margin-bottom: 10px;\">
                    <div class=\"alert alert-success\" role=\"alert\" style=\"margin-bottom: 0\">
                        ";
            // line 25
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "            <div class=\"assigned-customer-plans\">
                <h2 style=\"margin-top: -15px; margin-bottom: 15px; color: #00766c\">Planificaciones asociadas</h2>
                <div class=\"col-sm-3 customer-info\">
                    <div class=\"col-sm-12\" style=\"padding-left: 50px\">
                        <img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "image", [])), "html", null, true);
        echo "\" alt=\"\">
                    </div>
                    <div class=\"col-sm-12\">
                        <p><strong style=\"font-size: 35px;\">";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "firstname", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "lastname", []), "html", null, true);
        echo "</strong></p>
                    </div>
                    <div class=\"col-sm-12\">
                        <p><strong>Email:</strong> ";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "email", []), "html", null, true);
        echo "</p>
                        ";
        // line 40
        if ((($context["metrics"] ?? $this->getContext($context, "metrics")) != false)) {
            // line 41
            echo "                            <p><strong>Objetivos:</strong> ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["metrics"] ?? $this->getContext($context, "metrics")), "goals", []), "html", null, true);
            echo "</p>
                        ";
        }
        // line 43
        echo "                    </div>

                    ";
        // line 45
        if ((($context["metrics"] ?? $this->getContext($context, "metrics")) != false)) {
            // line 46
            echo "                        <div class=\"col-sm-12\">
                            <p><strong>Edad:</strong> ";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute(($context["metrics"] ?? $this->getContext($context, "metrics")), "age", []), "html", null, true);
            echo "</p>
                            <p><strong>Peso:</strong> ";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute(($context["metrics"] ?? $this->getContext($context, "metrics")), "weight", []), "html", null, true);
            echo "</p>
                            <p><strong>Edad:</strong> ";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute(($context["metrics"] ?? $this->getContext($context, "metrics")), "weight", []), "html", null, true);
            echo "</p>
                            <p><strong>% Grasa corporal:</strong> ";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute(($context["metrics"] ?? $this->getContext($context, "metrics")), "fatPercentage", []), "html", null, true);
            echo "</p>
                            <p><strong>% Masa muscular:</strong> ";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute(($context["metrics"] ?? $this->getContext($context, "metrics")), "musclePercentage", []), "html", null, true);
            echo "</p>
                            <p><strong>% Líquidos:</strong> ";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute(($context["metrics"] ?? $this->getContext($context, "metrics")), "liquidPercentage", []), "html", null, true);
            echo "</p>
                        </div>
                    ";
        }
        // line 55
        echo "                </div>
                <div class=\"col-sm-9 customer-plans\">
                    ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["plans"] ?? $this->getContext($context, "plans")));
        foreach ($context['_seq'] as $context["_key"] => $context["plan"]) {
            // line 58
            echo "                        <div class=\"col-sm-12 plan-entry\">
                            <div class=\"col-sm-11 weekly-plan-resume\">
                                <h4>
                                    ";
            // line 61
            if (twig_in_filter($this->getAttribute($context["plan"], "idPlan", []), twig_get_array_keys_filter(($context["weekly_plans_tags"] ?? $this->getContext($context, "weekly_plans_tags"))))) {
                // line 62
                echo "                                        <span>
                                                ";
                // line 63
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["weekly_plans_tags"] ?? $this->getContext($context, "weekly_plans_tags")), $this->getAttribute($context["plan"], "idPlan", []), [], "array"));
                foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                    // line 64
                    echo "                                                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "name", []), "html", null, true);
                    echo " <span style=\"color: #00766c\">></span>
                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 66
                echo "                                            </span>
                                    ";
            }
            // line 68
            echo "                                    <strong style=\"color: #00766c\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["plan"], "title", []), "html", null, true);
            echo "</strong>
                                </h4>
                                <p>";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["plan"], "description", []), "html", null, true);
            echo "</p>
                                <strong>";
            // line 71
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["weekly_plans_dates"] ?? $this->getContext($context, "weekly_plans_dates")), $this->getAttribute($context["plan"], "idPlan", []), [], "array"), "date_from", [], "array"), "Y-m-d"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["weekly_plans_dates"] ?? $this->getContext($context, "weekly_plans_dates")), $this->getAttribute($context["plan"], "idPlan", []), [], "array"), "date_to", [], "array"), "Y-m-d"), "html", null, true);
            echo "</strong>
                            </div>
                            <div class=\"col-sm-1 weekly-plan-actions\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-slash-circle\" viewBox=\"0 0 16 16\" style=\"margin-bottom: 15px;\"
                                    onclick=\"deleteCustomerWeeklyPlan(";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($context["plan"], "idPlan", []), "html", null, true);
            echo ")\">
                                    <path d=\"M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z\"/>
                                    <path d=\"M11.354 4.646a.5.5 0 0 0-.708 0l-6 6a.5.5 0 0 0 .708.708l6-6a.5.5 0 0 0 0-.708z\"/>
                                </svg>
                                <form class=\"form\" action=\"";
            // line 79
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nutritionist_customer_delete_weekly_plan");
            echo "\" method=\"post\">
                                    <input type=\"submit\" class=\"hidden\" name=\"customer_plan_delete\" id=\"customer_plan_delete_";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($context["plan"], "idPlan", []), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["plan"], "idPlan", []), "html", null, true);
            echo "\">
                                    <input type=\"hidden\" class=\"hidden\" name=\"customer_delete\" id=\"customer_delete_";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "idUser", []), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "idUser", []), "html", null, true);
            echo "\">
                                </form>
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-pencil-square\" viewBox=\"0 0 16 16\" style=\"margin-bottom: 15px;\"
                                     onclick=\"redirectTo('nutritionist-edit-weekly-plan','/'+";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($context["plan"], "idPlan", []), "html", null, true);
            echo ")\">>
                                    <path d=\"M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z\"/>
                                    <path fill-rule=\"evenodd\" d=\"M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z\"/>
                                </svg>
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-calendar-week\" viewBox=\"0 0 16 16\"
                                    onclick=\"openModal('openChangeDatesModal')\">
                                    <path d=\"M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-5 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z\"/>
                                    <path d=\"M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z\"/>
                                </svg>
                                <button style=\"display: none\" type=\"button\" class=\"btn btn-primary\" id=\"openChangeDatesModal\" data-toggle=\"modal\" data-target=\"#changePlanDatesModal\"></button>
                                <div class=\"modal fade\" id=\"changePlanDatesModal\">
                                    <div class=\"modal-dialog\">
                                        <div class=\"modal-content\">
                                            <form id=\"msform\" action=\"";
            // line 97
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nutritionist_assigned_customer_plans", ["id_customer" => $this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "idUser", [])]), "html", null, true);
            echo "\" method=\"post\" novalidate>
                                                <!-- Modal body -->
                                                <h3 style=\"color: #00766c; text-align: center\">Modificar el rango de fechas</h3>
                                                <div class=\"col-sm-12\" style=\"padding: 15px; text-align: center\">
                                                    <p><label for=\"plan_date_from\" style=\"width: 10rem\">Fecha inicio:</label><input name=\"plan_date_from\" id=\"plan_date_from\" value=\"";
            // line 101
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["weekly_plans_dates"] ?? $this->getContext($context, "weekly_plans_dates")), $this->getAttribute($context["plan"], "idPlan", []), [], "array"), "date_from", [], "array"), "Y-m-d"), "html", null, true);
            echo "\" type=\"date\" style=\"margin: 0 0 10px 10px;width: 22rem;\"/></p>
                                                    <p><label for=\"plan_date_to\" style=\"width: 10rem\">Fecha fin:</label><input name=\"plan_date_to\" id=\"plan_date_to\" value=\"";
            // line 102
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["weekly_plans_dates"] ?? $this->getContext($context, "weekly_plans_dates")), $this->getAttribute($context["plan"], "idPlan", []), [], "array"), "date_to", [], "array"), "Y-m-d"), "html", null, true);
            echo "\" type=\"date\" style=\"margin: 0 0 0 10px;width: 22rem;\"/></p>
                                                    <input type=\"hidden\" class=\"hidden\" name=\"plan_dates_id\" id=\"customer_delete_";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute($context["plan"], "idPlan", []), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["plan"], "idPlan", []), "html", null, true);
            echo "\">
                                                </div>
                                                <div class=\"col-sm-12 inbox_send\">
                                                    <input type=\"submit\" name=\"submit\" class=\"btn btn-primary\" value=\"Modificar fechas\"/>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plan'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo "                </div>
            </div>
        </div>
    </section>
    ";
        // line 119
        $this->loadTemplate("footer.html.twig", "@Nutritionist/nutritionist-assigned-customer-plans.html.twig", 119)->display($context);
        // line 120
        echo "    </html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Nutritionist/nutritionist-assigned-customer-plans.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  312 => 120,  310 => 119,  304 => 115,  284 => 103,  280 => 102,  276 => 101,  269 => 97,  253 => 84,  245 => 81,  239 => 80,  235 => 79,  228 => 75,  219 => 71,  215 => 70,  209 => 68,  205 => 66,  196 => 64,  192 => 63,  189 => 62,  187 => 61,  182 => 58,  178 => 57,  174 => 55,  168 => 52,  164 => 51,  160 => 50,  156 => 49,  152 => 48,  148 => 47,  145 => 46,  143 => 45,  139 => 43,  133 => 41,  131 => 40,  127 => 39,  119 => 36,  113 => 33,  107 => 29,  97 => 25,  93 => 23,  88 => 22,  78 => 18,  74 => 16,  70 => 15,  65 => 12,  63 => 11,  57 => 8,  52 => 6,  46 => 2,  34 => 1,);
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
        <!-- Footer stylesheet-->
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/framework/css/footer.css') }}\" />
    </header>
    <section id=\"default-header\">
        {% include 'header.html.twig' %}
    </section>
    <section id=\"assigned-customer-plans-section\">
        <div class=\"container\">
            {% for message in  app.session.flashbag().get('customerPlanKOStatus') %}
                <div class=\"row\" style=\"width: 80%; margin-left: 10%; margin-top: -10px; margin-bottom: 10px;\">
                    <div class=\"alert alert-danger\" role=\"alert\" style=\"margin-bottom: 0\">
                        {{ message }}
                    </div>
                </div>
            {% endfor %}
            {% for message in  app.session.flashbag().get('customerPlanOKStatus') %}
                <div class=\"row\" style=\"width: 80%; margin-left: 10%; margin-top: -10px; margin-bottom: 10px;\">
                    <div class=\"alert alert-success\" role=\"alert\" style=\"margin-bottom: 0\">
                        {{ message }}
                    </div>
                </div>
            {% endfor %}
            <div class=\"assigned-customer-plans\">
                <h2 style=\"margin-top: -15px; margin-bottom: 15px; color: #00766c\">Planificaciones asociadas</h2>
                <div class=\"col-sm-3 customer-info\">
                    <div class=\"col-sm-12\" style=\"padding-left: 50px\">
                        <img src=\"{{ asset(customer.image) }}\" alt=\"\">
                    </div>
                    <div class=\"col-sm-12\">
                        <p><strong style=\"font-size: 35px;\">{{ customer.firstname }} {{ customer.lastname }}</strong></p>
                    </div>
                    <div class=\"col-sm-12\">
                        <p><strong>Email:</strong> {{ customer.email }}</p>
                        {% if metrics != false %}
                            <p><strong>Objetivos:</strong> {{ metrics.goals }}</p>
                        {% endif %}
                    </div>

                    {% if metrics != false %}
                        <div class=\"col-sm-12\">
                            <p><strong>Edad:</strong> {{ metrics.age }}</p>
                            <p><strong>Peso:</strong> {{ metrics.weight }}</p>
                            <p><strong>Edad:</strong> {{ metrics.weight }}</p>
                            <p><strong>% Grasa corporal:</strong> {{ metrics.fatPercentage }}</p>
                            <p><strong>% Masa muscular:</strong> {{ metrics.musclePercentage }}</p>
                            <p><strong>% Líquidos:</strong> {{ metrics.liquidPercentage }}</p>
                        </div>
                    {% endif %}
                </div>
                <div class=\"col-sm-9 customer-plans\">
                    {% for plan in plans %}
                        <div class=\"col-sm-12 plan-entry\">
                            <div class=\"col-sm-11 weekly-plan-resume\">
                                <h4>
                                    {% if plan.idPlan in weekly_plans_tags|keys %}
                                        <span>
                                                {% for tag in weekly_plans_tags[plan.idPlan] %}
                                                    {{ tag.name }} <span style=\"color: #00766c\">></span>
                                                {% endfor %}
                                            </span>
                                    {% endif %}
                                    <strong style=\"color: #00766c\">{{ plan.title}}</strong>
                                </h4>
                                <p>{{ plan.description }}</p>
                                <strong>{{ weekly_plans_dates[plan.idPlan]['date_from']|date('Y-m-d')}} - {{ weekly_plans_dates[plan.idPlan]['date_to']|date('Y-m-d')}}</strong>
                            </div>
                            <div class=\"col-sm-1 weekly-plan-actions\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-slash-circle\" viewBox=\"0 0 16 16\" style=\"margin-bottom: 15px;\"
                                    onclick=\"deleteCustomerWeeklyPlan({{ plan.idPlan }})\">
                                    <path d=\"M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z\"/>
                                    <path d=\"M11.354 4.646a.5.5 0 0 0-.708 0l-6 6a.5.5 0 0 0 .708.708l6-6a.5.5 0 0 0 0-.708z\"/>
                                </svg>
                                <form class=\"form\" action=\"{{ path(\"nutritionist_customer_delete_weekly_plan\") }}\" method=\"post\">
                                    <input type=\"submit\" class=\"hidden\" name=\"customer_plan_delete\" id=\"customer_plan_delete_{{ plan.idPlan }}\" value=\"{{ plan.idPlan }}\">
                                    <input type=\"hidden\" class=\"hidden\" name=\"customer_delete\" id=\"customer_delete_{{ customer.idUser }}\" value=\"{{ customer.idUser }}\">
                                </form>
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-pencil-square\" viewBox=\"0 0 16 16\" style=\"margin-bottom: 15px;\"
                                     onclick=\"redirectTo('nutritionist-edit-weekly-plan','/'+{{ plan.idPlan }})\">>
                                    <path d=\"M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z\"/>
                                    <path fill-rule=\"evenodd\" d=\"M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z\"/>
                                </svg>
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-calendar-week\" viewBox=\"0 0 16 16\"
                                    onclick=\"openModal('openChangeDatesModal')\">
                                    <path d=\"M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-5 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z\"/>
                                    <path d=\"M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z\"/>
                                </svg>
                                <button style=\"display: none\" type=\"button\" class=\"btn btn-primary\" id=\"openChangeDatesModal\" data-toggle=\"modal\" data-target=\"#changePlanDatesModal\"></button>
                                <div class=\"modal fade\" id=\"changePlanDatesModal\">
                                    <div class=\"modal-dialog\">
                                        <div class=\"modal-content\">
                                            <form id=\"msform\" action=\"{{ path(\"nutritionist_assigned_customer_plans\",{\"id_customer\":customer.idUser}) }}\" method=\"post\" novalidate>
                                                <!-- Modal body -->
                                                <h3 style=\"color: #00766c; text-align: center\">Modificar el rango de fechas</h3>
                                                <div class=\"col-sm-12\" style=\"padding: 15px; text-align: center\">
                                                    <p><label for=\"plan_date_from\" style=\"width: 10rem\">Fecha inicio:</label><input name=\"plan_date_from\" id=\"plan_date_from\" value=\"{{ weekly_plans_dates[plan.idPlan]['date_from']|date('Y-m-d')}}\" type=\"date\" style=\"margin: 0 0 10px 10px;width: 22rem;\"/></p>
                                                    <p><label for=\"plan_date_to\" style=\"width: 10rem\">Fecha fin:</label><input name=\"plan_date_to\" id=\"plan_date_to\" value=\"{{ weekly_plans_dates[plan.idPlan]['date_to']|date('Y-m-d')}}\" type=\"date\" style=\"margin: 0 0 0 10px;width: 22rem;\"/></p>
                                                    <input type=\"hidden\" class=\"hidden\" name=\"plan_dates_id\" id=\"customer_delete_{{ plan.idPlan }}\" value=\"{{ plan.idPlan }}\">
                                                </div>
                                                <div class=\"col-sm-12 inbox_send\">
                                                    <input type=\"submit\" name=\"submit\" class=\"btn btn-primary\" value=\"Modificar fechas\"/>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    {% endfor %}
                </div>
            </div>
        </div>
    </section>
    {% include 'footer.html.twig' %}
    </html>
{% endblock %}
", "@Nutritionist/nutritionist-assigned-customer-plans.html.twig", "/shared/httpd/nutrik/src/NutritionistBundle/Resources/views/nutritionist-assigned-customer-plans.html.twig");
    }
}
