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

    <!-- Customs JS -->
    <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework//js/customs.js"), "html", null, true);
        echo "\"></script>
</head>
<body>
    ";
        // line 16
        $this->displayBlock('content', $context, $blocks);
        // line 63
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

    // line 16
    public function block_content($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 17
        echo "        ";
        if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []) != null)) {
            // line 18
            echo "            <script>
                window.document.location = '/web/home';
            </script>
        ";
        } else {
            // line 22
            echo "            <div class=\"container\">
                <div class=\"row title\">
                    <h1>NutriK</h1>
                </div>
                <div class=\"row logincarousel\">
                    <div class=\"col-sm-12\">
                        ";
            // line 28
            $this->loadTemplate("carousel.html.twig", "login.html.twig", 28)->display($context);
            // line 29
            echo "                    </div>
                </div>
                ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "flashbag", [], "method"), "get", [0 => "statusOKMessage"], "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 32
                echo "                    <div class=\"row\" style=\"justify-content: center\">
                        <div class=\"col-sm-6\">
                            <div class=\"alert alert-success\" role=\"alert\">
                                ";
                // line 35
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
                            </div>
                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "                <div class=\"row loginform\">
                    <div class=\"col-sm-6\">
                        <form class=\"form-login\" action=\"";
            // line 42
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_check");
            echo "\" method=\"post\">
                            <label for=\"username\">Email:</label>
                            <input type=\"email\" id=\"username\" name=\"_username\" value=\"";
            // line 44
            echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
            echo "\" class=\"form-control\"/>
                            <label for=\"password\">Contraseña:</label>
                            <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\"/>
                            <div class=\"login-button-item\">
                                <input class=\"btn btn-primary login-button\" type=\"submit\" style=\"margin: 20px 0px 0px 0px\" value=\"Inciar Sesión\"/>
                                <input type=\"hidden\" name=\"_target_path\" value=\"/login\">
                            </div>
                            <p style=\"text-align: center\"> ó </p>
                            <p><a href=\"";
            // line 52
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register");
            echo "\"> Registrate </a></p>
                            <div class=\"login-button-item\">
                                <button class=\"btn btn-primary nutrik-button\" type=\"button\" onclick=\"redirectTo('home')\">Visita NutriK</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class=\"clearfix\"></div>
        ";
        }
        // line 62
        echo "    ";
        
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
        return array (  166 => 62,  153 => 52,  142 => 44,  137 => 42,  133 => 40,  122 => 35,  117 => 32,  113 => 31,  109 => 29,  107 => 28,  99 => 22,  93 => 18,  90 => 17,  84 => 16,  72 => 7,  63 => 63,  61 => 16,  55 => 13,  49 => 10,  45 => 8,  43 => 7,  35 => 1,);
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

    <!-- Customs JS -->
    <script src=\"{{ asset('bundles/framework//js/customs.js') }}\"></script>
</head>
<body>
    {% block content %}
        {% if app.user != null %}
            <script>
                window.document.location = '/web/home';
            </script>
        {% else %}
            <div class=\"container\">
                <div class=\"row title\">
                    <h1>NutriK</h1>
                </div>
                <div class=\"row logincarousel\">
                    <div class=\"col-sm-12\">
                        {% include 'carousel.html.twig' %}
                    </div>
                </div>
                {% for message in  app.session.flashbag().get('statusOKMessage') %}
                    <div class=\"row\" style=\"justify-content: center\">
                        <div class=\"col-sm-6\">
                            <div class=\"alert alert-success\" role=\"alert\">
                                {{ message }}
                            </div>
                        </div>
                    </div>
                {% endfor %}
                <div class=\"row loginform\">
                    <div class=\"col-sm-6\">
                        <form class=\"form-login\" action=\"{{ path(\"login_check\") }}\" method=\"post\">
                            <label for=\"username\">Email:</label>
                            <input type=\"email\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" class=\"form-control\"/>
                            <label for=\"password\">Contraseña:</label>
                            <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\"/>
                            <div class=\"login-button-item\">
                                <input class=\"btn btn-primary login-button\" type=\"submit\" style=\"margin: 20px 0px 0px 0px\" value=\"Inciar Sesión\"/>
                                <input type=\"hidden\" name=\"_target_path\" value=\"/login\">
                            </div>
                            <p style=\"text-align: center\"> ó </p>
                            <p><a href=\"{{ path('register') }}\"> Registrate </a></p>
                            <div class=\"login-button-item\">
                                <button class=\"btn btn-primary nutrik-button\" type=\"button\" onclick=\"redirectTo('home')\">Visita NutriK</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class=\"clearfix\"></div>
        {% endif %}
    {% endblock %}
</body>

", "login.html.twig", "/shared/httpd/nutrik/app/Resources/views/login.html.twig");
    }
}
