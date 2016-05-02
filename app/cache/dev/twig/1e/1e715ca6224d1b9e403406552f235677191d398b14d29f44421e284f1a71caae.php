<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_f4cf9c22a6e6b854762baa06ff801ecab2dd71305e887276a46cd1dcf408e27d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0716f7e753acce1506a66c49098b45c722b050a3c0e03e455fd238b993f1b92d = $this->env->getExtension("native_profiler");
        $__internal_0716f7e753acce1506a66c49098b45c722b050a3c0e03e455fd238b993f1b92d->enter($__internal_0716f7e753acce1506a66c49098b45c722b050a3c0e03e455fd238b993f1b92d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0716f7e753acce1506a66c49098b45c722b050a3c0e03e455fd238b993f1b92d->leave($__internal_0716f7e753acce1506a66c49098b45c722b050a3c0e03e455fd238b993f1b92d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2489670f8a917ac86419aa8ff54451563e801fc0ab11290898a9642c80a000ce = $this->env->getExtension("native_profiler");
        $__internal_2489670f8a917ac86419aa8ff54451563e801fc0ab11290898a9642c80a000ce->enter($__internal_2489670f8a917ac86419aa8ff54451563e801fc0ab11290898a9642c80a000ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_2489670f8a917ac86419aa8ff54451563e801fc0ab11290898a9642c80a000ce->leave($__internal_2489670f8a917ac86419aa8ff54451563e801fc0ab11290898a9642c80a000ce_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
