<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_93475ef9470515d902a14168432df091b50e03b37b1df114fc5ee98868f576f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_8997036713b106b3ea7a702fdfaa40ce4154a08ae40e446da0c752cedfb45ba9 = $this->env->getExtension("native_profiler");
        $__internal_8997036713b106b3ea7a702fdfaa40ce4154a08ae40e446da0c752cedfb45ba9->enter($__internal_8997036713b106b3ea7a702fdfaa40ce4154a08ae40e446da0c752cedfb45ba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8997036713b106b3ea7a702fdfaa40ce4154a08ae40e446da0c752cedfb45ba9->leave($__internal_8997036713b106b3ea7a702fdfaa40ce4154a08ae40e446da0c752cedfb45ba9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_49fb3cc008bc307e2f90b248067b47a589fd8195d2b4e28325cf57d375492e04 = $this->env->getExtension("native_profiler");
        $__internal_49fb3cc008bc307e2f90b248067b47a589fd8195d2b4e28325cf57d375492e04->enter($__internal_49fb3cc008bc307e2f90b248067b47a589fd8195d2b4e28325cf57d375492e04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_49fb3cc008bc307e2f90b248067b47a589fd8195d2b4e28325cf57d375492e04->leave($__internal_49fb3cc008bc307e2f90b248067b47a589fd8195d2b4e28325cf57d375492e04_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
