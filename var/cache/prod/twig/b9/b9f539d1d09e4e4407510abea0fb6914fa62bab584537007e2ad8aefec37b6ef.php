<?php

/* catalog/index.html.twig */
class __TwigTemplate_3ca7663008604db7c6eb32f50f176541304dcf2b466c83f022266d994f2202dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "catalog/index.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
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
        echo "  <style>
    .productbox {
      margin: 10px;
      padding: 20px 7px;
      text-align: center;
      border: 2px black solid;
      border-radius: 9px;
    }
    button {
      border-radius: 9px;
      margin: 15px 7px 7px;
      padding: 5px;
    }
  </style>
";
    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        // line 21
        echo "  <div id=\"quizbox\">
    ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 23
            echo "      <div class=\"productbox\">
        <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category", array("id" => $this->getAttribute($context["categorie"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "name", array()), "html", null, true);
            echo "</a><br>
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "<br>

  ";
    }

    public function getTemplateName()
    {
        return "catalog/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 26,  63 => 24,  60 => 23,  56 => 22,  53 => 21,  50 => 20,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "catalog/index.html.twig", "/opt/lampp/htdocs/High-Tech/app/Resources/views/catalog/index.html.twig");
    }
}
