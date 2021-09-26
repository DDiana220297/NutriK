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

/* carousel.html.twig */
class __TwigTemplate_e82600ad69d66975bf32b69ac68a054b0a6b20bf1f67dc2f210cc398155c95d9 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "carousel.html.twig"));

        // line 1
        echo "<!DOCTYPE HTML>
<html lang=\"es\">
<head>
    <meta charset=\"utf-8\"/>

    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/bootstrap-theme.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/carousel.css"), "html", null, true);
        echo "\">

    <!-- Login Page stylesheet-->
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/loginpage.css"), "html", null, true);
        echo "\" />

    ";
        // line 14
        echo "    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>

    ";
        // line 17
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/jquery-3.2.1.slim.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/popper.min.js"), "html", null, true);
        echo "\"></script>

</head>
<body>
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
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img1.jpg"), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"...\">
            ";
        // line 34
        echo "            ";
        // line 35
        echo "            ";
        // line 36
        echo "            ";
        // line 37
        echo "        </div>
        <div class=\"carousel-item\">
            <img src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img2.jpeg"), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"...\">
        </div>
        <div class=\"carousel-item\">
            <img src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img3.jpg"), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"...\">
        </div>
        <div class=\"carousel-item\">
            <img src=\"";
        // line 45
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
</body>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "carousel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 45,  108 => 42,  102 => 39,  98 => 37,  96 => 36,  94 => 35,  92 => 34,  88 => 32,  72 => 19,  68 => 18,  63 => 17,  59 => 14,  54 => 11,  48 => 8,  44 => 7,  40 => 6,  33 => 1,);
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
</body>
", "carousel.html.twig", "/shared/httpd/nutrik/app/Resources/views/carousel.html.twig");
    }
}
