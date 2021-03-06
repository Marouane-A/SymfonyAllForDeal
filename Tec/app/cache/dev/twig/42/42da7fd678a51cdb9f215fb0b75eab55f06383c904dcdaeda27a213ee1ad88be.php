<?php

/* ProduitBundle:produit:affichePForAllUsers.html.twig */
class __TwigTemplate_13c3a3b42cea14168a8d21d71cab4d7f3b8c833222a9ba06386a43a4a1d229d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ProduitBundle::layout2.html.twig", "ProduitBundle:produit:affichePForAllUsers.html.twig", 1);
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
        echo "    <header class=\"page-header\"><h1>Les produits disponibles</h1>
    </header>
    <div name=\"Service\" class=\"box-lg\">
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Produit"]) ? $context["Produit"] : $this->getContext($context, "Produit")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 17
            echo "            <fieldset >
                
                ";
            // line 19
            echo $this->env->getExtension('sonata_media')->thumbnail($this->getAttribute($context["p"], "media", array()), "small", array());
            echo " 
                <legend >Categorie :";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "categorie", array()), "html", null, true);
            echo "</legend>
                <label><b> Produit :</b></label><label name=\"nomP\">";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "nomP", array()), "html", null, true);
            echo "</label><br>
                <label><b>Prix sans réduction :</b></label><label name=\"prix\">";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "prix", array()), "html", null, true);
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
                <label><b>Gouvernorat:</b></label><label name=\"gouvernorat\">";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "zone", array()), "nom", array()), "html", null, true);
            echo "</label><br>
                <a class=\"btn btn-lg btn-ghost btn-black\" href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("produit_affichePSForAllUsers", array("id" => $this->getAttribute($context["p"], "id", array()))), "html", null, true);
            echo "\"> Consulter </a>
                <a class=\"btn btn-lg btn-ghost btn-black\" href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ecommerce_panierAjout", array("id" => $this->getAttribute($context["p"], "id", array()), "nom" => $this->getAttribute($context["p"], "nomP", array()), "prix" => $this->getAttribute($context["p"], "prix", array()))), "html", null, true);
            echo "\"> Ajouter Panier </a>
            </fieldset>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "ProduitBundle:produit:affichePForAllUsers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 32,  96 => 28,  92 => 27,  88 => 26,  84 => 25,  80 => 24,  76 => 23,  72 => 22,  68 => 21,  64 => 20,  60 => 19,  56 => 17,  52 => 16,  47 => 13,  44 => 12,  32 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends 'ProduitBundle::layout2.html.twig' %}*/
/* {% block x %}*/
/* */
/* */
/*     <form method="POST" class="navbar-form navbar-left navbar-main-search" >*/
/*         <div class="form-group">*/
/*             <input name="nomService" class="form-control" type="text" placeholder="rechercher un produit..." />*/
/*         </div>*/
/*         <a class="fa fa-search navbar-main-search-submit" href="#"></a>*/
/*     </form>*/
/* {% endblock  %}*/
/* {% block t %}*/
/*     <header class="page-header"><h1>Les produits disponibles</h1>*/
/*     </header>*/
/*     <div name="Service" class="box-lg">*/
/*         {% for p in Produit %}*/
/*             <fieldset >*/
/*                 */
/*                 {% thumbnail p.media, 'small' %} */
/*                 <legend >Categorie :{{p.categorie}}</legend>*/
/*                 <label><b> Produit :</b></label><label name="nomP">{{p.nomP}}</label><br>*/
/*                 <label><b>Prix sans réduction :</b></label><label name="prix">{{p.prix}}</label><br>*/
/*                 <label><b>Reduction :</b></label><label name="prix">{{p.reduction}}</label><br>*/
/*                 <label><b>Quantite :</b></label><label name="prix">{{p.quantite}}</label><br>*/
/*                 <label><b>Prix avec reduction:</b></label><label name="prix">{{p.prix1}}</label><br>*/
/*                 <label><b>Gouvernorat:</b></label><label name="gouvernorat">{{p.zone.nom}}</label><br>*/
/*                 <a class="btn btn-lg btn-ghost btn-black" href="{{ path('produit_affichePSForAllUsers',{'id':p.id}) }}"> Consulter </a>*/
/*                 <a class="btn btn-lg btn-ghost btn-black" href="{{ path('ecommerce_panierAjout',{'id':p.id,'nom':p.nomP,'prix':p.prix}) }}"> Ajouter Panier </a>*/
/*             </fieldset>*/
/* */
/*         {% endfor %}*/
/*     </div>*/
/* {% endblock %}*/
/* */
