<?php

/* realEstateBundle:Offre:Filtres/Adresse.html.twig */
class __TwigTemplate_1f0598755154534b61a0f67bcf3c3cf52626b7396bd6456c45f31843c8c2adb4 extends Twig_Template
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
        echo "



<div class=\"row row-space-5 row-space-top-7 row-table\">

    <div class=\"col-3 text-right col-middle\">
            <div class=\"h4 text-light\">
                 Ajouter Votre Adresse
            </div>
    </div>

\t<div class=\"col-9 col-middle\" id=\"\">
\t\t<button class=\"btn btn-primary\" id=\"js-add-address\" data-toggle=\"modal\" data-target=\"#myModal\">
\t\t \t Adresse
\t\t</button>
\t</div>
</div>

<div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
        <h4 class=\"modal-title\" id=\"myModalLabel\">Modal title</h4>
      </div>
      <div class=\"modal-body\">
        ...
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
        <button type=\"button\" class=\"btn btn-primary\">Save changes</button>
      </div>
    </div>
  </div>
</div>

   <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
    <!-- Include all JavaScripts, compiled by Assetic -->
    <script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>";
    }

    public function getTemplateName()
    {
        return "realEstateBundle:Offre:Filtres/Adresse.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 40,  58 => 38,  19 => 1,);
    }
}
