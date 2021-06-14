$(function() {
  function validarCliqueHover() {
    $('.artigo1').click(function() {
      $('.artigo2')
        .css('background-color', '#5D5D5D')
        .css('color', '#7F7F7F')
        .css('text-shadow', '1px 1px 1px #000000')
    })
  
    $('.artigo1').hover(function() {
      $('.artigo2')
        .css('background-color', '#7F7F7F')
        .css('color', '#FFFFFF')
        .css('text-shadow', '1px 1px 1px #9900FF')
    }, function() {
      $('.artigo2')
        .css('background-color', '#D5D5D5')
        .css('color', '#000000')
        .css('text-shadow', '1px 1px 1px #FFFFFF')
    })
  }

  function validarFormulario() {
      $('textarea').focus(function() {
        console.log('Estou dentro do texte area!')
      }).blur(function() {
        console.log('Estou fora do textarea!')
      })

      $('select').change(function() {
        console.log('Meu select foi alterado!')
    })
  }

  validarCliqueHover()
  validarFormulario()
})