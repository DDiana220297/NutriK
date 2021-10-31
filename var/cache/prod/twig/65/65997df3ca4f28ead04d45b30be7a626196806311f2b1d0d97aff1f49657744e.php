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

/* @Customer/diary.html.twig */
class __TwigTemplate_735871fb37e10b2d8a5aebe7c781d9e39e7572e7ed17eb9b3ba2784c641e0adf extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Customer/diary.html.twig"));

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
    </header>
    <section id=\"default-header\">
        ";
        // line 9
        $this->loadTemplate("header.html.twig", "@Customer/diary.html.twig", 9)->display($context);
        // line 10
        echo "    </section>
    <section id=\"customer-header\">
        ";
        // line 12
        $this->loadTemplate("customerheader.html.twig", "@Customer/diary.html.twig", 12)->display($context);
        // line 13
        echo "    </section>
    <section id=\"customer-diary\">
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "flashbag", [], "method"), "get", [0 => "customerDiaryKOStatus"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 16
            echo "            <div class=\"row\" style=\"width: 93.5%; margin-left: 3.3%; margin-top: 10px; margin-bottom: -10px;\">
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
            <form class=\"form\" action=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("customer_diary");
        echo "\" method=\"post\" novalidate>
                <div class=\"col-sm-6\">
                    <h3>
                        ";
        // line 26
        if ((($context["today_datetime"] ?? $this->getContext($context, "today_datetime")) != false)) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["today_datetime"] ?? $this->getContext($context, "today_datetime")), "l", "Europe/Paris"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["today_datetime"] ?? $this->getContext($context, "today_datetime")), "d", "Europe/Paris"), "html", null, true);
            echo " de ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["today_datetime"] ?? $this->getContext($context, "today_datetime")), "F", "Europe/Paris"), "html", null, true);
            echo "
                        ";
        } else {
            // line 28
            echo "                            ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "l", "Europe/Paris"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d", "Europe/Paris"), "html", null, true);
            echo " de ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "F", "Europe/Paris"), "html", null, true);
            echo "
                        ";
        }
        // line 30
        echo "                    </h3>
                    <div id=\"todays-tasks\">
                        <h3>Tareas para hoy:</h3>
                        <textarea type=\"text\" id=\"todays_tasks\" name=\"todays_tasks\" required=\"required\">";
        // line 33
        if ((($context["diaryPage"] ?? $this->getContext($context, "diaryPage")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["diaryPage"] ?? $this->getContext($context, "diaryPage")), "tasks", []), "html", null, true);
        }
        echo "</textarea>
                    </div>
                    <div class=\"save-button-item\" style=\"width: 100%;\">
                        <input class=\"btn save-button\" type=\"submit\" name=\"submit\" value=\"Guardar\"/>
                    </div>
                </div>
                <div class=\"col-sm-6\" style=\"padding: 0 20px\">
                    <input type=\"date\" id=\"date-filter\" name=\"date_filter\" class=\"form-control\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["today_datetime"] ?? $this->getContext($context, "today_datetime")), "Y-m-d", "Europe/Paris"), "html", null, true);
        echo "\"/>
                    <input class=\"btn btn-outline-success\" type=\"submit\" name=\"submit\" value=\"Buscar\"/>
                    <div id=\"todays-events\">
                        <h3>Eventos de hoy:</h3>
                        <textarea type=\"text\" id=\"todays_events\" name=\"todays_events\" required=\"required\">";
        // line 44
        if ((($context["diaryPage"] ?? $this->getContext($context, "diaryPage")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["diaryPage"] ?? $this->getContext($context, "diaryPage")), "events", []), "html", null, true);
        }
        echo "</textarea>
                    </div>
                    <div id=\"todays-memos\">
                        <h3 style=\"color: white\">Recordatorios y notas:</h3>
                        <textarea type=\"text\" id=\"todays_memos\" name=\"todays_memos\" required=\"required\">";
        // line 48
        if ((($context["diaryPage"] ?? $this->getContext($context, "diaryPage")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["diaryPage"] ?? $this->getContext($context, "diaryPage")), "memosAndNotes", []), "html", null, true);
        }
        echo "</textarea>
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
        return "@Customer/diary.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  150 => 48,  141 => 44,  134 => 40,  122 => 33,  117 => 30,  107 => 28,  97 => 26,  91 => 23,  88 => 22,  78 => 18,  74 => 16,  70 => 15,  66 => 13,  64 => 12,  60 => 10,  58 => 9,  52 => 6,  46 => 2,  34 => 1,);
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
    </header>
    <section id=\"default-header\">
        {% include 'header.html.twig' %}
    </section>
    <section id=\"customer-header\">
        {% include 'customerheader.html.twig' %}
    </section>
    <section id=\"customer-diary\">
        {% for message in  app.session.flashbag().get('customerDiaryKOStatus') %}
            <div class=\"row\" style=\"width: 93.5%; margin-left: 3.3%; margin-top: 10px; margin-bottom: -10px;\">
                <div class=\"alert alert-danger\" role=\"alert\" style=\"margin-bottom: 0\">
                    {{ message }}
                </div>
            </div>
        {% endfor %}
        <div class=\"container\">
            <form class=\"form\" action=\"{{ path(\"customer_diary\") }}\" method=\"post\" novalidate>
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
                <div class=\"col-sm-6\" style=\"padding: 0 20px\">
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
    </section>
    </html>
{% endblock %}
", "@Customer/diary.html.twig", "/shared/httpd/nutrik/src/CustomerBundle/Resources/views/diary.html.twig");
    }
}
