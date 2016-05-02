<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_2bd953d9c70f7caeef898c11b378f11973ba5fed62c6987737a5e84c4b34a566 extends Twig_Template
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
        $__internal_0258007abb21456c9cd40c305dfb2d7d78493cb886072ab18b2ccb6e008c74c7 = $this->env->getExtension("native_profiler");
        $__internal_0258007abb21456c9cd40c305dfb2d7d78493cb886072ab18b2ccb6e008c74c7->enter($__internal_0258007abb21456c9cd40c305dfb2d7d78493cb886072ab18b2ccb6e008c74c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_0258007abb21456c9cd40c305dfb2d7d78493cb886072ab18b2ccb6e008c74c7->leave($__internal_0258007abb21456c9cd40c305dfb2d7d78493cb886072ab18b2ccb6e008c74c7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
