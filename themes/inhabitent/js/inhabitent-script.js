(function($) {
  var $searchField = $('.search-field');

  //hide and show search field in header
  $('.header-search .search-submit').click(function() {
    event.preventDefault();
    $searchField.toggleClass('search-focus');
    $searchField.focus();
    $searchField.blur(function() {
      $searchField.toggleClass('search-focus');
      $searchField.val('');
    });
    // on enter search
    $(document).keypress(function(key) {
      if ($searchField.val().length > 0) {
        if (key.which == 13) {
          $('.search-form').submit();
          return false;
        }
      }
    });
  });
})(jQuery);
