<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3b97aaf6577d3b14757926b6a02546fb89a63a89431537d1684a472c2bdb3c78 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_921aa30cf6d8b5f8a5d68ed1e424af0ac2579f3fb0f6c0def18c2881b6806bf5 = $this->env->getExtension("native_profiler");
        $__internal_921aa30cf6d8b5f8a5d68ed1e424af0ac2579f3fb0f6c0def18c2881b6806bf5->enter($__internal_921aa30cf6d8b5f8a5d68ed1e424af0ac2579f3fb0f6c0def18c2881b6806bf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_921aa30cf6d8b5f8a5d68ed1e424af0ac2579f3fb0f6c0def18c2881b6806bf5->leave($__internal_921aa30cf6d8b5f8a5d68ed1e424af0ac2579f3fb0f6c0def18c2881b6806bf5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1422afd04bef22d3d712f6b2502abb34962eebf9bffb5daf597ad81e6decd351 = $this->env->getExtension("native_profiler");
        $__internal_1422afd04bef22d3d712f6b2502abb34962eebf9bffb5daf597ad81e6decd351->enter($__internal_1422afd04bef22d3d712f6b2502abb34962eebf9bffb5daf597ad81e6decd351_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1422afd04bef22d3d712f6b2502abb34962eebf9bffb5daf597ad81e6decd351->leave($__internal_1422afd04bef22d3d712f6b2502abb34962eebf9bffb5daf597ad81e6decd351_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9eaab46c22a5713b3987376d7055ae509ef1e9e452b35b09c55eba9c7b90f0e8 = $this->env->getExtension("native_profiler");
        $__internal_9eaab46c22a5713b3987376d7055ae509ef1e9e452b35b09c55eba9c7b90f0e8->enter($__internal_9eaab46c22a5713b3987376d7055ae509ef1e9e452b35b09c55eba9c7b90f0e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9eaab46c22a5713b3987376d7055ae509ef1e9e452b35b09c55eba9c7b90f0e8->leave($__internal_9eaab46c22a5713b3987376d7055ae509ef1e9e452b35b09c55eba9c7b90f0e8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3884c36b7584d7af77a02413e745a02a9619e817935ea487e023b3cd3e7c3c30 = $this->env->getExtension("native_profiler");
        $__internal_3884c36b7584d7af77a02413e745a02a9619e817935ea487e023b3cd3e7c3c30->enter($__internal_3884c36b7584d7af77a02413e745a02a9619e817935ea487e023b3cd3e7c3c30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3884c36b7584d7af77a02413e745a02a9619e817935ea487e023b3cd3e7c3c30->leave($__internal_3884c36b7584d7af77a02413e745a02a9619e817935ea487e023b3cd3e7c3c30_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
