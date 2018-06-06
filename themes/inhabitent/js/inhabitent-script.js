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
  });
})(jQuery);
