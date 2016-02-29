<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_11e399566237f7e633c862052bd7ee44d0b899a38721da1838e181aa85d86511 extends Twig_Template
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
        $__internal_778871a53d16016f65fd3960a5dc11fd9ee9a3808914b88f8a99c87ebdb2087a = $this->env->getExtension("native_profiler");
        $__internal_778871a53d16016f65fd3960a5dc11fd9ee9a3808914b88f8a99c87ebdb2087a->enter($__internal_778871a53d16016f65fd3960a5dc11fd9ee9a3808914b88f8a99c87ebdb2087a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_778871a53d16016f65fd3960a5dc11fd9ee9a3808914b88f8a99c87ebdb2087a->leave($__internal_778871a53d16016f65fd3960a5dc11fd9ee9a3808914b88f8a99c87ebdb2087a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
