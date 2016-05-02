<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_1a3e7e90a9e4541d2a5d5c5c3965fe395919c331b87c799055eb7d8b33d262b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_fbe82b95f0f9d30fb391bbe307f9d168a121f6eeab5f8f7ce2e2b4b8a06d8f84 = $this->env->getExtension("native_profiler");
        $__internal_fbe82b95f0f9d30fb391bbe307f9d168a121f6eeab5f8f7ce2e2b4b8a06d8f84->enter($__internal_fbe82b95f0f9d30fb391bbe307f9d168a121f6eeab5f8f7ce2e2b4b8a06d8f84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fbe82b95f0f9d30fb391bbe307f9d168a121f6eeab5f8f7ce2e2b4b8a06d8f84->leave($__internal_fbe82b95f0f9d30fb391bbe307f9d168a121f6eeab5f8f7ce2e2b4b8a06d8f84_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4c1f91f57e5d2fd8f29399abcf60a49af29ae66289f8722d9aeb307e3cd47fbd = $this->env->getExtension("native_profiler");
        $__internal_4c1f91f57e5d2fd8f29399abcf60a49af29ae66289f8722d9aeb307e3cd47fbd->enter($__internal_4c1f91f57e5d2fd8f29399abcf60a49af29ae66289f8722d9aeb307e3cd47fbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_4c1f91f57e5d2fd8f29399abcf60a49af29ae66289f8722d9aeb307e3cd47fbd->leave($__internal_4c1f91f57e5d2fd8f29399abcf60a49af29ae66289f8722d9aeb307e3cd47fbd_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b2369102959108e3f375186b0ff5cc2591e0c1c5ac0c657cc6fa6a27fe6ec208 = $this->env->getExtension("native_profiler");
        $__internal_b2369102959108e3f375186b0ff5cc2591e0c1c5ac0c657cc6fa6a27fe6ec208->enter($__internal_b2369102959108e3f375186b0ff5cc2591e0c1c5ac0c657cc6fa6a27fe6ec208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b2369102959108e3f375186b0ff5cc2591e0c1c5ac0c657cc6fa6a27fe6ec208->leave($__internal_b2369102959108e3f375186b0ff5cc2591e0c1c5ac0c657cc6fa6a27fe6ec208_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0e738d61d0a21fe9c2f15cec19c4850420d77525c1e41b30212b813a62e5e407 = $this->env->getExtension("native_profiler");
        $__internal_0e738d61d0a21fe9c2f15cec19c4850420d77525c1e41b30212b813a62e5e407->enter($__internal_0e738d61d0a21fe9c2f15cec19c4850420d77525c1e41b30212b813a62e5e407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_0e738d61d0a21fe9c2f15cec19c4850420d77525c1e41b30212b813a62e5e407->leave($__internal_0e738d61d0a21fe9c2f15cec19c4850420d77525c1e41b30212b813a62e5e407_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
