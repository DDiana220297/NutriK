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

/* @Nutritionist/nutritionist-edit-weekly-plan.html.twig */
class __TwigTemplate_994d2b40d36aef124eaac7dc814bbc9ecfb813c2581bb8d07bb32a61195aede0 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Nutritionist/nutritionist-edit-weekly-plan.html.twig"));

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
        $this->loadTemplate("header.html.twig", "@Nutritionist/nutritionist-edit-weekly-plan.html.twig", 9)->display($context);
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "flashbag", [], "method"), "get", [0 => "addWeeklyPlanKOStatus"], "method"));
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
        echo "        <div class=\"container\">
            <!-- Añadimos un novalidate debido a los contenedores ocultos, mostraremos el error con la variable de sesion -->
            <form id=\"msform\" class=\"form\" action=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nutritionist_edit_weekly_plan", ["id_plan" => $this->getAttribute(($context["weeklyPlan"] ?? $this->getContext($context, "weeklyPlan")), "idPlan", [])]), "html", null, true);
        echo "\" method=\"post\" novalidate>
                <div class=\"col-sm-12\">
                    <div id=\"weekly-plan-content-block\" style=\"height: 15rem; margin-bottom: 20px\">
                        <div class=\"col-sm-6\">
                            <label for=\"plan_tags\">Tag:</label>
                            <select name=\"plan_tags\" id=\"plan_tags\">
                                ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tags"] ?? $this->getContext($context, "tags")));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 38
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "idTag", []), "html", null, true);
            echo "\" ";
            if (($this->getAttribute($context["tag"], "idTag", []) == $this->getAttribute(($context["weeklyPlan"] ?? $this->getContext($context, "weeklyPlan")), "idTag", []))) {
                echo " selected ";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "name", []), "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "                            </select>
                            <br/><br/>
                            <label for=\"plan_title\">Tile:</label>
                            <textarea type=\"text\" id=\"plan_title\" name=\"plan_title\" class=\"form-control\">";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute(($context["weeklyPlan"] ?? $this->getContext($context, "weeklyPlan")), "title", []), "html", null, true);
        echo "</textarea>
                        </div>
                        <div class=\"col-sm-6\">
                            <label for=\"plan_description\">Descripción:</label>
                            <textarea type=\"text\" id=\"plan_description\" name=\"plan_description\" class=\"form-control\" style=\"height: 100px\">";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute(($context["weeklyPlan"] ?? $this->getContext($context, "weeklyPlan")), "description", []), "html", null, true);
        echo "</textarea>
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
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"breakfast_hour_monday\" value=\"";
        // line 78
        if ((($context["monday_breakfast"] ?? $this->getContext($context, "monday_breakfast")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["monday_breakfast"] ?? $this->getContext($context, "monday_breakfast")), "hour", []), "html", null, true);
        } else {
            echo "08:30";
        }
        echo "\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"breakfast_menu_monday\" class=\"form-control\" style=\"height: 430px\">";
        // line 80
        if ((($context["monday_breakfast"] ?? $this->getContext($context, "monday_breakfast")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["monday_breakfast"] ?? $this->getContext($context, "monday_breakfast")), "meal", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"breakfast_list_monday\" class=\"form-control\" style=\"height: 225px\">";
        // line 83
        if ((($context["monday_breakfast"] ?? $this->getContext($context, "monday_breakfast")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["monday_breakfast"] ?? $this->getContext($context, "monday_breakfast")), "mealShoppingList", []), "html", null, true);
        }
        echo "</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"breakfast_comments_monday\" class=\"form-control\" style=\"height: 186px\">";
        // line 85
        if ((($context["monday_breakfast"] ?? $this->getContext($context, "monday_breakfast")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["monday_breakfast"] ?? $this->getContext($context, "monday_breakfast")), "mealNotes", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-snack day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"snack_hour_monday\" value=\"";
        // line 90
        if ((($context["monday_snack"] ?? $this->getContext($context, "monday_snack")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["monday_snack"] ?? $this->getContext($context, "monday_snack")), "hour", []), "html", null, true);
        } else {
            echo "11:30";
        }
        echo "\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"snack_menu_monday\" class=\"form-control\" style=\"height: 430px\">";
        // line 92
        if ((($context["monday_snack"] ?? $this->getContext($context, "monday_snack")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["monday_snack"] ?? $this->getContext($context, "monday_snack")), "meal", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"snack_list_monday\" class=\"form-control\" style=\"height: 225px\">";
        // line 95
        if ((($context["monday_snack"] ?? $this->getContext($context, "monday_snack")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["monday_snack"] ?? $this->getContext($context, "monday_snack")), "mealShoppingList", []), "html", null, true);
        }
        echo "</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"snack_comments_monday\" class=\"form-control\" style=\"height: 186px\">";
        // line 97
        if ((($context["monday_snack"] ?? $this->getContext($context, "monday_snack")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["monday_snack"] ?? $this->getContext($context, "monday_snack")), "mealNotes", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-lunch day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"lunch_hour_monday\" value=\"";
        // line 102
        if ((($context["monday_lunch"] ?? $this->getContext($context, "monday_lunch")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["monday_lunch"] ?? $this->getContext($context, "monday_lunch")), "hour", []), "html", null, true);
        } else {
            echo "14:00";
        }
        echo "\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"lunch_menu_monday\" class=\"form-control\" style=\"height: 430px\">";
        // line 104
        if ((($context["monday_lunch"] ?? $this->getContext($context, "monday_lunch")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["monday_lunch"] ?? $this->getContext($context, "monday_lunch")), "meal", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"lunch_list_monday\" class=\"form-control\" style=\"height: 225px\">";
        // line 107
        if ((($context["monday_lunch"] ?? $this->getContext($context, "monday_lunch")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["monday_lunch"] ?? $this->getContext($context, "monday_lunch")), "mealShoppingList", []), "html", null, true);
        }
        echo "</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"lunch_comments_monday\" class=\"form-control\" style=\"height: 186px\">";
        // line 109
        if ((($context["monday_lunch"] ?? $this->getContext($context, "monday_lunch")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["monday_lunch"] ?? $this->getContext($context, "monday_lunch")), "mealNotes", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-afternoon day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"afternoon_hour_monday\" value=\"";
        // line 114
        if ((($context["monday_afternoon"] ?? $this->getContext($context, "monday_afternoon")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["monday_afternoon"] ?? $this->getContext($context, "monday_afternoon")), "hour", []), "html", null, true);
        } else {
            echo "17:30";
        }
        echo "\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"afternoon_menu_monday\" class=\"form-control\" style=\"height: 430px\">";
        // line 116
        if ((($context["monday_afternoon"] ?? $this->getContext($context, "monday_afternoon")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["monday_afternoon"] ?? $this->getContext($context, "monday_afternoon")), "meal", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"afternoon_list_monday\" class=\"form-control\" style=\"height: 225px\">";
        // line 119
        if ((($context["monday_afternoon"] ?? $this->getContext($context, "monday_afternoon")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["monday_afternoon"] ?? $this->getContext($context, "monday_afternoon")), "mealShoppingList", []), "html", null, true);
        }
        echo "</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"afternoon_comments_monday\" class=\"form-control\" style=\"height: 186px\">";
        // line 121
        if ((($context["monday_afternoon"] ?? $this->getContext($context, "monday_afternoon")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["monday_afternoon"] ?? $this->getContext($context, "monday_afternoon")), "mealNotes", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-dinner day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"dinner_hour_monday\" value=\"";
        // line 126
        if ((($context["monday_dinner"] ?? $this->getContext($context, "monday_dinner")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["monday_dinner"] ?? $this->getContext($context, "monday_dinner")), "hour", []), "html", null, true);
        } else {
            echo "21:00";
        }
        echo "\" min=\"09:00\" max=\"22:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"dinner_menu_monday\" class=\"form-control\" style=\"height: 430px\">";
        // line 128
        if ((($context["monday_dinner"] ?? $this->getContext($context, "monday_dinner")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["monday_dinner"] ?? $this->getContext($context, "monday_dinner")), "meal", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"dinner_list_monday\" class=\"form-control\" style=\"height: 225px\">";
        // line 131
        if ((($context["monday_dinner"] ?? $this->getContext($context, "monday_dinner")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["monday_dinner"] ?? $this->getContext($context, "monday_dinner")), "mealShoppingList", []), "html", null, true);
        }
        echo "</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"dinner_comments_monday\" class=\"form-control\" style=\"height: 186px\">";
        // line 133
        if ((($context["monday_dinner"] ?? $this->getContext($context, "monday_dinner")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["monday_dinner"] ?? $this->getContext($context, "monday_dinner")), "mealNotes", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-sm-3\">
                                        <div class=\"workout-rest\">
                                            <input type=\"checkbox\" value=\"1\" style=\"width: fit-content; margin-bottom: 10px; margin-top: 10px; margin-right: 10px\" name=\"monday_workout_rest\" id=\"monday-workout-rest\" ";
        // line 139
        if ((($context["monday_workout"] ?? $this->getContext($context, "monday_workout")) == false)) {
            echo " checked ";
        }
        echo " onclick=\"restDay('monday')\"><strong>Descanso</strong>
                                        </div>
                                        <div class=\"monday-workout\"  ";
        // line 141
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
                                            <input type=\"time\" name=\"monday_workout_time\" value=\"";
        // line 153
        if ((($context["monday_workout"] ?? $this->getContext($context, "monday_workout")) != false)) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["monday_workout"] ?? $this->getContext($context, "monday_workout")), "hour", []), "H:i:s"), "html", null, true);
        }
        echo "\" style=\"width: fit-content\">
                                            <label for=\"monday-workout\">Entrenamiento:</label>
                                            <textarea type=\"text\" id=\"monday-workout\" name=\"monday_workout\" class=\"form-control\" style=\"height: 150px\">";
        // line 155
        if ((($context["monday_workout"] ?? $this->getContext($context, "monday_workout")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["monday_workout"] ?? $this->getContext($context, "monday_workout")), "workout", []), "html", null, true);
        }
        echo "</textarea>
                                            <br/>
                                            <ul class=\"list-group\" id=\"monday-workout-exercises\">
                                                ";
        // line 158
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["exercises"] ?? $this->getContext($context, "exercises")));
        foreach ($context['_seq'] as $context["_key"] => $context["exercise"]) {
            // line 159
            echo "                                                    <li>
                                                        <input type=\"checkbox\" value=\"";
            // line 160
            echo twig_escape_filter($this->env, $this->getAttribute($context["exercise"], "idExercise", []), "html", null, true);
            echo "\" style=\"width: fit-content; margin-bottom: 10px; margin-top: 10px\" name=\"monday_workout_exercises[";
            echo twig_escape_filter($this->env, $this->getAttribute($context["exercise"], "idExercise", []), "html", null, true);
            echo "][]\" ";
            if (((($context["monday_workout"] ?? $this->getContext($context, "monday_workout")) != false) && twig_in_filter($this->getAttribute($context["exercise"], "idExercise", []), ($context["monday_workout_exercises"] ?? $this->getContext($context, "monday_workout_exercises"))))) {
                echo "checked";
            }
            echo ">
                                                        ";
            // line 161
            echo twig_escape_filter($this->env, $this->getAttribute($context["exercise"], "title", []), "html", null, true);
            echo "
                                                    </li>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['exercise'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 164
        echo "                                            </ul>
                                            <label for=\"monday-workout-notes\">Observaciones:</label>
                                            <textarea type=\"text\" id=\"monday-workout-notes\" name=\"monday_workout_notes\" class=\"form-control\" style=\"height: 80px\">";
        // line 166
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
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"breakfast_hour_tuesday\" value=\"";
        // line 185
        if ((($context["tuesday_breakfast"] ?? $this->getContext($context, "tuesday_breakfast")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["tuesday_breakfast"] ?? $this->getContext($context, "tuesday_breakfast")), "hour", []), "html", null, true);
        } else {
            echo "08:00";
        }
        echo "\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"breakfast_menu_tuesday\" class=\"form-control\" style=\"height: 430px\">";
        // line 187
        if ((($context["tuesday_breakfast"] ?? $this->getContext($context, "tuesday_breakfast")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["tuesday_breakfast"] ?? $this->getContext($context, "tuesday_breakfast")), "meal", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"breakfast_list_tuesday\" class=\"form-control\" style=\"height: 225px\">";
        // line 190
        if ((($context["tuesday_breakfast"] ?? $this->getContext($context, "tuesday_breakfast")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["tuesday_breakfast"] ?? $this->getContext($context, "tuesday_breakfast")), "mealShoppingList", []), "html", null, true);
        }
        echo "</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"breakfast_comments_tuesday\" class=\"form-control\" style=\"height: 186px\">";
        // line 192
        if ((($context["tuesday_breakfast"] ?? $this->getContext($context, "tuesday_breakfast")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["tuesday_breakfast"] ?? $this->getContext($context, "tuesday_breakfast")), "mealShoppingList", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-snack day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"snack_hour_tuesday\" value=\"";
        // line 197
        if ((($context["tuesday_snack"] ?? $this->getContext($context, "tuesday_snack")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["tuesday_snack"] ?? $this->getContext($context, "tuesday_snack")), "hour", []), "html", null, true);
        } else {
            echo "11:30";
        }
        echo "\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"snack_menu_tuesday\" class=\"form-control\" style=\"height: 430px\">";
        // line 199
        if ((($context["tuesday_snack"] ?? $this->getContext($context, "tuesday_snack")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["tuesday_snack"] ?? $this->getContext($context, "tuesday_snack")), "meal", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"snack_list_tuesday\" class=\"form-control\" style=\"height: 225px\">";
        // line 202
        if ((($context["tuesday_snack"] ?? $this->getContext($context, "tuesday_snack")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["tuesday_snack"] ?? $this->getContext($context, "tuesday_snack")), "mealShoppingList", []), "html", null, true);
        }
        echo "</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"snack_comments_tuesday\" class=\"form-control\" style=\"height: 186px\">";
        // line 204
        if ((($context["tuesday_snack"] ?? $this->getContext($context, "tuesday_snack")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["tuesday_snack"] ?? $this->getContext($context, "tuesday_snack")), "mealNotes", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-lunch day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"lunch_hour_tuesday\" value=\"";
        // line 209
        if ((($context["tuesday_lunch"] ?? $this->getContext($context, "tuesday_lunch")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["tuesday_lunch"] ?? $this->getContext($context, "tuesday_lunch")), "hour", []), "html", null, true);
        } else {
            echo "14:00";
        }
        echo "\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"lunch_menu_tuesday\" class=\"form-control\" style=\"height: 430px\">";
        // line 211
        if ((($context["tuesday_lunch"] ?? $this->getContext($context, "tuesday_lunch")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["tuesday_lunch"] ?? $this->getContext($context, "tuesday_lunch")), "meal", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"lunch_list_tuesday\" class=\"form-control\" style=\"height: 225px\">";
        // line 214
        if ((($context["tuesday_lunch"] ?? $this->getContext($context, "tuesday_lunch")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["tuesday_lunch"] ?? $this->getContext($context, "tuesday_lunch")), "mealShoppingList", []), "html", null, true);
        }
        echo "</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"lunch_comments_tuesday\" class=\"form-control\" style=\"height: 186px\">";
        // line 216
        if ((($context["tuesday_lunch"] ?? $this->getContext($context, "tuesday_lunch")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["tuesday_lunch"] ?? $this->getContext($context, "tuesday_lunch")), "mealNotes", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-afternoon day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"afternoon_hour_tuesday\" value=\"";
        // line 221
        if ((($context["tuesday_afternoon"] ?? $this->getContext($context, "tuesday_afternoon")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["tuesday_afternoon"] ?? $this->getContext($context, "tuesday_afternoon")), "hour", []), "html", null, true);
        } else {
            echo "17:30";
        }
        echo "\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"afternoon_menu_tuesday\" class=\"form-control\" style=\"height: 430px\">";
        // line 223
        if ((($context["tuesday_afternoon"] ?? $this->getContext($context, "tuesday_afternoon")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["tuesday_afternoon"] ?? $this->getContext($context, "tuesday_afternoon")), "meal", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"afternoon_list_tuesday\" class=\"form-control\" style=\"height: 225px\">";
        // line 226
        if ((($context["tuesday_afternoon"] ?? $this->getContext($context, "tuesday_afternoon")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["tuesday_afternoon"] ?? $this->getContext($context, "tuesday_afternoon")), "mealShoppingList", []), "html", null, true);
        }
        echo "</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"afternoon_comments_tuesday\" class=\"form-control\" style=\"height: 186px\">";
        // line 228
        if ((($context["tuesday_afternoon"] ?? $this->getContext($context, "tuesday_afternoon")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["tuesday_afternoon"] ?? $this->getContext($context, "tuesday_afternoon")), "mealNotes", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-dinner day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"dinner_hour_tuesday\" value=\"";
        // line 233
        if ((($context["tuesday_dinner"] ?? $this->getContext($context, "tuesday_dinner")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["tuesday_dinner"] ?? $this->getContext($context, "tuesday_dinner")), "hour", []), "html", null, true);
        } else {
            echo "21:00";
        }
        echo "\" min=\"09:00\" max=\"22:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"dinner_menu_tuesday\" class=\"form-control\" style=\"height: 430px\">";
        // line 235
        if ((($context["tuesday_dinner"] ?? $this->getContext($context, "tuesday_dinner")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["tuesday_dinner"] ?? $this->getContext($context, "tuesday_dinner")), "meal", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"dinner_list_tuesday\" class=\"form-control\" style=\"height: 225px\">";
        // line 238
        if ((($context["tuesday_dinner"] ?? $this->getContext($context, "tuesday_dinner")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["tuesday_dinner"] ?? $this->getContext($context, "tuesday_dinner")), "mealShoppingList", []), "html", null, true);
        }
        echo "</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"dinner_comments_tuesday\" class=\"form-control\" style=\"height: 186px\">";
        // line 240
        if ((($context["tuesday_dinner"] ?? $this->getContext($context, "tuesday_dinner")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["tuesday_dinner"] ?? $this->getContext($context, "tuesday_dinner")), "mealNotes", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-sm-3\">
                                        <div class=\"workout-rest\">
                                            <input type=\"checkbox\" value=\"1\" style=\"width: fit-content; margin-bottom: 10px; margin-top: 10px; margin-right: 10px\" name=\"tuesday_workout_rest\" id=\"tuesday-workout-rest\"  ";
        // line 246
        if ((($context["tuesday_workout"] ?? $this->getContext($context, "tuesday_workout")) == false)) {
            echo " checked ";
        }
        echo "onclick=\"restDay('tuesday')\"><strong>Descanso</strong>
                                        </div>
                                        <div class=\"tuesday-workout\" ";
        // line 248
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
                                            <input type=\"time\" name=\"tuesday_workout_time\" value=\"";
        // line 260
        if ((($context["tuesday_workout"] ?? $this->getContext($context, "tuesday_workout")) != false)) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["tuesday_workout"] ?? $this->getContext($context, "tuesday_workout")), "hour", []), "H:i:s"), "html", null, true);
        }
        echo "\" style=\"width: fit-content\">
                                            <label for=\"tuesday-workout\">Entrenamiento:</label>
                                            <textarea type=\"text\" id=\"tuesday-workout\" name=\"tuesday_workout\" class=\"form-control\" style=\"height: 150px\">";
        // line 262
        if ((($context["tuesday_workout"] ?? $this->getContext($context, "tuesday_workout")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["tuesday_workout"] ?? $this->getContext($context, "tuesday_workout")), "workout", []), "html", null, true);
        }
        echo "</textarea>
                                            <br/>
                                            <ul class=\"list-group\" id=\"tuesday-workout-exercises\">
                                                ";
        // line 265
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["exercises"] ?? $this->getContext($context, "exercises")));
        foreach ($context['_seq'] as $context["_key"] => $context["exercise"]) {
            // line 266
            echo "                                                    <li>
                                                        <input type=\"checkbox\" value=\"";
            // line 267
            echo twig_escape_filter($this->env, $this->getAttribute($context["exercise"], "idExercise", []), "html", null, true);
            echo "\" style=\"width: fit-content; margin-bottom: 10px; margin-top: 10px\" name=\"tuesday_workout_exercises[";
            echo twig_escape_filter($this->env, $this->getAttribute($context["exercise"], "idExercise", []), "html", null, true);
            echo "][]\" ";
            if (((($context["tuesday_workout"] ?? $this->getContext($context, "tuesday_workout")) != false) && twig_in_filter($this->getAttribute($context["exercise"], "idExercise", []), ($context["tuesday_workout_exercises"] ?? $this->getContext($context, "tuesday_workout_exercises"))))) {
                echo "checked";
            }
            echo ">
                                                        ";
            // line 268
            echo twig_escape_filter($this->env, $this->getAttribute($context["exercise"], "title", []), "html", null, true);
            echo "
                                                    </li>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['exercise'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 271
        echo "                                            </ul>
                                            <label for=\"tuesday-workout-notes\">Observaciones:</label>
                                            <textarea type=\"text\" id=\"tuesday-workout-notes\" name=\"tuesday_workout_notes\" class=\"form-control\" style=\"height: 80px\">";
        // line 273
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
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"breakfast_hour_wednesday\" value=\"";
        // line 293
        if ((($context["wednesday_breakfast"] ?? $this->getContext($context, "wednesday_breakfast")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["wednesday_breakfast"] ?? $this->getContext($context, "wednesday_breakfast")), "hour", []), "html", null, true);
        } else {
            echo "08:30";
        }
        echo "\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"breakfast_menu_wednesday\" class=\"form-control\" style=\"height: 430px\">";
        // line 295
        if ((($context["wednesday_breakfast"] ?? $this->getContext($context, "wednesday_breakfast")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["wednesday_breakfast"] ?? $this->getContext($context, "wednesday_breakfast")), "meal", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"breakfast_list_wednesday\" class=\"form-control\" style=\"height: 225px\">";
        // line 298
        if ((($context["wednesday_breakfast"] ?? $this->getContext($context, "wednesday_breakfast")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["wednesday_breakfast"] ?? $this->getContext($context, "wednesday_breakfast")), "mealShoppingList", []), "html", null, true);
        }
        echo "</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"breakfast_comments_wednesday\" class=\"form-control\" style=\"height: 186px\">";
        // line 300
        if ((($context["wednesday_breakfast"] ?? $this->getContext($context, "wednesday_breakfast")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["wednesday_breakfast"] ?? $this->getContext($context, "wednesday_breakfast")), "mealNotes", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-snack day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"snack_hour_wednesday\" value=\"";
        // line 305
        if ((($context["wednesday_snack"] ?? $this->getContext($context, "wednesday_snack")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["wednesday_snack"] ?? $this->getContext($context, "wednesday_snack")), "hour", []), "html", null, true);
        } else {
            echo "11:30";
        }
        echo "\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"snack_menu_wednesday\" class=\"form-control\" style=\"height: 430px\">";
        // line 307
        if ((($context["wednesday_snack"] ?? $this->getContext($context, "wednesday_snack")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["wednesday_snack"] ?? $this->getContext($context, "wednesday_snack")), "meal", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"snack_list_wednesday\" class=\"form-control\" style=\"height: 225px\">";
        // line 310
        if ((($context["wednesday_snack"] ?? $this->getContext($context, "wednesday_snack")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["wednesday_snack"] ?? $this->getContext($context, "wednesday_snack")), "mealShoppingList", []), "html", null, true);
        }
        echo "</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"snack_comments_wednesday\" class=\"form-control\" style=\"height: 186px\"><";
        // line 312
        if ((($context["wednesday_snack"] ?? $this->getContext($context, "wednesday_snack")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["wednesday_snack"] ?? $this->getContext($context, "wednesday_snack")), "mealNotes", []), "html", null, true);
        }
        echo "/textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-lunch day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"lunch_hour_wednesday\" value=\"";
        // line 317
        if ((($context["wednesday_lunch"] ?? $this->getContext($context, "wednesday_lunch")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["wednesday_lunch"] ?? $this->getContext($context, "wednesday_lunch")), "hour", []), "html", null, true);
        } else {
            echo "14:00";
        }
        echo "\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"lunch_menu_wednesday\" class=\"form-control\" style=\"height: 430px\">";
        // line 319
        if ((($context["wednesday_lunch"] ?? $this->getContext($context, "wednesday_lunch")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["wednesday_lunch"] ?? $this->getContext($context, "wednesday_lunch")), "meal", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"lunch_list_wednesday\" class=\"form-control\" style=\"height: 225px\">";
        // line 322
        if ((($context["wednesday_lunch"] ?? $this->getContext($context, "wednesday_lunch")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["wednesday_lunch"] ?? $this->getContext($context, "wednesday_lunch")), "mealShoppingList", []), "html", null, true);
        }
        echo "</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"lunch_comments_wednesday\" class=\"form-control\" style=\"height: 186px\">";
        // line 324
        if ((($context["wednesday_lunch"] ?? $this->getContext($context, "wednesday_lunch")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["wednesday_lunch"] ?? $this->getContext($context, "wednesday_lunch")), "mealNotes", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-afternoon day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"afternoon_hour_wednesday\" value=\"";
        // line 329
        if ((($context["wednesday_afternoon"] ?? $this->getContext($context, "wednesday_afternoon")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["wednesday_afternoon"] ?? $this->getContext($context, "wednesday_afternoon")), "hour", []), "html", null, true);
        } else {
            echo "17:30";
        }
        echo "\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"afternoon_menu_wednesday\" class=\"form-control\" style=\"height: 430px\">";
        // line 331
        if ((($context["wednesday_afternoon"] ?? $this->getContext($context, "wednesday_afternoon")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["wednesday_afternoon"] ?? $this->getContext($context, "wednesday_afternoon")), "meal", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"afternoon_list_wednesday\" class=\"form-control\" style=\"height: 225px\">";
        // line 334
        if ((($context["wednesday_afternoon"] ?? $this->getContext($context, "wednesday_afternoon")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["wednesday_afternoon"] ?? $this->getContext($context, "wednesday_afternoon")), "mealShoppingList", []), "html", null, true);
        }
        echo "</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"afternoon_comments_wednesday\" class=\"form-control\" style=\"height: 186px\">";
        // line 336
        if ((($context["wednesday_afternoon"] ?? $this->getContext($context, "wednesday_afternoon")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["wednesday_afternoon"] ?? $this->getContext($context, "wednesday_afternoon")), "mealNotes", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-dinner day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"dinner_hour_wednesday\" value=\"";
        // line 341
        if ((($context["wednesday_dinner"] ?? $this->getContext($context, "wednesday_dinner")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["wednesday_dinner"] ?? $this->getContext($context, "wednesday_dinner")), "hour", []), "html", null, true);
        } else {
            echo "21:00";
        }
        echo "\" min=\"09:00\" max=\"22:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"dinner_menu_wednesday\" class=\"form-control\" style=\"height: 430px\">";
        // line 343
        if ((($context["wednesday_dinner"] ?? $this->getContext($context, "wednesday_dinner")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["wednesday_dinner"] ?? $this->getContext($context, "wednesday_dinner")), "meal", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"dinner_list_wednesday\" class=\"form-control\" style=\"height: 225px\">";
        // line 346
        if ((($context["wednesday_dinner"] ?? $this->getContext($context, "wednesday_dinner")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["wednesday_dinner"] ?? $this->getContext($context, "wednesday_dinner")), "mealShoppingList", []), "html", null, true);
        }
        echo "</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"dinner_comments_wednesday\" class=\"form-control\" style=\"height: 186px\">";
        // line 348
        if ((($context["wednesday_dinner"] ?? $this->getContext($context, "wednesday_dinner")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["wednesday_dinner"] ?? $this->getContext($context, "wednesday_dinner")), "mealNotes", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-sm-3\">
                                        <div class=\"workout-rest\">
                                            <input type=\"checkbox\" value=\"1\" style=\"width: fit-content; margin-bottom: 10px; margin-top: 10px; margin-right: 10px\" name=\"wednesday_workout_rest\" id=\"wednesday-workout-rest\" ";
        // line 354
        if ((($context["wednesday_workout"] ?? $this->getContext($context, "wednesday_workout")) == false)) {
            echo " checked ";
        }
        echo "onclick=\"restDay('wednesday')\"><strong>Descanso</strong>
                                        </div>
                                        <div class=\"wednesday-workout\" ";
        // line 356
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
                                            <input type=\"time\" name=\"wednesday_workout_time\" value=\"";
        // line 368
        if ((($context["wednesday_workout"] ?? $this->getContext($context, "wednesday_workout")) != false)) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["wednesday_workout"] ?? $this->getContext($context, "wednesday_workout")), "hour", []), "H:i:s"), "html", null, true);
        }
        echo "\" style=\"width: fit-content\">
                                            <label for=\"wednesday-workout\">Entrenamiento:</label>
                                            <textarea type=\"text\" id=\"wednesday-workout\" name=\"wednesday_workout\" class=\"form-control\" style=\"height: 150px\">";
        // line 370
        if ((($context["wednesday_workout"] ?? $this->getContext($context, "wednesday_workout")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["wednesday_workout"] ?? $this->getContext($context, "wednesday_workout")), "workout", []), "html", null, true);
        }
        echo "</textarea>
                                            <br/>
                                            <ul class=\"list-group\" id=\"wednesday-workout-exercises\">
                                                ";
        // line 373
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["exercises"] ?? $this->getContext($context, "exercises")));
        foreach ($context['_seq'] as $context["_key"] => $context["exercise"]) {
            // line 374
            echo "                                                    <li>
                                                        <input type=\"checkbox\" value=\"";
            // line 375
            echo twig_escape_filter($this->env, $this->getAttribute($context["exercise"], "idExercise", []), "html", null, true);
            echo "\" style=\"width: fit-content; margin-bottom: 10px; margin-top: 10px\" name=\"wednesday_workout_exercises[";
            echo twig_escape_filter($this->env, $this->getAttribute($context["exercise"], "idExercise", []), "html", null, true);
            echo "][]\" ";
            if (((($context["wednesday_workout"] ?? $this->getContext($context, "wednesday_workout")) != false) && twig_in_filter($this->getAttribute($context["exercise"], "idExercise", []), ($context["wednesday_workout_exercises"] ?? $this->getContext($context, "wednesday_workout_exercises"))))) {
                echo "checked";
            }
            echo ">
                                                        ";
            // line 376
            echo twig_escape_filter($this->env, $this->getAttribute($context["exercise"], "title", []), "html", null, true);
            echo "
                                                    </li>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['exercise'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 379
        echo "                                            </ul>
                                            <label for=\"wednesday-workout-notes\">Observaciones:</label>
                                            <textarea type=\"text\" id=\"wednesday-workout-notes\" name=\"wednesday_workout_notes\" class=\"form-control\" style=\"height: 80px\">";
        // line 381
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
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"breakfast_hour_thursday\" value=\"";
        // line 401
        if ((($context["thursday_breakfast"] ?? $this->getContext($context, "thursday_breakfast")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["thursday_breakfast"] ?? $this->getContext($context, "thursday_breakfast")), "hour", []), "html", null, true);
        } else {
            echo "08:30";
        }
        echo "\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"breakfast_menu_thursday\" class=\"form-control\" style=\"height: 430px\">";
        // line 403
        if ((($context["thursday_breakfast"] ?? $this->getContext($context, "thursday_breakfast")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["thursday_breakfast"] ?? $this->getContext($context, "thursday_breakfast")), "meal", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"breakfast_list_thursday\" class=\"form-control\" style=\"height: 225px\">";
        // line 406
        if ((($context["thursday_breakfast"] ?? $this->getContext($context, "thursday_breakfast")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["thursday_breakfast"] ?? $this->getContext($context, "thursday_breakfast")), "mealShoppingList", []), "html", null, true);
        }
        echo "</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"breakfast_comments_thursday\" class=\"form-control\" style=\"height: 186px\">";
        // line 408
        if ((($context["thursday_breakfast"] ?? $this->getContext($context, "thursday_breakfast")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["thursday_breakfast"] ?? $this->getContext($context, "thursday_breakfast")), "mealNotes", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-snack day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"snack_hour_thursday\" value=\"";
        // line 413
        if ((($context["thursday_snack"] ?? $this->getContext($context, "thursday_snack")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["thursday_snack"] ?? $this->getContext($context, "thursday_snack")), "hour", []), "html", null, true);
        } else {
            echo "21:00";
        }
        echo "\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"snack_menu_thursday\" class=\"form-control\" style=\"height: 430px\">";
        // line 415
        if ((($context["thursday_snack"] ?? $this->getContext($context, "thursday_snack")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["thursday_snack"] ?? $this->getContext($context, "thursday_snack")), "meal", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"snack_list_thursday\" class=\"form-control\" style=\"height: 225px\">";
        // line 418
        if ((($context["thursday_snack"] ?? $this->getContext($context, "thursday_snack")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["thursday_snack"] ?? $this->getContext($context, "thursday_snack")), "mealShoppingList", []), "html", null, true);
        }
        echo "</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"snack_comments_thursday\" class=\"form-control\" style=\"height: 186px\">";
        // line 420
        if ((($context["thursday_snack"] ?? $this->getContext($context, "thursday_snack")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["thursday_snack"] ?? $this->getContext($context, "thursday_snack")), "mealNotes", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-lunch day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"lunch_hour_thursday\" value=\"";
        // line 425
        if ((($context["thursday_lunch"] ?? $this->getContext($context, "thursday_lunch")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["thursday_lunch"] ?? $this->getContext($context, "thursday_lunch")), "hour", []), "html", null, true);
        } else {
            echo "21:00";
        }
        echo "\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"lunch_menu_thursday\" class=\"form-control\" style=\"height: 430px\">";
        // line 427
        if ((($context["thursday_lunch"] ?? $this->getContext($context, "thursday_lunch")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["thursday_lunch"] ?? $this->getContext($context, "thursday_lunch")), "meal", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"lunch_list_thursday\" class=\"form-control\" style=\"height: 225px\">";
        // line 430
        if ((($context["thursday_lunch"] ?? $this->getContext($context, "thursday_lunch")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["thursday_lunch"] ?? $this->getContext($context, "thursday_lunch")), "mealShoppingList", []), "html", null, true);
        }
        echo "</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"lunch_comments_thursday\" class=\"form-control\" style=\"height: 186px\">";
        // line 432
        if ((($context["thursday_lunch"] ?? $this->getContext($context, "thursday_lunch")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["thursday_lunch"] ?? $this->getContext($context, "thursday_lunch")), "mealNotes", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-afternoon day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"afternoon_hour_thursday\" value=\"";
        // line 437
        if ((($context["thursday_afternoon"] ?? $this->getContext($context, "thursday_afternoon")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["thursday_afternoon"] ?? $this->getContext($context, "thursday_afternoon")), "hour", []), "html", null, true);
        } else {
            echo "21:00";
        }
        echo "\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"afternoon_menu_thursday\" class=\"form-control\" style=\"height: 430px\">";
        // line 439
        if ((($context["thursday_afternoon"] ?? $this->getContext($context, "thursday_afternoon")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["thursday_afternoon"] ?? $this->getContext($context, "thursday_afternoon")), "meal", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"afternoon_list_thursday\" class=\"form-control\" style=\"height: 225px\">";
        // line 442
        if ((($context["thursday_afternoon"] ?? $this->getContext($context, "thursday_afternoon")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["thursday_afternoon"] ?? $this->getContext($context, "thursday_afternoon")), "mealShoppingList", []), "html", null, true);
        }
        echo "</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"afternoon_comments_thursday\" class=\"form-control\" style=\"height: 186px\">";
        // line 444
        if ((($context["thursday_afternoon"] ?? $this->getContext($context, "thursday_afternoon")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["thursday_afternoon"] ?? $this->getContext($context, "thursday_afternoon")), "mealNotes", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-dinner day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"dinner_hour_thursday\" value=\"";
        // line 449
        if ((($context["thursday_dinner"] ?? $this->getContext($context, "thursday_dinner")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["thursday_dinner"] ?? $this->getContext($context, "thursday_dinner")), "hour", []), "html", null, true);
        } else {
            echo "21:00";
        }
        echo "\" min=\"09:00\" max=\"22:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"dinner_menu_thursday\" class=\"form-control\" style=\"height: 430px\">";
        // line 451
        if ((($context["thursday_dinner"] ?? $this->getContext($context, "thursday_dinner")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["thursday_dinner"] ?? $this->getContext($context, "thursday_dinner")), "meal", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"dinner_list_thursday\" class=\"form-control\" style=\"height: 225px\">";
        // line 454
        if ((($context["thursday_dinner"] ?? $this->getContext($context, "thursday_dinner")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["thursday_dinner"] ?? $this->getContext($context, "thursday_dinner")), "mealShoppingList", []), "html", null, true);
        }
        echo "</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"dinner_comments_thursday\" class=\"form-control\" style=\"height: 186px\">";
        // line 456
        if ((($context["thursday_dinner"] ?? $this->getContext($context, "thursday_dinner")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["thursday_dinner"] ?? $this->getContext($context, "thursday_dinner")), "mealNotes", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-sm-3\">
                                        <div class=\"workout-rest\">
                                            <input type=\"checkbox\" value=\"1\" style=\"width: fit-content; margin-bottom: 10px; margin-top: 10px; margin-right: 10px\" name=\"thursday_workout_rest\" id=\"thursday-workout-rest\" ";
        // line 462
        if ((($context["thursday_workout"] ?? $this->getContext($context, "thursday_workout")) == false)) {
            echo " checked ";
        }
        echo " onclick=\"restDay('thursday')\"><strong>Descanso</strong>
                                        </div>
                                        <div class=\"thursday-workout\" ";
        // line 464
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
                                            <input type=\"time\" name=\"thursday_workout_time\" value=\"";
        // line 476
        if ((($context["thursday_workout"] ?? $this->getContext($context, "thursday_workout")) != false)) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["thursday_workout"] ?? $this->getContext($context, "thursday_workout")), "hour", []), "H:i:s"), "html", null, true);
        }
        echo "\" style=\"width: fit-content\">
                                            <label for=\"thursday-workout\">Entrenamiento:</label>
                                            <textarea type=\"text\" id=\"thursday-workout\" name=\"thursday_workout\" class=\"form-control\" style=\"height: 150px\">";
        // line 478
        if ((($context["thursday_workout"] ?? $this->getContext($context, "thursday_workout")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["thursday_workout"] ?? $this->getContext($context, "thursday_workout")), "workout", []), "html", null, true);
        }
        echo "</textarea>
                                            <br/>
                                            <ul class=\"list-group\" id=\"thursday-workout-exercises\">
                                                ";
        // line 481
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["exercises"] ?? $this->getContext($context, "exercises")));
        foreach ($context['_seq'] as $context["_key"] => $context["exercise"]) {
            // line 482
            echo "                                                    <li>
                                                        <input type=\"checkbox\" value=\"";
            // line 483
            echo twig_escape_filter($this->env, $this->getAttribute($context["exercise"], "idExercise", []), "html", null, true);
            echo "\" style=\"width: fit-content; margin-bottom: 10px; margin-top: 10px\" name=\"thursday_workout_exercises[";
            echo twig_escape_filter($this->env, $this->getAttribute($context["exercise"], "idExercise", []), "html", null, true);
            echo "][]\" ";
            if (((($context["thursday_workout"] ?? $this->getContext($context, "thursday_workout")) != false) && twig_in_filter($this->getAttribute($context["exercise"], "idExercise", []), ($context["thursday_workout_exercises"] ?? $this->getContext($context, "thursday_workout_exercises"))))) {
                echo "checked";
            }
            echo ">
                                                        ";
            // line 484
            echo twig_escape_filter($this->env, $this->getAttribute($context["exercise"], "title", []), "html", null, true);
            echo "
                                                    </li>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['exercise'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 487
        echo "                                            </ul>
                                            <label for=\"thursday-workout-notes\">Observaciones:</label>
                                            <textarea type=\"text\" id=\"thursday-workout-notes\" name=\"thursday_workout_notes\" class=\"form-control\" style=\"height: 80px\">";
        // line 489
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
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"breakfast_hour_friday\" value=\"";
        // line 509
        if ((($context["friday_breakfast"] ?? $this->getContext($context, "friday_breakfast")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["friday_breakfast"] ?? $this->getContext($context, "friday_breakfast")), "hour", []), "html", null, true);
        } else {
            echo "08:30";
        }
        echo "\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"breakfast_menu_friday\" class=\"form-control\" style=\"height: 430px\">";
        // line 511
        if ((($context["friday_breakfast"] ?? $this->getContext($context, "friday_breakfast")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["friday_breakfast"] ?? $this->getContext($context, "friday_breakfast")), "meal", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"breakfast_list_friday\" class=\"form-control\" style=\"height: 225px\">";
        // line 514
        if ((($context["friday_breakfast"] ?? $this->getContext($context, "friday_breakfast")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["friday_breakfast"] ?? $this->getContext($context, "friday_breakfast")), "mealShoppingList", []), "html", null, true);
        }
        echo "</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"breakfast_comments_friday\" class=\"form-control\" style=\"height: 186px\">";
        // line 516
        if ((($context["friday_breakfast"] ?? $this->getContext($context, "friday_breakfast")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["friday_breakfast"] ?? $this->getContext($context, "friday_breakfast")), "mealNotes", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-snack day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"snack_hour_friday\" value=\"";
        // line 521
        if ((($context["friday_snack"] ?? $this->getContext($context, "friday_snack")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["friday_snack"] ?? $this->getContext($context, "friday_snack")), "hour", []), "html", null, true);
        } else {
            echo "11:30";
        }
        echo "\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"snack_menu_friday\" class=\"form-control\" style=\"height: 430px\">";
        // line 523
        if ((($context["friday_snack"] ?? $this->getContext($context, "friday_snack")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["friday_snack"] ?? $this->getContext($context, "friday_snack")), "meal", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"snack_list_friday\" class=\"form-control\" style=\"height: 225px\">";
        // line 526
        if ((($context["friday_snack"] ?? $this->getContext($context, "friday_snack")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["friday_snack"] ?? $this->getContext($context, "friday_snack")), "mealShoppingList", []), "html", null, true);
        }
        echo "</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"snack_comments_friday\" class=\"form-control\" style=\"height: 186px\">";
        // line 528
        if ((($context["friday_snack"] ?? $this->getContext($context, "friday_snack")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["friday_snack"] ?? $this->getContext($context, "friday_snack")), "mealNotes", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-lunch day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"lunch_hour_friday\" value=\"";
        // line 533
        if ((($context["friday_lunch"] ?? $this->getContext($context, "friday_lunch")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["friday_lunch"] ?? $this->getContext($context, "friday_lunch")), "hour", []), "html", null, true);
        } else {
            echo "14:00";
        }
        echo "\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"lunch_menu_friday\" class=\"form-control\" style=\"height: 430px\">";
        // line 535
        if ((($context["friday_lunch"] ?? $this->getContext($context, "friday_lunch")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["friday_lunch"] ?? $this->getContext($context, "friday_lunch")), "meal", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"lunch_list_friday\" class=\"form-control\" style=\"height: 225px\">";
        // line 538
        if ((($context["friday_lunch"] ?? $this->getContext($context, "friday_lunch")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["friday_lunch"] ?? $this->getContext($context, "friday_lunch")), "mealShoppingList", []), "html", null, true);
        }
        echo "</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"lunch_comments_friday\" class=\"form-control\" style=\"height: 186px\">";
        // line 540
        if ((($context["friday_lunch"] ?? $this->getContext($context, "friday_lunch")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["friday_lunch"] ?? $this->getContext($context, "friday_lunch")), "mealNotes", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-afternoon day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"afternoon_hour_friday\" value=\"";
        // line 545
        if ((($context["friday_afternoon"] ?? $this->getContext($context, "friday_afternoon")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["friday_afternoon"] ?? $this->getContext($context, "friday_afternoon")), "hour", []), "html", null, true);
        } else {
            echo "17:30";
        }
        echo "\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"afternoon_menu_friday\" class=\"form-control\" style=\"height: 430px\">";
        // line 547
        if ((($context["friday_afternoon"] ?? $this->getContext($context, "friday_afternoon")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["friday_afternoon"] ?? $this->getContext($context, "friday_afternoon")), "meal", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"afternoon_list_friday\" class=\"form-control\" style=\"height: 225px\">";
        // line 550
        if ((($context["friday_afternoon"] ?? $this->getContext($context, "friday_afternoon")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["friday_afternoon"] ?? $this->getContext($context, "friday_afternoon")), "mealShoppingList", []), "html", null, true);
        }
        echo "</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"afternoon_comments_friday\" class=\"form-control\" style=\"height: 186px\">";
        // line 552
        if ((($context["friday_afternoon"] ?? $this->getContext($context, "friday_afternoon")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["friday_afternoon"] ?? $this->getContext($context, "friday_afternoon")), "mealNotes", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-dinner day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"dinner_hour_friday\" value=\"";
        // line 557
        if ((($context["friday_dinner"] ?? $this->getContext($context, "friday_dinner")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["friday_dinner"] ?? $this->getContext($context, "friday_dinner")), "hour", []), "html", null, true);
        } else {
            echo "21:00";
        }
        echo "\" min=\"09:00\" max=\"22:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"dinner_menu_friday\" class=\"form-control\" style=\"height: 430px\">";
        // line 559
        if ((($context["friday_dinner"] ?? $this->getContext($context, "friday_dinner")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["friday_dinner"] ?? $this->getContext($context, "friday_dinner")), "meal", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"dinner_list_friday\" class=\"form-control\" style=\"height: 225px\">";
        // line 562
        if ((($context["friday_dinner"] ?? $this->getContext($context, "friday_dinner")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["friday_dinner"] ?? $this->getContext($context, "friday_dinner")), "mealShoppingList", []), "html", null, true);
        }
        echo "</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"dinner_comments_friday\" class=\"form-control\" style=\"height: 186px\">";
        // line 564
        if ((($context["friday_dinner"] ?? $this->getContext($context, "friday_dinner")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["friday_dinner"] ?? $this->getContext($context, "friday_dinner")), "mealNotes", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-sm-3\">
                                        <div class=\"workout-rest\">
                                            <input type=\"checkbox\" value=\"1\" style=\"width: fit-content; margin-bottom: 10px; margin-top: 10px; margin-right: 10px\" name=\"friday_workout_rest\" id=\"friday-workout-rest\" ";
        // line 570
        if ((($context["friday_workout"] ?? $this->getContext($context, "friday_workout")) == false)) {
            echo " checked ";
        }
        echo " onclick=\"restDay('friday')\"><strong>Descanso</strong>
                                        </div>
                                        <div class=\"friday-workout\" ";
        // line 572
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
                                            <input type=\"time\" name=\"friday_workout_time\" value=\"";
        // line 584
        if ((($context["friday_workout"] ?? $this->getContext($context, "friday_workout")) != false)) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["friday_workout"] ?? $this->getContext($context, "friday_workout")), "hour", []), "H:i:s"), "html", null, true);
        }
        echo "\" style=\"width: fit-content\">
                                            <label for=\"friday-workout\">Entrenamiento:</label>
                                            <textarea type=\"text\" id=\"friday-workout\" name=\"friday_workout\" class=\"form-control\" style=\"height: 150px\">";
        // line 586
        if ((($context["friday_workout"] ?? $this->getContext($context, "friday_workout")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["friday_workout"] ?? $this->getContext($context, "friday_workout")), "workout", []), "html", null, true);
        }
        echo "</textarea>
                                            <br/>
                                            <ul class=\"list-group\" id=\"friday-workout-exercises\">
                                                ";
        // line 589
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["exercises"] ?? $this->getContext($context, "exercises")));
        foreach ($context['_seq'] as $context["_key"] => $context["exercise"]) {
            // line 590
            echo "                                                    <li>
                                                        <input type=\"checkbox\" value=\"";
            // line 591
            echo twig_escape_filter($this->env, $this->getAttribute($context["exercise"], "idExercise", []), "html", null, true);
            echo "\" style=\"width: fit-content; margin-bottom: 10px; margin-top: 10px\" name=\"friday_workout_exercises[";
            echo twig_escape_filter($this->env, $this->getAttribute($context["exercise"], "idExercise", []), "html", null, true);
            echo "][]\" ";
            if (((($context["friday_workout"] ?? $this->getContext($context, "friday_workout")) != false) && twig_in_filter($this->getAttribute($context["exercise"], "idExercise", []), ($context["friday_workout_exercises"] ?? $this->getContext($context, "friday_workout_exercises"))))) {
                echo "checked";
            }
            echo ">
                                                        ";
            // line 592
            echo twig_escape_filter($this->env, $this->getAttribute($context["exercise"], "title", []), "html", null, true);
            echo "
                                                    </li>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['exercise'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 595
        echo "                                            </ul>
                                            <label for=\"friday-workout-notes\">Observaciones:</label>
                                            <textarea type=\"text\" id=\"friday-workout-notes\" name=\"friday_workout_notes\" class=\"form-control\" style=\"height: 80px\">";
        // line 597
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
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"breakfast_hour_saturday\" value=\"";
        // line 617
        if ((($context["saturday_breakfast"] ?? $this->getContext($context, "saturday_breakfast")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["saturday_breakfast"] ?? $this->getContext($context, "saturday_breakfast")), "hour", []), "html", null, true);
        } else {
            echo "08:30";
        }
        echo "\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"breakfast_menu_saturday\" class=\"form-control\" style=\"height: 430px\">";
        // line 619
        if ((($context["saturday_breakfast"] ?? $this->getContext($context, "saturday_breakfast")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["saturday_breakfast"] ?? $this->getContext($context, "saturday_breakfast")), "meal", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"breakfast_list_saturday\" class=\"form-control\" style=\"height: 225px\">";
        // line 622
        if ((($context["saturday_breakfast"] ?? $this->getContext($context, "saturday_breakfast")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["saturday_breakfast"] ?? $this->getContext($context, "saturday_breakfast")), "mealShoppingList", []), "html", null, true);
        }
        echo "</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"breakfast_comments_saturday\" class=\"form-control\" style=\"height: 186px\">";
        // line 624
        if ((($context["saturday_breakfast"] ?? $this->getContext($context, "saturday_breakfast")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["saturday_breakfast"] ?? $this->getContext($context, "saturday_breakfast")), "mealNotes", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-snack day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"snack_hour_saturday\" value=\"";
        // line 629
        if ((($context["saturday_breakfast"] ?? $this->getContext($context, "saturday_breakfast")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["saturday_breakfast"] ?? $this->getContext($context, "saturday_breakfast")), "hour", []), "html", null, true);
        } else {
            echo "11:30";
        }
        echo "\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"snack_menu_saturday\" class=\"form-control\" style=\"height: 430px\">";
        // line 631
        if ((($context["saturday_breakfast"] ?? $this->getContext($context, "saturday_breakfast")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["saturday_snack"] ?? $this->getContext($context, "saturday_snack")), "meal", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"snack_list_saturday\" class=\"form-control\" style=\"height: 225px\">";
        // line 634
        if ((($context["saturday_breakfast"] ?? $this->getContext($context, "saturday_breakfast")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["saturday_snack"] ?? $this->getContext($context, "saturday_snack")), "mealShoppingList", []), "html", null, true);
        }
        echo "</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"snack_comments_saturday\" class=\"form-control\" style=\"height: 186px\">";
        // line 636
        if ((($context["saturday_breakfast"] ?? $this->getContext($context, "saturday_breakfast")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["saturday_snack"] ?? $this->getContext($context, "saturday_snack")), "mealNotes", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-lunch day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"lunch_hour_saturday\" value=\"";
        // line 641
        if ((($context["saturday_lunch"] ?? $this->getContext($context, "saturday_lunch")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["saturday_lunch"] ?? $this->getContext($context, "saturday_lunch")), "hour", []), "html", null, true);
        } else {
            echo "14:00";
        }
        echo "\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"lunch_menu_saturday\" class=\"form-control\" style=\"height: 430px\">";
        // line 643
        if ((($context["saturday_lunch"] ?? $this->getContext($context, "saturday_lunch")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["saturday_lunch"] ?? $this->getContext($context, "saturday_lunch")), "meal", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"lunch_list_saturday\" class=\"form-control\" style=\"height: 225px\">";
        // line 646
        if ((($context["saturday_lunch"] ?? $this->getContext($context, "saturday_lunch")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["saturday_lunch"] ?? $this->getContext($context, "saturday_lunch")), "mealShoppingList", []), "html", null, true);
        }
        echo "</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"lunch_comments_saturday\" class=\"form-control\" style=\"height: 186px\">";
        // line 648
        if ((($context["saturday_lunch"] ?? $this->getContext($context, "saturday_lunch")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["saturday_lunch"] ?? $this->getContext($context, "saturday_lunch")), "mealNotes", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-afternoon day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"afternoon_hour_saturday\" value=\"";
        // line 653
        if ((($context["saturday_afternoon"] ?? $this->getContext($context, "saturday_afternoon")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["saturday_afternoon"] ?? $this->getContext($context, "saturday_afternoon")), "hour", []), "html", null, true);
        } else {
            echo "17:30";
        }
        echo "\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"afternoon_menu_saturday\" class=\"form-control\" style=\"height: 430px\">";
        // line 655
        if ((($context["saturday_afternoon"] ?? $this->getContext($context, "saturday_afternoon")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["saturday_afternoon"] ?? $this->getContext($context, "saturday_afternoon")), "meal", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"afternoon_list_saturday\" class=\"form-control\" style=\"height: 225px\">";
        // line 658
        if ((($context["saturday_afternoon"] ?? $this->getContext($context, "saturday_afternoon")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["saturday_afternoon"] ?? $this->getContext($context, "saturday_afternoon")), "mealShoppingList", []), "html", null, true);
        }
        echo "</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"afternoon_comments_saturday\" class=\"form-control\" style=\"height: 186px\">";
        // line 660
        if ((($context["saturday_afternoon"] ?? $this->getContext($context, "saturday_afternoon")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["saturday_afternoon"] ?? $this->getContext($context, "saturday_afternoon")), "mealNotes", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-dinner day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"dinner_hour_saturday\" value=\"";
        // line 665
        if ((($context["saturday_dinner"] ?? $this->getContext($context, "saturday_dinner")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["saturday_dinner"] ?? $this->getContext($context, "saturday_dinner")), "hour", []), "html", null, true);
        } else {
            echo "21:00";
        }
        echo "\" min=\"09:00\" max=\"22:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"dinner_menu_saturday\" class=\"form-control\" style=\"height: 430px\">";
        // line 667
        if ((($context["saturday_dinner"] ?? $this->getContext($context, "saturday_dinner")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["saturday_dinner"] ?? $this->getContext($context, "saturday_dinner")), "meal", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"dinner_list_saturday\" class=\"form-control\" style=\"height: 225px\">";
        // line 670
        if ((($context["saturday_dinner"] ?? $this->getContext($context, "saturday_dinner")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["saturday_dinner"] ?? $this->getContext($context, "saturday_dinner")), "mealShoppingList", []), "html", null, true);
        }
        echo "</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"dinner_comments_saturday\" class=\"form-control\" style=\"height: 186px\">";
        // line 672
        if ((($context["saturday_dinner"] ?? $this->getContext($context, "saturday_dinner")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["saturday_dinner"] ?? $this->getContext($context, "saturday_dinner")), "mealNotes", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-sm-3\">
                                        <div class=\"workout-rest\">
                                            <input type=\"checkbox\" value=\"1\" style=\"width: fit-content; margin-bottom: 10px; margin-top: 10px; margin-right: 10px\" name=\"saturday_workout_rest\" id=\"saturday-workout-rest\" ";
        // line 678
        if ((($context["saturday_workout"] ?? $this->getContext($context, "saturday_workout")) == false)) {
            echo " checked ";
        }
        echo " onclick=\"restDay('saturday')\"><strong>Descanso</strong>
                                        </div>
                                        <div class=\"saturday-workout\" ";
        // line 680
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
                                            <input type=\"time\" name=\"saturday_workout_time\" value=\"";
        // line 692
        if ((($context["saturday_workout"] ?? $this->getContext($context, "saturday_workout")) != false)) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["saturday_workout"] ?? $this->getContext($context, "saturday_workout")), "hour", []), "H:i:s"), "html", null, true);
        }
        echo "\" style=\"width: fit-content\">
                                            <label for=\"saturday-workout\">Entrenamiento:</label>
                                            <textarea type=\"text\" id=\"saturday-workout\" name=\"saturday_workout\" class=\"form-control\" style=\"height: 150px\">";
        // line 694
        if ((($context["saturday_workout"] ?? $this->getContext($context, "saturday_workout")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["saturday_workout"] ?? $this->getContext($context, "saturday_workout")), "workout", []), "html", null, true);
        }
        echo "</textarea>
                                            <br/>
                                            <ul class=\"list-group\" id=\"saturday-workout-exercises\">
                                                ";
        // line 697
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["exercises"] ?? $this->getContext($context, "exercises")));
        foreach ($context['_seq'] as $context["_key"] => $context["exercise"]) {
            // line 698
            echo "                                                    <li>
                                                        <input type=\"checkbox\" value=\"";
            // line 699
            echo twig_escape_filter($this->env, $this->getAttribute($context["exercise"], "idExercise", []), "html", null, true);
            echo "\" style=\"width: fit-content; margin-bottom: 10px; margin-top: 10px\" name=\"saturday_workout_exercises[";
            echo twig_escape_filter($this->env, $this->getAttribute($context["exercise"], "idExercise", []), "html", null, true);
            echo "][]\" ";
            if (((($context["saturday_workout"] ?? $this->getContext($context, "saturday_workout")) != false) && twig_in_filter($this->getAttribute($context["exercise"], "idExercise", []), ($context["saturday_workout_exercises"] ?? $this->getContext($context, "saturday_workout_exercises"))))) {
                echo "checked";
            }
            echo ">
                                                        ";
            // line 700
            echo twig_escape_filter($this->env, $this->getAttribute($context["exercise"], "title", []), "html", null, true);
            echo "
                                                    </li>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['exercise'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 703
        echo "                                            </ul>
                                            <label for=\"saturday-workout-notes\">Observaciones:</label>
                                            <textarea type=\"text\" id=\"saturday-workout-notes\" name=\"saturday_workout_notes\" class=\"form-control\" style=\"height: 80px\">";
        // line 705
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
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"breakfast_hour_sunday\" value=\"";
        // line 725
        if ((($context["sunday_breakfast"] ?? $this->getContext($context, "sunday_breakfast")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["sunday_breakfast"] ?? $this->getContext($context, "sunday_breakfast")), "hour", []), "html", null, true);
        } else {
            echo "08:30";
        }
        echo "\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"breakfast_menu_sunday\" class=\"form-control\" style=\"height: 430px\">";
        // line 727
        if ((($context["sunday_breakfast"] ?? $this->getContext($context, "sunday_breakfast")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["sunday_breakfast"] ?? $this->getContext($context, "sunday_breakfast")), "meal", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"breakfast_list_sunday\" class=\"form-control\" style=\"height: 225px\">";
        // line 730
        if ((($context["sunday_breakfast"] ?? $this->getContext($context, "sunday_breakfast")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["sunday_breakfast"] ?? $this->getContext($context, "sunday_breakfast")), "mealShoppingList", []), "html", null, true);
        }
        echo "</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"breakfast_comments_sunday\" class=\"form-control\" style=\"height: 186px\">";
        // line 732
        if ((($context["sunday_breakfast"] ?? $this->getContext($context, "sunday_breakfast")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["sunday_breakfast"] ?? $this->getContext($context, "sunday_breakfast")), "mealNotes", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-snack day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"snack_hour_sunday\" value=\"";
        // line 737
        if ((($context["sunday_snack"] ?? $this->getContext($context, "sunday_snack")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["sunday_snack"] ?? $this->getContext($context, "sunday_snack")), "hour", []), "html", null, true);
        } else {
            echo "11:30";
        }
        echo "\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"snack_menu_sunday\" class=\"form-control\" style=\"height: 430px\">";
        // line 739
        if ((($context["sunday_snack"] ?? $this->getContext($context, "sunday_snack")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["sunday_snack"] ?? $this->getContext($context, "sunday_snack")), "meal", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"snack_list_sunday\" class=\"form-control\" style=\"height: 225px\">";
        // line 742
        if ((($context["sunday_snack"] ?? $this->getContext($context, "sunday_snack")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["sunday_snack"] ?? $this->getContext($context, "sunday_snack")), "mealShoppingList", []), "html", null, true);
        }
        echo "</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"snack_comments_sunday\" class=\"form-control\" style=\"height: 186px\">";
        // line 744
        if ((($context["sunday_snack"] ?? $this->getContext($context, "sunday_snack")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["sunday_snack"] ?? $this->getContext($context, "sunday_snack")), "mealNotes", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-lunch day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"lunch_hour_sunday\" value=\"";
        // line 749
        if ((($context["sunday_lunch"] ?? $this->getContext($context, "sunday_lunch")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["sunday_lunch"] ?? $this->getContext($context, "sunday_lunch")), "hour", []), "html", null, true);
        } else {
            echo "14:00";
        }
        echo "\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"lunch_menu_sunday\" class=\"form-control\" style=\"height: 430px\">";
        // line 751
        if ((($context["sunday_lunch"] ?? $this->getContext($context, "sunday_lunch")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["sunday_lunch"] ?? $this->getContext($context, "sunday_lunch")), "meal", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"lunch_list_sunday\" class=\"form-control\" style=\"height: 225px\">";
        // line 754
        if ((($context["sunday_lunch"] ?? $this->getContext($context, "sunday_lunch")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["sunday_lunch"] ?? $this->getContext($context, "sunday_lunch")), "mealShoppingList", []), "html", null, true);
        }
        echo "</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"lunch_comments_sunday\" class=\"form-control\" style=\"height: 186px\">";
        // line 756
        if ((($context["sunday_lunch"] ?? $this->getContext($context, "sunday_lunch")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["sunday_lunch"] ?? $this->getContext($context, "sunday_lunch")), "mealNotes", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-afternoon day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"afternoon_hour_sunday\" value=\"";
        // line 761
        if ((($context["sunday_afternoon"] ?? $this->getContext($context, "sunday_afternoon")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["sunday_afternoon"] ?? $this->getContext($context, "sunday_afternoon")), "hour", []), "html", null, true);
        } else {
            echo "17:30";
        }
        echo "\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"afternoon_menu_sunday\" class=\"form-control\" style=\"height: 430px\">";
        // line 763
        if ((($context["sunday_afternoon"] ?? $this->getContext($context, "sunday_afternoon")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["sunday_afternoon"] ?? $this->getContext($context, "sunday_afternoon")), "meal", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"afternoon_list_sunday\" class=\"form-control\" style=\"height: 225px\">";
        // line 766
        if ((($context["sunday_afternoon"] ?? $this->getContext($context, "sunday_afternoon")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["sunday_afternoon"] ?? $this->getContext($context, "sunday_afternoon")), "mealShoppingList", []), "html", null, true);
        }
        echo "</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"afternoon_comments_sunday\" class=\"form-control\" style=\"height: 186px\">";
        // line 768
        if ((($context["sunday_afternoon"] ?? $this->getContext($context, "sunday_afternoon")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["sunday_afternoon"] ?? $this->getContext($context, "sunday_afternoon")), "mealNotes", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-dinner day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"dinner_hour_sunday\" value=\"";
        // line 773
        if ((($context["sunday_dinner"] ?? $this->getContext($context, "sunday_dinner")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["sunday_dinner"] ?? $this->getContext($context, "sunday_dinner")), "hour", []), "html", null, true);
        } else {
            echo "21:00";
        }
        echo "\" min=\"09:00\" max=\"22:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"dinner_menu_sunday\" class=\"form-control\" style=\"height: 430px\">";
        // line 775
        if ((($context["sunday_dinner"] ?? $this->getContext($context, "sunday_dinner")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["sunday_dinner"] ?? $this->getContext($context, "sunday_dinner")), "meal", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"dinner_list_sunday\" class=\"form-control\" style=\"height: 225px\">";
        // line 778
        if ((($context["sunday_dinner"] ?? $this->getContext($context, "sunday_dinner")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["sunday_dinner"] ?? $this->getContext($context, "sunday_dinner")), "mealShoppingList", []), "html", null, true);
        }
        echo "</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"dinner_comments_sunday\" class=\"form-control\" style=\"height: 186px\">";
        // line 780
        if ((($context["sunday_dinner"] ?? $this->getContext($context, "sunday_dinner")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["sunday_dinner"] ?? $this->getContext($context, "sunday_dinner")), "mealNotes", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-sm-3\">
                                        <div class=\"workout-rest\">
                                            <input type=\"checkbox\" value=\"1\" style=\"width: fit-content; margin-bottom: 10px; margin-top: 10px; margin-right: 10px\" name=\"sunday_workout_rest\" id=\"sunday-workout-rest\" ";
        // line 786
        if ((($context["sunday_workout"] ?? $this->getContext($context, "sunday_workout")) == false)) {
            echo " checked ";
        }
        echo " onclick=\"restDay('sunday')\"><strong>Descanso</strong>
                                        </div>
                                        <div class=\"sunday-workout\" ";
        // line 788
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
                                            <input type=\"time\" name=\"sunday_workout_time\" value=\"";
        // line 800
        if ((($context["sunday_workout"] ?? $this->getContext($context, "sunday_workout")) != false)) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["sunday_workout"] ?? $this->getContext($context, "sunday_workout")), "hour", []), "H:i:s"), "html", null, true);
        }
        echo "\" style=\"width: fit-content\">
                                            <label for=\"sunday-workout\">Entrenamiento:</label>
                                            <textarea type=\"text\" id=\"sunday-workout\" name=\"sunday_workout\" class=\"form-control\" style=\"height: 150px\">";
        // line 802
        if ((($context["sunday_workout"] ?? $this->getContext($context, "sunday_workout")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["sunday_workout"] ?? $this->getContext($context, "sunday_workout")), "workout", []), "html", null, true);
        }
        echo "</textarea>
                                            <br/>
                                            <ul class=\"list-group\" id=\"sunday-workout-exercises\">
                                                ";
        // line 805
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["exercises"] ?? $this->getContext($context, "exercises")));
        foreach ($context['_seq'] as $context["_key"] => $context["exercise"]) {
            // line 806
            echo "                                                    <li>
                                                        <input type=\"checkbox\" value=\"";
            // line 807
            echo twig_escape_filter($this->env, $this->getAttribute($context["exercise"], "idExercise", []), "html", null, true);
            echo "\" style=\"width: fit-content; margin-bottom: 10px; margin-top: 10px\" name=\"sunday_workout_exercises[";
            echo twig_escape_filter($this->env, $this->getAttribute($context["exercise"], "idExercise", []), "html", null, true);
            echo "][]\" ";
            if (((($context["sunday_workout"] ?? $this->getContext($context, "sunday_workout")) != false) && twig_in_filter($this->getAttribute($context["exercise"], "idExercise", []), ($context["sunday_workout_exercises"] ?? $this->getContext($context, "sunday_workout_exercises"))))) {
                echo "checked";
            }
            echo ">
                                                        ";
            // line 808
            echo twig_escape_filter($this->env, $this->getAttribute($context["exercise"], "title", []), "html", null, true);
            echo "
                                                    </li>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['exercise'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 811
        echo "                                            </ul>
                                            <label for=\"sunday-workout-notes\">Observaciones:</label>
                                            <textarea type=\"text\" id=\"sunday-workout-notes\" name=\"sunday_workout_notes\" class=\"form-control\" style=\"height: 80px\">";
        // line 813
        if ((($context["sunday_workout"] ?? $this->getContext($context, "sunday_workout")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["sunday_workout"] ?? $this->getContext($context, "sunday_workout")), "workoutNotes", []), "html", null, true);
        }
        echo "</textarea>
                                        </div>
                                    </div>
                                </div>
                                <input type=\"button\" name=\"previous\" class=\"previous action-button-previous\" value=\"Previo\"/>
                                <input type=\"submit\" name=\"confirm-plan\" class=\"next action-button\" value=\"Confirmar\"/>
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
        return "@Nutritionist/nutritionist-edit-weekly-plan.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  2016 => 813,  2012 => 811,  2003 => 808,  1993 => 807,  1990 => 806,  1986 => 805,  1978 => 802,  1971 => 800,  1954 => 788,  1947 => 786,  1936 => 780,  1929 => 778,  1921 => 775,  1912 => 773,  1902 => 768,  1895 => 766,  1887 => 763,  1878 => 761,  1868 => 756,  1861 => 754,  1853 => 751,  1844 => 749,  1834 => 744,  1827 => 742,  1819 => 739,  1810 => 737,  1800 => 732,  1793 => 730,  1785 => 727,  1776 => 725,  1751 => 705,  1747 => 703,  1738 => 700,  1728 => 699,  1725 => 698,  1721 => 697,  1713 => 694,  1706 => 692,  1689 => 680,  1682 => 678,  1671 => 672,  1664 => 670,  1656 => 667,  1647 => 665,  1637 => 660,  1630 => 658,  1622 => 655,  1613 => 653,  1603 => 648,  1596 => 646,  1588 => 643,  1579 => 641,  1569 => 636,  1562 => 634,  1554 => 631,  1545 => 629,  1535 => 624,  1528 => 622,  1520 => 619,  1511 => 617,  1486 => 597,  1482 => 595,  1473 => 592,  1463 => 591,  1460 => 590,  1456 => 589,  1448 => 586,  1441 => 584,  1424 => 572,  1417 => 570,  1406 => 564,  1399 => 562,  1391 => 559,  1382 => 557,  1372 => 552,  1365 => 550,  1357 => 547,  1348 => 545,  1338 => 540,  1331 => 538,  1323 => 535,  1314 => 533,  1304 => 528,  1297 => 526,  1289 => 523,  1280 => 521,  1270 => 516,  1263 => 514,  1255 => 511,  1246 => 509,  1221 => 489,  1217 => 487,  1208 => 484,  1198 => 483,  1195 => 482,  1191 => 481,  1183 => 478,  1176 => 476,  1159 => 464,  1152 => 462,  1141 => 456,  1134 => 454,  1126 => 451,  1117 => 449,  1107 => 444,  1100 => 442,  1092 => 439,  1083 => 437,  1073 => 432,  1066 => 430,  1058 => 427,  1049 => 425,  1039 => 420,  1032 => 418,  1024 => 415,  1015 => 413,  1005 => 408,  998 => 406,  990 => 403,  981 => 401,  956 => 381,  952 => 379,  943 => 376,  933 => 375,  930 => 374,  926 => 373,  918 => 370,  911 => 368,  894 => 356,  887 => 354,  876 => 348,  869 => 346,  861 => 343,  852 => 341,  842 => 336,  835 => 334,  827 => 331,  818 => 329,  808 => 324,  801 => 322,  793 => 319,  784 => 317,  774 => 312,  767 => 310,  759 => 307,  750 => 305,  740 => 300,  733 => 298,  725 => 295,  716 => 293,  691 => 273,  687 => 271,  678 => 268,  668 => 267,  665 => 266,  661 => 265,  653 => 262,  646 => 260,  629 => 248,  622 => 246,  611 => 240,  604 => 238,  596 => 235,  587 => 233,  577 => 228,  570 => 226,  562 => 223,  553 => 221,  543 => 216,  536 => 214,  528 => 211,  519 => 209,  509 => 204,  502 => 202,  494 => 199,  485 => 197,  475 => 192,  468 => 190,  460 => 187,  451 => 185,  427 => 166,  423 => 164,  414 => 161,  404 => 160,  401 => 159,  397 => 158,  389 => 155,  382 => 153,  365 => 141,  358 => 139,  347 => 133,  340 => 131,  332 => 128,  323 => 126,  313 => 121,  306 => 119,  298 => 116,  289 => 114,  279 => 109,  272 => 107,  264 => 104,  255 => 102,  245 => 97,  238 => 95,  230 => 92,  221 => 90,  211 => 85,  204 => 83,  196 => 80,  187 => 78,  153 => 47,  146 => 43,  141 => 40,  126 => 38,  122 => 37,  113 => 31,  109 => 29,  99 => 25,  95 => 23,  90 => 22,  80 => 18,  76 => 16,  72 => 15,  66 => 12,  60 => 10,  58 => 9,  52 => 6,  46 => 2,  34 => 1,);
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
        {% for message in  app.session.flashbag().get('addWeeklyPlanKOStatus') %}
            <div class=\"row\" style=\"width: 92%; margin-left: 4%; margin-top: 10px; margin-bottom: 0;\">
                <div class=\"alert alert-danger\" role=\"alert\" style=\"margin-bottom: 0\">
                    {{ message }}
                </div>
            </div>
        {% endfor %}
        <div class=\"container\">
            <!-- Añadimos un novalidate debido a los contenedores ocultos, mostraremos el error con la variable de sesion -->
            <form id=\"msform\" class=\"form\" action=\"{{ path(\"nutritionist_edit_weekly_plan\", {id_plan:weeklyPlan.idPlan}) }}\" method=\"post\" novalidate>
                <div class=\"col-sm-12\">
                    <div id=\"weekly-plan-content-block\" style=\"height: 15rem; margin-bottom: 20px\">
                        <div class=\"col-sm-6\">
                            <label for=\"plan_tags\">Tag:</label>
                            <select name=\"plan_tags\" id=\"plan_tags\">
                                {% for tag in tags %}
                                    <option value=\"{{ tag.idTag }}\" {% if tag.idTag == weeklyPlan.idTag %} selected {% endif %}>{{ tag.name }}</option>
                                {% endfor %}
                            </select>
                            <br/><br/>
                            <label for=\"plan_title\">Tile:</label>
                            <textarea type=\"text\" id=\"plan_title\" name=\"plan_title\" class=\"form-control\">{{ weeklyPlan.title }}</textarea>
                        </div>
                        <div class=\"col-sm-6\">
                            <label for=\"plan_description\">Descripción:</label>
                            <textarea type=\"text\" id=\"plan_description\" name=\"plan_description\" class=\"form-control\" style=\"height: 100px\">{{ weeklyPlan.description }}</textarea>
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
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"breakfast_hour_monday\" value=\"{% if monday_breakfast != false %}{{ monday_breakfast.hour }}{% else %}08:30{% endif %}\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"breakfast_menu_monday\" class=\"form-control\" style=\"height: 430px\">{% if monday_breakfast != false %}{{ monday_breakfast.meal }}{% endif %}</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"breakfast_list_monday\" class=\"form-control\" style=\"height: 225px\">{% if monday_breakfast != false %}{{ monday_breakfast.mealShoppingList }}{% endif %}</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"breakfast_comments_monday\" class=\"form-control\" style=\"height: 186px\">{% if monday_breakfast != false %}{{ monday_breakfast.mealNotes }}{% endif %}</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-snack day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"snack_hour_monday\" value=\"{% if monday_snack != false %}{{ monday_snack.hour }}{% else %}11:30{% endif %}\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"snack_menu_monday\" class=\"form-control\" style=\"height: 430px\">{% if monday_snack != false %}{{ monday_snack.meal }}{% endif %}</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"snack_list_monday\" class=\"form-control\" style=\"height: 225px\">{% if monday_snack != false %}{{ monday_snack.mealShoppingList }}{% endif %}</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"snack_comments_monday\" class=\"form-control\" style=\"height: 186px\">{% if monday_snack != false %}{{ monday_snack.mealNotes }}{% endif %}</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-lunch day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"lunch_hour_monday\" value=\"{% if monday_lunch != false %}{{ monday_lunch.hour }}{% else %}14:00{% endif %}\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"lunch_menu_monday\" class=\"form-control\" style=\"height: 430px\">{% if monday_lunch != false %}{{ monday_lunch.meal }}{% endif %}</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"lunch_list_monday\" class=\"form-control\" style=\"height: 225px\">{% if monday_lunch != false %}{{ monday_lunch.mealShoppingList }}{% endif %}</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"lunch_comments_monday\" class=\"form-control\" style=\"height: 186px\">{% if monday_lunch != false %}{{ monday_lunch.mealNotes }}{% endif %}</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-afternoon day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"afternoon_hour_monday\" value=\"{% if monday_afternoon != false %}{{ monday_afternoon.hour }}{% else %}17:30{% endif %}\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"afternoon_menu_monday\" class=\"form-control\" style=\"height: 430px\">{% if monday_afternoon != false %}{{ monday_afternoon.meal }}{% endif %}</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"afternoon_list_monday\" class=\"form-control\" style=\"height: 225px\">{% if monday_afternoon != false %}{{ monday_afternoon.mealShoppingList }}{% endif %}</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"afternoon_comments_monday\" class=\"form-control\" style=\"height: 186px\">{% if monday_afternoon != false %}{{ monday_afternoon.mealNotes }}{% endif %}</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-dinner day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"dinner_hour_monday\" value=\"{% if monday_dinner != false %}{{ monday_dinner.hour }}{% else %}21:00{% endif %}\" min=\"09:00\" max=\"22:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"dinner_menu_monday\" class=\"form-control\" style=\"height: 430px\">{% if monday_dinner != false %}{{ monday_dinner.meal }}{% endif %}</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"dinner_list_monday\" class=\"form-control\" style=\"height: 225px\">{% if monday_dinner != false %}{{ monday_dinner.mealShoppingList }}{% endif %}</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"dinner_comments_monday\" class=\"form-control\" style=\"height: 186px\">{% if monday_dinner != false %}{{ monday_dinner.mealNotes }}{% endif %}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-sm-3\">
                                        <div class=\"workout-rest\">
                                            <input type=\"checkbox\" value=\"1\" style=\"width: fit-content; margin-bottom: 10px; margin-top: 10px; margin-right: 10px\" name=\"monday_workout_rest\" id=\"monday-workout-rest\" {% if monday_workout == false %} checked {% endif %} onclick=\"restDay('monday')\"><strong>Descanso</strong>
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
                                            <input type=\"time\" name=\"monday_workout_time\" value=\"{% if monday_workout != false %}{{ monday_workout.hour|date('H:i:s') }}{% endif %}\" style=\"width: fit-content\">
                                            <label for=\"monday-workout\">Entrenamiento:</label>
                                            <textarea type=\"text\" id=\"monday-workout\" name=\"monday_workout\" class=\"form-control\" style=\"height: 150px\">{% if monday_workout != false %}{{ monday_workout.workout }}{% endif %}</textarea>
                                            <br/>
                                            <ul class=\"list-group\" id=\"monday-workout-exercises\">
                                                {% for exercise in exercises %}
                                                    <li>
                                                        <input type=\"checkbox\" value=\"{{ exercise.idExercise }}\" style=\"width: fit-content; margin-bottom: 10px; margin-top: 10px\" name=\"monday_workout_exercises[{{ exercise.idExercise }}][]\" {% if monday_workout != false and exercise.idExercise in monday_workout_exercises %}checked{% endif %}>
                                                        {{ exercise.title }}
                                                    </li>
                                                {% endfor %}
                                            </ul>
                                            <label for=\"monday-workout-notes\">Observaciones:</label>
                                            <textarea type=\"text\" id=\"monday-workout-notes\" name=\"monday_workout_notes\" class=\"form-control\" style=\"height: 80px\">{% if monday_workout != false %}{{ monday_workout.workoutNotes }}{% endif %}</textarea>
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
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"breakfast_hour_tuesday\" value=\"{% if tuesday_breakfast != false %}{{ tuesday_breakfast.hour }}{% else %}08:00{% endif %}\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"breakfast_menu_tuesday\" class=\"form-control\" style=\"height: 430px\">{% if tuesday_breakfast != false %}{{ tuesday_breakfast.meal }}{% endif %}</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"breakfast_list_tuesday\" class=\"form-control\" style=\"height: 225px\">{% if tuesday_breakfast != false %}{{ tuesday_breakfast.mealShoppingList }}{% endif %}</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"breakfast_comments_tuesday\" class=\"form-control\" style=\"height: 186px\">{% if tuesday_breakfast != false %}{{ tuesday_breakfast.mealShoppingList }}{% endif %}</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-snack day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"snack_hour_tuesday\" value=\"{% if tuesday_snack != false %}{{ tuesday_snack.hour }}{% else %}11:30{% endif %}\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"snack_menu_tuesday\" class=\"form-control\" style=\"height: 430px\">{% if tuesday_snack != false %}{{ tuesday_snack.meal }}{% endif %}</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"snack_list_tuesday\" class=\"form-control\" style=\"height: 225px\">{% if tuesday_snack != false %}{{ tuesday_snack.mealShoppingList }}{% endif %}</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"snack_comments_tuesday\" class=\"form-control\" style=\"height: 186px\">{% if tuesday_snack != false %}{{ tuesday_snack.mealNotes }}{% endif %}</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-lunch day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"lunch_hour_tuesday\" value=\"{% if tuesday_lunch != false %}{{ tuesday_lunch.hour }}{% else %}14:00{% endif %}\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"lunch_menu_tuesday\" class=\"form-control\" style=\"height: 430px\">{% if tuesday_lunch != false %}{{ tuesday_lunch.meal }}{% endif %}</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"lunch_list_tuesday\" class=\"form-control\" style=\"height: 225px\">{% if tuesday_lunch != false %}{{ tuesday_lunch.mealShoppingList }}{% endif %}</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"lunch_comments_tuesday\" class=\"form-control\" style=\"height: 186px\">{% if tuesday_lunch != false %}{{ tuesday_lunch.mealNotes }}{% endif %}</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-afternoon day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"afternoon_hour_tuesday\" value=\"{% if tuesday_afternoon != false %}{{ tuesday_afternoon.hour }}{% else %}17:30{% endif %}\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"afternoon_menu_tuesday\" class=\"form-control\" style=\"height: 430px\">{% if tuesday_afternoon != false %}{{ tuesday_afternoon.meal }}{% endif %}</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"afternoon_list_tuesday\" class=\"form-control\" style=\"height: 225px\">{% if tuesday_afternoon != false %}{{ tuesday_afternoon.mealShoppingList }}{% endif %}</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"afternoon_comments_tuesday\" class=\"form-control\" style=\"height: 186px\">{% if tuesday_afternoon != false %}{{ tuesday_afternoon.mealNotes }}{% endif %}</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-dinner day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"dinner_hour_tuesday\" value=\"{% if tuesday_dinner != false %}{{ tuesday_dinner.hour }}{% else %}21:00{% endif %}\" min=\"09:00\" max=\"22:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"dinner_menu_tuesday\" class=\"form-control\" style=\"height: 430px\">{% if tuesday_dinner != false %}{{ tuesday_dinner.meal }}{% endif %}</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"dinner_list_tuesday\" class=\"form-control\" style=\"height: 225px\">{% if tuesday_dinner != false %}{{ tuesday_dinner.mealShoppingList }}{% endif %}</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"dinner_comments_tuesday\" class=\"form-control\" style=\"height: 186px\">{% if tuesday_dinner != false %}{{ tuesday_dinner.mealNotes }}{% endif %}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-sm-3\">
                                        <div class=\"workout-rest\">
                                            <input type=\"checkbox\" value=\"1\" style=\"width: fit-content; margin-bottom: 10px; margin-top: 10px; margin-right: 10px\" name=\"tuesday_workout_rest\" id=\"tuesday-workout-rest\"  {% if tuesday_workout == false %} checked {% endif %}onclick=\"restDay('tuesday')\"><strong>Descanso</strong>
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
                                            <input type=\"time\" name=\"tuesday_workout_time\" value=\"{% if tuesday_workout != false %}{{ tuesday_workout.hour|date('H:i:s') }}{% endif %}\" style=\"width: fit-content\">
                                            <label for=\"tuesday-workout\">Entrenamiento:</label>
                                            <textarea type=\"text\" id=\"tuesday-workout\" name=\"tuesday_workout\" class=\"form-control\" style=\"height: 150px\">{% if tuesday_workout != false %}{{ tuesday_workout.workout }}{% endif %}</textarea>
                                            <br/>
                                            <ul class=\"list-group\" id=\"tuesday-workout-exercises\">
                                                {% for exercise in exercises %}
                                                    <li>
                                                        <input type=\"checkbox\" value=\"{{ exercise.idExercise }}\" style=\"width: fit-content; margin-bottom: 10px; margin-top: 10px\" name=\"tuesday_workout_exercises[{{ exercise.idExercise }}][]\" {% if tuesday_workout != false and exercise.idExercise in tuesday_workout_exercises %}checked{% endif %}>
                                                        {{ exercise.title }}
                                                    </li>
                                                {% endfor %}
                                            </ul>
                                            <label for=\"tuesday-workout-notes\">Observaciones:</label>
                                            <textarea type=\"text\" id=\"tuesday-workout-notes\" name=\"tuesday_workout_notes\" class=\"form-control\" style=\"height: 80px\">{% if tuesday_workout != false %}{{ tuesday_workout.workoutNotes }}{% endif %}</textarea>
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
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"breakfast_hour_wednesday\" value=\"{% if wednesday_breakfast != false %}{{ wednesday_breakfast.hour }}{% else %}08:30{% endif %}\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"breakfast_menu_wednesday\" class=\"form-control\" style=\"height: 430px\">{% if wednesday_breakfast != false %}{{ wednesday_breakfast.meal }}{% endif %}</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"breakfast_list_wednesday\" class=\"form-control\" style=\"height: 225px\">{% if wednesday_breakfast != false %}{{ wednesday_breakfast.mealShoppingList }}{% endif %}</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"breakfast_comments_wednesday\" class=\"form-control\" style=\"height: 186px\">{% if wednesday_breakfast != false %}{{ wednesday_breakfast.mealNotes }}{% endif %}</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-snack day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"snack_hour_wednesday\" value=\"{% if wednesday_snack != false %}{{ wednesday_snack.hour }}{% else %}11:30{% endif %}\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"snack_menu_wednesday\" class=\"form-control\" style=\"height: 430px\">{% if wednesday_snack != false %}{{ wednesday_snack.meal }}{% endif %}</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"snack_list_wednesday\" class=\"form-control\" style=\"height: 225px\">{% if wednesday_snack != false %}{{ wednesday_snack.mealShoppingList }}{% endif %}</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"snack_comments_wednesday\" class=\"form-control\" style=\"height: 186px\"><{% if wednesday_snack != false %}{{ wednesday_snack.mealNotes }}{% endif %}/textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-lunch day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"lunch_hour_wednesday\" value=\"{% if wednesday_lunch != false %}{{ wednesday_lunch.hour }}{% else %}14:00{% endif %}\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"lunch_menu_wednesday\" class=\"form-control\" style=\"height: 430px\">{% if wednesday_lunch != false %}{{ wednesday_lunch.meal }}{% endif %}</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"lunch_list_wednesday\" class=\"form-control\" style=\"height: 225px\">{% if wednesday_lunch != false %}{{ wednesday_lunch.mealShoppingList }}{% endif %}</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"lunch_comments_wednesday\" class=\"form-control\" style=\"height: 186px\">{% if wednesday_lunch != false %}{{ wednesday_lunch.mealNotes }}{% endif %}</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-afternoon day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"afternoon_hour_wednesday\" value=\"{% if wednesday_afternoon != false %}{{ wednesday_afternoon.hour }}{% else %}17:30{% endif %}\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"afternoon_menu_wednesday\" class=\"form-control\" style=\"height: 430px\">{% if wednesday_afternoon != false %}{{ wednesday_afternoon.meal }}{% endif %}</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"afternoon_list_wednesday\" class=\"form-control\" style=\"height: 225px\">{% if wednesday_afternoon != false %}{{ wednesday_afternoon.mealShoppingList }}{% endif %}</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"afternoon_comments_wednesday\" class=\"form-control\" style=\"height: 186px\">{% if wednesday_afternoon != false %}{{ wednesday_afternoon.mealNotes }}{% endif %}</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-dinner day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"dinner_hour_wednesday\" value=\"{% if wednesday_dinner != false %}{{ wednesday_dinner.hour }}{% else %}21:00{% endif %}\" min=\"09:00\" max=\"22:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"dinner_menu_wednesday\" class=\"form-control\" style=\"height: 430px\">{% if wednesday_dinner != false %}{{ wednesday_dinner.meal }}{% endif %}</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"dinner_list_wednesday\" class=\"form-control\" style=\"height: 225px\">{% if wednesday_dinner != false %}{{ wednesday_dinner.mealShoppingList }}{% endif %}</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"dinner_comments_wednesday\" class=\"form-control\" style=\"height: 186px\">{% if wednesday_dinner != false %}{{ wednesday_dinner.mealNotes }}{% endif %}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-sm-3\">
                                        <div class=\"workout-rest\">
                                            <input type=\"checkbox\" value=\"1\" style=\"width: fit-content; margin-bottom: 10px; margin-top: 10px; margin-right: 10px\" name=\"wednesday_workout_rest\" id=\"wednesday-workout-rest\" {% if wednesday_workout == false %} checked {% endif %}onclick=\"restDay('wednesday')\"><strong>Descanso</strong>
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
                                            <input type=\"time\" name=\"wednesday_workout_time\" value=\"{% if wednesday_workout != false %}{{ wednesday_workout.hour|date('H:i:s') }}{% endif %}\" style=\"width: fit-content\">
                                            <label for=\"wednesday-workout\">Entrenamiento:</label>
                                            <textarea type=\"text\" id=\"wednesday-workout\" name=\"wednesday_workout\" class=\"form-control\" style=\"height: 150px\">{% if wednesday_workout != false %}{{ wednesday_workout.workout }}{% endif %}</textarea>
                                            <br/>
                                            <ul class=\"list-group\" id=\"wednesday-workout-exercises\">
                                                {% for exercise in exercises %}
                                                    <li>
                                                        <input type=\"checkbox\" value=\"{{ exercise.idExercise }}\" style=\"width: fit-content; margin-bottom: 10px; margin-top: 10px\" name=\"wednesday_workout_exercises[{{ exercise.idExercise }}][]\" {% if wednesday_workout != false and exercise.idExercise in wednesday_workout_exercises %}checked{% endif %}>
                                                        {{ exercise.title }}
                                                    </li>
                                                {% endfor %}
                                            </ul>
                                            <label for=\"wednesday-workout-notes\">Observaciones:</label>
                                            <textarea type=\"text\" id=\"wednesday-workout-notes\" name=\"wednesday_workout_notes\" class=\"form-control\" style=\"height: 80px\">{% if wednesday_workout != false %}{{ wednesday_workout.workoutNotes }}{% endif %}</textarea>
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
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"breakfast_hour_thursday\" value=\"{% if thursday_breakfast != false %}{{ thursday_breakfast.hour }}{% else %}08:30{% endif %}\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"breakfast_menu_thursday\" class=\"form-control\" style=\"height: 430px\">{% if thursday_breakfast != false %}{{ thursday_breakfast.meal }}{% endif %}</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"breakfast_list_thursday\" class=\"form-control\" style=\"height: 225px\">{% if thursday_breakfast != false %}{{ thursday_breakfast.mealShoppingList }}{% endif %}</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"breakfast_comments_thursday\" class=\"form-control\" style=\"height: 186px\">{% if thursday_breakfast != false %}{{ thursday_breakfast.mealNotes }}{% endif %}</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-snack day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"snack_hour_thursday\" value=\"{% if thursday_snack != false %}{{ thursday_snack.hour }}{% else %}21:00{% endif %}\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"snack_menu_thursday\" class=\"form-control\" style=\"height: 430px\">{% if thursday_snack != false %}{{ thursday_snack.meal }}{% endif %}</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"snack_list_thursday\" class=\"form-control\" style=\"height: 225px\">{% if thursday_snack != false %}{{ thursday_snack.mealShoppingList }}{% endif %}</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"snack_comments_thursday\" class=\"form-control\" style=\"height: 186px\">{% if thursday_snack != false %}{{ thursday_snack.mealNotes }}{% endif %}</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-lunch day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"lunch_hour_thursday\" value=\"{% if thursday_lunch != false %}{{ thursday_lunch.hour }}{% else %}21:00{% endif %}\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"lunch_menu_thursday\" class=\"form-control\" style=\"height: 430px\">{% if thursday_lunch != false %}{{ thursday_lunch.meal }}{% endif %}</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"lunch_list_thursday\" class=\"form-control\" style=\"height: 225px\">{% if thursday_lunch != false %}{{ thursday_lunch.mealShoppingList }}{% endif %}</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"lunch_comments_thursday\" class=\"form-control\" style=\"height: 186px\">{% if thursday_lunch != false %}{{ thursday_lunch.mealNotes }}{% endif %}</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-afternoon day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"afternoon_hour_thursday\" value=\"{% if thursday_afternoon != false %}{{ thursday_afternoon.hour }}{% else %}21:00{% endif %}\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"afternoon_menu_thursday\" class=\"form-control\" style=\"height: 430px\">{% if thursday_afternoon != false %}{{ thursday_afternoon.meal }}{% endif %}</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"afternoon_list_thursday\" class=\"form-control\" style=\"height: 225px\">{% if thursday_afternoon != false %}{{ thursday_afternoon.mealShoppingList }}{% endif %}</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"afternoon_comments_thursday\" class=\"form-control\" style=\"height: 186px\">{% if thursday_afternoon != false %}{{ thursday_afternoon.mealNotes }}{% endif %}</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-dinner day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"dinner_hour_thursday\" value=\"{% if thursday_dinner != false %}{{ thursday_dinner.hour }}{% else %}21:00{% endif %}\" min=\"09:00\" max=\"22:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"dinner_menu_thursday\" class=\"form-control\" style=\"height: 430px\">{% if thursday_dinner != false %}{{ thursday_dinner.meal }}{% endif %}</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"dinner_list_thursday\" class=\"form-control\" style=\"height: 225px\">{% if thursday_dinner != false %}{{ thursday_dinner.mealShoppingList }}{% endif %}</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"dinner_comments_thursday\" class=\"form-control\" style=\"height: 186px\">{% if thursday_dinner != false %}{{ thursday_dinner.mealNotes }}{% endif %}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-sm-3\">
                                        <div class=\"workout-rest\">
                                            <input type=\"checkbox\" value=\"1\" style=\"width: fit-content; margin-bottom: 10px; margin-top: 10px; margin-right: 10px\" name=\"thursday_workout_rest\" id=\"thursday-workout-rest\" {% if thursday_workout == false %} checked {% endif %} onclick=\"restDay('thursday')\"><strong>Descanso</strong>
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
                                            <input type=\"time\" name=\"thursday_workout_time\" value=\"{% if thursday_workout != false %}{{ thursday_workout.hour|date('H:i:s') }}{% endif %}\" style=\"width: fit-content\">
                                            <label for=\"thursday-workout\">Entrenamiento:</label>
                                            <textarea type=\"text\" id=\"thursday-workout\" name=\"thursday_workout\" class=\"form-control\" style=\"height: 150px\">{% if thursday_workout != false %}{{ thursday_workout.workout }}{% endif %}</textarea>
                                            <br/>
                                            <ul class=\"list-group\" id=\"thursday-workout-exercises\">
                                                {% for exercise in exercises %}
                                                    <li>
                                                        <input type=\"checkbox\" value=\"{{ exercise.idExercise }}\" style=\"width: fit-content; margin-bottom: 10px; margin-top: 10px\" name=\"thursday_workout_exercises[{{ exercise.idExercise }}][]\" {% if thursday_workout != false and exercise.idExercise in thursday_workout_exercises %}checked{% endif %}>
                                                        {{ exercise.title }}
                                                    </li>
                                                {% endfor %}
                                            </ul>
                                            <label for=\"thursday-workout-notes\">Observaciones:</label>
                                            <textarea type=\"text\" id=\"thursday-workout-notes\" name=\"thursday_workout_notes\" class=\"form-control\" style=\"height: 80px\">{% if thursday_workout != false %}{{ thursday_workout.workoutNotes }}{% endif %}</textarea>
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
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"breakfast_hour_friday\" value=\"{% if friday_breakfast != false %}{{ friday_breakfast.hour }}{% else %}08:30{% endif %}\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"breakfast_menu_friday\" class=\"form-control\" style=\"height: 430px\">{% if friday_breakfast != false %}{{ friday_breakfast.meal }}{% endif %}</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"breakfast_list_friday\" class=\"form-control\" style=\"height: 225px\">{% if friday_breakfast != false %}{{ friday_breakfast.mealShoppingList }}{% endif %}</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"breakfast_comments_friday\" class=\"form-control\" style=\"height: 186px\">{% if friday_breakfast != false %}{{ friday_breakfast.mealNotes }}{% endif %}</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-snack day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"snack_hour_friday\" value=\"{% if friday_snack != false %}{{ friday_snack.hour }}{% else %}11:30{% endif %}\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"snack_menu_friday\" class=\"form-control\" style=\"height: 430px\">{% if friday_snack != false %}{{ friday_snack.meal }}{% endif %}</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"snack_list_friday\" class=\"form-control\" style=\"height: 225px\">{% if friday_snack != false %}{{ friday_snack.mealShoppingList }}{% endif %}</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"snack_comments_friday\" class=\"form-control\" style=\"height: 186px\">{% if friday_snack != false %}{{ friday_snack.mealNotes }}{% endif %}</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-lunch day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"lunch_hour_friday\" value=\"{% if friday_lunch != false %}{{ friday_lunch.hour }}{% else %}14:00{% endif %}\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"lunch_menu_friday\" class=\"form-control\" style=\"height: 430px\">{% if friday_lunch != false %}{{ friday_lunch.meal }}{% endif %}</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"lunch_list_friday\" class=\"form-control\" style=\"height: 225px\">{% if friday_lunch != false %}{{ friday_lunch.mealShoppingList }}{% endif %}</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"lunch_comments_friday\" class=\"form-control\" style=\"height: 186px\">{% if friday_lunch != false %}{{ friday_lunch.mealNotes }}{% endif %}</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-afternoon day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"afternoon_hour_friday\" value=\"{% if friday_afternoon != false %}{{ friday_afternoon.hour }}{% else %}17:30{% endif %}\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"afternoon_menu_friday\" class=\"form-control\" style=\"height: 430px\">{% if friday_afternoon != false %}{{ friday_afternoon.meal }}{% endif %}</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"afternoon_list_friday\" class=\"form-control\" style=\"height: 225px\">{% if friday_afternoon != false %}{{ friday_afternoon.mealShoppingList }}{% endif %}</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"afternoon_comments_friday\" class=\"form-control\" style=\"height: 186px\">{% if friday_afternoon != false %}{{ friday_afternoon.mealNotes }}{% endif %}</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-dinner day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"dinner_hour_friday\" value=\"{% if friday_dinner != false %}{{ friday_dinner.hour }}{% else %}21:00{% endif %}\" min=\"09:00\" max=\"22:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"dinner_menu_friday\" class=\"form-control\" style=\"height: 430px\">{% if friday_dinner != false %}{{ friday_dinner.meal }}{% endif %}</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"dinner_list_friday\" class=\"form-control\" style=\"height: 225px\">{% if friday_dinner != false %}{{ friday_dinner.mealShoppingList }}{% endif %}</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"dinner_comments_friday\" class=\"form-control\" style=\"height: 186px\">{% if friday_dinner != false %}{{ friday_dinner.mealNotes }}{% endif %}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-sm-3\">
                                        <div class=\"workout-rest\">
                                            <input type=\"checkbox\" value=\"1\" style=\"width: fit-content; margin-bottom: 10px; margin-top: 10px; margin-right: 10px\" name=\"friday_workout_rest\" id=\"friday-workout-rest\" {% if friday_workout == false %} checked {% endif %} onclick=\"restDay('friday')\"><strong>Descanso</strong>
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
                                            <input type=\"time\" name=\"friday_workout_time\" value=\"{% if friday_workout != false %}{{ friday_workout.hour|date('H:i:s') }}{% endif %}\" style=\"width: fit-content\">
                                            <label for=\"friday-workout\">Entrenamiento:</label>
                                            <textarea type=\"text\" id=\"friday-workout\" name=\"friday_workout\" class=\"form-control\" style=\"height: 150px\">{% if friday_workout != false %}{{ friday_workout.workout }}{% endif %}</textarea>
                                            <br/>
                                            <ul class=\"list-group\" id=\"friday-workout-exercises\">
                                                {% for exercise in exercises %}
                                                    <li>
                                                        <input type=\"checkbox\" value=\"{{ exercise.idExercise }}\" style=\"width: fit-content; margin-bottom: 10px; margin-top: 10px\" name=\"friday_workout_exercises[{{ exercise.idExercise }}][]\" {% if friday_workout != false and exercise.idExercise in friday_workout_exercises %}checked{% endif %}>
                                                        {{ exercise.title }}
                                                    </li>
                                                {% endfor %}
                                            </ul>
                                            <label for=\"friday-workout-notes\">Observaciones:</label>
                                            <textarea type=\"text\" id=\"friday-workout-notes\" name=\"friday_workout_notes\" class=\"form-control\" style=\"height: 80px\">{% if friday_workout != false %}{{ friday_workout.workoutNotes }}{% endif %}</textarea>
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
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"breakfast_hour_saturday\" value=\"{% if saturday_breakfast != false %}{{ saturday_breakfast.hour }}{% else %}08:30{% endif %}\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"breakfast_menu_saturday\" class=\"form-control\" style=\"height: 430px\">{% if saturday_breakfast != false %}{{ saturday_breakfast.meal }}{% endif %}</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"breakfast_list_saturday\" class=\"form-control\" style=\"height: 225px\">{% if saturday_breakfast != false %}{{ saturday_breakfast.mealShoppingList }}{% endif %}</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"breakfast_comments_saturday\" class=\"form-control\" style=\"height: 186px\">{% if saturday_breakfast != false %}{{ saturday_breakfast.mealNotes }}{% endif %}</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-snack day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"snack_hour_saturday\" value=\"{% if saturday_breakfast != false  %}{{ saturday_breakfast.hour }}{% else %}11:30{% endif %}\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"snack_menu_saturday\" class=\"form-control\" style=\"height: 430px\">{% if saturday_breakfast != false  %}{{ saturday_snack.meal }}{% endif %}</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"snack_list_saturday\" class=\"form-control\" style=\"height: 225px\">{% if saturday_breakfast != false  %}{{ saturday_snack.mealShoppingList }}{% endif %}</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"snack_comments_saturday\" class=\"form-control\" style=\"height: 186px\">{% if saturday_breakfast != false  %}{{ saturday_snack.mealNotes }}{% endif %}</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-lunch day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"lunch_hour_saturday\" value=\"{% if saturday_lunch != false  %}{{ saturday_lunch.hour }}{% else %}14:00{% endif %}\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"lunch_menu_saturday\" class=\"form-control\" style=\"height: 430px\">{% if saturday_lunch != false  %}{{ saturday_lunch.meal }}{% endif %}</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"lunch_list_saturday\" class=\"form-control\" style=\"height: 225px\">{% if saturday_lunch != false  %}{{ saturday_lunch.mealShoppingList }}{% endif %}</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"lunch_comments_saturday\" class=\"form-control\" style=\"height: 186px\">{% if saturday_lunch != false  %}{{ saturday_lunch.mealNotes }}{% endif %}</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-afternoon day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"afternoon_hour_saturday\" value=\"{% if saturday_afternoon != false  %}{{ saturday_afternoon.hour }}{% else %}17:30{% endif %}\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"afternoon_menu_saturday\" class=\"form-control\" style=\"height: 430px\">{% if saturday_afternoon != false  %}{{ saturday_afternoon.meal }}{% endif %}</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"afternoon_list_saturday\" class=\"form-control\" style=\"height: 225px\">{% if saturday_afternoon != false  %}{{ saturday_afternoon.mealShoppingList }}{% endif %}</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"afternoon_comments_saturday\" class=\"form-control\" style=\"height: 186px\">{% if saturday_afternoon != false  %}{{ saturday_afternoon.mealNotes }}{% endif %}</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-dinner day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"dinner_hour_saturday\" value=\"{% if saturday_dinner != false  %}{{ saturday_dinner.hour }}{% else %}21:00{% endif %}\" min=\"09:00\" max=\"22:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"dinner_menu_saturday\" class=\"form-control\" style=\"height: 430px\">{% if saturday_dinner != false  %}{{ saturday_dinner.meal }}{% endif %}</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"dinner_list_saturday\" class=\"form-control\" style=\"height: 225px\">{% if saturday_dinner != false  %}{{ saturday_dinner.mealShoppingList }}{% endif %}</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"dinner_comments_saturday\" class=\"form-control\" style=\"height: 186px\">{% if saturday_dinner != false  %}{{ saturday_dinner.mealNotes }}{% endif %}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-sm-3\">
                                        <div class=\"workout-rest\">
                                            <input type=\"checkbox\" value=\"1\" style=\"width: fit-content; margin-bottom: 10px; margin-top: 10px; margin-right: 10px\" name=\"saturday_workout_rest\" id=\"saturday-workout-rest\" {% if saturday_workout == false %} checked {% endif %} onclick=\"restDay('saturday')\"><strong>Descanso</strong>
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
                                            <input type=\"time\" name=\"saturday_workout_time\" value=\"{% if saturday_workout != false %}{{ saturday_workout.hour|date('H:i:s') }}{% endif %}\" style=\"width: fit-content\">
                                            <label for=\"saturday-workout\">Entrenamiento:</label>
                                            <textarea type=\"text\" id=\"saturday-workout\" name=\"saturday_workout\" class=\"form-control\" style=\"height: 150px\">{% if saturday_workout != false %}{{ saturday_workout.workout }}{% endif %}</textarea>
                                            <br/>
                                            <ul class=\"list-group\" id=\"saturday-workout-exercises\">
                                                {% for exercise in exercises %}
                                                    <li>
                                                        <input type=\"checkbox\" value=\"{{ exercise.idExercise }}\" style=\"width: fit-content; margin-bottom: 10px; margin-top: 10px\" name=\"saturday_workout_exercises[{{ exercise.idExercise }}][]\" {% if saturday_workout != false and exercise.idExercise in saturday_workout_exercises %}checked{% endif %}>
                                                        {{ exercise.title }}
                                                    </li>
                                                {% endfor %}
                                            </ul>
                                            <label for=\"saturday-workout-notes\">Observaciones:</label>
                                            <textarea type=\"text\" id=\"saturday-workout-notes\" name=\"saturday_workout_notes\" class=\"form-control\" style=\"height: 80px\">{% if saturday_workout != false %}{{ saturday_workout.workoutNotes }}{% endif %}</textarea>
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
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"breakfast_hour_sunday\" value=\"{% if sunday_breakfast != false %}{{ sunday_breakfast.hour }}{% else %}08:30{% endif %}\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"breakfast_menu_sunday\" class=\"form-control\" style=\"height: 430px\">{% if sunday_breakfast != false %}{{ sunday_breakfast.meal }}{% endif %}</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"breakfast_list_sunday\" class=\"form-control\" style=\"height: 225px\">{% if sunday_breakfast != false %}{{ sunday_breakfast.mealShoppingList }}{% endif %}</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"breakfast_comments_sunday\" class=\"form-control\" style=\"height: 186px\">{% if sunday_breakfast != false %}{{ sunday_breakfast.mealNotes }}{% endif %}</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-snack day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"snack_hour_sunday\" value=\"{% if sunday_snack != false %}{{ sunday_snack.hour }}{% else %}11:30{% endif %}\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"snack_menu_sunday\" class=\"form-control\" style=\"height: 430px\">{% if sunday_snack != false %}{{ sunday_snack.meal }}{% endif %}</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"snack_list_sunday\" class=\"form-control\" style=\"height: 225px\">{% if sunday_snack != false %}{{ sunday_snack.mealShoppingList }}{% endif %}</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"snack_comments_sunday\" class=\"form-control\" style=\"height: 186px\">{% if sunday_snack != false %}{{ sunday_snack.mealNotes }}{% endif %}</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-lunch day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"lunch_hour_sunday\" value=\"{% if sunday_lunch != false %}{{ sunday_lunch.hour }}{% else %}14:00{% endif %}\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"lunch_menu_sunday\" class=\"form-control\" style=\"height: 430px\">{% if sunday_lunch != false %}{{ sunday_lunch.meal }}{% endif %}</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"lunch_list_sunday\" class=\"form-control\" style=\"height: 225px\">{% if sunday_lunch != false %}{{ sunday_lunch.mealShoppingList }}{% endif %}</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"lunch_comments_sunday\" class=\"form-control\" style=\"height: 186px\">{% if sunday_lunch != false %}{{ sunday_lunch.mealNotes }}{% endif %}</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-afternoon day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"afternoon_hour_sunday\" value=\"{% if sunday_afternoon != false %}{{ sunday_afternoon.hour }}{% else %}17:30{% endif %}\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"afternoon_menu_sunday\" class=\"form-control\" style=\"height: 430px\">{% if sunday_afternoon != false %}{{ sunday_afternoon.meal }}{% endif %}</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"afternoon_list_sunday\" class=\"form-control\" style=\"height: 225px\">{% if sunday_afternoon != false %}{{ sunday_afternoon.mealShoppingList }}{% endif %}</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"afternoon_comments_sunday\" class=\"form-control\" style=\"height: 186px\">{% if sunday_afternoon != false %}{{ sunday_afternoon.mealNotes }}{% endif %}</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-dinner day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"dinner_hour_sunday\" value=\"{% if sunday_dinner != false %}{{ sunday_dinner.hour }}{% else %}21:00{% endif %}\" min=\"09:00\" max=\"22:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"dinner_menu_sunday\" class=\"form-control\" style=\"height: 430px\">{% if sunday_dinner != false %}{{ sunday_dinner.meal }}{% endif %}</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"dinner_list_sunday\" class=\"form-control\" style=\"height: 225px\">{% if sunday_dinner != false %}{{ sunday_dinner.mealShoppingList }}{% endif %}</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"dinner_comments_sunday\" class=\"form-control\" style=\"height: 186px\">{% if sunday_dinner != false %}{{ sunday_dinner.mealNotes }}{% endif %}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-sm-3\">
                                        <div class=\"workout-rest\">
                                            <input type=\"checkbox\" value=\"1\" style=\"width: fit-content; margin-bottom: 10px; margin-top: 10px; margin-right: 10px\" name=\"sunday_workout_rest\" id=\"sunday-workout-rest\" {% if sunday_workout == false %} checked {% endif %} onclick=\"restDay('sunday')\"><strong>Descanso</strong>
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
                                            <input type=\"time\" name=\"sunday_workout_time\" value=\"{% if sunday_workout != false %}{{ sunday_workout.hour|date('H:i:s') }}{% endif %}\" style=\"width: fit-content\">
                                            <label for=\"sunday-workout\">Entrenamiento:</label>
                                            <textarea type=\"text\" id=\"sunday-workout\" name=\"sunday_workout\" class=\"form-control\" style=\"height: 150px\">{% if sunday_workout != false %}{{ sunday_workout.workout }}{% endif %}</textarea>
                                            <br/>
                                            <ul class=\"list-group\" id=\"sunday-workout-exercises\">
                                                {% for exercise in exercises %}
                                                    <li>
                                                        <input type=\"checkbox\" value=\"{{ exercise.idExercise }}\" style=\"width: fit-content; margin-bottom: 10px; margin-top: 10px\" name=\"sunday_workout_exercises[{{ exercise.idExercise }}][]\" {% if sunday_workout != false and exercise.idExercise in sunday_workout_exercises %}checked{% endif %}>
                                                        {{ exercise.title }}
                                                    </li>
                                                {% endfor %}
                                            </ul>
                                            <label for=\"sunday-workout-notes\">Observaciones:</label>
                                            <textarea type=\"text\" id=\"sunday-workout-notes\" name=\"sunday_workout_notes\" class=\"form-control\" style=\"height: 80px\">{% if sunday_workout != false %}{{ sunday_workout.workoutNotes }}{% endif %}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <input type=\"button\" name=\"previous\" class=\"previous action-button-previous\" value=\"Previo\"/>
                                <input type=\"submit\" name=\"confirm-plan\" class=\"next action-button\" value=\"Confirmar\"/>
                            </fieldset>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    </html>
{% endblock %}
", "@Nutritionist/nutritionist-edit-weekly-plan.html.twig", "/shared/httpd/nutrik/src/NutritionistBundle/Resources/views/nutritionist-edit-weekly-plan.html.twig");
    }
}
