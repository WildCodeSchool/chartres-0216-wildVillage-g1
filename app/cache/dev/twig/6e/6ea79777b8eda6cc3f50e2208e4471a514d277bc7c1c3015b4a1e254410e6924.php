<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_2bc08b391d1e1a5afcd11f13e25c743cef9fbbca6a87d6155c39da7dcf3abd1b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_03c6e43c756ca7fe6a80eaf0fcbf6aa97246a83fd9247e3031a0d7fdd539e490 = $this->env->getExtension("native_profiler");
        $__internal_03c6e43c756ca7fe6a80eaf0fcbf6aa97246a83fd9247e3031a0d7fdd539e490->enter($__internal_03c6e43c756ca7fe6a80eaf0fcbf6aa97246a83fd9247e3031a0d7fdd539e490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_03c6e43c756ca7fe6a80eaf0fcbf6aa97246a83fd9247e3031a0d7fdd539e490->leave($__internal_03c6e43c756ca7fe6a80eaf0fcbf6aa97246a83fd9247e3031a0d7fdd539e490_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
