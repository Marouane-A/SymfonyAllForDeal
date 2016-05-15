<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_197985d4fb972d02b27c8935142762ea83c9aaebec82362aa56e566934fcf5f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "



<div>
    ";
        // line 6
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 8
        echo "</div>
";
    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 7
        echo "    ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 7,  34 => 6,  29 => 8,  27 => 6,  20 => 1,);
    }
}
/* */
/* */
/* */
/* */
/* <div>*/
/*     {% block fos_user_content %}*/
/*     {% endblock fos_user_content %}*/
/* </div>*/
/* */
