<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_a718394cc9973e15d2a2d0acc872de65bba4f3e44b4a8a4425454dbb9baa3930 extends Twig_Template
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
        $__internal_00c350c9ae551484fbb21888caa2d8749416e03d997ec7c0271d00471d9f6f47 = $this->env->getExtension("native_profiler");
        $__internal_00c350c9ae551484fbb21888caa2d8749416e03d997ec7c0271d00471d9f6f47->enter($__internal_00c350c9ae551484fbb21888caa2d8749416e03d997ec7c0271d00471d9f6f47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_00c350c9ae551484fbb21888caa2d8749416e03d997ec7c0271d00471d9f6f47->leave($__internal_00c350c9ae551484fbb21888caa2d8749416e03d997ec7c0271d00471d9f6f47_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
