<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_91cbdf11bf1a96a2f8dff86a80ac050ca7b22e60b730833496182c6bc165b7b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1bbf7d497ee74aff01afe5f0cf3354a69f8f0998bdab7fa38d04d58773d9f7f4 = $this->env->getExtension("native_profiler");
        $__internal_1bbf7d497ee74aff01afe5f0cf3354a69f8f0998bdab7fa38d04d58773d9f7f4->enter($__internal_1bbf7d497ee74aff01afe5f0cf3354a69f8f0998bdab7fa38d04d58773d9f7f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_1bbf7d497ee74aff01afe5f0cf3354a69f8f0998bdab7fa38d04d58773d9f7f4->leave($__internal_1bbf7d497ee74aff01afe5f0cf3354a69f8f0998bdab7fa38d04d58773d9f7f4_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_c72b78f76ef6864111ef59fc449e5141e845ac86c0878fdfe8bc6c72059dc88d = $this->env->getExtension("native_profiler");
        $__internal_c72b78f76ef6864111ef59fc449e5141e845ac86c0878fdfe8bc6c72059dc88d->enter($__internal_c72b78f76ef6864111ef59fc449e5141e845ac86c0878fdfe8bc6c72059dc88d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_c72b78f76ef6864111ef59fc449e5141e845ac86c0878fdfe8bc6c72059dc88d->leave($__internal_c72b78f76ef6864111ef59fc449e5141e845ac86c0878fdfe8bc6c72059dc88d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
