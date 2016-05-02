<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_1e6a5e8d5af9e4129a62e46976c948f27ffa3bd255631ea83807804ca1212a04 extends Twig_Template
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
        $__internal_a1bc8c5f73040a5701fc8c375cb1adb6738a38fe94cfcab1b4605fc870259e43 = $this->env->getExtension("native_profiler");
        $__internal_a1bc8c5f73040a5701fc8c375cb1adb6738a38fe94cfcab1b4605fc870259e43->enter($__internal_a1bc8c5f73040a5701fc8c375cb1adb6738a38fe94cfcab1b4605fc870259e43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_a1bc8c5f73040a5701fc8c375cb1adb6738a38fe94cfcab1b4605fc870259e43->leave($__internal_a1bc8c5f73040a5701fc8c375cb1adb6738a38fe94cfcab1b4605fc870259e43_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
