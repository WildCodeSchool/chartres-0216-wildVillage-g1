<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_7a147d93629bb83c906caab3683ba246b1e1eea29422f83822cf10da53be07eb extends Twig_Template
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
        $__internal_75861fcf90edf309027263a155650c62f0e89545c581beea19fa5e7ece1a1e02 = $this->env->getExtension("native_profiler");
        $__internal_75861fcf90edf309027263a155650c62f0e89545c581beea19fa5e7ece1a1e02->enter($__internal_75861fcf90edf309027263a155650c62f0e89545c581beea19fa5e7ece1a1e02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_75861fcf90edf309027263a155650c62f0e89545c581beea19fa5e7ece1a1e02->leave($__internal_75861fcf90edf309027263a155650c62f0e89545c581beea19fa5e7ece1a1e02_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
