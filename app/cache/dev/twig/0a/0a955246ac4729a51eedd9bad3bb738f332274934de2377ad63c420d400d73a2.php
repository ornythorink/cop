<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_bfbfa56c8eee2332bd0bcc069ded45c3ad78cbd44a6fb556b8e3e5ea5e8cf2f6 extends Twig_Template
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
        $__internal_950b1a970f4ebb328eb655f5b444aa3347419f4626b92712448652902ca66321 = $this->env->getExtension("native_profiler");
        $__internal_950b1a970f4ebb328eb655f5b444aa3347419f4626b92712448652902ca66321->enter($__internal_950b1a970f4ebb328eb655f5b444aa3347419f4626b92712448652902ca66321_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_950b1a970f4ebb328eb655f5b444aa3347419f4626b92712448652902ca66321->leave($__internal_950b1a970f4ebb328eb655f5b444aa3347419f4626b92712448652902ca66321_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
