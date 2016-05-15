<?php

/* ProduitBundle:produit:listerP.html.twig */
class __TwigTemplate_0200936b7898efefb87a8cd8551070acd25bc54c9e5123ad5e1f2069e0c680b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ProduitBundle::layout2.html.twig", "ProduitBundle:produit:listerP.html.twig", 1);
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
        echo "

 <form method=\"POST\" class=\"navbar-form navbar-left navbar-main-search\" >
                        <div class=\"form-group\">
                            <input name=\"nomService\" class=\"form-control\" type=\"text\" placeholder=\"rechercher un produit...\" />
                        </div>
                      <a class=\"fa fa-search navbar-main-search-submit\" href=\"#\"></a>
                    </form>
";
    }

    // line 12
    public function block_t($context, array $blocks = array())
    {
        // line 13
        echo "  <header class=\"page-header\"><h1>Mes Produits ajoutés</h1>
  </header>
<div name=\"Service\" class=\"box-lg\">
";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Produit"]) ? $context["Produit"] : $this->getContext($context, "Produit")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 17
            echo " <fieldset >
     <legend >Categorie :";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "categorie", array()), "html", null, true);
            echo "</legend>
        <label><b> Produit :</b></label><label name=\"nomP\">";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "nomP", array()), "html", null, true);
            echo "</label><br>
        <label><b>Description :</b></label><label name=\"decription\">";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "description", array()), "html", null, true);
            echo "</label><br>
        <label><b>Prix :</b></label><label name=\"prix\">";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "prix", array()), "html", null, true);
            echo "</label><br>
          <label><b>TVA :</b></label><label name=\"prix\">";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "tva", array()), "html", null, true);
            echo "</label><br>
        <label><b>Reduction :</b></label><label name=\"prix\">";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "reduction", array()), "html", null, true);
            echo "</label><br>
        <label><b>Quantite :</b></label><label name=\"prix\">";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "quantite", array()), "html", null, true);
            echo "</label><br>
        <label><b>Prix avec reduction:</b></label><label name=\"prix\">";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "prix1", array()), "html", null, true);
            echo "</label><br>
        <label><b>Prix final avec tva:</b></label><label name=\"prix\">";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "prix2", array()), "html", null, true);
            echo "</label><br>
        <label><b>Gouvernorat:</b></label><label name=\"gouvernorat\">";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "zone", array()), "nom", array()), "html", null, true);
            echo "</label><br>

 </fieldset >
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "ProduitBundle:produit:listerP.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 31,  95 => 27,  91 => 26,  87 => 25,  83 => 24,  79 => 23,  75 => 22,  71 => 21,  67 => 20,  63 => 19,  59 => 18,  56 => 17,  52 => 16,  47 => 13,  44 => 12,  32 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends 'ProduitBundle::layout2.html.twig' %}*/
/* {% block x %}*/
/* */
/* */
/*  <form method="POST" class="navbar-form navbar-left navbar-main-search" >*/
/*                         <div class="form-group">*/
/*                             <input name="nomService" class="form-control" type="text" placeholder="rechercher un produit..." />*/
/*                         </div>*/
/*                       <a class="fa fa-search navbar-main-search-submit" href="#"></a>*/
/*                     </form>*/
/* {% endblock  %}*/
/* {% block t %}*/
/*   <header class="page-header"><h1>Mes Produits ajoutés</h1>*/
/*   </header>*/
/* <div name="Service" class="box-lg">*/
/* {% for p in Produit%}*/
/*  <fieldset >*/
/*      <legend >Categorie :{{p.categorie}}</legend>*/
/*         <label><b> Produit :</b></label><label name="nomP">{{p.nomP}}</label><br>*/
/*         <label><b>Description :</b></label><label name="decription">{{p.description}}</label><br>*/
/*         <label><b>Prix :</b></label><label name="prix">{{p.prix}}</label><br>*/
/*           <label><b>TVA :</b></label><label name="prix">{{p.tva}}</label><br>*/
/*         <label><b>Reduction :</b></label><label name="prix">{{p.reduction}}</label><br>*/
/*         <label><b>Quantite :</b></label><label name="prix">{{p.quantite}}</label><br>*/
/*         <label><b>Prix avec reduction:</b></label><label name="prix">{{p.prix1}}</label><br>*/
/*         <label><b>Prix final avec tva:</b></label><label name="prix">{{p.prix2}}</label><br>*/
/*         <label><b>Gouvernorat:</b></label><label name="gouvernorat">{{p.zone.nom}}</label><br>*/
/* */
/*  </fieldset >*/
/* {% endfor %}*/
/* </div>*/
/* {% endblock  %}*/
/* */
/* */
/* */
