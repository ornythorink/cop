<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_f2c06ed90ec7254edecb4c003db5d5111bbec4095d8229b3246aaec66641ef95 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_32ff6bff3b5f681f61e6c73ff7c44593bda9fefbc37255ed9090cbf75b2a731e = $this->env->getExtension("native_profiler");
        $__internal_32ff6bff3b5f681f61e6c73ff7c44593bda9fefbc37255ed9090cbf75b2a731e->enter($__internal_32ff6bff3b5f681f61e6c73ff7c44593bda9fefbc37255ed9090cbf75b2a731e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_32ff6bff3b5f681f61e6c73ff7c44593bda9fefbc37255ed9090cbf75b2a731e->leave($__internal_32ff6bff3b5f681f61e6c73ff7c44593bda9fefbc37255ed9090cbf75b2a731e_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_524f1681280a0c499ec7381bb2d432f334c7d9e1484d4168a6f81adf93a51bf1 = $this->env->getExtension("native_profiler");
        $__internal_524f1681280a0c499ec7381bb2d432f334c7d9e1484d4168a6f81adf93a51bf1->enter($__internal_524f1681280a0c499ec7381bb2d432f334c7d9e1484d4168a6f81adf93a51bf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_524f1681280a0c499ec7381bb2d432f334c7d9e1484d4168a6f81adf93a51bf1->leave($__internal_524f1681280a0c499ec7381bb2d432f334c7d9e1484d4168a6f81adf93a51bf1_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
