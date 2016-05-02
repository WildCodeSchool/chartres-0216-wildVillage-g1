<?php

/* @FOSUser/ChangePassword/changePassword.html.twig */
class __TwigTemplate_b73d2bf78c044a88ee94b2a8022a9c8fce8e2faad3c83579d44ba0616d34fa58 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 1);
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
        $__internal_022ddf27ce2008d80c764f6c514194cd253038c0954bf11fc433cd37962eae29 = $this->env->getExtension("native_profiler");
        $__internal_022ddf27ce2008d80c764f6c514194cd253038c0954bf11fc433cd37962eae29->enter($__internal_022ddf27ce2008d80c764f6c514194cd253038c0954bf11fc433cd37962eae29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_022ddf27ce2008d80c764f6c514194cd253038c0954bf11fc433cd37962eae29->leave($__internal_022ddf27ce2008d80c764f6c514194cd253038c0954bf11fc433cd37962eae29_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cef601b0e7e1dd13085a0190798b42a7dd9eeff5a6d275eb6710c95ae0a0bda0 = $this->env->getExtension("native_profiler");
        $__internal_cef601b0e7e1dd13085a0190798b42a7dd9eeff5a6d275eb6710c95ae0a0bda0->enter($__internal_cef601b0e7e1dd13085a0190798b42a7dd9eeff5a6d275eb6710c95ae0a0bda0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_cef601b0e7e1dd13085a0190798b42a7dd9eeff5a6d275eb6710c95ae0a0bda0->leave($__internal_cef601b0e7e1dd13085a0190798b42a7dd9eeff5a6d275eb6710c95ae0a0bda0_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
