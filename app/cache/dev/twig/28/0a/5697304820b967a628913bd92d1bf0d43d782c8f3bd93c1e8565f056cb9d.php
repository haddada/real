<?php

/* sprint2RealEstateAdminBundle:Core:admin_layout.html.twig */
class __TwigTemplate_280a5697304820b967a628913bd92d1bf0d43d782c8f3bd93c1e8565f056cb9d extends Twig_Template
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
    <title>TiMob | Dashboard</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- Font Awesome Icons -->
    <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- Ionicons -->
    <link href=\"http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/less/dropdown.less"), "html", null, true);
        echo "\" rel=\"stylesheet/less\" type=\"text/css\" />  
    <!-- Morris chart -->
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/plugins/morris/morris.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- jvectormap -->
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/plugins/jvectormap/jquery-jvectormap-1.2.2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- Daterange picker -->
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/plugins/daterangepicker/daterangepicker-bs3.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- Theme style -->
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/css/AdminLTE.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/css/skins/_all-skins.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- DATA TABLES -->
    <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/plugins/datatables/dataTables.bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
    <![endif]-->
  </head>
  <body class=\"skin-black\">
    <div class=\"wrapper\">
      
      <header class=\"main-header\">
        <!-- Logo -->
        <a href=\"\" class=\"logo\"><img src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/img/logo.png"), "html", null, true);
        echo "\"/></a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class=\"navbar navbar-static-top\" role=\"navigation\">
          <!-- Sidebar toggle button-->
          <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
            <span class=\"sr-only\">Toggle navigation</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class=\"navbar-custom-menu\">
            <ul class=\"nav navbar-nav\">
              <!-- Messages: style can be found in dropdown.less-->
              <li class=\"dropdown messages-menu\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                  <i class=\"fa fa-envelope-o\"></i>
                  <span class=\"label label-success\">4</span>
                </a>
                <ul class=\"dropdown-menu\">
                  <li class=\"header\">You have 4 messages</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class=\"menu\">
                      <li><!-- start message -->
                        <a href=\"#\">
                          <div class=\"pull-left\">
                            <img src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\"/>
                          </div>
                          <h4>
                            Support Team
                            <small><i class=\"fa fa-clock-o\"></i> 5 mins</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li><!-- end message -->
                      <li>
                        <a href=\"#\">
                          <div class=\"pull-left\">
                            <img src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/img/user3-128x128.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"user image\"/>
                          </div>
                          <h4>
                            AdminLTE Design Team
                            <small><i class=\"fa fa-clock-o\"></i> 2 hours</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                      <li>
                        <a href=\"#\">
                          <div class=\"pull-left\">
                            <img src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/img/user4-128x128.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"user image\"/>
                          </div>
                          <h4>
                            Developers
                            <small><i class=\"fa fa-clock-o\"></i> Today</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                      <li>
                        <a href=\"#\">
                          <div class=\"pull-left\">
                            <img src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/img/user3-128x128.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"user image\"/>
                          </div>
                          <h4>
                            Sales Department
                            <small><i class=\"fa fa-clock-o\"></i> Yesterday</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                      <li>
                        <a href=\"#\">
                          <div class=\"pull-left\">
                            <img src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/img/user4-128x128.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"user image\"/>
                          </div>
                          <h4>
                            Reviewers
                            <small><i class=\"fa fa-clock-o\"></i> 2 days</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class=\"footer\"><a href=\"#\">See All Messages</a></li>
                </ul>
              </li>
              <!-- Notifications: style can be found in dropdown.less -->
              <li class=\"dropdown notifications-menu\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                  <i class=\"fa fa-bell-o\"></i>
                  <span class=\"label label-warning\">10</span>
                </a>
                <ul class=\"dropdown-menu\">
                  <li class=\"header\">You have 10 notifications</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class=\"menu\">
                      <li>
                        <a href=\"#\">
                          <i class=\"fa fa-users text-aqua\"></i> 5 new members joined today
                        </a>
                      </li>
                      <li>
                        <a href=\"#\">
                          <i class=\"fa fa-warning text-yellow\"></i> Very long description here that may not fit into the page and may cause design problems
                        </a>
                      </li>
                      <li>
                        <a href=\"#\">
                          <i class=\"fa fa-users text-red\"></i> 5 new members joined
                        </a>
                      </li>

                      <li>
                        <a href=\"#\">
                          <i class=\"fa fa-shopping-cart text-green\"></i> 25 sales made
                        </a>
                      </li>
                      <li>
                        <a href=\"#\">
                          <i class=\"fa fa-user text-red\"></i> You changed your username
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class=\"footer\"><a href=\"#\">View all</a></li>
                </ul>
              </li>
              <!-- Tasks: style can be found in dropdown.less -->
              <li class=\"dropdown tasks-menu\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                  <i class=\"fa fa-flag-o\"></i>
                  <span class=\"label label-danger\">9</span>
                </a>
                <ul class=\"dropdown-menu\">
                  <li class=\"header\">You have 9 tasks</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class=\"menu\">
                      <li><!-- Task item -->
                        <a href=\"#\">
                          <h3>
                            Design some buttons
                            <small class=\"pull-right\">20%</small>
                          </h3>
                          <div class=\"progress xs\">
                            <div class=\"progress-bar progress-bar-aqua\" style=\"width: 20%\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                              <span class=\"sr-only\">20% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                      <li><!-- Task item -->
                        <a href=\"#\">
                          <h3>
                            Create a nice theme
                            <small class=\"pull-right\">40%</small>
                          </h3>
                          <div class=\"progress xs\">
                            <div class=\"progress-bar progress-bar-green\" style=\"width: 40%\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                              <span class=\"sr-only\">40% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                      <li><!-- Task item -->
                        <a href=\"#\">
                          <h3>
                            Some task I need to do
                            <small class=\"pull-right\">60%</small>
                          </h3>
                          <div class=\"progress xs\">
                            <div class=\"progress-bar progress-bar-red\" style=\"width: 60%\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                              <span class=\"sr-only\">60% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                      <li><!-- Task item -->
                        <a href=\"#\">
                          <h3>
                            Make beautiful transitions
                            <small class=\"pull-right\">80%</small>
                          </h3>
                          <div class=\"progress xs\">
                            <div class=\"progress-bar progress-bar-yellow\" style=\"width: 80%\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                              <span class=\"sr-only\">80% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                    </ul>
                  </li>
                  <li class=\"footer\">
                    <a href=\"#\">View all tasks</a>
                  </li>
                </ul>
              </li>
              <!-- User Account: style can be found in dropdown.less -->
              <li class=\"dropdown user user-menu\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                  <img src=\"";
        // line 240
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"user-image\" alt=\"User Image\"/>
                  <span class=\"hidden-xs\">Alexander Pierce</span>
                </a>
                <ul class=\"dropdown-menu\">
                  <!-- User image -->
                  <li class=\"user-header\">
                    <img src=\"";
        // line 246
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\" />
                    <p>
                      Alexander Pierce - Web Developer
                      <small>Member since Nov. 2012</small>
                    </p>
                  </li>
                  <!-- Menu Body -->
                  <li class=\"user-body\">
                    <div class=\"col-xs-4 text-center\">
                      <a href=\"#\">Followers</a>
                    </div>
                    <div class=\"col-xs-4 text-center\">
                      <a href=\"#\">Sales</a>
                    </div>
                    <div class=\"col-xs-4 text-center\">
                      <a href=\"#\">Friends</a>
                    </div>
                  </li>
                  <!-- Menu Footer-->
                  <li class=\"user-footer\">
                    <div class=\"pull-left\">
                      <a href=\"#\" class=\"btn btn-default btn-flat\">Profile</a>
                    </div>
                    <div class=\"pull-right\">
                      <a href=\"#\" class=\"btn btn-default btn-flat\">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class=\"main-sidebar\">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class=\"sidebar\">
          <!-- Sidebar user panel -->
          <div class=\"user-panel\">
            <div class=\"pull-left image\">
              <img src=\"";
        // line 286
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\" />
            </div>
            <div class=\"pull-left info\">
              <p>Alexander Pierce</p>

              <a href=\"#\"><i class=\"fa fa-circle text-success\"></i> Online</a>
            </div>
          </div>
          <!-- search form -->
          <form action=\"#\" method=\"get\" class=\"sidebar-form\">
            <div class=\"input-group\">
              <input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Search...\"/>
              <span class=\"input-group-btn\">
                <button type='submit' name='search' id='search-btn' class=\"btn btn-flat\"><i class=\"fa fa-search\"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class=\"sidebar-menu\">
            <li class=\"header\">MAIN NAVIGATION</li>
            <li class=\"active treeview\">
              <a href=\"#\">
                <i class=\"fa fa-dashboard\"></i> <span>Dashboard</span> <i class=\"fa fa-angle-left pull-right\"></i>
              </a>
              <ul class=\"treeview-menu\">
                <li><a href=\"index.html\"><i class=\"fa fa-circle-o\"></i> Dashboard v1</a></li>
                <li class=\"active\"><a href=\"index2.html\"><i class=\"fa fa-circle-o\"></i> Dashboard v2</a></li>
              </ul>
            </li>
            <li class=\"treeview\">
              <a href=\"#\">
                <i class=\"fa fa-files-o\"></i>
                <span>Layout Options</span>
                <span class=\"label label-primary pull-right\">4</span>
              </a>
              <ul class=\"treeview-menu\">
                <li><a href=\"pages/layout/top-nav.html\"><i class=\"fa fa-circle-o\"></i> Top Navigation</a></li>
                <li><a href=\"pages/layout/boxed.html\"><i class=\"fa fa-circle-o\"></i> Boxed</a></li>
                <li><a href=\"pages/layout/fixed.html\"><i class=\"fa fa-circle-o\"></i> Fixed</a></li>
                <li><a href=\"pages/layout/collapsed-sidebar.html\"><i class=\"fa fa-circle-o\"></i> Collapsed Sidebar</a></li>
              </ul>
            </li>
            <li>
              <a href=\"pages/widgets.html\">
                <i class=\"fa fa-th\"></i> <span>Widgets</span> <small class=\"label pull-right bg-green\">new</small>
              </a>
            </li>
            <li class=\"treeview\">
              <a href=\"#\">
                <i class=\"fa fa-pie-chart\"></i>
                <span>Charts</span>
                <i class=\"fa fa-angle-left pull-right\"></i>
              </a>
              <ul class=\"treeview-menu\">
                <li><a href=\"pages/charts/morris.html\"><i class=\"fa fa-circle-o\"></i> Morris</a></li>
                <li><a href=\"pages/charts/flot.html\"><i class=\"fa fa-circle-o\"></i> Flot</a></li>
                <li><a href=\"pages/charts/inline.html\"><i class=\"fa fa-circle-o\"></i> Inline charts</a></li>
              </ul>
            </li>
            <li class=\"treeview\">
              <a href=\"#\">
                <i class=\"fa fa-laptop\"></i>
                <span>UI Elements</span>
                <i class=\"fa fa-angle-left pull-right\"></i>
              </a>
              <ul class=\"treeview-menu\">
                <li><a href=\"pages/UI/general.html\"><i class=\"fa fa-circle-o\"></i> General</a></li>
                <li><a href=\"pages/UI/icons.html\"><i class=\"fa fa-circle-o\"></i> Icons</a></li>
                <li><a href=\"pages/UI/buttons.html\"><i class=\"fa fa-circle-o\"></i> Buttons</a></li>
                <li><a href=\"pages/UI/sliders.html\"><i class=\"fa fa-circle-o\"></i> Sliders</a></li>
                <li><a href=\"pages/UI/timeline.html\"><i class=\"fa fa-circle-o\"></i> Timeline</a></li>
                <li><a href=\"pages/UI/modals.html\"><i class=\"fa fa-circle-o\"></i> Modals</a></li>
              </ul>
            </li>
            <li class=\"treeview\">
              <a href=\"#\">
                <i class=\"fa fa-edit\"></i> <span>Forms</span>
                <i class=\"fa fa-angle-left pull-right\"></i>
              </a>
              <ul class=\"treeview-menu\">
                <li><a href=\"pages/forms/general.html\"><i class=\"fa fa-circle-o\"></i> General Elements</a></li>
                <li><a href=\"pages/forms/advanced.html\"><i class=\"fa fa-circle-o\"></i> Advanced Elements</a></li>
                <li><a href=\"pages/forms/editors.html\"><i class=\"fa fa-circle-o\"></i> Editors</a></li>
              </ul>
            </li>
            <li class=\"treeview\">
              <a href=\"#\">
                <i class=\"fa fa-table\"></i> <span>Tables</span>
                <i class=\"fa fa-angle-left pull-right\"></i>
              </a>
              <ul class=\"treeview-menu\">
                <li><a href=\"pages/tables/simple.html\"><i class=\"fa fa-circle-o\"></i> Simple tables</a></li>
                <li><a href=\"pages/tables/data.html\"><i class=\"fa fa-circle-o\"></i> Data tables</a></li>
              </ul>
            </li>
            <li>
              <a href=\"pages/calendar.html\">
                <i class=\"fa fa-calendar\"></i> <span>Calendar</span>
                <small class=\"label pull-right bg-red\">3</small>
              </a>
            </li>
            <li>
              <a href=\"pages/mailbox/mailbox.html\">
                <i class=\"fa fa-envelope\"></i> <span>Mailbox</span>
                <small class=\"label pull-right bg-yellow\">12</small>
              </a>
            </li>
            <li class=\"treeview\">
              <a href=\"#\">
                <i class=\"fa fa-folder\"></i> <span>Examples</span>
                <i class=\"fa fa-angle-left pull-right\"></i>
              </a>
              <ul class=\"treeview-menu\">
                <li><a href=\"pages/examples/invoice.html\"><i class=\"fa fa-circle-o\"></i> Invoice</a></li>
                <li><a href=\"pages/examples/login.html\"><i class=\"fa fa-circle-o\"></i> Login</a></li>
                <li><a href=\"pages/examples/register.html\"><i class=\"fa fa-circle-o\"></i> Register</a></li>
                <li><a href=\"pages/examples/lockscreen.html\"><i class=\"fa fa-circle-o\"></i> Lockscreen</a></li>
                <li><a href=\"pages/examples/404.html\"><i class=\"fa fa-circle-o\"></i> 404 Error</a></li>
                <li><a href=\"pages/examples/500.html\"><i class=\"fa fa-circle-o\"></i> 500 Error</a></li>
                <li><a href=\"pages/examples/blank.html\"><i class=\"fa fa-circle-o\"></i> Blank Page</a></li>
              </ul>
            </li>
            <li class=\"treeview\">
              <a href=\"#\">
                <i class=\"fa fa-share\"></i> <span>Multilevel</span>
                <i class=\"fa fa-angle-left pull-right\"></i>
              </a>
              <ul class=\"treeview-menu\">
                <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> Level One</a></li>
                <li>
                  <a href=\"#\"><i class=\"fa fa-circle-o\"></i> Level One <i class=\"fa fa-angle-left pull-right\"></i></a>
                  <ul class=\"treeview-menu\">
                    <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> Level Two</a></li>
                    <li>
                      <a href=\"#\"><i class=\"fa fa-circle-o\"></i> Level Two <i class=\"fa fa-angle-left pull-right\"></i></a>
                      <ul class=\"treeview-menu\">
                        <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> Level Three</a></li>
                        <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> Level Three</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> Level One</a></li>
              </ul>
            </li>
            <li><a href=\"documentation/index.html\"><i class=\"fa fa-book\"></i> Documentation</a></li>
            <li class=\"header\">LABELS</li>
            <li><a href=\"#\"><i class=\"fa fa-circle-o text-danger\"></i> Important</a></li>
            <li><a href=\"#\"><i class=\"fa fa-circle-o text-warning\"></i> Warning</a></li>
            <li><a href=\"#\"><i class=\"fa fa-circle-o text-info\"></i> Information</a></li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <section class=\"content-header\">
          <h1>
            Dashboard
            <small>Version 2.0</small>
          </h1>
          <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i> Home</a></li>
            <li class=\"active\">Dashboard</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class=\"content\">
          <!-- Info boxes -->
          <div class=\"row\">
            <div class=\"col-md-3 col-sm-6 col-xs-12\">
              <div class=\"info-box\">
                <span class=\"info-box-icon bg-aqua\"><i class=\"ion ion-ios-gear-outline\"></i></span>
                <div class=\"info-box-content\">
                  <span class=\"info-box-text\">CPU Traffic</span>
                  <span class=\"info-box-number\">90<small>%</small></span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class=\"col-md-3 col-sm-6 col-xs-12\">
              <div class=\"info-box\">
                <span class=\"info-box-icon bg-red\"><i class=\"fa fa-google-plus\"></i></span>
                <div class=\"info-box-content\">
                  <span class=\"info-box-text\">Likes</span>
                  <span class=\"info-box-number\">41,410</span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->

            <!-- fix for small devices only -->
            <div class=\"clearfix visible-sm-block\"></div>

            <div class=\"col-md-3 col-sm-6 col-xs-12\">
              <div class=\"info-box\">
                <span class=\"info-box-icon bg-green\"><i class=\"ion ion-ios-cart-outline\"></i></span>
                <div class=\"info-box-content\">
                  <span class=\"info-box-text\">Sales</span>
                  <span class=\"info-box-number\">760</span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class=\"col-md-3 col-sm-6 col-xs-12\">
              <div class=\"info-box\">
                <span class=\"info-box-icon bg-yellow\"><i class=\"ion ion-ios-people-outline\"></i></span>
                <div class=\"info-box-content\">
                  <span class=\"info-box-text\">New Members</span>
                  <span class=\"info-box-number\">2,000</span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
          </div><!-- /.row -->

          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"box\">
                <div class=\"box-header with-border\">
                  <h3 class=\"box-title\">Monthly Recap Report</h3>
                  <div class=\"box-tools pull-right\">
                    <button class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i></button>
                    <div class=\"btn-group\">
                      <button class=\"btn btn-box-tool dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-wrench\"></i></button>
                      <ul class=\"dropdown-menu\" role=\"menu\">
                        <li><a href=\"#\">Action</a></li>
                        <li><a href=\"#\">Another action</a></li>
                        <li><a href=\"#\">Something else here</a></li>
                        <li class=\"divider\"></li>
                        <li><a href=\"#\">Separated link</a></li>
                      </ul>
                    </div>
                    <button class=\"btn btn-box-tool\" data-widget=\"remove\"><i class=\"fa fa-times\"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class=\"box-body\">
                  <div class=\"row\">
                    <div class=\"col-md-8\">
                      <p class=\"text-center\">
                        <strong>Sales: 1 Jan, 2014 - 30 Jul, 2014</strong>
                      </p>
                      <div class=\"chart-responsive\">
                        <!-- Sales Chart Canvas -->
                        <canvas id=\"salesChart\" height=\"180\"></canvas>
                      </div><!-- /.chart-responsive -->
                    </div><!-- /.col -->
                    <div class=\"col-md-4\">
                      <p class=\"text-center\">
                        <strong>Goal Completion</strong>
                      </p>
                      <div class=\"progress-group\">
                        <span class=\"progress-text\">Add Products to Cart</span>
                        <span class=\"progress-number\"><b>160</b>/200</span>
                        <div class=\"progress sm\">
                          <div class=\"progress-bar progress-bar-aqua\" style=\"width: 80%\"></div>
                        </div>
                      </div><!-- /.progress-group -->
                      <div class=\"progress-group\">
                        <span class=\"progress-text\">Complete Purchase</span>
                        <span class=\"progress-number\"><b>310</b>/400</span>
                        <div class=\"progress sm\">
                          <div class=\"progress-bar progress-bar-red\" style=\"width: 80%\"></div>
                        </div>
                      </div><!-- /.progress-group -->
                      <div class=\"progress-group\">
                        <span class=\"progress-text\">Visit Premium Page</span>
                        <span class=\"progress-number\"><b>480</b>/800</span>
                        <div class=\"progress sm\">
                          <div class=\"progress-bar progress-bar-green\" style=\"width: 80%\"></div>
                        </div>
                      </div><!-- /.progress-group -->
                      <div class=\"progress-group\">
                        <span class=\"progress-text\">Send Inquiries</span>
                        <span class=\"progress-number\"><b>250</b>/500</span>
                        <div class=\"progress sm\">
                          <div class=\"progress-bar progress-bar-yellow\" style=\"width: 80%\"></div>
                        </div>
                      </div><!-- /.progress-group -->
                    </div><!-- /.col -->
                  </div><!-- /.row -->
                </div><!-- ./box-body -->
                <div class=\"box-footer\">
                  <div class=\"row\">
                    <div class=\"col-sm-3 col-xs-6\">
                      <div class=\"description-block border-right\">
                        <span class=\"description-percentage text-green\"><i class=\"fa fa-caret-up\"></i> 17%</span>
                        <h5 class=\"description-header\">\$35,210.43</h5>
                        <span class=\"description-text\">TOTAL REVENUE</span>
                      </div><!-- /.description-block -->
                    </div><!-- /.col -->
                    <div class=\"col-sm-3 col-xs-6\">
                      <div class=\"description-block border-right\">
                        <span class=\"description-percentage text-yellow\"><i class=\"fa fa-caret-left\"></i> 0%</span>
                        <h5 class=\"description-header\">\$10,390.90</h5>
                        <span class=\"description-text\">TOTAL COST</span>
                      </div><!-- /.description-block -->
                    </div><!-- /.col -->
                    <div class=\"col-sm-3 col-xs-6\">
                      <div class=\"description-block border-right\">
                        <span class=\"description-percentage text-green\"><i class=\"fa fa-caret-up\"></i> 20%</span>
                        <h5 class=\"description-header\">\$24,813.53</h5>
                        <span class=\"description-text\">TOTAL PROFIT</span>
                      </div><!-- /.description-block -->
                    </div><!-- /.col -->
                    <div class=\"col-sm-3 col-xs-6\">
                      <div class=\"description-block\">
                        <span class=\"description-percentage text-red\"><i class=\"fa fa-caret-down\"></i> 18%</span>
                        <h5 class=\"description-header\">1200</h5>
                        <span class=\"description-text\">GOAL COMPLETIONS</span>
                      </div><!-- /.description-block -->
                    </div>
                  </div><!-- /.row -->
                </div><!-- /.box-footer -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->

          <!-- Main row -->
          <div class=\"row\">
            <!-- Left col -->
            <div class=\"col-md-8\">
              <!-- MAP & BOX PANE -->
              <div class=\"box box-success\">
                <div class=\"box-header with-border\">
                  <h3 class=\"box-title\">Visitors Report</h3>
                  <div class=\"box-tools pull-right\">
                    <button class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i></button>
                    <button class=\"btn btn-box-tool\" data-widget=\"remove\"><i class=\"fa fa-times\"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class=\"box-body no-padding\">
                  <div class=\"row\">
                    <div class=\"col-md-9 col-sm-8\">
                      <div class=\"pad\">
                        <!-- Map will be created here -->
                        <div id=\"world-map-markers\" style=\"height: 325px;\"></div>
                      </div>
                    </div><!-- /.col -->
                    <div class=\"col-md-3 col-sm-4\">
                      <div class=\"pad box-pane-right bg-green\" style=\"min-height: 280px\">
                        <div class=\"description-block margin-bottom\">
                          <div class=\"sparkbar pad\" data-color=\"#fff\">90,70,90,70,75,80,70</div>
                          <h5 class=\"description-header\">8390</h5>
                          <span class=\"description-text\">Visits</span>
                        </div><!-- /.description-block -->
                        <div class=\"description-block margin-bottom\">
                          <div class=\"sparkbar pad\" data-color=\"#fff\">90,50,90,70,61,83,63</div>
                          <h5 class=\"description-header\">30%</h5>
                          <span class=\"description-text\">Referrals</span>
                        </div><!-- /.description-block -->
                        <div class=\"description-block\">
                          <div class=\"sparkbar pad\" data-color=\"#fff\">90,50,90,70,61,83,63</div>
                          <h5 class=\"description-header\">70%</h5>
                          <span class=\"description-text\">Organic</span>
                        </div><!-- /.description-block -->
                      </div>
                    </div><!-- /.col -->
                  </div><!-- /.row -->
                </div><!-- /.box-body -->
              </div><!-- /.box -->

            </div><!-- /.col -->

            <div class=\"col-md-4\">
              <!-- Info Boxes Style 2 -->
              <div class=\"info-box bg-yellow\">
                <span class=\"info-box-icon\"><i class=\"ion ion-ios-pricetag-outline\"></i></span>
                <div class=\"info-box-content\">
                  <span class=\"info-box-text\">Inventory</span>
                  <span class=\"info-box-number\">5,200</span>
                  <div class=\"progress\">
                    <div class=\"progress-bar\" style=\"width: 50%\"></div>
                  </div>
                  <span class=\"progress-description\">
                    50% Increase in 30 Days
                  </span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
              <div class=\"info-box bg-green\">
                <span class=\"info-box-icon\"><i class=\"ion ion-ios-heart-outline\"></i></span>
                <div class=\"info-box-content\">
                  <span class=\"info-box-text\">Mentions</span>
                  <span class=\"info-box-number\">92,050</span>
                  <div class=\"progress\">
                    <div class=\"progress-bar\" style=\"width: 20%\"></div>
                  </div>
                  <span class=\"progress-description\">
                    20% Increase in 30 Days
                  </span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
              <div class=\"info-box bg-red\">
                <span class=\"info-box-icon\"><i class=\"ion ion-ios-cloud-download-outline\"></i></span>
                <div class=\"info-box-content\">
                  <span class=\"info-box-text\">Downloads</span>
                  <span class=\"info-box-number\">114,381</span>
                  <div class=\"progress\">
                    <div class=\"progress-bar\" style=\"width: 70%\"></div>
                  </div>
                  <span class=\"progress-description\">
                    70% Increase in 30 Days
                  </span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
              <div class=\"info-box bg-aqua\">
                <span class=\"info-box-icon\"><i class=\"ion-ios-chatbubble-outline\"></i></span>
                <div class=\"info-box-content\">
                  <span class=\"info-box-text\">Direct Messages</span>
                  <span class=\"info-box-number\">163,921</span>
                  <div class=\"progress\">
                    <div class=\"progress-bar\" style=\"width: 40%\"></div>
                  </div>
                  <span class=\"progress-description\">
                    40% Increase in 30 Days
                  </span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
          </div><!-- /.row -->

          <div class='row'>
            <div class='col-md-4'>
              <!-- DIRECT CHAT -->
              <div class=\"box box-warning direct-chat direct-chat-warning\">
                <div class=\"box-header with-border\">
                  <h3 class=\"box-title\">Direct Chat</h3>
                  <div class=\"box-tools pull-right\">
                    <span data-toggle=\"tooltip\" title=\"3 New Messages\" class='badge bg-yellow'>3</span>
                    <button class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i></button>
                    <button class=\"btn btn-box-tool\" data-toggle=\"tooltip\" title=\"Contacts\" data-widget=\"chat-pane-toggle\"><i class=\"fa fa-comments\"></i></button>
                    <button class=\"btn btn-box-tool\" data-widget=\"remove\"><i class=\"fa fa-times\"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class=\"box-body\">
                  <!-- Conversations are loaded here -->
                  <div class=\"direct-chat-messages\">
                    <!-- Message. Default to the left -->
                    <div class=\"direct-chat-msg\">
                      <div class='direct-chat-info clearfix'>
                        <span class='direct-chat-name pull-left'>Alexander Pierce</span>
                        <span class='direct-chat-timestamp pull-right'>23 Jan 2:00 pm</span>
                      </div><!-- /.direct-chat-info -->
                      <img class=\"direct-chat-img\" src=\"";
        // line 729
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/img/user1-128x128.jpg"), "html", null, true);
        echo "\" alt=\"message user image\" /><!-- /.direct-chat-img -->
                      <div class=\"direct-chat-text\">
                        Is this template really for free? That's unbelievable!
                      </div><!-- /.direct-chat-text -->
                    </div><!-- /.direct-chat-msg -->

                    <!-- Message to the right -->
                    <div class=\"direct-chat-msg right\">
                      <div class='direct-chat-info clearfix'>
                        <span class='direct-chat-name pull-right'>Sarah Bullock</span>
                        <span class='direct-chat-timestamp pull-left'>23 Jan 2:05 pm</span>
                      </div><!-- /.direct-chat-info -->
                      <img class=\"direct-chat-img\" src=\"";
        // line 741
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/img/user3-128x128.jpg"), "html", null, true);
        echo "\" alt=\"message user image\" /><!-- /.direct-chat-img -->
                      <div class=\"direct-chat-text\">
                        You better believe it!
                      </div><!-- /.direct-chat-text -->
                    </div><!-- /.direct-chat-msg -->

                    <!-- Message. Default to the left -->
                    <div class=\"direct-chat-msg\">
                      <div class='direct-chat-info clearfix'>
                        <span class='direct-chat-name pull-left'>Alexander Pierce</span>
                        <span class='direct-chat-timestamp pull-right'>23 Jan 5:37 pm</span>
                      </div><!-- /.direct-chat-info -->
                      <img class=\"direct-chat-img\" src=\"";
        // line 753
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/img/user1-128x128.jpg"), "html", null, true);
        echo "\" alt=\"message user image\" /><!-- /.direct-chat-img -->
                      <div class=\"direct-chat-text\">
                        Working with AdminLTE on a great new app! Wanna join?
                      </div><!-- /.direct-chat-text -->
                    </div><!-- /.direct-chat-msg -->

                    <!-- Message to the right -->
                    <div class=\"direct-chat-msg right\">
                      <div class='direct-chat-info clearfix'>
                        <span class='direct-chat-name pull-right'>Sarah Bullock</span>
                        <span class='direct-chat-timestamp pull-left'>23 Jan 6:10 pm</span>
                      </div><!-- /.direct-chat-info -->
                      <img class=\"direct-chat-img\" src=\"";
        // line 765
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/img/user3-128x128.jpg"), "html", null, true);
        echo "\" alt=\"message user image\" /><!-- /.direct-chat-img -->
                      <div class=\"direct-chat-text\">
                        I would love to.
                      </div><!-- /.direct-chat-text -->
                    </div><!-- /.direct-chat-msg -->

                  </div><!--/.direct-chat-messages-->


                  <!-- Contacts are loaded here -->
                  <div class=\"direct-chat-contacts\">
                    <ul class='contacts-list'>
                      <li>
                        <a href='#'>
                          <img class='contacts-list-img' src='";
        // line 779
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/img/user1-128x128.jpg"), "html", null, true);
        echo "'/>
                          <div class='contacts-list-info'>
                            <span class='contacts-list-name'>
                              Count Dracula
                              <small class='contacts-list-date pull-right'>2/28/2015</small>
                            </span>
                            <span class='contacts-list-msg'>How have you been? I was...</span>
                          </div><!-- /.contacts-list-info -->
                        </a>
                      </li><!-- End Contact Item -->
                      <li>
                        <a href='#'>
                          <img class='contacts-list-img' src='";
        // line 791
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/img/user7-128x128.jpg"), "html", null, true);
        echo "'/>
                          <div class='contacts-list-info'>
                            <span class='contacts-list-name'>
                              Sarah Doe
                              <small class='contacts-list-date pull-right'>2/23/2015</small>
                            </span>
                            <span class='contacts-list-msg'>I will be waiting for...</span>
                          </div><!-- /.contacts-list-info -->
                        </a>
                      </li><!-- End Contact Item -->
                      <li>
                        <a href='#'>
                          <img class='contacts-list-img' src='";
        // line 803
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/img/user3-128x128.jpg"), "html", null, true);
        echo "'/>
                          <div class='contacts-list-info'>
                            <span class='contacts-list-name'>
                              Nadia Jolie
                              <small class='contacts-list-date pull-right'>2/20/2015</small>
                            </span>
                            <span class='contacts-list-msg'>I'll call you back at...</span>
                          </div><!-- /.contacts-list-info -->
                        </a>
                      </li><!-- End Contact Item -->
                      <li>
                        <a href='#'>
                          <img class='contacts-list-img' src='";
        // line 815
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/img/user5-128x128.jpg"), "html", null, true);
        echo "'/>
                          <div class='contacts-list-info'>
                            <span class='contacts-list-name'>
                              Nora S. Vans
                              <small class='contacts-list-date pull-right'>2/10/2015</small>
                            </span>
                            <span class='contacts-list-msg'>Where is your new...</span>
                          </div><!-- /.contacts-list-info -->
                        </a>
                      </li><!-- End Contact Item -->
                      <li>
                        <a href='#'>
                          <img class='contacts-list-img' src='";
        // line 827
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/img/user6-128x128.jpg"), "html", null, true);
        echo "'/>
                          <div class='contacts-list-info'>
                            <span class='contacts-list-name'>
                              John K.
                              <small class='contacts-list-date pull-right'>1/27/2015</small>
                            </span>
                            <span class='contacts-list-msg'>Can I take a look at...</span>
                          </div><!-- /.contacts-list-info -->
                        </a>
                      </li><!-- End Contact Item -->
                      <li>
                        <a href='#'>
                          <img class='contacts-list-img' src='";
        // line 839
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/img/user8-128x128.jpg"), "html", null, true);
        echo "'/>
                          <div class='contacts-list-info'>
                            <span class='contacts-list-name'>
                              Kenneth M.
                              <small class='contacts-list-date pull-right'>1/4/2015</small>
                            </span>
                            <span class='contacts-list-msg'>Never mind I found...</span>
                          </div><!-- /.contacts-list-info -->
                        </a>
                      </li><!-- End Contact Item -->
                    </ul><!-- /.contatcts-list -->
                  </div><!-- /.direct-chat-pane -->
                </div><!-- /.box-body -->
                <div class=\"box-footer\">
                  <form action=\"#\" method=\"post\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"message\" placeholder=\"Type Message ...\" class=\"form-control\"/>
                      <span class=\"input-group-btn\">
                        <button type=\"button\" class=\"btn btn-warning btn-flat\">Send</button>
                      </span>
                    </div>
                  </form>
                </div><!-- /.box-footer-->
              </div><!--/.direct-chat -->
            </div><!-- /.col -->
            <div class='col-md-4'>
              <!-- USERS LIST -->
              <div class=\"box box-danger\">
                <div class=\"box-header with-border\">
                  <h3 class=\"box-title\">Latest Members</h3>
                  <div class=\"box-tools pull-right\">
                    <span class=\"label label-danger\">8 New Members</span>
                    <button class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i></button>
                    <button class=\"btn btn-box-tool\" data-widget=\"remove\"><i class=\"fa fa-times\"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class=\"box-body no-padding\">
                  <ul class=\"users-list clearfix\">
                    <li>
                      <img src=\"";
        // line 878
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/img/user1-128x128.jpg"), "html", null, true);
        echo "\" alt=\"User Image\"/>
                      <a class=\"users-list-name\" href=\"#\">Alexander Pierce</a>
                      <span class=\"users-list-date\">Today</span>
                    </li>
                    <li>
                      <img src=\"";
        // line 883
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/img/user8-128x128.jpg"), "html", null, true);
        echo "\" alt=\"User Image\"/>
                      <a class=\"users-list-name\" href=\"#\">Norman</a>
                      <span class=\"users-list-date\">Yesterday</span>
                    </li>
                    <li>
                      <img src=\"";
        // line 888
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/img/user7-128x128.jpg"), "html", null, true);
        echo "\" alt=\"User Image\"/>
                      <a class=\"users-list-name\" href=\"#\">Jane</a>
                      <span class=\"users-list-date\">12 Jan</span>
                    </li>
                    <li>
                      <img src=\"";
        // line 893
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/img/user6-128x128.jpg"), "html", null, true);
        echo "\" alt=\"User Image\"/>
                      <a class=\"users-list-name\" href=\"#\">John</a>
                      <span class=\"users-list-date\">12 Jan</span>
                    </li>
                    <li>
                      <img src=\"";
        // line 898
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/img/user2-160x160.jpg"), "html", null, true);
        echo "\" alt=\"User Image\"/>
                      <a class=\"users-list-name\" href=\"#\">Alexander</a>
                      <span class=\"users-list-date\">13 Jan</span>
                    </li>
                    <li>
                      <img src=\"";
        // line 903
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/img/user5-128x128.jpg"), "html", null, true);
        echo "\" alt=\"User Image\"/>
                      <a class=\"users-list-name\" href=\"#\">Sarah</a>
                      <span class=\"users-list-date\">14 Jan</span>
                    </li>
                    <li>
                      <img src=\"";
        // line 908
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/img/user4-128x128.jpg"), "html", null, true);
        echo "\" alt=\"User Image\"/>
                      <a class=\"users-list-name\" href=\"#\">Nora</a>
                      <span class=\"users-list-date\">15 Jan</span>
                    </li>
                    <li>
                      <img src=\"";
        // line 913
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/img/user3-128x128.jpg"), "html", null, true);
        echo "\" alt=\"User Image\"/>
                      <a class=\"users-list-name\" href=\"#\">Nadia</a>
                      <span class=\"users-list-date\">15 Jan</span>
                    </li>
                  </ul><!-- /.users-list -->
                </div><!-- /.box-body -->
                <div class=\"box-footer text-center\">
                  <a href=\"javascript::\" class=\"uppercase\">View All Users</a>
                </div><!-- /.box-footer -->
              </div><!--/.box -->
            </div><!-- /.col -->
            <div class='col-md-4'>
              <div class=\"box box-default\">
                <div class=\"box-header with-border\">
                  <h3 class=\"box-title\">Browser Usage</h3>
                  <div class=\"box-tools pull-right\">
                    <button class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i></button>
                    <button class=\"btn btn-box-tool\" data-widget=\"remove\"><i class=\"fa fa-times\"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class=\"box-body\">
                  <div class=\"row\">
                    <div class=\"col-md-8\">
                      <div class=\"chart-responsive\">
                        <canvas id=\"pieChart\" height=\"150\"></canvas>
                      </div><!-- ./chart-responsive -->
                    </div><!-- /.col -->
                    <div class=\"col-md-4\">
                      <ul class=\"chart-legend clearfix\">
                        <li><i class=\"fa fa-circle-o text-red\"></i> Chrome</li>
                        <li><i class=\"fa fa-circle-o text-green\"></i> IE</li>
                        <li><i class=\"fa fa-circle-o text-yellow\"></i> FireFox</li>
                        <li><i class=\"fa fa-circle-o text-aqua\"></i> Safari</li>
                        <li><i class=\"fa fa-circle-o text-light-blue\"></i> Opera</li>
                        <li><i class=\"fa fa-circle-o text-gray\"></i> Navigator</li>
                      </ul>
                    </div><!-- /.col -->
                  </div><!-- /.row -->
                </div><!-- /.box-body -->
                <div class=\"box-footer no-padding\">
                  <ul class=\"nav nav-pills nav-stacked\">
                    <li><a href=\"#\">United States of America <span class=\"pull-right text-red\"><i class=\"fa fa-angle-down\"></i> 12%</span></a></li>
                    <li><a href=\"#\">India <span class=\"pull-right text-green\"><i class=\"fa fa-angle-up\"></i> 4%</span></a></li>
                    <li><a href=\"#\">China <span class=\"pull-right text-yellow\"><i class=\"fa fa-angle-left\"></i> 0%</span></a></li>
                  </ul>
                </div><!-- /.footer -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->

          <div class=\"row\">
            <div class=\"col-md-8\">
              <!-- TABLE: LATEST ORDERS -->
              <div class=\"box box-info\">
                <div class=\"box-header with-border\">
                  <h3 class=\"box-title\">Latest Orders</h3>
                  <div class=\"box-tools pull-right\">
                    <button class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i></button>
                    <button class=\"btn btn-box-tool\" data-widget=\"remove\"><i class=\"fa fa-times\"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class=\"box-body\">
                  <div class=\"table-responsive\">
                    <table class=\"table no-margin\">
                      <thead>
                        <tr>
                          <th>Order ID</th>
                          <th>Item</th>
                          <th>Status</th>
                          <th>Popularity</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><a href=\"pages/examples/invoice.html\">OR9842</a></td>
                          <td>Call of Duty IV</td>
                          <td><span class=\"label label-success\">Shipped</span></td>
                          <td><div class=\"sparkbar\" data-color=\"#00a65a\" data-height=\"20\">90,80,90,-70,61,-83,63</div></td>
                        </tr>
                        <tr>
                          <td><a href=\"pages/examples/invoice.html\">OR1848</a></td>
                          <td>Samsung Smart TV</td>
                          <td><span class=\"label label-warning\">Pending</span></td>
                          <td><div class=\"sparkbar\" data-color=\"#f39c12\" data-height=\"20\">90,80,-90,70,61,-83,68</div></td>
                        </tr>
                        <tr>
                          <td><a href=\"pages/examples/invoice.html\">OR7429</a></td>
                          <td>iPhone 6 Plus</td>
                          <td><span class=\"label label-danger\">Delivered</span></td>
                          <td><div class=\"sparkbar\" data-color=\"#f56954\" data-height=\"20\">90,-80,90,70,-61,83,63</div></td>
                        </tr>
                        <tr>
                          <td><a href=\"pages/examples/invoice.html\">OR7429</a></td>
                          <td>Samsung Smart TV</td>
                          <td><span class=\"label label-info\">Processing</span></td>
                          <td><div class=\"sparkbar\" data-color=\"#00c0ef\" data-height=\"20\">90,80,-90,70,-61,83,63</div></td>
                        </tr>
                        <tr>
                          <td><a href=\"pages/examples/invoice.html\">OR1848</a></td>
                          <td>Samsung Smart TV</td>
                          <td><span class=\"label label-warning\">Pending</span></td>
                          <td><div class=\"sparkbar\" data-color=\"#f39c12\" data-height=\"20\">90,80,-90,70,61,-83,68</div></td>
                        </tr>
                        <tr>
                          <td><a href=\"pages/examples/invoice.html\">OR7429</a></td>
                          <td>iPhone 6 Plus</td>
                          <td><span class=\"label label-danger\">Delivered</span></td>
                          <td><div class=\"sparkbar\" data-color=\"#f56954\" data-height=\"20\">90,-80,90,70,-61,83,63</div></td>
                        </tr>
                        <tr>
                          <td><a href=\"pages/examples/invoice.html\">OR9842</a></td>
                          <td>Call of Duty IV</td>
                          <td><span class=\"label label-success\">Shipped</span></td>
                          <td><div class=\"sparkbar\" data-color=\"#00a65a\" data-height=\"20\">90,80,90,-70,61,-83,63</div></td>
                        </tr>
                      </tbody>
                    </table>
                  </div><!-- /.table-responsive -->
                </div><!-- /.box-body -->
                <div class=\"box-footer clearfix\">
                  <a href=\"javascript::;\" class=\"btn btn-sm btn-info btn-flat pull-left\">Place New Order</a>
                  <a href=\"javascript::;\" class=\"btn btn-sm btn-default btn-flat pull-right\">View All Orders</a>
                </div><!-- /.box-footer -->
              </div><!-- /.box -->
            </div><!-- /.col -->
            <div class=\"col-md-4\">
              <!-- PRODUCT LIST -->
              <div class=\"box box-primary\">
                <div class=\"box-header with-border\">
                  <h3 class=\"box-title\">Recently Added Products</h3>
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
        // line 1063
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
        // line 1074
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
        // line 1085
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


                
                <div class=\"box-footer text-center\">
                  <a href=\"javascript::;\" class=\"uppercase\">View All Products</a>
                </div><!-- /.box-footer -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        <!-- Main content -->
        <section class=\"content\">
          <div class=\"row\">
            <div class=\"col-xs-12\">
              <div class=\"box\">
                <div class=\"box-header\">
                  <h3 class=\"box-title\">Hover Data Table</h3>
                </div><!-- /.box-header -->
                <div class=\"box-body\">
                  <table id=\"example2\" class=\"table table-bordered table-hover\">
                    <thead>
                      <tr>
                        
                        
                        <th>Rendering engine</th>
                        <th>Browser</th>
                        <th>Platform(s)</th>
                        <th>Engine version</th>
                        <th>CSS grade</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                          
                        <td><button class=\"btn btn-default btn-sm\"><i class=\"fa fa-trash-o\"></i></button> 2</td>
                        <td>Internet
                          Explorer 4.0</td>
                        <td>Win 95+</td>
                        <td> 4</td>
                        <td>X</td>
                        
                      </tr>
                      <tr>
                          
                        <td><button class=\"btn btn-default btn-sm\"><i class=\"fa fa-trash-o\"></i></button> 1</td>
                        <td>Internet
                          Explorer 4.0</td>
                        <td>Win 95+</td>
                        <td> 4</td>
                        <td>X</td>
                      </tr>

                    </tbody>
                    <tfoot>
                      <tr>
                        
                        <th>Rendering engine</th>
                        <th>Browser</th>
                        <th>Platform(s)</th>
                        <th>Engine version</th>
                        <th>CSS grade</th>
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
        
        <!-- Mail inbox -->
        <section class=\"content-header\">
          <h1>
            Mailbox
            <small>13 new messages</small>
          </h1>
          <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i> Home</a></li>
            <li class=\"active\">Mailbox</li>
          </ol>
        </section>

        <!-- Main Inbox content -->
        <section class=\"content\">
          <div class=\"row\">
            <div class=\"col-md-3\">
              <a href=\"compose.html\" class=\"btn btn-primary btn-block margin-bottom\">Compose</a>
              <div class=\"box box-solid\">
                
                <div class=\"box-body no-padding\">
                  <ul class=\"nav nav-pills nav-stacked\">
                    <li class=\"active\"><a href=\"#\"><i class=\"fa fa-inbox\"></i> Inbox <span class=\"label label-primary pull-right\">12</span></a></li>
                    <li class=\"active\"><a href=\"#\"><i class=\"fa fa-envelope-o\"></i> Sent</a></li>
                  </ul>
                </div><!-- /.box-body -->
              </div><!-- /. box -->
  
            </div><!-- /.col -->
            <div class=\"col-md-9\">
              <div class=\"box box-primary\">
                <div class=\"box-header with-border\">
                  <h3 class=\"box-title\">Inbox</h3>
                  <div class=\"box-tools pull-right\">
                    <div class=\"has-feedback\">
                      <input type=\"text\" class=\"form-control input-sm\" placeholder=\"Search Mail\"/>
                      <span class=\"glyphicon glyphicon-search form-control-feedback\"></span>
                    </div>
                  </div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                <div class=\"box-body no-padding\">
                  <div class=\"mailbox-controls\">
                    <!-- Check all button -->
                    <button class=\"btn btn-default btn-sm\"><i class=\"fa fa-refresh\"></i></button>
                    <div class=\"pull-right\">
                      1-50/200
                      <div class=\"btn-group\">
                        <button class=\"btn btn-default btn-sm\"><i class=\"fa fa-chevron-left\"></i></button>
                        <button class=\"btn btn-default btn-sm\"><i class=\"fa fa-chevron-right\"></i></button>
                      </div><!-- /.btn-group -->
                    </div><!-- /.pull-right -->
                  </div>
                  <div class=\"table-responsive mailbox-messages\">
                    <table class=\"table table-hover table-striped\">
                      <tbody>
                        <tr>
                          <td> <button class=\"btn btn-default btn-sm\"><i class=\"fa fa-trash-o\"></i></button></td>
                          <td class=\"mailbox-name\"><a href=\"read-mail.html\">Alexander Pierce</a></td>
                          <td class=\"mailbox-subject\"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...</td>
                          <td class=\"mailbox-attachment\"></td>
                          <td class=\"mailbox-date\">5 mins ago</td>
                        </tr>
                        <tr>
                          <td> <button class=\"btn btn-default btn-sm\"><i class=\"fa fa-trash-o\"></i></button></td>
                          <td class=\"mailbox-name\"><a href=\"read-mail.html\">Alexander Pierce</a></td>
                          <td class=\"mailbox-subject\"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...</td>
                          <td class=\"mailbox-attachment\"></td>
                          <td class=\"mailbox-date\">5 mins ago</td>
                        </tr>
                        
                        <tr>
                          <td> <button class=\"btn btn-default btn-sm\"><i class=\"fa fa-trash-o\"></i></button></td>
                          <td class=\"mailbox-name\"><a href=\"read-mail.html\">Alexander Pierce</a></td>
                          <td class=\"mailbox-subject\"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...</td>
                          <td class=\"mailbox-attachment\"></td>
                          <td class=\"mailbox-date\">5 mins ago</td>
                        </tr>
                       
                      </tbody>
                    </table><!-- /.table -->
                  </div><!-- /.mail-box-messages -->
                </div><!-- /.box-body -->
                <div class=\"box-footer no-padding\">
                  <div class=\"mailbox-controls\">
                    <!-- Check all button -->
                    <button class=\"btn btn-default btn-sm\"><i class=\"fa fa-refresh\"></i></button>
                    <div class=\"pull-right\">
                      1-50/200
                      <div class=\"btn-group\">
                        <button class=\"btn btn-default btn-sm\"><i class=\"fa fa-chevron-left\"></i></button>
                        <button class=\"btn btn-default btn-sm\"><i class=\"fa fa-chevron-right\"></i></button>
                      </div><!-- /.btn-group -->
                     
                    </div><!-- /.pull-right -->
                  </div>
                </div>
              </div><!-- /. box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      

    </div><!-- ./wrapper -->
    <footer class=\"main-footer\">
        <div class=\"pull-right hidden-xs\">
          <b>Version</b> 2.0
        </div>
        <strong>Copyright &copy; 2014-2015 <a href=\"http://almsaeedstudio.com\">Almsaeed Studio</a>.</strong> All rights reserved.
      </footer>
    
    <!-- Include all JavaScripts, compiled by Assetic -->
    
    <!-- AdminLTE App -->
    
    <!-- jQuery 2.1.3 -->
    <script src=\"";
        // line 1279
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/plugins/jQuery/jQuery-2.1.3.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src=\"";
        // line 1281
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <!-- FastClick -->
    <script src=\"";
        // line 1283
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/plugins/fastclick/fastclick.min.js"), "html", null, true);
        echo "\"></script>
    <!-- AdminLTE App -->
    <script src=\"";
        // line 1285
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/js/app.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- Sparkline -->
    <script src=\"";
        // line 1287
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/plugins/sparkline/jquery.sparkline.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- jvectormap -->
    <script src=\"";
        // line 1289
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 1290
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- daterangepicker -->
    <script src=\"";
        // line 1292
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/plugins/daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- datepicker -->
    <script src=\"";
        // line 1294
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/plugins/datepicker/bootstrap-datepicker.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- iCheck -->
    <script src=\"";
        // line 1296
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/plugins/iCheck/icheck.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- SlimScroll 1.3.0 -->
    <script src=\"";
        // line 1298
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/plugins/slimScroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- ChartJS 1.0.1 -->
    <script src=\"";
        // line 1300
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/plugins/chartjs/Chart.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src=\"";
        // line 1303
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/js/pages/dashboard2.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

    <!-- AdminLTE for demo purposes -->
    <script src=\"";
        // line 1306
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/js/demo.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- DATA TABES SCRIPT -->
    <script src=\"";
        // line 1308
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/plugins/datatables/jquery.dataTables.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 1309
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/plugins/datatables/dataTables.bootstrap.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

    <!-- FastClick -->
    <script src=\"";
        // line 1312
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/plugins/fastclick/fastclick.min.js"), "html", null, true);
        echo "\"></script>

        <!-- page script -->
    <script type=\"text/javascript\">
      \$(function () {
        \$('#example2').dataTable({
          \"bPaginate\": true,
          \"bLengthChange\": false,
          \"bFilter\": false,
          \"bSort\": true,
          \"bInfo\": true,
          \"bAutoWidth\": false
        });
      });
    </script>
    
  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "sprint2RealEstateAdminBundle:Core:admin_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1494 => 1312,  1488 => 1309,  1484 => 1308,  1479 => 1306,  1473 => 1303,  1467 => 1300,  1462 => 1298,  1457 => 1296,  1452 => 1294,  1447 => 1292,  1442 => 1290,  1438 => 1289,  1433 => 1287,  1428 => 1285,  1423 => 1283,  1418 => 1281,  1413 => 1279,  1216 => 1085,  1202 => 1074,  1188 => 1063,  1035 => 913,  1027 => 908,  1019 => 903,  1011 => 898,  1003 => 893,  995 => 888,  987 => 883,  979 => 878,  937 => 839,  922 => 827,  907 => 815,  892 => 803,  877 => 791,  862 => 779,  845 => 765,  830 => 753,  815 => 741,  800 => 729,  354 => 286,  311 => 246,  302 => 240,  170 => 111,  155 => 99,  140 => 87,  125 => 75,  110 => 63,  83 => 39,  67 => 26,  62 => 24,  56 => 21,  51 => 19,  46 => 17,  41 => 15,  36 => 13,  28 => 8,  19 => 1,);
    }
}
