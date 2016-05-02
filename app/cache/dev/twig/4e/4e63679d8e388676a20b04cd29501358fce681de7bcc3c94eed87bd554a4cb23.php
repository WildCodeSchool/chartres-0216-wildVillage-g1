<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_58c02a1c66d4fe8c735372d7b1e55d583d3301fc28f97f58413122486540296b extends Twig_Template
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
        $__internal_60ccf1e0b338e984ce2db8a86ad287037d98f1d770739310056a88b929165123 = $this->env->getExtension("native_profiler");
        $__internal_60ccf1e0b338e984ce2db8a86ad287037d98f1d770739310056a88b929165123->enter($__internal_60ccf1e0b338e984ce2db8a86ad287037d98f1d770739310056a88b929165123_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_60ccf1e0b338e984ce2db8a86ad287037d98f1d770739310056a88b929165123->leave($__internal_60ccf1e0b338e984ce2db8a86ad287037d98f1d770739310056a88b929165123_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_020ece4608926e9349f2c1597b10844af1517d1156b7656b903bc10b2d21b60d = $this->env->getExtension("native_profiler");
        $__internal_020ece4608926e9349f2c1597b10844af1517d1156b7656b903bc10b2d21b60d->enter($__internal_020ece4608926e9349f2c1597b10844af1517d1156b7656b903bc10b2d21b60d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_020ece4608926e9349f2c1597b10844af1517d1156b7656b903bc10b2d21b60d->leave($__internal_020ece4608926e9349f2c1597b10844af1517d1156b7656b903bc10b2d21b60d_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_d8646d19506c1d4b9b09a2f9e33502889d5cdb23a57594aadebaeda187e185a4 = $this->env->getExtension("native_profiler");
        $__internal_d8646d19506c1d4b9b09a2f9e33502889d5cdb23a57594aadebaeda187e185a4->enter($__internal_d8646d19506c1d4b9b09a2f9e33502889d5cdb23a57594aadebaeda187e185a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_d8646d19506c1d4b9b09a2f9e33502889d5cdb23a57594aadebaeda187e185a4->leave($__internal_d8646d19506c1d4b9b09a2f9e33502889d5cdb23a57594aadebaeda187e185a4_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_2fe381d6c231ba08fa98315169c4309b6d364cefe740642dea921c072fafe4cf = $this->env->getExtension("native_profiler");
        $__internal_2fe381d6c231ba08fa98315169c4309b6d364cefe740642dea921c072fafe4cf->enter($__internal_2fe381d6c231ba08fa98315169c4309b6d364cefe740642dea921c072fafe4cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_2fe381d6c231ba08fa98315169c4309b6d364cefe740642dea921c072fafe4cf->leave($__internal_2fe381d6c231ba08fa98315169c4309b6d364cefe740642dea921c072fafe4cf_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
