<?php

/* privilegiorol/index.html.twig */
class __TwigTemplate_bcdefdcedca463b5dfa22e049f1b97187810f4a9c072bbe355d3d6e1fbefb44b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "privilegiorol/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_30b537f3df2034ae1b97b20ccef285b042efdf0123a5b136f9455f5a7de56100 = $this->env->getExtension("native_profiler");
        $__internal_30b537f3df2034ae1b97b20ccef285b042efdf0123a5b136f9455f5a7de56100->enter($__internal_30b537f3df2034ae1b97b20ccef285b042efdf0123a5b136f9455f5a7de56100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "privilegiorol/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30b537f3df2034ae1b97b20ccef285b042efdf0123a5b136f9455f5a7de56100->leave($__internal_30b537f3df2034ae1b97b20ccef285b042efdf0123a5b136f9455f5a7de56100_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_677e959753c742fdfde695aecc66f6855fbf36e12f52665983c1be32c633ff27 = $this->env->getExtension("native_profiler");
        $__internal_677e959753c742fdfde695aecc66f6855fbf36e12f52665983c1be32c633ff27->enter($__internal_677e959753c742fdfde695aecc66f6855fbf36e12f52665983c1be32c633ff27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Privilegiorol list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["privilegiorols"]) ? $context["privilegiorols"] : $this->getContext($context, "privilegiorols")));
        foreach ($context['_seq'] as $context["_key"] => $context["privilegiorol"]) {
            // line 15
            echo "            <tr>
                <td><a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("privilegiorol_show", array("id" => $this->getAttribute($context["privilegiorol"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["privilegiorol"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("privilegiorol_show", array("id" => $this->getAttribute($context["privilegiorol"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['privilegiorol'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "        </tbody>
    </table>

    
";
        
        $__internal_677e959753c742fdfde695aecc66f6855fbf36e12f52665983c1be32c633ff27->leave($__internal_677e959753c742fdfde695aecc66f6855fbf36e12f52665983c1be32c633ff27_prof);

    }

    public function getTemplateName()
    {
        return "privilegiorol/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 26,  68 => 20,  59 => 16,  56 => 15,  52 => 14,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Privilegiorol list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for privilegiorol in privilegiorols %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('privilegiorol_show', { 'id': privilegiorol.id }) }}">{{ privilegiorol.id }}</a></td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('privilegiorol_show', { 'id': privilegiorol.id }) }}">show</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     */
/* {% endblock %}*/
/* */
