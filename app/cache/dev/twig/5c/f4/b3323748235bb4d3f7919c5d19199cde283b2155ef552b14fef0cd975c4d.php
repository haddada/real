<?php

/* sprint2RealEstateAdminBundle:Default:index1.html.twig */
class __TwigTemplate_5cf4b3323748235bb4d3f7919c5d19199cde283b2155ef552b14fef0cd975c4d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ( !array_key_exists("status", $context)) {
            // line 2
            echo "            <div class=\"row-fluid\">
                <div class=\"fileupload fileupload-new\" data-provides=\"fileupload\">
                    <div class=\"input-append\">
                        <form class=\"form\" method =\"POST\"  enctype=\"multipart/form-data\" action=\"";
            // line 5
            echo $this->env->getExtension('routing')->getPath("file_file_homepage");
            echo "\">
                            <h2 class=\"form-signin-heading\">Please Upload</h2>
                            <div class=\"uneditable-input span6\">
                                <i class=\"icon-file fileupload-exists\"></i> 
                                <span class=\"fileupload-preview\"></span>
                            </div>
                            <span class=\"btn btn-file\">
                                <span class=\"fileupload-new\">Select file</span>
                                <span class=\"fileupload-exists\">Change</span>
                                <input type=\"file\" name=\"img\"/>
                            </span>
                            <button class=\"btn btn-primary fileupload-exists\" type=\"submit\">Upload</button>
                        </form>
                    </div>
                </div>
            </div>
";
        } elseif ((        // line 21
(isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")) == "success")) {
            // line 22
            echo "   ";
            if (array_key_exists("uploadedURL", $context)) {
                // line 23
                echo "       <h1>";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((isset($context["uploadedURL"]) ? $context["uploadedURL"] : $this->getContext($context, "uploadedURL"))), "html", null, true);
                echo "</h1>
   ";
            }
        } else {
            // line 25
            echo " 
   ";
            // line 26
            if (array_key_exists("message", $context)) {
                // line 27
                echo "            <div class=\"alert alert-error\">
                <p>";
                // line 28
                echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
                echo "</p>
            </div>
   ";
            }
        }
    }

    public function getTemplateName()
    {
        return "sprint2RealEstateAdminBundle:Default:index1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 28,  62 => 27,  60 => 26,  57 => 25,  50 => 23,  47 => 22,  45 => 21,  26 => 5,  21 => 2,  19 => 1,);
    }
}
