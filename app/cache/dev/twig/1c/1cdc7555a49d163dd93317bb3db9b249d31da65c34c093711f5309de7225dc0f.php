<?php

/* CopHomeBundle:Default:index.html.twig */
class __TwigTemplate_11532972741e66b69b9d3eb6cec6d1ec20019c1893ba2e7409cb1bf4599534e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "CopHomeBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_758899af6d4bf3147d46cf81b5ec909488d08728a896490ae43fd4d012acdf2a = $this->env->getExtension("native_profiler");
        $__internal_758899af6d4bf3147d46cf81b5ec909488d08728a896490ae43fd4d012acdf2a->enter($__internal_758899af6d4bf3147d46cf81b5ec909488d08728a896490ae43fd4d012acdf2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CopHomeBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_758899af6d4bf3147d46cf81b5ec909488d08728a896490ae43fd4d012acdf2a->leave($__internal_758899af6d4bf3147d46cf81b5ec909488d08728a896490ae43fd4d012acdf2a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_36116ecdc8b834e4298a447680e2c5800bb0bac83a776b92efe002eea8a4020b = $this->env->getExtension("native_profiler");
        $__internal_36116ecdc8b834e4298a447680e2c5800bb0bac83a776b92efe002eea8a4020b->enter($__internal_36116ecdc8b834e4298a447680e2c5800bb0bac83a776b92efe002eea8a4020b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("CopCommonBundle:Navbar:index"));
        echo "
";
        
        $__internal_36116ecdc8b834e4298a447680e2c5800bb0bac83a776b92efe002eea8a4020b->leave($__internal_36116ecdc8b834e4298a447680e2c5800bb0bac83a776b92efe002eea8a4020b_prof);

    }

    public function getTemplateName()
    {
        return "CopHomeBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     {{ render(controller('CopCommonBundle:Navbar:index')) }}*/
/* {% endblock %}*/
