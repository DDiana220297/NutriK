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

/* @Customer/event-view.html.twig */
class __TwigTemplate_1008a4c8cae5de8f2bf90753ad1241bfcb8e6b05b8d7ce8d2a857a4ee31b3e02 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Customer/event-view.html.twig"));

        // line 1
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_content($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 2
        echo "<!DOCTYPE HTML>
<html lang=\"es\">
    <header>
        <!-- Login Page stylesheet-->
        <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/customerpages.css"), "html", null, true);
        echo "\" />

        <!-- Footer stylesheet-->
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/footer.css"), "html", null, true);
        echo "\" />
    </header>
    <section id=\"default-header\">
        ";
        // line 12
        $this->loadTemplate("header.html.twig", "@Customer/event-view.html.twig", 12)->display($context);
        // line 13
        echo "    </section>
    <section id=\"customer-header\">
        ";
        // line 15
        $this->loadTemplate("customerheader.html.twig", "@Customer/event-view.html.twig", 15)->display($context);
        // line 16
        echo "    </section>
    <section id=\"event-view\">
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "flashbag", [], "method"), "get", [0 => "eventKOStatus"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 19
            echo "            <div class=\"row\" style=\"width: 93.5%; margin-left: 3.3%; margin-top: 10px; margin-bottom: -10px;\">
                <div class=\"alert alert-danger\" role=\"alert\" style=\"margin-bottom: 0\">
                    ";
            // line 21
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "        <div class=\"container\">
            <div class=\"event-view-block\">
                <div class=\"col-sm-12 event-title\">
                    <strong>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute(($context["event"] ?? $this->getContext($context, "event")), "title", []), "html", null, true);
        echo "</strong>
                </div>
                <div class=\"col-sm-12\" style=\"height: 35rem\">
                    <img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(twig_random($this->env, [0 => "carousel1.jpg", 1 => "carousel2.jpg", 2 => "carousel3.jpg", 3 => "carousel4.jpeg", 4 => "carousel5.jpg", 5 => "img3.jpg", 6 => "img4.jpg"])), "html", null, true);
        echo "\" style=\"width: 100%;margin: 50px 0px;\">
                </div>
                <div class=\"col-sm-12 event-date\">
                    <p>";
        // line 34
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["event"] ?? $this->getContext($context, "event")), "date", []), "Y-m-d H:i:s"), "html", null, true);
        echo "</p>
                </div>
                <div class=\"col-sm-12 event-duration\">
                    <p>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute(($context["event"] ?? $this->getContext($context, "event")), "duration", []), "html", null, true);
        echo " minutos</p>
                </div>
                <div class=\"col-sm-12 event-description\">
                    <p>";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute(($context["event"] ?? $this->getContext($context, "event")), "description", []), "html", null, true);
        echo "</p>
                </div>
            </div>
        </div>
    </section>
    ";
        // line 45
        $this->loadTemplate("footer.html.twig", "@Customer/event-view.html.twig", 45)->display($context);
        // line 46
        echo "</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Customer/event-view.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  133 => 46,  131 => 45,  123 => 40,  117 => 37,  111 => 34,  105 => 31,  99 => 28,  94 => 25,  84 => 21,  80 => 19,  76 => 18,  72 => 16,  70 => 15,  66 => 13,  64 => 12,  58 => 9,  52 => 6,  46 => 2,  34 => 1,);
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
    <section id=\"event-view\">
        {% for message in  app.session.flashbag().get('eventKOStatus') %}
            <div class=\"row\" style=\"width: 93.5%; margin-left: 3.3%; margin-top: 10px; margin-bottom: -10px;\">
                <div class=\"alert alert-danger\" role=\"alert\" style=\"margin-bottom: 0\">
                    {{ message }}
                </div>
            </div>
        {% endfor %}
        <div class=\"container\">
            <div class=\"event-view-block\">
                <div class=\"col-sm-12 event-title\">
                    <strong>{{ event.title }}</strong>
                </div>
                <div class=\"col-sm-12\" style=\"height: 35rem\">
                    <img src=\"{{ asset(random(['carousel1.jpg','carousel2.jpg', 'carousel3.jpg', 'carousel4.jpeg','carousel5.jpg', 'img3.jpg','img4.jpg' ])) }}\" style=\"width: 100%;margin: 50px 0px;\">
                </div>
                <div class=\"col-sm-12 event-date\">
                    <p>{{ event.date|date('Y-m-d H:i:s') }}</p>
                </div>
                <div class=\"col-sm-12 event-duration\">
                    <p>{{ event.duration }} minutos</p>
                </div>
                <div class=\"col-sm-12 event-description\">
                    <p>{{ event.description }}</p>
                </div>
            </div>
        </div>
    </section>
    {% include 'footer.html.twig' %}
</html>
{% endblock %}
", "@Customer/event-view.html.twig", "/shared/httpd/nutrik/src/CustomerBundle/Resources/views/event-view.html.twig");
    }
}
