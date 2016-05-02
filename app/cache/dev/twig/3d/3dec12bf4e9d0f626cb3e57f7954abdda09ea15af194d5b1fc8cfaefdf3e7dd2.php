<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_11b96bf7fe8c225b2d2e4677ca71c0bd4d7c1bcf46073c7f1b12ab203575113a extends Twig_Template
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
        $__internal_cb3b55d52c11888738192101494fa927d52a60a59dfc9e9ba14860f06f786b28 = $this->env->getExtension("native_profiler");
        $__internal_cb3b55d52c11888738192101494fa927d52a60a59dfc9e9ba14860f06f786b28->enter($__internal_cb3b55d52c11888738192101494fa927d52a60a59dfc9e9ba14860f06f786b28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_cb3b55d52c11888738192101494fa927d52a60a59dfc9e9ba14860f06f786b28->leave($__internal_cb3b55d52c11888738192101494fa927d52a60a59dfc9e9ba14860f06f786b28_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
