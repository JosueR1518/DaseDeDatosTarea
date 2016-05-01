<?php

/* BadBundle:Default:blank.html.twig */
class __TwigTemplate_bdb1e493e98d31a1af5bad3efc0661e0d3f1f8129367166b510340d4a8d702f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b9c3feb70a3ce901c2a47f27dfa63ac715c53eddfb3a256bbaaab21c87015add = $this->env->getExtension("native_profiler");
        $__internal_b9c3feb70a3ce901c2a47f27dfa63ac715c53eddfb3a256bbaaab21c87015add->enter($__internal_b9c3feb70a3ce901c2a47f27dfa63ac715c53eddfb3a256bbaaab21c87015add_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BadBundle:Default:blank.html.twig"));

        // line 1
        echo "﻿<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
      <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    <title>SIGPERA</title>
\t<!-- BOOTSTRAP STYLES-->
     ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "  
   

</head>
<body>
    <div id=\"wrapper\">
        <nav class=\"navbar navbar-default navbar-cls-top \" role=\"navigation\" style=\"margin-bottom: 0\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".sidebar-collapse\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"index.html\">SIGPERA</a> 
            </div>
  <div style=\"color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <a href=\"login.html\" class=\"btn btn-danger square-btn-adjust\">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class=\"navbar-default navbar-side\" role=\"navigation\">
            <div class=\"sidebar-collapse\">
                <ul class=\"nav\" id=\"main-menu\">
\t\t\t\t<li class=\"text-center\">
                                    <link href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />  
                    <img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/images/find_userR.png"), "html", null, true);
        echo "\" class=\"user-image img-responsive\"/>
\t\t\t\t\t</li>
\t\t\t\t
\t\t\t\t\t
                    <li>
                        <a  href=\"index.html\"><i class=\"fa fa-dashboard fa-3x\"></i> OPCION1</a>
                    </li>
                      <li>
                        <a  href=\"ui.html\"><i class=\"fa fa-desktop fa-3x\"></i> OPCION2</a>
                    </li>
                    <li>
                        <a  href=\"tab-panel.html\"><i class=\"fa fa-qrcode fa-3x\"></i> OPCION3</a>
                    </li>
\t\t\t\t\t\t   <li  >
                        <a  href=\"chart.html\"><i class=\"fa fa-bar-chart-o fa-3x\"></i> OPCION4</a>
                    </li>\t
                      <li  >
                        <a  href=\"table.html\"><i class=\"fa fa-table fa-3x\"></i>OPCION5</a>
                    </li>
                    <li  >
                        <a  href=\"form.html\"><i class=\"fa fa-edit fa-3x\"></i> OPCION6 </a>
                    </li>\t\t\t\t
\t\t\t\t\t<li  >
                        <a   href=\"login.html\"><i class=\"fa fa-bolt fa-3x\"></i> OPCION7</a>
                    </li>\t
                     <li  >
                        <a   href=\"registeration.html\"><i class=\"fa fa-laptop fa-3x\"></i>OPCION8</a>
                    </li>\t
\t\t\t\t\t                   
                    <li>
                        <a href=\"#\"><i class=\"fa fa-sitemap fa-3x\"></i> OPCION9<span class=\"fa arrow\"></span></a>
                        <ul class=\"nav nav-second-level\">
                            <li>
                                <a href=\"#\">OPCION9.1</a>
                            </li>
                            <li>
                                <a href=\"#\">OPCION9.2</a>
                            </li>
                            <li>
                                <a href=\"#\">OPCION9.3<span class=\"fa arrow\"></span></a>
                                <ul class=\"nav nav-third-level\">
                                    <li>
                                        <a href=\"#\">OPCION9.3.1</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">OPCION9.3.2</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">OPCION9.3.3</a>
                                    </li>

                                </ul>
                               
                            </li>
                        </ul>
                      </li>  
                  <li  >
                        <a class=\"active-menu\"  href=\"blank.html\"><i class=\"fa fa-square-o fa-3x\"></i>OPCION10</a>
                    </li>\t
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id=\"page-wrapper\" >
        
            <div id=\"page-inner\">
               
               
             </div><!-- /. PAGE INNER  -->
                 
            
            </div>
         <!-- /. PAGE WRAPPER  -->
        
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    
    
    
    <!-- JQUERY SCRIPTS -->
    <script src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery-1.10.2.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script> 
    <!-- BOOTSTRAP SCRIPTS -->
    <script src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- METISMENU SCRIPTS -->
    <script src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery.metisMenu.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/custom.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
   
    
   
</body>
</html>
";
        
        $__internal_b9c3feb70a3ce901c2a47f27dfa63ac715c53eddfb3a256bbaaab21c87015add->leave($__internal_b9c3feb70a3ce901c2a47f27dfa63ac715c53eddfb3a256bbaaab21c87015add_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c733995f078d2bce57e349dac0ccbef9373293daf1794c4afc834cfe1211894f = $this->env->getExtension("native_profiler");
        $__internal_c733995f078d2bce57e349dac0ccbef9373293daf1794c4afc834cfe1211894f->enter($__internal_c733995f078d2bce57e349dac0ccbef9373293daf1794c4afc834cfe1211894f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "          <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
     <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />  
      <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/custom.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />  
     <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("http://fonts.googleapis.com/css?family=Open+Sans"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />  
     ";
        
        $__internal_c733995f078d2bce57e349dac0ccbef9373293daf1794c4afc834cfe1211894f->leave($__internal_c733995f078d2bce57e349dac0ccbef9373293daf1794c4afc834cfe1211894f_prof);

    }

    public function getTemplateName()
    {
        return "BadBundle:Default:blank.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 12,  196 => 11,  192 => 10,  187 => 9,  181 => 8,  167 => 129,  162 => 127,  157 => 125,  152 => 123,  66 => 40,  62 => 39,  34 => 13,  32 => 8,  23 => 1,);
    }
}
/* ﻿<!DOCTYPE html>*/
/* <html xmlns="http://www.w3.org/1999/xhtml">*/
/* <head>*/
/*       <meta charset="utf-8" />*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0" />*/
/*     <title>SIGPERA</title>*/
/* 	<!-- BOOTSTRAP STYLES-->*/
/*      {% block stylesheets %}*/
/*           <link href="{{ asset('public/css/bootstrap.css') }}" rel="stylesheet" type="text/css" />*/
/*      <link href="{{ asset('public/css/font-awesome.css') }}" rel="stylesheet" type="text/css" />  */
/*       <link href="{{ asset('public/css/custom.css') }}" rel="stylesheet" type="text/css" />  */
/*      <link href="{{ asset('http://fonts.googleapis.com/css?family=Open+Sans') }}" rel="stylesheet" type="text/css" />  */
/*      {% endblock %}  */
/*    */
/* */
/* </head>*/
/* <body>*/
/*     <div id="wrapper">*/
/*         <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">*/
/*             <div class="navbar-header">*/
/*                 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">*/
/*                     <span class="sr-only">Toggle navigation</span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                 </button>*/
/*                 <a class="navbar-brand" href="index.html">SIGPERA</a> */
/*             </div>*/
/*   <div style="color: white;*/
/* padding: 15px 50px 5px 50px;*/
/* float: right;*/
/* font-size: 16px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <a href="login.html" class="btn btn-danger square-btn-adjust">Logout</a> </div>*/
/*         </nav>   */
/*            <!-- /. NAV TOP  -->*/
/*                 <nav class="navbar-default navbar-side" role="navigation">*/
/*             <div class="sidebar-collapse">*/
/*                 <ul class="nav" id="main-menu">*/
/* 				<li class="text-center">*/
/*                                     <link href="{{ asset('public/css/font-awesome.css') }}" rel="stylesheet" type="text/css" />  */
/*                     <img src="{{ asset('public/images/find_userR.png') }}" class="user-image img-responsive"/>*/
/* 					</li>*/
/* 				*/
/* 					*/
/*                     <li>*/
/*                         <a  href="index.html"><i class="fa fa-dashboard fa-3x"></i> OPCION1</a>*/
/*                     </li>*/
/*                       <li>*/
/*                         <a  href="ui.html"><i class="fa fa-desktop fa-3x"></i> OPCION2</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a  href="tab-panel.html"><i class="fa fa-qrcode fa-3x"></i> OPCION3</a>*/
/*                     </li>*/
/* 						   <li  >*/
/*                         <a  href="chart.html"><i class="fa fa-bar-chart-o fa-3x"></i> OPCION4</a>*/
/*                     </li>	*/
/*                       <li  >*/
/*                         <a  href="table.html"><i class="fa fa-table fa-3x"></i>OPCION5</a>*/
/*                     </li>*/
/*                     <li  >*/
/*                         <a  href="form.html"><i class="fa fa-edit fa-3x"></i> OPCION6 </a>*/
/*                     </li>				*/
/* 					<li  >*/
/*                         <a   href="login.html"><i class="fa fa-bolt fa-3x"></i> OPCION7</a>*/
/*                     </li>	*/
/*                      <li  >*/
/*                         <a   href="registeration.html"><i class="fa fa-laptop fa-3x"></i>OPCION8</a>*/
/*                     </li>	*/
/* 					                   */
/*                     <li>*/
/*                         <a href="#"><i class="fa fa-sitemap fa-3x"></i> OPCION9<span class="fa arrow"></span></a>*/
/*                         <ul class="nav nav-second-level">*/
/*                             <li>*/
/*                                 <a href="#">OPCION9.1</a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="#">OPCION9.2</a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="#">OPCION9.3<span class="fa arrow"></span></a>*/
/*                                 <ul class="nav nav-third-level">*/
/*                                     <li>*/
/*                                         <a href="#">OPCION9.3.1</a>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <a href="#">OPCION9.3.2</a>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <a href="#">OPCION9.3.3</a>*/
/*                                     </li>*/
/* */
/*                                 </ul>*/
/*                                */
/*                             </li>*/
/*                         </ul>*/
/*                       </li>  */
/*                   <li  >*/
/*                         <a class="active-menu"  href="blank.html"><i class="fa fa-square-o fa-3x"></i>OPCION10</a>*/
/*                     </li>	*/
/*                 </ul>*/
/*                */
/*             </div>*/
/*             */
/*         </nav>  */
/*         <!-- /. NAV SIDE  -->*/
/*         <div id="page-wrapper" >*/
/*         */
/*             <div id="page-inner">*/
/*                */
/*                */
/*              </div><!-- /. PAGE INNER  -->*/
/*                  */
/*             */
/*             </div>*/
/*          <!-- /. PAGE WRAPPER  -->*/
/*         */
/*         </div>*/
/*      <!-- /. WRAPPER  -->*/
/*     <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->*/
/*     */
/*     */
/*     */
/*     <!-- JQUERY SCRIPTS -->*/
/*     <script src="{{ asset('public/js/jquery-1.10.2.js') }}" type="text/javascript"></script> */
/*     <!-- BOOTSTRAP SCRIPTS -->*/
/*     <script src="{{ asset('public/js/bootstrap.min.js') }}" type="text/javascript"></script>*/
/*     <!-- METISMENU SCRIPTS -->*/
/*     <script src="{{ asset('public/js/jquery.metisMenu.js') }}" type="text/javascript"></script>*/
/*     <!-- CUSTOM SCRIPTS -->*/
/*     <script src="{{ asset('public/js/custom.js') }}" type="text/javascript"></script>*/
/*    */
/*     */
/*    */
/* </body>*/
/* </html>*/
/* */
