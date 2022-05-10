$(document).on('click', '.bt_resultados_online', function(event){
  event.preventDefault();
  $('body').addClass('popup-resultados');
});

$(document).on('click', '[close-popup-resultados]', function(event){
  $('body').removeClass('popup-resultados');
});