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
    </header>
    <section id=\"default-header\">
        ";
        // line 9
        $this->loadTemplate("header.html.twig", "@Customer/personal-data.html.twig", 9)->display($context);
        // line 10
        echo "    </section>
    <section id=\"customer-header\">
        ";
        // line 12
        $this->loadTemplate("customerheader.html.twig", "@Customer/personal-data.html.twig", 12)->display($context);
        // line 13
        echo "    </section>
    <section id=\"customer-personal-data\">
        <div class=\"container\">
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
                    <input class=\"form-check-input\" type=\"checkbox\" value=\"0\" id=\"idCustomerGenderOther\">
                    <label class=\"form-check-label\" for=\"idCustomerGenderFemale\">
                        Sra.
                    </label>
                    <input class=\"form-check-input\" type=\"checkbox\" value=\"1\" id=\"idCustomerGenderFemale\">
                    <label class=\"form-check-label\" for=\"idCustomerGenderMale\">
                        Sr.
                    </label>
                    <input class=\"form-check-input\" type=\"checkbox\" value=\"2\" id=\"idCustomerGenderMale\">
                </div>
                <div class=\"personal-data-fields\">
                    <label for=\"firstname\">Nombre:</label><input type=\"text\" id=\"firstname\" name=\"_firstname\" class=\"form-control\"/>
                    <label for=\"lastname\">Apellidos:</label><input type=\"text\" id=\"lastname\" name=\"_lastname\" class=\"form-control\"/>
                    <label for=\"email\">Email:</label><input type=\"email\" id=\"email\" name=\"_email\" class=\"form-control\"/>
                    <label for=\"password\">Contraseña:</label><input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\"/>
                    <label for=\"confirm_password\">Confirmar Contraseña:</label><input type=\"password\" id=\"confirm_password\" name=\"_confirm_password\" class=\"form-control\"/>
                    <label for=\"birthday\">Fecha de nacimiento:</label><input type=\"date\" id=\"birthday\" name=\"_birthday\" class=\"form-control\"/>
                </div>
            </div>
            <div class=\"col-sm-6\" style=\"display: inline-flex\">
                <div class=\"personal-data-fields\" style=\"margin-top: 15%; width: 100%\">
                    <label for=\"bibliografia\">Descripción / Bibliografía:</label><textarea type=\"text\" id=\"bibliografia\" name=\"_bibliografia\" class=\"form-control\" style=\"height: 160px\"></textarea>
                    <label for=\"objetivos\">Objetivos:</label><textarea type=\"text\" id=\"objetivos\" name=\"_objetivos\" class=\"form-control\" style=\"height: 100px\"></textarea>
                    <p><strong>Metricas:</strong></p>
                    <div id=\"metricas\" style=\"display: inline-flex; width: 85%\">
                        <label for=\"peso\"></label><input type=\"number\" id=\"peso\" name=\"_peso\" class=\"form-control\"/>
                        <label for=\"altura\"></label><input type=\"number\" id=\"altura\" name=\"_altura\" class=\"form-control\"/>
                        <label for=\"edad\"></label><input type=\"number\" id=\"edad\" name=\"_edad\" class=\"form-control\"/>
                    </div>
                    <p><strong>Actividad:</strong></p>
                    <div id=\"actividad\" style=\"display: inline-flex; width: 85%\">
                        <select id=\"actividad\" name=\"actividad\" class=\"form-select\">
                            <option selected> -- Elige tu nivel de actividad --</option>
                            <option value=\"1\">Bajo</option>
                            <option value=\"2\">Moderado</option>
                            <option value=\"3\">Activo</option>
                            <option value=\"3\">Muy Activo</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-12\" style=\"display: inline-flex\">
                <div class=\"save-button-item\" style=\"width: 100%; padding: 10px\">
                    <input class=\"btn save-button\" type=\"submit\" value=\"Guardar\"/>
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
        return "@Customer/personal-data.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 13,  64 => 12,  60 => 10,  58 => 9,  52 => 6,  46 => 2,  34 => 1,);
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
    <section id=\"customer-personal-data\">
        <div class=\"container\">
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
                    <input class=\"form-check-input\" type=\"checkbox\" value=\"0\" id=\"idCustomerGenderOther\">
                    <label class=\"form-check-label\" for=\"idCustomerGenderFemale\">
                        Sra.
                    </label>
                    <input class=\"form-check-input\" type=\"checkbox\" value=\"1\" id=\"idCustomerGenderFemale\">
                    <label class=\"form-check-label\" for=\"idCustomerGenderMale\">
                        Sr.
                    </label>
                    <input class=\"form-check-input\" type=\"checkbox\" value=\"2\" id=\"idCustomerGenderMale\">
                </div>
                <div class=\"personal-data-fields\">
                    <label for=\"firstname\">Nombre:</label><input type=\"text\" id=\"firstname\" name=\"_firstname\" class=\"form-control\"/>
                    <label for=\"lastname\">Apellidos:</label><input type=\"text\" id=\"lastname\" name=\"_lastname\" class=\"form-control\"/>
                    <label for=\"email\">Email:</label><input type=\"email\" id=\"email\" name=\"_email\" class=\"form-control\"/>
                    <label for=\"password\">Contraseña:</label><input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\"/>
                    <label for=\"confirm_password\">Confirmar Contraseña:</label><input type=\"password\" id=\"confirm_password\" name=\"_confirm_password\" class=\"form-control\"/>
                    <label for=\"birthday\">Fecha de nacimiento:</label><input type=\"date\" id=\"birthday\" name=\"_birthday\" class=\"form-control\"/>
                </div>
            </div>
            <div class=\"col-sm-6\" style=\"display: inline-flex\">
                <div class=\"personal-data-fields\" style=\"margin-top: 15%; width: 100%\">
                    <label for=\"bibliografia\">Descripción / Bibliografía:</label><textarea type=\"text\" id=\"bibliografia\" name=\"_bibliografia\" class=\"form-control\" style=\"height: 160px\"></textarea>
                    <label for=\"objetivos\">Objetivos:</label><textarea type=\"text\" id=\"objetivos\" name=\"_objetivos\" class=\"form-control\" style=\"height: 100px\"></textarea>
                    <p><strong>Metricas:</strong></p>
                    <div id=\"metricas\" style=\"display: inline-flex; width: 85%\">
                        <label for=\"peso\"></label><input type=\"number\" id=\"peso\" name=\"_peso\" class=\"form-control\"/>
                        <label for=\"altura\"></label><input type=\"number\" id=\"altura\" name=\"_altura\" class=\"form-control\"/>
                        <label for=\"edad\"></label><input type=\"number\" id=\"edad\" name=\"_edad\" class=\"form-control\"/>
                    </div>
                    <p><strong>Actividad:</strong></p>
                    <div id=\"actividad\" style=\"display: inline-flex; width: 85%\">
                        <select id=\"actividad\" name=\"actividad\" class=\"form-select\">
                            <option selected> -- Elige tu nivel de actividad --</option>
                            <option value=\"1\">Bajo</option>
                            <option value=\"2\">Moderado</option>
                            <option value=\"3\">Activo</option>
                            <option value=\"3\">Muy Activo</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-12\" style=\"display: inline-flex\">
                <div class=\"save-button-item\" style=\"width: 100%; padding: 10px\">
                    <input class=\"btn save-button\" type=\"submit\" value=\"Guardar\"/>
                </div>
            </div>
        </div>
    </section>
    </html>
{% endblock %}
", "@Customer/personal-data.html.twig", "/shared/httpd/nutrik/src/CustomerBundle/Resources/views/personal-data.html.twig");
    }
}
