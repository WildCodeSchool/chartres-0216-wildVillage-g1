<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_c591bbadc5062b4adf728419813376645b17e7facb9118129b7f4fc4af65dbd9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_79f45e4bf32b3acfb72d826601aa262d0f9316892ae932e6962510c96d4d0bf0 = $this->env->getExtension("native_profiler");
        $__internal_79f45e4bf32b3acfb72d826601aa262d0f9316892ae932e6962510c96d4d0bf0->enter($__internal_79f45e4bf32b3acfb72d826601aa262d0f9316892ae932e6962510c96d4d0bf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79f45e4bf32b3acfb72d826601aa262d0f9316892ae932e6962510c96d4d0bf0->leave($__internal_79f45e4bf32b3acfb72d826601aa262d0f9316892ae932e6962510c96d4d0bf0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_860ea5f19097de6cf2af3ddb11de887d3d9a692c4c23a1f1ab023787a90b919d = $this->env->getExtension("native_profiler");
        $__internal_860ea5f19097de6cf2af3ddb11de887d3d9a692c4c23a1f1ab023787a90b919d->enter($__internal_860ea5f19097de6cf2af3ddb11de887d3d9a692c4c23a1f1ab023787a90b919d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_860ea5f19097de6cf2af3ddb11de887d3d9a692c4c23a1f1ab023787a90b919d->leave($__internal_860ea5f19097de6cf2af3ddb11de887d3d9a692c4c23a1f1ab023787a90b919d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2b4fe31f75850621a81fbcdadb555af51c014a9e2048bee96d33935d0e1cbb36 = $this->env->getExtension("native_profiler");
        $__internal_2b4fe31f75850621a81fbcdadb555af51c014a9e2048bee96d33935d0e1cbb36->enter($__internal_2b4fe31f75850621a81fbcdadb555af51c014a9e2048bee96d33935d0e1cbb36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2b4fe31f75850621a81fbcdadb555af51c014a9e2048bee96d33935d0e1cbb36->leave($__internal_2b4fe31f75850621a81fbcdadb555af51c014a9e2048bee96d33935d0e1cbb36_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9ae0e4f5749e544207e88be84e2c791ae1d13f82e027771c9b766fd857616e81 = $this->env->getExtension("native_profiler");
        $__internal_9ae0e4f5749e544207e88be84e2c791ae1d13f82e027771c9b766fd857616e81->enter($__internal_9ae0e4f5749e544207e88be84e2c791ae1d13f82e027771c9b766fd857616e81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_9ae0e4f5749e544207e88be84e2c791ae1d13f82e027771c9b766fd857616e81->leave($__internal_9ae0e4f5749e544207e88be84e2c791ae1d13f82e027771c9b766fd857616e81_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
