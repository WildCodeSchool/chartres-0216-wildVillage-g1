<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_5bc64a6a5a02110a3f7d444ad08cdc8a9e4288fa542ecf912ce70e2759e031ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_ca34c7a340d90d11ff1f288515ac589caeec3c27e4ab9e58d5bfae4b34150c3f = $this->env->getExtension("native_profiler");
        $__internal_ca34c7a340d90d11ff1f288515ac589caeec3c27e4ab9e58d5bfae4b34150c3f->enter($__internal_ca34c7a340d90d11ff1f288515ac589caeec3c27e4ab9e58d5bfae4b34150c3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca34c7a340d90d11ff1f288515ac589caeec3c27e4ab9e58d5bfae4b34150c3f->leave($__internal_ca34c7a340d90d11ff1f288515ac589caeec3c27e4ab9e58d5bfae4b34150c3f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_26d72ad147d6efc81c799d76e67f4900cb8207dcb3231ceaadd785a64834e6aa = $this->env->getExtension("native_profiler");
        $__internal_26d72ad147d6efc81c799d76e67f4900cb8207dcb3231ceaadd785a64834e6aa->enter($__internal_26d72ad147d6efc81c799d76e67f4900cb8207dcb3231ceaadd785a64834e6aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_26d72ad147d6efc81c799d76e67f4900cb8207dcb3231ceaadd785a64834e6aa->leave($__internal_26d72ad147d6efc81c799d76e67f4900cb8207dcb3231ceaadd785a64834e6aa_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
