<?php

/* ServiceBundle:Service:afficher.html.twig */
class __TwigTemplate_c94a7ce8bbbed573fbf9389b18a75d7e3a8ee860e12a4c2d8fb7e4ef482f2299 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("ServiceBundle::layout2.html.twig", "ServiceBundle:Service:afficher.html.twig", 2);
        $this->blocks = array(
            't' => array($this, 'block_t'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ServiceBundle::layout2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_t($context, array $blocks = array())
    {
        // line 4
        echo "  <header class=\"page-header\"><h1>Les services disponibles</h1>
  </header>
   <div  id=\"results\" class=\"boc-lg\"></div>
<div name=\"Service\" class=\"box-lg\">

 <fieldset >
    
     <legend >Catégorie:<label name=\"type\">";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "type", array()), "html", null, true);
        echo "</label><br></legend>
<label><b>Nom de service:</b></label><label name=\"nom\">";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "nomService", array()), "html", null, true);
        echo "</label><br>
<label><b>Date d'ajout:</b></label><label name=\"dateAjout\">";
        // line 13
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "dateAjout", array()), "m/d/Y"), "html", null, true);
        echo "</label><br>
<label><b>Description :</b></label><label name=\"decription\">";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "description", array()), "html", null, true);
        echo "</label><br>
<label><b>Gouvernerat:</b></label><label name=\"zone\">";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "zone", array()), "nom", array()), "html", null, true);
        echo "</label><br>
<label><b>Etat:</b></label><label name=\"etat\">";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "etat", array()), "html", null, true);
        echo "</label><br>
  <a class=\"btn btn-lg btn-ghost btn-black\" href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("service_offre");
        echo "\"> Retourner au services </a>
<a class=\"btn btn-lg btn-ghost btn-black\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("service_modifier", array("id" => $this->getAttribute((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "id", array()))), "html", null, true);
        echo "\">Modifier</a>
<a class=\"btn btn-lg btn-ghost btn-black\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("service_supprimer", array("id" => $this->getAttribute((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "id", array()))), "html", null, true);
        echo "\">Supprimer </a>
";
        // line 21
        echo "<div name=\"map\" class=\"box-lg\">
Dérniére position ";
        // line 22
        echo $this->env->getExtension('ivory_google_map')->renderMap((isset($context["map"]) ? $context["map"] : $this->getContext($context, "map")));
        echo "
</div>
";
        // line 24
        $this->loadTemplate("FOSCommentBundle:Thread:async.html.twig", "ServiceBundle:Service:afficher.html.twig", 24)->display(array_merge($context, array("id" => $this->getAttribute((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "id", array()))));
        // line 25
        echo " </fieldset >


</div>
<div name=\"Comments\" class=\"box-lg\">
";
        // line 30
        $this->loadTemplate("FOSCommentBundle:Thread:async.html.twig", "ServiceBundle:Service:afficher.html.twig", 30)->display(array_merge($context, array("id" => $this->getAttribute((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "id", array()))));
        // line 31
        echo "    
</div>
     
";
    }

    public function getTemplateName()
    {
        return "ServiceBundle:Service:afficher.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 31,  93 => 30,  86 => 25,  84 => 24,  79 => 22,  76 => 21,  72 => 19,  68 => 18,  64 => 17,  60 => 16,  56 => 15,  52 => 14,  48 => 13,  44 => 12,  40 => 11,  31 => 4,  28 => 3,  11 => 2,);
    }
}
/* */
/* {% extends "ServiceBundle::layout2.html.twig" %}*/
/* {% block t %}*/
/*   <header class="page-header"><h1>Les services disponibles</h1>*/
/*   </header>*/
/*    <div  id="results" class="boc-lg"></div>*/
/* <div name="Service" class="box-lg">*/
/* */
/*  <fieldset >*/
/*     */
/*      <legend >Catégorie:<label name="type">{{c.type}}</label><br></legend>*/
/* <label><b>Nom de service:</b></label><label name="nom">{{c.nomService}}</label><br>*/
/* <label><b>Date d'ajout:</b></label><label name="dateAjout">{{c.dateAjout|date('m/d/Y')}}</label><br>*/
/* <label><b>Description :</b></label><label name="decription">{{c.description}}</label><br>*/
/* <label><b>Gouvernerat:</b></label><label name="zone">{{c.zone.nom}}</label><br>*/
/* <label><b>Etat:</b></label><label name="etat">{{c.etat}}</label><br>*/
/*   <a class="btn btn-lg btn-ghost btn-black" href="{{ path('service_offre') }}"> Retourner au services </a>*/
/* <a class="btn btn-lg btn-ghost btn-black" href="{{path('service_modifier', {'id':c.id})}}">Modifier</a>*/
/* <a class="btn btn-lg btn-ghost btn-black" href="{{path('service_supprimer', {'id':c.id})}}">Supprimer </a>*/
/* {#<a class="btn btn-lg btn-ghost btn-black" href="{{path('service_afficher', {'id':c.id})}}">Afficher</a><br><div></div>#}*/
/* <div name="map" class="box-lg">*/
/* Dérniére position {{ google_map(map) }}*/
/* </div>*/
/* {% include 'FOSCommentBundle:Thread:async.html.twig' with {'id': c.id} %}*/
/*  </fieldset >*/
/* */
/* */
/* </div>*/
/* <div name="Comments" class="box-lg">*/
/* {% include 'FOSCommentBundle:Thread:async.html.twig' with {'id': c.id} %}*/
/*     */
/* </div>*/
/*      */
/* {% endblock  %}*/
/* */
/* */
/* */
