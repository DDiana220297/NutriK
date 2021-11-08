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

/* @Customer/messenger-services.html.twig */
class __TwigTemplate_7e507d517a76e131bb577676621b33f94607dd002561ee342fbf7b37ef660340 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Customer/messenger-services.html.twig"));

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
        $this->loadTemplate("header.html.twig", "@Customer/messenger-services.html.twig", 11)->display($context);
        // line 12
        echo "    </section>
    ";
        // line 13
        if ( !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_NUTR")) {
            // line 14
            echo "        <section id=\"customer-header\">
            ";
            // line 15
            $this->loadTemplate("customerheader.html.twig", "@Customer/messenger-services.html.twig", 15)->display($context);
            // line 16
            echo "        </section>
    ";
        }
        // line 18
        echo "    <section id=\"messenger\">
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "flashbag", [], "method"), "get", [0 => "messengerKOStatus"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 20
            echo "            <div class=\"row\" style=\"width: 87%; margin-left: 6.5%; margin-top: 10px; margin-bottom: -10px;\">
                <div class=\"alert alert-danger\" role=\"alert\" style=\"margin-bottom: 0; padding: 10px\">
                    ";
            // line 22
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "flashbag", [], "method"), "get", [0 => "messengerOKStatus"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 27
            echo "            <div class=\"row\" style=\"width: 87%; margin-left: 6.5%; margin-top: 10px; margin-bottom: -10px;\">
                <div class=\"alert alert-success\" role=\"alert\" style=\"margin-bottom: 0; padding: 10px\">
                    ";
            // line 29
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        <div class=\"container\">
            <form id=\"msform\" action=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("customer_messenger", ["id_message" => ($context["id_message"] ?? $this->getContext($context, "id_message"))]), "html", null, true);
        echo "\" method=\"post\">
                <div class=\"col-sm-12\">
                    <div id=\"messenger-block\">
                        <div class=\"col-sm-4 messenger-block-inbox\">
                            <div class=\"col-sm-12 messenger-block-header\">
                                <div class=\"col-sm-12 new-inbox\" onclick=\"openModal('openSendMessageModal')\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-envelope-plus-fill\" viewBox=\"0 0 16 16\" style=\"width: 3rem;height: 3rem;margin-bottom: -10px; margin-right: 10px\">
                                        <path fill-rule=\"evenodd\" d=\"M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.5-5a.5.5 0 0 0-1 0v1h-1a.5.5 0 0 0 0 1h1v1a.5.5 0 0 0 1 0v-1h1a.5.5 0 0 0 0-1h-1v-1Z\"/>
                                        <path fill-rule=\"evenodd\" d=\"M2 2A2 2 0 0 0 .05 3.555L8 8.414l7.95-4.859A2 2 0 0 0 14 2H2Zm-2 9.8V4.698l5.803 3.546L0 11.801Zm.192 1.056 6.57-4.027L8 9.586l1.239-.757.367.225A4.49 4.49 0 0 0 8 12.5c0 .526.09 1.03.256 1.5H2a2 2 0 0 1-1.808-1.144ZM16 9.67V4.697l-5.803 3.546.338.208A4.482 4.482 0 0 1 12.5 8c1.414 0 2.675.652 3.5 1.671Z\"/>
                                    </svg>
                                    Redactar nuevo mensaje
                                </div>
                                <select id=\"inbox-group\" onclick=\"changeInboxGroup()\">
                                    <option selected=\"selected\" value=\"received\">Mensajes recibidos</option>
                                    <option value=\"sent\">Mensajes enviados</option>
                                </select>
                                <button style=\"display: none\" type=\"button\" class=\"btn btn-primary\" id=\"openSendMessageModal\" data-toggle=\"modal\" data-target=\"#sendMessageModal\"></button>
                                <div class=\"modal fade\" id=\"sendMessageModal\">
                                    <div class=\"modal-dialog\">
                                        <div class=\"modal-content\">
                                            <!-- Modal body -->
                                            <h3 style=\"color: #00766c; text-align: center\">Mensaje nuevo</h3>
                                            <strong>Para:</strong>
                                            <div class=\"col-sm-12 inbox_receivers\">
                                                <ul class=\"list-group\">
                                                    ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["inbox_users"] ?? $this->getContext($context, "inbox_users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 60
            echo "                                                        <li>
                                                            <input type=\"checkbox\" value=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "idUser", []), "html", null, true);
            echo "\" style=\"width: fit-content; margin-bottom: 6px; margin-top: 6px; margin-right: 6px;\" name=\"new_inbox_receivers[]\">
                                                            ";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "firstname", []), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "lastname", []), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", []), "html", null, true);
            echo "
                                                        </li>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "                                                </ul>
                                            </div>
                                            <div class=\"col-sm-12 inbox_subject\">
                                                <label for=\"message_subject\">Asunto:</label>
                                                <textarea type=\"text\" id=\"message_subject\" name=\"message_subject\" class=\"form-control\" placeholder=\"Indica el asunto del mensaje\"></textarea>
                                            </div>
                                            <div class=\"col-sm-12 inbox_content\">
                                                <label for=\"message_content\">Mensaje:</label>
                                                <textarea type=\"text\" id=\"message_content\" name=\"message_content\" class=\"form-control\" placeholder=\"Indica cuerpo del mensaje\"></textarea>
                                            </div>
                                            <div class=\"col-sm-12 inbox_send\">
                                                <input type=\"submit\" name=\"submit\" class=\"btn btn-primary\" value=\"Enviar\"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id=\"inbox_received\">
                                ";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["inbox"] ?? $this->getContext($context, "inbox")));
        foreach ($context['_seq'] as $context["_key"] => $context["inb"]) {
            // line 84
            echo "                                    <div class=\"col-sm-12 messenger-inbox-item\">
                                        <div class=\"col-sm-11 inbox-details\">
                                            <div class=\"col-sm-1\">
                                                ";
            // line 87
            if ((($this->getAttribute($context["inb"], "idUserTo", []) == ($context["id_user"] ?? $this->getContext($context, "id_user"))) && ($this->getAttribute($context["inb"], "messageRead", []) == 0))) {
                // line 88
                echo "                                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-envelope\" viewBox=\"0 0 16 16\" style=\"width: 27px; height: 27px; margin-top: 5px; margin-left: -10px\">
                                                        <path fill-rule=\"evenodd\" d=\"M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z\"/>
                                                    </svg>
                                                ";
            } elseif ((($this->getAttribute(            // line 91
$context["inb"], "idUserTo", []) == ($context["id_user"] ?? $this->getContext($context, "id_user"))) && ($this->getAttribute($context["inb"], "messageRead", []) == 1))) {
                // line 92
                echo "                                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-envelope-open\" viewBox=\"0 0 16 16\" style=\"width: 27px; height: 27px; margin-top: 5px; margin-left: -10px\">
                                                        <path fill-rule=\"evenodd\" d=\"M8.47 1.318a1 1 0 0 0-.94 0l-6 3.2A1 1 0 0 0 1 5.4v.817l5.75 3.45L8 8.917l1.25.75L15 6.217V5.4a1 1 0 0 0-.53-.882l-6-3.2ZM15 7.383l-4.778 2.867L15 13.117V7.383Zm-.035 6.88L8 10.082l-6.965 4.18A1 1 0 0 0 2 15h12a1 1 0 0 0 .965-.738ZM1 13.116l4.778-2.867L1 7.383v5.734ZM7.059.435a2 2 0 0 1 1.882 0l6 3.2A2 2 0 0 1 16 5.4V14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V5.4a2 2 0 0 1 1.059-1.765l6-3.2Z\"/>
                                                    </svg>
                                                ";
            }
            // line 96
            echo "                                            </div>
                                            <div class=\"col-sm-11\">
                                                <p style=\"margin: 0\"> <strong>";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["inbox_threads"] ?? $this->getContext($context, "inbox_threads")), $this->getAttribute($context["inb"], "idMessage", []), [], "array"), 0, [], "array"), "subject", [], "array"), "html", null, true);
            echo "</strong>
                                                    <span>
                                            ";
            // line 100
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["inbox_threads"] ?? $this->getContext($context, "inbox_threads")), $this->getAttribute($context["inb"], "idMessage", []), [], "array"), 0, [], "array"), "firstname_user_from", [], "array"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["inbox_threads"] ?? $this->getContext($context, "inbox_threads")), $this->getAttribute($context["inb"], "idMessage", []), [], "array"), 0, [], "array"), "lastname_user_from", [], "array"), "html", null, true);
            echo "
                                            -  ";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["inbox_threads"] ?? $this->getContext($context, "inbox_threads")), $this->getAttribute($context["inb"], "idMessage", []), [], "array"), 0, [], "array"), "email_user_from", [], "array"), "html", null, true);
            echo "
                                            </span></p>
                                                <strong style=\"float: left\"> ";
            // line 103
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["inb"], "dateAdd", []), "Y-m-d H:i:s"), "html", null, true);
            echo "</strong>
                                            </div>
                                        </div>
                                        <div class=\"col-sm-1 inbox-actions\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-search\" viewBox=\"0 0 16 16\" style=\"width: 20px; height: 20px; margin-top: 8px;\"
                                                 onclick=\"redirectTo('messenger','/'+";
            // line 108
            echo twig_escape_filter($this->env, $this->getAttribute($context["inb"], "idMessage", []), "html", null, true);
            echo ")\">
                                                <path d=\"M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z\"/>
                                            </svg>
                                        </div>
                                    </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        echo "                            </div>
                            <div id=\"inbox_sent\" style=\"display: none\">
                                ";
        // line 116
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["sent_inbox"] ?? $this->getContext($context, "sent_inbox")));
        foreach ($context['_seq'] as $context["_key"] => $context["out"]) {
            // line 117
            echo "                                    <div class=\"col-sm-12 messenger-inbox-item\">
                                        <div class=\"col-sm-11 inbox-details\">
                                            <div class=\"col-sm-1\">
                                                ";
            // line 120
            if (($this->getAttribute($context["out"], "idUserFrom", []) == ($context["id_user"] ?? $this->getContext($context, "id_user")))) {
                // line 121
                echo "                                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-send\" viewBox=\"0 0 16 16\" style=\"width: 27px; height: 27px; margin-top: 5px; margin-left: -10px\">
                                                        <path fill-rule=\"evenodd\" d=\"M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576 6.636 10.07Zm6.787-8.201L1.591 6.602l4.339 2.76 7.494-7.493Z\"/>
                                                    </svg>
                                                ";
            }
            // line 125
            echo "                                            </div>
                                            <div class=\"col-sm-11\">
                                                <p style=\"margin: 0\"> <strong>";
            // line 127
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["sent_inbox_threads"] ?? $this->getContext($context, "sent_inbox_threads")), $this->getAttribute($context["out"], "idMessage", []), [], "array"), 0, [], "array"), "subject", [], "array"), "html", null, true);
            echo "</strong>
                                                    <span>
                                            ";
            // line 129
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["sent_inbox_threads"] ?? $this->getContext($context, "sent_inbox_threads")), $this->getAttribute($context["out"], "idMessage", []), [], "array"), 0, [], "array"), "firstname_user_from", [], "array"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["sent_inbox_threads"] ?? $this->getContext($context, "sent_inbox_threads")), $this->getAttribute($context["out"], "idMessage", []), [], "array"), 0, [], "array"), "lastname_user_from", [], "array"), "html", null, true);
            echo "
                                            -  ";
            // line 130
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["sent_inbox_threads"] ?? $this->getContext($context, "sent_inbox_threads")), $this->getAttribute($context["out"], "idMessage", []), [], "array"), 0, [], "array"), "email_user_from", [], "array"), "html", null, true);
            echo "
                                            </span></p>
                                                <strong style=\"float: left\"> ";
            // line 132
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["out"], "dateAdd", []), "Y-m-d H:i:s"), "html", null, true);
            echo "</strong>
                                            </div>
                                        </div>
                                        <div class=\"col-sm-1 inbox-actions\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-search\" viewBox=\"0 0 16 16\" style=\"width: 20px; height: 20px; margin-top: 8px;\"
                                                 onclick=\"redirectTo('messenger','/'+";
            // line 137
            echo twig_escape_filter($this->env, $this->getAttribute($context["out"], "idMessage", []), "html", null, true);
            echo ")\">
                                                <path d=\"M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z\"/>
                                            </svg>
                                        </div>
                                    </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['out'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 143
        echo "                            </div>
                        </div>
                        <div class=\"col-sm-8 messenger-block-thread\">
                            <div class=\"col-sm-12 messages\">
                                ";
        // line 147
        if (((($context["id_message"] ?? $this->getContext($context, "id_message")) != 0) && twig_in_filter(($context["id_message"] ?? $this->getContext($context, "id_message")), twig_get_array_keys_filter(($context["inbox_threads"] ?? $this->getContext($context, "inbox_threads")))))) {
            // line 148
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["inbox_threads"] ?? $this->getContext($context, "inbox_threads")), ($context["id_message"] ?? $this->getContext($context, "id_message")), [], "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 149
                echo "                                            ";
                if (($this->getAttribute($context["message"], "id_user_from", [], "array") == ($context["id_user"] ?? $this->getContext($context, "id_user")))) {
                    // line 150
                    echo "                                                <div class=\"message-left\">
                                                    <div class=\"message-icon\">
                                                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-person\" viewBox=\"0 0 16 16\" style=\"width: 25px;height: 25px\">
                                                            <path d=\"M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z\"/>
                                                        </svg>
                                                    </div>
                                                    <div class=\"message-content\">
                                                        <strong>";
                    // line 157
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["message"], "date_add", [], "array"), "Y-m-d H:i:s"), "html", null, true);
                    echo "</strong>
                                                        <p>";
                    // line 158
                    echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "content", [], "array"), "html", null, true);
                    echo "</p>

                                                    </div>
                                                </div>
                                            ";
                } else {
                    // line 163
                    echo "                                                <div class=\"message-right\">
                                                    <div class=\"message-content\">
                                                        <strong>";
                    // line 165
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["message"], "date_add", [], "array"), "Y-m-d H:i:s"), "html", null, true);
                    echo "</strong>
                                                        <p>";
                    // line 166
                    echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "content", [], "array"), "html", null, true);
                    echo "</p>
                                                    </div>
                                                    <div class=\"message-icon\">
                                                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-person-fill\" viewBox=\"0 0 16 16\" style=\"width: 25px;height: 25px\">
                                                            <path d=\"M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z\"/>
                                                        </svg>
                                                    </div>
                                                </div>
                                            ";
                }
                // line 175
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 176
            echo "                                ";
        } elseif (((($context["id_message"] ?? $this->getContext($context, "id_message")) != 0) && twig_in_filter(($context["id_message"] ?? $this->getContext($context, "id_message")), twig_get_array_keys_filter(($context["sent_inbox_threads"] ?? $this->getContext($context, "sent_inbox_threads")))))) {
            // line 177
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["sent_inbox_threads"] ?? $this->getContext($context, "sent_inbox_threads")), ($context["id_message"] ?? $this->getContext($context, "id_message")), [], "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 178
                echo "                                        ";
                if (($this->getAttribute($context["message"], "id_user_from", [], "array") == ($context["id_user"] ?? $this->getContext($context, "id_user")))) {
                    // line 179
                    echo "                                            <div class=\"message-left\">
                                                <div class=\"message-icon\">
                                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-person\" viewBox=\"0 0 16 16\" style=\"width: 25px;height: 25px\">
                                                        <path d=\"M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z\"/>
                                                    </svg>
                                                </div>
                                                <div class=\"message-content\">
                                                    <strong>";
                    // line 186
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["message"], "date_add", [], "array"), "Y-m-d H:i:s"), "html", null, true);
                    echo "</strong>
                                                    <p>";
                    // line 187
                    echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "content", [], "array"), "html", null, true);
                    echo "</p>

                                                </div>
                                            </div>
                                        ";
                } else {
                    // line 192
                    echo "                                            <div class=\"message-right\">
                                                <div class=\"message-content\">
                                                    <strong>";
                    // line 194
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["message"], "date_add", [], "array"), "Y-m-d H:i:s"), "html", null, true);
                    echo "</strong>
                                                    <p>";
                    // line 195
                    echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "content", [], "array"), "html", null, true);
                    echo "</p>
                                                </div>
                                                <div class=\"message-icon\">
                                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-person-fill\" viewBox=\"0 0 16 16\" style=\"width: 25px;height: 25px\">
                                                        <path d=\"M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z\"/>
                                                    </svg>
                                                </div>
                                            </div>
                                        ";
                }
                // line 204
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 205
            echo "                                ";
        }
        // line 206
        echo "                            </div>
                            <div class=\"col-sm-12 message-reply\">
                                ";
        // line 208
        if ((($context["id_message"] ?? $this->getContext($context, "id_message")) != 0)) {
            // line 209
            echo "                                    <div class=\"inbox_content\">
                                        <textarea type=\"text\" id=\"reply_message_content\" name=\"reply_message_content\" class=\"form-control\" placeholder=\"Indica cuerpo del mensaje\"></textarea>
                                    </div>
                                    <div class=\"inbox_send\">
                                        <input type=\"hidden\" name=\"repply_id_message\" value=\"";
            // line 213
            echo twig_escape_filter($this->env, ($context["id_message"] ?? $this->getContext($context, "id_message")), "html", null, true);
            echo "\">
                                        <input type=\"submit\" name=\"submit\" id=\"repply_message\" class=\"btn btn-primary\" style=\"display: none\" value=\"Responder\"/>
                                        <button type=\"submit\" name=\"submit\" class=\"btn btn-primary\" value=\"Responder\" onclick=\"replyMessage()\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-send-fill\" viewBox=\"0 0 16 16\" style=\"width: 3rem;height: 3rem;margin-top: 5px;\">
                                                <path fill-rule=\"evenodd\" d=\"M15.964.686a.5.5 0 0 0-.65-.65l-.095.038L.767 5.854l-.001.001-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.563 2.903.432.275.275.432 2.903 4.563.002.002.26.41a.5.5 0 0 0 .886-.083l.181-.453L15.926.78l.038-.095Zm-1.833 1.89.471-1.178-1.178.471L5.93 9.363l.338.215a.5.5 0 0 1 .154.154l.215.338 7.494-7.494Z\"/>
                                            </svg>
                                        </button>
                                    </div>
                                ";
        }
        // line 222
        echo "                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    </html>
    ";
        // line 230
        $this->loadTemplate("footer.html.twig", "@Customer/messenger-services.html.twig", 230)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Customer/messenger-services.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  477 => 230,  467 => 222,  455 => 213,  449 => 209,  447 => 208,  443 => 206,  440 => 205,  434 => 204,  422 => 195,  418 => 194,  414 => 192,  406 => 187,  402 => 186,  393 => 179,  390 => 178,  385 => 177,  382 => 176,  376 => 175,  364 => 166,  360 => 165,  356 => 163,  348 => 158,  344 => 157,  335 => 150,  332 => 149,  327 => 148,  325 => 147,  319 => 143,  307 => 137,  299 => 132,  294 => 130,  288 => 129,  283 => 127,  279 => 125,  273 => 121,  271 => 120,  266 => 117,  262 => 116,  258 => 114,  246 => 108,  238 => 103,  233 => 101,  227 => 100,  222 => 98,  218 => 96,  212 => 92,  210 => 91,  205 => 88,  203 => 87,  198 => 84,  194 => 83,  174 => 65,  161 => 62,  157 => 61,  154 => 60,  150 => 59,  122 => 34,  119 => 33,  109 => 29,  105 => 27,  100 => 26,  90 => 22,  86 => 20,  82 => 19,  79 => 18,  75 => 16,  73 => 15,  70 => 14,  68 => 13,  65 => 12,  63 => 11,  57 => 8,  52 => 6,  46 => 2,  34 => 1,);
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
    {% if not is_granted('ROLE_NUTR') %}
        <section id=\"customer-header\">
            {% include 'customerheader.html.twig' %}
        </section>
    {% endif %}
    <section id=\"messenger\">
        {% for message in  app.session.flashbag().get('messengerKOStatus') %}
            <div class=\"row\" style=\"width: 87%; margin-left: 6.5%; margin-top: 10px; margin-bottom: -10px;\">
                <div class=\"alert alert-danger\" role=\"alert\" style=\"margin-bottom: 0; padding: 10px\">
                    {{ message }}
                </div>
            </div>
        {% endfor %}
        {% for message in  app.session.flashbag().get('messengerOKStatus') %}
            <div class=\"row\" style=\"width: 87%; margin-left: 6.5%; margin-top: 10px; margin-bottom: -10px;\">
                <div class=\"alert alert-success\" role=\"alert\" style=\"margin-bottom: 0; padding: 10px\">
                    {{ message }}
                </div>
            </div>
        {% endfor %}
        <div class=\"container\">
            <form id=\"msform\" action=\"{{ path(\"customer_messenger\", {'id_message':id_message}) }}\" method=\"post\">
                <div class=\"col-sm-12\">
                    <div id=\"messenger-block\">
                        <div class=\"col-sm-4 messenger-block-inbox\">
                            <div class=\"col-sm-12 messenger-block-header\">
                                <div class=\"col-sm-12 new-inbox\" onclick=\"openModal('openSendMessageModal')\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-envelope-plus-fill\" viewBox=\"0 0 16 16\" style=\"width: 3rem;height: 3rem;margin-bottom: -10px; margin-right: 10px\">
                                        <path fill-rule=\"evenodd\" d=\"M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.5-5a.5.5 0 0 0-1 0v1h-1a.5.5 0 0 0 0 1h1v1a.5.5 0 0 0 1 0v-1h1a.5.5 0 0 0 0-1h-1v-1Z\"/>
                                        <path fill-rule=\"evenodd\" d=\"M2 2A2 2 0 0 0 .05 3.555L8 8.414l7.95-4.859A2 2 0 0 0 14 2H2Zm-2 9.8V4.698l5.803 3.546L0 11.801Zm.192 1.056 6.57-4.027L8 9.586l1.239-.757.367.225A4.49 4.49 0 0 0 8 12.5c0 .526.09 1.03.256 1.5H2a2 2 0 0 1-1.808-1.144ZM16 9.67V4.697l-5.803 3.546.338.208A4.482 4.482 0 0 1 12.5 8c1.414 0 2.675.652 3.5 1.671Z\"/>
                                    </svg>
                                    Redactar nuevo mensaje
                                </div>
                                <select id=\"inbox-group\" onclick=\"changeInboxGroup()\">
                                    <option selected=\"selected\" value=\"received\">Mensajes recibidos</option>
                                    <option value=\"sent\">Mensajes enviados</option>
                                </select>
                                <button style=\"display: none\" type=\"button\" class=\"btn btn-primary\" id=\"openSendMessageModal\" data-toggle=\"modal\" data-target=\"#sendMessageModal\"></button>
                                <div class=\"modal fade\" id=\"sendMessageModal\">
                                    <div class=\"modal-dialog\">
                                        <div class=\"modal-content\">
                                            <!-- Modal body -->
                                            <h3 style=\"color: #00766c; text-align: center\">Mensaje nuevo</h3>
                                            <strong>Para:</strong>
                                            <div class=\"col-sm-12 inbox_receivers\">
                                                <ul class=\"list-group\">
                                                    {% for user in inbox_users %}
                                                        <li>
                                                            <input type=\"checkbox\" value=\"{{ user.idUser }}\" style=\"width: fit-content; margin-bottom: 6px; margin-top: 6px; margin-right: 6px;\" name=\"new_inbox_receivers[]\">
                                                            {{ user.firstname }} {{ user.lastname}} - {{ user.email}}
                                                        </li>
                                                    {% endfor %}
                                                </ul>
                                            </div>
                                            <div class=\"col-sm-12 inbox_subject\">
                                                <label for=\"message_subject\">Asunto:</label>
                                                <textarea type=\"text\" id=\"message_subject\" name=\"message_subject\" class=\"form-control\" placeholder=\"Indica el asunto del mensaje\"></textarea>
                                            </div>
                                            <div class=\"col-sm-12 inbox_content\">
                                                <label for=\"message_content\">Mensaje:</label>
                                                <textarea type=\"text\" id=\"message_content\" name=\"message_content\" class=\"form-control\" placeholder=\"Indica cuerpo del mensaje\"></textarea>
                                            </div>
                                            <div class=\"col-sm-12 inbox_send\">
                                                <input type=\"submit\" name=\"submit\" class=\"btn btn-primary\" value=\"Enviar\"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id=\"inbox_received\">
                                {% for inb in inbox %}
                                    <div class=\"col-sm-12 messenger-inbox-item\">
                                        <div class=\"col-sm-11 inbox-details\">
                                            <div class=\"col-sm-1\">
                                                {% if inb.idUserTo == id_user and inb.messageRead == 0 %}
                                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-envelope\" viewBox=\"0 0 16 16\" style=\"width: 27px; height: 27px; margin-top: 5px; margin-left: -10px\">
                                                        <path fill-rule=\"evenodd\" d=\"M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z\"/>
                                                    </svg>
                                                {% elseif inb.idUserTo == id_user and inb.messageRead == 1 %}
                                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-envelope-open\" viewBox=\"0 0 16 16\" style=\"width: 27px; height: 27px; margin-top: 5px; margin-left: -10px\">
                                                        <path fill-rule=\"evenodd\" d=\"M8.47 1.318a1 1 0 0 0-.94 0l-6 3.2A1 1 0 0 0 1 5.4v.817l5.75 3.45L8 8.917l1.25.75L15 6.217V5.4a1 1 0 0 0-.53-.882l-6-3.2ZM15 7.383l-4.778 2.867L15 13.117V7.383Zm-.035 6.88L8 10.082l-6.965 4.18A1 1 0 0 0 2 15h12a1 1 0 0 0 .965-.738ZM1 13.116l4.778-2.867L1 7.383v5.734ZM7.059.435a2 2 0 0 1 1.882 0l6 3.2A2 2 0 0 1 16 5.4V14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V5.4a2 2 0 0 1 1.059-1.765l6-3.2Z\"/>
                                                    </svg>
                                                {% endif %}
                                            </div>
                                            <div class=\"col-sm-11\">
                                                <p style=\"margin: 0\"> <strong>{{ inbox_threads[inb.idMessage][0]['subject'] }}</strong>
                                                    <span>
                                            {{ inbox_threads[inb.idMessage][0]['firstname_user_from'] }} {{ inbox_threads[inb.idMessage][0]['lastname_user_from'] }}
                                            -  {{ inbox_threads[inb.idMessage][0]['email_user_from'] }}
                                            </span></p>
                                                <strong style=\"float: left\"> {{ inb.dateAdd|date('Y-m-d H:i:s') }}</strong>
                                            </div>
                                        </div>
                                        <div class=\"col-sm-1 inbox-actions\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-search\" viewBox=\"0 0 16 16\" style=\"width: 20px; height: 20px; margin-top: 8px;\"
                                                 onclick=\"redirectTo('messenger','/'+{{ inb.idMessage }})\">
                                                <path d=\"M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z\"/>
                                            </svg>
                                        </div>
                                    </div>
                                {% endfor %}
                            </div>
                            <div id=\"inbox_sent\" style=\"display: none\">
                                {% for out in sent_inbox %}
                                    <div class=\"col-sm-12 messenger-inbox-item\">
                                        <div class=\"col-sm-11 inbox-details\">
                                            <div class=\"col-sm-1\">
                                                {% if out.idUserFrom == id_user%}
                                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-send\" viewBox=\"0 0 16 16\" style=\"width: 27px; height: 27px; margin-top: 5px; margin-left: -10px\">
                                                        <path fill-rule=\"evenodd\" d=\"M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576 6.636 10.07Zm6.787-8.201L1.591 6.602l4.339 2.76 7.494-7.493Z\"/>
                                                    </svg>
                                                {% endif %}
                                            </div>
                                            <div class=\"col-sm-11\">
                                                <p style=\"margin: 0\"> <strong>{{ sent_inbox_threads[out.idMessage][0]['subject'] }}</strong>
                                                    <span>
                                            {{ sent_inbox_threads[out.idMessage][0]['firstname_user_from'] }} {{ sent_inbox_threads[out.idMessage][0]['lastname_user_from'] }}
                                            -  {{ sent_inbox_threads[out.idMessage][0]['email_user_from'] }}
                                            </span></p>
                                                <strong style=\"float: left\"> {{ out.dateAdd|date('Y-m-d H:i:s') }}</strong>
                                            </div>
                                        </div>
                                        <div class=\"col-sm-1 inbox-actions\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-search\" viewBox=\"0 0 16 16\" style=\"width: 20px; height: 20px; margin-top: 8px;\"
                                                 onclick=\"redirectTo('messenger','/'+{{ out.idMessage }})\">
                                                <path d=\"M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z\"/>
                                            </svg>
                                        </div>
                                    </div>
                                {% endfor %}
                            </div>
                        </div>
                        <div class=\"col-sm-8 messenger-block-thread\">
                            <div class=\"col-sm-12 messages\">
                                {% if id_message != 0 and id_message in inbox_threads|keys%}
                                    {% for message in inbox_threads[id_message] %}
                                            {% if  message['id_user_from'] == id_user %}
                                                <div class=\"message-left\">
                                                    <div class=\"message-icon\">
                                                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-person\" viewBox=\"0 0 16 16\" style=\"width: 25px;height: 25px\">
                                                            <path d=\"M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z\"/>
                                                        </svg>
                                                    </div>
                                                    <div class=\"message-content\">
                                                        <strong>{{ message['date_add']|date('Y-m-d H:i:s') }}</strong>
                                                        <p>{{ message['content'] }}</p>

                                                    </div>
                                                </div>
                                            {% else %}
                                                <div class=\"message-right\">
                                                    <div class=\"message-content\">
                                                        <strong>{{ message['date_add']|date('Y-m-d H:i:s') }}</strong>
                                                        <p>{{ message['content'] }}</p>
                                                    </div>
                                                    <div class=\"message-icon\">
                                                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-person-fill\" viewBox=\"0 0 16 16\" style=\"width: 25px;height: 25px\">
                                                            <path d=\"M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z\"/>
                                                        </svg>
                                                    </div>
                                                </div>
                                            {% endif %}
                                    {% endfor %}
                                {% elseif id_message != 0 and id_message in sent_inbox_threads|keys%}
                                    {% for message in sent_inbox_threads[id_message] %}
                                        {% if  message['id_user_from'] == id_user %}
                                            <div class=\"message-left\">
                                                <div class=\"message-icon\">
                                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-person\" viewBox=\"0 0 16 16\" style=\"width: 25px;height: 25px\">
                                                        <path d=\"M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z\"/>
                                                    </svg>
                                                </div>
                                                <div class=\"message-content\">
                                                    <strong>{{ message['date_add']|date('Y-m-d H:i:s') }}</strong>
                                                    <p>{{ message['content'] }}</p>

                                                </div>
                                            </div>
                                        {% else %}
                                            <div class=\"message-right\">
                                                <div class=\"message-content\">
                                                    <strong>{{ message['date_add']|date('Y-m-d H:i:s') }}</strong>
                                                    <p>{{ message['content'] }}</p>
                                                </div>
                                                <div class=\"message-icon\">
                                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-person-fill\" viewBox=\"0 0 16 16\" style=\"width: 25px;height: 25px\">
                                                        <path d=\"M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z\"/>
                                                    </svg>
                                                </div>
                                            </div>
                                        {% endif %}
                                    {% endfor %}
                                {% endif %}
                            </div>
                            <div class=\"col-sm-12 message-reply\">
                                {% if id_message != 0 %}
                                    <div class=\"inbox_content\">
                                        <textarea type=\"text\" id=\"reply_message_content\" name=\"reply_message_content\" class=\"form-control\" placeholder=\"Indica cuerpo del mensaje\"></textarea>
                                    </div>
                                    <div class=\"inbox_send\">
                                        <input type=\"hidden\" name=\"repply_id_message\" value=\"{{ id_message }}\">
                                        <input type=\"submit\" name=\"submit\" id=\"repply_message\" class=\"btn btn-primary\" style=\"display: none\" value=\"Responder\"/>
                                        <button type=\"submit\" name=\"submit\" class=\"btn btn-primary\" value=\"Responder\" onclick=\"replyMessage()\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-send-fill\" viewBox=\"0 0 16 16\" style=\"width: 3rem;height: 3rem;margin-top: 5px;\">
                                                <path fill-rule=\"evenodd\" d=\"M15.964.686a.5.5 0 0 0-.65-.65l-.095.038L.767 5.854l-.001.001-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.563 2.903.432.275.275.432 2.903 4.563.002.002.26.41a.5.5 0 0 0 .886-.083l.181-.453L15.926.78l.038-.095Zm-1.833 1.89.471-1.178-1.178.471L5.93 9.363l.338.215a.5.5 0 0 1 .154.154l.215.338 7.494-7.494Z\"/>
                                            </svg>
                                        </button>
                                    </div>
                                {% endif %}
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    </html>
    {% include 'footer.html.twig' %}
{% endblock %}
", "@Customer/messenger-services.html.twig", "/shared/httpd/nutrik/src/CustomerBundle/Resources/views/messenger-services.html.twig");
    }
}
