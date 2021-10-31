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

/* @Nutritionist/nutritionist-add-recipe.html.twig */
class __TwigTemplate_e60d84ff6ee7f6c0dc9a2c3aa095010589153ad2305cf41a374765a7d87b5030 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Nutritionist/nutritionist-add-recipe.html.twig"));

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
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\"></script>
    </header>
    <section id=\"default-header\">
        ";
        // line 12
        $this->loadTemplate("header.html.twig", "@Nutritionist/nutritionist-add-recipe.html.twig", 12)->display($context);
        // line 13
        echo "    </section>
    <section id=\"nutritionist-add-recipe\">
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "flashbag", [], "method"), "get", [0 => "addRecipeKOStatus"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 16
            echo "            <div class=\"row\" style=\"width: 92%; margin-left: 4%; margin-top: 10px;\">
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
                <form class=\"form\" action=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nutritionist_add_recipe");
        echo "\" method=\"post\" novalidate>
                    <div id=\"recipe-content-block\">
                        <h2 style=\"padding: 0px 15px; text-align: center;color: white;\">Añadir Receta</h2>
                        <div class=\"container-fluid\">
                            <div class=\"col-sm-7\">
                                <div id=\"recipe-content\">
                                    <div id=\"recipe-title\">
                                        <label for=\"recipe_name\">Nombre receta:</label>
                                        <input type=\"text\" id=\"recipe_name\" name=\"recipe_name\" class=\"form-control\" required=\"required\" style=\"background-color: transparent\" value=\"\" placeholder=\"Título de la receta\"/>
                                    </div>
                                    <div id=\"recipe-image-link\" class=\"col-sm-12\">
                                        <label for=\"recipe_image\">Link imagén:</label>
                                        <input type=\"text\" id=\"recipe_image\" name=\"recipe_image\" class=\"form-control\" required=\"required\" style=\"background-color: transparent\" value=\"\" placeholder=\"Link de la imagen de la receta\"/>
                                    </div>
                                    <div id=\"recipe-visibility\" class=\"col-sm-12\">
                                        <input type=\"checkbox\" value=\"1\" style=\"margin: 12px 0; margin-right: 10px;\" name=\"visibility\"><strong>Visible para todos los usuarios de NutriK</strong>
                                    </div>
                                    <div id=\"recipe-steps\" class=\"col-sm-12\" >
                                        <label for=\"recipe_description\">Receta:</label>
                                        <textarea type=\"text\" id=\"recipe_description\" name=\"recipe_description\" class=\"form-control\" required=\"required\" style=\"background-color: transparent\" placeholder=\"Indica los pasos de la receta\"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-5\">
                                <div id=\"recipe-content\">
                                    <div id=\"recipe-add-ingredients\">
                                        <strong style=\"float: left\">Añadir Ingredientes:</strong>
                                        <strong id=\"add_ingredient_link\" onclick=\"openModal()\">Agregar nuevo ingrediente
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-plus-circle\" viewBox=\"0 0 16 16\" style=\"margin-bottom: -3px;margin-left: 5px;\">
                                                <path d=\"M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z\"/>
                                                <path d=\"M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z\"/>
                                            </svg>
                                        </strong>
                                        <button style=\"display: none\" type=\"button\" class=\"btn btn-primary\" id=\"openMyIngredientModal\" data-toggle=\"modal\" data-target=\"#myIngredientModal\"></button>
                                        <!-- The Modal -->
                                        <div class=\"modal fade\" id=\"myIngredientModal\">
                                            <div class=\"modal-dialog\">
                                                <div class=\"modal-content\">

                                                    <!-- Modal Header -->
                                                    <div class=\"modal-header\" style=\"border-bottom: none\">
                                                        <h3 class=\"modal-title\" style=\"color: #00766c\">Agregar Ingrediente</h3>
                                                    </div>

                                                    <!-- Modal body -->
                                                    <div class=\"modal-body\">
                                                        <label for=\"ingredient_name\">Nombre:</label>
                                                        <input type=\"text\" id=\"ingredient_name\" name=\"ingredient_name\" class=\"form-control\" style=\"background-color: transparent\" value=\"\" placeholder=\"Nombre del ingrediente\"/>
                                                        <br/>
                                                        <label for=\"ingredient_carbs\">Carbohidratos:</label>
                                                        <input type=\"text\" id=\"ingredient_carbs\" name=\"ingredient_carbs\" class=\"form-control\" style=\"background-color: transparent\" value=\"\" placeholder=\"Carbohidratos por cada 100 gramos\"/>
                                                        <br/>
                                                        <label for=\"ingredient_fats\">Grasas:</label>
                                                        <input type=\"text\" id=\"ingredient_fats\" name=\"ingredient_fats\" class=\"form-control\" style=\"background-color: transparent\" value=\"\" placeholder=\"Grasas por cada 100 gramos\"/>
                                                        <br/>
                                                        <label for=\"ingredient_protein\">Proteina:</label>
                                                        <input type=\"text\" id=\"ingredient_protein\" name=\"ingredient_protein\" class=\"form-control\" style=\"background-color: transparent\" value=\"\" placeholder=\"Proteina por cada 100 gramos\"/>
                                                    </div>

                                                    <!-- Modal footer -->
                                                    <div class=\"modal-footer\" style=\"border-top: none\">
                                                        <input type=\"submit\" name=\"submit\" class=\"btn\" value=\"Guardar Ingrediente\" style=\"margin-left: 0; color: white\"/>
                                                        <button type=\"button\" class=\"btn\" data-dismiss=\"modal\" style=\"color: black; margin-left: 0; border-color:#8d8d8d; background: linear-gradient(to bottom, #8d8d8d 0%, #bdbdbd 100%);\">Close</button>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <br/>
                                        <div class=\"ingredients-finder\">
                                            <input class=\"form-control finder\" type=\"search\" placeholder=\"Buscar Ingrediente\" name=\"search_ingredient\" aria-label=\"Search\"/>
                                            <input type=\"submit\" name=\"submit\" class=\"btn\" value=\"Buscar\" style=\"margin-left: 0;color: white;width: 15%;margin-top: -3px;height: 33px;\"/>
                                        </div>
                                        <br/>
                                        <ul class=\"list-group\" id=\"add_ingredients\">
                                            ";
        // line 99
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["all_ingredients"] ?? $this->getContext($context, "all_ingredients")));
        foreach ($context['_seq'] as $context["_key"] => $context["ingredient"]) {
            // line 100
            echo "                                                <li>
                                                    <input type=\"checkbox\" value=\"";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute($context["ingredient"], "idIngredient", []), "html", null, true);
            echo "\" style=\"width: fit-content; margin-bottom: 10px; margin-top: 10px\" name=\"add_ingredients[";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ingredient"], "idIngredient", []), "html", null, true);
            echo "][]\">
                                                    ";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute($context["ingredient"], "name", []), "html", null, true);
            echo "
                                                </li>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ingredient'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "                                        </ul>
                                        <input type=\"submit\" name=\"submit\" class=\"btn btn-primary\" value=\"Guardar Receta\"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    </html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Nutritionist/nutritionist-add-recipe.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  189 => 105,  180 => 102,  174 => 101,  171 => 100,  167 => 99,  89 => 24,  85 => 22,  75 => 18,  71 => 16,  67 => 15,  63 => 13,  61 => 12,  52 => 6,  46 => 2,  34 => 1,);
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
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\"></script>
    </header>
    <section id=\"default-header\">
        {% include 'header.html.twig' %}
    </section>
    <section id=\"nutritionist-add-recipe\">
        {% for message in  app.session.flashbag().get('addRecipeKOStatus') %}
            <div class=\"row\" style=\"width: 92%; margin-left: 4%; margin-top: 10px;\">
                <div class=\"alert alert-danger\" role=\"alert\" style=\"margin-bottom: 0\">
                    {{ message }}
                </div>
            </div>
        {% endfor %}
        <div class=\"container\">
            <div class=\"col-sm-12\">
                <form class=\"form\" action=\"{{ path(\"nutritionist_add_recipe\") }}\" method=\"post\" novalidate>
                    <div id=\"recipe-content-block\">
                        <h2 style=\"padding: 0px 15px; text-align: center;color: white;\">Añadir Receta</h2>
                        <div class=\"container-fluid\">
                            <div class=\"col-sm-7\">
                                <div id=\"recipe-content\">
                                    <div id=\"recipe-title\">
                                        <label for=\"recipe_name\">Nombre receta:</label>
                                        <input type=\"text\" id=\"recipe_name\" name=\"recipe_name\" class=\"form-control\" required=\"required\" style=\"background-color: transparent\" value=\"\" placeholder=\"Título de la receta\"/>
                                    </div>
                                    <div id=\"recipe-image-link\" class=\"col-sm-12\">
                                        <label for=\"recipe_image\">Link imagén:</label>
                                        <input type=\"text\" id=\"recipe_image\" name=\"recipe_image\" class=\"form-control\" required=\"required\" style=\"background-color: transparent\" value=\"\" placeholder=\"Link de la imagen de la receta\"/>
                                    </div>
                                    <div id=\"recipe-visibility\" class=\"col-sm-12\">
                                        <input type=\"checkbox\" value=\"1\" style=\"margin: 12px 0; margin-right: 10px;\" name=\"visibility\"><strong>Visible para todos los usuarios de NutriK</strong>
                                    </div>
                                    <div id=\"recipe-steps\" class=\"col-sm-12\" >
                                        <label for=\"recipe_description\">Receta:</label>
                                        <textarea type=\"text\" id=\"recipe_description\" name=\"recipe_description\" class=\"form-control\" required=\"required\" style=\"background-color: transparent\" placeholder=\"Indica los pasos de la receta\"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-5\">
                                <div id=\"recipe-content\">
                                    <div id=\"recipe-add-ingredients\">
                                        <strong style=\"float: left\">Añadir Ingredientes:</strong>
                                        <strong id=\"add_ingredient_link\" onclick=\"openModal()\">Agregar nuevo ingrediente
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-plus-circle\" viewBox=\"0 0 16 16\" style=\"margin-bottom: -3px;margin-left: 5px;\">
                                                <path d=\"M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z\"/>
                                                <path d=\"M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z\"/>
                                            </svg>
                                        </strong>
                                        <button style=\"display: none\" type=\"button\" class=\"btn btn-primary\" id=\"openMyIngredientModal\" data-toggle=\"modal\" data-target=\"#myIngredientModal\"></button>
                                        <!-- The Modal -->
                                        <div class=\"modal fade\" id=\"myIngredientModal\">
                                            <div class=\"modal-dialog\">
                                                <div class=\"modal-content\">

                                                    <!-- Modal Header -->
                                                    <div class=\"modal-header\" style=\"border-bottom: none\">
                                                        <h3 class=\"modal-title\" style=\"color: #00766c\">Agregar Ingrediente</h3>
                                                    </div>

                                                    <!-- Modal body -->
                                                    <div class=\"modal-body\">
                                                        <label for=\"ingredient_name\">Nombre:</label>
                                                        <input type=\"text\" id=\"ingredient_name\" name=\"ingredient_name\" class=\"form-control\" style=\"background-color: transparent\" value=\"\" placeholder=\"Nombre del ingrediente\"/>
                                                        <br/>
                                                        <label for=\"ingredient_carbs\">Carbohidratos:</label>
                                                        <input type=\"text\" id=\"ingredient_carbs\" name=\"ingredient_carbs\" class=\"form-control\" style=\"background-color: transparent\" value=\"\" placeholder=\"Carbohidratos por cada 100 gramos\"/>
                                                        <br/>
                                                        <label for=\"ingredient_fats\">Grasas:</label>
                                                        <input type=\"text\" id=\"ingredient_fats\" name=\"ingredient_fats\" class=\"form-control\" style=\"background-color: transparent\" value=\"\" placeholder=\"Grasas por cada 100 gramos\"/>
                                                        <br/>
                                                        <label for=\"ingredient_protein\">Proteina:</label>
                                                        <input type=\"text\" id=\"ingredient_protein\" name=\"ingredient_protein\" class=\"form-control\" style=\"background-color: transparent\" value=\"\" placeholder=\"Proteina por cada 100 gramos\"/>
                                                    </div>

                                                    <!-- Modal footer -->
                                                    <div class=\"modal-footer\" style=\"border-top: none\">
                                                        <input type=\"submit\" name=\"submit\" class=\"btn\" value=\"Guardar Ingrediente\" style=\"margin-left: 0; color: white\"/>
                                                        <button type=\"button\" class=\"btn\" data-dismiss=\"modal\" style=\"color: black; margin-left: 0; border-color:#8d8d8d; background: linear-gradient(to bottom, #8d8d8d 0%, #bdbdbd 100%);\">Close</button>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <br/>
                                        <div class=\"ingredients-finder\">
                                            <input class=\"form-control finder\" type=\"search\" placeholder=\"Buscar Ingrediente\" name=\"search_ingredient\" aria-label=\"Search\"/>
                                            <input type=\"submit\" name=\"submit\" class=\"btn\" value=\"Buscar\" style=\"margin-left: 0;color: white;width: 15%;margin-top: -3px;height: 33px;\"/>
                                        </div>
                                        <br/>
                                        <ul class=\"list-group\" id=\"add_ingredients\">
                                            {% for ingredient in all_ingredients %}
                                                <li>
                                                    <input type=\"checkbox\" value=\"{{ ingredient.idIngredient }}\" style=\"width: fit-content; margin-bottom: 10px; margin-top: 10px\" name=\"add_ingredients[{{ ingredient.idIngredient }}][]\">
                                                    {{ ingredient.name }}
                                                </li>
                                            {% endfor %}
                                        </ul>
                                        <input type=\"submit\" name=\"submit\" class=\"btn btn-primary\" value=\"Guardar Receta\"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    </html>
{% endblock %}
", "@Nutritionist/nutritionist-add-recipe.html.twig", "/shared/httpd/nutrik/src/NutritionistBundle/Resources/views/nutritionist-add-recipe.html.twig");
    }
}
