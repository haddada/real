<?php

/* sprint2RealEstateAdminBundle:Pages:gerants.html.twig */
class __TwigTemplate_a051fc3d4439da47472e52d211f42fc89d902ab2232c75f613399826677c05f9 extends Twig_Template
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
            'gerantsActive' => array($this, 'block_gerantsActive'),
            'gerantsCore' => array($this, 'block_gerantsCore'),
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
    public function block_gerantsActive($context, array $blocks = array())
    {
        // line 3
        echo "        class=\"active treeview\"
    ";
    }

    // line 6
    public function block_gerantsCore($context, array $blocks = array())
    {
        // line 7
        echo "       
        <!-- Main content -->
        <section class=\"content\">
          <div class=\"row\">
            <!-- List des client   -->
            <div class=\"col-xs-12\">
              <div class=\"box\">
                <div class=\"box-header\">
                  <h3 class=\"box-title\"></h3>
                </div><!-- /.box-header -->
                
                <div class=\"box-body\">
                  <table id=\"mytab\" class=\"table table-bordered table-striped\">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Mail</th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Status Matrimonial</th>
                        <th>Num mobile</th>
                        <th>Num fix</th>
                        <th>+/-</th>
                      </tr>
                    </thead>
                    <tbody>
                      
                      
                      ";
        // line 35
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($context["utilisateur"]);
        foreach ($context['_seq'] as $context["_key"] => $context["utilisateur"]) {
            // line 36
            echo "                            <tr>
                              <td class=\"nid\">";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "id", array()), "html", null, true);
            echo "</td>
                              <td class=\"nmail\">";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "mail", array()), "html", null, true);
            echo "</td>
                              <td class=\"nnom\">";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "nom", array()), "html", null, true);
            echo "</td>
                              <td class=\"nprenom\">";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "prenom", array()), "html", null, true);
            echo "</td>
                              <td class=\"nstat\">";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "statusMatrimonial", array()), "html", null, true);
            echo "</td>
                              <td class=\"nnummob\">";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "nummobile", array()), "html", null, true);
            echo "</td>
                              <td class=\"nnumfix\">";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "numfix", array()), "html", null, true);
            echo "</td>
                              <td><a href = \"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sprint2_real_estate_admin_gerants_supp", array("id" => $this->getAttribute($context["utilisateur"], "id", array()))), "html", null, true);
            echo "\"><button class=\"btn\"><i class=\"fa fa-trash-o\"></i></button></a>
                                  <a href = \"#Modifier\"><button type=\"button\" class=\"btn dddd\" ><i class=\"fa fa-edit\"></i></button></a>
                              </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['utilisateur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "                    </tbody>
                    <tfoot>
                      <tr>
                        <th>#</th>
                        <th>Mail</th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Status Matrimonial</th>
                        <th>Num mobile</th>
                        <th>Num fix</th>
                        <th>+/-</th>
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
            
            <!-- Modif des client   -->
            <div id=\"Modifier\" class=\"col-xs-12 cvvvvvvb\" style=\"display:none\">
            <!--                                                                         -->
            <div class=\"box box-warning direct-chat direct-chat-warning\">
            <div class=\"box-header with-border\">
              <h3 class=\"box-title\">Modifier</h3>
              <div class=\"box-tools pull-right\">
                
                  <button class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i></button>
               
              </div>
            </div><!-- /.box-header -->
            <form method=\"POST\">
            <div class=\"box-body\">
                <table id=\"mytab\" class=\"table table-bordered table-striped\">
                    <thead>
                      <tr>   
                        <th>#</th>
                        <th>Mail</th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        ";
        // line 89
        echo "                        <th>Status Matrimonial</th>
                        <th>Num mobile</th>
                        <th>Num fix</th>
                      </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type=\"text\" name=\"id\" class=\"idc\"/></td>
                            <td><input type=\"text\" name=\"mail\" class=\"mailc\"/></td>
                            <td><input type=\"text\" name=\"nom\" class=\"nomc\"/></td>
                            <td><input type=\"text\" name=\"prenom\" class=\"prenomc\"/></td>
                            ";
        // line 101
        echo "                            <td><input type=\"text\" name=\"statmatri\" class=\"statmatric\"/></td> 
                            <td><input type=\"text\" name=\"nummob\" class=\"nummobc\"/></td>  
                            <td><input type=\"text\" name=\"numfix\" class=\"numfixc\"/></td> 
                            
                        </tr>
                    </tbody>
                  </table>
            <div class=\"box-footer\">
              <div class=\"pull-right\">
                <span class=\"input-group-btn\">
                  <input type=\"submit\" name=\"Submit\" value=\"Modifier\" class=\"btn btn-danger btn-flat\"/>
                </span>
              <div class=\"with-border \"></div>
            </div><!-- /.box-footer-->
            </div>
          </div><!--/.direct-chat -->
          </form>
          </div></div>
           
            
            
            <!-- Ajout des client   -->
            <div class=\"col-xs-12\">
            <!--                                                                         -->
            <div class=\"box box-danger\">
            <div class=\"box-header with-border\">
              <h3 class=\"box-title\">Ajout</h3>
              <div class=\"box-tools pull-right\">
                
                  <button class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i></button>
               
              </div>
            </div><!-- /.box-header -->
            
            
            <div class=\"box-body box-pane\">        
                
                ";
        // line 138
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
            </div>
          
            </div>
    
          </div><!--/.direct-chat -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      
        
       <!-- jQuery 2.1.3 -->
    <script src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/plugins/jQuery/jQuery-2.1.3.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- DATA TABES SCRIPT -->
    <script src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin//plugins/datatables/jquery.dataTables.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/plugins/datatables/dataTables.bootstrap.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- SlimScroll -->
    <script src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/plugins/slimScroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- FastClick -->
    <script src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/plugins/fastclick/fastclick.min.js"), "html", null, true);
        echo "\"></script>
    <!-- AdminLTE App -->
    <script src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin//js/app.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- AdminLTE for demo purposes -->
    <script src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin//js/demo.js\" type=\"text/javascript"), "html", null, true);
        echo "\"></script>
    <!-- page script --> 
    <script type=\"text/javascript\">
      \$(function () {
        \$('#mytab').dataTable();
      });
    </script>
    <script type=\"text/javascript\">
    
    \$(\".dddd\").click(function(){
        \$(\".cvvvvvvb\").show(1000);
        });
            
    \$(\".dddd\").click(function() {
    var \$row = \$(this).closest(\"tr\");    // Find the row
    var \$nid = \$row.find(\".nid\").text(); // Find the text
    var \$nmail = \$row.find(\".nmail\").text(); // Find the text
    var \$nnom = \$row.find(\".nnom\").text(); // Find the text
    var \$nprenom = \$row.find(\".nprenom\").text(); // Find the text
    var \$nstat = \$row.find(\".nstat\").text(); // Find the text
    var \$nnummob = \$row.find(\".nnummob\").text(); // Find the text
    var \$nnumfix = \$row.find(\".nnumfix\").text(); // Find the text
    // Let's test it out
    //alert(\$text);
    \$('.idc').val(\$nid);
    \$('.mailc').val(\$nmail);
    \$('.nomc').val(\$nnom);
    \$('.prenomc').val(\$nprenom);
    \$('.statmatric').val(\$nstat);
    \$('.nummobc').val(\$nnummob);
    \$('.numfixc').val(\$nnumfix);
    });      
    ";
        // line 195
        echo "
    </script>
    ";
    }

    public function getTemplateName()
    {
        return "sprint2RealEstateAdminBundle:Pages:gerants.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  300 => 195,  265 => 162,  260 => 160,  255 => 158,  250 => 156,  245 => 154,  241 => 153,  236 => 151,  231 => 149,  217 => 138,  178 => 101,  165 => 89,  124 => 49,  113 => 44,  109 => 43,  105 => 42,  101 => 41,  97 => 40,  93 => 39,  89 => 38,  85 => 37,  82 => 36,  78 => 35,  48 => 7,  45 => 6,  40 => 3,  37 => 2,  11 => 1,);
    }
}
