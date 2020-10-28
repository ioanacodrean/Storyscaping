jQuery(document).ready(function( $ ) {
  $('.popupCloseButton').on('click', function() {
    $('.popup-form').hide();
  })
});

jQuery(document).ready(function( $ ) {
  $('#submitBtn').on('click', function() {
    $('.login-form').hide();
  })
});