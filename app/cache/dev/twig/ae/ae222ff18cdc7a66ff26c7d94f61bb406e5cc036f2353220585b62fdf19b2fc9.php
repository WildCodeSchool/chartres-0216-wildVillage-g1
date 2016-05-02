<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_0524a3861cc6fc6c76a07ff5ed204940312cbd75868e16ac0a28a5b5f537d58f extends Twig_Template
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
        $__internal_b6397da69c30e292b6c6815363f42236f1a5621f191ded41c087e48a44111ba4 = $this->env->getExtension("native_profiler");
        $__internal_b6397da69c30e292b6c6815363f42236f1a5621f191ded41c087e48a44111ba4->enter($__internal_b6397da69c30e292b6c6815363f42236f1a5621f191ded41c087e48a44111ba4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_b6397da69c30e292b6c6815363f42236f1a5621f191ded41c087e48a44111ba4->leave($__internal_b6397da69c30e292b6c6815363f42236f1a5621f191ded41c087e48a44111ba4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
