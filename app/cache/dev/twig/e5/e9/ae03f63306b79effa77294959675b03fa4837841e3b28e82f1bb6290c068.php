<?php

/* realEstateBundle:Offre:Filtres/Equipement.html.twig */
class __TwigTemplate_e5e9ae03f63306b79effa77294959675b03fa4837841e3b28e82f1bb6290c068 extends Twig_Template
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
<div class=\"col-lg-3 text-right filter-label \">
  <label class=\"h4 text-light\">Équipements</label>
</div>

<div class=\"col-lg-9 col-md-11 \">
  <div class=\"row filters-columns\">
    <div class=\"col-md-3\">
      <label class=\"media checkbox text-truncate\" title=\"Internet sans fil\">
        <input type=\"checkbox\" name=\"Ascenseur\" value=\"1\" class=\"pull-left\">
        Ascenseur
      </label>
    </div>
    <div class=\"col-md-3\">
      <label class=\"media checkbox text-truncate\" title=\"Télévision\">
        <input type=\"checkbox\" name=\"Cuisine\" value=\"1\" class=\"pull-left\">
        Cuisine équipée
      </label>
    </div>
    <div class=\"col-md-4\">
      <label class=\"media checkbox text-truncate\" title=\"Cuisine\">
        <input type=\"checkbox\" name=\"Jardin\" value=\"1\" class=\"pull-left\">
        Jardin
      </label>
    </div>

    <div class=\"col-md-3\">
      <label class=\"media checkbox text-truncate\" title=\"Accès handicapés\">
        <input type=\"checkbox\" name=\"Acces\" value=\"1\" class=\"pull-left\">
        Accès indépendant
      </label>
    </div>
    <div class=\"col-md-3\">
      <label class=\"media checkbox text-truncate\" title=\"Adapté aux événements\">
        <input type=\"checkbox\" name=\"Gaz\" value=\"1\" class=\"pull-left\">
        Gaz de ville
      </label>
    </div>
    <div class=\"col-md-4\">
      <label class=\"media checkbox text-truncate\" title=\"Animaux acceptés\">
        <input type=\"checkbox\" name=\"Chauffage\" value=\"1\" class=\"pull-left\">
        Chauffage
      </label>
    </div>
    <div class=\"col-md-3\">
      <label class=\"media checkbox text-truncate\" title=\"Ascenseur\">
        <input type=\"checkbox\" name=\"Meuble\" value=\"1\" class=\"pull-left\">
        Meublé
      </label>
    </div>
    <div class=\"col-md-3\">
      <label class=\"media checkbox text-truncate\" title=\"Chauffage\">
        <input type=\"checkbox\" name=\"Climatise\" value=\"1\" class=\"pull-left\">
        Climatisation
      </label>
    </div>

</div>  
</div
";
    }

    public function getTemplateName()
    {
        return "realEstateBundle:Offre:Filtres/Equipement.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
