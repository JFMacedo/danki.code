document.querySelector('.btn-add')
  .addEventListener('click', () => {
    var date = new Date();
    var hh = date.getHours();
    var mm = date.getMinutes();

    const container = document.querySelector('.container-annotations')
    const div = document.createElement('div')
    div.classList = 'annotation'
    const textarea = document.createElement('textarea')
    textarea.setAttribute('placeholder', 'Nova anotação')
    textarea.innerHTML = `${hh}:${mm}`
    div.appendChild(textarea)
    container.appendChild(div)
  })