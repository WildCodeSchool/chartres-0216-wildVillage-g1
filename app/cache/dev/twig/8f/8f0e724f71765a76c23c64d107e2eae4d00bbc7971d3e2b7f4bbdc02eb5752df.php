<?php

/* @FOSUser/Group/show_content.html.twig */
class __TwigTemplate_6e96d3fa3ab95ee19c13f471d014f6ca180832eed47de3118cb7c1cd3d53f4a4 extends Twig_Template
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
        $__internal_78f75b7e272edfd9644067d0a40b0d3dea936a33d601f4f9e6475e38a90d0a33 = $this->env->getExtension("native_profiler");
        $__internal_78f75b7e272edfd9644067d0a40b0d3dea936a33d601f4f9e6475e38a90d0a33->enter($__internal_78f75b7e272edfd9644067d0a40b0d3dea936a33d601f4f9e6475e38a90d0a33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_78f75b7e272edfd9644067d0a40b0d3dea936a33d601f4f9e6475e38a90d0a33->leave($__internal_78f75b7e272edfd9644067d0a40b0d3dea936a33d601f4f9e6475e38a90d0a33_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */
