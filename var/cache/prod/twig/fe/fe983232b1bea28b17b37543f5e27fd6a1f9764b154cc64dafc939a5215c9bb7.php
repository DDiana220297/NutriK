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

/* @Nutritionist/nutritionist-calendar.html.twig */
class __TwigTemplate_abc7b005f94cd9909ad2cd3bcd471be0470516adb84e628f74b0482ad9f0884a extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Nutritionist/nutritionist-calendar.html.twig"));

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
        <!-- Login Page stylesheet -->
        <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/nutritionistpages.css"), "html", null, true);
        echo "\" />
    </header>
    <section id=\"default-header\">
        ";
        // line 9
        $this->loadTemplate("header.html.twig", "@Nutritionist/nutritionist-calendar.html.twig", 9)->display($context);
        // line 10
        echo "    </section>
    <section id=\"nutritionist-calendar\">
        <header>
            <!-- Calendar Page stylesheet -->
            <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/calendar.css"), "html", null, true);
        echo "\" />
            <!-- Calendar JS -->
            <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/calendar.js"), "html", null, true);
        echo "\"></script>
            <!-- NutriK Calendar JS -->
            <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/js/nutrik-calendar.js"), "html", null, true);
        echo "\"></script>
        </header>
        <div class=\"row\" id=\"event_type_alert\" style=\"width: 93.5%; margin-left: 3.3%; margin-top: 10px; margin-bottom: -10px; display: none\">
            <div class=\"alert alert-danger\" role=\"alert\" style=\"margin-bottom: 0\">
                El tipo de evento no es correcto, indica si se trata de una Consulta o de un Evento
            </div>
        </div>
        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "flashbag", [], "method"), "get", [0 => "calendarKOStatus"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 26
            echo "            <div class=\"row\" style=\"width: 93.5%; margin-left: 3.3%; margin-top: 10px; margin-bottom: -10px;\">
                <div class=\"alert alert-danger\" role=\"alert\" style=\"margin-bottom: 0\">
                    ";
            // line 28
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "        <div class=\"container\">
            <div class=\"col-sm-12\">
                ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["calendar_events"] ?? $this->getContext($context, "calendar_events")));
        foreach ($context['_seq'] as $context["_key"] => $context["calendar_event"]) {
            // line 35
            echo "                    <div class=\"calendar_event\" style=\"color: black; display: none\">
                        <input class=\"calendar_event_id\" value=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["calendar_event"], "id", [], "array"), "html", null, true);
            echo "\"/>
                        <input class=\"calendar_event_title\" value=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["calendar_event"], "title", [], "array"), "html", null, true);
            echo "\"/>
                        <input class=\"calendar_event_start\" value=\"";
            // line 38
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["calendar_event"], "start", [], "array"), "Y-m-d H:i:s"), "html", null, true);
            echo "\"/>
                        <input class=\"calendar_event_end\" value=\"";
            // line 39
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["calendar_event"], "end", [], "array"), "Y-m-d H:i:s"), "html", null, true);
            echo "\"/>
                        <input class=\"calendar_event_url\" value=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["calendar_event"], "url", [], "array"), "html", null, true);
            echo "\"/>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['calendar_event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "                <div id=\"calendar-block\">
                    <div id='wrap'>
                        <div id='calendar'></div>
                        <div style='clear:both'></div>
                    </div>
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
        return "@Nutritionist/nutritionist-calendar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  140 => 43,  131 => 40,  127 => 39,  123 => 38,  119 => 37,  115 => 36,  112 => 35,  108 => 34,  104 => 32,  94 => 28,  90 => 26,  86 => 25,  76 => 18,  71 => 16,  66 => 14,  60 => 10,  58 => 9,  52 => 6,  46 => 2,  34 => 1,);
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
        <!-- Login Page stylesheet -->
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/framework/css/nutritionistpages.css') }}\" />
    </header>
    <section id=\"default-header\">
        {% include 'header.html.twig' %}
    </section>
    <section id=\"nutritionist-calendar\">
        <header>
            <!-- Calendar Page stylesheet -->
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/framework/css/calendar.css') }}\" />
            <!-- Calendar JS -->
            <script src=\"{{ asset('public/js/calendar.js') }}\"></script>
            <!-- NutriK Calendar JS -->
            <script src=\"{{ asset('bundles/framework/js/nutrik-calendar.js') }}\"></script>
        </header>
        <div class=\"row\" id=\"event_type_alert\" style=\"width: 93.5%; margin-left: 3.3%; margin-top: 10px; margin-bottom: -10px; display: none\">
            <div class=\"alert alert-danger\" role=\"alert\" style=\"margin-bottom: 0\">
                El tipo de evento no es correcto, indica si se trata de una Consulta o de un Evento
            </div>
        </div>
        {% for message in  app.session.flashbag().get('calendarKOStatus') %}
            <div class=\"row\" style=\"width: 93.5%; margin-left: 3.3%; margin-top: 10px; margin-bottom: -10px;\">
                <div class=\"alert alert-danger\" role=\"alert\" style=\"margin-bottom: 0\">
                    {{ message }}
                </div>
            </div>
        {% endfor %}
        <div class=\"container\">
            <div class=\"col-sm-12\">
                {% for calendar_event in calendar_events %}
                    <div class=\"calendar_event\" style=\"color: black; display: none\">
                        <input class=\"calendar_event_id\" value=\"{{ calendar_event['id'] }}\"/>
                        <input class=\"calendar_event_title\" value=\"{{ calendar_event['title'] }}\"/>
                        <input class=\"calendar_event_start\" value=\"{{ calendar_event['start']|date('Y-m-d H:i:s') }}\"/>
                        <input class=\"calendar_event_end\" value=\"{{ calendar_event['end']|date('Y-m-d H:i:s') }}\"/>
                        <input class=\"calendar_event_url\" value=\"{{ calendar_event['url'] }}\"/>
                    </div>
                {% endfor %}
                <div id=\"calendar-block\">
                    <div id='wrap'>
                        <div id='calendar'></div>
                        <div style='clear:both'></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </html>
{% endblock %}
", "@Nutritionist/nutritionist-calendar.html.twig", "/shared/httpd/nutrik/src/NutritionistBundle/Resources/views/nutritionist-calendar.html.twig");
    }
}
