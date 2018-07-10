<?php

/* catalog/category.html.twig */
class __TwigTemplate_d250a1f1a103a8ed231f8b42b545077ad0ad6b9bd02a0fbf6d98eb97e71835b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "catalog/category.html.twig", 1);
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
        echo "  <div></div>
  <div id=\"quizbox\">
    ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            if (($this->getAttribute($context["product"], "idCategorie", array()) == ($context["id"] ?? null))) {
                // line 24
                echo "      <div class=\"productbox\">
        <img src=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("assets/img/" . $this->getAttribute($context["product"], "getProductBrand", array()))), "html", null, true);
                echo "\"/><br>
        <a href=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
                echo "</a><br>
        <p>Stock:
          ";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "productStock", array()), "html", null, true);
                echo "</p>
        <p>Prix:
          ";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "productPrice", array()), "html", null, true);
                echo "</p>
      </div>
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "  </div>
";
    }

    public function getTemplateName()
    {
        return "catalog/category.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 33,  81 => 30,  76 => 28,  69 => 26,  65 => 25,  62 => 24,  57 => 23,  53 => 21,  50 => 20,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "catalog/category.html.twig", "/opt/lampp/htdocs/High-Tech/app/Resources/views/catalog/category.html.twig");
    }
}
