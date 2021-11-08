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

/* @Nutritionist/nutritionist-edit-recipe.html.twig */
class __TwigTemplate_cb28e53a7b719f2f14c51e957f0a07ff05be5d9ec517f30d50bb7dd1415598ec extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Nutritionist/nutritionist-edit-recipe.html.twig"));

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
        $this->loadTemplate("header.html.twig", "@Nutritionist/nutritionist-edit-recipe.html.twig", 9)->display($context);
        // line 10
        echo "    </section>
    <section id=\"nutritionist-edit-recipe\">
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "flashbag", [], "method"), "get", [0 => "editRecipeKOStatus"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 13
            echo "            <div class=\"row\" style=\"width: 92%; margin-left: 4%; margin-top: 10px; margin-bottom: -10px;\">
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
                <form class=\"form\" action=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nutritionist_edit_recipe", ["id_recipe" => ($context["id_recipe"] ?? $this->getContext($context, "id_recipe"))]), "html", null, true);
        echo "\" method=\"post\">
                    <div id=\"recipe-content-block\">
                        <div class=\"container-fluid\">
                            <div class=\"col-sm-7\">
                                <div id=\"recipe-content\">
                                    <div id=\"recipe-title\">
                                        <label for=\"recipe_name\">Nombre receta:</label>
                                        <input type=\"text\" id=\"recipe_name\" name=\"recipe_name\" class=\"form-control\" required=\"required\" style=\"background-color: transparent\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute(($context["recipe"] ?? $this->getContext($context, "recipe")), "name", []), "html", null, true);
        echo "\"/>
                                    </div>
                                    <div id=\"recipe-nutritional-info\" class=\"col-sm-4\">
                                        <h3>Información nutricional</h3>
                                        <p><strong>Carbohidratos:</strong><span> ";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute(($context["nutritional_info"] ?? $this->getContext($context, "nutritional_info")), "carbs", [], "array"), "html", null, true);
        echo " gramos / 100 gramos</span></p>
                                        <p><strong>Grasas:</strong><span> ";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute(($context["nutritional_info"] ?? $this->getContext($context, "nutritional_info")), "fats", [], "array"), "html", null, true);
        echo " gramos / 100 gramos</span></p>
                                        <p><strong>Proteinas:</strong><span> ";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute(($context["nutritional_info"] ?? $this->getContext($context, "nutritional_info")), "protein", [], "array"), "html", null, true);
        echo " gramos / 100 gramos</span></p>
                                    </div>
                                    <div id=\"recipe-image\" class=\"col-sm-4\">
                                        <img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute(($context["recipe"] ?? $this->getContext($context, "recipe")), "image", [])), "html", null, true);
        echo "\">
                                    </div>
                                    <div id=\"recipe-tags\" class=\"col-sm-4\">
                                        <h3>Tags:
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-info-circle\" viewBox=\"0 0 16 16\" style=\"width: 2rem; height: 2rem; margin-bottom: -3px\"
                                                 onclick=\"openModal('openMyInfoTagsModal')\">
                                                <path d=\"M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z\"/>
                                                <path d=\"m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z\"/>
                                            </svg>
                                        </h3>
                                        <button style=\"display: none\" type=\"button\" class=\"btn btn-primary\" id=\"openMyInfoTagsModal\" data-toggle=\"modal\" data-target=\"#infoTagsModal\"></button>
                                        <div class=\"modal fade\" id=\"infoTagsModal\">
                                            <div class=\"modal-dialog\">
                                                <div class=\"modal-content\" style=\"height: 15rem;width: 50rem;padding: 40px 30px;\">
                                                    <!-- Modal body -->
                                                    <span>Etiqueta tus recetas añadiendo los tags deseados. Para obtener más informacion sobre un tag, modificar o crear uno accede a la configuracion de tu perfil o haz click <a href=\"#\">aqui</a></span>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class=\"list-group\" id=\"add_tags\">
                                            ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["all_tags"] ?? $this->getContext($context, "all_tags")));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 58
            echo "                                                <li>
                                                    <input type=\"checkbox\" value=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "idTag", []), "html", null, true);
            echo "\" ";
            if (twig_in_filter($this->getAttribute($context["tag"], "idTag", []), twig_get_array_keys_filter(($context["recipe_tags"] ?? $this->getContext($context, "recipe_tags"))))) {
                echo " checked ";
            }
            // line 60
            echo "                                                           style=\"width: fit-content; margin-bottom: 10px; margin-top: 10px\" name=\"add_tags[";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "idTag", []), "html", null, true);
            echo "][]\">
                                                    Nivel ";
            // line 61
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
        // line 64
        echo "                                        </ul>
                                    </div>
                                    <div id=\"recipe-image-link\" class=\"col-sm-12\">
                                        <label for=\"recipe_image\">Link imagén:</label>
                                        <input type=\"text\" id=\"recipe_image\" name=\"recipe_image\" class=\"form-control\" required=\"required\" style=\"background-color: transparent\" value=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute(($context["recipe"] ?? $this->getContext($context, "recipe")), "image", []), "html", null, true);
        echo "\"/>
                                    </div>
                                    <div id=\"recipe-steps\" class=\"col-sm-12\" >
                                        <label for=\"recipe_description\">Receta:</label>
                                        <textarea type=\"text\" id=\"recipe_description\" name=\"recipe_description\" class=\"form-control\" required=\"required\" style=\"background-color: transparent\"> ";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute(($context["recipe"] ?? $this->getContext($context, "recipe")), "description", []), "html", null, true);
        echo "</textarea>
                                    </div>
                                    <input type=\"submit\" name=\"submit\" class=\"btn btn-primary\" value=\"Guardar Cambios\"/>
                                </div>
                            </div>
                            <div class=\"col-sm-5\">
                                <div id=\"recipe-content\">
                                    <div id=\"recipe-delete-ingredients\">
                                        <strong>Ingredientes:</strong>
                                        <br/><br/>
                                        <ul class=\"list-group\" id=\"delete_ingredients\">
                                            ";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["recipe_ingredients"] ?? $this->getContext($context, "recipe_ingredients")));
        foreach ($context['_seq'] as $context["_key"] => $context["recipe_ingredient"]) {
            // line 84
            echo "                                                <li>
                                                    <input type=\"checkbox\" value=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute($context["recipe_ingredient"], "idIngredient", []), "html", null, true);
            echo "\" style=\"width: fit-content; margin-bottom: 10px; margin-top: 10px\" name=\"delete_ingredients[";
            echo twig_escape_filter($this->env, $this->getAttribute($context["recipe_ingredient"], "idIngredient", []), "html", null, true);
            echo "][]\">
                                                    ";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute($context["recipe_ingredient"], "name", []), "html", null, true);
            echo "
                                                </li>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recipe_ingredient'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "                                        </ul>
                                        <input type=\"submit\" name=\"submit\" class=\"btn btn-primary\" value=\"Borrar Ingredientes Seleccionados\"/>
                                    </div>
                                    <div id=\"recipe-add-ingredients\">
                                        <strong>Ingredientes:</strong>
                                        <br/><br/>
                                        <ul class=\"list-group\" id=\"add_ingredients\">
                                            ";
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["all_ingredients"] ?? $this->getContext($context, "all_ingredients")));
        foreach ($context['_seq'] as $context["_key"] => $context["ingredient"]) {
            // line 97
            echo "                                                <li>
                                                    <input type=\"checkbox\" value=\"";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute($context["ingredient"], "idIngredient", []), "html", null, true);
            echo "\" style=\"width: fit-content; margin-bottom: 10px; margin-top: 10px\" name=\"add_ingredients[";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ingredient"], "idIngredient", []), "html", null, true);
            echo "][]\">
                                                    ";
            // line 99
            echo twig_escape_filter($this->env, $this->getAttribute($context["ingredient"], "name", []), "html", null, true);
            echo "
                                                </li>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ingredient'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "                                        </ul>
                                        <input type=\"submit\" name=\"submit\" class=\"btn btn-primary\" value=\"Añadir Ingredientes Seleccionados\"/>
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
        return "@Nutritionist/nutritionist-edit-recipe.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  249 => 102,  240 => 99,  234 => 98,  231 => 97,  227 => 96,  218 => 89,  209 => 86,  203 => 85,  200 => 84,  196 => 83,  182 => 72,  175 => 68,  169 => 64,  158 => 61,  153 => 60,  147 => 59,  144 => 58,  140 => 57,  117 => 37,  111 => 34,  107 => 33,  103 => 32,  96 => 28,  86 => 21,  82 => 19,  72 => 15,  68 => 13,  64 => 12,  60 => 10,  58 => 9,  52 => 6,  46 => 2,  34 => 1,);
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
    <section id=\"nutritionist-edit-recipe\">
        {% for message in  app.session.flashbag().get('editRecipeKOStatus') %}
            <div class=\"row\" style=\"width: 92%; margin-left: 4%; margin-top: 10px; margin-bottom: -10px;\">
                <div class=\"alert alert-danger\" role=\"alert\" style=\"margin-bottom: 0\">
                    {{ message }}
                </div>
            </div>
        {% endfor %}
        <div class=\"container\">
            <div class=\"col-sm-12\">
                <form class=\"form\" action=\"{{ path(\"nutritionist_edit_recipe\",{\"id_recipe\":id_recipe}) }}\" method=\"post\">
                    <div id=\"recipe-content-block\">
                        <div class=\"container-fluid\">
                            <div class=\"col-sm-7\">
                                <div id=\"recipe-content\">
                                    <div id=\"recipe-title\">
                                        <label for=\"recipe_name\">Nombre receta:</label>
                                        <input type=\"text\" id=\"recipe_name\" name=\"recipe_name\" class=\"form-control\" required=\"required\" style=\"background-color: transparent\" value=\"{{ recipe.name }}\"/>
                                    </div>
                                    <div id=\"recipe-nutritional-info\" class=\"col-sm-4\">
                                        <h3>Información nutricional</h3>
                                        <p><strong>Carbohidratos:</strong><span> {{ nutritional_info['carbs'] }} gramos / 100 gramos</span></p>
                                        <p><strong>Grasas:</strong><span> {{ nutritional_info['fats'] }} gramos / 100 gramos</span></p>
                                        <p><strong>Proteinas:</strong><span> {{ nutritional_info['protein']}} gramos / 100 gramos</span></p>
                                    </div>
                                    <div id=\"recipe-image\" class=\"col-sm-4\">
                                        <img src=\"{{ asset(recipe.image) }}\">
                                    </div>
                                    <div id=\"recipe-tags\" class=\"col-sm-4\">
                                        <h3>Tags:
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-info-circle\" viewBox=\"0 0 16 16\" style=\"width: 2rem; height: 2rem; margin-bottom: -3px\"
                                                 onclick=\"openModal('openMyInfoTagsModal')\">
                                                <path d=\"M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z\"/>
                                                <path d=\"m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z\"/>
                                            </svg>
                                        </h3>
                                        <button style=\"display: none\" type=\"button\" class=\"btn btn-primary\" id=\"openMyInfoTagsModal\" data-toggle=\"modal\" data-target=\"#infoTagsModal\"></button>
                                        <div class=\"modal fade\" id=\"infoTagsModal\">
                                            <div class=\"modal-dialog\">
                                                <div class=\"modal-content\" style=\"height: 15rem;width: 50rem;padding: 40px 30px;\">
                                                    <!-- Modal body -->
                                                    <span>Etiqueta tus recetas añadiendo los tags deseados. Para obtener más informacion sobre un tag, modificar o crear uno accede a la configuracion de tu perfil o haz click <a href=\"#\">aqui</a></span>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class=\"list-group\" id=\"add_tags\">
                                            {% for tag in all_tags %}
                                                <li>
                                                    <input type=\"checkbox\" value=\"{{ tag.idTag }}\" {% if tag.idTag in recipe_tags|keys %} checked {% endif %}
                                                           style=\"width: fit-content; margin-bottom: 10px; margin-top: 10px\" name=\"add_tags[{{ tag.idTag }}][]\">
                                                    Nivel {{ tag.level }} - {{ tag.name }}
                                                </li>
                                            {% endfor %}
                                        </ul>
                                    </div>
                                    <div id=\"recipe-image-link\" class=\"col-sm-12\">
                                        <label for=\"recipe_image\">Link imagén:</label>
                                        <input type=\"text\" id=\"recipe_image\" name=\"recipe_image\" class=\"form-control\" required=\"required\" style=\"background-color: transparent\" value=\"{{ recipe.image }}\"/>
                                    </div>
                                    <div id=\"recipe-steps\" class=\"col-sm-12\" >
                                        <label for=\"recipe_description\">Receta:</label>
                                        <textarea type=\"text\" id=\"recipe_description\" name=\"recipe_description\" class=\"form-control\" required=\"required\" style=\"background-color: transparent\"> {{ recipe.description }}</textarea>
                                    </div>
                                    <input type=\"submit\" name=\"submit\" class=\"btn btn-primary\" value=\"Guardar Cambios\"/>
                                </div>
                            </div>
                            <div class=\"col-sm-5\">
                                <div id=\"recipe-content\">
                                    <div id=\"recipe-delete-ingredients\">
                                        <strong>Ingredientes:</strong>
                                        <br/><br/>
                                        <ul class=\"list-group\" id=\"delete_ingredients\">
                                            {% for recipe_ingredient in recipe_ingredients %}
                                                <li>
                                                    <input type=\"checkbox\" value=\"{{ recipe_ingredient.idIngredient }}\" style=\"width: fit-content; margin-bottom: 10px; margin-top: 10px\" name=\"delete_ingredients[{{ recipe_ingredient.idIngredient }}][]\">
                                                    {{ recipe_ingredient.name }}
                                                </li>
                                            {% endfor %}
                                        </ul>
                                        <input type=\"submit\" name=\"submit\" class=\"btn btn-primary\" value=\"Borrar Ingredientes Seleccionados\"/>
                                    </div>
                                    <div id=\"recipe-add-ingredients\">
                                        <strong>Ingredientes:</strong>
                                        <br/><br/>
                                        <ul class=\"list-group\" id=\"add_ingredients\">
                                            {% for ingredient in all_ingredients %}
                                                <li>
                                                    <input type=\"checkbox\" value=\"{{ ingredient.idIngredient }}\" style=\"width: fit-content; margin-bottom: 10px; margin-top: 10px\" name=\"add_ingredients[{{ ingredient.idIngredient }}][]\">
                                                    {{ ingredient.name }}
                                                </li>
                                            {% endfor %}
                                        </ul>
                                        <input type=\"submit\" name=\"submit\" class=\"btn btn-primary\" value=\"Añadir Ingredientes Seleccionados\"/>
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
", "@Nutritionist/nutritionist-edit-recipe.html.twig", "/shared/httpd/nutrik/src/NutritionistBundle/Resources/views/nutritionist-edit-recipe.html.twig");
    }
}
