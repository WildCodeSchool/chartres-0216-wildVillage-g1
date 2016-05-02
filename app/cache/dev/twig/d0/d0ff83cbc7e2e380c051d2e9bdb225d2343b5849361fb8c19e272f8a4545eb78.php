<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_2bbeba22b6fc6d664978384997922faf2e8d780ee31de51e93a488fcccae198d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_4269b456b3fd1322223721f4b8ef592598ab8fa83f0b6988be95ae9efef5dadc = $this->env->getExtension("native_profiler");
        $__internal_4269b456b3fd1322223721f4b8ef592598ab8fa83f0b6988be95ae9efef5dadc->enter($__internal_4269b456b3fd1322223721f4b8ef592598ab8fa83f0b6988be95ae9efef5dadc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4269b456b3fd1322223721f4b8ef592598ab8fa83f0b6988be95ae9efef5dadc->leave($__internal_4269b456b3fd1322223721f4b8ef592598ab8fa83f0b6988be95ae9efef5dadc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_582ac398be3b0b38aa458fd036cef4e5976a36ebec4f7b2696022a4ebfc1391c = $this->env->getExtension("native_profiler");
        $__internal_582ac398be3b0b38aa458fd036cef4e5976a36ebec4f7b2696022a4ebfc1391c->enter($__internal_582ac398be3b0b38aa458fd036cef4e5976a36ebec4f7b2696022a4ebfc1391c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_582ac398be3b0b38aa458fd036cef4e5976a36ebec4f7b2696022a4ebfc1391c->leave($__internal_582ac398be3b0b38aa458fd036cef4e5976a36ebec4f7b2696022a4ebfc1391c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
