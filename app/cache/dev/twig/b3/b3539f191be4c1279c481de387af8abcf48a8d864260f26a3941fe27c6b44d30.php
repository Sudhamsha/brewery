<?php

/* default/homepage.html.twig */
class __TwigTemplate_f5b0668cc44db59acb879325b6dde38d985d0596e9577bf38d4843143ffffeec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/homepage.html.twig", 1);
        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'header' => array($this, 'block_header'),
            'footer' => array($this, 'block_footer'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2ac72f19279ed4f52da9f4040e024d9b1782990b1ab8b4d847f5b84846403b6f = $this->env->getExtension("native_profiler");
        $__internal_2ac72f19279ed4f52da9f4040e024d9b1782990b1ab8b4d847f5b84846403b6f->enter($__internal_2ac72f19279ed4f52da9f4040e024d9b1782990b1ab8b4d847f5b84846403b6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/homepage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ac72f19279ed4f52da9f4040e024d9b1782990b1ab8b4d847f5b84846403b6f->leave($__internal_2ac72f19279ed4f52da9f4040e024d9b1782990b1ab8b4d847f5b84846403b6f_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_778e69ac33fc0607e6832f0f7f4fb41b8fcec0cedab94e058501c92d932cecd7 = $this->env->getExtension("native_profiler");
        $__internal_778e69ac33fc0607e6832f0f7f4fb41b8fcec0cedab94e058501c92d932cecd7->enter($__internal_778e69ac33fc0607e6832f0f7f4fb41b8fcec0cedab94e058501c92d932cecd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "homepage";
        
        $__internal_778e69ac33fc0607e6832f0f7f4fb41b8fcec0cedab94e058501c92d932cecd7->leave($__internal_778e69ac33fc0607e6832f0f7f4fb41b8fcec0cedab94e058501c92d932cecd7_prof);

    }

    // line 9
    public function block_header($context, array $blocks = array())
    {
        $__internal_9c7c4acb69ca89a48ff9a5c7fad72a095be9ddf271775c6c218b694d7b5bf5a7 = $this->env->getExtension("native_profiler");
        $__internal_9c7c4acb69ca89a48ff9a5c7fad72a095be9ddf271775c6c218b694d7b5bf5a7->enter($__internal_9c7c4acb69ca89a48ff9a5c7fad72a095be9ddf271775c6c218b694d7b5bf5a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_9c7c4acb69ca89a48ff9a5c7fad72a095be9ddf271775c6c218b694d7b5bf5a7->leave($__internal_9c7c4acb69ca89a48ff9a5c7fad72a095be9ddf271775c6c218b694d7b5bf5a7_prof);

    }

    // line 10
    public function block_footer($context, array $blocks = array())
    {
        $__internal_4e7dc32e1fc4c40defadcacc664122f555cd93e6817b6bac9f6502d1b6dfd3b6 = $this->env->getExtension("native_profiler");
        $__internal_4e7dc32e1fc4c40defadcacc664122f555cd93e6817b6bac9f6502d1b6dfd3b6->enter($__internal_4e7dc32e1fc4c40defadcacc664122f555cd93e6817b6bac9f6502d1b6dfd3b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_4e7dc32e1fc4c40defadcacc664122f555cd93e6817b6bac9f6502d1b6dfd3b6->leave($__internal_4e7dc32e1fc4c40defadcacc664122f555cd93e6817b6bac9f6502d1b6dfd3b6_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_3bfdd36f1834888b2b5dba29a6830126c26e3f8c78b0fb42411ece7895ac8bd7 = $this->env->getExtension("native_profiler");
        $__internal_3bfdd36f1834888b2b5dba29a6830126c26e3f8c78b0fb42411ece7895ac8bd7->enter($__internal_3bfdd36f1834888b2b5dba29a6830126c26e3f8c78b0fb42411ece7895ac8bd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "
     <ui-view></ui-view>
";
        
        $__internal_3bfdd36f1834888b2b5dba29a6830126c26e3f8c78b0fb42411ece7895ac8bd7->leave($__internal_3bfdd36f1834888b2b5dba29a6830126c26e3f8c78b0fb42411ece7895ac8bd7_prof);

    }

    public function getTemplateName()
    {
        return "default/homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 13,  71 => 12,  60 => 10,  49 => 9,  37 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body_id 'homepage' %}*/
/* */
/* {#*/
/*     the homepage is a special page which displays neither a header nor a footer.*/
/*     this is done with the 'trick' of defining empty Twig blocks without any content*/
/* #}*/
/* {% block header %}{% endblock %}*/
/* {% block footer %}{% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*      <ui-view></ui-view>*/
/* {% endblock %}*/
/* */
