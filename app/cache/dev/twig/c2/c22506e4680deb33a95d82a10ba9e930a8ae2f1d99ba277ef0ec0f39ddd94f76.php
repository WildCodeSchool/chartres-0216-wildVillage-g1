<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_b80d7b40c7003280865185e2cf2e8b94cc288621f87b94e20cda98a8f69c98c1 extends Twig_Template
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
        $__internal_a5f6a4e4e09096d36b9dd49ea94817c55e8c0a3f4482fd97639c7b973c79bd68 = $this->env->getExtension("native_profiler");
        $__internal_a5f6a4e4e09096d36b9dd49ea94817c55e8c0a3f4482fd97639c7b973c79bd68->enter($__internal_a5f6a4e4e09096d36b9dd49ea94817c55e8c0a3f4482fd97639c7b973c79bd68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_a5f6a4e4e09096d36b9dd49ea94817c55e8c0a3f4482fd97639c7b973c79bd68->leave($__internal_a5f6a4e4e09096d36b9dd49ea94817c55e8c0a3f4482fd97639c7b973c79bd68_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
