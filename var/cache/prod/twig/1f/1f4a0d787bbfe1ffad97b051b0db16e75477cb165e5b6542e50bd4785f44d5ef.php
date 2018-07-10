<?php

/* catalog/product.html.twig */
class __TwigTemplate_40f89db2a471629ab11c3f891959ef933b248841b00cd7c24f4fac3e1064c1ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "catalog/product.html.twig", 1);
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
            if (($this->getAttribute($context["product"], "id", array()) == ($context["id"] ?? null))) {
                // line 24
                echo "      <div class=\"productbox\">

        <h3>";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
                echo "</h3>
        <img src=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("assets/img/" . $this->getAttribute($context["product"], "getProductBrand", array()))), "html", null, true);
                echo "\"/><br>
        <p>";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "productDescription", array()), "html", null, true);
                echo "</p>
        <p>Prix:
          ";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "productPrice", array()), "html", null, true);
                echo "
          €</p>
        <p>Stock:
          ";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "productStock", array()), "html", null, true);
                echo "</p>
        <p>Poid:
          ";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "productWeight", array()), "html", null, true);
                echo "</p>
        <p>Dimensions:
          ";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "productDimensions", array()), "html", null, true);
                echo "</p>
        <p>Promo:
          ";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "productDiscount", array()), "html", null, true);
                echo "</p>

        ";
                // line 41
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["casings"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["casing"]) {
                    // line 42
                    echo "          ";
                    if (($this->getAttribute($context["product"], "id", array()) == $this->getAttribute($context["casing"], "casingId", array()))) {
                        // line 43
                        echo "            <p>Format du boitier:
              ";
                        // line 44
                        echo twig_escape_filter($this->env, $this->getAttribute($context["casing"], "casingFormat", array()), "html", null, true);
                        echo "</p>
            <p>Couleur extérieure:
              ";
                        // line 46
                        echo twig_escape_filter($this->env, $this->getAttribute($context["casing"], "casingColor", array()), "html", null, true);
                        echo "</p>
            <p>Matériaux:
              ";
                        // line 48
                        echo twig_escape_filter($this->env, $this->getAttribute($context["casing"], "casingMaterial", array()), "html", null, true);
                        echo "</p>
          ";
                    }
                    // line 50
                    echo "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['casing'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 51
                echo "
        ";
                // line 52
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["cpus"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["cpu"]) {
                    if (($this->getAttribute($context["product"], "id", array()) == $this->getAttribute($context["cpu"], "cpuId", array()))) {
                        // line 53
                        echo "          <p>Nombre de coeurs:
            ";
                        // line 54
                        echo twig_escape_filter($this->env, $this->getAttribute($context["cpu"], "cpuCoreNumber", array()), "html", null, true);
                        echo "</p>
          <p>Fréquence:
            ";
                        // line 56
                        echo twig_escape_filter($this->env, $this->getAttribute($context["cpu"], "cpuFrequency", array()), "html", null, true);
                        echo "</p>
          <p>Cache total:
            ";
                        // line 58
                        echo twig_escape_filter($this->env, $this->getAttribute($context["cpu"], "cpuCache", array()), "html", null, true);
                        echo "</p>
          <p>Micro-architecture:
            ";
                        // line 60
                        echo twig_escape_filter($this->env, $this->getAttribute($context["cpu"], "cpuArchitecture", array()), "html", null, true);
                        echo "</p>
          <p>Socket:
            ";
                        // line 62
                        echo twig_escape_filter($this->env, $this->getAttribute($context["cpu"], "cpuSocket", array()), "html", null, true);
                        echo "</p>
          <p>Valeur de dissipation:
            ";
                        // line 64
                        echo twig_escape_filter($this->env, $this->getAttribute($context["cpu"], "cpuThermalDissipation", array()), "html", null, true);
                        echo "</p>
        ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cpu'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 66
                echo "
        ";
                // line 67
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["gpus"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["gpu"]) {
                    // line 68
                    echo "          ";
                    if (($this->getAttribute($context["product"], "id", array()) == $this->getAttribute($context["gpu"], "gpuId", array()))) {
                        // line 69
                        echo "            <p>Puce graphique:
              ";
                        // line 70
                        echo twig_escape_filter($this->env, $this->getAttribute($context["gpu"], "gpuModel", array()), "html", null, true);
                        echo "</p>
            <p>Fréquence:
              ";
                        // line 72
                        echo twig_escape_filter($this->env, $this->getAttribute($context["gpu"], "gpuFrequency", array()), "html", null, true);
                        echo "</p>
            <p>Interface:
              ";
                        // line 74
                        echo twig_escape_filter($this->env, $this->getAttribute($context["gpu"], "gpuInterface", array()), "html", null, true);
                        echo "</p>
            <p>Quantité mémoire:
              ";
                        // line 76
                        echo twig_escape_filter($this->env, $this->getAttribute($context["gpu"], "gpuMemory", array()), "html", null, true);
                        echo "</p>
            <p>Fréquence mémoire:
              ";
                        // line 78
                        echo twig_escape_filter($this->env, $this->getAttribute($context["gpu"], "gpuMemoryFrequency", array()), "html", null, true);
                        echo "</p>
            <p>Détails:
              ";
                        // line 80
                        echo twig_escape_filter($this->env, $this->getAttribute($context["gpu"], "gpuDetails", array()), "html", null, true);
                        echo "</p>
          ";
                    }
                    // line 82
                    echo "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gpu'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 83
                echo "
        ";
                // line 84
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["motherboards"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["motherboard"]) {
                    // line 85
                    echo "          ";
                    if (($this->getAttribute($context["product"], "id", array()) == $this->getAttribute($context["motherboard"], "motherboardId", array()))) {
                        // line 86
                        echo "            <p>Socket:
              ";
                        // line 87
                        echo twig_escape_filter($this->env, $this->getAttribute($context["motherboard"], "motherboardSocket", array()), "html", null, true);
                        echo "</p>
            <p>Contrôleur principal:
              ";
                        // line 89
                        echo twig_escape_filter($this->env, $this->getAttribute($context["motherboard"], "motherboardChipset", array()), "html", null, true);
                        echo "</p>
            <p>Port(s) PCI-Express 16x:
              ";
                        // line 91
                        echo twig_escape_filter($this->env, $this->getAttribute($context["motherboard"], "motherboardPorts", array()), "html", null, true);
                        echo "</p>
            <p>Fréquence mémoire maximale:
              ";
                        // line 93
                        echo twig_escape_filter($this->env, $this->getAttribute($context["motherboard"], "motherboardMaxFreq", array()), "html", null, true);
                        echo "</p>
            <p>Vitesse du contrôleur Serial-ATA:
              ";
                        // line 95
                        echo twig_escape_filter($this->env, $this->getAttribute($context["motherboard"], "motherboardSataController", array()), "html", null, true);
                        echo "</p>
          ";
                    }
                    // line 97
                    echo "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['motherboard'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 98
                echo "
        ";
                // line 99
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["powers"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["power"]) {
                    // line 100
                    echo "          ";
                    if (($this->getAttribute($context["product"], "id", array()) == $this->getAttribute(($context["powersupply"] ?? null), "powerSupplyId", array()))) {
                        // line 101
                        echo "            <p>Puissance:
              ";
                        // line 102
                        echo twig_escape_filter($this->env, $this->getAttribute($context["power"], "powerSupplyPower", array()), "html", null, true);
                        echo "</p>
            <p>Modulaire:
              ";
                        // line 104
                        echo twig_escape_filter($this->env, $this->getAttribute($context["power"], "powerSupplyModularity", array()), "html", null, true);
                        echo "</p>
            <p>Certification 80+:
              ";
                        // line 106
                        echo twig_escape_filter($this->env, $this->getAttribute($context["power"], "powerSupplyCertification", array()), "html", null, true);
                        echo "</p>
          ";
                    }
                    // line 108
                    echo "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['power'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 109
                echo "
        ";
                // line 110
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["rams"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["ram"]) {
                    // line 111
                    echo "          ";
                    if (($this->getAttribute($context["product"], "id", array()) == $this->getAttribute($context["ram"], "ramId", array()))) {
                        // line 112
                        echo "            <p>Type:
              ";
                        // line 113
                        echo twig_escape_filter($this->env, $this->getAttribute($context["ram"], "ramType", array()), "html", null, true);
                        echo "</p>
            <p>Capacité totale:
              ";
                        // line 115
                        echo twig_escape_filter($this->env, $this->getAttribute($context["ram"], "ramCapacity", array()), "html", null, true);
                        echo "</p>
            <p>Fréquence:
              ";
                        // line 117
                        echo twig_escape_filter($this->env, $this->getAttribute($context["ram"], "ramFrequency", array()), "html", null, true);
                        echo "</p>
            <p>Timings:
              ";
                        // line 119
                        echo twig_escape_filter($this->env, $this->getAttribute($context["ram"], "ramTimings", array()), "html", null, true);
                        echo "</p>
            <p>Tension (certification):
              ";
                        // line 121
                        echo twig_escape_filter($this->env, $this->getAttribute($context["ram"], "ramTension", array()), "html", null, true);
                        echo "</p>
          ";
                    }
                    // line 123
                    echo "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ram'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 124
                echo "
      </div>
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        echo "  </div>
";
    }

    public function getTemplateName()
    {
        return "catalog/product.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  361 => 127,  352 => 124,  346 => 123,  341 => 121,  336 => 119,  331 => 117,  326 => 115,  321 => 113,  318 => 112,  315 => 111,  311 => 110,  308 => 109,  302 => 108,  297 => 106,  292 => 104,  287 => 102,  284 => 101,  281 => 100,  277 => 99,  274 => 98,  268 => 97,  263 => 95,  258 => 93,  253 => 91,  248 => 89,  243 => 87,  240 => 86,  237 => 85,  233 => 84,  230 => 83,  224 => 82,  219 => 80,  214 => 78,  209 => 76,  204 => 74,  199 => 72,  194 => 70,  191 => 69,  188 => 68,  184 => 67,  181 => 66,  172 => 64,  167 => 62,  162 => 60,  157 => 58,  152 => 56,  147 => 54,  144 => 53,  139 => 52,  136 => 51,  130 => 50,  125 => 48,  120 => 46,  115 => 44,  112 => 43,  109 => 42,  105 => 41,  100 => 39,  95 => 37,  90 => 35,  85 => 33,  79 => 30,  74 => 28,  70 => 27,  66 => 26,  62 => 24,  57 => 23,  53 => 21,  50 => 20,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "catalog/product.html.twig", "/opt/lampp/htdocs/High-Tech/app/Resources/views/catalog/product.html.twig");
    }
}
