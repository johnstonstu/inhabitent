(function($) {
  //hide and show search field
  $('.search-submit').click(function() {
    event.preventDefault();
    $('.search-field').toggleClass('search-focus');
  });

  // on enter search
  $('.search-submit').keypress(function(e) {
    if (e.which == 13) {
      $('search-submit').submit();
      return false;
    }
  });
})(jQuery);
