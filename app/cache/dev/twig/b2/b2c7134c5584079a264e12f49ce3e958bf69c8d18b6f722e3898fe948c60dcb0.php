<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_f1cb55e1ace523713e98c8b5beb89b6ef3eea8f57b7a87b8ab72c2681edb0d6e extends Twig_Template
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
        $__internal_5e3ee14457db75a5db4ef8a4c359c6c9a76bccff9a0e55c69f91a9e8cc045308 = $this->env->getExtension("native_profiler");
        $__internal_5e3ee14457db75a5db4ef8a4c359c6c9a76bccff9a0e55c69f91a9e8cc045308->enter($__internal_5e3ee14457db75a5db4ef8a4c359c6c9a76bccff9a0e55c69f91a9e8cc045308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_5e3ee14457db75a5db4ef8a4c359c6c9a76bccff9a0e55c69f91a9e8cc045308->leave($__internal_5e3ee14457db75a5db4ef8a4c359c6c9a76bccff9a0e55c69f91a9e8cc045308_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
