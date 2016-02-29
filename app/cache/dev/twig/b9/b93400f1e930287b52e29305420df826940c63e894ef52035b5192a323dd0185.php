<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_31aa6ba1100c01df20c71efbe86953c531e2b459300004070bd7d70f06d26e9b extends Twig_Template
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
        $__internal_98459b91470ab1de71a23c5e4ebda58c6913a94f70ebff098f42905884880fce = $this->env->getExtension("native_profiler");
        $__internal_98459b91470ab1de71a23c5e4ebda58c6913a94f70ebff098f42905884880fce->enter($__internal_98459b91470ab1de71a23c5e4ebda58c6913a94f70ebff098f42905884880fce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_98459b91470ab1de71a23c5e4ebda58c6913a94f70ebff098f42905884880fce->leave($__internal_98459b91470ab1de71a23c5e4ebda58c6913a94f70ebff098f42905884880fce_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
