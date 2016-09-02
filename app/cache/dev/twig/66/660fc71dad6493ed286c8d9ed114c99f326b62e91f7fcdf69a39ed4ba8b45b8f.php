<?php

/* default/homepage.html.twig */
class __TwigTemplate_a36fb0921a1a88acc34ce29f8ac6926af63008416ccd3d6364e00dbb4a905944 extends Twig_Template
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
        $__internal_a83e6fa59cb667fc89705860f421d7c170eb59f264bdb3bb35ca6df1fc37060a = $this->env->getExtension("native_profiler");
        $__internal_a83e6fa59cb667fc89705860f421d7c170eb59f264bdb3bb35ca6df1fc37060a->enter($__internal_a83e6fa59cb667fc89705860f421d7c170eb59f264bdb3bb35ca6df1fc37060a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/homepage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a83e6fa59cb667fc89705860f421d7c170eb59f264bdb3bb35ca6df1fc37060a->leave($__internal_a83e6fa59cb667fc89705860f421d7c170eb59f264bdb3bb35ca6df1fc37060a_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_d5f0588acd12a13b500b61871d06fd7d007de747192ec45f7264d979a424be21 = $this->env->getExtension("native_profiler");
        $__internal_d5f0588acd12a13b500b61871d06fd7d007de747192ec45f7264d979a424be21->enter($__internal_d5f0588acd12a13b500b61871d06fd7d007de747192ec45f7264d979a424be21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "homepage";
        
        $__internal_d5f0588acd12a13b500b61871d06fd7d007de747192ec45f7264d979a424be21->leave($__internal_d5f0588acd12a13b500b61871d06fd7d007de747192ec45f7264d979a424be21_prof);

    }

    // line 9
    public function block_header($context, array $blocks = array())
    {
        $__internal_98e616bfe34c85bfcf025755a69d2675c88f7e36a7658b22a846e548a3920067 = $this->env->getExtension("native_profiler");
        $__internal_98e616bfe34c85bfcf025755a69d2675c88f7e36a7658b22a846e548a3920067->enter($__internal_98e616bfe34c85bfcf025755a69d2675c88f7e36a7658b22a846e548a3920067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_98e616bfe34c85bfcf025755a69d2675c88f7e36a7658b22a846e548a3920067->leave($__internal_98e616bfe34c85bfcf025755a69d2675c88f7e36a7658b22a846e548a3920067_prof);

    }

    // line 10
    public function block_footer($context, array $blocks = array())
    {
        $__internal_a36f0c6680da15d7ccd32ff19af2d0cf28c3ca0f4e9a241c9212fae6b150df92 = $this->env->getExtension("native_profiler");
        $__internal_a36f0c6680da15d7ccd32ff19af2d0cf28c3ca0f4e9a241c9212fae6b150df92->enter($__internal_a36f0c6680da15d7ccd32ff19af2d0cf28c3ca0f4e9a241c9212fae6b150df92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_a36f0c6680da15d7ccd32ff19af2d0cf28c3ca0f4e9a241c9212fae6b150df92->leave($__internal_a36f0c6680da15d7ccd32ff19af2d0cf28c3ca0f4e9a241c9212fae6b150df92_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_4688d729138992e8f05555ffb3369274b49a9e569864fd232db86d2b689cfc22 = $this->env->getExtension("native_profiler");
        $__internal_4688d729138992e8f05555ffb3369274b49a9e569864fd232db86d2b689cfc22->enter($__internal_4688d729138992e8f05555ffb3369274b49a9e569864fd232db86d2b689cfc22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "
     <ui-view></ui-view>
";
        
        $__internal_4688d729138992e8f05555ffb3369274b49a9e569864fd232db86d2b689cfc22->leave($__internal_4688d729138992e8f05555ffb3369274b49a9e569864fd232db86d2b689cfc22_prof);

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
