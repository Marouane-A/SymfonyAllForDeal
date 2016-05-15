<?php

/* ProduitBundle:carteFid:modify.html.twig */
class __TwigTemplate_012b4d082f5f37fca39b5c9dad762e095a76d6e7dba25150a34ff7d2f005a8a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ProduitBundle::layout2.html.twig", "ProduitBundle:carteFid:modify.html.twig", 1);
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
        echo "    <form action=\"\" method=\"post\">
        <h4>Modification du carte N°:  ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["carteFid"]) ? $context["carteFid"] : $this->getContext($context, "carteFid")));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "numCarte", array()), "html", null, true);
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</h4>  
        <div name=\"CarteFid\" class=\"box-lg\">
            <div class=\"form-group\">
                <label class=\"col-md-3 control-label\">Numéro de la carte:</label>
                <div class=\"col-md-9\">
                    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["carteFid"]) ? $context["carteFid"] : $this->getContext($context, "carteFid")));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 10
            echo "

                        ";
            // line 12
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "nbPoint", array()), 'widget', array("value" => $this->getAttribute($context["c"], "nbPoint", array())));
            echo "<br>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "
                </div>
            </div>
           
               ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "Modifier", array()), 'widget', array("attr" => array("class" => "btn btn-lg btn-ghost btn-black")));
        echo "
";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'rest');
        echo "
          
        </div>
    </form>  

";
    }

    public function getTemplateName()
    {
        return "ProduitBundle:carteFid:modify.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 19,  73 => 18,  67 => 14,  59 => 12,  55 => 10,  51 => 9,  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'ProduitBundle::layout2.html.twig' %}*/
/* {% block t %}*/
/*     <form action="" method="post">*/
/*         <h4>Modification du carte N°:  {% for c in carteFid%} {{c.numCarte}} {% endfor %}</h4>  */
/*         <div name="CarteFid" class="box-lg">*/
/*             <div class="form-group">*/
/*                 <label class="col-md-3 control-label">Numéro de la carte:</label>*/
/*                 <div class="col-md-9">*/
/*                     {% for c in carteFid%}*/
/* */
/* */
/*                         {{form_widget(Form.nbPoint,{'value' : c.nbPoint },{ 'attr': {'class': 'validate[required,maxSize[8]] form-control'} })}}<br>*/
/*                     {% endfor %}*/
/* */
/*                 </div>*/
/*             </div>*/
/*            */
/*                {{ form_widget(Form.Modifier,{'attr':{'class':'btn btn-lg btn-ghost btn-black'}}) }}*/
/* {{ form_rest(Form) }}*/
/*           */
/*         </div>*/
/*     </form>  */
/* */
/* {% endblock t%}*/
