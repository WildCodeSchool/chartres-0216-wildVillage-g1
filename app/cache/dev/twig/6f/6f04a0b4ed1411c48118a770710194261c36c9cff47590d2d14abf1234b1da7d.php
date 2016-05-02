<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_685bad8a1ab0aa0026d57e4e69446e57b3682a1a99f8b4a6be2c03b839dbc9bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cd5916fe3dfd8d490db6caeea79608bdd5b36b634dd5a2987f31dd76f0bb0baf = $this->env->getExtension("native_profiler");
        $__internal_cd5916fe3dfd8d490db6caeea79608bdd5b36b634dd5a2987f31dd76f0bb0baf->enter($__internal_cd5916fe3dfd8d490db6caeea79608bdd5b36b634dd5a2987f31dd76f0bb0baf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd5916fe3dfd8d490db6caeea79608bdd5b36b634dd5a2987f31dd76f0bb0baf->leave($__internal_cd5916fe3dfd8d490db6caeea79608bdd5b36b634dd5a2987f31dd76f0bb0baf_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_140e0283ebd4a072bc9d4bf1358ba53f4472ef6ce81e5041cd0da941dc076b37 = $this->env->getExtension("native_profiler");
        $__internal_140e0283ebd4a072bc9d4bf1358ba53f4472ef6ce81e5041cd0da941dc076b37->enter($__internal_140e0283ebd4a072bc9d4bf1358ba53f4472ef6ce81e5041cd0da941dc076b37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_140e0283ebd4a072bc9d4bf1358ba53f4472ef6ce81e5041cd0da941dc076b37->leave($__internal_140e0283ebd4a072bc9d4bf1358ba53f4472ef6ce81e5041cd0da941dc076b37_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */
