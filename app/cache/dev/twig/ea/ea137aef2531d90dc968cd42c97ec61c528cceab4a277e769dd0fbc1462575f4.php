<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_060150d46513d03b027d6c439e7271d56eecf76d70d3abf7c713820f51273f40 extends Twig_Template
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
        $__internal_fa8ac609a864722583b52faaafe5bdcca26d53f9e193ff13541f0d88a69e8fad = $this->env->getExtension("native_profiler");
        $__internal_fa8ac609a864722583b52faaafe5bdcca26d53f9e193ff13541f0d88a69e8fad->enter($__internal_fa8ac609a864722583b52faaafe5bdcca26d53f9e193ff13541f0d88a69e8fad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_fa8ac609a864722583b52faaafe5bdcca26d53f9e193ff13541f0d88a69e8fad->leave($__internal_fa8ac609a864722583b52faaafe5bdcca26d53f9e193ff13541f0d88a69e8fad_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
