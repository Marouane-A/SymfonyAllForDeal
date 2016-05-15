<?php

/* ProduitBundle:carteFid:afficheCarte.html.twig */
class __TwigTemplate_15aa0f756b8cf14f0ff86c309459cb96340aa736197e88b96c943cb5e8de1b13 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ProduitBundle::layout2.html.twig", "ProduitBundle:carteFid:afficheCarte.html.twig", 1);
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
        echo " <header class=\"page-header\"><h1>Les produits disponibles</h1>
  </header>
    <div name=\"Carte fidélité\" class=\"box-lg\">
";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["carteFid"]) ? $context["carteFid"] : $this->getContext($context, "carteFid")));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 7
            echo "    <fieldset >
        
    
        <label><b>Numéro de carte </b></label><label name=\"numCarte\"> ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "numCarte", array()), "html", null, true);
            echo "</label><br>
           <label><b>Date de validation </b></label><label name=\"dateValidation\">  ";
            // line 11
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["c"], "validite", array()), "m/d/Y"), "html", null, true);
            echo "</label><br>
           <label><b>Points bonus </b></label><label name=\"point bonus\"> ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "nbPoint", array()), "html", null, true);
            echo "</label><br><br>
            <a class=\"btn btn-lg btn-ghost btn-black\" href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modify", array("id" => $this->getAttribute($context["c"], "id", array()))), "html", null, true);
            echo "\">Modifier </a>
            <a class=\"btn btn-lg btn-ghost btn-black\" href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("delete", array("id" => $this->getAttribute($context["c"], "id", array()))), "html", null, true);
            echo "\">Supprimer </a> <br>
            <br>
    </fieldset>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "ProduitBundle:carteFid:afficheCarte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 19,  61 => 14,  57 => 13,  53 => 12,  49 => 11,  45 => 10,  40 => 7,  36 => 6,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'ProduitBundle::layout2.html.twig' %}*/
/* {% block t %}*/
/*  <header class="page-header"><h1>Les produits disponibles</h1>*/
/*   </header>*/
/*     <div name="Carte fidélité" class="box-lg">*/
/* {% for c in carteFid %}*/
/*     <fieldset >*/
/*         */
/*     */
/*         <label><b>Numéro de carte </b></label><label name="numCarte"> {{c.numCarte}}</label><br>*/
/*            <label><b>Date de validation </b></label><label name="dateValidation">  {{c.validite|date('m/d/Y')}}</label><br>*/
/*            <label><b>Points bonus </b></label><label name="point bonus"> {{c.nbPoint}}</label><br><br>*/
/*             <a class="btn btn-lg btn-ghost btn-black" href="{{path('modify', {'id':c.id})}}">Modifier </a>*/
/*             <a class="btn btn-lg btn-ghost btn-black" href="{{path('delete', {'id':c.id})}}">Supprimer </a> <br>*/
/*             <br>*/
/*     </fieldset>*/
/* */
/* {% endfor %}*/
/*     </div>*/
/* {% endblock %}*/
/* */
