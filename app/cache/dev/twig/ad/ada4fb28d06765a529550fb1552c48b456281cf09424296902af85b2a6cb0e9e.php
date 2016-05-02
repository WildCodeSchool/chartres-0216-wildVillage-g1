<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_8206b1dcbca7e00dffa890a69fadccbe9020ea94be60ba6b9f56d5fc3929ca74 extends Twig_Template
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
        $__internal_cd39704831c91e5f7fe2db7a55ebea6cfec943a89b9ede936b88f5f57fb1a762 = $this->env->getExtension("native_profiler");
        $__internal_cd39704831c91e5f7fe2db7a55ebea6cfec943a89b9ede936b88f5f57fb1a762->enter($__internal_cd39704831c91e5f7fe2db7a55ebea6cfec943a89b9ede936b88f5f57fb1a762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_cd39704831c91e5f7fe2db7a55ebea6cfec943a89b9ede936b88f5f57fb1a762->leave($__internal_cd39704831c91e5f7fe2db7a55ebea6cfec943a89b9ede936b88f5f57fb1a762_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
