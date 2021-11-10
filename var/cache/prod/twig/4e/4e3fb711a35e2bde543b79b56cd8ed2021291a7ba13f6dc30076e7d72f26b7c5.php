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

/* @Nutritionist/nutritionist-config.html.twig */
class __TwigTemplate_c0946575b213ed7c4e108932b588f17b326291e9538c6f9f6569eb9948cf71fb extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Nutritionist/nutritionist-config.html.twig"));

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
        <!-- Login Page stylesheet -->
        <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/nutritionistpages.css"), "html", null, true);
        echo "\" />
    </header>
    <section id=\"default-header\">
        ";
        // line 9
        $this->loadTemplate("header.html.twig", "@Nutritionist/nutritionist-config.html.twig", 9)->display($context);
        // line 10
        echo "    </section>
    <section id=\"nutritionist-configuration-section\">
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "flashbag", [], "method"), "get", [0 => "configKOStatus"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 13
            echo "            <div class=\"row\" style=\"width: 93.5%; margin-left: 3.3%; margin-top: 10px; margin-bottom: -10px;\">
                <div class=\"alert alert-danger\" role=\"alert\" style=\"margin-bottom: 0\">
                    ";
            // line 15
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "        <div class=\"container\">
            <div class=\"col-sm-12 configuration-block\">
                <form class=\"form\" action=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nutritionist_configuration");
        echo "\" method=\"post\">
                    <div class=\"col-sm-5 nutritionist-presentation-page\">
                        <div class=\"col-sm-12\"><h3 style=\"text-align: center\"><strong style=\"color: #00766c\">Configura tu página de presentación</strong></h3></div>
                        <div class=\"col-sm-12 nutritionist-presentation\" style=\"margin-top: 15px\">
                            <label for=\"presentacion\">Presentación:</label>
                            <textarea type=\"text\" id=\"presentacion\" name=\"presentacion\" class=\"form-control\" >";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "presentation", []), "html", null, true);
        echo "</textarea>
                        </div>
                        <div class=\"col-sm-12 nutritionist-bibliography\" style=\"margin-top: 15px\">
                            <label for=\"bibliografia\">Descripción / Bibliografía:</label>
                            <textarea type=\"text\" id=\"bibliografia\" name=\"bibliografia\" class=\"form-control\" >";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "description", []), "html", null, true);
        echo "</textarea>
                        </div>
                        <div class=\"col-sm-12 nutritionist-social-media\" style=\"margin-top: 15px\">
                            <label>Redes sociales:</label>
                            <div class=\"input-group\">
                                <div class=\"input-group-addon input-label\">NutriK</div>
                                <div class=\"input-group-addon input-prefix\">https://nutrik.test/web/presentation/</div>
                                <input type=\"text\" class=\"form-control input-social-media\" id=\"nutrik_media\" placeholder=\"\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "idUser", []), "html", null, true);
        echo "\" disabled>
                            </div>
                            <div class=\"input-group\">
                                <div class=\"input-group-addon input-label\">Facebook</div>
                                <div class=\"input-group-addon input-prefix\">https://facebook.com/</div>
                                <input type=\"text\" class=\"form-control input-social-media\" id=\"facebook_media\" placeholder=\"\">
                            </div>
                            <div class=\"input-group\">
                                <div class=\"input-group-addon input-label\">Instagram</div>
                                <div class=\"input-group-addon input-prefix\">https://instagram.com/</div>
                                <input type=\"text\" class=\"form-control input-social-media\" id=\"instagram_media\" placeholder=\"\">
                            </div>
                            <div class=\"input-group\">
                                <div class=\"input-group-addon input-label\">Linkedin</div>
                                <div class=\"input-group-addon input-prefix\">https://www.linkedin.com/</div>
                                <input type=\"text\" class=\"form-control input-social-media\" id=\"linkedin_media\" placeholder=\"\">
                            </div>
                        </div>
                        <div class=\"col-sm-12 save-button-item\" style=\"width: 100%;\">
                            <input class=\"btn save-button\" type=\"submit\" name=\"submit\" value=\"Guardar Presentacion\"/>
                        </div>
                    </div>
                    <div class=\"col-sm-5 nutritionist-tools\">
                        <div class=\"col-sm-12\"><h3 style=\"text-align: center\"><strong style=\"color: #00766c\">Configura tu área de trabajo</strong></h3></div>
                        <label style=\"float: left; padding-left: 15px\">Categorias:</label>
                        <label class=\"add-category\" style=\"float: right; padding-right: 15px\" onclick=\"openModal('openCreateCategoryModal')\">Añadir nueva categoria</label>
                        <button style=\"display: none\" type=\"button\" class=\"btn btn-primary\" id=\"openCreateCategoryModal\" data-toggle=\"modal\" data-target=\"#createCategoryModal\"></button>
                        <div class=\"modal fade\" id=\"createCategoryModal\">
                            <div class=\"modal-dialog\">
                                <div class=\"modal-content\" style=\"height: 15rem;width: 50rem;padding: 40px 30px;\">
                                    <!-- Modal body -->
                                    <form class=\"form\" action=\"";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nutritionist_configuration");
        echo "\" method=\"post\">
                                        <h4 style=\"text-align: center; color: #00766c\">Añadir nueva etiqueta</h4>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-12 nutritionist-categories\">
                            ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 76
            echo "                                <div class=\"category-entry\">
                                    <div class=\"col-sm-11\">
                                        <h4 style=\"color: #00766c\">";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", []), "html", null, true);
            echo "</h4>
                                        <p>";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "descriptionShort", []), "html", null, true);
            echo "</p>
                                    </div>
                                    <div class=\"col-sm-1\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-pencil-fill\" viewBox=\"0 0 16 16\" style=\"margin-bottom:-15px;width: 2rem;height: 2rem;\"
                                            onclick=\"openModal('openEditCategoryModal')\">
                                            <path d=\"M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z\"/>
                                        </svg>
                                        <button style=\"display: none\" type=\"button\" class=\"btn btn-primary\" id=\"openEditCategoryModal\" data-toggle=\"modal\" data-target=\"#editCategoryModal\"></button>
                                        <div class=\"modal fade\" id=\"editCategoryModal\">
                                            <div class=\"modal-dialog\">
                                                <div class=\"modal-content\" style=\"height: 15rem;width: 50rem;padding: 40px 30px;\">
                                                    <!-- Modal body -->
                                                    <form class=\"form\" action=\"";
            // line 91
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nutritionist_configuration");
            echo "\" method=\"post\">
                                                        <h4 style=\"text-align: center; color: #00766c\">Editar categoria</h4>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "                        </div>
                        <label style=\"float: left; padding-left: 15px\">Tags:
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-info-circle\" viewBox=\"0 0 16 16\" style=\"width: 17px; height: 17px; margin-bottom: -3px\"
                                 onclick=\"openModal('openMyInfoTagsModal')\">
                                <path d=\"M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z\"/>
                                <path d=\"m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z\"/>
                            </svg>
                            <button style=\"display: none\" type=\"button\" class=\"btn btn-primary\" id=\"openMyInfoTagsModal\" data-toggle=\"modal\" data-target=\"#infoTagsModal\"></button>
                            <div class=\"modal fade\" id=\"infoTagsModal\">
                                <div class=\"modal-dialog\">
                                    <div class=\"modal-content\" style=\"height: 15rem;width: 50rem;padding: 40px 30px;\">
                                        <!-- Modal body -->
                                        <span>El nivel de una etiqueta esta relacionado con la jerarquía, por ejemplo, el tag <strong>Celíaco</strong> con nivel 3. esta incluido dentro del tag <strong>Intolerancias</strong></span>
                                    </div>
                                </div>
                            </div>
                        </label>
                        <label class=\"add-tag\" style=\"float: right; padding-right: 15px\" onclick=\"openModal('openCreateTagModal')\">Añadir nuevo tag</label>
                        <button style=\"display: none\" type=\"button\" class=\"btn btn-primary\" id=\"openCreateTagModal\" data-toggle=\"modal\" data-target=\"#createTagModal\"></button>
                        <div class=\"modal fade\" id=\"createTagModal\">
                            <div class=\"modal-dialog\">
                                <div class=\"modal-content\" style=\"height: 15rem;width: 50rem;padding: 40px 30px;\">
                                    <!-- Modal body -->
                                    <form class=\"form\" action=\"";
        // line 123
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nutritionist_configuration");
        echo "\" method=\"post\">
                                        <h4 style=\"text-align: center; color: #00766c\">Añadir nueva etiqueta</h4>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-12 nutritionist-tags\">
                            ";
        // line 130
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tags"] ?? $this->getContext($context, "tags")));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 131
            echo "                                <div class=\"tag-entry\" style=\"height: 9rem\">
                                    <div class=\"col-sm-11 tag-resume\">
                                        <h4 style=\"color: #00766c\">";
            // line 133
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "name", []), "html", null, true);
            echo "</h4>
                                        <p>";
            // line 134
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "description", []), "html", null, true);
            echo "</p>
                                        <p><strong>Nivel:</strong>";
            // line 135
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "level", []), "html", null, true);
            echo "</p>
                                    </div>
                                    <div class=\"col-sm-1 tag-actions\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-pencil-fill\" viewBox=\"0 0 16 16\" style=\"margin-bottom:-25px;width: 2rem;height: 2rem;\"
                                            onclick=\"openModal('openEditTagModal')\">
                                            <path d=\"M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z\"/>
                                        </svg>
                                        <button style=\"display: none\" type=\"button\" class=\"btn btn-primary\" id=\"openEditTagModal\" data-toggle=\"modal\" data-target=\"#editTagModal\"></button>
                                        <div class=\"modal fade\" id=\"editTagModal\">
                                            <div class=\"modal-dialog\">
                                                <div class=\"modal-content\" style=\"height: 15rem;width: 50rem;padding: 40px 30px;\">
                                                    <!-- Modal body -->
                                                    <form class=\"form\" action=\"";
            // line 147
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nutritionist_configuration");
            echo "\" method=\"post\">
                                                        <h4 style=\"text-align: center; color: #00766c\">Modificar etiqueta</h4>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 156
        echo "                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    </html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Nutritionist/nutritionist-config.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  278 => 156,  263 => 147,  248 => 135,  244 => 134,  240 => 133,  236 => 131,  232 => 130,  222 => 123,  197 => 100,  182 => 91,  167 => 79,  163 => 78,  159 => 76,  155 => 75,  145 => 68,  111 => 37,  101 => 30,  94 => 26,  86 => 21,  82 => 19,  72 => 15,  68 => 13,  64 => 12,  60 => 10,  58 => 9,  52 => 6,  46 => 2,  34 => 1,);
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
        <!-- Login Page stylesheet -->
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/framework/css/nutritionistpages.css') }}\" />
    </header>
    <section id=\"default-header\">
        {% include 'header.html.twig' %}
    </section>
    <section id=\"nutritionist-configuration-section\">
        {% for message in  app.session.flashbag().get('configKOStatus') %}
            <div class=\"row\" style=\"width: 93.5%; margin-left: 3.3%; margin-top: 10px; margin-bottom: -10px;\">
                <div class=\"alert alert-danger\" role=\"alert\" style=\"margin-bottom: 0\">
                    {{ message }}
                </div>
            </div>
        {% endfor %}
        <div class=\"container\">
            <div class=\"col-sm-12 configuration-block\">
                <form class=\"form\" action=\"{{ path(\"nutritionist_configuration\") }}\" method=\"post\">
                    <div class=\"col-sm-5 nutritionist-presentation-page\">
                        <div class=\"col-sm-12\"><h3 style=\"text-align: center\"><strong style=\"color: #00766c\">Configura tu página de presentación</strong></h3></div>
                        <div class=\"col-sm-12 nutritionist-presentation\" style=\"margin-top: 15px\">
                            <label for=\"presentacion\">Presentación:</label>
                            <textarea type=\"text\" id=\"presentacion\" name=\"presentacion\" class=\"form-control\" >{{ app.user.presentation }}</textarea>
                        </div>
                        <div class=\"col-sm-12 nutritionist-bibliography\" style=\"margin-top: 15px\">
                            <label for=\"bibliografia\">Descripción / Bibliografía:</label>
                            <textarea type=\"text\" id=\"bibliografia\" name=\"bibliografia\" class=\"form-control\" >{{ app.user.description }}</textarea>
                        </div>
                        <div class=\"col-sm-12 nutritionist-social-media\" style=\"margin-top: 15px\">
                            <label>Redes sociales:</label>
                            <div class=\"input-group\">
                                <div class=\"input-group-addon input-label\">NutriK</div>
                                <div class=\"input-group-addon input-prefix\">https://nutrik.test/web/presentation/</div>
                                <input type=\"text\" class=\"form-control input-social-media\" id=\"nutrik_media\" placeholder=\"\" value=\"{{ app.user.idUser }}\" disabled>
                            </div>
                            <div class=\"input-group\">
                                <div class=\"input-group-addon input-label\">Facebook</div>
                                <div class=\"input-group-addon input-prefix\">https://facebook.com/</div>
                                <input type=\"text\" class=\"form-control input-social-media\" id=\"facebook_media\" placeholder=\"\">
                            </div>
                            <div class=\"input-group\">
                                <div class=\"input-group-addon input-label\">Instagram</div>
                                <div class=\"input-group-addon input-prefix\">https://instagram.com/</div>
                                <input type=\"text\" class=\"form-control input-social-media\" id=\"instagram_media\" placeholder=\"\">
                            </div>
                            <div class=\"input-group\">
                                <div class=\"input-group-addon input-label\">Linkedin</div>
                                <div class=\"input-group-addon input-prefix\">https://www.linkedin.com/</div>
                                <input type=\"text\" class=\"form-control input-social-media\" id=\"linkedin_media\" placeholder=\"\">
                            </div>
                        </div>
                        <div class=\"col-sm-12 save-button-item\" style=\"width: 100%;\">
                            <input class=\"btn save-button\" type=\"submit\" name=\"submit\" value=\"Guardar Presentacion\"/>
                        </div>
                    </div>
                    <div class=\"col-sm-5 nutritionist-tools\">
                        <div class=\"col-sm-12\"><h3 style=\"text-align: center\"><strong style=\"color: #00766c\">Configura tu área de trabajo</strong></h3></div>
                        <label style=\"float: left; padding-left: 15px\">Categorias:</label>
                        <label class=\"add-category\" style=\"float: right; padding-right: 15px\" onclick=\"openModal('openCreateCategoryModal')\">Añadir nueva categoria</label>
                        <button style=\"display: none\" type=\"button\" class=\"btn btn-primary\" id=\"openCreateCategoryModal\" data-toggle=\"modal\" data-target=\"#createCategoryModal\"></button>
                        <div class=\"modal fade\" id=\"createCategoryModal\">
                            <div class=\"modal-dialog\">
                                <div class=\"modal-content\" style=\"height: 15rem;width: 50rem;padding: 40px 30px;\">
                                    <!-- Modal body -->
                                    <form class=\"form\" action=\"{{ path(\"nutritionist_configuration\") }}\" method=\"post\">
                                        <h4 style=\"text-align: center; color: #00766c\">Añadir nueva etiqueta</h4>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-12 nutritionist-categories\">
                            {% for category in categories %}
                                <div class=\"category-entry\">
                                    <div class=\"col-sm-11\">
                                        <h4 style=\"color: #00766c\">{{ category.name }}</h4>
                                        <p>{{ category.descriptionShort }}</p>
                                    </div>
                                    <div class=\"col-sm-1\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-pencil-fill\" viewBox=\"0 0 16 16\" style=\"margin-bottom:-15px;width: 2rem;height: 2rem;\"
                                            onclick=\"openModal('openEditCategoryModal')\">
                                            <path d=\"M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z\"/>
                                        </svg>
                                        <button style=\"display: none\" type=\"button\" class=\"btn btn-primary\" id=\"openEditCategoryModal\" data-toggle=\"modal\" data-target=\"#editCategoryModal\"></button>
                                        <div class=\"modal fade\" id=\"editCategoryModal\">
                                            <div class=\"modal-dialog\">
                                                <div class=\"modal-content\" style=\"height: 15rem;width: 50rem;padding: 40px 30px;\">
                                                    <!-- Modal body -->
                                                    <form class=\"form\" action=\"{{ path(\"nutritionist_configuration\") }}\" method=\"post\">
                                                        <h4 style=\"text-align: center; color: #00766c\">Editar categoria</h4>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            {% endfor %}
                        </div>
                        <label style=\"float: left; padding-left: 15px\">Tags:
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-info-circle\" viewBox=\"0 0 16 16\" style=\"width: 17px; height: 17px; margin-bottom: -3px\"
                                 onclick=\"openModal('openMyInfoTagsModal')\">
                                <path d=\"M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z\"/>
                                <path d=\"m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z\"/>
                            </svg>
                            <button style=\"display: none\" type=\"button\" class=\"btn btn-primary\" id=\"openMyInfoTagsModal\" data-toggle=\"modal\" data-target=\"#infoTagsModal\"></button>
                            <div class=\"modal fade\" id=\"infoTagsModal\">
                                <div class=\"modal-dialog\">
                                    <div class=\"modal-content\" style=\"height: 15rem;width: 50rem;padding: 40px 30px;\">
                                        <!-- Modal body -->
                                        <span>El nivel de una etiqueta esta relacionado con la jerarquía, por ejemplo, el tag <strong>Celíaco</strong> con nivel 3. esta incluido dentro del tag <strong>Intolerancias</strong></span>
                                    </div>
                                </div>
                            </div>
                        </label>
                        <label class=\"add-tag\" style=\"float: right; padding-right: 15px\" onclick=\"openModal('openCreateTagModal')\">Añadir nuevo tag</label>
                        <button style=\"display: none\" type=\"button\" class=\"btn btn-primary\" id=\"openCreateTagModal\" data-toggle=\"modal\" data-target=\"#createTagModal\"></button>
                        <div class=\"modal fade\" id=\"createTagModal\">
                            <div class=\"modal-dialog\">
                                <div class=\"modal-content\" style=\"height: 15rem;width: 50rem;padding: 40px 30px;\">
                                    <!-- Modal body -->
                                    <form class=\"form\" action=\"{{ path(\"nutritionist_configuration\") }}\" method=\"post\">
                                        <h4 style=\"text-align: center; color: #00766c\">Añadir nueva etiqueta</h4>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-12 nutritionist-tags\">
                            {% for tag in tags %}
                                <div class=\"tag-entry\" style=\"height: 9rem\">
                                    <div class=\"col-sm-11 tag-resume\">
                                        <h4 style=\"color: #00766c\">{{ tag.name }}</h4>
                                        <p>{{ tag.description }}</p>
                                        <p><strong>Nivel:</strong>{{ tag.level }}</p>
                                    </div>
                                    <div class=\"col-sm-1 tag-actions\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-pencil-fill\" viewBox=\"0 0 16 16\" style=\"margin-bottom:-25px;width: 2rem;height: 2rem;\"
                                            onclick=\"openModal('openEditTagModal')\">
                                            <path d=\"M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z\"/>
                                        </svg>
                                        <button style=\"display: none\" type=\"button\" class=\"btn btn-primary\" id=\"openEditTagModal\" data-toggle=\"modal\" data-target=\"#editTagModal\"></button>
                                        <div class=\"modal fade\" id=\"editTagModal\">
                                            <div class=\"modal-dialog\">
                                                <div class=\"modal-content\" style=\"height: 15rem;width: 50rem;padding: 40px 30px;\">
                                                    <!-- Modal body -->
                                                    <form class=\"form\" action=\"{{ path(\"nutritionist_configuration\") }}\" method=\"post\">
                                                        <h4 style=\"text-align: center; color: #00766c\">Modificar etiqueta</h4>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            {% endfor %}
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    </html>
{% endblock %}
", "@Nutritionist/nutritionist-config.html.twig", "/shared/httpd/nutrik/src/NutritionistBundle/Resources/views/nutritionist-config.html.twig");
    }
}
