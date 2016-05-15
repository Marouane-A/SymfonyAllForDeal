<?php

/* ServiceBundle:Service:ServiceParZone.html.twig */
class __TwigTemplate_da8d0181d9af9508197b3757d28ca09c18ab4819b1e2d7ef273b1711e1a50e7b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("ServiceBundle::layout2.html.twig", "ServiceBundle:Service:ServiceParZone.html.twig", 2);
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
        echo "     <div  id=\"results\" class=\"boc-lg\"></div>

  ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["serv"]) ? $context["serv"] : $this->getContext($context, "serv")));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 7
            echo "     
     <div name=\"TypeService\" class=\"box-lg\">
 <fieldset >
     <legend >Catégorie:<label name=\"type\">";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "type", array()), "html", null, true);
            echo "</label><br></legend>
<label><b>Nom de service:</b></label><label name=\"nom\">";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "nomService", array()), "html", null, true);
            echo "</label><br>
<label><b>Date d'ajout:</b></label><label name=\"dateAjout\">";
            // line 12
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["c"], "dateAjout", array()), "m/d/Y"), "html", null, true);
            echo "</label><br>
<label><b>Description :</b></label><label name=\"decription\">";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "description", array()), "html", null, true);
            echo "</label><br>
<label><b>Gouvernerat:</b></label><label name=\"zone\">";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["c"], "zone", array()), "nom", array()), "html", null, true);
            echo "</label><br>
<label><b>Etat:</b></label><label name=\"etat\">";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "etat", array()), "html", null, true);
            echo "</label><br>
<a class=\"btn btn-lg btn-ghost btn-black\" href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("service_afficher", array("id" => $this->getAttribute($context["c"], "id", array()))), "html", null, true);
            echo "\">Consulter</a><br><div></div><br>
 </fieldset >
  </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
";
    }

    public function getTemplateName()
    {
        return "ServiceBundle:Service:ServiceParZone.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 20,  68 => 16,  64 => 15,  60 => 14,  56 => 13,  52 => 12,  48 => 11,  44 => 10,  39 => 7,  35 => 6,  31 => 4,  28 => 3,  11 => 2,);
    }
}
/* {# empty Twig template #}*/
/* {% extends "ServiceBundle::layout2.html.twig" %}*/
/* {%block t %}*/
/*      <div  id="results" class="boc-lg"></div>*/
/* */
/*   {% for c in serv%}*/
/*      */
/*      <div name="TypeService" class="box-lg">*/
/*  <fieldset >*/
/*      <legend >Catégorie:<label name="type">{{c.type}}</label><br></legend>*/
/* <label><b>Nom de service:</b></label><label name="nom">{{c.nomService}}</label><br>*/
/* <label><b>Date d'ajout:</b></label><label name="dateAjout">{{c.dateAjout|date('m/d/Y')}}</label><br>*/
/* <label><b>Description :</b></label><label name="decription">{{c.description}}</label><br>*/
/* <label><b>Gouvernerat:</b></label><label name="zone">{{c.zone.nom}}</label><br>*/
/* <label><b>Etat:</b></label><label name="etat">{{c.etat}}</label><br>*/
/* <a class="btn btn-lg btn-ghost btn-black" href="{{path('service_afficher', {'id':c.id})}}">Consulter</a><br><div></div><br>*/
/*  </fieldset >*/
/*   </div>*/
/* {% endfor %}*/
/* */
/* {% endblock  %}*/
/* {# empty Twig template #}*/
/* */
