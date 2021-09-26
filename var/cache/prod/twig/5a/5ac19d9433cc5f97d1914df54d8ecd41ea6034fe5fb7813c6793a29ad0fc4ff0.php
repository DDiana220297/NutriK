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

/* login.html.twig */
class __TwigTemplate_0c54f725aafa8623222bb44f3c56c3861e819f74e7907fcf72834a67970ed6e9 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login.html.twig"));

        // line 1
        echo "
<!DOCTYPE HTML>
<html lang=\"es\">
<head>
    <meta charset=\"utf-8\"/>
    <title>
        ";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        // line 8
        echo "    </title>
    <!-- Login Page stylesheet-->
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/loginpage.css"), "html", null, true);
        echo "\" />
</head>
<body>
    ";
        // line 13
        $this->displayBlock('content', $context, $blocks);
        // line 56
        echo "</body>

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

    // line 13
    public function block_content($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 14
        echo "        <div class=\"container\">
            <div class=\"row title\">
                <h1>NutriK</h1>
            </div>
            <div class=\"row logincarousel\">
                <div class=\"col-sm-12\">
                    ";
        // line 20
        $this->loadTemplate("carousel.html.twig", "login.html.twig", 20)->display($context);
        // line 21
        echo "                </div>
            </div>
            ";
        // line 23
        if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []) != null)) {
            // line 24
            echo "                ";
            echo twig_var_dump($this->env, $context, [0 => $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", [])]);
            echo "
            ";
        }
        // line 26
        echo "
            ";
        // line 27
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_NUTR")) {
            // line 28
            echo "                <strong>
                    Estas logeado como nutricionista
                </strong>
            ";
        }
        // line 32
        echo "
            ";
        // line 33
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_GUEST")) {
            // line 34
            echo "                <strong>
                    Estas logeado como invitado
                </strong>
            ";
        }
        // line 38
        echo "
            <div class=\"row loginform\">
                <div class=\"col-sm-6\">
                    <form action=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_check");
        echo "\" method=\"post\">
                        <label for=\"username\">Email:</label>
                        <input type=\"email\" id=\"username\" name=\"_username\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" class=\"form-control\"/>
                        <label for=\"password\">Contraseña:</label>
                        <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\"/>
                        <div class=\"login-button-item\">
                            <input class=\"btn btn-primary login-button\" type=\"submit\" style=\"margin: 20px 0px 0px 0px\" value=\"Inciar Sesión\"/>
                            <input type=\"hidden\" name=\"_target_path\" value=\"/login\">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class=\"clearfix\"></div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 43,  133 => 41,  128 => 38,  122 => 34,  120 => 33,  117 => 32,  111 => 28,  109 => 27,  106 => 26,  100 => 24,  98 => 23,  94 => 21,  92 => 20,  84 => 14,  78 => 13,  66 => 7,  57 => 56,  55 => 13,  49 => 10,  45 => 8,  43 => 7,  35 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("
<!DOCTYPE HTML>
<html lang=\"es\">
<head>
    <meta charset=\"utf-8\"/>
    <title>
        {% block title %} NutriK {% endblock %}
    </title>
    <!-- Login Page stylesheet-->
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/framework/css/loginpage.css') }}\" />
</head>
<body>
    {% block content %}
        <div class=\"container\">
            <div class=\"row title\">
                <h1>NutriK</h1>
            </div>
            <div class=\"row logincarousel\">
                <div class=\"col-sm-12\">
                    {% include 'carousel.html.twig' %}
                </div>
            </div>
            {% if app.user != null %}
                {{ dump(app.user) }}
            {% endif %}

            {% if is_granted('ROLE_NUTR') %}
                <strong>
                    Estas logeado como nutricionista
                </strong>
            {% endif %}

            {% if is_granted('ROLE_GUEST') %}
                <strong>
                    Estas logeado como invitado
                </strong>
            {% endif %}

            <div class=\"row loginform\">
                <div class=\"col-sm-6\">
                    <form action=\"{{ path(\"login_check\") }}\" method=\"post\">
                        <label for=\"username\">Email:</label>
                        <input type=\"email\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" class=\"form-control\"/>
                        <label for=\"password\">Contraseña:</label>
                        <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\"/>
                        <div class=\"login-button-item\">
                            <input class=\"btn btn-primary login-button\" type=\"submit\" style=\"margin: 20px 0px 0px 0px\" value=\"Inciar Sesión\"/>
                            <input type=\"hidden\" name=\"_target_path\" value=\"/login\">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class=\"clearfix\"></div>
    {% endblock %}
</body>

", "login.html.twig", "/shared/httpd/nutrik/app/Resources/views/login.html.twig");
    }
}
