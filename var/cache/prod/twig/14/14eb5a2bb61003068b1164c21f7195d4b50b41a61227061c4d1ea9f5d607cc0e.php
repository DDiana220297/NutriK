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

/* @Customer/personal-data.html.twig */
class __TwigTemplate_eb42f12b8ecede66c9f165bd4bcdacd7cca00d2a5c8ea3c1fab5aba159514551 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Customer/personal-data.html.twig"));

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
        $this->loadTemplate("header.html.twig", "@Customer/personal-data.html.twig", 11)->display($context);
        // line 12
        echo "    </section>
    <section id=\"customer-header\">
        ";
        // line 14
        $this->loadTemplate("customerheader.html.twig", "@Customer/personal-data.html.twig", 14)->display($context);
        // line 15
        echo "    </section>
    <section id=\"customer-personal-data\">
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "flashbag", [], "method"), "get", [0 => "personalDataKOStatus"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 18
            echo "            <div class=\"row\" style=\"width: 95%; margin-left: 2.5%; margin-top: 10px; margin-bottom: -16px;\">
                <div class=\"alert alert-danger\" role=\"alert\" style=\"margin-bottom: 0\">
                    ";
            // line 20
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "flashbag", [], "method"), "get", [0 => "personalDataOKStatus"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 25
            echo "            <div class=\"row\" style=\"width: 95%; margin-left: 2.5%; margin-top: 10px; margin-bottom: -16px;\">
                <div class=\"alert alert-success\" role=\"alert\" style=\"margin-bottom: 0\">
                    ";
            // line 27
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        <div class=\"container\">
                <form class=\"form\" action=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("customer_personal_data");
        echo "\" method=\"post\">
                <div class=\"col-sm-6\">
                    <div class=\"personal-data-header\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-person-circle\" viewBox=\"0 0 16 16\">
                            <path d=\"M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z\"/>
                            <path fill-rule=\"evenodd\" d=\"M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z\"/>
                        </svg>
                        <h3 style=\"display: inline-flex\">Mis Datos Personales</h3>
                    </div>
                    <br/>
                    <div class=\"form-check\">
                        <label class=\"form-check-label\" for=\"idCustomerGenderOther\">
                            Otro
                        </label>
                        <input class=\"form-check-input\" type=\"checkbox\" value=\"0\" id=\"idCustomerGenderOther\" ";
        // line 46
        if (($this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "idGender", []) == 0)) {
            echo " checked ";
        }
        echo ">
                        <label class=\"form-check-label\" for=\"idCustomerGenderFemale\">
                            Sra.
                        </label>
                        <input class=\"form-check-input\" type=\"checkbox\" value=\"1\" id=\"idCustomerGenderFemale\" ";
        // line 50
        if (($this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "idGender", []) == 1)) {
            echo " checked ";
        }
        echo ">
                        <label class=\"form-check-label\" for=\"idCustomerGenderMale\">
                            Sr.
                        </label>
                        <input class=\"form-check-input\" type=\"checkbox\" value=\"2\" id=\"idCustomerGenderMale\" ";
        // line 54
        if (($this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "idGender", []) == 2)) {
            echo " checked ";
        }
        echo ">
                    </div>
                    <div class=\"personal-data-fields\">
                        <label for=\"firstname\">Nombre:</label><input type=\"text\" id=\"firstname\" name=\"firstname\" class=\"form-control\" value=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "firstname", []), "html", null, true);
        echo "\"/>
                        <label for=\"lastname\">Apellidos:</label><input type=\"text\" id=\"lastname\" name=\"lastname\" class=\"form-control\" value=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "lastname", []), "html", null, true);
        echo "\"/>
                        <label for=\"email\">Email:</label><input type=\"email\" id=\"email\" name=\"email\" class=\"form-control\" value=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "email", []), "html", null, true);
        echo "\"/>
                        <label for=\"password\">Contraseña:</label><input type=\"password\" id=\"password\" name=\"password\" class=\"form-control\"/>
                        <label for=\"confirm_password\">Confirmar Contraseña:</label><input type=\"password\" id=\"confirm_password\" name=\"confirm_password\" class=\"form-control\"/>
                        <label for=\"birthday\">Fecha de nacimiento:</label><input type=\"date\" id=\"birthday\" name=\"birthday\" class=\"form-control\" value=\"";
        // line 62
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "birthday", []), "Y-m-d"), "html", null, true);
        echo "\"/>
                    </div>
                </div>
                <div class=\"col-sm-6\" style=\"display: inline-flex\">
                    <div class=\"personal-data-fields\" style=\"margin-top: 17.5%; width: 100%\">
                        <label for=\"bibliografia\">Descripción / Bibliografía:</label><textarea type=\"text\" id=\"bibliografia\" name=\"bibliografia\" class=\"form-control\" style=\"height: 160px\">";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "description", []), "html", null, true);
        echo "</textarea>
                        <label for=\"objetivos\">Objetivos:</label><textarea type=\"text\" id=\"objetivos\" name=\"objetivos\" class=\"form-control\" style=\"height: 100px\">";
        // line 68
        if ((($context["customer_metrics"] ?? $this->getContext($context, "customer_metrics")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["customer_metrics"] ?? $this->getContext($context, "customer_metrics")), "goals", []), "html", null, true);
        }
        echo "</textarea>
                        <p><strong>Metricas:</strong></p>
                        <div id=\"metricas\" style=\"display: inline-flex; width: 85%\">
                            <label for=\"peso\"></label><input type=\"number\" id=\"peso\" name=\"peso\" class=\"form-control\" placeholder=\"kg\" value=\"";
        // line 71
        if ((($context["customer_metrics"] ?? $this->getContext($context, "customer_metrics")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["customer_metrics"] ?? $this->getContext($context, "customer_metrics")), "weight", []), "html", null, true);
        }
        echo "\"/>
                            <label for=\"altura\"></label><input type=\"number\" id=\"altura\" name=\"altura\" class=\"form-control\" placeholder=\"cm\" value=\"";
        // line 72
        if ((($context["customer_metrics"] ?? $this->getContext($context, "customer_metrics")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["customer_metrics"] ?? $this->getContext($context, "customer_metrics")), "height", []), "html", null, true);
        }
        echo "\"/>
                            <label for=\"edad\"></label><input type=\"number\" id=\"edad\" name=\"edad\" class=\"form-control\" placeholder=\"años\" value=\"";
        // line 73
        if ((($context["customer_metrics"] ?? $this->getContext($context, "customer_metrics")) != false)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["customer_metrics"] ?? $this->getContext($context, "customer_metrics")), "age", []), "html", null, true);
        }
        echo "\"/>
                        </div>
                        <p><strong>Actividad:</strong></p>
                        <div id=\"actividad\" style=\"display: inline-flex; width: 85%\">
                            <label for=\"actividad\"></label>
                            <select id=\"actividad\" name=\"actividad\" class=\"form-select\">
                                <option value=\"1\" ";
        // line 79
        if (((($context["customer_metrics"] ?? $this->getContext($context, "customer_metrics")) != false) && ($this->getAttribute(($context["customer_metrics"] ?? $this->getContext($context, "customer_metrics")), "movement", []) == 1))) {
            echo " selected ";
        }
        echo ">Bajo</option>
                                <option value=\"2\" ";
        // line 80
        if (((($context["customer_metrics"] ?? $this->getContext($context, "customer_metrics")) != false) && ($this->getAttribute(($context["customer_metrics"] ?? $this->getContext($context, "customer_metrics")), "movement", []) == 2))) {
            echo " selected ";
        }
        echo ">Moderado</option>
                                <option value=\"3\" ";
        // line 81
        if (((($context["customer_metrics"] ?? $this->getContext($context, "customer_metrics")) != false) && ($this->getAttribute(($context["customer_metrics"] ?? $this->getContext($context, "customer_metrics")), "movement", []) == 3))) {
            echo " selected ";
        }
        echo ">Activo</option>
                                <option value=\"3\" ";
        // line 82
        if (((($context["customer_metrics"] ?? $this->getContext($context, "customer_metrics")) != false) && ($this->getAttribute(($context["customer_metrics"] ?? $this->getContext($context, "customer_metrics")), "movement", []) == 4))) {
            echo " selected ";
        }
        echo ">Muy Activo</option>
                            </select>
                            <input class=\"btn save-button\" type=\"submit\" value=\"Guardar\"/>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    ";
        // line 91
        $this->loadTemplate("footer.html.twig", "@Customer/personal-data.html.twig", 91)->display($context);
        // line 92
        echo "    </html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Customer/personal-data.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  249 => 92,  247 => 91,  233 => 82,  227 => 81,  221 => 80,  215 => 79,  204 => 73,  198 => 72,  192 => 71,  184 => 68,  180 => 67,  172 => 62,  166 => 59,  162 => 58,  158 => 57,  150 => 54,  141 => 50,  132 => 46,  115 => 32,  112 => 31,  102 => 27,  98 => 25,  93 => 24,  83 => 20,  79 => 18,  75 => 17,  71 => 15,  69 => 14,  65 => 12,  63 => 11,  57 => 8,  52 => 6,  46 => 2,  34 => 1,);
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
    <section id=\"customer-header\">
        {% include 'customerheader.html.twig' %}
    </section>
    <section id=\"customer-personal-data\">
        {% for message in  app.session.flashbag().get('personalDataKOStatus') %}
            <div class=\"row\" style=\"width: 95%; margin-left: 2.5%; margin-top: 10px; margin-bottom: -16px;\">
                <div class=\"alert alert-danger\" role=\"alert\" style=\"margin-bottom: 0\">
                    {{ message }}
                </div>
            </div>
        {% endfor %}
        {% for message in  app.session.flashbag().get('personalDataOKStatus') %}
            <div class=\"row\" style=\"width: 95%; margin-left: 2.5%; margin-top: 10px; margin-bottom: -16px;\">
                <div class=\"alert alert-success\" role=\"alert\" style=\"margin-bottom: 0\">
                    {{ message }}
                </div>
            </div>
        {% endfor %}
        <div class=\"container\">
                <form class=\"form\" action=\"{{ path(\"customer_personal_data\") }}\" method=\"post\">
                <div class=\"col-sm-6\">
                    <div class=\"personal-data-header\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-person-circle\" viewBox=\"0 0 16 16\">
                            <path d=\"M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z\"/>
                            <path fill-rule=\"evenodd\" d=\"M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z\"/>
                        </svg>
                        <h3 style=\"display: inline-flex\">Mis Datos Personales</h3>
                    </div>
                    <br/>
                    <div class=\"form-check\">
                        <label class=\"form-check-label\" for=\"idCustomerGenderOther\">
                            Otro
                        </label>
                        <input class=\"form-check-input\" type=\"checkbox\" value=\"0\" id=\"idCustomerGenderOther\" {% if customer.idGender == 0 %} checked {% endif %}>
                        <label class=\"form-check-label\" for=\"idCustomerGenderFemale\">
                            Sra.
                        </label>
                        <input class=\"form-check-input\" type=\"checkbox\" value=\"1\" id=\"idCustomerGenderFemale\" {% if customer.idGender == 1 %} checked {% endif %}>
                        <label class=\"form-check-label\" for=\"idCustomerGenderMale\">
                            Sr.
                        </label>
                        <input class=\"form-check-input\" type=\"checkbox\" value=\"2\" id=\"idCustomerGenderMale\" {% if customer.idGender == 2 %} checked {% endif %}>
                    </div>
                    <div class=\"personal-data-fields\">
                        <label for=\"firstname\">Nombre:</label><input type=\"text\" id=\"firstname\" name=\"firstname\" class=\"form-control\" value=\"{{ customer.firstname }}\"/>
                        <label for=\"lastname\">Apellidos:</label><input type=\"text\" id=\"lastname\" name=\"lastname\" class=\"form-control\" value=\"{{ customer.lastname }}\"/>
                        <label for=\"email\">Email:</label><input type=\"email\" id=\"email\" name=\"email\" class=\"form-control\" value=\"{{ customer.email }}\"/>
                        <label for=\"password\">Contraseña:</label><input type=\"password\" id=\"password\" name=\"password\" class=\"form-control\"/>
                        <label for=\"confirm_password\">Confirmar Contraseña:</label><input type=\"password\" id=\"confirm_password\" name=\"confirm_password\" class=\"form-control\"/>
                        <label for=\"birthday\">Fecha de nacimiento:</label><input type=\"date\" id=\"birthday\" name=\"birthday\" class=\"form-control\" value=\"{{ customer.birthday|date('Y-m-d') }}\"/>
                    </div>
                </div>
                <div class=\"col-sm-6\" style=\"display: inline-flex\">
                    <div class=\"personal-data-fields\" style=\"margin-top: 17.5%; width: 100%\">
                        <label for=\"bibliografia\">Descripción / Bibliografía:</label><textarea type=\"text\" id=\"bibliografia\" name=\"bibliografia\" class=\"form-control\" style=\"height: 160px\">{{ customer.description }}</textarea>
                        <label for=\"objetivos\">Objetivos:</label><textarea type=\"text\" id=\"objetivos\" name=\"objetivos\" class=\"form-control\" style=\"height: 100px\">{% if customer_metrics != false %}{{ customer_metrics.goals }}{% endif %}</textarea>
                        <p><strong>Metricas:</strong></p>
                        <div id=\"metricas\" style=\"display: inline-flex; width: 85%\">
                            <label for=\"peso\"></label><input type=\"number\" id=\"peso\" name=\"peso\" class=\"form-control\" placeholder=\"kg\" value=\"{% if customer_metrics != false %}{{ customer_metrics.weight }}{% endif %}\"/>
                            <label for=\"altura\"></label><input type=\"number\" id=\"altura\" name=\"altura\" class=\"form-control\" placeholder=\"cm\" value=\"{% if customer_metrics != false %}{{ customer_metrics.height }}{% endif %}\"/>
                            <label for=\"edad\"></label><input type=\"number\" id=\"edad\" name=\"edad\" class=\"form-control\" placeholder=\"años\" value=\"{% if customer_metrics != false %}{{ customer_metrics.age }}{% endif %}\"/>
                        </div>
                        <p><strong>Actividad:</strong></p>
                        <div id=\"actividad\" style=\"display: inline-flex; width: 85%\">
                            <label for=\"actividad\"></label>
                            <select id=\"actividad\" name=\"actividad\" class=\"form-select\">
                                <option value=\"1\" {% if customer_metrics != false and customer_metrics.movement == 1 %} selected {% endif %}>Bajo</option>
                                <option value=\"2\" {% if customer_metrics != false and customer_metrics.movement == 2 %} selected {% endif %}>Moderado</option>
                                <option value=\"3\" {% if customer_metrics != false and customer_metrics.movement == 3 %} selected {% endif %}>Activo</option>
                                <option value=\"3\" {% if customer_metrics != false and customer_metrics.movement == 4 %} selected {% endif %}>Muy Activo</option>
                            </select>
                            <input class=\"btn save-button\" type=\"submit\" value=\"Guardar\"/>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    {% include 'footer.html.twig' %}
    </html>
{% endblock %}
", "@Customer/personal-data.html.twig", "/shared/httpd/nutrik/src/CustomerBundle/Resources/views/personal-data.html.twig");
    }
}
