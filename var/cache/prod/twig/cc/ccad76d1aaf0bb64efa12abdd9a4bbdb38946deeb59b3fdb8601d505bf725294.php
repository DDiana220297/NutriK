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

/* @Customer/news.html.twig */
class __TwigTemplate_179229d0a02a8f2e666c3fa2ea4bf0566205728721c82b6855979045039423cf extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'title' => [$this, 'block_title'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Customer/news.html.twig"));

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
        <meta charset=\"utf-8\"/>
        <title>
            ";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        // line 8
        echo "        </title>

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
    </header>
    <section id=\"default-header\">
        ";
        // line 33
        $this->loadTemplate("header.html.twig", "@Customer/news.html.twig", 33)->display($context);
        // line 34
        echo "    </section>
    <section id=\"customer-header\">
        ";
        // line 36
        $this->loadTemplate("customerheader.html.twig", "@Customer/news.html.twig", 36)->display($context);
        // line 37
        echo "    </section>
    <section id=\"carousel\">
        <style>
            /* Carousel dark indicators */
            /* Add an extra .carousel parent class to increase specifity
               avoiding the use of !important flag. */
            .carousel .carousel-indicators li {
                background-color: #fff;
                background-color: rgba(70,70,70,.25);
            }

            .carousel .carousel-indicators .active {
                background-color: #444;
            }

            /* Only for beautify example */
            h1 {
                margin: 60px auto;
                text-align: center;
            }

            img {
                width: 100%;
            }
        </style>
        <h1>
            Bootstrap v3.4.1 Carousel<br>
            <small>dark indicators on light background</small>
        </h1>

        <div class=\"container\">
            <div id=\"carousel-example-generic\" class=\"carousel slide\" data-ride=\"carousel\">
                <!-- Indicators -->
                <ol class=\"carousel-indicators\">
                    <li data-target=\"#carousel-example-generic\" data-slide-to=\"0\" class=\"active\"></li>
                    <li data-target=\"#carousel-example-generic\" data-slide-to=\"1\"></li>
                    <li data-target=\"#carousel-example-generic\" data-slide-to=\"2\"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class=\"carousel-inner\" role=\"listbox\">
                    <div class=\"item active\">
                        <img src=\"https://dummyimage.com/920x480/eeeeee/aaaaaa&text=Example%20light%20background%20image\">
                    </div>

                    <div class=\"item\">
                        <img src=\"https://dummyimage.com/920x480/eeeeee/aaaaaa&text=Example%20light%20background%20image%20with%20caption\">
                        <div class=\"carousel-caption\">
                            <h4>Bootstrap caption example</h4>
                            <p>Bootstrap 3.4.1 is not so old, but you can use Bootstrap 4 already.</p>
                        </div>
                    </div>

                    <div class=\"item\">
                        <img src=\"https://dummyimage.com/920x480/eeeeee/aaaaaa&text=Another%20example%20without%20caption\">
                    </div>
                </div>

                <!-- Controls -->
                <a class=\"left carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-slide=\"prev\">
                    <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Previous</span>
                </a>

                <a class=\"right carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-slide=\"next\">
                    <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Next</span>
                </a>
            </div>
        </div>
    </section>
    <footer>
        Trabajo de fin de grado Nutrik
    </footer>
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
        return "@Customer/news.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  194 => 7,  112 => 37,  110 => 36,  106 => 34,  104 => 33,  98 => 30,  92 => 27,  86 => 24,  80 => 21,  71 => 15,  65 => 12,  61 => 11,  56 => 8,  54 => 7,  47 => 2,  35 => 1,);
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
    </header>
    <section id=\"default-header\">
        {% include 'header.html.twig' %}
    </section>
    <section id=\"customer-header\">
        {% include 'customerheader.html.twig' %}
    </section>
    <section id=\"carousel\">
        <style>
            /* Carousel dark indicators */
            /* Add an extra .carousel parent class to increase specifity
               avoiding the use of !important flag. */
            .carousel .carousel-indicators li {
                background-color: #fff;
                background-color: rgba(70,70,70,.25);
            }

            .carousel .carousel-indicators .active {
                background-color: #444;
            }

            /* Only for beautify example */
            h1 {
                margin: 60px auto;
                text-align: center;
            }

            img {
                width: 100%;
            }
        </style>
        <h1>
            Bootstrap v3.4.1 Carousel<br>
            <small>dark indicators on light background</small>
        </h1>

        <div class=\"container\">
            <div id=\"carousel-example-generic\" class=\"carousel slide\" data-ride=\"carousel\">
                <!-- Indicators -->
                <ol class=\"carousel-indicators\">
                    <li data-target=\"#carousel-example-generic\" data-slide-to=\"0\" class=\"active\"></li>
                    <li data-target=\"#carousel-example-generic\" data-slide-to=\"1\"></li>
                    <li data-target=\"#carousel-example-generic\" data-slide-to=\"2\"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class=\"carousel-inner\" role=\"listbox\">
                    <div class=\"item active\">
                        <img src=\"https://dummyimage.com/920x480/eeeeee/aaaaaa&text=Example%20light%20background%20image\">
                    </div>

                    <div class=\"item\">
                        <img src=\"https://dummyimage.com/920x480/eeeeee/aaaaaa&text=Example%20light%20background%20image%20with%20caption\">
                        <div class=\"carousel-caption\">
                            <h4>Bootstrap caption example</h4>
                            <p>Bootstrap 3.4.1 is not so old, but you can use Bootstrap 4 already.</p>
                        </div>
                    </div>

                    <div class=\"item\">
                        <img src=\"https://dummyimage.com/920x480/eeeeee/aaaaaa&text=Another%20example%20without%20caption\">
                    </div>
                </div>

                <!-- Controls -->
                <a class=\"left carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-slide=\"prev\">
                    <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Previous</span>
                </a>

                <a class=\"right carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-slide=\"next\">
                    <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Next</span>
                </a>
            </div>
        </div>
    </section>
    <footer>
        Trabajo de fin de grado Nutrik
    </footer>
    </html>
{% endblock %}
", "@Customer/news.html.twig", "/shared/httpd/nutrik/src/CustomerBundle/Resources/views/news.html.twig");
    }
}
