function teste(executarAlgo) {
  executarAlgo();
}

teste(function() {
  console.log('Olá mundo!')
})

teste(() => {
  console.log('Olá Mundo!')
})