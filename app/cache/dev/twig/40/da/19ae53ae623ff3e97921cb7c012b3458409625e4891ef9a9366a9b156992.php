<?php

/* sprint2AuthandlogBundle:Default:connection.html.twig */
class __TwigTemplate_40da19ae53ae623ff3e97921cb7c012b3458409625e4891ef9a9366a9b156992 extends Twig_Template
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

  <meta charset=\"UTF-8\">

  <title>RealEstate - Connection</title>

    <style>
@import url(http://fonts.googleapis.com/css?family=Exo:100,200,400);
@import url(http://fonts.googleapis.com/css?family=Source+Sans+Pro:700,400,300);


</style>

    <script src=\"js/prefixfree.min.js\"></script>
\t<link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/logandauth/style.css"), "html", null, true);
        echo "\">
</head>

<body>

  <div class=\"body\"></div>
\t\t<div class=\"grad\"></div>
\t\t<div class=\"header\">
\t\t\t<div>Real<span>Estate</span></div>
\t\t</div>
\t\t<br>
\t\t<div class=\"login\" >
\t\t\t<form method=\"POST\">
\t\t\t\t<input type=\"email\" placeholder=\"e-mail\" name=\"mail\" id=\"mail\"><br>
\t\t\t\t<input type=\"password\" placeholder=\"mot de passe\" name=\"password\" id=\"password\"><br>
\t\t\t\t<input type=\"submit\" value=\"connection\">
\t\t\t</form>\t
\t\t</div>

  <script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script>

</body>

</html>";
    }

    public function getTemplateName()
    {
        return "sprint2AuthandlogBundle:Default:connection.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 18,  19 => 1,);
    }
}
