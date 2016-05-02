<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_bb324b9f6a9d5134436e8e33b5f2f3d2444863f2bb9a0c1ba6fcf217824565b1 extends Twig_Template
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
        $__internal_e60b98af78eb2c01543c71c65a88fae075bee3ba88d4c6e6dda6d805690ec59b = $this->env->getExtension("native_profiler");
        $__internal_e60b98af78eb2c01543c71c65a88fae075bee3ba88d4c6e6dda6d805690ec59b->enter($__internal_e60b98af78eb2c01543c71c65a88fae075bee3ba88d4c6e6dda6d805690ec59b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_e60b98af78eb2c01543c71c65a88fae075bee3ba88d4c6e6dda6d805690ec59b->leave($__internal_e60b98af78eb2c01543c71c65a88fae075bee3ba88d4c6e6dda6d805690ec59b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
