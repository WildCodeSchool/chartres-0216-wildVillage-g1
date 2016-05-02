<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_5795392ed8d4b2a040b61929e9169e1796581d3e9873381296a6c28b644c8599 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_da32cfae854d85ba7bf837f423c7ccf2ed3f51830a96651eb181146b5fa86640 = $this->env->getExtension("native_profiler");
        $__internal_da32cfae854d85ba7bf837f423c7ccf2ed3f51830a96651eb181146b5fa86640->enter($__internal_da32cfae854d85ba7bf837f423c7ccf2ed3f51830a96651eb181146b5fa86640_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da32cfae854d85ba7bf837f423c7ccf2ed3f51830a96651eb181146b5fa86640->leave($__internal_da32cfae854d85ba7bf837f423c7ccf2ed3f51830a96651eb181146b5fa86640_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_78309c587d648657170b8ac033177958c4d41c2a3334c3270bee04a6220e8943 = $this->env->getExtension("native_profiler");
        $__internal_78309c587d648657170b8ac033177958c4d41c2a3334c3270bee04a6220e8943->enter($__internal_78309c587d648657170b8ac033177958c4d41c2a3334c3270bee04a6220e8943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_78309c587d648657170b8ac033177958c4d41c2a3334c3270bee04a6220e8943->leave($__internal_78309c587d648657170b8ac033177958c4d41c2a3334c3270bee04a6220e8943_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
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
