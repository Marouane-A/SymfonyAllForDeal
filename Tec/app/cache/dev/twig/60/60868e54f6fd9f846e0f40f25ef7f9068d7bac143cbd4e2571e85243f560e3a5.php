<?php

/* ProduitBundle:carteFid:AttribuerPoint.html.twig */
class __TwigTemplate_094ca3a9efd69ab9c67a1b5a3ef7b63e10eb3455587ff25c11e02aa198d99244 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ProduitBundle::layout2.html.twig", "ProduitBundle:carteFid:AttribuerPoint.html.twig", 1);
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
        echo "    <div class=\"page-content-wrap\">                
                
     <table border=\"1\">
  <thead>
    <tr>
      <th>NumCarte</th>
      <th>Validité</th>
      <th>Nombre des points</th>
      <th>Opération</th>
    </tr>
  </thead>
  <tbody>
   ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["carteFid"]) ? $context["carteFid"] : $this->getContext($context, "carteFid")));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 16
            echo "    <tr>
      <td><strong>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "numCarte", array()), "html", null, true);
            echo "</strong></td>
      <td>";
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["c"], "validite", array()), "m/d/Y"), "html", null, true);
            echo "</td>
      <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "nbPoint", array()), "html", null, true);
            echo "</td>
      <td> <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modify", array("id" => $this->getAttribute($context["c"], "id", array()))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/Tec/web/img/modif.jpg"), "html", null, true);
            echo "\" align=\"left\" width=\"30\" height=\"30\"/></a>
          <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("delete", array("id" => $this->getAttribute($context["c"], "id", array()))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/Tec/web/img/supp.jpg"), "html", null, true);
            echo "\" align=\"right\" width=\"30\" height=\"30\"/></a></td>
    </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "   </tbody>
  </table>
   </div>

  ";
    }

    public function getTemplateName()
    {
        return "ProduitBundle:carteFid:AttribuerPoint.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 24,  70 => 21,  64 => 20,  60 => 19,  56 => 18,  52 => 17,  49 => 16,  45 => 15,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'ProduitBundle::layout2.html.twig' %}*/
/* {% block t %}*/
/*     <div class="page-content-wrap">                */
/*                 */
/*      <table border="1">*/
/*   <thead>*/
/*     <tr>*/
/*       <th>NumCarte</th>*/
/*       <th>Validité</th>*/
/*       <th>Nombre des points</th>*/
/*       <th>Opération</th>*/
/*     </tr>*/
/*   </thead>*/
/*   <tbody>*/
/*    {% for c in carteFid%}*/
/*     <tr>*/
/*       <td><strong>{{c.numCarte}}</strong></td>*/
/*       <td>{{c.validite|date('m/d/Y')}}</td>*/
/*       <td>{{c.nbPoint}}</td>*/
/*       <td> <a href="{{ path('modify', {'id': c.id} )}}"><img src="{{asset('/Tec/web/img/modif.jpg')}}" align="left" width="30" height="30"/></a>*/
/*           <a href="{{ path('delete', {'id': c.id} )}}"><img src="{{asset('/Tec/web/img/supp.jpg')}}" align="right" width="30" height="30"/></a></td>*/
/*     </tr>*/
/*       {% endfor %}*/
/*    </tbody>*/
/*   </table>*/
/*    </div>*/
/* */
/*   {% endblock t %}*/
/* */
