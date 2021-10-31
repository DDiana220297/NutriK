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

/* @Customer/progress.html.twig */
class __TwigTemplate_4b396793b827deaca9ff20506832ae91851c6ac6951724a663632bf3ab668a52 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Customer/progress.html.twig"));

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
        $this->loadTemplate("header.html.twig", "@Customer/progress.html.twig", 9)->display($context);
        // line 10
        echo "    </section>
    <section id=\"customer-header\">
        ";
        // line 12
        $this->loadTemplate("customerheader.html.twig", "@Customer/progress.html.twig", 12)->display($context);
        // line 13
        echo "    </section>
    <section id=\"customer-progress\">
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "flashbag", [], "method"), "get", [0 => "progressKOStatus"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 16
            echo "            <div class=\"row\" style=\"width: 90%; margin-left: 5%; margin-top: 10px; margin-bottom: -10px;\">
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
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "flashbag", [], "method"), "get", [0 => "progressOKStatus"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 23
            echo "            <div class=\"row\" style=\"width: 90%; margin-left: 5%; margin-top: 10px; margin-bottom: -10px;\">
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
        echo "        <div class=\"container\">
            <div class=\"col-sm-8\">
                <div id=\"customer-progress-graphics\">
                    <img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("chart.png"), "html", null, true);
        echo "\" style=\"width: 100%;height: 63rem;\">
                </div>
            </div>
            <div class=\"col-sm-4\">
                <form class=\"form\" action=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("customer_progress");
        echo "\" method=\"post\">
                    <div id=\"customer-progress-metrics\">
                        <h3 style=\"margin:0\">Registrar métricas:</h3>
                        <div id=\"customer-progress-fields\" style=\"margin-top: 30px\">
                            <label for=\"weight\">Peso:</label><input type=\"text\" id=\"weight\" name=\"weight\" class=\"form-control\" required ";
        // line 40
        if ((($context["customer_metrics"] ?? $this->getContext($context, "customer_metrics")) != false)) {
            echo "value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["customer_metrics"] ?? $this->getContext($context, "customer_metrics")), "weight", []), "html", null, true);
            echo "\"";
        }
        echo "/>
                            <label for=\"age\">Edad:</label><input type=\"number\" id=\"age\" name=\"age\" class=\"form-control\" required ";
        // line 41
        if ((($context["customer_metrics"] ?? $this->getContext($context, "customer_metrics")) != false)) {
            echo "value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["customer_metrics"] ?? $this->getContext($context, "customer_metrics")), "age", []), "html", null, true);
            echo "\"";
        }
        echo "/>
                            <label for=\"height\">Altura:</label><input type=\"text\" id=\"height\" name=\"height\" class=\"form-control\" required ";
        // line 42
        if ((($context["customer_metrics"] ?? $this->getContext($context, "customer_metrics")) != false)) {
            echo "value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["customer_metrics"] ?? $this->getContext($context, "customer_metrics")), "height", []), "html", null, true);
            echo "\"";
        }
        echo "/>
                            <label for=\"fat-percentage\">% Grasa corporal:</label><input type=\"text\" id=\"fat-percentage\" name=\"fat_percentage\" class=\"form-control\" ";
        // line 43
        if ((($context["customer_metrics"] ?? $this->getContext($context, "customer_metrics")) != false)) {
            echo "value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["customer_metrics"] ?? $this->getContext($context, "customer_metrics")), "fatPercentage", []), "html", null, true);
            echo "\"";
        }
        echo "/>
                            <label for=\"muscle-percentage\">% Masa muscular:</label><input type=\"text\" id=\"muscle-percentage\" name=\"muscle_percentage\" class=\"form-control\" ";
        // line 44
        if ((($context["customer_metrics"] ?? $this->getContext($context, "customer_metrics")) != false)) {
            echo "value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["customer_metrics"] ?? $this->getContext($context, "customer_metrics")), "musclePercentage", []), "html", null, true);
            echo "\"";
        }
        echo "/>
                            <label for=\"liquids-percentage\">% Líquidos:</label><input type=\"text\" id=\"liquids-percentage\" name=\"liquids_percentage\" class=\"form-control\" ";
        // line 45
        if ((($context["customer_metrics"] ?? $this->getContext($context, "customer_metrics")) != false)) {
            echo "value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["customer_metrics"] ?? $this->getContext($context, "customer_metrics")), "liquidPercentage", []), "html", null, true);
            echo "\"";
        }
        echo "/>
                            <label for=\"actividad\">Actividad:</label>
                            <select id=\"actividad\" name=\"actividad\" class=\"form-select\">
                                <option value=\"1\" ";
        // line 48
        if (((($context["customer_metrics"] ?? $this->getContext($context, "customer_metrics")) != false) && ($this->getAttribute(($context["customer_metrics"] ?? $this->getContext($context, "customer_metrics")), "movement", []) == 1))) {
            echo "selected";
        }
        echo ">Bajo</option>
                                <option value=\"2\" ";
        // line 49
        if (((($context["customer_metrics"] ?? $this->getContext($context, "customer_metrics")) != false) && ($this->getAttribute(($context["customer_metrics"] ?? $this->getContext($context, "customer_metrics")), "movement", []) == 2))) {
            echo "selected";
        }
        echo "}>Moderado</option>
                                <option value=\"3\" ";
        // line 50
        if (((($context["customer_metrics"] ?? $this->getContext($context, "customer_metrics")) != false) && ($this->getAttribute(($context["customer_metrics"] ?? $this->getContext($context, "customer_metrics")), "movement", []) == 3))) {
            echo "selected";
        }
        echo ">Activo</option>
                                <option value=\"4\" ";
        // line 51
        if (((($context["customer_metrics"] ?? $this->getContext($context, "customer_metrics")) != false) && ($this->getAttribute(($context["customer_metrics"] ?? $this->getContext($context, "customer_metrics")), "movement", []) == 4))) {
            echo "selected";
        }
        echo ">Muy Activo</option>
                            </select>
                            <div class=\"save-button-item\" style=\"width: 100%; margin-top: 25px\">
                                <input class=\"btn save-button\" type=\"submit\" value=\"Guardar\"/>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    </html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Customer/progress.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  194 => 51,  188 => 50,  182 => 49,  176 => 48,  166 => 45,  158 => 44,  150 => 43,  142 => 42,  134 => 41,  126 => 40,  119 => 36,  112 => 32,  107 => 29,  97 => 25,  93 => 23,  88 => 22,  78 => 18,  74 => 16,  70 => 15,  66 => 13,  64 => 12,  60 => 10,  58 => 9,  52 => 6,  46 => 2,  34 => 1,);
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
    <section id=\"customer-progress\">
        {% for message in  app.session.flashbag().get('progressKOStatus') %}
            <div class=\"row\" style=\"width: 90%; margin-left: 5%; margin-top: 10px; margin-bottom: -10px;\">
                <div class=\"alert alert-danger\" role=\"alert\" style=\"margin-bottom: 0\">
                    {{ message }}
                </div>
            </div>
        {% endfor %}
        {% for message in  app.session.flashbag().get('progressOKStatus') %}
            <div class=\"row\" style=\"width: 90%; margin-left: 5%; margin-top: 10px; margin-bottom: -10px;\">
                <div class=\"alert alert-success\" role=\"alert\" style=\"margin-bottom: 0\">
                    {{ message }}
                </div>
            </div>
        {% endfor %}
        <div class=\"container\">
            <div class=\"col-sm-8\">
                <div id=\"customer-progress-graphics\">
                    <img src=\"{{ asset('chart.png') }}\" style=\"width: 100%;height: 63rem;\">
                </div>
            </div>
            <div class=\"col-sm-4\">
                <form class=\"form\" action=\"{{ path(\"customer_progress\") }}\" method=\"post\">
                    <div id=\"customer-progress-metrics\">
                        <h3 style=\"margin:0\">Registrar métricas:</h3>
                        <div id=\"customer-progress-fields\" style=\"margin-top: 30px\">
                            <label for=\"weight\">Peso:</label><input type=\"text\" id=\"weight\" name=\"weight\" class=\"form-control\" required {% if customer_metrics != false %}value=\"{{ customer_metrics.weight }}\"{% endif %}/>
                            <label for=\"age\">Edad:</label><input type=\"number\" id=\"age\" name=\"age\" class=\"form-control\" required {% if customer_metrics != false %}value=\"{{ customer_metrics.age }}\"{% endif %}/>
                            <label for=\"height\">Altura:</label><input type=\"text\" id=\"height\" name=\"height\" class=\"form-control\" required {% if customer_metrics != false %}value=\"{{ customer_metrics.height }}\"{% endif %}/>
                            <label for=\"fat-percentage\">% Grasa corporal:</label><input type=\"text\" id=\"fat-percentage\" name=\"fat_percentage\" class=\"form-control\" {% if customer_metrics != false %}value=\"{{ customer_metrics.fatPercentage }}\"{% endif %}/>
                            <label for=\"muscle-percentage\">% Masa muscular:</label><input type=\"text\" id=\"muscle-percentage\" name=\"muscle_percentage\" class=\"form-control\" {% if customer_metrics != false %}value=\"{{ customer_metrics.musclePercentage }}\"{% endif %}/>
                            <label for=\"liquids-percentage\">% Líquidos:</label><input type=\"text\" id=\"liquids-percentage\" name=\"liquids_percentage\" class=\"form-control\" {% if customer_metrics != false %}value=\"{{ customer_metrics.liquidPercentage }}\"{% endif %}/>
                            <label for=\"actividad\">Actividad:</label>
                            <select id=\"actividad\" name=\"actividad\" class=\"form-select\">
                                <option value=\"1\" {% if customer_metrics != false and customer_metrics.movement == 1 %}selected{% endif %}>Bajo</option>
                                <option value=\"2\" {% if customer_metrics != false and customer_metrics.movement == 2 %}selected{% endif %}}>Moderado</option>
                                <option value=\"3\" {% if customer_metrics != false and customer_metrics.movement == 3 %}selected{% endif %}>Activo</option>
                                <option value=\"4\" {% if customer_metrics != false and customer_metrics.movement == 4 %}selected{% endif %}>Muy Activo</option>
                            </select>
                            <div class=\"save-button-item\" style=\"width: 100%; margin-top: 25px\">
                                <input class=\"btn save-button\" type=\"submit\" value=\"Guardar\"/>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    </html>
{% endblock %}
", "@Customer/progress.html.twig", "/shared/httpd/nutrik/src/CustomerBundle/Resources/views/progress.html.twig");
    }
}
