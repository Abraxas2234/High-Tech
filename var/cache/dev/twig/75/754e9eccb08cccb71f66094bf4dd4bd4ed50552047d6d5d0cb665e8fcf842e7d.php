<?php

/* homepage/index.html.twig */
class __TwigTemplate_e7907f67c39b4e0b7076c266a0b75f62ede89c4f195a10d350eddefdfd157493 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("homepage/layout.html.twig", "homepage/index.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "homepage/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "homepage/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "homepage/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "    ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div id=\"welcome pcmr\" class=\"pcmr\">
        <h1 class=\"ntm\" id=\"pcmr\">Soldes d'été~~~~~~~~~~~~~~~~~~~~</h1>
    </div>
    <div class=\"divider\">
    </div>
    <div class=\"background\">
        <div class=\"container\">
            <div class=\"box\" id=\"mobo\">
                Motherboards
            </div>

            <div class=\"box\" id=\"proco\">
                Processors
            </div>

            <div class=\"box\" id=\"cg\">
                Graphic Cards
            </div>

            <div class=\"box\" id=\"case\">
                Case
            </div>

            <div class=\"box\" id=\"psu\">
                Power supplies
            </div>

            <div class=\"box\" id=\"ram\">
                RAM
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 43
    public function block_footer($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 44
        echo "    ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 47
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 48
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <style>

        html { font-family: roboto; }
        #welcome { display: flex; justify-content: center; align-items: center; }
        .ntm { height: 600px; padding: 250px 0; font-family: raleway; color: white; align-self: center; padding-left: 500px; }

        .box { height: 150px; display: flex; justify-content: space-evenly; font-size: 25px; padding-top: 80px; padding-bottom: 130px; color: white; }

        .background { background-color: #0084b4; }

        #mobo { background-image: url(";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/mobo_wallpaper.jpg"), "html", null, true);
        echo "); background-position: center; }
        #proco { background-image: url(";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/proco_wallpaper.jpg"), "html", null, true);
        echo "); background-position: center; }
        #cg { background-image: url(";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/cg_wallpaper.jpg"), "html", null, true);
        echo "); background-position: center; }
        #case { background-image: url(";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/case_wallpaper.jpg"), "html", null, true);
        echo "); background-repeat: no-repeat;
             background-position: left; }
        #psu { background-image: url(";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/psu_wallpaper.jpg"), "html", null, true);
        echo "); background-position: center; }
        #ram { background-image: url(";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/ram_wallpaper.png"), "html", null, true);
        echo "); background-position: right; background-repeat: no-repeat; }
        #pcmr { background-image: url(";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/pcmr_wallpaper.jpg"), "html", null, true);
        echo "); }

        .divider { height: 100px; background-color: #0084b4; margin-top: -8px; }

    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 73
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 74
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "homepage/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 74,  211 => 73,  195 => 66,  191 => 65,  187 => 64,  182 => 62,  178 => 61,  174 => 60,  170 => 59,  155 => 48,  146 => 47,  133 => 44,  124 => 43,  79 => 8,  70 => 7,  57 => 4,  48 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'homepage/layout.html.twig' %}

{% block header %}
    {{ parent() }}
{% endblock %}

{% block body %}
    {{ parent() }}
    <div id=\"welcome pcmr\" class=\"pcmr\">
        <h1 class=\"ntm\" id=\"pcmr\">Soldes d'été~~~~~~~~~~~~~~~~~~~~</h1>
    </div>
    <div class=\"divider\">
    </div>
    <div class=\"background\">
        <div class=\"container\">
            <div class=\"box\" id=\"mobo\">
                Motherboards
            </div>

            <div class=\"box\" id=\"proco\">
                Processors
            </div>

            <div class=\"box\" id=\"cg\">
                Graphic Cards
            </div>

            <div class=\"box\" id=\"case\">
                Case
            </div>

            <div class=\"box\" id=\"psu\">
                Power supplies
            </div>

            <div class=\"box\" id=\"ram\">
                RAM
            </div>
        </div>
    </div>
{% endblock %}

{% block footer %}
    {{ parent() }}
{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>

        html { font-family: roboto; }
        #welcome { display: flex; justify-content: center; align-items: center; }
        .ntm { height: 600px; padding: 250px 0; font-family: raleway; color: white; align-self: center; padding-left: 500px; }

        .box { height: 150px; display: flex; justify-content: space-evenly; font-size: 25px; padding-top: 80px; padding-bottom: 130px; color: white; }

        .background { background-color: #0084b4; }

        #mobo { background-image: url({{ asset('assets/img/mobo_wallpaper.jpg') }}); background-position: center; }
        #proco { background-image: url({{ asset('assets/img/proco_wallpaper.jpg') }}); background-position: center; }
        #cg { background-image: url({{ asset('assets/img/cg_wallpaper.jpg') }}); background-position: center; }
        #case { background-image: url({{ asset('assets/img/case_wallpaper.jpg') }}); background-repeat: no-repeat;
             background-position: left; }
        #psu { background-image: url({{ asset('assets/img/psu_wallpaper.jpg') }}); background-position: center; }
        #ram { background-image: url({{ asset('assets/img/ram_wallpaper.png') }}); background-position: right; background-repeat: no-repeat; }
        #pcmr { background-image: url({{ asset('assets/img/pcmr_wallpaper.jpg') }}); }

        .divider { height: 100px; background-color: #0084b4; margin-top: -8px; }

    </style>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
{% endblock %}
", "homepage/index.html.twig", "/Users/maxime/Documents/webac/delivery/Semestre_2/Projet_10/High-Tech/app/Resources/views/homepage/index.html.twig");
    }
}
