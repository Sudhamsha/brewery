<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_8a10218b7da40977dde4e3203fe766b1d9d0b0b24d225fa39ae82e056b46c9eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f4e45020db5411fc0ff0db3d22d3ebfd0af6af3037682b9ea5bc10398ec68e4a = $this->env->getExtension("native_profiler");
        $__internal_f4e45020db5411fc0ff0db3d22d3ebfd0af6af3037682b9ea5bc10398ec68e4a->enter($__internal_f4e45020db5411fc0ff0db3d22d3ebfd0af6af3037682b9ea5bc10398ec68e4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_f4e45020db5411fc0ff0db3d22d3ebfd0af6af3037682b9ea5bc10398ec68e4a->leave($__internal_f4e45020db5411fc0ff0db3d22d3ebfd0af6af3037682b9ea5bc10398ec68e4a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
