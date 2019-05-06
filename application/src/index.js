import React from 'react';
import ReactDOM from 'react-dom';
import * as serviceWorker from './serviceWorker';
import Home from './app/Home/Home';

ReactDOM.render(<Home />, document.getElementById('root'));
serviceWorker.unregister();
