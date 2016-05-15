<?php

/* SonataNewsBundle:Post:archive.html.twig */
class __TwigTemplate_4b1c3fee85d9b649561cd459960307bd84c267a5a2b19587e807712394866429 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 14
        $this->parent = $this->loadTemplate("ServiceBundle::layout2.html.twig", "SonataNewsBundle:Post:archive.html.twig", 14);
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

    // line 15
    public function block_t($context, array $blocks = array())
    {
        // line 16
        echo "
 
";
        // line 18
        $this->displayBlock('sonata_page_breadcrumb', $context, $blocks);
        // line 23
        echo "
 <header class=\"page-header\"><h1>";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_archive", array(), "SonataNewsBundle"), "html", null, true);
        echo "</h1> </header>
<div name=\"Posts\" class=\"box-lg\">
<div class=\"sonata-blog-post-list\">
    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "getResults", array(), "method"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 28
            echo "        <div class=\"sonata-blog-post-container\">
            <header>
                <h2 class=\"sonata-blog-post-title\">
                    <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("sonata_news_view", array("permalink" => $this->env->getExtension('sonata_news')->generatePermalink($context["post"]))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "</a>
                </h2>

                <div class=\"sonata-blog-post-information\">
                    <span class=\"sonata-blog-post-author\">";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("archive_author", array("%author%" => $this->getAttribute($context["post"], "author", array())), "SonataNewsBundle"), "html", null, true);
            echo "</span> |

                    <i class=\"icon-calendar\"></i>
                    ";
            // line 38
            echo $this->env->getExtension('sonata_intl_datetime')->formatDate($this->getAttribute($context["post"], "publicationDateStart", array()));
            echo " |

                    <i class=\"icon-comment\"></i>
                    <span class=\"sonata-blog-post-comments-count\">";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("comments_count", array("%comments_count%" => $this->getAttribute($context["post"], "commentsCount", array())), "SonataNewsBundle"), "html", null, true);
            echo "</span>

                    <div class=\"sonata-blog-post-tags\">
                        ";
            // line 44
            if ((twig_length_filter($this->env, $this->getAttribute($context["post"], "tags", array())) > 1)) {
                // line 45
                echo "                            <i class=\"icon-tags\"></i>
                        ";
            } else {
                // line 47
                echo "                            <i class=\"icon-tag\"></i>
                        ";
            }
            // line 49
            echo "                        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->transchoice("published_under", twig_length_filter($this->env, $this->getAttribute($context["post"], "tags", array())), array(), "SonataNewsBundle"), "html", null, true);
            echo "

                        ";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["post"], "tags", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 52
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("sonata_news_tag", array("tag" => $this->getAttribute($context["tag"], "slug", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "name", array()), "html", null, true);
                echo "</a>";
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ",";
                }
                // line 53
                echo "                        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "                    </div>
                </div>
            </header>

            <div class=\"sonata-blog-post-abtract\">
                ";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "abstract", array()), "html", null, true);
            echo "
            </div>
        </div>

        <hr />
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 65
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("no_post_found", array(), "SonataNewsBundle"), "html", null, true);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "
    <ul class=\"pager\">
        <li";
        // line 69
        if (($this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "page", array()) == $this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "lastPage", array()))) {
            echo " class=\"btn btn-lg btn-ghost btn-black\"";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["route_parameters"]) ? $context["route_parameters"] : $this->getContext($context, "route_parameters")), array("page" => $this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "nextpage", array())))), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_previous_page", array(), "SonataNewsBundle"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_previous_page", array(), "SonataNewsBundle"), "html", null, true);
        echo "</a>
        <li";
        // line 70
        if (($this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "page", array()) == $this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "firstPage", array()))) {
            echo " class=\"btn btn-lg btn-ghost btn-black\"";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["route_parameters"]) ? $context["route_parameters"] : $this->getContext($context, "route_parameters")), array("page" => $this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "previouspage", array())))), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_next_page", array(), "SonataNewsBundle"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_next_page", array(), "SonataNewsBundle"), "html", null, true);
        echo "</a></li>
    </ul>
