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

/* @Nutritionist/nutritionist-events.html.twig */
class __TwigTemplate_24a8d590b01fee9a18bab37e03dba5dc31576d5a4fb2427bfdde81e6a0624dc8 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Nutritionist/nutritionist-events.html.twig"));

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
        $this->loadTemplate("header.html.twig", "@Nutritionist/nutritionist-events.html.twig", 9)->display($context);
        // line 10
        echo "    </section>
    <section id=\"nutritionist-events\">
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "flashbag", [], "method"), "get", [0 => "eventsKOStatus"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 13
            echo "            <div class=\"row\" style=\"width: 87%; margin-left: 6.5%; margin-top: 10px; margin-bottom: -10px;\">
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "flashbag", [], "method"), "get", [0 => "eventsOKStatus"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 20
            echo "            <div class=\"row\" style=\"width: 87%; margin-left: 6.5%; margin-top: 10px; margin-bottom: -10px;\">
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
            <div class=\"col-sm-12\">
                <div id=\"events-block\">
                    <div class=\"col-sm-12 events-header\">
                        <div class=\"col-sm-1\" style=\"padding: 0\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-camera-reels\" viewBox=\"0 0 16 16\">
                                <path d=\"M6 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM1 3a2 2 0 1 0 4 0 2 2 0 0 0-4 0z\"/>
                                <path d=\"M9 6h.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 7.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 16H2a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h7zm6 8.73V7.27l-3.5 1.555v4.35l3.5 1.556zM1 8v6a1 1 0 0 0 1 1h7.5a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1z\"/>
                                <path d=\"M9 6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zM7 3a2 2 0 1 1 4 0 2 2 0 0 1-4 0z\"/>
                            </svg>
                        </div>
                        <div class=\"col-sm-10\">
                            <h3 style=\"display: inline-flex; margin-top: 5px; margin-left: -50px\">Eventos / Salas</h3>
                        </div>
                        <div class=\"col-sm-1\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-plus-circle\" viewBox=\"0 0 16 16\" style=\"margin-right: -15px; float: right\"
                                 onclick=\"redirectTo('nutritionist-add-event')\">
                                <path d=\"M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z\"/>
                                <path d=\"M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z\"/>
                            </svg>
                        </div>
                    </div>
                    <div class=\"col-sm-12 events\">
                        ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["events"] ?? $this->getContext($context, "events")));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 50
            echo "                            <div class=\"event-entry\">
                                <div class=\"col-sm-11 event-entry-resume\">
                                    <h4>
                                        ";
            // line 53
            if (twig_in_filter($this->getAttribute($context["event"], "idEvent", []), twig_get_array_keys_filter(($context["events_tags"] ?? $this->getContext($context, "events_tags"))))) {
                // line 54
                echo "                                            <span>
                                                ";
                // line 55
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["events_tags"] ?? $this->getContext($context, "events_tags")), $this->getAttribute($context["event"], "idEvent", []), [], "array"));
                foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                    // line 56
                    echo "                                                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "name", []), "html", null, true);
                    echo " <span style=\"color: #00766c\">></span>
                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 58
                echo "                                            </span>
                                        ";
            }
            // line 60
            echo "                                        <strong style=\"color: #00766c\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "title", []), "html", null, true);
            echo "</strong>
                                    </h4>
                                    <p>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "description", []), "html", null, true);
            echo "</p>
                                    <strong ";
            // line 63
            if ((twig_date_format_filter($this->env, $this->getAttribute($context["event"], "date", []), "Y-m-d H:i:s") < twig_date_format_filter($this->env, ($context["now"] ?? $this->getContext($context, "now")), "Y-m-d H:i:s"))) {
                echo " style=\"color: #a94442\" ";
            } else {
                echo " style=\"color: #3c763d\" ";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["event"], "date", []), "Y-m-d H:i:s"), "html", null, true);
            echo "</strong>
                                </div>
                                <div class=\"col-sm-1 event-entry-actions\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-trash\" viewBox=\"0 0 16 16\" style=\"margin-right: -35px;\"
                                        onclick=\"deleteEvent(";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "idEvent", []), "html", null, true);
            echo ")\">
                                        <path d=\"M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z\"/>
                                        <path fill-rule=\"evenodd\" d=\"M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z\"/>
                                    </svg>
                                    <form class=\"form\" action=\"";
            // line 71
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nutritionist_delete_event");
            echo "\" method=\"post\">
                                        <input type=\"submit\" class=\"hidden\" name=\"_event_delete\" id=\"event_delete_";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "idEvent", []), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "idEvent", []), "html", null, true);
            echo "\">
                                    </form>
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-pencil-square\" viewBox=\"0 0 16 16\"
                                        onclick=\"redirectTo('nutritionist-edit-event','/'+";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "idEvent", []), "html", null, true);
            echo ")\">
                                        <path d=\"M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z\"/>
                                        <path fill-rule=\"evenodd\" d=\"M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z\"/>
                                    </svg>
                                </div>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "                    </div>
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
        return "@Nutritionist/nutritionist-events.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  212 => 82,  199 => 75,  191 => 72,  187 => 71,  180 => 67,  167 => 63,  163 => 62,  157 => 60,  153 => 58,  144 => 56,  140 => 55,  137 => 54,  135 => 53,  130 => 50,  126 => 49,  101 => 26,  91 => 22,  87 => 20,  82 => 19,  72 => 15,  68 => 13,  64 => 12,  60 => 10,  58 => 9,  52 => 6,  46 => 2,  34 => 1,);
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
    <section id=\"nutritionist-events\">
        {% for message in  app.session.flashbag().get('eventsKOStatus') %}
            <div class=\"row\" style=\"width: 87%; margin-left: 6.5%; margin-top: 10px; margin-bottom: -10px;\">
                <div class=\"alert alert-danger\" role=\"alert\" style=\"margin-bottom: 0\">
                    {{ message }}
                </div>
            </div>
        {% endfor %}
        {% for message in  app.session.flashbag().get('eventsOKStatus') %}
            <div class=\"row\" style=\"width: 87%; margin-left: 6.5%; margin-top: 10px; margin-bottom: -10px;\">
                <div class=\"alert alert-success\" role=\"alert\" style=\"margin-bottom: 0\">
                    {{ message }}
                </div>
            </div>
        {% endfor %}
        <div class=\"container\">
            <div class=\"col-sm-12\">
                <div id=\"events-block\">
                    <div class=\"col-sm-12 events-header\">
                        <div class=\"col-sm-1\" style=\"padding: 0\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-camera-reels\" viewBox=\"0 0 16 16\">
                                <path d=\"M6 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM1 3a2 2 0 1 0 4 0 2 2 0 0 0-4 0z\"/>
                                <path d=\"M9 6h.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 7.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 16H2a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h7zm6 8.73V7.27l-3.5 1.555v4.35l3.5 1.556zM1 8v6a1 1 0 0 0 1 1h7.5a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1z\"/>
                                <path d=\"M9 6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zM7 3a2 2 0 1 1 4 0 2 2 0 0 1-4 0z\"/>
                            </svg>
                        </div>
                        <div class=\"col-sm-10\">
                            <h3 style=\"display: inline-flex; margin-top: 5px; margin-left: -50px\">Eventos / Salas</h3>
                        </div>
                        <div class=\"col-sm-1\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-plus-circle\" viewBox=\"0 0 16 16\" style=\"margin-right: -15px; float: right\"
                                 onclick=\"redirectTo('nutritionist-add-event')\">
                                <path d=\"M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z\"/>
                                <path d=\"M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z\"/>
                            </svg>
                        </div>
                    </div>
                    <div class=\"col-sm-12 events\">
                        {% for event in events %}
                            <div class=\"event-entry\">
                                <div class=\"col-sm-11 event-entry-resume\">
                                    <h4>
                                        {% if event.idEvent in events_tags|keys %}
                                            <span>
                                                {% for tag in events_tags[event.idEvent] %}
                                                    {{ tag.name }} <span style=\"color: #00766c\">></span>
                                                {% endfor %}
                                            </span>
                                        {% endif %}
                                        <strong style=\"color: #00766c\">{{ event.title}}</strong>
                                    </h4>
                                    <p>{{ event.description }}</p>
                                    <strong {% if event.date|date('Y-m-d H:i:s') < now|date('Y-m-d H:i:s') %} style=\"color: #a94442\" {% else %} style=\"color: #3c763d\" {% endif %}>{{ event.date|date('Y-m-d H:i:s') }}</strong>
                                </div>
                                <div class=\"col-sm-1 event-entry-actions\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-trash\" viewBox=\"0 0 16 16\" style=\"margin-right: -35px;\"
                                        onclick=\"deleteEvent({{ event.idEvent }})\">
                                        <path d=\"M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z\"/>
                                        <path fill-rule=\"evenodd\" d=\"M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z\"/>
                                    </svg>
                                    <form class=\"form\" action=\"{{ path(\"nutritionist_delete_event\") }}\" method=\"post\">
                                        <input type=\"submit\" class=\"hidden\" name=\"_event_delete\" id=\"event_delete_{{ event.idEvent }}\" value=\"{{ event.idEvent }}\">
                                    </form>
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-pencil-square\" viewBox=\"0 0 16 16\"
                                        onclick=\"redirectTo('nutritionist-edit-event','/'+{{ event.idEvent }})\">
                                        <path d=\"M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z\"/>
                                        <path fill-rule=\"evenodd\" d=\"M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z\"/>
                                    </svg>
                                </div>
                            </div>
                        {% endfor %}
                    </div>
                </div>
            </div>
        </div>
    </section>
    </html>
{% endblock %}
", "@Nutritionist/nutritionist-events.html.twig", "/shared/httpd/nutrik/src/NutritionistBundle/Resources/views/nutritionist-events.html.twig");
    }
}
