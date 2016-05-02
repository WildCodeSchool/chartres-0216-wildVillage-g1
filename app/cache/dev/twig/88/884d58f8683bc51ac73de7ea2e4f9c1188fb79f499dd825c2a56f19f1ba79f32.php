<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_9d2c760c4c132ca9a5706db36c9a8c94989caa472ee28a403e974d2dfcaf1f0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_ad785eb6945f4730675a370e8c117c4045da0746ef0bf786f9a51e2ba23414da = $this->env->getExtension("native_profiler");
        $__internal_ad785eb6945f4730675a370e8c117c4045da0746ef0bf786f9a51e2ba23414da->enter($__internal_ad785eb6945f4730675a370e8c117c4045da0746ef0bf786f9a51e2ba23414da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad785eb6945f4730675a370e8c117c4045da0746ef0bf786f9a51e2ba23414da->leave($__internal_ad785eb6945f4730675a370e8c117c4045da0746ef0bf786f9a51e2ba23414da_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_382cc0cb4627a342560dd4a942bb2f2f30182caad5c7b9576214a7311b501adb = $this->env->getExtension("native_profiler");
        $__internal_382cc0cb4627a342560dd4a942bb2f2f30182caad5c7b9576214a7311b501adb->enter($__internal_382cc0cb4627a342560dd4a942bb2f2f30182caad5c7b9576214a7311b501adb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_382cc0cb4627a342560dd4a942bb2f2f30182caad5c7b9576214a7311b501adb->leave($__internal_382cc0cb4627a342560dd4a942bb2f2f30182caad5c7b9576214a7311b501adb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
