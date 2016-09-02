<?php

/* base.html.twig */
class __TwigTemplate_cc2c08a3fa60a8952f4ac67fa5d0d75750da062fd0564cf8e5b840f65c33b9ea extends Twig_Template
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
        $__internal_43a045abc60d8b90d584808acb43ee0a0c115d6e60ea49d7c390151a9ef31a68 = $this->env->getExtension("native_profiler");
        $__internal_43a045abc60d8b90d584808acb43ee0a0c115d6e60ea49d7c390151a9ef31a68->enter($__internal_43a045abc60d8b90d584808acb43ee0a0c115d6e60ea49d7c390151a9ef31a68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_43a045abc60d8b90d584808acb43ee0a0c115d6e60ea49d7c390151a9ef31a68->leave($__internal_43a045abc60d8b90d584808acb43ee0a0c115d6e60ea49d7c390151a9ef31a68_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_c075db171c20e9eac8b92d76d80a525481410e80bf811d75c7873edc94d65e8a = $this->env->getExtension("native_profiler");
        $__internal_c075db171c20e9eac8b92d76d80a525481410e80bf811d75c7873edc94d65e8a->enter($__internal_c075db171c20e9eac8b92d76d80a525481410e80bf811d75c7873edc94d65e8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Brewery";
        
        $__internal_c075db171c20e9eac8b92d76d80a525481410e80bf811d75c7873edc94d65e8a->leave($__internal_c075db171c20e9eac8b92d76d80a525481410e80bf811d75c7873edc94d65e8a_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_340bc9f1954f136a7f10b0b0727c348c2b3c1a5e5666564f80de2fe85c27a584 = $this->env->getExtension("native_profiler");
        $__internal_340bc9f1954f136a7f10b0b0727c348c2b3c1a5e5666564f80de2fe85c27a584->enter($__internal_340bc9f1954f136a7f10b0b0727c348c2b3c1a5e5666564f80de2fe85c27a584_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_340bc9f1954f136a7f10b0b0727c348c2b3c1a5e5666564f80de2fe85c27a584->leave($__internal_340bc9f1954f136a7f10b0b0727c348c2b3c1a5e5666564f80de2fe85c27a584_prof);

    }

    // line 32
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_b0f8d1d151abbd1a33c2ddb52b3cab3d465715f7ee502f5d7a0ae6ca70f7364c = $this->env->getExtension("native_profiler");
        $__internal_b0f8d1d151abbd1a33c2ddb52b3cab3d465715f7ee502f5d7a0ae6ca70f7364c->enter($__internal_b0f8d1d151abbd1a33c2ddb52b3cab3d465715f7ee502f5d7a0ae6ca70f7364c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_b0f8d1d151abbd1a33c2ddb52b3cab3d465715f7ee502f5d7a0ae6ca70f7364c->leave($__internal_b0f8d1d151abbd1a33c2ddb52b3cab3d465715f7ee502f5d7a0ae6ca70f7364c_prof);

    }

    // line 35
    public function block_body($context, array $blocks = array())
    {
        $__internal_71a2f2c330cd7fb4a6e8baf3ea20c28a55ec3f690e60a1d2f61149f70d758921 = $this->env->getExtension("native_profiler");
        $__internal_71a2f2c330cd7fb4a6e8baf3ea20c28a55ec3f690e60a1d2f61149f70d758921->enter($__internal_71a2f2c330cd7fb4a6e8baf3ea20c28a55ec3f690e60a1d2f61149f70d758921_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 36
        echo "            ";
        
        $__internal_71a2f2c330cd7fb4a6e8baf3ea20c28a55ec3f690e60a1d2f61149f70d758921->leave($__internal_71a2f2c330cd7fb4a6e8baf3ea20c28a55ec3f690e60a1d2f61149f70d758921_prof);

    }

    // line 40
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0c92e8d9e0d77b316b0223268b01d6aeab450908d5848236335dd9af105ed762 = $this->env->getExtension("native_profiler");
        $__internal_0c92e8d9e0d77b316b0223268b01d6aeab450908d5848236335dd9af105ed762->enter($__internal_0c92e8d9e0d77b316b0223268b01d6aeab450908d5848236335dd9af105ed762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_0c92e8d9e0d77b316b0223268b01d6aeab450908d5848236335dd9af105ed762->leave($__internal_0c92e8d9e0d77b316b0223268b01d6aeab450908d5848236335dd9af105ed762_prof);

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
