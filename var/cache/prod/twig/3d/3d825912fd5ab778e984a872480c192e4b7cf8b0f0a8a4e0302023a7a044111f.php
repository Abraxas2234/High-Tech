<?php

/* @FOSUser/Security/login_content.html.twig */
class __TwigTemplate_2162efe42f1d200cd0e31d5af32dae2d2a47e7fa9f7a43dda2d9242f73c50641 extends Twig_Template
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
        // line 2
        echo "
";
        // line 3
        if (($context["error"] ?? null)) {
            // line 4
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? null), "messageKey", array()), $this->getAttribute(($context["error"] ?? null), "messageData", array()), "security"), "html", null, true);
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
        if (($context["csrf_token"] ?? null)) {
            // line 10
            echo "            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, ($context["csrf_token"] ?? null), "html", null, true);
            echo "\" />
        ";
        }
        // line 12
        echo "    <h5 style=\"font-size: 16px;\" class=\"form-signin-heading\">Se connecter</h5>
    <input style=\"margin-bottom: 0.5rem; font-size: 15px;\" class=\"form-control\" placeholder=\"Pseudo\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
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
        return array (  65 => 20,  60 => 18,  54 => 15,  49 => 13,  46 => 12,  40 => 10,  38 => 9,  34 => 8,  30 => 6,  24 => 4,  22 => 3,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@FOSUser/Security/login_content.html.twig", "/opt/lampp/htdocs/High-Tech/app/Resources/FOSUserBundle/views/Security/login_content.html.twig");
    }
}
