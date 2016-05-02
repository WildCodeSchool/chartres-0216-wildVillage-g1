<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_6a8dbba8a13f31a73f4afdbbc62ea01e650d3fb0e7637b81eda6e989f3b2812c extends Twig_Template
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
        $__internal_9b990d051616711f4deaf27e2b66e4406d61e9b361a6896bea20294a47c7ef8d = $this->env->getExtension("native_profiler");
        $__internal_9b990d051616711f4deaf27e2b66e4406d61e9b361a6896bea20294a47c7ef8d->enter($__internal_9b990d051616711f4deaf27e2b66e4406d61e9b361a6896bea20294a47c7ef8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_9b990d051616711f4deaf27e2b66e4406d61e9b361a6896bea20294a47c7ef8d->leave($__internal_9b990d051616711f4deaf27e2b66e4406d61e9b361a6896bea20294a47c7ef8d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
