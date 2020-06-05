(function ($) {
  "use strict";
    $(window).scroll(function () {
        if ( $(window).scrollTop() > 100 ) {
            $('.navbar').addClass('active');
        } else {
            $('.navbar').removeClass('active');
        }
    });
})(jQuery);