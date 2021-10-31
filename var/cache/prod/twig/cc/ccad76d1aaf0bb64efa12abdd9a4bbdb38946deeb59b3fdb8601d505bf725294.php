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
            <!-- Login Page stylesheet-->
            <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/customerpages.css"), "html", null, true);
        echo "\" />
        </header>
        <section id=\"default-header\">
            ";
        // line 9
        $this->loadTemplate("header.html.twig", "@Customer/news.html.twig", 9)->display($context);
        // line 10
        echo "        </section>
        <section id=\"customer-header\">
            ";
        // line 12
        $this->loadTemplate("customerheader.html.twig", "@Customer/news.html.twig", 12)->display($context);
        // line 13
        echo "        </section>
        <section id=\"carousel-section\">
            <div class=\"container\">
                <div id=\"news-carousel-section\" class=\"carousel slide\" data-ride=\"carousel\">
                    <!-- Indicators -->
                    <ol class=\"carousel-indicators\">
                        <li data-target=\"#news-carousel-section\" data-slide-to=\"0\" class=\"active\"></li>
                        <li data-target=\"#news-carousel-section\" data-slide-to=\"1\"></li>
                        <li data-target=\"#news-carousel-section\" data-slide-to=\"2\"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class=\"carousel-inner\" role=\"listbox\">
                        <div class=\"carousel-inner\" role=\"listbox\">
                            ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["new_events"] ?? $this->getContext($context, "new_events")));
        foreach ($context['_seq'] as $context["_key"] => $context["new_event"]) {
            // line 28
            echo "                                <div class=\"item active\">
                                    <img src=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(twig_random($this->env, [0 => "carousel1.jpg", 1 => "carousel2.jpg", 2 => "carousel3.jpg", 3 => "carousel4.jpeg", 4 => "carousel5.jpg", 5 => "img3.jpg", 6 => "img4.jpg"])), "html", null, true);
            echo "\" style=\"border-radius: 10%;\">
                                    <div class=\"carousel-caption\">
                                        <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("customer_event_view", ["id_event" => $this->getAttribute($context["new_event"], "idEvent", [])]), "html", null, true);
            echo "\" style=\"font-size: 22px; font-weight: bold; color: white\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["new_event"], "title", []), "html", null, true);
            echo "</a>
                                        <p style=\"font-size: 18px\">";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["new_event"], "description", []), "html", null, true);
            echo "</p>
                                    </div>
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['new_event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["new_didactic_contents"] ?? $this->getContext($context, "new_didactic_contents")));
        foreach ($context['_seq'] as $context["_key"] => $context["new_didactic_content"]) {
            // line 37
            echo "                                <div class=\"item\">
                                    <img src=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(twig_random($this->env, [0 => "carousel1.jpg", 1 => "carousel2.jpg", 2 => "carousel3.jpg", 3 => "carousel4.jpeg", 4 => "carousel5.jpg", 5 => "img3.jpg", 6 => "img4.jpg"])), "html", null, true);
            echo "\" style=\"border-radius: 10%;\">
                                    <div class=\"carousel-caption\">
                                        <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("customer_didactic_content_view", ["id_entry" => $this->getAttribute($context["new_didactic_content"], "idEntry", [])]), "html", null, true);
            echo "\" style=\"font-size: 22px; font-weight: bold; color: white\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["new_didactic_content"], "title", []), "html", null, true);
            echo "</a>
                                        <p style=\"font-size: 18px\">";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["new_didactic_content"], "description", []), "html", null, true);
            echo "</p>
                                    </div>
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['new_didactic_content'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "                        </div>
                    </div>

                    <!-- Controls -->
                    <a class=\"left carousel-control\" href=\"#news-carousel-section\" role=\"button\" data-slide=\"prev\" style=\"border-radius: 10%;\">
                        <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
                        <span class=\"sr-only\">Previous</span>
                    </a>

                    <a class=\"right carousel-control\" href=\"#news-carousel-section\" role=\"button\" data-slide=\"next\" style=\"border-radius: 10%;\">
                        <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
                        <span class=\"sr-only\">Next</span>
                    </a>
                </div>
            </div>
            <div class=\"container\">
                <div class=\"row\" style=\"justify-content: center; color: black; text-align: center; padding: 100px\">
                    <p style=\"font-size: 22px; font-weight: bold\"> Novedades y Eventos</p>
                    <p style=\"font-size: 17px;\">
                        Aqui podŕas ver las ultimas novedaes en NutriK. Navega por el carousel para ver las ultimas entradas en el contenido didactico para aprender todo sobre como llevar un estilo de vida saludable, la alimentación, el ejercicio y mucho más.
                    </p>
                    <p style=\"font-size: 17px\">
                        No te pierdas los eventos ofrecidos por nuestros profesionales. Participa en nuestras salas de debates y conferencias donde ofrecemos formaciones sobre cualquier tema.
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
        return "@Customer/news.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  139 => 45,  129 => 41,  123 => 40,  118 => 38,  115 => 37,  110 => 36,  100 => 32,  94 => 31,  89 => 29,  86 => 28,  82 => 27,  66 => 13,  64 => 12,  60 => 10,  58 => 9,  52 => 6,  46 => 2,  34 => 1,);
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
                <div id=\"news-carousel-section\" class=\"carousel slide\" data-ride=\"carousel\">
                    <!-- Indicators -->
                    <ol class=\"carousel-indicators\">
                        <li data-target=\"#news-carousel-section\" data-slide-to=\"0\" class=\"active\"></li>
                        <li data-target=\"#news-carousel-section\" data-slide-to=\"1\"></li>
                        <li data-target=\"#news-carousel-section\" data-slide-to=\"2\"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class=\"carousel-inner\" role=\"listbox\">
                        <div class=\"carousel-inner\" role=\"listbox\">
                            {% for new_event in new_events %}
                                <div class=\"item active\">
                                    <img src=\"{{ asset(random(['carousel1.jpg','carousel2.jpg', 'carousel3.jpg', 'carousel4.jpeg','carousel5.jpg', 'img3.jpg','img4.jpg' ])) }}\" style=\"border-radius: 10%;\">
                                    <div class=\"carousel-caption\">
                                        <a href=\"{{ path(\"customer_event_view\",{\"id_event\":new_event.idEvent}) }}\" style=\"font-size: 22px; font-weight: bold; color: white\">{{ new_event.title }}</a>
                                        <p style=\"font-size: 18px\">{{ new_event.description }}</p>
                                    </div>
                                </div>
                            {% endfor %}
                            {% for new_didactic_content in new_didactic_contents %}
                                <div class=\"item\">
                                    <img src=\"{{ asset(random(['carousel1.jpg','carousel2.jpg', 'carousel3.jpg', 'carousel4.jpeg','carousel5.jpg', 'img3.jpg','img4.jpg' ])) }}\" style=\"border-radius: 10%;\">
                                    <div class=\"carousel-caption\">
                                        <a href=\"{{ path(\"customer_didactic_content_view\",{\"id_entry\":new_didactic_content.idEntry}) }}\" style=\"font-size: 22px; font-weight: bold; color: white\">{{ new_didactic_content.title }}</a>
                                        <p style=\"font-size: 18px\">{{ new_didactic_content.description }}</p>
                                    </div>
                                </div>
                            {% endfor %}
                        </div>
                    </div>

                    <!-- Controls -->
                    <a class=\"left carousel-control\" href=\"#news-carousel-section\" role=\"button\" data-slide=\"prev\" style=\"border-radius: 10%;\">
                        <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
                        <span class=\"sr-only\">Previous</span>
                    </a>

                    <a class=\"right carousel-control\" href=\"#news-carousel-section\" role=\"button\" data-slide=\"next\" style=\"border-radius: 10%;\">
                        <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
                        <span class=\"sr-only\">Next</span>
                    </a>
                </div>
            </div>
            <div class=\"container\">
                <div class=\"row\" style=\"justify-content: center; color: black; text-align: center; padding: 100px\">
                    <p style=\"font-size: 22px; font-weight: bold\"> Novedades y Eventos</p>
                    <p style=\"font-size: 17px;\">
                        Aqui podŕas ver las ultimas novedaes en NutriK. Navega por el carousel para ver las ultimas entradas en el contenido didactico para aprender todo sobre como llevar un estilo de vida saludable, la alimentación, el ejercicio y mucho más.
                    </p>
                    <p style=\"font-size: 17px\">
                        No te pierdas los eventos ofrecidos por nuestros profesionales. Participa en nuestras salas de debates y conferencias donde ofrecemos formaciones sobre cualquier tema.
                    </p>
                </div>
            </div>
        </section>
    </html>
{% endblock %}
", "@Customer/news.html.twig", "/shared/httpd/nutrik/src/CustomerBundle/Resources/views/news.html.twig");
    }
}
