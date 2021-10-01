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

/* header.html.twig */
class __TwigTemplate_2ae61efed0f65316a5cbc45241a80b50d0d18b167dedc101bfab1a96ff5c9c16 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "header.html.twig"));

        // line 1
        echo "<!DOCTYPE HTML>
<html lang=\"es\">
    <body>
        <header>
            <nav class=\"navbar navbar-default global-header\">
                <div class=\"container-fluid\">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class=\"navbar-header\">
                        <ul class=\"nav navbar-nav navbar-left\">
                            <li class=\"dropdown\">
                                <a href=\"#\" class=\"header-dropdown-icon\" id=\"header-lateral-menu-button\" data-toggle=\"dropdown\" role=\"button\" style=\"padding: 0px; padding-right: 15px\"
                                onclick=\"showLateralMenu()\">
                                    <i class=\"glyphicon glyphicon-th-large\" style=\"font-size: 50px\"></i>
                                </a>
                            </li>
                            <li>
                                <a class=\"navbar-brand header-title\" href=\"#\">NutriK</a>
                            </li>
                        </ul>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                        <ul class=\"nav navbar-nav navbar-right\">

                            ";
        // line 25
        if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []) != null)) {
            // line 26
            echo "                                <li><p style=\"padding-top: 15px; padding-bottom: 15px\">Hola :) ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "firstname", []), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "lastname", []), "html", null, true);
            echo "</p></li>
                            ";
        } else {
            // line 28
            echo "                                <li><p style=\"padding-top: 15px; padding-bottom: 15px\">Hola :)</p></li>
                                <li><a href=\"";
            // line 29
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
            echo "\">Inicia Sesion</a></li>
                            ";
        }
        // line 31
        echo "                            <li><i style=\"padding: 15px\" class=\"glyphicon glyphicon-user\"></i></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </header>
        ";
        // line 37
        $this->loadTemplate("lateralmenu.html.twig", "header.html.twig", 37)->display($context);
        // line 38
        echo "    </body>
</html>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 38,  85 => 37,  77 => 31,  72 => 29,  69 => 28,  61 => 26,  59 => 25,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE HTML>
<html lang=\"es\">
    <body>
        <header>
            <nav class=\"navbar navbar-default global-header\">
                <div class=\"container-fluid\">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class=\"navbar-header\">
                        <ul class=\"nav navbar-nav navbar-left\">
                            <li class=\"dropdown\">
                                <a href=\"#\" class=\"header-dropdown-icon\" id=\"header-lateral-menu-button\" data-toggle=\"dropdown\" role=\"button\" style=\"padding: 0px; padding-right: 15px\"
                                onclick=\"showLateralMenu()\">
                                    <i class=\"glyphicon glyphicon-th-large\" style=\"font-size: 50px\"></i>
                                </a>
                            </li>
                            <li>
                                <a class=\"navbar-brand header-title\" href=\"#\">NutriK</a>
                            </li>
                        </ul>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                        <ul class=\"nav navbar-nav navbar-right\">

                            {% if app.user != null %}
                                <li><p style=\"padding-top: 15px; padding-bottom: 15px\">Hola :) {{ app.user.firstname }} {{ app.user.lastname }}</p></li>
                            {% else %}
                                <li><p style=\"padding-top: 15px; padding-bottom: 15px\">Hola :)</p></li>
                                <li><a href=\"{{ path('login') }}\">Inicia Sesion</a></li>
                            {% endif %}
                            <li><i style=\"padding: 15px\" class=\"glyphicon glyphicon-user\"></i></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </header>
        {% include 'lateralmenu.html.twig' %}
    </body>
</html>


", "header.html.twig", "/shared/httpd/nutrik/app/Resources/views/header.html.twig");
    }
}
