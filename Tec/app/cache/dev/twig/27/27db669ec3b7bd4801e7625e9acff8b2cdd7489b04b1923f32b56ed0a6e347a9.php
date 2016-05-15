<?php

/* ProduitBundle:produit:affichePSForAllUsers.html.twig */
class __TwigTemplate_ba67d280e2e66dbc12c2642253bfdb4618cf1544832545ce3602525922a096f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ProduitBundle::layout2.html.twig", "ProduitBundle:produit:affichePSForAllUsers.html.twig", 1);
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
        echo " <header class=\"page-header\"><h1>Les produits disponibles</h1>
  </header>
    <div name=\"Service\" class=\"box-lg\">
";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Produit"]) ? $context["Produit"] : $this->getContext($context, "Produit")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 17
            echo "    <fieldset >
         ";
            // line 18
            if ($this->getAttribute($context["p"], "media", array())) {
                // line 19
                echo "  ";
                // line 20
                echo "   ";
                echo $this->env->getExtension('sonata_media')->media($this->getAttribute($context["p"], "media", array()), "small", array());
                echo " ";
            }
            // line 22
            echo "        <legend >Categorie :";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "categorie", array()), "html", null, true);
            echo "</legend>
                <label><b> Produit :</b></label><label name=\"nomP\">";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "nomP", array()), "html", null, true);
            echo "</label><br>
                <label><b>Description :</b></label><label name=\"decription\">";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "description", array()), "html", null, true);
            echo "</label><br>
                <label><b>Prix :</b></label><label name=\"prix\">";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "prix", array()), "html", null, true);
            echo "</label><br>
                <label><b>TVA :</b></label><label name=\"prix\">";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "tva", array()), "html", null, true);
            echo "</label><br>
                <label><b>Reduction :</b></label><label name=\"prix\">";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "reduction", array()), "html", null, true);
            echo "</label><br>
                <label><b>Quantite :</b></label><label name=\"prix\">";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "quantite", array()), "html", null, true);
            echo "</label><br>
                <label><b>Prix avec reduction:</b></label><label name=\"prix\">";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "prix1", array()), "html", null, true);
            echo "</label><br>
                <label><b>Prix final avec tva:</b></label><label name=\"prix\">";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "prix2", array()), "html", null, true);
            echo "</label><br>
                <label><b>Gouvernorat:</b></label><label name=\"gouvernorat\">";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "zone", array()), "nom", array()), "html", null, true);
            echo "</label><br>
         
         <a class=\"btn btn-lg btn-ghost btn-black\" href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("produit_affichePForAllUsers", array("id" => $this->getAttribute($context["p"], "id", array()))), "html", null, true);
            echo "\"> Retourner au Produits </a>
       <a class=\"btn btn-lg btn-ghost btn-black\" href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ecommerce_panierAjout", array("id" => $this->getAttribute($context["p"], "id", array()), "nom" => $this->getAttribute($context["p"], "nomP", array()), "prix" => $this->getAttribute($context["p"], "prix", array()))), "html", null, true);
            echo "\"> Ajouter Panier </a>
       
";
            // line 36
            $this->loadTemplate("FOSCommentBundle:Thread:async.html.twig", "ProduitBundle:produit:affichePSForAllUsers.html.twig", 36)->display(array_merge($context, array("id" => $this->getAttribute($context["p"], "id", array()))));
            // line 37
            echo "    </fieldset>

";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "ProduitBundle:produit:affichePSForAllUsers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 40,  134 => 37,  132 => 36,  127 => 34,  123 => 33,  118 => 31,  114 => 30,  110 => 29,  106 => 28,  102 => 27,  98 => 26,  94 => 25,  90 => 24,  86 => 23,  81 => 22,  76 => 20,  74 => 19,  72 => 18,  69 => 17,  52 => 16,  47 => 13,  44 => 12,  32 => 3,  29 => 2,  11 => 1,);
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
/*  <header class="page-header"><h1>Les produits disponibles</h1>*/
/*   </header>*/
/*     <div name="Service" class="box-lg">*/
/* {% for p in Produit %}*/
/*     <fieldset >*/
/*          {% if p.media %}*/
/*   {# render the related thumbnail #}*/
/*    {% media p.media, 'small' %} {# render the media #}*/
/* {% endif %}*/
/*         <legend >Categorie :{{p.categorie}}</legend>*/
/*                 <label><b> Produit :</b></label><label name="nomP">{{p.nomP}}</label><br>*/
/*                 <label><b>Description :</b></label><label name="decription">{{p.description}}</label><br>*/
/*                 <label><b>Prix :</b></label><label name="prix">{{p.prix}}</label><br>*/
/*                 <label><b>TVA :</b></label><label name="prix">{{p.tva}}</label><br>*/
/*                 <label><b>Reduction :</b></label><label name="prix">{{p.reduction}}</label><br>*/
/*                 <label><b>Quantite :</b></label><label name="prix">{{p.quantite}}</label><br>*/
/*                 <label><b>Prix avec reduction:</b></label><label name="prix">{{p.prix1}}</label><br>*/
/*                 <label><b>Prix final avec tva:</b></label><label name="prix">{{p.prix2}}</label><br>*/
/*                 <label><b>Gouvernorat:</b></label><label name="gouvernorat">{{p.zone.nom}}</label><br>*/
/*          */
/*          <a class="btn btn-lg btn-ghost btn-black" href="{{ path('produit_affichePForAllUsers',{'id':p.id}) }}"> Retourner au Produits </a>*/
/*        <a class="btn btn-lg btn-ghost btn-black" href="{{ path('ecommerce_panierAjout',{'id':p.id,'nom':p.nomP,'prix':p.prix}) }}"> Ajouter Panier </a>*/
/*        */
/* {% include 'FOSCommentBundle:Thread:async.html.twig' with {'id': p.id} %}*/
/*     </fieldset>*/
/* */
/* {% endfor %}*/
/* */
/*     </div>*/
/* {% endblock %}*/
/* */
