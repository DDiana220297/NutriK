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

/* @Nutritionist/add-customer.html.twig */
class __TwigTemplate_f39c04bfb3dc95d4cef00dc7299f0965f10dc4289b3634ac216bd96137bba09d extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Nutritionist/add-customer.html.twig"));

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
        $this->loadTemplate("header.html.twig", "@Nutritionist/add-customer.html.twig", 9)->display($context);
        // line 10
        echo "    </section>
    <section id=\"nutritionist-add-customer\">
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "flashbag", [], "method"), "get", [0 => "addCustomerKOStatus"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 13
            echo "            <div class=\"row\" style=\"width: 91.3%; margin-left: 4.3%; margin-top: 10px; margin-bottom: -35px;\">
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
        echo "        <div class=\"container\">
            <div class=\"col-sm-12\">
                <div id=\"add-customer-block\">
                    <form class=\"form\" action=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nutritionist_add_customer");
        echo "\" method=\"post\" novalidate>
                        <div class=\"col-sm-6\">
                            <div class=\"personal-data-header\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-person-circle\" viewBox=\"0 0 16 16\">
                                    <path d=\"M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z\"/>
                                    <path fill-rule=\"evenodd\" d=\"M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z\"/>
                                </svg>
                                <h3 style=\"display: inline-flex\">Dar de alta Cliente</h3>
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
                                <label for=\"firstname\">Nombre:</label><input type=\"text\" id=\"firstname\" name=\"firstname\" class=\"form-control\" required/>
                                <label for=\"lastname\">Apellidos:</label><input type=\"text\" id=\"lastname\" name=\"lastname\" class=\"form-control\" required/>
                                <label for=\"email\">Email:</label><input type=\"email\" id=\"email\" name=\"email\" class=\"form-control\" required/>
                                <label for=\"password\">Contraseña:</label><input type=\"password\" id=\"password\" name=\"password\" class=\"form-control\"/>
                                <label for=\"confirm_password\">Confirmar Contraseña:</label><input type=\"password\" id=\"confirm_password\" name=\"confirm_password\" class=\"form-control\"/>
                                <label for=\"birthday\">Fecha de nacimiento:</label><input type=\"date\" id=\"birthday\" name=\"birthday\" class=\"form-control\"/>
                            </div>
                        </div>
                        <div class=\"col-sm-6\" style=\"display: inline-flex\">
                            <div class=\"personal-data-fields\" style=\"margin-top: 18%; width: 100%; margin-left: 0\">
                                <label for=\"bibliografia\">Descripción / Bibliografía:</label><textarea type=\"text\" id=\"bibliografia\" name=\"bibliografia\" class=\"form-control\" style=\"height: 160px\"></textarea>
                                <label for=\"objetivos\">Objetivos:</label><textarea type=\"text\" id=\"objetivos\" name=\"objetivos\" class=\"form-control\" style=\"height: 100px\"></textarea>
                                <p><strong>Metricas:</strong></p>
                                <div id=\"metricas\" style=\"display: inline-flex; width: 90%\">
                                    <label for=\"peso\"></label><input type=\"number\" id=\"peso\" name=\"peso\" class=\"form-control\" placeholder=\"peso\"/>
                                    <label for=\"altura\"></label><input type=\"number\" id=\"altura\" name=\"altura\" class=\"form-control\" placeholder=\"altura\"/>
                                    <label for=\"edad\"></label><input type=\"number\" id=\"edad\" name=\"edad\" class=\"form-control\" placeholder=\"edad\"/>
                                </div>
                                <p><strong>Rendimiento deportivo:</strong></p>
                                <div id=\"actividad\" style=\"display: inline-flex; width: 85%\">
                                    <label for=\"actividad\"></label>
                                    <select id=\"actividad\" name=\"actividad\" class=\"form-select\">
                                        <option value=\"1\">Bajo</option>
                                        <option value=\"2\" selected>Moderado</option>
                                        <option value=\"3\">Activo</option>
                                        <option value=\"3\">Muy Activo</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-12\" style=\"display: inline-flex\">
                            <div class=\"save-button-item\" style=\"width: 100%; padding: 10px\">
                                <input class=\"btn save-button\" type=\"submit\" name=\"submit\" value=\"Guardar\"/>
                                <input class=\"btn search-button\" type=\"button\" name=\"submit\" value=\"Buscar Cliente\" onclick=\"redirectTo('nutritionist-all-customers')\"/>
                            </div>
                        </div>
                    </form>
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
        return "@Nutritionist/add-customer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  87 => 22,  82 => 19,  72 => 15,  68 => 13,  64 => 12,  60 => 10,  58 => 9,  52 => 6,  46 => 2,  34 => 1,);
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
    <section id=\"nutritionist-add-customer\">
        {% for message in  app.session.flashbag().get('addCustomerKOStatus') %}
            <div class=\"row\" style=\"width: 91.3%; margin-left: 4.3%; margin-top: 10px; margin-bottom: -35px;\">
                <div class=\"alert alert-danger\" role=\"alert\" style=\"margin-bottom: 0\">
                    {{ message }}
                </div>
            </div>
        {% endfor %}
        <div class=\"container\">
            <div class=\"col-sm-12\">
                <div id=\"add-customer-block\">
                    <form class=\"form\" action=\"{{ path(\"nutritionist_add_customer\") }}\" method=\"post\" novalidate>
                        <div class=\"col-sm-6\">
                            <div class=\"personal-data-header\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-person-circle\" viewBox=\"0 0 16 16\">
                                    <path d=\"M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z\"/>
                                    <path fill-rule=\"evenodd\" d=\"M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z\"/>
                                </svg>
                                <h3 style=\"display: inline-flex\">Dar de alta Cliente</h3>
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
                                <label for=\"firstname\">Nombre:</label><input type=\"text\" id=\"firstname\" name=\"firstname\" class=\"form-control\" required/>
                                <label for=\"lastname\">Apellidos:</label><input type=\"text\" id=\"lastname\" name=\"lastname\" class=\"form-control\" required/>
                                <label for=\"email\">Email:</label><input type=\"email\" id=\"email\" name=\"email\" class=\"form-control\" required/>
                                <label for=\"password\">Contraseña:</label><input type=\"password\" id=\"password\" name=\"password\" class=\"form-control\"/>
                                <label for=\"confirm_password\">Confirmar Contraseña:</label><input type=\"password\" id=\"confirm_password\" name=\"confirm_password\" class=\"form-control\"/>
                                <label for=\"birthday\">Fecha de nacimiento:</label><input type=\"date\" id=\"birthday\" name=\"birthday\" class=\"form-control\"/>
                            </div>
                        </div>
                        <div class=\"col-sm-6\" style=\"display: inline-flex\">
                            <div class=\"personal-data-fields\" style=\"margin-top: 18%; width: 100%; margin-left: 0\">
                                <label for=\"bibliografia\">Descripción / Bibliografía:</label><textarea type=\"text\" id=\"bibliografia\" name=\"bibliografia\" class=\"form-control\" style=\"height: 160px\"></textarea>
                                <label for=\"objetivos\">Objetivos:</label><textarea type=\"text\" id=\"objetivos\" name=\"objetivos\" class=\"form-control\" style=\"height: 100px\"></textarea>
                                <p><strong>Metricas:</strong></p>
                                <div id=\"metricas\" style=\"display: inline-flex; width: 90%\">
                                    <label for=\"peso\"></label><input type=\"number\" id=\"peso\" name=\"peso\" class=\"form-control\" placeholder=\"peso\"/>
                                    <label for=\"altura\"></label><input type=\"number\" id=\"altura\" name=\"altura\" class=\"form-control\" placeholder=\"altura\"/>
                                    <label for=\"edad\"></label><input type=\"number\" id=\"edad\" name=\"edad\" class=\"form-control\" placeholder=\"edad\"/>
                                </div>
                                <p><strong>Rendimiento deportivo:</strong></p>
                                <div id=\"actividad\" style=\"display: inline-flex; width: 85%\">
                                    <label for=\"actividad\"></label>
                                    <select id=\"actividad\" name=\"actividad\" class=\"form-select\">
                                        <option value=\"1\">Bajo</option>
                                        <option value=\"2\" selected>Moderado</option>
                                        <option value=\"3\">Activo</option>
                                        <option value=\"3\">Muy Activo</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-12\" style=\"display: inline-flex\">
                            <div class=\"save-button-item\" style=\"width: 100%; padding: 10px\">
                                <input class=\"btn save-button\" type=\"submit\" name=\"submit\" value=\"Guardar\"/>
                                <input class=\"btn search-button\" type=\"button\" name=\"submit\" value=\"Buscar Cliente\" onclick=\"redirectTo('nutritionist-all-customers')\"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    </html>
{% endblock %}
", "@Nutritionist/add-customer.html.twig", "/shared/httpd/nutrik/src/NutritionistBundle/Resources/views/add-customer.html.twig");
    }
}
