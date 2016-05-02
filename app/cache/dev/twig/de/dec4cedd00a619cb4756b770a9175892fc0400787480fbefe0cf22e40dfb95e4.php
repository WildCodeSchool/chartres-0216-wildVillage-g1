<?php

/* ::base.html.twig */
class __TwigTemplate_18d6e21e478315f6566a08527ec0db76f0cdca1de2ea989e896974d535008539 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_399c557ebec877502be9f16e7c4aba884f1d2233926fa66be7ba96dd39c2176b = $this->env->getExtension("native_profiler");
        $__internal_399c557ebec877502be9f16e7c4aba884f1d2233926fa66be7ba96dd39c2176b->enter($__internal_399c557ebec877502be9f16e7c4aba884f1d2233926fa66be7ba96dd39c2176b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "
        ";
        // line 12
        $this->displayBlock('javascripts', $context, $blocks);
        // line 13
        echo "    </body>
</html>
";
        
        $__internal_399c557ebec877502be9f16e7c4aba884f1d2233926fa66be7ba96dd39c2176b->leave($__internal_399c557ebec877502be9f16e7c4aba884f1d2233926fa66be7ba96dd39c2176b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_91d90cfd8484d2b8d0d362a5d9dc329dc60d504b1cfb273e759e36799b99187f = $this->env->getExtension("native_profiler");
        $__internal_91d90cfd8484d2b8d0d362a5d9dc329dc60d504b1cfb273e759e36799b99187f->enter($__internal_91d90cfd8484d2b8d0d362a5d9dc329dc60d504b1cfb273e759e36799b99187f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_91d90cfd8484d2b8d0d362a5d9dc329dc60d504b1cfb273e759e36799b99187f->leave($__internal_91d90cfd8484d2b8d0d362a5d9dc329dc60d504b1cfb273e759e36799b99187f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_19d6548cc59d386128dc621d6dd0e19c60375953c19dbc582064ce3e19d7ab1c = $this->env->getExtension("native_profiler");
        $__internal_19d6548cc59d386128dc621d6dd0e19c60375953c19dbc582064ce3e19d7ab1c->enter($__internal_19d6548cc59d386128dc621d6dd0e19c60375953c19dbc582064ce3e19d7ab1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_19d6548cc59d386128dc621d6dd0e19c60375953c19dbc582064ce3e19d7ab1c->leave($__internal_19d6548cc59d386128dc621d6dd0e19c60375953c19dbc582064ce3e19d7ab1c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_eee29639808e3059d088d45991ba1c0e687586a58d857c47e1ce8e84eb22816f = $this->env->getExtension("native_profiler");
        $__internal_eee29639808e3059d088d45991ba1c0e687586a58d857c47e1ce8e84eb22816f->enter($__internal_eee29639808e3059d088d45991ba1c0e687586a58d857c47e1ce8e84eb22816f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_eee29639808e3059d088d45991ba1c0e687586a58d857c47e1ce8e84eb22816f->leave($__internal_eee29639808e3059d088d45991ba1c0e687586a58d857c47e1ce8e84eb22816f_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5388861aec639c6328d43f78a38cf289b799028baf41696b37fc5bf34fefe919 = $this->env->getExtension("native_profiler");
        $__internal_5388861aec639c6328d43f78a38cf289b799028baf41696b37fc5bf34fefe919->enter($__internal_5388861aec639c6328d43f78a38cf289b799028baf41696b37fc5bf34fefe919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_5388861aec639c6328d43f78a38cf289b799028baf41696b37fc5bf34fefe919->leave($__internal_5388861aec639c6328d43f78a38cf289b799028baf41696b37fc5bf34fefe919_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 12,  84 => 10,  73 => 6,  61 => 5,  52 => 13,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/* */
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
