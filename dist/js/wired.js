(function e(t,n,r){function s(o,u){if(!n[o]){if(!t[o]){var a=typeof require=="function"&&require;if(!u&&a)return a(o,!0);if(i)return i(o,!0);var f=new Error("Cannot find module '"+o+"'");throw f.code="MODULE_NOT_FOUND",f}var l=n[o]={exports:{}};t[o][0].call(l.exports,function(e){var n=t[o][1][e];return s(n?n:e)},l,l.exports,e,t,n,r)}return n[o].exports}var i=typeof require=="function"&&require;for(var o=0;o<r.length;o++)s(r[o]);return s})({1:[function(require,module,exports){
(function( $ ) {
  require('./wired/wired.fullscreen.js');
  require('./wired/wired.offcanvas.js');
  require('./wired/wired.smooth.scroll.js');
})( jQuery ); 
 
},{"./wired/wired.fullscreen.js":2,"./wired/wired.offcanvas.js":3,"./wired/wired.smooth.scroll.js":4}],2:[function(require,module,exports){
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

},{}],3:[function(require,module,exports){
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
 
},{}],4:[function(require,module,exports){
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

},{}]},{},[1]);
