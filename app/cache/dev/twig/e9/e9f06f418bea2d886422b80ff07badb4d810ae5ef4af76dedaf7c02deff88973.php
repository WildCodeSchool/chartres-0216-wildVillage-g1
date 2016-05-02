<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_86d396f36f44d1e779580af57f5c43067089af1fbcdf3e97fcfbc33bd4923895 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3a8688c9abab23cb90e2e3151685844f5cf92dd6d28022eedb496cdec5c2e97c = $this->env->getExtension("native_profiler");
        $__internal_3a8688c9abab23cb90e2e3151685844f5cf92dd6d28022eedb496cdec5c2e97c->enter($__internal_3a8688c9abab23cb90e2e3151685844f5cf92dd6d28022eedb496cdec5c2e97c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_3a8688c9abab23cb90e2e3151685844f5cf92dd6d28022eedb496cdec5c2e97c->leave($__internal_3a8688c9abab23cb90e2e3151685844f5cf92dd6d28022eedb496cdec5c2e97c_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_851c705ce512171364c1b5c10d1a7a5ad07dbd78d7bfcc488fba2c108866f8a0 = $this->env->getExtension("native_profiler");
        $__internal_851c705ce512171364c1b5c10d1a7a5ad07dbd78d7bfcc488fba2c108866f8a0->enter($__internal_851c705ce512171364c1b5c10d1a7a5ad07dbd78d7bfcc488fba2c108866f8a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_851c705ce512171364c1b5c10d1a7a5ad07dbd78d7bfcc488fba2c108866f8a0->leave($__internal_851c705ce512171364c1b5c10d1a7a5ad07dbd78d7bfcc488fba2c108866f8a0_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_8fcf4cc48e4d3e352cecc3f1ca2daf264a206c28403b6f078c04e534e1230c19 = $this->env->getExtension("native_profiler");
        $__internal_8fcf4cc48e4d3e352cecc3f1ca2daf264a206c28403b6f078c04e534e1230c19->enter($__internal_8fcf4cc48e4d3e352cecc3f1ca2daf264a206c28403b6f078c04e534e1230c19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_8fcf4cc48e4d3e352cecc3f1ca2daf264a206c28403b6f078c04e534e1230c19->leave($__internal_8fcf4cc48e4d3e352cecc3f1ca2daf264a206c28403b6f078c04e534e1230c19_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_a86bf1bb59fe57fda963ddce274d18d9a9b59ec8d1fb028daf37c6bb6b07ad7f = $this->env->getExtension("native_profiler");
        $__internal_a86bf1bb59fe57fda963ddce274d18d9a9b59ec8d1fb028daf37c6bb6b07ad7f->enter($__internal_a86bf1bb59fe57fda963ddce274d18d9a9b59ec8d1fb028daf37c6bb6b07ad7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_a86bf1bb59fe57fda963ddce274d18d9a9b59ec8d1fb028daf37c6bb6b07ad7f->leave($__internal_a86bf1bb59fe57fda963ddce274d18d9a9b59ec8d1fb028daf37c6bb6b07ad7f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
