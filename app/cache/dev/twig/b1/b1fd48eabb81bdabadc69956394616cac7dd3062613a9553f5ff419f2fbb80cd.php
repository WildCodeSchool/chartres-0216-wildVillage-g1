<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_0a0ee757d1c2dce88723cb5023a65faf326706a3abd1614d985c1b65c3652b56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_6ce122f9bd87cacf95e7bdda6f7bd25f09fcc2e755e6cf1e343aa59112e9de5f = $this->env->getExtension("native_profiler");
        $__internal_6ce122f9bd87cacf95e7bdda6f7bd25f09fcc2e755e6cf1e343aa59112e9de5f->enter($__internal_6ce122f9bd87cacf95e7bdda6f7bd25f09fcc2e755e6cf1e343aa59112e9de5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ce122f9bd87cacf95e7bdda6f7bd25f09fcc2e755e6cf1e343aa59112e9de5f->leave($__internal_6ce122f9bd87cacf95e7bdda6f7bd25f09fcc2e755e6cf1e343aa59112e9de5f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_55e414b15deb264037ae6d5738251afa99bfeb3ecfd6e178ee32e3ae7a546347 = $this->env->getExtension("native_profiler");
        $__internal_55e414b15deb264037ae6d5738251afa99bfeb3ecfd6e178ee32e3ae7a546347->enter($__internal_55e414b15deb264037ae6d5738251afa99bfeb3ecfd6e178ee32e3ae7a546347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_55e414b15deb264037ae6d5738251afa99bfeb3ecfd6e178ee32e3ae7a546347->leave($__internal_55e414b15deb264037ae6d5738251afa99bfeb3ecfd6e178ee32e3ae7a546347_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
