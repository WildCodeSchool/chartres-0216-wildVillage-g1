<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_b6343d551cafc3cb8a8b3c00459d6d7d44fd496521b8262a6f7ea1432794e4f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_54b9cb647afbd07f5e3957160ef60fe205cea8c8edb301282f81e03b68e549b5 = $this->env->getExtension("native_profiler");
        $__internal_54b9cb647afbd07f5e3957160ef60fe205cea8c8edb301282f81e03b68e549b5->enter($__internal_54b9cb647afbd07f5e3957160ef60fe205cea8c8edb301282f81e03b68e549b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54b9cb647afbd07f5e3957160ef60fe205cea8c8edb301282f81e03b68e549b5->leave($__internal_54b9cb647afbd07f5e3957160ef60fe205cea8c8edb301282f81e03b68e549b5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_488d2f5ab1f3031cf72ef072e32d42a0166d8dd097c499436355c23f8ec84855 = $this->env->getExtension("native_profiler");
        $__internal_488d2f5ab1f3031cf72ef072e32d42a0166d8dd097c499436355c23f8ec84855->enter($__internal_488d2f5ab1f3031cf72ef072e32d42a0166d8dd097c499436355c23f8ec84855_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_488d2f5ab1f3031cf72ef072e32d42a0166d8dd097c499436355c23f8ec84855->leave($__internal_488d2f5ab1f3031cf72ef072e32d42a0166d8dd097c499436355c23f8ec84855_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
