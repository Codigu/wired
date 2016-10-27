(function($) {
    'use strict';
    /*
     * Add Smooth Scrolling Transition */
    $('.js-target[href^="#"]').click(function(event) {
        event.preventDefault();

        const id = $(this).attr("href");
        let target = $(id).offset().top;

        $('html, body').animate({ scrollTop: target }, 500);


    });
})(jQuery);
