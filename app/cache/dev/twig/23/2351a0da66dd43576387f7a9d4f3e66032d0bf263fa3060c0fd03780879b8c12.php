<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_948a09d8f94d87d81e30b3d8e358e1194ab6a19cb0898587128b3da4747e363e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_424f3e32cb4623c59acb53931ee8d4a2aee57bedfca74dccf81867ba7a0d9a08 = $this->env->getExtension("native_profiler");
        $__internal_424f3e32cb4623c59acb53931ee8d4a2aee57bedfca74dccf81867ba7a0d9a08->enter($__internal_424f3e32cb4623c59acb53931ee8d4a2aee57bedfca74dccf81867ba7a0d9a08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_424f3e32cb4623c59acb53931ee8d4a2aee57bedfca74dccf81867ba7a0d9a08->leave($__internal_424f3e32cb4623c59acb53931ee8d4a2aee57bedfca74dccf81867ba7a0d9a08_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a487c9b0f30167427a7d9e3d84389fd23de4b400ad3080bfb91024b7a4bd1fbd = $this->env->getExtension("native_profiler");
        $__internal_a487c9b0f30167427a7d9e3d84389fd23de4b400ad3080bfb91024b7a4bd1fbd->enter($__internal_a487c9b0f30167427a7d9e3d84389fd23de4b400ad3080bfb91024b7a4bd1fbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_a487c9b0f30167427a7d9e3d84389fd23de4b400ad3080bfb91024b7a4bd1fbd->leave($__internal_a487c9b0f30167427a7d9e3d84389fd23de4b400ad3080bfb91024b7a4bd1fbd_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
