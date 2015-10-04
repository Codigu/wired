(function( $ ) {

    /*
    * Wired v1.0.0
    * JS - Table of Contents
    *
    * smoothTarget();
    * offcanvasMenu();
    * inputFile();
    * toolTip();
    * popOver();
    * datePicker();
    * selectBox();
    * dropZone();
    * sweetAlert();
    * wysiHtml5();
    */

    /*
    * Add Smooth Scrolling Transition */
    function smoothTarget(){

        $('a.target[href^="#"]').click(function(event) {

            var id      = $(this).attr("href"),
                target  = $(id).offset().top;

            $('html, body').animate({ scrollTop:target }, 500);

            event.preventDefault();
        });

    }

    smoothTarget();
 
    /*
    * Offcanvas Menu 
    * Replaced Bootstrap's native collapsable menu */

    function offcanvasMenu(){
        $('[data-toggle="offcanvas"]').on('click', function(event){
            var self    =   $(this),
                target  =   self.data('target'),
                body    =   document.body;
 
            $(body).toggleClass('menu-open');
            $(target).toggleClass('offcanvas-open');

            return false;
        }); 

    }

    offcanvasMenu();


    /* InputFile
    * Adding the filename label to the input file button */

    function inputFile(){ 
        var inputs = $('.inputfile input[type="file"]');

        inputs.each(function(){ 
            $(this).on('change', function(){
                var self        =   $(this),
                    fileName    =   '';
                    fileName    =   self.val().split( '\\' ).pop();
                
                if(fileName){
                    $(this).next('label').text(fileName);
                }
            });
        });
    }

    inputFile();

    /* Tooltip.js
    * Hover over the links below to see tooltips */
    $('[data-toggle="tooltip"]').tooltip();

    /* Popover.js
    * Add small overlays of content */
    $('[data-toggle="popover"]').popover()

    /* bootstrap-datepicker.js
    * A datepicker for Twitter Bootstrap */
    $('[data-plugin="datepicker"]').datepicker();

    /* chosen.js
    * jQuery plugin that makes long, unwieldy select boxes much more user-friendly. */
    $('[data-plugin="selectbox"]').chosen();

    /* dropzone.js
    * An open source library that provides drag’n’drop file uploads with image previews. */
    $('[data-plugin="dropzone"]').dropzone();

    /* bootstrap-wysihtml5.js
    * Simple, beautiful wysiwyg editors */
    $('[data-plugin="wysihtml5"]').wysihtml5();


    /* sweetalert2.js
    * A beautiful and customizable replacement for Javascript's "Alert" */
 
    function sweetAlert(){

        // Show basic message
         $('[data-plugin="sweetAlert"]').on('click', function(){
             swal('The Internet?', 'That thing is still around?');
          });

        // Show success message
        $('[data-plugin="sweetAlert"][data-alert="success"]').on('click', function(){
           swal(   'Good job!',  'You clicked the button!',   'success' );
        });

        // Show error message
        $('[data-plugin="sweetAlert"][data-alert="danger"]').on('click', function(){
         swal(   'Oops...',  'Something went wrong!!',   'error' );
        });
    }
 
    sweetAlert();
    

})( jQuery ); 
