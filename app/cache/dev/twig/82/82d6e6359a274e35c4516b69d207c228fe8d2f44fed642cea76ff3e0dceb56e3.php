<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_ccb08efabd250dc488cfc34e3e50817f472ac777c6fe25bd1ffcbc477b386e66 extends Twig_Template
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
        $__internal_b2280dcb6f67de729184929bfc0a3210cb93a879781d8ac15a113986b1b1f03c = $this->env->getExtension("native_profiler");
        $__internal_b2280dcb6f67de729184929bfc0a3210cb93a879781d8ac15a113986b1b1f03c->enter($__internal_b2280dcb6f67de729184929bfc0a3210cb93a879781d8ac15a113986b1b1f03c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_b2280dcb6f67de729184929bfc0a3210cb93a879781d8ac15a113986b1b1f03c->leave($__internal_b2280dcb6f67de729184929bfc0a3210cb93a879781d8ac15a113986b1b1f03c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
