<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_b5d9267bba5da8c2daa8153e2e6cc062161bedcb1bc3238ff03fe062acf2312b extends Twig_Template
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
        $__internal_1914b4ce0cffde4b80079156583a36ae866d23e5659704ae0f8fffa9abf2fc5b = $this->env->getExtension("native_profiler");
        $__internal_1914b4ce0cffde4b80079156583a36ae866d23e5659704ae0f8fffa9abf2fc5b->enter($__internal_1914b4ce0cffde4b80079156583a36ae866d23e5659704ae0f8fffa9abf2fc5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1914b4ce0cffde4b80079156583a36ae866d23e5659704ae0f8fffa9abf2fc5b->leave($__internal_1914b4ce0cffde4b80079156583a36ae866d23e5659704ae0f8fffa9abf2fc5b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_612d4fcd026a0d23bf5147edac33be4d8f1e68a110a9322839b8afab5d6d4c36 = $this->env->getExtension("native_profiler");
        $__internal_612d4fcd026a0d23bf5147edac33be4d8f1e68a110a9322839b8afab5d6d4c36->enter($__internal_612d4fcd026a0d23bf5147edac33be4d8f1e68a110a9322839b8afab5d6d4c36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_612d4fcd026a0d23bf5147edac33be4d8f1e68a110a9322839b8afab5d6d4c36->leave($__internal_612d4fcd026a0d23bf5147edac33be4d8f1e68a110a9322839b8afab5d6d4c36_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_885112d5c73ba458989b329eff273322d89b8c83b9c1e73d19b2be0f17bf8f89 = $this->env->getExtension("native_profiler");
        $__internal_885112d5c73ba458989b329eff273322d89b8c83b9c1e73d19b2be0f17bf8f89->enter($__internal_885112d5c73ba458989b329eff273322d89b8c83b9c1e73d19b2be0f17bf8f89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_885112d5c73ba458989b329eff273322d89b8c83b9c1e73d19b2be0f17bf8f89->leave($__internal_885112d5c73ba458989b329eff273322d89b8c83b9c1e73d19b2be0f17bf8f89_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7af06195309b79c9b8a7f6f4efb0f22f7cd0b86c77a74fd9549bb497127e2158 = $this->env->getExtension("native_profiler");
        $__internal_7af06195309b79c9b8a7f6f4efb0f22f7cd0b86c77a74fd9549bb497127e2158->enter($__internal_7af06195309b79c9b8a7f6f4efb0f22f7cd0b86c77a74fd9549bb497127e2158_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7af06195309b79c9b8a7f6f4efb0f22f7cd0b86c77a74fd9549bb497127e2158->leave($__internal_7af06195309b79c9b8a7f6f4efb0f22f7cd0b86c77a74fd9549bb497127e2158_prof);

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
