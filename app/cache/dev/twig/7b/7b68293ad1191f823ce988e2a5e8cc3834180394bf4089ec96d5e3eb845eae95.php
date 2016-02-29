<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_5a6ef0bf462e4c3958575e896c1f0999f615df3619b2fec9818dc8bfcab709df extends Twig_Template
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
        $__internal_466d5ad12f81066a0b0a233444650358ccbab89519eadee7d9c368f3f574e198 = $this->env->getExtension("native_profiler");
        $__internal_466d5ad12f81066a0b0a233444650358ccbab89519eadee7d9c368f3f574e198->enter($__internal_466d5ad12f81066a0b0a233444650358ccbab89519eadee7d9c368f3f574e198_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_466d5ad12f81066a0b0a233444650358ccbab89519eadee7d9c368f3f574e198->leave($__internal_466d5ad12f81066a0b0a233444650358ccbab89519eadee7d9c368f3f574e198_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
