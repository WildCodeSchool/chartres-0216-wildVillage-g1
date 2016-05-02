<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_4132bcfd7041f92e966d90b19229b0adc06f6dd58a3b4481ec7668fd54786d29 extends Twig_Template
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
        $__internal_07557a70b6427eb6814a310ec9b18d3fceeb5f7135e14c56373629b8f5e4cbf8 = $this->env->getExtension("native_profiler");
        $__internal_07557a70b6427eb6814a310ec9b18d3fceeb5f7135e14c56373629b8f5e4cbf8->enter($__internal_07557a70b6427eb6814a310ec9b18d3fceeb5f7135e14c56373629b8f5e4cbf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_07557a70b6427eb6814a310ec9b18d3fceeb5f7135e14c56373629b8f5e4cbf8->leave($__internal_07557a70b6427eb6814a310ec9b18d3fceeb5f7135e14c56373629b8f5e4cbf8_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_d0bad4ed9d47973bb1b923ce360013e124c14dd535540da658d32c33cb8dc5aa = $this->env->getExtension("native_profiler");
        $__internal_d0bad4ed9d47973bb1b923ce360013e124c14dd535540da658d32c33cb8dc5aa->enter($__internal_d0bad4ed9d47973bb1b923ce360013e124c14dd535540da658d32c33cb8dc5aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_d0bad4ed9d47973bb1b923ce360013e124c14dd535540da658d32c33cb8dc5aa->leave($__internal_d0bad4ed9d47973bb1b923ce360013e124c14dd535540da658d32c33cb8dc5aa_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_65950a6dc0f1f5bff514c64042204522d6815bb0f6995fd980ff41ca2c74d74c = $this->env->getExtension("native_profiler");
        $__internal_65950a6dc0f1f5bff514c64042204522d6815bb0f6995fd980ff41ca2c74d74c->enter($__internal_65950a6dc0f1f5bff514c64042204522d6815bb0f6995fd980ff41ca2c74d74c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_65950a6dc0f1f5bff514c64042204522d6815bb0f6995fd980ff41ca2c74d74c->leave($__internal_65950a6dc0f1f5bff514c64042204522d6815bb0f6995fd980ff41ca2c74d74c_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_3e2c5007c4feb40f04a02eded69f1c321dfca789779593dc0cab3ca0a33255e3 = $this->env->getExtension("native_profiler");
        $__internal_3e2c5007c4feb40f04a02eded69f1c321dfca789779593dc0cab3ca0a33255e3->enter($__internal_3e2c5007c4feb40f04a02eded69f1c321dfca789779593dc0cab3ca0a33255e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_3e2c5007c4feb40f04a02eded69f1c321dfca789779593dc0cab3ca0a33255e3->leave($__internal_3e2c5007c4feb40f04a02eded69f1c321dfca789779593dc0cab3ca0a33255e3_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
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
