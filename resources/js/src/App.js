import React from 'react';
import ReactDOM from 'react-dom';
import {
    BrowserRouter as Router,
    Switch,
    Route,
    Link
} from "react-router-dom";
import Home from './components/Home';
const App = () => {
    return(
       <Router className="App__container" >
           <Switch>
               <Route  path="/test">
                   <Home />
               </Route>
           </Switch>
       </Router> 
    );
};

ReactDOM.render(<App />, document.getElementById('app'));