$(function() {
  // var timer

  // $(window).scroll(function() {
  //   console.log('Scroll ativo!')
  // })

  // $(window).resize(function() {
  //   // console.log('Minha tela está sendo redimensionada')
  //   clearTimeout(timer)
  //   timer = setTimeout(function() {
  //     location.href = 'http://nuuvem.com.br'
  //   }, 1000)
  // })

  // $('a').click(function(e) {
  //   //e.preventDefault()
  //   // return false
  // })
  
  $('body').click(function () {
    $('.box1')
    .css('background-color', '#109034')
  })
  
  $('.box1').click(function(e) {
    $('.box1')
      .css('background-color', '#430901')
    e.stopPropagation()
    })
})