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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/js/customs.js"), "html", null, true);
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
            echo "        <section id=\"customer-homepage\">
            ";
            // line 45
            if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []) != null)) {
                // line 46
                echo "                <section id=\"customer-header\">
                    ";
                // line 47
                $this->loadTemplate("customerheader.html.twig", "@Customs/index.html.twig", 47)->display($context);
                // line 48
                echo "                </section>
                <div class=\"container\">
                    <div class=\"row\" style=\"justify-content: center; color: black; text-align: center; padding: 20px\">
                        <img src=\"";
                // line 51
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
            ";
            } else {
                // line 61
                echo "                <div class=\"container landing\">
                    <div class=\"row\" style=\"justify-content: center; color: white; text-align: center;\">
                        <div class=\"col-sm-12 landing-header\">
                            <h1><strong>Software de nutrición para profesionales y plataforma para clientes</strong></h1>
                            <br>
                            <h3><strong>NutriK es un software de nutrición y dietética profesional que te ayudará</strong></h3>
                            <h3><strong>a ser más organizado y a ahorrarte tiempo</strong></h3>
                            <button class=\"btn btn-primary nutrik-button\" type=\"button\" onclick=\"redirectTo('register')\">Regístrate</button>
                        </div>
                    </div>
                    <div class=\"row\" style=\"justify-content: center; color: black; text-align: center; padding: 20px\">
                        <div class=\"col-sm-6\">
                            <p style=\"font-size: 17px;\">
                                En NutriK vas a encontrar profesionales sanitarios expertos en alimentación, nutrición y dietética.
                                Nos encargamos principalmente del diagnóstico nutricional-dietético general y específico, así como del tratamiento nutricional-dietético de enfermedades, como por ejemplo diabetes, malnutrición, insuficiencia renal, obesidad, enfermedad de Crohn, del tratamiento con nutrición artificial enteral y parenteral en hospitales, o a domicilio, de la prevención de patologías mediante la alimentación, nutrición y dietética, decidir colaborativamente en el tratamiento del paciente oncológico etc., además de adecuar la alimentación, nutrición y dietética de cada persona a cualquier situación fisiológica, como embarazo, lactancia, deporte, etc, y patológica con carácter de primera intención, como facultativo en su área propia de conocimiento, cual es la Nutrición y la Dietética.
                            </p>
                        </div>
                        <div class=\"col-sm-6\">
                            <img src=\"";
                // line 79
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("home4.jpg"), "html", null, true);
                echo "\" style=\"border-radius: 10%;width: 100%;height: 45rem;\">
                        </div>
                    </div>
                    <div class=\"row\" style=\"justify-content: center; color: black; text-align: center; padding: 20px\">
                        <div class=\"col-sm-6\">
                            <img src=\"";
                // line 84
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("calendar.png"), "html", null, true);
                echo "\" style=\"border-radius: 10%;width: 100%;height: 45rem;\">
                        </div>
                        <div class=\"col-sm-6\">
                            <p style=\"font-size: 17px;\">
                                En NutriK vas a encontrar profesionales sanitarios expertos en alimentación, nutrición y dietética.
                                Nos encargamos principalmente del diagnóstico nutricional-dietético general y específico, así como del tratamiento nutricional-dietético de enfermedades, como por ejemplo diabetes, malnutrición, insuficiencia renal, obesidad, enfermedad de Crohn, del tratamiento con nutrición artificial enteral y parenteral en hospitales, o a domicilio, de la prevención de patologías mediante la alimentación, nutrición y dietética, decidir colaborativamente en el tratamiento del paciente oncológico etc., además de adecuar la alimentación, nutrición y dietética de cada persona a cualquier situación fisiológica, como embarazo, lactancia, deporte, etc, y patológica con carácter de primera intención, como facultativo en su área propia de conocimiento, cual es la Nutrición y la Dietética.
                            </p>
                        </div>
                    </div>
                    <div class=\"row\" style=\"justify-content: center; color: black; text-align: center; padding: 20px\">
                        <div class=\"col-sm-6\">
                            <p style=\"font-size: 17px;\">
                                En NutriK vas a encontrar profesionales sanitarios expertos en alimentación, nutrición y dietética.
                                Nos encargamos principalmente del diagnóstico nutricional-dietético general y específico, así como del tratamiento nutricional-dietético de enfermedades, como por ejemplo diabetes, malnutrición, insuficiencia renal, obesidad, enfermedad de Crohn, del tratamiento con nutrición artificial enteral y parenteral en hospitales, o a domicilio, de la prevención de patologías mediante la alimentación, nutrición y dietética, decidir colaborativamente en el tratamiento del paciente oncológico etc., además de adecuar la alimentación, nutrición y dietética de cada persona a cualquier situación fisiológica, como embarazo, lactancia, deporte, etc, y patológica con carácter de primera intención, como facultativo en su área propia de conocimiento, cual es la Nutrición y la Dietética.
                            </p>
                        </div>
                        <div class=\"col-sm-6\">
                            <img src=\"";
                // line 101
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img7.jpg"), "html", null, true);
                echo "\" style=\"border-radius: 10%;width: 100%;height: 45rem;\">
                        </div>
                    </div>
                    <div class=\"row\" style=\"justify-content: center; color: black; text-align: center; padding: 20px\">
                        <div class=\"col-sm-6\">
                            <img src=\"";
                // line 106
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img9.jpg"), "html", null, true);
                echo "\" style=\"border-radius: 10%;width: 100%;height: 45rem;\">
                        </div>
                        <div class=\"col-sm-6\">
                            <p style=\"font-size: 17px;\">
                                En NutriK vas a encontrar profesionales sanitarios expertos en alimentación, nutrición y dietética.
                                Nos encargamos principalmente del diagnóstico nutricional-dietético general y específico, así como del tratamiento nutricional-dietético de enfermedades, como por ejemplo diabetes, malnutrición, insuficiencia renal, obesidad, enfermedad de Crohn, del tratamiento con nutrición artificial enteral y parenteral en hospitales, o a domicilio, de la prevención de patologías mediante la alimentación, nutrición y dietética, decidir colaborativamente en el tratamiento del paciente oncológico etc., además de adecuar la alimentación, nutrición y dietética de cada persona a cualquier situación fisiológica, como embarazo, lactancia, deporte, etc, y patológica con carácter de primera intención, como facultativo en su área propia de conocimiento, cual es la Nutrición y la Dietética.
                            </p>
                        </div>
                    </div>
                    <div class=\"row\" style=\"justify-content: center; color: black; text-align: center; padding: 20px\">
                        <div class=\"col-sm-6\">
                            <p style=\"font-size: 17px;\">
                                En NutriK vas a encontrar profesionales sanitarios expertos en alimentación, nutrición y dietética.
                                Nos encargamos principalmente del diagnóstico nutricional-dietético general y específico, así como del tratamiento nutricional-dietético de enfermedades, como por ejemplo diabetes, malnutrición, insuficiencia renal, obesidad, enfermedad de Crohn, del tratamiento con nutrición artificial enteral y parenteral en hospitales, o a domicilio, de la prevención de patologías mediante la alimentación, nutrición y dietética, decidir colaborativamente en el tratamiento del paciente oncológico etc., además de adecuar la alimentación, nutrición y dietética de cada persona a cualquier situación fisiológica, como embarazo, lactancia, deporte, etc, y patológica con carácter de primera intención, como facultativo en su área propia de conocimiento, cual es la Nutrición y la Dietética.
                            </p>
                        </div>
                        <div class=\"col-sm-6\">
                            <img src=\"";
                // line 123
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("appointment.png"), "html", null, true);
                echo "\" style=\"border-radius: 10%;width: 100%;height: 45rem;\">
                        </div>
                    </div>
                    <div class=\"row\" style=\"justify-content: center; color: black; text-align: center; padding: 20px\">
                        <div class=\"col-sm-6\">
                            <img src=\"";
                // line 128
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("home.jpg"), "html", null, true);
                echo "\" style=\"border-radius: 10%;width: 100%;height: 45rem;\">
                        </div>
                        <div class=\"col-sm-6\">
                            <p style=\"font-size: 17px;\">
                                En NutriK vas a encontrar profesionales sanitarios expertos en alimentación, nutrición y dietética.
                                Nos encargamos principalmente del diagnóstico nutricional-dietético general y específico, así como del tratamiento nutricional-dietético de enfermedades, como por ejemplo diabetes, malnutrición, insuficiencia renal, obesidad, enfermedad de Crohn, del tratamiento con nutrición artificial enteral y parenteral en hospitales, o a domicilio, de la prevención de patologías mediante la alimentación, nutrición y dietética, decidir colaborativamente en el tratamiento del paciente oncológico etc., además de adecuar la alimentación, nutrición y dietética de cada persona a cualquier situación fisiológica, como embarazo, lactancia, deporte, etc, y patológica con carácter de primera intención, como facultativo en su área propia de conocimiento, cual es la Nutrición y la Dietética.
                            </p>
                        </div>
                    </div>
                    <div class=\"row\" style=\"justify-content: center; color: white; text-align: center;\">
                        <div class=\"col-sm-12 landing-footer\">
                            <h1><strong style=\"font-size: 60px\">NutriK</strong></h1>
                            <h2>Comienza a mejorar tu negocio de nutrición ya!</h2>
                            <h3><strong>Alexandra Diana Dumitru</strong></h3>
                            <p style=\"font-size: 20px;\">Universidad de Granada</p>
                            <p style=\"font-size: 20px;\">Escuela Tecnica Superior de Ingeniería Informática y Telecomunicaciones © Todos los Derechos Reservados 2021</p>
                        </div>
                    </div>
                </div>
            ";
            }
            // line 148
            echo "        </section>
    ";
        } else {
            // line 150
            echo "        <section id=\"nutritionist-homepage\">
            <header>
                <!-- Calendar Page stylesheet -->
                <link rel=\"stylesheet\" href=\"";
            // line 153
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/home-calendar.css"), "html", null, true);
            echo "\" />
                <!-- Calendar JS -->
                <script src=\"";
            // line 155
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/calendar.js"), "html", null, true);
            echo "\"></script>
                <!-- NutriK Calendar JS -->
                <script src=\"";
            // line 157
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/js/nutrik-calendar.js"), "html", null, true);
            echo "\"></script>
            </header>
            <div class=\"container\">
                <div class=\"col-sm-12\">
                    <div id=\"nutritionist-homepage-block\">
                        <div class=\"col-sm-6\">

                            <div class=\"col-sm-12 nutritionist-notifications\">
                                <h3>Mis notificaciones
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-info-circle\" viewBox=\"0 0 16 16\" style=\"width: 2rem; height: 2rem; margin-bottom: -3px\"
                                         onclick=\"openModal('openMyInfoNotificationsModal')\">
                                        <path d=\"M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z\"/>
                                        <path d=\"m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z\"/>
                                    </svg>
                                </h3>
                                <button style=\"display: none\" type=\"button\" class=\"btn btn-primary\" id=\"openMyInfoNotificationsModal\" data-toggle=\"modal\" data-target=\"#infoNotificationsModal\"></button>
                                <div class=\"modal fade\" id=\"infoNotificationsModal\">
                                    <div class=\"modal-dialog\">
                                        <div class=\"modal-content\">
                                            <!-- Modal body -->
                                            <div class=\"modal-body\" style=\"text-align: start\">
                                                <span>
                                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-bookmark-fill\" viewBox=\"0 0 16 16\" style=\"margin-bottom: -5px; width: 20px; height: 20px\" color=\"#d6e9c6\">
                                                        <path d=\"M2 2v13.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2z\"/></svg>
                                                    Notificaciones para nuevo contenido
                                                </span>
                                                <br/><br/>
                                                <span>
                                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-bookmark-fill\" viewBox=\"0 0 16 16\" style=\"margin-bottom: -5px; width: 20px; height: 20px\" color=\"#bce8f1\">
                                                        <path d=\"M2 2v13.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2z\"/></svg>
                                                    Notificaciones para la modificación de contenido
                                                </span>
                                                <br/><br/>
                                                <span>
                                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-bookmark-fill\" viewBox=\"0 0 16 16\" style=\"margin-bottom: -5px; width: 20px; height: 20px\" color=\"#ebccd1\">
                                                        <path d=\"M2 2v13.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2z\"/></svg>
                                                    Notificaciones para la eliminación de contenido
                                                </span>
                                                <br/>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div style=\"overflow-y: auto; height: 29rem\">
                                    ";
            // line 202
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["logs"] ?? $this->getContext($context, "logs")));
            foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                // line 203
                echo "                                        <div class=\"row\">
                                            ";
                // line 204
                if (twig_in_filter("add", $this->getAttribute($context["log"], "source", []))) {
                    // line 205
                    echo "                                                <div class=\"alert alert-success\" role=\"alert\" style=\"margin-bottom: 0; padding: 10px\">
                                                    ";
                    // line 206
                    echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "context", []), "html", null, true);
                    echo "
                                                </div>
                                            ";
                } elseif (twig_in_filter("delete", $this->getAttribute(                // line 208
$context["log"], "source", []))) {
                    // line 209
                    echo "                                                <div class=\"alert alert-danger\" role=\"alert\" style=\"margin-bottom: 0; padding: 10px\">
                                                    ";
                    // line 210
                    echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "context", []), "html", null, true);
                    echo "
                                                </div>
                                            ";
                } else {
                    // line 213
                    echo "                                                <div class=\"alert alert-info\" role=\"alert\" style=\"margin-bottom: 0; padding: 10px\">
                                                    ";
                    // line 214
                    echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "context", []), "html", null, true);
                    echo "
                                                </div>
                                            ";
                }
                // line 217
                echo "                                        </div>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 219
            echo "                                </div>
                            </div>
                            <div class=\"col-sm-12 nutritionist-kpis\">
                                <img src=\"";
            // line 222
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("chart.png"), "html", null, true);
            echo "\">
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <div class=\"col-sm-12 nutritionist-calendar\">
                                ";
            // line 227
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["calendar_events"] ?? $this->getContext($context, "calendar_events")));
            foreach ($context['_seq'] as $context["_key"] => $context["calendar_event"]) {
                // line 228
                echo "                                    <div class=\"calendar_event\" style=\"color: black; display: none\">
                                        <input class=\"calendar_event_id\" value=\"";
                // line 229
                echo twig_escape_filter($this->env, $this->getAttribute($context["calendar_event"], "id", [], "array"), "html", null, true);
                echo "\"/>
                                        <input class=\"calendar_event_title\" value=\"";
                // line 230
                echo twig_escape_filter($this->env, $this->getAttribute($context["calendar_event"], "title", [], "array"), "html", null, true);
                echo "\"/>
                                        <input class=\"calendar_event_start\" value=\"";
                // line 231
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["calendar_event"], "start", [], "array"), "Y-m-d H:i:s"), "html", null, true);
                echo "\"/>
                                        <input class=\"calendar_event_end\" value=\"";
                // line 232
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["calendar_event"], "end", [], "array"), "Y-m-d H:i:s"), "html", null, true);
                echo "\"/>
                                        <input class=\"calendar_event_url\" value=\"";
                // line 233
                echo twig_escape_filter($this->env, $this->getAttribute($context["calendar_event"], "url", [], "array"), "html", null, true);
                echo "\"/>
                                        <input class=\"calendar_event_type\" value=\"";
                // line 234
                echo twig_escape_filter($this->env, $this->getAttribute($context["calendar_event"], "type", [], "array"), "html", null, true);
                echo "\"/>
                                    </div>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['calendar_event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 237
            echo "                                <div id='wrap'>
                                    <div id='calendar'></div>
                                    <div style='clear:both'></div>
                                </div>
                            </div>
                            <div class=\"col-sm-12 nutritionist-appointments-events\">
                                <strong>Mis próximas consultas y eventos</strong>
                                <hr style=\"margin-top: 10px; margin-bottom: 10px\"/>
                                <div class=\"nutritionist-appointments\">
                                    ";
            // line 246
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["appointments"] ?? $this->getContext($context, "appointments")));
            foreach ($context['_seq'] as $context["_key"] => $context["appointment"]) {
                // line 247
                echo "                                        <p>
                                            <span>
                                                Consulta:
                                                <strong>";
                // line 250
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["appointment"], "date", []), "Y-m-d H:i:s"), "html", null, true);
                echo ":</strong>
                                                <a href=\"";
                // line 251
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nutritionist_edit_appointment", ["id_appointment" => $this->getAttribute($context["appointment"], "idAppointment", [])]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["appointment"], "description", []), "html", null, true);
                echo "</a>
                                            </span>
                                        </p>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['appointment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 255
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["events"] ?? $this->getContext($context, "events")));
            foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                // line 256
                echo "                                        <p>
                                            <span>
                                                Evento:
                                                <strong>";
                // line 259
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["event"], "date", []), "Y-m-d H:i:s"), "html", null, true);
                echo ":</strong>
                                                <a href=\"";
                // line 260
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nutritionist_edit_event", ["id_event" => $this->getAttribute($context["event"], "idEvent", [])]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "title", []), "html", null, true);
                echo "</a>
                                            </span>
                                        </p>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 264
            echo "                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    ";
        }
        // line 272
        echo "    ";
        $this->loadTemplate("footer.html.twig", "@Customs/index.html.twig", 272)->display($context);
        // line 273
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
        return array (  503 => 7,  495 => 273,  492 => 272,  482 => 264,  470 => 260,  466 => 259,  461 => 256,  456 => 255,  444 => 251,  440 => 250,  435 => 247,  431 => 246,  420 => 237,  411 => 234,  407 => 233,  403 => 232,  399 => 231,  395 => 230,  391 => 229,  388 => 228,  384 => 227,  376 => 222,  371 => 219,  364 => 217,  358 => 214,  355 => 213,  349 => 210,  346 => 209,  344 => 208,  339 => 206,  336 => 205,  334 => 204,  331 => 203,  327 => 202,  279 => 157,  274 => 155,  269 => 153,  264 => 150,  260 => 148,  237 => 128,  229 => 123,  209 => 106,  201 => 101,  181 => 84,  173 => 79,  153 => 61,  140 => 51,  135 => 48,  133 => 47,  130 => 46,  128 => 45,  125 => 44,  123 => 43,  120 => 42,  118 => 41,  112 => 38,  106 => 35,  100 => 32,  94 => 29,  88 => 26,  82 => 23,  76 => 20,  67 => 14,  60 => 10,  56 => 8,  54 => 7,  47 => 2,  35 => 1,);
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
        <script src=\"{{ asset('bundles/framework/js/customs.js') }}\"></script>

        <!-- Chart JS -->
        <script src=\"{{ asset('public/js/chart.js') }}\"></script>
    </header>
    <section id=\"default-header\">
        {% include 'header.html.twig' %}
    </section>
    {% if not is_granted('ROLE_NUTR') %}
        <section id=\"customer-homepage\">
            {% if app.user != null %}
                <section id=\"customer-header\">
                    {% include 'customerheader.html.twig' %}
                </section>
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
            {% else %}
                <div class=\"container landing\">
                    <div class=\"row\" style=\"justify-content: center; color: white; text-align: center;\">
                        <div class=\"col-sm-12 landing-header\">
                            <h1><strong>Software de nutrición para profesionales y plataforma para clientes</strong></h1>
                            <br>
                            <h3><strong>NutriK es un software de nutrición y dietética profesional que te ayudará</strong></h3>
                            <h3><strong>a ser más organizado y a ahorrarte tiempo</strong></h3>
                            <button class=\"btn btn-primary nutrik-button\" type=\"button\" onclick=\"redirectTo('register')\">Regístrate</button>
                        </div>
                    </div>
                    <div class=\"row\" style=\"justify-content: center; color: black; text-align: center; padding: 20px\">
                        <div class=\"col-sm-6\">
                            <p style=\"font-size: 17px;\">
                                En NutriK vas a encontrar profesionales sanitarios expertos en alimentación, nutrición y dietética.
                                Nos encargamos principalmente del diagnóstico nutricional-dietético general y específico, así como del tratamiento nutricional-dietético de enfermedades, como por ejemplo diabetes, malnutrición, insuficiencia renal, obesidad, enfermedad de Crohn, del tratamiento con nutrición artificial enteral y parenteral en hospitales, o a domicilio, de la prevención de patologías mediante la alimentación, nutrición y dietética, decidir colaborativamente en el tratamiento del paciente oncológico etc., además de adecuar la alimentación, nutrición y dietética de cada persona a cualquier situación fisiológica, como embarazo, lactancia, deporte, etc, y patológica con carácter de primera intención, como facultativo en su área propia de conocimiento, cual es la Nutrición y la Dietética.
                            </p>
                        </div>
                        <div class=\"col-sm-6\">
                            <img src=\"{{ asset('home4.jpg') }}\" style=\"border-radius: 10%;width: 100%;height: 45rem;\">
                        </div>
                    </div>
                    <div class=\"row\" style=\"justify-content: center; color: black; text-align: center; padding: 20px\">
                        <div class=\"col-sm-6\">
                            <img src=\"{{ asset('calendar.png') }}\" style=\"border-radius: 10%;width: 100%;height: 45rem;\">
                        </div>
                        <div class=\"col-sm-6\">
                            <p style=\"font-size: 17px;\">
                                En NutriK vas a encontrar profesionales sanitarios expertos en alimentación, nutrición y dietética.
                                Nos encargamos principalmente del diagnóstico nutricional-dietético general y específico, así como del tratamiento nutricional-dietético de enfermedades, como por ejemplo diabetes, malnutrición, insuficiencia renal, obesidad, enfermedad de Crohn, del tratamiento con nutrición artificial enteral y parenteral en hospitales, o a domicilio, de la prevención de patologías mediante la alimentación, nutrición y dietética, decidir colaborativamente en el tratamiento del paciente oncológico etc., además de adecuar la alimentación, nutrición y dietética de cada persona a cualquier situación fisiológica, como embarazo, lactancia, deporte, etc, y patológica con carácter de primera intención, como facultativo en su área propia de conocimiento, cual es la Nutrición y la Dietética.
                            </p>
                        </div>
                    </div>
                    <div class=\"row\" style=\"justify-content: center; color: black; text-align: center; padding: 20px\">
                        <div class=\"col-sm-6\">
                            <p style=\"font-size: 17px;\">
                                En NutriK vas a encontrar profesionales sanitarios expertos en alimentación, nutrición y dietética.
                                Nos encargamos principalmente del diagnóstico nutricional-dietético general y específico, así como del tratamiento nutricional-dietético de enfermedades, como por ejemplo diabetes, malnutrición, insuficiencia renal, obesidad, enfermedad de Crohn, del tratamiento con nutrición artificial enteral y parenteral en hospitales, o a domicilio, de la prevención de patologías mediante la alimentación, nutrición y dietética, decidir colaborativamente en el tratamiento del paciente oncológico etc., además de adecuar la alimentación, nutrición y dietética de cada persona a cualquier situación fisiológica, como embarazo, lactancia, deporte, etc, y patológica con carácter de primera intención, como facultativo en su área propia de conocimiento, cual es la Nutrición y la Dietética.
                            </p>
                        </div>
                        <div class=\"col-sm-6\">
                            <img src=\"{{ asset('img7.jpg') }}\" style=\"border-radius: 10%;width: 100%;height: 45rem;\">
                        </div>
                    </div>
                    <div class=\"row\" style=\"justify-content: center; color: black; text-align: center; padding: 20px\">
                        <div class=\"col-sm-6\">
                            <img src=\"{{ asset('img9.jpg') }}\" style=\"border-radius: 10%;width: 100%;height: 45rem;\">
                        </div>
                        <div class=\"col-sm-6\">
                            <p style=\"font-size: 17px;\">
                                En NutriK vas a encontrar profesionales sanitarios expertos en alimentación, nutrición y dietética.
                                Nos encargamos principalmente del diagnóstico nutricional-dietético general y específico, así como del tratamiento nutricional-dietético de enfermedades, como por ejemplo diabetes, malnutrición, insuficiencia renal, obesidad, enfermedad de Crohn, del tratamiento con nutrición artificial enteral y parenteral en hospitales, o a domicilio, de la prevención de patologías mediante la alimentación, nutrición y dietética, decidir colaborativamente en el tratamiento del paciente oncológico etc., además de adecuar la alimentación, nutrición y dietética de cada persona a cualquier situación fisiológica, como embarazo, lactancia, deporte, etc, y patológica con carácter de primera intención, como facultativo en su área propia de conocimiento, cual es la Nutrición y la Dietética.
                            </p>
                        </div>
                    </div>
                    <div class=\"row\" style=\"justify-content: center; color: black; text-align: center; padding: 20px\">
                        <div class=\"col-sm-6\">
                            <p style=\"font-size: 17px;\">
                                En NutriK vas a encontrar profesionales sanitarios expertos en alimentación, nutrición y dietética.
                                Nos encargamos principalmente del diagnóstico nutricional-dietético general y específico, así como del tratamiento nutricional-dietético de enfermedades, como por ejemplo diabetes, malnutrición, insuficiencia renal, obesidad, enfermedad de Crohn, del tratamiento con nutrición artificial enteral y parenteral en hospitales, o a domicilio, de la prevención de patologías mediante la alimentación, nutrición y dietética, decidir colaborativamente en el tratamiento del paciente oncológico etc., además de adecuar la alimentación, nutrición y dietética de cada persona a cualquier situación fisiológica, como embarazo, lactancia, deporte, etc, y patológica con carácter de primera intención, como facultativo en su área propia de conocimiento, cual es la Nutrición y la Dietética.
                            </p>
                        </div>
                        <div class=\"col-sm-6\">
                            <img src=\"{{ asset('appointment.png') }}\" style=\"border-radius: 10%;width: 100%;height: 45rem;\">
                        </div>
                    </div>
                    <div class=\"row\" style=\"justify-content: center; color: black; text-align: center; padding: 20px\">
                        <div class=\"col-sm-6\">
                            <img src=\"{{ asset('home.jpg') }}\" style=\"border-radius: 10%;width: 100%;height: 45rem;\">
                        </div>
                        <div class=\"col-sm-6\">
                            <p style=\"font-size: 17px;\">
                                En NutriK vas a encontrar profesionales sanitarios expertos en alimentación, nutrición y dietética.
                                Nos encargamos principalmente del diagnóstico nutricional-dietético general y específico, así como del tratamiento nutricional-dietético de enfermedades, como por ejemplo diabetes, malnutrición, insuficiencia renal, obesidad, enfermedad de Crohn, del tratamiento con nutrición artificial enteral y parenteral en hospitales, o a domicilio, de la prevención de patologías mediante la alimentación, nutrición y dietética, decidir colaborativamente en el tratamiento del paciente oncológico etc., además de adecuar la alimentación, nutrición y dietética de cada persona a cualquier situación fisiológica, como embarazo, lactancia, deporte, etc, y patológica con carácter de primera intención, como facultativo en su área propia de conocimiento, cual es la Nutrición y la Dietética.
                            </p>
                        </div>
                    </div>
                    <div class=\"row\" style=\"justify-content: center; color: white; text-align: center;\">
                        <div class=\"col-sm-12 landing-footer\">
                            <h1><strong style=\"font-size: 60px\">NutriK</strong></h1>
                            <h2>Comienza a mejorar tu negocio de nutrición ya!</h2>
                            <h3><strong>Alexandra Diana Dumitru</strong></h3>
                            <p style=\"font-size: 20px;\">Universidad de Granada</p>
                            <p style=\"font-size: 20px;\">Escuela Tecnica Superior de Ingeniería Informática y Telecomunicaciones © Todos los Derechos Reservados 2021</p>
                        </div>
                    </div>
                </div>
            {% endif %}
        </section>
    {% else %}
        <section id=\"nutritionist-homepage\">
            <header>
                <!-- Calendar Page stylesheet -->
                <link rel=\"stylesheet\" href=\"{{ asset('bundles/framework/css/home-calendar.css') }}\" />
                <!-- Calendar JS -->
                <script src=\"{{ asset('public/js/calendar.js') }}\"></script>
                <!-- NutriK Calendar JS -->
                <script src=\"{{ asset('bundles/framework/js/nutrik-calendar.js') }}\"></script>
            </header>
            <div class=\"container\">
                <div class=\"col-sm-12\">
                    <div id=\"nutritionist-homepage-block\">
                        <div class=\"col-sm-6\">

                            <div class=\"col-sm-12 nutritionist-notifications\">
                                <h3>Mis notificaciones
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-info-circle\" viewBox=\"0 0 16 16\" style=\"width: 2rem; height: 2rem; margin-bottom: -3px\"
                                         onclick=\"openModal('openMyInfoNotificationsModal')\">
                                        <path d=\"M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z\"/>
                                        <path d=\"m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z\"/>
                                    </svg>
                                </h3>
                                <button style=\"display: none\" type=\"button\" class=\"btn btn-primary\" id=\"openMyInfoNotificationsModal\" data-toggle=\"modal\" data-target=\"#infoNotificationsModal\"></button>
                                <div class=\"modal fade\" id=\"infoNotificationsModal\">
                                    <div class=\"modal-dialog\">
                                        <div class=\"modal-content\">
                                            <!-- Modal body -->
                                            <div class=\"modal-body\" style=\"text-align: start\">
                                                <span>
                                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-bookmark-fill\" viewBox=\"0 0 16 16\" style=\"margin-bottom: -5px; width: 20px; height: 20px\" color=\"#d6e9c6\">
                                                        <path d=\"M2 2v13.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2z\"/></svg>
                                                    Notificaciones para nuevo contenido
                                                </span>
                                                <br/><br/>
                                                <span>
                                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-bookmark-fill\" viewBox=\"0 0 16 16\" style=\"margin-bottom: -5px; width: 20px; height: 20px\" color=\"#bce8f1\">
                                                        <path d=\"M2 2v13.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2z\"/></svg>
                                                    Notificaciones para la modificación de contenido
                                                </span>
                                                <br/><br/>
                                                <span>
                                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-bookmark-fill\" viewBox=\"0 0 16 16\" style=\"margin-bottom: -5px; width: 20px; height: 20px\" color=\"#ebccd1\">
                                                        <path d=\"M2 2v13.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2z\"/></svg>
                                                    Notificaciones para la eliminación de contenido
                                                </span>
                                                <br/>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div style=\"overflow-y: auto; height: 29rem\">
                                    {% for log in logs %}
                                        <div class=\"row\">
                                            {% if 'add' in log.source %}
                                                <div class=\"alert alert-success\" role=\"alert\" style=\"margin-bottom: 0; padding: 10px\">
                                                    {{ log.context }}
                                                </div>
                                            {% elseif 'delete' in log.source %}
                                                <div class=\"alert alert-danger\" role=\"alert\" style=\"margin-bottom: 0; padding: 10px\">
                                                    {{ log.context }}
                                                </div>
                                            {% else %}
                                                <div class=\"alert alert-info\" role=\"alert\" style=\"margin-bottom: 0; padding: 10px\">
                                                    {{ log.context }}
                                                </div>
                                            {% endif %}
                                        </div>
                                    {% endfor %}
                                </div>
                            </div>
                            <div class=\"col-sm-12 nutritionist-kpis\">
                                <img src=\"{{ asset('chart.png') }}\">
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <div class=\"col-sm-12 nutritionist-calendar\">
                                {% for calendar_event in calendar_events %}
                                    <div class=\"calendar_event\" style=\"color: black; display: none\">
                                        <input class=\"calendar_event_id\" value=\"{{ calendar_event['id'] }}\"/>
                                        <input class=\"calendar_event_title\" value=\"{{ calendar_event['title'] }}\"/>
                                        <input class=\"calendar_event_start\" value=\"{{ calendar_event['start']|date('Y-m-d H:i:s') }}\"/>
                                        <input class=\"calendar_event_end\" value=\"{{ calendar_event['end']|date('Y-m-d H:i:s') }}\"/>
                                        <input class=\"calendar_event_url\" value=\"{{ calendar_event['url'] }}\"/>
                                        <input class=\"calendar_event_type\" value=\"{{ calendar_event['type'] }}\"/>
                                    </div>
                                {% endfor %}
                                <div id='wrap'>
                                    <div id='calendar'></div>
                                    <div style='clear:both'></div>
                                </div>
                            </div>
                            <div class=\"col-sm-12 nutritionist-appointments-events\">
                                <strong>Mis próximas consultas y eventos</strong>
                                <hr style=\"margin-top: 10px; margin-bottom: 10px\"/>
                                <div class=\"nutritionist-appointments\">
                                    {% for appointment in appointments %}
                                        <p>
                                            <span>
                                                Consulta:
                                                <strong>{{ appointment.date|date('Y-m-d H:i:s') }}:</strong>
                                                <a href=\"{{ path(\"nutritionist_edit_appointment\",{\"id_appointment\":appointment.idAppointment}) }}\">{{ appointment.description }}</a>
                                            </span>
                                        </p>
                                    {% endfor %}
                                    {% for event in events %}
                                        <p>
                                            <span>
                                                Evento:
                                                <strong>{{ event.date|date('Y-m-d H:i:s') }}:</strong>
                                                <a href=\"{{ path(\"nutritionist_edit_event\",{\"id_event\":event.idEvent}) }}\">{{ event.title }}</a>
                                            </span>
                                        </p>
                                    {% endfor %}
                                </div>
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
