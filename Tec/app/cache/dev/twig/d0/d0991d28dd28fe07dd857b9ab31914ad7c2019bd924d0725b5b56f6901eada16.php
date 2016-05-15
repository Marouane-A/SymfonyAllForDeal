<?php

/* ProduitBundle:produit:afficherPS.html.twig */
class __TwigTemplate_beff5688ec6b35de45ac0dbabae8035845dbe7802113a9f4a335d09379867d65 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ProduitBundle::layout2.html.twig", "ProduitBundle:produit:afficherPS.html.twig", 1);
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
        echo "    <header class=\"page-header\"><h1>Les produits disponibles</h1>
    </header>
    <div name=\"Service\" class=\"box-lg\">
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Produit"]) ? $context["Produit"] : $this->getContext($context, "Produit")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 17
            echo "            <fieldset >
                ";
            // line 18
            if ($this->getAttribute($context["p"], "media", array())) {
                // line 19
                echo "                    ";
                // line 20
                echo "

                  
  <div class=\"row\">
                <div class=\"col-md-7\">
                    <div class=\"jqzoom-right clearfix\">
                        <ul class=\"jqzoom-list\">
                            <li>
                                <a class=\"zoomThumbActive\" href=\"javascript:void(0)\" data-rel=\"{gallery:'gal-1', smallimage: 'img/test_product_page/dress/4.jpg', largeimage: 'img/test_product_page/dress/4-b.jpg'}\">
                                    <img src=\"";
                // line 29
                echo $this->env->getExtension('sonata_media')->path($this->getAttribute($context["p"], "media", array()), "small");
                echo "\" alt=\"Image Alternative text\" title=\"Image Title\" />
                                </a>
                            </li>
                            <li>
                                <a href=\"javascript:void(0)\" data-rel=\"{gallery:'gal-1', smallimage: 'img/test_product_page/dress/1.jpg', largeimage: 'img/test_product_page/dress/1-b.jpg'}\">
                                    <img src=\"";
                // line 34
                echo $this->env->getExtension('sonata_media')->path($this->getAttribute($context["p"], "media", array()), "small");
                echo "\" alt=\"Image Alternative text\" title=\"Image Title\" />
                                </a>
                            </li>
                            <li>
                                <a href=\"javascript:void(0)\" data-rel=\"{gallery:'gal-1', smallimage: 'img/test_product_page/dress/2.jpg', largeimage: 'img/test_product_page/dress/2-b.jpg'}\">
                                    <img src=\"";
                // line 39
                echo $this->env->getExtension('sonata_media')->path($this->getAttribute($context["p"], "media", array()), "small");
                echo "\" alt=\"Image Alternative text\" title=\"Image Title\" />
                                </a>
                            </li>
                            <li>
                                <a href=\"javascript:void(0)\" data-rel=\"{gallery:'gal-1', smallimage: 'img/test_product_page/dress/3.jpg', largeimage: 'img/test_product_page/dress/3-b.jpg'}\">
                                    <img src=\"";
                // line 44
                echo $this->env->getExtension('sonata_media')->path($this->getAttribute($context["p"], "media", array()), "small");
                echo "\" alt=\"Image Alternative text\" title=\"Image Title\" />
                                </a>
                            </li>
                        </ul>
                                  
                        <div class=\"product-page-product-wrap jqzoom-stage jqzoom-stage-lg\">
                            <div class=\"clearfix\">
                                <a href=\"";
                // line 51
                echo $this->env->getExtension('sonata_media')->path($this->getAttribute($context["p"], "media", array()), "small");
                echo "\" id=\"jqzoom\" data-rel=\"gal-1\">
                                   <img  src=\" ";
                // line 52
                echo $this->env->getExtension('sonata_media')->path($this->getAttribute($context["p"], "media", array()), "small");
                echo "\" alt=\"Image Alternative text\" title=\"Image Title\" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                                 ";
            }
            // line 59
            echo "                   
                </div>            
                    <legend >Categorie :";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "categorie", array()), "html", null, true);
            echo "</legend>
                    <label><b> Produit :</b></label><label name=\"nomP\">";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "nomP", array()), "html", null, true);
            echo "</label><br>
                    <label><b>Description :</b></label><label name=\"decription\">";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "description", array()), "html", null, true);
            echo "</label><br>
                    <label><b>Prix :</b></label><label name=\"prix\">";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "prix", array()), "html", null, true);
            echo "</label><br>
                    <label><b>TVA :</b></label><label name=\"prix\">";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "tva", array()), "html", null, true);
            echo "</label><br>
                    <label><b>Reduction :</b></label><label name=\"prix\">";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "reduction", array()), "html", null, true);
            echo "</label><br>
                    <label><b>Quantite :</b></label><label name=\"prix\">";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "quantite", array()), "html", null, true);
            echo "</label><br>
                    <label><b>Prix avec reduction:</b></label><label name=\"prix\">";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "prix1", array()), "html", null, true);
            echo "</label><br>
                    <label><b>Prix final avec tva:</b></label><label name=\"prix\">";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "prix2", array()), "html", null, true);
            echo "</label><br>
                    <label><b>Gouvernorat:</b></label><label name=\"gouvernorat\">";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "zone", array()), "nom", array()), "html", null, true);
            echo "</label><br>

                    ";
            // line 72
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["note"]) ? $context["note"] : $this->getContext($context, "note")));
            foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
                // line 73
                echo "                        <label><b>Note:</b></label><label name=\"gouvernorat\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["n"], "moy", array()), "html", null, true);
                echo "</label><br>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['n'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "                    ";
            if ((twig_length_filter($this->env, (isset($context["enable"]) ? $context["enable"] : $this->getContext($context, "enable"))) == 0)) {
                // line 76
                echo "
                        <form method=\"POST\">
                            <input type=\"radio\" name=\"note\" id=\"group-1-0\" value=\"5\" /><label for=\"group-1-0\"></label><!--
                            --><input type=\"radio\" name=\"note\" id=\"group-1-1\" value=\"4\" /><label for=\"group-1-1\"></label><!--
                            --><input type=\"radio\" name=\"note\" id=\"group-1-2\" value=\"3\" /><label for=\"group-1-2\"></label><!--
                            --><input type=\"radio\" name=\"note\" id=\"group-1-3\" value=\"2\" /><label for=\"group-1-3\"></label><!--
                            --><input type=\"radio\" name=\"note\" id=\"group-1-4\"  value=\"1\" /><label for=\"group-1-4\"></label>
                            <input type=\"submit\" class=\"btn btn-lg btn-ghost btn-black\" label='Rate' >
                            <div class=\"gap\"></div>
                        </form>

                    ";
            }
            // line 88
            echo "

                      <a class=\"btn btn-lg btn-ghost btn-black\" href=\"";
            // line 90
            echo $this->env->getExtension('routing')->getPath("produit_afficheP");
            echo "\"> Retourner au produits </a>
                    <a class=\"btn btn-lg btn-ghost btn-black\" href=\"";
            // line 91
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("produit_supprimerP", array("id" => $this->getAttribute($context["p"], "id", array()))), "html", null, true);
            echo "\"> Supprimer </a>
                    <a class=\"btn btn-lg btn-ghost btn-black\" href=\"";
            // line 92
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("produit_modifierP", array("id" => $this->getAttribute($context["p"], "id", array()))), "html", null, true);
            echo "\"> Modifier </a>
                    <a class=\"btn btn-lg btn-ghost btn-black\" href=\"";
            // line 93
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ecommerce_panierAjout", array("id" => $this->getAttribute($context["p"], "id", array()), "nom" => $this->getAttribute($context["p"], "nomP", array()), "prix" => $this->getAttribute($context["p"], "prix", array()))), "html", null, true);
            echo "\"> Ajouter Panier </a>
                    <div class=\"gap\"></div>

                    ";
            // line 96
            $this->loadTemplate("FOSCommentBundle:Thread:async.html.twig", "ProduitBundle:produit:afficherPS.html.twig", 96)->display(array_merge($context, array("id" => $this->getAttribute($context["p"], "id", array()))));
            // line 97
            echo "            </fieldset>

        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "        ";
        echo $this->env->getExtension('nomaya_social_bar')->getSocialButtons();
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "ProduitBundle:produit:afficherPS.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 100,  234 => 97,  232 => 96,  226 => 93,  222 => 92,  218 => 91,  214 => 90,  210 => 88,  196 => 76,  193 => 75,  184 => 73,  180 => 72,  175 => 70,  171 => 69,  167 => 68,  163 => 67,  159 => 66,  155 => 65,  151 => 64,  147 => 63,  143 => 62,  139 => 61,  135 => 59,  125 => 52,  121 => 51,  111 => 44,  103 => 39,  95 => 34,  87 => 29,  76 => 20,  74 => 19,  72 => 18,  69 => 17,  52 => 16,  47 => 13,  44 => 12,  32 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends 'ProduitBundle::layout2.html.twig' %}*/
/* {% block x %}*/
/* */
/* */
/*     <form method="POST" class="navbar-form navbar-left navbar-main-search" >*/
/*         <div class="form-group">*/
/*             <input name="nomService" class="form-control" type="text" placeholder="rechercher un produit..." />*/
/*         </div>*/
/*         <a class="fa fa-search navbar-main-search-submit" href="#"></a>*/
/*     </form>*/
/* {% endblock  %}*/
/* {% block t %}*/
/*     <header class="page-header"><h1>Les produits disponibles</h1>*/
/*     </header>*/
/*     <div name="Service" class="box-lg">*/
/*         {% for p in Produit %}*/
/*             <fieldset >*/
/*                 {% if p.media %}*/
/*                     {# render the related thumbnail #}*/
/* */
/* */
/*                   */
/*   <div class="row">*/
/*                 <div class="col-md-7">*/
/*                     <div class="jqzoom-right clearfix">*/
/*                         <ul class="jqzoom-list">*/
/*                             <li>*/
/*                                 <a class="zoomThumbActive" href="javascript:void(0)" data-rel="{gallery:'gal-1', smallimage: 'img/test_product_page/dress/4.jpg', largeimage: 'img/test_product_page/dress/4-b.jpg'}">*/
/*                                     <img src="{% path p.media, 'small' %}" alt="Image Alternative text" title="Image Title" />*/
/*                                 </a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="javascript:void(0)" data-rel="{gallery:'gal-1', smallimage: 'img/test_product_page/dress/1.jpg', largeimage: 'img/test_product_page/dress/1-b.jpg'}">*/
/*                                     <img src="{% path p.media, 'small' %}" alt="Image Alternative text" title="Image Title" />*/
/*                                 </a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="javascript:void(0)" data-rel="{gallery:'gal-1', smallimage: 'img/test_product_page/dress/2.jpg', largeimage: 'img/test_product_page/dress/2-b.jpg'}">*/
/*                                     <img src="{% path p.media, 'small' %}" alt="Image Alternative text" title="Image Title" />*/
/*                                 </a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="javascript:void(0)" data-rel="{gallery:'gal-1', smallimage: 'img/test_product_page/dress/3.jpg', largeimage: 'img/test_product_page/dress/3-b.jpg'}">*/
/*                                     <img src="{% path p.media, 'small' %}" alt="Image Alternative text" title="Image Title" />*/
/*                                 </a>*/
/*                             </li>*/
/*                         </ul>*/
/*                                   */
/*                         <div class="product-page-product-wrap jqzoom-stage jqzoom-stage-lg">*/
/*                             <div class="clearfix">*/
/*                                 <a href="{% path p.media, 'small' %}" id="jqzoom" data-rel="gal-1">*/
/*                                    <img  src=" {% path p.media, 'small' %}" alt="Image Alternative text" title="Image Title" />*/
/*                                 </a>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                                  {% endif %}*/
/*                    */
/*                 </div>            */
/*                     <legend >Categorie :{{p.categorie}}</legend>*/
/*                     <label><b> Produit :</b></label><label name="nomP">{{p.nomP}}</label><br>*/
/*                     <label><b>Description :</b></label><label name="decription">{{p.description}}</label><br>*/
/*                     <label><b>Prix :</b></label><label name="prix">{{p.prix}}</label><br>*/
/*                     <label><b>TVA :</b></label><label name="prix">{{p.tva}}</label><br>*/
/*                     <label><b>Reduction :</b></label><label name="prix">{{p.reduction}}</label><br>*/
/*                     <label><b>Quantite :</b></label><label name="prix">{{p.quantite}}</label><br>*/
/*                     <label><b>Prix avec reduction:</b></label><label name="prix">{{p.prix1}}</label><br>*/
/*                     <label><b>Prix final avec tva:</b></label><label name="prix">{{p.prix2}}</label><br>*/
/*                     <label><b>Gouvernorat:</b></label><label name="gouvernorat">{{p.zone.nom}}</label><br>*/
/* */
/*                     {% for n in note %}*/
/*                         <label><b>Note:</b></label><label name="gouvernorat">{{n.moy}}</label><br>*/
/*                     {% endfor %}*/
/*                     {% if enable | length == 0 %}*/
/* */
/*                         <form method="POST">*/
/*                             <input type="radio" name="note" id="group-1-0" value="5" /><label for="group-1-0"></label><!--*/
/*                             --><input type="radio" name="note" id="group-1-1" value="4" /><label for="group-1-1"></label><!--*/
/*                             --><input type="radio" name="note" id="group-1-2" value="3" /><label for="group-1-2"></label><!--*/
/*                             --><input type="radio" name="note" id="group-1-3" value="2" /><label for="group-1-3"></label><!--*/
/*                             --><input type="radio" name="note" id="group-1-4"  value="1" /><label for="group-1-4"></label>*/
/*                             <input type="submit" class="btn btn-lg btn-ghost btn-black" label='Rate' >*/
/*                             <div class="gap"></div>*/
/*                         </form>*/
/* */
/*                     {% endif %}*/
/* */
/* */
/*                       <a class="btn btn-lg btn-ghost btn-black" href="{{ path('produit_afficheP') }}"> Retourner au produits </a>*/
/*                     <a class="btn btn-lg btn-ghost btn-black" href="{{ path('produit_supprimerP',{'id':p.id}) }}"> Supprimer </a>*/
/*                     <a class="btn btn-lg btn-ghost btn-black" href="{{ path('produit_modifierP',{'id':p.id}) }}"> Modifier </a>*/
/*                     <a class="btn btn-lg btn-ghost btn-black" href="{{ path('ecommerce_panierAjout',{'id':p.id,'nom':p.nomP,'prix':p.prix}) }}"> Ajouter Panier </a>*/
/*                     <div class="gap"></div>*/
/* */
/*                     {% include 'FOSCommentBundle:Thread:async.html.twig' with {'id': p.id} %}*/
/*             </fieldset>*/
/* */
/*         {% endfor %}*/
/*         {{ socialButtons() }}*/
/*     </div>*/
/* {% endblock %}*/
/* */
