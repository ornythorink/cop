<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_27d9db2dad2220c5bd38fb0cea35818223ebef49ab746cdf16e38aa717fb2533 extends Twig_Template
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
        $__internal_8329bea1251250edd5fac25ae4a1846f6d3a8d8850226f2f584aa29bfbe621e7 = $this->env->getExtension("native_profiler");
        $__internal_8329bea1251250edd5fac25ae4a1846f6d3a8d8850226f2f584aa29bfbe621e7->enter($__internal_8329bea1251250edd5fac25ae4a1846f6d3a8d8850226f2f584aa29bfbe621e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_8329bea1251250edd5fac25ae4a1846f6d3a8d8850226f2f584aa29bfbe621e7->leave($__internal_8329bea1251250edd5fac25ae4a1846f6d3a8d8850226f2f584aa29bfbe621e7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
