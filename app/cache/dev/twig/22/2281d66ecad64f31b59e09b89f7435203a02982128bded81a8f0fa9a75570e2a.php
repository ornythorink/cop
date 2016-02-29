<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_ea9ef8e72028535739e306e06ab92754994f78862fe2865112f33e54d4f9f43c extends Twig_Template
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
        $__internal_382d5dbcc7df4f361d1a40607d8c2aac5c23c306e84a144b03d21b09109cbbf0 = $this->env->getExtension("native_profiler");
        $__internal_382d5dbcc7df4f361d1a40607d8c2aac5c23c306e84a144b03d21b09109cbbf0->enter($__internal_382d5dbcc7df4f361d1a40607d8c2aac5c23c306e84a144b03d21b09109cbbf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_382d5dbcc7df4f361d1a40607d8c2aac5c23c306e84a144b03d21b09109cbbf0->leave($__internal_382d5dbcc7df4f361d1a40607d8c2aac5c23c306e84a144b03d21b09109cbbf0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
