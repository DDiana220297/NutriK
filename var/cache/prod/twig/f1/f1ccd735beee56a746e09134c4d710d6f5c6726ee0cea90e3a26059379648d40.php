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
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "flashbag", [], "method"), "get", [0 => "addCustomerOKStatus"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 20
            echo "            <div class=\"row\" style=\"width: 91.3%; margin-left: 4.3%; margin-top: 10px; margin-bottom: -35px;\">
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
                <div id=\"invite-customer-block\" style=\"width: 50%; margin-left: 25%; height: 70rem; margin-top: 5rem\">
                    <form class=\"form\" action=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nutritionist_add_customer");
        echo "\" method=\"post\" novalidate>
                        <div class=\"col-sm-12\">
                            <div class=\"personal-data-header\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-person-circle\" viewBox=\"0 0 16 16\">
                                    <path d=\"M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z\"/>
                                    <path fill-rule=\"evenodd\" d=\"M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z\"/>
                                </svg>
                                <h3 style=\"display: inline-flex\">Invitar Cliente</h3>
                            </div>
                            <br/>
                            <div class=\"personal-data-fields\">
                                <label for=\"firstname\">Nombre:</label><input type=\"text\" id=\"firstname\" name=\"firstname\" class=\"form-control\" required/>
                                <label for=\"lastname\">Apellidos:</label><input type=\"text\" id=\"lastname\" name=\"lastname\" class=\"form-control\" required/>
                                <label for=\"email\">Email:</label><input type=\"email\" id=\"email\" name=\"email\" class=\"form-control\" required/>
                                <label for=\"invitation\">Invitación:</label><textarea type=\"text\" id=\"invitation\" name=\"invitation\" class=\"form-control\" style=\"height: 160px\"></textarea>
                            </div>
                        </div>
                        <div class=\"col-sm-12\">
                            <div class=\"save-button-item\">
                                <input class=\"btn save-button\" type=\"submit\" name=\"submit\" value=\"Invitar\"/>
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
        return array (  106 => 29,  101 => 26,  91 => 22,  87 => 20,  82 => 19,  72 => 15,  68 => 13,  64 => 12,  60 => 10,  58 => 9,  52 => 6,  46 => 2,  34 => 1,);
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
        {% for message in  app.session.flashbag().get('addCustomerOKStatus') %}
            <div class=\"row\" style=\"width: 91.3%; margin-left: 4.3%; margin-top: 10px; margin-bottom: -35px;\">
                <div class=\"alert alert-success\" role=\"alert\" style=\"margin-bottom: 0\">
                    {{ message }}
                </div>
            </div>
        {% endfor %}
        <div class=\"container\">
            <div class=\"col-sm-12\">
                <div id=\"invite-customer-block\" style=\"width: 50%; margin-left: 25%; height: 70rem; margin-top: 5rem\">
                    <form class=\"form\" action=\"{{ path(\"nutritionist_add_customer\") }}\" method=\"post\" novalidate>
                        <div class=\"col-sm-12\">
                            <div class=\"personal-data-header\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-person-circle\" viewBox=\"0 0 16 16\">
                                    <path d=\"M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z\"/>
                                    <path fill-rule=\"evenodd\" d=\"M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z\"/>
                                </svg>
                                <h3 style=\"display: inline-flex\">Invitar Cliente</h3>
                            </div>
                            <br/>
                            <div class=\"personal-data-fields\">
                                <label for=\"firstname\">Nombre:</label><input type=\"text\" id=\"firstname\" name=\"firstname\" class=\"form-control\" required/>
                                <label for=\"lastname\">Apellidos:</label><input type=\"text\" id=\"lastname\" name=\"lastname\" class=\"form-control\" required/>
                                <label for=\"email\">Email:</label><input type=\"email\" id=\"email\" name=\"email\" class=\"form-control\" required/>
                                <label for=\"invitation\">Invitación:</label><textarea type=\"text\" id=\"invitation\" name=\"invitation\" class=\"form-control\" style=\"height: 160px\"></textarea>
                            </div>
                        </div>
                        <div class=\"col-sm-12\">
                            <div class=\"save-button-item\">
                                <input class=\"btn save-button\" type=\"submit\" name=\"submit\" value=\"Invitar\"/>
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
