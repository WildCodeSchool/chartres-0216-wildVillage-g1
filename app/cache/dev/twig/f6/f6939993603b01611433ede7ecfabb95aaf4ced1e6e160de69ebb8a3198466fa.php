<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_4c39fe37995d1a934eaabc34af785cd933ad6effd70ba358bd1a992631dc1989 extends Twig_Template
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
        $__internal_badb00f4c7dd4a0d06deda895f66685c1466f5b0ad74d9dcb45b96f5c48e9ebe = $this->env->getExtension("native_profiler");
        $__internal_badb00f4c7dd4a0d06deda895f66685c1466f5b0ad74d9dcb45b96f5c48e9ebe->enter($__internal_badb00f4c7dd4a0d06deda895f66685c1466f5b0ad74d9dcb45b96f5c48e9ebe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_badb00f4c7dd4a0d06deda895f66685c1466f5b0ad74d9dcb45b96f5c48e9ebe->leave($__internal_badb00f4c7dd4a0d06deda895f66685c1466f5b0ad74d9dcb45b96f5c48e9ebe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
