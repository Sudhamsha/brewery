<?php

/* base.html.twig */
class __TwigTemplate_ab9925b58228059f60a3a13ff315fd71ed1e8031191934e46b95449c17669024 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body_id' => array($this, 'block_body_id'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_788908935a52faadc98772801915e8a742a487998b3730fb9415e4efa9e98a51 = $this->env->getExtension("native_profiler");
        $__internal_788908935a52faadc98772801915e8a742a487998b3730fb9415e4efa9e98a51->enter($__internal_788908935a52faadc98772801915e8a742a487998b3730fb9415e4efa9e98a51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 6
        echo "<!DOCTYPE html>
<html data-ng-app=\"app\" ng-controller=\"DefaultController\">
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 29
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>

    <body id=\"";
        // line 32
        $this->displayBlock('body_id', $context, $blocks);
        echo "\">

        <div class=\"container body-container\">
            ";
        // line 35
        $this->displayBlock('body', $context, $blocks);
        // line 37
        echo "        </div>


        ";
        // line 40
        $this->displayBlock('javascripts', $context, $blocks);
        // line 51
        echo "    </body>
</html>
";
        
        $__internal_788908935a52faadc98772801915e8a742a487998b3730fb9415e4efa9e98a51->leave($__internal_788908935a52faadc98772801915e8a742a487998b3730fb9415e4efa9e98a51_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_3668679f711147ec4a634f81a9dc98a61db3535dc33996dadc6fa94f8d2184d4 = $this->env->getExtension("native_profiler");
        $__internal_3668679f711147ec4a634f81a9dc98a61db3535dc33996dadc6fa94f8d2184d4->enter($__internal_3668679f711147ec4a634f81a9dc98a61db3535dc33996dadc6fa94f8d2184d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Brewery";
        
        $__internal_3668679f711147ec4a634f81a9dc98a61db3535dc33996dadc6fa94f8d2184d4->leave($__internal_3668679f711147ec4a634f81a9dc98a61db3535dc33996dadc6fa94f8d2184d4_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_145eb88293dd5b139f39bcc3cb72a58ffe2e1385dd8c60c5ff51380bb6e11ecb = $this->env->getExtension("native_profiler");
        $__internal_145eb88293dd5b139f39bcc3cb72a58ffe2e1385dd8c60c5ff51380bb6e11ecb->enter($__internal_145eb88293dd5b139f39bcc3cb72a58ffe2e1385dd8c60c5ff51380bb6e11ecb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "        ";
        // line 24
        echo "
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
            <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/app.css"), "html", null, true);
        echo "\">
            
        ";
        
        $__internal_145eb88293dd5b139f39bcc3cb72a58ffe2e1385dd8c60c5ff51380bb6e11ecb->leave($__internal_145eb88293dd5b139f39bcc3cb72a58ffe2e1385dd8c60c5ff51380bb6e11ecb_prof);

    }

    // line 32
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_21fb45c3161001b02bd53a5400cfd462cf9075c2ecf74ec7c6f353b11ab631a2 = $this->env->getExtension("native_profiler");
        $__internal_21fb45c3161001b02bd53a5400cfd462cf9075c2ecf74ec7c6f353b11ab631a2->enter($__internal_21fb45c3161001b02bd53a5400cfd462cf9075c2ecf74ec7c6f353b11ab631a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_21fb45c3161001b02bd53a5400cfd462cf9075c2ecf74ec7c6f353b11ab631a2->leave($__internal_21fb45c3161001b02bd53a5400cfd462cf9075c2ecf74ec7c6f353b11ab631a2_prof);

    }

    // line 35
    public function block_body($context, array $blocks = array())
    {
        $__internal_e12c557a6029ce2751f8bbfe311addd2deebeaf82e6dc570627c9dd9175368a7 = $this->env->getExtension("native_profiler");
        $__internal_e12c557a6029ce2751f8bbfe311addd2deebeaf82e6dc570627c9dd9175368a7->enter($__internal_e12c557a6029ce2751f8bbfe311addd2deebeaf82e6dc570627c9dd9175368a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 36
        echo "            ";
        
        $__internal_e12c557a6029ce2751f8bbfe311addd2deebeaf82e6dc570627c9dd9175368a7->leave($__internal_e12c557a6029ce2751f8bbfe311addd2deebeaf82e6dc570627c9dd9175368a7_prof);

    }

    // line 40
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ba06e1d4b46feb9857a2af2efb6eab5515d6094fa122304875edd6cb035d47fe = $this->env->getExtension("native_profiler");
        $__internal_ba06e1d4b46feb9857a2af2efb6eab5515d6094fa122304875edd6cb035d47fe->enter($__internal_ba06e1d4b46feb9857a2af2efb6eab5515d6094fa122304875edd6cb035d47fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 41
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bower_components/jquery/dist/jquery.js"), "html", null, true);
        echo "\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
            <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bower_components/angular/angular.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bower_components/angular-ui-router/release/angular-ui-router.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bower_components/angular-bootstrap/ui-bootstrap-tpls.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/angular-app/app.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/angular-app/config/routes.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/angular-app/controllers/DefaultController.js"), "html", null, true);
        echo "\"></script>
            
        ";
        
        $__internal_ba06e1d4b46feb9857a2af2efb6eab5515d6094fa122304875edd6cb035d47fe->leave($__internal_ba06e1d4b46feb9857a2af2efb6eab5515d6094fa122304875edd6cb035d47fe_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 48,  157 => 47,  153 => 46,  149 => 45,  145 => 44,  141 => 43,  135 => 41,  129 => 40,  122 => 36,  116 => 35,  105 => 32,  95 => 26,  91 => 24,  89 => 13,  83 => 12,  71 => 10,  62 => 51,  60 => 40,  55 => 37,  53 => 35,  47 => 32,  40 => 29,  38 => 12,  33 => 10,  27 => 6,);
    }
}
/* {#*/
/*    This is the base template used as the application layout which contains the*/
/*    common elements and decorates all the other templates.*/
/*    See http://symfony.com/doc/current/book/templating.html#template-inheritance-and-layouts*/
/* #}*/
/* <!DOCTYPE html>*/
/* <html data-ng-app="app" ng-controller="DefaultController">*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Brewery{% endblock %}</title>*/
/* */
/*         {% block stylesheets %}*/
/*         {# uncomment the following lines to compile SCSS assets with Assetic*/
/* */
/*             {% stylesheets filter="scssphp" output="css/app.css"*/
/*                 "%kernel.root_dir%/Resources/assets/scss/bootstrap-flatly.scss"*/
/*                 "%kernel.root_dir%/Resources/assets/scss/font-awesome.scss"*/
/*                 "%kernel.root_dir%/Resources/assets/css/*.css"*/
/*                 "%kernel.root_dir%/Resources/assets/scss/main.scss"*/
/*             %}*/
/*                 <link rel="stylesheet" href="{{ asset_url }}" />*/
/*             {% endstylesheets %}*/
/*         #}*/
/* */
/*             <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">*/
/*             <link rel="stylesheet" href="{{ asset('css/app.css') }}">*/
/*             */
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/* */
/*     <body id="{% block body_id %}{% endblock %}">*/
/* */
/*         <div class="container body-container">*/
/*             {% block body %}*/
/*             {% endblock %}*/
/*         </div>*/
/* */
/* */
/*         {% block javascripts %}*/
/*             <script src="{{ asset('bower_components/jquery/dist/jquery.js') }}"></script>*/
/*             <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>*/
/*             <script src="{{ asset('bower_components/angular/angular.js') }}"></script>*/
/*             <script src="{{ asset('bower_components/angular-ui-router/release/angular-ui-router.js') }}"></script>*/
/*             <script src="{{ asset('bower_components/angular-bootstrap/ui-bootstrap-tpls.js') }}"></script>*/
/*             <script src="{{ asset('js/angular-app/app.js') }}"></script>*/
/*             <script src="{{ asset('js/angular-app/config/routes.js') }}"></script>*/
/*             <script src="{{ asset('js/angular-app/controllers/DefaultController.js') }}"></script>*/
/*             */
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
