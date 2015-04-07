<?php

/* sprint2RealEstateAdminBundle:Pages:mail.html.twig */
class __TwigTemplate_0c242fb36d855afd42c760e4de51820b6f92335ebeb0b90e9586efef78ca0139 extends Twig_Template
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
            'Image' => array($this, 'block_Image'),
            'MailboxActive' => array($this, 'block_MailboxActive'),
            'MailboxEtra' => array($this, 'block_MailboxEtra'),
            'MailboxEtra2' => array($this, 'block_MailboxEtra2'),
            'MailCore' => array($this, 'block_MailCore'),
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
    public function block_Image($context, array $blocks = array())
    {
        // line 3
        echo "    <img src=\"";
        echo twig_escape_filter($this->env, (isset($context["image"]) ? $context["image"] : $this->getContext($context, "image")), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\" />
";
    }

    // line 5
    public function block_MailboxActive($context, array $blocks = array())
    {
        // line 6
        echo "    class=\"active treeview\"
";
    }

    // line 8
    public function block_MailboxEtra($context, array $blocks = array())
    {
        // line 9
        echo "    <i class=\"fa fa-angle-left pull-right\"></i>
";
    }

    // line 11
    public function block_MailboxEtra2($context, array $blocks = array())
    {
        // line 12
        echo "    <ul class=\"treeview-menu\">
        <li class=\"active\"><a class=\"inboxnaber\" href=\"MailBox\">Inbox </a></li>
        <li><a href=\"SentMail\">Sent</a></li>   
    </ul>
";
    }

    // line 17
    public function block_MailCore($context, array $blocks = array())
    {
        // line 18
        echo "    <section class=\"content\">
        <div class=\"row\">
            <div class=\"col-md-3\">
                
                <div class=\"box box-solid\">
                    
                    <div class=\"box-body no-padding\">
                        <ul class=\"nav nav-pills nav-stacked\">
                            <li class=\"active\"><a class=\"inboxnaber\" href=\"MailBox\"><i class=\"fa fa-inbox\"></i> Inbox</a></li>
                            <li><a href=\"SentMail\"><i class=\"fa fa-envelope-o\"></i> Sent</a></li>
                        </ul>
                    </div><!-- /.box-body -->
                </div><!-- /. box -->
                    
            </div><!-- /.col -->
            <div class=\"col-md-9\">
                ";
        // line 35
        echo "                <div class=\"box box-primary xwcvbnfghj\" style=\"display:none\">
                    <div class=\"box-header with-border\">
                        <h3 class=\"box-title\">Read Mail</h3>
                        <div class=\"box-tools pull-right\">
                            <a data-original-title=\"Previous\" href=\"#\" class=\"btn btn-box-tool\" data-toggle=\"tooltip\" title=\"\"><i class=\"fa fa-chevron-left\"></i></a>
                            <a data-original-title=\"Next\" href=\"#\" class=\"btn btn-box-tool\" data-toggle=\"tooltip\" title=\"\"><i class=\"fa fa-chevron-right\"></i></a>
                        </div>
                    </div><!-- /.box-header -->
                    <div class=\"box-body no-padding\">

                        <div class=\"mailbox-read-message cvbhdhdhhdhdh\">
                            
                        </div><!-- /.mailbox-read-message -->
                    </div><!-- /.box-body -->

                    <div class=\"box-footer\">
                        <div class=\"pull-right\">
                            <button class=\"btn btn-default\" onclick=\"backinbox()\"><i class=\"fa fa-reply\"></i> Back</button>
                            
                        </div>
                        <button class=\"btn btn-default\"><i class=\"fa fa-trash-o\"></i> Delete</button>
                        <button class=\"btn btn-default\"><i class=\"fa fa-print\"></i> Print</button>
                    </div><!-- /.box-footer -->
                    
                </div>
                ";
        // line 61
        echo "                <div class=\"box box-primary xwcvbnfghj1\" >
                    <div class=\"box-header with-border\">
                        <h3 class=\"box-title\">Inbox</h3>
                        <div class=\"box-tools pull-right\">
                            <div class=\"has-feedback\">
                                <input id=\"target\" type=\"text\" class=\"form-control input-sm\" placeholder=\"Search Mail\"/>
                                <span class=\"glyphicon glyphicon-search form-control-feedback\"></span>
                            </div>
                        </div><!-- /.box-tools -->
                    </div><!-- /.box-header -->
                    <div class=\"box-body no-padding\">
                        <div class=\"mailbox-controls\">
                            <!-- Check all button -->
                            <button class=\"btn btn-default btn-sm\" onclick=\"upDateinbox()\"><i class=\"fa fa-refresh\"></i></button>
                            <div class=\"pull-right\">
                                <label class=\"xxxx1\"> </label>
                                <div class=\"btn-group\">
                                    <button class=\"btn btn-default btn-sm\" onclick=\"previnbox()\"><i class=\"fa fa-chevron-left\"></i></button>
                                    <button class=\"btn btn-default btn-sm\" onclick=\"nextinbox()\"><i class=\"fa fa-chevron-right\"></i></button>
                                </div><!-- /.btn-group -->
                            </div><!-- /.pull-right -->
                        </div>
                        <div class=\"box-body no-padding\">
                            <div class=\"table-responsive mailbox-messages\">
                                <table class=\"table table-hover table-striped\">
                                    <tbody class=\"kgksnbkjnkjgnkjjsnggd\">
                                    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                            
                            
                        <div class=\"box-footer no-padding\">
                            <div class=\"mailbox-controls\">
                                <!-- Check all button -->
                                <button class=\"btn btn-default btn-sm\" onclick=\"upDateinbox()\"><i class=\"fa fa-refresh\"></i></button>
                                <div class=\"pull-right\">
                                    <label class=\"xxxx2\"> </label>
                                    <div class=\"btn-group\">
                                        <button class=\"btn btn-default btn-sm\" onclick=\"previnbox()\"><i class=\"fa fa-chevron-left\"></i></button>
                                        <button class=\"btn btn-default btn-sm\" onclick=\"nextinbox()\"><i class=\"fa fa-chevron-right\"></i></button>
                                    </div><!-- /.btn-group -->
                                    <div class=\"overlay1\"/>
                                    <div class=\"overlay\">
                                        <i class=\"fa fa-refresh fa-spin\"></i>
                                    </div>
                                </div><!-- /.pull-right -->
                            </div>
                        </div>
                    </div><!-- /. box -->
                </div><!-- /.col -->
                    
            </div><!-- /.row -->
    </section><!-- /.content -->
    <!-- jQuery 2.1.3 -->
    <script src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/plugins/jQuery/jQuery-2.1.3.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        var pageX;
        var countmailX
        \$(document).ready(function(){ 
           
            pageX=0;
            
            
            \$.ajax({
                type: 'GET',
                url:  'ajax2/0',
                beforeSend: function () {
                    console.log(\"before send\");
                    
                },
                success: function (data) {
                    
                    console.log(data.datalist);
                    countmailX = data.cmail  ;   
                    countmailX4 = data.cmail4 ; 
                    \$( '<span class=\"label label-primary pull-right inboxnaberspam\">'+countmailX4+'</span>').appendTo('.inboxnaber');
                    
                    \$( \".overlay\").remove();  
                    upDateinbox()
                }                          
            });
        }) ;
        
        function upDateinbox() {
            console.log(pageX);
            pageXMx = (pageX + 1) * 10;
            pageXMn = pageXMx - 9;
            
            \$( '<div class=\"overlay\"><i class=\"fa fa-refresh fa-spin\"></i></div>').appendTo('.overlay1');
            
            \$( \".dkj\").remove(); 
            
            \$.ajax({
                type: 'GET',
                url:  'ajax2/'+pageX,
                beforeSend: function () {
                    console.log(\"before send\");

                },
                success: function (data) {

                    console.log(data.datalist);
                    countmailX = data.cmail  ;
                    countmailX4 = data.cmail4 ; 
                    console.log(data.cmail4);
                    \$( \".inboxnaberspam\").remove(); 
                    \$( '<span class=\"label label-primary pull-right inboxnaberspam\">'+countmailX4+'</span>').appendTo('.inboxnaber');
                    data.datalist.forEach(function(rowData) {         
                        \$('<tr class=\"dkj\"><td> <button class=\"btn btn-default btn-sm\" onclick=\"dellOneMailinbox('+rowData[2]+')\"><i class=\"fa fa-trash-o\"></i></button></td><td class=\"mailbox-name\"><a onclick=\"readinbox('+rowData[2]+')\">'+rowData[0]+'</a></td><td class=\"mailbox-subject\">'+rowData[1].slice(0,30)+'......'+'</td><td class=\"mailbox-date\">'+rowData[3]+'</td></tr>').appendTo('.kgksnbkjnkjgnkjjsnggd');
                    });
                    \$( \".xxxx3\").remove(); 
                    \$( \".xxxx4\").remove(); 
                    if(pageXMx>countmailX){
                        pageXMx=countmailX;
                    }
                    
                    \$( '<label class=\"xxxx3\">'+pageXMn+'-'+pageXMx+'/'+countmailX+'</label>').appendTo('.xxxx2');
                    \$( '<label class=\"xxxx4\">'+pageXMn+'-'+pageXMx+'/'+countmailX+'</label>').appendTo('.xxxx1');
                    \$( \".overlay\").remove();                                      
                }                          
            });
        };
        
        function nextinbox() {
            console.log(pageX);
            pageX=pageX+1;
            pageXMx = (pageX + 1) * 10;
            pageXMn = pageXMx - 9;
            if(pageXMn>countmailX)
            {pageX=pageX-1;}else{
                if(pageXMx>countmailX){
                    pageXMx=countmailX;
                }
            \$( \".xxxx3\").remove();
            \$( \".xxxx4\").remove(); 
            \$( '<label class=\"xxxx3\">'+pageXMn+'-'+pageXMx+'/'+countmailX+'</label>').appendTo('.xxxx2');
            \$( '<label class=\"xxxx4\">'+pageXMn+'-'+pageXMx+'/'+countmailX+'</label>').appendTo('.xxxx1');
            \$( '<div class=\"overlay\"><i class=\"fa fa-refresh fa-spin\"></i></div>').appendTo('.overlay1');

            \$( \".dkj\").remove(); 
        
            \$.ajax({
                type: 'GET',
                url:  'ajax2/'+pageX,
                beforeSend: function () {
                    console.log(\"before send\");

                },
                success: function (data) {

                    console.log(data.datalist);

                    data.datalist.forEach(function(rowData) {         
                        \$('<tr class=\"dkj\"><td> <button class=\"btn btn-default btn-sm\" onclick=\"dellOneMailinbox('+rowData[2]+')\"><i class=\"fa fa-trash-o\"></i></button></td><td class=\"mailbox-name\"><a onclick=\"readinbox('+rowData[2]+')\">'+rowData[0]+'</a></td><td class=\"mailbox-subject\">'+rowData[1].slice(0,30)+'......'+'</td><td class=\"mailbox-date\">'+rowData[3]+'</td></tr>').appendTo('.kgksnbkjnkjgnkjjsnggd');
                    });
                    \$( \".overlay\").remove();                                      
                }                          
            });}
        };
        
        function previnbox() {
            console.log(pageX);
            pageX=pageX-1;
            pageXMx = (pageX + 1) * 10;
            pageXMn = pageXMx - 9;
            if(pageXMn<0)
            {pageX=pageX+1;}else{
            \$( \".xxxx3\").remove(); 
            \$( \".xxxx4\").remove(); 
            \$( '<label class=\"xxxx3\">'+pageXMn+'-'+pageXMx+'/'+countmailX+'</label>').appendTo('.xxxx2');
            \$( '<label class=\"xxxx4\">'+pageXMn+'-'+pageXMx+'/'+countmailX+'</label>').appendTo('.xxxx1');
            \$( '<div class=\"overlay\"><i class=\"fa fa-refresh fa-spin\"></i></div>').appendTo('.overlay1');

            \$( \".dkj\").remove(); 
        
            \$.ajax({
                type: 'GET',
                url:  'ajax2/'+pageX,
                beforeSend: function () {
                    console.log(\"before send\");

                },
                success: function (data) {

                    console.log(data.datalist);

                    data.datalist.forEach(function(rowData) {         
                        \$('<tr class=\"dkj\"><td> <button class=\"btn btn-default btn-sm\" onclick=\"dellOneMailinbox('+rowData[2]+')\"><i class=\"fa fa-trash-o\"></i></button></td><td class=\"mailbox-name\"><a onclick=\"readinbox('+rowData[2]+')\">'+rowData[0]+'</a></td><td class=\"mailbox-subject\">'+rowData[1].slice(0,30)+'......'+'</td><td class=\"mailbox-date\">'+rowData[3]+'</td></tr>').appendTo('.kgksnbkjnkjgnkjjsnggd');
                    });
                    \$( \".overlay\").remove();                                      
                }                          
            });}    
        };
        
        function dellOneMailinbox(sdfg) {
            console.log(pageX);
            
            \$( '<div class=\"overlay\"><i class=\"fa fa-refresh fa-spin\"></i></div>').appendTo('.overlay1');

            \$( \".dkj\").remove(); 
        
            \$.ajax({
                type: 'GET',
                url:  'ajax2/'+pageX+'/'+sdfg,
                beforeSend: function () {
                    console.log(\"before send\");
                },
                success: function (data) {
                    \$( \".overlay\").remove();
                   
                    pageXMx = (pageX + 1) * 10;
                    pageXMn = pageXMx - 9;
                    ";
        // line 278
        echo "                    countmailX = data.cmail ;
                   
                     console.log(\"fdggsgrgr \"+data.cmail%10);
                    console.log(data.datalist);
                    upDateinbox();                                 
                }                          
            });
        };  
        
    \$( \"#target\" ).keyup(function() {
        var bla = \$('#target').val();
        ";
        // line 290
        echo "        console.log(pageX);
        
        \$( '<div class=\"overlay\"><i class=\"fa fa-refresh fa-spin\"></i></div>').appendTo('.overlay1');
        
        \$( \".dkj\").remove(); 
        
        \$.ajax({
            type: 'GET',
            url:  'ajax3/'+pageX+'/'+bla,
            beforeSend: function () {
                console.log(\"before send\");
                
            },
            success: function (data) {
                
                console.log(data.datalist);
                
                data.datalist.forEach(function(rowData) {         
                    \$('<tr class=\"dkj\"><td> <button class=\"btn btn-default btn-sm\" onclick=\"dellOneMailinbox('+rowData[2]+')\"><i class=\"fa fa-trash-o\"></i></button></td><td class=\"mailbox-name\"><a onclick=\"readinbox('+rowData[2]+')\">'+rowData[0]+'</a></td><td class=\"mailbox-subject\">'+rowData[1].slice(0,30)+'......'+'</td><td class=\"mailbox-date\">'+rowData[3]+'</td></tr>').appendTo('.kgksnbkjnkjgnkjjsnggd');
                });
                countmailX = data.cmail ;
                if(pageXMx>countmailX){
                        pageXMx=countmailX;
                    }
                \$( \".xxxx3\").remove();
                \$( \".xxxx4\").remove(); 
                \$( '<label class=\"xxxx3\">'+pageXMn+'-'+pageXMx+'/'+countmailX+'</label>').appendTo('.xxxx2');
                \$( '<label class=\"xxxx4\">'+pageXMn+'-'+pageXMx+'/'+countmailX+'</label>').appendTo('.xxxx1');
                \$( \".overlay\").remove();                                      
            }                          
        });
    });   
    function readinbox(id) {
        \$.ajax({
            type: 'GET',
            url:  'ajax4/'+id,
            beforeSend: function () {
                console.log(\"before send\");
                
            },
            success: function (data) {
                
                console.log(data.datamail);
                
                \$( '<p class=\"sdsdhjskskuygkyyzg\">'+data.datamail+'</p>').appendTo('.cvbhdhdhhdhdh');     
                \$(\".xwcvbnfghj1\").hide();
                \$(\".xwcvbnfghj\").show();                                     
            }                          
        });
        
    };   
    function backinbox() {
        \$(\".xwcvbnfghj1\").show();
        \$(\".xwcvbnfghj\").hide();
        \$( \".sdsdhjskskuygkyyzg\").remove();
        upDateinbox();
    };   
    </script>
";
    }

    public function getTemplateName()
    {
        return "sprint2RealEstateAdminBundle:Pages:mail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  357 => 290,  344 => 278,  183 => 117,  125 => 61,  98 => 35,  80 => 18,  77 => 17,  69 => 12,  66 => 11,  61 => 9,  58 => 8,  53 => 6,  50 => 5,  43 => 3,  40 => 2,  11 => 1,);
    }
}
