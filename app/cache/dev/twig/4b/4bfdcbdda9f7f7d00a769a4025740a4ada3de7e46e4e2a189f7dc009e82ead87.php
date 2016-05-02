<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_6a106dbf07aa1b2518c5ef2b1153165e18a1e094121cf5c648bf716f01275060 extends Twig_Template
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
        $__internal_369cd633896dbb63fe2704a05c1cd2f9cd8823271fda5bb67756cf0ac395c838 = $this->env->getExtension("native_profiler");
        $__internal_369cd633896dbb63fe2704a05c1cd2f9cd8823271fda5bb67756cf0ac395c838->enter($__internal_369cd633896dbb63fe2704a05c1cd2f9cd8823271fda5bb67756cf0ac395c838_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_369cd633896dbb63fe2704a05c1cd2f9cd8823271fda5bb67756cf0ac395c838->leave($__internal_369cd633896dbb63fe2704a05c1cd2f9cd8823271fda5bb67756cf0ac395c838_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
