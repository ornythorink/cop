<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_1f64d35c033c94862cd6480727298917f7d5b1867fc4a24b9a388a2e0750ac93 extends Twig_Template
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
        $__internal_71fd7cb0a62fa39342325fc6821a14ece4b6b73e26ef621e29108bcfdba2cee1 = $this->env->getExtension("native_profiler");
        $__internal_71fd7cb0a62fa39342325fc6821a14ece4b6b73e26ef621e29108bcfdba2cee1->enter($__internal_71fd7cb0a62fa39342325fc6821a14ece4b6b73e26ef621e29108bcfdba2cee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_71fd7cb0a62fa39342325fc6821a14ece4b6b73e26ef621e29108bcfdba2cee1->leave($__internal_71fd7cb0a62fa39342325fc6821a14ece4b6b73e26ef621e29108bcfdba2cee1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
