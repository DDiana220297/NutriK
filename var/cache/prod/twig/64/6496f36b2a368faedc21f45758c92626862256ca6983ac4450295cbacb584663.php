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

/* @Customer/about.html.twig */
class __TwigTemplate_6e9eb6d3b897f42b41fa23a8c77f2454169996d491000403cbb3e29f85e7037e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Customer/about.html.twig"));

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
        <!-- Login Page stylesheet-->
        <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/customerpages.css"), "html", null, true);
        echo "\" />
    </header>
    <section id=\"default-header\">
        ";
        // line 9
        $this->loadTemplate("header.html.twig", "@Customer/about.html.twig", 9)->display($context);
        // line 10
        echo "    </section>
    <section id=\"customer-header\">
        ";
        // line 12
        $this->loadTemplate("customerheader.html.twig", "@Customer/about.html.twig", 12)->display($context);
        // line 13
        echo "    </section>
    <section id=\"carousel-section\">
        <div class=\"container\">
            <div id=\"about-carousel-section\" class=\"carousel slide\" data-ride=\"carousel\">
                <!-- Indicators -->
                <ol class=\"carousel-indicators\">
                    <li data-target=\"#about-carousel-section\" data-slide-to=\"0\" class=\"active\"></li>
                    <li data-target=\"#about-carousel-section\" data-slide-to=\"1\"></li>
                    <li data-target=\"#about-carousel-section\" data-slide-to=\"2\"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class=\"carousel-inner\" role=\"listbox\">
                    <div class=\"item active\">
                        <img src=\"https://dummyimage.com/920x480/eeeeee/aaaaaa&text=Example%20light%20background%20image\">
                        <div class=\"carousel-caption\">
                            <h4>Bootstrap caption example</h4>
                            <p>Bootstrap 3.4.1 is not so old, but you can use Bootstrap 4 already.</p>
                        </div>
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
                        <div class=\"carousel-caption\">
                            <h4>Bootstrap caption example</h4>
                            <p>Bootstrap 3.4.1 is not so old, but you can use Bootstrap 4 already.</p>
                        </div>
                        <div style=\"color: black\">
                            <p>Description vjdshkhsdakvhskdajvh</p>
                        </div>
                    </div>
                </div>

                <!-- Controls -->
                <a class=\"left carousel-control\" href=\"#about-carousel-section\" role=\"button\" data-slide=\"prev\">
                    <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Previous</span>
                </a>

                <a class=\"right carousel-control\" href=\"#about-carousel-section\" role=\"button\" data-slide=\"next\">
                    <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Next</span>
                </a>
            </div>
        </div>
        <div class=\"container\">
            <div class=\"row\" style=\"justify-content: center; color: black; text-align: center; padding: 100px\">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
            </div>
        </div>
    </section>
    </html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Customer/about.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 13,  64 => 12,  60 => 10,  58 => 9,  52 => 6,  46 => 2,  34 => 1,);
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
        <!-- Login Page stylesheet-->
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/framework/css/customerpages.css') }}\" />
    </header>
    <section id=\"default-header\">
        {% include 'header.html.twig' %}
    </section>
    <section id=\"customer-header\">
        {% include 'customerheader.html.twig' %}
    </section>
    <section id=\"carousel-section\">
        <div class=\"container\">
            <div id=\"about-carousel-section\" class=\"carousel slide\" data-ride=\"carousel\">
                <!-- Indicators -->
                <ol class=\"carousel-indicators\">
                    <li data-target=\"#about-carousel-section\" data-slide-to=\"0\" class=\"active\"></li>
                    <li data-target=\"#about-carousel-section\" data-slide-to=\"1\"></li>
                    <li data-target=\"#about-carousel-section\" data-slide-to=\"2\"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class=\"carousel-inner\" role=\"listbox\">
                    <div class=\"item active\">
                        <img src=\"https://dummyimage.com/920x480/eeeeee/aaaaaa&text=Example%20light%20background%20image\">
                        <div class=\"carousel-caption\">
                            <h4>Bootstrap caption example</h4>
                            <p>Bootstrap 3.4.1 is not so old, but you can use Bootstrap 4 already.</p>
                        </div>
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
                        <div class=\"carousel-caption\">
                            <h4>Bootstrap caption example</h4>
                            <p>Bootstrap 3.4.1 is not so old, but you can use Bootstrap 4 already.</p>
                        </div>
                        <div style=\"color: black\">
                            <p>Description vjdshkhsdakvhskdajvh</p>
                        </div>
                    </div>
                </div>

                <!-- Controls -->
                <a class=\"left carousel-control\" href=\"#about-carousel-section\" role=\"button\" data-slide=\"prev\">
                    <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Previous</span>
                </a>

                <a class=\"right carousel-control\" href=\"#about-carousel-section\" role=\"button\" data-slide=\"next\">
                    <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Next</span>
                </a>
            </div>
        </div>
        <div class=\"container\">
            <div class=\"row\" style=\"justify-content: center; color: black; text-align: center; padding: 100px\">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
            </div>
        </div>
    </section>
    </html>
{% endblock %}
", "@Customer/about.html.twig", "/shared/httpd/nutrik/src/CustomerBundle/Resources/views/about.html.twig");
    }
}
