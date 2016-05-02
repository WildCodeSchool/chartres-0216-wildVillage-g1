<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_37b45bd5bff2d3f00cdebbd772b488e907e20851f4cdad68c3dd415a2b8d202d extends Twig_Template
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
        $__internal_ad7b4c8fcb0bbbbcddbbc24aa646d7bc44f72bc8406f6ab6d43cb571316ef7f3 = $this->env->getExtension("native_profiler");
        $__internal_ad7b4c8fcb0bbbbcddbbc24aa646d7bc44f72bc8406f6ab6d43cb571316ef7f3->enter($__internal_ad7b4c8fcb0bbbbcddbbc24aa646d7bc44f72bc8406f6ab6d43cb571316ef7f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_ad7b4c8fcb0bbbbcddbbc24aa646d7bc44f72bc8406f6ab6d43cb571316ef7f3->leave($__internal_ad7b4c8fcb0bbbbcddbbc24aa646d7bc44f72bc8406f6ab6d43cb571316ef7f3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
