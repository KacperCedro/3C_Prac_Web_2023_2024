import logo from './logo.svg';
import './App.css';
import { BrowserRouter, Routes, Route, Link, NavLink} from "react-router-dom";
import { Home } from "./Home";
import Products from './Products';
import Cart from "./Cart";
import ErrorPage from './ErrorPage';
import Admin from './Admin';
import ProductDetails from './ProductDetails';

function App() {
  return (
    <BrowserRouter>
      <div className="App">
      <header className="App-header">
        <h1 className='App-header-h1'>
          LidlRonka
        </h1>
      </header>
      <nav className='App-nav'>
        <NavLink to={"/"}>Home</NavLink> | {" "}
        <NavLink to={'/products'}>Products</NavLink> | {""}
        <NavLink to={'/cart'}>Cart</NavLink> | {" "}
        <NavLink to={'/admin'}>Panel administracji</NavLink>
      </nav>
      <section className='App-section'>
      <Routes>
        <Route path='/' element={<Home/>}/>
        <Route path='/products' element={<Products/>}/>
        <Route path='/cart' element={<Cart/>}/>
        <Route path='*' element={<ErrorPage/>}/>
        <Route path='/admin' element={<Admin/>}/>
        <Route path='/products/:id' element={<ProductDetails/>}/>
      </Routes>
      </section>
      <footer className='App-footer'>
        <p>
          Kontakt:
          <br/>
          Lidl.Bierdonka@MAUI.com
          <br/>
          +72 455 64 45 55
        </p>

      </footer>
    </div>
      
    </BrowserRouter>
  );
}

export default App;
