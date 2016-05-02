<?php

/* @FOSUser/Resetting/passwordAlreadyRequested.html.twig */
class __TwigTemplate_38c608af973789b795341c3ae2d2ab4cb418223529e36ea00f23387c62c06d6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig", 1);
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
        $__internal_a642326607b6159b9b46620bd1cd8c17dd4a5c58b2128258968f2ab54ad01e9c = $this->env->getExtension("native_profiler");
        $__internal_a642326607b6159b9b46620bd1cd8c17dd4a5c58b2128258968f2ab54ad01e9c->enter($__internal_a642326607b6159b9b46620bd1cd8c17dd4a5c58b2128258968f2ab54ad01e9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a642326607b6159b9b46620bd1cd8c17dd4a5c58b2128258968f2ab54ad01e9c->leave($__internal_a642326607b6159b9b46620bd1cd8c17dd4a5c58b2128258968f2ab54ad01e9c_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ae5c8983ca160abb284fddeb2cbe78c177a5a352c6011b54b328b5231cc0f959 = $this->env->getExtension("native_profiler");
        $__internal_ae5c8983ca160abb284fddeb2cbe78c177a5a352c6011b54b328b5231cc0f959->enter($__internal_ae5c8983ca160abb284fddeb2cbe78c177a5a352c6011b54b328b5231cc0f959_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_ae5c8983ca160abb284fddeb2cbe78c177a5a352c6011b54b328b5231cc0f959->leave($__internal_ae5c8983ca160abb284fddeb2cbe78c177a5a352c6011b54b328b5231cc0f959_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
