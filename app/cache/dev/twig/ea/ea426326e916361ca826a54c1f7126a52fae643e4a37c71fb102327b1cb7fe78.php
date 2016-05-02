<?php

/* @FOSUser/Registration/checkEmail.html.twig */
class __TwigTemplate_321db5a54618a2d90ec0e0fe02eb9602747681abdcef5b2259e4393242330780 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/checkEmail.html.twig", 1);
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
        $__internal_a0b5e87e5f39cb92b5ae703539596db37501e0147097a39bc591a828d45cb4ec = $this->env->getExtension("native_profiler");
        $__internal_a0b5e87e5f39cb92b5ae703539596db37501e0147097a39bc591a828d45cb4ec->enter($__internal_a0b5e87e5f39cb92b5ae703539596db37501e0147097a39bc591a828d45cb4ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0b5e87e5f39cb92b5ae703539596db37501e0147097a39bc591a828d45cb4ec->leave($__internal_a0b5e87e5f39cb92b5ae703539596db37501e0147097a39bc591a828d45cb4ec_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a2d20a7dba89863ec63ed0aa0a60a129ac66ce0115af0d4df1e93556876a6377 = $this->env->getExtension("native_profiler");
        $__internal_a2d20a7dba89863ec63ed0aa0a60a129ac66ce0115af0d4df1e93556876a6377->enter($__internal_a2d20a7dba89863ec63ed0aa0a60a129ac66ce0115af0d4df1e93556876a6377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_a2d20a7dba89863ec63ed0aa0a60a129ac66ce0115af0d4df1e93556876a6377->leave($__internal_a2d20a7dba89863ec63ed0aa0a60a129ac66ce0115af0d4df1e93556876a6377_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
