<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_20b18667e729c5e79b87669c8d75f38f4432075c1fcf7f9ac1cb377aea79885f extends Twig_Template
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
        $__internal_7dd3cb8bdbe4c95f0a125b2d7b8ef99b8f5851513f0ac226d3cb52f89a54ef95 = $this->env->getExtension("native_profiler");
        $__internal_7dd3cb8bdbe4c95f0a125b2d7b8ef99b8f5851513f0ac226d3cb52f89a54ef95->enter($__internal_7dd3cb8bdbe4c95f0a125b2d7b8ef99b8f5851513f0ac226d3cb52f89a54ef95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_7dd3cb8bdbe4c95f0a125b2d7b8ef99b8f5851513f0ac226d3cb52f89a54ef95->leave($__internal_7dd3cb8bdbe4c95f0a125b2d7b8ef99b8f5851513f0ac226d3cb52f89a54ef95_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
