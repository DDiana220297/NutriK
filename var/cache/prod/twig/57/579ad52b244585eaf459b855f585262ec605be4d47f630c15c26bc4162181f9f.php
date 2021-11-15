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

/* @Customer/weekly-plans.html.twig */
class __TwigTemplate_886eb32ebdd0b5cba62ddd4b554cb0d6928122f60903dcb424e734497c5b5acd extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Customer/weekly-plans.html.twig"));

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
        $this->loadTemplate("header.html.twig", "@Customer/weekly-plans.html.twig", 11)->display($context);
        // line 12
        echo "    </section>
    <section id=\"customer-header\">
        ";
        // line 14
        $this->loadTemplate("customerheader.html.twig", "@Customer/weekly-plans.html.twig", 14)->display($context);
        // line 15
        echo "    </section>
    <section id=\"assigned-plans\">
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "flashbag", [], "method"), "get", [0 => "plansOKStatus"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 18
            echo "            <div class=\"row\" style=\"width: 88.5%; margin-left: 5.7%; margin-top: 10px; margin-bottom: -10px;\">
                <div class=\"alert alert-success\" role=\"alert\" style=\"margin-bottom: 0\">
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
        echo "        <div class=\"container\">
            <div class=\"assigned-plans-block\">
                <h2 style=\"text-align: center\">Mis planificaciones semanales</h2>
                <div class=\"plans\">
                    ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["plans"] ?? $this->getContext($context, "plans")));
        foreach ($context['_seq'] as $context["_key"] => $context["plan"]) {
            // line 29
            echo "                        <div class=\"col-sm-12 plan-entry\">
                            <div class=\"col-sm-11 weekly-plan-resume\">
                                <h4>
                                    ";
            // line 32
            if (twig_in_filter($this->getAttribute($context["plan"], "idPlan", []), twig_get_array_keys_filter(($context["weekly_plans_tags"] ?? $this->getContext($context, "weekly_plans_tags"))))) {
                // line 33
                echo "                                        <span>
                                                ";
                // line 34
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["weekly_plans_tags"] ?? $this->getContext($context, "weekly_plans_tags")), $this->getAttribute($context["plan"], "idPlan", []), [], "array"));
                foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                    // line 35
                    echo "                                                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "name", []), "html", null, true);
                    echo " <span style=\"color: #00766c\">></span>
                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 37
                echo "                                            </span>
                                    ";
            }
            // line 39
            echo "                                    <strong style=\"color: #00766c\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["plan"], "title", []), "html", null, true);
            echo "</strong>
                                </h4>
                                <p>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["plan"], "description", []), "html", null, true);
            echo "</p>
                                <strong";
            // line 42
            if ((twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["weekly_plans_dates"] ?? $this->getContext($context, "weekly_plans_dates")), $this->getAttribute($context["plan"], "idPlan", []), [], "array"), "date_to", [], "array"), "Y-m-d") < twig_date_format_filter($this->env, ($context["now"] ?? $this->getContext($context, "now")), "Y-m-d H:i:s"))) {
                echo " style=\"color: #a94442\" ";
            } else {
                echo " style=\"color: #3c763d\" ";
            }
            echo ">
                                    ";
            // line 43
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["weekly_plans_dates"] ?? $this->getContext($context, "weekly_plans_dates")), $this->getAttribute($context["plan"], "idPlan", []), [], "array"), "date_from", [], "array"), "Y-m-d"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["weekly_plans_dates"] ?? $this->getContext($context, "weekly_plans_dates")), $this->getAttribute($context["plan"], "idPlan", []), [], "array"), "date_to", [], "array"), "Y-m-d"), "html", null, true);
            echo "
                                </strong>
                            </div>
                            <div class=\"col-sm-1 weekly-plan-actions\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-search\" viewBox=\"0 0 16 16\"
                                    onclick=\"redirectTo('plan','/'+";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["plan"], "idPlan", []), "html", null, true);
            echo ")\">
                                    <path d=\"M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z\"/>
                                </svg>
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plan'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "                </div>
            </div>
        </div>
    </section>
    ";
        // line 58
        $this->loadTemplate("footer.html.twig", "@Customer/weekly-plans.html.twig", 58)->display($context);
        // line 59
        echo "    </html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Customer/weekly-plans.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  178 => 59,  176 => 58,  170 => 54,  158 => 48,  148 => 43,  140 => 42,  136 => 41,  130 => 39,  126 => 37,  117 => 35,  113 => 34,  110 => 33,  108 => 32,  103 => 29,  99 => 28,  93 => 24,  83 => 20,  79 => 18,  75 => 17,  71 => 15,  69 => 14,  65 => 12,  63 => 11,  57 => 8,  52 => 6,  46 => 2,  34 => 1,);
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
    <section id=\"assigned-plans\">
        {% for message in  app.session.flashbag().get('plansOKStatus') %}
            <div class=\"row\" style=\"width: 88.5%; margin-left: 5.7%; margin-top: 10px; margin-bottom: -10px;\">
                <div class=\"alert alert-success\" role=\"alert\" style=\"margin-bottom: 0\">
                    {{ message }}
                </div>
            </div>
        {% endfor %}
        <div class=\"container\">
            <div class=\"assigned-plans-block\">
                <h2 style=\"text-align: center\">Mis planificaciones semanales</h2>
                <div class=\"plans\">
                    {% for plan in plans %}
                        <div class=\"col-sm-12 plan-entry\">
                            <div class=\"col-sm-11 weekly-plan-resume\">
                                <h4>
                                    {% if plan.idPlan in weekly_plans_tags|keys %}
                                        <span>
                                                {% for tag in weekly_plans_tags[plan.idPlan] %}
                                                    {{ tag.name }} <span style=\"color: #00766c\">></span>
                                                {% endfor %}
                                            </span>
                                    {% endif %}
                                    <strong style=\"color: #00766c\">{{ plan.title}}</strong>
                                </h4>
                                <p>{{ plan.description }}</p>
                                <strong{% if weekly_plans_dates[plan.idPlan]['date_to']|date('Y-m-d') < now|date('Y-m-d H:i:s') %} style=\"color: #a94442\" {% else %} style=\"color: #3c763d\" {% endif %}>
                                    {{ weekly_plans_dates[plan.idPlan]['date_from']|date('Y-m-d')}} - {{ weekly_plans_dates[plan.idPlan]['date_to']|date('Y-m-d')}}
                                </strong>
                            </div>
                            <div class=\"col-sm-1 weekly-plan-actions\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-search\" viewBox=\"0 0 16 16\"
                                    onclick=\"redirectTo('plan','/'+{{ plan.idPlan }})\">
                                    <path d=\"M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z\"/>
                                </svg>
                            </div>
                        </div>
                    {% endfor %}
                </div>
            </div>
        </div>
    </section>
    {% include 'footer.html.twig' %}
    </html>
{% endblock %}
", "@Customer/weekly-plans.html.twig", "/shared/httpd/nutrik/src/CustomerBundle/Resources/views/weekly-plans.html.twig");
    }
}
