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
            'filterQuartier' => array($this, 'block_filterQuartier'),
            'formSearch' => array($this, 'block_formSearch'),
            'formChambre' => array($this, 'block_formChambre'),
            'formEtat' => array($this, 'block_formEtat'),
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
        echo "
";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 7
            echo "<div class=\"col-sm-12 col-md-6 row-space-2\">

  
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
            echo "?interpolation=lanczos-none&amp;size=x_medium&amp;output-format=jpg&amp;output-quality=70\" class=\"img-responsive-height\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "description", array()), "html", null, true);
            echo "\"  >
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
               
            </div>
      
          </div>
      
            
      
          <div class=\"panel-overlay-top-right wl-social-connection-panel\">
            <span class=\"rich-toggle wish_list_button wishlist-button\"
                  data-img=\"https://a0.muscache.com/ic/pictures/66670616/6a2e75e7_original.jpg?interpolation=lanczos-none&amp;size=x_medium&amp;output-format=jpg&amp;output-quality=70\"
                  data-name=\"Sun-filled room in ";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "Adresse", array()), "ville", array()), "html", null, true);
            echo "\"
                  data-address=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "Adresse", array()), "ville", array()), "html", null, true);
            echo "\"
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
              <div title=\"Sun-filled room in ";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "Adresse", array()), "ville", array()), "html", null, true);
            echo "\" class=\"h5 listing-name text-truncate row-space-top-1\">
                Sun-filled room in ";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "Adresse", array()), "ville", array()), "html", null, true);
            echo "
              </div>
            </a>
            <div class=\"text-muted listing-location text-truncate\"><a href=\"/rooms/4540756?guests=2&amp;s=eNQN\" class=\"text-normal link-reset\">
  ";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "description", array()), "html", null, true);
            echo "
