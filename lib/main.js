$ = jQuery;

$.animateEclipses = y => {
  eclipseMajor = parseInt($('.eclipse-major').css('transform').split(',')[5].replace(')', ''));
  eclipseMinor = parseInt($('.eclipse-minor').css('transform').split(',')[5].replace(')', ''));
  $('.eclipse-major').find('svg').css({
    transform: `translateY(${ eval(eclipseMajor - (y / 4)) }px)`
  });
  $('.eclipse-minor').find('svg').css({
    transform: `translateY(${ eval(eclipseMinor + (y / 3)) }px)`
  });
}

window.addEventListener('scroll', function() {
  var y = window.pageYOffset;
  if (y > 10) {
    $('body').addClass('body-scrolled');
  }
  else {
    $('body').removeClass('body-scrolled');
  }

  $.animateEclipses(y);

});

$(document).on('click', '[toggle-menu]', function(event){
  event.preventDefault();
  $('body').toggleClass('menu-open');
});

$(document).on('click', 'li.menu-item a', function(event){
  $('body').toggleClass('menu-open')
});
