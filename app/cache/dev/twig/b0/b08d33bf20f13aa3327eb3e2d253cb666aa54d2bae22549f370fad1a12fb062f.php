<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_030b22e6fbed8ff53d8e9be7ff3f8e7212ff400012da78c044bc932e96f93e46 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_651f2cb4464524913583bf83a428688fa06b4f8d0784286281d6e2442c88cc8a = $this->env->getExtension("native_profiler");
        $__internal_651f2cb4464524913583bf83a428688fa06b4f8d0784286281d6e2442c88cc8a->enter($__internal_651f2cb4464524913583bf83a428688fa06b4f8d0784286281d6e2442c88cc8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_651f2cb4464524913583bf83a428688fa06b4f8d0784286281d6e2442c88cc8a->leave($__internal_651f2cb4464524913583bf83a428688fa06b4f8d0784286281d6e2442c88cc8a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e08b9f5b722d503115a294a9ef9ffdba92c555c75261fbec63813dae24ff6218 = $this->env->getExtension("native_profiler");
        $__internal_e08b9f5b722d503115a294a9ef9ffdba92c555c75261fbec63813dae24ff6218->enter($__internal_e08b9f5b722d503115a294a9ef9ffdba92c555c75261fbec63813dae24ff6218_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_e08b9f5b722d503115a294a9ef9ffdba92c555c75261fbec63813dae24ff6218->leave($__internal_e08b9f5b722d503115a294a9ef9ffdba92c555c75261fbec63813dae24ff6218_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
