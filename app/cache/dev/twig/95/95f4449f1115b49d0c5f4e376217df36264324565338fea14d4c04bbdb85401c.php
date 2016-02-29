<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_4f98eb4713fa4426b37fdd26c350864b02ae794f607d94d85413d236e695e045 extends Twig_Template
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
        $__internal_c4e3b9aac5048e8ea71c45feae1227fb6031635082a3341f0724fd31f338b3f6 = $this->env->getExtension("native_profiler");
        $__internal_c4e3b9aac5048e8ea71c45feae1227fb6031635082a3341f0724fd31f338b3f6->enter($__internal_c4e3b9aac5048e8ea71c45feae1227fb6031635082a3341f0724fd31f338b3f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_c4e3b9aac5048e8ea71c45feae1227fb6031635082a3341f0724fd31f338b3f6->leave($__internal_c4e3b9aac5048e8ea71c45feae1227fb6031635082a3341f0724fd31f338b3f6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
