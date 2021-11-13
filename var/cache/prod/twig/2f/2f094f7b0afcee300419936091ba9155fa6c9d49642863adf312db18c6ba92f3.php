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

/* @Nutritionist/add-didactic-content.html.twig */
class __TwigTemplate_fd3f7e021030a16096d1ea4f19c2723d8fcdf84ac907ad6b05821944692a0bc2 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Nutritionist/add-didactic-content.html.twig"));

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
        $this->loadTemplate("header.html.twig", "@Nutritionist/add-didactic-content.html.twig", 9)->display($context);
        // line 10
        echo "    </section>
    <section id=\"nutritionist-add-didactic-content\">
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "flashbag", [], "method"), "get", [0 => "addDidacticContentKOStatus"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 13
            echo "            <div class=\"row\" style=\"width: 93.5%; margin-left: 3.3%; margin-top: 10px; margin-bottom: -10px;\">
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
            <div id=\"add-didactic-content-block\">
                <form class=\"form\" action=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nutritionist_add_didactic_content");
        echo "\" method=\"post\">
                    <div class=\"col-sm-3\">
                        <label for=\"title\">Título:</label>
                        <input type=\"text\" id=\"title\" name=\"_title\" class=\"form-control\" required=\"required\"/>
                        <label for=\"category\">Categoría:</label>
                        <br/>
                        <select name=\"_category\" id=\"category\">
                            <option>-- Elija --</option>
                            ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 30
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "idCategory", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", []), "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "                        </select>
                        <br/>
                        <div id=\"didactic-content-tags\" class=\"col-sm-12\">
                            <strong style=\"margin-bottom: 5px\">Tags:
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-info-circle\" viewBox=\"0 0 16 16\" style=\"width: 15px; height: 15px; margin-bottom: -3px\"
                                     onclick=\"openModal('openMyInfoTagsModal')\">
                                    <path d=\"M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z\"/>
                                    <path d=\"m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z\"/>
                                </svg>
                            </strong>
                            <button style=\"display: none\" type=\"button\" class=\"btn btn-primary\" id=\"openMyInfoTagsModal\" data-toggle=\"modal\" data-target=\"#infoTagsModal\"></button>
                            <div class=\"modal fade\" id=\"infoTagsModal\">
                                <div class=\"modal-dialog\">
                                    <div class=\"modal-content\" style=\"height: 15rem;width: 50rem;padding: 40px 30px;\">
                                        <!-- Modal body -->
                                        <span>Etiqueta tus recetas añadiendo los tags deseados por nivel. Para obtener más informacion sobre un tag, modificar o crear uno accede a la configuracion de tu perfil o haz click <a href=\"#\">aqui</a></span>
                                    </div>
                                </div>
                            </div>
                            <ul class=\"list-group\" id=\"add_tags\">
                                ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tags"] ?? $this->getContext($context, "tags")));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 53
            echo "                                    <li>
                                        <input type=\"checkbox\" value=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "idTag", []), "html", null, true);
            echo "\" style=\"width: fit-content; margin-bottom: 10px; margin-top: 10px\" name=\"add_tags[";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "idTag", []), "html", null, true);
            echo "][]\">
                                        Nivel ";
            // line 55
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
        // line 58
        echo "                            </ul>
                        </div>
                        <label for=\"description\">Descripción:</label>
                        <br/>
                        <textarea type=\"text\" id=\"description\" name=\"_description\" class=\"form-control\" required=\"required\"></textarea>
                        <div class=\"save-button-item\" style=\"width: 100%;\">
                            <input class=\"btn save-button\" type=\"submit\" value=\"Guardar\"/>
                        </div>
                    </div>
                    <div class=\"col-sm-8\">
                        <label for=\"content\">Contenido:</label>
                        <textarea type=\"text\" id=\"content\" name=\"_content\" class=\"form-control\" required=\"required\"></textarea>
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
        return "@Nutritionist/add-didactic-content.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  158 => 58,  147 => 55,  141 => 54,  138 => 53,  134 => 52,  112 => 32,  101 => 30,  97 => 29,  86 => 21,  82 => 19,  72 => 15,  68 => 13,  64 => 12,  60 => 10,  58 => 9,  52 => 6,  46 => 2,  34 => 1,);
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
    <section id=\"nutritionist-add-didactic-content\">
        {% for message in  app.session.flashbag().get('addDidacticContentKOStatus') %}
            <div class=\"row\" style=\"width: 93.5%; margin-left: 3.3%; margin-top: 10px; margin-bottom: -10px;\">
                <div class=\"alert alert-danger\" role=\"alert\" style=\"margin-bottom: 0\">
                    {{ message }}
                </div>
            </div>
        {% endfor %}
        <div class=\"container\">
            <div id=\"add-didactic-content-block\">
                <form class=\"form\" action=\"{{ path(\"nutritionist_add_didactic_content\") }}\" method=\"post\">
                    <div class=\"col-sm-3\">
                        <label for=\"title\">Título:</label>
                        <input type=\"text\" id=\"title\" name=\"_title\" class=\"form-control\" required=\"required\"/>
                        <label for=\"category\">Categoría:</label>
                        <br/>
                        <select name=\"_category\" id=\"category\">
                            <option>-- Elija --</option>
                            {% for category in categories %}
                                <option value=\"{{ category.idCategory }}\">{{ category.name }}</option>
                            {% endfor %}
                        </select>
                        <br/>
                        <div id=\"didactic-content-tags\" class=\"col-sm-12\">
                            <strong style=\"margin-bottom: 5px\">Tags:
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-info-circle\" viewBox=\"0 0 16 16\" style=\"width: 15px; height: 15px; margin-bottom: -3px\"
                                     onclick=\"openModal('openMyInfoTagsModal')\">
                                    <path d=\"M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z\"/>
                                    <path d=\"m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z\"/>
                                </svg>
                            </strong>
                            <button style=\"display: none\" type=\"button\" class=\"btn btn-primary\" id=\"openMyInfoTagsModal\" data-toggle=\"modal\" data-target=\"#infoTagsModal\"></button>
                            <div class=\"modal fade\" id=\"infoTagsModal\">
                                <div class=\"modal-dialog\">
                                    <div class=\"modal-content\" style=\"height: 15rem;width: 50rem;padding: 40px 30px;\">
                                        <!-- Modal body -->
                                        <span>Etiqueta tus recetas añadiendo los tags deseados por nivel. Para obtener más informacion sobre un tag, modificar o crear uno accede a la configuracion de tu perfil o haz click <a href=\"#\">aqui</a></span>
                                    </div>
                                </div>
                            </div>
                            <ul class=\"list-group\" id=\"add_tags\">
                                {% for tag in tags %}
                                    <li>
                                        <input type=\"checkbox\" value=\"{{ tag.idTag }}\" style=\"width: fit-content; margin-bottom: 10px; margin-top: 10px\" name=\"add_tags[{{ tag.idTag }}][]\">
                                        Nivel {{ tag.level }} - {{ tag.name }}
                                    </li>
                                {% endfor %}
                            </ul>
                        </div>
                        <label for=\"description\">Descripción:</label>
                        <br/>
                        <textarea type=\"text\" id=\"description\" name=\"_description\" class=\"form-control\" required=\"required\"></textarea>
                        <div class=\"save-button-item\" style=\"width: 100%;\">
                            <input class=\"btn save-button\" type=\"submit\" value=\"Guardar\"/>
                        </div>
                    </div>
                    <div class=\"col-sm-8\">
                        <label for=\"content\">Contenido:</label>
                        <textarea type=\"text\" id=\"content\" name=\"_content\" class=\"form-control\" required=\"required\"></textarea>
                    </div>
                </form>
            </div>
        </div>
    </section>
    </html>
{% endblock %}
", "@Nutritionist/add-didactic-content.html.twig", "/shared/httpd/nutrik/src/NutritionistBundle/Resources/views/add-didactic-content.html.twig");
    }
}
