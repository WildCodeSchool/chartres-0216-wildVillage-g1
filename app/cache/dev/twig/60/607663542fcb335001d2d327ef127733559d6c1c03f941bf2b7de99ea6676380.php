<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_767bae43996b82bbd9d83667d2142894d7a50267429fe6750779ef0ed5d196ce extends Twig_Template
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
        $__internal_47c4a4b395c923e4d24560c14afc6512c11a4d4a607893bf56584ed53649be2a = $this->env->getExtension("native_profiler");
        $__internal_47c4a4b395c923e4d24560c14afc6512c11a4d4a607893bf56584ed53649be2a->enter($__internal_47c4a4b395c923e4d24560c14afc6512c11a4d4a607893bf56584ed53649be2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_47c4a4b395c923e4d24560c14afc6512c11a4d4a607893bf56584ed53649be2a->leave($__internal_47c4a4b395c923e4d24560c14afc6512c11a4d4a607893bf56584ed53649be2a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
