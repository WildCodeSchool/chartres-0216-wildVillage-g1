<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_0dcfa0dc92587072ef2fcb0d8956cccecef38f7978e561e2c2aad19dbe9f857c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_14aac9f5e2f51ee15ed1695ef2431459c34d99c1ce60757f3077838829faae6b = $this->env->getExtension("native_profiler");
        $__internal_14aac9f5e2f51ee15ed1695ef2431459c34d99c1ce60757f3077838829faae6b->enter($__internal_14aac9f5e2f51ee15ed1695ef2431459c34d99c1ce60757f3077838829faae6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14aac9f5e2f51ee15ed1695ef2431459c34d99c1ce60757f3077838829faae6b->leave($__internal_14aac9f5e2f51ee15ed1695ef2431459c34d99c1ce60757f3077838829faae6b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_40457ae60cfb02ba3e2f309dfd984a9cff7fa4667c98977b4fe0c9d3397b5119 = $this->env->getExtension("native_profiler");
        $__internal_40457ae60cfb02ba3e2f309dfd984a9cff7fa4667c98977b4fe0c9d3397b5119->enter($__internal_40457ae60cfb02ba3e2f309dfd984a9cff7fa4667c98977b4fe0c9d3397b5119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_40457ae60cfb02ba3e2f309dfd984a9cff7fa4667c98977b4fe0c9d3397b5119->leave($__internal_40457ae60cfb02ba3e2f309dfd984a9cff7fa4667c98977b4fe0c9d3397b5119_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
