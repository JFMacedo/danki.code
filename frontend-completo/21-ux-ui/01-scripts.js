document.querySelector('nav.mobile ul i')
  .addEventListener('click', () => {
    let itens = document.querySelectorAll('nav.mobile ul li')
    for(item of itens) {
      if(item.style.opacity == 0) {
        item.style.opacity = 1;
        item.style.visibility = 'visible';
      } else {
        item.style.opacity = 0;
        item.style.visibility = 'hidden';
      }
    }
  });

document.querySelector('nav.mobile ul i')
  .addEventListener('click', () => {
    let icon = document.querySelector('nav.mobile ul i')
    if(icon.classList == 'fas fa-bars') {
      icon.classList = 'fas fa-times';
    } else {
      icon.classList = 'fas fa-bars';
    }
  });

document.querySelector('form.contact')
  .addEventListener('submit', (event) => {
    let name = document.querySelector('[name=name]').value
    let email = document.querySelector('[name=email]').value
    let msg = document.querySelector('[name=msg]').value
    
    if(name == '') {
      event.preventDefault()
      document.querySelector('[name=name]')
        .style.border = '1px solid #AA3355'
      document.querySelector('[name=name]')
        .parentElement
        .querySelector('span')
        .innerHTML = 'Por favor, insira seu nome.'
    } else {
      document.querySelector('[name=name]')
        .style.border = '1px solid #102211'
      document.querySelector('[name=name]')
        .parentElement
        .querySelector('span')
        .innerHTML = ''
    }

    if(email == '') {
      event.preventDefault()
      document.querySelector('[name=email]')
        .style.border = '1px solid #AA3355'
      document.querySelector('[name=email]')
        .parentElement
        .querySelector('span')
        .innerHTML = 'Favor, insira seu email.'
    } else {
      document.querySelector('[name=email]')
        .style.border = '1px solid #102211'
      document.querySelector('[name=email]')
        .parentElement
        .querySelector('span')
        .innerHTML = ''
    }

    if(msg == '') {
      event.preventDefault()
      document.querySelector('[name=msg]')
        .style.border = '1px solid #AA3355'
      document.querySelector('[name=msg]')
        .parentElement
        .querySelector('span')
        .innerHTML = 'Por favor, insira uma mensagem.'
    } else {
      document.querySelector('[name=msg]')
        .style.border = '1px solid #102211'
      document.querySelector('[name=msg]')
        .parentElement
        .querySelector('span')
        .innerHTML = ''
    }
  })