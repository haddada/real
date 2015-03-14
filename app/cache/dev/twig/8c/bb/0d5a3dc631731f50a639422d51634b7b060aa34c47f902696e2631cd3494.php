<?php

/* realEstateBundle:Default:index.html.twig */
class __TwigTemplate_8cbb0d5a3dc631731f50a639422d51634b7b060aa34c47f902696e2631cd3494 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
<head>

    <title>Bootstrap 101 Template</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <!-- Bootstrap -->
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">

    <!-- HTML5 Shim and Respond.js add IE8 support of HTML5 elements and media queries -->
    ";
        // line 11
        $this->env->loadTemplate("BraincraftedBootstrapBundle::ie8-support.html.twig")->display($context);
        // line 12
        echo "
</head>

<body>
<nav class=\"navbar navbar-default\" role=\"navigation\">
 <div class=\"navbar-header\">
        <button type=\"button\" class=\"navbar-toggle\"
                data-toggle=\"collapse\" data-target=\".navbar-ex1-collapse\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
        </button>
        <a class=\"navbar-brand\" href=\"#\">Brand</a>
    </div>
</nav>

<p>
  <button type=\"button\" class=\"btn btn-primary btn-lg\">Large button</button>
  <button type=\"button\" class=\"btn btn-default btn-lg\">Large button</button>
</p>
    <h1>Hello, world!</h1>
    ";
        // line 34
        echo $this->env->getExtension('braincrafted_bootstrap_label')->labelSuccessFunction("Success");
        echo "
\t";
        // line 35
        echo $this->env->getExtension('braincrafted_bootstrap_label')->labelPrimaryFunction("Primary");
        echo "
\t";
        // line 36
        echo $this->env->getExtension('braincrafted_bootstrap_label')->labelInfoFunction("Info");
        echo "
\t";
        // line 37
        echo $this->env->getExtension('braincrafted_bootstrap_label')->labelWarningFunction("Warning");
        echo "
\t";
        // line 38
        echo $this->env->getExtension('braincrafted_bootstrap_label')->labelDangerFunction("danger");
        echo "

    <!-- jQuery (necessary for Bootstraps JavaScript plugins) -->
    <script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
    <!-- Include all JavaScripts, compiled by Assetic -->
    <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "realEstateBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 43,  82 => 41,  76 => 38,  72 => 37,  68 => 36,  64 => 35,  60 => 34,  36 => 12,  34 => 11,  28 => 8,  19 => 1,);
    }
}
