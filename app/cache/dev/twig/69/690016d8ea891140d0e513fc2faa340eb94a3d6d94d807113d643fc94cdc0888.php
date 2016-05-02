<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_5d41bbb4c14a261b68fb6458b1a89c31100fa4b336389276c938a376513aa14a extends Twig_Template
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
        $__internal_dd2de2a6152bc8583d56a770e337127a9a434fae59689b8ea2f2a34340b02c8f = $this->env->getExtension("native_profiler");
        $__internal_dd2de2a6152bc8583d56a770e337127a9a434fae59689b8ea2f2a34340b02c8f->enter($__internal_dd2de2a6152bc8583d56a770e337127a9a434fae59689b8ea2f2a34340b02c8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_dd2de2a6152bc8583d56a770e337127a9a434fae59689b8ea2f2a34340b02c8f->leave($__internal_dd2de2a6152bc8583d56a770e337127a9a434fae59689b8ea2f2a34340b02c8f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
