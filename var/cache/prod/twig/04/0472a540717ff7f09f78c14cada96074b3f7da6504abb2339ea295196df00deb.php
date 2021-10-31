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

/* @Customer/customer-add-event.html.twig */
class __TwigTemplate_5a5e7c357e814705181354afd1f166b22613cd1d24a689ae2612b9f6cf0bca4a extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Customer/customer-add-event.html.twig"));

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
        $this->loadTemplate("header.html.twig", "@Customer/customer-add-event.html.twig", 11)->display($context);
        // line 12
        echo "    </section>
    <section id=\"customer-add-event\">
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "flashbag", [], "method"), "get", [0 => "addEventKOStatus"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 15
            echo "            <div class=\"row\" style=\"width: 93.5%; margin-left: 3.3%; margin-top: 10px; margin-bottom: -10px;\">
                <div class=\"alert alert-danger\" role=\"alert\" style=\"margin-bottom: 0\">
                    ";
            // line 17
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "        <div class=\"container\">
            <div id=\"add-event-block\">
                <form class=\"form\" action=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("customer_add_event");
        echo "\" method=\"post\">
                    <div class=\"col-sm-4\">
                        <label for=\"event_title\">Título:</label>
                        <input type=\"text\" id=\"event_title\" name=\"event_title\" class=\"form-control\" required=\"required\"/>
                        <label for=\"event_date\">Fecha del evento:</label>
                        <input type=\"date\" id=\"event_date\" name=\"event_date\" class=\"form-control\" required=\"required\"/>
                        <label for=\"event_date\">Hora del evento:</label>
                        <input type=\"time\" id=\"event_hour\" name=\"event_hour\" class=\"form-control\" required=\"required\"/>
                        <label for=\"event_duration\">Duración del evento (min):</label>
                        <input type=\"number\" id=\"event_duration\" name=\"event_duration\" class=\"form-control\" required=\"required\" value=\"60\"/>
                        <label for=\"event_description\">Descripción:</label>
                        <br/>
                        <textarea type=\"text\" id=\"event_description\" name=\"event_description\" class=\"form-control\" required=\"required\"></textarea>
                        <div class=\"save-button-item\">
                            <input class=\"btn save-button\" type=\"submit\" value=\"Guardar\"/>
                        </div>
                    </div>
                    <div class=\"col-sm-7\">
                        <br/>
                        <strong style=\"font-size: 18px;\">Mis eventos:</strong>
                        <br/><br/>
                        ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["events"] ?? $this->getContext($context, "events")));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 45
            echo "                            <div class=\"event-entry\">
                                <div class=\"col-sm-11 event-title\">
                                    <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("customer_event_view", ["id_event" => $this->getAttribute($context["event"], "idEvent", [])]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "title", []), "html", null, true);
            echo "</a>
                                </div>
                                <div class=\"col-sm-1 event-actions\" style=\"margin-top: -5px;\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-search\" viewBox=\"0 0 16 16\"
                                         onclick=\"redirectTo('event','/'+";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "idEvent", []), "html", null, true);
            echo ")\">
                                        <path d=\"M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z\"/>
                                    </svg>
                                </div>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "                    </div>
                </form>
            </div>
        </div>
    </section>
    ";
        // line 62
        $this->loadTemplate("footer.html.twig", "@Customer/customer-add-event.html.twig", 62)->display($context);
        // line 63
        echo "</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Customer/customer-add-event.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  153 => 63,  151 => 62,  144 => 57,  132 => 51,  123 => 47,  119 => 45,  115 => 44,  91 => 23,  87 => 21,  77 => 17,  73 => 15,  69 => 14,  65 => 12,  63 => 11,  57 => 8,  52 => 6,  46 => 2,  34 => 1,);
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
    <section id=\"customer-add-event\">
        {% for message in  app.session.flashbag().get('addEventKOStatus') %}
            <div class=\"row\" style=\"width: 93.5%; margin-left: 3.3%; margin-top: 10px; margin-bottom: -10px;\">
                <div class=\"alert alert-danger\" role=\"alert\" style=\"margin-bottom: 0\">
                    {{ message }}
                </div>
            </div>
        {% endfor %}
        <div class=\"container\">
            <div id=\"add-event-block\">
                <form class=\"form\" action=\"{{ path(\"customer_add_event\") }}\" method=\"post\">
                    <div class=\"col-sm-4\">
                        <label for=\"event_title\">Título:</label>
                        <input type=\"text\" id=\"event_title\" name=\"event_title\" class=\"form-control\" required=\"required\"/>
                        <label for=\"event_date\">Fecha del evento:</label>
                        <input type=\"date\" id=\"event_date\" name=\"event_date\" class=\"form-control\" required=\"required\"/>
                        <label for=\"event_date\">Hora del evento:</label>
                        <input type=\"time\" id=\"event_hour\" name=\"event_hour\" class=\"form-control\" required=\"required\"/>
                        <label for=\"event_duration\">Duración del evento (min):</label>
                        <input type=\"number\" id=\"event_duration\" name=\"event_duration\" class=\"form-control\" required=\"required\" value=\"60\"/>
                        <label for=\"event_description\">Descripción:</label>
                        <br/>
                        <textarea type=\"text\" id=\"event_description\" name=\"event_description\" class=\"form-control\" required=\"required\"></textarea>
                        <div class=\"save-button-item\">
                            <input class=\"btn save-button\" type=\"submit\" value=\"Guardar\"/>
                        </div>
                    </div>
                    <div class=\"col-sm-7\">
                        <br/>
                        <strong style=\"font-size: 18px;\">Mis eventos:</strong>
                        <br/><br/>
                        {% for event in events %}
                            <div class=\"event-entry\">
                                <div class=\"col-sm-11 event-title\">
                                    <a href=\"{{ path(\"customer_event_view\",{\"id_event\":event.idEvent}) }}\">{{ event.title }}</a>
                                </div>
                                <div class=\"col-sm-1 event-actions\" style=\"margin-top: -5px;\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-search\" viewBox=\"0 0 16 16\"
                                         onclick=\"redirectTo('event','/'+{{ event.idEvent }})\">
                                        <path d=\"M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z\"/>
                                    </svg>
                                </div>
                            </div>
                        {% endfor %}
                    </div>
                </form>
            </div>
        </div>
    </section>
    {% include 'footer.html.twig' %}
</html>
{% endblock %}
", "@Customer/customer-add-event.html.twig", "/shared/httpd/nutrik/src/CustomerBundle/Resources/views/customer-add-event.html.twig");
    }
}
