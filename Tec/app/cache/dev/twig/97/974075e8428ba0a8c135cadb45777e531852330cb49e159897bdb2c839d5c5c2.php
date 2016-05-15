<?php

/* ServiceBundle:Service:offreValide.html.twig */
class __TwigTemplate_f3c3da1b3f5cd9af7ede6582136e8c35f288d7a17df6872a197d41af32306050 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ServiceBundle::layout2.html.twig", "ServiceBundle:Service:offreValide.html.twig", 1);
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

    // line 2
    public function block_t($context, array $blocks = array())
    {
        // line 3
        echo "    <header class=\"page-header\"><h1>Les services disponibles</h1>
    </header>

   <div  id=\"results\" class=\"boc-lg\"></div>
    <div name=\"Service\" class=\"box-lg\">
    
          
                ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["serv"]) ? $context["serv"] : $this->getContext($context, "serv")));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 11
            echo "                 

                    <legend >Catégorie:<label name=\"type\">";
            // line 13
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
                    <label><b>Gouvernerat:</b></label><label name=\"zone\">";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["c"], "zone", array()), "nom", array()), "html", null, true);
            echo "</label><br>
                    <label><b>Etat:</b></label><label name=\"etat\">";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "etat", array()), "html", null, true);
            echo "</label><br>

                    
                    <a class=\"btn btn-lg btn-ghost btn-black\" href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("service_afficher", array("id" => $this->getAttribute($context["c"], "id", array()))), "html", null, true);
            echo "\">Consulter</a><br><div></div><br>
                    ";
            // line 22
            echo $this->env->getExtension('nomaya_social_bar')->getSocialButtons();
            echo "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "           
            
 
    </div>

";
    }

    public function getTemplateName()
    {
        return "ServiceBundle:Service:offreValide.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 24,  75 => 22,  71 => 21,  65 => 18,  61 => 17,  57 => 16,  53 => 15,  48 => 13,  44 => 11,  40 => 10,  31 => 3,  28 => 2,  11 => 1,);
    }
}
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
/*                     {{ socialButtons() }}*/
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
