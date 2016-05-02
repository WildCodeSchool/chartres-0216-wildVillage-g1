<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_47587b262a939ca8eb21738c6ea73f0ff9a988224421839fccb2515315a0ad5f extends Twig_Template
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
        $__internal_893744b658301570f241f3c9ef0f193b041303efa4615852435b307d4f9fb0e2 = $this->env->getExtension("native_profiler");
        $__internal_893744b658301570f241f3c9ef0f193b041303efa4615852435b307d4f9fb0e2->enter($__internal_893744b658301570f241f3c9ef0f193b041303efa4615852435b307d4f9fb0e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_893744b658301570f241f3c9ef0f193b041303efa4615852435b307d4f9fb0e2->leave($__internal_893744b658301570f241f3c9ef0f193b041303efa4615852435b307d4f9fb0e2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */
