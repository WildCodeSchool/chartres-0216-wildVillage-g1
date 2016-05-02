<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_4732edd01f0a7562afdb582c27a49b60c6e9e6ead555c9d13f5cd092ab4e3ca0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4b2e41c13d41d0d92c4181f600ae47c3bc31e04454920b0dc473a0d7668a4c57 = $this->env->getExtension("native_profiler");
        $__internal_4b2e41c13d41d0d92c4181f600ae47c3bc31e04454920b0dc473a0d7668a4c57->enter($__internal_4b2e41c13d41d0d92c4181f600ae47c3bc31e04454920b0dc473a0d7668a4c57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_4b2e41c13d41d0d92c4181f600ae47c3bc31e04454920b0dc473a0d7668a4c57->leave($__internal_4b2e41c13d41d0d92c4181f600ae47c3bc31e04454920b0dc473a0d7668a4c57_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 5,  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_user_show">*/
/*     <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>*/
/*     <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>*/
/* </div>*/
/* */
