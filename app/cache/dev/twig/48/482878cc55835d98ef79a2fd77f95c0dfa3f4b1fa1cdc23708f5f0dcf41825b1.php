<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_8dc9572d48d304214ed034f20810858b77f97fc2f49399be7e7f209ad2304060 extends Twig_Template
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
        $__internal_6262a0cbd2f097e66e8a4d2df6b653e1f0f785da4c5270fcc86bb7343c21f406 = $this->env->getExtension("native_profiler");
        $__internal_6262a0cbd2f097e66e8a4d2df6b653e1f0f785da4c5270fcc86bb7343c21f406->enter($__internal_6262a0cbd2f097e66e8a4d2df6b653e1f0f785da4c5270fcc86bb7343c21f406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6262a0cbd2f097e66e8a4d2df6b653e1f0f785da4c5270fcc86bb7343c21f406->leave($__internal_6262a0cbd2f097e66e8a4d2df6b653e1f0f785da4c5270fcc86bb7343c21f406_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ae8aed57d38078deb6e1f7fe003d67bf3b25c99fb8dfddf01c6705fb6eb11e2f = $this->env->getExtension("native_profiler");
        $__internal_ae8aed57d38078deb6e1f7fe003d67bf3b25c99fb8dfddf01c6705fb6eb11e2f->enter($__internal_ae8aed57d38078deb6e1f7fe003d67bf3b25c99fb8dfddf01c6705fb6eb11e2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ae8aed57d38078deb6e1f7fe003d67bf3b25c99fb8dfddf01c6705fb6eb11e2f->leave($__internal_ae8aed57d38078deb6e1f7fe003d67bf3b25c99fb8dfddf01c6705fb6eb11e2f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_099c5d231188bfa9c46985afc51b14a67b0b61edbdfebfcf8562c226d87a1872 = $this->env->getExtension("native_profiler");
        $__internal_099c5d231188bfa9c46985afc51b14a67b0b61edbdfebfcf8562c226d87a1872->enter($__internal_099c5d231188bfa9c46985afc51b14a67b0b61edbdfebfcf8562c226d87a1872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_099c5d231188bfa9c46985afc51b14a67b0b61edbdfebfcf8562c226d87a1872->leave($__internal_099c5d231188bfa9c46985afc51b14a67b0b61edbdfebfcf8562c226d87a1872_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8c9d0098fbb6c3d52670caf3eceab2a5784cc183a2006dbc36982d4f500568ac = $this->env->getExtension("native_profiler");
        $__internal_8c9d0098fbb6c3d52670caf3eceab2a5784cc183a2006dbc36982d4f500568ac->enter($__internal_8c9d0098fbb6c3d52670caf3eceab2a5784cc183a2006dbc36982d4f500568ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8c9d0098fbb6c3d52670caf3eceab2a5784cc183a2006dbc36982d4f500568ac->leave($__internal_8c9d0098fbb6c3d52670caf3eceab2a5784cc183a2006dbc36982d4f500568ac_prof);

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
