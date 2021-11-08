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
                    <div id=\"weekly-plan-content-block\" style=\"height: 15rem; margin-bottom: 20px\">
                        <div class=\"col-sm-6\">
                            <label>Tags:</label>
                            <ul class=\"list-group\" id=\"weekly_plan_tags\">
                                ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tags"] ?? $this->getContext($context, "tags")));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 45
            echo "                                    <li>
                                        <input type=\"checkbox\" value=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "idTag", []), "html", null, true);
            echo "\" ";
            if (twig_in_filter($this->getAttribute($context["tag"], "idTag", []), ($context["weekly_plan_tags_keys"] ?? $this->getContext($context, "weekly_plan_tags_keys")))) {
                echo " checked ";
            }
            // line 47
            echo "                                               style=\"width: fit-content; margin-bottom: 5px; margin-top: 5px\" name=\"add_tags[";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "idTag", []), "html", null, true);
            echo "][]\">
                                        Nivel ";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "level", []), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "name", []), "html", null, true);
            echo "
                                    </li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "                            </ul>
                        </div>
                        <div class=\"col-sm-6\">
                            <label for=\"plan_title\">Tile:</label>
                            <textarea type=\"text\" id=\"plan_title\" name=\"plan_title\" class=\"form-control\">";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute(($context["weeklyPlan"] ?? $this->getContext($context, "weeklyPlan")), "title", []), "html", null, true);
        echo "</textarea>
                            <label for=\"plan_description\">Descripción:</label>
                            <textarea type=\"text\" id=\"plan_description\" name=\"plan_description\" class=\"form-control\" style=\"height: 5.5rem\">";
        // line 57
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
        // line 88
        if ((($context["monday_breakfast"] ?? $this->getContext($context, "monday_breakfast")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["monday_breakfast"] ?? $this->getContext($context, "monday_breakfast")), "hour", []), "html", null, true);
        } else {
            echo "08:30";
        }
        echo "\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"breakfast_menu_monday\" class=\"form-control\" style=\"height: 430px\">";
        // line 90
        if ((($context["monday_breakfast"] ?? $this->getContext($context, "monday_breakfast")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["monday_breakfast"] ?? $this->getContext($context, "monday_breakfast")), "meal", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"breakfast_list_monday\" class=\"form-control\" style=\"height: 225px\">";
        // line 93
        if ((($context["monday_breakfast"] ?? $this->getContext($context, "monday_breakfast")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["monday_breakfast"] ?? $this->getContext($context, "monday_breakfast")), "mealShoppingList", []), "html", null, true);
        }
        echo "</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"breakfast_comments_monday\" class=\"form-control\" style=\"height: 186px\">";
        // line 95
        if ((($context["monday_breakfast"] ?? $this->getContext($context, "monday_breakfast")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["monday_breakfast"] ?? $this->getContext($context, "monday_breakfast")), "mealNotes", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-snack day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"snack_hour_monday\" value=\"";
        // line 100
        if ((($context["monday_snack"] ?? $this->getContext($context, "monday_snack")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["monday_snack"] ?? $this->getContext($context, "monday_snack")), "hour", []), "html", null, true);
        } else {
            echo "11:30";
        }
        echo "\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"snack_menu_monday\" class=\"form-control\" style=\"height: 430px\">";
        // line 102
        if ((($context["monday_snack"] ?? $this->getContext($context, "monday_snack")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["monday_snack"] ?? $this->getContext($context, "monday_snack")), "meal", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"snack_list_monday\" class=\"form-control\" style=\"height: 225px\">";
        // line 105
        if ((($context["monday_snack"] ?? $this->getContext($context, "monday_snack")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["monday_snack"] ?? $this->getContext($context, "monday_snack")), "mealShoppingList", []), "html", null, true);
        }
        echo "</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"snack_comments_monday\" class=\"form-control\" style=\"height: 186px\">";
        // line 107
        if ((($context["monday_snack"] ?? $this->getContext($context, "monday_snack")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["monday_snack"] ?? $this->getContext($context, "monday_snack")), "mealNotes", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-lunch day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"lunch_hour_monday\" value=\"";
        // line 112
        if ((($context["monday_lunch"] ?? $this->getContext($context, "monday_lunch")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["monday_lunch"] ?? $this->getContext($context, "monday_lunch")), "hour", []), "html", null, true);
        } else {
            echo "14:00";
        }
        echo "\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"lunch_menu_monday\" class=\"form-control\" style=\"height: 430px\">";
        // line 114
        if ((($context["monday_lunch"] ?? $this->getContext($context, "monday_lunch")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["monday_lunch"] ?? $this->getContext($context, "monday_lunch")), "meal", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"lunch_list_monday\" class=\"form-control\" style=\"height: 225px\">";
        // line 117
        if ((($context["monday_lunch"] ?? $this->getContext($context, "monday_lunch")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["monday_lunch"] ?? $this->getContext($context, "monday_lunch")), "mealShoppingList", []), "html", null, true);
        }
        echo "</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"lunch_comments_monday\" class=\"form-control\" style=\"height: 186px\">";
        // line 119
        if ((($context["monday_lunch"] ?? $this->getContext($context, "monday_lunch")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["monday_lunch"] ?? $this->getContext($context, "monday_lunch")), "mealNotes", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-afternoon day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"afternoon_hour_monday\" value=\"";
        // line 124
        if ((($context["monday_afternoon"] ?? $this->getContext($context, "monday_afternoon")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["monday_afternoon"] ?? $this->getContext($context, "monday_afternoon")), "hour", []), "html", null, true);
        } else {
            echo "17:30";
        }
        echo "\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"afternoon_menu_monday\" class=\"form-control\" style=\"height: 430px\">";
        // line 126
        if ((($context["monday_afternoon"] ?? $this->getContext($context, "monday_afternoon")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["monday_afternoon"] ?? $this->getContext($context, "monday_afternoon")), "meal", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"afternoon_list_monday\" class=\"form-control\" style=\"height: 225px\">";
        // line 129
        if ((($context["monday_afternoon"] ?? $this->getContext($context, "monday_afternoon")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["monday_afternoon"] ?? $this->getContext($context, "monday_afternoon")), "mealShoppingList", []), "html", null, true);
        }
        echo "</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"afternoon_comments_monday\" class=\"form-control\" style=\"height: 186px\">";
        // line 131
        if ((($context["monday_afternoon"] ?? $this->getContext($context, "monday_afternoon")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["monday_afternoon"] ?? $this->getContext($context, "monday_afternoon")), "mealNotes", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-dinner day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"dinner_hour_monday\" value=\"";
        // line 136
        if ((($context["monday_dinner"] ?? $this->getContext($context, "monday_dinner")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["monday_dinner"] ?? $this->getContext($context, "monday_dinner")), "hour", []), "html", null, true);
        } else {
            echo "21:00";
        }
        echo "\" min=\"09:00\" max=\"22:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"dinner_menu_monday\" class=\"form-control\" style=\"height: 430px\">";
        // line 138
        if ((($context["monday_dinner"] ?? $this->getContext($context, "monday_dinner")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["monday_dinner"] ?? $this->getContext($context, "monday_dinner")), "meal", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"dinner_list_monday\" class=\"form-control\" style=\"height: 225px\">";
        // line 141
        if ((($context["monday_dinner"] ?? $this->getContext($context, "monday_dinner")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["monday_dinner"] ?? $this->getContext($context, "monday_dinner")), "mealShoppingList", []), "html", null, true);
        }
        echo "</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"dinner_comments_monday\" class=\"form-control\" style=\"height: 186px\">";
        // line 143
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
        // line 149
        if ((($context["monday_workout"] ?? $this->getContext($context, "monday_workout")) == false)) {
            echo " checked ";
        }
        echo " onclick=\"restDay('monday')\"><strong>Descanso</strong>
                                        </div>
                                        <div class=\"monday-workout\"  ";
        // line 151
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
        // line 163
        if ((($context["monday_workout"] ?? $this->getContext($context, "monday_workout")) != false)) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["monday_workout"] ?? $this->getContext($context, "monday_workout")), "hour", []), "H:i:s"), "html", null, true);
        }
        echo "\" style=\"width: fit-content\">
                                            <label for=\"monday-workout\">Entrenamiento:</label>
                                            <textarea type=\"text\" id=\"monday-workout\" name=\"monday_workout\" class=\"form-control\" style=\"height: 150px\">";
        // line 165
        if ((($context["monday_workout"] ?? $this->getContext($context, "monday_workout")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["monday_workout"] ?? $this->getContext($context, "monday_workout")), "workout", []), "html", null, true);
        }
        echo "</textarea>
                                            <br/>
                                            <ul class=\"list-group\" id=\"monday-workout-exercises\">
                                                ";
        // line 168
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["exercises"] ?? $this->getContext($context, "exercises")));
        foreach ($context['_seq'] as $context["_key"] => $context["exercise"]) {
            // line 169
            echo "                                                    <li>
                                                        <input type=\"checkbox\" value=\"";
            // line 170
            echo twig_escape_filter($this->env, $this->getAttribute($context["exercise"], "idExercise", []), "html", null, true);
            echo "\" style=\"width: fit-content; margin-bottom: 10px; margin-top: 10px\" name=\"monday_workout_exercises[";
            echo twig_escape_filter($this->env, $this->getAttribute($context["exercise"], "idExercise", []), "html", null, true);
            echo "][]\" ";
            if (((($context["monday_workout"] ?? $this->getContext($context, "monday_workout")) != false) && twig_in_filter($this->getAttribute($context["exercise"], "idExercise", []), ($context["monday_workout_exercises"] ?? $this->getContext($context, "monday_workout_exercises"))))) {
                echo "checked";
            }
            echo ">
                                                        ";
            // line 171
            echo twig_escape_filter($this->env, $this->getAttribute($context["exercise"], "title", []), "html", null, true);
            echo "
                                                    </li>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['exercise'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 174
        echo "                                            </ul>
                                            <label for=\"monday-workout-notes\">Observaciones:</label>
                                            <textarea type=\"text\" id=\"monday-workout-notes\" name=\"monday_workout_notes\" class=\"form-control\" style=\"height: 80px\">";
        // line 176
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
        // line 195
        if ((($context["tuesday_breakfast"] ?? $this->getContext($context, "tuesday_breakfast")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["tuesday_breakfast"] ?? $this->getContext($context, "tuesday_breakfast")), "hour", []), "html", null, true);
        } else {
            echo "08:00";
        }
        echo "\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"breakfast_menu_tuesday\" class=\"form-control\" style=\"height: 430px\">";
        // line 197
        if ((($context["tuesday_breakfast"] ?? $this->getContext($context, "tuesday_breakfast")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["tuesday_breakfast"] ?? $this->getContext($context, "tuesday_breakfast")), "meal", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"breakfast_list_tuesday\" class=\"form-control\" style=\"height: 225px\">";
        // line 200
        if ((($context["tuesday_breakfast"] ?? $this->getContext($context, "tuesday_breakfast")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["tuesday_breakfast"] ?? $this->getContext($context, "tuesday_breakfast")), "mealShoppingList", []), "html", null, true);
        }
        echo "</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"breakfast_comments_tuesday\" class=\"form-control\" style=\"height: 186px\">";
        // line 202
        if ((($context["tuesday_breakfast"] ?? $this->getContext($context, "tuesday_breakfast")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["tuesday_breakfast"] ?? $this->getContext($context, "tuesday_breakfast")), "mealShoppingList", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-snack day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"snack_hour_tuesday\" value=\"";
        // line 207
        if ((($context["tuesday_snack"] ?? $this->getContext($context, "tuesday_snack")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["tuesday_snack"] ?? $this->getContext($context, "tuesday_snack")), "hour", []), "html", null, true);
        } else {
            echo "11:30";
        }
        echo "\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"snack_menu_tuesday\" class=\"form-control\" style=\"height: 430px\">";
        // line 209
        if ((($context["tuesday_snack"] ?? $this->getContext($context, "tuesday_snack")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["tuesday_snack"] ?? $this->getContext($context, "tuesday_snack")), "meal", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"snack_list_tuesday\" class=\"form-control\" style=\"height: 225px\">";
        // line 212
        if ((($context["tuesday_snack"] ?? $this->getContext($context, "tuesday_snack")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["tuesday_snack"] ?? $this->getContext($context, "tuesday_snack")), "mealShoppingList", []), "html", null, true);
        }
        echo "</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"snack_comments_tuesday\" class=\"form-control\" style=\"height: 186px\">";
        // line 214
        if ((($context["tuesday_snack"] ?? $this->getContext($context, "tuesday_snack")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["tuesday_snack"] ?? $this->getContext($context, "tuesday_snack")), "mealNotes", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-lunch day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"lunch_hour_tuesday\" value=\"";
        // line 219
        if ((($context["tuesday_lunch"] ?? $this->getContext($context, "tuesday_lunch")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["tuesday_lunch"] ?? $this->getContext($context, "tuesday_lunch")), "hour", []), "html", null, true);
        } else {
            echo "14:00";
        }
        echo "\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"lunch_menu_tuesday\" class=\"form-control\" style=\"height: 430px\">";
        // line 221
        if ((($context["tuesday_lunch"] ?? $this->getContext($context, "tuesday_lunch")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["tuesday_lunch"] ?? $this->getContext($context, "tuesday_lunch")), "meal", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"lunch_list_tuesday\" class=\"form-control\" style=\"height: 225px\">";
        // line 224
        if ((($context["tuesday_lunch"] ?? $this->getContext($context, "tuesday_lunch")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["tuesday_lunch"] ?? $this->getContext($context, "tuesday_lunch")), "mealShoppingList", []), "html", null, true);
        }
        echo "</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"lunch_comments_tuesday\" class=\"form-control\" style=\"height: 186px\">";
        // line 226
        if ((($context["tuesday_lunch"] ?? $this->getContext($context, "tuesday_lunch")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["tuesday_lunch"] ?? $this->getContext($context, "tuesday_lunch")), "mealNotes", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-afternoon day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"afternoon_hour_tuesday\" value=\"";
        // line 231
        if ((($context["tuesday_afternoon"] ?? $this->getContext($context, "tuesday_afternoon")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["tuesday_afternoon"] ?? $this->getContext($context, "tuesday_afternoon")), "hour", []), "html", null, true);
        } else {
            echo "17:30";
        }
        echo "\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"afternoon_menu_tuesday\" class=\"form-control\" style=\"height: 430px\">";
        // line 233
        if ((($context["tuesday_afternoon"] ?? $this->getContext($context, "tuesday_afternoon")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["tuesday_afternoon"] ?? $this->getContext($context, "tuesday_afternoon")), "meal", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"afternoon_list_tuesday\" class=\"form-control\" style=\"height: 225px\">";
        // line 236
        if ((($context["tuesday_afternoon"] ?? $this->getContext($context, "tuesday_afternoon")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["tuesday_afternoon"] ?? $this->getContext($context, "tuesday_afternoon")), "mealShoppingList", []), "html", null, true);
        }
        echo "</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"afternoon_comments_tuesday\" class=\"form-control\" style=\"height: 186px\">";
        // line 238
        if ((($context["tuesday_afternoon"] ?? $this->getContext($context, "tuesday_afternoon")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["tuesday_afternoon"] ?? $this->getContext($context, "tuesday_afternoon")), "mealNotes", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-dinner day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"dinner_hour_tuesday\" value=\"";
        // line 243
        if ((($context["tuesday_dinner"] ?? $this->getContext($context, "tuesday_dinner")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["tuesday_dinner"] ?? $this->getContext($context, "tuesday_dinner")), "hour", []), "html", null, true);
        } else {
            echo "21:00";
        }
        echo "\" min=\"09:00\" max=\"22:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"dinner_menu_tuesday\" class=\"form-control\" style=\"height: 430px\">";
        // line 245
        if ((($context["tuesday_dinner"] ?? $this->getContext($context, "tuesday_dinner")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["tuesday_dinner"] ?? $this->getContext($context, "tuesday_dinner")), "meal", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"dinner_list_tuesday\" class=\"form-control\" style=\"height: 225px\">";
        // line 248
        if ((($context["tuesday_dinner"] ?? $this->getContext($context, "tuesday_dinner")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["tuesday_dinner"] ?? $this->getContext($context, "tuesday_dinner")), "mealShoppingList", []), "html", null, true);
        }
        echo "</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"dinner_comments_tuesday\" class=\"form-control\" style=\"height: 186px\">";
        // line 250
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
        // line 256
        if ((($context["tuesday_workout"] ?? $this->getContext($context, "tuesday_workout")) == false)) {
            echo " checked ";
        }
        echo "onclick=\"restDay('tuesday')\"><strong>Descanso</strong>
                                        </div>
                                        <div class=\"tuesday-workout\" ";
        // line 258
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
        // line 270
        if ((($context["tuesday_workout"] ?? $this->getContext($context, "tuesday_workout")) != false)) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["tuesday_workout"] ?? $this->getContext($context, "tuesday_workout")), "hour", []), "H:i:s"), "html", null, true);
        }
        echo "\" style=\"width: fit-content\">
                                            <label for=\"tuesday-workout\">Entrenamiento:</label>
                                            <textarea type=\"text\" id=\"tuesday-workout\" name=\"tuesday_workout\" class=\"form-control\" style=\"height: 150px\">";
        // line 272
        if ((($context["tuesday_workout"] ?? $this->getContext($context, "tuesday_workout")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["tuesday_workout"] ?? $this->getContext($context, "tuesday_workout")), "workout", []), "html", null, true);
        }
        echo "</textarea>
                                            <br/>
                                            <ul class=\"list-group\" id=\"tuesday-workout-exercises\">
                                                ";
        // line 275
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["exercises"] ?? $this->getContext($context, "exercises")));
        foreach ($context['_seq'] as $context["_key"] => $context["exercise"]) {
            // line 276
            echo "                                                    <li>
                                                        <input type=\"checkbox\" value=\"";
            // line 277
            echo twig_escape_filter($this->env, $this->getAttribute($context["exercise"], "idExercise", []), "html", null, true);
            echo "\" style=\"width: fit-content; margin-bottom: 10px; margin-top: 10px\" name=\"tuesday_workout_exercises[";
            echo twig_escape_filter($this->env, $this->getAttribute($context["exercise"], "idExercise", []), "html", null, true);
            echo "][]\" ";
            if (((($context["tuesday_workout"] ?? $this->getContext($context, "tuesday_workout")) != false) && twig_in_filter($this->getAttribute($context["exercise"], "idExercise", []), ($context["tuesday_workout_exercises"] ?? $this->getContext($context, "tuesday_workout_exercises"))))) {
                echo "checked";
            }
            echo ">
                                                        ";
            // line 278
            echo twig_escape_filter($this->env, $this->getAttribute($context["exercise"], "title", []), "html", null, true);
            echo "
                                                    </li>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['exercise'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 281
        echo "                                            </ul>
                                            <label for=\"tuesday-workout-notes\">Observaciones:</label>
                                            <textarea type=\"text\" id=\"tuesday-workout-notes\" name=\"tuesday_workout_notes\" class=\"form-control\" style=\"height: 80px\">";
        // line 283
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
        // line 303
        if ((($context["wednesday_breakfast"] ?? $this->getContext($context, "wednesday_breakfast")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["wednesday_breakfast"] ?? $this->getContext($context, "wednesday_breakfast")), "hour", []), "html", null, true);
        } else {
            echo "08:30";
        }
        echo "\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"breakfast_menu_wednesday\" class=\"form-control\" style=\"height: 430px\">";
        // line 305
        if ((($context["wednesday_breakfast"] ?? $this->getContext($context, "wednesday_breakfast")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["wednesday_breakfast"] ?? $this->getContext($context, "wednesday_breakfast")), "meal", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"breakfast_list_wednesday\" class=\"form-control\" style=\"height: 225px\">";
        // line 308
        if ((($context["wednesday_breakfast"] ?? $this->getContext($context, "wednesday_breakfast")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["wednesday_breakfast"] ?? $this->getContext($context, "wednesday_breakfast")), "mealShoppingList", []), "html", null, true);
        }
        echo "</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"breakfast_comments_wednesday\" class=\"form-control\" style=\"height: 186px\">";
        // line 310
        if ((($context["wednesday_breakfast"] ?? $this->getContext($context, "wednesday_breakfast")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["wednesday_breakfast"] ?? $this->getContext($context, "wednesday_breakfast")), "mealNotes", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-snack day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"snack_hour_wednesday\" value=\"";
        // line 315
        if ((($context["wednesday_snack"] ?? $this->getContext($context, "wednesday_snack")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["wednesday_snack"] ?? $this->getContext($context, "wednesday_snack")), "hour", []), "html", null, true);
        } else {
            echo "11:30";
        }
        echo "\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"snack_menu_wednesday\" class=\"form-control\" style=\"height: 430px\">";
        // line 317
        if ((($context["wednesday_snack"] ?? $this->getContext($context, "wednesday_snack")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["wednesday_snack"] ?? $this->getContext($context, "wednesday_snack")), "meal", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"snack_list_wednesday\" class=\"form-control\" style=\"height: 225px\">";
        // line 320
        if ((($context["wednesday_snack"] ?? $this->getContext($context, "wednesday_snack")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["wednesday_snack"] ?? $this->getContext($context, "wednesday_snack")), "mealShoppingList", []), "html", null, true);
        }
        echo "</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"snack_comments_wednesday\" class=\"form-control\" style=\"height: 186px\"><";
        // line 322
        if ((($context["wednesday_snack"] ?? $this->getContext($context, "wednesday_snack")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["wednesday_snack"] ?? $this->getContext($context, "wednesday_snack")), "mealNotes", []), "html", null, true);
        }
        echo "/textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-lunch day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"lunch_hour_wednesday\" value=\"";
        // line 327
        if ((($context["wednesday_lunch"] ?? $this->getContext($context, "wednesday_lunch")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["wednesday_lunch"] ?? $this->getContext($context, "wednesday_lunch")), "hour", []), "html", null, true);
        } else {
            echo "14:00";
        }
        echo "\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"lunch_menu_wednesday\" class=\"form-control\" style=\"height: 430px\">";
        // line 329
        if ((($context["wednesday_lunch"] ?? $this->getContext($context, "wednesday_lunch")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["wednesday_lunch"] ?? $this->getContext($context, "wednesday_lunch")), "meal", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"lunch_list_wednesday\" class=\"form-control\" style=\"height: 225px\">";
        // line 332
        if ((($context["wednesday_lunch"] ?? $this->getContext($context, "wednesday_lunch")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["wednesday_lunch"] ?? $this->getContext($context, "wednesday_lunch")), "mealShoppingList", []), "html", null, true);
        }
        echo "</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"lunch_comments_wednesday\" class=\"form-control\" style=\"height: 186px\">";
        // line 334
        if ((($context["wednesday_lunch"] ?? $this->getContext($context, "wednesday_lunch")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["wednesday_lunch"] ?? $this->getContext($context, "wednesday_lunch")), "mealNotes", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-afternoon day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"afternoon_hour_wednesday\" value=\"";
        // line 339
        if ((($context["wednesday_afternoon"] ?? $this->getContext($context, "wednesday_afternoon")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["wednesday_afternoon"] ?? $this->getContext($context, "wednesday_afternoon")), "hour", []), "html", null, true);
        } else {
            echo "17:30";
        }
        echo "\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"afternoon_menu_wednesday\" class=\"form-control\" style=\"height: 430px\">";
        // line 341
        if ((($context["wednesday_afternoon"] ?? $this->getContext($context, "wednesday_afternoon")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["wednesday_afternoon"] ?? $this->getContext($context, "wednesday_afternoon")), "meal", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"afternoon_list_wednesday\" class=\"form-control\" style=\"height: 225px\">";
        // line 344
        if ((($context["wednesday_afternoon"] ?? $this->getContext($context, "wednesday_afternoon")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["wednesday_afternoon"] ?? $this->getContext($context, "wednesday_afternoon")), "mealShoppingList", []), "html", null, true);
        }
        echo "</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"afternoon_comments_wednesday\" class=\"form-control\" style=\"height: 186px\">";
        // line 346
        if ((($context["wednesday_afternoon"] ?? $this->getContext($context, "wednesday_afternoon")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["wednesday_afternoon"] ?? $this->getContext($context, "wednesday_afternoon")), "mealNotes", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-dinner day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"dinner_hour_wednesday\" value=\"";
        // line 351
        if ((($context["wednesday_dinner"] ?? $this->getContext($context, "wednesday_dinner")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["wednesday_dinner"] ?? $this->getContext($context, "wednesday_dinner")), "hour", []), "html", null, true);
        } else {
            echo "21:00";
        }
        echo "\" min=\"09:00\" max=\"22:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"dinner_menu_wednesday\" class=\"form-control\" style=\"height: 430px\">";
        // line 353
        if ((($context["wednesday_dinner"] ?? $this->getContext($context, "wednesday_dinner")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["wednesday_dinner"] ?? $this->getContext($context, "wednesday_dinner")), "meal", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"dinner_list_wednesday\" class=\"form-control\" style=\"height: 225px\">";
        // line 356
        if ((($context["wednesday_dinner"] ?? $this->getContext($context, "wednesday_dinner")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["wednesday_dinner"] ?? $this->getContext($context, "wednesday_dinner")), "mealShoppingList", []), "html", null, true);
        }
        echo "</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"dinner_comments_wednesday\" class=\"form-control\" style=\"height: 186px\">";
        // line 358
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
        // line 364
        if ((($context["wednesday_workout"] ?? $this->getContext($context, "wednesday_workout")) == false)) {
            echo " checked ";
        }
        echo "onclick=\"restDay('wednesday')\"><strong>Descanso</strong>
                                        </div>
                                        <div class=\"wednesday-workout\" ";
        // line 366
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
        // line 378
        if ((($context["wednesday_workout"] ?? $this->getContext($context, "wednesday_workout")) != false)) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["wednesday_workout"] ?? $this->getContext($context, "wednesday_workout")), "hour", []), "H:i:s"), "html", null, true);
        }
        echo "\" style=\"width: fit-content\">
                                            <label for=\"wednesday-workout\">Entrenamiento:</label>
                                            <textarea type=\"text\" id=\"wednesday-workout\" name=\"wednesday_workout\" class=\"form-control\" style=\"height: 150px\">";
        // line 380
        if ((($context["wednesday_workout"] ?? $this->getContext($context, "wednesday_workout")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["wednesday_workout"] ?? $this->getContext($context, "wednesday_workout")), "workout", []), "html", null, true);
        }
        echo "</textarea>
                                            <br/>
                                            <ul class=\"list-group\" id=\"wednesday-workout-exercises\">
                                                ";
        // line 383
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["exercises"] ?? $this->getContext($context, "exercises")));
        foreach ($context['_seq'] as $context["_key"] => $context["exercise"]) {
            // line 384
            echo "                                                    <li>
                                                        <input type=\"checkbox\" value=\"";
            // line 385
            echo twig_escape_filter($this->env, $this->getAttribute($context["exercise"], "idExercise", []), "html", null, true);
            echo "\" style=\"width: fit-content; margin-bottom: 10px; margin-top: 10px\" name=\"wednesday_workout_exercises[";
            echo twig_escape_filter($this->env, $this->getAttribute($context["exercise"], "idExercise", []), "html", null, true);
            echo "][]\" ";
            if (((($context["wednesday_workout"] ?? $this->getContext($context, "wednesday_workout")) != false) && twig_in_filter($this->getAttribute($context["exercise"], "idExercise", []), ($context["wednesday_workout_exercises"] ?? $this->getContext($context, "wednesday_workout_exercises"))))) {
                echo "checked";
            }
            echo ">
                                                        ";
            // line 386
            echo twig_escape_filter($this->env, $this->getAttribute($context["exercise"], "title", []), "html", null, true);
            echo "
                                                    </li>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['exercise'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 389
        echo "                                            </ul>
                                            <label for=\"wednesday-workout-notes\">Observaciones:</label>
                                            <textarea type=\"text\" id=\"wednesday-workout-notes\" name=\"wednesday_workout_notes\" class=\"form-control\" style=\"height: 80px\">";
        // line 391
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
        // line 411
        if ((($context["thursday_breakfast"] ?? $this->getContext($context, "thursday_breakfast")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["thursday_breakfast"] ?? $this->getContext($context, "thursday_breakfast")), "hour", []), "html", null, true);
        } else {
            echo "08:30";
        }
        echo "\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"breakfast_menu_thursday\" class=\"form-control\" style=\"height: 430px\">";
        // line 413
        if ((($context["thursday_breakfast"] ?? $this->getContext($context, "thursday_breakfast")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["thursday_breakfast"] ?? $this->getContext($context, "thursday_breakfast")), "meal", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"breakfast_list_thursday\" class=\"form-control\" style=\"height: 225px\">";
        // line 416
        if ((($context["thursday_breakfast"] ?? $this->getContext($context, "thursday_breakfast")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["thursday_breakfast"] ?? $this->getContext($context, "thursday_breakfast")), "mealShoppingList", []), "html", null, true);
        }
        echo "</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"breakfast_comments_thursday\" class=\"form-control\" style=\"height: 186px\">";
        // line 418
        if ((($context["thursday_breakfast"] ?? $this->getContext($context, "thursday_breakfast")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["thursday_breakfast"] ?? $this->getContext($context, "thursday_breakfast")), "mealNotes", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-snack day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"snack_hour_thursday\" value=\"";
        // line 423
        if ((($context["thursday_snack"] ?? $this->getContext($context, "thursday_snack")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["thursday_snack"] ?? $this->getContext($context, "thursday_snack")), "hour", []), "html", null, true);
        } else {
            echo "21:00";
        }
        echo "\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"snack_menu_thursday\" class=\"form-control\" style=\"height: 430px\">";
        // line 425
        if ((($context["thursday_snack"] ?? $this->getContext($context, "thursday_snack")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["thursday_snack"] ?? $this->getContext($context, "thursday_snack")), "meal", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"snack_list_thursday\" class=\"form-control\" style=\"height: 225px\">";
        // line 428
        if ((($context["thursday_snack"] ?? $this->getContext($context, "thursday_snack")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["thursday_snack"] ?? $this->getContext($context, "thursday_snack")), "mealShoppingList", []), "html", null, true);
        }
        echo "</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"snack_comments_thursday\" class=\"form-control\" style=\"height: 186px\">";
        // line 430
        if ((($context["thursday_snack"] ?? $this->getContext($context, "thursday_snack")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["thursday_snack"] ?? $this->getContext($context, "thursday_snack")), "mealNotes", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-lunch day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"lunch_hour_thursday\" value=\"";
        // line 435
        if ((($context["thursday_lunch"] ?? $this->getContext($context, "thursday_lunch")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["thursday_lunch"] ?? $this->getContext($context, "thursday_lunch")), "hour", []), "html", null, true);
        } else {
            echo "21:00";
        }
        echo "\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"lunch_menu_thursday\" class=\"form-control\" style=\"height: 430px\">";
        // line 437
        if ((($context["thursday_lunch"] ?? $this->getContext($context, "thursday_lunch")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["thursday_lunch"] ?? $this->getContext($context, "thursday_lunch")), "meal", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"lunch_list_thursday\" class=\"form-control\" style=\"height: 225px\">";
        // line 440
        if ((($context["thursday_lunch"] ?? $this->getContext($context, "thursday_lunch")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["thursday_lunch"] ?? $this->getContext($context, "thursday_lunch")), "mealShoppingList", []), "html", null, true);
        }
        echo "</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"lunch_comments_thursday\" class=\"form-control\" style=\"height: 186px\">";
        // line 442
        if ((($context["thursday_lunch"] ?? $this->getContext($context, "thursday_lunch")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["thursday_lunch"] ?? $this->getContext($context, "thursday_lunch")), "mealNotes", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-afternoon day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"afternoon_hour_thursday\" value=\"";
        // line 447
        if ((($context["thursday_afternoon"] ?? $this->getContext($context, "thursday_afternoon")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["thursday_afternoon"] ?? $this->getContext($context, "thursday_afternoon")), "hour", []), "html", null, true);
        } else {
            echo "21:00";
        }
        echo "\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"afternoon_menu_thursday\" class=\"form-control\" style=\"height: 430px\">";
        // line 449
        if ((($context["thursday_afternoon"] ?? $this->getContext($context, "thursday_afternoon")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["thursday_afternoon"] ?? $this->getContext($context, "thursday_afternoon")), "meal", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"afternoon_list_thursday\" class=\"form-control\" style=\"height: 225px\">";
        // line 452
        if ((($context["thursday_afternoon"] ?? $this->getContext($context, "thursday_afternoon")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["thursday_afternoon"] ?? $this->getContext($context, "thursday_afternoon")), "mealShoppingList", []), "html", null, true);
        }
        echo "</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"afternoon_comments_thursday\" class=\"form-control\" style=\"height: 186px\">";
        // line 454
        if ((($context["thursday_afternoon"] ?? $this->getContext($context, "thursday_afternoon")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["thursday_afternoon"] ?? $this->getContext($context, "thursday_afternoon")), "mealNotes", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-dinner day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"dinner_hour_thursday\" value=\"";
        // line 459
        if ((($context["thursday_dinner"] ?? $this->getContext($context, "thursday_dinner")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["thursday_dinner"] ?? $this->getContext($context, "thursday_dinner")), "hour", []), "html", null, true);
        } else {
            echo "21:00";
        }
        echo "\" min=\"09:00\" max=\"22:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"dinner_menu_thursday\" class=\"form-control\" style=\"height: 430px\">";
        // line 461
        if ((($context["thursday_dinner"] ?? $this->getContext($context, "thursday_dinner")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["thursday_dinner"] ?? $this->getContext($context, "thursday_dinner")), "meal", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"dinner_list_thursday\" class=\"form-control\" style=\"height: 225px\">";
        // line 464
        if ((($context["thursday_dinner"] ?? $this->getContext($context, "thursday_dinner")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["thursday_dinner"] ?? $this->getContext($context, "thursday_dinner")), "mealShoppingList", []), "html", null, true);
        }
        echo "</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"dinner_comments_thursday\" class=\"form-control\" style=\"height: 186px\">";
        // line 466
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
        // line 472
        if ((($context["thursday_workout"] ?? $this->getContext($context, "thursday_workout")) == false)) {
            echo " checked ";
        }
        echo " onclick=\"restDay('thursday')\"><strong>Descanso</strong>
                                        </div>
                                        <div class=\"thursday-workout\" ";
        // line 474
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
        // line 486
        if ((($context["thursday_workout"] ?? $this->getContext($context, "thursday_workout")) != false)) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["thursday_workout"] ?? $this->getContext($context, "thursday_workout")), "hour", []), "H:i:s"), "html", null, true);
        }
        echo "\" style=\"width: fit-content\">
                                            <label for=\"thursday-workout\">Entrenamiento:</label>
                                            <textarea type=\"text\" id=\"thursday-workout\" name=\"thursday_workout\" class=\"form-control\" style=\"height: 150px\">";
        // line 488
        if ((($context["thursday_workout"] ?? $this->getContext($context, "thursday_workout")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["thursday_workout"] ?? $this->getContext($context, "thursday_workout")), "workout", []), "html", null, true);
        }
        echo "</textarea>
                                            <br/>
                                            <ul class=\"list-group\" id=\"thursday-workout-exercises\">
                                                ";
        // line 491
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["exercises"] ?? $this->getContext($context, "exercises")));
        foreach ($context['_seq'] as $context["_key"] => $context["exercise"]) {
            // line 492
            echo "                                                    <li>
                                                        <input type=\"checkbox\" value=\"";
            // line 493
            echo twig_escape_filter($this->env, $this->getAttribute($context["exercise"], "idExercise", []), "html", null, true);
            echo "\" style=\"width: fit-content; margin-bottom: 10px; margin-top: 10px\" name=\"thursday_workout_exercises[";
            echo twig_escape_filter($this->env, $this->getAttribute($context["exercise"], "idExercise", []), "html", null, true);
            echo "][]\" ";
            if (((($context["thursday_workout"] ?? $this->getContext($context, "thursday_workout")) != false) && twig_in_filter($this->getAttribute($context["exercise"], "idExercise", []), ($context["thursday_workout_exercises"] ?? $this->getContext($context, "thursday_workout_exercises"))))) {
                echo "checked";
            }
            echo ">
                                                        ";
            // line 494
            echo twig_escape_filter($this->env, $this->getAttribute($context["exercise"], "title", []), "html", null, true);
            echo "
                                                    </li>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['exercise'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 497
        echo "                                            </ul>
                                            <label for=\"thursday-workout-notes\">Observaciones:</label>
                                            <textarea type=\"text\" id=\"thursday-workout-notes\" name=\"thursday_workout_notes\" class=\"form-control\" style=\"height: 80px\">";
        // line 499
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
        // line 519
        if ((($context["friday_breakfast"] ?? $this->getContext($context, "friday_breakfast")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["friday_breakfast"] ?? $this->getContext($context, "friday_breakfast")), "hour", []), "html", null, true);
        } else {
            echo "08:30";
        }
        echo "\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"breakfast_menu_friday\" class=\"form-control\" style=\"height: 430px\">";
        // line 521
        if ((($context["friday_breakfast"] ?? $this->getContext($context, "friday_breakfast")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["friday_breakfast"] ?? $this->getContext($context, "friday_breakfast")), "meal", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"breakfast_list_friday\" class=\"form-control\" style=\"height: 225px\">";
        // line 524
        if ((($context["friday_breakfast"] ?? $this->getContext($context, "friday_breakfast")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["friday_breakfast"] ?? $this->getContext($context, "friday_breakfast")), "mealShoppingList", []), "html", null, true);
        }
        echo "</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"breakfast_comments_friday\" class=\"form-control\" style=\"height: 186px\">";
        // line 526
        if ((($context["friday_breakfast"] ?? $this->getContext($context, "friday_breakfast")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["friday_breakfast"] ?? $this->getContext($context, "friday_breakfast")), "mealNotes", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-snack day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"snack_hour_friday\" value=\"";
        // line 531
        if ((($context["friday_snack"] ?? $this->getContext($context, "friday_snack")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["friday_snack"] ?? $this->getContext($context, "friday_snack")), "hour", []), "html", null, true);
        } else {
            echo "11:30";
        }
        echo "\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"snack_menu_friday\" class=\"form-control\" style=\"height: 430px\">";
        // line 533
        if ((($context["friday_snack"] ?? $this->getContext($context, "friday_snack")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["friday_snack"] ?? $this->getContext($context, "friday_snack")), "meal", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"snack_list_friday\" class=\"form-control\" style=\"height: 225px\">";
        // line 536
        if ((($context["friday_snack"] ?? $this->getContext($context, "friday_snack")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["friday_snack"] ?? $this->getContext($context, "friday_snack")), "mealShoppingList", []), "html", null, true);
        }
        echo "</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"snack_comments_friday\" class=\"form-control\" style=\"height: 186px\">";
        // line 538
        if ((($context["friday_snack"] ?? $this->getContext($context, "friday_snack")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["friday_snack"] ?? $this->getContext($context, "friday_snack")), "mealNotes", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-lunch day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"lunch_hour_friday\" value=\"";
        // line 543
        if ((($context["friday_lunch"] ?? $this->getContext($context, "friday_lunch")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["friday_lunch"] ?? $this->getContext($context, "friday_lunch")), "hour", []), "html", null, true);
        } else {
            echo "14:00";
        }
        echo "\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"lunch_menu_friday\" class=\"form-control\" style=\"height: 430px\">";
        // line 545
        if ((($context["friday_lunch"] ?? $this->getContext($context, "friday_lunch")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["friday_lunch"] ?? $this->getContext($context, "friday_lunch")), "meal", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"lunch_list_friday\" class=\"form-control\" style=\"height: 225px\">";
        // line 548
        if ((($context["friday_lunch"] ?? $this->getContext($context, "friday_lunch")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["friday_lunch"] ?? $this->getContext($context, "friday_lunch")), "mealShoppingList", []), "html", null, true);
        }
        echo "</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"lunch_comments_friday\" class=\"form-control\" style=\"height: 186px\">";
        // line 550
        if ((($context["friday_lunch"] ?? $this->getContext($context, "friday_lunch")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["friday_lunch"] ?? $this->getContext($context, "friday_lunch")), "mealNotes", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-afternoon day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"afternoon_hour_friday\" value=\"";
        // line 555
        if ((($context["friday_afternoon"] ?? $this->getContext($context, "friday_afternoon")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["friday_afternoon"] ?? $this->getContext($context, "friday_afternoon")), "hour", []), "html", null, true);
        } else {
            echo "17:30";
        }
        echo "\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"afternoon_menu_friday\" class=\"form-control\" style=\"height: 430px\">";
        // line 557
        if ((($context["friday_afternoon"] ?? $this->getContext($context, "friday_afternoon")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["friday_afternoon"] ?? $this->getContext($context, "friday_afternoon")), "meal", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"afternoon_list_friday\" class=\"form-control\" style=\"height: 225px\">";
        // line 560
        if ((($context["friday_afternoon"] ?? $this->getContext($context, "friday_afternoon")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["friday_afternoon"] ?? $this->getContext($context, "friday_afternoon")), "mealShoppingList", []), "html", null, true);
        }
        echo "</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"afternoon_comments_friday\" class=\"form-control\" style=\"height: 186px\">";
        // line 562
        if ((($context["friday_afternoon"] ?? $this->getContext($context, "friday_afternoon")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["friday_afternoon"] ?? $this->getContext($context, "friday_afternoon")), "mealNotes", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-dinner day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"dinner_hour_friday\" value=\"";
        // line 567
        if ((($context["friday_dinner"] ?? $this->getContext($context, "friday_dinner")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["friday_dinner"] ?? $this->getContext($context, "friday_dinner")), "hour", []), "html", null, true);
        } else {
            echo "21:00";
        }
        echo "\" min=\"09:00\" max=\"22:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"dinner_menu_friday\" class=\"form-control\" style=\"height: 430px\">";
        // line 569
        if ((($context["friday_dinner"] ?? $this->getContext($context, "friday_dinner")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["friday_dinner"] ?? $this->getContext($context, "friday_dinner")), "meal", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"dinner_list_friday\" class=\"form-control\" style=\"height: 225px\">";
        // line 572
        if ((($context["friday_dinner"] ?? $this->getContext($context, "friday_dinner")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["friday_dinner"] ?? $this->getContext($context, "friday_dinner")), "mealShoppingList", []), "html", null, true);
        }
        echo "</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"dinner_comments_friday\" class=\"form-control\" style=\"height: 186px\">";
        // line 574
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
        // line 580
        if ((($context["friday_workout"] ?? $this->getContext($context, "friday_workout")) == false)) {
            echo " checked ";
        }
        echo " onclick=\"restDay('friday')\"><strong>Descanso</strong>
                                        </div>
                                        <div class=\"friday-workout\" ";
        // line 582
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
        // line 594
        if ((($context["friday_workout"] ?? $this->getContext($context, "friday_workout")) != false)) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["friday_workout"] ?? $this->getContext($context, "friday_workout")), "hour", []), "H:i:s"), "html", null, true);
        }
        echo "\" style=\"width: fit-content\">
                                            <label for=\"friday-workout\">Entrenamiento:</label>
                                            <textarea type=\"text\" id=\"friday-workout\" name=\"friday_workout\" class=\"form-control\" style=\"height: 150px\">";
        // line 596
        if ((($context["friday_workout"] ?? $this->getContext($context, "friday_workout")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["friday_workout"] ?? $this->getContext($context, "friday_workout")), "workout", []), "html", null, true);
        }
        echo "</textarea>
                                            <br/>
                                            <ul class=\"list-group\" id=\"friday-workout-exercises\">
                                                ";
        // line 599
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["exercises"] ?? $this->getContext($context, "exercises")));
        foreach ($context['_seq'] as $context["_key"] => $context["exercise"]) {
            // line 600
            echo "                                                    <li>
                                                        <input type=\"checkbox\" value=\"";
            // line 601
            echo twig_escape_filter($this->env, $this->getAttribute($context["exercise"], "idExercise", []), "html", null, true);
            echo "\" style=\"width: fit-content; margin-bottom: 10px; margin-top: 10px\" name=\"friday_workout_exercises[";
            echo twig_escape_filter($this->env, $this->getAttribute($context["exercise"], "idExercise", []), "html", null, true);
            echo "][]\" ";
            if (((($context["friday_workout"] ?? $this->getContext($context, "friday_workout")) != false) && twig_in_filter($this->getAttribute($context["exercise"], "idExercise", []), ($context["friday_workout_exercises"] ?? $this->getContext($context, "friday_workout_exercises"))))) {
                echo "checked";
            }
            echo ">
                                                        ";
            // line 602
            echo twig_escape_filter($this->env, $this->getAttribute($context["exercise"], "title", []), "html", null, true);
            echo "
                                                    </li>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['exercise'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 605
        echo "                                            </ul>
                                            <label for=\"friday-workout-notes\">Observaciones:</label>
                                            <textarea type=\"text\" id=\"friday-workout-notes\" name=\"friday_workout_notes\" class=\"form-control\" style=\"height: 80px\">";
        // line 607
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
        // line 627
        if ((($context["saturday_breakfast"] ?? $this->getContext($context, "saturday_breakfast")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["saturday_breakfast"] ?? $this->getContext($context, "saturday_breakfast")), "hour", []), "html", null, true);
        } else {
            echo "08:30";
        }
        echo "\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"breakfast_menu_saturday\" class=\"form-control\" style=\"height: 430px\">";
        // line 629
        if ((($context["saturday_breakfast"] ?? $this->getContext($context, "saturday_breakfast")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["saturday_breakfast"] ?? $this->getContext($context, "saturday_breakfast")), "meal", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"breakfast_list_saturday\" class=\"form-control\" style=\"height: 225px\">";
        // line 632
        if ((($context["saturday_breakfast"] ?? $this->getContext($context, "saturday_breakfast")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["saturday_breakfast"] ?? $this->getContext($context, "saturday_breakfast")), "mealShoppingList", []), "html", null, true);
        }
        echo "</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"breakfast_comments_saturday\" class=\"form-control\" style=\"height: 186px\">";
        // line 634
        if ((($context["saturday_breakfast"] ?? $this->getContext($context, "saturday_breakfast")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["saturday_breakfast"] ?? $this->getContext($context, "saturday_breakfast")), "mealNotes", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-snack day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"snack_hour_saturday\" value=\"";
        // line 639
        if ((($context["saturday_breakfast"] ?? $this->getContext($context, "saturday_breakfast")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["saturday_breakfast"] ?? $this->getContext($context, "saturday_breakfast")), "hour", []), "html", null, true);
        } else {
            echo "11:30";
        }
        echo "\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"snack_menu_saturday\" class=\"form-control\" style=\"height: 430px\">";
        // line 641
        if ((($context["saturday_breakfast"] ?? $this->getContext($context, "saturday_breakfast")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["saturday_snack"] ?? $this->getContext($context, "saturday_snack")), "meal", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"snack_list_saturday\" class=\"form-control\" style=\"height: 225px\">";
        // line 644
        if ((($context["saturday_breakfast"] ?? $this->getContext($context, "saturday_breakfast")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["saturday_snack"] ?? $this->getContext($context, "saturday_snack")), "mealShoppingList", []), "html", null, true);
        }
        echo "</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"snack_comments_saturday\" class=\"form-control\" style=\"height: 186px\">";
        // line 646
        if ((($context["saturday_breakfast"] ?? $this->getContext($context, "saturday_breakfast")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["saturday_snack"] ?? $this->getContext($context, "saturday_snack")), "mealNotes", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-lunch day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"lunch_hour_saturday\" value=\"";
        // line 651
        if ((($context["saturday_lunch"] ?? $this->getContext($context, "saturday_lunch")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["saturday_lunch"] ?? $this->getContext($context, "saturday_lunch")), "hour", []), "html", null, true);
        } else {
            echo "14:00";
        }
        echo "\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"lunch_menu_saturday\" class=\"form-control\" style=\"height: 430px\">";
        // line 653
        if ((($context["saturday_lunch"] ?? $this->getContext($context, "saturday_lunch")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["saturday_lunch"] ?? $this->getContext($context, "saturday_lunch")), "meal", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"lunch_list_saturday\" class=\"form-control\" style=\"height: 225px\">";
        // line 656
        if ((($context["saturday_lunch"] ?? $this->getContext($context, "saturday_lunch")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["saturday_lunch"] ?? $this->getContext($context, "saturday_lunch")), "mealShoppingList", []), "html", null, true);
        }
        echo "</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"lunch_comments_saturday\" class=\"form-control\" style=\"height: 186px\">";
        // line 658
        if ((($context["saturday_lunch"] ?? $this->getContext($context, "saturday_lunch")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["saturday_lunch"] ?? $this->getContext($context, "saturday_lunch")), "mealNotes", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-afternoon day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"afternoon_hour_saturday\" value=\"";
        // line 663
        if ((($context["saturday_afternoon"] ?? $this->getContext($context, "saturday_afternoon")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["saturday_afternoon"] ?? $this->getContext($context, "saturday_afternoon")), "hour", []), "html", null, true);
        } else {
            echo "17:30";
        }
        echo "\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"afternoon_menu_saturday\" class=\"form-control\" style=\"height: 430px\">";
        // line 665
        if ((($context["saturday_afternoon"] ?? $this->getContext($context, "saturday_afternoon")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["saturday_afternoon"] ?? $this->getContext($context, "saturday_afternoon")), "meal", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"afternoon_list_saturday\" class=\"form-control\" style=\"height: 225px\">";
        // line 668
        if ((($context["saturday_afternoon"] ?? $this->getContext($context, "saturday_afternoon")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["saturday_afternoon"] ?? $this->getContext($context, "saturday_afternoon")), "mealShoppingList", []), "html", null, true);
        }
        echo "</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"afternoon_comments_saturday\" class=\"form-control\" style=\"height: 186px\">";
        // line 670
        if ((($context["saturday_afternoon"] ?? $this->getContext($context, "saturday_afternoon")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["saturday_afternoon"] ?? $this->getContext($context, "saturday_afternoon")), "mealNotes", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-dinner day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"dinner_hour_saturday\" value=\"";
        // line 675
        if ((($context["saturday_dinner"] ?? $this->getContext($context, "saturday_dinner")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["saturday_dinner"] ?? $this->getContext($context, "saturday_dinner")), "hour", []), "html", null, true);
        } else {
            echo "21:00";
        }
        echo "\" min=\"09:00\" max=\"22:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"dinner_menu_saturday\" class=\"form-control\" style=\"height: 430px\">";
        // line 677
        if ((($context["saturday_dinner"] ?? $this->getContext($context, "saturday_dinner")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["saturday_dinner"] ?? $this->getContext($context, "saturday_dinner")), "meal", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"dinner_list_saturday\" class=\"form-control\" style=\"height: 225px\">";
        // line 680
        if ((($context["saturday_dinner"] ?? $this->getContext($context, "saturday_dinner")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["saturday_dinner"] ?? $this->getContext($context, "saturday_dinner")), "mealShoppingList", []), "html", null, true);
        }
        echo "</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"dinner_comments_saturday\" class=\"form-control\" style=\"height: 186px\">";
        // line 682
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
        // line 688
        if ((($context["saturday_workout"] ?? $this->getContext($context, "saturday_workout")) == false)) {
            echo " checked ";
        }
        echo " onclick=\"restDay('saturday')\"><strong>Descanso</strong>
                                        </div>
                                        <div class=\"saturday-workout\" ";
        // line 690
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
        // line 702
        if ((($context["saturday_workout"] ?? $this->getContext($context, "saturday_workout")) != false)) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["saturday_workout"] ?? $this->getContext($context, "saturday_workout")), "hour", []), "H:i:s"), "html", null, true);
        }
        echo "\" style=\"width: fit-content\">
                                            <label for=\"saturday-workout\">Entrenamiento:</label>
                                            <textarea type=\"text\" id=\"saturday-workout\" name=\"saturday_workout\" class=\"form-control\" style=\"height: 150px\">";
        // line 704
        if ((($context["saturday_workout"] ?? $this->getContext($context, "saturday_workout")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["saturday_workout"] ?? $this->getContext($context, "saturday_workout")), "workout", []), "html", null, true);
        }
        echo "</textarea>
                                            <br/>
                                            <ul class=\"list-group\" id=\"saturday-workout-exercises\">
                                                ";
        // line 707
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["exercises"] ?? $this->getContext($context, "exercises")));
        foreach ($context['_seq'] as $context["_key"] => $context["exercise"]) {
            // line 708
            echo "                                                    <li>
                                                        <input type=\"checkbox\" value=\"";
            // line 709
            echo twig_escape_filter($this->env, $this->getAttribute($context["exercise"], "idExercise", []), "html", null, true);
            echo "\" style=\"width: fit-content; margin-bottom: 10px; margin-top: 10px\" name=\"saturday_workout_exercises[";
            echo twig_escape_filter($this->env, $this->getAttribute($context["exercise"], "idExercise", []), "html", null, true);
            echo "][]\" ";
            if (((($context["saturday_workout"] ?? $this->getContext($context, "saturday_workout")) != false) && twig_in_filter($this->getAttribute($context["exercise"], "idExercise", []), ($context["saturday_workout_exercises"] ?? $this->getContext($context, "saturday_workout_exercises"))))) {
                echo "checked";
            }
            echo ">
                                                        ";
            // line 710
            echo twig_escape_filter($this->env, $this->getAttribute($context["exercise"], "title", []), "html", null, true);
            echo "
                                                    </li>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['exercise'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 713
        echo "                                            </ul>
                                            <label for=\"saturday-workout-notes\">Observaciones:</label>
                                            <textarea type=\"text\" id=\"saturday-workout-notes\" name=\"saturday_workout_notes\" class=\"form-control\" style=\"height: 80px\">";
        // line 715
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
        // line 735
        if ((($context["sunday_breakfast"] ?? $this->getContext($context, "sunday_breakfast")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["sunday_breakfast"] ?? $this->getContext($context, "sunday_breakfast")), "hour", []), "html", null, true);
        } else {
            echo "08:30";
        }
        echo "\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"breakfast_menu_sunday\" class=\"form-control\" style=\"height: 430px\">";
        // line 737
        if ((($context["sunday_breakfast"] ?? $this->getContext($context, "sunday_breakfast")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["sunday_breakfast"] ?? $this->getContext($context, "sunday_breakfast")), "meal", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"breakfast_list_sunday\" class=\"form-control\" style=\"height: 225px\">";
        // line 740
        if ((($context["sunday_breakfast"] ?? $this->getContext($context, "sunday_breakfast")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["sunday_breakfast"] ?? $this->getContext($context, "sunday_breakfast")), "mealShoppingList", []), "html", null, true);
        }
        echo "</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"breakfast_comments_sunday\" class=\"form-control\" style=\"height: 186px\">";
        // line 742
        if ((($context["sunday_breakfast"] ?? $this->getContext($context, "sunday_breakfast")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["sunday_breakfast"] ?? $this->getContext($context, "sunday_breakfast")), "mealNotes", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-snack day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"snack_hour_sunday\" value=\"";
        // line 747
        if ((($context["sunday_snack"] ?? $this->getContext($context, "sunday_snack")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["sunday_snack"] ?? $this->getContext($context, "sunday_snack")), "hour", []), "html", null, true);
        } else {
            echo "11:30";
        }
        echo "\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"snack_menu_sunday\" class=\"form-control\" style=\"height: 430px\">";
        // line 749
        if ((($context["sunday_snack"] ?? $this->getContext($context, "sunday_snack")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["sunday_snack"] ?? $this->getContext($context, "sunday_snack")), "meal", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"snack_list_sunday\" class=\"form-control\" style=\"height: 225px\">";
        // line 752
        if ((($context["sunday_snack"] ?? $this->getContext($context, "sunday_snack")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["sunday_snack"] ?? $this->getContext($context, "sunday_snack")), "mealShoppingList", []), "html", null, true);
        }
        echo "</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"snack_comments_sunday\" class=\"form-control\" style=\"height: 186px\">";
        // line 754
        if ((($context["sunday_snack"] ?? $this->getContext($context, "sunday_snack")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["sunday_snack"] ?? $this->getContext($context, "sunday_snack")), "mealNotes", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-lunch day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"lunch_hour_sunday\" value=\"";
        // line 759
        if ((($context["sunday_lunch"] ?? $this->getContext($context, "sunday_lunch")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["sunday_lunch"] ?? $this->getContext($context, "sunday_lunch")), "hour", []), "html", null, true);
        } else {
            echo "14:00";
        }
        echo "\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"lunch_menu_sunday\" class=\"form-control\" style=\"height: 430px\">";
        // line 761
        if ((($context["sunday_lunch"] ?? $this->getContext($context, "sunday_lunch")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["sunday_lunch"] ?? $this->getContext($context, "sunday_lunch")), "meal", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"lunch_list_sunday\" class=\"form-control\" style=\"height: 225px\">";
        // line 764
        if ((($context["sunday_lunch"] ?? $this->getContext($context, "sunday_lunch")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["sunday_lunch"] ?? $this->getContext($context, "sunday_lunch")), "mealShoppingList", []), "html", null, true);
        }
        echo "</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"lunch_comments_sunday\" class=\"form-control\" style=\"height: 186px\">";
        // line 766
        if ((($context["sunday_lunch"] ?? $this->getContext($context, "sunday_lunch")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["sunday_lunch"] ?? $this->getContext($context, "sunday_lunch")), "mealNotes", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-afternoon day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"afternoon_hour_sunday\" value=\"";
        // line 771
        if ((($context["sunday_afternoon"] ?? $this->getContext($context, "sunday_afternoon")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["sunday_afternoon"] ?? $this->getContext($context, "sunday_afternoon")), "hour", []), "html", null, true);
        } else {
            echo "17:30";
        }
        echo "\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"afternoon_menu_sunday\" class=\"form-control\" style=\"height: 430px\">";
        // line 773
        if ((($context["sunday_afternoon"] ?? $this->getContext($context, "sunday_afternoon")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["sunday_afternoon"] ?? $this->getContext($context, "sunday_afternoon")), "meal", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"afternoon_list_sunday\" class=\"form-control\" style=\"height: 225px\">";
        // line 776
        if ((($context["sunday_afternoon"] ?? $this->getContext($context, "sunday_afternoon")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["sunday_afternoon"] ?? $this->getContext($context, "sunday_afternoon")), "mealShoppingList", []), "html", null, true);
        }
        echo "</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"afternoon_comments_sunday\" class=\"form-control\" style=\"height: 186px\">";
        // line 778
        if ((($context["sunday_afternoon"] ?? $this->getContext($context, "sunday_afternoon")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["sunday_afternoon"] ?? $this->getContext($context, "sunday_afternoon")), "mealNotes", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-dinner day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"dinner_hour_sunday\" value=\"";
        // line 783
        if ((($context["sunday_dinner"] ?? $this->getContext($context, "sunday_dinner")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["sunday_dinner"] ?? $this->getContext($context, "sunday_dinner")), "hour", []), "html", null, true);
        } else {
            echo "21:00";
        }
        echo "\" min=\"09:00\" max=\"22:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"dinner_menu_sunday\" class=\"form-control\" style=\"height: 430px\">";
        // line 785
        if ((($context["sunday_dinner"] ?? $this->getContext($context, "sunday_dinner")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["sunday_dinner"] ?? $this->getContext($context, "sunday_dinner")), "meal", []), "html", null, true);
        }
        echo "</textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"dinner_list_sunday\" class=\"form-control\" style=\"height: 225px\">";
        // line 788
        if ((($context["sunday_dinner"] ?? $this->getContext($context, "sunday_dinner")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["sunday_dinner"] ?? $this->getContext($context, "sunday_dinner")), "mealShoppingList", []), "html", null, true);
        }
        echo "</textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"dinner_comments_sunday\" class=\"form-control\" style=\"height: 186px\">";
        // line 790
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
        // line 796
        if ((($context["sunday_workout"] ?? $this->getContext($context, "sunday_workout")) == false)) {
            echo " checked ";
        }
        echo " onclick=\"restDay('sunday')\"><strong>Descanso</strong>
                                        </div>
                                        <div class=\"sunday-workout\" ";
        // line 798
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
        // line 810
        if ((($context["sunday_workout"] ?? $this->getContext($context, "sunday_workout")) != false)) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["sunday_workout"] ?? $this->getContext($context, "sunday_workout")), "hour", []), "H:i:s"), "html", null, true);
        }
        echo "\" style=\"width: fit-content\">
                                            <label for=\"sunday-workout\">Entrenamiento:</label>
                                            <textarea type=\"text\" id=\"sunday-workout\" name=\"sunday_workout\" class=\"form-control\" style=\"height: 150px\">";
        // line 812
        if ((($context["sunday_workout"] ?? $this->getContext($context, "sunday_workout")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["sunday_workout"] ?? $this->getContext($context, "sunday_workout")), "workout", []), "html", null, true);
        }
        echo "</textarea>
                                            <br/>
                                            <ul class=\"list-group\" id=\"sunday-workout-exercises\">
                                                ";
        // line 815
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["exercises"] ?? $this->getContext($context, "exercises")));
        foreach ($context['_seq'] as $context["_key"] => $context["exercise"]) {
            // line 816
            echo "                                                    <li>
                                                        <input type=\"checkbox\" value=\"";
            // line 817
            echo twig_escape_filter($this->env, $this->getAttribute($context["exercise"], "idExercise", []), "html", null, true);
            echo "\" style=\"width: fit-content; margin-bottom: 10px; margin-top: 10px\" name=\"sunday_workout_exercises[";
            echo twig_escape_filter($this->env, $this->getAttribute($context["exercise"], "idExercise", []), "html", null, true);
            echo "][]\" ";
            if (((($context["sunday_workout"] ?? $this->getContext($context, "sunday_workout")) != false) && twig_in_filter($this->getAttribute($context["exercise"], "idExercise", []), ($context["sunday_workout_exercises"] ?? $this->getContext($context, "sunday_workout_exercises"))))) {
                echo "checked";
            }
            echo ">
                                                        ";
            // line 818
            echo twig_escape_filter($this->env, $this->getAttribute($context["exercise"], "title", []), "html", null, true);
            echo "
                                                    </li>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['exercise'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 821
        echo "                                            </ul>
                                            <label for=\"sunday-workout-notes\">Observaciones:</label>
                                            <textarea type=\"text\" id=\"sunday-workout-notes\" name=\"sunday_workout_notes\" class=\"form-control\" style=\"height: 80px\">";
        // line 823
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
        return array (  2044 => 823,  2040 => 821,  2031 => 818,  2021 => 817,  2018 => 816,  2014 => 815,  2006 => 812,  1999 => 810,  1982 => 798,  1975 => 796,  1964 => 790,  1957 => 788,  1949 => 785,  1940 => 783,  1930 => 778,  1923 => 776,  1915 => 773,  1906 => 771,  1896 => 766,  1889 => 764,  1881 => 761,  1872 => 759,  1862 => 754,  1855 => 752,  1847 => 749,  1838 => 747,  1828 => 742,  1821 => 740,  1813 => 737,  1804 => 735,  1779 => 715,  1775 => 713,  1766 => 710,  1756 => 709,  1753 => 708,  1749 => 707,  1741 => 704,  1734 => 702,  1717 => 690,  1710 => 688,  1699 => 682,  1692 => 680,  1684 => 677,  1675 => 675,  1665 => 670,  1658 => 668,  1650 => 665,  1641 => 663,  1631 => 658,  1624 => 656,  1616 => 653,  1607 => 651,  1597 => 646,  1590 => 644,  1582 => 641,  1573 => 639,  1563 => 634,  1556 => 632,  1548 => 629,  1539 => 627,  1514 => 607,  1510 => 605,  1501 => 602,  1491 => 601,  1488 => 600,  1484 => 599,  1476 => 596,  1469 => 594,  1452 => 582,  1445 => 580,  1434 => 574,  1427 => 572,  1419 => 569,  1410 => 567,  1400 => 562,  1393 => 560,  1385 => 557,  1376 => 555,  1366 => 550,  1359 => 548,  1351 => 545,  1342 => 543,  1332 => 538,  1325 => 536,  1317 => 533,  1308 => 531,  1298 => 526,  1291 => 524,  1283 => 521,  1274 => 519,  1249 => 499,  1245 => 497,  1236 => 494,  1226 => 493,  1223 => 492,  1219 => 491,  1211 => 488,  1204 => 486,  1187 => 474,  1180 => 472,  1169 => 466,  1162 => 464,  1154 => 461,  1145 => 459,  1135 => 454,  1128 => 452,  1120 => 449,  1111 => 447,  1101 => 442,  1094 => 440,  1086 => 437,  1077 => 435,  1067 => 430,  1060 => 428,  1052 => 425,  1043 => 423,  1033 => 418,  1026 => 416,  1018 => 413,  1009 => 411,  984 => 391,  980 => 389,  971 => 386,  961 => 385,  958 => 384,  954 => 383,  946 => 380,  939 => 378,  922 => 366,  915 => 364,  904 => 358,  897 => 356,  889 => 353,  880 => 351,  870 => 346,  863 => 344,  855 => 341,  846 => 339,  836 => 334,  829 => 332,  821 => 329,  812 => 327,  802 => 322,  795 => 320,  787 => 317,  778 => 315,  768 => 310,  761 => 308,  753 => 305,  744 => 303,  719 => 283,  715 => 281,  706 => 278,  696 => 277,  693 => 276,  689 => 275,  681 => 272,  674 => 270,  657 => 258,  650 => 256,  639 => 250,  632 => 248,  624 => 245,  615 => 243,  605 => 238,  598 => 236,  590 => 233,  581 => 231,  571 => 226,  564 => 224,  556 => 221,  547 => 219,  537 => 214,  530 => 212,  522 => 209,  513 => 207,  503 => 202,  496 => 200,  488 => 197,  479 => 195,  455 => 176,  451 => 174,  442 => 171,  432 => 170,  429 => 169,  425 => 168,  417 => 165,  410 => 163,  393 => 151,  386 => 149,  375 => 143,  368 => 141,  360 => 138,  351 => 136,  341 => 131,  334 => 129,  326 => 126,  317 => 124,  307 => 119,  300 => 117,  292 => 114,  283 => 112,  273 => 107,  266 => 105,  258 => 102,  249 => 100,  239 => 95,  232 => 93,  224 => 90,  215 => 88,  181 => 57,  176 => 55,  170 => 51,  159 => 48,  154 => 47,  148 => 46,  145 => 45,  141 => 44,  132 => 38,  128 => 36,  118 => 32,  114 => 30,  109 => 29,  99 => 25,  95 => 23,  90 => 22,  80 => 18,  76 => 16,  72 => 15,  66 => 12,  60 => 10,  58 => 9,  52 => 6,  46 => 2,  34 => 1,);
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
                    <div id=\"weekly-plan-content-block\" style=\"height: 15rem; margin-bottom: 20px\">
                        <div class=\"col-sm-6\">
                            <label>Tags:</label>
                            <ul class=\"list-group\" id=\"weekly_plan_tags\">
                                {% for tag in tags %}
                                    <li>
                                        <input type=\"checkbox\" value=\"{{ tag.idTag }}\" {% if tag.idTag in weekly_plan_tags_keys %} checked {% endif %}
                                               style=\"width: fit-content; margin-bottom: 5px; margin-top: 5px\" name=\"add_tags[{{ tag.idTag }}][]\">
                                        Nivel {{ tag.level }} - {{ tag.name }}
                                    </li>
                                {% endfor %}
                            </ul>
                        </div>
                        <div class=\"col-sm-6\">
                            <label for=\"plan_title\">Tile:</label>
                            <textarea type=\"text\" id=\"plan_title\" name=\"plan_title\" class=\"form-control\">{{ weeklyPlan.title }}</textarea>
                            <label for=\"plan_description\">Descripción:</label>
                            <textarea type=\"text\" id=\"plan_description\" name=\"plan_description\" class=\"form-control\" style=\"height: 5.5rem\">{{ weeklyPlan.description }}</textarea>
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
