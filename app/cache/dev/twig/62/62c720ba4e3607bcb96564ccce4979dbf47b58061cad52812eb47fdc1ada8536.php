<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_2db05f8f5a4bd36329fa13fddba9127cb5e3a7387d20cc28f361191dd39a73ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_43ba8a60638ce8c51f0599b02e49f31e320196f0309460637509235d13e791e4 = $this->env->getExtension("native_profiler");
        $__internal_43ba8a60638ce8c51f0599b02e49f31e320196f0309460637509235d13e791e4->enter($__internal_43ba8a60638ce8c51f0599b02e49f31e320196f0309460637509235d13e791e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_43ba8a60638ce8c51f0599b02e49f31e320196f0309460637509235d13e791e4->leave($__internal_43ba8a60638ce8c51f0599b02e49f31e320196f0309460637509235d13e791e4_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_c7fbf68a5da08d36d75309a31fa790b052971aa853ac7d942f91d2c181cce394 = $this->env->getExtension("native_profiler");
        $__internal_c7fbf68a5da08d36d75309a31fa790b052971aa853ac7d942f91d2c181cce394->enter($__internal_c7fbf68a5da08d36d75309a31fa790b052971aa853ac7d942f91d2c181cce394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_c7fbf68a5da08d36d75309a31fa790b052971aa853ac7d942f91d2c181cce394->leave($__internal_c7fbf68a5da08d36d75309a31fa790b052971aa853ac7d942f91d2c181cce394_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_8baac8727df98d3f5910c43df3203faf5b13ebf5238f0f626614a4187da54c14 = $this->env->getExtension("native_profiler");
        $__internal_8baac8727df98d3f5910c43df3203faf5b13ebf5238f0f626614a4187da54c14->enter($__internal_8baac8727df98d3f5910c43df3203faf5b13ebf5238f0f626614a4187da54c14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_8baac8727df98d3f5910c43df3203faf5b13ebf5238f0f626614a4187da54c14->leave($__internal_8baac8727df98d3f5910c43df3203faf5b13ebf5238f0f626614a4187da54c14_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_2b0851705ce56fd32f5c94969cd0ffe2d6018043358352eaf0a24bfc15cdae3d = $this->env->getExtension("native_profiler");
        $__internal_2b0851705ce56fd32f5c94969cd0ffe2d6018043358352eaf0a24bfc15cdae3d->enter($__internal_2b0851705ce56fd32f5c94969cd0ffe2d6018043358352eaf0a24bfc15cdae3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_2b0851705ce56fd32f5c94969cd0ffe2d6018043358352eaf0a24bfc15cdae3d->leave($__internal_2b0851705ce56fd32f5c94969cd0ffe2d6018043358352eaf0a24bfc15cdae3d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
