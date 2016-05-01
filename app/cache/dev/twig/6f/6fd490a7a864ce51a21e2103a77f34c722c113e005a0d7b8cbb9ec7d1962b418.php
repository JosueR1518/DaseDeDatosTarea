<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_249a56147aaa7e3ad816f6898b8b3318f53b4fa1ad142a00abe81bfe353bc8bf extends Twig_Template
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
        $__internal_804d3761c07eb3950915d49b557d4553138d51cea907194c51af5b86826de258 = $this->env->getExtension("native_profiler");
        $__internal_804d3761c07eb3950915d49b557d4553138d51cea907194c51af5b86826de258->enter($__internal_804d3761c07eb3950915d49b557d4553138d51cea907194c51af5b86826de258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_804d3761c07eb3950915d49b557d4553138d51cea907194c51af5b86826de258->leave($__internal_804d3761c07eb3950915d49b557d4553138d51cea907194c51af5b86826de258_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_269b5c73618f176e950514024a6bdff26452b286f02cd9541708bcba243089c1 = $this->env->getExtension("native_profiler");
        $__internal_269b5c73618f176e950514024a6bdff26452b286f02cd9541708bcba243089c1->enter($__internal_269b5c73618f176e950514024a6bdff26452b286f02cd9541708bcba243089c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_269b5c73618f176e950514024a6bdff26452b286f02cd9541708bcba243089c1->leave($__internal_269b5c73618f176e950514024a6bdff26452b286f02cd9541708bcba243089c1_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e5de70499df27adef2b743afb89bfb728c0cdeb23543edb675139a1653e23c5c = $this->env->getExtension("native_profiler");
        $__internal_e5de70499df27adef2b743afb89bfb728c0cdeb23543edb675139a1653e23c5c->enter($__internal_e5de70499df27adef2b743afb89bfb728c0cdeb23543edb675139a1653e23c5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e5de70499df27adef2b743afb89bfb728c0cdeb23543edb675139a1653e23c5c->leave($__internal_e5de70499df27adef2b743afb89bfb728c0cdeb23543edb675139a1653e23c5c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8a477222be98495686717d0ad65a79d9e5a044bcbf86d899c644203c410afea3 = $this->env->getExtension("native_profiler");
        $__internal_8a477222be98495686717d0ad65a79d9e5a044bcbf86d899c644203c410afea3->enter($__internal_8a477222be98495686717d0ad65a79d9e5a044bcbf86d899c644203c410afea3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_8a477222be98495686717d0ad65a79d9e5a044bcbf86d899c644203c410afea3->leave($__internal_8a477222be98495686717d0ad65a79d9e5a044bcbf86d899c644203c410afea3_prof);

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
