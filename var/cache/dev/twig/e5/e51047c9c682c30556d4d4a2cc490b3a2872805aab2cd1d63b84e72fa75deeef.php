<?php

/* homepage/layout.html.twig */
class __TwigTemplate_42b81acc6d50a1b83dbfc38b1d7dad5fae44f15d6530ac3dc77c6d61e3f55f0a extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "homepage/layout.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "homepage/layout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "homepage/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css\" integrity=\"sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/layout.css"), "html", null, true);
        echo "\">
    <link href=\"https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i\" rel=\"stylesheet\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_header($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 11
        echo "    ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
    <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
        <div class=\"container\">
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
            <a class=\"navbar-brand\" href=\"#\">Logo</a>
                <ul class=\"navbar-nav mr-auto\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">Adresse<span class=\"sr-only\"></span></a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">Soldes</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">HT Market</a>
                    </li>
                </ul>
                <form class=\"form-inline my-2 my-lg-0\">
                    <ul class=\"navbar-nav mr-auto\">
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                Catégorie
                            </a>
                            <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                                <a class=\"dropdown-item\" href=\"#\">Cartes Mères</a>
                                <a class=\"dropdown-item\" href=\"#\">Processeurs</a>
                                <a class=\"dropdown-item\" href=\"#\">Cartes Graphiques</a>
                                <a class=\"dropdown-item\" href=\"#\">Barrettes Mémoires</a>
                                <a class=\"dropdown-item\" href=\"#\">Alimentations</a>
                                <a class=\"dropdown-item\" href=\"#\">Boîtiers PC</a>
                            </div>
                        </li>
                    </ul>
                    <input class=\"form-control mr-sm-2 resize-input\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
                    <button class=\"btn btn-outline-primary my-2 my-sm-0\" type=\"submit\">Search</button>
                    <ul class=\"navbar-nav mr-auto\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#\">Mon compte</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#\">Mes listes</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#\">Panier</a>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </nav>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 65
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 66
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 69
    public function block_footer($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 70
        echo "    ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
    <div class=\"text-bar\">
        <a class=\"return-top\" href=\"#\">Retour en haut</a>
    </div>
    <div class=\"container container-footer\">
        <div class=\"row\">
            <div class=\"about-us col-lg-3 col-md-6 col-sm-12\">
                <h5>Mieux nous connaître</h5>
                <a class=\"\" href=\"#\">À propos de High-Tech</a>
                <a class=\"\" href=\"#\">Carrières</a>
                <a class=\"\" href=\"#\">Notre planète et nous</a>
            </div>
            <div class=\"sellout col-lg-3 col-md-6 col-sm-12\">
                <h5>Gagnez de l'argent</h5>
                <a class=\"\" href=\"#\">Vendez sur High-Tech</a>
                <a class=\"\" href=\"#\">Devenez Partenaire</a>
                <a class=\"\" href=\"#\">Faites la promotion de vos produits</a>
            </div>
            <div class=\"howtopay col-lg-3 col-md-6 col-sm-12\">
                <h5>Moyens de paiement</h5>
                <a class=\"\" href=\"#\">Cartes de paiment</a>
                <a class=\"\" href=\"#\">Paiement en 4 fois</a>
                <a class=\"\" href=\"#\">Chèques-cadeaux</a>
                <a class=\"\" href=\"#\">Paypal</a>
            </div>
            <div class=\"help col-lg-3 col-md-6 col-sm-12\">
                <h5>Besoin d'aide ?</h5>
                <a class=\"\" href=\"#\">Suivre vos commandes</a>
                <a class=\"\" href=\"#\">Options de livraison</a>
                <a class=\"\" href=\"#\">Retours ou remplacements</a>
                <a class=\"\" href=\"#\">Informations Marketplace</a>
                <a class=\"\" href=\"#\">Aide</a>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 108
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 109
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js\" integrity=\"sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ\" crossorigin=\"anonymous\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js\" integrity=\"sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm\" crossorigin=\"anonymous\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "homepage/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 109,  227 => 108,  180 => 70,  171 => 69,  158 => 66,  149 => 65,  85 => 11,  76 => 10,  63 => 6,  57 => 4,  48 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css\" integrity=\"sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/layout.css') }}\">
    <link href=\"https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i\" rel=\"stylesheet\">
{% endblock %}

{% block header %}
    {{ parent() }}
    <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
        <div class=\"container\">
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
            <a class=\"navbar-brand\" href=\"#\">Logo</a>
                <ul class=\"navbar-nav mr-auto\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">Adresse<span class=\"sr-only\"></span></a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">Soldes</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">HT Market</a>
                    </li>
                </ul>
                <form class=\"form-inline my-2 my-lg-0\">
                    <ul class=\"navbar-nav mr-auto\">
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                Catégorie
                            </a>
                            <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                                <a class=\"dropdown-item\" href=\"#\">Cartes Mères</a>
                                <a class=\"dropdown-item\" href=\"#\">Processeurs</a>
                                <a class=\"dropdown-item\" href=\"#\">Cartes Graphiques</a>
                                <a class=\"dropdown-item\" href=\"#\">Barrettes Mémoires</a>
                                <a class=\"dropdown-item\" href=\"#\">Alimentations</a>
                                <a class=\"dropdown-item\" href=\"#\">Boîtiers PC</a>
                            </div>
                        </li>
                    </ul>
                    <input class=\"form-control mr-sm-2 resize-input\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
                    <button class=\"btn btn-outline-primary my-2 my-sm-0\" type=\"submit\">Search</button>
                    <ul class=\"navbar-nav mr-auto\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#\">Mon compte</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#\">Mes listes</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#\">Panier</a>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </nav>
{% endblock %}

{% block body %}
    {{ parent() }}
{% endblock %}

{% block footer %}
    {{ parent() }}
    <div class=\"text-bar\">
        <a class=\"return-top\" href=\"#\">Retour en haut</a>
    </div>
    <div class=\"container container-footer\">
        <div class=\"row\">
            <div class=\"about-us col-lg-3 col-md-6 col-sm-12\">
                <h5>Mieux nous connaître</h5>
                <a class=\"\" href=\"#\">À propos de High-Tech</a>
                <a class=\"\" href=\"#\">Carrières</a>
                <a class=\"\" href=\"#\">Notre planète et nous</a>
            </div>
            <div class=\"sellout col-lg-3 col-md-6 col-sm-12\">
                <h5>Gagnez de l'argent</h5>
                <a class=\"\" href=\"#\">Vendez sur High-Tech</a>
                <a class=\"\" href=\"#\">Devenez Partenaire</a>
                <a class=\"\" href=\"#\">Faites la promotion de vos produits</a>
            </div>
            <div class=\"howtopay col-lg-3 col-md-6 col-sm-12\">
                <h5>Moyens de paiement</h5>
                <a class=\"\" href=\"#\">Cartes de paiment</a>
                <a class=\"\" href=\"#\">Paiement en 4 fois</a>
                <a class=\"\" href=\"#\">Chèques-cadeaux</a>
                <a class=\"\" href=\"#\">Paypal</a>
            </div>
            <div class=\"help col-lg-3 col-md-6 col-sm-12\">
                <h5>Besoin d'aide ?</h5>
                <a class=\"\" href=\"#\">Suivre vos commandes</a>
                <a class=\"\" href=\"#\">Options de livraison</a>
                <a class=\"\" href=\"#\">Retours ou remplacements</a>
                <a class=\"\" href=\"#\">Informations Marketplace</a>
                <a class=\"\" href=\"#\">Aide</a>
            </div>
        </div>
    </div>
{% endblock %}


{% block javascripts %}
    {{ parent() }}
    <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js\" integrity=\"sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ\" crossorigin=\"anonymous\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js\" integrity=\"sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm\" crossorigin=\"anonymous\"></script>
{% endblock %}", "homepage/layout.html.twig", "/Users/maxime/Documents/webac/delivery/Semestre_2/Projet_10/High-Tech/app/Resources/views/homepage/layout.html.twig");
    }
}
