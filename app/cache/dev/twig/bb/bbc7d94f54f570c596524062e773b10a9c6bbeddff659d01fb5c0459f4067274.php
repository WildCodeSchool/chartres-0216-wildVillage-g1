<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_609dc7e30f9845e48969f15ffccf505ea3d42ba05ea5835f5b4ed2df1190bb28 extends Twig_Template
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
        $__internal_9704cdd33a76061ae3a55913bf9326704deb94fc1009c968a30994e7c702f78f = $this->env->getExtension("native_profiler");
        $__internal_9704cdd33a76061ae3a55913bf9326704deb94fc1009c968a30994e7c702f78f->enter($__internal_9704cdd33a76061ae3a55913bf9326704deb94fc1009c968a30994e7c702f78f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_9704cdd33a76061ae3a55913bf9326704deb94fc1009c968a30994e7c702f78f->leave($__internal_9704cdd33a76061ae3a55913bf9326704deb94fc1009c968a30994e7c702f78f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
