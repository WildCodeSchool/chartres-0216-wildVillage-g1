<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_b1118c233d46fc6bd0843758ebb19e6b302d353614cdc4caeea1e2283f182a9d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_9977142ad9a0040e8bdaeced7fc7efdd1843ddf68d03c80c9331a11cd0feb544 = $this->env->getExtension("native_profiler");
        $__internal_9977142ad9a0040e8bdaeced7fc7efdd1843ddf68d03c80c9331a11cd0feb544->enter($__internal_9977142ad9a0040e8bdaeced7fc7efdd1843ddf68d03c80c9331a11cd0feb544_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9977142ad9a0040e8bdaeced7fc7efdd1843ddf68d03c80c9331a11cd0feb544->leave($__internal_9977142ad9a0040e8bdaeced7fc7efdd1843ddf68d03c80c9331a11cd0feb544_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8f03f1c973d1d0e3a14f20f349943e56c3e2b8acad00c0daa06ea9b4ac3eaa1b = $this->env->getExtension("native_profiler");
        $__internal_8f03f1c973d1d0e3a14f20f349943e56c3e2b8acad00c0daa06ea9b4ac3eaa1b->enter($__internal_8f03f1c973d1d0e3a14f20f349943e56c3e2b8acad00c0daa06ea9b4ac3eaa1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_8f03f1c973d1d0e3a14f20f349943e56c3e2b8acad00c0daa06ea9b4ac3eaa1b->leave($__internal_8f03f1c973d1d0e3a14f20f349943e56c3e2b8acad00c0daa06ea9b4ac3eaa1b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
