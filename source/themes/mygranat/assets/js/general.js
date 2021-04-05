(function ($) {
  'use strict';

  $(document).ready(function () {

    function granatMenu() {
      var $trigger = $('.trigger-nav'),
        $menu = $('.trigger-victim');

      $trigger.click(function () {
        $(this).toggleClass("active");
        $(this).next($menu).slideToggle();
      });

      $(window).resize(function () {
        if ($(window).width() > 768) {

          $menu.removeAttr('style');
          $('.ninja-btn').removeClass("active");
        }

      });
    }
    granatMenu()

  }); //end ready

}(jQuery));