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
        $__internal_7673f06959b5ebf8d9a80a1e38a7143f10c6530ff19c0d59f0e8b43be14a8e9d = $this->env->getExtension("native_profiler");
        $__internal_7673f06959b5ebf8d9a80a1e38a7143f10c6530ff19c0d59f0e8b43be14a8e9d->enter($__internal_7673f06959b5ebf8d9a80a1e38a7143f10c6530ff19c0d59f0e8b43be14a8e9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7673f06959b5ebf8d9a80a1e38a7143f10c6530ff19c0d59f0e8b43be14a8e9d->leave($__internal_7673f06959b5ebf8d9a80a1e38a7143f10c6530ff19c0d59f0e8b43be14a8e9d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d29d2bb1c1c040897ee830aa6c42f6e2ad5ee03b9dd1e725c6063c1d9a6e75c8 = $this->env->getExtension("native_profiler");
        $__internal_d29d2bb1c1c040897ee830aa6c42f6e2ad5ee03b9dd1e725c6063c1d9a6e75c8->enter($__internal_d29d2bb1c1c040897ee830aa6c42f6e2ad5ee03b9dd1e725c6063c1d9a6e75c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d29d2bb1c1c040897ee830aa6c42f6e2ad5ee03b9dd1e725c6063c1d9a6e75c8->leave($__internal_d29d2bb1c1c040897ee830aa6c42f6e2ad5ee03b9dd1e725c6063c1d9a6e75c8_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4cefb15c125ff388ff3f7db0e5d5560d9d6ff6822532ca260686215c5e827039 = $this->env->getExtension("native_profiler");
        $__internal_4cefb15c125ff388ff3f7db0e5d5560d9d6ff6822532ca260686215c5e827039->enter($__internal_4cefb15c125ff388ff3f7db0e5d5560d9d6ff6822532ca260686215c5e827039_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4cefb15c125ff388ff3f7db0e5d5560d9d6ff6822532ca260686215c5e827039->leave($__internal_4cefb15c125ff388ff3f7db0e5d5560d9d6ff6822532ca260686215c5e827039_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3551c9aa9ad32a6f22ba6efd4adeab78aecff8e8cf015969b7d68a73c32da8f0 = $this->env->getExtension("native_profiler");
        $__internal_3551c9aa9ad32a6f22ba6efd4adeab78aecff8e8cf015969b7d68a73c32da8f0->enter($__internal_3551c9aa9ad32a6f22ba6efd4adeab78aecff8e8cf015969b7d68a73c32da8f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3551c9aa9ad32a6f22ba6efd4adeab78aecff8e8cf015969b7d68a73c32da8f0->leave($__internal_3551c9aa9ad32a6f22ba6efd4adeab78aecff8e8cf015969b7d68a73c32da8f0_prof);

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
