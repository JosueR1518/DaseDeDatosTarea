<?php

/* base.html.twig */
class __TwigTemplate_750228b41105103e898bbe4f424d05517f2493affd82a74928c8b24764f6b7dd extends Twig_Template
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
        $__internal_8b0f52238882dc86f295743d8d41bd30fc901b6ad0bb0d2d170daf18cea00ec3 = $this->env->getExtension("native_profiler");
        $__internal_8b0f52238882dc86f295743d8d41bd30fc901b6ad0bb0d2d170daf18cea00ec3->enter($__internal_8b0f52238882dc86f295743d8d41bd30fc901b6ad0bb0d2d170daf18cea00ec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_8b0f52238882dc86f295743d8d41bd30fc901b6ad0bb0d2d170daf18cea00ec3->leave($__internal_8b0f52238882dc86f295743d8d41bd30fc901b6ad0bb0d2d170daf18cea00ec3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ec30cc01362550912f0b8b787cd33746c431a1319dd77387636f052df081cf6c = $this->env->getExtension("native_profiler");
        $__internal_ec30cc01362550912f0b8b787cd33746c431a1319dd77387636f052df081cf6c->enter($__internal_ec30cc01362550912f0b8b787cd33746c431a1319dd77387636f052df081cf6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_ec30cc01362550912f0b8b787cd33746c431a1319dd77387636f052df081cf6c->leave($__internal_ec30cc01362550912f0b8b787cd33746c431a1319dd77387636f052df081cf6c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_dc960a999a9b65165612a9715e31e917d3437c41f4068860a2107139aa960cf0 = $this->env->getExtension("native_profiler");
        $__internal_dc960a999a9b65165612a9715e31e917d3437c41f4068860a2107139aa960cf0->enter($__internal_dc960a999a9b65165612a9715e31e917d3437c41f4068860a2107139aa960cf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_dc960a999a9b65165612a9715e31e917d3437c41f4068860a2107139aa960cf0->leave($__internal_dc960a999a9b65165612a9715e31e917d3437c41f4068860a2107139aa960cf0_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_34327d8be0d6e6a70940af3c7537e167095ce35d2e9df5f6b9b87fca50f773b9 = $this->env->getExtension("native_profiler");
        $__internal_34327d8be0d6e6a70940af3c7537e167095ce35d2e9df5f6b9b87fca50f773b9->enter($__internal_34327d8be0d6e6a70940af3c7537e167095ce35d2e9df5f6b9b87fca50f773b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_34327d8be0d6e6a70940af3c7537e167095ce35d2e9df5f6b9b87fca50f773b9->leave($__internal_34327d8be0d6e6a70940af3c7537e167095ce35d2e9df5f6b9b87fca50f773b9_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a158f1c398cc7039fc4bd4a467606e1bc7bd5a23f1649fe608a7bcf483f525fb = $this->env->getExtension("native_profiler");
        $__internal_a158f1c398cc7039fc4bd4a467606e1bc7bd5a23f1649fe608a7bcf483f525fb->enter($__internal_a158f1c398cc7039fc4bd4a467606e1bc7bd5a23f1649fe608a7bcf483f525fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a158f1c398cc7039fc4bd4a467606e1bc7bd5a23f1649fe608a7bcf483f525fb->leave($__internal_a158f1c398cc7039fc4bd4a467606e1bc7bd5a23f1649fe608a7bcf483f525fb_prof);

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
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
