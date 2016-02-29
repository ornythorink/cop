<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_a2f74b523e0cff1e03b74b2b42cae62bacfed73469072e1e88754728bdc8dd61 extends Twig_Template
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
        $__internal_1d81b834230e517d51175070f08810a22aa4e47e9392b3f8ec37e412dea29ab5 = $this->env->getExtension("native_profiler");
        $__internal_1d81b834230e517d51175070f08810a22aa4e47e9392b3f8ec37e412dea29ab5->enter($__internal_1d81b834230e517d51175070f08810a22aa4e47e9392b3f8ec37e412dea29ab5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_1d81b834230e517d51175070f08810a22aa4e47e9392b3f8ec37e412dea29ab5->leave($__internal_1d81b834230e517d51175070f08810a22aa4e47e9392b3f8ec37e412dea29ab5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
