<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_79ae0d86f7d49b3f1b55284b0d25bcfc2535fba7ac545cddb8f450bd9f7170bb extends Twig_Template
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
        $__internal_a65813a109cf6566368ae74844e380988c959423f07766a272863639d1b0a350 = $this->env->getExtension("native_profiler");
        $__internal_a65813a109cf6566368ae74844e380988c959423f07766a272863639d1b0a350->enter($__internal_a65813a109cf6566368ae74844e380988c959423f07766a272863639d1b0a350_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_a65813a109cf6566368ae74844e380988c959423f07766a272863639d1b0a350->leave($__internal_a65813a109cf6566368ae74844e380988c959423f07766a272863639d1b0a350_prof);

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
