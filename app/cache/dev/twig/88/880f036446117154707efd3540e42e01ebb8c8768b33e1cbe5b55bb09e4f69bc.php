<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_fc29b4e7dcb99cacd3f198af3d861d098a7acb56e1f12b1dcdd00432ac071b81 extends Twig_Template
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
        $__internal_bce22ed9256db88f9ea71053578325d55b2ae55d64caea15c912a41e0e22c7dd = $this->env->getExtension("native_profiler");
        $__internal_bce22ed9256db88f9ea71053578325d55b2ae55d64caea15c912a41e0e22c7dd->enter($__internal_bce22ed9256db88f9ea71053578325d55b2ae55d64caea15c912a41e0e22c7dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bce22ed9256db88f9ea71053578325d55b2ae55d64caea15c912a41e0e22c7dd->leave($__internal_bce22ed9256db88f9ea71053578325d55b2ae55d64caea15c912a41e0e22c7dd_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_72c2e2b3a86d6e5fdb3063cd0a51f3edb63e935b4d9b2066f11e58ab7428ec07 = $this->env->getExtension("native_profiler");
        $__internal_72c2e2b3a86d6e5fdb3063cd0a51f3edb63e935b4d9b2066f11e58ab7428ec07->enter($__internal_72c2e2b3a86d6e5fdb3063cd0a51f3edb63e935b4d9b2066f11e58ab7428ec07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_72c2e2b3a86d6e5fdb3063cd0a51f3edb63e935b4d9b2066f11e58ab7428ec07->leave($__internal_72c2e2b3a86d6e5fdb3063cd0a51f3edb63e935b4d9b2066f11e58ab7428ec07_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_881deaa03590dd6a40a03fa6991dfcc6287313fb027ef0d1703a348986d9d5bb = $this->env->getExtension("native_profiler");
        $__internal_881deaa03590dd6a40a03fa6991dfcc6287313fb027ef0d1703a348986d9d5bb->enter($__internal_881deaa03590dd6a40a03fa6991dfcc6287313fb027ef0d1703a348986d9d5bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_881deaa03590dd6a40a03fa6991dfcc6287313fb027ef0d1703a348986d9d5bb->leave($__internal_881deaa03590dd6a40a03fa6991dfcc6287313fb027ef0d1703a348986d9d5bb_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_dedf0943508675dfd928d39024afbb2de336cc325f76af73f301a89c9bb8c64e = $this->env->getExtension("native_profiler");
        $__internal_dedf0943508675dfd928d39024afbb2de336cc325f76af73f301a89c9bb8c64e->enter($__internal_dedf0943508675dfd928d39024afbb2de336cc325f76af73f301a89c9bb8c64e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_dedf0943508675dfd928d39024afbb2de336cc325f76af73f301a89c9bb8c64e->leave($__internal_dedf0943508675dfd928d39024afbb2de336cc325f76af73f301a89c9bb8c64e_prof);

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
