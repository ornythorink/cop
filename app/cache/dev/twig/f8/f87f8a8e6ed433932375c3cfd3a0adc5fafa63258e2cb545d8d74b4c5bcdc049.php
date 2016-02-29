<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_0ec0c9026d761eb79104bad8023ed212e0db8c66569328e217395d50abf9dea9 extends Twig_Template
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
        $__internal_9d8890b7d6f323f15eda6554b5714daefc65903550f1da2d376f915f4ea1c5cb = $this->env->getExtension("native_profiler");
        $__internal_9d8890b7d6f323f15eda6554b5714daefc65903550f1da2d376f915f4ea1c5cb->enter($__internal_9d8890b7d6f323f15eda6554b5714daefc65903550f1da2d376f915f4ea1c5cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_9d8890b7d6f323f15eda6554b5714daefc65903550f1da2d376f915f4ea1c5cb->leave($__internal_9d8890b7d6f323f15eda6554b5714daefc65903550f1da2d376f915f4ea1c5cb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
