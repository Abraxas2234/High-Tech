<?php

/* @FOSUser/Security/login_content.html.twig */
class __TwigTemplate_b41afc99d9b9eeae22036bdb6ebc4e797d1d3f48f1ee066e0de947a4436d71ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 4
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 6
        echo "<div id=\"wrapper\">
    <div id=\"container\">
    <form class=\"form-signin\" action=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
        ";
        // line 9
        if (($context["csrf_token"] ?? $this->getContext($context, "csrf_token"))) {
            // line 10
            echo "            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, ($context["csrf_token"] ?? $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\" />
        ";
        }
        // line 12
        echo "    <h5 style=\"font-size: 16px;\" class=\"form-signin-heading\">Se connecter</h5>
    <input style=\"margin-bottom: 0.5rem; font-size: 15px;\" class=\"form-control\" placeholder=\"Pseudo\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" autocomplete=\"username\" />
    <input style=\"margin-bottom: 0.2rem; font-size: 15px;\" class=\"form-control\" placeholder=\"Mot de passe\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" autocomplete=\"current-password\" />    
    <a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_request");
        echo "\" style=\"color: #007bff; font-size: 14px;\">Mot de passe oublié ?</a>    
    <div class=\"checkbox\">
        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
        <label for=\"remember_me\" style=\"font-size: 14px;\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    </div>
    <button style=\"font-size: 15px;\" class=\"btn btn-outline-primary\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
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
        return array (  71 => 20,  66 => 18,  60 => 15,  55 => 13,  52 => 12,  46 => 10,  44 => 9,  40 => 8,  36 => 6,  30 => 4,  28 => 3,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
</div>", "@FOSUser/Security/login_content.html.twig", "/Users/amel/rendu/High-Tech/app/Resources/FOSUserBundle/views/Security/login_content.html.twig");
    }
}
