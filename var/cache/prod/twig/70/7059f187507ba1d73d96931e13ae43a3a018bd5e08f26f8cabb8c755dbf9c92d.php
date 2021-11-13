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

/* @Nutritionist/nutritionist-personal-data.html.twig */
class __TwigTemplate_526808bfdf98f115c0c32d1a35b5933f300daa945767194dd88e9a84eff8de3d extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Nutritionist/nutritionist-personal-data.html.twig"));

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
        <!-- Customs JS -->
        <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/js/customs.js"), "html", null, true);
        echo "\"></script>
    </header>
    <section id=\"default-header\">
        ";
        // line 11
        $this->loadTemplate("header.html.twig", "@Nutritionist/nutritionist-personal-data.html.twig", 11)->display($context);
        // line 12
        echo "    </section>
    <section id=\"nutritionist-personal-data\">
        <form class=\"form\" action=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nutritionist_personal_data");
        echo "\" method=\"post\">
            ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "flashbag", [], "method"), "get", [0 => "updateNutritionistDataKOStatus"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 16
            echo "                <div class=\"row\" style=\"width: 95%; margin-left: 2.5%; margin-top: 10px; margin-bottom: -10px;\">
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
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "flashbag", [], "method"), "get", [0 => "updateNutritionistDataOKStatus"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 23
            echo "                <div class=\"row\" style=\"width: 95%; margin-left: 2.5%; margin-top: 10px; margin-bottom: -10px;\">
                    <div class=\"alert alert-success\" role=\"alert\" style=\"margin-bottom: 0\">
                        ";
            // line 25
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "            <div class=\"container\">
                <div class=\"col-sm-6\" style=\"padding-left: 2%\">
                    <div class=\"personal-data-header\">
                        ";
        // line 32
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "image", []) != "")) {
            // line 33
            echo "                            <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "image", [])), "html", null, true);
            echo "\" alt=\"\">
                        ";
        } else {
            // line 35
            echo "                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-person-circle\" viewBox=\"0 0 16 16\">
                                <path d=\"M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z\"/>
                                <path fill-rule=\"evenodd\" d=\"M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z\"/>
                            </svg>
                        ";
        }
        // line 40
        echo "                        <h3 style=\"display: inline-flex; margin-left: 10px;\">Mis Datos Personales</h3>
                    </div>
                    <br/>
                    <div class=\"form-check\">
                        <label class=\"form-check-label\" for=\"idGenderOther\">
                            Otro
                        </label>
                        <input class=\"form-check-input\" type=\"checkbox\" value=\"0\" id=\"idGenderOther\" ";
        // line 47
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "idGender", []) == 0)) {
            echo " checked=\"checked\" ";
        }
        echo " onclick=\"checkIdGender(this.id, this.value)\">
                        <label class=\"form-check-label\" for=\"idGenderFemale\">
                            Sra.
                        </label>
                        <input class=\"form-check-input\" type=\"checkbox\" value=\"1\" id=\"idGenderFemale\" ";
        // line 51
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "idGender", []) == 1)) {
            echo " checked=\"checked\" ";
        }
        echo " onclick=\"checkIdGender(this.id, this.value)\">
                        <label class=\"form-check-label\" for=\"idGenderMale\">
                            Sr.
                        </label>
                        <input class=\"form-check-input\" type=\"checkbox\" value=\"2\" id=\"idGenderMale\" ";
        // line 55
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "idGender", []) == 2)) {
            echo " checked=\"checked\" ";
        }
        echo " onclick=\"checkIdGender(this.id, this.value)\">
                        <input type=\"hidden\" id=\"nutritionistGender\" name=\"_nutritionistGender\" value=\"0\"/>
                    </div>
                    <div class=\"personal-data-fields\">
                        <label for=\"firstname\">Nombre:</label><input type=\"text\" id=\"firstname\" name=\"_firstname\" class=\"form-control\" value=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "firstname", []), "html", null, true);
        echo "\"/>
                        <label for=\"lastname\">Apellidos:</label><input type=\"text\" id=\"lastname\" name=\"_lastname\" class=\"form-control\" value=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "lastname", []), "html", null, true);
        echo "\"/>
                        <label for=\"email\">Email:</label><input type=\"email\" id=\"email\" name=\"_email\" class=\"form-control\" value=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "email", []), "html", null, true);
        echo "\"/>
                        <label for=\"password\">Contraseña:</label><input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\"/>
                        <label for=\"confirm_password\">Confirmar Contraseña:</label><input type=\"password\" id=\"confirm_password\" name=\"_confirm_password\" class=\"form-control\"/>
                        <label for=\"birthday\">Fecha de nacimiento:</label><input type=\"date\" id=\"birthday\" name=\"_birthday\" class=\"form-control\" value=\"";
        // line 64
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "birthday", []), "Y-m-d"), "html", null, true);
        echo "\"/>
                    </div>
                </div>
                <div class=\"col-sm-6\" style=\"display: inline-flex\">
                    <div class=\"personal-data-fields\" style=\"margin-top: 21%; width: 100%; margin-left: 0; padding: 3px\">
                        <label for=\"bibliografia\">Descripción / Bibliografía:</label>
                        <textarea type=\"text\" id=\"bibliografia\" name=\"_bibliografia\" class=\"form-control\" style=\"height: 10rem\">";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "description", []), "html", null, true);
        echo "</textarea>
                        <label for=\"estudios\">Estudios:</label>
                        <textarea type=\"text\" id=\"estudios\" name=\"_estudios\" class=\"form-control\" style=\"height: 7rem\">";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "studies", []), "html", null, true);
        echo "</textarea>
                        <label for=\"antiquity\">Antiguedad (años):</label>
                        <input type=\"number\" id=\"antiquity\" name=\"_antiquity\" class=\"form-control\" value=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "antiquity", []), "html", null, true);
        echo "\" style=\"width: 85%\"/>
                        <label for=\"n_colegiado\">Número de Colegiado:</label>
                        <input type=\"number\" id=\"n_colegiado\" name=\"_n_colegiado\" class=\"form-control\" value=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "collegiate_number", []), "html", null, true);
        echo "\" style=\"width: 85%\"/>
                        <strong>
                            Obtener más informacion acerca de tu perfil de colegiado
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-info-circle\" viewBox=\"0 0 16 16\" style=\"width: 2rem; height: 2rem; margin-bottom: -6px\"
                                 onclick=\"openModal('openCollegiateNumberModal')\">
                                <path d=\"M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z\"/>
                                <path d=\"m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z\"/>
                            </svg>
                        </strong>
                        <button style=\"display: none\" type=\"button\" class=\"btn btn-primary\" id=\"openCollegiateNumberModal\" data-toggle=\"modal\" data-target=\"#infoCollegiateNumberModal\"></button>
                        <div class=\"modal fade\" id=\"infoCollegiateNumberModal\">
                            <div class=\"modal-dialog\" style=\"margin: 5rem 22rem;\">
                                <div class=\"modal-content\" style=\"width: 150rem; height: 90rem\">
                                    <!-- Modal body -->
                                    <iframe id=\"inlineFrameExample\"
                                            title=\"Inline Frame Example\"
                                            width=\"100%\"
                                            height=\"100%\"
                                            src=\"https://www.consejodietistasnutricionistas.com/que-es-un-dietista-nutricionista/registro-nacional-de-dietistas-nutricionistas/\">
                                    </iframe>
                                </div>
                            </div>
                        </div>
                        <div class=\"save-button-item\" style=\"width: 100%;\">
                            <input class=\"btn save-button\" type=\"submit\" value=\"Guardar\"/>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
    </html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Nutritionist/nutritionist-personal-data.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  204 => 76,  199 => 74,  194 => 72,  189 => 70,  180 => 64,  174 => 61,  170 => 60,  166 => 59,  157 => 55,  148 => 51,  139 => 47,  130 => 40,  123 => 35,  117 => 33,  115 => 32,  110 => 29,  100 => 25,  96 => 23,  91 => 22,  81 => 18,  77 => 16,  73 => 15,  69 => 14,  65 => 12,  63 => 11,  57 => 8,  52 => 6,  46 => 2,  34 => 1,);
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
        <!-- Customs JS -->
        <script src=\"{{ asset('bundles/framework/js/customs.js') }}\"></script>
    </header>
    <section id=\"default-header\">
        {% include 'header.html.twig' %}
    </section>
    <section id=\"nutritionist-personal-data\">
        <form class=\"form\" action=\"{{ path(\"nutritionist_personal_data\") }}\" method=\"post\">
            {% for message in  app.session.flashbag().get('updateNutritionistDataKOStatus') %}
                <div class=\"row\" style=\"width: 95%; margin-left: 2.5%; margin-top: 10px; margin-bottom: -10px;\">
                    <div class=\"alert alert-danger\" role=\"alert\" style=\"margin-bottom: 0\">
                        {{ message }}
                    </div>
                </div>
            {% endfor %}
            {% for message in  app.session.flashbag().get('updateNutritionistDataOKStatus') %}
                <div class=\"row\" style=\"width: 95%; margin-left: 2.5%; margin-top: 10px; margin-bottom: -10px;\">
                    <div class=\"alert alert-success\" role=\"alert\" style=\"margin-bottom: 0\">
                        {{ message }}
                    </div>
                </div>
            {% endfor %}
            <div class=\"container\">
                <div class=\"col-sm-6\" style=\"padding-left: 2%\">
                    <div class=\"personal-data-header\">
                        {% if app.user.image != \"\" %}
                            <img src=\"{{ asset(app.user.image) }}\" alt=\"\">
                        {% else %}
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-person-circle\" viewBox=\"0 0 16 16\">
                                <path d=\"M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z\"/>
                                <path fill-rule=\"evenodd\" d=\"M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z\"/>
                            </svg>
                        {% endif %}
                        <h3 style=\"display: inline-flex; margin-left: 10px;\">Mis Datos Personales</h3>
                    </div>
                    <br/>
                    <div class=\"form-check\">
                        <label class=\"form-check-label\" for=\"idGenderOther\">
                            Otro
                        </label>
                        <input class=\"form-check-input\" type=\"checkbox\" value=\"0\" id=\"idGenderOther\" {% if app.user.idGender == 0 %} checked=\"checked\" {% endif %} onclick=\"checkIdGender(this.id, this.value)\">
                        <label class=\"form-check-label\" for=\"idGenderFemale\">
                            Sra.
                        </label>
                        <input class=\"form-check-input\" type=\"checkbox\" value=\"1\" id=\"idGenderFemale\" {% if app.user.idGender == 1 %} checked=\"checked\" {% endif %} onclick=\"checkIdGender(this.id, this.value)\">
                        <label class=\"form-check-label\" for=\"idGenderMale\">
                            Sr.
                        </label>
                        <input class=\"form-check-input\" type=\"checkbox\" value=\"2\" id=\"idGenderMale\" {% if app.user.idGender == 2 %} checked=\"checked\" {% endif %} onclick=\"checkIdGender(this.id, this.value)\">
                        <input type=\"hidden\" id=\"nutritionistGender\" name=\"_nutritionistGender\" value=\"0\"/>
                    </div>
                    <div class=\"personal-data-fields\">
                        <label for=\"firstname\">Nombre:</label><input type=\"text\" id=\"firstname\" name=\"_firstname\" class=\"form-control\" value=\"{{ app.user.firstname }}\"/>
                        <label for=\"lastname\">Apellidos:</label><input type=\"text\" id=\"lastname\" name=\"_lastname\" class=\"form-control\" value=\"{{ app.user.lastname }}\"/>
                        <label for=\"email\">Email:</label><input type=\"email\" id=\"email\" name=\"_email\" class=\"form-control\" value=\"{{ app.user.email }}\"/>
                        <label for=\"password\">Contraseña:</label><input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\"/>
                        <label for=\"confirm_password\">Confirmar Contraseña:</label><input type=\"password\" id=\"confirm_password\" name=\"_confirm_password\" class=\"form-control\"/>
                        <label for=\"birthday\">Fecha de nacimiento:</label><input type=\"date\" id=\"birthday\" name=\"_birthday\" class=\"form-control\" value=\"{{ app.user.birthday|date('Y-m-d') }}\"/>
                    </div>
                </div>
                <div class=\"col-sm-6\" style=\"display: inline-flex\">
                    <div class=\"personal-data-fields\" style=\"margin-top: 21%; width: 100%; margin-left: 0; padding: 3px\">
                        <label for=\"bibliografia\">Descripción / Bibliografía:</label>
                        <textarea type=\"text\" id=\"bibliografia\" name=\"_bibliografia\" class=\"form-control\" style=\"height: 10rem\">{{ app.user.description }}</textarea>
                        <label for=\"estudios\">Estudios:</label>
                        <textarea type=\"text\" id=\"estudios\" name=\"_estudios\" class=\"form-control\" style=\"height: 7rem\">{{ app.user.studies }}</textarea>
                        <label for=\"antiquity\">Antiguedad (años):</label>
                        <input type=\"number\" id=\"antiquity\" name=\"_antiquity\" class=\"form-control\" value=\"{{ app.user.antiquity }}\" style=\"width: 85%\"/>
                        <label for=\"n_colegiado\">Número de Colegiado:</label>
                        <input type=\"number\" id=\"n_colegiado\" name=\"_n_colegiado\" class=\"form-control\" value=\"{{ app.user.collegiate_number }}\" style=\"width: 85%\"/>
                        <strong>
                            Obtener más informacion acerca de tu perfil de colegiado
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-info-circle\" viewBox=\"0 0 16 16\" style=\"width: 2rem; height: 2rem; margin-bottom: -6px\"
                                 onclick=\"openModal('openCollegiateNumberModal')\">
                                <path d=\"M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z\"/>
                                <path d=\"m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z\"/>
                            </svg>
                        </strong>
                        <button style=\"display: none\" type=\"button\" class=\"btn btn-primary\" id=\"openCollegiateNumberModal\" data-toggle=\"modal\" data-target=\"#infoCollegiateNumberModal\"></button>
                        <div class=\"modal fade\" id=\"infoCollegiateNumberModal\">
                            <div class=\"modal-dialog\" style=\"margin: 5rem 22rem;\">
                                <div class=\"modal-content\" style=\"width: 150rem; height: 90rem\">
                                    <!-- Modal body -->
                                    <iframe id=\"inlineFrameExample\"
                                            title=\"Inline Frame Example\"
                                            width=\"100%\"
                                            height=\"100%\"
                                            src=\"https://www.consejodietistasnutricionistas.com/que-es-un-dietista-nutricionista/registro-nacional-de-dietistas-nutricionistas/\">
                                    </iframe>
                                </div>
                            </div>
                        </div>
                        <div class=\"save-button-item\" style=\"width: 100%;\">
                            <input class=\"btn save-button\" type=\"submit\" value=\"Guardar\"/>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
    </html>
{% endblock %}
", "@Nutritionist/nutritionist-personal-data.html.twig", "/shared/httpd/nutrik/src/NutritionistBundle/Resources/views/nutritionist-personal-data.html.twig");
    }
}
