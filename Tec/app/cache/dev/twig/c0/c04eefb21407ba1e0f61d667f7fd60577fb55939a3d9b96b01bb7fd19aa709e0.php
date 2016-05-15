<?php

/* ServiceBundle:Service:mesServices.html.twig */
class __TwigTemplate_0217b730ef75f741f4d47edb0cc94bd590c143b71babadd0c3dfaa3889760123 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("ServiceBundle::layout2.html.twig", "ServiceBundle:Service:mesServices.html.twig", 2);
        $this->blocks = array(
            'x' => array($this, 'block_x'),
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
    public function block_x($context, array $blocks = array())
    {
        // line 4
        echo "
 <div  id=\"results\" class=\"boc-lg\"></div>

";
    }

    // line 8
    public function block_t($context, array $blocks = array())
    {
        // line 9
        echo "  <header class=\"page-header\"><h1>Mes offres</h1>
  </header>
<div name=\"Service\" class=\"box-lg\">
";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["serv"]) ? $context["serv"] : $this->getContext($context, "serv")));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 13
            echo " <fieldset >
     <legend >Catégorie:<label name=\"type\">";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "type", array()), "html", null, true);
            echo "</label><br></legend>
<label><b>Nom de service :</b></label><label name=\"nom\">";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "nomService", array()), "html", null, true);
            echo "</label><br>
<label><b>Date d'ajout:</b></label><label name=\"dateAjout\">";
            // line 16
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["c"], "dateAjout", array()), "m/d/Y"), "html", null, true);
            echo "</label><br>
<label><b>Description:</b></label><label name=\"decription\">";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "description", array()), "html", null, true);
            echo "</label><br>
<label><b>Gouvernerat:</b></label><label name=\"zone\">";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["c"], "zone", array()), "nom", array()), "html", null, true);
            echo "</label><br>
<label><b>Etat:</b></label><label name=\"etat\">";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "etat", array()), "html", null, true);
            echo "</label><br>
<a class=\"btn btn-lg btn-ghost btn-black\" href=\"";
            // line 20
            echo $this->env->getExtension('routing')->getPath("service_offre");
            echo "\"> Retourner au services </a>
 <a class=\"btn btn-lg btn-ghost btn-black\" href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("service_modifier", array("id" => $this->getAttribute($context["c"], "id", array()))), "html", null, true);
            echo "\">Modifier</a>
                    <a class=\"btn btn-lg btn-ghost btn-black\" href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("service_supprimer", array("id" => $this->getAttribute($context["c"], "id", array()))), "html", null, true);
            echo "\">Supprimer </a>
                    <a class=\"btn btn-lg btn-ghost btn-black\" href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("service_afficher", array("id" => $this->getAttribute($context["c"], "id", array()))), "html", null, true);
            echo "\">Consulter</a><br><div></div><br>

 </fieldset >
 ";
            // line 26
            echo $this->env->getExtension('nomaya_social_bar')->getSocialButtons();
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "ServiceBundle:Service:mesServices.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 28,  96 => 26,  90 => 23,  86 => 22,  82 => 21,  78 => 20,  74 => 19,  70 => 18,  66 => 17,  62 => 16,  58 => 15,  54 => 14,  51 => 13,  47 => 12,  42 => 9,  39 => 8,  32 => 4,  29 => 3,  11 => 2,);
    }
}
/* */
/* {% extends "ServiceBundle::layout2.html.twig" %}*/
/* {% block x %}*/
/* */
/*  <div  id="results" class="boc-lg"></div>*/
/* */
/* {% endblock  %}*/
/* {% block t %}*/
/*   <header class="page-header"><h1>Mes offres</h1>*/
/*   </header>*/
/* <div name="Service" class="box-lg">*/
/* {% for c in serv%}*/
/*  <fieldset >*/
/*      <legend >Catégorie:<label name="type">{{c.type}}</label><br></legend>*/
/* <label><b>Nom de service :</b></label><label name="nom">{{c.nomService}}</label><br>*/
/* <label><b>Date d'ajout:</b></label><label name="dateAjout">{{c.dateAjout|date('m/d/Y')}}</label><br>*/
/* <label><b>Description:</b></label><label name="decription">{{c.description}}</label><br>*/
/* <label><b>Gouvernerat:</b></label><label name="zone">{{c.zone.nom}}</label><br>*/
/* <label><b>Etat:</b></label><label name="etat">{{c.etat}}</label><br>*/
/* <a class="btn btn-lg btn-ghost btn-black" href="{{ path('service_offre') }}"> Retourner au services </a>*/
/*  <a class="btn btn-lg btn-ghost btn-black" href="{{path('service_modifier', {'id':c.id})}}">Modifier</a>*/
/*                     <a class="btn btn-lg btn-ghost btn-black" href="{{path('service_supprimer', {'id':c.id})}}">Supprimer </a>*/
/*                     <a class="btn btn-lg btn-ghost btn-black" href="{{path('service_afficher', {'id':c.id})}}">Consulter</a><br><div></div><br>*/
/* */
/*  </fieldset >*/
/*  {{ socialButtons() }}*/
/* {% endfor %}*/
/* </div>*/
/* {% endblock  %}*/
/* */
/* */
/* */
