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

/* @Nutritionist/nutritionist-weekly-plan.html.twig */
class __TwigTemplate_b2a6e26fe4ca9d748a596732063a043fd4399191540bf862ee5132f522adb811 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Nutritionist/nutritionist-weekly-plan.html.twig"));

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
        $this->loadTemplate("header.html.twig", "@Nutritionist/nutritionist-weekly-plan.html.twig", 9)->display($context);
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "flashbag", [], "method"), "get", [0 => "addWeeklyPlanKOStatus"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 16
            echo "            <div class=\"row\" style=\"width: 92%; margin-left: 4%; margin-top: 10px; margin-bottom: 0;\">
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
            <!-- Añadimos un novalidate debido a los contenedores ocultos, mostraremos el error con la variable de sesion -->
            <form id=\"msform\" class=\"form\" action=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nutritionist_add_plan");
        echo "\" method=\"post\" novalidate>
                <div class=\"col-sm-12\">
                    <div id=\"weekly-plan-content-block\" style=\"height: 15rem; margin-bottom: 20px\">
                        <div class=\"col-sm-6\">
                            <label>Tags:</label>
                            <ul class=\"list-group\" id=\"weekly_plan_tags\">
                                ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tags"] ?? $this->getContext($context, "tags")));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 31
            echo "                                    <li>
                                        <input type=\"checkbox\" value=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "idTag", []), "html", null, true);
            echo "\" style=\"width: fit-content; margin-bottom: 5px; margin-top: 5px\" name=\"add_tags[";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "idTag", []), "html", null, true);
            echo "][]\">
                                        Nivel ";
            // line 33
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
        // line 36
        echo "                            </ul>
                        </div>
                        <div class=\"col-sm-6\">
                            <label for=\"plan_title\">Tile:</label>
                            <textarea type=\"text\" id=\"plan_title\" name=\"plan_title\" class=\"form-control\"></textarea>
                            <label for=\"plan_description\">Descripción:</label>
                            <textarea type=\"text\" id=\"plan_description\" name=\"plan_description\" class=\"form-control\" style=\"height: 5.5rem\"></textarea>
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
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"breakfast_hour_monday\" value=\"08:30\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"breakfast_menu_monday\" class=\"form-control\" style=\"height: 430px\"></textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"breakfast_list_monday\" class=\"form-control\" style=\"height: 225px\"></textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"breakfast_comments_monday\" class=\"form-control\" style=\"height: 186px\"></textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-snack day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"snack_hour_monday\" value=\"11:30\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"snack_menu_monday\" class=\"form-control\" style=\"height: 430px\"></textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"snack_list_monday\" class=\"form-control\" style=\"height: 225px\"></textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"snack_comments_monday\" class=\"form-control\" style=\"height: 186px\"></textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-lunch day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"lunch_hour_monday\" value=\"12:00\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"lunch_menu_monday\" class=\"form-control\" style=\"height: 430px\"></textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"lunch_list_monday\" class=\"form-control\" style=\"height: 225px\"></textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"lunch_comments_monday\" class=\"form-control\" style=\"height: 186px\"></textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-afternoon day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"afternoon_hour_monday\" value=\"17:30\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"afternoon_menu_monday\" class=\"form-control\" style=\"height: 430px\"></textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"afternoon_list_monday\" class=\"form-control\" style=\"height: 225px\"></textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"afternoon_comments_monday\" class=\"form-control\" style=\"height: 186px\"></textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-dinner day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"dinner_hour_monday\" value=\"21:00\" min=\"09:00\" max=\"22:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"dinner_menu_monday\" class=\"form-control\" style=\"height: 430px\"></textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"dinner_list_monday\" class=\"form-control\" style=\"height: 225px\"></textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"dinner_comments_monday\" class=\"form-control\" style=\"height: 186px\"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-sm-3\">
                                        <div class=\"workout-rest\">
                                            <input type=\"checkbox\" value=\"1\" style=\"width: fit-content; margin-bottom: 10px; margin-top: 10px; margin-right: 10px\" name=\"monday_workout_rest\" id=\"monday-workout-rest\" onclick=\"restDay('monday')\"><strong>Descanso</strong>
                                        </div>
                                        <div class=\"monday-workout\">
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
                                            <input type=\"time\" name=\"monday_workout_time\" value=\"\" style=\"width: fit-content\">
                                            <label for=\"monday-workout\">Entrenamiento:</label>
                                            <textarea type=\"text\" id=\"monday-workout\" name=\"monday_workout\" class=\"form-control\" style=\"height: 150px\"></textarea>
                                            <br/>
                                            <ul class=\"list-group\" id=\"monday-workout-exercises\">
                                                ";
        // line 153
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["exercises"] ?? $this->getContext($context, "exercises")));
        foreach ($context['_seq'] as $context["_key"] => $context["exercise"]) {
            // line 154
            echo "                                                    <li>
                                                        <input type=\"checkbox\" value=\"";
            // line 155
            echo twig_escape_filter($this->env, $this->getAttribute($context["exercise"], "idExercise", []), "html", null, true);
            echo "\" style=\"width: fit-content; margin-bottom: 10px; margin-top: 10px\" name=\"monday_workout_exercises[";
            echo twig_escape_filter($this->env, $this->getAttribute($context["exercise"], "idExercise", []), "html", null, true);
            echo "][]\">
                                                        ";
            // line 156
            echo twig_escape_filter($this->env, $this->getAttribute($context["exercise"], "title", []), "html", null, true);
            echo "
                                                    </li>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['exercise'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 159
        echo "                                            </ul>
                                            <label for=\"monday-workout-notes\">Observaciones:</label>
                                            <textarea type=\"text\" id=\"monday-workout-notes\" name=\"monday_workout_notes\" class=\"form-control\" style=\"height: 80px\"></textarea>
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
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"breakfast_hour_tuesday\" value=\"08:30\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"breakfast_menu_tuesday\" class=\"form-control\" style=\"height: 430px\"></textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"breakfast_list_tuesday\" class=\"form-control\" style=\"height: 225px\"></textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"breakfast_comments_tuesday\" class=\"form-control\" style=\"height: 186px\"></textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-snack day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"snack_hour_tuesday\" value=\"11:30\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"snack_menu_tuesday\" class=\"form-control\" style=\"height: 430px\"></textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"snack_list_tuesday\" class=\"form-control\" style=\"height: 225px\"></textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"snack_comments_tuesday\" class=\"form-control\" style=\"height: 186px\"></textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-lunch day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"lunch_hour_tuesday\" value=\"12:00\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"lunch_menu_tuesday\" class=\"form-control\" style=\"height: 430px\"></textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"lunch_list_tuesday\" class=\"form-control\" style=\"height: 225px\"></textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"lunch_comments_tuesday\" class=\"form-control\" style=\"height: 186px\"></textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-afternoon day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"afternoon_hour_tuesday\" value=\"17:30\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"afternoon_menu_tuesday\" class=\"form-control\" style=\"height: 430px\"></textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"afternoon_list_tuesday\" class=\"form-control\" style=\"height: 225px\"></textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"afternoon_comments_tuesday\" class=\"form-control\" style=\"height: 186px\"></textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-dinner day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"dinner_hour_tuesday\" value=\"21:00\" min=\"09:00\" max=\"22:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"dinner_menu_tuesday\" class=\"form-control\" style=\"height: 430px\"></textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"dinner_list_tuesday\" class=\"form-control\" style=\"height: 225px\"></textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"dinner_comments_tuesday\" class=\"form-control\" style=\"height: 186px\"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-sm-3\">
                                        <div class=\"workout-rest\">
                                            <input type=\"checkbox\" value=\"1\" style=\"width: fit-content; margin-bottom: 10px; margin-top: 10px; margin-right: 10px\" name=\"tuesday_workout_rest\" id=\"tuesday-workout-rest\" onclick=\"restDay('monday')\"><strong>Descanso</strong>
                                        </div>
                                        <div class=\"tuesday-workout\">
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
                                            <input type=\"time\" name=\"tuesday_workout_time\" value=\"\" style=\"width: fit-content\">
                                            <label for=\"tuesday-workout\">Entrenamiento:</label>
                                            <textarea type=\"text\" id=\"tuesday-workout\" name=\"tuesday_workout\" class=\"form-control\" style=\"height: 150px\"></textarea>
                                            <br/>
                                            <ul class=\"list-group\" id=\"tuesday-workout-exercises\">
                                                ";
        // line 260
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["exercises"] ?? $this->getContext($context, "exercises")));
        foreach ($context['_seq'] as $context["_key"] => $context["exercise"]) {
            // line 261
            echo "                                                    <li>
                                                        <input type=\"checkbox\" value=\"";
            // line 262
            echo twig_escape_filter($this->env, $this->getAttribute($context["exercise"], "idExercise", []), "html", null, true);
            echo "\" style=\"width: fit-content; margin-bottom: 10px; margin-top: 10px\" name=\"tuesday_workout_exercises[";
            echo twig_escape_filter($this->env, $this->getAttribute($context["exercise"], "idExercise", []), "html", null, true);
            echo "][]\">
                                                        ";
            // line 263
            echo twig_escape_filter($this->env, $this->getAttribute($context["exercise"], "title", []), "html", null, true);
            echo "
                                                    </li>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['exercise'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 266
        echo "                                            </ul>
                                            <label for=\"tuesday-workout-notes\">Observaciones:</label>
                                            <textarea type=\"text\" id=\"tuesday-workout-notes\" name=\"tuesday_workout_notes\" class=\"form-control\" style=\"height: 80px\"></textarea>
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
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"breakfast_hour_wednesday\" value=\"08:30\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"breakfast_menu_wednesday\" class=\"form-control\" style=\"height: 430px\"></textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"breakfast_list_wednesday\" class=\"form-control\" style=\"height: 225px\"></textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"breakfast_comments_wednesday\" class=\"form-control\" style=\"height: 186px\"></textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-snack day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"snack_hour_wednesday\" value=\"11:30\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"snack_menu_wednesday\" class=\"form-control\" style=\"height: 430px\"></textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"snack_list_wednesday\" class=\"form-control\" style=\"height: 225px\"></textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"snack_comments_wednesday\" class=\"form-control\" style=\"height: 186px\"></textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-lunch day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"lunch_hour_wednesday\" value=\"12:00\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"lunch_menu_wednesday\" class=\"form-control\" style=\"height: 430px\"></textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"lunch_list_wednesday\" class=\"form-control\" style=\"height: 225px\"></textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"lunch_comments_wednesday\" class=\"form-control\" style=\"height: 186px\"></textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-afternoon day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"afternoon_hour_wednesday\" value=\"17:30\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"afternoon_menu_wednesday\" class=\"form-control\" style=\"height: 430px\"></textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"afternoon_list_wednesday\" class=\"form-control\" style=\"height: 225px\"></textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"afternoon_comments_wednesday\" class=\"form-control\" style=\"height: 186px\"></textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-dinner day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"dinner_hour_wednesday\" value=\"21:00\" min=\"09:00\" max=\"22:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"dinner_menu_wednesday\" class=\"form-control\" style=\"height: 430px\"></textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"dinner_list_wednesday\" class=\"form-control\" style=\"height: 225px\"></textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"dinner_comments_wednesday\" class=\"form-control\" style=\"height: 186px\"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-sm-3\">
                                        <div class=\"workout-rest\">
                                            <input type=\"checkbox\" value=\"1\" style=\"width: fit-content; margin-bottom: 10px; margin-top: 10px; margin-right: 10px\" name=\"wednesday_workout_rest\" id=\"wednesday-workout-rest\" onclick=\"restDay('monday')\"><strong>Descanso</strong>
                                        </div>
                                        <div class=\"wednesday-workout\">
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
                                            <input type=\"time\" name=\"wednesday_workout_time\" value=\"\" style=\"width: fit-content\">
                                            <label for=\"wednesday-workout\">Entrenamiento:</label>
                                            <textarea type=\"text\" id=\"wednesday-workout\" name=\"wednesday_workout\" class=\"form-control\" style=\"height: 150px\"></textarea>
                                            <br/>
                                            <ul class=\"list-group\" id=\"wednesday-workout-exercises\">
                                                ";
        // line 368
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["exercises"] ?? $this->getContext($context, "exercises")));
        foreach ($context['_seq'] as $context["_key"] => $context["exercise"]) {
            // line 369
            echo "                                                    <li>
                                                        <input type=\"checkbox\" value=\"";
            // line 370
            echo twig_escape_filter($this->env, $this->getAttribute($context["exercise"], "idExercise", []), "html", null, true);
            echo "\" style=\"width: fit-content; margin-bottom: 10px; margin-top: 10px\" name=\"wednesday_workout_exercises[";
            echo twig_escape_filter($this->env, $this->getAttribute($context["exercise"], "idExercise", []), "html", null, true);
            echo "][]\">
                                                        ";
            // line 371
            echo twig_escape_filter($this->env, $this->getAttribute($context["exercise"], "title", []), "html", null, true);
            echo "
                                                    </li>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['exercise'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 374
        echo "                                            </ul>
                                            <label for=\"wednesday-workout-notes\">Observaciones:</label>
                                            <textarea type=\"text\" id=\"wednesday-workout-notes\" name=\"wednesday_workout_notes\" class=\"form-control\" style=\"height: 80px\"></textarea>
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
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"breakfast_hour_thursday\" value=\"08:30\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"breakfast_menu_thursday\" class=\"form-control\" style=\"height: 430px\"></textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"breakfast_list_thursday\" class=\"form-control\" style=\"height: 225px\"></textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"breakfast_comments_thursday\" class=\"form-control\" style=\"height: 186px\"></textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-snack day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"snack_hour_thursday\" value=\"11:30\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"snack_menu_thursday\" class=\"form-control\" style=\"height: 430px\"></textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"snack_list_thursday\" class=\"form-control\" style=\"height: 225px\"></textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"snack_comments_thursday\" class=\"form-control\" style=\"height: 186px\"></textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-lunch day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"lunch_hour_thursday\" value=\"12:00\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"lunch_menu_thursday\" class=\"form-control\" style=\"height: 430px\"></textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"lunch_list_thursday\" class=\"form-control\" style=\"height: 225px\"></textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"lunch_comments_thursday\" class=\"form-control\" style=\"height: 186px\"></textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-afternoon day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"afternoon_hour_thursday\" value=\"17:30\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"afternoon_menu_thursday\" class=\"form-control\" style=\"height: 430px\"></textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"afternoon_list_thursday\" class=\"form-control\" style=\"height: 225px\"></textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"afternoon_comments_thursday\" class=\"form-control\" style=\"height: 186px\"></textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-dinner day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"dinner_hour_thursday\" value=\"21:00\" min=\"09:00\" max=\"22:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"dinner_menu_thursday\" class=\"form-control\" style=\"height: 430px\"></textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"dinner_list_thursday\" class=\"form-control\" style=\"height: 225px\"></textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"dinner_comments_thursday\" class=\"form-control\" style=\"height: 186px\"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-sm-3\">
                                        <div class=\"workout-rest\">
                                            <input type=\"checkbox\" value=\"1\" style=\"width: fit-content; margin-bottom: 10px; margin-top: 10px; margin-right: 10px\" name=\"thursday_workout_rest\" id=\"thursday-workout-rest\" onclick=\"restDay('monday')\"><strong>Descanso</strong>
                                        </div>
                                        <div class=\"thursday-workout\">
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
                                            <input type=\"time\" name=\"thursday_workout_time\" value=\"09:30\" style=\"width: fit-content\">
                                            <label for=\"thursday-workout\">Entrenamiento:</label>
                                            <textarea type=\"text\" id=\"thursday-workout\" name=\"thursday_workout\" class=\"form-control\" style=\"height: 150px\"></textarea>
                                            <br/>
                                            <ul class=\"list-group\" id=\"thursday-workout-exercises\">
                                                ";
        // line 476
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["exercises"] ?? $this->getContext($context, "exercises")));
        foreach ($context['_seq'] as $context["_key"] => $context["exercise"]) {
            // line 477
            echo "                                                    <li>
                                                        <input type=\"checkbox\" value=\"";
            // line 478
            echo twig_escape_filter($this->env, $this->getAttribute($context["exercise"], "idExercise", []), "html", null, true);
            echo "\" style=\"width: fit-content; margin-bottom: 10px; margin-top: 10px\" name=\"thursday_workout_exercises[";
            echo twig_escape_filter($this->env, $this->getAttribute($context["exercise"], "idExercise", []), "html", null, true);
            echo "][]\">
                                                        ";
            // line 479
            echo twig_escape_filter($this->env, $this->getAttribute($context["exercise"], "title", []), "html", null, true);
            echo "
                                                    </li>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['exercise'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 482
        echo "                                            </ul>
                                            <label for=\"thursday-workout-notes\">Observaciones:</label>
                                            <textarea type=\"text\" id=\"thursday-workout-notes\" name=\"thursday_workout_notes\" class=\"form-control\" style=\"height: 80px\"></textarea>
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
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"breakfast_hour_friday\" value=\"08:30\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"breakfast_menu_friday\" class=\"form-control\" style=\"height: 430px\"></textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"breakfast_list_friday\" class=\"form-control\" style=\"height: 225px\"></textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"breakfast_comments_friday\" class=\"form-control\" style=\"height: 186px\"></textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-snack day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"snack_hour_friday\" value=\"11:30\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"snack_menu_friday\" class=\"form-control\" style=\"height: 430px\"></textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"snack_list_friday\" class=\"form-control\" style=\"height: 225px\"></textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"snack_comments_friday\" class=\"form-control\" style=\"height: 186px\"></textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-lunch day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"lunch_hour_friday\" value=\"12:00\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"lunch_menu_friday\" class=\"form-control\" style=\"height: 430px\"></textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"lunch_list_friday\" class=\"form-control\" style=\"height: 225px\"></textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"lunch_comments_friday\" class=\"form-control\" style=\"height: 186px\"></textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-afternoon day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"afternoon_hour_friday\" value=\"17:30\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"afternoon_menu_friday\" class=\"form-control\" style=\"height: 430px\"></textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"afternoon_list_friday\" class=\"form-control\" style=\"height: 225px\"></textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"afternoon_comments_friday\" class=\"form-control\" style=\"height: 186px\"></textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-dinner day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"dinner_hour_friday\" value=\"21:00\" min=\"09:00\" max=\"22:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"dinner_menu_friday\" class=\"form-control\" style=\"height: 430px\"></textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"dinner_list_friday\" class=\"form-control\" style=\"height: 225px\"></textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"dinner_comments_friday\" class=\"form-control\" style=\"height: 186px\"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-sm-3\">
                                        <div class=\"workout-rest\">
                                            <input type=\"checkbox\" value=\"1\" style=\"width: fit-content; margin-bottom: 10px; margin-top: 10px; margin-right: 10px\" name=\"friday_workout_rest\" id=\"friday-workout-rest\" onclick=\"restDay('monday')\"><strong>Descanso</strong>
                                        </div>
                                        <div class=\"friday-workout\">
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
                                            <input type=\"time\" name=\"friday_workout_time\" value=\"09:30\" style=\"width: fit-content\">
                                            <label for=\"friday-workout\">Entrenamiento:</label>
                                            <textarea type=\"text\" id=\"friday-workout\" name=\"friday_workout\" class=\"form-control\" style=\"height: 150px\"></textarea>
                                            <br/>
                                            <ul class=\"list-group\" id=\"friday-workout-exercises\">
                                                ";
        // line 584
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["exercises"] ?? $this->getContext($context, "exercises")));
        foreach ($context['_seq'] as $context["_key"] => $context["exercise"]) {
            // line 585
            echo "                                                    <li>
                                                        <input type=\"checkbox\" value=\"";
            // line 586
            echo twig_escape_filter($this->env, $this->getAttribute($context["exercise"], "idExercise", []), "html", null, true);
            echo "\" style=\"width: fit-content; margin-bottom: 10px; margin-top: 10px\" name=\"friday_workout_exercises[";
            echo twig_escape_filter($this->env, $this->getAttribute($context["exercise"], "idExercise", []), "html", null, true);
            echo "][]\">
                                                        ";
            // line 587
            echo twig_escape_filter($this->env, $this->getAttribute($context["exercise"], "title", []), "html", null, true);
            echo "
                                                    </li>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['exercise'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 590
        echo "                                            </ul>
                                            <label for=\"friday-workout-notes\">Observaciones:</label>
                                            <textarea type=\"text\" id=\"friday-workout-notes\" name=\"friday_workout_notes\" class=\"form-control\" style=\"height: 80px\"></textarea>
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
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"breakfast_hour_saturday\" value=\"08:30\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"breakfast_menu_saturday\" class=\"form-control\" style=\"height: 430px\"></textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"breakfast_list_saturday\" class=\"form-control\" style=\"height: 225px\"></textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"breakfast_comments_saturday\" class=\"form-control\" style=\"height: 186px\"></textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-snack day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"snack_hour_saturday\" value=\"11:30\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"snack_menu_saturday\" class=\"form-control\" style=\"height: 430px\"></textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"snack_list_saturday\" class=\"form-control\" style=\"height: 225px\"></textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"snack_comments_saturday\" class=\"form-control\" style=\"height: 186px\"></textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-lunch day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"lunch_hour_saturday\" value=\"12:00\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"lunch_menu_saturday\" class=\"form-control\" style=\"height: 430px\"></textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"lunch_list_saturday\" class=\"form-control\" style=\"height: 225px\"></textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"lunch_comments_saturday\" class=\"form-control\" style=\"height: 186px\"></textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-afternoon day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"afternoon_hour_saturday\" value=\"17:30\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"afternoon_menu_saturday\" class=\"form-control\" style=\"height: 430px\"></textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"afternoon_list_saturday\" class=\"form-control\" style=\"height: 225px\"></textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"afternoon_comments_saturday\" class=\"form-control\" style=\"height: 186px\"></textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-dinner day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"dinner_hour_saturday\" value=\"21:00\" min=\"09:00\" max=\"22:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"dinner_menu_saturday\" class=\"form-control\" style=\"height: 430px\"></textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"dinner_list_saturday\" class=\"form-control\" style=\"height: 225px\"></textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"dinner_comments_saturday\" class=\"form-control\" style=\"height: 186px\"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-sm-3\">
                                        <div class=\"workout-rest\">
                                            <input type=\"checkbox\" value=\"1\" style=\"width: fit-content; margin-bottom: 10px; margin-top: 10px; margin-right: 10px\" name=\"saturday_workout_rest\" id=\"saturday-workout-rest\" onclick=\"restDay('monday')\"><strong>Descanso</strong>
                                        </div>
                                        <div class=\"saturday-workout\">
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
                                            <input type=\"time\" name=\"saturday_workout_time\" value=\"09:30\" style=\"width: fit-content\">
                                            <label for=\"saturday-workout\">Entrenamiento:</label>
                                            <textarea type=\"text\" id=\"saturday-workout\" name=\"saturday_workout\" class=\"form-control\" style=\"height: 150px\"></textarea>
                                            <br/>
                                            <ul class=\"list-group\" id=\"saturday-workout-exercises\">
                                                ";
        // line 692
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["exercises"] ?? $this->getContext($context, "exercises")));
        foreach ($context['_seq'] as $context["_key"] => $context["exercise"]) {
            // line 693
            echo "                                                    <li>
                                                        <input type=\"checkbox\" value=\"";
            // line 694
            echo twig_escape_filter($this->env, $this->getAttribute($context["exercise"], "idExercise", []), "html", null, true);
            echo "\" style=\"width: fit-content; margin-bottom: 10px; margin-top: 10px\" name=\"saturday_workout_exercises[";
            echo twig_escape_filter($this->env, $this->getAttribute($context["exercise"], "idExercise", []), "html", null, true);
            echo "][]\">
                                                        ";
            // line 695
            echo twig_escape_filter($this->env, $this->getAttribute($context["exercise"], "title", []), "html", null, true);
            echo "
                                                    </li>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['exercise'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 698
        echo "                                            </ul>
                                            <label for=\"saturday-workout-notes\">Observaciones:</label>
                                            <textarea type=\"text\" id=\"saturday-workout-notes\" name=\"saturday_workout_notes\" class=\"form-control\" style=\"height: 80px\"></textarea>
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
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"breakfast_hour_sunday\" value=\"08:30\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"breakfast_menu_sunday\" class=\"form-control\" style=\"height: 430px\"></textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"breakfast_list_sunday\" class=\"form-control\" style=\"height: 225px\"></textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"breakfast_comments_sunday\" class=\"form-control\" style=\"height: 186px\"></textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-snack day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"snack_hour_sunday\" value=\"11:30\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"snack_menu_sunday\" class=\"form-control\" style=\"height: 430px\"></textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"snack_list_sunday\" class=\"form-control\" style=\"height: 225px\"></textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"snack_comments_sunday\" class=\"form-control\" style=\"height: 186px\"></textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-lunch day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"lunch_hour_sunday\" value=\"12:00\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"lunch_menu_sunday\" class=\"form-control\" style=\"height: 430px\"></textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"lunch_list_sunday\" class=\"form-control\" style=\"height: 225px\"></textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"lunch_comments_sunday\" class=\"form-control\" style=\"height: 186px\"></textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-afternoon day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"afternoon_hour_sunday\" value=\"17:30\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"afternoon_menu_sunday\" class=\"form-control\" style=\"height: 430px\"></textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"afternoon_list_sunday\" class=\"form-control\" style=\"height: 225px\"></textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"afternoon_comments_sunday\" class=\"form-control\" style=\"height: 186px\"></textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-dinner day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"dinner_hour_sunday\" value=\"21:00\" min=\"09:00\" max=\"22:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"dinner_menu_sunday\" class=\"form-control\" style=\"height: 430px\"></textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"dinner_list_sunday\" class=\"form-control\" style=\"height: 225px\"></textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"dinner_comments_sunday\" class=\"form-control\" style=\"height: 186px\"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-sm-3\">
                                        <div class=\"workout-rest\">
                                            <input type=\"checkbox\" value=\"1\" style=\"width: fit-content; margin-bottom: 10px; margin-top: 10px; margin-right: 10px\" name=\"sunday_workout_rest\" id=\"sunday-workout-rest\" onclick=\"restDay('monday')\"><strong>Descanso</strong>
                                        </div>
                                        <div class=\"sunday-workout\">
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
                                            <input type=\"time\" name=\"sunday_workout_time\" value=\"\" style=\"width: fit-content\">
                                            <label for=\"sunday-workout\">Entrenamiento:</label>
                                            <textarea type=\"text\" id=\"sunday-workout\" name=\"sunday_workout\" class=\"form-control\" style=\"height: 150px\"></textarea>
                                            <br/>
                                            <ul class=\"list-group\" id=\"sunday-workout-exercises\">
                                                ";
        // line 800
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["exercises"] ?? $this->getContext($context, "exercises")));
        foreach ($context['_seq'] as $context["_key"] => $context["exercise"]) {
            // line 801
            echo "                                                    <li>
                                                        <input type=\"checkbox\" value=\"";
            // line 802
            echo twig_escape_filter($this->env, $this->getAttribute($context["exercise"], "idExercise", []), "html", null, true);
            echo "\" style=\"width: fit-content; margin-bottom: 10px; margin-top: 10px\" name=\"sunday_workout_exercises[";
            echo twig_escape_filter($this->env, $this->getAttribute($context["exercise"], "idExercise", []), "html", null, true);
            echo "][]\">
                                                        ";
            // line 803
            echo twig_escape_filter($this->env, $this->getAttribute($context["exercise"], "title", []), "html", null, true);
            echo "
                                                    </li>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['exercise'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 806
        echo "                                            </ul>
                                            <label for=\"sunday-workout-notes\">Observaciones:</label>
                                            <textarea type=\"text\" id=\"sunday-workout-notes\" name=\"sunday_workout_notes\" class=\"form-control\" style=\"height: 80px\"></textarea>
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
        return "@Nutritionist/nutritionist-weekly-plan.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1023 => 806,  1014 => 803,  1008 => 802,  1005 => 801,  1001 => 800,  897 => 698,  888 => 695,  882 => 694,  879 => 693,  875 => 692,  771 => 590,  762 => 587,  756 => 586,  753 => 585,  749 => 584,  645 => 482,  636 => 479,  630 => 478,  627 => 477,  623 => 476,  519 => 374,  510 => 371,  504 => 370,  501 => 369,  497 => 368,  393 => 266,  384 => 263,  378 => 262,  375 => 261,  371 => 260,  268 => 159,  259 => 156,  253 => 155,  250 => 154,  246 => 153,  127 => 36,  116 => 33,  110 => 32,  107 => 31,  103 => 30,  94 => 24,  90 => 22,  80 => 18,  76 => 16,  72 => 15,  66 => 12,  60 => 10,  58 => 9,  52 => 6,  46 => 2,  34 => 1,);
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
        {% for message in  app.session.flashbag().get('addWeeklyPlanKOStatus') %}
            <div class=\"row\" style=\"width: 92%; margin-left: 4%; margin-top: 10px; margin-bottom: 0;\">
                <div class=\"alert alert-danger\" role=\"alert\" style=\"margin-bottom: 0\">
                    {{ message }}
                </div>
            </div>
        {% endfor %}
        <div class=\"container\">
            <!-- Añadimos un novalidate debido a los contenedores ocultos, mostraremos el error con la variable de sesion -->
            <form id=\"msform\" class=\"form\" action=\"{{ path(\"nutritionist_add_plan\") }}\" method=\"post\" novalidate>
                <div class=\"col-sm-12\">
                    <div id=\"weekly-plan-content-block\" style=\"height: 15rem; margin-bottom: 20px\">
                        <div class=\"col-sm-6\">
                            <label>Tags:</label>
                            <ul class=\"list-group\" id=\"weekly_plan_tags\">
                                {% for tag in tags %}
                                    <li>
                                        <input type=\"checkbox\" value=\"{{ tag.idTag }}\" style=\"width: fit-content; margin-bottom: 5px; margin-top: 5px\" name=\"add_tags[{{ tag.idTag }}][]\">
                                        Nivel {{ tag.level }} - {{ tag.name }}
                                    </li>
                                {% endfor %}
                            </ul>
                        </div>
                        <div class=\"col-sm-6\">
                            <label for=\"plan_title\">Tile:</label>
                            <textarea type=\"text\" id=\"plan_title\" name=\"plan_title\" class=\"form-control\"></textarea>
                            <label for=\"plan_description\">Descripción:</label>
                            <textarea type=\"text\" id=\"plan_description\" name=\"plan_description\" class=\"form-control\" style=\"height: 5.5rem\"></textarea>
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
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"breakfast_hour_monday\" value=\"08:30\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"breakfast_menu_monday\" class=\"form-control\" style=\"height: 430px\"></textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"breakfast_list_monday\" class=\"form-control\" style=\"height: 225px\"></textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"breakfast_comments_monday\" class=\"form-control\" style=\"height: 186px\"></textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-snack day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"snack_hour_monday\" value=\"11:30\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"snack_menu_monday\" class=\"form-control\" style=\"height: 430px\"></textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"snack_list_monday\" class=\"form-control\" style=\"height: 225px\"></textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"snack_comments_monday\" class=\"form-control\" style=\"height: 186px\"></textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-lunch day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"lunch_hour_monday\" value=\"12:00\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"lunch_menu_monday\" class=\"form-control\" style=\"height: 430px\"></textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"lunch_list_monday\" class=\"form-control\" style=\"height: 225px\"></textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"lunch_comments_monday\" class=\"form-control\" style=\"height: 186px\"></textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-afternoon day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"afternoon_hour_monday\" value=\"17:30\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"afternoon_menu_monday\" class=\"form-control\" style=\"height: 430px\"></textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"afternoon_list_monday\" class=\"form-control\" style=\"height: 225px\"></textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"afternoon_comments_monday\" class=\"form-control\" style=\"height: 186px\"></textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-dinner day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"dinner_hour_monday\" value=\"21:00\" min=\"09:00\" max=\"22:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"dinner_menu_monday\" class=\"form-control\" style=\"height: 430px\"></textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"dinner_list_monday\" class=\"form-control\" style=\"height: 225px\"></textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"dinner_comments_monday\" class=\"form-control\" style=\"height: 186px\"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-sm-3\">
                                        <div class=\"workout-rest\">
                                            <input type=\"checkbox\" value=\"1\" style=\"width: fit-content; margin-bottom: 10px; margin-top: 10px; margin-right: 10px\" name=\"monday_workout_rest\" id=\"monday-workout-rest\" onclick=\"restDay('monday')\"><strong>Descanso</strong>
                                        </div>
                                        <div class=\"monday-workout\">
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
                                            <input type=\"time\" name=\"monday_workout_time\" value=\"\" style=\"width: fit-content\">
                                            <label for=\"monday-workout\">Entrenamiento:</label>
                                            <textarea type=\"text\" id=\"monday-workout\" name=\"monday_workout\" class=\"form-control\" style=\"height: 150px\"></textarea>
                                            <br/>
                                            <ul class=\"list-group\" id=\"monday-workout-exercises\">
                                                {% for exercise in exercises %}
                                                    <li>
                                                        <input type=\"checkbox\" value=\"{{ exercise.idExercise }}\" style=\"width: fit-content; margin-bottom: 10px; margin-top: 10px\" name=\"monday_workout_exercises[{{ exercise.idExercise }}][]\">
                                                        {{ exercise.title }}
                                                    </li>
                                                {% endfor %}
                                            </ul>
                                            <label for=\"monday-workout-notes\">Observaciones:</label>
                                            <textarea type=\"text\" id=\"monday-workout-notes\" name=\"monday_workout_notes\" class=\"form-control\" style=\"height: 80px\"></textarea>
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
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"breakfast_hour_tuesday\" value=\"08:30\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"breakfast_menu_tuesday\" class=\"form-control\" style=\"height: 430px\"></textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"breakfast_list_tuesday\" class=\"form-control\" style=\"height: 225px\"></textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"breakfast_comments_tuesday\" class=\"form-control\" style=\"height: 186px\"></textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-snack day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"snack_hour_tuesday\" value=\"11:30\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"snack_menu_tuesday\" class=\"form-control\" style=\"height: 430px\"></textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"snack_list_tuesday\" class=\"form-control\" style=\"height: 225px\"></textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"snack_comments_tuesday\" class=\"form-control\" style=\"height: 186px\"></textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-lunch day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"lunch_hour_tuesday\" value=\"12:00\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"lunch_menu_tuesday\" class=\"form-control\" style=\"height: 430px\"></textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"lunch_list_tuesday\" class=\"form-control\" style=\"height: 225px\"></textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"lunch_comments_tuesday\" class=\"form-control\" style=\"height: 186px\"></textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-afternoon day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"afternoon_hour_tuesday\" value=\"17:30\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"afternoon_menu_tuesday\" class=\"form-control\" style=\"height: 430px\"></textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"afternoon_list_tuesday\" class=\"form-control\" style=\"height: 225px\"></textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"afternoon_comments_tuesday\" class=\"form-control\" style=\"height: 186px\"></textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-dinner day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"dinner_hour_tuesday\" value=\"21:00\" min=\"09:00\" max=\"22:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"dinner_menu_tuesday\" class=\"form-control\" style=\"height: 430px\"></textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"dinner_list_tuesday\" class=\"form-control\" style=\"height: 225px\"></textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"dinner_comments_tuesday\" class=\"form-control\" style=\"height: 186px\"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-sm-3\">
                                        <div class=\"workout-rest\">
                                            <input type=\"checkbox\" value=\"1\" style=\"width: fit-content; margin-bottom: 10px; margin-top: 10px; margin-right: 10px\" name=\"tuesday_workout_rest\" id=\"tuesday-workout-rest\" onclick=\"restDay('monday')\"><strong>Descanso</strong>
                                        </div>
                                        <div class=\"tuesday-workout\">
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
                                            <input type=\"time\" name=\"tuesday_workout_time\" value=\"\" style=\"width: fit-content\">
                                            <label for=\"tuesday-workout\">Entrenamiento:</label>
                                            <textarea type=\"text\" id=\"tuesday-workout\" name=\"tuesday_workout\" class=\"form-control\" style=\"height: 150px\"></textarea>
                                            <br/>
                                            <ul class=\"list-group\" id=\"tuesday-workout-exercises\">
                                                {% for exercise in exercises %}
                                                    <li>
                                                        <input type=\"checkbox\" value=\"{{ exercise.idExercise }}\" style=\"width: fit-content; margin-bottom: 10px; margin-top: 10px\" name=\"tuesday_workout_exercises[{{ exercise.idExercise }}][]\">
                                                        {{ exercise.title }}
                                                    </li>
                                                {% endfor %}
                                            </ul>
                                            <label for=\"tuesday-workout-notes\">Observaciones:</label>
                                            <textarea type=\"text\" id=\"tuesday-workout-notes\" name=\"tuesday_workout_notes\" class=\"form-control\" style=\"height: 80px\"></textarea>
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
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"breakfast_hour_wednesday\" value=\"08:30\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"breakfast_menu_wednesday\" class=\"form-control\" style=\"height: 430px\"></textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"breakfast_list_wednesday\" class=\"form-control\" style=\"height: 225px\"></textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"breakfast_comments_wednesday\" class=\"form-control\" style=\"height: 186px\"></textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-snack day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"snack_hour_wednesday\" value=\"11:30\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"snack_menu_wednesday\" class=\"form-control\" style=\"height: 430px\"></textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"snack_list_wednesday\" class=\"form-control\" style=\"height: 225px\"></textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"snack_comments_wednesday\" class=\"form-control\" style=\"height: 186px\"></textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-lunch day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"lunch_hour_wednesday\" value=\"12:00\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"lunch_menu_wednesday\" class=\"form-control\" style=\"height: 430px\"></textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"lunch_list_wednesday\" class=\"form-control\" style=\"height: 225px\"></textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"lunch_comments_wednesday\" class=\"form-control\" style=\"height: 186px\"></textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-afternoon day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"afternoon_hour_wednesday\" value=\"17:30\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"afternoon_menu_wednesday\" class=\"form-control\" style=\"height: 430px\"></textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"afternoon_list_wednesday\" class=\"form-control\" style=\"height: 225px\"></textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"afternoon_comments_wednesday\" class=\"form-control\" style=\"height: 186px\"></textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-dinner day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"dinner_hour_wednesday\" value=\"21:00\" min=\"09:00\" max=\"22:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"dinner_menu_wednesday\" class=\"form-control\" style=\"height: 430px\"></textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"dinner_list_wednesday\" class=\"form-control\" style=\"height: 225px\"></textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"dinner_comments_wednesday\" class=\"form-control\" style=\"height: 186px\"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-sm-3\">
                                        <div class=\"workout-rest\">
                                            <input type=\"checkbox\" value=\"1\" style=\"width: fit-content; margin-bottom: 10px; margin-top: 10px; margin-right: 10px\" name=\"wednesday_workout_rest\" id=\"wednesday-workout-rest\" onclick=\"restDay('monday')\"><strong>Descanso</strong>
                                        </div>
                                        <div class=\"wednesday-workout\">
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
                                            <input type=\"time\" name=\"wednesday_workout_time\" value=\"\" style=\"width: fit-content\">
                                            <label for=\"wednesday-workout\">Entrenamiento:</label>
                                            <textarea type=\"text\" id=\"wednesday-workout\" name=\"wednesday_workout\" class=\"form-control\" style=\"height: 150px\"></textarea>
                                            <br/>
                                            <ul class=\"list-group\" id=\"wednesday-workout-exercises\">
                                                {% for exercise in exercises %}
                                                    <li>
                                                        <input type=\"checkbox\" value=\"{{ exercise.idExercise }}\" style=\"width: fit-content; margin-bottom: 10px; margin-top: 10px\" name=\"wednesday_workout_exercises[{{ exercise.idExercise }}][]\">
                                                        {{ exercise.title }}
                                                    </li>
                                                {% endfor %}
                                            </ul>
                                            <label for=\"wednesday-workout-notes\">Observaciones:</label>
                                            <textarea type=\"text\" id=\"wednesday-workout-notes\" name=\"wednesday_workout_notes\" class=\"form-control\" style=\"height: 80px\"></textarea>
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
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"breakfast_hour_thursday\" value=\"08:30\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"breakfast_menu_thursday\" class=\"form-control\" style=\"height: 430px\"></textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"breakfast_list_thursday\" class=\"form-control\" style=\"height: 225px\"></textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"breakfast_comments_thursday\" class=\"form-control\" style=\"height: 186px\"></textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-snack day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"snack_hour_thursday\" value=\"11:30\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"snack_menu_thursday\" class=\"form-control\" style=\"height: 430px\"></textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"snack_list_thursday\" class=\"form-control\" style=\"height: 225px\"></textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"snack_comments_thursday\" class=\"form-control\" style=\"height: 186px\"></textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-lunch day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"lunch_hour_thursday\" value=\"12:00\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"lunch_menu_thursday\" class=\"form-control\" style=\"height: 430px\"></textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"lunch_list_thursday\" class=\"form-control\" style=\"height: 225px\"></textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"lunch_comments_thursday\" class=\"form-control\" style=\"height: 186px\"></textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-afternoon day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"afternoon_hour_thursday\" value=\"17:30\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"afternoon_menu_thursday\" class=\"form-control\" style=\"height: 430px\"></textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"afternoon_list_thursday\" class=\"form-control\" style=\"height: 225px\"></textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"afternoon_comments_thursday\" class=\"form-control\" style=\"height: 186px\"></textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-dinner day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"dinner_hour_thursday\" value=\"21:00\" min=\"09:00\" max=\"22:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"dinner_menu_thursday\" class=\"form-control\" style=\"height: 430px\"></textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"dinner_list_thursday\" class=\"form-control\" style=\"height: 225px\"></textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"dinner_comments_thursday\" class=\"form-control\" style=\"height: 186px\"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-sm-3\">
                                        <div class=\"workout-rest\">
                                            <input type=\"checkbox\" value=\"1\" style=\"width: fit-content; margin-bottom: 10px; margin-top: 10px; margin-right: 10px\" name=\"thursday_workout_rest\" id=\"thursday-workout-rest\" onclick=\"restDay('monday')\"><strong>Descanso</strong>
                                        </div>
                                        <div class=\"thursday-workout\">
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
                                            <input type=\"time\" name=\"thursday_workout_time\" value=\"09:30\" style=\"width: fit-content\">
                                            <label for=\"thursday-workout\">Entrenamiento:</label>
                                            <textarea type=\"text\" id=\"thursday-workout\" name=\"thursday_workout\" class=\"form-control\" style=\"height: 150px\"></textarea>
                                            <br/>
                                            <ul class=\"list-group\" id=\"thursday-workout-exercises\">
                                                {% for exercise in exercises %}
                                                    <li>
                                                        <input type=\"checkbox\" value=\"{{ exercise.idExercise }}\" style=\"width: fit-content; margin-bottom: 10px; margin-top: 10px\" name=\"thursday_workout_exercises[{{ exercise.idExercise }}][]\">
                                                        {{ exercise.title }}
                                                    </li>
                                                {% endfor %}
                                            </ul>
                                            <label for=\"thursday-workout-notes\">Observaciones:</label>
                                            <textarea type=\"text\" id=\"thursday-workout-notes\" name=\"thursday_workout_notes\" class=\"form-control\" style=\"height: 80px\"></textarea>
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
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"breakfast_hour_friday\" value=\"08:30\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"breakfast_menu_friday\" class=\"form-control\" style=\"height: 430px\"></textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"breakfast_list_friday\" class=\"form-control\" style=\"height: 225px\"></textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"breakfast_comments_friday\" class=\"form-control\" style=\"height: 186px\"></textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-snack day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"snack_hour_friday\" value=\"11:30\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"snack_menu_friday\" class=\"form-control\" style=\"height: 430px\"></textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"snack_list_friday\" class=\"form-control\" style=\"height: 225px\"></textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"snack_comments_friday\" class=\"form-control\" style=\"height: 186px\"></textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-lunch day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"lunch_hour_friday\" value=\"12:00\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"lunch_menu_friday\" class=\"form-control\" style=\"height: 430px\"></textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"lunch_list_friday\" class=\"form-control\" style=\"height: 225px\"></textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"lunch_comments_friday\" class=\"form-control\" style=\"height: 186px\"></textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-afternoon day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"afternoon_hour_friday\" value=\"17:30\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"afternoon_menu_friday\" class=\"form-control\" style=\"height: 430px\"></textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"afternoon_list_friday\" class=\"form-control\" style=\"height: 225px\"></textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"afternoon_comments_friday\" class=\"form-control\" style=\"height: 186px\"></textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-dinner day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"dinner_hour_friday\" value=\"21:00\" min=\"09:00\" max=\"22:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"dinner_menu_friday\" class=\"form-control\" style=\"height: 430px\"></textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"dinner_list_friday\" class=\"form-control\" style=\"height: 225px\"></textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"dinner_comments_friday\" class=\"form-control\" style=\"height: 186px\"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-sm-3\">
                                        <div class=\"workout-rest\">
                                            <input type=\"checkbox\" value=\"1\" style=\"width: fit-content; margin-bottom: 10px; margin-top: 10px; margin-right: 10px\" name=\"friday_workout_rest\" id=\"friday-workout-rest\" onclick=\"restDay('monday')\"><strong>Descanso</strong>
                                        </div>
                                        <div class=\"friday-workout\">
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
                                            <input type=\"time\" name=\"friday_workout_time\" value=\"09:30\" style=\"width: fit-content\">
                                            <label for=\"friday-workout\">Entrenamiento:</label>
                                            <textarea type=\"text\" id=\"friday-workout\" name=\"friday_workout\" class=\"form-control\" style=\"height: 150px\"></textarea>
                                            <br/>
                                            <ul class=\"list-group\" id=\"friday-workout-exercises\">
                                                {% for exercise in exercises %}
                                                    <li>
                                                        <input type=\"checkbox\" value=\"{{ exercise.idExercise }}\" style=\"width: fit-content; margin-bottom: 10px; margin-top: 10px\" name=\"friday_workout_exercises[{{ exercise.idExercise }}][]\">
                                                        {{ exercise.title }}
                                                    </li>
                                                {% endfor %}
                                            </ul>
                                            <label for=\"friday-workout-notes\">Observaciones:</label>
                                            <textarea type=\"text\" id=\"friday-workout-notes\" name=\"friday_workout_notes\" class=\"form-control\" style=\"height: 80px\"></textarea>
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
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"breakfast_hour_saturday\" value=\"08:30\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"breakfast_menu_saturday\" class=\"form-control\" style=\"height: 430px\"></textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"breakfast_list_saturday\" class=\"form-control\" style=\"height: 225px\"></textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"breakfast_comments_saturday\" class=\"form-control\" style=\"height: 186px\"></textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-snack day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"snack_hour_saturday\" value=\"11:30\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"snack_menu_saturday\" class=\"form-control\" style=\"height: 430px\"></textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"snack_list_saturday\" class=\"form-control\" style=\"height: 225px\"></textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"snack_comments_saturday\" class=\"form-control\" style=\"height: 186px\"></textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-lunch day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"lunch_hour_saturday\" value=\"12:00\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"lunch_menu_saturday\" class=\"form-control\" style=\"height: 430px\"></textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"lunch_list_saturday\" class=\"form-control\" style=\"height: 225px\"></textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"lunch_comments_saturday\" class=\"form-control\" style=\"height: 186px\"></textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-afternoon day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"afternoon_hour_saturday\" value=\"17:30\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"afternoon_menu_saturday\" class=\"form-control\" style=\"height: 430px\"></textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"afternoon_list_saturday\" class=\"form-control\" style=\"height: 225px\"></textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"afternoon_comments_saturday\" class=\"form-control\" style=\"height: 186px\"></textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-dinner day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"dinner_hour_saturday\" value=\"21:00\" min=\"09:00\" max=\"22:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"dinner_menu_saturday\" class=\"form-control\" style=\"height: 430px\"></textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"dinner_list_saturday\" class=\"form-control\" style=\"height: 225px\"></textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"dinner_comments_saturday\" class=\"form-control\" style=\"height: 186px\"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-sm-3\">
                                        <div class=\"workout-rest\">
                                            <input type=\"checkbox\" value=\"1\" style=\"width: fit-content; margin-bottom: 10px; margin-top: 10px; margin-right: 10px\" name=\"saturday_workout_rest\" id=\"saturday-workout-rest\" onclick=\"restDay('monday')\"><strong>Descanso</strong>
                                        </div>
                                        <div class=\"saturday-workout\">
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
                                            <input type=\"time\" name=\"saturday_workout_time\" value=\"09:30\" style=\"width: fit-content\">
                                            <label for=\"saturday-workout\">Entrenamiento:</label>
                                            <textarea type=\"text\" id=\"saturday-workout\" name=\"saturday_workout\" class=\"form-control\" style=\"height: 150px\"></textarea>
                                            <br/>
                                            <ul class=\"list-group\" id=\"saturday-workout-exercises\">
                                                {% for exercise in exercises %}
                                                    <li>
                                                        <input type=\"checkbox\" value=\"{{ exercise.idExercise }}\" style=\"width: fit-content; margin-bottom: 10px; margin-top: 10px\" name=\"saturday_workout_exercises[{{ exercise.idExercise }}][]\">
                                                        {{ exercise.title }}
                                                    </li>
                                                {% endfor %}
                                            </ul>
                                            <label for=\"saturday-workout-notes\">Observaciones:</label>
                                            <textarea type=\"text\" id=\"saturday-workout-notes\" name=\"saturday_workout_notes\" class=\"form-control\" style=\"height: 80px\"></textarea>
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
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"breakfast_hour_sunday\" value=\"08:30\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"breakfast_menu_sunday\" class=\"form-control\" style=\"height: 430px\"></textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"breakfast_list_sunday\" class=\"form-control\" style=\"height: 225px\"></textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"breakfast_comments_sunday\" class=\"form-control\" style=\"height: 186px\"></textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-snack day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"snack_hour_sunday\" value=\"11:30\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"snack_menu_sunday\" class=\"form-control\" style=\"height: 430px\"></textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"snack_list_sunday\" class=\"form-control\" style=\"height: 225px\"></textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"snack_comments_sunday\" class=\"form-control\" style=\"height: 186px\"></textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-lunch day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"lunch_hour_sunday\" value=\"12:00\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"lunch_menu_sunday\" class=\"form-control\" style=\"height: 430px\"></textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"lunch_list_sunday\" class=\"form-control\" style=\"height: 225px\"></textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"lunch_comments_sunday\" class=\"form-control\" style=\"height: 186px\"></textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-afternoon day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"afternoon_hour_sunday\" value=\"17:30\" min=\"09:00\" max=\"18:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"afternoon_menu_sunday\" class=\"form-control\" style=\"height: 430px\"></textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"afternoon_list_sunday\" class=\"form-control\" style=\"height: 225px\"></textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"afternoon_comments_sunday\" class=\"form-control\" style=\"height: 186px\"></textarea>
                                            </div>
                                        </div>
                                        <div class=\"day-plan-dinner day-plan day-meal-hidden\">
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"hora\" style=\"margin-right: 10px\">Hora:</label><input style=\"width: 20%; margin: 0\" type=\"time\" id=\"hora\" name=\"dinner_hour_sunday\" value=\"21:00\" min=\"09:00\" max=\"22:00\" required>
                                                <br/><br/>
                                                <label for=\"menu\">Menú:</label><textarea type=\"text\" id=\"menu\" name=\"dinner_menu_sunday\" class=\"form-control\" style=\"height: 430px\"></textarea>
                                            </div>
                                            <div class=\"col-sm-6\" style=\"padding: 20px\">
                                                <label for=\"list\">Lista:</label><textarea type=\"text\" id=\"list\" name=\"dinner_list_sunday\" class=\"form-control\" style=\"height: 225px\"></textarea>
                                                <br/><br/>
                                                <label for=\"comments\">Comentarios:</label><textarea type=\"text\" id=\"comments\" name=\"dinner_comments_sunday\" class=\"form-control\" style=\"height: 186px\"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-sm-3\">
                                        <div class=\"workout-rest\">
                                            <input type=\"checkbox\" value=\"1\" style=\"width: fit-content; margin-bottom: 10px; margin-top: 10px; margin-right: 10px\" name=\"sunday_workout_rest\" id=\"sunday-workout-rest\" onclick=\"restDay('monday')\"><strong>Descanso</strong>
                                        </div>
                                        <div class=\"sunday-workout\">
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
                                            <input type=\"time\" name=\"sunday_workout_time\" value=\"\" style=\"width: fit-content\">
                                            <label for=\"sunday-workout\">Entrenamiento:</label>
                                            <textarea type=\"text\" id=\"sunday-workout\" name=\"sunday_workout\" class=\"form-control\" style=\"height: 150px\"></textarea>
                                            <br/>
                                            <ul class=\"list-group\" id=\"sunday-workout-exercises\">
                                                {% for exercise in exercises %}
                                                    <li>
                                                        <input type=\"checkbox\" value=\"{{ exercise.idExercise }}\" style=\"width: fit-content; margin-bottom: 10px; margin-top: 10px\" name=\"sunday_workout_exercises[{{ exercise.idExercise }}][]\">
                                                        {{ exercise.title }}
                                                    </li>
                                                {% endfor %}
                                            </ul>
                                            <label for=\"sunday-workout-notes\">Observaciones:</label>
                                            <textarea type=\"text\" id=\"sunday-workout-notes\" name=\"sunday_workout_notes\" class=\"form-control\" style=\"height: 80px\"></textarea>
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
", "@Nutritionist/nutritionist-weekly-plan.html.twig", "/shared/httpd/nutrik/src/NutritionistBundle/Resources/views/nutritionist-weekly-plan.html.twig");
    }
}
