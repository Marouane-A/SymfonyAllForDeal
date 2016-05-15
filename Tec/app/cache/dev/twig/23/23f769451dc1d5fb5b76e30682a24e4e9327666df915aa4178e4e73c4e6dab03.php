<?php

/* ServiceBundle:Service:offre.html.twig */
class __TwigTemplate_9263fb01830d02626bb8bf3cf29b4ab4d006ac0864fa90602506015a39c46f31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("ServiceBundle::layout2.html.twig", "ServiceBundle:Service:offre.html.twig", 2);
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
        echo "    <header class=\"page-header\"><h1>Les services disponibles</h1>
    </header>

   <div  id=\"results\" class=\"boc-lg\"></div>
    <div name=\"Service\" class=\"box-lg\">
    
          
                ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["serv"]) ? $context["serv"] : $this->getContext($context, "serv")));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 12
            echo "                 

                    <legend >Catégorie:<label name=\"type\">";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "type", array()), "html", null, true);
            echo "</label><br></legend>

                    <label><b>Nom de service :</b></label><label name=\"nom\">";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "nomService", array()), "html", null, true);
            echo "</label><br>
                    <label><b>Date d'ajout:</b></label><label name=\"dateAjout\">";
            // line 17
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["c"], "dateAjout", array()), "m/d/Y"), "html", null, true);
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
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("service_afficher", array("id" => $this->getAttribute($context["c"], "id", array()))), "html", null, true);
            echo "\">Consulter</a><br><div></div><br>
                    
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "           
            
 
    </div>

";
    }

    public function getTemplateName()
    {
        return "ServiceBundle:Service:offre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 25,  71 => 22,  65 => 19,  61 => 18,  57 => 17,  53 => 16,  48 => 14,  44 => 12,  40 => 11,  31 => 4,  28 => 3,  11 => 2,);
    }
}
/* */
/* {% extends "ServiceBundle::layout2.html.twig" %}*/
/* {% block t %}*/
/*     <header class="page-header"><h1>Les services disponibles</h1>*/
/*     </header>*/
/* */
/*    <div  id="results" class="boc-lg"></div>*/
/*     <div name="Service" class="box-lg">*/
/*     */
/*           */
/*                 {% for c in serv%}*/
/*                  */
/* */
/*                     <legend >Catégorie:<label name="type">{{c.type}}</label><br></legend>*/
/* */
/*                     <label><b>Nom de service :</b></label><label name="nom">{{c.nomService}}</label><br>*/
/*                     <label><b>Date d'ajout:</b></label><label name="dateAjout">{{c.dateAjout|date('m/d/Y')}}</label><br>*/
/*                     <label><b>Gouvernerat:</b></label><label name="zone">{{c.zone.nom}}</label><br>*/
/*                     <label><b>Etat:</b></label><label name="etat">{{c.etat}}</label><br>*/
/* */
/*                     */
/*                     <a class="btn btn-lg btn-ghost btn-black" href="{{path('service_afficher', {'id':c.id})}}">Consulter</a><br><div></div><br>*/
/*                     */
/*                 {% endfor %}*/
/*            */
/*             */
/*  */
/*     </div>*/
/* */
/* {% endblock  %}*/
/* */
/* */
/* */
