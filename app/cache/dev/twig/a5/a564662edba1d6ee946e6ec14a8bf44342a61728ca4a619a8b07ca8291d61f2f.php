<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_afb683061af3d30eb582402e068388baaa2ab5832a94947a9f4d103847a5060f extends Twig_Template
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
        $__internal_c012226d66782c67ead710a0f47ef72842706a2850e31672cc812269e6978390 = $this->env->getExtension("native_profiler");
        $__internal_c012226d66782c67ead710a0f47ef72842706a2850e31672cc812269e6978390->enter($__internal_c012226d66782c67ead710a0f47ef72842706a2850e31672cc812269e6978390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_c012226d66782c67ead710a0f47ef72842706a2850e31672cc812269e6978390->leave($__internal_c012226d66782c67ead710a0f47ef72842706a2850e31672cc812269e6978390_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
