$ = jQuery;

$.animateEclipses = y => {
  if (window.innerWidth > 991) {

    eclipseMajor = parseInt($('.eclipse-major').css('transform').split(',')[5].replace(')', ''));
    eclipseMinor = parseInt($('.eclipse-minor').css('transform').split(',')[5].replace(')', ''));

    eclipse01 = parseInt($('.eclipse-btn-01').css('transform').split(',')[5].replace(')', ''));
    eclipse02 = parseInt($('.eclipse-btn-02').css('transform').split(',')[5].replace(')', ''));

    $('.eclipse-major').find('svg').css({
      transform: `translateY(${ eval(eclipseMajor - (y / 4)) }px)`
    });
    $('.eclipse-minor').find('svg').css({
      transform: `translateY(${ eval(eclipseMinor + (y / 3)) }px)`
    });

    var resultadosPos = parseInt($('.beneficios-novo').offset().top);
    var resultadosHeight = parseInt($('.beneficios-novo').innerHeight());
    var min = eval(resultadosPos - (700));

    if (y >= min) {

      $('.eclipse-btn-01').find('svg').css({
        transform: `translateY(${ eval(eclipse01 + ((y-resultadosPos) / 4)) }px)`
      });

      $('.eclipse-btn-02').find('svg').css({
        transform: `translateY(${ eval(eclipse02 + ((y-resultadosPos) / 5)) }px)`
      });

    }
    else {
      $('.eclipse-btn-01').find('svg').css({
        transform: `translateY(-173.75px)`
      });

      $('.eclipse-btn-02').find('svg').css({
        transform: `translateY(-140px)`
      });
    }

  }

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
