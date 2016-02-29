<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_1c3aa0e266087a7f6ca11fda49f6f51ba01f77a5a0e441f056e76b7c6159b240 extends Twig_Template
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
        $__internal_5bef7587cc98845939bdbb380e957141af098e64d10b7d07ca00b1b962d2edb2 = $this->env->getExtension("native_profiler");
        $__internal_5bef7587cc98845939bdbb380e957141af098e64d10b7d07ca00b1b962d2edb2->enter($__internal_5bef7587cc98845939bdbb380e957141af098e64d10b7d07ca00b1b962d2edb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_5bef7587cc98845939bdbb380e957141af098e64d10b7d07ca00b1b962d2edb2->leave($__internal_5bef7587cc98845939bdbb380e957141af098e64d10b7d07ca00b1b962d2edb2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
