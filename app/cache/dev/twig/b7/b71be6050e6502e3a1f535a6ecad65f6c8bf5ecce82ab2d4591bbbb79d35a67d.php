<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_c82560943e9a8c48a5ca96e5d6975ad6862fe8af88f11ce1a2c43e00db364a99 extends Twig_Template
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
        $__internal_198e1235d05fa46cbabe14dab82bb9e1c127f33897721355e70065db32f44d71 = $this->env->getExtension("native_profiler");
        $__internal_198e1235d05fa46cbabe14dab82bb9e1c127f33897721355e70065db32f44d71->enter($__internal_198e1235d05fa46cbabe14dab82bb9e1c127f33897721355e70065db32f44d71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_198e1235d05fa46cbabe14dab82bb9e1c127f33897721355e70065db32f44d71->leave($__internal_198e1235d05fa46cbabe14dab82bb9e1c127f33897721355e70065db32f44d71_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
