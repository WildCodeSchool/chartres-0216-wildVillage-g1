<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_2c6db70bdf7b6fc74df355e1b974593017d02f89b18c24ba1526ab34f0278242 extends Twig_Template
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
        $__internal_26426723f40c96ed94cd9f21b3fe04620d5d4a23c2abc7ca64a8d18b5049a411 = $this->env->getExtension("native_profiler");
        $__internal_26426723f40c96ed94cd9f21b3fe04620d5d4a23c2abc7ca64a8d18b5049a411->enter($__internal_26426723f40c96ed94cd9f21b3fe04620d5d4a23c2abc7ca64a8d18b5049a411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_26426723f40c96ed94cd9f21b3fe04620d5d4a23c2abc7ca64a8d18b5049a411->leave($__internal_26426723f40c96ed94cd9f21b3fe04620d5d4a23c2abc7ca64a8d18b5049a411_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
