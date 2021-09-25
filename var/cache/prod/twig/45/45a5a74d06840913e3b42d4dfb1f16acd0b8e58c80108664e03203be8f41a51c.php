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
    <!-- Latest compiled and minified CSS -->
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css\">

    <!-- Optional theme -->
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css\">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js\"></script>

    <!-- Header stylesheet-->
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/header.css"), "html", null, true);
        echo "\" />

    <!-- Menu component javascript -->
    <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/js/MenuComponent.js"), "html", null, true);
        echo "\"></script>
</head>
<body>
    <div class=\"login-carousel\" id=\"login-carousel\">
        <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
            <ol class=\"carousel-indicators\">
                <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
                <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
                <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
                <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"4\"></li>
            </ol>
            <div class=\"carousel-inner\">
                <div class=\"carousel-item active\">
                    <img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img1.jpg"), "html", null, true);
        echo "\" class=\"d-block w-100\">
                </div>
                <div class=\"carousel-item\">
                    <img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img2.jpeg"), "html", null, true);
        echo "\" class=\"d-block w-100\">
                </div>
                <div class=\"carousel-item\">
                    <img src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img3.jpg"), "html", null, true);
        echo "\" class=\"d-block w-100\">
                </div>
                <div class=\"carousel-item\">
                    <img src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img4.jpg"), "html", null, true);
        echo "\" class=\"d-block w-100\">
                </div>
            </div>
            <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
                <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                <span class=\"sr-only\">Previous</span>
            </a>
            <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
                <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                <span class=\"sr-only\">Next</span>
            </a>
        </div>
";
        // line 105
        echo "
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
        return array (  127 => 6,  114 => 105,  99 => 46,  93 => 43,  87 => 40,  81 => 37,  65 => 24,  59 => 21,  43 => 7,  41 => 6,  34 => 1,);
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

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js\"></script>

    <!-- Header stylesheet-->
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/framework/css/header.css') }}\" />

    <!-- Menu component javascript -->
    <script src=\"{{ asset('bundles/framework/js/MenuComponent.js') }}\"></script>
</head>
<body>
    <div class=\"login-carousel\" id=\"login-carousel\">
        <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
            <ol class=\"carousel-indicators\">
                <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
                <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
                <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
                <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"4\"></li>
            </ol>
            <div class=\"carousel-inner\">
                <div class=\"carousel-item active\">
                    <img src=\"{{ asset('img1.jpg') }}\" class=\"d-block w-100\">
                </div>
                <div class=\"carousel-item\">
                    <img src=\"{{ asset('img2.jpeg') }}\" class=\"d-block w-100\">
                </div>
                <div class=\"carousel-item\">
                    <img src=\"{{ asset('img3.jpg') }}\" class=\"d-block w-100\">
                </div>
                <div class=\"carousel-item\">
                    <img src=\"{{ asset('img4.jpg') }}\" class=\"d-block w-100\">
                </div>
            </div>
            <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
                <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                <span class=\"sr-only\">Previous</span>
            </a>
            <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
                <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                <span class=\"sr-only\">Next</span>
            </a>
        </div>
{#        <div class=\"bd-example\">#}
{#            <div id=\"carouselExampleCaptions\" class=\"carousel slide\" data-ride=\"carousel\">#}
{#                <ol class=\"carousel-indicators\">#}
{#                    <li data-target=\"#carouselExampleCaptions\" data-slide-to=\"0\" class=\"active\"></li>#}
{#                    <li data-target=\"#carouselExampleCaptions\" data-slide-to=\"1\"></li>#}
{#                    <li data-target=\"#carouselExampleCaptions\" data-slide-to=\"2\"></li>#}
{#                </ol>#}
{#                <div class=\"carousel-inner\">#}
{#                    <div class=\"carousel-item active\">#}
{#                        <img src=\"{{ asset('img1.jpg') }}\" class=\"d-block w-100\" alt=\"...\">#}
{#                        <div class=\"carousel-caption d-none d-md-block\">#}
{#                            <h5>First slide label</h5>#}
{#                            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>#}
{#                        </div>#}
{#                    </div>#}
{#                    <div class=\"carousel-item\">#}
{#                        <img src=\"{{ asset('img2.jpeg') }}\" class=\"d-block w-100\" alt=\"...\">#}
{#                        <div class=\"carousel-caption d-none d-md-block\">#}
{#                            <h5>Second slide label</h5>#}
{#                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>#}
{#                        </div>#}
{#                    </div>#}
{#                    <div class=\"carousel-item\">#}
{#                        <img src=\"{{ asset('img3.jpg') }}\" class=\"d-block w-100\" alt=\"...\">#}
{#                        <div class=\"carousel-caption d-none d-md-block\">#}
{#                            <h5>Third slide label</h5>#}
{#                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>#}
{#                        </div>#}
{#                    </div>#}
{#                    <div class=\"carousel-item\">#}
{#                        <img src=\"{{ asset('img4.jpg') }}\" class=\"d-block w-100\" alt=\"...\">#}
{#                        <div class=\"carousel-caption d-none d-md-block\">#}
{#                            <h5>Third slide label</h5>#}
{#                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>#}
{#                        </div>#}
{#                    </div>#}
{#                </div>#}
{#                <a class=\"carousel-control-prev\" href=\"#carouselExampleCaptions\" role=\"button\" data-slide=\"prev\">#}
{#                    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>#}
{#                    <span class=\"sr-only\">Previous</span>#}
{#                </a>#}
{#                <a class=\"carousel-control-next\" href=\"#carouselExampleCaptions\" role=\"button\" data-slide=\"next\">#}
{#                    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>#}
{#                    <span class=\"sr-only\">Next</span>#}
{#                </a>#}
{#            </div>#}
{#        </div>#}

    </div>


</body>
</html>
", "loginpagemodal.html.twig", "/shared/httpd/nutrik/app/Resources/views/loginpagemodal.html.twig");
    }
}
