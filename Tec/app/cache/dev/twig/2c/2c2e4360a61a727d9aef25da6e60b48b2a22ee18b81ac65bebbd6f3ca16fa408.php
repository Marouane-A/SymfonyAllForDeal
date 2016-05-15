<?php

/* ProduitBundle:produit:recherchePByType.html.twig */
class __TwigTemplate_7eb72d231980cbca4c9673d6eb0dc8b1041118ae8903272933ec4d5c0e939e75 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ProduitBundle::layout2.html.twig", "ProduitBundle:produit:recherchePByType.html.twig", 1);
        $this->blocks = array(
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
    public function block_t($context, array $blocks = array())
    {
        // line 3
        echo " ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 4
            echo "     <div name=\"Typeproduit\" class=\"box-lg\">
 <fieldset >
    <legend >Categorie :";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "categorie", array()), "html", null, true);
            echo "</legend>
                <label><b> Produit :</b></label><label name=\"nomP\">";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "nomP", array()), "html", null, true);
            echo "</label><br>
                <label><b>Prix sans réduction :</b></label><label name=\"prix\">";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "prix", array()), "html", null, true);
            echo "</label><br>
                <label><b>Reduction :</b></label><label name=\"prix\">";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "reduction", array()), "html", null, true);
            echo "</label><br>
                <label><b>Prix avec reduction:</b></label><label name=\"prix\">";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "prix1", array()), "html", null, true);
            echo "</label><br>
                <label><b>Gouvernorat:</b></label><label name=\"gouvernorat\">";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "zone", array()), "nom", array()), "html", null, true);
            echo "</label><br>
                <a class=\"btn btn-lg btn-ghost btn-black\" href=\"";
            // line 12
            echo $this->env->getExtension('routing')->getPath("produit_afficheP");
            echo "\"> Retourner au produits </a>
          <a class=\"btn btn-lg btn-ghost btn-black\" href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("produit_afficherPS", array("id" => $this->getAttribute($context["p"], "id", array()))), "html", null, true);
            echo "\"> Consulter </a>
 </fieldset >
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo " </div>
";
    }

    public function getTemplateName()
    {
        return "ProduitBundle:produit:recherchePByType.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 16,  68 => 13,  64 => 12,  60 => 11,  56 => 10,  52 => 9,  48 => 8,  44 => 7,  40 => 6,  36 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "ProduitBundle::layout2.html.twig" %}*/
/* {% block t %}*/
/*  {% for p in produit%}*/
/*      <div name="Typeproduit" class="box-lg">*/
/*  <fieldset >*/
/*     <legend >Categorie :{{p.categorie}}</legend>*/
/*                 <label><b> Produit :</b></label><label name="nomP">{{p.nomP}}</label><br>*/
/*                 <label><b>Prix sans réduction :</b></label><label name="prix">{{p.prix}}</label><br>*/
/*                 <label><b>Reduction :</b></label><label name="prix">{{p.reduction}}</label><br>*/
/*                 <label><b>Prix avec reduction:</b></label><label name="prix">{{p.prix1}}</label><br>*/
/*                 <label><b>Gouvernorat:</b></label><label name="gouvernorat">{{p.zone.nom}}</label><br>*/
/*                 <a class="btn btn-lg btn-ghost btn-black" href="{{ path('produit_afficheP') }}"> Retourner au produits </a>*/
/*           <a class="btn btn-lg btn-ghost btn-black" href="{{ path('produit_afficherPS',{'id':p.id}) }}"> Consulter </a>*/
/*  </fieldset >*/
/* {% endfor %}*/
/*  </div>*/
/* {% endblock  %}*/
/* */
