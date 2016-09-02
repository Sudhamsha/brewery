<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_e152018d4aa234c0da1ba4328d0685935f6281eeb6e3cfe877c95a1327102b59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b42c807e3225c4b234c5320555fecd4051d632538442d66d431b43e0834804f7 = $this->env->getExtension("native_profiler");
        $__internal_b42c807e3225c4b234c5320555fecd4051d632538442d66d431b43e0834804f7->enter($__internal_b42c807e3225c4b234c5320555fecd4051d632538442d66d431b43e0834804f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b42c807e3225c4b234c5320555fecd4051d632538442d66d431b43e0834804f7->leave($__internal_b42c807e3225c4b234c5320555fecd4051d632538442d66d431b43e0834804f7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ed93c4485789697a68f0eee75141c3618913b09b7f6f9da36dd6785d52ab4ab2 = $this->env->getExtension("native_profiler");
        $__internal_ed93c4485789697a68f0eee75141c3618913b09b7f6f9da36dd6785d52ab4ab2->enter($__internal_ed93c4485789697a68f0eee75141c3618913b09b7f6f9da36dd6785d52ab4ab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ed93c4485789697a68f0eee75141c3618913b09b7f6f9da36dd6785d52ab4ab2->leave($__internal_ed93c4485789697a68f0eee75141c3618913b09b7f6f9da36dd6785d52ab4ab2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_20eb538fbf84d2273ca2ff0b6b61c1dc8f5dba237750b3eab86fc2320be9157d = $this->env->getExtension("native_profiler");
        $__internal_20eb538fbf84d2273ca2ff0b6b61c1dc8f5dba237750b3eab86fc2320be9157d->enter($__internal_20eb538fbf84d2273ca2ff0b6b61c1dc8f5dba237750b3eab86fc2320be9157d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_20eb538fbf84d2273ca2ff0b6b61c1dc8f5dba237750b3eab86fc2320be9157d->leave($__internal_20eb538fbf84d2273ca2ff0b6b61c1dc8f5dba237750b3eab86fc2320be9157d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_bf98dd13c605b6fc4ce04a04217085c444b837572b0ee808b321310d602a7a46 = $this->env->getExtension("native_profiler");
        $__internal_bf98dd13c605b6fc4ce04a04217085c444b837572b0ee808b321310d602a7a46->enter($__internal_bf98dd13c605b6fc4ce04a04217085c444b837572b0ee808b321310d602a7a46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_bf98dd13c605b6fc4ce04a04217085c444b837572b0ee808b321310d602a7a46->leave($__internal_bf98dd13c605b6fc4ce04a04217085c444b837572b0ee808b321310d602a7a46_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
