<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_eb0f1124c88f913b95a0d1ad3369f2418ccfea28d11e98073161adc43125e745 extends Twig_Template
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
        $__internal_9c87f879ab84b4b4972f9479a23e6747ae8a59839311dc6319415785edd1ad70 = $this->env->getExtension("native_profiler");
        $__internal_9c87f879ab84b4b4972f9479a23e6747ae8a59839311dc6319415785edd1ad70->enter($__internal_9c87f879ab84b4b4972f9479a23e6747ae8a59839311dc6319415785edd1ad70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_9c87f879ab84b4b4972f9479a23e6747ae8a59839311dc6319415785edd1ad70->leave($__internal_9c87f879ab84b4b4972f9479a23e6747ae8a59839311dc6319415785edd1ad70_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
