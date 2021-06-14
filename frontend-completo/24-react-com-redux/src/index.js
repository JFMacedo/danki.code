import React from 'react';
import ReactDOM from 'react-dom';
import './index.css';
import axios from 'axios';
import {createStore} from 'redux';
import {Provider} from 'react-redux';
import Counter from './Counter';

const initialState = {
  count: 40,
  title: 'Jean.Macedo'
};

function reducer(state = initialState, action) {
  if(action.type === 'INCREMENT') {
    return {
      count: state.count + 1,
      title: state.title
    };
  } else if(action.type === 'CHANGETITLE') {
    axios.get('https://my-json-server.typicode.com/typicode/demo/posts').then((response) => {
      store.dispatch({
        type: 'CHANGE-TITLE',
        title: response.data[1].title
      });
    })
  } else if(action.type === 'CHANGE-TITLE') {
    return {
      count: state.count,
      title: action.title
    }
  }
  return state;
};

const store = createStore(reducer) ;


const App = () => (
  <Provider store={store}>
    <Counter />
  </Provider>
);

ReactDOM.render(
  <App />,
  document.getElementById('root')
);