<?php

/* base.html.twig */
class __TwigTemplate_28c631cbb7ced15cc8b9565713288b0c34ab12a5072338ebb2bbcdc556801587 extends Twig_Template
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
        $__internal_3b4f14f0686b7a7a02ea831364003a434c2dbd1e5c8b8260e157bb8f15c1b1d0 = $this->env->getExtension("native_profiler");
        $__internal_3b4f14f0686b7a7a02ea831364003a434c2dbd1e5c8b8260e157bb8f15c1b1d0->enter($__internal_3b4f14f0686b7a7a02ea831364003a434c2dbd1e5c8b8260e157bb8f15c1b1d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_3b4f14f0686b7a7a02ea831364003a434c2dbd1e5c8b8260e157bb8f15c1b1d0->leave($__internal_3b4f14f0686b7a7a02ea831364003a434c2dbd1e5c8b8260e157bb8f15c1b1d0_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e096c2b92f32bf4655cece0dc4dcc7d9f79ec0062cb839633110c6c2c858cc9b = $this->env->getExtension("native_profiler");
        $__internal_e096c2b92f32bf4655cece0dc4dcc7d9f79ec0062cb839633110c6c2c858cc9b->enter($__internal_e096c2b92f32bf4655cece0dc4dcc7d9f79ec0062cb839633110c6c2c858cc9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e096c2b92f32bf4655cece0dc4dcc7d9f79ec0062cb839633110c6c2c858cc9b->leave($__internal_e096c2b92f32bf4655cece0dc4dcc7d9f79ec0062cb839633110c6c2c858cc9b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_eddb3df45af5151c0b84223827736c3621ba67c1ea8994fd643d2cda44f7598c = $this->env->getExtension("native_profiler");
        $__internal_eddb3df45af5151c0b84223827736c3621ba67c1ea8994fd643d2cda44f7598c->enter($__internal_eddb3df45af5151c0b84223827736c3621ba67c1ea8994fd643d2cda44f7598c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_eddb3df45af5151c0b84223827736c3621ba67c1ea8994fd643d2cda44f7598c->leave($__internal_eddb3df45af5151c0b84223827736c3621ba67c1ea8994fd643d2cda44f7598c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_0e097b630ae81d0f4e4ece7b238add02bd24127d8ed4338e5891f1787b086888 = $this->env->getExtension("native_profiler");
        $__internal_0e097b630ae81d0f4e4ece7b238add02bd24127d8ed4338e5891f1787b086888->enter($__internal_0e097b630ae81d0f4e4ece7b238add02bd24127d8ed4338e5891f1787b086888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0e097b630ae81d0f4e4ece7b238add02bd24127d8ed4338e5891f1787b086888->leave($__internal_0e097b630ae81d0f4e4ece7b238add02bd24127d8ed4338e5891f1787b086888_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4a95db2328d4634e672d5ccd9452897a2c69809b9e7736e23a681ef04a1aed0d = $this->env->getExtension("native_profiler");
        $__internal_4a95db2328d4634e672d5ccd9452897a2c69809b9e7736e23a681ef04a1aed0d->enter($__internal_4a95db2328d4634e672d5ccd9452897a2c69809b9e7736e23a681ef04a1aed0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4a95db2328d4634e672d5ccd9452897a2c69809b9e7736e23a681ef04a1aed0d->leave($__internal_4a95db2328d4634e672d5ccd9452897a2c69809b9e7736e23a681ef04a1aed0d_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
