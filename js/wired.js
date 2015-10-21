(function( $ ) {

    /*
    * Add Smooth Scrolling Transition */
    $('a.target[href^="#"]').click(function(event) {

        var id      = $(this).attr("href"),
            target  = $(id).offset().top;

        $('html, body').animate({ scrollTop:target }, 500);

        event.preventDefault();
    });

 
    /*
    * Offcanvas Menu 
    * Replaced Bootstrap's native collapsable menu */
    $('[data-toggle="offcanvas"]').on('click', function(event){
        var self    =   $(this),
            target  =   self.data('target'),
            body    =   document.body;

        $(body).toggleClass('menu-open');
        $(target).toggleClass('offcanvas-open');

        return false;
    }); 

})( jQuery ); 
