<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_b858bde884f0c3c61eeb50b2854b92898d52002ad500991f66e475c2429066a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_44728a524567e2782ccd54656e6b6c2b4c7560a70a77865d242b0e7867f45242 = $this->env->getExtension("native_profiler");
        $__internal_44728a524567e2782ccd54656e6b6c2b4c7560a70a77865d242b0e7867f45242->enter($__internal_44728a524567e2782ccd54656e6b6c2b4c7560a70a77865d242b0e7867f45242_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44728a524567e2782ccd54656e6b6c2b4c7560a70a77865d242b0e7867f45242->leave($__internal_44728a524567e2782ccd54656e6b6c2b4c7560a70a77865d242b0e7867f45242_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0b9591ad6b54541afba7719e12697803c7dcfd30170eeae04513a81303fdf688 = $this->env->getExtension("native_profiler");
        $__internal_0b9591ad6b54541afba7719e12697803c7dcfd30170eeae04513a81303fdf688->enter($__internal_0b9591ad6b54541afba7719e12697803c7dcfd30170eeae04513a81303fdf688_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_0b9591ad6b54541afba7719e12697803c7dcfd30170eeae04513a81303fdf688->leave($__internal_0b9591ad6b54541afba7719e12697803c7dcfd30170eeae04513a81303fdf688_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
