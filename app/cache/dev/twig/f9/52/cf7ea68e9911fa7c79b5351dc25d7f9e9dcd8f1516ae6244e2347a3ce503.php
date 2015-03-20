<?php

/* sprint2RealEstateAdminBundle:Default:index.html.twig */
class __TwigTemplate_f952cf7ea68e9911fa7c79b5351dc25d7f9e9dcd8f1516ae6244e2347a3ce503 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("sprint2RealEstateAdminBundle::admin_layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'DashActive' => array($this, 'block_DashActive'),
            'MailboxEtra' => array($this, 'block_MailboxEtra'),
            'DashCore' => array($this, 'block_DashCore'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "sprint2RealEstateAdminBundle::admin_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_DashActive($context, array $blocks = array())
    {
        // line 3
        echo "        class=\"active treeview\"
    ";
    }

    // line 5
    public function block_MailboxEtra($context, array $blocks = array())
    {
        // line 6
        echo "        <small class=\"label pull-right bg-yellow\">12</small>
    ";
    }

    // line 8
    public function block_DashCore($context, array $blocks = array())
    {
        // line 9
        echo "        <section class=\"content\">
        <div class=\"row\">
            <div class=\"col-lg-3 col-xs-6\">
              <!-- small box -->
              <div class=\"small-box bg-aqua\">
                <div class=\"inner\">
                  <h3>";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["offren"]) ? $context["offren"] : $this->getContext($context, "offren")), "html", null, true);
        echo "</h3>
                  <p>Offres</p>
                </div>
                <div class=\"icon\">
                  <i class=\"fa fa-shopping-cart\"></i>
                </div>
                
              </div>
            </div><!-- ./col -->
            <div class=\"col-lg-3 col-xs-6\">
              <!-- small box -->
              <div class=\"small-box bg-green\">
                <div class=\"inner\">
                  <h3>";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["utilisateurgn"]) ? $context["utilisateurgn"] : $this->getContext($context, "utilisateurgn")), "html", null, true);
        echo "</h3>
                  <p>Gérants</p>
                </div>
                <div class=\"icon\">
                  <i class=\"fa fa-user\"></i>
                </div>
                
              </div>
            </div><!-- ./col -->
            <div class=\"col-lg-3 col-xs-6\">
              <!-- small box -->
              <div class=\"small-box bg-yellow\">
                <div class=\"inner\">
                  <h3>";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["utilisateurcn"]) ? $context["utilisateurcn"] : $this->getContext($context, "utilisateurcn")), "html", null, true);
        echo "</h3>
                  <p>Clients</p>
                </div>
                <div class=\"icon\">
                  <i class=\"fa fa-users\"></i>
                </div>
                
              </div>
            </div><!-- ./col -->
            <div class=\"col-lg-3 col-xs-6\">
              <!-- small box -->
              <div class=\"small-box bg-red\">
                <div class=\"inner\">
                  <h3>65</h3>
                  <p>Agance</p>
                </div>
                <div class=\"icon\">
                  <i class=\"fa fa-suitcase\"></i>
                </div>
                
              </div>
            </div><!-- ./col -->
          </div>
        <div class=\"row\">
        <!-- PRODUCT LIST -->
        <div class=\"col-md-6\">
              <div class=\"box box-primary\">
                <div class=\"box-header with-border\">
                  <h3 class=\"box-title\">Recently Added Offres</h3>
                  <div class=\"box-tools pull-right\">
                    <button class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i></button>
                    <button class=\"btn btn-box-tool\" data-widget=\"remove\"><i class=\"fa fa-times\"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class=\"box-body\">
                  <ul class=\"products-list product-list-in-box\">
                    ";
        // line 77
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($context["offre"]);
        foreach ($context['_seq'] as $context["_key"] => $context["offre"]) {
            // line 78
            echo "                      <li class=\"item\">
                      <div class=\"product-img\">
                        <img src=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], "urlimage", array()), "html", null, true);
            echo "\" alt=\"Product Image\"/>
                      </div>
                      <div class=\"product-info\">
                        <a href=\"javascript::;\" class=\"product-type\">";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], "typeimmob", array()), "html", null, true);
            echo "<span class=\"label label-warning pull-right\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], "payement", array()), "html", null, true);
            echo " TD</span></a>
                        <span class=\"product-description\">
                          ";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], "nbrpiece", array()), "html", null, true);
            echo " Piece, ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], "surface", array()), "html", null, true);
            echo " Metre, Avenue la liberte 14 janvier, A ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], "nature", array()), "html", null, true);
            echo "
                        </span>
                      </div>
                      </li><!-- /.item -->
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "                  </ul>
                </div>
              </div></div>
                      
              <!-- USERS LIST -->
              <div class=\"col-md-6\">
              <div class=\"box box-danger\">
                <div class=\"box-header with-border\">
                  <h3 class=\"box-title\">Latest Client</h3>
                  <div class=\"box-tools pull-right\">
                   
                    <button class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i></button>
                    <button class=\"btn btn-box-tool\" data-widget=\"remove\"><i class=\"fa fa-times\"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class=\"box-body no-padding\">
                  <ul class=\"users-list clearfix\">
                    ";
        // line 107
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($context["utilisateurc"]);
        foreach ($context['_seq'] as $context["_key"] => $context["utilisateurc"]) {
            // line 108
            echo "                    <li>
                      <img src=\"";
            // line 109
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateurc"], "urlp", array()), "html", null, true);
            echo "\" alt=\"User Image\"/>
                      <a class=\"users-list-name\" href=\"#\">";
            // line 110
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateurc"], "prenom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateurc"], "nom", array()), "html", null, true);
            echo "</a>
                    </li>
                   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['utilisateurc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        echo "                  </ul><!-- /.users-list -->
                </div>
              </div>
              </div>
        </div>       
              <div class=\"row\">
        <!-- PRODUCT LIST -->
        <div class=\"col-md-6\">
              <div class=\"box box-primary\">
                <div class=\"box-header with-border\">
                  <h3 class=\"box-title\">Recently Added Offres</h3>
                  <div class=\"box-tools pull-right\">
                    <button class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i></button>
                    <button class=\"btn btn-box-tool\" data-widget=\"remove\"><i class=\"fa fa-times\"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class=\"box-body\">
                  <ul class=\"products-list product-list-in-box\">
                    <li class=\"item\">
                      <div class=\"product-img\">
                        <img src=\"http://placehold.it/50x50/d2d6de/ffffff\" alt=\"Product Image\"/>
                      </div>
                      <div class=\"product-info\">
                        <a href=\"javascript::;\" class=\"product-title\">Samsung TV <span class=\"label label-warning pull-right\">\$1800</span></a>
                        <span class=\"product-description\">
                          Samsung 32\" 1080p 60Hz LED Smart HDTV.
                        </span>
                      </div>
                    </li><!-- /.item -->
                    <li class=\"item\">
                      <div class=\"product-img\">
                        <img src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/img/default-50x50.gif"), "html", null, true);
        echo "\" alt=\"Product Image\"/>
                      </div>
                      <div class=\"product-info\">
                        <a href=\"javascript::;\" class=\"product-title\">Bicycle <span class=\"label label-info pull-right\">\$700</span></a>
                        <span class=\"product-description\">
                          26\" Mongoose Dolomite Men's 7-speed, Navy Blue.
                        </span>
                      </div>
                    </li><!-- /.item -->
                    <li class=\"item\">
                      <div class=\"product-img\">
                        <img src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/img/default-50x50.gif"), "html", null, true);
        echo "\" alt=\"Product Image\"/>
                      </div>
                      <div class=\"product-info\">
                        <a href=\"javascript::;\" class=\"product-title\">Xbox One <span class=\"label label-danger pull-right\">\$350</span></a>
                        <span class=\"product-description\">
                          Xbox One Console Bundle with Halo Master Chief Collection.
                        </span>
                      </div>
                    </li><!-- /.item -->
                    <li class=\"item\">
                      <div class=\"product-img\">
                        <img src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/img/default-50x50.gif"), "html", null, true);
        echo "\" alt=\"Product Image\"/>
                      </div>
                      <div class=\"product-info\">
                        <a href=\"javascript::;\" class=\"product-title\">PlayStation 4 <span class=\"label label-success pull-right\">\$399</span></a>
                        <span class=\"product-description\">
                          PlayStation 4 500GB Console (PS4)
                        </span>
                      </div>
                    </li><!-- /.item -->
                  </ul>
                </div>
              </div></div>
                      
              <!-- USERS LIST -->
              <div class=\"col-md-6\">
";
        // line 202
        echo "              <div class=\"box box-danger\">
                <div class=\"box-header with-border\">
                  <h3 class=\"box-title\">Latest gerant</h3>
                  <div class=\"box-tools pull-right\">
                   
                    <button class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i></button>
                    <button class=\"btn btn-box-tool\" data-widget=\"remove\"><i class=\"fa fa-times\"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class=\"box-body no-padding\">
                  <ul class=\"users-list clearfix\">
                    ";
        // line 213
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($context["utilisateurg"]);
        foreach ($context['_seq'] as $context["_key"] => $context["utilisateurg"]) {
            // line 214
            echo "                    <li>
                      <img src=\"";
            // line 215
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateurg"], "urlp", array()), "html", null, true);
            echo "\" alt=\"User Image\"/>
                      <a class=\"users-list-name\" href=\"#\">";
            // line 216
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateurg"], "prenom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateurg"], "nom", array()), "html", null, true);
            echo "</a>
                    </li>
                   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['utilisateurg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 219
        echo "                  </ul><!-- /.users-list -->
                </div>
              </div></div>
               
        </div>
        </section>       
    ";
    }

    public function getTemplateName()
    {
        return "sprint2RealEstateAdminBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  327 => 219,  316 => 216,  312 => 215,  309 => 214,  305 => 213,  292 => 202,  274 => 166,  260 => 155,  246 => 144,  213 => 113,  202 => 110,  198 => 109,  195 => 108,  191 => 107,  172 => 90,  157 => 85,  150 => 83,  144 => 80,  140 => 78,  136 => 77,  97 => 41,  81 => 28,  65 => 15,  57 => 9,  54 => 8,  49 => 6,  46 => 5,  41 => 3,  38 => 2,  11 => 1,);
    }
}
