<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_ce0f5f715558bd8079d66839dd1eb00dcc051c3fd6af68052f0c8b1733ee16fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
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
        $__internal_7414ffe1f1e22472a47ab1aded725ed1751a8002e0b7a37099ed266e10691e36 = $this->env->getExtension("native_profiler");
        $__internal_7414ffe1f1e22472a47ab1aded725ed1751a8002e0b7a37099ed266e10691e36->enter($__internal_7414ffe1f1e22472a47ab1aded725ed1751a8002e0b7a37099ed266e10691e36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7414ffe1f1e22472a47ab1aded725ed1751a8002e0b7a37099ed266e10691e36->leave($__internal_7414ffe1f1e22472a47ab1aded725ed1751a8002e0b7a37099ed266e10691e36_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_76d07f4633cc62d129498588e61f928c0f1306021a035e4b9e984d4870d5abc3 = $this->env->getExtension("native_profiler");
        $__internal_76d07f4633cc62d129498588e61f928c0f1306021a035e4b9e984d4870d5abc3->enter($__internal_76d07f4633cc62d129498588e61f928c0f1306021a035e4b9e984d4870d5abc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_76d07f4633cc62d129498588e61f928c0f1306021a035e4b9e984d4870d5abc3->leave($__internal_76d07f4633cc62d129498588e61f928c0f1306021a035e4b9e984d4870d5abc3_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */
