<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_de89e7af6022cf0b4570025dd564cc9e432624bd99904ead4a64170794bb0de9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_1e61c41c00a87d2dda921d0c16f2ec65e1a991080dddfb88e49d2f1895211b62 = $this->env->getExtension("native_profiler");
        $__internal_1e61c41c00a87d2dda921d0c16f2ec65e1a991080dddfb88e49d2f1895211b62->enter($__internal_1e61c41c00a87d2dda921d0c16f2ec65e1a991080dddfb88e49d2f1895211b62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e61c41c00a87d2dda921d0c16f2ec65e1a991080dddfb88e49d2f1895211b62->leave($__internal_1e61c41c00a87d2dda921d0c16f2ec65e1a991080dddfb88e49d2f1895211b62_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_fd35d6202af937ff34060afd99511170a76c84e4e6157261111b2779d13307ec = $this->env->getExtension("native_profiler");
        $__internal_fd35d6202af937ff34060afd99511170a76c84e4e6157261111b2779d13307ec->enter($__internal_fd35d6202af937ff34060afd99511170a76c84e4e6157261111b2779d13307ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_fd35d6202af937ff34060afd99511170a76c84e4e6157261111b2779d13307ec->leave($__internal_fd35d6202af937ff34060afd99511170a76c84e4e6157261111b2779d13307ec_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a0575176530e123b4259008631d38bed7aa035dd63ecb0c15cdfab5abd327f45 = $this->env->getExtension("native_profiler");
        $__internal_a0575176530e123b4259008631d38bed7aa035dd63ecb0c15cdfab5abd327f45->enter($__internal_a0575176530e123b4259008631d38bed7aa035dd63ecb0c15cdfab5abd327f45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a0575176530e123b4259008631d38bed7aa035dd63ecb0c15cdfab5abd327f45->leave($__internal_a0575176530e123b4259008631d38bed7aa035dd63ecb0c15cdfab5abd327f45_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d50f8b9fb52f8c834ec731a1136c4406c7f652775906f475c864c8a094be0550 = $this->env->getExtension("native_profiler");
        $__internal_d50f8b9fb52f8c834ec731a1136c4406c7f652775906f475c864c8a094be0550->enter($__internal_d50f8b9fb52f8c834ec731a1136c4406c7f652775906f475c864c8a094be0550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d50f8b9fb52f8c834ec731a1136c4406c7f652775906f475c864c8a094be0550->leave($__internal_d50f8b9fb52f8c834ec731a1136c4406c7f652775906f475c864c8a094be0550_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
