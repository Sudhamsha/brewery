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
        $__internal_1f5343ca447d27b553f92e3bdc50e3c89edfcbb22fa5ab9230c0822325cf27fd = $this->env->getExtension("native_profiler");
        $__internal_1f5343ca447d27b553f92e3bdc50e3c89edfcbb22fa5ab9230c0822325cf27fd->enter($__internal_1f5343ca447d27b553f92e3bdc50e3c89edfcbb22fa5ab9230c0822325cf27fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/homepage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f5343ca447d27b553f92e3bdc50e3c89edfcbb22fa5ab9230c0822325cf27fd->leave($__internal_1f5343ca447d27b553f92e3bdc50e3c89edfcbb22fa5ab9230c0822325cf27fd_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_00c92bc2712cd287821e279d449a8dad93c57842ccc8cdcdc09e62a82261fffd = $this->env->getExtension("native_profiler");
        $__internal_00c92bc2712cd287821e279d449a8dad93c57842ccc8cdcdc09e62a82261fffd->enter($__internal_00c92bc2712cd287821e279d449a8dad93c57842ccc8cdcdc09e62a82261fffd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "homepage";
        
        $__internal_00c92bc2712cd287821e279d449a8dad93c57842ccc8cdcdc09e62a82261fffd->leave($__internal_00c92bc2712cd287821e279d449a8dad93c57842ccc8cdcdc09e62a82261fffd_prof);

    }

    // line 9
    public function block_header($context, array $blocks = array())
    {
        $__internal_a7aac44c5c682afad6bb0c886fc24c6b589e1f8d603acb5bf346e5437ea372d3 = $this->env->getExtension("native_profiler");
        $__internal_a7aac44c5c682afad6bb0c886fc24c6b589e1f8d603acb5bf346e5437ea372d3->enter($__internal_a7aac44c5c682afad6bb0c886fc24c6b589e1f8d603acb5bf346e5437ea372d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_a7aac44c5c682afad6bb0c886fc24c6b589e1f8d603acb5bf346e5437ea372d3->leave($__internal_a7aac44c5c682afad6bb0c886fc24c6b589e1f8d603acb5bf346e5437ea372d3_prof);

    }

    // line 10
    public function block_footer($context, array $blocks = array())
    {
        $__internal_1fc3e0dbac57be511c7adeedc99d16b232a631c86ff4c6ec57eca05a1975e848 = $this->env->getExtension("native_profiler");
        $__internal_1fc3e0dbac57be511c7adeedc99d16b232a631c86ff4c6ec57eca05a1975e848->enter($__internal_1fc3e0dbac57be511c7adeedc99d16b232a631c86ff4c6ec57eca05a1975e848_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_1fc3e0dbac57be511c7adeedc99d16b232a631c86ff4c6ec57eca05a1975e848->leave($__internal_1fc3e0dbac57be511c7adeedc99d16b232a631c86ff4c6ec57eca05a1975e848_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_96325dc5ba1c69b53b0214469d638effa4249c6b471b47b9df7ef4243288ecc5 = $this->env->getExtension("native_profiler");
        $__internal_96325dc5ba1c69b53b0214469d638effa4249c6b471b47b9df7ef4243288ecc5->enter($__internal_96325dc5ba1c69b53b0214469d638effa4249c6b471b47b9df7ef4243288ecc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "
     <ui-view></ui-view>
";
        
        $__internal_96325dc5ba1c69b53b0214469d638effa4249c6b471b47b9df7ef4243288ecc5->leave($__internal_96325dc5ba1c69b53b0214469d638effa4249c6b471b47b9df7ef4243288ecc5_prof);

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
