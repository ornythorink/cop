<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_4689a544439367c1e190392e49cbe0345266efe07e8b631d7d2346c5748e6957 extends Twig_Template
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
        $__internal_79146e6fc31178204e642a18dc13d8c4795c28c2f5078ab905dc2630c661f105 = $this->env->getExtension("native_profiler");
        $__internal_79146e6fc31178204e642a18dc13d8c4795c28c2f5078ab905dc2630c661f105->enter($__internal_79146e6fc31178204e642a18dc13d8c4795c28c2f5078ab905dc2630c661f105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_79146e6fc31178204e642a18dc13d8c4795c28c2f5078ab905dc2630c661f105->leave($__internal_79146e6fc31178204e642a18dc13d8c4795c28c2f5078ab905dc2630c661f105_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
