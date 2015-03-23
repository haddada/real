<?php

/* realEstateBundle:Offre:OffreCard.html.twig */
class __TwigTemplate_48995d83a2f5260287dd7099465a00bc1cdf980d9ebc6a9361e0bdb88c5ab495 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        try {
            $this->parent = $this->env->loadTemplate("realEstateBundle:Offre:index.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(2);

            throw $e;
        }

        $this->blocks = array(
            'card' => array($this, 'block_card'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "realEstateBundle:Offre:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_card($context, array $blocks = array())
    {
        // line 5
        echo "<div class=\"col-sm-12 col-md-6 row-space-2\">

";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 8
            echo "
  
      <div data-lat=\"40.684013166194646\"
           data-lng=\"-73.98322038869327\"
           data-name=\"Sun-filled room in Boerum Hill\"
           data-url=\"/rooms/4540756?guests=2&amp;s=eNQN\"
           data-user=\"1243559\"
           data-price=\"71&euro;\"
           class=\"listing\"
           itemscope itemtype=\"http://schema.org/Enumeration\">
      
        <div class=\"panel-image listing-img\">
          <a href=\"/rooms/4540756?guests=2&amp;s=eNQN\" target=\"listing_4540756\" class=\"media-photo media-cover\">
            <div class=\"listing-img-container media-cover text-center\">
                                                                  
                                                          
              <img itemprop=\"image\" data-current=\"0\" src=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "urlImage", array()), "html", null, true);
            echo "?interpolation=lanczos-none&amp;size=x_medium&amp;output-format=jpg&amp;output-quality=70\" class=\"img-responsive-height\" alt=\"Sun-filled room in Boerum Hill\"  >
            </div>
          </a>
      
      
          <div class=\"panel-overlay-bottom-left panel-overlay-label panel-overlay-listing-label\">
            <div>
              <sup class=\"h6 text-contrast\"></sup>
              <span class=\"h3 price-amount\">";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "payement", array()), "html", null, true);
            echo "</span>
              <sup class=\"h6 text-contrast\">&euro;</sup>
                <span class=\"h3 icon-beach\" data-behavior=\"tooltip\" title=\"Réserver instantanément\">
                  <i class=\"icon icon-instant-book icon-flush-sides\"></i>
                </span>
            </div>
      
          </div>
      
            
      
          <div class=\"panel-overlay-top-right wl-social-connection-panel\">
            <span class=\"rich-toggle wish_list_button wishlist-button\"
                  data-img=\"https://a0.muscache.com/ic/pictures/66670616/6a2e75e7_original.jpg?interpolation=lanczos-none&amp;size=x_medium&amp;output-format=jpg&amp;output-quality=70\"
                  data-name=\"Sun-filled room in Boerum Hill\"
                  data-address=\"Boerum Hill, Brooklyn\"
                  data-hosting_id=\"4540756\">
              <input type=\"checkbox\"
                     id=\"wishlist-widget-4540756\"
                     name=\"wishlist-widget-4540756\"
                     data-for-hosting=\"4540756\">
              <label for=\"wishlist-widget-4540756\" class=\"hide-sm\">
                <i class=\"icon icon-heart icon-rausch icon-size-2 rich-toggle-checked\"></i>
                <i class=\"icon icon-heart wishlist-heart-unchecked icon-size-2 rich-toggle-unchecked\"></i>
                <i class=\"icon icon-heart-alt icon-white icon-size-2\"></i>
              </label>
            </span>
      
      
          </div>
      
        </div>
      
        <div class=\"panel-body panel-card-section\">
          <div class=\"media\">
              <a href=\"/users/show/1243559\"
                 class=\"pull-right media-photo media-round card-profile-picture card-profile-picture-offset\">
                <img src=\"https://a2.muscache.com/ic/users/1243559/profile_pic/1417104530/original.jpg?interpolation=lanczos-none&amp;crop=w:w;*,*&amp;crop=h:h;*,*&amp;resize=68:*&amp;output-format=jpg&amp;output-quality=70\" alt=\"\">
              </a>
            <a href=\"/rooms/4540756?guests=2&amp;s=eNQN\" target=\"listing_4540756\" class=\"text-normal\">
              <div title=\"Sun-filled room in Boerum Hill\" class=\"h5 listing-name text-truncate row-space-top-1\">
                Sun-filled room in Boerum Hill
              </div>
            </a>
            <div class=\"text-muted listing-location text-truncate\"><a href=\"/rooms/4540756?guests=2&amp;s=eNQN\" class=\"text-normal link-reset\">
  Chambre privée &middot; 19 commentaires &middot; Boerum Hill, Brooklyn
</a>
</div>
          </div>
      
        </div>
      </div>
    
  
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "    

    </div>

    ";
    }

    public function getTemplateName()
    {
        return "realEstateBundle:Offre:OffreCard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 87,  76 => 32,  65 => 24,  47 => 8,  43 => 7,  39 => 5,  36 => 4,  11 => 2,);
    }
}
