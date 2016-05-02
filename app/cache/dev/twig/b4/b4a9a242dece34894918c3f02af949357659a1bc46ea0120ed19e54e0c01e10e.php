<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_d99ae1d18a105901ff22939430430c27c8eac9cb6fc807d2eabfa419592f5aa8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_da27a4305855b0d5cac0f8e9e2be5f749768503ed9e9a03aeb3966cb2512ad33 = $this->env->getExtension("native_profiler");
        $__internal_da27a4305855b0d5cac0f8e9e2be5f749768503ed9e9a03aeb3966cb2512ad33->enter($__internal_da27a4305855b0d5cac0f8e9e2be5f749768503ed9e9a03aeb3966cb2512ad33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da27a4305855b0d5cac0f8e9e2be5f749768503ed9e9a03aeb3966cb2512ad33->leave($__internal_da27a4305855b0d5cac0f8e9e2be5f749768503ed9e9a03aeb3966cb2512ad33_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f9bd4b3abc3a4f6934c46b5a1bcfb7b684fa329dd695c478e0c2bb46da70a3f1 = $this->env->getExtension("native_profiler");
        $__internal_f9bd4b3abc3a4f6934c46b5a1bcfb7b684fa329dd695c478e0c2bb46da70a3f1->enter($__internal_f9bd4b3abc3a4f6934c46b5a1bcfb7b684fa329dd695c478e0c2bb46da70a3f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_f9bd4b3abc3a4f6934c46b5a1bcfb7b684fa329dd695c478e0c2bb46da70a3f1->leave($__internal_f9bd4b3abc3a4f6934c46b5a1bcfb7b684fa329dd695c478e0c2bb46da70a3f1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
