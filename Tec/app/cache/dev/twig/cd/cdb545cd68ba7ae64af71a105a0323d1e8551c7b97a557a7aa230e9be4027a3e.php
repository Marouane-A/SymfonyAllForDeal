<?php

/* EcommerceBundle:Default:index.html.twig */
class __TwigTemplate_f9711c38758be82f90b93b03076573a9df8d4c5509834c604fbd6d373c09e889 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EcommerceBundle::layout2.html.twig", "EcommerceBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            't' => array($this, 'block_t'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EcommerceBundle::layout2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_t($context, array $blocks = array())
    {
        // line 3
        echo "   
 
    
    
  <div class=\"container\">
     
                            
                   
            <header class=\"page-header\">
                <h1 class=\"page-title\">My Shopping Bag</h1>
            </header>
            <div class=\"row\">
                <div class=\"col-md-10\">
                    <table class=\"table table table-shopping-cart\">
                        
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Title</th>
                                <th>Price</th>
                                <th>Quality</th>
                                <th>Total</th>
                                <th>Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 29
        $context["i"] = 0;
        // line 30
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ids"]) ? $context["ids"] : $this->getContext($context, "ids")));
        foreach ($context['_seq'] as $context["_key"] => $context["x"]) {
            // line 31
            echo "                            <tr>
                                <td class=\"table-shopping-cart-img\">
                                    <a href=\"#\">
                                        <img src=\"img/cart/1.jpg\" alt=\"Image Alternative text\" title=\"Image Title\" />
                                    </a>
                                </td>
                                <td class=\"table-shopping-cart-title\"><a href=\"#\">";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["names"]) ? $context["names"] : $this->getContext($context, "names")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "html", null, true);
            echo "</a>
                                </td>
                                
                                <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prices"]) ? $context["prices"] : $this->getContext($context, "prices")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "html", null, true);
            echo " \$</td>
                                <td>
                                    <input class=\"form-control table-shopping-qty\" type=\"text\" value=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["qnts"]) ? $context["qnts"] : $this->getContext($context, "qnts")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "html", null, true);
            echo "\" />
                                </td>
                                <td>";
            // line 44
            echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["prices"]) ? $context["prices"] : $this->getContext($context, "prices")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array") * $this->getAttribute((isset($context["qnts"]) ? $context["qnts"] : $this->getContext($context, "qnts")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array")), "html", null, true);
            echo " \$</td>
                                <td>
  
                                    <a class=\"fa fa-close table-shopping-remove\" href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ecommerce_panierSupprimer", array("id" => $context["x"])), "html", null, true);
            echo "\"></a>
                                    <!-- <a class=\"fa fa-close table-shopping-remove\" href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ecommerce_panierSupprimer", array("id" => $context["x"])), "html", null, true);
            echo "\"></a> -->
                                </td>
                                ";
            // line 50
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 51
            echo "                            </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['x'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "                           
                        </tbody>
                    </table>
                    <div class=\"gap gap-small\"></div>
                </div>
                <div class=\"col-md-2\">
                    <ul class=\"shopping-cart-total-list\">
                        <li><span>Prix</span><span>\$2199</span>
                        </li>
                        <li><span>Shopping</span><span>Free</span>
                        </li>
                        <li><span>Taxes</span><span>\$0</span>
                        </li>
                        <li><span>Total</span><span>\$2199</span>
                        </li>
                    </ul><a class=\"btn btn-primary\" href=\"#\">Checkout</a>
                </div>
            </div>
            <ul class=\"list-inline\">
                <li><a class=\"btn btn-default\" href=\"#\">Continue Shopping</a>
                </li>
                <li><a class=\"btn btn-default\" href=\"#\">Update Bag</a>
                </li>
            </ul>
        </div>
";
    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 53,  107 => 51,  105 => 50,  100 => 48,  96 => 47,  90 => 44,  85 => 42,  80 => 40,  74 => 37,  66 => 31,  61 => 30,  59 => 29,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'EcommerceBundle::layout2.html.twig' %}*/
/* {% block t %}*/
/*    */
/*  */
/*     */
/*     */
/*   <div class="container">*/
/*      */
/*                             */
/*                    */
/*             <header class="page-header">*/
/*                 <h1 class="page-title">My Shopping Bag</h1>*/
/*             </header>*/
/*             <div class="row">*/
/*                 <div class="col-md-10">*/
/*                     <table class="table table table-shopping-cart">*/
/*                         */
/*                         <thead>*/
/*                             <tr>*/
/*                                 <th>Product</th>*/
/*                                 <th>Title</th>*/
/*                                 <th>Price</th>*/
/*                                 <th>Quality</th>*/
/*                                 <th>Total</th>*/
/*                                 <th>Remove</th>*/
/*                             </tr>*/
/*                         </thead>*/
/*                         <tbody>*/
/*                             {% set i=0 %}*/
/*                             {% for x in ids %}*/
/*                             <tr>*/
/*                                 <td class="table-shopping-cart-img">*/
/*                                     <a href="#">*/
/*                                         <img src="img/cart/1.jpg" alt="Image Alternative text" title="Image Title" />*/
/*                                     </a>*/
/*                                 </td>*/
/*                                 <td class="table-shopping-cart-title"><a href="#">{{names[i]}}</a>*/
/*                                 </td>*/
/*                                 */
/*                                 <td>{{prices[i]}} $</td>*/
/*                                 <td>*/
/*                                     <input class="form-control table-shopping-qty" type="text" value="{{qnts[i]}}" />*/
/*                                 </td>*/
/*                                 <td>{{prices[i] * qnts[i]}} $</td>*/
/*                                 <td>*/
/*   */
/*                                     <a class="fa fa-close table-shopping-remove" href="{{ path('ecommerce_panierSupprimer',{'id':x})}}"></a>*/
/*                                     <!-- <a class="fa fa-close table-shopping-remove" href="{{ path('ecommerce_panierSupprimer',{'id':x})}}"></a> -->*/
/*                                 </td>*/
/*                                 {% set i=i+1 %}*/
/*                             </tr>*/
/*                             {% endfor %}*/
/*                            */
/*                         </tbody>*/
/*                     </table>*/
/*                     <div class="gap gap-small"></div>*/
/*                 </div>*/
/*                 <div class="col-md-2">*/
/*                     <ul class="shopping-cart-total-list">*/
/*                         <li><span>Prix</span><span>$2199</span>*/
/*                         </li>*/
/*                         <li><span>Shopping</span><span>Free</span>*/
/*                         </li>*/
/*                         <li><span>Taxes</span><span>$0</span>*/
/*                         </li>*/
/*                         <li><span>Total</span><span>$2199</span>*/
/*                         </li>*/
/*                     </ul><a class="btn btn-primary" href="#">Checkout</a>*/
/*                 </div>*/
/*             </div>*/
/*             <ul class="list-inline">*/
/*                 <li><a class="btn btn-default" href="#">Continue Shopping</a>*/
/*                 </li>*/
/*                 <li><a class="btn btn-default" href="#">Update Bag</a>*/
/*                 </li>*/
/*             </ul>*/
/*         </div>*/
/* {% endblock %}*/
