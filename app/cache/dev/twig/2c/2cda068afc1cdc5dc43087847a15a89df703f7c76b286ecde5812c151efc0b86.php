<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_5f9566e70def3e245e03a937d8f868e984a51bbe3aa2d08250bc0d87a3eb0730 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_45ae08372ccf09affcbcb969a7466ffb81aac472702659253f189e0d5b68cd36 = $this->env->getExtension("native_profiler");
        $__internal_45ae08372ccf09affcbcb969a7466ffb81aac472702659253f189e0d5b68cd36->enter($__internal_45ae08372ccf09affcbcb969a7466ffb81aac472702659253f189e0d5b68cd36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_45ae08372ccf09affcbcb969a7466ffb81aac472702659253f189e0d5b68cd36->leave($__internal_45ae08372ccf09affcbcb969a7466ffb81aac472702659253f189e0d5b68cd36_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2300d29798f4c3048a49abde9dc402c680ad067a8ba48237a6142b87df21d37c = $this->env->getExtension("native_profiler");
        $__internal_2300d29798f4c3048a49abde9dc402c680ad067a8ba48237a6142b87df21d37c->enter($__internal_2300d29798f4c3048a49abde9dc402c680ad067a8ba48237a6142b87df21d37c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_2300d29798f4c3048a49abde9dc402c680ad067a8ba48237a6142b87df21d37c->leave($__internal_2300d29798f4c3048a49abde9dc402c680ad067a8ba48237a6142b87df21d37c_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_55374b41731e86708b470ed0f56c76931972a73e32bb6722f60195f4a9d42d82 = $this->env->getExtension("native_profiler");
        $__internal_55374b41731e86708b470ed0f56c76931972a73e32bb6722f60195f4a9d42d82->enter($__internal_55374b41731e86708b470ed0f56c76931972a73e32bb6722f60195f4a9d42d82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_55374b41731e86708b470ed0f56c76931972a73e32bb6722f60195f4a9d42d82->leave($__internal_55374b41731e86708b470ed0f56c76931972a73e32bb6722f60195f4a9d42d82_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b2ae00cf263b0e6624b137e119c02afa5bea3b4795bfadab472ceac97003f875 = $this->env->getExtension("native_profiler");
        $__internal_b2ae00cf263b0e6624b137e119c02afa5bea3b4795bfadab472ceac97003f875->enter($__internal_b2ae00cf263b0e6624b137e119c02afa5bea3b4795bfadab472ceac97003f875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_b2ae00cf263b0e6624b137e119c02afa5bea3b4795bfadab472ceac97003f875->leave($__internal_b2ae00cf263b0e6624b137e119c02afa5bea3b4795bfadab472ceac97003f875_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
