<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_1d4a555be2405258b9dbf13d6d8439b9d07df48511f425ad828916805149e8bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <!-- CSS
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" />-->
    <!-- Fonts -->
    <link rel=\"dns-prefetch\" href=\"https://fonts.gstatic.com\">
    <link href=\"https://fonts.googleapis.com/css?family=Raleway:300,400,600\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\">
    <!-- Bootstrap -->
    <link href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js\" rel=\"stylesheet\">
    <link href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js\" rel=\"stylesheet\">
    ";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "    <style>
        body { 
            font-family: 'Raleway', sans-serif; 
            background: #dbdfeb;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #E2E2E2, #dbdfeb);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #E2E2E2, #dbdfeb); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */            
        }
        a { color: #0000F0; }
        a:hover { text-decoration: none; }
        #wrapper { background: #f8f9fa; margin: 2em auto; max-width: 500px; width: 95%; }
        #container { padding: 1em; text-align: justify; }
    </style>
</head>

<body>
";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 37
        $this->displayBlock('javascripts', $context, $blocks);
        // line 38
        echo "</body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "High-Tech";
    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 17
        echo "    ";
    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        // line 34
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 35
        echo "    ";
    }

    // line 37
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 37,  98 => 35,  91 => 34,  88 => 33,  84 => 17,  81 => 16,  75 => 5,  70 => 38,  68 => 37,  66 => 33,  49 => 18,  47 => 16,  35 => 7,  30 => 5,  24 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@FOSUser/layout.html.twig", "/opt/lampp/htdocs/High-Tech/app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
