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
            'title' => [$this, 'block_title'],
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
            <meta charset=\"utf-8\"/>
            <title>
                ";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        // line 8
        echo "            </title>

            <!-- Optional theme -->
            <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/bootstrap-theme.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/bootstrap.css"), "html", null, true);
        echo "\">

            <!-- Login Page stylesheet-->
            <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/loginpage.css"), "html", null, true);
        echo "\" />

            <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>

            <!-- Latest compiled and minified JavaScript -->
            <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/bootstrap.js"), "html", null, true);
        echo "\"></script>

            <!-- Header stylesheet-->
            <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/header.css"), "html", null, true);
        echo "\" />

            <!-- Menu component javascript -->
            <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/js/MenuComponent.js"), "html", null, true);
        echo "\"></script>

            <!-- Customs JS -->
            <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework//js/customs.js"), "html", null, true);
        echo "\"></script>
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
                                <a class=\"navbar-brand header-title\" href=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("customs_homepage");
        echo "\">NutriK</a>
                            </li>
                        </ul>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                        <ul class=\"nav navbar-nav navbar-right\">

                            ";
        // line 51
        if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []) != null)) {
            // line 52
            echo "                                <li><p style=\"padding-top: 15px; padding-bottom: 15px\">Hola :) ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "firstname", []), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "lastname", []), "html", null, true);
            echo " ;) <a style=\"color: white\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nutritionist_accountpage");
            echo "\">Mi cuenta</a></p></li>
                            ";
        } else {
            // line 54
            echo "                                <li><p style=\"padding-top: 15px; padding-bottom: 15px\">Hola :)</p></li>
                                <li><a href=\"";
            // line 55
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
            echo "\">Inicia Sesion</a></li>
                            ";
        }
        // line 57
        echo "                            <li><i style=\"padding: 15px\" class=\"glyphicon glyphicon-user\"></i></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </header>
        ";
        // line 63
        $this->loadTemplate("lateralmenu.html.twig", "header.html.twig", 63)->display($context);
        // line 64
        echo "    </body>
</html>


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
        return array (  154 => 7,  143 => 64,  141 => 63,  133 => 57,  128 => 55,  125 => 54,  115 => 52,  113 => 51,  102 => 43,  86 => 30,  80 => 27,  74 => 24,  68 => 21,  59 => 15,  53 => 12,  49 => 11,  44 => 8,  42 => 7,  34 => 1,);
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
            <meta charset=\"utf-8\"/>
            <title>
                {% block title %} NutriK {% endblock %}
            </title>

            <!-- Optional theme -->
            <link rel=\"stylesheet\" href=\"{{ asset('public/css/bootstrap-theme.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('public/css/bootstrap.css') }}\">

            <!-- Login Page stylesheet-->
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/framework/css/loginpage.css') }}\" />

            <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>

            <!-- Latest compiled and minified JavaScript -->
            <script src=\"{{ asset('public/js/bootstrap.js') }}\"></script>

            <!-- Header stylesheet-->
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/framework/css/header.css') }}\" />

            <!-- Menu component javascript -->
            <script src=\"{{ asset('bundles/framework/js/MenuComponent.js') }}\"></script>

            <!-- Customs JS -->
            <script src=\"{{ asset('bundles/framework//js/customs.js') }}\"></script>
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
                                <a class=\"navbar-brand header-title\" href=\"{{ path('customs_homepage') }}\">NutriK</a>
                            </li>
                        </ul>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                        <ul class=\"nav navbar-nav navbar-right\">

                            {% if app.user != null %}
                                <li><p style=\"padding-top: 15px; padding-bottom: 15px\">Hola :) {{ app.user.firstname }} {{ app.user.lastname }} ;) <a style=\"color: white\" href=\"{{ path('nutritionist_accountpage') }}\">Mi cuenta</a></p></li>
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
