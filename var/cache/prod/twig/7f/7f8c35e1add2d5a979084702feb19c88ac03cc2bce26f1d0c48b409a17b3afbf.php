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
                                ";
        // line 38
        if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []) != null)) {
            echo " onclick=\"showLateralMenu()\" ";
        }
        echo ">
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
        // line 50
        if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []) != null)) {
            // line 51
            echo "                                ";
            if ((($context["pending_inbox"] ?? $this->getContext($context, "pending_inbox")) == 1)) {
                // line 52
                echo "                                    <li>
                                        <svg id=\"svg-messenger\" xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-envelope-exclamation\" viewBox=\"0 0 16 16\" style=\"width: 30px; height: 30px; margin-top: 12px\"
                                             onclick=\"redirectTo('messenger/0')\">
                                            <path fill-rule=\"evenodd\" d=\"M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471 1.069.64.257.155.257-.154 1.33-.798L15 5.383V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2H2Zm3.708 6.208L1 11.105V5.383l4.708 2.825Zm1.22-.434L1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217L9.072 7.774 8 8.417l-1.072-.643ZM12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.5-5a.5.5 0 0 0-1 0v1.5a.5.5 0 0 0 1 0V11Zm0 3a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0Z\"/>
                                        </svg>
                                    </li>
                                ";
            } else {
                // line 59
                echo "                                    <li>
                                        <svg id=\"svg-messenger\" xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-envelope-open\" viewBox=\"0 0 16 16\" style=\"width: 30px; height: 30px; margin-top: 12px\"
                                             onclick=\"redirectTo('messenger/0')\">
                                            <path fill-rule=\"evenodd\" d=\"M8.47 1.318a1 1 0 0 0-.94 0l-6 3.2A1 1 0 0 0 1 5.4v.817l5.75 3.45L8 8.917l1.25.75L15 6.217V5.4a1 1 0 0 0-.53-.882l-6-3.2ZM15 7.383l-4.778 2.867L15 13.117V7.383Zm-.035 6.88L8 10.082l-6.965 4.18A1 1 0 0 0 2 15h12a1 1 0 0 0 .965-.738ZM1 13.116l4.778-2.867L1 7.383v5.734ZM7.059.435a2 2 0 0 1 1.882 0l6 3.2A2 2 0 0 1 16 5.4V14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V5.4a2 2 0 0 1 1.059-1.765l6-3.2Z\"/>
                                        </svg>
                                    </li>
                                ";
            }
            // line 66
            echo "                                <li><p style=\"padding: 15px; font-size: 18px\">Hola, ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "firstname", []), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "lastname", []), "html", null, true);
            echo " :) ";
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_NUTR")) {
                echo "<a style=\"color: white\" href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nutritionist_accountpage");
                echo "\">Mi NutriSpace</a>";
            }
            echo "</p></li>
                            ";
        } else {
            // line 68
            echo "                                <li style=\"margin-top: 15px\"><span style=\"padding: 15px; font-size: 18px\">Hola :)<a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
            echo "\" style=\"font-size: 18px; margin-top: 5px; margin-left: 10px; color: white\">Inicia Sesion</a></span></li>
                            ";
        }
        // line 70
        echo "                            <li>
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-person-fill\" viewBox=\"0 0 16 16\" style=\"width: 30px; height: 30px; margin-top: 12px\">
                                    <path d=\"M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z\"/>
                                </svg>
                            </li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </header>
        ";
        // line 80
        $this->loadTemplate("lateralmenu.html.twig", "header.html.twig", 80)->display($context);
        // line 81
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
        return array (  185 => 7,  174 => 81,  172 => 80,  160 => 70,  154 => 68,  140 => 66,  131 => 59,  122 => 52,  119 => 51,  117 => 50,  107 => 43,  97 => 38,  86 => 30,  80 => 27,  74 => 24,  68 => 21,  59 => 15,  53 => 12,  49 => 11,  44 => 8,  42 => 7,  34 => 1,);
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
                                {% if app.user != null %} onclick=\"showLateralMenu()\" {% endif %}>
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
                                {% if pending_inbox == 1 %}
                                    <li>
                                        <svg id=\"svg-messenger\" xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-envelope-exclamation\" viewBox=\"0 0 16 16\" style=\"width: 30px; height: 30px; margin-top: 12px\"
                                             onclick=\"redirectTo('messenger/0')\">
                                            <path fill-rule=\"evenodd\" d=\"M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471 1.069.64.257.155.257-.154 1.33-.798L15 5.383V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2H2Zm3.708 6.208L1 11.105V5.383l4.708 2.825Zm1.22-.434L1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217L9.072 7.774 8 8.417l-1.072-.643ZM12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.5-5a.5.5 0 0 0-1 0v1.5a.5.5 0 0 0 1 0V11Zm0 3a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0Z\"/>
                                        </svg>
                                    </li>
                                {% else %}
                                    <li>
                                        <svg id=\"svg-messenger\" xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-envelope-open\" viewBox=\"0 0 16 16\" style=\"width: 30px; height: 30px; margin-top: 12px\"
                                             onclick=\"redirectTo('messenger/0')\">
                                            <path fill-rule=\"evenodd\" d=\"M8.47 1.318a1 1 0 0 0-.94 0l-6 3.2A1 1 0 0 0 1 5.4v.817l5.75 3.45L8 8.917l1.25.75L15 6.217V5.4a1 1 0 0 0-.53-.882l-6-3.2ZM15 7.383l-4.778 2.867L15 13.117V7.383Zm-.035 6.88L8 10.082l-6.965 4.18A1 1 0 0 0 2 15h12a1 1 0 0 0 .965-.738ZM1 13.116l4.778-2.867L1 7.383v5.734ZM7.059.435a2 2 0 0 1 1.882 0l6 3.2A2 2 0 0 1 16 5.4V14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V5.4a2 2 0 0 1 1.059-1.765l6-3.2Z\"/>
                                        </svg>
                                    </li>
                                {% endif %}
                                <li><p style=\"padding: 15px; font-size: 18px\">Hola, {{ app.user.firstname }} {{ app.user.lastname }} :) {% if is_granted('ROLE_NUTR') %}<a style=\"color: white\" href=\"{{ path('nutritionist_accountpage') }}\">Mi NutriSpace</a>{% endif %}</p></li>
                            {% else %}
                                <li style=\"margin-top: 15px\"><span style=\"padding: 15px; font-size: 18px\">Hola :)<a href=\"{{ path('login') }}\" style=\"font-size: 18px; margin-top: 5px; margin-left: 10px; color: white\">Inicia Sesion</a></span></li>
                            {% endif %}
                            <li>
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-person-fill\" viewBox=\"0 0 16 16\" style=\"width: 30px; height: 30px; margin-top: 12px\">
                                    <path d=\"M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z\"/>
                                </svg>
                            </li>
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
