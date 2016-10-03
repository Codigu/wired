(function($) {
    'use strict';
    /*
     * Offcanvas Menu
     * offcanvas menu navigation */
    var body = document.body;

    $('[data-toggle="offcanvas"]').on('click', function(event) {
        event.preventDefault();

        var self = $(this);
        var target = self.data('target');

        $(body).toggleClass('menu-open offcanvas-open');
        $(target).toggleClass('in');

        return false;

    });

    $(document).on('click', function(event){
        if( $(event.target).closest('.offcanvas').length > 0 ) {
            return false;
        }

      $(body).removeClass('menu-open offcanvas-open');
      $('.offcanvas').removeClass('in');
    });

})(jQuery);
 