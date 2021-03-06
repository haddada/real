<?php

/* realEstateBundle:Offre:wishlist.html.twig */
class __TwigTemplate_7eac56468d0145f8589bf887b5ab39c31a52a351ec8efbc28772cef0cf722a2d extends Twig_Template
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

<div class=\"modal show\" aria-hidden=\"false\"><div class=\"modal-table\"><div class=\"modal-cell\"><div class=\"new-modal wishlist-modal modal-content show_share_fb_checkbox\">
  <div class=\"panel-header\">
    <span class=\"no_fb\">Enregistrer dans une Wish List</span>
    <span class=\"fb\">Enregistrer dans une Wish List et sur le journal Facebook</span>
    <a href=\"#\" data-behavior=\"modal-close\" class=\"panel-close\">×</a>
  </div>

  <div class=\"panel-body\">
    <div class=\"row\">
      <div class=\"col-2 col-sm-2\">
        <div class=\"media-photo media-photo-block dynamic-listing-photo-container\">
          <div class=\"media-cover text-center\">
            <img src=\"https://a0.muscache.com/ic/pictures/68953440/c1ef2ba2_original.jpg?interpolation=lanczos-none&amp;size=x_medium&amp;output-format=jpg&amp;output-quality=70\" class=\"dynamic-listing-photo img-responsive-height\">
          </div>
        </div>
      </div>

      <div class=\"wishlist col-10 col-sm-10\">
        <div class=\"hosting_description text-lead\">A Cozy Room in a Brooklyn House</div>

        <p class=\"hosting_address\">Lefferts Garden, Brooklyn</p>

        <div class=\"row row-space-2\">
          <div class=\"col-12 col-sm-12\">
            <div class=\"selectContainer select select-block\">
              <div class=\"selectWidget hide\">

                <ul class=\"selectList list-unstyled\"><li data-wishlist-id=\"50972061\" class=\"checked\">
  <label class=\"checkbox text-truncate\">
    <input type=\"checkbox\" checked=\"\" value=\"50972061\">
    <span>Maisons de rêve</span>
  </label>
</li>
<li data-wishlist-id=\"50972062\" class=\"\">
  <label class=\"checkbox text-truncate\">
    <input type=\"checkbox\" value=\"50972062\">
    <span>Lieux de vacances</span>
  </label>
</li>
</ul>

                <div class=\"newWLContainer\">
                  <div class=\"doneContainer\">
                    <a class=\"create btn btn-primary\" href=\"javascript:void(0);\">Créer une nouvelle Wish List</a>
                    <button class=\"btn done\">Terminé</button>
                  </div>
                  <form action=\"/wishlists\" method=\"post\">
                    <input name=\"authenticity_token\" type=\"hidden\" value=\"V4\$.airbnb.fr\$4IOBgMKiYYA\$YL1wds6WeUBXZ0PlEteCwDuhRa517GhAjjUXs6YvLGo=\">
                    <div class=\"row\">
                      <div class=\"col-6 col-sm-6\">
                        <input size=\"26\" type=\"text\" placeholder=\"Faire une nouvelle Wish List\">
                      </div>
                      <div class=\"col-6 col-sm-6\">
                        <div class=\"select\">
                          <select name=\"private\" class=\"wishlist-create-privacy\">
                            <option value=\"0\" selected=\"\">
                              Tout le monde
                            </option>
                            <option value=\"1\">
                              Seulement moi
                            </option>
                          </select>
                        </div>
                        <i class=\"icon icon-gray icon-question\" id=\"privacy-tooltip-trigger\"></i>
                        <div class=\"tooltip tooltip-bottom-left\" id=\"privacy-tooltip\" role=\"tooltip\" data-trigger=\"#privacy-tooltip-trigger\">
                          <div class=\"panel-body\">
                            <h5>Tout le monde</h5>
                            <p>Visible par tous, y compris sur votre profil public Airbnb.</p>
                          </div>
                          <div class=\"panel-body\">
                            <h5>Seulement moi</h5>
                            <p>Visible par vous uniquement et publiée nulle part.</p>
                          </div>
                        </div>
                        <button class=\"btn btn-primary pull-right createWishlist\" type=\"submit\">Créer</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <span id=\"selected\"><span>Maisons de rêve</span><i></i></span>
            </div>
          </div>
        </div>

        <div class=\"row\">
          <div class=\"noteContainer col-6 col-sm-6\">
            <label>Ajouter une note</label>
            <textarea name=\"note\" class=\"wishlist-note\"></textarea>
          </div>


          
            <div class=\"col-6 col-sm-6 share_fb_checkbox\">
              <label>Ajouter au journal:</label>
              <i class=\"icon icon-facebook fb_icon\" data-behavior=\"tooltip\" title=\"Vous pouvez toujours changer vos options de partage dans les paramètres du compte.\"></i>
              <input checked=\"checked\" id=\"fb_share\" name=\"fb_share\" type=\"checkbox\" value=\"true\">
            </div>
          
        </div>
      </div>
    </div>
  </div>

  <div class=\"panel-footer\">
    <button type=\"submit\" class=\"btn-primary save btn\">Enregistrer</button>
  </div>
</div></div></div></div>

";
    }

    public function getTemplateName()
    {
        return "realEstateBundle:Offre:wishlist.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
