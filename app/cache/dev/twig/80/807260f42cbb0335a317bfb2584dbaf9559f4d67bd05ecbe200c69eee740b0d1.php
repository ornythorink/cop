<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_65411da663a958b5999021c7ca60c0f86888b9caf762986a736d4738b1cf4d1f extends Twig_Template
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
        $__internal_8906a4b31075123239d86feee45b2bbcea869daec42a105b8011daf7e6043750 = $this->env->getExtension("native_profiler");
        $__internal_8906a4b31075123239d86feee45b2bbcea869daec42a105b8011daf7e6043750->enter($__internal_8906a4b31075123239d86feee45b2bbcea869daec42a105b8011daf7e6043750_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_8906a4b31075123239d86feee45b2bbcea869daec42a105b8011daf7e6043750->leave($__internal_8906a4b31075123239d86feee45b2bbcea869daec42a105b8011daf7e6043750_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
