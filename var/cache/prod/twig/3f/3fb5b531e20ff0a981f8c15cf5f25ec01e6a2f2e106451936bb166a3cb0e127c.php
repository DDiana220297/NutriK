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

/* @Customer/packages.html.twig */
class __TwigTemplate_af0767bfc826d0ac27613255aab11a01dbd95057fb67c3728386e269451ab50c extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Customer/packages.html.twig"));

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
        $this->loadTemplate("header.html.twig", "@Customer/packages.html.twig", 11)->display($context);
        // line 12
        echo "    </section>
    <section id=\"customer-header\">
        ";
        // line 14
        $this->loadTemplate("customerheader.html.twig", "@Customer/packages.html.twig", 14)->display($context);
        // line 15
        echo "    </section>
    <section id=\"customer-services\">
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "flashbag", [], "method"), "get", [0 => "servicesOKStatus"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 18
            echo "            <div class=\"row\" style=\"width: 88.5%; margin-left: 5.7%; margin-top: 10px; margin-bottom: -10px;\">
                <div class=\"alert alert-success\" role=\"alert\" style=\"margin-bottom: 0\">
                    ";
            // line 20
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "        <div class=\"container\">
            <div class=\"container-services-block\">
                <div class=\"col-sm-4\">
                    <p style=\"height: 8rem; font-size: 22px; font-weight: bold\">Paquete planes de alimentación</p>
                    <p>
                        Con este paquete podrás elegir aquellos planes de alimentación que mejor se adapten a ti. NutriK te ofrece una primera consulta con el profesional que elijas para asesorarte y explicarte los distintos planes de alimentacion.
                    </p>
                    <input type=\"submit\" name=\"submit\" class=\"btn btn-primary\" value=\"Contratar\" onclick=\"redirectTo('professionals')\"/>
                </div>
                <div class=\"col-sm-4\">
                    <p style=\"height: 8rem; font-size: 22px; font-weight: bold\">Paquete planes de acompañamiento</p>
                    <p>
                        Con este paquete disfrutas de un acompañamiento por parte del profesional de NutriK que elijas. NutriK te ofrece una primera consulta con el profesional que elijas para asesorarte y explicarte los distintos planes de alimentacion, y a partir de esta se elije la frecuencia de las consultas y el plan mensual.
                    </p>
                    <input type=\"submit\" name=\"submit\" class=\"btn btn-primary\" value=\"Contratar\" onclick=\"redirectTo('professionals')\"/>
                </div>
                <div class=\"col-sm-4\">
                    <p style=\"height: 8rem; font-size: 22px; font-weight: bold\">Paquete Premium</p>
                    <p>
                        Con este paquete disfurtas de todas las ventajas de NutriK, desde consultas nutricionales libres con los profesionales que elijas, con diferentes especialidades que se adaptan a tus necesidades, hasta consultas con entrenadores colaboradores con NutriK, piscologos, etc. No te lo pienses!
                    </p>
                    <input type=\"submit\" name=\"submit\" class=\"btn btn-primary\" value=\"Contratar\" onclick=\"redirectTo('professionals')\"/>
                </div>
            </div>
        </div>
    </section>
    ";
        // line 50
        $this->loadTemplate("footer.html.twig", "@Customer/packages.html.twig", 50)->display($context);
        // line 51
        echo "    </html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Customer/packages.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  123 => 51,  121 => 50,  93 => 24,  83 => 20,  79 => 18,  75 => 17,  71 => 15,  69 => 14,  65 => 12,  63 => 11,  57 => 8,  52 => 6,  46 => 2,  34 => 1,);
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
    <section id=\"customer-services\">
        {% for message in  app.session.flashbag().get('servicesOKStatus') %}
            <div class=\"row\" style=\"width: 88.5%; margin-left: 5.7%; margin-top: 10px; margin-bottom: -10px;\">
                <div class=\"alert alert-success\" role=\"alert\" style=\"margin-bottom: 0\">
                    {{ message }}
                </div>
            </div>
        {% endfor %}
        <div class=\"container\">
            <div class=\"container-services-block\">
                <div class=\"col-sm-4\">
                    <p style=\"height: 8rem; font-size: 22px; font-weight: bold\">Paquete planes de alimentación</p>
                    <p>
                        Con este paquete podrás elegir aquellos planes de alimentación que mejor se adapten a ti. NutriK te ofrece una primera consulta con el profesional que elijas para asesorarte y explicarte los distintos planes de alimentacion.
                    </p>
                    <input type=\"submit\" name=\"submit\" class=\"btn btn-primary\" value=\"Contratar\" onclick=\"redirectTo('professionals')\"/>
                </div>
                <div class=\"col-sm-4\">
                    <p style=\"height: 8rem; font-size: 22px; font-weight: bold\">Paquete planes de acompañamiento</p>
                    <p>
                        Con este paquete disfrutas de un acompañamiento por parte del profesional de NutriK que elijas. NutriK te ofrece una primera consulta con el profesional que elijas para asesorarte y explicarte los distintos planes de alimentacion, y a partir de esta se elije la frecuencia de las consultas y el plan mensual.
                    </p>
                    <input type=\"submit\" name=\"submit\" class=\"btn btn-primary\" value=\"Contratar\" onclick=\"redirectTo('professionals')\"/>
                </div>
                <div class=\"col-sm-4\">
                    <p style=\"height: 8rem; font-size: 22px; font-weight: bold\">Paquete Premium</p>
                    <p>
                        Con este paquete disfurtas de todas las ventajas de NutriK, desde consultas nutricionales libres con los profesionales que elijas, con diferentes especialidades que se adaptan a tus necesidades, hasta consultas con entrenadores colaboradores con NutriK, piscologos, etc. No te lo pienses!
                    </p>
                    <input type=\"submit\" name=\"submit\" class=\"btn btn-primary\" value=\"Contratar\" onclick=\"redirectTo('professionals')\"/>
                </div>
            </div>
        </div>
    </section>
    {% include 'footer.html.twig' %}
    </html>
{% endblock %}
", "@Customer/packages.html.twig", "/shared/httpd/nutrik/src/CustomerBundle/Resources/views/packages.html.twig");
    }
}
