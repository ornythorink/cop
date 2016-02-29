<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_60c657d0cc580a29eafd83e4ebe7aff63ac1dbc0f870a7b5d43ec1b9c8fe1b8e extends Twig_Template
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
        $__internal_12330a9bd6e0c275ec038f05b1940d064b4c416790b85bea8e81791f7c73cf07 = $this->env->getExtension("native_profiler");
        $__internal_12330a9bd6e0c275ec038f05b1940d064b4c416790b85bea8e81791f7c73cf07->enter($__internal_12330a9bd6e0c275ec038f05b1940d064b4c416790b85bea8e81791f7c73cf07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_12330a9bd6e0c275ec038f05b1940d064b4c416790b85bea8e81791f7c73cf07->leave($__internal_12330a9bd6e0c275ec038f05b1940d064b4c416790b85bea8e81791f7c73cf07_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
