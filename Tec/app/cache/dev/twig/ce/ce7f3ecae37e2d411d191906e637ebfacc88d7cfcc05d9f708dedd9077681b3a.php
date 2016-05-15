<?php

/* EcommerceBundle:Default:home.html.twig */
class __TwigTemplate_0a97a5d6225a106ed4da42fee6cc5c21d4910739e2acd89865bcb7ee8da307bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EcommerceBundle::layout.html.twig", "EcommerceBundle:Default:home.html.twig", 1);
        $this->blocks = array(
            't' => array($this, 'block_t'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EcommerceBundle::layout.html.twig";
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
";
    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'EcommerceBundle::layout.html.twig' %}*/
/* {% block t %}*/
/* */
/* {% endblock %}*/
