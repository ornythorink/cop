<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_a8e22e56456028eed3c28e27a3845b66381e15edda9e9ce4f008861db395ca6c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_909a86dd49be58a569b5837db3a4e8943566235f04df3e631b321c84925ebd43 = $this->env->getExtension("native_profiler");
        $__internal_909a86dd49be58a569b5837db3a4e8943566235f04df3e631b321c84925ebd43->enter($__internal_909a86dd49be58a569b5837db3a4e8943566235f04df3e631b321c84925ebd43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_909a86dd49be58a569b5837db3a4e8943566235f04df3e631b321c84925ebd43->leave($__internal_909a86dd49be58a569b5837db3a4e8943566235f04df3e631b321c84925ebd43_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b7d4742ae84b4ecaf4c48eb64471060930b34e9c58ebdcb38849db851decaabc = $this->env->getExtension("native_profiler");
        $__internal_b7d4742ae84b4ecaf4c48eb64471060930b34e9c58ebdcb38849db851decaabc->enter($__internal_b7d4742ae84b4ecaf4c48eb64471060930b34e9c58ebdcb38849db851decaabc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b7d4742ae84b4ecaf4c48eb64471060930b34e9c58ebdcb38849db851decaabc->leave($__internal_b7d4742ae84b4ecaf4c48eb64471060930b34e9c58ebdcb38849db851decaabc_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a4b5e570b314f6933207fa216e16ff2f94465bd78d4114ec833a50e6131a185e = $this->env->getExtension("native_profiler");
        $__internal_a4b5e570b314f6933207fa216e16ff2f94465bd78d4114ec833a50e6131a185e->enter($__internal_a4b5e570b314f6933207fa216e16ff2f94465bd78d4114ec833a50e6131a185e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a4b5e570b314f6933207fa216e16ff2f94465bd78d4114ec833a50e6131a185e->leave($__internal_a4b5e570b314f6933207fa216e16ff2f94465bd78d4114ec833a50e6131a185e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_cada1738918f9bed4fbb208ffb4244781a5ada9b059d6b5de9b4a3e8704c15d5 = $this->env->getExtension("native_profiler");
        $__internal_cada1738918f9bed4fbb208ffb4244781a5ada9b059d6b5de9b4a3e8704c15d5->enter($__internal_cada1738918f9bed4fbb208ffb4244781a5ada9b059d6b5de9b4a3e8704c15d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_cada1738918f9bed4fbb208ffb4244781a5ada9b059d6b5de9b4a3e8704c15d5->leave($__internal_cada1738918f9bed4fbb208ffb4244781a5ada9b059d6b5de9b4a3e8704c15d5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
