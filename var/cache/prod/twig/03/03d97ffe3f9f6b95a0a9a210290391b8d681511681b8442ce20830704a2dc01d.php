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

/* @Customs/layout.html.twig */
class __TwigTemplate_21848b020f399fc18a792717124ec6a005773619eeb4eb0a9793bc3e9c5b8e84 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Customs/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE HTML>
<html lang=\"es\">
    <head>
        <meta charset=\"utf-8\"/>
        <title>
            ";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        // line 7
        echo "        </title>
        <!-- Latest compiled and minified CSS -->
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css\">

        <!-- Optional theme -->
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css\">

        <!-- Latest compiled and minified JavaScript -->
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>

        <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js\"></script>
    </head>
    <body>
        <header>
            <nav class=\"navbar navbar-default\">
                <div class=\"container-fluid\">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class=\"navbar-header\">
                        <ul class=\"nav navbar-nav navbar-left\">
                            <li class=\"dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"glyphicon glyphicon-th-large\"></i></a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"#\">Pagina Principal</a></li>
                                    <li><a href=\"#\">Agenda Personal</a></li>
                                    <li><a href=\"#\">Calendario / Notificaciones</a></li>
                                    <li><a href=\"#\">Mensajeria</a></li>
                                    <li><a href=\"#\">Clientes</a></li>
                                    <li role=\"separator\" class=\"divider\"></li>
                                    <li><a href=\"#\">Programar Consulta</a></li>
                                    <li><a href=\"#\">Añadir Cliente</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class=\"navbar-brand\" href=\"#\">NutriK</a>
                            </li>
                        </ul>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                        <ul class=\"nav navbar-nav navbar-right\">
                            <li><p style=\"padding-top: 15px; padding-bottom: 15px\">Hola :)</p></li>
                            <li><a href=\"#\">Inicia Sesion</a></li>
                            <li><i style=\"padding: 15px\" class=\"glyphicon glyphicon-user\"></i></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </header>
        <section id=\"content\">
            ";
        // line 58
        $this->displayBlock('content', $context, $blocks);
        // line 59
        echo "        </section>
        <footer>
            Trabajo de fin de grado Nutrik
        </footer>
    </body>
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " NutriK ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 58
    public function block_content($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        echo " Content Default ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Customs/layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  124 => 58,  112 => 6,  99 => 59,  97 => 58,  44 => 7,  42 => 6,  35 => 1,);
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
    <head>
        <meta charset=\"utf-8\"/>
        <title>
            {% block title %} NutriK {% endblock %}
        </title>
        <!-- Latest compiled and minified CSS -->
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css\">

        <!-- Optional theme -->
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css\">

        <!-- Latest compiled and minified JavaScript -->
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>

        <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js\"></script>
    </head>
    <body>
        <header>
            <nav class=\"navbar navbar-default\">
                <div class=\"container-fluid\">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class=\"navbar-header\">
                        <ul class=\"nav navbar-nav navbar-left\">
                            <li class=\"dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"glyphicon glyphicon-th-large\"></i></a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"#\">Pagina Principal</a></li>
                                    <li><a href=\"#\">Agenda Personal</a></li>
                                    <li><a href=\"#\">Calendario / Notificaciones</a></li>
                                    <li><a href=\"#\">Mensajeria</a></li>
                                    <li><a href=\"#\">Clientes</a></li>
                                    <li role=\"separator\" class=\"divider\"></li>
                                    <li><a href=\"#\">Programar Consulta</a></li>
                                    <li><a href=\"#\">Añadir Cliente</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class=\"navbar-brand\" href=\"#\">NutriK</a>
                            </li>
                        </ul>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                        <ul class=\"nav navbar-nav navbar-right\">
                            <li><p style=\"padding-top: 15px; padding-bottom: 15px\">Hola :)</p></li>
                            <li><a href=\"#\">Inicia Sesion</a></li>
                            <li><i style=\"padding: 15px\" class=\"glyphicon glyphicon-user\"></i></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </header>
        <section id=\"content\">
            {% block content %} Content Default {% endblock %}
        </section>
        <footer>
            Trabajo de fin de grado Nutrik
        </footer>
    </body>
</html>
", "@Customs/layout.html.twig", "/shared/httpd/nutrik/src/CustomsBundle/Resources/views/layout.html.twig");
    }
}
