$(function() {
  var currentValue = 0;
  var isDrag = false;
  var precoMin = 0;
  var precoMax = 70000;

  $('.pointer-barra').mousedown(function(){
    isDrag = true;
  });

  $(document).mouseup(function(){
    isDrag = false;
  });

  $('.barra-preco').mousemove(function(e){
    if(isDrag == true) {
      var elBase = $(this);
      var mouseX = e.pageX - elBase.offset().left;

      if(mouseX < 0)
        mouseX = 0;
      if(mouseX > elBase.width())
        mouseX = elBase.width();

        currentValue = (mouseX / elBase.width()) * 100;
      $('.barra-preco-fill').css('width', currentValue+'%');
      $('.pointer-barra').css('left', 'calc('+currentValue+'% - 10px');

      precoMin = precoMax * (currentValue / 100);
      $('.valor > p:nth-of-type(1)').html(precoMin.toLocaleString('pt-BR', {style:'currency', currency: 'BRL'}));
    }
  });

  $('[goto=contato').click(function() {
    $('header nav a').css('color', '#000000');
    $('footer nav a').css('color', '#FFFFFF');
    $(this).css('color', '#EB2D2D');
    $('html, body').animate({'scrollTop':$('#contato').offset().top});
    return false;
  });

  $('.mobile').click(function() {
    $(this).find('ul').slideToggle();
  });

  var amtDep = $('.depoimento-single p').length;
  var curIndex = 0;

  function iniciarDepoimentos() {
    $('.depoimento-single p').hide();
    $('.depoimento-single p').eq(0).show();
  };

  function navegarSlide() {
    $('[next]').click(function() {
      curIndex++;
      if(curIndex >= amtDep)
        curIndex = 0
      $('.depoimento-single p').hide();
      $('.depoimento-single p').eq(curIndex).show();
    });
    $('[prev]').click(function() {
      curIndex--;
      if(curIndex < 0)
        curIndex = amtDep -1;
      $('.depoimento-single p').hide();
      $('.depoimento-single p').eq(curIndex).show();
    });
  };

  iniciarDepoimentos();
  navegarSlide();
});