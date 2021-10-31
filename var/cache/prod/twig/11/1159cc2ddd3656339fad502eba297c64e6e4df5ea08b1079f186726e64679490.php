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

/* @Customer/calendar.html.twig */
class __TwigTemplate_b0fac4865740c31f074c20327c8138723af5d9acd11de8846dfbde412c9c0d76 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Customer/calendar.html.twig"));

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
        $this->loadTemplate("header.html.twig", "@Customer/calendar.html.twig", 9)->display($context);
        // line 10
        echo "    </section>
    <section id=\"customer-header\">
        ";
        // line 12
        $this->loadTemplate("customerheader.html.twig", "@Customer/calendar.html.twig", 12)->display($context);
        // line 13
        echo "    </section>
    <section id=\"customer-calendar\">
        <header>
            <!-- Calendar Page stylesheet -->
            <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/calendar.css"), "html", null, true);
        echo "\" />
            <!-- Calendar JS -->
            <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/calendar.js"), "html", null, true);
        echo "\"></script>
            <!-- NutriK Calendar JS -->
            <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/js/customer-calendar.js"), "html", null, true);
        echo "\"></script>
        </header>
        <div class=\"row\" id=\"event_type_alert\" style=\"width: 93.5%; margin-left: 3.3%; margin-top: 10px; margin-bottom: -10px; display: none\">
            <div class=\"alert alert-danger\" role=\"alert\" style=\"margin-bottom: 0\">
                El tipo de evento no es correcto, indica si se trata de una Consulta o de un Evento
            </div>
        </div>
        ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "flashbag", [], "method"), "get", [0 => "calendarKOStatus"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 29
            echo "            <div class=\"row\" style=\"width: 93.5%; margin-left: 3.3%; margin-top: 10px; margin-bottom: -10px;\">
                <div class=\"alert alert-danger\" role=\"alert\" style=\"margin-bottom: 0\">
                    ";
            // line 31
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        <div class=\"container\">
            <div class=\"col-sm-12\">
";
        // line 46
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
        return "@Customer/calendar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  114 => 46,  110 => 35,  100 => 31,  96 => 29,  92 => 28,  82 => 21,  77 => 19,  72 => 17,  66 => 13,  64 => 12,  60 => 10,  58 => 9,  52 => 6,  46 => 2,  34 => 1,);
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
    <section id=\"customer-calendar\">
        <header>
            <!-- Calendar Page stylesheet -->
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/framework/css/calendar.css') }}\" />
            <!-- Calendar JS -->
            <script src=\"{{ asset('public/js/calendar.js') }}\"></script>
            <!-- NutriK Calendar JS -->
            <script src=\"{{ asset('bundles/framework/js/customer-calendar.js') }}\"></script>
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
{#                {% for calendar_event in calendar_events %}#}
{#                    <div class=\"calendar_event\" style=\"color: black; display: none\">#}
{#                        <input class=\"calendar_event_id\" value=\"{{ calendar_event['id'] }}\"/>#}
{#                        <input class=\"calendar_event_title\" value=\"{{ calendar_event['title'] }}\"/>#}
{#                        <input class=\"calendar_event_start\" value=\"{{ calendar_event['start']|date('Y-m-d H:i:s') }}\"/>#}
{#                        <input class=\"calendar_event_end\" value=\"{{ calendar_event['end']|date('Y-m-d H:i:s') }}\"/>#}
{#                        <input class=\"calendar_event_url\" value=\"{{ calendar_event['url'] }}\"/>#}
{#                    </div>#}
{#                {% endfor %}#}
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
", "@Customer/calendar.html.twig", "/shared/httpd/nutrik/src/CustomerBundle/Resources/views/calendar.html.twig");
    }
}
