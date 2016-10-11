(function($) {
    'use strict';

    /*
     * Toggle Menu
     * offcanvas menu navigation */
    var $body   = $(document.body);
    var $menu   = $('.navbar-toggle');
    var $type   = $( $menu.data('toggle') );
    var $target = $( $menu.data('target') );

    $menu.on('click', function(event) {

        $body.toggleClass($type.selector + '-open menu-open');
        $target.toggleClass('in');

        console.log($type);

        return false;
    });

    // CLicking outside the target contianer 
    $body.on('click', function(event) {
        if ( $body.hasClass($type.selector + '-open') ) {
            if ( $(event.target).hasClass($target.selector) ) {
                return false;
            } else if(  $(event.target).hasClass('dropdown-toggle') ) {
                return true;
            }

            $body.removeClass($type.selector + '-open menu-open');
            $target.removeClass('in');
        }
    });




})(jQuery);
