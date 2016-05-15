<?php

/* ServiceBundle:Service:ajout.html.twig */
class __TwigTemplate_ad1b3af221da75f6cea55ee97d3212494224b385f3405efbdce2b8d05ed8312b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ServiceBundle::layout2.html.twig", "ServiceBundle:Service:ajout.html.twig", 1);
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

 <form method=\"POST\" class=\"navbar-form navbar-left navbar-main-search\" >
                        <div class=\"form-group\">
                            <input name=\"nomService\" class=\"form-control\" type=\"text\" placeholder=\"rechercher un service...\" />
                        </div>
                      <a class=\"fa fa-search navbar-main-search-submit\" href=\"#\"></a>
                    </form>
";
    }

    // line 12
    public function block_t($context, array $blocks = array())
    {
        // line 13
        echo "    <header class=\"page-header\">
        <h1>Ajouter un service</h1>
    </header>
    <div name=\"Service\" class=\"box-lg\">
        <form action=\"\"  method=\"POST\" > 
            <div class=\"form-group\">
                <label>Nom de service</label>
                <input class=\"form-control\" ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "nomService", array()), 'widget');
        echo "
            </div>
            <div class=\"form-group\">
                <label>Description</label>
                       <textarea class=\"form-control\"";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "description", array()), 'widget');
        echo "</textarea>
            </div>

            <div class=\"form-group\">Type :
                     ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "type", array()), 'widget', array("attr" => array("class" => "category-selections-select")));
        echo "

                </select>
            </div>

            <div class=\"form-group\">Gouvernorat :
                     ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "zone", array()), 'widget', array("attr" => array("class" => "category-selections-select")));
        echo "

                </select>
            </div>
 
            ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "Ajouter", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'rest');
        echo "
        </form>";
        // line 42
        echo "
    </div>

";
    }

    public function getTemplateName()
    {
        return "ServiceBundle:Service:ajout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 42,  91 => 40,  87 => 39,  79 => 34,  70 => 28,  63 => 24,  56 => 20,  47 => 13,  44 => 12,  32 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends "ServiceBundle::layout2.html.twig" %}*/
/* {% block x %}*/
/* */
/* */
/*  <form method="POST" class="navbar-form navbar-left navbar-main-search" >*/
/*                         <div class="form-group">*/
/*                             <input name="nomService" class="form-control" type="text" placeholder="rechercher un service..." />*/
/*                         </div>*/
/*                       <a class="fa fa-search navbar-main-search-submit" href="#"></a>*/
/*                     </form>*/
/* {% endblock  %}*/
/* {% block t %}*/
/*     <header class="page-header">*/
/*         <h1>Ajouter un service</h1>*/
/*     </header>*/
/*     <div name="Service" class="box-lg">*/
/*         <form action=""  method="POST" > */
/*             <div class="form-group">*/
/*                 <label>Nom de service</label>*/
/*                 <input class="form-control" {{ form_widget(Form.nomService)}}*/
/*             </div>*/
/*             <div class="form-group">*/
/*                 <label>Description</label>*/
/*                        <textarea class="form-control"{{ form_widget(Form.description) }}</textarea>*/
/*             </div>*/
/* */
/*             <div class="form-group">Type :*/
/*                      {{ form_widget(Form.type,{'attr':{'class':'category-selections-select'}}) }}*/
/* */
/*                 </select>*/
/*             </div>*/
/* */
/*             <div class="form-group">Gouvernorat :*/
/*                      {{ form_widget(Form.zone,{'attr':{'class':'category-selections-select'}}) }}*/
/* */
/*                 </select>*/
/*             </div>*/
/*  */
/*             {{ form_widget(Form.Ajouter,{'attr':{'class':'btn btn-primary'}}) }}*/
/* {{ form_rest(Form) }}*/
/*         </form>{# empty Twig template #}*/
/* */
/*     </div>*/
/* */
/* {% endblock  %}*/
/* */
