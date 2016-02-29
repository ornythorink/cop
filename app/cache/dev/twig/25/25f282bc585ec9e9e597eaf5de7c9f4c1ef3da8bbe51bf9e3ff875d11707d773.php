<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_a34f98ea28532e8720c9814273a9e063f3e033fb86cb609493d2b17bb92d783f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_71977569ad15c72965923013204321f59975a51b94a2fd0e7178ecb31e0f57c7 = $this->env->getExtension("native_profiler");
        $__internal_71977569ad15c72965923013204321f59975a51b94a2fd0e7178ecb31e0f57c7->enter($__internal_71977569ad15c72965923013204321f59975a51b94a2fd0e7178ecb31e0f57c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71977569ad15c72965923013204321f59975a51b94a2fd0e7178ecb31e0f57c7->leave($__internal_71977569ad15c72965923013204321f59975a51b94a2fd0e7178ecb31e0f57c7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9c73972792d8237ed66a57b15f54182f4ce5bb50c4d205d7ea9cbc9ac0c24172 = $this->env->getExtension("native_profiler");
        $__internal_9c73972792d8237ed66a57b15f54182f4ce5bb50c4d205d7ea9cbc9ac0c24172->enter($__internal_9c73972792d8237ed66a57b15f54182f4ce5bb50c4d205d7ea9cbc9ac0c24172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_9c73972792d8237ed66a57b15f54182f4ce5bb50c4d205d7ea9cbc9ac0c24172->leave($__internal_9c73972792d8237ed66a57b15f54182f4ce5bb50c4d205d7ea9cbc9ac0c24172_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d9ce21ad422ddba2049dc0781ab7cf5384e5e1a9913211f31adbec4188ba6b93 = $this->env->getExtension("native_profiler");
        $__internal_d9ce21ad422ddba2049dc0781ab7cf5384e5e1a9913211f31adbec4188ba6b93->enter($__internal_d9ce21ad422ddba2049dc0781ab7cf5384e5e1a9913211f31adbec4188ba6b93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_d9ce21ad422ddba2049dc0781ab7cf5384e5e1a9913211f31adbec4188ba6b93->leave($__internal_d9ce21ad422ddba2049dc0781ab7cf5384e5e1a9913211f31adbec4188ba6b93_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
