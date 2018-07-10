<?php

/* layout.html.twig */
class __TwigTemplate_4a9ce0e7d3534baded6a448762068caebec79a2b98e77a7c7addb65228c789d2 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "layout.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
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
    }

    // line 10
    public function block_header($context, array $blocks = array())
    {
        // line 11
        echo "    <nav class=\"navbar navbar-expand-lg navbar-dark\">
        <div class=\"container\">
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse row\" id=\"navbarSupportedContent\">
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
                            <a class=\"nav-link\" href=\"#\">Souhaits</a>
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
    }

    // line 64
    public function block_body($context, array $blocks = array())
    {
        // line 65
        echo "
";
    }

    // line 68
    public function block_footer($context, array $blocks = array())
    {
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
    }

    // line 106
    public function block_javascripts($context, array $blocks = array())
    {
        // line 107
        echo "    <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js\" integrity=\"sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ\" crossorigin=\"anonymous\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js\" integrity=\"sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm\" crossorigin=\"anonymous\"></script>
";
    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 107,  159 => 106,  118 => 68,  113 => 65,  110 => 64,  55 => 11,  52 => 10,  45 => 6,  39 => 4,  36 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layout.html.twig", "/Users/dukeshow/rendu/Projets-en-cours/High-Tech/app/Resources/views/layout.html.twig");
    }
}