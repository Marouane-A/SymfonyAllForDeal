<?php

/* SonataNewsBundle:Post:view.html.twig */
class __TwigTemplate_cefbfc24e63524f47db242b16fb25160e1974deda99cede535706a78c7162c12 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 13
        $this->parent = $this->loadTemplate("ServiceBundle::layout2.html.twig", "SonataNewsBundle:Post:view.html.twig", 13);
        $this->blocks = array(
            't' => array($this, 'block_t'),
            'sonata_page_breadcrumb' => array($this, 'block_sonata_page_breadcrumb'),
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

    // line 14
    public function block_t($context, array $blocks = array())
    {
        // line 15
        echo "     <header class=\"page-header\"><h1>Les nouvelles promotions</h1>
  </header>
<div name=\"Promotions\" class=\"box-lg\">
";
        // line 18
        $this->displayBlock('sonata_page_breadcrumb', $context, $blocks);
        // line 23
        echo "
<article class=\"sonata-blog-post-container\">
    <header>
        <div class=\"sonata-blog-post-date-container\">
            <h5>
                <i class=\"icon-calendar\"></i>
                ";
        // line 29
        echo $this->env->getExtension('sonata_intl_datetime')->formatDate($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "publicationDateStart", array()));
        echo "
            </h5>
        </div>

        <h1 class=\"sonata-blog-post-title\">
            <a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("sonata_news_view", array("permalink" => $this->env->getExtension('sonata_news')->generatePermalink((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post"))))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "title", array()), "html", null, true);
        echo "</a>
            <span class=\"sonata-blog-post-author\">";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("archive_author", array("%author%" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "author", array())), "SonataNewsBundle"), "html", null, true);
        echo "</span>
        </h1>

        <div class=\"sonata-blog-post-information\">
            <div class=\"sonata-blog-post-tag-container\">
                <div class=\"sonata-blog-post-tag-title\">
                    ";
        // line 41
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "tags", array())) > 1)) {
            // line 42
            echo "                        <i class=\"icon-tags\"></i>
                    ";
        } else {
            // line 44
            echo "                        <i class=\"icon-tag\"></i>
                    ";
        }
        // line 46
        echo "                    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->transchoice("published_under", twig_length_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "tags", array())), array(), "SonataNewsBundle"), "html", null, true);
        echo "
                </div>
                <div class=\"sonata-blog-post-tag-list\">
                    ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "tags", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 50
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("sonata_news_tag", array("tag" => $this->getAttribute($context["tag"], "slug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "name", array()), "html", null, true);
            echo "</a>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "                </div>
            </div>
        </div>
    </header>

    <div class=\"sonata-blog-post-content\">
        ";
        // line 58
        echo $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "content", array());
        echo "
    </div>

    ";
        // line 61
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("SonataNewsBundle:Post:comments", array("postId" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()))), array());
        // line 62
        echo "
    ";
        // line 63
        if ($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "iscommentable", array())) {
            // line 64
            echo "        ";
            echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("SonataNewsBundle:Post:addCommentForm", array("postId" => $this->getAttribute(            // line 65
(isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()), "form" =>             // line 66
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")))), array());
            // line 68
            echo "    ";
        } else {
            // line 69
            echo "        <div>
            ";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message_comments_are_closed", array(), "SonataNewsBundle"), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 73
        echo "</article>
<div class =\"gap\"></div>
</div>
";
    }

    // line 18
    public function block_sonata_page_breadcrumb($context, array $blocks = array())
    {
        // line 19
        echo "    <div class=\"row-fluid clearfix\">
        ";
        // line 20
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("breadcrumb", array("context" => "news_post", "post" => (isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "current_uri" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "requestUri", array()))));
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataNewsBundle:Post:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 20,  150 => 19,  147 => 18,  140 => 73,  134 => 70,  131 => 69,  128 => 68,  126 => 66,  125 => 65,  123 => 64,  121 => 63,  118 => 62,  116 => 61,  110 => 58,  102 => 52,  91 => 50,  87 => 49,  80 => 46,  76 => 44,  72 => 42,  70 => 41,  61 => 35,  55 => 34,  47 => 29,  39 => 23,  37 => 18,  32 => 15,  29 => 14,  11 => 13,);
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
/* {% extends "ServiceBundle::layout2.html.twig" %}*/
/* {% block t %}*/
/*      <header class="page-header"><h1>Les nouvelles promotions</h1>*/
/*   </header>*/
/* <div name="Promotions" class="box-lg">*/
/* {% block sonata_page_breadcrumb %}*/
/*     <div class="row-fluid clearfix">*/
/*         {{ sonata_block_render_event('breadcrumb', { 'context': 'news_post', 'post': post, 'current_uri': app.request.requestUri }) }}*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* <article class="sonata-blog-post-container">*/
/*     <header>*/
/*         <div class="sonata-blog-post-date-container">*/
/*             <h5>*/
/*                 <i class="icon-calendar"></i>*/
/*                 {{ post.publicationDateStart | format_date }}*/
/*             </h5>*/
/*         </div>*/
/* */
/*         <h1 class="sonata-blog-post-title">*/
/*             <a href="{{ url('sonata_news_view', { 'permalink': sonata_news_permalink(post) }) }}">{{ post.title }}</a>*/
/*             <span class="sonata-blog-post-author">{{ 'archive_author'|trans({'%author%': post.author }, 'SonataNewsBundle') }}</span>*/
/*         </h1>*/
/* */
/*         <div class="sonata-blog-post-information">*/
/*             <div class="sonata-blog-post-tag-container">*/
/*                 <div class="sonata-blog-post-tag-title">*/
/*                     {% if post.tags|length > 1 %}*/
/*                         <i class="icon-tags"></i>*/
/*                     {% else %}*/
/*                         <i class="icon-tag"></i>*/
/*                     {% endif %}*/
/*                     {{ 'published_under'|transchoice(post.tags|length, {}, 'SonataNewsBundle') }}*/
/*                 </div>*/
/*                 <div class="sonata-blog-post-tag-list">*/
/*                     {% for tag in post.tags %}*/
/*                         <a href="{{ url('sonata_news_tag', { 'tag': tag.slug } ) }}">{{ tag.name }}</a>*/
/*                     {% endfor %}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </header>*/
/* */
/*     <div class="sonata-blog-post-content">*/
/*         {{ post.content|raw }}*/
/*     </div>*/
/* */
/*     {% render(controller('SonataNewsBundle:Post:comments', {'postId': post.id})) %}*/
/* */
/*     {% if post.iscommentable %}*/
/*         {% render(controller('SonataNewsBundle:Post:addCommentForm', {*/
/*             'postId': post.id,*/
/*             'form': form*/
/*         })) %}*/
/*     {% else %}*/
/*         <div>*/
/*             {{ 'message_comments_are_closed'|trans({}, 'SonataNewsBundle') }}*/
/*         </div>*/
/*     {% endif %}*/
/* </article>*/
/* <div class ="gap"></div>*/
/* </div>*/
/* {% endblock t %}*/
