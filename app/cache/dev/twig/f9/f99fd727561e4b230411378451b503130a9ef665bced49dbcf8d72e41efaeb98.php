<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_6c2c8579e902848611c8cda7a86e94e1d3e433772e25ad97296b362a2f954cac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e0fdc71f2c2f807582bc7c6126ad7436bbfd0c55c2249420b7d7fd64337d7a10 = $this->env->getExtension("native_profiler");
        $__internal_e0fdc71f2c2f807582bc7c6126ad7436bbfd0c55c2249420b7d7fd64337d7a10->enter($__internal_e0fdc71f2c2f807582bc7c6126ad7436bbfd0c55c2249420b7d7fd64337d7a10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0fdc71f2c2f807582bc7c6126ad7436bbfd0c55c2249420b7d7fd64337d7a10->leave($__internal_e0fdc71f2c2f807582bc7c6126ad7436bbfd0c55c2249420b7d7fd64337d7a10_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c3804053676b626827bcea7a33095588430e3ee1f2b249697cca8ab937154456 = $this->env->getExtension("native_profiler");
        $__internal_c3804053676b626827bcea7a33095588430e3ee1f2b249697cca8ab937154456->enter($__internal_c3804053676b626827bcea7a33095588430e3ee1f2b249697cca8ab937154456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c3804053676b626827bcea7a33095588430e3ee1f2b249697cca8ab937154456->leave($__internal_c3804053676b626827bcea7a33095588430e3ee1f2b249697cca8ab937154456_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a229b3e3cadb57acdee17c52b60ab3972a5c91fc72e85104dc780e801e53dd0b = $this->env->getExtension("native_profiler");
        $__internal_a229b3e3cadb57acdee17c52b60ab3972a5c91fc72e85104dc780e801e53dd0b->enter($__internal_a229b3e3cadb57acdee17c52b60ab3972a5c91fc72e85104dc780e801e53dd0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a229b3e3cadb57acdee17c52b60ab3972a5c91fc72e85104dc780e801e53dd0b->leave($__internal_a229b3e3cadb57acdee17c52b60ab3972a5c91fc72e85104dc780e801e53dd0b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b38214c58bef874015beb8887a47505147a2cbb73bb8bdde138913c050b26530 = $this->env->getExtension("native_profiler");
        $__internal_b38214c58bef874015beb8887a47505147a2cbb73bb8bdde138913c050b26530->enter($__internal_b38214c58bef874015beb8887a47505147a2cbb73bb8bdde138913c050b26530_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b38214c58bef874015beb8887a47505147a2cbb73bb8bdde138913c050b26530->leave($__internal_b38214c58bef874015beb8887a47505147a2cbb73bb8bdde138913c050b26530_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
