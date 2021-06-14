var container = document.getElementById('main');

class Box extends React.Component {
  render(){
    var n = 10;
    return <div>
      <h1>Olá Mundo</h1>
      <p>Já me livrei da maldição!</p>
      <p>{n}</p>
    </div>
  }
}

class Fom extends React.Component {
  render () {
    return (<form><input type="text" /><input type="submit" /></form>)
  }
}

ReactDOM.render(<div><Box /><Fom /></div>, container);