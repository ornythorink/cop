<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_fb3eb45b6765634544d2dde29503eb7dd7681e6a1d13ee2c8a042374e672e65b extends Twig_Template
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
        $__internal_c24eb99c0c662d0c4c4014c6a0a62d9d4e13b63d20c765ba61268bcc431afc1b = $this->env->getExtension("native_profiler");
        $__internal_c24eb99c0c662d0c4c4014c6a0a62d9d4e13b63d20c765ba61268bcc431afc1b->enter($__internal_c24eb99c0c662d0c4c4014c6a0a62d9d4e13b63d20c765ba61268bcc431afc1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_c24eb99c0c662d0c4c4014c6a0a62d9d4e13b63d20c765ba61268bcc431afc1b->leave($__internal_c24eb99c0c662d0c4c4014c6a0a62d9d4e13b63d20c765ba61268bcc431afc1b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
