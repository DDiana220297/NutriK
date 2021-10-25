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

/* @Nutritionist/nutritionist-add-event.html.twig */
class __TwigTemplate_b17063c9bb2f82b15f60bc714c7c7d1addfff7e08e7408689c2535b52c8e8c5d extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Nutritionist/nutritionist-add-event.html.twig"));

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
        $this->loadTemplate("header.html.twig", "@Nutritionist/nutritionist-add-event.html.twig", 9)->display($context);
        // line 10
        echo "    </section>
    <section id=\"nutritionist-add-event\">
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "flashbag", [], "method"), "get", [0 => "addEventKOStatus"], "method"));
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
            <div id=\"add-event-block\">
                <form class=\"form\" action=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nutritionist_add_event");
        echo "\" method=\"post\">
                    <div class=\"col-sm-4\">
                        <label for=\"event_date\">Fecha del evento:</label>
                        <input type=\"date\" id=\"event_date\" name=\"event_date\" class=\"form-control\" required=\"required\"/>
                        <label for=\"event_date\">Hora del evento:</label>
                        <input type=\"time\" id=\"event_hour\" name=\"event_hour\" class=\"form-control\" required=\"required\"/>
                        <label for=\"event_duration\">Duración del evento (min):</label>
                        <input type=\"number\" id=\"event_duration\" name=\"event_duration\" class=\"form-control\" required=\"required\" value=\"60\"/>
                        <label for=\"event_frecuency\">Frecuencia del evento:</label>
                        <br/>
                        <select name=\"event_frecuency\" id=\"event_frecuency\">
                            <option value=\"puntual\">Puntual</option>
                            <option value=\"semanal\">Semanal</option>
                            <option value=\"cada_dos_semanas\">Cada dos semanas</option>
                            <option value=\"mensual\">Mensual</option>
                        </select>
                        <label for=\"event_category\">Categoría:</label>
                        <br/>
                        <select name=\"event_category\" id=\"event_category\">
                            ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 41
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
        // line 43
        echo "                        </select>
                        <br/>
                        <label for=\"event_tag\">Tag:</label>
                        <br/>
                        <select name=\"event_tag\" id=\"event_tag\">
                            ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tags"] ?? $this->getContext($context, "tags")));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 49
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "idTag", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "name", []), "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "                        </select>
                        <div class=\"save-button-item\">
                            <input class=\"btn save-button\" type=\"submit\" value=\"Guardar\"/>
                        </div>
                    </div>
                    <div class=\"col-sm-7\">
                        <label for=\"event_title\">Título:</label>
                        <input type=\"text\" id=\"event_title\" name=\"event_title\" class=\"form-control\" required=\"required\"/>
                        <label for=\"event_link\">Enlace del evento:</label>
                        <input type=\"text\" id=\"event_link\" name=\"event_link\" class=\"form-control\" required=\"required\">
                        <label for=\"event_description\">Descripción:</label>
                        <br/>
                        <textarea type=\"text\" id=\"event_description\" name=\"event_description\" class=\"form-control\" required=\"required\"></textarea>
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
        return "@Nutritionist/nutritionist-add-event.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  145 => 51,  134 => 49,  130 => 48,  123 => 43,  112 => 41,  108 => 40,  86 => 21,  82 => 19,  72 => 15,  68 => 13,  64 => 12,  60 => 10,  58 => 9,  52 => 6,  46 => 2,  34 => 1,);
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
    <section id=\"nutritionist-add-event\">
        {% for message in  app.session.flashbag().get('addEventKOStatus') %}
            <div class=\"row\" style=\"width: 93.5%; margin-left: 3.3%; margin-top: 10px; margin-bottom: -10px;\">
                <div class=\"alert alert-danger\" role=\"alert\" style=\"margin-bottom: 0\">
                    {{ message }}
                </div>
            </div>
        {% endfor %}
        <div class=\"container\">
            <div id=\"add-event-block\">
                <form class=\"form\" action=\"{{ path(\"nutritionist_add_event\") }}\" method=\"post\">
                    <div class=\"col-sm-4\">
                        <label for=\"event_date\">Fecha del evento:</label>
                        <input type=\"date\" id=\"event_date\" name=\"event_date\" class=\"form-control\" required=\"required\"/>
                        <label for=\"event_date\">Hora del evento:</label>
                        <input type=\"time\" id=\"event_hour\" name=\"event_hour\" class=\"form-control\" required=\"required\"/>
                        <label for=\"event_duration\">Duración del evento (min):</label>
                        <input type=\"number\" id=\"event_duration\" name=\"event_duration\" class=\"form-control\" required=\"required\" value=\"60\"/>
                        <label for=\"event_frecuency\">Frecuencia del evento:</label>
                        <br/>
                        <select name=\"event_frecuency\" id=\"event_frecuency\">
                            <option value=\"puntual\">Puntual</option>
                            <option value=\"semanal\">Semanal</option>
                            <option value=\"cada_dos_semanas\">Cada dos semanas</option>
                            <option value=\"mensual\">Mensual</option>
                        </select>
                        <label for=\"event_category\">Categoría:</label>
                        <br/>
                        <select name=\"event_category\" id=\"event_category\">
                            {% for category in categories %}
                                <option value=\"{{ category.idCategory }}\">{{ category.name }}</option>
                            {% endfor %}
                        </select>
                        <br/>
                        <label for=\"event_tag\">Tag:</label>
                        <br/>
                        <select name=\"event_tag\" id=\"event_tag\">
                            {% for tag in tags %}
                                <option value=\"{{ tag.idTag }}\">{{ tag.name }}</option>
                            {% endfor %}
                        </select>
                        <div class=\"save-button-item\">
                            <input class=\"btn save-button\" type=\"submit\" value=\"Guardar\"/>
                        </div>
                    </div>
                    <div class=\"col-sm-7\">
                        <label for=\"event_title\">Título:</label>
                        <input type=\"text\" id=\"event_title\" name=\"event_title\" class=\"form-control\" required=\"required\"/>
                        <label for=\"event_link\">Enlace del evento:</label>
                        <input type=\"text\" id=\"event_link\" name=\"event_link\" class=\"form-control\" required=\"required\">
                        <label for=\"event_description\">Descripción:</label>
                        <br/>
                        <textarea type=\"text\" id=\"event_description\" name=\"event_description\" class=\"form-control\" required=\"required\"></textarea>
                    </div>
                </form>
            </div>
        </div>
    </section>
    </html>
{% endblock %}
", "@Nutritionist/nutritionist-add-event.html.twig", "/shared/httpd/nutrik/src/NutritionistBundle/Resources/views/nutritionist-add-event.html.twig");
    }
}
