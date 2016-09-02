<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_0da5e197d2b4cebb1884358234d51ec5a97ac37c5a792e56ccfc39b33023c0ee extends Twig_Template
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
        $__internal_b7f2649a117001c63d3367ad2dcf44e529105f130d9240610722800370982d17 = $this->env->getExtension("native_profiler");
        $__internal_b7f2649a117001c63d3367ad2dcf44e529105f130d9240610722800370982d17->enter($__internal_b7f2649a117001c63d3367ad2dcf44e529105f130d9240610722800370982d17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7f2649a117001c63d3367ad2dcf44e529105f130d9240610722800370982d17->leave($__internal_b7f2649a117001c63d3367ad2dcf44e529105f130d9240610722800370982d17_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fddadf2d43733de8a062f004a5b42b89a9deb97fb844537cfc4d7c7e851720fd = $this->env->getExtension("native_profiler");
        $__internal_fddadf2d43733de8a062f004a5b42b89a9deb97fb844537cfc4d7c7e851720fd->enter($__internal_fddadf2d43733de8a062f004a5b42b89a9deb97fb844537cfc4d7c7e851720fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_fddadf2d43733de8a062f004a5b42b89a9deb97fb844537cfc4d7c7e851720fd->leave($__internal_fddadf2d43733de8a062f004a5b42b89a9deb97fb844537cfc4d7c7e851720fd_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f053211babf212fee831c7c4a2017fa5156b6c9a55bb215d01d58f975df451a7 = $this->env->getExtension("native_profiler");
        $__internal_f053211babf212fee831c7c4a2017fa5156b6c9a55bb215d01d58f975df451a7->enter($__internal_f053211babf212fee831c7c4a2017fa5156b6c9a55bb215d01d58f975df451a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f053211babf212fee831c7c4a2017fa5156b6c9a55bb215d01d58f975df451a7->leave($__internal_f053211babf212fee831c7c4a2017fa5156b6c9a55bb215d01d58f975df451a7_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9fe227b79293f6744715bd2a9144759b7b7bf2b0f5d8b7cb8371d1349459b2b0 = $this->env->getExtension("native_profiler");
        $__internal_9fe227b79293f6744715bd2a9144759b7b7bf2b0f5d8b7cb8371d1349459b2b0->enter($__internal_9fe227b79293f6744715bd2a9144759b7b7bf2b0f5d8b7cb8371d1349459b2b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_9fe227b79293f6744715bd2a9144759b7b7bf2b0f5d8b7cb8371d1349459b2b0->leave($__internal_9fe227b79293f6744715bd2a9144759b7b7bf2b0f5d8b7cb8371d1349459b2b0_prof);

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
