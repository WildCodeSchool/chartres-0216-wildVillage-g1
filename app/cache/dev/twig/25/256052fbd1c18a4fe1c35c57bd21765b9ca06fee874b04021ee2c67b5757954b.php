<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_917cd49b217e290d84669aaa8f4e53569d45029a648bcfe23d02347b3b5e20fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_3ebf30cdda63ab262e44b78ab75b0f0cdb68ff9eab1e7d2f1b3bef04a873235f = $this->env->getExtension("native_profiler");
        $__internal_3ebf30cdda63ab262e44b78ab75b0f0cdb68ff9eab1e7d2f1b3bef04a873235f->enter($__internal_3ebf30cdda63ab262e44b78ab75b0f0cdb68ff9eab1e7d2f1b3bef04a873235f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ebf30cdda63ab262e44b78ab75b0f0cdb68ff9eab1e7d2f1b3bef04a873235f->leave($__internal_3ebf30cdda63ab262e44b78ab75b0f0cdb68ff9eab1e7d2f1b3bef04a873235f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a2928d5a48bcf6fef23e55f0a299129cccdbd3dca0f6936046a934aa8fd6133d = $this->env->getExtension("native_profiler");
        $__internal_a2928d5a48bcf6fef23e55f0a299129cccdbd3dca0f6936046a934aa8fd6133d->enter($__internal_a2928d5a48bcf6fef23e55f0a299129cccdbd3dca0f6936046a934aa8fd6133d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_a2928d5a48bcf6fef23e55f0a299129cccdbd3dca0f6936046a934aa8fd6133d->leave($__internal_a2928d5a48bcf6fef23e55f0a299129cccdbd3dca0f6936046a934aa8fd6133d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
