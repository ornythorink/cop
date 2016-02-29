<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_3a8b81ec4fe4c836b7121151fde99f1ce7abf7b29ff2bf3247dc87386c317aef extends Twig_Template
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
        $__internal_8a4ce4ae31c5d8fb1b43fd02a9529decd031df6d9729604364efc4d92d88e512 = $this->env->getExtension("native_profiler");
        $__internal_8a4ce4ae31c5d8fb1b43fd02a9529decd031df6d9729604364efc4d92d88e512->enter($__internal_8a4ce4ae31c5d8fb1b43fd02a9529decd031df6d9729604364efc4d92d88e512_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_8a4ce4ae31c5d8fb1b43fd02a9529decd031df6d9729604364efc4d92d88e512->leave($__internal_8a4ce4ae31c5d8fb1b43fd02a9529decd031df6d9729604364efc4d92d88e512_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
