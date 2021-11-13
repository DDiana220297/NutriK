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

/* @Customer/professionals.html.twig */
class __TwigTemplate_1dd9f75084016ca2aea3eabac10e57bbbf23d06c33384e45c6f9a8f4caeed860 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Customer/professionals.html.twig"));

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
        $this->loadTemplate("header.html.twig", "@Customer/professionals.html.twig", 11)->display($context);
        // line 12
        echo "    </section>
    <section id=\"customer-header\">
        ";
        // line 14
        $this->loadTemplate("customerheader.html.twig", "@Customer/professionals.html.twig", 14)->display($context);
        // line 15
        echo "    </section>
    <section id=\"professionals-section\">
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "flashbag", [], "method"), "get", [0 => "professionalsOKStatus"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 18
            echo "            <div class=\"row\" style=\"width: 63.5%;margin-left: 18.3%;margin-top: 10px;margin-bottom: -25px;\">
                <div class=\"alert alert-success\" role=\"alert\" style=\"margin-bottom: 0; text-align: center\">
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
            <form class=\"form\" action=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("customer_professionals");
        echo "\" method=\"post\">
                <div class=\"professionals-block\">
                    <h3 style=\"text-align: center\">Elije el profesional que más se adapte a tus necesidades
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-info-circle\" viewBox=\"0 0 16 16\" style=\"width: 17px; height: 17px; margin-bottom: -3px\"
                             onclick=\"openModal('openMyInfoProfessionalModal')\">
                            <path d=\"M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z\"/>
                            <path d=\"m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z\"/>
                        </svg>
                        <button style=\"display: none\" type=\"button\" class=\"btn btn-primary\" id=\"openMyInfoProfessionalModal\" data-toggle=\"modal\" data-target=\"#infoProfessionalModal\"></button>
                        <div class=\"modal fade\" id=\"infoProfessionalModal\">
                            <div class=\"modal-dialog\">
                                <div class=\"modal-content\" style=\"height: 15rem;width: 50rem;padding: 40px 30px; color: black; font-size: 16px\">
                                    <!-- Modal body -->
                                    <p>En este paso debes elegir el profesional que mas se adapte a tus necesidades</p>
                                    <p>Una vez contratado el paquete podŕas solicitar un cambio en caso de desearlo</p>
                                </div>
                            </div>
                        </div>
                    </h3>
                    <div class=\"professionals\">
                        ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["professionals"] ?? $this->getContext($context, "professionals")));
        foreach ($context['_seq'] as $context["_key"] => $context["professional"]) {
            // line 46
            echo "                            <div class=\"professional-entry\">
                                <div class=\"col-sm-2 professional-entry-image\">
                                    <img src=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($context["professional"], "image", [])), "html", null, true);
            echo "\" alt=\"\">
                                </div>
                                <div class=\"col-sm-9 professional-entry-resume\">
                                    <strong>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["professional"], "firstname", []), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["professional"], "lastname", []), "html", null, true);
            echo "</strong>
                                    <p>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["professional"], "email", []), "html", null, true);
            echo "</p>
                                    <p style=\"font-size: 18px; margin: 0\">Ha estudiado en: <strong>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["professional"], "studies", []), "html", null, true);
            echo "</strong></p>
                                    <p style=\"font-size: 18px; margin: 0\">Lleva trabajando en el sector: <strong>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["professional"], "antiquity", []), "html", null, true);
            echo "</strong> años</p>
                                </div>
                                <div class=\"col-sm-1 professional-entry-actions\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-search\" viewBox=\"0 0 16 16\"
                                         onclick=\"openModal('openProfessionalViewModal')\">
                                        <path d=\"M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z\"/>
                                    </svg>
                                </div>
                                <button style=\"display: none\" type=\"button\" class=\"btn btn-primary\" id=\"openProfessionalViewModal\" data-toggle=\"modal\" data-target=\"#viewProfessionalModal\"></button>
                                <div class=\"modal fade\" id=\"viewProfessionalModal\">
                                    <div class=\"modal-dialog\">
                                        <div class=\"modal-content\">
                                            <!-- Modal body -->
                                            <div class=\"col-sm-4\">
                                                <div class=\"col-sm-12\">
                                                    <img src=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($context["professional"], "image", [])), "html", null, true);
            echo "\" alt=\"\">
                                                </div>
                                                <div class=\"col-sm-12\">
                                                    <p><strong style=\"font-size: 35px;\">";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($context["professional"], "firstname", []), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["professional"], "lastname", []), "html", null, true);
            echo "</strong></p>
                                                </div>
                                                <div class=\"col-sm-12\">
                                                    <p><strong>";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($context["professional"], "email", []), "html", null, true);
            echo "</strong></p>
                                                </div>
                                                <div class=\"col-sm-12\" style=\"border: thin solid #e7e7e7; margin-bottom: 15px; padding: 15px\">
                                                    <p><strong>Numero de colegiado:</strong></p>
                                                    <p>";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($context["professional"], "collegiateNumber", []), "html", null, true);
            echo "</p>
                                                    <strong><a style=\"color: white\" target=\"_blank\" href=\"https://www.consejodietistasnutricionistas.com/que-es-un-dietista-nutricionista/registro-nacional-de-dietistas-nutricionistas/\">
                                                            Obtener más información acerca del perfil de colegiado</a>
                                                    </strong>
                                                </div>
                                                <div class=\"col-sm-12\">
                                                    <p style=\"font-size: 18px; margin: 0\">Lleva trabajando en el sector: <strong>";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute($context["professional"], "antiquity", []), "html", null, true);
            echo "</strong> años</p>
                                                </div>
                                                <div class=\"col-sm-12\">
                                                    <p><strong>Tarifa de precios:</strong></p>
                                                    <p>";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute($context["professional"], "rate", []), "html", null, true);
            echo "</p>
                                                </div>
                                            </div>
                                            <div class=\"col-sm-8\">
                                                ";
            // line 93
            if (twig_in_filter($this->getAttribute($context["professional"], "idUser", []), twig_get_array_keys_filter(($context["professionals_social_media"] ?? $this->getContext($context, "professionals_social_media"))))) {
                // line 94
                echo "                                                    <div class=\"col-sm-12\">
                                                        <div class=\"input-group\">
                                                            <div class=\"input-group-addon input-label\">NutriK</div>
                                                            <div class=\"input-group-addon input-prefix\">https://nutrik.test/web/presentation/";
                // line 97
                echo twig_escape_filter($this->env, $this->getAttribute($context["professional"], "idUser", []), "html", null, true);
                echo "</div>
                                                        </div>
                                                        <div class=\"input-group\">
                                                            <div class=\"input-group-addon input-label\">Facebook</div>
                                                            <div class=\"input-group-addon input-prefix\">https://facebook.com/";
                // line 101
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["professionals_social_media"] ?? $this->getContext($context, "professionals_social_media")), $this->getAttribute($context["professional"], "idUser", []), [], "array"), "facebook", [], "array"), "html", null, true);
                echo "</div>
                                                        </div>
                                                        <div class=\"input-group\">
                                                            <div class=\"input-group-addon input-label\">Instagram</div>
                                                            <div class=\"input-group-addon input-prefix\">https://instagram.com/";
                // line 105
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["professionals_social_media"] ?? $this->getContext($context, "professionals_social_media")), $this->getAttribute($context["professional"], "idUser", []), [], "array"), "instagram", [], "array"), "html", null, true);
                echo "</div>
                                                        </div>
                                                        <div class=\"input-group\">
                                                            <div class=\"input-group-addon input-label\">Linkedin</div>
                                                            <div class=\"input-group-addon input-prefix\">https://www.linkedin.com/";
                // line 109
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["professionals_social_media"] ?? $this->getContext($context, "professionals_social_media")), $this->getAttribute($context["professional"], "idUser", []), [], "array"), "linkedin", [], "array"), "html", null, true);
                echo "</div>
                                                        </div>
                                                    </div>
                                                ";
            }
            // line 113
            echo "                                                <div class=\"col-sm-12\" style=\"padding: 20px\">
                                                    <strong>";
            // line 114
            echo twig_escape_filter($this->env, $this->getAttribute($context["professional"], "presentation", []), "html", null, true);
            echo "</strong>
                                                </div>
                                                <div class=\"col-sm-12\" style=\"padding: 50px\">
                                                    <p>";
            // line 117
            echo twig_escape_filter($this->env, $this->getAttribute($context["professional"], "description", []), "html", null, true);
            echo "</p>
                                                </div>
                                                <div class=\"col-sm-12\">
                                                    <input type=\"submit\" name=\"submit\" class=\"btn btn-primary\" value=\"Contratar\" onclick=\"redirectTo('professionals')\"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['professional'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        echo "                    </div>
                </div>
            </form>
        </div>
    </section>
    ";
        // line 133
        $this->loadTemplate("footer.html.twig", "@Customer/professionals.html.twig", 133)->display($context);
        // line 134
        echo "    </html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Customer/professionals.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  279 => 134,  277 => 133,  270 => 128,  253 => 117,  247 => 114,  244 => 113,  237 => 109,  230 => 105,  223 => 101,  216 => 97,  211 => 94,  209 => 93,  202 => 89,  195 => 85,  186 => 79,  179 => 75,  171 => 72,  165 => 69,  147 => 54,  143 => 53,  139 => 52,  133 => 51,  127 => 48,  123 => 46,  119 => 45,  96 => 25,  93 => 24,  83 => 20,  79 => 18,  75 => 17,  71 => 15,  69 => 14,  65 => 12,  63 => 11,  57 => 8,  52 => 6,  46 => 2,  34 => 1,);
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
    <section id=\"professionals-section\">
        {% for message in  app.session.flashbag().get('professionalsOKStatus') %}
            <div class=\"row\" style=\"width: 63.5%;margin-left: 18.3%;margin-top: 10px;margin-bottom: -25px;\">
                <div class=\"alert alert-success\" role=\"alert\" style=\"margin-bottom: 0; text-align: center\">
                    {{ message }}
                </div>
            </div>
        {% endfor %}
        <div class=\"container\">
            <form class=\"form\" action=\"{{ path(\"customer_professionals\") }}\" method=\"post\">
                <div class=\"professionals-block\">
                    <h3 style=\"text-align: center\">Elije el profesional que más se adapte a tus necesidades
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-info-circle\" viewBox=\"0 0 16 16\" style=\"width: 17px; height: 17px; margin-bottom: -3px\"
                             onclick=\"openModal('openMyInfoProfessionalModal')\">
                            <path d=\"M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z\"/>
                            <path d=\"m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z\"/>
                        </svg>
                        <button style=\"display: none\" type=\"button\" class=\"btn btn-primary\" id=\"openMyInfoProfessionalModal\" data-toggle=\"modal\" data-target=\"#infoProfessionalModal\"></button>
                        <div class=\"modal fade\" id=\"infoProfessionalModal\">
                            <div class=\"modal-dialog\">
                                <div class=\"modal-content\" style=\"height: 15rem;width: 50rem;padding: 40px 30px; color: black; font-size: 16px\">
                                    <!-- Modal body -->
                                    <p>En este paso debes elegir el profesional que mas se adapte a tus necesidades</p>
                                    <p>Una vez contratado el paquete podŕas solicitar un cambio en caso de desearlo</p>
                                </div>
                            </div>
                        </div>
                    </h3>
                    <div class=\"professionals\">
                        {% for professional in professionals %}
                            <div class=\"professional-entry\">
                                <div class=\"col-sm-2 professional-entry-image\">
                                    <img src=\"{{ asset(professional.image) }}\" alt=\"\">
                                </div>
                                <div class=\"col-sm-9 professional-entry-resume\">
                                    <strong>{{ professional.firstname }} {{ professional.lastname }}</strong>
                                    <p>{{ professional.email }}</p>
                                    <p style=\"font-size: 18px; margin: 0\">Ha estudiado en: <strong>{{ professional.studies }}</strong></p>
                                    <p style=\"font-size: 18px; margin: 0\">Lleva trabajando en el sector: <strong>{{ professional.antiquity }}</strong> años</p>
                                </div>
                                <div class=\"col-sm-1 professional-entry-actions\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-search\" viewBox=\"0 0 16 16\"
                                         onclick=\"openModal('openProfessionalViewModal')\">
                                        <path d=\"M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z\"/>
                                    </svg>
                                </div>
                                <button style=\"display: none\" type=\"button\" class=\"btn btn-primary\" id=\"openProfessionalViewModal\" data-toggle=\"modal\" data-target=\"#viewProfessionalModal\"></button>
                                <div class=\"modal fade\" id=\"viewProfessionalModal\">
                                    <div class=\"modal-dialog\">
                                        <div class=\"modal-content\">
                                            <!-- Modal body -->
                                            <div class=\"col-sm-4\">
                                                <div class=\"col-sm-12\">
                                                    <img src=\"{{ asset(professional.image) }}\" alt=\"\">
                                                </div>
                                                <div class=\"col-sm-12\">
                                                    <p><strong style=\"font-size: 35px;\">{{ professional.firstname }} {{ professional.lastname }}</strong></p>
                                                </div>
                                                <div class=\"col-sm-12\">
                                                    <p><strong>{{ professional.email }}</strong></p>
                                                </div>
                                                <div class=\"col-sm-12\" style=\"border: thin solid #e7e7e7; margin-bottom: 15px; padding: 15px\">
                                                    <p><strong>Numero de colegiado:</strong></p>
                                                    <p>{{ professional.collegiateNumber }}</p>
                                                    <strong><a style=\"color: white\" target=\"_blank\" href=\"https://www.consejodietistasnutricionistas.com/que-es-un-dietista-nutricionista/registro-nacional-de-dietistas-nutricionistas/\">
                                                            Obtener más información acerca del perfil de colegiado</a>
                                                    </strong>
                                                </div>
                                                <div class=\"col-sm-12\">
                                                    <p style=\"font-size: 18px; margin: 0\">Lleva trabajando en el sector: <strong>{{ professional.antiquity }}</strong> años</p>
                                                </div>
                                                <div class=\"col-sm-12\">
                                                    <p><strong>Tarifa de precios:</strong></p>
                                                    <p>{{ professional.rate }}</p>
                                                </div>
                                            </div>
                                            <div class=\"col-sm-8\">
                                                {% if professional.idUser in professionals_social_media|keys %}
                                                    <div class=\"col-sm-12\">
                                                        <div class=\"input-group\">
                                                            <div class=\"input-group-addon input-label\">NutriK</div>
                                                            <div class=\"input-group-addon input-prefix\">https://nutrik.test/web/presentation/{{ professional.idUser }}</div>
                                                        </div>
                                                        <div class=\"input-group\">
                                                            <div class=\"input-group-addon input-label\">Facebook</div>
                                                            <div class=\"input-group-addon input-prefix\">https://facebook.com/{{ professionals_social_media[professional.idUser]['facebook']}}</div>
                                                        </div>
                                                        <div class=\"input-group\">
                                                            <div class=\"input-group-addon input-label\">Instagram</div>
                                                            <div class=\"input-group-addon input-prefix\">https://instagram.com/{{ professionals_social_media[professional.idUser]['instagram']}}</div>
                                                        </div>
                                                        <div class=\"input-group\">
                                                            <div class=\"input-group-addon input-label\">Linkedin</div>
                                                            <div class=\"input-group-addon input-prefix\">https://www.linkedin.com/{{ professionals_social_media[professional.idUser]['linkedin']}}</div>
                                                        </div>
                                                    </div>
                                                {% endif %}
                                                <div class=\"col-sm-12\" style=\"padding: 20px\">
                                                    <strong>{{ professional.presentation }}</strong>
                                                </div>
                                                <div class=\"col-sm-12\" style=\"padding: 50px\">
                                                    <p>{{ professional.description }}</p>
                                                </div>
                                                <div class=\"col-sm-12\">
                                                    <input type=\"submit\" name=\"submit\" class=\"btn btn-primary\" value=\"Contratar\" onclick=\"redirectTo('professionals')\"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        {%  endfor %}
                    </div>
                </div>
            </form>
        </div>
    </section>
    {% include 'footer.html.twig' %}
    </html>
{% endblock %}
", "@Customer/professionals.html.twig", "/shared/httpd/nutrik/src/CustomerBundle/Resources/views/professionals.html.twig");
    }
}
