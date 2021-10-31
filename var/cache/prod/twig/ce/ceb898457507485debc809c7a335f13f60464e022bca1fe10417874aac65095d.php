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

/* @Customer/didactic-content.html.twig */
class __TwigTemplate_cb3a2e659eda18681a327bc073bbe6347d9413ffefbedd844a52e4bc74260fb5 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Customer/didactic-content.html.twig"));

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
            <!-- Customs JS -->
            <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework//js/customs.js"), "html", null, true);
        echo "\"></script>
        </header>
        <section id=\"default-header\">
            ";
        // line 11
        $this->loadTemplate("header.html.twig", "@Customer/didactic-content.html.twig", 11)->display($context);
        // line 12
        echo "        </section>
        <section id=\"customer-header\">
            ";
        // line 14
        $this->loadTemplate("customerheader.html.twig", "@Customer/didactic-content.html.twig", 14)->display($context);
        // line 15
        echo "        </section>
        <section id=\"didactic-content\">
            <div class=\"container\">
                <form class=\"form\" action=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("customer_didactic_content");
        echo "\" method=\"post\">
                    <div class=\"col-sm-3 didactic-content-filters\">
                        <h2>Categorias</h2>
                        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 22
            echo "                            <p style=\"margin:0\">
                                <input style=\"display: none\" type=\"submit\" name=\"submit\" id=\"categorySearch\" value=\"categorySearch\">
                                <a style=\"font-size: 16px; color: black\" href=\"#\" id=\"category\" onclick=\"categoryFilter(";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "idCategory", []), "html", null, true);
            echo ");\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", []), "html", null, true);
            echo "</a>
                            </p>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "                        <input type=\"hidden\" name=\"category_search\" id=\"category\"/>
                    </div>
                    <div class=\"col-sm-8 didactic-content-content\">
                        <nav class=\"navbar navbar-light bg-light\">
                            <div class=\"container-fluid\">
                                <input class=\"form-control me-2\" type=\"search\" placeholder=\"Buscar\" aria-label=\"Search\" name=\"entry_search\">
                                <button class=\"btn btn-outline-success\" type=\"submit\" name=\"submit\" value=\"entrySearch\">Buscar</button>
                            </div>
                        </nav>
                        <div id=\"entries-content\">
                            ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["entries"] ?? $this->getContext($context, "entries")));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 38
            echo "                                <div class=\"didactic-entry\">
                                    <div class=\"col-sm-11 didactic-entry-resume\">
                                        <a style=\"font-size: 17px;color: black; font-weight: bold;\" href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("customer_didactic_content_view", ["id_entry" => $this->getAttribute($context["entry"], "idEntry", [])]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "title", []), "html", null, true);
            echo "</a>
                                        <p>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "description", []), "html", null, true);
            echo "</p>
                                    </div>
                                    <div class=\"col-sm-1 didactic-entry-actions\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-search\" viewBox=\"0 0 16 16\"
                                             onclick=\"redirectTo('didactic_content','/'+";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "idEntry", []), "html", null, true);
            echo ")\">
                                            <path d=\"M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z\"/>
                                        </svg>
                                    </div>
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "                        </div>
                    </div>
                </form>
            </div>
        </section>
    </html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Customer/didactic-content.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  146 => 51,  134 => 45,  127 => 41,  121 => 40,  117 => 38,  113 => 37,  101 => 27,  90 => 24,  86 => 22,  82 => 21,  76 => 18,  71 => 15,  69 => 14,  65 => 12,  63 => 11,  57 => 8,  52 => 6,  46 => 2,  34 => 1,);
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
            <!-- Customs JS -->
            <script src=\"{{ asset('bundles/framework//js/customs.js') }}\"></script>
        </header>
        <section id=\"default-header\">
            {% include 'header.html.twig' %}
        </section>
        <section id=\"customer-header\">
            {% include 'customerheader.html.twig' %}
        </section>
        <section id=\"didactic-content\">
            <div class=\"container\">
                <form class=\"form\" action=\"{{ path(\"customer_didactic_content\") }}\" method=\"post\">
                    <div class=\"col-sm-3 didactic-content-filters\">
                        <h2>Categorias</h2>
                        {% for category in categories %}
                            <p style=\"margin:0\">
                                <input style=\"display: none\" type=\"submit\" name=\"submit\" id=\"categorySearch\" value=\"categorySearch\">
                                <a style=\"font-size: 16px; color: black\" href=\"#\" id=\"category\" onclick=\"categoryFilter({{ category.idCategory }});\">{{ category.name }}</a>
                            </p>
                        {% endfor %}
                        <input type=\"hidden\" name=\"category_search\" id=\"category\"/>
                    </div>
                    <div class=\"col-sm-8 didactic-content-content\">
                        <nav class=\"navbar navbar-light bg-light\">
                            <div class=\"container-fluid\">
                                <input class=\"form-control me-2\" type=\"search\" placeholder=\"Buscar\" aria-label=\"Search\" name=\"entry_search\">
                                <button class=\"btn btn-outline-success\" type=\"submit\" name=\"submit\" value=\"entrySearch\">Buscar</button>
                            </div>
                        </nav>
                        <div id=\"entries-content\">
                            {% for entry in entries %}
                                <div class=\"didactic-entry\">
                                    <div class=\"col-sm-11 didactic-entry-resume\">
                                        <a style=\"font-size: 17px;color: black; font-weight: bold;\" href=\"{{ path(\"customer_didactic_content_view\",{\"id_entry\":entry.idEntry}) }}\">{{ entry.title }}</a>
                                        <p>{{ entry.description }}</p>
                                    </div>
                                    <div class=\"col-sm-1 didactic-entry-actions\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-search\" viewBox=\"0 0 16 16\"
                                             onclick=\"redirectTo('didactic_content','/'+{{ entry.idEntry }})\">
                                            <path d=\"M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z\"/>
                                        </svg>
                                    </div>
                                </div>
                            {% endfor %}
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </html>
{% endblock %}
", "@Customer/didactic-content.html.twig", "/shared/httpd/nutrik/src/CustomerBundle/Resources/views/didactic-content.html.twig");
    }
}
