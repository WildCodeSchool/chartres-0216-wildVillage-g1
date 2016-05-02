<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_6a5417a60314e68d516400ff915015d1a4270b6f5f632fd3a88cdf5b5d1cba5e extends Twig_Template
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
        $__internal_e7ad14d21de6f01acdc3eeca2f3c5f57ef8f8211932b008b395e0bcfa2b0e92f = $this->env->getExtension("native_profiler");
        $__internal_e7ad14d21de6f01acdc3eeca2f3c5f57ef8f8211932b008b395e0bcfa2b0e92f->enter($__internal_e7ad14d21de6f01acdc3eeca2f3c5f57ef8f8211932b008b395e0bcfa2b0e92f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_e7ad14d21de6f01acdc3eeca2f3c5f57ef8f8211932b008b395e0bcfa2b0e92f->leave($__internal_e7ad14d21de6f01acdc3eeca2f3c5f57ef8f8211932b008b395e0bcfa2b0e92f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
