<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_44344ba3c0df0b84c3d7f01f194e00e25a67a5acbf96904b31ccab5966ed5671 extends Twig_Template
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
        $__internal_a78e8ad11df966a771af4a0c81c3b105328ca5f412e8543d29034983d7c00477 = $this->env->getExtension("native_profiler");
        $__internal_a78e8ad11df966a771af4a0c81c3b105328ca5f412e8543d29034983d7c00477->enter($__internal_a78e8ad11df966a771af4a0c81c3b105328ca5f412e8543d29034983d7c00477_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_a78e8ad11df966a771af4a0c81c3b105328ca5f412e8543d29034983d7c00477->leave($__internal_a78e8ad11df966a771af4a0c81c3b105328ca5f412e8543d29034983d7c00477_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
