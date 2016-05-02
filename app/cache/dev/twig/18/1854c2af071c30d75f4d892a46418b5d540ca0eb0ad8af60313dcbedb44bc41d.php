<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_258ff848100565834c71475ea1c93321ab8034adb0c4da19592446c3e86c6107 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_4317b0a89ec6afb77170733528df2d30da4e486091c05aef373b6490b7bc93ed = $this->env->getExtension("native_profiler");
        $__internal_4317b0a89ec6afb77170733528df2d30da4e486091c05aef373b6490b7bc93ed->enter($__internal_4317b0a89ec6afb77170733528df2d30da4e486091c05aef373b6490b7bc93ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4317b0a89ec6afb77170733528df2d30da4e486091c05aef373b6490b7bc93ed->leave($__internal_4317b0a89ec6afb77170733528df2d30da4e486091c05aef373b6490b7bc93ed_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_64c85bb6e3a8d8a82905e013a0bf11536cc7ac39e1955aabafdbf487fce1ca37 = $this->env->getExtension("native_profiler");
        $__internal_64c85bb6e3a8d8a82905e013a0bf11536cc7ac39e1955aabafdbf487fce1ca37->enter($__internal_64c85bb6e3a8d8a82905e013a0bf11536cc7ac39e1955aabafdbf487fce1ca37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_64c85bb6e3a8d8a82905e013a0bf11536cc7ac39e1955aabafdbf487fce1ca37->leave($__internal_64c85bb6e3a8d8a82905e013a0bf11536cc7ac39e1955aabafdbf487fce1ca37_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_eddba94a83e0d54e4c79831bd2e1c5e7db347edc4cad3866197e28d9c042f532 = $this->env->getExtension("native_profiler");
        $__internal_eddba94a83e0d54e4c79831bd2e1c5e7db347edc4cad3866197e28d9c042f532->enter($__internal_eddba94a83e0d54e4c79831bd2e1c5e7db347edc4cad3866197e28d9c042f532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_eddba94a83e0d54e4c79831bd2e1c5e7db347edc4cad3866197e28d9c042f532->leave($__internal_eddba94a83e0d54e4c79831bd2e1c5e7db347edc4cad3866197e28d9c042f532_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
