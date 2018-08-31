export default {
  init() {
    // JavaScript to be fired on all pages
    $('.hamburger').click(function() {
        var $nav = $('.primary-nav');

        $(this).toggleClass('is-active');

        if ($nav.hasClass('hidden')) {
            $nav.addClass('fadeIn').removeClass('hidden fadeOut')
        } else {
            $nav.addClass('fadeOut').removeClass('fadeIn');
            window.setTimeout( function() {
                $nav.addClass('hidden');
            }, 500);
        }
    });

    $('.stack img').click(function() {
        $(this).toggleClass('active');
    });

  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
