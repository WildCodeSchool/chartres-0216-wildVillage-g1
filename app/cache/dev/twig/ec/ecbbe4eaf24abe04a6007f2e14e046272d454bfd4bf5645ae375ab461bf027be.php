<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_964a4462085f03d25b17cdc07897d06c92abb1d78c1e836fbef33525eb798bff extends Twig_Template
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
        $__internal_13eb817d4237f5d3859663fdf4ba18672181b265588a9f498a186798133d862e = $this->env->getExtension("native_profiler");
        $__internal_13eb817d4237f5d3859663fdf4ba18672181b265588a9f498a186798133d862e->enter($__internal_13eb817d4237f5d3859663fdf4ba18672181b265588a9f498a186798133d862e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_13eb817d4237f5d3859663fdf4ba18672181b265588a9f498a186798133d862e->leave($__internal_13eb817d4237f5d3859663fdf4ba18672181b265588a9f498a186798133d862e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($form->vars['multipart']): ?>enctype="multipart/form-data"<?php endif ?>*/
/* */
