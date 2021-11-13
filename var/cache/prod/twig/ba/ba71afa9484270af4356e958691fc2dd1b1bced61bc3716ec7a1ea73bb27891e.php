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

/* @Nutritionist/edit-customer.html.twig */
class __TwigTemplate_36b1e53aaea600a7e918e27b32a0b49978e5d1fb8fd4a524bfdbfd38fbe6b8a5 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Nutritionist/edit-customer.html.twig"));

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
        $this->loadTemplate("header.html.twig", "@Nutritionist/edit-customer.html.twig", 9)->display($context);
        // line 10
        echo "    </section>
    <section id=\"nutritionist-add-customer\">
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "flashbag", [], "method"), "get", [0 => "addCustomerKOStatus"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 13
            echo "            <div class=\"row\" style=\"width: 91.3%; margin-left: 4.3%; margin-top: 10px; margin-bottom: -35px;\">
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
        echo "        <div class=\"container\">
            <div class=\"col-sm-12\">
                <div id=\"add-customer-block\">
                    <form class=\"form\" action=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nutritionist_edit_customer", ["id_user" => ($context["id_user"] ?? $this->getContext($context, "id_user"))]), "html", null, true);
        echo "\" method=\"post\">
                        <div class=\"col-sm-6\">
                            <div class=\"personal-data-header\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-person-circle\" viewBox=\"0 0 16 16\">
                                    <path d=\"M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z\"/>
                                    <path fill-rule=\"evenodd\" d=\"M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z\"/>
                                </svg>
                                <h3 style=\"display: inline-flex\">";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "firstname", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "lastname", []), "html", null, true);
        echo "</h3>
                            </div>
                            <br/>
                            <div class=\"personal-data-fields\" style=\"margin-left: 10%; width: 100%; padding: 10px\">
                                <label for=\"bibliografia\">Descripción / Bibliografía:</label><textarea type=\"text\" id=\"bibliografia\" name=\"bibliografia\" class=\"form-control\" style=\"height: 8rem\">";
        // line 33
        if ((($context["customer_metrics"] ?? $this->getContext($context, "customer_metrics")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "description", []), "html", null, true);
        }
        echo "</textarea>
                                <label for=\"objetivos\">Objetivos:</label><textarea type=\"text\" id=\"objetivos\" name=\"objetivos\" class=\"form-control\" style=\"height: 5rem\">";
        // line 34
        if ((($context["customer_metrics"] ?? $this->getContext($context, "customer_metrics")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["customer_metrics"] ?? $this->getContext($context, "customer_metrics")), "goals", []), "html", null, true);
        }
        echo "</textarea>
                                <p><strong>Rendimiento deportivo:</strong></p>
                                <div id=\"actividad\" style=\"display: inline-flex; width: 85%\">
                                    <label for=\"actividad\"></label>
                                    <select id=\"actividad\" name=\"actividad\" class=\"form-select\">
                                        <option value=\"1\" ";
        // line 39
        if (((($context["customer_metrics"] ?? $this->getContext($context, "customer_metrics")) != false) && ($this->getAttribute(($context["customer_metrics"] ?? $this->getContext($context, "customer_metrics")), "movement", []) == 1))) {
            echo "selected";
        }
        echo ">Bajo</option>
                                        <option value=\"2\" ";
        // line 40
        if (((($context["customer_metrics"] ?? $this->getContext($context, "customer_metrics")) != false) && ($this->getAttribute(($context["customer_metrics"] ?? $this->getContext($context, "customer_metrics")), "movement", []) == 2))) {
            echo "selected";
        }
        echo ">Moderado</option>
                                        <option value=\"3\" ";
        // line 41
        if (((($context["customer_metrics"] ?? $this->getContext($context, "customer_metrics")) != false) && ($this->getAttribute(($context["customer_metrics"] ?? $this->getContext($context, "customer_metrics")), "movement", []) == 3))) {
            echo "selected";
        }
        echo ">Activo</option>
                                        <option value=\"3\" ";
        // line 42
        if (((($context["customer_metrics"] ?? $this->getContext($context, "customer_metrics")) != false) && ($this->getAttribute(($context["customer_metrics"] ?? $this->getContext($context, "customer_metrics")), "movement", []) == 4))) {
            echo "selected";
        }
        echo ">Muy Activo</option>
                                    </select>
                                </div>
                                <p><strong>Metricas:</strong></p>
                                <div id=\"metricas\" style=\"display: inline-flex; width: 90%\">
                                    <label for=\"peso\"></label><input type=\"number\" id=\"peso\" name=\"peso\" class=\"form-control\" placeholder=\"peso\" value=\"";
        // line 47
        if ((($context["customer_metrics"] ?? $this->getContext($context, "customer_metrics")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["customer_metrics"] ?? $this->getContext($context, "customer_metrics")), "weight", []), "html", null, true);
        }
        echo "\"/>
                                    <label for=\"altura\"></label><input type=\"number\" id=\"altura\" name=\"altura\" class=\"form-control\" placeholder=\"altura\" value=\"";
        // line 48
        if ((($context["customer_metrics"] ?? $this->getContext($context, "customer_metrics")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["customer_metrics"] ?? $this->getContext($context, "customer_metrics")), "height", []), "html", null, true);
        }
        echo "\"/>
                                    <label for=\"edad\"></label><input type=\"number\" id=\"edad\" name=\"edad\" class=\"form-control\" placeholder=\"edad\" value=\"";
        // line 49
        if ((($context["customer_metrics"] ?? $this->getContext($context, "customer_metrics")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["customer_metrics"] ?? $this->getContext($context, "customer_metrics")), "age", []), "html", null, true);
        }
        echo "\"/>
                                </div>
                                <label for=\"fat-percentage\">% Grasa corporal:</label><input type=\"text\" id=\"fat-percentage\" name=\"fat_percentage\" class=\"form-control\" ";
        // line 51
        if ((($context["customer_metrics"] ?? $this->getContext($context, "customer_metrics")) != false)) {
            echo "value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["customer_metrics"] ?? $this->getContext($context, "customer_metrics")), "fatPercentage", []), "html", null, true);
            echo "\"";
        }
        echo "/>
                                <label for=\"muscle-percentage\">% Masa muscular:</label><input type=\"text\" id=\"muscle-percentage\" name=\"muscle_percentage\" class=\"form-control\" ";
        // line 52
        if ((($context["customer_metrics"] ?? $this->getContext($context, "customer_metrics")) != false)) {
            echo "value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["customer_metrics"] ?? $this->getContext($context, "customer_metrics")), "musclePercentage", []), "html", null, true);
            echo "\"";
        }
        echo "/>
                                <label for=\"liquids-percentage\">% Líquidos:</label><input type=\"text\" id=\"liquids-percentage\" name=\"liquids_percentage\" class=\"form-control\" ";
        // line 53
        if ((($context["customer_metrics"] ?? $this->getContext($context, "customer_metrics")) != false)) {
            echo "value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["customer_metrics"] ?? $this->getContext($context, "customer_metrics")), "liquidPercentage", []), "html", null, true);
            echo "\"";
        }
        echo "/>
                            </div>
                        </div>
                        <div class=\"col-sm-6\" style=\"display: inline-flex; margin-top: 5.4%\">
                            <div class=\"col-sm-12\">
                                <strong>Ultimos registros</strong>
                                <div class=\"col-sm-12 customer-metrics-records\">
                                    ";
        // line 60
        if ((($context["all_customer_metrics"] ?? $this->getContext($context, "all_customer_metrics")) != false)) {
            // line 61
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["all_customer_metrics"] ?? $this->getContext($context, "all_customer_metrics")));
            foreach ($context['_seq'] as $context["_key"] => $context["metrics"]) {
                // line 62
                echo "                                            <div class=\"alert record\" role=\"alert\">
                                                <span>
                                                    <strong>";
                // line 64
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["metrics"], "dateAdd", []), "Y-m-d H:i:s"), "html", null, true);
                echo "</strong>
                                                    <p style=\"margin-bottom: 5px\">Peso: ";
                // line 65
                echo twig_escape_filter($this->env, $this->getAttribute($context["metrics"], "weight", []), "html", null, true);
                echo " kg; Altura: ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["metrics"], "height", []), "html", null, true);
                echo " cm; Edad: ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["metrics"], "age", []), "html", null, true);
                echo " años;
                                                        % Grasa corporal: ";
                // line 66
                echo twig_escape_filter($this->env, $this->getAttribute($context["metrics"], "fatPercentage", []), "html", null, true);
                echo " %; % Masa muscular: ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["metrics"], "musclePercentage", []), "html", null, true);
                echo " %; % Líquidos: ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["metrics"], "liquidPercentage", []), "html", null, true);
                echo " %
                                                    </p>
                                                    <p>Rendimiento deportivo: ";
                // line 68
                if (($this->getAttribute($context["metrics"], "movement", []) == 1)) {
                    echo "Bajo";
                } elseif (($this->getAttribute($context["metrics"], "movement", []) == 2)) {
                    echo "Moderado";
                } elseif (($this->getAttribute($context["metrics"], "movement", []) == 3)) {
                    echo "Activo";
                } elseif (($this->getAttribute($context["metrics"], "movement", []) == 4)) {
                    echo "Muy Activo";
                }
                echo "</p>
                                                    <p>Objetivos: ";
                // line 69
                if (($this->getAttribute($context["metrics"], "goals", []) != "")) {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["metrics"], "goals", []), "html", null, true);
                } else {
                    echo "Sin definir";
                }
                echo "</p>
                                                </span>
                                            </div>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['metrics'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo "                                    ";
        } else {
            // line 74
            echo "                                        <div class=\"alert alert-info\" role=\"alert\">
                                            No hay registros para este cliente
                                        </div>
                                    ";
        }
        // line 78
        echo "                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-12\" style=\"display: inline-flex\">
                            <div class=\"save-button-item\" style=\"width: 100%; padding: 10px\">
                                <input class=\"btn save-button\" type=\"submit\" value=\"Guardar\"/>
                            </div>
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
        return "@Nutritionist/edit-customer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  266 => 78,  260 => 74,  257 => 73,  243 => 69,  231 => 68,  222 => 66,  214 => 65,  210 => 64,  206 => 62,  201 => 61,  199 => 60,  185 => 53,  177 => 52,  169 => 51,  162 => 49,  156 => 48,  150 => 47,  140 => 42,  134 => 41,  128 => 40,  122 => 39,  112 => 34,  106 => 33,  97 => 29,  87 => 22,  82 => 19,  72 => 15,  68 => 13,  64 => 12,  60 => 10,  58 => 9,  52 => 6,  46 => 2,  34 => 1,);
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
    <section id=\"nutritionist-add-customer\">
        {% for message in  app.session.flashbag().get('addCustomerKOStatus') %}
            <div class=\"row\" style=\"width: 91.3%; margin-left: 4.3%; margin-top: 10px; margin-bottom: -35px;\">
                <div class=\"alert alert-danger\" role=\"alert\" style=\"margin-bottom: 0\">
                    {{ message }}
                </div>
            </div>
        {% endfor %}
        <div class=\"container\">
            <div class=\"col-sm-12\">
                <div id=\"add-customer-block\">
                    <form class=\"form\" action=\"{{ path(\"nutritionist_edit_customer\",{\"id_user\":id_user}) }}\" method=\"post\">
                        <div class=\"col-sm-6\">
                            <div class=\"personal-data-header\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-person-circle\" viewBox=\"0 0 16 16\">
                                    <path d=\"M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z\"/>
                                    <path fill-rule=\"evenodd\" d=\"M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z\"/>
                                </svg>
                                <h3 style=\"display: inline-flex\">{{customer.firstname}} {{ customer.lastname }}</h3>
                            </div>
                            <br/>
                            <div class=\"personal-data-fields\" style=\"margin-left: 10%; width: 100%; padding: 10px\">
                                <label for=\"bibliografia\">Descripción / Bibliografía:</label><textarea type=\"text\" id=\"bibliografia\" name=\"bibliografia\" class=\"form-control\" style=\"height: 8rem\">{% if customer_metrics != false %}{{ customer.description }}{% endif %}</textarea>
                                <label for=\"objetivos\">Objetivos:</label><textarea type=\"text\" id=\"objetivos\" name=\"objetivos\" class=\"form-control\" style=\"height: 5rem\">{% if customer_metrics != false %}{{ customer_metrics.goals }}{% endif %}</textarea>
                                <p><strong>Rendimiento deportivo:</strong></p>
                                <div id=\"actividad\" style=\"display: inline-flex; width: 85%\">
                                    <label for=\"actividad\"></label>
                                    <select id=\"actividad\" name=\"actividad\" class=\"form-select\">
                                        <option value=\"1\" {% if customer_metrics != false and customer_metrics.movement == 1 %}selected{% endif %}>Bajo</option>
                                        <option value=\"2\" {% if customer_metrics != false and customer_metrics.movement == 2 %}selected{% endif %}>Moderado</option>
                                        <option value=\"3\" {% if customer_metrics != false and customer_metrics.movement == 3 %}selected{% endif %}>Activo</option>
                                        <option value=\"3\" {% if customer_metrics != false and customer_metrics.movement == 4 %}selected{% endif %}>Muy Activo</option>
                                    </select>
                                </div>
                                <p><strong>Metricas:</strong></p>
                                <div id=\"metricas\" style=\"display: inline-flex; width: 90%\">
                                    <label for=\"peso\"></label><input type=\"number\" id=\"peso\" name=\"peso\" class=\"form-control\" placeholder=\"peso\" value=\"{% if customer_metrics != false %}{{ customer_metrics.weight }}{% endif %}\"/>
                                    <label for=\"altura\"></label><input type=\"number\" id=\"altura\" name=\"altura\" class=\"form-control\" placeholder=\"altura\" value=\"{% if customer_metrics != false %}{{ customer_metrics.height }}{% endif %}\"/>
                                    <label for=\"edad\"></label><input type=\"number\" id=\"edad\" name=\"edad\" class=\"form-control\" placeholder=\"edad\" value=\"{% if customer_metrics != false %}{{ customer_metrics.age }}{% endif %}\"/>
                                </div>
                                <label for=\"fat-percentage\">% Grasa corporal:</label><input type=\"text\" id=\"fat-percentage\" name=\"fat_percentage\" class=\"form-control\" {% if customer_metrics != false %}value=\"{{ customer_metrics.fatPercentage }}\"{% endif %}/>
                                <label for=\"muscle-percentage\">% Masa muscular:</label><input type=\"text\" id=\"muscle-percentage\" name=\"muscle_percentage\" class=\"form-control\" {% if customer_metrics != false %}value=\"{{ customer_metrics.musclePercentage }}\"{% endif %}/>
                                <label for=\"liquids-percentage\">% Líquidos:</label><input type=\"text\" id=\"liquids-percentage\" name=\"liquids_percentage\" class=\"form-control\" {% if customer_metrics != false %}value=\"{{ customer_metrics.liquidPercentage }}\"{% endif %}/>
                            </div>
                        </div>
                        <div class=\"col-sm-6\" style=\"display: inline-flex; margin-top: 5.4%\">
                            <div class=\"col-sm-12\">
                                <strong>Ultimos registros</strong>
                                <div class=\"col-sm-12 customer-metrics-records\">
                                    {% if all_customer_metrics != false %}
                                        {% for metrics in all_customer_metrics %}
                                            <div class=\"alert record\" role=\"alert\">
                                                <span>
                                                    <strong>{{ metrics.dateAdd|date('Y-m-d H:i:s') }}</strong>
                                                    <p style=\"margin-bottom: 5px\">Peso: {{ metrics.weight }} kg; Altura: {{ metrics.height }} cm; Edad: {{ metrics.age }} años;
                                                        % Grasa corporal: {{ metrics.fatPercentage }} %; % Masa muscular: {{ metrics.musclePercentage }} %; % Líquidos: {{ metrics.liquidPercentage }} %
                                                    </p>
                                                    <p>Rendimiento deportivo: {% if metrics.movement == 1 %}Bajo{% elseif metrics.movement == 2 %}Moderado{% elseif metrics.movement == 3 %}Activo{% elseif metrics.movement == 4 %}Muy Activo{% endif %}</p>
                                                    <p>Objetivos: {% if metrics.goals != \"\" %}{{ metrics.goals }}{% else %}Sin definir{% endif %}</p>
                                                </span>
                                            </div>
                                        {% endfor %}
                                    {% else %}
                                        <div class=\"alert alert-info\" role=\"alert\">
                                            No hay registros para este cliente
                                        </div>
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-12\" style=\"display: inline-flex\">
                            <div class=\"save-button-item\" style=\"width: 100%; padding: 10px\">
                                <input class=\"btn save-button\" type=\"submit\" value=\"Guardar\"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    </html>
{% endblock %}
", "@Nutritionist/edit-customer.html.twig", "/shared/httpd/nutrik/src/NutritionistBundle/Resources/views/edit-customer.html.twig");
    }
}
