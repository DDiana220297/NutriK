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

/* @Nutritionist/nutritionist-plans.html.twig */
class __TwigTemplate_2cea6f2f4fde4a3272253273b397491e15f118049922cb78e7f1667616aef83e extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Nutritionist/nutritionist-plans.html.twig"));

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
        $this->loadTemplate("header.html.twig", "@Nutritionist/nutritionist-plans.html.twig", 9)->display($context);
        // line 10
        echo "    </section>
    <section id=\"nutritionist-plans\">
        <div class=\"container\">
            <div class=\"col-sm-12\">
                <div id=\"plan-content-block\">
                    <div id=\"week-plan-buttons\">
                        <button class=\"btn btn-primary day-plan-button\" type=\"button\">Lunes</button>
                        <button class=\"btn btn-primary day-plan-button\" type=\"button\">Martes</button>
                        <button class=\"btn btn-primary day-plan-button\" type=\"button\">Miércoles</button>
                        <button class=\"btn btn-primary day-plan-button\" type=\"button\">Jueves</button>
                        <button class=\"btn btn-primary day-plan-button\" type=\"button\">Viernes</button>
                        <button class=\"btn btn-primary day-plan-button\" type=\"button\">Sabado</button>
                        <button class=\"btn btn-primary day-plan-button\" type=\"button\">Domingo</button>
                    </div>
                    <div id=\"day-plan-content\">
                        <div class=\"col-sm-9 \">
                            <div id=\"meals-buttons\">
                                <button class=\"btn btn-primary day-meal-button\" type=\"button\">Desayuno</button>
                                <button class=\"btn btn-primary day-meal-button\" type=\"button\">Snack</button>
                                <button class=\"btn btn-primary day-meal-button\" type=\"button\">Almuerzo</button>
                                <button class=\"btn btn-primary day-meal-button\" type=\"button\">Merienda</button>
                                <button class=\"btn btn-primary day-meal-button\" type=\"button\">Cena</button>
                            </div>
                            <div id=\"day-plan\">
                                <div class=\"col-sm-6\" style=\"padding: 20px\">
                                    <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input type=\"time\" id=\"hora\" name=\"hora\" min=\"09:00\" max=\"18:00\" required>
                                    <br/><br/>
                                    <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"_menu\" class=\"form-control\" style=\"height: 490px\"></textarea>
                                </div>
                                <div class=\"col-sm-6\" style=\"padding: 20px\">
                                    <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"_list\" class=\"form-control\" style=\"height: 250px\"></textarea>
                                    <br/><br/>
                                    <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"_comments\" class=\"form-control\" style=\"height: 220px\"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-3\">
                            <div class=\"workout-details\">
                                <label for=\"workout\">Detalles:</label>
                                <textarea type=\"text\" id=\"workout\" name=\"_workout\" class=\"form-control\" style=\"height: 220px\"></textarea>
                            </div>
                            <div class=\"workouts\">
                                <ul class=\"list-group\">
                                    <li class=\"list-group-item\">
                                        <input class=\"form-check-input me-1\" type=\"checkbox\" value=\"\" aria-label=\"...\">
                                        First checkbox
                                    </li>
                                    <li class=\"list-group-item\">
                                        <input class=\"form-check-input me-1\" type=\"checkbox\" value=\"\" aria-label=\"...\">
                                        Second checkbox
                                    </li>
                                    <li class=\"list-group-item\">
                                        <input class=\"form-check-input me-1\" type=\"checkbox\" value=\"\" aria-label=\"...\">
                                        Third checkbox
                                    </li>
                                    <li class=\"list-group-item\">
                                        <input class=\"form-check-input me-1\" type=\"checkbox\" value=\"\" aria-label=\"...\">
                                        Fourth checkbox
                                    </li>
                                    <li class=\"list-group-item\">
                                        <input class=\"form-check-input me-1\" type=\"checkbox\" value=\"\" aria-label=\"...\">
                                        Fifth checkbox
                                    </li>
                                </ul>
                            </div>
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
        return "@Nutritionist/nutritionist-plans.html.twig";
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
    <section id=\"nutritionist-plans\">
        <div class=\"container\">
            <div class=\"col-sm-12\">
                <div id=\"plan-content-block\">
                    <div id=\"week-plan-buttons\">
                        <button class=\"btn btn-primary day-plan-button\" type=\"button\">Lunes</button>
                        <button class=\"btn btn-primary day-plan-button\" type=\"button\">Martes</button>
                        <button class=\"btn btn-primary day-plan-button\" type=\"button\">Miércoles</button>
                        <button class=\"btn btn-primary day-plan-button\" type=\"button\">Jueves</button>
                        <button class=\"btn btn-primary day-plan-button\" type=\"button\">Viernes</button>
                        <button class=\"btn btn-primary day-plan-button\" type=\"button\">Sabado</button>
                        <button class=\"btn btn-primary day-plan-button\" type=\"button\">Domingo</button>
                    </div>
                    <div id=\"day-plan-content\">
                        <div class=\"col-sm-9 \">
                            <div id=\"meals-buttons\">
                                <button class=\"btn btn-primary day-meal-button\" type=\"button\">Desayuno</button>
                                <button class=\"btn btn-primary day-meal-button\" type=\"button\">Snack</button>
                                <button class=\"btn btn-primary day-meal-button\" type=\"button\">Almuerzo</button>
                                <button class=\"btn btn-primary day-meal-button\" type=\"button\">Merienda</button>
                                <button class=\"btn btn-primary day-meal-button\" type=\"button\">Cena</button>
                            </div>
                            <div id=\"day-plan\">
                                <div class=\"col-sm-6\" style=\"padding: 20px\">
                                    <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input type=\"time\" id=\"hora\" name=\"hora\" min=\"09:00\" max=\"18:00\" required>
                                    <br/><br/>
                                    <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"_menu\" class=\"form-control\" style=\"height: 490px\"></textarea>
                                </div>
                                <div class=\"col-sm-6\" style=\"padding: 20px\">
                                    <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"_list\" class=\"form-control\" style=\"height: 250px\"></textarea>
                                    <br/><br/>
                                    <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"_comments\" class=\"form-control\" style=\"height: 220px\"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-3\">
                            <div class=\"workout-details\">
                                <label for=\"workout\">Detalles:</label>
                                <textarea type=\"text\" id=\"workout\" name=\"_workout\" class=\"form-control\" style=\"height: 220px\"></textarea>
                            </div>
                            <div class=\"workouts\">
                                <ul class=\"list-group\">
                                    <li class=\"list-group-item\">
                                        <input class=\"form-check-input me-1\" type=\"checkbox\" value=\"\" aria-label=\"...\">
                                        First checkbox
                                    </li>
                                    <li class=\"list-group-item\">
                                        <input class=\"form-check-input me-1\" type=\"checkbox\" value=\"\" aria-label=\"...\">
                                        Second checkbox
                                    </li>
                                    <li class=\"list-group-item\">
                                        <input class=\"form-check-input me-1\" type=\"checkbox\" value=\"\" aria-label=\"...\">
                                        Third checkbox
                                    </li>
                                    <li class=\"list-group-item\">
                                        <input class=\"form-check-input me-1\" type=\"checkbox\" value=\"\" aria-label=\"...\">
                                        Fourth checkbox
                                    </li>
                                    <li class=\"list-group-item\">
                                        <input class=\"form-check-input me-1\" type=\"checkbox\" value=\"\" aria-label=\"...\">
                                        Fifth checkbox
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </html>
{% endblock %}
", "@Nutritionist/nutritionist-plans.html.twig", "/shared/httpd/nutrik/src/NutritionistBundle/Resources/views/nutritionist-plans.html.twig");
    }
}
