<?php

/* FOSCommentBundle:Thread:comment_content.html.twig */
class __TwigTemplate_7145835cc411e1cb9f82c7636aad063594398f02955069cb2e156c873ead0b4b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_comment_comment' => array($this, 'block_fos_comment_comment'),
            'fos_comment_comment_body' => array($this, 'block_fos_comment_comment_body'),
            'fos_comment_comment_metas' => array($this, 'block_fos_comment_comment_metas'),
            'fos_comment_comment_metas_authorline' => array($this, 'block_fos_comment_comment_metas_authorline'),
            'fos_comment_comment_metas_edit' => array($this, 'block_fos_comment_comment_metas_edit'),
            'fos_comment_comment_metas_delete' => array($this, 'block_fos_comment_comment_metas_delete'),
            'fos_comment_comment_metas_voting' => array($this, 'block_fos_comment_comment_metas_voting'),
            'fos_comment_comment_children' => array($this, 'block_fos_comment_comment_children'),
            'fos_comment_comment_reply' => array($this, 'block_fos_comment_comment_reply'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('fos_comment_comment', $context, $blocks);
    }

    public function block_fos_comment_comment($context, array $blocks = array())
    {
        // line 13
        echo "
    <div id=\"fos_comment_";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "id", array()), "html", null, true);
        echo "\" class=\"fos_comment_comment_show fos_comment_comment_depth_";
        echo twig_escape_filter($this->env, (isset($context["depth"]) ? $context["depth"] : $this->getContext($context, "depth")), "html", null, true);
        echo "\" ";
        if ((array_key_exists("parent", $context) &&  !(null === (isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent"))))) {
            echo "data-parent=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "id", array()), "html", null, true);
            echo "\"";
        }
        echo ">
        <legend >
            <div id=\"fos_comment_comment_body_";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "id", array()), "html", null, true);
        echo "\" class=\"fos_comment_comment_body\">
                ";
        // line 17
        $this->displayBlock('fos_comment_comment_body', $context, $blocks);
        // line 28
        echo "            </div>


            <div class=\"fos_comment_comment_metas\">
                ";
        // line 32
        $this->displayBlock('fos_comment_comment_metas', $context, $blocks);
        // line 74
        echo "
                ";
        // line 75
        $this->displayBlock('fos_comment_comment_children', $context, $blocks);
        // line 98
        echo "            </div>
        </legend >
    </div>
";
    }

    // line 17
    public function block_fos_comment_comment_body($context, array $blocks = array())
    {
        // line 18
        echo "                    ";
        if ($this->env->getExtension('fos_comment')->isCommentInState((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), twig_constant("FOS\\CommentBundle\\Model\\CommentInterface::STATE_DELETED"))) {
            // line 19
            echo "                        ";
            echo $this->env->getExtension('translator')->getTranslator()->trans("fos_comment_comment_deleted", array(), "FOSCommentBundle");
            // line 20
            echo "                    ";
        } else {
            // line 21
            echo "                        ";
            if ($this->env->getExtension('fos_comment')->isRawComment((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")))) {
                // line 22
                echo "                            ";
                echo $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "rawBody", array());
                echo "
                        ";
            } else {
                // line 24
                echo "                            ";
                echo nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "body", array()), "html", null, true));
                echo "
                        ";
            }
            // line 26
            echo "                    ";
        }
        // line 27
        echo "                ";
    }

    // line 32
    public function block_fos_comment_comment_metas($context, array $blocks = array())
    {
        // line 33
        echo "                    ";
        $this->displayBlock('fos_comment_comment_metas_authorline', $context, $blocks);
        // line 43
        echo "
                    ";
        // line 44
        $this->displayBlock('fos_comment_comment_metas_edit', $context, $blocks);
        // line 49
        echo "
                    ";
        // line 50
        $this->displayBlock('fos_comment_comment_metas_delete', $context, $blocks);
        // line 61
        echo "
                    ";
        // line 62
        $this->displayBlock('fos_comment_comment_metas_voting', $context, $blocks);
        // line 73
        echo "                ";
    }

    // line 33
    public function block_fos_comment_comment_metas_authorline($context, array $blocks = array())
    {
        // line 34
        echo "                        ";
        echo $this->env->getExtension('translator')->getTranslator()->trans("fos_comment_comment_show_by", array(), "FOSCommentBundle");
        // line 35
        echo "                        <span class=\"fos_comment_comment_authorname\">
                            ";
        // line 36
        if ($this->env->getExtension('fos_comment')->isCommentInState((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), twig_constant("FOS\\CommentBundle\\Model\\CommentInterface::STATE_DELETED"))) {
            // line 37
            echo "                                ";
            echo $this->env->getExtension('translator')->getTranslator()->trans("fos_comment_comment_deleted", array(), "FOSCommentBundle");
            // line 38
            echo "                            ";
        } else {
            // line 39
            echo "                                ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "authorName", array()), "html", null, true);
            echo "
                            ";
        }
        // line 41
        echo "                        </span> - ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "createdAt", array())), "html", null, true);
        echo "
                    ";
    }

    // line 44
    public function block_fos_comment_comment_metas_edit($context, array $blocks = array())
    {
        // line 45
        echo "                        ";
        if ($this->env->getExtension('fos_comment')->canEditComment((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")))) {
            // line 46
            echo "                            <button  class=\"fos_comment_comment_score\" data-container=\"#fos_comment_comment_body_";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "id", array()), "html", null, true);
            echo "\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("fos_comment_edit_thread_comment", array("id" => $this->getAttribute($this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "thread", array()), "id", array()), "commentId" => $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "id", array()))), "html", null, true);
            echo "\" class=\"fos_comment_comment_edit_show_form\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("fos_comment_comment_edit", array(), "FOSCommentBundle");
            echo "</button>
                        ";
        }
        // line 48
        echo "                    ";
    }

    // line 50
    public function block_fos_comment_comment_metas_delete($context, array $blocks = array())
    {
        // line 51
        echo "                        ";
        if ($this->env->getExtension('fos_comment')->canDeleteComment((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")))) {
            // line 52
            echo "                            ";
            if ($this->env->getExtension('fos_comment')->isCommentInState((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), twig_constant("FOS\\CommentBundle\\Model\\CommentInterface::STATE_DELETED"))) {
                // line 53
                echo "                                ";
                // line 54
                echo "                                <button  class=\"fos_comment_comment_score\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("fos_comment_remove_thread_comment", array("id" => $this->getAttribute($this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "thread", array()), "id", array()), "commentId" => $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "id", array()), "value" => twig_constant("FOS\\CommentBundle\\Model\\CommentInterface::STATE_VISIBLE"))), "html", null, true);
                echo "\" class=\"fos_comment_comment_remove\">";
                echo $this->env->getExtension('translator')->getTranslator()->trans("fos_comment_comment_undelete", array(), "FOSCommentBundle");
                echo "</button>
                            ";
            } else {
                // line 56
                echo "                                ";
                // line 57
                echo "                                <button  class=\"btn btn-lg btn-ghost btn-black\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("fos_comment_remove_thread_comment", array("id" => $this->getAttribute($this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "thread", array()), "id", array()), "commentId" => $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "id", array()), "value" => twig_constant("FOS\\CommentBundle\\Model\\CommentInterface::STATE_DELETED"))), "html", null, true);
                echo "\" class=\"fos_comment_comment_remove\">";
                echo $this->env->getExtension('translator')->getTranslator()->trans("fos_comment_comment_delete", array(), "FOSCommentBundle");
                echo "</button>
                            ";
            }
            // line 59
            echo "                        ";
        }
        // line 60
        echo "                    ";
    }

    // line 62
    public function block_fos_comment_comment_metas_voting($context, array $blocks = array())
    {
        // line 63
        echo "                        ";
        if ($this->env->getExtension('fos_comment')->canVote((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")))) {
            // line 64
            echo "                            <div class=\"fos_comment_comment_voting\">
                                <button class=\"btn btn-lg btn-ghost btn-red\" data-url=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("fos_comment_new_thread_comment_votes", array("id" => $this->getAttribute($this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "thread", array()), "id", array()), "commentId" => $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "id", array()), "value" => 1)), "html", null, true);
            echo "\" class=\"fos_comment_comment_vote\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("fos_comment_comment_show_voteup", array(), "FOSCommentBundle");
            echo "</button>
                                <button  class=\"btn btn-lg btn-ghost btn-black\" data-url=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("fos_comment_new_thread_comment_votes", array("id" => $this->getAttribute($this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "thread", array()), "id", array()), "commentId" => $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "id", array()), "value" =>  -1)), "html", null, true);
            echo "\" class=\"fos_comment_comment_vote\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("fos_comment_comment_show_votedown", array(), "FOSCommentBundle");
            echo "</button>

                                ";
            // line 69
            echo "                                <br>
                            </div>
                        ";
        }
        // line 72
        echo "                    ";
    }

    // line 75
    public function block_fos_comment_comment_children($context, array $blocks = array())
    {
        // line 76
        echo "                    ";
        if ( !((isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")) === "flat")) {
            // line 77
            echo "                        ";
            if ($this->env->getExtension('fos_comment')->canComment((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")))) {
                // line 78
                echo "                            <div class=\"fos_comment_comment_reply\">
                                ";
                // line 79
                $this->displayBlock('fos_comment_comment_reply', $context, $blocks);
                // line 82
                echo "                            </div>
                        ";
            }
            // line 84
            echo "
                        <div class=\"fos_comment_comment_replies\">

                            ";
            // line 87
            if (array_key_exists("children", $context)) {
                // line 88
                echo "                                ";
                $this->loadTemplate("FOSCommentBundle:Thread:comments.html.twig", "FOSCommentBundle:Thread:comment_content.html.twig", 88)->display(array_merge($context, array("comments" => (isset($context["children"]) ? $context["children"] : $this->getContext($context, "children")), "depth" => ((isset($context["depth"]) ? $context["depth"] : $this->getContext($context, "depth")) + 1), "parent" => (isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "view" => (isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")))));
                // line 89
                echo "                            ";
            }
            // line 90
            echo "
                        </div>


                    ";
        } elseif (((        // line 94
(isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")) === "flat") && array_key_exists("children", $context))) {
            // line 95
            echo "                        ";
            $this->loadTemplate("FOSCommentBundle:Thread:comments.html.twig", "FOSCommentBundle:Thread:comment_content.html.twig", 95)->display(array_merge($context, array("comments" => (isset($context["children"]) ? $context["children"] : $this->getContext($context, "children")), "depth" => ((isset($context["depth"]) ? $context["depth"] : $this->getContext($context, "depth")) + 1), "parent" => (isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "view" => (isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")))));
            // line 96
            echo "                    ";
        }
        // line 97
        echo "                ";
    }

    // line 79
    public function block_fos_comment_comment_reply($context, array $blocks = array())
    {
        // line 80
        echo "                                    <button  class=\"btn btn-lg btn-ghost btn-blue\" data-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("fos_comment_new_thread_comments", array("id" => $this->getAttribute($this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "thread", array()), "id", array()))), "html", null, true);
        echo "\" data-name=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "authorName", array()), "html", null, true);
        echo "\" data-parent-id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "id", array()), "html", null, true);
        echo "\" class=\"fos_comment_comment_reply_show_form\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("fos_comment_comment_show_reply", array(), "FOSCommentBundle");
        echo "</button> 
                                ";
    }

    public function getTemplateName()
    {
        return "FOSCommentBundle:Thread:comment_content.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  307 => 80,  304 => 79,  300 => 97,  297 => 96,  294 => 95,  292 => 94,  286 => 90,  283 => 89,  280 => 88,  278 => 87,  273 => 84,  269 => 82,  267 => 79,  264 => 78,  261 => 77,  258 => 76,  255 => 75,  251 => 72,  246 => 69,  239 => 66,  233 => 65,  230 => 64,  227 => 63,  224 => 62,  220 => 60,  217 => 59,  209 => 57,  207 => 56,  199 => 54,  197 => 53,  194 => 52,  191 => 51,  188 => 50,  184 => 48,  174 => 46,  171 => 45,  168 => 44,  161 => 41,  155 => 39,  152 => 38,  149 => 37,  147 => 36,  144 => 35,  141 => 34,  138 => 33,  134 => 73,  132 => 62,  129 => 61,  127 => 50,  124 => 49,  122 => 44,  119 => 43,  116 => 33,  113 => 32,  109 => 27,  106 => 26,  100 => 24,  94 => 22,  91 => 21,  88 => 20,  85 => 19,  82 => 18,  79 => 17,  72 => 98,  70 => 75,  67 => 74,  65 => 32,  59 => 28,  57 => 17,  53 => 16,  40 => 14,  37 => 13,  31 => 12,  28 => 11,);
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
/* {% block fos_comment_comment %}*/
/* */
/*     <div id="fos_comment_{{ comment.id }}" class="fos_comment_comment_show fos_comment_comment_depth_{{ depth }}" {% if parent is defined and parent is not null %}data-parent="{{ parent.id }}"{% endif %}>*/
/*         <legend >*/
/*             <div id="fos_comment_comment_body_{{ comment.id }}" class="fos_comment_comment_body">*/
/*                 {% block fos_comment_comment_body %}*/
/*                     {% if comment is fos_comment_in_state(constant('FOS\\CommentBundle\\Model\\CommentInterface::STATE_DELETED')) %}*/
/*                         {% trans from 'FOSCommentBundle' %}fos_comment_comment_deleted{% endtrans %}*/
/*                     {% else %}*/
/*                         {% if comment is fos_comment_raw %}*/
/*                             {{ comment.rawBody | raw }}*/
/*                         {% else %}*/
/*                             {{ comment.body | nl2br }}*/
/*                         {% endif %}*/
/*                     {% endif %}*/
/*                 {% endblock fos_comment_comment_body %}*/
/*             </div>*/
/* */
/* */
/*             <div class="fos_comment_comment_metas">*/
/*                 {% block fos_comment_comment_metas %}*/
/*                     {% block fos_comment_comment_metas_authorline %}*/
/*                         {% trans from 'FOSCommentBundle' %}fos_comment_comment_show_by{% endtrans %}*/
/*                         <span class="fos_comment_comment_authorname">*/
/*                             {% if comment is fos_comment_in_state(constant('FOS\\CommentBundle\\Model\\CommentInterface::STATE_DELETED')) %}*/
/*                                 {% trans from 'FOSCommentBundle' %}fos_comment_comment_deleted{% endtrans %}*/
/*                             {% else %}*/
/*                                 {{ comment.authorName }}*/
/*                             {% endif %}*/
/*                         </span> - {{ comment.createdAt|date }}*/
/*                     {% endblock fos_comment_comment_metas_authorline %}*/
/* */
/*                     {% block fos_comment_comment_metas_edit %}*/
/*                         {% if fos_comment_can_edit_comment(comment) %}*/
/*                             <button  class="fos_comment_comment_score" data-container="#fos_comment_comment_body_{{ comment.id }}" data-url="{{ url("fos_comment_edit_thread_comment", {"id": comment.thread.id, "commentId": comment.id}) }}" class="fos_comment_comment_edit_show_form">{% trans from 'FOSCommentBundle' %}fos_comment_comment_edit{% endtrans %}</button>*/
/*                         {% endif %}*/
/*                     {% endblock fos_comment_comment_metas_edit %}*/
/* */
/*                     {% block fos_comment_comment_metas_delete %}*/
/*                         {% if fos_comment_can_delete_comment(comment) %}*/
/*                             {% if comment is fos_comment_in_state(constant('FOS\\CommentBundle\\Model\\CommentInterface::STATE_DELETED')) %}*/
/*                                 {# undelete #}*/
/*                                 <button  class="fos_comment_comment_score" data-url="{{ url("fos_comment_remove_thread_comment", {"id": comment.thread.id, "commentId": comment.id, "value": constant('FOS\\CommentBundle\\Model\\CommentInterface::STATE_VISIBLE') }) }}" class="fos_comment_comment_remove">{% trans from 'FOSCommentBundle' %}fos_comment_comment_undelete{% endtrans %}</button>*/
/*                             {% else %}*/
/*                                 {# delete #}*/
/*                                 <button  class="btn btn-lg btn-ghost btn-black" data-url="{{ url("fos_comment_remove_thread_comment", {"id": comment.thread.id, "commentId": comment.id, "value":  constant('FOS\\CommentBundle\\Model\\CommentInterface::STATE_DELETED')}) }}" class="fos_comment_comment_remove">{% trans from 'FOSCommentBundle' %}fos_comment_comment_delete{% endtrans %}</button>*/
/*                             {% endif %}*/
/*                         {% endif %}*/
/*                     {% endblock fos_comment_comment_metas_delete %}*/
/* */
/*                     {% block fos_comment_comment_metas_voting %}*/
/*                         {% if fos_comment_can_vote(comment) %}*/
/*                             <div class="fos_comment_comment_voting">*/
/*                                 <button class="btn btn-lg btn-ghost btn-red" data-url="{{ url("fos_comment_new_thread_comment_votes", {"id": comment.thread.id, "commentId": comment.id, "value": 1}) }}" class="fos_comment_comment_vote">{% trans from 'FOSCommentBundle' %}fos_comment_comment_show_voteup{% endtrans %}</button>*/
/*                                 <button  class="btn btn-lg btn-ghost btn-black" data-url="{{ url("fos_comment_new_thread_comment_votes", {"id": comment.thread.id, "commentId": comment.id, "value": -1}) }}" class="fos_comment_comment_vote">{% trans from 'FOSCommentBundle' %}fos_comment_comment_show_votedown{% endtrans %}</button>*/
/* */
/*                                 {#                        <div class="fos_comment_comment_score" id="fos_comment_score_{{ comment.id }}">{% include "FOSCommentBundle:Thread:comment_votes.html.twig" with { 'commentScore': comment.score } %}</div>#}*/
/*                                 <br>*/
/*                             </div>*/
/*                         {% endif %}*/
/*                     {% endblock fos_comment_comment_metas_voting %}*/
/*                 {% endblock fos_comment_comment_metas %}*/
/* */
/*                 {% block fos_comment_comment_children %}*/
/*                     {% if view is not same as('flat') %}*/
/*                         {% if fos_comment_can_comment(comment) %}*/
/*                             <div class="fos_comment_comment_reply">*/
/*                                 {% block fos_comment_comment_reply %}*/
/*                                     <button  class="btn btn-lg btn-ghost btn-blue" data-url="{{ url('fos_comment_new_thread_comments', {"id": comment.thread.id}) }}" data-name="{{ comment.authorName }}" data-parent-id="{{ comment.id }}" class="fos_comment_comment_reply_show_form">{% trans from 'FOSCommentBundle' %}fos_comment_comment_show_reply{% endtrans %}</button> */
/*                                 {% endblock fos_comment_comment_reply %}*/
/*                             </div>*/
/*                         {% endif %}*/
/* */
/*                         <div class="fos_comment_comment_replies">*/
/* */
/*                             {% if children is defined %}*/
/*                                 {% include "FOSCommentBundle:Thread:comments.html.twig" with { "comments": children, "depth": depth + 1, "parent": comment, "view": view } %}*/
/*                             {% endif %}*/
/* */
/*                         </div>*/
/* */
/* */
/*                     {% elseif view is same as('flat') and children is defined %}*/
/*                         {% include "FOSCommentBundle:Thread:comments.html.twig" with { "comments": children, "depth": depth + 1, "parent": comment, "view": view } %}*/
/*                     {% endif %}*/
/*                 {% endblock fos_comment_comment_children %}*/
/*             </div>*/
/*         </legend >*/
/*     </div>*/
/* {% endblock fos_comment_comment %}*/
/* */
