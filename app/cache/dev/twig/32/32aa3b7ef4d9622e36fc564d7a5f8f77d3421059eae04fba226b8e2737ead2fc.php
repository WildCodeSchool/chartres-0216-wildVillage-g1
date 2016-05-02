<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_5f6abb7d10e7e2542e97d80a8abd3f49360edf041e09a5b7ad6d2f15c445368d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_fcb8dbf30937657dc66ae77a492d45173fc73715074a79dd0815d86a23357c42 = $this->env->getExtension("native_profiler");
        $__internal_fcb8dbf30937657dc66ae77a492d45173fc73715074a79dd0815d86a23357c42->enter($__internal_fcb8dbf30937657dc66ae77a492d45173fc73715074a79dd0815d86a23357c42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fcb8dbf30937657dc66ae77a492d45173fc73715074a79dd0815d86a23357c42->leave($__internal_fcb8dbf30937657dc66ae77a492d45173fc73715074a79dd0815d86a23357c42_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_df41c1f74ab2e9ad7afd2c2348ba552001bffeada2a99f41e59ea0cc09e5b61f = $this->env->getExtension("native_profiler");
        $__internal_df41c1f74ab2e9ad7afd2c2348ba552001bffeada2a99f41e59ea0cc09e5b61f->enter($__internal_df41c1f74ab2e9ad7afd2c2348ba552001bffeada2a99f41e59ea0cc09e5b61f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_df41c1f74ab2e9ad7afd2c2348ba552001bffeada2a99f41e59ea0cc09e5b61f->leave($__internal_df41c1f74ab2e9ad7afd2c2348ba552001bffeada2a99f41e59ea0cc09e5b61f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
