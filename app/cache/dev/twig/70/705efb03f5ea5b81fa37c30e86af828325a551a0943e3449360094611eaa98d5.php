<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_49979e7d293b1bb897386d73a872906ff0a03678c0fcedbedc644b643fbc5b61 extends Twig_Template
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
        $__internal_769bcaae41500739959a605b96b162ae88c523ce760758205857c64e4ef5efa9 = $this->env->getExtension("native_profiler");
        $__internal_769bcaae41500739959a605b96b162ae88c523ce760758205857c64e4ef5efa9->enter($__internal_769bcaae41500739959a605b96b162ae88c523ce760758205857c64e4ef5efa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_769bcaae41500739959a605b96b162ae88c523ce760758205857c64e4ef5efa9->leave($__internal_769bcaae41500739959a605b96b162ae88c523ce760758205857c64e4ef5efa9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
