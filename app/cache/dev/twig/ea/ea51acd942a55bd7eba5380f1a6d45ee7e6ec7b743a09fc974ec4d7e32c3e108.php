<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_d4539a8b66c3dbd4097eb71c3294cc0d534e8bc862e85ab2a9f82e2334b5ce24 extends Twig_Template
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
        $__internal_b60201026128b59b616006267ab5b75a738b24f87c137fdcee0b7e9608b41d65 = $this->env->getExtension("native_profiler");
        $__internal_b60201026128b59b616006267ab5b75a738b24f87c137fdcee0b7e9608b41d65->enter($__internal_b60201026128b59b616006267ab5b75a738b24f87c137fdcee0b7e9608b41d65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_b60201026128b59b616006267ab5b75a738b24f87c137fdcee0b7e9608b41d65->leave($__internal_b60201026128b59b616006267ab5b75a738b24f87c137fdcee0b7e9608b41d65_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
