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

/* @Customer/recipes.html.twig */
class __TwigTemplate_dd83441250aad273f9d83fd0daf663af6003d2bc2a554cf1d03599b4417ff812 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Customer/recipes.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/customerpages.css"), "html", null, true);
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
        $this->loadTemplate("header.html.twig", "@Customer/recipes.html.twig", 11)->display($context);
        // line 12
        echo "    </section>
    <section id=\"customer-header\">
        ";
        // line 14
        $this->loadTemplate("customerheader.html.twig", "@Customer/recipes.html.twig", 14)->display($context);
        // line 15
        echo "    </section>
    <section id=\"recipes\">
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "flashbag", [], "method"), "get", [0 => "recipesKOStatus"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 18
            echo "            <div class=\"row\" style=\"width: 92%; margin-left: 4%; margin-top: 10px; margin-bottom: -10px;\">
                <div class=\"alert alert-danger\" role=\"alert\" style=\"margin-bottom: 0\">
                    ";
            // line 20
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "        <div class=\"container\">
            <form class=\"form\" action=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("customer_recipes", ["id_recipe" => ($context["id_recipe"] ?? $this->getContext($context, "id_recipe"))]), "html", null, true);
        echo "\" method=\"post\">
                <div class=\"col-sm-12\">
                    <nav class=\"navbar navbar-light bg-light\">
                        <div class=\"container-fluid\">
                            <input class=\"form-control me-2\" type=\"search\" placeholder=\"Buscar\" aria-label=\"Search\" name=\"recipe_search\">
                            <button class=\"btn btn-outline-success\" type=\"submit\">Buscar</button>
                        </div>
                    </nav>
                    <div class=\"container-fluid\">
                        ";
        // line 34
        if ((($context["recipe"] ?? $this->getContext($context, "recipe")) != false)) {
            // line 35
            echo "                            <div id=\"recipes-content\">
                                <div class=\"col-sm-8\">
                                    <div id=\"recipe-content\">
                                        <div id=\"recipe-title\" class=\"col-sm-12\">
                                            <strong style=\"font-size: 22px;\">";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute(($context["recipe"] ?? $this->getContext($context, "recipe")), "name", []), "html", null, true);
            echo "</strong>
                                        </div>
                                        <div id=\"recipe-nutritional-info\" class=\"col-sm-6\">
                                            <h3>Información nutricional</h3>
                                            <p><strong>Carbohidratos:</strong><span> ";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute(($context["nutritional_info"] ?? $this->getContext($context, "nutritional_info")), "carbs", [], "array"), "html", null, true);
            echo " gramos / 100 gramos</span></p>
                                            <p><strong>Grasas:</strong><span> ";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute(($context["nutritional_info"] ?? $this->getContext($context, "nutritional_info")), "fats", [], "array"), "html", null, true);
            echo " gramos / 100 gramos</span></p>
                                            <p><strong>Proteinas:</strong><span> ";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute(($context["nutritional_info"] ?? $this->getContext($context, "nutritional_info")), "protein", [], "array"), "html", null, true);
            echo " gramos / 100 gramos</span></p>
                                        </div>
                                        <div id=\"recipe-images\" class=\"col-sm-6\">
                                            <img src=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute(($context["recipe"] ?? $this->getContext($context, "recipe")), "image", [])), "html", null, true);
            echo "\">
                                        </div>
                                        <div id=\"recipe-steps\" class=\"col-sm-12\">
                                            ";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute(($context["recipe"] ?? $this->getContext($context, "recipe")), "description", []), "html", null, true);
            echo "
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-sm-4\">
                                    <div id=\"recipe-content\">
                                        <div id=\"recipe-ingredients\">
                                            <strong style=\"font-size: 22px;\">Ingredientes</strong>
                                            <br/><br/>
                                            <ul class=\"list-group\">
                                                ";
            // line 61
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["recipe_ingredients"] ?? $this->getContext($context, "recipe_ingredients")));
            foreach ($context['_seq'] as $context["_key"] => $context["recipe_ingredient"]) {
                // line 62
                echo "                                                    <li>
                                                        ";
                // line 63
                echo twig_escape_filter($this->env, $this->getAttribute($context["recipe_ingredient"], "name", []), "html", null, true);
                echo "
                                                    </li>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recipe_ingredient'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        ";
        } else {
            // line 72
            echo "                            <div id=\"recipes-content\" style=\"overflow-y: auto\">
                                ";
            // line 73
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["recipes"] ?? $this->getContext($context, "recipes")));
            foreach ($context['_seq'] as $context["_key"] => $context["recipe_object"]) {
                // line 74
                echo "                                    <div class=\"recipe\">
                                        <div class=\"col-sm-11 recipe-name\">
                                            ";
                // line 76
                if (twig_in_filter($this->getAttribute($context["recipe_object"], "idRecipe", []), twig_get_array_keys_filter(($context["recipes_tags"] ?? $this->getContext($context, "recipes_tags"))))) {
                    // line 77
                    echo "                                                <span style=\"font-size: 20px\">
                                                    ";
                    // line 78
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["recipes_tags"] ?? $this->getContext($context, "recipes_tags")), $this->getAttribute($context["recipe_object"], "idRecipe", []), [], "array"));
                    foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                        // line 79
                        echo "                                                        ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "name", []), "html", null, true);
                        echo " <span style=\"color: #00766c\">></span>
                                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 81
                    echo "                                                </span>
                                            ";
                }
                // line 83
                echo "                                            <a style=\"font-size: 22px; color: #00766c\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("customer_recipes", ["id_recipe" => $this->getAttribute($context["recipe_object"], "idRecipe", [])]), "html", null, true);
                echo "\">
                                                ";
                // line 84
                echo twig_escape_filter($this->env, $this->getAttribute($context["recipe_object"], "name", []), "html", null, true);
                echo "
                                            </a>
                                        </div>
                                        <div class=\"col-sm-1 recipe-actions\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-search\" viewBox=\"0 0 16 16\"
                                                onclick=\"redirectTo('recipes','/'+";
                // line 89
                echo twig_escape_filter($this->env, $this->getAttribute($context["recipe_object"], "idRecipe", []), "html", null, true);
                echo ")\">
                                                <path d=\"M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z\"/>
                                            </svg>
                                        </div>
                                    </div>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recipe_object'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 95
            echo "                            </div>
                        ";
        }
        // line 97
        echo "                    </div>
                </div>
            </form>
        </div>
    </section>
    ";
        // line 102
        $this->loadTemplate("footer.html.twig", "@Customer/recipes.html.twig", 102)->display($context);
        // line 103
        echo "    </html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Customer/recipes.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  251 => 103,  249 => 102,  242 => 97,  238 => 95,  226 => 89,  218 => 84,  213 => 83,  209 => 81,  200 => 79,  196 => 78,  193 => 77,  191 => 76,  187 => 74,  183 => 73,  180 => 72,  172 => 66,  163 => 63,  160 => 62,  156 => 61,  143 => 51,  137 => 48,  131 => 45,  127 => 44,  123 => 43,  116 => 39,  110 => 35,  108 => 34,  96 => 25,  93 => 24,  83 => 20,  79 => 18,  75 => 17,  71 => 15,  69 => 14,  65 => 12,  63 => 11,  57 => 8,  52 => 6,  46 => 2,  34 => 1,);
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
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/framework/css/customerpages.css') }}\" />
        <!-- Footer stylesheet-->
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/framework/css/footer.css') }}\" />
    </header>
    <section id=\"default-header\">
        {% include 'header.html.twig' %}
    </section>
    <section id=\"customer-header\">
        {% include 'customerheader.html.twig' %}
    </section>
    <section id=\"recipes\">
        {% for message in  app.session.flashbag().get('recipesKOStatus') %}
            <div class=\"row\" style=\"width: 92%; margin-left: 4%; margin-top: 10px; margin-bottom: -10px;\">
                <div class=\"alert alert-danger\" role=\"alert\" style=\"margin-bottom: 0\">
                    {{ message }}
                </div>
            </div>
        {% endfor %}
        <div class=\"container\">
            <form class=\"form\" action=\"{{ path(\"customer_recipes\", {\"id_recipe\":id_recipe}) }}\" method=\"post\">
                <div class=\"col-sm-12\">
                    <nav class=\"navbar navbar-light bg-light\">
                        <div class=\"container-fluid\">
                            <input class=\"form-control me-2\" type=\"search\" placeholder=\"Buscar\" aria-label=\"Search\" name=\"recipe_search\">
                            <button class=\"btn btn-outline-success\" type=\"submit\">Buscar</button>
                        </div>
                    </nav>
                    <div class=\"container-fluid\">
                        {% if recipe != false%}
                            <div id=\"recipes-content\">
                                <div class=\"col-sm-8\">
                                    <div id=\"recipe-content\">
                                        <div id=\"recipe-title\" class=\"col-sm-12\">
                                            <strong style=\"font-size: 22px;\">{{ recipe.name }}</strong>
                                        </div>
                                        <div id=\"recipe-nutritional-info\" class=\"col-sm-6\">
                                            <h3>Información nutricional</h3>
                                            <p><strong>Carbohidratos:</strong><span> {{ nutritional_info['carbs'] }} gramos / 100 gramos</span></p>
                                            <p><strong>Grasas:</strong><span> {{ nutritional_info['fats'] }} gramos / 100 gramos</span></p>
                                            <p><strong>Proteinas:</strong><span> {{ nutritional_info['protein']}} gramos / 100 gramos</span></p>
                                        </div>
                                        <div id=\"recipe-images\" class=\"col-sm-6\">
                                            <img src=\"{{ asset(recipe.image) }}\">
                                        </div>
                                        <div id=\"recipe-steps\" class=\"col-sm-12\">
                                            {{ recipe.description }}
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-sm-4\">
                                    <div id=\"recipe-content\">
                                        <div id=\"recipe-ingredients\">
                                            <strong style=\"font-size: 22px;\">Ingredientes</strong>
                                            <br/><br/>
                                            <ul class=\"list-group\">
                                                {% for recipe_ingredient in recipe_ingredients %}
                                                    <li>
                                                        {{ recipe_ingredient.name }}
                                                    </li>
                                                {% endfor %}
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        {% else %}
                            <div id=\"recipes-content\" style=\"overflow-y: auto\">
                                {% for recipe_object in recipes %}
                                    <div class=\"recipe\">
                                        <div class=\"col-sm-11 recipe-name\">
                                            {% if recipe_object.idRecipe in recipes_tags|keys %}
                                                <span style=\"font-size: 20px\">
                                                    {% for tag in recipes_tags[recipe_object.idRecipe] %}
                                                        {{ tag.name }} <span style=\"color: #00766c\">></span>
                                                    {% endfor %}
                                                </span>
                                            {% endif %}
                                            <a style=\"font-size: 22px; color: #00766c\" href=\"{{ path(\"customer_recipes\", {\"id_recipe\":recipe_object.idRecipe}) }}\">
                                                {{ recipe_object.name }}
                                            </a>
                                        </div>
                                        <div class=\"col-sm-1 recipe-actions\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-search\" viewBox=\"0 0 16 16\"
                                                onclick=\"redirectTo('recipes','/'+{{ recipe_object.idRecipe }})\">
                                                <path d=\"M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z\"/>
                                            </svg>
                                        </div>
                                    </div>
                                {% endfor %}
                            </div>
                        {% endif %}
                    </div>
                </div>
            </form>
        </div>
    </section>
    {% include 'footer.html.twig' %}
    </html>
{% endblock %}
", "@Customer/recipes.html.twig", "/shared/httpd/nutrik/src/CustomerBundle/Resources/views/recipes.html.twig");
    }
}
