<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_4c541d9b7c19145d2c2fa1446c54fcccad46a4aa9307c32d67cf190e28b75c45 extends Twig_Template
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
        $__internal_2025f2055f4c5c3f05a33f8b89866601754b23a5b8244dee4c1d97c37c237796 = $this->env->getExtension("native_profiler");
        $__internal_2025f2055f4c5c3f05a33f8b89866601754b23a5b8244dee4c1d97c37c237796->enter($__internal_2025f2055f4c5c3f05a33f8b89866601754b23a5b8244dee4c1d97c37c237796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_2025f2055f4c5c3f05a33f8b89866601754b23a5b8244dee4c1d97c37c237796->leave($__internal_2025f2055f4c5c3f05a33f8b89866601754b23a5b8244dee4c1d97c37c237796_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
