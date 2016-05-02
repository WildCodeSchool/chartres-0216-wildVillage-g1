<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_cb262328b78ff2b3075fe580829013f1a112372beb6cc0664d18117ac44f6222 extends Twig_Template
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
        $__internal_b183fe718c9ac18b6bfae8d646a4beae9f0e3045dcd2688c6984d58a1c55fe6a = $this->env->getExtension("native_profiler");
        $__internal_b183fe718c9ac18b6bfae8d646a4beae9f0e3045dcd2688c6984d58a1c55fe6a->enter($__internal_b183fe718c9ac18b6bfae8d646a4beae9f0e3045dcd2688c6984d58a1c55fe6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_b183fe718c9ac18b6bfae8d646a4beae9f0e3045dcd2688c6984d58a1c55fe6a->leave($__internal_b183fe718c9ac18b6bfae8d646a4beae9f0e3045dcd2688c6984d58a1c55fe6a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
