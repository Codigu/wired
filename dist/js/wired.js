(function e(t,n,r){function s(o,u){if(!n[o]){if(!t[o]){var a=typeof require=="function"&&require;if(!u&&a)return a(o,!0);if(i)return i(o,!0);var f=new Error("Cannot find module '"+o+"'");throw f.code="MODULE_NOT_FOUND",f}var l=n[o]={exports:{}};t[o][0].call(l.exports,function(e){var n=t[o][1][e];return s(n?n:e)},l,l.exports,e,t,n,r)}return n[o].exports}var i=typeof require=="function"&&require;for(var o=0;o<r.length;o++)s(r[o]);return s})({1:[function(require,module,exports){
(function( $ ) {
  require('./wired/wired.menu.js');
  require('./wired/wired.smooth.scroll.js');
})( jQuery ); 
 
},{"./wired/wired.menu.js":2,"./wired/wired.smooth.scroll.js":3}],2:[function(require,module,exports){
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

},{}],3:[function(require,module,exports){
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
