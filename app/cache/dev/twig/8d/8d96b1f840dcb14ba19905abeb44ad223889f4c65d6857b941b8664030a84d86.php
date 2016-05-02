<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_f8c46e03c65c4432d58b75f363cf5d86c903da00c9856c00bbda7137072b24e1 extends Twig_Template
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
        $__internal_0668a39b7f95be11905dc25049068fb25cea496cbbf81e5691ddedcd765a6594 = $this->env->getExtension("native_profiler");
        $__internal_0668a39b7f95be11905dc25049068fb25cea496cbbf81e5691ddedcd765a6594->enter($__internal_0668a39b7f95be11905dc25049068fb25cea496cbbf81e5691ddedcd765a6594_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_0668a39b7f95be11905dc25049068fb25cea496cbbf81e5691ddedcd765a6594->leave($__internal_0668a39b7f95be11905dc25049068fb25cea496cbbf81e5691ddedcd765a6594_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
