<?php

/* @FOSUser/Resetting/checkEmail.html.twig */
class __TwigTemplate_9f95ca52537e89f902ac53f00c78cb3bf2430b22ad64c6e50ce0159cf0a1037e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/checkEmail.html.twig", 1);
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
        $__internal_7c9dd11e4f6fc31d6e616a7c8e751e865fcdf07d76df6638ffe0dd8e8912a8dc = $this->env->getExtension("native_profiler");
        $__internal_7c9dd11e4f6fc31d6e616a7c8e751e865fcdf07d76df6638ffe0dd8e8912a8dc->enter($__internal_7c9dd11e4f6fc31d6e616a7c8e751e865fcdf07d76df6638ffe0dd8e8912a8dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c9dd11e4f6fc31d6e616a7c8e751e865fcdf07d76df6638ffe0dd8e8912a8dc->leave($__internal_7c9dd11e4f6fc31d6e616a7c8e751e865fcdf07d76df6638ffe0dd8e8912a8dc_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_13be0175de5af3ce0eeacdff52a5d9e22bef00cd4e869ae08751a0d535d8855a = $this->env->getExtension("native_profiler");
        $__internal_13be0175de5af3ce0eeacdff52a5d9e22bef00cd4e869ae08751a0d535d8855a->enter($__internal_13be0175de5af3ce0eeacdff52a5d9e22bef00cd4e869ae08751a0d535d8855a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_13be0175de5af3ce0eeacdff52a5d9e22bef00cd4e869ae08751a0d535d8855a->leave($__internal_13be0175de5af3ce0eeacdff52a5d9e22bef00cd4e869ae08751a0d535d8855a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/checkEmail.html.twig";
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
