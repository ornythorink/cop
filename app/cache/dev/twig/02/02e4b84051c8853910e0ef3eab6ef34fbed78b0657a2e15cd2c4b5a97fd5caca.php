<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_079bc6b7e205c1ef83e10844e26e57b1da1d269569c6f326b9bd6f98274cddca extends Twig_Template
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
        $__internal_1629b26facd8ba156af66f86c4ce719fc72e079e6e0e2f36beca823ddb46cc5e = $this->env->getExtension("native_profiler");
        $__internal_1629b26facd8ba156af66f86c4ce719fc72e079e6e0e2f36beca823ddb46cc5e->enter($__internal_1629b26facd8ba156af66f86c4ce719fc72e079e6e0e2f36beca823ddb46cc5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_1629b26facd8ba156af66f86c4ce719fc72e079e6e0e2f36beca823ddb46cc5e->leave($__internal_1629b26facd8ba156af66f86c4ce719fc72e079e6e0e2f36beca823ddb46cc5e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
