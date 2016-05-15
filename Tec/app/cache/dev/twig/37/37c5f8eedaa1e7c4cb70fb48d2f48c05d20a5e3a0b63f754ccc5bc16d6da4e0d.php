<?php

/* ProduitBundle:carteFid:AjouterCarteFid.html.twig */
class __TwigTemplate_b2ca766d45c3c31cc0bd405235a7aa9d02be4a9ee33d613edb2a07658471a947 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ProduitBundle::layout2.html.twig", "ProduitBundle:carteFid:AjouterCarteFid.html.twig", 1);
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

        <div class=\"row\">
            <div class=\"col-md-12\">
                <form action=\"\" method=\"post\">
                    <!-- START VALIDATIONENGINE PLUGIN -->
                    <div class=\"block\">
                        <h4>Ajouter Carte Fidélité</h4>                                
                        <form id=\"validate\" role=\"form\" class=\"form-horizontal\" action=\"javascript:alert('Form #validate submited');\">                            
                            <table>
                                <tr>
                                <div class=\"form-group col-md-12\">
                                    <td><label class=\"control-label\">Numéro de la carte:</label></td>
                                    <td><div ";
        // line 16
        echo ">
                                            ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "numCarte", array()), 'widget', array("attr" => array("class" => "validate[required,maxSize[8]] form-control")));
        echo "

                                        </div></td>
                                </div>
                                </tr>
                                <tr>
                                <div class=\"form-group col-md-12 \">
                                    <td><label class=\"control-label\">Validité:</label></td>
                                    <td><div ";
        // line 25
        echo ">
                                        ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "validite", array()), 'widget', array("attr" => array("class" => "validate[required,maxSize[8]] form-control")));
        echo "
                                    </td>
                                </div>
                                </div> 
                                </tr>
                                <tr>
                                <div class=\"form-group col-md-12\">
                                    <td><label class=\" control-label\">Nombre des point à attribuer:</label></td>
                                    <td><div ";
        // line 34
        echo ">
                                            ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "nbPoint", array()), 'widget', array("attr" => array("class" => "validate[required,maxSize[8]] form-control")));
        echo "
                                        </div</td>
                                </div>  
                                </tr>
                                <tr>
                                    <td colspan=\"2\">
                                
                                     ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "Ajouter", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
                                     ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'rest');
        echo "
                                
                                </td>
                                </tr>
                            </table>
                                    <br>
                        </form>                                   
                </form>
            </div>               
        </div>
    ";
    }

    public function getTemplateName()
    {
        return "ProduitBundle:carteFid:AjouterCarteFid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 43,  87 => 42,  77 => 35,  74 => 34,  63 => 26,  60 => 25,  49 => 17,  46 => 16,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'ProduitBundle::layout2.html.twig' %}*/
/* {% block t %}*/
/*     <div class="page-content-wrap">                */
/* */
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 <form action="" method="post">*/
/*                     <!-- START VALIDATIONENGINE PLUGIN -->*/
/*                     <div class="block">*/
/*                         <h4>Ajouter Carte Fidélité</h4>                                */
/*                         <form id="validate" role="form" class="form-horizontal" action="javascript:alert('Form #validate submited');">                            */
/*                             <table>*/
/*                                 <tr>*/
/*                                 <div class="form-group col-md-12">*/
/*                                     <td><label class="control-label">Numéro de la carte:</label></td>*/
/*                                     <td><div {#class="col-md-12"#}>*/
/*                                             {{form_widget(Form.numCarte,{ 'attr': {'class': 'validate[required,maxSize[8]] form-control'} })}}*/
/* */
/*                                         </div></td>*/
/*                                 </div>*/
/*                                 </tr>*/
/*                                 <tr>*/
/*                                 <div class="form-group col-md-12 ">*/
/*                                     <td><label class="control-label">Validité:</label></td>*/
/*                                     <td><div {#class="col-md-12">#}>*/
/*                                         {{form_widget(Form.validite,{ 'attr': {'class': 'validate[required,maxSize[8]] form-control'} })}}*/
/*                                     </td>*/
/*                                 </div>*/
/*                                 </div> */
/*                                 </tr>*/
/*                                 <tr>*/
/*                                 <div class="form-group col-md-12">*/
/*                                     <td><label class=" control-label">Nombre des point à attribuer:</label></td>*/
/*                                     <td><div {#class="col-md-12"#}>*/
/*                                             {{form_widget(Form.nbPoint,{ 'attr': {'class': 'validate[required,maxSize[8]] form-control'} })}}*/
/*                                         </div</td>*/
/*                                 </div>  */
/*                                 </tr>*/
/*                                 <tr>*/
/*                                     <td colspan="2">*/
/*                                 */
/*                                      {{ form_widget(Form.Ajouter,{'attr':{'class':'btn btn-primary'}}) }}*/
/*                                      {{ form_rest(Form) }}*/
/*                                 */
/*                                 </td>*/
/*                                 </tr>*/
/*                             </table>*/
/*                                     <br>*/
/*                         </form>                                   */
/*                 </form>*/
/*             </div>               */
/*         </div>*/
/*     {% endblock t %}*/
