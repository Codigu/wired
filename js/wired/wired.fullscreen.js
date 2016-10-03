(function( $ ) {
    'use strict';
    /*
     * Fullscreen Menu
     * Full screen menu navigation */
    $('[data-toggle="fullscreen"]').on('click', function(event) {
        event.preventDefault();
        
        var self = $(this);
        var target = self.data('target');

        $('body').toggleClass('menu-open fullscreen-open');
        $(target).toggleClass('in');

    });
})( jQuery ); 
