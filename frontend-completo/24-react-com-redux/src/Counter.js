import React from 'react';
import {connect} from 'react-redux';
import './App.css';
// import {createStore} from 'redux';
// import axios from 'axios';

// const reducer = (state, action) => {
//   if (action.type === 'INCR') {
//     return state + action.payload;
//   } else if (action.type === 'DECR') {
//     return state - action.payload;
//   } else if (action.type === 'INFO') {
//     console.log(action.title);
//   }
//   return state;
// }

// const store = createStore(reducer, 0);

// store.subscribe(() => {
//   console.log('O estado mudou!', store.getState());
// });

// store.dispatch({type: 'INCR', payload: 3});
// store.dispatch({type: 'INCR', payload: 3});
// store.dispatch({type: 'INCR', payload: 3});
// store.dispatch({type: 'DECR', payload: 4});
// store.dispatch({type: 'DECR', payload: 4});

// axios.get('https://my-json-server.typicode.com/typicode/demo/posts').then((response) => {
//   console.log(response);
//   store.dispatch({type: 'INFO', title: response.data[2].title})
// });

class Counter extends React.Component {

  increment = () => {
    this.props.dispatch({
      'type': 'INCREMENT'
    });
  }

  changeTitle = () => {
    this.props.dispatch({
      'type': 'CHANGETITLE'
    });
  }

  render() {
    return(
      <div className="App">
        <h1>{this.props.title}</h1>
        <h2>{this.props.count}</h2>
        <button onClick={this.increment}>Increment</button>
        <button onClick={this.changeTitle}>Alterar título</button>
      </div>
    )
  }
}

const mapStatesToProps = state => ({
  count: state.count,
  title: state.title
});
export default connect(mapStatesToProps)(Counter);