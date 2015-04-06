<?php

/* realEstateBundle:Offre:err.html.twig */
class __TwigTemplate_032755155f997820cad38439945d3a1eb9c756d9828b6b21203ca6baa09ff0e4 extends Twig_Template
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
        echo twig_escape_filter($this->env, (isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")), "html", null, true);
    }

    public function getTemplateName()
    {
        return "realEstateBundle:Offre:err.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
