<?php

/* ProduitBundle:produit:rechercheP.html.twig */
class __TwigTemplate_93952eb3442de983e178e5a60ac687bb1331e5406020b1b0b2c64043d83807d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ProduitBundle::layout2.html.twig", "ProduitBundle:produit:rechercheP.html.twig", 1);
        $this->blocks = array(
            'x' => array($this, 'block_x'),
            't' => array($this, 'block_t'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ProduitBundle::layout2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_x($context, array $blocks = array())
    {
        // line 3
        echo "    <form method=\"POST\" class=\"navbar-form navbar-left navbar-main-search\" >
        <div class=\"form-group\">
            <input name=\"nomP\" class=\"form-control\" type=\"text\" placeholder=\"rechercher un produit...\" />
        </div>
        <a class=\"fa fa-search navbar-main-search-submit\" href=\"#\"></a>
    </form>
";
    }

    // line 10
    public function block_t($context, array $blocks = array())
    {
        // line 11
        echo "    <div name=\"produit\" class=\"box-lg\">
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Produit"]) ? $context["Produit"] : $this->getContext($context, "Produit")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 13
            echo "    <fieldset >
        <legend >Categorie :";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "categorie", array()), "html", null, true);
            echo "</legend>
        <label><b> Produit :</b></label><label name=\"nomP\">";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "nomP", array()), "html", null, true);
            echo "</label><br>
        <label><b>Description :</b></label><label name=\"decription\">";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "description", array()), "html", null, true);
            echo "</label><br>
        <label><b>Prix :</b></label><label name=\"prix\">";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "prix", array()), "html", null, true);
            echo "</label><br>
          <label><b>TVA :</b></label><label name=\"prix\">";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "tva", array()), "html", null, true);
            echo "</label><br>
        <label><b>Reduction :</b></label><label name=\"prix\">";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "reduction", array()), "html", null, true);
            echo "</label><br>
        <label><b>Quantite :</b></label><label name=\"prix\">";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "quantite", array()), "html", null, true);
            echo "</label><br>
        <label><b>Prix avec reduction:</b></label><label name=\"prix\">";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "prix1", array()), "html", null, true);
            echo "</label><br>
        <label><b>Prix final avec tva:</b></label><label name=\"prix\">";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "prix2", array()), "html", null, true);
            echo "</label><br>
        <label><b>Gouvernorat:</b></label><label name=\"gouvernorat\">";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "zone", array()), "nom", array()), "html", null, true);
            echo "</label><br>
   
    </fieldset>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "
    </div>

";
    }

    public function getTemplateName()
    {
        return "ProduitBundle:produit:rechercheP.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 28,  91 => 23,  87 => 22,  83 => 21,  79 => 20,  75 => 19,  71 => 18,  67 => 17,  63 => 16,  59 => 15,  55 => 14,  52 => 13,  48 => 12,  45 => 11,  42 => 10,  32 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends 'ProduitBundle::layout2.html.twig' %}*/
/* {% block x %}*/
/*     <form method="POST" class="navbar-form navbar-left navbar-main-search" >*/
/*         <div class="form-group">*/
/*             <input name="nomP" class="form-control" type="text" placeholder="rechercher un produit..." />*/
/*         </div>*/
/*         <a class="fa fa-search navbar-main-search-submit" href="#"></a>*/
/*     </form>*/
/* {% endblock  %}*/
/* {% block t %}*/
/*     <div name="produit" class="box-lg">*/
/*         {% for p in Produit %}*/
/*     <fieldset >*/
/*         <legend >Categorie :{{p.categorie}}</legend>*/
/*         <label><b> Produit :</b></label><label name="nomP">{{p.nomP}}</label><br>*/
/*         <label><b>Description :</b></label><label name="decription">{{p.description}}</label><br>*/
/*         <label><b>Prix :</b></label><label name="prix">{{p.prix}}</label><br>*/
/*           <label><b>TVA :</b></label><label name="prix">{{p.tva}}</label><br>*/
/*         <label><b>Reduction :</b></label><label name="prix">{{p.reduction}}</label><br>*/
/*         <label><b>Quantite :</b></label><label name="prix">{{p.quantite}}</label><br>*/
/*         <label><b>Prix avec reduction:</b></label><label name="prix">{{p.prix1}}</label><br>*/
/*         <label><b>Prix final avec tva:</b></label><label name="prix">{{p.prix2}}</label><br>*/
/*         <label><b>Gouvernorat:</b></label><label name="gouvernorat">{{p.zone.nom}}</label><br>*/
/*    */
/*     </fieldset>*/
/* */
/* {% endfor %}*/
/* */
/*     </div>*/
/* */
/* {% endblock  %}*/
/* */
/* */
