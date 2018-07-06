<?php

/* @FOSUser/Security/login_content.html.twig */
class __TwigTemplate_a87f5da1796a6578de7e3d08512bf0d7d762f5aa3e56bda87b26a3d9d677f121 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 3, $this->source); })())) {
            // line 4
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 4, $this->source); })()), "messageKey", array()), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 4, $this->source); })()), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 6
        echo "<div id=\"wrapper\">
    <div id=\"container\">
    <form class=\"form-signin\" action=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_check");
        echo "\" method=\"post\">
        ";
        // line 9
        if ((isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new Twig_Error_Runtime('Variable "csrf_token" does not exist.', 9, $this->source); })())) {
            // line 10
            echo "            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new Twig_Error_Runtime('Variable "csrf_token" does not exist.', 10, $this->source); })()), "html", null, true);
            echo "\" />
        ";
        }
        // line 12
        echo "    <h5 style=\"font-size: 16px;\" class=\"form-signin-heading\">Se connecter</h5>
    <input style=\"margin-bottom: 0.5rem; font-size: 15px;\" class=\"form-control\" placeholder=\"Pseudo\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "\" required=\"required\" autocomplete=\"username\" />
    <input style=\"margin-bottom: 0.2rem; font-size: 15px;\" class=\"form-control\" placeholder=\"Mot de passe\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" autocomplete=\"current-password\" />    
    <a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_resetting_request");
        echo "\" style=\"color: #007bff; font-size: 14px;\">Mot de passe oublié ?</a>    
    <div class=\"checkbox\">
        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
        <label for=\"remember_me\" style=\"font-size: 14px;\">";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    </div>
    <button style=\"font-size: 15px;\" class=\"btn btn-outline-primary\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\">Connexion</button>
    </form>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 20,  70 => 18,  64 => 15,  59 => 13,  56 => 12,  50 => 10,  48 => 9,  44 => 8,  40 => 6,  34 => 4,  32 => 3,  29 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

{% if error %}
    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}
<div id=\"wrapper\">
    <div id=\"container\">
    <form class=\"form-signin\" action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
        {% if csrf_token %}
            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
        {% endif %}
    <h5 style=\"font-size: 16px;\" class=\"form-signin-heading\">Se connecter</h5>
    <input style=\"margin-bottom: 0.5rem; font-size: 15px;\" class=\"form-control\" placeholder=\"Pseudo\" type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" autocomplete=\"username\" />
    <input style=\"margin-bottom: 0.2rem; font-size: 15px;\" class=\"form-control\" placeholder=\"Mot de passe\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" autocomplete=\"current-password\" />    
    <a href=\"{{ path('fos_user_resetting_request') }}\" style=\"color: #007bff; font-size: 14px;\">Mot de passe oublié ?</a>    
    <div class=\"checkbox\">
        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
        <label for=\"remember_me\" style=\"font-size: 14px;\">{{ 'security.login.remember_me'|trans }}</label>
    </div>
    <button style=\"font-size: 15px;\" class=\"btn btn-outline-primary\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"{{ 'security.login.submit'|trans }}\">Connexion</button>
    </form>
    </div>
</div>", "@FOSUser/Security/login_content.html.twig", "/Users/maxime/Documents/webac/delivery/Semestre_2/Projet_10/High-Tech/app/Resources/FOSUserBundle/views/Security/login_content.html.twig");
    }
}
