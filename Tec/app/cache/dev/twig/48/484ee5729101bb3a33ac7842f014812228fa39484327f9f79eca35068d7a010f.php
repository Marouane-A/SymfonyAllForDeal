<?php

/* ServiceBundle:Service:recherche.html.twig */
class __TwigTemplate_5940939485823c82d15cda4232888a1c5513d689ba416f2797b4bdac67670c71 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ServiceBundle::layout2.html.twig", "ServiceBundle:Service:recherche.html.twig", 1);
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

    // line 2
    public function block_x($context, array $blocks = array())
    {
        // line 3
        echo "

";
        // line 9
        echo "
 <form method=\"POST\" class=\"navbar-form navbar-left navbar-main-search\" >
                        <div class=\"form-group\">
                            <input name=\"nomService\" class=\"form-control\" type=\"text\" placeholder=\"rechercher un service...\" />
                        </div>
                      <a class=\"fa fa-search navbar-main-search-submit\" href=\"#\"></a>
                    </form>
";
    }

    // line 17
    public function block_t($context, array $blocks = array())
    {
        // line 18
        echo "    <div name=\"nomService\" class=\"box-lg\">
 ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["serv"]) ? $context["serv"] : $this->getContext($context, "serv")));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 20
            echo " <fieldset >
     <legend >Catégorie:<label name=\"type\">";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "type", array()), "html", null, true);
            echo "</label><br></legend>
<label><b>Nom de service:</b></label><label name=\"nomService\">";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "nomService", array()), "html", null, true);
            echo "</label><br>
<label><b>Date d'ajout:</b></label><label name=\"dateAjout\">";
            // line 23
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["c"], "dateAjout", array()), "m/d/Y"), "html", null, true);
            echo "</label><br>
<label><b>Description :</b></label><label name=\"decription\">";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "description", array()), "html", null, true);
            echo "</label><br>
<label><b>Gouvernerat:</b></label><label name=\"zone\">";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["c"], "zone", array()), "nom", array()), "html", null, true);
            echo "</label><br>
<label><b>Etat:</b></label><label name=\"etat\">";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "etat", array()), "html", null, true);
            echo "</label><br>
";
            // line 30
            echo " </fieldset >
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "
    </div>

";
    }

    public function getTemplateName()
    {
        return "ServiceBundle:Service:recherche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 32,  84 => 30,  80 => 26,  76 => 25,  72 => 24,  68 => 23,  64 => 22,  60 => 21,  57 => 20,  53 => 19,  50 => 18,  47 => 17,  36 => 9,  32 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends "ServiceBundle::layout2.html.twig" %}*/
/* {% block x %}*/
/* */
/* */
/* {#<form method="POST">*/
/*     Nom de Service : <input type="text" name="nomService">*/
/*     <input type="submit" value="rechercher">*/
/* </form>#}*/
/* */
/*  <form method="POST" class="navbar-form navbar-left navbar-main-search" >*/
/*                         <div class="form-group">*/
/*                             <input name="nomService" class="form-control" type="text" placeholder="rechercher un service..." />*/
/*                         </div>*/
/*                       <a class="fa fa-search navbar-main-search-submit" href="#"></a>*/
/*                     </form>*/
/* {% endblock  %}*/
/* {% block t %}*/
/*     <div name="nomService" class="box-lg">*/
/*  {% for c in serv%}*/
/*  <fieldset >*/
/*      <legend >Catégorie:<label name="type">{{c.type}}</label><br></legend>*/
/* <label><b>Nom de service:</b></label><label name="nomService">{{c.nomService}}</label><br>*/
/* <label><b>Date d'ajout:</b></label><label name="dateAjout">{{c.dateAjout|date('m/d/Y')}}</label><br>*/
/* <label><b>Description :</b></label><label name="decription">{{c.description}}</label><br>*/
/* <label><b>Gouvernerat:</b></label><label name="zone">{{c.zone.nom}}</label><br>*/
/* <label><b>Etat:</b></label><label name="etat">{{c.etat}}</label><br>*/
/* {#<a class="btn btn-lg btn-ghost btn-black" href="{{path('service_modifier', {'id':c.id})}}">Modifier</a>*/
/* <a class="btn btn-lg btn-ghost btn-black" href="{{path('service_supprimer', {'id':c.id})}}">Supprimer </a>*/
/* <a class="btn btn-lg btn-ghost btn-black" href="{{path('service_contacter', {'id':c.id})}}">Contacter </a><br><div></div>#}*/
/*  </fieldset >*/
/* {% endfor %}*/
/* */
/*     </div>*/
/* */
/* {% endblock  %}*/
/* */
/*        */
