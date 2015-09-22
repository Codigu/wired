<!DOCTYPE html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Wired | Beautifully Hand Crafted, Light Weight, Hardware Accelerated UI Framework on top of Bootstrap</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="apple-mobile-web-app-status-bar-style" content="default">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-touch-fullscreen" content="yes">
        <meta content="" name="description">
        <meta content="" name="author"> 
        
        <!-- Favicons -->
        <link rel="apple-touch-icon" href="../assets/images/ico/60.png">
        <link rel="apple-touch-icon" sizes="76x76" href="../assets/images/ico/76.png">
        <link rel="apple-touch-icon" sizes="120x120" href="../assets/images/ico/120.png">
        <link rel="apple-touch-icon" sizes="152x152" href="../assets/images/ico/152.png">
        <link rel="icon" type="image/x-icon" href="../assets/images/ico/favicon.png">
         
        <!-- Google fonts -->
        <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700" rel="stylesheet" type="text/css">

        <!-- Assets -->  
        <link rel="stylesheet" href="../assets/css/wired.docs.min.css">  

        <link rel="stylesheet" href="../assets/plugins/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css">
        <link rel="stylesheet" href="../assets/plugins/chosen/css/chosen.min.css">
        <link rel="stylesheet" href="../assets/plugins/dropzone/css/dropzone.min.css">
        <link rel="stylesheet" href="../assets/plugins/sweetalert/css/sweetalert2.min.css">
        <link rel="stylesheet" href="../assets/plugins/bootstrap-wysihtml5/css/bootstrap-wysihtml5.min.css">
        <link rel="stylesheet" href="../assets/plugins/font-awesome/font-awesome.min.css"> 
        <link rel="stylesheet" href="../assets/plugins/highlight/highlight.min.css"> 
        <link rel="stylesheet" href="../dist/css/wired.min.css"> 
         
    </head>   
    <body data-spy="scroll" data-target="#wd-docs-sidebar">    
 
    <header class="navbar navbar-inverse bg-menu navbar-static-top" id="top" role="banner">
      <div class="container bd-b bd-transparent"> 
        <div class="navbar-header"> 
          
          <a href="../" class="navbar-brand pd-y-10">
            <img src="../assets/images/logo-light.svg" width="90" alt="">
          </a>
        </div>
        <!--/ .navbar-header --> 
    </div></header> 

    <div id="primary" class="content-area"> 
      <main id="main" class="site-main" role="main">

        <div class="container">
            <div class="row"> 
                <div class="col-sm-9">
                    <section id="introduction" class="pd-b-30">
                        <h2 class="text-center">Wired Documentation</h2>
                        <h5 class="text-center">Hand Crafted UI Framework on top of Bootstrap </h5>
                        <hr>
  
                        <h3>Introductions</h3>   
                        <p><span class="font-heading">Wired</span> is an extension to <a href="http://getbootstrap.com/" target="_blank" class="bd-b bd-dashed bold">Bootstrap 3</a>, adding a number of features and components.</p>
  
                        <p>This documentation guide assumes you know the basic foundation of <span class="font-heading">Bootstrap</span> and its structure.</p>
                        <br>   
                        <h4>Ready to Go</h4> 
                        <p>Production level usage using minified and gzipped files</p>    
                        <table style="width:100%">        
                            <tbody>             
                                <tr>      
                                    <td style="width:80%; height:30px" class="bg-danger text-white text-center fs-14 pd-t-5 pd-b-5">
                                        CSS 
                                        <div class="fs-12">80KB</div>  
                                    </td>  
                                    <td style="width:10%; height:30px" class="bg-primary text-white text-center fs-14 pd-t-5 pd-b-5">JS
                                        <div class="fs-12">2Kb</div> 
                                    </td>
                                    <td style="width:50%; height:30px" class="bg-info text-white text-center fs-14 pd-t-5 pd-b-5">Icons
                                        <div class="fs-12">48KB</div> 
                                    </td>      
                                </tr>    
                            </tbody>         
                       </table>            
                    </section>            
                    <!--/ #introduction -->            
                     

                    <?php              
                    include "components/get-started.html";       
                    include "components/grid.html";      
                    include "components/typography.html";         
                    include "components/icons.html";          
                    include "components/buttons.html";      
                    include "components/breadcrumbs.html";              
                    include "components/dropdowns.html";                
                    include "components/progress-bars.html";        
                    include "components/tabs.html";           
                    include "components/notifications.html";           
                    include "components/forms.html";   
                    include "components/helpers.html";               
                    ?>              

                    

         
                              
                </div>      
                <div class="col-sm-3 hidden-xs"> 
                    <aside id="wd-docs-sidebar" class="wd-docs-sidebar bd-l bd-transparent affix">   
                        <ul class="nav menu"> 
                            <li><a class="target fs-13 block" href="#introduction">Introduction</a></li> 
                            <li><a class="target fs-13 block" href="#get-started">Get Started</a></li>
                            <li><a class="target fs-13 block" href="#grid">Grid</a></li>
                            <li><a class="target fs-13 block" href="#typography">Typography</a></li>
                            <li><a class="target fs-13 block" href="#icons">Icons</a></li>
                            <li><a class="target fs-13 block" href="#buttons">Buttons</a></li>
                            <li><a class="target fs-13 block" href="#breadcrumbs">Breadcrumbs</a></li>   
                            <li><a class="target fs-13 block" href="#progress">Progress</a></li>   
                            <li><a class="target fs-13 block" href="#dropdowns">Dropdowns</a></li>
                            <li><a class="target fs-13 block" href="#tabs">Tabs</a></li>
                            <li><a class="target fs-13 block" href="#notification">Notification</a></li>
                            <li><a class="target fs-13 block" href="#forms">Forms</a> 
                               <ul class="nav menu">   
                                    <li><a class="target fs-13 block" href="#form-controls">Form Controls</a></li>
                                    <li><a class="target fs-13 block" href="#inputfile">Input File</a></li>   
                                    <li><a class="target fs-13 block" href="#checkbox-controls">Checkbox</a></li>
                                    <li><a class="target fs-13 block" href="#toggle-controls">Toggle</a></li>
                                    <li><a class="target fs-13 block" href="#switch-controls">Switch</a></li>
                                    <li><a class="target fs-13 block" href="#editor">WYSIWYG editor</a></li>  
                                    <li><a class="target fs-13 block" href="#datepicker">Datepicker</a></li>  
                                    <li><a class="target fs-13 block" href="#selectbox">Selectbox</a></li> 
                                    <li><a class="target fs-13 block" href="#dropzone">Dropzone</a></li> 
                                </ul>  
                            </li>
                            <li> 
                                <a class="target fs-13 block" href="#helpers">Helpers</a>
                                <ul class="nav menu">
                                    <li><a class="target fs-13 block" href="#margins">Margins</a></li>
                                    <li><a class="target fs-13 block" href="#padding">Paddings</a></li> 
                                    <li><a class="target fs-13 block" href="#border">Border</a></li>
                                    <li><a class="target fs-13 block" href="#border-radius">Border Radius</a></li>  
                                    <li><a class="target fs-13 block" href="#box-shadow">Box Shadow</a></li> 
                                    <li><a class="target fs-13 block" href="#contextual-colors">Contextual Colors</a></li> 
                                    <li><a class="target fs-13 block" href="#contextual-bg">Contextual Backgrounds</a></li> 
                                    <li><a class="target fs-13 block" href="#font-size">Font Size</a></li> 
                                    <li><a class="target fs-13 block" href="#font-weights">Font Weights</a></li> 
                                    <li><a class="target fs-13 block" href="#font-face">Font Face</a></li> 
                                    <li><a class="target fs-13 block" href="#text-alignment">Text Alignment</a></li> 
                                    <li><a class="target fs-13 block" href="#float-alignment">Float Alignment</a></li> 
                                    <li><a class="target fs-13 block" href="#misc-classes">Misc Classes</a></li> 
                                </ul> 
                            </li>
                           
                        </ul>    
                       </aside> 
                </div>
            </div>
        </div>
        
      </main>
    </div>


        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="../assets/plugins/jquery/jquery.min.js"><\/script>')</script>
        <script src="../assets/plugins/modernizr/modernizr.min.js"></script>
        <script src="../assets/plugins/pace/js/pace.min.js"></script>
        <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="../assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
        <script src="../assets/plugins/dropzone/js/dropzone.min.js"></script>
        <script src="../assets/plugins/sweetalert/js/sweetalert2.min.js"></script>
        <script src="http://bootstrap-wysiwyg.github.io/bootstrap3-wysiwyg/components/wysihtml5x/dist/wysihtml5x-toolbar.min.js"></script>
        <script src="../assets/plugins/bootstrap-wysihtml5/js/bootstrap-wysihtml5.min.js"></script>
        <script src="../assets/plugins/chosen/js/chosen.min.js"></script>

        <script src="../assets/js/plugins.js"></script>
    </body>
</html>
