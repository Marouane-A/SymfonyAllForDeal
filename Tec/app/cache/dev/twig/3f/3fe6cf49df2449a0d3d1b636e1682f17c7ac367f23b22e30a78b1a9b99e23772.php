<?php

/* SonataNewsBundle:Post:comment_form.html.twig */
class __TwigTemplate_897b4cae20039727977694de88c99952808709bb26b91701d4475dd40b3df876 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 13
        echo "
<div class=\"panel panel-default\">
    
    <div class=\"panel-heading\">
        <h3>";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_leave_comment", array(), "SonataNewsBundle"), "html", null, true);
        echo "</h3>
    </div>
    
    <div class=\"panel-body\">
             <div class=\"col-md-8\">
        <form action=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("sonata_news_add_comment", array("id" => (isset($context["post_id"]) ? $context["post_id"] : $this->getContext($context, "post_id")))), "html", null, true);
        echo "\" method=\"POST\" class=\"form-horizontal\" role=\"form\">
                 <label>Nom </label> <input  class=\"form-control\" ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget');
        echo "
                 <label>Email</label>  <input  class=\"form-control\" ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
        echo "
                   <label>URL</label><input  class=\"form-control\" ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "url", array()), 'widget');
        echo "
                   <label>Message</label><input  class=\"form-control\" ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "message", array()), 'widget');
        echo "
                   <br>
                 
            <div class=\"form-actions\">
                <button type=\"submit\" class=\"btn btn-primary\"><i class=\"glyphicon glyphicon-pencil\"></i>&nbsp;";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_add_comment", array(), "SonataNewsBundle"), "html", null, true);
        echo "</button>
            </div>
             
        </form>
    </div>
         </div>";
    }

    public function getTemplateName()
    {
        return "SonataNewsBundle:Post:comment_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 30,  49 => 26,  45 => 25,  41 => 24,  37 => 23,  33 => 22,  25 => 17,  19 => 13,);
    }
}
/* {#*/
/* */
/* /**/
/*  * This file is part of the Sonata package.*/
/*  **/
/*  * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/*  **/
/*  * For the full copyright and license information, please view the LICENSE*/
/*  * file that was distributed with this source code.*/
/*  *//* */
/* */
/* #}*/
/* */
/* <div class="panel panel-default">*/
/*     */
/*     <div class="panel-heading">*/
/*         <h3>{{'title_leave_comment'|trans({}, 'SonataNewsBundle') }}</h3>*/
/*     </div>*/
/*     */
/*     <div class="panel-body">*/
/*              <div class="col-md-8">*/
/*         <form action="{{ url('sonata_news_add_comment', {'id': post_id}) }}" method="POST" class="form-horizontal" role="form">*/
/*                  <label>Nom </label> <input  class="form-control" {{ form_widget(form.name)}}*/
/*                  <label>Email</label>  <input  class="form-control" {{ form_widget(form.email)}}*/
/*                    <label>URL</label><input  class="form-control" {{ form_widget(form.url)}}*/
/*                    <label>Message</label><input  class="form-control" {{ form_widget(form.message)}}*/
/*                    <br>*/
/*                  */
/*             <div class="form-actions">*/
/*                 <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-pencil"></i>&nbsp;{{'btn_add_comment'|trans({}, 'SonataNewsBundle') }}</button>*/
/*             </div>*/
/*              */
/*         </form>*/
/*     </div>*/
/*          </div>*/
