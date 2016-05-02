<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_04c006f1d1937df9d7007da0eb407fada97e9acc44956bd9c04dfcc707f5fa50 extends Twig_Template
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
        $__internal_db7954165460cc80354a7913eb31ab2fa10589011abbdc75b510fd1b08503a03 = $this->env->getExtension("native_profiler");
        $__internal_db7954165460cc80354a7913eb31ab2fa10589011abbdc75b510fd1b08503a03->enter($__internal_db7954165460cc80354a7913eb31ab2fa10589011abbdc75b510fd1b08503a03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_db7954165460cc80354a7913eb31ab2fa10589011abbdc75b510fd1b08503a03->leave($__internal_db7954165460cc80354a7913eb31ab2fa10589011abbdc75b510fd1b08503a03_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
