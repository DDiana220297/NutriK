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

/* loginpagemodal.html.twig */
class __TwigTemplate_d689ec4fd78e82d12ccf61c0c70b2a5ce8b1dcd4c7c5a6eca4fb5695b8d6de80 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "loginpagemodal.html.twig"));

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
        echo "    </title>

    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/bootstrap-theme.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/carousel.css"), "html", null, true);
        echo "\">

    <!-- Login Page stylesheet-->
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/loginpage.css"), "html", null, true);
        echo "\" />

    ";
        // line 17
        echo "    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>

    ";
        // line 20
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/jquery-3.2.1.slim.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/popper.min.js"), "html", null, true);
        echo "\"></script>

</head>
    <body>
        <div class=\"container\">
            <div class=\"row title\">
                <h1>NutriK</h1>
            </div>
            <div class=\"row logincarousel\">
                <div class=\"col-sm-12\">
                    <div id=\"carouselLoginPage\" class=\"carousel slide\" data-ride=\"carousel\">
                        <ol class=\"carousel-indicators\">
                            <li data-target=\"#carouselLoginPage\" data-slide-to=\"0\" class=\"active\"></li>
                            <li data-target=\"#carouselLoginPage\" data-slide-to=\"1\"></li>
                            <li data-target=\"#carouselLoginPage\" data-slide-to=\"2\"></li>
                            <li data-target=\"#carouselLoginPage\" data-slide-to=\"3\"></li>
                        </ol>
                        <div class=\"carousel-inner\">
                            <div class=\"carousel-item active\">
                                <img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img1.jpg"), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"...\">
                                ";
        // line 43
        echo "                                ";
        // line 44
        echo "                                ";
        // line 45
        echo "                                ";
        // line 46
        echo "                            </div>
                            <div class=\"carousel-item\">
                                <img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img2.jpeg"), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"...\">
                            </div>
                            <div class=\"carousel-item\">
                                <img src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img3.jpg"), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"...\">
                            </div>
                            <div class=\"carousel-item\">
                                <img src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img4.jpg"), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"...\">
                            </div>
                        </div>
                        <a class=\"carousel-control-prev\" href=\"#carouselLoginPage\" role=\"button\" data-slide=\"prev\">
                            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                            <span class=\"sr-only\">Previous</span>
                        </a>
                        <a class=\"carousel-control-next\" href=\"#carouselLoginPage\" role=\"button\" data-slide=\"next\">
                            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                            <span class=\"sr-only\">Next</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class=\"row webdescription\">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
            </div>
            <div class=\"row loginactions\">
                <div class=\"login-button-item\">
                    <button class=\"btn btn-primary login-button\" type=\"button\">Visita NutriK</button>
                </div>
                <div class=\"login-button-item\">
                    <button class=\"btn btn-primary login-button-grey\" type=\"button\">Iniciar Sesión</button>
                </div>
                <div class=\"login-button-item\">
                    <button class=\"btn btn-primary login-button\" type=\"button\">Registrarse</button>
                </div>
            </div>
        </div>
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

    public function getTemplateName()
    {
        return "loginpagemodal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 6,  127 => 54,  121 => 51,  115 => 48,  111 => 46,  109 => 45,  107 => 44,  105 => 43,  101 => 41,  79 => 22,  75 => 21,  70 => 20,  66 => 17,  61 => 14,  55 => 11,  51 => 10,  47 => 9,  43 => 7,  41 => 6,  34 => 1,);
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

    <link rel=\"stylesheet\" href=\"{{ asset('public/css/bootstrap.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('public/css/bootstrap-theme.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('public/css/carousel.css') }}\">

    <!-- Login Page stylesheet-->
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/framework/css/loginpage.css') }}\" />

    {#    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->#}
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>

    {#    <!-- Latest compiled and minified JavaScript -->#}
    <script src=\"{{ asset('public/js/bootstrap.min.js') }}\"></script>
    <script src=\"{{ asset('public/js/jquery-3.2.1.slim.min.js') }}\"></script>
    <script src=\"{{ asset('public/js/popper.min.js') }}\"></script>

</head>
    <body>
        <div class=\"container\">
            <div class=\"row title\">
                <h1>NutriK</h1>
            </div>
            <div class=\"row logincarousel\">
                <div class=\"col-sm-12\">
                    <div id=\"carouselLoginPage\" class=\"carousel slide\" data-ride=\"carousel\">
                        <ol class=\"carousel-indicators\">
                            <li data-target=\"#carouselLoginPage\" data-slide-to=\"0\" class=\"active\"></li>
                            <li data-target=\"#carouselLoginPage\" data-slide-to=\"1\"></li>
                            <li data-target=\"#carouselLoginPage\" data-slide-to=\"2\"></li>
                            <li data-target=\"#carouselLoginPage\" data-slide-to=\"3\"></li>
                        </ol>
                        <div class=\"carousel-inner\">
                            <div class=\"carousel-item active\">
                                <img src=\"{{ asset('img1.jpg') }}\" class=\"d-block w-100\" alt=\"...\">
                                {#                    <div class=\"carousel-caption d-none d-md-block\">#}
                                {#                        <h5>My Caption Title (1st Image)</h5>#}
                                {#                        <p>The whole caption will only show up if the screen is at least medium size.</p>#}
                                {#                    </div>#}
                            </div>
                            <div class=\"carousel-item\">
                                <img src=\"{{ asset('img2.jpeg') }}\" class=\"d-block w-100\" alt=\"...\">
                            </div>
                            <div class=\"carousel-item\">
                                <img src=\"{{ asset('img3.jpg') }}\" class=\"d-block w-100\" alt=\"...\">
                            </div>
                            <div class=\"carousel-item\">
                                <img src=\"{{ asset('img4.jpg') }}\" class=\"d-block w-100\" alt=\"...\">
                            </div>
                        </div>
                        <a class=\"carousel-control-prev\" href=\"#carouselLoginPage\" role=\"button\" data-slide=\"prev\">
                            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                            <span class=\"sr-only\">Previous</span>
                        </a>
                        <a class=\"carousel-control-next\" href=\"#carouselLoginPage\" role=\"button\" data-slide=\"next\">
                            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                            <span class=\"sr-only\">Next</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class=\"row webdescription\">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
            </div>
            <div class=\"row loginactions\">
                <div class=\"login-button-item\">
                    <button class=\"btn btn-primary login-button\" type=\"button\">Visita NutriK</button>
                </div>
                <div class=\"login-button-item\">
                    <button class=\"btn btn-primary login-button-grey\" type=\"button\">Iniciar Sesión</button>
                </div>
                <div class=\"login-button-item\">
                    <button class=\"btn btn-primary login-button\" type=\"button\">Registrarse</button>
                </div>
            </div>
        </div>
    </body>
</html>
", "loginpagemodal.html.twig", "/shared/httpd/nutrik/app/Resources/views/loginpagemodal.html.twig");
    }
}
