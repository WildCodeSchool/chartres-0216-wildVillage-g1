<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_f1c15bfc8f04c89f75ce10fb9a7128deeeebbb76d5d43dada6cbae34e4fcd202 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2e127bbad92abe4d96d04e7b338aa68ad23372f5fa1fa67b2df4457d9355a44f = $this->env->getExtension("native_profiler");
        $__internal_2e127bbad92abe4d96d04e7b338aa68ad23372f5fa1fa67b2df4457d9355a44f->enter($__internal_2e127bbad92abe4d96d04e7b338aa68ad23372f5fa1fa67b2df4457d9355a44f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e127bbad92abe4d96d04e7b338aa68ad23372f5fa1fa67b2df4457d9355a44f->leave($__internal_2e127bbad92abe4d96d04e7b338aa68ad23372f5fa1fa67b2df4457d9355a44f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ccd6060d3deb49fb23afffcadf304d9168d4c7eeae35383de8e7f0c9687dabf0 = $this->env->getExtension("native_profiler");
        $__internal_ccd6060d3deb49fb23afffcadf304d9168d4c7eeae35383de8e7f0c9687dabf0->enter($__internal_ccd6060d3deb49fb23afffcadf304d9168d4c7eeae35383de8e7f0c9687dabf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_ccd6060d3deb49fb23afffcadf304d9168d4c7eeae35383de8e7f0c9687dabf0->leave($__internal_ccd6060d3deb49fb23afffcadf304d9168d4c7eeae35383de8e7f0c9687dabf0_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_14b5cf2a4058899a63fa3a9a3ce6cd9568e64c07dfe7dbf5bd6bf34ebe9100ff = $this->env->getExtension("native_profiler");
        $__internal_14b5cf2a4058899a63fa3a9a3ce6cd9568e64c07dfe7dbf5bd6bf34ebe9100ff->enter($__internal_14b5cf2a4058899a63fa3a9a3ce6cd9568e64c07dfe7dbf5bd6bf34ebe9100ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_14b5cf2a4058899a63fa3a9a3ce6cd9568e64c07dfe7dbf5bd6bf34ebe9100ff->leave($__internal_14b5cf2a4058899a63fa3a9a3ce6cd9568e64c07dfe7dbf5bd6bf34ebe9100ff_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
