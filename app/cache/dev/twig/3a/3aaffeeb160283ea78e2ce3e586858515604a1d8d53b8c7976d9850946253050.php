<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_68fa57bc08b631331086a593ab0e42b811887274d3e0a6ce3bdbaf2d614562ae extends Twig_Template
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
        $__internal_e3be8daf95b997858a443520d4e6665a35c3709d1fd9944621dfe9677fcb0d11 = $this->env->getExtension("native_profiler");
        $__internal_e3be8daf95b997858a443520d4e6665a35c3709d1fd9944621dfe9677fcb0d11->enter($__internal_e3be8daf95b997858a443520d4e6665a35c3709d1fd9944621dfe9677fcb0d11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_e3be8daf95b997858a443520d4e6665a35c3709d1fd9944621dfe9677fcb0d11->leave($__internal_e3be8daf95b997858a443520d4e6665a35c3709d1fd9944621dfe9677fcb0d11_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
