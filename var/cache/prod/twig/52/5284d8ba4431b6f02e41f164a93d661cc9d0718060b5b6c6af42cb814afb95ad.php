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

/* @Nutritionist/nutritionist-edit-event.html.twig */
class __TwigTemplate_3bb114c1d54dc1fa8bca612e82ebd43dcf94ce4e9c1cecf7e3359a7bf028f881 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Nutritionist/nutritionist-edit-event.html.twig"));

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
        $this->loadTemplate("header.html.twig", "@Nutritionist/nutritionist-edit-event.html.twig", 9)->display($context);
        // line 10
        echo "    </section>
    <section id=\"nutritionist-edit-event\">
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "flashbag", [], "method"), "get", [0 => "editEventKOStatus"], "method"));
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
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "flashbag", [], "method"), "get", [0 => "editEventOKStatus"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 20
            echo "            <div class=\"row\" style=\"width: 93.5%; margin-left: 3.3%; margin-top: 10px; margin-bottom: -10px;\">
                <div class=\"alert alert-success\" role=\"alert\" style=\"margin-bottom: 0\">
                    ";
            // line 22
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "        <div class=\"container\">
            <div id=\"edit-event-block\">
                <form class=\"form\" action=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nutritionist_edit_event", ["id_event" => $this->getAttribute(($context["event"] ?? $this->getContext($context, "event")), "idEvent", [])]), "html", null, true);
        echo "\" method=\"post\">
                    <div class=\"col-sm-4\">
                        <label for=\"event_date\">Fecha del evento:</label>
                        <input type=\"date\" id=\"event_date\" name=\"event_date\" class=\"form-control\" required=\"required\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["event"] ?? $this->getContext($context, "event")), "date", []), "Y-m-d"), "html", null, true);
        echo "\"/>
                        <label for=\"event_date\">Hora del evento:</label>
                        <input type=\"time\" id=\"event_hour\" name=\"event_hour\" class=\"form-control\" required=\"required\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["event"] ?? $this->getContext($context, "event")), "date", []), "H:i:s"), "html", null, true);
        echo "\"/>
                        <label for=\"event_duration\">Duración del evento (min):</label>
                        <input type=\"number\" id=\"event_duration\" name=\"event_duration\" class=\"form-control\" required=\"required\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute(($context["event"] ?? $this->getContext($context, "event")), "duration", []), "html", null, true);
        echo "\"/>
                        <label for=\"event_frecuency\">Frecuencia del evento:</label>
                        <br/>
                        <select name=\"event_frecuency\" id=\"event_frecuency\">
                            <option value=\"puntual\" ";
        // line 39
        if (($this->getAttribute(($context["event"] ?? $this->getContext($context, "event")), "frecuency", []) == "puntual")) {
            echo " selected ";
        }
        echo ">Puntual</option>
                            <option value=\"semanal\" ";
        // line 40
        if (($this->getAttribute(($context["event"] ?? $this->getContext($context, "event")), "frecuency", []) == "semanal")) {
            echo " selected ";
        }
        echo ">Semanal</option>
                            <option value=\"cada_dos_semanas\" ";
        // line 41
        if (($this->getAttribute(($context["event"] ?? $this->getContext($context, "event")), "frecuency", []) == "cada_dos_semanas")) {
            echo " selected ";
        }
        echo ">Cada dos semanas</option>
                            <option value=\"mensual\" ";
        // line 42
        if (($this->getAttribute(($context["event"] ?? $this->getContext($context, "event")), "frecuency", []) == "mensual")) {
            echo " selected ";
        }
        echo ">Mensual</option>
                        </select>
                        <label for=\"event_category\">Categoría:</label>
                        <br/>
                        <select name=\"event_category\" id=\"event_category\">
                            ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 48
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "idCategory", []), "html", null, true);
            echo "\" ";
            if (($this->getAttribute(($context["event"] ?? $this->getContext($context, "event")), "idCategory", []) == $this->getAttribute($context["category"], "idCategory", []))) {
                echo " selected ";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", []), "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "                        </select>
                        <br/>
                        <label>Tags:</label>
                        <br/>
                        <ul class=\"list-group\" id=\"event_tags\">
                            ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tags"] ?? $this->getContext($context, "tags")));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 56
            echo "                                <li>
                                    <input type=\"checkbox\" value=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "idTag", []), "html", null, true);
            echo "\" ";
            if (twig_in_filter($this->getAttribute($context["tag"], "idTag", []), twig_get_array_keys_filter(($context["event_tags_keys"] ?? $this->getContext($context, "event_tags_keys"))))) {
                echo " checked ";
            }
            // line 58
            echo "                                           style=\"width: fit-content; margin-bottom: 10px; margin-top: 10px\" name=\"add_tags[";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "idTag", []), "html", null, true);
            echo "][]\">
                                    Nivel ";
            // line 59
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
        // line 62
        echo "                        </ul>
                        <div class=\"save-button-item\">
                            <input class=\"btn save-button\" type=\"submit\" value=\"Guardar\"/>
                        </div>
                    </div>
                    <div class=\"col-sm-7\">
                        <label for=\"event_title\">Título:</label>
                        <input type=\"text\" id=\"event_title\" name=\"event_title\" class=\"form-control\" required=\"required\" value=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute(($context["event"] ?? $this->getContext($context, "event")), "title", []), "html", null, true);
        echo "\"/>
                        <label for=\"event_link\">Enlace del evento:</label>
                        <input type=\"text\" id=\"event_link\" name=\"event_link\" class=\"form-control\" required=\"required\" value=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute(($context["event"] ?? $this->getContext($context, "event")), "eventLink", []), "html", null, true);
        echo "\">
                        <label for=\"event_description\">Descripción:</label>
                        <br/>
                        <textarea type=\"text\" id=\"event_description\" name=\"event_description\" class=\"form-control\" required=\"required\">";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute(($context["event"] ?? $this->getContext($context, "event")), "description", []), "html", null, true);
        echo "</textarea>
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
        return "@Nutritionist/nutritionist-edit-event.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  231 => 74,  225 => 71,  220 => 69,  211 => 62,  200 => 59,  195 => 58,  189 => 57,  186 => 56,  182 => 55,  175 => 50,  160 => 48,  156 => 47,  146 => 42,  140 => 41,  134 => 40,  128 => 39,  121 => 35,  116 => 33,  111 => 31,  105 => 28,  101 => 26,  91 => 22,  87 => 20,  82 => 19,  72 => 15,  68 => 13,  64 => 12,  60 => 10,  58 => 9,  52 => 6,  46 => 2,  34 => 1,);
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
    <section id=\"nutritionist-edit-event\">
        {% for message in  app.session.flashbag().get('editEventKOStatus') %}
            <div class=\"row\" style=\"width: 93.5%; margin-left: 3.3%; margin-top: 10px; margin-bottom: -10px;\">
                <div class=\"alert alert-danger\" role=\"alert\" style=\"margin-bottom: 0\">
                    {{ message }}
                </div>
            </div>
        {% endfor %}
        {% for message in  app.session.flashbag().get('editEventOKStatus') %}
            <div class=\"row\" style=\"width: 93.5%; margin-left: 3.3%; margin-top: 10px; margin-bottom: -10px;\">
                <div class=\"alert alert-success\" role=\"alert\" style=\"margin-bottom: 0\">
                    {{ message }}
                </div>
            </div>
        {% endfor %}
        <div class=\"container\">
            <div id=\"edit-event-block\">
                <form class=\"form\" action=\"{{ path(\"nutritionist_edit_event\",{'id_event':event.idEvent}) }}\" method=\"post\">
                    <div class=\"col-sm-4\">
                        <label for=\"event_date\">Fecha del evento:</label>
                        <input type=\"date\" id=\"event_date\" name=\"event_date\" class=\"form-control\" required=\"required\" value=\"{{ event.date|date('Y-m-d') }}\"/>
                        <label for=\"event_date\">Hora del evento:</label>
                        <input type=\"time\" id=\"event_hour\" name=\"event_hour\" class=\"form-control\" required=\"required\" value=\"{{ event.date|date('H:i:s') }}\"/>
                        <label for=\"event_duration\">Duración del evento (min):</label>
                        <input type=\"number\" id=\"event_duration\" name=\"event_duration\" class=\"form-control\" required=\"required\" value=\"{{ event.duration }}\"/>
                        <label for=\"event_frecuency\">Frecuencia del evento:</label>
                        <br/>
                        <select name=\"event_frecuency\" id=\"event_frecuency\">
                            <option value=\"puntual\" {% if event.frecuency == \"puntual\" %} selected {% endif %}>Puntual</option>
                            <option value=\"semanal\" {% if event.frecuency == \"semanal\" %} selected {% endif %}>Semanal</option>
                            <option value=\"cada_dos_semanas\" {% if event.frecuency == \"cada_dos_semanas\" %} selected {% endif %}>Cada dos semanas</option>
                            <option value=\"mensual\" {% if event.frecuency == \"mensual\" %} selected {% endif %}>Mensual</option>
                        </select>
                        <label for=\"event_category\">Categoría:</label>
                        <br/>
                        <select name=\"event_category\" id=\"event_category\">
                            {% for category in categories %}
                                <option value=\"{{ category.idCategory }}\" {% if event.idCategory == category.idCategory %} selected {% endif %}>{{ category.name }}</option>
                            {% endfor %}
                        </select>
                        <br/>
                        <label>Tags:</label>
                        <br/>
                        <ul class=\"list-group\" id=\"event_tags\">
                            {% for tag in tags %}
                                <li>
                                    <input type=\"checkbox\" value=\"{{ tag.idTag }}\" {% if tag.idTag in event_tags_keys|keys %} checked {% endif %}
                                           style=\"width: fit-content; margin-bottom: 10px; margin-top: 10px\" name=\"add_tags[{{ tag.idTag }}][]\">
                                    Nivel {{ tag.level }} - {{ tag.name }}
                                </li>
                            {% endfor %}
                        </ul>
                        <div class=\"save-button-item\">
                            <input class=\"btn save-button\" type=\"submit\" value=\"Guardar\"/>
                        </div>
                    </div>
                    <div class=\"col-sm-7\">
                        <label for=\"event_title\">Título:</label>
                        <input type=\"text\" id=\"event_title\" name=\"event_title\" class=\"form-control\" required=\"required\" value=\"{{ event.title }}\"/>
                        <label for=\"event_link\">Enlace del evento:</label>
                        <input type=\"text\" id=\"event_link\" name=\"event_link\" class=\"form-control\" required=\"required\" value=\"{{ event.eventLink }}\">
                        <label for=\"event_description\">Descripción:</label>
                        <br/>
                        <textarea type=\"text\" id=\"event_description\" name=\"event_description\" class=\"form-control\" required=\"required\">{{ event.description }}</textarea>
                    </div>
                </form>
            </div>
        </div>
    </section>
    </html>
{% endblock %}
", "@Nutritionist/nutritionist-edit-event.html.twig", "/shared/httpd/nutrik/src/NutritionistBundle/Resources/views/nutritionist-edit-event.html.twig");
    }
}
