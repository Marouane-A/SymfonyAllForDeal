<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_64e7e5b82f6a83e3f85c3d00f6514662b7122e30ef7e2783737e6eb6016fa970 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataUserBundle:Profile:action.html.twig", "FOSUserBundle:Profile:show.html.twig", 12);
        $this->blocks = array(
            'sonata_profile_content' => array($this, 'block_sonata_profile_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataUserBundle:Profile:action.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_sonata_profile_content($context, array $blocks = array())
    {
        // line 15
        echo "  <h1>HELLO</h1>
  
      <div name=\"Service\" class=\"box-lg\">

 <fieldset >
    
     <legend >Nom d'utilisateur:<label name=\"type\"><h1>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</h1></label><br></legend>
<label><b>Email:</b></label><label name=\"nom\">";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</label><br>
<label><b>Prenom:</b></label><label name=\"dateAjout\">";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstname", array()), "html", null, true);
        echo "</label><br>
<label><b>Nom :</b></label><label name=\"decription\">";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastname", array()), "html", null, true);
        echo "</label><br>
<label><b>Numero de telephone:</b></label><label name=\"zone\">";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "phone", array()), "html", null, true);
        echo "</label><br>
<label><b>Date de naissance:</b></label><label name=\"zone\">";
        // line 26
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "dateofbirth", array()), "Y-m-d"), "html", null, true);
        echo "</label><br>
<label><b>Date de derniére modification du compte</b></label><label name=\"zone\">";
        // line 27
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "updatedat", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</label><br>
<label><b>Date de creation de compte:</b></label><label name=\"zone\">";
        // line 28
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "createdat", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</label><br>
<label><b>Date de Dernire visite:</b></label><label name=\"etat\">";
        // line 29
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastlogin", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</label><br>
</div>
    
    <div class=\"row row-fluid\">
      
        ";
        // line 34
        $context["has_center"] = false;
        // line 35
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blocks"]) ? $context["blocks"] : $this->getContext($context, "blocks")));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 36
            echo "            ";
            if (($this->getAttribute($context["block"], "position", array()) == "center")) {
                // line 37
                echo "                ";
                $context["has_center"] = true;
                // line 38
                echo "            ";
            }
            // line 39
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "
        <div class=\"";
        // line 41
        if ((isset($context["has_center"]) ? $context["has_center"] : $this->getContext($context, "has_center"))) {
            echo "span4 col-lg-4";
        } else {
            echo "span6 col-lg-6";
        }
        echo "\">
            ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blocks"]) ? $context["blocks"] : $this->getContext($context, "blocks")));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 43
            echo "                ";
            if (($this->getAttribute($context["block"], "position", array()) == "left")) {
                // line 44
                echo "                    ";
                echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => $this->getAttribute($context["block"], "type", array()), "settings" => $this->getAttribute($context["block"], "settings", array()))));
                echo "
                ";
            }
            // line 46
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "        </div>

        ";
        // line 49
        if ((isset($context["has_center"]) ? $context["has_center"] : $this->getContext($context, "has_center"))) {
            // line 50
            echo "            <div class=\"span4 col-lg-4\">
                ";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["blocks"]) ? $context["blocks"] : $this->getContext($context, "blocks")));
            foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
                // line 52
                echo "                    ";
                if (($this->getAttribute($context["block"], "position", array()) == "center")) {
                    // line 53
                    echo "                        ";
                    echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => $this->getAttribute($context["block"], "type", array()), "settings" => $this->getAttribute($context["block"], "settings", array()))));
                    echo "
                        
                    ";
                }
                // line 56
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "            </div>
        ";
        }
        // line 59
        echo "
       
    </div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 59,  160 => 57,  154 => 56,  147 => 53,  144 => 52,  140 => 51,  137 => 50,  135 => 49,  131 => 47,  125 => 46,  119 => 44,  116 => 43,  112 => 42,  104 => 41,  101 => 40,  95 => 39,  92 => 38,  89 => 37,  86 => 36,  81 => 35,  79 => 34,  71 => 29,  67 => 28,  63 => 27,  59 => 26,  55 => 25,  51 => 24,  47 => 23,  43 => 22,  39 => 21,  31 => 15,  28 => 14,  11 => 12,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* */
/* {% extends "SonataUserBundle:Profile:action.html.twig" %}*/
/* */
/* {% block sonata_profile_content %}*/
/*   <h1>HELLO</h1>*/
/*   */
/*       <div name="Service" class="box-lg">*/
/* */
/*  <fieldset >*/
/*     */
/*      <legend >Nom d'utilisateur:<label name="type"><h1>{{user.username}}</h1></label><br></legend>*/
/* <label><b>Email:</b></label><label name="nom">{{user.email}}</label><br>*/
/* <label><b>Prenom:</b></label><label name="dateAjout">{{user.firstname}}</label><br>*/
/* <label><b>Nom :</b></label><label name="decription">{{user.lastname}}</label><br>*/
/* <label><b>Numero de telephone:</b></label><label name="zone">{{user.phone}}</label><br>*/
/* <label><b>Date de naissance:</b></label><label name="zone">{{user.dateofbirth|date('Y-m-d')}}</label><br>*/
/* <label><b>Date de derniére modification du compte</b></label><label name="zone">{{user.updatedat|date('Y-m-d H:i:s')}}</label><br>*/
/* <label><b>Date de creation de compte:</b></label><label name="zone">{{user.createdat|date('Y-m-d H:i:s')}}</label><br>*/
/* <label><b>Date de Dernire visite:</b></label><label name="etat">{{user.lastlogin|date('Y-m-d H:i:s')}}</label><br>*/
/* </div>*/
/*     */
/*     <div class="row row-fluid">*/
/*       */
/*         {% set has_center = false %}*/
/*         {% for block in blocks %}*/
/*             {% if block.position == 'center' %}*/
/*                 {% set has_center = true %}*/
/*             {% endif %}*/
/*         {% endfor %}*/
/* */
/*         <div class="{% if has_center %}span4 col-lg-4{% else %}span6 col-lg-6{% endif %}">*/
/*             {% for block in blocks %}*/
/*                 {% if block.position == 'left' %}*/
/*                     {{ sonata_block_render({ 'type': block.type, 'settings': block.settings}) }}*/
/*                 {% endif %}*/
/*             {% endfor %}*/
/*         </div>*/
/* */
/*         {% if has_center %}*/
/*             <div class="span4 col-lg-4">*/
/*                 {% for block in blocks %}*/
/*                     {% if block.position == 'center' %}*/
/*                         {{ sonata_block_render({ 'type': block.type, 'settings': block.settings}) }}*/
/*                         */
/*                     {% endif %}*/
/*                 {% endfor %}*/
/*             </div>*/
/*         {% endif %}*/
/* */
/*        */
/*     </div>*/
/* {% endblock %}*/
