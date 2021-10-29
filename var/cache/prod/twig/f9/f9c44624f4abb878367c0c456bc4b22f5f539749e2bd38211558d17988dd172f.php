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

/* @Nutritionist/nutritionist-diary.html.twig */
class __TwigTemplate_ad5ea11df2e5cbb8f9da7a038693df6bafdd2bd9c8e73ab97ae1af8788b0d48a extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Nutritionist/nutritionist-diary.html.twig"));

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
        $this->loadTemplate("header.html.twig", "@Nutritionist/nutritionist-diary.html.twig", 9)->display($context);
        // line 10
        echo "    </section>
    <section id=\"nutritionist-diary\">
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "flashbag", [], "method"), "get", [0 => "nutritionistDiaryKOStatus"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 13
            echo "        <div class=\"row\" style=\"width: 93.5%; margin-left: 3.3%; margin-top: 10px; margin-bottom: -10px;\">
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
                <div id=\"diary-block\">
                    <form class=\"form\" action=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nutritionist_diary");
        echo "\" method=\"post\">
                        <div class=\"col-sm-6\">
                            <h3>
                                ";
        // line 25
        if ((($context["today_datetime"] ?? $this->getContext($context, "today_datetime")) != false)) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["today_datetime"] ?? $this->getContext($context, "today_datetime")), "l", "Europe/Paris"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["today_datetime"] ?? $this->getContext($context, "today_datetime")), "d", "Europe/Paris"), "html", null, true);
            echo " de ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["today_datetime"] ?? $this->getContext($context, "today_datetime")), "F", "Europe/Paris"), "html", null, true);
            echo "
                                ";
        } else {
            // line 27
            echo "                                ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "l", "Europe/Paris"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d", "Europe/Paris"), "html", null, true);
            echo " de ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "F", "Europe/Paris"), "html", null, true);
            echo "
                                ";
        }
        // line 29
        echo "                            </h3>
                            <div id=\"todays-tasks\">
                                <h3>Tareas para hoy:</h3>
                                <textarea type=\"text\" id=\"todays_tasks\" name=\"todays_tasks\" required=\"required\">";
        // line 32
        if ((($context["diaryPage"] ?? $this->getContext($context, "diaryPage")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["diaryPage"] ?? $this->getContext($context, "diaryPage")), "tasks", []), "html", null, true);
        }
        echo "</textarea>
                            </div>
                            <div class=\"save-button-item\" style=\"width: 100%;\">
                                <input class=\"btn save-button\" type=\"submit\" name=\"submit\" value=\"Guardar\"/>
                            </div>
                        </div>
                        <div class=\"col-sm-6\" style=\"padding: 0px 20px\">
                            <input type=\"date\" id=\"date-filter\" name=\"date_filter\" class=\"form-control\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["today_datetime"] ?? $this->getContext($context, "today_datetime")), "Y-m-d", "Europe/Paris"), "html", null, true);
        echo "\"/>
                            <input class=\"btn btn-outline-success\" type=\"submit\" name=\"submit\" value=\"Buscar\"/>
                            <div id=\"todays-events\">
                                <h3>Eventos de hoy:</h3>
                                <textarea type=\"text\" id=\"todays_events\" name=\"todays_events\" required=\"required\">";
        // line 43
        if ((($context["diaryPage"] ?? $this->getContext($context, "diaryPage")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["diaryPage"] ?? $this->getContext($context, "diaryPage")), "events", []), "html", null, true);
        }
        echo "</textarea>
                            </div>
                            <div id=\"todays-memos\">
                                <h3 style=\"color: white\">Recordatorios y notas:</h3>
                                <textarea type=\"text\" id=\"todays_memos\" name=\"todays_memos\" required=\"required\">";
        // line 47
        if ((($context["diaryPage"] ?? $this->getContext($context, "diaryPage")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["diaryPage"] ?? $this->getContext($context, "diaryPage")), "memosAndNotes", []), "html", null, true);
        }
        echo "</textarea>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    </html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Nutritionist/nutritionist-diary.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  146 => 47,  137 => 43,  130 => 39,  118 => 32,  113 => 29,  103 => 27,  93 => 25,  87 => 22,  82 => 19,  72 => 15,  68 => 13,  64 => 12,  60 => 10,  58 => 9,  52 => 6,  46 => 2,  34 => 1,);
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
    <section id=\"nutritionist-diary\">
        {% for message in  app.session.flashbag().get('nutritionistDiaryKOStatus') %}
        <div class=\"row\" style=\"width: 93.5%; margin-left: 3.3%; margin-top: 10px; margin-bottom: -10px;\">
            <div class=\"alert alert-danger\" role=\"alert\" style=\"margin-bottom: 0\">
                {{ message }}
            </div>
        </div>
        {% endfor %}
        <div class=\"container\">
            <div class=\"col-sm-12\">
                <div id=\"diary-block\">
                    <form class=\"form\" action=\"{{ path(\"nutritionist_diary\") }}\" method=\"post\">
                        <div class=\"col-sm-6\">
                            <h3>
                                {% if today_datetime != false %}{{ today_datetime|date('l', \"Europe/Paris\") }} - {{ today_datetime|date('d', \"Europe/Paris\") }} de {{ today_datetime|date('F', \"Europe/Paris\") }}
                                {% else %}
                                {{ 'now'|date('l', \"Europe/Paris\") }} - {{ 'now'|date('d', \"Europe/Paris\") }} de {{ 'now'|date('F', \"Europe/Paris\") }}
                                {% endif %}
                            </h3>
                            <div id=\"todays-tasks\">
                                <h3>Tareas para hoy:</h3>
                                <textarea type=\"text\" id=\"todays_tasks\" name=\"todays_tasks\" required=\"required\">{% if diaryPage != false %}{{ diaryPage.tasks }}{% endif %}</textarea>
                            </div>
                            <div class=\"save-button-item\" style=\"width: 100%;\">
                                <input class=\"btn save-button\" type=\"submit\" name=\"submit\" value=\"Guardar\"/>
                            </div>
                        </div>
                        <div class=\"col-sm-6\" style=\"padding: 0px 20px\">
                            <input type=\"date\" id=\"date-filter\" name=\"date_filter\" class=\"form-control\" value=\"{{ today_datetime|date('Y-m-d', \"Europe/Paris\") }}\"/>
                            <input class=\"btn btn-outline-success\" type=\"submit\" name=\"submit\" value=\"Buscar\"/>
                            <div id=\"todays-events\">
                                <h3>Eventos de hoy:</h3>
                                <textarea type=\"text\" id=\"todays_events\" name=\"todays_events\" required=\"required\">{% if diaryPage != false %}{{ diaryPage.events }}{% endif %}</textarea>
                            </div>
                            <div id=\"todays-memos\">
                                <h3 style=\"color: white\">Recordatorios y notas:</h3>
                                <textarea type=\"text\" id=\"todays_memos\" name=\"todays_memos\" required=\"required\">{% if diaryPage != false %}{{ diaryPage.memosAndNotes }}{% endif %}</textarea>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    </html>
{% endblock %}
", "@Nutritionist/nutritionist-diary.html.twig", "/shared/httpd/nutrik/src/NutritionistBundle/Resources/views/nutritionist-diary.html.twig");
    }
}
