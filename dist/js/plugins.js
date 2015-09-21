(function( $ ) {

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

    /* Tooltip.js
    * Hover over the links below to see tooltips */
    function toolTip(){
        $('[data-toggle="tooltip"]').tooltip();
    }

    toolTip();


    /* Popover.js
    * Add small overlays of content */
    function popOver(){
        $('[data-toggle="popover"]').popover()
    }
    
    popOver();


    /* bootstrap-datepicker.js
    * A datepicker for Twitter Bootstrap */

    function bootstrapDatepicker(){
        $('[data-plugin="datepicker"]').datepicker();
    }

    bootstrapDatepicker();

    /* chosen.js
    * jQuery plugin that makes long, unwieldy select boxes much more user-friendly. */

    function selectBox(){
        $('[data-plugin="selectbox"]').chosen();
    }

    selectBox();

    /* dropzone.js
    * An open source library that provides drag’n’drop file uploads with image previews. */
 
    function dropZone(){
        $('[data-plugin="dropzone"]').dropzone();
    }
 
    dropZone();

    function inputFile(){ 
        var inputs = $('.inputfile input[type="file"]');

        inputs.each(function(){ 
            $(this).on('change', function(){
                var fileName = '';
                fileName =  $(this).val().split( '\\' ).pop();
                
                if(fileName){
                    $(this).next('label').text(fileName);
                }
            });
        });
    }

    inputFile();

    

})( jQuery ); 
