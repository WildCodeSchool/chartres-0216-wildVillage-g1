<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_53b2ae7e947d4107662d2577feda481413d3402bd73cb2197863fe07da8ef74b extends Twig_Template
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
        $__internal_f5ca7bedb765d575c196cc89ea19c76b7ffed6959af78521991eff921f8dc951 = $this->env->getExtension("native_profiler");
        $__internal_f5ca7bedb765d575c196cc89ea19c76b7ffed6959af78521991eff921f8dc951->enter($__internal_f5ca7bedb765d575c196cc89ea19c76b7ffed6959af78521991eff921f8dc951_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_f5ca7bedb765d575c196cc89ea19c76b7ffed6959af78521991eff921f8dc951->leave($__internal_f5ca7bedb765d575c196cc89ea19c76b7ffed6959af78521991eff921f8dc951_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