</a>
</div>
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

    ";
    }

    // line 93
    public function block_filterQuartier($context, array $blocks = array())
    {
        // line 94
        echo "
    <div class=\"row\">
            <div class=\"col-lg-2 col-md-12 filter-label\">
              <label>Villes</label>
            </div>
            <div class=\"col-lg-9 col-md-11\">
            <div class=\"row row-condensed filters-columns\">



          <div class=\"col-md-4\">
            <label class=\"media checkbox text-truncate\" title=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["villes"]) ? $context["villes"] : $this->getContext($context, "villes")), 0, array(), "array"), "ville", array()), "html", null, true);
        echo "\">
              <input type=\"checkbox\" name=\"neighborhood\" value=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["villes"]) ? $context["villes"] : $this->getContext($context, "villes")), 0, array(), "array"), "ville", array()), "html", null, true);
        echo "\" class=\"pull-left\">
              ";
        // line 107
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["villes"]) ? $context["villes"] : $this->getContext($context, "villes")), 0, array(), "array"), "ville", array()), "html", null, true);
        echo "
            </label>
          </div>

          <div class=\"col-md-4\">
            <label class=\"media checkbox text-truncate\" title=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["villes"]) ? $context["villes"] : $this->getContext($context, "villes")), 1, array(), "array"), "ville", array()), "html", null, true);
        echo "\">
              <input type=\"checkbox\" name=\"neighborhood\" value=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["villes"]) ? $context["villes"] : $this->getContext($context, "villes")), 1, array(), "array"), "ville", array()), "html", null, true);
        echo "\" class=\"pull-left\">
              ";
        // line 114
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["villes"]) ? $context["villes"] : $this->getContext($context, "villes")), 1, array(), "array"), "ville", array()), "html", null, true);
        echo "
            </label>
          </div>

          <div class=\"col-md-4\">
            <label class=\"media checkbox text-truncate\" title=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["villes"]) ? $context["villes"] : $this->getContext($context, "villes")), 2, array(), "array"), "ville", array()), "html", null, true);
        echo "\">
              <input type=\"checkbox\" name=\"neighborhood\" value=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["villes"]) ? $context["villes"] : $this->getContext($context, "villes")), 2, array(), "array"), "ville", array()), "html", null, true);
        echo "\" class=\"pull-left\">
              ";
        // line 121
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["villes"]) ? $context["villes"] : $this->getContext($context, "villes")), 2, array(), "array"), "ville", array()), "html", null, true);
        echo "
            </label>
          </div>
        
          </div>
        <div class=\"filters-more collapse\">
          <hr>
          <div class=\"row row-condensed filters-columns\">

          ";
        // line 130
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["villes"]) ? $context["villes"] : $this->getContext($context, "villes")));
        foreach ($context['_seq'] as $context["_key"] => $context["ville"]) {
            // line 131
            echo "
            <div class=\"col-md-4\">
              <label class=\"media checkbox text-truncate\" title=\"";
            // line 133
            echo twig_escape_filter($this->env, $this->getAttribute($context["ville"], "ville", array()), "html", null, true);
            echo "\">
                <input type=\"checkbox\" name=\"neighborhood\" value=\"";
            // line 134
            echo twig_escape_filter($this->env, $this->getAttribute($context["ville"], "ville", array()), "html", null, true);
            echo "\" class=\"pull-left\">
                ";
            // line 135
            echo twig_escape_filter($this->env, $this->getAttribute($context["ville"], "ville", array()), "html", null, true);
            echo "
              </label>
            </div>

          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ville'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 140
        echo "          </div>
          </div>
    </div>
  ";
    }

    // line 147
    public function block_formSearch($context, array $blocks = array())
    {
        // line 148
        echo "
   <form action=\"/s\" id=\"search-form\" class=\"search-form\">
      <div class=\"search-bar\">
        <i class=\"icon icon-search icon-gray h4\"></i>
        <input type=\"text\"
               placeholder=\"Où allez-vous ?\"
               autocomplete=\"off\"
               name=\"location\"
               value=\"";
        // line 156
        echo twig_escape_filter($this->env, (isset($context["gouvernorat"]) ? $context["gouvernorat"] : $this->getContext($context, "gouvernorat")), "html", null, true);
        echo "\"
               data-p2=&quot;true&quot;
               class=\"location\" />
        <input type=\"hidden\" name=\"source\" value=\"hdr\" />
      </div>
    </form>
  ";
    }

    // line 164
    public function block_formChambre($context, array $blocks = array())
    {
        // line 165
        echo "  <form class=\"col-lg-9\">
        <div class=\"row row-condensed\">
          <div class=\"col-md-4 col-sm-12 row-space-1\">
            <div class=\"select select-block\">
              <select name=\"min_bedrooms\">
                <option value=\"-1\">Chambres</option>
                <option value=\"1\">1 chambre</option>
}
<option value=\"2\">2 chambres</option>
<option value=\"3\">3 chambres</option>
<option value=\"4\">4 chambres</option>
<option value=\"5\">5 chambres</option>
<option value=\"6\">6 chambres</option>
<option value=\"7\">7 chambres</option>
<option value=\"8\">8 chambres</option>
<option value=\"9\">9 chambres</option>
<option value=\"10\">10 chambres</option>
              </select>
            </div>
          </div>

          
          
        </div>
      </form>
      ";
    }

    // line 192
    public function block_formEtat($context, array $blocks = array())
    {
        // line 193
        echo "      <form class=\"col-lg-9\">
        <div class=\"row row-condensed\">
          <div class=\"col-md-4 col-sm-12 row-space-1\">
            <div class=\"select select-block\">
              <select name=\"etat\">
                <option value=\"-1\">Etat</option>
                <option value=\"1\">mauvaise</option>
<option value=\"2\">bonne</option>
<option value=\"3\">mediocre</option>
<option value=\"4\">ancienne</option>
              </select>
            </div>
          </div>

          
          
        </div>
      </form>
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
        return array (  325 => 193,  322 => 192,  293 => 165,  290 => 164,  279 => 156,  269 => 148,  266 => 147,  259 => 140,  248 => 135,  244 => 134,  240 => 133,  236 => 131,  232 => 130,  220 => 121,  216 => 120,  212 => 119,  204 => 114,  200 => 113,  196 => 112,  188 => 107,  184 => 106,  180 => 105,  167 => 94,  164 => 93,  158 => 87,  140 => 75,  133 => 71,  129 => 70,  101 => 45,  97 => 44,  82 => 32,  69 => 24,  50 => 7,  46 => 6,  43 => 5,  40 => 4,  11 => 2,);
    }
}
