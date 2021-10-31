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

/* @Customs/index.html.twig */
class __TwigTemplate_56478fd077e167e798a3e2c89e800687a612fe349df65e611bf6605a2d109ec3 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'title' => [$this, 'block_title'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Customs/index.html.twig"));

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
        <meta charset=\"utf-8\"/>
        <title>
            ";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        // line 8
        echo "        </title>
        <!-- Latest compiled and minified CSS -->
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/bootstrap.css"), "html", null, true);
        echo "\">


        <!-- Optional theme -->
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/bootstrap-theme.css"), "html", null, true);
        echo "\">

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>

        <!-- Latest compiled and minified JavaScript -->
        <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/bootstrap.js"), "html", null, true);
        echo "\"></script>

        <!-- Header stylesheet-->
        <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/header.css"), "html", null, true);
        echo "\" />

        <!-- Footer stylesheet-->
        <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/footer.css"), "html", null, true);
        echo "\" />

        <!-- Homepage stylesheet-->
        <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/homepage.css"), "html", null, true);
        echo "\" />

        <!-- Menu component javascript -->
        <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/js/MenuComponent.js"), "html", null, true);
        echo "\"></script>

        <!-- Customs JS -->
        <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework//js/customs.js"), "html", null, true);
        echo "\"></script>

        <!-- Chart JS -->
        <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/chart.js"), "html", null, true);
        echo "\"></script>
    </header>
    <section id=\"default-header\">
        ";
        // line 41
        $this->loadTemplate("header.html.twig", "@Customs/index.html.twig", 41)->display($context);
        // line 42
        echo "    </section>
    ";
        // line 43
        if ( !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_NUTR")) {
            // line 44
            echo "        <section id=\"customer-header\">
            ";
            // line 45
            $this->loadTemplate("customerheader.html.twig", "@Customs/index.html.twig", 45)->display($context);
            // line 46
            echo "        </section>
        <section id=\"customer-homepage\">
            <div class=\"container\">
                <div class=\"row\" style=\"justify-content: center; color: black; text-align: center; padding: 20px\">
                    <img src=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("home-banner.jpg"), "html", null, true);
            echo "\" style=\"border-radius: 10%;width: 100%;height: 45rem;\">
                </div>
                <div class=\"row\" style=\"justify-content: center; color: black; text-align: center; padding: 20px\">
                    <p style=\"font-size: 17px;\">
                        En NutriK vas a encontrar profesionales sanitarios expertos en alimentación, nutrición y dietética.
                        Nos encargamos principalmente del diagnóstico nutricional-dietético general y específico, así como del tratamiento nutricional-dietético de enfermedades, como por ejemplo diabetes, malnutrición, insuficiencia renal, obesidad, enfermedad de Crohn, del tratamiento con nutrición artificial enteral y parenteral en hospitales, o a domicilio, de la prevención de patologías mediante la alimentación, nutrición y dietética, decidir colaborativamente en el tratamiento del paciente oncológico etc., además de adecuar la alimentación, nutrición y dietética de cada persona a cualquier situación fisiológica, como embarazo, lactancia, deporte, etc, y patológica con carácter de primera intención, como facultativo en su área propia de conocimiento, cual es la Nutrición y la Dietética.
                    </p>
                </div>
            </div>
        </section>
    ";
        } else {
            // line 61
            echo "        <section id=\"nutritionist-homepage\">
            <div class=\"container\">
                <div class=\"col-sm-12\">
                    <div id=\"nutritionist-homepage-block\">
                        <div class=\"col-sm-6\">
                            <div class=\"col-sm-12 nutritionist-appointments-events\">
                                <h3>Mis próximas consultas</h3>
                                <hr/>
                                <div class=\"nutritionist-appointments\">
                                    ";
            // line 70
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["appointments"] ?? $this->getContext($context, "appointments")));
            foreach ($context['_seq'] as $context["_key"] => $context["appointment"]) {
                // line 71
                echo "                                        <p>
                                            <strong>";
                // line 72
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["appointment"], "date", []), "Y-m-d H:i:s"), "html", null, true);
                echo ":</strong>
                                            <a href=\"";
                // line 73
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nutritionist_edit_appointment", ["id_appointment" => $this->getAttribute($context["appointment"], "idAppointment", [])]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["appointment"], "description", []), "html", null, true);
                echo "</a>
                                        </p>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['appointment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            echo "                                </div>

                                <h3>Mis próximos eventos</h3>
                                <hr/>
                                <div class=\"nutritionist-events\">
                                    ";
            // line 81
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["events"] ?? $this->getContext($context, "events")));
            foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                // line 82
                echo "                                        <p>
                                            <strong>";
                // line 83
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["event"], "date", []), "Y-m-d H:i:s"), "html", null, true);
                echo ":</strong>
                                            <a href=\"";
                // line 84
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nutritionist_edit_event", ["id_event" => $this->getAttribute($context["event"], "idEvent", [])]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "title", []), "html", null, true);
                echo "</a>
                                        </p>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            echo "                                </div>
                            </div>
                            <div class=\"col-sm-12 nutritionist-kpis\">
                                <img src=\"";
            // line 90
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("chart.png"), "html", null, true);
            echo "\">
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <div class=\"nutritionist-notifications\">
                                <h3>Mis notificaciones</h3>
                                ";
            // line 96
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["logs"] ?? $this->getContext($context, "logs")));
            foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                // line 97
                echo "                                    <div class=\"row\">
                                        ";
                // line 98
                if (twig_in_filter("add", $this->getAttribute($context["log"], "source", []))) {
                    // line 99
                    echo "                                            <div class=\"alert alert-success\" role=\"alert\" style=\"margin-bottom: 0\">
                                                ";
                    // line 100
                    echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "context", []), "html", null, true);
                    echo "
                                            </div>
                                        ";
                } elseif (twig_in_filter("delete", $this->getAttribute(                // line 102
$context["log"], "source", []))) {
                    // line 103
                    echo "                                            <div class=\"alert alert-danger\" role=\"alert\" style=\"margin-bottom: 0\">
                                                ";
                    // line 104
                    echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "context", []), "html", null, true);
                    echo "
                                            </div>
                                        ";
                } else {
                    // line 107
                    echo "                                            <div class=\"alert alert-info\" role=\"alert\" style=\"margin-bottom: 0\">
                                                ";
                    // line 108
                    echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "context", []), "html", null, true);
                    echo "
                                            </div>
                                        ";
                }
                // line 111
                echo "                                    </div>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 113
            echo "                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    ";
        }
        // line 120
        echo "    ";
        $this->loadTemplate("footer.html.twig", "@Customs/index.html.twig", 120)->display($context);
        // line 121
        echo "    </html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " NutriK ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Customs/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  290 => 7,  282 => 121,  279 => 120,  270 => 113,  263 => 111,  257 => 108,  254 => 107,  248 => 104,  245 => 103,  243 => 102,  238 => 100,  235 => 99,  233 => 98,  230 => 97,  226 => 96,  217 => 90,  212 => 87,  201 => 84,  197 => 83,  194 => 82,  190 => 81,  183 => 76,  172 => 73,  168 => 72,  165 => 71,  161 => 70,  150 => 61,  136 => 50,  130 => 46,  128 => 45,  125 => 44,  123 => 43,  120 => 42,  118 => 41,  112 => 38,  106 => 35,  100 => 32,  94 => 29,  88 => 26,  82 => 23,  76 => 20,  67 => 14,  60 => 10,  56 => 8,  54 => 7,  47 => 2,  35 => 1,);
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
        <meta charset=\"utf-8\"/>
        <title>
            {% block title %} NutriK {% endblock %}
        </title>
        <!-- Latest compiled and minified CSS -->
        <link rel=\"stylesheet\" href=\"{{ asset('public/css/bootstrap.css') }}\">


        <!-- Optional theme -->
        <link rel=\"stylesheet\" href=\"{{ asset('public/css/bootstrap-theme.css') }}\">

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>

        <!-- Latest compiled and minified JavaScript -->
        <script src=\"{{ asset('public/js/bootstrap.js') }}\"></script>

        <!-- Header stylesheet-->
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/framework/css/header.css') }}\" />

        <!-- Footer stylesheet-->
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/framework/css/footer.css') }}\" />

        <!-- Homepage stylesheet-->
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/framework/css/homepage.css') }}\" />

        <!-- Menu component javascript -->
        <script src=\"{{ asset('bundles/framework/js/MenuComponent.js') }}\"></script>

        <!-- Customs JS -->
        <script src=\"{{ asset('bundles/framework//js/customs.js') }}\"></script>

        <!-- Chart JS -->
        <script src=\"{{ asset('public/js/chart.js') }}\"></script>
    </header>
    <section id=\"default-header\">
        {% include 'header.html.twig' %}
    </section>
    {% if not is_granted('ROLE_NUTR') %}
        <section id=\"customer-header\">
            {% include 'customerheader.html.twig' %}
        </section>
        <section id=\"customer-homepage\">
            <div class=\"container\">
                <div class=\"row\" style=\"justify-content: center; color: black; text-align: center; padding: 20px\">
                    <img src=\"{{ asset('home-banner.jpg') }}\" style=\"border-radius: 10%;width: 100%;height: 45rem;\">
                </div>
                <div class=\"row\" style=\"justify-content: center; color: black; text-align: center; padding: 20px\">
                    <p style=\"font-size: 17px;\">
                        En NutriK vas a encontrar profesionales sanitarios expertos en alimentación, nutrición y dietética.
                        Nos encargamos principalmente del diagnóstico nutricional-dietético general y específico, así como del tratamiento nutricional-dietético de enfermedades, como por ejemplo diabetes, malnutrición, insuficiencia renal, obesidad, enfermedad de Crohn, del tratamiento con nutrición artificial enteral y parenteral en hospitales, o a domicilio, de la prevención de patologías mediante la alimentación, nutrición y dietética, decidir colaborativamente en el tratamiento del paciente oncológico etc., además de adecuar la alimentación, nutrición y dietética de cada persona a cualquier situación fisiológica, como embarazo, lactancia, deporte, etc, y patológica con carácter de primera intención, como facultativo en su área propia de conocimiento, cual es la Nutrición y la Dietética.
                    </p>
                </div>
            </div>
        </section>
    {% else %}
        <section id=\"nutritionist-homepage\">
            <div class=\"container\">
                <div class=\"col-sm-12\">
                    <div id=\"nutritionist-homepage-block\">
                        <div class=\"col-sm-6\">
                            <div class=\"col-sm-12 nutritionist-appointments-events\">
                                <h3>Mis próximas consultas</h3>
                                <hr/>
                                <div class=\"nutritionist-appointments\">
                                    {% for appointment in appointments %}
                                        <p>
                                            <strong>{{ appointment.date|date('Y-m-d H:i:s') }}:</strong>
                                            <a href=\"{{ path(\"nutritionist_edit_appointment\",{\"id_appointment\":appointment.idAppointment}) }}\">{{ appointment.description }}</a>
                                        </p>
                                    {% endfor %}
                                </div>

                                <h3>Mis próximos eventos</h3>
                                <hr/>
                                <div class=\"nutritionist-events\">
                                    {% for event in events %}
                                        <p>
                                            <strong>{{ event.date|date('Y-m-d H:i:s') }}:</strong>
                                            <a href=\"{{ path(\"nutritionist_edit_event\",{\"id_event\":event.idEvent}) }}\">{{ event.title }}</a>
                                        </p>
                                    {% endfor %}
                                </div>
                            </div>
                            <div class=\"col-sm-12 nutritionist-kpis\">
                                <img src=\"{{ asset('chart.png') }}\">
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <div class=\"nutritionist-notifications\">
                                <h3>Mis notificaciones</h3>
                                {% for log in logs %}
                                    <div class=\"row\">
                                        {% if 'add' in log.source %}
                                            <div class=\"alert alert-success\" role=\"alert\" style=\"margin-bottom: 0\">
                                                {{ log.context }}
                                            </div>
                                        {% elseif 'delete' in log.source %}
                                            <div class=\"alert alert-danger\" role=\"alert\" style=\"margin-bottom: 0\">
                                                {{ log.context }}
                                            </div>
                                        {% else %}
                                            <div class=\"alert alert-info\" role=\"alert\" style=\"margin-bottom: 0\">
                                                {{ log.context }}
                                            </div>
                                        {% endif %}
                                    </div>
                                {% endfor %}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    {% endif %}
    {% include 'footer.html.twig' %}
    </html>
{% endblock %}
", "@Customs/index.html.twig", "/shared/httpd/nutrik/src/CustomsBundle/Resources/views/index.html.twig");
    }
}
