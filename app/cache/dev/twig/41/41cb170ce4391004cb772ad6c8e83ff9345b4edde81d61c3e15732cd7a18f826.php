<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_98278f2a413d2bea608205f439eca02764a78573ee90de3c5f74dfceceed8fd8 extends Twig_Template
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
        $__internal_62ce7e00ef49d1378573de2a082294ed544935bfbe4720e5d82eae70df2c4579 = $this->env->getExtension("native_profiler");
        $__internal_62ce7e00ef49d1378573de2a082294ed544935bfbe4720e5d82eae70df2c4579->enter($__internal_62ce7e00ef49d1378573de2a082294ed544935bfbe4720e5d82eae70df2c4579_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_62ce7e00ef49d1378573de2a082294ed544935bfbe4720e5d82eae70df2c4579->leave($__internal_62ce7e00ef49d1378573de2a082294ed544935bfbe4720e5d82eae70df2c4579_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
