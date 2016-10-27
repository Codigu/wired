(function($) {
    'use strict';

    /*
     * Toggle Menu
     * offcanvas menu navigation */
    const $body = $(document.body);
    const $menu = $('.navbar-toggle');
    const type = $menu.data('toggle');
    const target = $menu.data('target');

    $menu.on('click', function(event) {

        $body.toggleClass(type + '-open menu-open');
        $(target).toggleClass('in');

        return false;
    });

    // CLicking outside the target contianer 
    $body.on('click', function(event) {
        if ($body.hasClass(type + '-open')) {
            if ($(event.target).is(target)) {
                return false; 
            } else if ($(event.target).hasClass('dropdown-toggle')) {
                return true;
            }

           $body.removeClass(type + '-open menu-open');
           $(target).removeClass('in');
        }
    });




})(jQuery);
