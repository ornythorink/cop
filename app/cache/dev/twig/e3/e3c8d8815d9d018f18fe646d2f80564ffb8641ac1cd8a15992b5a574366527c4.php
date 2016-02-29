<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_31f62da94a9d86283f5aa55dea280e0b0eb315267f2e091d906952a2574ab537 extends Twig_Template
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
        $__internal_90bc4fb2412368d686dba345d39380632c90843454b97201ec27eef0ba950d5b = $this->env->getExtension("native_profiler");
        $__internal_90bc4fb2412368d686dba345d39380632c90843454b97201ec27eef0ba950d5b->enter($__internal_90bc4fb2412368d686dba345d39380632c90843454b97201ec27eef0ba950d5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_90bc4fb2412368d686dba345d39380632c90843454b97201ec27eef0ba950d5b->leave($__internal_90bc4fb2412368d686dba345d39380632c90843454b97201ec27eef0ba950d5b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
