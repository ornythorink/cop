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
        $__internal_1c78b343d2de7ee234c11f0e0a14d54a4e43612ce3f48085ae6c5b05e77219ed = $this->env->getExtension("native_profiler");
        $__internal_1c78b343d2de7ee234c11f0e0a14d54a4e43612ce3f48085ae6c5b05e77219ed->enter($__internal_1c78b343d2de7ee234c11f0e0a14d54a4e43612ce3f48085ae6c5b05e77219ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_1c78b343d2de7ee234c11f0e0a14d54a4e43612ce3f48085ae6c5b05e77219ed->leave($__internal_1c78b343d2de7ee234c11f0e0a14d54a4e43612ce3f48085ae6c5b05e77219ed_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_69c2d72ed9dd43e6ba075dc47e3a9096608b371d089b6b25f707dce2d4bc33b2 = $this->env->getExtension("native_profiler");
        $__internal_69c2d72ed9dd43e6ba075dc47e3a9096608b371d089b6b25f707dce2d4bc33b2->enter($__internal_69c2d72ed9dd43e6ba075dc47e3a9096608b371d089b6b25f707dce2d4bc33b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_69c2d72ed9dd43e6ba075dc47e3a9096608b371d089b6b25f707dce2d4bc33b2->leave($__internal_69c2d72ed9dd43e6ba075dc47e3a9096608b371d089b6b25f707dce2d4bc33b2_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9e8a91fd8c1611324a1afba0d99e16b5940720e5861b5d6742914ddc6981e5b7 = $this->env->getExtension("native_profiler");
        $__internal_9e8a91fd8c1611324a1afba0d99e16b5940720e5861b5d6742914ddc6981e5b7->enter($__internal_9e8a91fd8c1611324a1afba0d99e16b5940720e5861b5d6742914ddc6981e5b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_9e8a91fd8c1611324a1afba0d99e16b5940720e5861b5d6742914ddc6981e5b7->leave($__internal_9e8a91fd8c1611324a1afba0d99e16b5940720e5861b5d6742914ddc6981e5b7_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_6c2c45837d38faa54c73f3ba66f922f18118191ffdce473c9baf0a9d174776e7 = $this->env->getExtension("native_profiler");
        $__internal_6c2c45837d38faa54c73f3ba66f922f18118191ffdce473c9baf0a9d174776e7->enter($__internal_6c2c45837d38faa54c73f3ba66f922f18118191ffdce473c9baf0a9d174776e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6c2c45837d38faa54c73f3ba66f922f18118191ffdce473c9baf0a9d174776e7->leave($__internal_6c2c45837d38faa54c73f3ba66f922f18118191ffdce473c9baf0a9d174776e7_prof);

    }

    // line 22
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d865627d16e4be56ed0697e7d4fff12b93501c8d795cdbe3290e6d4bf81fa93e = $this->env->getExtension("native_profiler");
        $__internal_d865627d16e4be56ed0697e7d4fff12b93501c8d795cdbe3290e6d4bf81fa93e->enter($__internal_d865627d16e4be56ed0697e7d4fff12b93501c8d795cdbe3290e6d4bf81fa93e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 23
        echo "            <script type='text/javascript' src=\"//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js\"></script>
            <script type='text/javascript' src=\"//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js\"></script>

        ";
        
        $__internal_d865627d16e4be56ed0697e7d4fff12b93501c8d795cdbe3290e6d4bf81fa93e->leave($__internal_d865627d16e4be56ed0697e7d4fff12b93501c8d795cdbe3290e6d4bf81fa93e_prof);

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
