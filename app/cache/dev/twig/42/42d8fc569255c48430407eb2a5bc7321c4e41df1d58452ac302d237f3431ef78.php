<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_07ba8a5f1f2d3566c750b821764ad90fd343b6eedb721196dc41f3a3bd373292 extends Twig_Template
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
        $__internal_8eca4ccd8a8db0217614a11a649e18c52f77bf8f51d1500e7a3949131ccca161 = $this->env->getExtension("native_profiler");
        $__internal_8eca4ccd8a8db0217614a11a649e18c52f77bf8f51d1500e7a3949131ccca161->enter($__internal_8eca4ccd8a8db0217614a11a649e18c52f77bf8f51d1500e7a3949131ccca161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_8eca4ccd8a8db0217614a11a649e18c52f77bf8f51d1500e7a3949131ccca161->leave($__internal_8eca4ccd8a8db0217614a11a649e18c52f77bf8f51d1500e7a3949131ccca161_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
