<?php

/* SonataUserBundle:Profile:action.html.twig */
class __TwigTemplate_270e2e891ff075971726fd99fff07ae783fe517de44747087729d4b86ea406b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 11
        $this->parent = $this->loadTemplate("ServiceBundle::layout2.html.twig", "SonataUserBundle:Profile:action.html.twig", 11);
        $this->blocks = array(
            't' => array($this, 'block_t'),
            'sonata_page_breadcrumb' => array($this, 'block_sonata_page_breadcrumb'),
            'sonata_profile_menu' => array($this, 'block_sonata_profile_menu'),
            'sonata_profile_content' => array($this, 'block_sonata_profile_content'),
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

    // line 12
    public function block_t($context, array $blocks = array())
    {
        // line 13
        $this->displayBlock('sonata_page_breadcrumb', $context, $blocks);
        // line 21
        echo " <header class=\"page-header\"><h1>Modifier votre profile</h1>
";
        // line 23
        echo "
<div class=\"sonata-user-show row row-fluid\">

    <div class=\"span2 col-lg-2\" style=\"padding: 8px 0;\">
        ";
        // line 27
        $this->displayBlock('sonata_profile_menu', $context, $blocks);
        // line 30
        echo "    </div>

    <div class=\"span10 col-lg-10\">
        ";
        // line 33
        $this->loadTemplate("SonataCoreBundle:FlashMessage:render.html.twig", "SonataUserBundle:Profile:action.html.twig", 33)->display($context);
        // line 34
        echo "
        ";
        // line 35
        $this->displayBlock('sonata_profile_content', $context, $blocks);
        // line 36
        echo "    </div>

</div>

";
    }

    // line 13
    public function block_sonata_page_breadcrumb($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        if ( !array_key_exists("breadcrumb_context", $context)) {
            // line 15
            echo "        ";
            $context["breadcrumb_context"] = "user_index";
            // line 16
            echo "    ";
        }
        // line 17
        echo "    <div class=\"row-fluid clearfix\">
        ";
        // line 18
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("breadcrumb", array("context" => (isset($context["breadcrumb_context"]) ? $context["breadcrumb_context"] : $this->getContext($context, "breadcrumb_context")), "current_uri" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "requestUri", array()))));
        echo "
    </div>
";
    }

    // line 27
    public function block_sonata_profile_menu($context, array $blocks = array())
    {
        // line 28
        echo "            ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => "sonata.user.block.menu"), array("current_uri" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "requestUri", array()))));
        echo "
        ";
    }

    // line 35
    public function block_sonata_profile_content($context, array $blocks = array())
    {
        echo "";
    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Profile:action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 35,  92 => 28,  89 => 27,  82 => 18,  79 => 17,  76 => 16,  73 => 15,  70 => 14,  67 => 13,  59 => 36,  57 => 35,  54 => 34,  52 => 33,  47 => 30,  45 => 27,  39 => 23,  36 => 21,  34 => 13,  31 => 12,  11 => 11,);
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
/* {% extends "ServiceBundle::layout2.html.twig" %}*/
/* {% block t %}*/
/* {% block sonata_page_breadcrumb %}*/
/*     {% if breadcrumb_context is not defined %}*/
/*         {% set breadcrumb_context = 'user_index' %}*/
/*     {% endif %}*/
/*     <div class="row-fluid clearfix">*/
/*         {{ sonata_block_render_event('breadcrumb', { 'context': breadcrumb_context, 'current_uri': app.request.requestUri }) }}*/
/*     </div>*/
/* {% endblock %}*/
/*  <header class="page-header"><h1>Modifier votre profile</h1>*/
/* {#<h2>{% block sonata_profile_title %}{% trans from 'SonataUserBundle' %}sonata_profile_title{% endtrans %}{% endblock %}</h2>#}*/
/* */
/* <div class="sonata-user-show row row-fluid">*/
/* */
/*     <div class="span2 col-lg-2" style="padding: 8px 0;">*/
/*         {% block sonata_profile_menu %}*/
/*             {{ sonata_block_render({'type': 'sonata.user.block.menu'}, {'current_uri': app.request.requestUri}) }}*/
/*         {% endblock %}*/
/*     </div>*/
/* */
/*     <div class="span10 col-lg-10">*/
/*         {% include 'SonataCoreBundle:FlashMessage:render.html.twig' %}*/
/* */
/*         {% block sonata_profile_content '' %}*/
/*     </div>*/
/* */
/* </div>*/
/* */
/* {% endblock t %}*/
