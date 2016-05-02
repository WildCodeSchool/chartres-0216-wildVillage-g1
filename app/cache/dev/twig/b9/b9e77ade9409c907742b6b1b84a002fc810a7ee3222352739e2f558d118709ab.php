<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_33e83096c0008f1c8f9c847e44621e189713ac40bfaea65b9640602a5a75ad98 extends Twig_Template
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
        $__internal_57863442c3b76147adf68823f2ebc14f328702f0f8189ab9605d222053a5357e = $this->env->getExtension("native_profiler");
        $__internal_57863442c3b76147adf68823f2ebc14f328702f0f8189ab9605d222053a5357e->enter($__internal_57863442c3b76147adf68823f2ebc14f328702f0f8189ab9605d222053a5357e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_57863442c3b76147adf68823f2ebc14f328702f0f8189ab9605d222053a5357e->leave($__internal_57863442c3b76147adf68823f2ebc14f328702f0f8189ab9605d222053a5357e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
