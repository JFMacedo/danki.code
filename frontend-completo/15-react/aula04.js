var container = document.getElementById('main');

class Box extends React.Component {
  render(){
    return <div>
      <h1>Olá Mundo</h1>
      <p>Já me livrei da maldição!</p>
    </div>
  }
}

class Fom extends React.Component {
  render () {
    return (<form><input type="text" /><input type="submit" /></form>)
  }
}

ReactDOM.render(<Box />, container);