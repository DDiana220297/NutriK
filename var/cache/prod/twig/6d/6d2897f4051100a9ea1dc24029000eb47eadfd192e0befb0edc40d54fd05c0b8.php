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

/* @Customer/plan.html.twig */
class __TwigTemplate_861a0c29ab762b9362c3953c372f0d0043d42700a26766a7c04c1d88f9a8121c extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Customer/plan.html.twig"));

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
        $this->loadTemplate("header.html.twig", "@Customer/plan.html.twig", 9)->display($context);
        // line 10
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/wizard-plan-form.css"), "html", null, true);
        echo "\" />
        <!-- Wizard Form JS -->
        <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/js/wizard-plan.js"), "html", null, true);
        echo "\"></script>
    </section>
    <section id=\"nutritionist-weekly-plan\">
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "flashbag", [], "method"), "get", [0 => "editWeeklyPlanWarnings"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 16
            echo "            <div class=\"row\" style=\"width: 92%; margin-left: 4%; margin-top: 10px; margin-bottom: 0;\">
                <div class=\"alert alert-warning\" role=\"alert\" style=\"margin-bottom: 0\">
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
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "flashbag", [], "method"), "get", [0 => "editWeeklyPlanKOStatus"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 23
            echo "            <div class=\"row\" style=\"width: 92%; margin-left: 4%; margin-top: 10px; margin-bottom: 0;\">
                <div class=\"alert alert-danger\" role=\"alert\" style=\"margin-bottom: 0\">
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
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "flashbag", [], "method"), "get", [0 => "editWeeklyPlanOKStatus"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 30
            echo "            <div class=\"row\" style=\"width: 92%; margin-left: 4%; margin-top: 10px; margin-bottom: 0;\">
                <div class=\"alert alert-success\" role=\"alert\" style=\"margin-bottom: 0\">
                    ";
            // line 32
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "        <div class=\"container\">
            <!-- Añadimos un novalidate debido a los contenedores ocultos, mostraremos el error con la variable de sesion -->
            <form id=\"msform\" class=\"form\" action=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nutritionist_edit_weekly_plan", ["id_plan" => $this->getAttribute(($context["weeklyPlan"] ?? $this->getContext($context, "weeklyPlan")), "idPlan", [])]), "html", null, true);
        echo "\" method=\"post\" novalidate>
                <div class=\"col-sm-12\">
                    <div id=\"weekly-plan-content-block\" style=\"height: 11rem; margin-bottom: 20px\">
                        <div class=\"col-sm-12\">
                            <h4><span>
                                    ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tags"] ?? $this->getContext($context, "tags")));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 44
            echo "                                        ";
            if (twig_in_filter($this->getAttribute($context["tag"], "idTag", []), ($context["weekly_plan_tags_keys"] ?? $this->getContext($context, "weekly_plan_tags_keys")))) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "name", []), "html", null, true);
                echo " <span style=\"color: #00766c\">></span> ";
            }
            // line 45
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "                                </span>
                                <br/>
                                <strong style=\"color: #00766c\">";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute(($context["weeklyPlan"] ?? $this->getContext($context, "weeklyPlan")), "title", []), "html", null, true);
        echo "</strong>
                                <br/><br/>
                                <p>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute(($context["weeklyPlan"] ?? $this->getContext($context, "weeklyPlan")), "description", []), "html", null, true);
        echo "</p>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-12\">
                    <div id=\"weekly-plan-content-block\">
                        <div class=\"col-sm-12\">
                            <!-- progressbar -->
                            <ul id=\"progressbar\">
                                <li class=\"active\" id=\"monday\"><strong>Lunes</strong></li>
                                <li id=\"tuesday\"><strong>Martes</strong></li>
                                <li id=\"wednesday\"><strong>Miércoles</strong></li>
                                <li id=\"thursday\"><strong>Jueves</strong></li>
                                <li id=\"friday\"><strong>Viernes</strong></li>
                                <li id=\"saturday\"><strong>Sábado</strong></li>
                                <li id=\"sunday\"><strong>Domingo</strong></li>
                            </ul>

                            <!-- LUNES -->
                            <fieldset>
                                <div class=\"form-card\">
                                    <div class=\"col-sm-9 \">
                                        <div id=\"meals-buttons\">
                                            <button style=\"margin-left: 1px\" class=\"btn btn-primary day-meal-button day-meal-button-active\" type=\"button\">Desayuno</button>
                                            <button class=\"btn btn-primary day-meal-button\" type=\"button\">Snack</button>
                                            <button class=\"btn btn-primary day-meal-button\" type=\"button\">Almuerzo</button>
                                            <button class=\"btn btn-primary day-meal-button\" type=\"button\">Merienda</button>
                                            <button class=\"btn btn-primary day-meal-button\" type=\"button\">Cena</button>
                                        </div>
                                        <div class=\"day-plan-breakfast day-plan day-meal-visible\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input disabled=\"disabled\" style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"breakfast_hour_monday\" value=\"";
        // line 82
        if ((($context["monday_breakfast"] ?? $this->getContext($context, "monday_breakfast")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["monday_breakfast"] ?? $this->getContext($context, "monday_breakfast")), "hour", []), "html", null, true);
        } else {
            echo "08:30";
        }
        echo "\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" disabled=\"disabled\" id=\"menu\" name=\"breakfast_menu_monday\" class=\"form-control\" style=\"height: 430px\">";
        // line 84
        if ((($context["monday_breakfast"] ?? $this->getContext($context, "monday_breakfast")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["monday_breakfast"] ?? $this->getContext($context, "monday_breakfast")), "meal", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista de la compra:</label><textarea type=\"text\" disabled=\"disabled\" id=\"list\" name=\"breakfast_list_monday\" class=\"form-control\" style=\"height: 225px\">";
        // line 87
        if ((($context["monday_breakfast"] ?? $this->getContext($context, "monday_breakfast")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["monday_breakfast"] ?? $this->getContext($context, "monday_breakfast")), "mealShoppingList", []), "html", null, true);
        }
        echo "</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" disabled=\"disabled\" id=\"comments\" name=\"breakfast_comments_monday\" class=\"form-control\" style=\"height: 186px\">";
        // line 89
        if ((($context["monday_breakfast"] ?? $this->getContext($context, "monday_breakfast")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["monday_breakfast"] ?? $this->getContext($context, "monday_breakfast")), "mealNotes", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-snack day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input disabled=\"disabled\" style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"snack_hour_monday\" value=\"";
        // line 94
        if ((($context["monday_snack"] ?? $this->getContext($context, "monday_snack")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["monday_snack"] ?? $this->getContext($context, "monday_snack")), "hour", []), "html", null, true);
        } else {
            echo "11:30";
        }
        echo "\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" disabled=\"disabled\" id=\"menu\" name=\"snack_menu_monday\" class=\"form-control\" style=\"height: 430px\">";
        // line 96
        if ((($context["monday_snack"] ?? $this->getContext($context, "monday_snack")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["monday_snack"] ?? $this->getContext($context, "monday_snack")), "meal", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista de la compra:</label><textarea type=\"text\" disabled=\"disabled\" id=\"list\" name=\"snack_list_monday\" class=\"form-control\" style=\"height: 225px\">";
        // line 99
        if ((($context["monday_snack"] ?? $this->getContext($context, "monday_snack")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["monday_snack"] ?? $this->getContext($context, "monday_snack")), "mealShoppingList", []), "html", null, true);
        }
        echo "</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" disabled=\"disabled\" id=\"comments\" name=\"snack_comments_monday\" class=\"form-control\" style=\"height: 186px\">";
        // line 101
        if ((($context["monday_snack"] ?? $this->getContext($context, "monday_snack")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["monday_snack"] ?? $this->getContext($context, "monday_snack")), "mealNotes", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-lunch day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input disabled=\"disabled\" style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"lunch_hour_monday\" value=\"";
        // line 106
        if ((($context["monday_lunch"] ?? $this->getContext($context, "monday_lunch")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["monday_lunch"] ?? $this->getContext($context, "monday_lunch")), "hour", []), "html", null, true);
        } else {
            echo "14:00";
        }
        echo "\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" disabled=\"disabled\" id=\"menu\" name=\"lunch_menu_monday\" class=\"form-control\" style=\"height: 430px\">";
        // line 108
        if ((($context["monday_lunch"] ?? $this->getContext($context, "monday_lunch")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["monday_lunch"] ?? $this->getContext($context, "monday_lunch")), "meal", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista de la compra:</label><textarea type=\"text\" disabled=\"disabled\" id=\"list\" name=\"lunch_list_monday\" class=\"form-control\" style=\"height: 225px\">";
        // line 111
        if ((($context["monday_lunch"] ?? $this->getContext($context, "monday_lunch")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["monday_lunch"] ?? $this->getContext($context, "monday_lunch")), "mealShoppingList", []), "html", null, true);
        }
        echo "</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" disabled=\"disabled\" id=\"comments\" name=\"lunch_comments_monday\" class=\"form-control\" style=\"height: 186px\">";
        // line 113
        if ((($context["monday_lunch"] ?? $this->getContext($context, "monday_lunch")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["monday_lunch"] ?? $this->getContext($context, "monday_lunch")), "mealNotes", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-afternoon day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input disabled=\"disabled\" style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"afternoon_hour_monday\" value=\"";
        // line 118
        if ((($context["monday_afternoon"] ?? $this->getContext($context, "monday_afternoon")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["monday_afternoon"] ?? $this->getContext($context, "monday_afternoon")), "hour", []), "html", null, true);
        } else {
            echo "17:30";
        }
        echo "\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" disabled=\"disabled\" id=\"menu\" name=\"afternoon_menu_monday\" class=\"form-control\" style=\"height: 430px\">";
        // line 120
        if ((($context["monday_afternoon"] ?? $this->getContext($context, "monday_afternoon")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["monday_afternoon"] ?? $this->getContext($context, "monday_afternoon")), "meal", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista de la compra:</label><textarea type=\"text\" disabled=\"disabled\" id=\"list\" name=\"afternoon_list_monday\" class=\"form-control\" style=\"height: 225px\">";
        // line 123
        if ((($context["monday_afternoon"] ?? $this->getContext($context, "monday_afternoon")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["monday_afternoon"] ?? $this->getContext($context, "monday_afternoon")), "mealShoppingList", []), "html", null, true);
        }
        echo "</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" disabled=\"disabled\" id=\"comments\" name=\"afternoon_comments_monday\" class=\"form-control\" style=\"height: 186px\">";
        // line 125
        if ((($context["monday_afternoon"] ?? $this->getContext($context, "monday_afternoon")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["monday_afternoon"] ?? $this->getContext($context, "monday_afternoon")), "mealNotes", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-dinner day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input disabled=\"disabled\" style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"dinner_hour_monday\" value=\"";
        // line 130
        if ((($context["monday_dinner"] ?? $this->getContext($context, "monday_dinner")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["monday_dinner"] ?? $this->getContext($context, "monday_dinner")), "hour", []), "html", null, true);
        } else {
            echo "21:00";
        }
        echo "\" min=\"09:00\" max=\"22:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" disabled=\"disabled\" id=\"menu\" name=\"dinner_menu_monday\" class=\"form-control\" style=\"height: 430px\">";
        // line 132
        if ((($context["monday_dinner"] ?? $this->getContext($context, "monday_dinner")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["monday_dinner"] ?? $this->getContext($context, "monday_dinner")), "meal", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista de la compra:</label><textarea type=\"text\" disabled=\"disabled\" id=\"list\" name=\"dinner_list_monday\" class=\"form-control\" style=\"height: 225px\">";
        // line 135
        if ((($context["monday_dinner"] ?? $this->getContext($context, "monday_dinner")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["monday_dinner"] ?? $this->getContext($context, "monday_dinner")), "mealShoppingList", []), "html", null, true);
        }
        echo "</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" disabled=\"disabled\" id=\"comments\" name=\"dinner_comments_monday\" class=\"form-control\" style=\"height: 186px\">";
        // line 137
        if ((($context["monday_dinner"] ?? $this->getContext($context, "monday_dinner")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["monday_dinner"] ?? $this->getContext($context, "monday_dinner")), "mealNotes", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-sm-3\">
                                        <div class=\"workout-rest\">
                                            <input disabled=\"disabled\" type=\"checkbox\" value=\"1\" style=\"width: fit-content; margin-bottom: 10px; margin-top: 10px; margin-right: 10px\" name=\"monday_workout_rest\" id=\"monday-workout-rest\" ";
        // line 143
        if ((($context["monday_workout"] ?? $this->getContext($context, "monday_workout")) == false)) {
            echo " checked ";
        }
        echo " onclick=\"restDay('monday')\"><strong>Descanso</strong>
                                        </div>
                                        <div class=\"monday-workout\"  ";
        // line 145
        if ((($context["monday_workout"] ?? $this->getContext($context, "monday_workout")) == false)) {
            echo " style=\"display: none\" ";
        }
        echo ">
                                            <br/>
                                            <label for=\"monday_workout_sort\">Tipo de entrenamiento:</label>
                                            <select name=\"monday_workout_sort\" id=\"monday_workout_sort\">
                                                <option value=\"Fuerza Tren Superior\">Fuerza Tren Superior</option>
                                                <option value=\"Fuerza Tren Inferior\">Fuerza Tren Inferior</option>
                                                <option value=\"Cardio\">Cardio</option>
                                                <option value=\"HIIT\">HIIT</option>
                                                <option value=\"Relajacion\">Relajación</option>
                                            </select>
                                            <br/><br/>
                                            <label for=\"monday_workout_time\">Hora:</label>
                                            <input disabled=\"disabled\" type=\"time\" name=\"monday_workout_time\" value=\"";
        // line 157
        if ((($context["monday_workout"] ?? $this->getContext($context, "monday_workout")) != false)) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["monday_workout"] ?? $this->getContext($context, "monday_workout")), "hour", []), "H:i:s"), "html", null, true);
        }
        echo "\" style=\"width: fit-content\">
                                            <label for=\"monday-workout\">Entrenamiento:</label>
                                            <textarea type=\"text\" disabled=\"disabled\" id=\"monday-workout\" name=\"monday_workout\" class=\"form-control\" style=\"height: 150px\">";
        // line 159
        if ((($context["monday_workout"] ?? $this->getContext($context, "monday_workout")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["monday_workout"] ?? $this->getContext($context, "monday_workout")), "workout", []), "html", null, true);
        }
        echo "</textarea>
                                            <br/>
                                            <ul class=\"list-group\" id=\"monday-workout-exercises\">
                                                ";
        // line 162
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["exercises"] ?? $this->getContext($context, "exercises")));
        foreach ($context['_seq'] as $context["_key"] => $context["exercise"]) {
            // line 163
            echo "                                                    <li>
                                                        <input disabled=\"disabled\" type=\"checkbox\" value=\"";
            // line 164
            echo twig_escape_filter($this->env, $this->getAttribute($context["exercise"], "idExercise", []), "html", null, true);
            echo "\" style=\"width: fit-content; margin-bottom: 10px; margin-top: 10px\" name=\"monday_workout_exercises[";
            echo twig_escape_filter($this->env, $this->getAttribute($context["exercise"], "idExercise", []), "html", null, true);
            echo "][]\" ";
            if (((($context["monday_workout"] ?? $this->getContext($context, "monday_workout")) != false) && twig_in_filter($this->getAttribute($context["exercise"], "idExercise", []), ($context["monday_workout_exercises"] ?? $this->getContext($context, "monday_workout_exercises"))))) {
                echo "checked";
            }
            echo ">
                                                        ";
            // line 165
            echo twig_escape_filter($this->env, $this->getAttribute($context["exercise"], "title", []), "html", null, true);
            echo "
                                                    </li>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['exercise'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 168
        echo "                                            </ul>
                                            <label for=\"monday-workout-notes\">Observaciones:</label>
                                            <textarea type=\"text\" disabled=\"disabled\" id=\"monday-workout-notes\" name=\"monday_workout_notes\" class=\"form-control\" style=\"height: 80px\">";
        // line 170
        if ((($context["monday_workout"] ?? $this->getContext($context, "monday_workout")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["monday_workout"] ?? $this->getContext($context, "monday_workout")), "workoutNotes", []), "html", null, true);
        }
        echo "</textarea>
                                        </div>
                                    </div>
                                </div>
                                <input type=\"button\" name=\"next\" class=\"next action-button\" value=\"Siguiente\"/>
                            </fieldset>
                            <!-- MARTES -->
                            <fieldset>
                                <div class=\"form-card\">
                                    <div class=\"col-sm-9 \">
                                        <div id=\"meals-buttons\">
                                            <button style=\"margin-left: 1px\" class=\"btn btn-primary day-meal-button day-meal-button-active\" type=\"button\">Desayuno</button>
                                            <button class=\"btn btn-primary day-meal-button\" type=\"button\">Snack</button>
                                            <button class=\"btn btn-primary day-meal-button\" type=\"button\">Almuerzo</button>
                                            <button class=\"btn btn-primary day-meal-button\" type=\"button\">Merienda</button>
                                            <button class=\"btn btn-primary day-meal-button\" type=\"button\">Cena</button>
                                        </div>
                                        <div class=\"day-plan-breakfast day-plan day-plan-visible\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input disabled=\"disabled\" style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"breakfast_hour_tuesday\" value=\"";
        // line 189
        if ((($context["tuesday_breakfast"] ?? $this->getContext($context, "tuesday_breakfast")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["tuesday_breakfast"] ?? $this->getContext($context, "tuesday_breakfast")), "hour", []), "html", null, true);
        } else {
            echo "08:00";
        }
        echo "\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" disabled=\"disabled\" id=\"menu\" name=\"breakfast_menu_tuesday\" class=\"form-control\" style=\"height: 430px\">";
        // line 191
        if ((($context["tuesday_breakfast"] ?? $this->getContext($context, "tuesday_breakfast")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["tuesday_breakfast"] ?? $this->getContext($context, "tuesday_breakfast")), "meal", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista de la compra:</label><textarea type=\"text\" disabled=\"disabled\" id=\"list\" name=\"breakfast_list_tuesday\" class=\"form-control\" style=\"height: 225px\">";
        // line 194
        if ((($context["tuesday_breakfast"] ?? $this->getContext($context, "tuesday_breakfast")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["tuesday_breakfast"] ?? $this->getContext($context, "tuesday_breakfast")), "mealShoppingList", []), "html", null, true);
        }
        echo "</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" disabled=\"disabled\" id=\"comments\" name=\"breakfast_comments_tuesday\" class=\"form-control\" style=\"height: 186px\">";
        // line 196
        if ((($context["tuesday_breakfast"] ?? $this->getContext($context, "tuesday_breakfast")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["tuesday_breakfast"] ?? $this->getContext($context, "tuesday_breakfast")), "mealShoppingList", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-snack day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input disabled=\"disabled\" style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"snack_hour_tuesday\" value=\"";
        // line 201
        if ((($context["tuesday_snack"] ?? $this->getContext($context, "tuesday_snack")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["tuesday_snack"] ?? $this->getContext($context, "tuesday_snack")), "hour", []), "html", null, true);
        } else {
            echo "11:30";
        }
        echo "\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" disabled=\"disabled\" id=\"menu\" name=\"snack_menu_tuesday\" class=\"form-control\" style=\"height: 430px\">";
        // line 203
        if ((($context["tuesday_snack"] ?? $this->getContext($context, "tuesday_snack")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["tuesday_snack"] ?? $this->getContext($context, "tuesday_snack")), "meal", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista de la compra:</label><textarea type=\"text\" disabled=\"disabled\" id=\"list\" name=\"snack_list_tuesday\" class=\"form-control\" style=\"height: 225px\">";
        // line 206
        if ((($context["tuesday_snack"] ?? $this->getContext($context, "tuesday_snack")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["tuesday_snack"] ?? $this->getContext($context, "tuesday_snack")), "mealShoppingList", []), "html", null, true);
        }
        echo "</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" disabled=\"disabled\" id=\"comments\" name=\"snack_comments_tuesday\" class=\"form-control\" style=\"height: 186px\">";
        // line 208
        if ((($context["tuesday_snack"] ?? $this->getContext($context, "tuesday_snack")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["tuesday_snack"] ?? $this->getContext($context, "tuesday_snack")), "mealNotes", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-lunch day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input disabled=\"disabled\" style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"lunch_hour_tuesday\" value=\"";
        // line 213
        if ((($context["tuesday_lunch"] ?? $this->getContext($context, "tuesday_lunch")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["tuesday_lunch"] ?? $this->getContext($context, "tuesday_lunch")), "hour", []), "html", null, true);
        } else {
            echo "14:00";
        }
        echo "\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" disabled=\"disabled\" id=\"menu\" name=\"lunch_menu_tuesday\" class=\"form-control\" style=\"height: 430px\">";
        // line 215
        if ((($context["tuesday_lunch"] ?? $this->getContext($context, "tuesday_lunch")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["tuesday_lunch"] ?? $this->getContext($context, "tuesday_lunch")), "meal", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista de la compra:</label><textarea type=\"text\" disabled=\"disabled\" id=\"list\" name=\"lunch_list_tuesday\" class=\"form-control\" style=\"height: 225px\">";
        // line 218
        if ((($context["tuesday_lunch"] ?? $this->getContext($context, "tuesday_lunch")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["tuesday_lunch"] ?? $this->getContext($context, "tuesday_lunch")), "mealShoppingList", []), "html", null, true);
        }
        echo "</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" disabled=\"disabled\" id=\"comments\" name=\"lunch_comments_tuesday\" class=\"form-control\" style=\"height: 186px\">";
        // line 220
        if ((($context["tuesday_lunch"] ?? $this->getContext($context, "tuesday_lunch")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["tuesday_lunch"] ?? $this->getContext($context, "tuesday_lunch")), "mealNotes", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-afternoon day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input disabled=\"disabled\" style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"afternoon_hour_tuesday\" value=\"";
        // line 225
        if ((($context["tuesday_afternoon"] ?? $this->getContext($context, "tuesday_afternoon")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["tuesday_afternoon"] ?? $this->getContext($context, "tuesday_afternoon")), "hour", []), "html", null, true);
        } else {
            echo "17:30";
        }
        echo "\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" disabled=\"disabled\" id=\"menu\" name=\"afternoon_menu_tuesday\" class=\"form-control\" style=\"height: 430px\">";
        // line 227
        if ((($context["tuesday_afternoon"] ?? $this->getContext($context, "tuesday_afternoon")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["tuesday_afternoon"] ?? $this->getContext($context, "tuesday_afternoon")), "meal", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista de la compra:</label><textarea type=\"text\" disabled=\"disabled\" id=\"list\" name=\"afternoon_list_tuesday\" class=\"form-control\" style=\"height: 225px\">";
        // line 230
        if ((($context["tuesday_afternoon"] ?? $this->getContext($context, "tuesday_afternoon")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["tuesday_afternoon"] ?? $this->getContext($context, "tuesday_afternoon")), "mealShoppingList", []), "html", null, true);
        }
        echo "</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" disabled=\"disabled\" id=\"comments\" name=\"afternoon_comments_tuesday\" class=\"form-control\" style=\"height: 186px\">";
        // line 232
        if ((($context["tuesday_afternoon"] ?? $this->getContext($context, "tuesday_afternoon")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["tuesday_afternoon"] ?? $this->getContext($context, "tuesday_afternoon")), "mealNotes", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-dinner day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input disabled=\"disabled\" style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"dinner_hour_tuesday\" value=\"";
        // line 237
        if ((($context["tuesday_dinner"] ?? $this->getContext($context, "tuesday_dinner")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["tuesday_dinner"] ?? $this->getContext($context, "tuesday_dinner")), "hour", []), "html", null, true);
        } else {
            echo "21:00";
        }
        echo "\" min=\"09:00\" max=\"22:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" disabled=\"disabled\" id=\"menu\" name=\"dinner_menu_tuesday\" class=\"form-control\" style=\"height: 430px\">";
        // line 239
        if ((($context["tuesday_dinner"] ?? $this->getContext($context, "tuesday_dinner")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["tuesday_dinner"] ?? $this->getContext($context, "tuesday_dinner")), "meal", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista de la compra:</label><textarea type=\"text\" disabled=\"disabled\" id=\"list\" name=\"dinner_list_tuesday\" class=\"form-control\" style=\"height: 225px\">";
        // line 242
        if ((($context["tuesday_dinner"] ?? $this->getContext($context, "tuesday_dinner")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["tuesday_dinner"] ?? $this->getContext($context, "tuesday_dinner")), "mealShoppingList", []), "html", null, true);
        }
        echo "</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" disabled=\"disabled\" id=\"comments\" name=\"dinner_comments_tuesday\" class=\"form-control\" style=\"height: 186px\">";
        // line 244
        if ((($context["tuesday_dinner"] ?? $this->getContext($context, "tuesday_dinner")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["tuesday_dinner"] ?? $this->getContext($context, "tuesday_dinner")), "mealNotes", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-sm-3\">
                                        <div class=\"workout-rest\">
                                            <input disabled=\"disabled\" type=\"checkbox\" value=\"1\" style=\"width: fit-content; margin-bottom: 10px; margin-top: 10px; margin-right: 10px\" name=\"tuesday_workout_rest\" id=\"tuesday-workout-rest\"  ";
        // line 250
        if ((($context["tuesday_workout"] ?? $this->getContext($context, "tuesday_workout")) == false)) {
            echo " checked ";
        }
        echo "onclick=\"restDay('tuesday')\"><strong>Descanso</strong>
                                        </div>
                                        <div class=\"tuesday-workout\" ";
        // line 252
        if ((($context["tuesday_workout"] ?? $this->getContext($context, "tuesday_workout")) == false)) {
            echo " style=\"display: none\" ";
        }
        echo ">
                                            <br/>
                                            <label for=\"tuesday_workout_sort\">Tipo de entrenamiento:</label>
                                            <select name=\"tuesday_workout_sort\" id=\"tuesday_workout_sort\">
                                                <option value=\"Fuerza Tren Superior\">Fuerza Tren Superior</option>
                                                <option value=\"Fuerza Tren Inferior\">Fuerza Tren Inferior</option>
                                                <option value=\"Cardio\">Cardio</option>
                                                <option value=\"HIIT\">HIIT</option>
                                                <option value=\"Relajacion\">Relajación</option>
                                            </select>
                                            <br/><br/>
                                            <label for=\"tuesday_workout_time\">Hora:</label>
                                            <input disabled=\"disabled\" type=\"time\" name=\"tuesday_workout_time\" value=\"";
        // line 264
        if ((($context["tuesday_workout"] ?? $this->getContext($context, "tuesday_workout")) != false)) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["tuesday_workout"] ?? $this->getContext($context, "tuesday_workout")), "hour", []), "H:i:s"), "html", null, true);
        }
        echo "\" style=\"width: fit-content\">
                                            <label for=\"tuesday-workout\">Entrenamiento:</label>
                                            <textarea type=\"text\" disabled=\"disabled\" id=\"tuesday-workout\" name=\"tuesday_workout\" class=\"form-control\" style=\"height: 150px\">";
        // line 266
        if ((($context["tuesday_workout"] ?? $this->getContext($context, "tuesday_workout")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["tuesday_workout"] ?? $this->getContext($context, "tuesday_workout")), "workout", []), "html", null, true);
        }
        echo "</textarea>
                                            <br/>
                                            <ul class=\"list-group\" id=\"tuesday-workout-exercises\">
                                                ";
        // line 269
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["exercises"] ?? $this->getContext($context, "exercises")));
        foreach ($context['_seq'] as $context["_key"] => $context["exercise"]) {
            // line 270
            echo "                                                    <li>
                                                        <input disabled=\"disabled\" type=\"checkbox\" value=\"";
            // line 271
            echo twig_escape_filter($this->env, $this->getAttribute($context["exercise"], "idExercise", []), "html", null, true);
            echo "\" style=\"width: fit-content; margin-bottom: 10px; margin-top: 10px\" name=\"tuesday_workout_exercises[";
            echo twig_escape_filter($this->env, $this->getAttribute($context["exercise"], "idExercise", []), "html", null, true);
            echo "][]\" ";
            if (((($context["tuesday_workout"] ?? $this->getContext($context, "tuesday_workout")) != false) && twig_in_filter($this->getAttribute($context["exercise"], "idExercise", []), ($context["tuesday_workout_exercises"] ?? $this->getContext($context, "tuesday_workout_exercises"))))) {
                echo "checked";
            }
            echo ">
                                                        ";
            // line 272
            echo twig_escape_filter($this->env, $this->getAttribute($context["exercise"], "title", []), "html", null, true);
            echo "
                                                    </li>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['exercise'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 275
        echo "                                            </ul>
                                            <label for=\"tuesday-workout-notes\">Observaciones:</label>
                                            <textarea type=\"text\" disabled=\"disabled\" id=\"tuesday-workout-notes\" name=\"tuesday_workout_notes\" class=\"form-control\" style=\"height: 80px\">";
        // line 277
        if ((($context["tuesday_workout"] ?? $this->getContext($context, "tuesday_workout")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["tuesday_workout"] ?? $this->getContext($context, "tuesday_workout")), "workoutNotes", []), "html", null, true);
        }
        echo "</textarea>
                                        </div>
                                    </div>
                                </div>
                                <input type=\"button\" name=\"previous\" class=\"previous action-button-previous\" value=\"Previo\"/>
                                <input type=\"button\" name=\"next\" class=\"next action-button\" value=\"Siguiente\"/>
                            </fieldset>
                            <!-- MIERCOLES -->
                            <fieldset>
                                <div class=\"form-card\">
                                    <div class=\"col-sm-9 \">
                                        <div id=\"meals-buttons\">
                                            <button style=\"margin-left: 1px\" class=\"btn btn-primary day-meal-button day-meal-button-active\" type=\"button\">Desayuno</button>
                                            <button class=\"btn btn-primary day-meal-button\" type=\"button\">Snack</button>
                                            <button class=\"btn btn-primary day-meal-button\" type=\"button\">Almuerzo</button>
                                            <button class=\"btn btn-primary day-meal-button\" type=\"button\">Merienda</button>
                                            <button class=\"btn btn-primary day-meal-button\" type=\"button\">Cena</button>
                                        </div>
                                        <div class=\"day-plan-breakfast day-plan day-meal-visible\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input disabled=\"disabled\" style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"breakfast_hour_wednesday\" value=\"";
        // line 297
        if ((($context["wednesday_breakfast"] ?? $this->getContext($context, "wednesday_breakfast")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["wednesday_breakfast"] ?? $this->getContext($context, "wednesday_breakfast")), "hour", []), "html", null, true);
        } else {
            echo "08:30";
        }
        echo "\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" disabled=\"disabled\" id=\"menu\" name=\"breakfast_menu_wednesday\" class=\"form-control\" style=\"height: 430px\">";
        // line 299
        if ((($context["wednesday_breakfast"] ?? $this->getContext($context, "wednesday_breakfast")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["wednesday_breakfast"] ?? $this->getContext($context, "wednesday_breakfast")), "meal", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista de la compra:</label><textarea type=\"text\" disabled=\"disabled\" id=\"list\" name=\"breakfast_list_wednesday\" class=\"form-control\" style=\"height: 225px\">";
        // line 302
        if ((($context["wednesday_breakfast"] ?? $this->getContext($context, "wednesday_breakfast")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["wednesday_breakfast"] ?? $this->getContext($context, "wednesday_breakfast")), "mealShoppingList", []), "html", null, true);
        }
        echo "</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" disabled=\"disabled\" id=\"comments\" name=\"breakfast_comments_wednesday\" class=\"form-control\" style=\"height: 186px\">";
        // line 304
        if ((($context["wednesday_breakfast"] ?? $this->getContext($context, "wednesday_breakfast")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["wednesday_breakfast"] ?? $this->getContext($context, "wednesday_breakfast")), "mealNotes", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-snack day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input disabled=\"disabled\" style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"snack_hour_wednesday\" value=\"";
        // line 309
        if ((($context["wednesday_snack"] ?? $this->getContext($context, "wednesday_snack")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["wednesday_snack"] ?? $this->getContext($context, "wednesday_snack")), "hour", []), "html", null, true);
        } else {
            echo "11:30";
        }
        echo "\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" disabled=\"disabled\" id=\"menu\" name=\"snack_menu_wednesday\" class=\"form-control\" style=\"height: 430px\">";
        // line 311
        if ((($context["wednesday_snack"] ?? $this->getContext($context, "wednesday_snack")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["wednesday_snack"] ?? $this->getContext($context, "wednesday_snack")), "meal", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista de la compra:</label><textarea type=\"text\" disabled=\"disabled\" id=\"list\" name=\"snack_list_wednesday\" class=\"form-control\" style=\"height: 225px\">";
        // line 314
        if ((($context["wednesday_snack"] ?? $this->getContext($context, "wednesday_snack")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["wednesday_snack"] ?? $this->getContext($context, "wednesday_snack")), "mealShoppingList", []), "html", null, true);
        }
        echo "</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" disabled=\"disabled\" id=\"comments\" name=\"snack_comments_wednesday\" class=\"form-control\" style=\"height: 186px\"><";
        // line 316
        if ((($context["wednesday_snack"] ?? $this->getContext($context, "wednesday_snack")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["wednesday_snack"] ?? $this->getContext($context, "wednesday_snack")), "mealNotes", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-lunch day-plan\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input disabled=\"disabled\" style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"lunch_hour_wednesday\" value=\"";
        // line 321
        if ((($context["wednesday_lunch"] ?? $this->getContext($context, "wednesday_lunch")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["wednesday_lunch"] ?? $this->getContext($context, "wednesday_lunch")), "hour", []), "html", null, true);
        } else {
            echo "14:00";
        }
        echo "\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" disabled=\"disabled\" id=\"menu\" name=\"lunch_menu_wednesday\" class=\"form-control\" style=\"height: 430px\">";
        // line 323
        if ((($context["wednesday_lunch"] ?? $this->getContext($context, "wednesday_lunch")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["wednesday_lunch"] ?? $this->getContext($context, "wednesday_lunch")), "meal", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista de la compra:</label><textarea type=\"text\" disabled=\"disabled\" id=\"list\" name=\"lunch_list_wednesday\" class=\"form-control\" style=\"height: 225px\">";
        // line 326
        if ((($context["wednesday_lunch"] ?? $this->getContext($context, "wednesday_lunch")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["wednesday_lunch"] ?? $this->getContext($context, "wednesday_lunch")), "mealShoppingList", []), "html", null, true);
        }
        echo "</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" disabled=\"disabled\" id=\"comments\" name=\"lunch_comments_wednesday\" class=\"form-control\" style=\"height: 186px\">";
        // line 328
        if ((($context["wednesday_lunch"] ?? $this->getContext($context, "wednesday_lunch")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["wednesday_lunch"] ?? $this->getContext($context, "wednesday_lunch")), "mealNotes", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-afternoon day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input disabled=\"disabled\" style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"afternoon_hour_wednesday\" value=\"";
        // line 333
        if ((($context["wednesday_afternoon"] ?? $this->getContext($context, "wednesday_afternoon")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["wednesday_afternoon"] ?? $this->getContext($context, "wednesday_afternoon")), "hour", []), "html", null, true);
        } else {
            echo "17:30";
        }
        echo "\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" disabled=\"disabled\" id=\"menu\" name=\"afternoon_menu_wednesday\" class=\"form-control\" style=\"height: 430px\">";
        // line 335
        if ((($context["wednesday_afternoon"] ?? $this->getContext($context, "wednesday_afternoon")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["wednesday_afternoon"] ?? $this->getContext($context, "wednesday_afternoon")), "meal", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista de la compra:</label><textarea type=\"text\" disabled=\"disabled\" id=\"list\" name=\"afternoon_list_wednesday\" class=\"form-control\" style=\"height: 225px\">";
        // line 338
        if ((($context["wednesday_afternoon"] ?? $this->getContext($context, "wednesday_afternoon")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["wednesday_afternoon"] ?? $this->getContext($context, "wednesday_afternoon")), "mealShoppingList", []), "html", null, true);
        }
        echo "</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" disabled=\"disabled\" id=\"comments\" name=\"afternoon_comments_wednesday\" class=\"form-control\" style=\"height: 186px\">";
        // line 340
        if ((($context["wednesday_afternoon"] ?? $this->getContext($context, "wednesday_afternoon")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["wednesday_afternoon"] ?? $this->getContext($context, "wednesday_afternoon")), "mealNotes", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-dinner day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input disabled=\"disabled\" style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"dinner_hour_wednesday\" value=\"";
        // line 345
        if ((($context["wednesday_dinner"] ?? $this->getContext($context, "wednesday_dinner")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["wednesday_dinner"] ?? $this->getContext($context, "wednesday_dinner")), "hour", []), "html", null, true);
        } else {
            echo "21:00";
        }
        echo "\" min=\"09:00\" max=\"22:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" disabled=\"disabled\" id=\"menu\" name=\"dinner_menu_wednesday\" class=\"form-control\" style=\"height: 430px\">";
        // line 347
        if ((($context["wednesday_dinner"] ?? $this->getContext($context, "wednesday_dinner")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["wednesday_dinner"] ?? $this->getContext($context, "wednesday_dinner")), "meal", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista de la compra:</label><textarea type=\"text\" disabled=\"disabled\" id=\"list\" name=\"dinner_list_wednesday\" class=\"form-control\" style=\"height: 225px\">";
        // line 350
        if ((($context["wednesday_dinner"] ?? $this->getContext($context, "wednesday_dinner")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["wednesday_dinner"] ?? $this->getContext($context, "wednesday_dinner")), "mealShoppingList", []), "html", null, true);
        }
        echo "</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" disabled=\"disabled\" id=\"comments\" name=\"dinner_comments_wednesday\" class=\"form-control\" style=\"height: 186px\">";
        // line 352
        if ((($context["wednesday_dinner"] ?? $this->getContext($context, "wednesday_dinner")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["wednesday_dinner"] ?? $this->getContext($context, "wednesday_dinner")), "mealNotes", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-sm-3\">
                                        <div class=\"workout-rest\">
                                            <input disabled=\"disabled\" type=\"checkbox\" value=\"1\" style=\"width: fit-content; margin-bottom: 10px; margin-top: 10px; margin-right: 10px\" name=\"wednesday_workout_rest\" id=\"wednesday-workout-rest\" ";
        // line 358
        if ((($context["wednesday_workout"] ?? $this->getContext($context, "wednesday_workout")) == false)) {
            echo " checked ";
        }
        echo "onclick=\"restDay('wednesday')\"><strong>Descanso</strong>
                                        </div>
                                        <div class=\"wednesday-workout\" ";
        // line 360
        if ((($context["wednesday_workout"] ?? $this->getContext($context, "wednesday_workout")) == false)) {
            echo " style=\"display: none\"";
        }
        echo ">
                                            <br/>
                                            <label for=\"wednesday_workout_sort\">Tipo de entrenamiento:</label>
                                            <select name=\"wednesday_workout_sort\" id=\"wednesday_workout_sort\">
                                                <option value=\"Fuerza Tren Superior\">Fuerza Tren Superior</option>
                                                <option value=\"Fuerza Tren Inferior\">Fuerza Tren Inferior</option>
                                                <option value=\"Cardio\">Cardio</option>
                                                <option value=\"HIIT\">HIIT</option>
                                                <option value=\"Relajacion\">Relajación</option>
                                            </select>
                                            <br/><br/>
                                            <label for=\"wednesday_workout_time\">Hora:</label>
                                            <input disabled=\"disabled\" type=\"time\" name=\"wednesday_workout_time\" value=\"";
        // line 372
        if ((($context["wednesday_workout"] ?? $this->getContext($context, "wednesday_workout")) != false)) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["wednesday_workout"] ?? $this->getContext($context, "wednesday_workout")), "hour", []), "H:i:s"), "html", null, true);
        }
        echo "\" style=\"width: fit-content\">
                                            <label for=\"wednesday-workout\">Entrenamiento:</label>
                                            <textarea type=\"text\" disabled=\"disabled\" id=\"wednesday-workout\" name=\"wednesday_workout\" class=\"form-control\" style=\"height: 150px\">";
        // line 374
        if ((($context["wednesday_workout"] ?? $this->getContext($context, "wednesday_workout")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["wednesday_workout"] ?? $this->getContext($context, "wednesday_workout")), "workout", []), "html", null, true);
        }
        echo "</textarea>
                                            <br/>
                                            <ul class=\"list-group\" id=\"wednesday-workout-exercises\">
                                                ";
        // line 377
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["exercises"] ?? $this->getContext($context, "exercises")));
        foreach ($context['_seq'] as $context["_key"] => $context["exercise"]) {
            // line 378
            echo "                                                    <li>
                                                        <input disabled=\"disabled\" type=\"checkbox\" value=\"";
            // line 379
            echo twig_escape_filter($this->env, $this->getAttribute($context["exercise"], "idExercise", []), "html", null, true);
            echo "\" style=\"width: fit-content; margin-bottom: 10px; margin-top: 10px\" name=\"wednesday_workout_exercises[";
            echo twig_escape_filter($this->env, $this->getAttribute($context["exercise"], "idExercise", []), "html", null, true);
            echo "][]\" ";
            if (((($context["wednesday_workout"] ?? $this->getContext($context, "wednesday_workout")) != false) && twig_in_filter($this->getAttribute($context["exercise"], "idExercise", []), ($context["wednesday_workout_exercises"] ?? $this->getContext($context, "wednesday_workout_exercises"))))) {
                echo "checked";
            }
            echo ">
                                                        ";
            // line 380
            echo twig_escape_filter($this->env, $this->getAttribute($context["exercise"], "title", []), "html", null, true);
            echo "
                                                    </li>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['exercise'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 383
        echo "                                            </ul>
                                            <label for=\"wednesday-workout-notes\">Observaciones:</label>
                                            <textarea type=\"text\" disabled=\"disabled\" id=\"wednesday-workout-notes\" name=\"wednesday_workout_notes\" class=\"form-control\" style=\"height: 80px\">";
        // line 385
        if ((($context["wednesday_workout"] ?? $this->getContext($context, "wednesday_workout")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["wednesday_workout"] ?? $this->getContext($context, "wednesday_workout")), "workoutNotes", []), "html", null, true);
        }
        echo "</textarea>
                                        </div>
                                    </div>
                                </div>
                                <input type=\"button\" name=\"previous\" class=\"previous action-button-previous\" value=\"Previo\"/>
                                <input type=\"button\" name=\"next\" class=\"next action-button\" value=\"Siguiente\"/>
                            </fieldset>
                            <!-- JUEVES -->
                            <fieldset>
                                <div class=\"form-card\">
                                    <div class=\"col-sm-9 \">
                                        <div id=\"meals-buttons\">
                                            <button style=\"margin-left: 1px\" class=\"btn btn-primary day-meal-button day-meal-button-active\" type=\"button\">Desayuno</button>
                                            <button class=\"btn btn-primary day-meal-button\" type=\"button\">Snack</button>
                                            <button class=\"btn btn-primary day-meal-button\" type=\"button\">Almuerzo</button>
                                            <button class=\"btn btn-primary day-meal-button\" type=\"button\">Merienda</button>
                                            <button class=\"btn btn-primary day-meal-button\" type=\"button\">Cena</button>
                                        </div>
                                        <div class=\"day-plan-breakfast day-plan day-meal-visible\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input disabled=\"disabled\" style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"breakfast_hour_thursday\" value=\"";
        // line 405
        if ((($context["thursday_breakfast"] ?? $this->getContext($context, "thursday_breakfast")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["thursday_breakfast"] ?? $this->getContext($context, "thursday_breakfast")), "hour", []), "html", null, true);
        } else {
            echo "08:30";
        }
        echo "\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" disabled=\"disabled\" id=\"menu\" name=\"breakfast_menu_thursday\" class=\"form-control\" style=\"height: 430px\">";
        // line 407
        if ((($context["thursday_breakfast"] ?? $this->getContext($context, "thursday_breakfast")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["thursday_breakfast"] ?? $this->getContext($context, "thursday_breakfast")), "meal", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista de la compra:</label><textarea type=\"text\" disabled=\"disabled\" id=\"list\" name=\"breakfast_list_thursday\" class=\"form-control\" style=\"height: 225px\">";
        // line 410
        if ((($context["thursday_breakfast"] ?? $this->getContext($context, "thursday_breakfast")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["thursday_breakfast"] ?? $this->getContext($context, "thursday_breakfast")), "mealShoppingList", []), "html", null, true);
        }
        echo "</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" disabled=\"disabled\" id=\"comments\" name=\"breakfast_comments_thursday\" class=\"form-control\" style=\"height: 186px\">";
        // line 412
        if ((($context["thursday_breakfast"] ?? $this->getContext($context, "thursday_breakfast")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["thursday_breakfast"] ?? $this->getContext($context, "thursday_breakfast")), "mealNotes", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-snack day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input disabled=\"disabled\" style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"snack_hour_thursday\" value=\"";
        // line 417
        if ((($context["thursday_snack"] ?? $this->getContext($context, "thursday_snack")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["thursday_snack"] ?? $this->getContext($context, "thursday_snack")), "hour", []), "html", null, true);
        } else {
            echo "21:00";
        }
        echo "\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" disabled=\"disabled\" id=\"menu\" name=\"snack_menu_thursday\" class=\"form-control\" style=\"height: 430px\">";
        // line 419
        if ((($context["thursday_snack"] ?? $this->getContext($context, "thursday_snack")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["thursday_snack"] ?? $this->getContext($context, "thursday_snack")), "meal", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista de la compra:</label><textarea type=\"text\" disabled=\"disabled\" id=\"list\" name=\"snack_list_thursday\" class=\"form-control\" style=\"height: 225px\">";
        // line 422
        if ((($context["thursday_snack"] ?? $this->getContext($context, "thursday_snack")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["thursday_snack"] ?? $this->getContext($context, "thursday_snack")), "mealShoppingList", []), "html", null, true);
        }
        echo "</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" disabled=\"disabled\" id=\"comments\" name=\"snack_comments_thursday\" class=\"form-control\" style=\"height: 186px\">";
        // line 424
        if ((($context["thursday_snack"] ?? $this->getContext($context, "thursday_snack")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["thursday_snack"] ?? $this->getContext($context, "thursday_snack")), "mealNotes", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-lunch day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input disabled=\"disabled\" style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"lunch_hour_thursday\" value=\"";
        // line 429
        if ((($context["thursday_lunch"] ?? $this->getContext($context, "thursday_lunch")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["thursday_lunch"] ?? $this->getContext($context, "thursday_lunch")), "hour", []), "html", null, true);
        } else {
            echo "21:00";
        }
        echo "\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" disabled=\"disabled\" id=\"menu\" name=\"lunch_menu_thursday\" class=\"form-control\" style=\"height: 430px\">";
        // line 431
        if ((($context["thursday_lunch"] ?? $this->getContext($context, "thursday_lunch")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["thursday_lunch"] ?? $this->getContext($context, "thursday_lunch")), "meal", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista de la compra:</label><textarea type=\"text\" disabled=\"disabled\" id=\"list\" name=\"lunch_list_thursday\" class=\"form-control\" style=\"height: 225px\">";
        // line 434
        if ((($context["thursday_lunch"] ?? $this->getContext($context, "thursday_lunch")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["thursday_lunch"] ?? $this->getContext($context, "thursday_lunch")), "mealShoppingList", []), "html", null, true);
        }
        echo "</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" disabled=\"disabled\" id=\"comments\" name=\"lunch_comments_thursday\" class=\"form-control\" style=\"height: 186px\">";
        // line 436
        if ((($context["thursday_lunch"] ?? $this->getContext($context, "thursday_lunch")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["thursday_lunch"] ?? $this->getContext($context, "thursday_lunch")), "mealNotes", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-afternoon day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input disabled=\"disabled\" style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"afternoon_hour_thursday\" value=\"";
        // line 441
        if ((($context["thursday_afternoon"] ?? $this->getContext($context, "thursday_afternoon")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["thursday_afternoon"] ?? $this->getContext($context, "thursday_afternoon")), "hour", []), "html", null, true);
        } else {
            echo "21:00";
        }
        echo "\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" disabled=\"disabled\" id=\"menu\" name=\"afternoon_menu_thursday\" class=\"form-control\" style=\"height: 430px\">";
        // line 443
        if ((($context["thursday_afternoon"] ?? $this->getContext($context, "thursday_afternoon")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["thursday_afternoon"] ?? $this->getContext($context, "thursday_afternoon")), "meal", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista de la compra:</label><textarea type=\"text\" disabled=\"disabled\" id=\"list\" name=\"afternoon_list_thursday\" class=\"form-control\" style=\"height: 225px\">";
        // line 446
        if ((($context["thursday_afternoon"] ?? $this->getContext($context, "thursday_afternoon")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["thursday_afternoon"] ?? $this->getContext($context, "thursday_afternoon")), "mealShoppingList", []), "html", null, true);
        }
        echo "</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" disabled=\"disabled\" id=\"comments\" name=\"afternoon_comments_thursday\" class=\"form-control\" style=\"height: 186px\">";
        // line 448
        if ((($context["thursday_afternoon"] ?? $this->getContext($context, "thursday_afternoon")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["thursday_afternoon"] ?? $this->getContext($context, "thursday_afternoon")), "mealNotes", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-dinner day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input disabled=\"disabled\" style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"dinner_hour_thursday\" value=\"";
        // line 453
        if ((($context["thursday_dinner"] ?? $this->getContext($context, "thursday_dinner")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["thursday_dinner"] ?? $this->getContext($context, "thursday_dinner")), "hour", []), "html", null, true);
        } else {
            echo "21:00";
        }
        echo "\" min=\"09:00\" max=\"22:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" disabled=\"disabled\" id=\"menu\" name=\"dinner_menu_thursday\" class=\"form-control\" style=\"height: 430px\">";
        // line 455
        if ((($context["thursday_dinner"] ?? $this->getContext($context, "thursday_dinner")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["thursday_dinner"] ?? $this->getContext($context, "thursday_dinner")), "meal", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista de la compra:</label><textarea type=\"text\" disabled=\"disabled\" id=\"list\" name=\"dinner_list_thursday\" class=\"form-control\" style=\"height: 225px\">";
        // line 458
        if ((($context["thursday_dinner"] ?? $this->getContext($context, "thursday_dinner")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["thursday_dinner"] ?? $this->getContext($context, "thursday_dinner")), "mealShoppingList", []), "html", null, true);
        }
        echo "</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" disabled=\"disabled\" id=\"comments\" name=\"dinner_comments_thursday\" class=\"form-control\" style=\"height: 186px\">";
        // line 460
        if ((($context["thursday_dinner"] ?? $this->getContext($context, "thursday_dinner")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["thursday_dinner"] ?? $this->getContext($context, "thursday_dinner")), "mealNotes", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-sm-3\">
                                        <div class=\"workout-rest\">
                                            <input disabled=\"disabled\" type=\"checkbox\" value=\"1\" style=\"width: fit-content; margin-bottom: 10px; margin-top: 10px; margin-right: 10px\" name=\"thursday_workout_rest\" id=\"thursday-workout-rest\" ";
        // line 466
        if ((($context["thursday_workout"] ?? $this->getContext($context, "thursday_workout")) == false)) {
            echo " checked ";
        }
        echo " onclick=\"restDay('thursday')\"><strong>Descanso</strong>
                                        </div>
                                        <div class=\"thursday-workout\" ";
        // line 468
        if ((($context["thursday_workout"] ?? $this->getContext($context, "thursday_workout")) == false)) {
            echo " style=\"display: none\"";
        }
        echo ">
                                            <br/>
                                            <label for=\"thursday_workout_sort\">Tipo de entrenamiento:</label>
                                            <select name=\"thursday_workout_sort\" id=\"thursday_workout_sort\">
                                                <option value=\"Fuerza Tren Superior\">Fuerza Tren Superior</option>
                                                <option value=\"Fuerza Tren Inferior\">Fuerza Tren Inferior</option>
                                                <option value=\"Cardio\">Cardio</option>
                                                <option value=\"HIIT\">HIIT</option>
                                                <option value=\"Relajacion\">Relajación</option>
                                            </select>
                                            <br/><br/>
                                            <label for=\"thursday_workout_time\">Hora:</label>
                                            <input disabled=\"disabled\" type=\"time\" name=\"thursday_workout_time\" value=\"";
        // line 480
        if ((($context["thursday_workout"] ?? $this->getContext($context, "thursday_workout")) != false)) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["thursday_workout"] ?? $this->getContext($context, "thursday_workout")), "hour", []), "H:i:s"), "html", null, true);
        }
        echo "\" style=\"width: fit-content\">
                                            <label for=\"thursday-workout\">Entrenamiento:</label>
                                            <textarea type=\"text\" disabled=\"disabled\" id=\"thursday-workout\" name=\"thursday_workout\" class=\"form-control\" style=\"height: 150px\">";
        // line 482
        if ((($context["thursday_workout"] ?? $this->getContext($context, "thursday_workout")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["thursday_workout"] ?? $this->getContext($context, "thursday_workout")), "workout", []), "html", null, true);
        }
        echo "</textarea>
                                            <br/>
                                            <ul class=\"list-group\" id=\"thursday-workout-exercises\">
                                                ";
        // line 485
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["exercises"] ?? $this->getContext($context, "exercises")));
        foreach ($context['_seq'] as $context["_key"] => $context["exercise"]) {
            // line 486
            echo "                                                    <li>
                                                        <input disabled=\"disabled\" type=\"checkbox\" value=\"";
            // line 487
            echo twig_escape_filter($this->env, $this->getAttribute($context["exercise"], "idExercise", []), "html", null, true);
            echo "\" style=\"width: fit-content; margin-bottom: 10px; margin-top: 10px\" name=\"thursday_workout_exercises[";
            echo twig_escape_filter($this->env, $this->getAttribute($context["exercise"], "idExercise", []), "html", null, true);
            echo "][]\" ";
            if (((($context["thursday_workout"] ?? $this->getContext($context, "thursday_workout")) != false) && twig_in_filter($this->getAttribute($context["exercise"], "idExercise", []), ($context["thursday_workout_exercises"] ?? $this->getContext($context, "thursday_workout_exercises"))))) {
                echo "checked";
            }
            echo ">
                                                        ";
            // line 488
            echo twig_escape_filter($this->env, $this->getAttribute($context["exercise"], "title", []), "html", null, true);
            echo "
                                                    </li>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['exercise'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 491
        echo "                                            </ul>
                                            <label for=\"thursday-workout-notes\">Observaciones:</label>
                                            <textarea type=\"text\" disabled=\"disabled\" id=\"thursday-workout-notes\" name=\"thursday_workout_notes\" class=\"form-control\" style=\"height: 80px\">";
        // line 493
        if ((($context["thursday_workout"] ?? $this->getContext($context, "thursday_workout")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["thursday_workout"] ?? $this->getContext($context, "thursday_workout")), "workoutNotes", []), "html", null, true);
        }
        echo "</textarea>
                                        </div>
                                    </div>
                                </div>
                                <input type=\"button\" name=\"previous\" class=\"previous action-button-previous\" value=\"Previo\"/>
                                <input type=\"button\" name=\"next\" class=\"next action-button\" value=\"Siguiente\"/>
                            </fieldset>
                            <!-- VIERNES -->
                            <fieldset>
                                <div class=\"form-card\">
                                    <div class=\"col-sm-9 \">
                                        <div id=\"meals-buttons\">
                                            <button style=\"margin-left: 1px\" class=\"btn btn-primary day-meal-button day-meal-button-active\" type=\"button\">Desayuno</button>
                                            <button class=\"btn btn-primary day-meal-button\" type=\"button\">Snack</button>
                                            <button class=\"btn btn-primary day-meal-button\" type=\"button\">Almuerzo</button>
                                            <button class=\"btn btn-primary day-meal-button\" type=\"button\">Merienda</button>
                                            <button class=\"btn btn-primary day-meal-button\" type=\"button\">Cena</button>
                                        </div>
                                        <div class=\"day-plan-breakfast day-plan day-meal-visible\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input disabled=\"disabled\" style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"breakfast_hour_friday\" value=\"";
        // line 513
        if ((($context["friday_breakfast"] ?? $this->getContext($context, "friday_breakfast")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["friday_breakfast"] ?? $this->getContext($context, "friday_breakfast")), "hour", []), "html", null, true);
        } else {
            echo "08:30";
        }
        echo "\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" disabled=\"disabled\" id=\"menu\" name=\"breakfast_menu_friday\" class=\"form-control\" style=\"height: 430px\">";
        // line 515
        if ((($context["friday_breakfast"] ?? $this->getContext($context, "friday_breakfast")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["friday_breakfast"] ?? $this->getContext($context, "friday_breakfast")), "meal", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista de la compra:</label><textarea type=\"text\" disabled=\"disabled\" id=\"list\" name=\"breakfast_list_friday\" class=\"form-control\" style=\"height: 225px\">";
        // line 518
        if ((($context["friday_breakfast"] ?? $this->getContext($context, "friday_breakfast")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["friday_breakfast"] ?? $this->getContext($context, "friday_breakfast")), "mealShoppingList", []), "html", null, true);
        }
        echo "</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" disabled=\"disabled\" id=\"comments\" name=\"breakfast_comments_friday\" class=\"form-control\" style=\"height: 186px\">";
        // line 520
        if ((($context["friday_breakfast"] ?? $this->getContext($context, "friday_breakfast")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["friday_breakfast"] ?? $this->getContext($context, "friday_breakfast")), "mealNotes", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-snack day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input disabled=\"disabled\" style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"snack_hour_friday\" value=\"";
        // line 525
        if ((($context["friday_snack"] ?? $this->getContext($context, "friday_snack")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["friday_snack"] ?? $this->getContext($context, "friday_snack")), "hour", []), "html", null, true);
        } else {
            echo "11:30";
        }
        echo "\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" disabled=\"disabled\" id=\"menu\" name=\"snack_menu_friday\" class=\"form-control\" style=\"height: 430px\">";
        // line 527
        if ((($context["friday_snack"] ?? $this->getContext($context, "friday_snack")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["friday_snack"] ?? $this->getContext($context, "friday_snack")), "meal", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista de la compra:</label><textarea type=\"text\" disabled=\"disabled\" id=\"list\" name=\"snack_list_friday\" class=\"form-control\" style=\"height: 225px\">";
        // line 530
        if ((($context["friday_snack"] ?? $this->getContext($context, "friday_snack")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["friday_snack"] ?? $this->getContext($context, "friday_snack")), "mealShoppingList", []), "html", null, true);
        }
        echo "</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" disabled=\"disabled\" id=\"comments\" name=\"snack_comments_friday\" class=\"form-control\" style=\"height: 186px\">";
        // line 532
        if ((($context["friday_snack"] ?? $this->getContext($context, "friday_snack")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["friday_snack"] ?? $this->getContext($context, "friday_snack")), "mealNotes", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-lunch day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input disabled=\"disabled\" style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"lunch_hour_friday\" value=\"";
        // line 537
        if ((($context["friday_lunch"] ?? $this->getContext($context, "friday_lunch")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["friday_lunch"] ?? $this->getContext($context, "friday_lunch")), "hour", []), "html", null, true);
        } else {
            echo "14:00";
        }
        echo "\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" disabled=\"disabled\" id=\"menu\" name=\"lunch_menu_friday\" class=\"form-control\" style=\"height: 430px\">";
        // line 539
        if ((($context["friday_lunch"] ?? $this->getContext($context, "friday_lunch")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["friday_lunch"] ?? $this->getContext($context, "friday_lunch")), "meal", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista de la compra:</label><textarea type=\"text\" disabled=\"disabled\" id=\"list\" name=\"lunch_list_friday\" class=\"form-control\" style=\"height: 225px\">";
        // line 542
        if ((($context["friday_lunch"] ?? $this->getContext($context, "friday_lunch")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["friday_lunch"] ?? $this->getContext($context, "friday_lunch")), "mealShoppingList", []), "html", null, true);
        }
        echo "</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" disabled=\"disabled\" id=\"comments\" name=\"lunch_comments_friday\" class=\"form-control\" style=\"height: 186px\">";
        // line 544
        if ((($context["friday_lunch"] ?? $this->getContext($context, "friday_lunch")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["friday_lunch"] ?? $this->getContext($context, "friday_lunch")), "mealNotes", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-afternoon day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input disabled=\"disabled\" style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"afternoon_hour_friday\" value=\"";
        // line 549
        if ((($context["friday_afternoon"] ?? $this->getContext($context, "friday_afternoon")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["friday_afternoon"] ?? $this->getContext($context, "friday_afternoon")), "hour", []), "html", null, true);
        } else {
            echo "17:30";
        }
        echo "\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" disabled=\"disabled\" id=\"menu\" name=\"afternoon_menu_friday\" class=\"form-control\" style=\"height: 430px\">";
        // line 551
        if ((($context["friday_afternoon"] ?? $this->getContext($context, "friday_afternoon")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["friday_afternoon"] ?? $this->getContext($context, "friday_afternoon")), "meal", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista de la compra:</label><textarea type=\"text\" disabled=\"disabled\" id=\"list\" name=\"afternoon_list_friday\" class=\"form-control\" style=\"height: 225px\">";
        // line 554
        if ((($context["friday_afternoon"] ?? $this->getContext($context, "friday_afternoon")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["friday_afternoon"] ?? $this->getContext($context, "friday_afternoon")), "mealShoppingList", []), "html", null, true);
        }
        echo "</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" disabled=\"disabled\" id=\"comments\" name=\"afternoon_comments_friday\" class=\"form-control\" style=\"height: 186px\">";
        // line 556
        if ((($context["friday_afternoon"] ?? $this->getContext($context, "friday_afternoon")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["friday_afternoon"] ?? $this->getContext($context, "friday_afternoon")), "mealNotes", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-dinner day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input disabled=\"disabled\" style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"dinner_hour_friday\" value=\"";
        // line 561
        if ((($context["friday_dinner"] ?? $this->getContext($context, "friday_dinner")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["friday_dinner"] ?? $this->getContext($context, "friday_dinner")), "hour", []), "html", null, true);
        } else {
            echo "21:00";
        }
        echo "\" min=\"09:00\" max=\"22:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" disabled=\"disabled\" id=\"menu\" name=\"dinner_menu_friday\" class=\"form-control\" style=\"height: 430px\">";
        // line 563
        if ((($context["friday_dinner"] ?? $this->getContext($context, "friday_dinner")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["friday_dinner"] ?? $this->getContext($context, "friday_dinner")), "meal", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista de la compra:</label><textarea type=\"text\" disabled=\"disabled\" id=\"list\" name=\"dinner_list_friday\" class=\"form-control\" style=\"height: 225px\">";
        // line 566
        if ((($context["friday_dinner"] ?? $this->getContext($context, "friday_dinner")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["friday_dinner"] ?? $this->getContext($context, "friday_dinner")), "mealShoppingList", []), "html", null, true);
        }
        echo "</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" disabled=\"disabled\" id=\"comments\" name=\"dinner_comments_friday\" class=\"form-control\" style=\"height: 186px\">";
        // line 568
        if ((($context["friday_dinner"] ?? $this->getContext($context, "friday_dinner")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["friday_dinner"] ?? $this->getContext($context, "friday_dinner")), "mealNotes", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-sm-3\">
                                        <div class=\"workout-rest\">
                                            <input disabled=\"disabled\" type=\"checkbox\" value=\"1\" style=\"width: fit-content; margin-bottom: 10px; margin-top: 10px; margin-right: 10px\" name=\"friday_workout_rest\" id=\"friday-workout-rest\" ";
        // line 574
        if ((($context["friday_workout"] ?? $this->getContext($context, "friday_workout")) == false)) {
            echo " checked ";
        }
        echo " onclick=\"restDay('friday')\"><strong>Descanso</strong>
                                        </div>
                                        <div class=\"friday-workout\" ";
        // line 576
        if ((($context["friday_workout"] ?? $this->getContext($context, "friday_workout")) == false)) {
            echo " style=\"display: none\"";
        }
        echo ">
                                            <br/>
                                            <label for=\"friday_workout_sort\">Tipo de entrenamiento:</label>
                                            <select name=\"friday_workout_sort\" id=\"friday_workout_sort\">
                                                <option value=\"Fuerza Tren Superior\">Fuerza Tren Superior</option>
                                                <option value=\"Fuerza Tren Inferior\">Fuerza Tren Inferior</option>
                                                <option value=\"Cardio\">Cardio</option>
                                                <option value=\"HIIT\">HIIT</option>
                                                <option value=\"Relajacion\">Relajación</option>
                                            </select>
                                            <br/><br/>
                                            <label for=\"friday_workout_time\">Hora:</label>
                                            <input disabled=\"disabled\" type=\"time\" name=\"friday_workout_time\" value=\"";
        // line 588
        if ((($context["friday_workout"] ?? $this->getContext($context, "friday_workout")) != false)) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["friday_workout"] ?? $this->getContext($context, "friday_workout")), "hour", []), "H:i:s"), "html", null, true);
        }
        echo "\" style=\"width: fit-content\">
                                            <label for=\"friday-workout\">Entrenamiento:</label>
                                            <textarea type=\"text\" disabled=\"disabled\" id=\"friday-workout\" name=\"friday_workout\" class=\"form-control\" style=\"height: 150px\">";
        // line 590
        if ((($context["friday_workout"] ?? $this->getContext($context, "friday_workout")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["friday_workout"] ?? $this->getContext($context, "friday_workout")), "workout", []), "html", null, true);
        }
        echo "</textarea>
                                            <br/>
                                            <ul class=\"list-group\" id=\"friday-workout-exercises\">
                                                ";
        // line 593
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["exercises"] ?? $this->getContext($context, "exercises")));
        foreach ($context['_seq'] as $context["_key"] => $context["exercise"]) {
            // line 594
            echo "                                                    <li>
                                                        <input disabled=\"disabled\" type=\"checkbox\" value=\"";
            // line 595
            echo twig_escape_filter($this->env, $this->getAttribute($context["exercise"], "idExercise", []), "html", null, true);
            echo "\" style=\"width: fit-content; margin-bottom: 10px; margin-top: 10px\" name=\"friday_workout_exercises[";
            echo twig_escape_filter($this->env, $this->getAttribute($context["exercise"], "idExercise", []), "html", null, true);
            echo "][]\" ";
            if (((($context["friday_workout"] ?? $this->getContext($context, "friday_workout")) != false) && twig_in_filter($this->getAttribute($context["exercise"], "idExercise", []), ($context["friday_workout_exercises"] ?? $this->getContext($context, "friday_workout_exercises"))))) {
                echo "checked";
            }
            echo ">
                                                        ";
            // line 596
            echo twig_escape_filter($this->env, $this->getAttribute($context["exercise"], "title", []), "html", null, true);
            echo "
                                                    </li>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['exercise'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 599
        echo "                                            </ul>
                                            <label for=\"friday-workout-notes\">Observaciones:</label>
                                            <textarea type=\"text\" disabled=\"disabled\" id=\"friday-workout-notes\" name=\"friday_workout_notes\" class=\"form-control\" style=\"height: 80px\">";
        // line 601
        if ((($context["friday_workout"] ?? $this->getContext($context, "friday_workout")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["friday_workout"] ?? $this->getContext($context, "friday_workout")), "workoutNotes", []), "html", null, true);
        }
        echo "</textarea>
                                        </div>
                                    </div>
                                </div>
                                <input type=\"button\" name=\"previous\" class=\"previous action-button-previous\" value=\"Previo\"/>
                                <input type=\"button\" name=\"next\" class=\"next action-button\" value=\"Siguiente\"/>
                            </fieldset>
                            <!-- SABADO -->
                            <fieldset>
                                <div class=\"form-card\">
                                    <div class=\"col-sm-9 \">
                                        <div id=\"meals-buttons\">
                                            <button style=\"margin-left: 1px\" class=\"btn btn-primary day-meal-button day-meal-button-active\" type=\"button\">Desayuno</button>
                                            <button class=\"btn btn-primary day-meal-button\" type=\"button\">Snack</button>
                                            <button class=\"btn btn-primary day-meal-button\" type=\"button\">Almuerzo</button>
                                            <button class=\"btn btn-primary day-meal-button\" type=\"button\">Merienda</button>
                                            <button class=\"btn btn-primary day-meal-button\" type=\"button\">Cena</button>
                                        </div>
                                        <div class=\"day-plan-breakfast day-plan day-meal-visible\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input disabled=\"disabled\" style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"breakfast_hour_saturday\" value=\"";
        // line 621
        if ((($context["saturday_breakfast"] ?? $this->getContext($context, "saturday_breakfast")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["saturday_breakfast"] ?? $this->getContext($context, "saturday_breakfast")), "hour", []), "html", null, true);
        } else {
            echo "08:30";
        }
        echo "\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" disabled=\"disabled\" id=\"menu\" name=\"breakfast_menu_saturday\" class=\"form-control\" style=\"height: 430px\">";
        // line 623
        if ((($context["saturday_breakfast"] ?? $this->getContext($context, "saturday_breakfast")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["saturday_breakfast"] ?? $this->getContext($context, "saturday_breakfast")), "meal", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista de la compra:</label><textarea type=\"text\" disabled=\"disabled\" id=\"list\" name=\"breakfast_list_saturday\" class=\"form-control\" style=\"height: 225px\">";
        // line 626
        if ((($context["saturday_breakfast"] ?? $this->getContext($context, "saturday_breakfast")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["saturday_breakfast"] ?? $this->getContext($context, "saturday_breakfast")), "mealShoppingList", []), "html", null, true);
        }
        echo "</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" disabled=\"disabled\" id=\"comments\" name=\"breakfast_comments_saturday\" class=\"form-control\" style=\"height: 186px\">";
        // line 628
        if ((($context["saturday_breakfast"] ?? $this->getContext($context, "saturday_breakfast")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["saturday_breakfast"] ?? $this->getContext($context, "saturday_breakfast")), "mealNotes", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-snack day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input disabled=\"disabled\" style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"snack_hour_saturday\" value=\"";
        // line 633
        if ((($context["saturday_breakfast"] ?? $this->getContext($context, "saturday_breakfast")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["saturday_breakfast"] ?? $this->getContext($context, "saturday_breakfast")), "hour", []), "html", null, true);
        } else {
            echo "11:30";
        }
        echo "\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" disabled=\"disabled\" id=\"menu\" name=\"snack_menu_saturday\" class=\"form-control\" style=\"height: 430px\">";
        // line 635
        if ((($context["saturday_breakfast"] ?? $this->getContext($context, "saturday_breakfast")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["saturday_snack"] ?? $this->getContext($context, "saturday_snack")), "meal", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista de la compra:</label><textarea type=\"text\" disabled=\"disabled\" id=\"list\" name=\"snack_list_saturday\" class=\"form-control\" style=\"height: 225px\">";
        // line 638
        if ((($context["saturday_breakfast"] ?? $this->getContext($context, "saturday_breakfast")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["saturday_snack"] ?? $this->getContext($context, "saturday_snack")), "mealShoppingList", []), "html", null, true);
        }
        echo "</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" disabled=\"disabled\" id=\"comments\" name=\"snack_comments_saturday\" class=\"form-control\" style=\"height: 186px\">";
        // line 640
        if ((($context["saturday_breakfast"] ?? $this->getContext($context, "saturday_breakfast")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["saturday_snack"] ?? $this->getContext($context, "saturday_snack")), "mealNotes", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-lunch day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input disabled=\"disabled\" style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"lunch_hour_saturday\" value=\"";
        // line 645
        if ((($context["saturday_lunch"] ?? $this->getContext($context, "saturday_lunch")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["saturday_lunch"] ?? $this->getContext($context, "saturday_lunch")), "hour", []), "html", null, true);
        } else {
            echo "14:00";
        }
        echo "\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" disabled=\"disabled\" id=\"menu\" name=\"lunch_menu_saturday\" class=\"form-control\" style=\"height: 430px\">";
        // line 647
        if ((($context["saturday_lunch"] ?? $this->getContext($context, "saturday_lunch")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["saturday_lunch"] ?? $this->getContext($context, "saturday_lunch")), "meal", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista de la compra:</label><textarea type=\"text\" disabled=\"disabled\" id=\"list\" name=\"lunch_list_saturday\" class=\"form-control\" style=\"height: 225px\">";
        // line 650
        if ((($context["saturday_lunch"] ?? $this->getContext($context, "saturday_lunch")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["saturday_lunch"] ?? $this->getContext($context, "saturday_lunch")), "mealShoppingList", []), "html", null, true);
        }
        echo "</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" disabled=\"disabled\" id=\"comments\" name=\"lunch_comments_saturday\" class=\"form-control\" style=\"height: 186px\">";
        // line 652
        if ((($context["saturday_lunch"] ?? $this->getContext($context, "saturday_lunch")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["saturday_lunch"] ?? $this->getContext($context, "saturday_lunch")), "mealNotes", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-afternoon day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input disabled=\"disabled\" style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"afternoon_hour_saturday\" value=\"";
        // line 657
        if ((($context["saturday_afternoon"] ?? $this->getContext($context, "saturday_afternoon")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["saturday_afternoon"] ?? $this->getContext($context, "saturday_afternoon")), "hour", []), "html", null, true);
        } else {
            echo "17:30";
        }
        echo "\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" disabled=\"disabled\" id=\"menu\" name=\"afternoon_menu_saturday\" class=\"form-control\" style=\"height: 430px\">";
        // line 659
        if ((($context["saturday_afternoon"] ?? $this->getContext($context, "saturday_afternoon")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["saturday_afternoon"] ?? $this->getContext($context, "saturday_afternoon")), "meal", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista de la compra:</label><textarea type=\"text\" disabled=\"disabled\" id=\"list\" name=\"afternoon_list_saturday\" class=\"form-control\" style=\"height: 225px\">";
        // line 662
        if ((($context["saturday_afternoon"] ?? $this->getContext($context, "saturday_afternoon")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["saturday_afternoon"] ?? $this->getContext($context, "saturday_afternoon")), "mealShoppingList", []), "html", null, true);
        }
        echo "</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" disabled=\"disabled\" id=\"comments\" name=\"afternoon_comments_saturday\" class=\"form-control\" style=\"height: 186px\">";
        // line 664
        if ((($context["saturday_afternoon"] ?? $this->getContext($context, "saturday_afternoon")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["saturday_afternoon"] ?? $this->getContext($context, "saturday_afternoon")), "mealNotes", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-dinner day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input disabled=\"disabled\" style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"dinner_hour_saturday\" value=\"";
        // line 669
        if ((($context["saturday_dinner"] ?? $this->getContext($context, "saturday_dinner")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["saturday_dinner"] ?? $this->getContext($context, "saturday_dinner")), "hour", []), "html", null, true);
        } else {
            echo "21:00";
        }
        echo "\" min=\"09:00\" max=\"22:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" disabled=\"disabled\" id=\"menu\" name=\"dinner_menu_saturday\" class=\"form-control\" style=\"height: 430px\">";
        // line 671
        if ((($context["saturday_dinner"] ?? $this->getContext($context, "saturday_dinner")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["saturday_dinner"] ?? $this->getContext($context, "saturday_dinner")), "meal", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista de la compra:</label><textarea type=\"text\" disabled=\"disabled\" id=\"list\" name=\"dinner_list_saturday\" class=\"form-control\" style=\"height: 225px\">";
        // line 674
        if ((($context["saturday_dinner"] ?? $this->getContext($context, "saturday_dinner")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["saturday_dinner"] ?? $this->getContext($context, "saturday_dinner")), "mealShoppingList", []), "html", null, true);
        }
        echo "</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" disabled=\"disabled\" id=\"comments\" name=\"dinner_comments_saturday\" class=\"form-control\" style=\"height: 186px\">";
        // line 676
        if ((($context["saturday_dinner"] ?? $this->getContext($context, "saturday_dinner")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["saturday_dinner"] ?? $this->getContext($context, "saturday_dinner")), "mealNotes", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-sm-3\">
                                        <div class=\"workout-rest\">
                                            <input disabled=\"disabled\" type=\"checkbox\" value=\"1\" style=\"width: fit-content; margin-bottom: 10px; margin-top: 10px; margin-right: 10px\" name=\"saturday_workout_rest\" id=\"saturday-workout-rest\" ";
        // line 682
        if ((($context["saturday_workout"] ?? $this->getContext($context, "saturday_workout")) == false)) {
            echo " checked ";
        }
        echo " onclick=\"restDay('saturday')\"><strong>Descanso</strong>
                                        </div>
                                        <div class=\"saturday-workout\" ";
        // line 684
        if ((($context["saturday_workout"] ?? $this->getContext($context, "saturday_workout")) == false)) {
            echo " style=\"display: none\"";
        }
        echo ">
                                            <br/>
                                            <label for=\"saturday_workout_sort\">Tipo de entrenamiento:</label>
                                            <select name=\"saturday_workout_sort\" id=\"saturday_workout_sort\">
                                                <option value=\"Fuerza Tren Superior\">Fuerza Tren Superior</option>
                                                <option value=\"Fuerza Tren Inferior\">Fuerza Tren Inferior</option>
                                                <option value=\"Cardio\">Cardio</option>
                                                <option value=\"HIIT\">HIIT</option>
                                                <option value=\"Relajacion\">Relajación</option>
                                            </select>
                                            <br/><br/>
                                            <label for=\"saturday_workout_time\">Hora:</label>
                                            <input disabled=\"disabled\" type=\"time\" name=\"saturday_workout_time\" value=\"";
        // line 696
        if ((($context["saturday_workout"] ?? $this->getContext($context, "saturday_workout")) != false)) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["saturday_workout"] ?? $this->getContext($context, "saturday_workout")), "hour", []), "H:i:s"), "html", null, true);
        }
        echo "\" style=\"width: fit-content\">
                                            <label for=\"saturday-workout\">Entrenamiento:</label>
                                            <textarea type=\"text\" disabled=\"disabled\" id=\"saturday-workout\" name=\"saturday_workout\" class=\"form-control\" style=\"height: 150px\">";
        // line 698
        if ((($context["saturday_workout"] ?? $this->getContext($context, "saturday_workout")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["saturday_workout"] ?? $this->getContext($context, "saturday_workout")), "workout", []), "html", null, true);
        }
        echo "</textarea>
                                            <br/>
                                            <ul class=\"list-group\" id=\"saturday-workout-exercises\">
                                                ";
        // line 701
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["exercises"] ?? $this->getContext($context, "exercises")));
        foreach ($context['_seq'] as $context["_key"] => $context["exercise"]) {
            // line 702
            echo "                                                    <li>
                                                        <input disabled=\"disabled\" type=\"checkbox\" value=\"";
            // line 703
            echo twig_escape_filter($this->env, $this->getAttribute($context["exercise"], "idExercise", []), "html", null, true);
            echo "\" style=\"width: fit-content; margin-bottom: 10px; margin-top: 10px\" name=\"saturday_workout_exercises[";
            echo twig_escape_filter($this->env, $this->getAttribute($context["exercise"], "idExercise", []), "html", null, true);
            echo "][]\" ";
            if (((($context["saturday_workout"] ?? $this->getContext($context, "saturday_workout")) != false) && twig_in_filter($this->getAttribute($context["exercise"], "idExercise", []), ($context["saturday_workout_exercises"] ?? $this->getContext($context, "saturday_workout_exercises"))))) {
                echo "checked";
            }
            echo ">
                                                        ";
            // line 704
            echo twig_escape_filter($this->env, $this->getAttribute($context["exercise"], "title", []), "html", null, true);
            echo "
                                                    </li>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['exercise'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 707
        echo "                                            </ul>
                                            <label for=\"saturday-workout-notes\">Observaciones:</label>
                                            <textarea type=\"text\" disabled=\"disabled\" id=\"saturday-workout-notes\" name=\"saturday_workout_notes\" class=\"form-control\" style=\"height: 80px\">";
        // line 709
        if ((($context["saturday_workout"] ?? $this->getContext($context, "saturday_workout")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["saturday_workout"] ?? $this->getContext($context, "saturday_workout")), "workoutNotes", []), "html", null, true);
        }
        echo "</textarea>
                                        </div>
                                    </div>
                                </div>
                                <input type=\"button\" name=\"previous\" class=\"previous action-button-previous\" value=\"Previo\"/>
                                <input type=\"button\" name=\"next\" class=\"next action-button\" value=\"Siguiente\"/>
                            </fieldset>
                            <!-- DOMINGO -->
                            <fieldset>
                                <div class=\"form-card\">
                                    <div class=\"col-sm-9 \">
                                        <div id=\"meals-buttons\">
                                            <button style=\"margin-left: 1px\" class=\"btn btn-primary day-meal-button day-meal-button-active\" type=\"button\">Desayuno</button>
                                            <button class=\"btn btn-primary day-meal-button\" type=\"button\">Snack</button>
                                            <button class=\"btn btn-primary day-meal-button\" type=\"button\">Almuerzo</button>
                                            <button class=\"btn btn-primary day-meal-button\" type=\"button\">Merienda</button>
                                            <button class=\"btn btn-primary day-meal-button\" type=\"button\">Cena</button>
                                        </div>
                                        <div class=\"day-plan-breakfast day-plan day-meal-visible\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input disabled=\"disabled\" style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"breakfast_hour_sunday\" value=\"";
        // line 729
        if ((($context["sunday_breakfast"] ?? $this->getContext($context, "sunday_breakfast")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["sunday_breakfast"] ?? $this->getContext($context, "sunday_breakfast")), "hour", []), "html", null, true);
        } else {
            echo "08:30";
        }
        echo "\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" disabled=\"disabled\" id=\"menu\" name=\"breakfast_menu_sunday\" class=\"form-control\" style=\"height: 430px\">";
        // line 731
        if ((($context["sunday_breakfast"] ?? $this->getContext($context, "sunday_breakfast")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["sunday_breakfast"] ?? $this->getContext($context, "sunday_breakfast")), "meal", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista de la compra:</label><textarea type=\"text\" disabled=\"disabled\" id=\"list\" name=\"breakfast_list_sunday\" class=\"form-control\" style=\"height: 225px\">";
        // line 734
        if ((($context["sunday_breakfast"] ?? $this->getContext($context, "sunday_breakfast")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["sunday_breakfast"] ?? $this->getContext($context, "sunday_breakfast")), "mealShoppingList", []), "html", null, true);
        }
        echo "</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" disabled=\"disabled\" id=\"comments\" name=\"breakfast_comments_sunday\" class=\"form-control\" style=\"height: 186px\">";
        // line 736
        if ((($context["sunday_breakfast"] ?? $this->getContext($context, "sunday_breakfast")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["sunday_breakfast"] ?? $this->getContext($context, "sunday_breakfast")), "mealNotes", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-snack day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input disabled=\"disabled\" style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"snack_hour_sunday\" value=\"";
        // line 741
        if ((($context["sunday_snack"] ?? $this->getContext($context, "sunday_snack")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["sunday_snack"] ?? $this->getContext($context, "sunday_snack")), "hour", []), "html", null, true);
        } else {
            echo "11:30";
        }
        echo "\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" disabled=\"disabled\" id=\"menu\" name=\"snack_menu_sunday\" class=\"form-control\" style=\"height: 430px\">";
        // line 743
        if ((($context["sunday_snack"] ?? $this->getContext($context, "sunday_snack")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["sunday_snack"] ?? $this->getContext($context, "sunday_snack")), "meal", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista de la compra:</label><textarea type=\"text\" disabled=\"disabled\" id=\"list\" name=\"snack_list_sunday\" class=\"form-control\" style=\"height: 225px\">";
        // line 746
        if ((($context["sunday_snack"] ?? $this->getContext($context, "sunday_snack")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["sunday_snack"] ?? $this->getContext($context, "sunday_snack")), "mealShoppingList", []), "html", null, true);
        }
        echo "</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" disabled=\"disabled\" id=\"comments\" name=\"snack_comments_sunday\" class=\"form-control\" style=\"height: 186px\">";
        // line 748
        if ((($context["sunday_snack"] ?? $this->getContext($context, "sunday_snack")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["sunday_snack"] ?? $this->getContext($context, "sunday_snack")), "mealNotes", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-lunch day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input disabled=\"disabled\" style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"lunch_hour_sunday\" value=\"";
        // line 753
        if ((($context["sunday_lunch"] ?? $this->getContext($context, "sunday_lunch")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["sunday_lunch"] ?? $this->getContext($context, "sunday_lunch")), "hour", []), "html", null, true);
        } else {
            echo "14:00";
        }
        echo "\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" disabled=\"disabled\" id=\"menu\" name=\"lunch_menu_sunday\" class=\"form-control\" style=\"height: 430px\">";
        // line 755
        if ((($context["sunday_lunch"] ?? $this->getContext($context, "sunday_lunch")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["sunday_lunch"] ?? $this->getContext($context, "sunday_lunch")), "meal", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista de la compra:</label><textarea type=\"text\" disabled=\"disabled\" id=\"list\" name=\"lunch_list_sunday\" class=\"form-control\" style=\"height: 225px\">";
        // line 758
        if ((($context["sunday_lunch"] ?? $this->getContext($context, "sunday_lunch")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["sunday_lunch"] ?? $this->getContext($context, "sunday_lunch")), "mealShoppingList", []), "html", null, true);
        }
        echo "</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" disabled=\"disabled\" id=\"comments\" name=\"lunch_comments_sunday\" class=\"form-control\" style=\"height: 186px\">";
        // line 760
        if ((($context["sunday_lunch"] ?? $this->getContext($context, "sunday_lunch")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["sunday_lunch"] ?? $this->getContext($context, "sunday_lunch")), "mealNotes", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-afternoon day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input disabled=\"disabled\" style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"afternoon_hour_sunday\" value=\"";
        // line 765
        if ((($context["sunday_afternoon"] ?? $this->getContext($context, "sunday_afternoon")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["sunday_afternoon"] ?? $this->getContext($context, "sunday_afternoon")), "hour", []), "html", null, true);
        } else {
            echo "17:30";
        }
        echo "\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" disabled=\"disabled\" id=\"menu\" name=\"afternoon_menu_sunday\" class=\"form-control\" style=\"height: 430px\">";
        // line 767
        if ((($context["sunday_afternoon"] ?? $this->getContext($context, "sunday_afternoon")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["sunday_afternoon"] ?? $this->getContext($context, "sunday_afternoon")), "meal", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista de la compra:</label><textarea type=\"text\" disabled=\"disabled\" id=\"list\" name=\"afternoon_list_sunday\" class=\"form-control\" style=\"height: 225px\">";
        // line 770
        if ((($context["sunday_afternoon"] ?? $this->getContext($context, "sunday_afternoon")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["sunday_afternoon"] ?? $this->getContext($context, "sunday_afternoon")), "mealShoppingList", []), "html", null, true);
        }
        echo "</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" disabled=\"disabled\" id=\"comments\" name=\"afternoon_comments_sunday\" class=\"form-control\" style=\"height: 186px\">";
        // line 772
        if ((($context["sunday_afternoon"] ?? $this->getContext($context, "sunday_afternoon")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["sunday_afternoon"] ?? $this->getContext($context, "sunday_afternoon")), "mealNotes", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-dinner day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input disabled=\"disabled\" style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"dinner_hour_sunday\" value=\"";
        // line 777
        if ((($context["sunday_dinner"] ?? $this->getContext($context, "sunday_dinner")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["sunday_dinner"] ?? $this->getContext($context, "sunday_dinner")), "hour", []), "html", null, true);
        } else {
            echo "21:00";
        }
        echo "\" min=\"09:00\" max=\"22:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" disabled=\"disabled\" id=\"menu\" name=\"dinner_menu_sunday\" class=\"form-control\" style=\"height: 430px\">";
        // line 779
        if ((($context["sunday_dinner"] ?? $this->getContext($context, "sunday_dinner")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["sunday_dinner"] ?? $this->getContext($context, "sunday_dinner")), "meal", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista de la compra:</label><textarea type=\"text\" disabled=\"disabled\" id=\"list\" name=\"dinner_list_sunday\" class=\"form-control\" style=\"height: 225px\">";
        // line 782
        if ((($context["sunday_dinner"] ?? $this->getContext($context, "sunday_dinner")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["sunday_dinner"] ?? $this->getContext($context, "sunday_dinner")), "mealShoppingList", []), "html", null, true);
        }
        echo "</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" disabled=\"disabled\" id=\"comments\" name=\"dinner_comments_sunday\" class=\"form-control\" style=\"height: 186px\">";
        // line 784
        if ((($context["sunday_dinner"] ?? $this->getContext($context, "sunday_dinner")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["sunday_dinner"] ?? $this->getContext($context, "sunday_dinner")), "mealNotes", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-sm-3\">
                                        <div class=\"workout-rest\">
                                            <input disabled=\"disabled\" type=\"checkbox\" value=\"1\" style=\"width: fit-content; margin-bottom: 10px; margin-top: 10px; margin-right: 10px\" name=\"sunday_workout_rest\" id=\"sunday-workout-rest\" ";
        // line 790
        if ((($context["sunday_workout"] ?? $this->getContext($context, "sunday_workout")) == false)) {
            echo " checked ";
        }
        echo " onclick=\"restDay('sunday')\"><strong>Descanso</strong>
                                        </div>
                                        <div class=\"sunday-workout\" ";
        // line 792
        if ((($context["sunday_workout"] ?? $this->getContext($context, "sunday_workout")) == false)) {
            echo " style=\"display: none\"";
        }
        echo ">
                                            <br/>
                                            <label for=\"sunday_workout_sort\">Tipo de entrenamiento:</label>
                                            <select name=\"sunday_workout_sort\" id=\"sunday_workout_sort\">
                                                <option value=\"Fuerza Tren Superior\">Fuerza Tren Superior</option>
                                                <option value=\"Fuerza Tren Inferior\">Fuerza Tren Inferior</option>
                                                <option value=\"Cardio\">Cardio</option>
                                                <option value=\"HIIT\">HIIT</option>
                                                <option value=\"Relajacion\">Relajación</option>
                                            </select>
                                            <br/><br/>
                                            <label for=\"sunday_workout_time\">Hora:</label>
                                            <input disabled=\"disabled\" type=\"time\" name=\"sunday_workout_time\" value=\"";
        // line 804
        if ((($context["sunday_workout"] ?? $this->getContext($context, "sunday_workout")) != false)) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["sunday_workout"] ?? $this->getContext($context, "sunday_workout")), "hour", []), "H:i:s"), "html", null, true);
        }
        echo "\" style=\"width: fit-content\">
                                            <label for=\"sunday-workout\">Entrenamiento:</label>
                                            <textarea type=\"text\" disabled=\"disabled\" id=\"sunday-workout\" name=\"sunday_workout\" class=\"form-control\" style=\"height: 150px\">";
        // line 806
        if ((($context["sunday_workout"] ?? $this->getContext($context, "sunday_workout")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["sunday_workout"] ?? $this->getContext($context, "sunday_workout")), "workout", []), "html", null, true);
        }
        echo "</textarea>
                                            <br/>
                                            <ul class=\"list-group\" id=\"sunday-workout-exercises\">
                                                ";
        // line 809
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["exercises"] ?? $this->getContext($context, "exercises")));
        foreach ($context['_seq'] as $context["_key"] => $context["exercise"]) {
            // line 810
            echo "                                                    <li>
                                                        <input disabled=\"disabled\" type=\"checkbox\" value=\"";
            // line 811
            echo twig_escape_filter($this->env, $this->getAttribute($context["exercise"], "idExercise", []), "html", null, true);
            echo "\" style=\"width: fit-content; margin-bottom: 10px; margin-top: 10px\" name=\"sunday_workout_exercises[";
            echo twig_escape_filter($this->env, $this->getAttribute($context["exercise"], "idExercise", []), "html", null, true);
            echo "][]\" ";
            if (((($context["sunday_workout"] ?? $this->getContext($context, "sunday_workout")) != false) && twig_in_filter($this->getAttribute($context["exercise"], "idExercise", []), ($context["sunday_workout_exercises"] ?? $this->getContext($context, "sunday_workout_exercises"))))) {
                echo "checked";
            }
            echo ">
                                                        ";
            // line 812
            echo twig_escape_filter($this->env, $this->getAttribute($context["exercise"], "title", []), "html", null, true);
            echo "
                                                    </li>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['exercise'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 815
        echo "                                            </ul>
                                            <label for=\"sunday-workout-notes\">Observaciones:</label>
                                            <textarea type=\"text\" disabled=\"disabled\" id=\"sunday-workout-notes\" name=\"sunday_workout_notes\" class=\"form-control\" style=\"height: 80px\">";
        // line 817
        if ((($context["sunday_workout"] ?? $this->getContext($context, "sunday_workout")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["sunday_workout"] ?? $this->getContext($context, "sunday_workout")), "workoutNotes", []), "html", null, true);
        }
        echo "</textarea>
                                        </div>
                                    </div>
                                </div>
                                <input type=\"button\" name=\"previous\" class=\"previous action-button-previous\" value=\"Previo\"/>
                            </fieldset>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    </html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Customer/plan.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  2030 => 817,  2026 => 815,  2017 => 812,  2007 => 811,  2004 => 810,  2000 => 809,  1992 => 806,  1985 => 804,  1968 => 792,  1961 => 790,  1950 => 784,  1943 => 782,  1935 => 779,  1926 => 777,  1916 => 772,  1909 => 770,  1901 => 767,  1892 => 765,  1882 => 760,  1875 => 758,  1867 => 755,  1858 => 753,  1848 => 748,  1841 => 746,  1833 => 743,  1824 => 741,  1814 => 736,  1807 => 734,  1799 => 731,  1790 => 729,  1765 => 709,  1761 => 707,  1752 => 704,  1742 => 703,  1739 => 702,  1735 => 701,  1727 => 698,  1720 => 696,  1703 => 684,  1696 => 682,  1685 => 676,  1678 => 674,  1670 => 671,  1661 => 669,  1651 => 664,  1644 => 662,  1636 => 659,  1627 => 657,  1617 => 652,  1610 => 650,  1602 => 647,  1593 => 645,  1583 => 640,  1576 => 638,  1568 => 635,  1559 => 633,  1549 => 628,  1542 => 626,  1534 => 623,  1525 => 621,  1500 => 601,  1496 => 599,  1487 => 596,  1477 => 595,  1474 => 594,  1470 => 593,  1462 => 590,  1455 => 588,  1438 => 576,  1431 => 574,  1420 => 568,  1413 => 566,  1405 => 563,  1396 => 561,  1386 => 556,  1379 => 554,  1371 => 551,  1362 => 549,  1352 => 544,  1345 => 542,  1337 => 539,  1328 => 537,  1318 => 532,  1311 => 530,  1303 => 527,  1294 => 525,  1284 => 520,  1277 => 518,  1269 => 515,  1260 => 513,  1235 => 493,  1231 => 491,  1222 => 488,  1212 => 487,  1209 => 486,  1205 => 485,  1197 => 482,  1190 => 480,  1173 => 468,  1166 => 466,  1155 => 460,  1148 => 458,  1140 => 455,  1131 => 453,  1121 => 448,  1114 => 446,  1106 => 443,  1097 => 441,  1087 => 436,  1080 => 434,  1072 => 431,  1063 => 429,  1053 => 424,  1046 => 422,  1038 => 419,  1029 => 417,  1019 => 412,  1012 => 410,  1004 => 407,  995 => 405,  970 => 385,  966 => 383,  957 => 380,  947 => 379,  944 => 378,  940 => 377,  932 => 374,  925 => 372,  908 => 360,  901 => 358,  890 => 352,  883 => 350,  875 => 347,  866 => 345,  856 => 340,  849 => 338,  841 => 335,  832 => 333,  822 => 328,  815 => 326,  807 => 323,  798 => 321,  788 => 316,  781 => 314,  773 => 311,  764 => 309,  754 => 304,  747 => 302,  739 => 299,  730 => 297,  705 => 277,  701 => 275,  692 => 272,  682 => 271,  679 => 270,  675 => 269,  667 => 266,  660 => 264,  643 => 252,  636 => 250,  625 => 244,  618 => 242,  610 => 239,  601 => 237,  591 => 232,  584 => 230,  576 => 227,  567 => 225,  557 => 220,  550 => 218,  542 => 215,  533 => 213,  523 => 208,  516 => 206,  508 => 203,  499 => 201,  489 => 196,  482 => 194,  474 => 191,  465 => 189,  441 => 170,  437 => 168,  428 => 165,  418 => 164,  415 => 163,  411 => 162,  403 => 159,  396 => 157,  379 => 145,  372 => 143,  361 => 137,  354 => 135,  346 => 132,  337 => 130,  327 => 125,  320 => 123,  312 => 120,  303 => 118,  293 => 113,  286 => 111,  278 => 108,  269 => 106,  259 => 101,  252 => 99,  244 => 96,  235 => 94,  225 => 89,  218 => 87,  210 => 84,  201 => 82,  166 => 50,  161 => 48,  157 => 46,  151 => 45,  144 => 44,  140 => 43,  132 => 38,  128 => 36,  118 => 32,  114 => 30,  109 => 29,  99 => 25,  95 => 23,  90 => 22,  80 => 18,  76 => 16,  72 => 15,  66 => 12,  60 => 10,  58 => 9,  52 => 6,  46 => 2,  34 => 1,);
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
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/framework/css/wizard-plan-form.css') }}\" />
        <!-- Wizard Form JS -->
        <script src=\"{{ asset('bundles/framework/js/wizard-plan.js') }}\"></script>
    </section>
    <section id=\"nutritionist-weekly-plan\">
        {% for message in  app.session.flashbag().get('editWeeklyPlanWarnings') %}
            <div class=\"row\" style=\"width: 92%; margin-left: 4%; margin-top: 10px; margin-bottom: 0;\">
                <div class=\"alert alert-warning\" role=\"alert\" style=\"margin-bottom: 0\">
                    {{ message }}
                </div>
            </div>
        {% endfor %}
        {% for message in  app.session.flashbag().get('editWeeklyPlanKOStatus') %}
            <div class=\"row\" style=\"width: 92%; margin-left: 4%; margin-top: 10px; margin-bottom: 0;\">
                <div class=\"alert alert-danger\" role=\"alert\" style=\"margin-bottom: 0\">
                    {{ message }}
                </div>
            </div>
        {% endfor %}
        {% for message in app.session.flashbag().get('editWeeklyPlanOKStatus') %}
            <div class=\"row\" style=\"width: 92%; margin-left: 4%; margin-top: 10px; margin-bottom: 0;\">
                <div class=\"alert alert-success\" role=\"alert\" style=\"margin-bottom: 0\">
                    {{ message }}
                </div>
            </div>
        {% endfor %}
        <div class=\"container\">
            <!-- Añadimos un novalidate debido a los contenedores ocultos, mostraremos el error con la variable de sesion -->
            <form id=\"msform\" class=\"form\" action=\"{{ path(\"nutritionist_edit_weekly_plan\", {id_plan:weeklyPlan.idPlan}) }}\" method=\"post\" novalidate>
                <div class=\"col-sm-12\">
                    <div id=\"weekly-plan-content-block\" style=\"height: 11rem; margin-bottom: 20px\">
                        <div class=\"col-sm-12\">
                            <h4><span>
                                    {% for tag in tags %}
                                        {% if tag.idTag in weekly_plan_tags_keys %} {{ tag.name }} <span style=\"color: #00766c\">></span> {% endif %}
                                    {% endfor %}
                                </span>
                                <br/>
                                <strong style=\"color: #00766c\">{{ weeklyPlan.title}}</strong>
                                <br/><br/>
                                <p>{{ weeklyPlan.description }}</p>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-12\">
                    <div id=\"weekly-plan-content-block\">
                        <div class=\"col-sm-12\">
                            <!-- progressbar -->
                            <ul id=\"progressbar\">
                                <li class=\"active\" id=\"monday\"><strong>Lunes</strong></li>
                                <li id=\"tuesday\"><strong>Martes</strong></li>
                                <li id=\"wednesday\"><strong>Miércoles</strong></li>
                                <li id=\"thursday\"><strong>Jueves</strong></li>
                                <li id=\"friday\"><strong>Viernes</strong></li>
                                <li id=\"saturday\"><strong>Sábado</strong></li>
                                <li id=\"sunday\"><strong>Domingo</strong></li>
                            </ul>

                            <!-- LUNES -->
                            <fieldset>
                                <div class=\"form-card\">
                                    <div class=\"col-sm-9 \">
                                        <div id=\"meals-buttons\">
                                            <button style=\"margin-left: 1px\" class=\"btn btn-primary day-meal-button day-meal-button-active\" type=\"button\">Desayuno</button>
                                            <button class=\"btn btn-primary day-meal-button\" type=\"button\">Snack</button>
                                            <button class=\"btn btn-primary day-meal-button\" type=\"button\">Almuerzo</button>
                                            <button class=\"btn btn-primary day-meal-button\" type=\"button\">Merienda</button>
                                            <button class=\"btn btn-primary day-meal-button\" type=\"button\">Cena</button>
                                        </div>
                                        <div class=\"day-plan-breakfast day-plan day-meal-visible\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input disabled=\"disabled\" style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"breakfast_hour_monday\" value=\"{% if monday_breakfast != false %}{{ monday_breakfast.hour }}{% else %}08:30{% endif %}\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" disabled=\"disabled\" id=\"menu\" name=\"breakfast_menu_monday\" class=\"form-control\" style=\"height: 430px\">{% if monday_breakfast != false %}{{ monday_breakfast.meal }}{% endif %}</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista de la compra:</label><textarea type=\"text\" disabled=\"disabled\" id=\"list\" name=\"breakfast_list_monday\" class=\"form-control\" style=\"height: 225px\">{% if monday_breakfast != false %}{{ monday_breakfast.mealShoppingList }}{% endif %}</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" disabled=\"disabled\" id=\"comments\" name=\"breakfast_comments_monday\" class=\"form-control\" style=\"height: 186px\">{% if monday_breakfast != false %}{{ monday_breakfast.mealNotes }}{% endif %}</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-snack day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input disabled=\"disabled\" style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"snack_hour_monday\" value=\"{% if monday_snack != false %}{{ monday_snack.hour }}{% else %}11:30{% endif %}\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" disabled=\"disabled\" id=\"menu\" name=\"snack_menu_monday\" class=\"form-control\" style=\"height: 430px\">{% if monday_snack != false %}{{ monday_snack.meal }}{% endif %}</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista de la compra:</label><textarea type=\"text\" disabled=\"disabled\" id=\"list\" name=\"snack_list_monday\" class=\"form-control\" style=\"height: 225px\">{% if monday_snack != false %}{{ monday_snack.mealShoppingList }}{% endif %}</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" disabled=\"disabled\" id=\"comments\" name=\"snack_comments_monday\" class=\"form-control\" style=\"height: 186px\">{% if monday_snack != false %}{{ monday_snack.mealNotes }}{% endif %}</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-lunch day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input disabled=\"disabled\" style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"lunch_hour_monday\" value=\"{% if monday_lunch != false %}{{ monday_lunch.hour }}{% else %}14:00{% endif %}\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" disabled=\"disabled\" id=\"menu\" name=\"lunch_menu_monday\" class=\"form-control\" style=\"height: 430px\">{% if monday_lunch != false %}{{ monday_lunch.meal }}{% endif %}</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista de la compra:</label><textarea type=\"text\" disabled=\"disabled\" id=\"list\" name=\"lunch_list_monday\" class=\"form-control\" style=\"height: 225px\">{% if monday_lunch != false %}{{ monday_lunch.mealShoppingList }}{% endif %}</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" disabled=\"disabled\" id=\"comments\" name=\"lunch_comments_monday\" class=\"form-control\" style=\"height: 186px\">{% if monday_lunch != false %}{{ monday_lunch.mealNotes }}{% endif %}</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-afternoon day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input disabled=\"disabled\" style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"afternoon_hour_monday\" value=\"{% if monday_afternoon != false %}{{ monday_afternoon.hour }}{% else %}17:30{% endif %}\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" disabled=\"disabled\" id=\"menu\" name=\"afternoon_menu_monday\" class=\"form-control\" style=\"height: 430px\">{% if monday_afternoon != false %}{{ monday_afternoon.meal }}{% endif %}</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista de la compra:</label><textarea type=\"text\" disabled=\"disabled\" id=\"list\" name=\"afternoon_list_monday\" class=\"form-control\" style=\"height: 225px\">{% if monday_afternoon != false %}{{ monday_afternoon.mealShoppingList }}{% endif %}</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" disabled=\"disabled\" id=\"comments\" name=\"afternoon_comments_monday\" class=\"form-control\" style=\"height: 186px\">{% if monday_afternoon != false %}{{ monday_afternoon.mealNotes }}{% endif %}</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-dinner day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input disabled=\"disabled\" style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"dinner_hour_monday\" value=\"{% if monday_dinner != false %}{{ monday_dinner.hour }}{% else %}21:00{% endif %}\" min=\"09:00\" max=\"22:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" disabled=\"disabled\" id=\"menu\" name=\"dinner_menu_monday\" class=\"form-control\" style=\"height: 430px\">{% if monday_dinner != false %}{{ monday_dinner.meal }}{% endif %}</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista de la compra:</label><textarea type=\"text\" disabled=\"disabled\" id=\"list\" name=\"dinner_list_monday\" class=\"form-control\" style=\"height: 225px\">{% if monday_dinner != false %}{{ monday_dinner.mealShoppingList }}{% endif %}</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" disabled=\"disabled\" id=\"comments\" name=\"dinner_comments_monday\" class=\"form-control\" style=\"height: 186px\">{% if monday_dinner != false %}{{ monday_dinner.mealNotes }}{% endif %}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-sm-3\">
                                        <div class=\"workout-rest\">
                                            <input disabled=\"disabled\" type=\"checkbox\" value=\"1\" style=\"width: fit-content; margin-bottom: 10px; margin-top: 10px; margin-right: 10px\" name=\"monday_workout_rest\" id=\"monday-workout-rest\" {% if monday_workout == false %} checked {% endif %} onclick=\"restDay('monday')\"><strong>Descanso</strong>
                                        </div>
                                        <div class=\"monday-workout\"  {% if monday_workout == false %} style=\"display: none\" {% endif %}>
                                            <br/>
                                            <label for=\"monday_workout_sort\">Tipo de entrenamiento:</label>
                                            <select name=\"monday_workout_sort\" id=\"monday_workout_sort\">
                                                <option value=\"Fuerza Tren Superior\">Fuerza Tren Superior</option>
                                                <option value=\"Fuerza Tren Inferior\">Fuerza Tren Inferior</option>
                                                <option value=\"Cardio\">Cardio</option>
                                                <option value=\"HIIT\">HIIT</option>
                                                <option value=\"Relajacion\">Relajación</option>
                                            </select>
                                            <br/><br/>
                                            <label for=\"monday_workout_time\">Hora:</label>
                                            <input disabled=\"disabled\" type=\"time\" name=\"monday_workout_time\" value=\"{% if monday_workout != false %}{{ monday_workout.hour|date('H:i:s') }}{% endif %}\" style=\"width: fit-content\">
                                            <label for=\"monday-workout\">Entrenamiento:</label>
                                            <textarea type=\"text\" disabled=\"disabled\" id=\"monday-workout\" name=\"monday_workout\" class=\"form-control\" style=\"height: 150px\">{% if monday_workout != false %}{{ monday_workout.workout }}{% endif %}</textarea>
                                            <br/>
                                            <ul class=\"list-group\" id=\"monday-workout-exercises\">
                                                {% for exercise in exercises %}
                                                    <li>
                                                        <input disabled=\"disabled\" type=\"checkbox\" value=\"{{ exercise.idExercise }}\" style=\"width: fit-content; margin-bottom: 10px; margin-top: 10px\" name=\"monday_workout_exercises[{{ exercise.idExercise }}][]\" {% if monday_workout != false and exercise.idExercise in monday_workout_exercises %}checked{% endif %}>
                                                        {{ exercise.title }}
                                                    </li>
                                                {% endfor %}
                                            </ul>
                                            <label for=\"monday-workout-notes\">Observaciones:</label>
                                            <textarea type=\"text\" disabled=\"disabled\" id=\"monday-workout-notes\" name=\"monday_workout_notes\" class=\"form-control\" style=\"height: 80px\">{% if monday_workout != false %}{{ monday_workout.workoutNotes }}{% endif %}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <input type=\"button\" name=\"next\" class=\"next action-button\" value=\"Siguiente\"/>
                            </fieldset>
                            <!-- MARTES -->
                            <fieldset>
                                <div class=\"form-card\">
                                    <div class=\"col-sm-9 \">
                                        <div id=\"meals-buttons\">
                                            <button style=\"margin-left: 1px\" class=\"btn btn-primary day-meal-button day-meal-button-active\" type=\"button\">Desayuno</button>
                                            <button class=\"btn btn-primary day-meal-button\" type=\"button\">Snack</button>
                                            <button class=\"btn btn-primary day-meal-button\" type=\"button\">Almuerzo</button>
                                            <button class=\"btn btn-primary day-meal-button\" type=\"button\">Merienda</button>
                                            <button class=\"btn btn-primary day-meal-button\" type=\"button\">Cena</button>
                                        </div>
                                        <div class=\"day-plan-breakfast day-plan day-plan-visible\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input disabled=\"disabled\" style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"breakfast_hour_tuesday\" value=\"{% if tuesday_breakfast != false %}{{ tuesday_breakfast.hour }}{% else %}08:00{% endif %}\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" disabled=\"disabled\" id=\"menu\" name=\"breakfast_menu_tuesday\" class=\"form-control\" style=\"height: 430px\">{% if tuesday_breakfast != false %}{{ tuesday_breakfast.meal }}{% endif %}</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista de la compra:</label><textarea type=\"text\" disabled=\"disabled\" id=\"list\" name=\"breakfast_list_tuesday\" class=\"form-control\" style=\"height: 225px\">{% if tuesday_breakfast != false %}{{ tuesday_breakfast.mealShoppingList }}{% endif %}</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" disabled=\"disabled\" id=\"comments\" name=\"breakfast_comments_tuesday\" class=\"form-control\" style=\"height: 186px\">{% if tuesday_breakfast != false %}{{ tuesday_breakfast.mealShoppingList }}{% endif %}</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-snack day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input disabled=\"disabled\" style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"snack_hour_tuesday\" value=\"{% if tuesday_snack != false %}{{ tuesday_snack.hour }}{% else %}11:30{% endif %}\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" disabled=\"disabled\" id=\"menu\" name=\"snack_menu_tuesday\" class=\"form-control\" style=\"height: 430px\">{% if tuesday_snack != false %}{{ tuesday_snack.meal }}{% endif %}</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista de la compra:</label><textarea type=\"text\" disabled=\"disabled\" id=\"list\" name=\"snack_list_tuesday\" class=\"form-control\" style=\"height: 225px\">{% if tuesday_snack != false %}{{ tuesday_snack.mealShoppingList }}{% endif %}</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" disabled=\"disabled\" id=\"comments\" name=\"snack_comments_tuesday\" class=\"form-control\" style=\"height: 186px\">{% if tuesday_snack != false %}{{ tuesday_snack.mealNotes }}{% endif %}</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-lunch day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input disabled=\"disabled\" style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"lunch_hour_tuesday\" value=\"{% if tuesday_lunch != false %}{{ tuesday_lunch.hour }}{% else %}14:00{% endif %}\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" disabled=\"disabled\" id=\"menu\" name=\"lunch_menu_tuesday\" class=\"form-control\" style=\"height: 430px\">{% if tuesday_lunch != false %}{{ tuesday_lunch.meal }}{% endif %}</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista de la compra:</label><textarea type=\"text\" disabled=\"disabled\" id=\"list\" name=\"lunch_list_tuesday\" class=\"form-control\" style=\"height: 225px\">{% if tuesday_lunch != false %}{{ tuesday_lunch.mealShoppingList }}{% endif %}</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" disabled=\"disabled\" id=\"comments\" name=\"lunch_comments_tuesday\" class=\"form-control\" style=\"height: 186px\">{% if tuesday_lunch != false %}{{ tuesday_lunch.mealNotes }}{% endif %}</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-afternoon day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input disabled=\"disabled\" style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"afternoon_hour_tuesday\" value=\"{% if tuesday_afternoon != false %}{{ tuesday_afternoon.hour }}{% else %}17:30{% endif %}\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" disabled=\"disabled\" id=\"menu\" name=\"afternoon_menu_tuesday\" class=\"form-control\" style=\"height: 430px\">{% if tuesday_afternoon != false %}{{ tuesday_afternoon.meal }}{% endif %}</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista de la compra:</label><textarea type=\"text\" disabled=\"disabled\" id=\"list\" name=\"afternoon_list_tuesday\" class=\"form-control\" style=\"height: 225px\">{% if tuesday_afternoon != false %}{{ tuesday_afternoon.mealShoppingList }}{% endif %}</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" disabled=\"disabled\" id=\"comments\" name=\"afternoon_comments_tuesday\" class=\"form-control\" style=\"height: 186px\">{% if tuesday_afternoon != false %}{{ tuesday_afternoon.mealNotes }}{% endif %}</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-dinner day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input disabled=\"disabled\" style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"dinner_hour_tuesday\" value=\"{% if tuesday_dinner != false %}{{ tuesday_dinner.hour }}{% else %}21:00{% endif %}\" min=\"09:00\" max=\"22:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" disabled=\"disabled\" id=\"menu\" name=\"dinner_menu_tuesday\" class=\"form-control\" style=\"height: 430px\">{% if tuesday_dinner != false %}{{ tuesday_dinner.meal }}{% endif %}</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista de la compra:</label><textarea type=\"text\" disabled=\"disabled\" id=\"list\" name=\"dinner_list_tuesday\" class=\"form-control\" style=\"height: 225px\">{% if tuesday_dinner != false %}{{ tuesday_dinner.mealShoppingList }}{% endif %}</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" disabled=\"disabled\" id=\"comments\" name=\"dinner_comments_tuesday\" class=\"form-control\" style=\"height: 186px\">{% if tuesday_dinner != false %}{{ tuesday_dinner.mealNotes }}{% endif %}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-sm-3\">
                                        <div class=\"workout-rest\">
                                            <input disabled=\"disabled\" type=\"checkbox\" value=\"1\" style=\"width: fit-content; margin-bottom: 10px; margin-top: 10px; margin-right: 10px\" name=\"tuesday_workout_rest\" id=\"tuesday-workout-rest\"  {% if tuesday_workout == false %} checked {% endif %}onclick=\"restDay('tuesday')\"><strong>Descanso</strong>
                                        </div>
                                        <div class=\"tuesday-workout\" {% if tuesday_workout == false %} style=\"display: none\" {% endif %}>
                                            <br/>
                                            <label for=\"tuesday_workout_sort\">Tipo de entrenamiento:</label>
                                            <select name=\"tuesday_workout_sort\" id=\"tuesday_workout_sort\">
                                                <option value=\"Fuerza Tren Superior\">Fuerza Tren Superior</option>
                                                <option value=\"Fuerza Tren Inferior\">Fuerza Tren Inferior</option>
                                                <option value=\"Cardio\">Cardio</option>
                                                <option value=\"HIIT\">HIIT</option>
                                                <option value=\"Relajacion\">Relajación</option>
                                            </select>
                                            <br/><br/>
                                            <label for=\"tuesday_workout_time\">Hora:</label>
                                            <input disabled=\"disabled\" type=\"time\" name=\"tuesday_workout_time\" value=\"{% if tuesday_workout != false %}{{ tuesday_workout.hour|date('H:i:s') }}{% endif %}\" style=\"width: fit-content\">
                                            <label for=\"tuesday-workout\">Entrenamiento:</label>
                                            <textarea type=\"text\" disabled=\"disabled\" id=\"tuesday-workout\" name=\"tuesday_workout\" class=\"form-control\" style=\"height: 150px\">{% if tuesday_workout != false %}{{ tuesday_workout.workout }}{% endif %}</textarea>
                                            <br/>
                                            <ul class=\"list-group\" id=\"tuesday-workout-exercises\">
                                                {% for exercise in exercises %}
                                                    <li>
                                                        <input disabled=\"disabled\" type=\"checkbox\" value=\"{{ exercise.idExercise }}\" style=\"width: fit-content; margin-bottom: 10px; margin-top: 10px\" name=\"tuesday_workout_exercises[{{ exercise.idExercise }}][]\" {% if tuesday_workout != false and exercise.idExercise in tuesday_workout_exercises %}checked{% endif %}>
                                                        {{ exercise.title }}
                                                    </li>
                                                {% endfor %}
                                            </ul>
                                            <label for=\"tuesday-workout-notes\">Observaciones:</label>
                                            <textarea type=\"text\" disabled=\"disabled\" id=\"tuesday-workout-notes\" name=\"tuesday_workout_notes\" class=\"form-control\" style=\"height: 80px\">{% if tuesday_workout != false %}{{ tuesday_workout.workoutNotes }}{% endif %}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <input type=\"button\" name=\"previous\" class=\"previous action-button-previous\" value=\"Previo\"/>
                                <input type=\"button\" name=\"next\" class=\"next action-button\" value=\"Siguiente\"/>
                            </fieldset>
                            <!-- MIERCOLES -->
                            <fieldset>
                                <div class=\"form-card\">
                                    <div class=\"col-sm-9 \">
                                        <div id=\"meals-buttons\">
                                            <button style=\"margin-left: 1px\" class=\"btn btn-primary day-meal-button day-meal-button-active\" type=\"button\">Desayuno</button>
                                            <button class=\"btn btn-primary day-meal-button\" type=\"button\">Snack</button>
                                            <button class=\"btn btn-primary day-meal-button\" type=\"button\">Almuerzo</button>
                                            <button class=\"btn btn-primary day-meal-button\" type=\"button\">Merienda</button>
                                            <button class=\"btn btn-primary day-meal-button\" type=\"button\">Cena</button>
                                        </div>
                                        <div class=\"day-plan-breakfast day-plan day-meal-visible\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input disabled=\"disabled\" style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"breakfast_hour_wednesday\" value=\"{% if wednesday_breakfast != false %}{{ wednesday_breakfast.hour }}{% else %}08:30{% endif %}\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" disabled=\"disabled\" id=\"menu\" name=\"breakfast_menu_wednesday\" class=\"form-control\" style=\"height: 430px\">{% if wednesday_breakfast != false %}{{ wednesday_breakfast.meal }}{% endif %}</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista de la compra:</label><textarea type=\"text\" disabled=\"disabled\" id=\"list\" name=\"breakfast_list_wednesday\" class=\"form-control\" style=\"height: 225px\">{% if wednesday_breakfast != false %}{{ wednesday_breakfast.mealShoppingList }}{% endif %}</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" disabled=\"disabled\" id=\"comments\" name=\"breakfast_comments_wednesday\" class=\"form-control\" style=\"height: 186px\">{% if wednesday_breakfast != false %}{{ wednesday_breakfast.mealNotes }}{% endif %}</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-snack day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input disabled=\"disabled\" style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"snack_hour_wednesday\" value=\"{% if wednesday_snack != false %}{{ wednesday_snack.hour }}{% else %}11:30{% endif %}\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" disabled=\"disabled\" id=\"menu\" name=\"snack_menu_wednesday\" class=\"form-control\" style=\"height: 430px\">{% if wednesday_snack != false %}{{ wednesday_snack.meal }}{% endif %}</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista de la compra:</label><textarea type=\"text\" disabled=\"disabled\" id=\"list\" name=\"snack_list_wednesday\" class=\"form-control\" style=\"height: 225px\">{% if wednesday_snack != false %}{{ wednesday_snack.mealShoppingList }}{% endif %}</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" disabled=\"disabled\" id=\"comments\" name=\"snack_comments_wednesday\" class=\"form-control\" style=\"height: 186px\"><{% if wednesday_snack != false %}{{ wednesday_snack.mealNotes }}{% endif %}</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-lunch day-plan\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input disabled=\"disabled\" style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"lunch_hour_wednesday\" value=\"{% if wednesday_lunch != false %}{{ wednesday_lunch.hour }}{% else %}14:00{% endif %}\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" disabled=\"disabled\" id=\"menu\" name=\"lunch_menu_wednesday\" class=\"form-control\" style=\"height: 430px\">{% if wednesday_lunch != false %}{{ wednesday_lunch.meal }}{% endif %}</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista de la compra:</label><textarea type=\"text\" disabled=\"disabled\" id=\"list\" name=\"lunch_list_wednesday\" class=\"form-control\" style=\"height: 225px\">{% if wednesday_lunch != false %}{{ wednesday_lunch.mealShoppingList }}{% endif %}</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" disabled=\"disabled\" id=\"comments\" name=\"lunch_comments_wednesday\" class=\"form-control\" style=\"height: 186px\">{% if wednesday_lunch != false %}{{ wednesday_lunch.mealNotes }}{% endif %}</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-afternoon day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input disabled=\"disabled\" style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"afternoon_hour_wednesday\" value=\"{% if wednesday_afternoon != false %}{{ wednesday_afternoon.hour }}{% else %}17:30{% endif %}\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" disabled=\"disabled\" id=\"menu\" name=\"afternoon_menu_wednesday\" class=\"form-control\" style=\"height: 430px\">{% if wednesday_afternoon != false %}{{ wednesday_afternoon.meal }}{% endif %}</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista de la compra:</label><textarea type=\"text\" disabled=\"disabled\" id=\"list\" name=\"afternoon_list_wednesday\" class=\"form-control\" style=\"height: 225px\">{% if wednesday_afternoon != false %}{{ wednesday_afternoon.mealShoppingList }}{% endif %}</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" disabled=\"disabled\" id=\"comments\" name=\"afternoon_comments_wednesday\" class=\"form-control\" style=\"height: 186px\">{% if wednesday_afternoon != false %}{{ wednesday_afternoon.mealNotes }}{% endif %}</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-dinner day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input disabled=\"disabled\" style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"dinner_hour_wednesday\" value=\"{% if wednesday_dinner != false %}{{ wednesday_dinner.hour }}{% else %}21:00{% endif %}\" min=\"09:00\" max=\"22:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" disabled=\"disabled\" id=\"menu\" name=\"dinner_menu_wednesday\" class=\"form-control\" style=\"height: 430px\">{% if wednesday_dinner != false %}{{ wednesday_dinner.meal }}{% endif %}</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista de la compra:</label><textarea type=\"text\" disabled=\"disabled\" id=\"list\" name=\"dinner_list_wednesday\" class=\"form-control\" style=\"height: 225px\">{% if wednesday_dinner != false %}{{ wednesday_dinner.mealShoppingList }}{% endif %}</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" disabled=\"disabled\" id=\"comments\" name=\"dinner_comments_wednesday\" class=\"form-control\" style=\"height: 186px\">{% if wednesday_dinner != false %}{{ wednesday_dinner.mealNotes }}{% endif %}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-sm-3\">
                                        <div class=\"workout-rest\">
                                            <input disabled=\"disabled\" type=\"checkbox\" value=\"1\" style=\"width: fit-content; margin-bottom: 10px; margin-top: 10px; margin-right: 10px\" name=\"wednesday_workout_rest\" id=\"wednesday-workout-rest\" {% if wednesday_workout == false %} checked {% endif %}onclick=\"restDay('wednesday')\"><strong>Descanso</strong>
                                        </div>
                                        <div class=\"wednesday-workout\" {% if wednesday_workout == false %} style=\"display: none\"{% endif %}>
                                            <br/>
                                            <label for=\"wednesday_workout_sort\">Tipo de entrenamiento:</label>
                                            <select name=\"wednesday_workout_sort\" id=\"wednesday_workout_sort\">
                                                <option value=\"Fuerza Tren Superior\">Fuerza Tren Superior</option>
                                                <option value=\"Fuerza Tren Inferior\">Fuerza Tren Inferior</option>
                                                <option value=\"Cardio\">Cardio</option>
                                                <option value=\"HIIT\">HIIT</option>
                                                <option value=\"Relajacion\">Relajación</option>
                                            </select>
                                            <br/><br/>
                                            <label for=\"wednesday_workout_time\">Hora:</label>
                                            <input disabled=\"disabled\" type=\"time\" name=\"wednesday_workout_time\" value=\"{% if wednesday_workout != false %}{{ wednesday_workout.hour|date('H:i:s') }}{% endif %}\" style=\"width: fit-content\">
                                            <label for=\"wednesday-workout\">Entrenamiento:</label>
                                            <textarea type=\"text\" disabled=\"disabled\" id=\"wednesday-workout\" name=\"wednesday_workout\" class=\"form-control\" style=\"height: 150px\">{% if wednesday_workout != false %}{{ wednesday_workout.workout }}{% endif %}</textarea>
                                            <br/>
                                            <ul class=\"list-group\" id=\"wednesday-workout-exercises\">
                                                {% for exercise in exercises %}
                                                    <li>
                                                        <input disabled=\"disabled\" type=\"checkbox\" value=\"{{ exercise.idExercise }}\" style=\"width: fit-content; margin-bottom: 10px; margin-top: 10px\" name=\"wednesday_workout_exercises[{{ exercise.idExercise }}][]\" {% if wednesday_workout != false and exercise.idExercise in wednesday_workout_exercises %}checked{% endif %}>
                                                        {{ exercise.title }}
                                                    </li>
                                                {% endfor %}
                                            </ul>
                                            <label for=\"wednesday-workout-notes\">Observaciones:</label>
                                            <textarea type=\"text\" disabled=\"disabled\" id=\"wednesday-workout-notes\" name=\"wednesday_workout_notes\" class=\"form-control\" style=\"height: 80px\">{% if wednesday_workout != false %}{{ wednesday_workout.workoutNotes }}{% endif %}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <input type=\"button\" name=\"previous\" class=\"previous action-button-previous\" value=\"Previo\"/>
                                <input type=\"button\" name=\"next\" class=\"next action-button\" value=\"Siguiente\"/>
                            </fieldset>
                            <!-- JUEVES -->
                            <fieldset>
                                <div class=\"form-card\">
                                    <div class=\"col-sm-9 \">
                                        <div id=\"meals-buttons\">
                                            <button style=\"margin-left: 1px\" class=\"btn btn-primary day-meal-button day-meal-button-active\" type=\"button\">Desayuno</button>
                                            <button class=\"btn btn-primary day-meal-button\" type=\"button\">Snack</button>
                                            <button class=\"btn btn-primary day-meal-button\" type=\"button\">Almuerzo</button>
                                            <button class=\"btn btn-primary day-meal-button\" type=\"button\">Merienda</button>
                                            <button class=\"btn btn-primary day-meal-button\" type=\"button\">Cena</button>
                                        </div>
                                        <div class=\"day-plan-breakfast day-plan day-meal-visible\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input disabled=\"disabled\" style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"breakfast_hour_thursday\" value=\"{% if thursday_breakfast != false %}{{ thursday_breakfast.hour }}{% else %}08:30{% endif %}\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" disabled=\"disabled\" id=\"menu\" name=\"breakfast_menu_thursday\" class=\"form-control\" style=\"height: 430px\">{% if thursday_breakfast != false %}{{ thursday_breakfast.meal }}{% endif %}</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista de la compra:</label><textarea type=\"text\" disabled=\"disabled\" id=\"list\" name=\"breakfast_list_thursday\" class=\"form-control\" style=\"height: 225px\">{% if thursday_breakfast != false %}{{ thursday_breakfast.mealShoppingList }}{% endif %}</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" disabled=\"disabled\" id=\"comments\" name=\"breakfast_comments_thursday\" class=\"form-control\" style=\"height: 186px\">{% if thursday_breakfast != false %}{{ thursday_breakfast.mealNotes }}{% endif %}</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-snack day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input disabled=\"disabled\" style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"snack_hour_thursday\" value=\"{% if thursday_snack != false %}{{ thursday_snack.hour }}{% else %}21:00{% endif %}\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" disabled=\"disabled\" id=\"menu\" name=\"snack_menu_thursday\" class=\"form-control\" style=\"height: 430px\">{% if thursday_snack != false %}{{ thursday_snack.meal }}{% endif %}</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista de la compra:</label><textarea type=\"text\" disabled=\"disabled\" id=\"list\" name=\"snack_list_thursday\" class=\"form-control\" style=\"height: 225px\">{% if thursday_snack != false %}{{ thursday_snack.mealShoppingList }}{% endif %}</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" disabled=\"disabled\" id=\"comments\" name=\"snack_comments_thursday\" class=\"form-control\" style=\"height: 186px\">{% if thursday_snack != false %}{{ thursday_snack.mealNotes }}{% endif %}</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-lunch day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input disabled=\"disabled\" style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"lunch_hour_thursday\" value=\"{% if thursday_lunch != false %}{{ thursday_lunch.hour }}{% else %}21:00{% endif %}\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" disabled=\"disabled\" id=\"menu\" name=\"lunch_menu_thursday\" class=\"form-control\" style=\"height: 430px\">{% if thursday_lunch != false %}{{ thursday_lunch.meal }}{% endif %}</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista de la compra:</label><textarea type=\"text\" disabled=\"disabled\" id=\"list\" name=\"lunch_list_thursday\" class=\"form-control\" style=\"height: 225px\">{% if thursday_lunch != false %}{{ thursday_lunch.mealShoppingList }}{% endif %}</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" disabled=\"disabled\" id=\"comments\" name=\"lunch_comments_thursday\" class=\"form-control\" style=\"height: 186px\">{% if thursday_lunch != false %}{{ thursday_lunch.mealNotes }}{% endif %}</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-afternoon day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input disabled=\"disabled\" style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"afternoon_hour_thursday\" value=\"{% if thursday_afternoon != false %}{{ thursday_afternoon.hour }}{% else %}21:00{% endif %}\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" disabled=\"disabled\" id=\"menu\" name=\"afternoon_menu_thursday\" class=\"form-control\" style=\"height: 430px\">{% if thursday_afternoon != false %}{{ thursday_afternoon.meal }}{% endif %}</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista de la compra:</label><textarea type=\"text\" disabled=\"disabled\" id=\"list\" name=\"afternoon_list_thursday\" class=\"form-control\" style=\"height: 225px\">{% if thursday_afternoon != false %}{{ thursday_afternoon.mealShoppingList }}{% endif %}</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" disabled=\"disabled\" id=\"comments\" name=\"afternoon_comments_thursday\" class=\"form-control\" style=\"height: 186px\">{% if thursday_afternoon != false %}{{ thursday_afternoon.mealNotes }}{% endif %}</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-dinner day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input disabled=\"disabled\" style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"dinner_hour_thursday\" value=\"{% if thursday_dinner != false %}{{ thursday_dinner.hour }}{% else %}21:00{% endif %}\" min=\"09:00\" max=\"22:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" disabled=\"disabled\" id=\"menu\" name=\"dinner_menu_thursday\" class=\"form-control\" style=\"height: 430px\">{% if thursday_dinner != false %}{{ thursday_dinner.meal }}{% endif %}</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista de la compra:</label><textarea type=\"text\" disabled=\"disabled\" id=\"list\" name=\"dinner_list_thursday\" class=\"form-control\" style=\"height: 225px\">{% if thursday_dinner != false %}{{ thursday_dinner.mealShoppingList }}{% endif %}</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" disabled=\"disabled\" id=\"comments\" name=\"dinner_comments_thursday\" class=\"form-control\" style=\"height: 186px\">{% if thursday_dinner != false %}{{ thursday_dinner.mealNotes }}{% endif %}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-sm-3\">
                                        <div class=\"workout-rest\">
                                            <input disabled=\"disabled\" type=\"checkbox\" value=\"1\" style=\"width: fit-content; margin-bottom: 10px; margin-top: 10px; margin-right: 10px\" name=\"thursday_workout_rest\" id=\"thursday-workout-rest\" {% if thursday_workout == false %} checked {% endif %} onclick=\"restDay('thursday')\"><strong>Descanso</strong>
                                        </div>
                                        <div class=\"thursday-workout\" {% if thursday_workout == false %} style=\"display: none\"{% endif %}>
                                            <br/>
                                            <label for=\"thursday_workout_sort\">Tipo de entrenamiento:</label>
                                            <select name=\"thursday_workout_sort\" id=\"thursday_workout_sort\">
                                                <option value=\"Fuerza Tren Superior\">Fuerza Tren Superior</option>
                                                <option value=\"Fuerza Tren Inferior\">Fuerza Tren Inferior</option>
                                                <option value=\"Cardio\">Cardio</option>
                                                <option value=\"HIIT\">HIIT</option>
                                                <option value=\"Relajacion\">Relajación</option>
                                            </select>
                                            <br/><br/>
                                            <label for=\"thursday_workout_time\">Hora:</label>
                                            <input disabled=\"disabled\" type=\"time\" name=\"thursday_workout_time\" value=\"{% if thursday_workout != false %}{{ thursday_workout.hour|date('H:i:s') }}{% endif %}\" style=\"width: fit-content\">
                                            <label for=\"thursday-workout\">Entrenamiento:</label>
                                            <textarea type=\"text\" disabled=\"disabled\" id=\"thursday-workout\" name=\"thursday_workout\" class=\"form-control\" style=\"height: 150px\">{% if thursday_workout != false %}{{ thursday_workout.workout }}{% endif %}</textarea>
                                            <br/>
                                            <ul class=\"list-group\" id=\"thursday-workout-exercises\">
                                                {% for exercise in exercises %}
                                                    <li>
                                                        <input disabled=\"disabled\" type=\"checkbox\" value=\"{{ exercise.idExercise }}\" style=\"width: fit-content; margin-bottom: 10px; margin-top: 10px\" name=\"thursday_workout_exercises[{{ exercise.idExercise }}][]\" {% if thursday_workout != false and exercise.idExercise in thursday_workout_exercises %}checked{% endif %}>
                                                        {{ exercise.title }}
                                                    </li>
                                                {% endfor %}
                                            </ul>
                                            <label for=\"thursday-workout-notes\">Observaciones:</label>
                                            <textarea type=\"text\" disabled=\"disabled\" id=\"thursday-workout-notes\" name=\"thursday_workout_notes\" class=\"form-control\" style=\"height: 80px\">{% if thursday_workout != false %}{{ thursday_workout.workoutNotes }}{% endif %}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <input type=\"button\" name=\"previous\" class=\"previous action-button-previous\" value=\"Previo\"/>
                                <input type=\"button\" name=\"next\" class=\"next action-button\" value=\"Siguiente\"/>
                            </fieldset>
                            <!-- VIERNES -->
                            <fieldset>
                                <div class=\"form-card\">
                                    <div class=\"col-sm-9 \">
                                        <div id=\"meals-buttons\">
                                            <button style=\"margin-left: 1px\" class=\"btn btn-primary day-meal-button day-meal-button-active\" type=\"button\">Desayuno</button>
                                            <button class=\"btn btn-primary day-meal-button\" type=\"button\">Snack</button>
                                            <button class=\"btn btn-primary day-meal-button\" type=\"button\">Almuerzo</button>
                                            <button class=\"btn btn-primary day-meal-button\" type=\"button\">Merienda</button>
                                            <button class=\"btn btn-primary day-meal-button\" type=\"button\">Cena</button>
                                        </div>
                                        <div class=\"day-plan-breakfast day-plan day-meal-visible\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input disabled=\"disabled\" style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"breakfast_hour_friday\" value=\"{% if friday_breakfast != false %}{{ friday_breakfast.hour }}{% else %}08:30{% endif %}\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" disabled=\"disabled\" id=\"menu\" name=\"breakfast_menu_friday\" class=\"form-control\" style=\"height: 430px\">{% if friday_breakfast != false %}{{ friday_breakfast.meal }}{% endif %}</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista de la compra:</label><textarea type=\"text\" disabled=\"disabled\" id=\"list\" name=\"breakfast_list_friday\" class=\"form-control\" style=\"height: 225px\">{% if friday_breakfast != false %}{{ friday_breakfast.mealShoppingList }}{% endif %}</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" disabled=\"disabled\" id=\"comments\" name=\"breakfast_comments_friday\" class=\"form-control\" style=\"height: 186px\">{% if friday_breakfast != false %}{{ friday_breakfast.mealNotes }}{% endif %}</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-snack day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input disabled=\"disabled\" style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"snack_hour_friday\" value=\"{% if friday_snack != false %}{{ friday_snack.hour }}{% else %}11:30{% endif %}\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" disabled=\"disabled\" id=\"menu\" name=\"snack_menu_friday\" class=\"form-control\" style=\"height: 430px\">{% if friday_snack != false %}{{ friday_snack.meal }}{% endif %}</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista de la compra:</label><textarea type=\"text\" disabled=\"disabled\" id=\"list\" name=\"snack_list_friday\" class=\"form-control\" style=\"height: 225px\">{% if friday_snack != false %}{{ friday_snack.mealShoppingList }}{% endif %}</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" disabled=\"disabled\" id=\"comments\" name=\"snack_comments_friday\" class=\"form-control\" style=\"height: 186px\">{% if friday_snack != false %}{{ friday_snack.mealNotes }}{% endif %}</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-lunch day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input disabled=\"disabled\" style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"lunch_hour_friday\" value=\"{% if friday_lunch != false %}{{ friday_lunch.hour }}{% else %}14:00{% endif %}\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" disabled=\"disabled\" id=\"menu\" name=\"lunch_menu_friday\" class=\"form-control\" style=\"height: 430px\">{% if friday_lunch != false %}{{ friday_lunch.meal }}{% endif %}</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista de la compra:</label><textarea type=\"text\" disabled=\"disabled\" id=\"list\" name=\"lunch_list_friday\" class=\"form-control\" style=\"height: 225px\">{% if friday_lunch != false %}{{ friday_lunch.mealShoppingList }}{% endif %}</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" disabled=\"disabled\" id=\"comments\" name=\"lunch_comments_friday\" class=\"form-control\" style=\"height: 186px\">{% if friday_lunch != false %}{{ friday_lunch.mealNotes }}{% endif %}</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-afternoon day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input disabled=\"disabled\" style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"afternoon_hour_friday\" value=\"{% if friday_afternoon != false %}{{ friday_afternoon.hour }}{% else %}17:30{% endif %}\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" disabled=\"disabled\" id=\"menu\" name=\"afternoon_menu_friday\" class=\"form-control\" style=\"height: 430px\">{% if friday_afternoon != false %}{{ friday_afternoon.meal }}{% endif %}</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista de la compra:</label><textarea type=\"text\" disabled=\"disabled\" id=\"list\" name=\"afternoon_list_friday\" class=\"form-control\" style=\"height: 225px\">{% if friday_afternoon != false %}{{ friday_afternoon.mealShoppingList }}{% endif %}</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" disabled=\"disabled\" id=\"comments\" name=\"afternoon_comments_friday\" class=\"form-control\" style=\"height: 186px\">{% if friday_afternoon != false %}{{ friday_afternoon.mealNotes }}{% endif %}</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-dinner day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input disabled=\"disabled\" style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"dinner_hour_friday\" value=\"{% if friday_dinner != false %}{{ friday_dinner.hour }}{% else %}21:00{% endif %}\" min=\"09:00\" max=\"22:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" disabled=\"disabled\" id=\"menu\" name=\"dinner_menu_friday\" class=\"form-control\" style=\"height: 430px\">{% if friday_dinner != false %}{{ friday_dinner.meal }}{% endif %}</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista de la compra:</label><textarea type=\"text\" disabled=\"disabled\" id=\"list\" name=\"dinner_list_friday\" class=\"form-control\" style=\"height: 225px\">{% if friday_dinner != false %}{{ friday_dinner.mealShoppingList }}{% endif %}</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" disabled=\"disabled\" id=\"comments\" name=\"dinner_comments_friday\" class=\"form-control\" style=\"height: 186px\">{% if friday_dinner != false %}{{ friday_dinner.mealNotes }}{% endif %}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-sm-3\">
                                        <div class=\"workout-rest\">
                                            <input disabled=\"disabled\" type=\"checkbox\" value=\"1\" style=\"width: fit-content; margin-bottom: 10px; margin-top: 10px; margin-right: 10px\" name=\"friday_workout_rest\" id=\"friday-workout-rest\" {% if friday_workout == false %} checked {% endif %} onclick=\"restDay('friday')\"><strong>Descanso</strong>
                                        </div>
                                        <div class=\"friday-workout\" {% if friday_workout == false %} style=\"display: none\"{% endif %}>
                                            <br/>
                                            <label for=\"friday_workout_sort\">Tipo de entrenamiento:</label>
                                            <select name=\"friday_workout_sort\" id=\"friday_workout_sort\">
                                                <option value=\"Fuerza Tren Superior\">Fuerza Tren Superior</option>
                                                <option value=\"Fuerza Tren Inferior\">Fuerza Tren Inferior</option>
                                                <option value=\"Cardio\">Cardio</option>
                                                <option value=\"HIIT\">HIIT</option>
                                                <option value=\"Relajacion\">Relajación</option>
                                            </select>
                                            <br/><br/>
                                            <label for=\"friday_workout_time\">Hora:</label>
                                            <input disabled=\"disabled\" type=\"time\" name=\"friday_workout_time\" value=\"{% if friday_workout != false %}{{ friday_workout.hour|date('H:i:s') }}{% endif %}\" style=\"width: fit-content\">
                                            <label for=\"friday-workout\">Entrenamiento:</label>
                                            <textarea type=\"text\" disabled=\"disabled\" id=\"friday-workout\" name=\"friday_workout\" class=\"form-control\" style=\"height: 150px\">{% if friday_workout != false %}{{ friday_workout.workout }}{% endif %}</textarea>
                                            <br/>
                                            <ul class=\"list-group\" id=\"friday-workout-exercises\">
                                                {% for exercise in exercises %}
                                                    <li>
                                                        <input disabled=\"disabled\" type=\"checkbox\" value=\"{{ exercise.idExercise }}\" style=\"width: fit-content; margin-bottom: 10px; margin-top: 10px\" name=\"friday_workout_exercises[{{ exercise.idExercise }}][]\" {% if friday_workout != false and exercise.idExercise in friday_workout_exercises %}checked{% endif %}>
                                                        {{ exercise.title }}
                                                    </li>
                                                {% endfor %}
                                            </ul>
                                            <label for=\"friday-workout-notes\">Observaciones:</label>
                                            <textarea type=\"text\" disabled=\"disabled\" id=\"friday-workout-notes\" name=\"friday_workout_notes\" class=\"form-control\" style=\"height: 80px\">{% if friday_workout != false %}{{ friday_workout.workoutNotes }}{% endif %}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <input type=\"button\" name=\"previous\" class=\"previous action-button-previous\" value=\"Previo\"/>
                                <input type=\"button\" name=\"next\" class=\"next action-button\" value=\"Siguiente\"/>
                            </fieldset>
                            <!-- SABADO -->
                            <fieldset>
                                <div class=\"form-card\">
                                    <div class=\"col-sm-9 \">
                                        <div id=\"meals-buttons\">
                                            <button style=\"margin-left: 1px\" class=\"btn btn-primary day-meal-button day-meal-button-active\" type=\"button\">Desayuno</button>
                                            <button class=\"btn btn-primary day-meal-button\" type=\"button\">Snack</button>
                                            <button class=\"btn btn-primary day-meal-button\" type=\"button\">Almuerzo</button>
                                            <button class=\"btn btn-primary day-meal-button\" type=\"button\">Merienda</button>
                                            <button class=\"btn btn-primary day-meal-button\" type=\"button\">Cena</button>
                                        </div>
                                        <div class=\"day-plan-breakfast day-plan day-meal-visible\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input disabled=\"disabled\" style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"breakfast_hour_saturday\" value=\"{% if saturday_breakfast != false %}{{ saturday_breakfast.hour }}{% else %}08:30{% endif %}\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" disabled=\"disabled\" id=\"menu\" name=\"breakfast_menu_saturday\" class=\"form-control\" style=\"height: 430px\">{% if saturday_breakfast != false %}{{ saturday_breakfast.meal }}{% endif %}</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista de la compra:</label><textarea type=\"text\" disabled=\"disabled\" id=\"list\" name=\"breakfast_list_saturday\" class=\"form-control\" style=\"height: 225px\">{% if saturday_breakfast != false %}{{ saturday_breakfast.mealShoppingList }}{% endif %}</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" disabled=\"disabled\" id=\"comments\" name=\"breakfast_comments_saturday\" class=\"form-control\" style=\"height: 186px\">{% if saturday_breakfast != false %}{{ saturday_breakfast.mealNotes }}{% endif %}</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-snack day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input disabled=\"disabled\" style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"snack_hour_saturday\" value=\"{% if saturday_breakfast != false  %}{{ saturday_breakfast.hour }}{% else %}11:30{% endif %}\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" disabled=\"disabled\" id=\"menu\" name=\"snack_menu_saturday\" class=\"form-control\" style=\"height: 430px\">{% if saturday_breakfast != false  %}{{ saturday_snack.meal }}{% endif %}</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista de la compra:</label><textarea type=\"text\" disabled=\"disabled\" id=\"list\" name=\"snack_list_saturday\" class=\"form-control\" style=\"height: 225px\">{% if saturday_breakfast != false  %}{{ saturday_snack.mealShoppingList }}{% endif %}</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" disabled=\"disabled\" id=\"comments\" name=\"snack_comments_saturday\" class=\"form-control\" style=\"height: 186px\">{% if saturday_breakfast != false  %}{{ saturday_snack.mealNotes }}{% endif %}</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-lunch day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input disabled=\"disabled\" style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"lunch_hour_saturday\" value=\"{% if saturday_lunch != false  %}{{ saturday_lunch.hour }}{% else %}14:00{% endif %}\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" disabled=\"disabled\" id=\"menu\" name=\"lunch_menu_saturday\" class=\"form-control\" style=\"height: 430px\">{% if saturday_lunch != false  %}{{ saturday_lunch.meal }}{% endif %}</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista de la compra:</label><textarea type=\"text\" disabled=\"disabled\" id=\"list\" name=\"lunch_list_saturday\" class=\"form-control\" style=\"height: 225px\">{% if saturday_lunch != false  %}{{ saturday_lunch.mealShoppingList }}{% endif %}</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" disabled=\"disabled\" id=\"comments\" name=\"lunch_comments_saturday\" class=\"form-control\" style=\"height: 186px\">{% if saturday_lunch != false  %}{{ saturday_lunch.mealNotes }}{% endif %}</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-afternoon day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input disabled=\"disabled\" style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"afternoon_hour_saturday\" value=\"{% if saturday_afternoon != false  %}{{ saturday_afternoon.hour }}{% else %}17:30{% endif %}\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" disabled=\"disabled\" id=\"menu\" name=\"afternoon_menu_saturday\" class=\"form-control\" style=\"height: 430px\">{% if saturday_afternoon != false  %}{{ saturday_afternoon.meal }}{% endif %}</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista de la compra:</label><textarea type=\"text\" disabled=\"disabled\" id=\"list\" name=\"afternoon_list_saturday\" class=\"form-control\" style=\"height: 225px\">{% if saturday_afternoon != false  %}{{ saturday_afternoon.mealShoppingList }}{% endif %}</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" disabled=\"disabled\" id=\"comments\" name=\"afternoon_comments_saturday\" class=\"form-control\" style=\"height: 186px\">{% if saturday_afternoon != false  %}{{ saturday_afternoon.mealNotes }}{% endif %}</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-dinner day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input disabled=\"disabled\" style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"dinner_hour_saturday\" value=\"{% if saturday_dinner != false  %}{{ saturday_dinner.hour }}{% else %}21:00{% endif %}\" min=\"09:00\" max=\"22:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" disabled=\"disabled\" id=\"menu\" name=\"dinner_menu_saturday\" class=\"form-control\" style=\"height: 430px\">{% if saturday_dinner != false  %}{{ saturday_dinner.meal }}{% endif %}</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista de la compra:</label><textarea type=\"text\" disabled=\"disabled\" id=\"list\" name=\"dinner_list_saturday\" class=\"form-control\" style=\"height: 225px\">{% if saturday_dinner != false  %}{{ saturday_dinner.mealShoppingList }}{% endif %}</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" disabled=\"disabled\" id=\"comments\" name=\"dinner_comments_saturday\" class=\"form-control\" style=\"height: 186px\">{% if saturday_dinner != false  %}{{ saturday_dinner.mealNotes }}{% endif %}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-sm-3\">
                                        <div class=\"workout-rest\">
                                            <input disabled=\"disabled\" type=\"checkbox\" value=\"1\" style=\"width: fit-content; margin-bottom: 10px; margin-top: 10px; margin-right: 10px\" name=\"saturday_workout_rest\" id=\"saturday-workout-rest\" {% if saturday_workout == false %} checked {% endif %} onclick=\"restDay('saturday')\"><strong>Descanso</strong>
                                        </div>
                                        <div class=\"saturday-workout\" {% if saturday_workout == false %} style=\"display: none\"{% endif %}>
                                            <br/>
                                            <label for=\"saturday_workout_sort\">Tipo de entrenamiento:</label>
                                            <select name=\"saturday_workout_sort\" id=\"saturday_workout_sort\">
                                                <option value=\"Fuerza Tren Superior\">Fuerza Tren Superior</option>
                                                <option value=\"Fuerza Tren Inferior\">Fuerza Tren Inferior</option>
                                                <option value=\"Cardio\">Cardio</option>
                                                <option value=\"HIIT\">HIIT</option>
                                                <option value=\"Relajacion\">Relajación</option>
                                            </select>
                                            <br/><br/>
                                            <label for=\"saturday_workout_time\">Hora:</label>
                                            <input disabled=\"disabled\" type=\"time\" name=\"saturday_workout_time\" value=\"{% if saturday_workout != false %}{{ saturday_workout.hour|date('H:i:s') }}{% endif %}\" style=\"width: fit-content\">
                                            <label for=\"saturday-workout\">Entrenamiento:</label>
                                            <textarea type=\"text\" disabled=\"disabled\" id=\"saturday-workout\" name=\"saturday_workout\" class=\"form-control\" style=\"height: 150px\">{% if saturday_workout != false %}{{ saturday_workout.workout }}{% endif %}</textarea>
                                            <br/>
                                            <ul class=\"list-group\" id=\"saturday-workout-exercises\">
                                                {% for exercise in exercises %}
                                                    <li>
                                                        <input disabled=\"disabled\" type=\"checkbox\" value=\"{{ exercise.idExercise }}\" style=\"width: fit-content; margin-bottom: 10px; margin-top: 10px\" name=\"saturday_workout_exercises[{{ exercise.idExercise }}][]\" {% if saturday_workout != false and exercise.idExercise in saturday_workout_exercises %}checked{% endif %}>
                                                        {{ exercise.title }}
                                                    </li>
                                                {% endfor %}
                                            </ul>
                                            <label for=\"saturday-workout-notes\">Observaciones:</label>
                                            <textarea type=\"text\" disabled=\"disabled\" id=\"saturday-workout-notes\" name=\"saturday_workout_notes\" class=\"form-control\" style=\"height: 80px\">{% if saturday_workout != false %}{{ saturday_workout.workoutNotes }}{% endif %}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <input type=\"button\" name=\"previous\" class=\"previous action-button-previous\" value=\"Previo\"/>
                                <input type=\"button\" name=\"next\" class=\"next action-button\" value=\"Siguiente\"/>
                            </fieldset>
                            <!-- DOMINGO -->
                            <fieldset>
                                <div class=\"form-card\">
                                    <div class=\"col-sm-9 \">
                                        <div id=\"meals-buttons\">
                                            <button style=\"margin-left: 1px\" class=\"btn btn-primary day-meal-button day-meal-button-active\" type=\"button\">Desayuno</button>
                                            <button class=\"btn btn-primary day-meal-button\" type=\"button\">Snack</button>
                                            <button class=\"btn btn-primary day-meal-button\" type=\"button\">Almuerzo</button>
                                            <button class=\"btn btn-primary day-meal-button\" type=\"button\">Merienda</button>
                                            <button class=\"btn btn-primary day-meal-button\" type=\"button\">Cena</button>
                                        </div>
                                        <div class=\"day-plan-breakfast day-plan day-meal-visible\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input disabled=\"disabled\" style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"breakfast_hour_sunday\" value=\"{% if sunday_breakfast != false %}{{ sunday_breakfast.hour }}{% else %}08:30{% endif %}\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" disabled=\"disabled\" id=\"menu\" name=\"breakfast_menu_sunday\" class=\"form-control\" style=\"height: 430px\">{% if sunday_breakfast != false %}{{ sunday_breakfast.meal }}{% endif %}</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista de la compra:</label><textarea type=\"text\" disabled=\"disabled\" id=\"list\" name=\"breakfast_list_sunday\" class=\"form-control\" style=\"height: 225px\">{% if sunday_breakfast != false %}{{ sunday_breakfast.mealShoppingList }}{% endif %}</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" disabled=\"disabled\" id=\"comments\" name=\"breakfast_comments_sunday\" class=\"form-control\" style=\"height: 186px\">{% if sunday_breakfast != false %}{{ sunday_breakfast.mealNotes }}{% endif %}</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-snack day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input disabled=\"disabled\" style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"snack_hour_sunday\" value=\"{% if sunday_snack != false %}{{ sunday_snack.hour }}{% else %}11:30{% endif %}\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" disabled=\"disabled\" id=\"menu\" name=\"snack_menu_sunday\" class=\"form-control\" style=\"height: 430px\">{% if sunday_snack != false %}{{ sunday_snack.meal }}{% endif %}</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista de la compra:</label><textarea type=\"text\" disabled=\"disabled\" id=\"list\" name=\"snack_list_sunday\" class=\"form-control\" style=\"height: 225px\">{% if sunday_snack != false %}{{ sunday_snack.mealShoppingList }}{% endif %}</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" disabled=\"disabled\" id=\"comments\" name=\"snack_comments_sunday\" class=\"form-control\" style=\"height: 186px\">{% if sunday_snack != false %}{{ sunday_snack.mealNotes }}{% endif %}</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-lunch day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input disabled=\"disabled\" style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"lunch_hour_sunday\" value=\"{% if sunday_lunch != false %}{{ sunday_lunch.hour }}{% else %}14:00{% endif %}\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" disabled=\"disabled\" id=\"menu\" name=\"lunch_menu_sunday\" class=\"form-control\" style=\"height: 430px\">{% if sunday_lunch != false %}{{ sunday_lunch.meal }}{% endif %}</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista de la compra:</label><textarea type=\"text\" disabled=\"disabled\" id=\"list\" name=\"lunch_list_sunday\" class=\"form-control\" style=\"height: 225px\">{% if sunday_lunch != false %}{{ sunday_lunch.mealShoppingList }}{% endif %}</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" disabled=\"disabled\" id=\"comments\" name=\"lunch_comments_sunday\" class=\"form-control\" style=\"height: 186px\">{% if sunday_lunch != false %}{{ sunday_lunch.mealNotes }}{% endif %}</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-afternoon day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input disabled=\"disabled\" style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"afternoon_hour_sunday\" value=\"{% if sunday_afternoon != false %}{{ sunday_afternoon.hour }}{% else %}17:30{% endif %}\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" disabled=\"disabled\" id=\"menu\" name=\"afternoon_menu_sunday\" class=\"form-control\" style=\"height: 430px\">{% if sunday_afternoon != false %}{{ sunday_afternoon.meal }}{% endif %}</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista de la compra:</label><textarea type=\"text\" disabled=\"disabled\" id=\"list\" name=\"afternoon_list_sunday\" class=\"form-control\" style=\"height: 225px\">{% if sunday_afternoon != false %}{{ sunday_afternoon.mealShoppingList }}{% endif %}</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" disabled=\"disabled\" id=\"comments\" name=\"afternoon_comments_sunday\" class=\"form-control\" style=\"height: 186px\">{% if sunday_afternoon != false %}{{ sunday_afternoon.mealNotes }}{% endif %}</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-dinner day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input disabled=\"disabled\" style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"dinner_hour_sunday\" value=\"{% if sunday_dinner != false %}{{ sunday_dinner.hour }}{% else %}21:00{% endif %}\" min=\"09:00\" max=\"22:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" disabled=\"disabled\" id=\"menu\" name=\"dinner_menu_sunday\" class=\"form-control\" style=\"height: 430px\">{% if sunday_dinner != false %}{{ sunday_dinner.meal }}{% endif %}</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista de la compra:</label><textarea type=\"text\" disabled=\"disabled\" id=\"list\" name=\"dinner_list_sunday\" class=\"form-control\" style=\"height: 225px\">{% if sunday_dinner != false %}{{ sunday_dinner.mealShoppingList }}{% endif %}</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" disabled=\"disabled\" id=\"comments\" name=\"dinner_comments_sunday\" class=\"form-control\" style=\"height: 186px\">{% if sunday_dinner != false %}{{ sunday_dinner.mealNotes }}{% endif %}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-sm-3\">
                                        <div class=\"workout-rest\">
                                            <input disabled=\"disabled\" type=\"checkbox\" value=\"1\" style=\"width: fit-content; margin-bottom: 10px; margin-top: 10px; margin-right: 10px\" name=\"sunday_workout_rest\" id=\"sunday-workout-rest\" {% if sunday_workout == false %} checked {% endif %} onclick=\"restDay('sunday')\"><strong>Descanso</strong>
                                        </div>
                                        <div class=\"sunday-workout\" {% if sunday_workout == false %} style=\"display: none\"{% endif %}>
                                            <br/>
                                            <label for=\"sunday_workout_sort\">Tipo de entrenamiento:</label>
                                            <select name=\"sunday_workout_sort\" id=\"sunday_workout_sort\">
                                                <option value=\"Fuerza Tren Superior\">Fuerza Tren Superior</option>
                                                <option value=\"Fuerza Tren Inferior\">Fuerza Tren Inferior</option>
                                                <option value=\"Cardio\">Cardio</option>
                                                <option value=\"HIIT\">HIIT</option>
                                                <option value=\"Relajacion\">Relajación</option>
                                            </select>
                                            <br/><br/>
                                            <label for=\"sunday_workout_time\">Hora:</label>
                                            <input disabled=\"disabled\" type=\"time\" name=\"sunday_workout_time\" value=\"{% if sunday_workout != false %}{{ sunday_workout.hour|date('H:i:s') }}{% endif %}\" style=\"width: fit-content\">
                                            <label for=\"sunday-workout\">Entrenamiento:</label>
                                            <textarea type=\"text\" disabled=\"disabled\" id=\"sunday-workout\" name=\"sunday_workout\" class=\"form-control\" style=\"height: 150px\">{% if sunday_workout != false %}{{ sunday_workout.workout }}{% endif %}</textarea>
                                            <br/>
                                            <ul class=\"list-group\" id=\"sunday-workout-exercises\">
                                                {% for exercise in exercises %}
                                                    <li>
                                                        <input disabled=\"disabled\" type=\"checkbox\" value=\"{{ exercise.idExercise }}\" style=\"width: fit-content; margin-bottom: 10px; margin-top: 10px\" name=\"sunday_workout_exercises[{{ exercise.idExercise }}][]\" {% if sunday_workout != false and exercise.idExercise in sunday_workout_exercises %}checked{% endif %}>
                                                        {{ exercise.title }}
                                                    </li>
                                                {% endfor %}
                                            </ul>
                                            <label for=\"sunday-workout-notes\">Observaciones:</label>
                                            <textarea type=\"text\" disabled=\"disabled\" id=\"sunday-workout-notes\" name=\"sunday_workout_notes\" class=\"form-control\" style=\"height: 80px\">{% if sunday_workout != false %}{{ sunday_workout.workoutNotes }}{% endif %}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <input type=\"button\" name=\"previous\" class=\"previous action-button-previous\" value=\"Previo\"/>
                            </fieldset>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    </html>
{% endblock %}
", "@Customer/plan.html.twig", "/shared/httpd/nutrik/src/CustomerBundle/Resources/views/plan.html.twig");
    }
}
