(function($) {
    'use strict';
    /*
     * Add Smooth Scrolling Transition */
    $('.js-target[href^="#"]').click(function(event) {
        event.preventDefault();

        var id = $(this).attr("href");
        var target = $(id).offset().top;

        $('html, body').animate({ scrollTop: target }, 500);


    });
})(jQuery);
