<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_bf1983b605e9505afe93b5ef527f68f171523ecc41a759e8a9004b6a4cd8d6ab extends Twig_Template
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
        $__internal_27a829296c0b6e6aeab51b447e38f8f82074d38097511496bfb8e63feef990ce = $this->env->getExtension("native_profiler");
        $__internal_27a829296c0b6e6aeab51b447e38f8f82074d38097511496bfb8e63feef990ce->enter($__internal_27a829296c0b6e6aeab51b447e38f8f82074d38097511496bfb8e63feef990ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_27a829296c0b6e6aeab51b447e38f8f82074d38097511496bfb8e63feef990ce->leave($__internal_27a829296c0b6e6aeab51b447e38f8f82074d38097511496bfb8e63feef990ce_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
