<?php

/* base.html.twig */
class __TwigTemplate_fc41b7c2402f0ccee47797c1c9f2fdcf5fe1826cccd99f35a23132d3a4e3c8e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5d70416506fd95988e28c72aa1436206e18c95393397150013a664c830e8ff20 = $this->env->getExtension("native_profiler");
        $__internal_5d70416506fd95988e28c72aa1436206e18c95393397150013a664c830e8ff20->enter($__internal_5d70416506fd95988e28c72aa1436206e18c95393397150013a664c830e8ff20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 21
        $this->displayBlock('body', $context, $blocks);
        // line 22
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 27
        echo "    </body>
</html>
";
        
        $__internal_5d70416506fd95988e28c72aa1436206e18c95393397150013a664c830e8ff20->leave($__internal_5d70416506fd95988e28c72aa1436206e18c95393397150013a664c830e8ff20_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_414f3b76863cb30091746eaf272a92a218e17565bdde85c4eb886fedfb008460 = $this->env->getExtension("native_profiler");
        $__internal_414f3b76863cb30091746eaf272a92a218e17565bdde85c4eb886fedfb008460->enter($__internal_414f3b76863cb30091746eaf272a92a218e17565bdde85c4eb886fedfb008460_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_414f3b76863cb30091746eaf272a92a218e17565bdde85c4eb886fedfb008460->leave($__internal_414f3b76863cb30091746eaf272a92a218e17565bdde85c4eb886fedfb008460_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a3d8cd374e50382ff679254009178b49a2e03d4d06bb726e14d00c52072ca1cc = $this->env->getExtension("native_profiler");
        $__internal_a3d8cd374e50382ff679254009178b49a2e03d4d06bb726e14d00c52072ca1cc->enter($__internal_a3d8cd374e50382ff679254009178b49a2e03d4d06bb726e14d00c52072ca1cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
            <link href=\"//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css\" rel=\"stylesheet\">
            <!--[if lt IE 9]>
            <script src=\"//html5shim.googlecode.com/svn/trunk/html5.js\"></script>
            <![endif]-->
            <link rel=\"apple-touch-icon\" href=\"/bootstrap/img/apple-touch-icon.png\">
            <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"/bootstrap/img/apple-touch-icon-72x72.png\">
            <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"/bootstrap/img/apple-touch-icon-114x114.png\">
            <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/css/theme.css"), "html", null, true);
        echo "\"       rel=\"stylesheet\">
            <link href='https://fonts.googleapis.com/css?family=Gentium+Basic:400italic&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        ";
        
        $__internal_a3d8cd374e50382ff679254009178b49a2e03d4d06bb726e14d00c52072ca1cc->leave($__internal_a3d8cd374e50382ff679254009178b49a2e03d4d06bb726e14d00c52072ca1cc_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_c4259250d5b76b5fefb707fd0a49f3e672bf05789210295d0608c3cf2da7c234 = $this->env->getExtension("native_profiler");
        $__internal_c4259250d5b76b5fefb707fd0a49f3e672bf05789210295d0608c3cf2da7c234->enter($__internal_c4259250d5b76b5fefb707fd0a49f3e672bf05789210295d0608c3cf2da7c234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c4259250d5b76b5fefb707fd0a49f3e672bf05789210295d0608c3cf2da7c234->leave($__internal_c4259250d5b76b5fefb707fd0a49f3e672bf05789210295d0608c3cf2da7c234_prof);

    }

    // line 22
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1051cc7cdd4393239b4bbe7786ec037f549eefaf127e9bfc9879154bd5a6db3f = $this->env->getExtension("native_profiler");
        $__internal_1051cc7cdd4393239b4bbe7786ec037f549eefaf127e9bfc9879154bd5a6db3f->enter($__internal_1051cc7cdd4393239b4bbe7786ec037f549eefaf127e9bfc9879154bd5a6db3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 23
        echo "            <script type='text/javascript' src=\"//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js\"></script>
            <script type='text/javascript' src=\"//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js\"></script>

        ";
        
        $__internal_1051cc7cdd4393239b4bbe7786ec037f549eefaf127e9bfc9879154bd5a6db3f->leave($__internal_1051cc7cdd4393239b4bbe7786ec037f549eefaf127e9bfc9879154bd5a6db3f_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 23,  108 => 22,  97 => 21,  87 => 15,  77 => 7,  71 => 6,  59 => 5,  50 => 27,  47 => 22,  45 => 21,  38 => 18,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*             <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">*/
/*             <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">*/
/*             <!--[if lt IE 9]>*/
/*             <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>*/
/*             <![endif]-->*/
/*             <link rel="apple-touch-icon" href="/bootstrap/img/apple-touch-icon.png">*/
/*             <link rel="apple-touch-icon" sizes="72x72" href="/bootstrap/img/apple-touch-icon-72x72.png">*/
/*             <link rel="apple-touch-icon" sizes="114x114" href="/bootstrap/img/apple-touch-icon-114x114.png">*/
/*             <link href="{{ asset('bundles/app/css/theme.css') }}"       rel="stylesheet">*/
/*             <link href='https://fonts.googleapis.com/css?family=Gentium+Basic:400italic&subset=latin,latin-ext' rel='stylesheet' type='text/css'>*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}*/
/*             <script type='text/javascript' src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>*/
/*             <script type='text/javascript' src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>*/
/* */
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
