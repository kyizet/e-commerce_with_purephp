import React from "react";
import ReactDOM from "react-dom";

import {BrowserRouter as Router, Route, Switch} from 'react-router-dom'


import App from "./App";
import ItemDetail from './components/ItemDetail'

function Shop() {
  return (
      <Router>
        <Switch>
        <Route path="/e-commerce_with_purephp/pages/shop.php" exact component={App}/>
        <Route path="/e-commerce_with_purephp/pages/shop.php?:id" component={ItemDetail}/>
        </Switch>
      </Router>
  );
}
ReactDOM.render(<Shop />, document.getElementById("shopapp"));
