<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_a8e22e56456028eed3c28e27a3845b66381e15edda9e9ce4f008861db395ca6c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_f5200eab8cbc55c3236fa582c73e5fe93beb3d54a32452efb66c59e04d382ca5 = $this->env->getExtension("native_profiler");
        $__internal_f5200eab8cbc55c3236fa582c73e5fe93beb3d54a32452efb66c59e04d382ca5->enter($__internal_f5200eab8cbc55c3236fa582c73e5fe93beb3d54a32452efb66c59e04d382ca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f5200eab8cbc55c3236fa582c73e5fe93beb3d54a32452efb66c59e04d382ca5->leave($__internal_f5200eab8cbc55c3236fa582c73e5fe93beb3d54a32452efb66c59e04d382ca5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_eff8d6452559b694cbf7fc4992b8ad5205e348b7392b36bf0bcf39a43899a492 = $this->env->getExtension("native_profiler");
        $__internal_eff8d6452559b694cbf7fc4992b8ad5205e348b7392b36bf0bcf39a43899a492->enter($__internal_eff8d6452559b694cbf7fc4992b8ad5205e348b7392b36bf0bcf39a43899a492_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_eff8d6452559b694cbf7fc4992b8ad5205e348b7392b36bf0bcf39a43899a492->leave($__internal_eff8d6452559b694cbf7fc4992b8ad5205e348b7392b36bf0bcf39a43899a492_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4ddfb7e81fc1fb7f8b3b65b8184aa4e8724bb4dcef0a9093fd25c5edf200930e = $this->env->getExtension("native_profiler");
        $__internal_4ddfb7e81fc1fb7f8b3b65b8184aa4e8724bb4dcef0a9093fd25c5edf200930e->enter($__internal_4ddfb7e81fc1fb7f8b3b65b8184aa4e8724bb4dcef0a9093fd25c5edf200930e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4ddfb7e81fc1fb7f8b3b65b8184aa4e8724bb4dcef0a9093fd25c5edf200930e->leave($__internal_4ddfb7e81fc1fb7f8b3b65b8184aa4e8724bb4dcef0a9093fd25c5edf200930e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a734becbd8e8ebcb7ca0fa2edc76e083d506d5499cca6e27e6c65782989053ca = $this->env->getExtension("native_profiler");
        $__internal_a734becbd8e8ebcb7ca0fa2edc76e083d506d5499cca6e27e6c65782989053ca->enter($__internal_a734becbd8e8ebcb7ca0fa2edc76e083d506d5499cca6e27e6c65782989053ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_a734becbd8e8ebcb7ca0fa2edc76e083d506d5499cca6e27e6c65782989053ca->leave($__internal_a734becbd8e8ebcb7ca0fa2edc76e083d506d5499cca6e27e6c65782989053ca_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
