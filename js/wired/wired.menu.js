(function($) {
  'use strict';

  /*
   * Toggle Menu
   * offcanvas menu navigation */
  var type;
  var target;
  const $body = $(document.body);
  const $menu = $('.navbar-toggle');

  $menu.on('click', function(event) {

    let data_toggle = $(this).data('toggle');
    let data_target = $(this).data('target');

    type = data_toggle;  
    target = data_target;  

    $body.toggleClass(data_toggle + '-open menu-open');
    $(data_target).toggleClass('in');

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
