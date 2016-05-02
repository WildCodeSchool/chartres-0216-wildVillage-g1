<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_d8af00831f893785409c9107a6c1a02a48090f478e49eb247d786b0a501ce257 extends Twig_Template
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
        $__internal_e492d8a02af76fccbe12b765983871894791bdb95f112594be523ff24d0e14e9 = $this->env->getExtension("native_profiler");
        $__internal_e492d8a02af76fccbe12b765983871894791bdb95f112594be523ff24d0e14e9->enter($__internal_e492d8a02af76fccbe12b765983871894791bdb95f112594be523ff24d0e14e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_e492d8a02af76fccbe12b765983871894791bdb95f112594be523ff24d0e14e9->leave($__internal_e492d8a02af76fccbe12b765983871894791bdb95f112594be523ff24d0e14e9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
