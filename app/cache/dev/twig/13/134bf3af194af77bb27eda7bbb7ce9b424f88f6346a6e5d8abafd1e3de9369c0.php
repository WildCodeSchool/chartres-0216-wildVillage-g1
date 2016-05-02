<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_4f26aec30c31681f0cf9cb88b2ff6248546847f6f70b6b66cef6a1643375b8af extends Twig_Template
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
        $__internal_539211d08702eecefc70d027f8049f927fb3e322b8512897f4770490fc336018 = $this->env->getExtension("native_profiler");
        $__internal_539211d08702eecefc70d027f8049f927fb3e322b8512897f4770490fc336018->enter($__internal_539211d08702eecefc70d027f8049f927fb3e322b8512897f4770490fc336018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_539211d08702eecefc70d027f8049f927fb3e322b8512897f4770490fc336018->leave($__internal_539211d08702eecefc70d027f8049f927fb3e322b8512897f4770490fc336018_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
