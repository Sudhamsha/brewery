<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_966152dac400a989981daf91232e8266d7d8d06b2fb27097c4759386a315964e extends Twig_Template
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
        $__internal_227d785531a0f2881069121735813e12039377e77527a1f34c4fc5b7fd909347 = $this->env->getExtension("native_profiler");
        $__internal_227d785531a0f2881069121735813e12039377e77527a1f34c4fc5b7fd909347->enter($__internal_227d785531a0f2881069121735813e12039377e77527a1f34c4fc5b7fd909347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_227d785531a0f2881069121735813e12039377e77527a1f34c4fc5b7fd909347->leave($__internal_227d785531a0f2881069121735813e12039377e77527a1f34c4fc5b7fd909347_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c1157e14bc28ac38abe6c563a54c0e9c9fc6759d5cb90e8e46eb578a76ffc02a = $this->env->getExtension("native_profiler");
        $__internal_c1157e14bc28ac38abe6c563a54c0e9c9fc6759d5cb90e8e46eb578a76ffc02a->enter($__internal_c1157e14bc28ac38abe6c563a54c0e9c9fc6759d5cb90e8e46eb578a76ffc02a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c1157e14bc28ac38abe6c563a54c0e9c9fc6759d5cb90e8e46eb578a76ffc02a->leave($__internal_c1157e14bc28ac38abe6c563a54c0e9c9fc6759d5cb90e8e46eb578a76ffc02a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_94c56f16954236fddb4ce2dd4af98921f98f05c8f5a8a7fc67ca4ef74f2cd4be = $this->env->getExtension("native_profiler");
        $__internal_94c56f16954236fddb4ce2dd4af98921f98f05c8f5a8a7fc67ca4ef74f2cd4be->enter($__internal_94c56f16954236fddb4ce2dd4af98921f98f05c8f5a8a7fc67ca4ef74f2cd4be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_94c56f16954236fddb4ce2dd4af98921f98f05c8f5a8a7fc67ca4ef74f2cd4be->leave($__internal_94c56f16954236fddb4ce2dd4af98921f98f05c8f5a8a7fc67ca4ef74f2cd4be_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_52b35d50e743ee23d23753daf03fc361377e0aa5f08933632875c1312c8fa552 = $this->env->getExtension("native_profiler");
        $__internal_52b35d50e743ee23d23753daf03fc361377e0aa5f08933632875c1312c8fa552->enter($__internal_52b35d50e743ee23d23753daf03fc361377e0aa5f08933632875c1312c8fa552_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_52b35d50e743ee23d23753daf03fc361377e0aa5f08933632875c1312c8fa552->leave($__internal_52b35d50e743ee23d23753daf03fc361377e0aa5f08933632875c1312c8fa552_prof);

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
