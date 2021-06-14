$(function() {
  $('#quem-d, #quem-m').click(function() {
    $('html, body').animate({'scrollTop':$('.perfil-container').offset().top});
    return false;
  });
  
  $('#tratamentos-d, #tratamentos-m').click(function() {
    $('html, body').animate({'scrollTop':$('.tratamentos').offset().top});
    return false;
  });
  
  $('#depoimentos-d, #depoimentos-m').click(function() {
    $('html, body').animate({'scrollTop':$('.depoimentos').offset().top});
    return false;
  });
  
  $('#contato-d, #contato-m').click(function() {
    $('html, body').animate({'scrollTop':$('.contato').offset().top});
    return false;
  });
});