<?php

/* @FOSUser/Profile/show_content.html.twig */
class __TwigTemplate_efdb23bb346e9fb9f5c3bebcd67ca372c8ce0aa808cd902af17bc27f2382eb98 extends Twig_Template
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
        echo "<div id=\"wrapper\">
    <div id=\"container\">
        <div class=\"fos_user_user_show\">
            <p style=\"font-size: 15px;\"><em>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ":</em> ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "username", array()), "html", null, true);
        echo "</p>
            <p style=\"font-size: 15px;\"><em>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ":</em> ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "email", array()), "html", null, true);
        echo "</p>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 6,  24 => 5,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@FOSUser/Profile/show_content.html.twig", "/opt/lampp/htdocs/High-Tech/app/Resources/FOSUserBundle/views/Profile/show_content.html.twig");
    }
}
