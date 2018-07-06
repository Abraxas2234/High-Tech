<?php

/* base.html.twig */
class __TwigTemplate_a38ac4c9c9e97f092770b0dda8d3ecd5443d9a04978408d3415aff22b7a77d35 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
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
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 8
        echo "    </head>
    <header>
        ";
        // line 10
        $this->displayBlock('header', $context, $blocks);
        // line 11
        echo "    </header>
    <body>
        ";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 14
        echo "    </body>
    <footer class=\"footer navbar-dark\"> ";
        // line 15
        $this->displayBlock('footer', $context, $blocks);
        echo " </footer>
    ";
        // line 16
        $this->displayBlock('javascripts', $context, $blocks);
        // line 17
        echo "</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "        ";
    }

    // line 10
    public function block_header($context, array $blocks = array())
    {
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
    }

    // line 15
    public function block_footer($context, array $blocks = array())
    {
        echo " ";
    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  95 => 16,  89 => 15,  84 => 13,  79 => 10,  75 => 7,  72 => 6,  66 => 5,  62 => 17,  60 => 16,  56 => 15,  53 => 14,  51 => 13,  47 => 11,  45 => 10,  41 => 8,  39 => 6,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base.html.twig", "/Users/dukeshow/rendu/Projets-en-cours/High-Tech/app/Resources/views/base.html.twig");
    }
}
