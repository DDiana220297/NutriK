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

/* @Customer/didactic-content-view.html.twig */
class __TwigTemplate_a325323e3a178489617b05e5a21ecb06a7809fbdffabf9847a9134e820451441 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Customer/didactic-content-view.html.twig"));

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
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/footer.css"), "html", null, true);
        echo "\" />
    </header>
    <section id=\"default-header\">
        ";
        // line 12
        $this->loadTemplate("header.html.twig", "@Customer/didactic-content-view.html.twig", 12)->display($context);
        // line 13
        echo "    </section>
    <section id=\"customer-header\">
        ";
        // line 15
        $this->loadTemplate("customerheader.html.twig", "@Customer/didactic-content-view.html.twig", 15)->display($context);
        // line 16
        echo "    </section>
    <section id=\"didactic-content-view\">
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "flashbag", [], "method"), "get", [0 => "entryKOStatus"], "method"));
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
            <div class=\"didactic-content-view-block\">
                <div class=\"col-sm-12 didactic-content-title\">
                    <strong>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entry"] ?? $this->getContext($context, "entry")), "title", []), "html", null, true);
        echo "</strong>
                </div>
                <div class=\"col-sm-12 didactic-content-description\">
                    <p>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entry"] ?? $this->getContext($context, "entry")), "description", []), "html", null, true);
        echo "</p>
                </div>
                <div class=\"col-sm-12 didactic-content-image\">
                    <img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute(($context["entry"] ?? $this->getContext($context, "entry")), "image", [])), "html", null, true);
        echo "\">
                </div>
                <div class=\"col-sm-12 didactic-content-content\">
                    <p>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entry"] ?? $this->getContext($context, "entry")), "content", []), "html", null, true);
        echo "</p>
                </div>
            </div>
        </div>
    </section>
    ";
        // line 42
        $this->loadTemplate("footer.html.twig", "@Customer/didactic-content-view.html.twig", 42)->display($context);
        // line 43
        echo "    </html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Customer/didactic-content-view.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  127 => 43,  125 => 42,  117 => 37,  111 => 34,  105 => 31,  99 => 28,  94 => 25,  84 => 21,  80 => 19,  76 => 18,  72 => 16,  70 => 15,  66 => 13,  64 => 12,  58 => 9,  52 => 6,  46 => 2,  34 => 1,);
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
    <section id=\"didactic-content-view\">
        {% for message in  app.session.flashbag().get('entryKOStatus') %}
            <div class=\"row\" style=\"width: 93.5%; margin-left: 3.3%; margin-top: 10px; margin-bottom: -10px;\">
                <div class=\"alert alert-danger\" role=\"alert\" style=\"margin-bottom: 0\">
                    {{ message }}
                </div>
            </div>
        {% endfor %}
        <div class=\"container\">
            <div class=\"didactic-content-view-block\">
                <div class=\"col-sm-12 didactic-content-title\">
                    <strong>{{ entry.title }}</strong>
                </div>
                <div class=\"col-sm-12 didactic-content-description\">
                    <p>{{ entry.description }}</p>
                </div>
                <div class=\"col-sm-12 didactic-content-image\">
                    <img src=\"{{ asset(entry.image) }}\">
                </div>
                <div class=\"col-sm-12 didactic-content-content\">
                    <p>{{ entry.content }}</p>
                </div>
            </div>
        </div>
    </section>
    {% include 'footer.html.twig' %}
    </html>
{% endblock %}
", "@Customer/didactic-content-view.html.twig", "/shared/httpd/nutrik/src/CustomerBundle/Resources/views/didactic-content-view.html.twig");
    }
}
