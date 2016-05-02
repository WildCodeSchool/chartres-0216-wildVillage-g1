<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_e51f2eed12bd51fa50c93332cacca5d68353171069312d78b8b512856b7856a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        // line 5
        echo "<div class=\"row\">
        \t<div class=\"col-md-4\" style=\"color: #3366ff; background: blue;\"></div>
        \t<div class=\"col-md-4\" style=\"color: #3366ff; background: blue;\"></div>
        \t<div class=\"col-md-4\" style=\"color: #3366ff; background: blue;\"></div>
        </div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* <div class="row">*/
/*         	<div class="col-md-4" style="color: #3366ff; background: blue;"></div>*/
/*         	<div class="col-md-4" style="color: #3366ff; background: blue;"></div>*/
/*         	<div class="col-md-4" style="color: #3366ff; background: blue;"></div>*/
/*         </div>*/
/* {% endblock fos_user_content %}*/
/* */
