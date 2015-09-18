(function( $ ) {

    /*
    * Add Smooth Scrolling Transition */
    var smoothTarget = function(){

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
    var toolTip = function(){
        $('[data-toggle="tooltip"]').tooltip();
    }

    toolTip();


    /* Popover.js
    * Add small overlays of content */
    var popOver = function(){
        $('[data-toggle="popover"]').popover()
    }
    
    popOver();


    /* bootstrap-datepicker.js
    * A datepicker for Twitter Bootstrap */

    var bootstrapDatepicker = function(){
        $('[data-plugin="datepicker"]').datepicker();
    }

    bootstrapDatepicker();

    /* chosen.js
    * jQuery plugin that makes long, unwieldy select boxes much more user-friendly. */

    var selectBox = function(){
        $('[data-plugin="selectbox"]').chosen();
    }

    selectBox();

})( jQuery );
