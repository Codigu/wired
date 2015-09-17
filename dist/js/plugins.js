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

    /* Affix.js
    * Activates your content as affixed content */
    $('#sidebar').affix({
      offset: {
        top: 0,
        bottom: function () {
          return (this.bottom = $('.footer').outerHeight(true))
        }
      }
    })

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

    /* Scrollspy.js
    * Automatically updating nav targets based on scroll position */

    var scrollSpy = function(){
        $('body').scrollspy({ target: '.sidebar' });
    }

    scrollSpy();

    /* bootstrap-datepicker.js
    * A datepicker for Twitter Bootstrap */

    var bootstrapDatepicker = function(){
        $('.date, .input-group.date, .input-daterange').datepicker();
    }

    bootstrapDatepicker();

    /* bootstrap-datepicker.js
    * Select2 is a jQuery based replacement for select boxes. 
    * It supports searching, remote data sets, and infinite scrolling of results. */

    var boostrapSelect = function(){
        $('.select2').select2();
    }

    boostrapSelect();


})( jQuery );
