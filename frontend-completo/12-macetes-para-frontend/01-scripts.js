$(function() {
  $('nav.menu-mobile h1').click(function() {
    $(this).parent().find('ul:not(.submenu-mobile)').slideToggle()
  })

  $('nav.menu-mobile > ul > li').click(function() {
    $(this).find('ul').slideToggle()
  })
})