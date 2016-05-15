<?php

/* FOSCommentBundle:Thread:comment_votes.html.twig */
class __TwigTemplate_38c34e13c31bbc8f9d9aaee4bd82233c6b5554aa9800ca20c6a68ccd71706dae extends Twig_Template
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
        // line 11
        echo "
";
        // line 12
        echo $this->env->getExtension('translator')->getTranslator()->trans("fos_comment_comment_vote_score", array(), "FOSCommentBundle");
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["commentScore"]) ? $context["commentScore"] : $this->getContext($context, "commentScore")), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "FOSCommentBundle:Thread:comment_votes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 12,  19 => 11,);
    }
}
/* {#*/
/* */
/*  This file is part of the FOSCommentBundle package.*/
/* */
/*  (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>*/
/* */
/*  This source file is subject to the MIT license that is bundled*/
/*  with this source code in the file LICENSE.*/
/* */
/* #}*/
/* */
/* {% trans from 'FOSCommentBundle' %}fos_comment_comment_vote_score{% endtrans %} {{ commentScore }}*/
/* */
