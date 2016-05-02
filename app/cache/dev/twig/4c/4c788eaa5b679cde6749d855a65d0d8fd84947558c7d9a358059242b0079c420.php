<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_73876dd38470651f3e931cdb9fa0dbea78e14831572905afcfcdcccdd809427d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_c81b86598809bf4806d03373a160ee264a0443d3a8c9985b010f8e8fb942bf00 = $this->env->getExtension("native_profiler");
        $__internal_c81b86598809bf4806d03373a160ee264a0443d3a8c9985b010f8e8fb942bf00->enter($__internal_c81b86598809bf4806d03373a160ee264a0443d3a8c9985b010f8e8fb942bf00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c81b86598809bf4806d03373a160ee264a0443d3a8c9985b010f8e8fb942bf00->leave($__internal_c81b86598809bf4806d03373a160ee264a0443d3a8c9985b010f8e8fb942bf00_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1e1f2fd2328dc8709c7f0ddef0a3de84c25d42a2b9fa55e7d1d0248a68f0ebc8 = $this->env->getExtension("native_profiler");
        $__internal_1e1f2fd2328dc8709c7f0ddef0a3de84c25d42a2b9fa55e7d1d0248a68f0ebc8->enter($__internal_1e1f2fd2328dc8709c7f0ddef0a3de84c25d42a2b9fa55e7d1d0248a68f0ebc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_1e1f2fd2328dc8709c7f0ddef0a3de84c25d42a2b9fa55e7d1d0248a68f0ebc8->leave($__internal_1e1f2fd2328dc8709c7f0ddef0a3de84c25d42a2b9fa55e7d1d0248a68f0ebc8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
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