</div>
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
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("breadcrumb", array("context" => "news_archive", "collection" => (isset($context["collection"]) ? $context["collection"] : $this->getContext($context, "collection")), "tag" => (isset($context["tag"]) ? $context["tag"] : $this->getContext($context, "tag")), "current_uri" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "requestUri", array()))));
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataNewsBundle:Post:archive.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 20,  203 => 19,  200 => 18,  183 => 70,  171 => 69,  167 => 67,  158 => 65,  147 => 59,  140 => 54,  126 => 53,  117 => 52,  100 => 51,  94 => 49,  90 => 47,  86 => 45,  84 => 44,  78 => 41,  72 => 38,  66 => 35,  57 => 31,  52 => 28,  47 => 27,  41 => 24,  38 => 23,  36 => 18,  32 => 16,  29 => 15,  11 => 14,);
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
/* {% extends "ServiceBundle::layout2.html.twig" %}*/
/* {% block t %}*/
/* */
/*  */
/* {% block sonata_page_breadcrumb %}*/
/*     <div class="row-fluid clearfix">*/
/*         {{ sonata_block_render_event('breadcrumb', { 'context': 'news_archive', 'collection': collection, 'tag': tag, 'current_uri': app.request.requestUri }) }}*/
/*     </div>*/
/* {% endblock %}*/
/* */
/*  <header class="page-header"><h1>{{ 'title_archive'|trans({}, 'SonataNewsBundle') }}</h1> </header>*/
/* <div name="Posts" class="box-lg">*/
/* <div class="sonata-blog-post-list">*/
/*     {% for post in pager.getResults() %}*/
/*         <div class="sonata-blog-post-container">*/
/*             <header>*/
/*                 <h2 class="sonata-blog-post-title">*/
/*                     <a href="{{ url('sonata_news_view', { 'permalink': sonata_news_permalink(post) }) }}">{{ post.title }}</a>*/
/*                 </h2>*/
/* */
/*                 <div class="sonata-blog-post-information">*/
/*                     <span class="sonata-blog-post-author">{{ 'archive_author'|trans({'%author%': post.author }, 'SonataNewsBundle') }}</span> |*/
/* */
/*                     <i class="icon-calendar"></i>*/
/*                     {{ post.publicationDateStart | format_date }} |*/
/* */
/*                     <i class="icon-comment"></i>*/
/*                     <span class="sonata-blog-post-comments-count">{{ 'comments_count'|trans({'%comments_count%': post.commentsCount }, 'SonataNewsBundle') }}</span>*/
/* */
/*                     <div class="sonata-blog-post-tags">*/
/*                         {% if post.tags|length > 1 %}*/
/*                             <i class="icon-tags"></i>*/
/*                         {% else %}*/
/*                             <i class="icon-tag"></i>*/
/*                         {% endif %}*/
/*                         {{ 'published_under'|transchoice(post.tags|length, {}, 'SonataNewsBundle') }}*/
/* */
/*                         {% for tag in post.tags %}*/
/*                             <a href="{{ url('sonata_news_tag', { 'tag': tag.slug } ) }}">{{ tag.name }}</a>{% if not loop.last %},{% endif %}*/
/*                         {% endfor %}*/
/*                     </div>*/
/*                 </div>*/
/*             </header>*/
/* */
/*             <div class="sonata-blog-post-abtract">*/
/*                 {{ post.abstract }}*/
/*             </div>*/
/*         </div>*/
/* */
/*         <hr />*/
/*     {% else %}*/
/*         {{ 'no_post_found'|trans({}, 'SonataNewsBundle') }}*/
/*     {% endfor %}*/
/* */
/*     <ul class="pager">*/
/*         <li{% if pager.page == pager.lastPage %} class="btn btn-lg btn-ghost btn-black"{% endif %}><a href="{{ url(route, route_parameters|merge({'page': pager.nextpage})) }}" title="{{ 'link_previous_page'|trans({}, 'SonataNewsBundle') }}">{{ 'link_previous_page'|trans({}, 'SonataNewsBundle') }}</a>*/
/*         <li{% if pager.page == pager.firstPage %} class="btn btn-lg btn-ghost btn-black"{% endif %}><a href="{{ url(route, route_parameters|merge({'page': pager.previouspage})) }}" title="{{ 'link_next_page'|trans({}, 'SonataNewsBundle') }}">{{ 'link_next_page'|trans({}, 'SonataNewsBundle') }}</a></li>*/
/*     </ul>*/
/* </div>*/
/*  </div>       */
/* {% endblock t %}*/
