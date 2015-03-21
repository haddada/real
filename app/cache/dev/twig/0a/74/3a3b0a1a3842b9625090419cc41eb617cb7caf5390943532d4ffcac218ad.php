<?php

/* realEstateBundle:Default:offreCard.html.twig */
class __TwigTemplate_0a743a3b0a1a3842b9625090419cc41eb617cb7caf5390943532d4ffcac218ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("realEstateBundle:Default:header.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'offreCard' => array($this, 'block_offreCard'),
            'offreCard8' => array($this, 'block_offreCard8'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "realEstateBundle:Default:header.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_offreCard($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 5
            echo "    <div class=\"col-lg-4 col-md-6 col-sm-12 rm-padding-sm \">
      <div class=\"discovery-card rm-padding-sm row-space-4 darken-on-hover \" style=\"background-image:url('https://a0.muscache.com/ic/pictures/discovery/attribute_photos/beach_1x1.jpg?interpolation=lanczos-none&amp;output-format=jpg&amp;output-quality=70&amp;size=large_cover&amp;downsize=326px:326px&amp;v=6');\" sm-img-url=\"https://a0.muscache.com/ic/pictures/discovery/attribute_photos/beach_2x1.jpg?interpolation=lanczos-none&amp;output-format=jpg&amp;output-quality=70&amp;size=large_cover&amp;downsize=655px:326px&amp;v=6\">
    <a href=\"/s/Hawaii--United-States?source=ds\" class=\"link-reset\" data-hook=\"discovery-card\" data-id=\"\">
    <div class=\"va-container va-container-v va-container-h\">
      <div class=\"va-middle text-center text-contrast\">
          <div class=\"h2 strong\">
            Séjour au soleil à Hawaï
          </div>
      </div>
    </div>
    </a>
</div>
</div>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "




";
    }

    // line 27
    public function block_offreCard8($context, array $blocks = array())
    {
        // line 28
        echo "
  <div class=\"col-lg-8 col-md-12 rm-padding-sm\">
    <div class=\"discovery-card rm-padding-sm row-space-4 darken-on-hover \" style=\"background-image:url('https://a1.muscache.com/ic/discover/85?interpolation=lanczos-none&amp;output-format=jpg&amp;output-quality=70&amp;v=33b4f2&amp;downsize=655px:326px');\" sm-img-url=\"https://a1.muscache.com/ic/discover/85?interpolation=lanczos-none&amp;output-format=jpg&amp;output-quality=70&amp;v=33b4f2&amp;downsize=655px:326px\">
    <a href=\"/s/New-York--NY?source=ds\" class=\"link-reset\" data-hook=\"discovery-card\" data-id=\"New York\">
    <div class=\"va-container va-container-v va-container-h\">
      <div class=\"va-middle text-center text-contrast\">
          <div class=\"h2 strong\">
            New York
          </div>
      </div>
    </div>
    </a>
</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "realEstateBundle:Default:offreCard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 28,  74 => 27,  65 => 20,  45 => 5,  40 => 4,  37 => 3,  11 => 1,);
    }
}
