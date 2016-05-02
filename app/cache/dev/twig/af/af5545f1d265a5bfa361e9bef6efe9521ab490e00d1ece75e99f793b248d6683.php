<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_32f840079ad97033033b8c59e822e7b7125cdf129eafe9c1ed8701e8016aa5da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_b0e384a146812f9d958aec3fb7e416882316c347e14473f3f79bf584bd46e37e = $this->env->getExtension("native_profiler");
        $__internal_b0e384a146812f9d958aec3fb7e416882316c347e14473f3f79bf584bd46e37e->enter($__internal_b0e384a146812f9d958aec3fb7e416882316c347e14473f3f79bf584bd46e37e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b0e384a146812f9d958aec3fb7e416882316c347e14473f3f79bf584bd46e37e->leave($__internal_b0e384a146812f9d958aec3fb7e416882316c347e14473f3f79bf584bd46e37e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4147fb1facb218a9f7d34bf1bfc331fb8582bb1bffc0972da4680ec786faa381 = $this->env->getExtension("native_profiler");
        $__internal_4147fb1facb218a9f7d34bf1bfc331fb8582bb1bffc0972da4680ec786faa381->enter($__internal_4147fb1facb218a9f7d34bf1bfc331fb8582bb1bffc0972da4680ec786faa381_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_4147fb1facb218a9f7d34bf1bfc331fb8582bb1bffc0972da4680ec786faa381->leave($__internal_4147fb1facb218a9f7d34bf1bfc331fb8582bb1bffc0972da4680ec786faa381_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
