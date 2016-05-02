<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_31aabe691a15a9129f4b3e20f05bab6c9c866870a5f9956bc5ab4e3c63b870fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_56349e0a6792d8294e8b0b25f77c99982f36face9b3ce1999fa619cdb19f845d = $this->env->getExtension("native_profiler");
        $__internal_56349e0a6792d8294e8b0b25f77c99982f36face9b3ce1999fa619cdb19f845d->enter($__internal_56349e0a6792d8294e8b0b25f77c99982f36face9b3ce1999fa619cdb19f845d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_56349e0a6792d8294e8b0b25f77c99982f36face9b3ce1999fa619cdb19f845d->leave($__internal_56349e0a6792d8294e8b0b25f77c99982f36face9b3ce1999fa619cdb19f845d_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f8e65c341df7bf4bf69810e8efd10fbed38ea8e1fcc07d20248909d595af238f = $this->env->getExtension("native_profiler");
        $__internal_f8e65c341df7bf4bf69810e8efd10fbed38ea8e1fcc07d20248909d595af238f->enter($__internal_f8e65c341df7bf4bf69810e8efd10fbed38ea8e1fcc07d20248909d595af238f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_f8e65c341df7bf4bf69810e8efd10fbed38ea8e1fcc07d20248909d595af238f->leave($__internal_f8e65c341df7bf4bf69810e8efd10fbed38ea8e1fcc07d20248909d595af238f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
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
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
