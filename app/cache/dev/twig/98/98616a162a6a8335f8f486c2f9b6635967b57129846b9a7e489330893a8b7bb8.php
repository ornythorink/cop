<?php

/* CopCommonBundle:Default:navbar.html.twig */
class __TwigTemplate_3b67f0cb8ec16b6846b3e2c400fac451a01110481b7c228827c1ec719395ad78 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'text_widget' => array($this, 'block_text_widget'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_75cc940eb1d308eb3aa9a4adc5c601ad8d48d31c5505659f3b58f8d58d123dee = $this->env->getExtension("native_profiler");
        $__internal_75cc940eb1d308eb3aa9a4adc5c601ad8d48d31c5505659f3b58f8d58d123dee->enter($__internal_75cc940eb1d308eb3aa9a4adc5c601ad8d48d31c5505659f3b58f8d58d123dee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CopCommonBundle:Default:navbar.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-default navbar-fixed-top\" role=\"navigation\">
    <div class=\"navbar-header\">
        <a class=\"navbar-brand\" rel=\"home\" href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()), "html", null, true);
        echo "\">
            <img class=\"img-responsive\"  src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/img/logo.png"), "html", null, true);
        echo "\" />
        </a>
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
        </button>
    </div>
    <div class=\"collapse navbar-collapse\">
        <ul class=\"nav navbar-nav\">
            ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["key"] => $context["categorie"]) {
            // line 16
            echo "                <li class=\"dropdown\">
                    ";
            // line 17
            if ($this->getAttribute($context["categorie"], "parent", array(), "any", true, true)) {
                // line 18
                echo "                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["categorie"], "parent", array()), "nameCategorie", array()), "html", null, true);
                echo " <b class=\"caret\"></b></a>
                    ";
            }
            // line 20
            echo "                    <ul class=\"dropdown-menu\">
                        ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["categorie"]);
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 22
                echo "                            ";
                if (($this->getAttribute($context["item"], "idparent", array()) != 0)) {
                    // line 23
                    echo "                                <li>
                                    <a href=\"#\" >";
                    // line 24
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nameCategorie", array()), "html", null, true);
                    echo " </a>
                                </li>
                            ";
                }
                // line 27
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "                    </ul>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </ul>
        <div class=\"col-sm-3 col-md-3 pull-right\">
            <form method=\"POST\" class=\"navbar-form\" action=\"#\" role=\"search\">
                <div class=\"input-group\">
                    ";
        // line 35
        $this->displayBlock('text_widget', $context, $blocks);
        // line 39
        echo "                    ";
        $this->displayBlock('content', $context, $blocks);
        // line 42
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                    <div class=\"input-group-btn\">
                        <button class=\"btn btn-default\" type=\"submit\"><i class=\"glyphicon glyphicon-search\"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</nav>";
        
        $__internal_75cc940eb1d308eb3aa9a4adc5c601ad8d48d31c5505659f3b58f8d58d123dee->leave($__internal_75cc940eb1d308eb3aa9a4adc5c601ad8d48d31c5505659f3b58f8d58d123dee_prof);

    }

    // line 35
    public function block_text_widget($context, array $blocks = array())
    {
        $__internal_83a527b38871304d1911ed0c0b6b461db194015c4588e52c5b34d1e509336ebf = $this->env->getExtension("native_profiler");
        $__internal_83a527b38871304d1911ed0c0b6b461db194015c4588e52c5b34d1e509336ebf->enter($__internal_83a527b38871304d1911ed0c0b6b461db194015c4588e52c5b34d1e509336ebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "text_widget"));

        // line 36
        echo "                        ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "number")) : ("number"));
        // line 37
        echo "                        ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
                    ";
        
        $__internal_83a527b38871304d1911ed0c0b6b461db194015c4588e52c5b34d1e509336ebf->leave($__internal_83a527b38871304d1911ed0c0b6b461db194015c4588e52c5b34d1e509336ebf_prof);

    }

    // line 39
    public function block_content($context, array $blocks = array())
    {
        $__internal_7c942f8b8dfd626daaae0410c77da4a7152a4eba104283001c4eb4176717d69f = $this->env->getExtension("native_profiler");
        $__internal_7c942f8b8dfd626daaae0410c77da4a7152a4eba104283001c4eb4176717d69f->enter($__internal_7c942f8b8dfd626daaae0410c77da4a7152a4eba104283001c4eb4176717d69f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 40
        echo "                        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "query", array()), 'widget');
        echo "
                    ";
        
        $__internal_7c942f8b8dfd626daaae0410c77da4a7152a4eba104283001c4eb4176717d69f->leave($__internal_7c942f8b8dfd626daaae0410c77da4a7152a4eba104283001c4eb4176717d69f_prof);

    }

    public function getTemplateName()
    {
        return "CopCommonBundle:Default:navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 40,  141 => 39,  131 => 37,  128 => 36,  122 => 35,  105 => 42,  102 => 39,  100 => 35,  94 => 31,  86 => 28,  80 => 27,  74 => 24,  71 => 23,  68 => 22,  64 => 21,  61 => 20,  55 => 18,  53 => 17,  50 => 16,  46 => 15,  32 => 4,  28 => 3,  24 => 1,);
    }
}
/* <nav class="navbar navbar-default navbar-fixed-top" role="navigation">*/
/*     <div class="navbar-header">*/
/*         <a class="navbar-brand" rel="home" href="{{ app.request.schemeAndHttpHost }}">*/
/*             <img class="img-responsive"  src="{{ asset('bundles/app/img/logo.png') }}" />*/
/*         </a>*/
/*         <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">*/
/*             <span class="sr-only">Toggle navigation</span>*/
/*             <span class="icon-bar"></span>*/
/*             <span class="icon-bar"></span>*/
/*             <span class="icon-bar"></span>*/
/*         </button>*/
/*     </div>*/
/*     <div class="collapse navbar-collapse">*/
/*         <ul class="nav navbar-nav">*/
/*             {% for key, categorie in categories %}*/
/*                 <li class="dropdown">*/
/*                     {% if categorie.parent is defined %}*/
/*                         <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ categorie.parent.nameCategorie }} <b class="caret"></b></a>*/
/*                     {% endif %}*/
/*                     <ul class="dropdown-menu">*/
/*                         {% for item in categorie %}*/
/*                             {% if  item.idparent != 0 %}*/
/*                                 <li>*/
/*                                     <a href="#" >{{ item.nameCategorie }} </a>*/
/*                                 </li>*/
/*                             {% endif %}*/
/*                         {% endfor %}*/
/*                     </ul>*/
/*                 </li>*/
/*             {% endfor %}*/
/*         </ul>*/
/*         <div class="col-sm-3 col-md-3 pull-right">*/
/*             <form method="POST" class="navbar-form" action="#" role="search">*/
/*                 <div class="input-group">*/
/*                     {% block text_widget %}*/
/*                         {% set type = type|default('number') %}*/
/*                         {{ block('form_widget_simple') }}*/
/*                     {% endblock %}*/
/*                     {% block content %}*/
/*                         {{ form_widget(form.query) }}*/
/*                     {% endblock %}*/
/*                     {{ form_rest(form) }}*/
/*                     <div class="input-group-btn">*/
/*                         <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>*/
/*                     </div>*/
/*                 </div>*/
/*             </form>*/
/*         </div>*/
/*     </div>*/
/* </nav>*/
