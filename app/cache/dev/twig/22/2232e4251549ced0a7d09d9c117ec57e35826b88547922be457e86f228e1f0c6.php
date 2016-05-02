<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_972509fc1a5092fbf6a2324669ea4643f4341b180b2dfbd0bf5f6bdd034f418c extends Twig_Template
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
        $__internal_fc291f0298c05c5bd33d5105228529150dbc2047c1c9cb079ccd5d87b0276034 = $this->env->getExtension("native_profiler");
        $__internal_fc291f0298c05c5bd33d5105228529150dbc2047c1c9cb079ccd5d87b0276034->enter($__internal_fc291f0298c05c5bd33d5105228529150dbc2047c1c9cb079ccd5d87b0276034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_fc291f0298c05c5bd33d5105228529150dbc2047c1c9cb079ccd5d87b0276034->leave($__internal_fc291f0298c05c5bd33d5105228529150dbc2047c1c9cb079ccd5d87b0276034_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
