var container = document.getElementById('main');

class Box extends React.Component {
  render(){
    return <div>
      <h2>Olá {this.props.name} {this.props.lastName}</h2>
        <p>{this.props.children}</p>
    </div>
  }
}

class Fom extends React.Component {
  handleClick() {
    $('body').css('background', document.querySelector('input').value);
  }

  render () {
    return (<div><input type="text" /><input type="submit" value="Enviar" onClick={this.handleClick} /></div>)
  }
}

ReactDOM.render(
  <div>
    <Box name='Jean' lastName='Macedo'>Tenho 28 anos de idade e quero ser programador.</Box>
    <Box name='Jéssica'>Tenho 28 anos de idade e quero morar em Londrina-PR.</Box>
    <Fom />
  </div>,
container);