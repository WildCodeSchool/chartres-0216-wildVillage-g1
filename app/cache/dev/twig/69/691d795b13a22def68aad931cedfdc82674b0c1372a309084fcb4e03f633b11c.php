<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_c663db5d39a0cadffe073ab48c9f4d273b7b8abb0383faf8ac17186b1e6e8add extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_e065f5bd4749e10704e1155b9ed6f3ba4180b1c772c069b072c77d117901e734 = $this->env->getExtension("native_profiler");
        $__internal_e065f5bd4749e10704e1155b9ed6f3ba4180b1c772c069b072c77d117901e734->enter($__internal_e065f5bd4749e10704e1155b9ed6f3ba4180b1c772c069b072c77d117901e734_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e065f5bd4749e10704e1155b9ed6f3ba4180b1c772c069b072c77d117901e734->leave($__internal_e065f5bd4749e10704e1155b9ed6f3ba4180b1c772c069b072c77d117901e734_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a8e3621110f69fca6d23bd549b90e223a4c2d01f9834186330e82854983f6063 = $this->env->getExtension("native_profiler");
        $__internal_a8e3621110f69fca6d23bd549b90e223a4c2d01f9834186330e82854983f6063->enter($__internal_a8e3621110f69fca6d23bd549b90e223a4c2d01f9834186330e82854983f6063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_a8e3621110f69fca6d23bd549b90e223a4c2d01f9834186330e82854983f6063->leave($__internal_a8e3621110f69fca6d23bd549b90e223a4c2d01f9834186330e82854983f6063_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
