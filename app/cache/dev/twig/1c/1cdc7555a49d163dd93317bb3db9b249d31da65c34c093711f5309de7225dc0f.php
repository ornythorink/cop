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
        $__internal_def99955ea90534c77747b57b8af0a1574f73a48de7c8e82fa675d73505f690c = $this->env->getExtension("native_profiler");
        $__internal_def99955ea90534c77747b57b8af0a1574f73a48de7c8e82fa675d73505f690c->enter($__internal_def99955ea90534c77747b57b8af0a1574f73a48de7c8e82fa675d73505f690c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CopHomeBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_def99955ea90534c77747b57b8af0a1574f73a48de7c8e82fa675d73505f690c->leave($__internal_def99955ea90534c77747b57b8af0a1574f73a48de7c8e82fa675d73505f690c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_669dc4553ea87da451bdf9a660cdadeff50a4f132b3b5760b86c62956e13419e = $this->env->getExtension("native_profiler");
        $__internal_669dc4553ea87da451bdf9a660cdadeff50a4f132b3b5760b86c62956e13419e->enter($__internal_669dc4553ea87da451bdf9a660cdadeff50a4f132b3b5760b86c62956e13419e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("CopCommonBundle:Navbar:index"));
        echo "
";
        
        $__internal_669dc4553ea87da451bdf9a660cdadeff50a4f132b3b5760b86c62956e13419e->leave($__internal_669dc4553ea87da451bdf9a660cdadeff50a4f132b3b5760b86c62956e13419e_prof);

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
