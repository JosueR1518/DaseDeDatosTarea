<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_e5caff2a9f5046cded0bd2e1ad88381e0eec434f4ffd1ae1192a5681996fb567 extends Twig_Template
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
        $__internal_53eea28d53d1eba5cac548f55b8f33469063ccff4db0a99844c7d15bfe5e8d0a = $this->env->getExtension("native_profiler");
        $__internal_53eea28d53d1eba5cac548f55b8f33469063ccff4db0a99844c7d15bfe5e8d0a->enter($__internal_53eea28d53d1eba5cac548f55b8f33469063ccff4db0a99844c7d15bfe5e8d0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_53eea28d53d1eba5cac548f55b8f33469063ccff4db0a99844c7d15bfe5e8d0a->leave($__internal_53eea28d53d1eba5cac548f55b8f33469063ccff4db0a99844c7d15bfe5e8d0a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9b5c0d7fd1e5beccf335d9ddf159611c45b84064a2392f35639fae4af87d4e66 = $this->env->getExtension("native_profiler");
        $__internal_9b5c0d7fd1e5beccf335d9ddf159611c45b84064a2392f35639fae4af87d4e66->enter($__internal_9b5c0d7fd1e5beccf335d9ddf159611c45b84064a2392f35639fae4af87d4e66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9b5c0d7fd1e5beccf335d9ddf159611c45b84064a2392f35639fae4af87d4e66->leave($__internal_9b5c0d7fd1e5beccf335d9ddf159611c45b84064a2392f35639fae4af87d4e66_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2c3bfe8b25b52fb3cdf8dd4f0e720e8f4b030ba561a88640daeb7fd6a849a437 = $this->env->getExtension("native_profiler");
        $__internal_2c3bfe8b25b52fb3cdf8dd4f0e720e8f4b030ba561a88640daeb7fd6a849a437->enter($__internal_2c3bfe8b25b52fb3cdf8dd4f0e720e8f4b030ba561a88640daeb7fd6a849a437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2c3bfe8b25b52fb3cdf8dd4f0e720e8f4b030ba561a88640daeb7fd6a849a437->leave($__internal_2c3bfe8b25b52fb3cdf8dd4f0e720e8f4b030ba561a88640daeb7fd6a849a437_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_7a175b98c4fc80bf238f2f5adcca23e536c4498566e5cda51a7644393fd89070 = $this->env->getExtension("native_profiler");
        $__internal_7a175b98c4fc80bf238f2f5adcca23e536c4498566e5cda51a7644393fd89070->enter($__internal_7a175b98c4fc80bf238f2f5adcca23e536c4498566e5cda51a7644393fd89070_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_7a175b98c4fc80bf238f2f5adcca23e536c4498566e5cda51a7644393fd89070->leave($__internal_7a175b98c4fc80bf238f2f5adcca23e536c4498566e5cda51a7644393fd89070_prof);

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
