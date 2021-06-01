$ = jQuery;
window.addEventListener('scroll', function() {
  var y = window.pageYOffset;
  if (y > 10) {
    $('body').addClass('body-scrolled');
  }
  else {
    $('body').removeClass('body-scrolled');
  }
});