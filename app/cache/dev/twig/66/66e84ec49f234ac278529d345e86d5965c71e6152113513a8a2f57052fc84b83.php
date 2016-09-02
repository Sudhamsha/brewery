<?php

/* blog/index.html.twig */
class __TwigTemplate_570c42f74fb809e4b1330e465d5d1a363a75d4b799714860ca51d0b6c643e998 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "blog/index.html.twig", 1);
        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'main' => array($this, 'block_main'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e8caf870fbccf64ed4fa1d21efca62e9edb67b8f35a93b129c931f8189a66293 = $this->env->getExtension("native_profiler");
        $__internal_e8caf870fbccf64ed4fa1d21efca62e9edb67b8f35a93b129c931f8189a66293->enter($__internal_e8caf870fbccf64ed4fa1d21efca62e9edb67b8f35a93b129c931f8189a66293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e8caf870fbccf64ed4fa1d21efca62e9edb67b8f35a93b129c931f8189a66293->leave($__internal_e8caf870fbccf64ed4fa1d21efca62e9edb67b8f35a93b129c931f8189a66293_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_3d9b8b53979c4cbb9e43eab9a6863aa3fb8470b1b5ad599454f6c3b7d733cf03 = $this->env->getExtension("native_profiler");
        $__internal_3d9b8b53979c4cbb9e43eab9a6863aa3fb8470b1b5ad599454f6c3b7d733cf03->enter($__internal_3d9b8b53979c4cbb9e43eab9a6863aa3fb8470b1b5ad599454f6c3b7d733cf03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "blog_index";
        
        $__internal_3d9b8b53979c4cbb9e43eab9a6863aa3fb8470b1b5ad599454f6c3b7d733cf03->leave($__internal_3d9b8b53979c4cbb9e43eab9a6863aa3fb8470b1b5ad599454f6c3b7d733cf03_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_7fa8ce10948ba3a4f1e1eed118df9a0d6b95d9600147ffbcf2f289040292c120 = $this->env->getExtension("native_profiler");
        $__internal_7fa8ce10948ba3a4f1e1eed118df9a0d6b95d9600147ffbcf2f289040292c120->enter($__internal_7fa8ce10948ba3a4f1e1eed118df9a0d6b95d9600147ffbcf2f289040292c120_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 7
            echo "        <article class=\"post\">
            <h2>
                <a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_post", array("slug" => $this->getAttribute($context["post"], "slug", array()))), "html", null, true);
            echo "\">
                    ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "
                </a>
            </h2>

            ";
            // line 14
            echo $this->env->getExtension('app.extension')->markdownToHtml($this->getAttribute($context["post"], "summary", array()));
            echo "
        </article>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 17
            echo "        <div class=\"well\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("post.no_posts_found"), "html", null, true);
            echo "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "
    <div class=\"navigation text-center\">
        ";
        // line 21
        echo $this->env->getExtension('pagerfanta')->renderPagerfanta((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")), "twitter_bootstrap3", array("routeName" => "blog_index_paginated"));
        echo "
    </div>
";
        
        $__internal_7fa8ce10948ba3a4f1e1eed118df9a0d6b95d9600147ffbcf2f289040292c120->leave($__internal_7fa8ce10948ba3a4f1e1eed118df9a0d6b95d9600147ffbcf2f289040292c120_prof);

    }

    // line 25
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_008299c1b40467e4db988dc15d1876a8b22ba497a1ae6ab9900154a9cfd8c141 = $this->env->getExtension("native_profiler");
        $__internal_008299c1b40467e4db988dc15d1876a8b22ba497a1ae6ab9900154a9cfd8c141->enter($__internal_008299c1b40467e4db988dc15d1876a8b22ba497a1ae6ab9900154a9cfd8c141_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 26
        echo "    ";
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "

    ";
        // line 28
        echo $this->env->getExtension('code_explorer_source_code')->showSourceCode($this->env, $this);
        echo "
";
        
        $__internal_008299c1b40467e4db988dc15d1876a8b22ba497a1ae6ab9900154a9cfd8c141->leave($__internal_008299c1b40467e4db988dc15d1876a8b22ba497a1ae6ab9900154a9cfd8c141_prof);

    }

    public function getTemplateName()
    {
        return "blog/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 28,  112 => 26,  106 => 25,  96 => 21,  92 => 19,  83 => 17,  75 => 14,  68 => 10,  64 => 9,  60 => 7,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body_id 'blog_index' %}*/
/* */
/* {% block main %}*/
/*     {% for post in posts %}*/
/*         <article class="post">*/
/*             <h2>*/
/*                 <a href="{{ path('blog_post', { slug: post.slug }) }}">*/
/*                     {{ post.title }}*/
/*                 </a>*/
/*             </h2>*/
/* */
/*             {{ post.summary|md2html }}*/
/*         </article>*/
/*     {% else %}*/
/*         <div class="well">{{ 'post.no_posts_found'|trans }}</div>*/
/*     {% endfor %}*/
/* */
/*     <div class="navigation text-center">*/
/*         {{ pagerfanta(posts, 'twitter_bootstrap3', { routeName: 'blog_index_paginated' }) }}*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/*     {{ parent() }}*/
/* */
/*     {{ show_source_code(_self) }}*/
/* {% endblock %}*/
/* */
