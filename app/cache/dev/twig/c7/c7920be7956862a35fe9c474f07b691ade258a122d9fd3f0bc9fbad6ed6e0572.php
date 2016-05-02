<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_56c3b7f05c820807cb5846f7bf1a3abbc07ab24198725254c07268a8951da014 extends Twig_Template
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
        $__internal_f290ff25b73eff3582ed1a11adc93b8801d955f8089b3c010cd155fd23e0dfdd = $this->env->getExtension("native_profiler");
        $__internal_f290ff25b73eff3582ed1a11adc93b8801d955f8089b3c010cd155fd23e0dfdd->enter($__internal_f290ff25b73eff3582ed1a11adc93b8801d955f8089b3c010cd155fd23e0dfdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_f290ff25b73eff3582ed1a11adc93b8801d955f8089b3c010cd155fd23e0dfdd->leave($__internal_f290ff25b73eff3582ed1a11adc93b8801d955f8089b3c010cd155fd23e0dfdd_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
