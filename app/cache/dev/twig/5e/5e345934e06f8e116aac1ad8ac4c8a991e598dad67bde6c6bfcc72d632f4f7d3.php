<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_ebf07201289799c5e20d522080a82e9955ebc1a57d2c27a36300940235ed9fc5 extends Twig_Template
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
        $__internal_58f30ca203456832f2e8c46a743310ef08fffc67f56ad59d1c2eff7850cfb257 = $this->env->getExtension("native_profiler");
        $__internal_58f30ca203456832f2e8c46a743310ef08fffc67f56ad59d1c2eff7850cfb257->enter($__internal_58f30ca203456832f2e8c46a743310ef08fffc67f56ad59d1c2eff7850cfb257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_58f30ca203456832f2e8c46a743310ef08fffc67f56ad59d1c2eff7850cfb257->leave($__internal_58f30ca203456832f2e8c46a743310ef08fffc67f56ad59d1c2eff7850cfb257_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
