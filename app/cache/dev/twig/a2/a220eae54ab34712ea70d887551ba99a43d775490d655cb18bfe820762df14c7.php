<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_96bb7d878a2b3b1ae8ee0306527b427c9a3e83a7a1fc38531bbf00c8a99e4e07 extends Twig_Template
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
        $__internal_f815c1c7fb081bc0df6a87b83f77e9b81ec7d426a3ee3b451015539bd6934dc0 = $this->env->getExtension("native_profiler");
        $__internal_f815c1c7fb081bc0df6a87b83f77e9b81ec7d426a3ee3b451015539bd6934dc0->enter($__internal_f815c1c7fb081bc0df6a87b83f77e9b81ec7d426a3ee3b451015539bd6934dc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_f815c1c7fb081bc0df6a87b83f77e9b81ec7d426a3ee3b451015539bd6934dc0->leave($__internal_f815c1c7fb081bc0df6a87b83f77e9b81ec7d426a3ee3b451015539bd6934dc0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
