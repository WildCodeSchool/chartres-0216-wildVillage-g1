<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_104d9942bac0c7493c0378b2dcb9db7a60a8b139150999cb7fdde779cad9c873 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_17bb872604e5ed3fa6c4efed689f16b51d261b82a15ab137e01c5fc1909a893d = $this->env->getExtension("native_profiler");
        $__internal_17bb872604e5ed3fa6c4efed689f16b51d261b82a15ab137e01c5fc1909a893d->enter($__internal_17bb872604e5ed3fa6c4efed689f16b51d261b82a15ab137e01c5fc1909a893d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17bb872604e5ed3fa6c4efed689f16b51d261b82a15ab137e01c5fc1909a893d->leave($__internal_17bb872604e5ed3fa6c4efed689f16b51d261b82a15ab137e01c5fc1909a893d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bc3a1e73667c04c27cab3583bfb031b90f97285dd348f50db856f48eb9b60491 = $this->env->getExtension("native_profiler");
        $__internal_bc3a1e73667c04c27cab3583bfb031b90f97285dd348f50db856f48eb9b60491->enter($__internal_bc3a1e73667c04c27cab3583bfb031b90f97285dd348f50db856f48eb9b60491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_bc3a1e73667c04c27cab3583bfb031b90f97285dd348f50db856f48eb9b60491->leave($__internal_bc3a1e73667c04c27cab3583bfb031b90f97285dd348f50db856f48eb9b60491_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
