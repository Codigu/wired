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
        <link rel="apple-touch-icon" href="images/ico/60.png">
        <link rel="apple-touch-icon" sizes="76x76" href="images/ico/76.png">
        <link rel="apple-touch-icon" sizes="120x120" href="images/ico/120.png">
        <link rel="apple-touch-icon" sizes="152x152" href="images/ico/152.png">
        <link rel="icon" type="image/x-icon" href="images/ico/favicon.png">
        
        <!-- Google fonts -->
        <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700" rel="stylesheet" type="text/css">

        <!-- Assets --> 
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/bootstrap-datepicker.min.css">
        <link rel="stylesheet" href="../css/bootstrap-select2.min.css">
        <link rel="stylesheet" href="../css/font-awesome.min.css">
        <link rel="stylesheet" href="../css/highlight.min.css">
        <link rel="stylesheet" href="../css/style.css"> 
        
    </head>
    <body>

    <header class="navbar navbar-inverse bg-menu navbar-static-top" id="top" role="banner">
      <div class="container bd-b bd-transparent">
        <div class="navbar-header">
         
          <a href="/" class="navbar-brand pd-y-10">
            <img src="../images/logo-light.svg" width="90" alt="">
          </a>
        </div>
        <!--/ .navbar-header -->
    </div></header> 

    <div id="primary" class="content-area">
      <main id="main" class="site-main" role="main">

        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <section id="introduction" class="pd-t-30 pd-b-30">
                        <h2 class="text-center">Wired Documentation</h2>
                        <h5 class="text-center">Beautifully Hand Crafted, Light Weight, Hardware Accelerated UI Framework on top of Bootstrap </h5>
                    </section>

                    <?php 
                    include 'components/helpers.html'; 
                    include 'components/buttons.html'; 
                    include 'components/button-group.html'; 
                    include 'components/button-dropdown.html'; 
                    include 'components/forms.html'; 
                    include 'components/input-group.html'; 
                    include 'components/dropdown.html'; 
                    include 'components/breadcrumb.html'; 
                    include 'components/pagination.html'; 
                    include 'components/progress.html'; 
                    ?>
                </div>
                <div class="col-sm-3">
                    <aside id="sidebar" class="bd-l bd-transparent affix-top" data-spy="affix" data-offset-top="0" data-offset-bottom="200" style="top: 20px;">
                        <ul class="nav menu">
                            <li><a class="target fs-13" href="#helpers">Helpers</a></li>
                            <li><a class="target fs-13" href="#buttons">Buttons</a></li>
                            <li><a class="target fs-13" href="#button-group">Button Group</a></li>
                            <li><a class="target fs-13" href="#button-dropdown">Button Dropdown</a></li>
                            <li><a class="target fs-13" href="#forms">Forms</a></li>
                            <li><a class="target fs-13" href="#input-group">Input Group</a></li>
                            <li><a class="target fs-13" href="#dropdowns">Dropdowns</a></li>
                            <li><a class="target fs-13" href="#breadcrumb">Breadcrumb</a></li>
                            <li><a class="target fs-13" href="#pagination">Pagination</a></li>
                            <li><a class="target fs-13" href="#progress">Progress</a></li>
                        </ul>   
                    </aside>
                </div>
            </div>
        </div>
        
      </main>
    </div>


    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="../js/jquery.min.js"><\/script>')</script>
        <script src="../js/vendor/modernizr.min.js"></script>
        <script src="../js/vendor/pace.min.js"></script>
        <script src="../js/vendor/bootstrap.min.js"></script>
        <script src="../js/vendor/bootstrap-datepicker.min.js"></script>
        <script src="../js/vendor/bootstrap-select2.min.js"></script>
        <script src="../js/plugins.js"></script>

    </body>
</html>
