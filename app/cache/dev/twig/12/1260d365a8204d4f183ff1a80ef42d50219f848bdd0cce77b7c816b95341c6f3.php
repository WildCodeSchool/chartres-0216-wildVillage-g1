<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_54ac1d49df224f9b9d815c2ddb3b8484457f3b2014e17676e3085b4023b5444a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_882c8e3b736d3b79d3275cfb173998b354b120acce3ea2edc11a7b3bb99b44ab = $this->env->getExtension("native_profiler");
        $__internal_882c8e3b736d3b79d3275cfb173998b354b120acce3ea2edc11a7b3bb99b44ab->enter($__internal_882c8e3b736d3b79d3275cfb173998b354b120acce3ea2edc11a7b3bb99b44ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_882c8e3b736d3b79d3275cfb173998b354b120acce3ea2edc11a7b3bb99b44ab->leave($__internal_882c8e3b736d3b79d3275cfb173998b354b120acce3ea2edc11a7b3bb99b44ab_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4393e5b8d8a2398d92fac16d3e32ab472c9589f3946fd1a32b2cf89684a81099 = $this->env->getExtension("native_profiler");
        $__internal_4393e5b8d8a2398d92fac16d3e32ab472c9589f3946fd1a32b2cf89684a81099->enter($__internal_4393e5b8d8a2398d92fac16d3e32ab472c9589f3946fd1a32b2cf89684a81099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_4393e5b8d8a2398d92fac16d3e32ab472c9589f3946fd1a32b2cf89684a81099->leave($__internal_4393e5b8d8a2398d92fac16d3e32ab472c9589f3946fd1a32b2cf89684a81099_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
