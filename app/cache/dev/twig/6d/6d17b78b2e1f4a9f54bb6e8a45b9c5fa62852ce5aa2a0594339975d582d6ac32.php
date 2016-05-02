<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_00b50153b975d39acbaaee78d47e0cff19683a9bfcc60334a9514c05c07cff7d extends Twig_Template
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
        $__internal_845b6109dc2265386ab4abbda8861554784c39f84e7e0374ae34fa5b4f068fb1 = $this->env->getExtension("native_profiler");
        $__internal_845b6109dc2265386ab4abbda8861554784c39f84e7e0374ae34fa5b4f068fb1->enter($__internal_845b6109dc2265386ab4abbda8861554784c39f84e7e0374ae34fa5b4f068fb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_845b6109dc2265386ab4abbda8861554784c39f84e7e0374ae34fa5b4f068fb1->leave($__internal_845b6109dc2265386ab4abbda8861554784c39f84e7e0374ae34fa5b4f068fb1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
