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
        <!-- Footer stylesheet-->
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/footer.css"), "html", null, true);
        echo "\" />
    </header>
    <section id=\"default-header\">
        ";
        // line 11
        $this->loadTemplate("header.html.twig", "@Customer/about.html.twig", 11)->display($context);
        // line 12
        echo "    </section>
    <section id=\"customer-header\">
        ";
        // line 14
        $this->loadTemplate("customerheader.html.twig", "@Customer/about.html.twig", 14)->display($context);
        // line 15
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
                        <img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("carousel1.jpg"), "html", null, true);
        echo "\" style=\"border-radius: 10%;\">
                        <div class=\"carousel-caption\">
                            <strong style=\"font-size: 22px\">Comer es una necesidad, pero comer de forma inteligente es un arte</strong>
                            <p style=\"font-size: 18px\"> No solo hay que comer para alimentarnos, como necesidad. Hay que comer de forma inteligente. Esto lo lleva a la categoría de arte y razón no le falta. </p>
                        </div>
                    </div>

                    <div class=\"item\">
                        <img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("carousel2.jpg"), "html", null, true);
        echo "\" style=\"border-radius: 10%;\">
                        <div class=\"carousel-caption\">
                            <strong style=\"font-size: 22px\">Aquellos que piensan que no tienen tiempo para una alimentación saludable tarde o temprano encontrarán tiempo para la enfermedad</strong>
                            <p style=\"font-size: 18px\">Es recurrente pensar que para tener una alimentación saludable necesitamos que el día tenga más horas. Pero Stanley da con la clave: sacar tiempo para comer mejor es ganarle la partida a la enfermedad.</p>
                        </div>
                    </div>

                    <div class=\"item\">
                        <img src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("carousel3.jpg"), "html", null, true);
        echo "\" style=\"border-radius: 10%;\">
                        <div class=\"carousel-caption\">
                            <strong style=\"font-size: 22px\">Nuestra comida debería ser nuestra medicina y nuestra medicina debería ser nuestra comida.</strong>
                            <p style=\"font-size: 18px\"> Desde tiempos antiguos la comida no solo ha servido para alimentarse. También ha servido para curar enfermedades. Todo consiste en aprovechar bien los nutrientes que tengan los productos que consumimos en nuestra dieta.</p>
                        </div>
                    </div>

                    <div class=\"item\">
                        <img src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("carousel4.jpeg"), "html", null, true);
        echo "\" style=\"border-radius: 10%;\">
                        <div class=\"carousel-caption\">
                            <strong style=\"font-size: 22px\">Nos preocupamos por tu salud.</strong>
                            <p style=\"font-size: 18px\">Cuando la dieta es incorrecta, la medicina no sirve para nada. Cuando la dieta es correcta, la medicina no es necesaria.</p>
                        </div>
                    </div>

                    <div class=\"item\">
                        <img src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("carousel5.jpg"), "html", null, true);
        echo "\" style=\"border-radius: 10%;\">
                        <div class=\"carousel-caption\">
                            <strong style=\"font-size: 22px\">Dime lo que comes y te diré quién eres.</strong>
                            <p style=\"font-size: 18px\"> Igual que nuestros actos vienen definidos por nuestra personalidad, la dieta que sigamos es importante para convertirnos en lo que somos. Mente sana en cuerpo sano y la alimentación es vital para eso.</p>
                        </div>
                    </div>
                </div>

                <!-- Controls -->
                <a class=\"left carousel-control\" href=\"#about-carousel-section\" role=\"button\" data-slide=\"prev\" style=\"border-radius: 10%;\">
                    <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Previous</span>
                </a>

                <a class=\"right carousel-control\" href=\"#about-carousel-section\" role=\"button\" data-slide=\"next\" style=\"border-radius: 10%;\">
                    <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Next</span>
                </a>
            </div>
        </div>
        <div class=\"container\">
            <div class=\"row\" style=\"justify-content: center; color: black; text-align: center; padding: 100px\">
                <p style=\"font-size: 17px;\">
                    En NutriK vas a encontrar profesionales sanitarios expertos en alimentación, nutrición y dietética.
                    Nos encargamos principalmente del diagnóstico nutricional-dietético general y específico, así como del tratamiento nutricional-dietético de enfermedades, como por ejemplo diabetes, malnutrición, insuficiencia renal, obesidad, enfermedad de Crohn, del tratamiento con nutrición artificial enteral y parenteral en hospitales, o a domicilio, de la prevención de patologías mediante la alimentación, nutrición y dietética, decidir colaborativamente en el tratamiento del paciente oncológico etc., además de adecuar la alimentación, nutrición y dietética de cada persona a cualquier situación fisiológica, como embarazo, lactancia, deporte, etc, y patológica con carácter de primera intención, como facultativo en su área propia de conocimiento, cual es la Nutrición y la Dietética.
                </p>
            </div>
        </div>
    </section>
    ";
        // line 90
        $this->loadTemplate("footer.html.twig", "@Customer/about.html.twig", 90)->display($context);
        // line 91
        echo "    </html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Customer/about.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  165 => 91,  163 => 90,  131 => 61,  120 => 53,  109 => 45,  98 => 37,  87 => 29,  71 => 15,  69 => 14,  65 => 12,  63 => 11,  57 => 8,  52 => 6,  46 => 2,  34 => 1,);
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
        <!-- Footer stylesheet-->
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/framework/css/footer.css') }}\" />
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
                        <img src=\"{{ asset('carousel1.jpg') }}\" style=\"border-radius: 10%;\">
                        <div class=\"carousel-caption\">
                            <strong style=\"font-size: 22px\">Comer es una necesidad, pero comer de forma inteligente es un arte</strong>
                            <p style=\"font-size: 18px\"> No solo hay que comer para alimentarnos, como necesidad. Hay que comer de forma inteligente. Esto lo lleva a la categoría de arte y razón no le falta. </p>
                        </div>
                    </div>

                    <div class=\"item\">
                        <img src=\"{{ asset('carousel2.jpg') }}\" style=\"border-radius: 10%;\">
                        <div class=\"carousel-caption\">
                            <strong style=\"font-size: 22px\">Aquellos que piensan que no tienen tiempo para una alimentación saludable tarde o temprano encontrarán tiempo para la enfermedad</strong>
                            <p style=\"font-size: 18px\">Es recurrente pensar que para tener una alimentación saludable necesitamos que el día tenga más horas. Pero Stanley da con la clave: sacar tiempo para comer mejor es ganarle la partida a la enfermedad.</p>
                        </div>
                    </div>

                    <div class=\"item\">
                        <img src=\"{{ asset('carousel3.jpg') }}\" style=\"border-radius: 10%;\">
                        <div class=\"carousel-caption\">
                            <strong style=\"font-size: 22px\">Nuestra comida debería ser nuestra medicina y nuestra medicina debería ser nuestra comida.</strong>
                            <p style=\"font-size: 18px\"> Desde tiempos antiguos la comida no solo ha servido para alimentarse. También ha servido para curar enfermedades. Todo consiste en aprovechar bien los nutrientes que tengan los productos que consumimos en nuestra dieta.</p>
                        </div>
                    </div>

                    <div class=\"item\">
                        <img src=\"{{ asset('carousel4.jpeg') }}\" style=\"border-radius: 10%;\">
                        <div class=\"carousel-caption\">
                            <strong style=\"font-size: 22px\">Nos preocupamos por tu salud.</strong>
                            <p style=\"font-size: 18px\">Cuando la dieta es incorrecta, la medicina no sirve para nada. Cuando la dieta es correcta, la medicina no es necesaria.</p>
                        </div>
                    </div>

                    <div class=\"item\">
                        <img src=\"{{ asset('carousel5.jpg') }}\" style=\"border-radius: 10%;\">
                        <div class=\"carousel-caption\">
                            <strong style=\"font-size: 22px\">Dime lo que comes y te diré quién eres.</strong>
                            <p style=\"font-size: 18px\"> Igual que nuestros actos vienen definidos por nuestra personalidad, la dieta que sigamos es importante para convertirnos en lo que somos. Mente sana en cuerpo sano y la alimentación es vital para eso.</p>
                        </div>
                    </div>
                </div>

                <!-- Controls -->
                <a class=\"left carousel-control\" href=\"#about-carousel-section\" role=\"button\" data-slide=\"prev\" style=\"border-radius: 10%;\">
                    <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Previous</span>
                </a>

                <a class=\"right carousel-control\" href=\"#about-carousel-section\" role=\"button\" data-slide=\"next\" style=\"border-radius: 10%;\">
                    <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Next</span>
                </a>
            </div>
        </div>
        <div class=\"container\">
            <div class=\"row\" style=\"justify-content: center; color: black; text-align: center; padding: 100px\">
                <p style=\"font-size: 17px;\">
                    En NutriK vas a encontrar profesionales sanitarios expertos en alimentación, nutrición y dietética.
                    Nos encargamos principalmente del diagnóstico nutricional-dietético general y específico, así como del tratamiento nutricional-dietético de enfermedades, como por ejemplo diabetes, malnutrición, insuficiencia renal, obesidad, enfermedad de Crohn, del tratamiento con nutrición artificial enteral y parenteral en hospitales, o a domicilio, de la prevención de patologías mediante la alimentación, nutrición y dietética, decidir colaborativamente en el tratamiento del paciente oncológico etc., además de adecuar la alimentación, nutrición y dietética de cada persona a cualquier situación fisiológica, como embarazo, lactancia, deporte, etc, y patológica con carácter de primera intención, como facultativo en su área propia de conocimiento, cual es la Nutrición y la Dietética.
                </p>
            </div>
        </div>
    </section>
    {% include 'footer.html.twig' %}
    </html>
{% endblock %}
", "@Customer/about.html.twig", "/shared/httpd/nutrik/src/CustomerBundle/Resources/views/about.html.twig");
    }
}
