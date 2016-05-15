<?php

/* ProduitBundle:produit:ajoutP.html.twig */
class __TwigTemplate_23b89b5efe76f683df8e67db1d832fab3c5426a4335e734bc577577010033cf3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ProduitBundle::layout2.html.twig", "ProduitBundle:produit:ajoutP.html.twig", 1);
        $this->blocks = array(
            'x' => array($this, 'block_x'),
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
    public function block_x($context, array $blocks = array())
    {
        // line 3
        echo "

 <form method=\"POST\" class=\"navbar-form navbar-left navbar-main-search\" >
                        <div class=\"form-group\">
                            <input name=\"nomService\" class=\"form-control\" type=\"text\" placeholder=\"rechercher un produit...\" />
                        </div>
                      <a class=\"fa fa-search navbar-main-search-submit\" href=\"#\"></a>
                    </form>
";
    }

    // line 12
    public function block_t($context, array $blocks = array())
    {
        // line 13
        echo "
    <header class=\"page-header\">
        <h1>Ajouter un produit</h1>
    </header>
    <div name=\"Service\" class=\"box-lg\">
        <form action=\"\"  method=\"post\" enctype='multipart/form-data' > 
            
                <label>Produit</label>
                <input class=\"form-control\" ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "nomP", array()), 'widget');
        echo "
            
            <div class=\"form-group\">Catégorie :
                   
                ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "categorie", array()), 'widget', array("attr" => array("class" => "category-selections-select")));
        echo "
             </select>
            </div>
             <div class=\"form-group\">
                <label>Description</label>
                       <textarea class=\"form-control\"";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "description", array()), 'widget');
        echo "</textarea>
            </div>
            <div class=\"form-group\">
                <label>Prix</label>
                <input class=\"form-control\" ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "prix", array()), 'widget');
        echo "
            </div>
            <div class=\"form-group\">
                <label>TVA</label>
                <input class=\"form-control\" ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "tva", array()), 'widget');
        echo "
            </div>
            <div class=\"form-group\">
                <label>Reduction</label>
                <input class=\"form-control\" ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "reduction", array()), 'widget');
        echo "
            </div>
            <div class=\"form-group\">
                <label>Quantite</label>
                <input class=\"form-control\" ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "quantite", array()), 'widget');
        echo "
            </div>
             <div class=\"form-group\">Gouvernorat :
                     ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "zone", array()), 'widget', array("attr" => array("class" => "category-selections-select")));
        echo "
                </select>
            </div>
                  <div class=\"form-group\">Image :
                     ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "media", array()), 'widget');
        echo "
                </select>
            </div>

            ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "Ajouter", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
              ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'rest');
        echo "

        </form>

    </div>
    

";
    }

    public function getTemplateName()
    {
        return "ProduitBundle:produit:ajoutP.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 58,  120 => 57,  113 => 53,  106 => 49,  100 => 46,  93 => 42,  86 => 38,  79 => 34,  72 => 30,  64 => 25,  57 => 21,  47 => 13,  44 => 12,  32 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends 'ProduitBundle::layout2.html.twig' %}*/
/* {% block x %}*/
/* */
/* */
/*  <form method="POST" class="navbar-form navbar-left navbar-main-search" >*/
/*                         <div class="form-group">*/
/*                             <input name="nomService" class="form-control" type="text" placeholder="rechercher un produit..." />*/
/*                         </div>*/
/*                       <a class="fa fa-search navbar-main-search-submit" href="#"></a>*/
/*                     </form>*/
/* {% endblock  %}*/
/* {% block t %}*/
/* */
/*     <header class="page-header">*/
/*         <h1>Ajouter un produit</h1>*/
/*     </header>*/
/*     <div name="Service" class="box-lg">*/
/*         <form action=""  method="post" enctype='multipart/form-data' > */
/*             */
/*                 <label>Produit</label>*/
/*                 <input class="form-control" {{ form_widget(Form.nomP)}}*/
/*             */
/*             <div class="form-group">Catégorie :*/
/*                    */
/*                 {{ form_widget(Form.categorie,{'attr':{'class':'category-selections-select'}}) }}*/
/*              </select>*/
/*             </div>*/
/*              <div class="form-group">*/
/*                 <label>Description</label>*/
/*                        <textarea class="form-control"{{ form_widget(Form.description) }}</textarea>*/
/*             </div>*/
/*             <div class="form-group">*/
/*                 <label>Prix</label>*/
/*                 <input class="form-control" {{ form_widget(Form.prix) }}*/
/*             </div>*/
/*             <div class="form-group">*/
/*                 <label>TVA</label>*/
/*                 <input class="form-control" {{ form_widget(Form.tva) }}*/
/*             </div>*/
/*             <div class="form-group">*/
/*                 <label>Reduction</label>*/
/*                 <input class="form-control" {{ form_widget(Form.reduction) }}*/
/*             </div>*/
/*             <div class="form-group">*/
/*                 <label>Quantite</label>*/
/*                 <input class="form-control" {{ form_widget(Form.quantite) }}*/
/*             </div>*/
/*              <div class="form-group">Gouvernorat :*/
/*                      {{ form_widget(Form.zone,{'attr':{'class':'category-selections-select'}}) }}*/
/*                 </select>*/
/*             </div>*/
/*                   <div class="form-group">Image :*/
/*                      {{ form_widget(Form.media) }}*/
/*                 </select>*/
/*             </div>*/
/* */
/*             {{ form_widget(Form.Ajouter,{'attr':{'class':'btn btn-primary'}}) }}*/
/*               {{ form_rest(Form) }}*/
/* */
/*         </form>*/
/* */
/*     </div>*/
/*     */
/* */
/* {% endblock %}*/
/* */
/* */
/* */
/*  */
/* */
