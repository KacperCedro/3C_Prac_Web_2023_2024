import logo from './logo.svg';
import './App.css';
import { BrowserRouter, Routes, Route, Link, NavLink, createBrowserRouter, RouterProvider} from "react-router-dom";
import { Home } from "./Home";
import Products, {loader as productLoader} from './Products';
import Cart from "./Cart";
import ErrorPage from './ErrorPage';
import Admin from './Admin';
import ProductDetails, {loader as productDetailsLoader} from './ProductDetails';
import Layout from './Layout';

const router = createBrowserRouter([
  {
    path: '/',
    element: <Layout/>,
    children:[
      {index: true, element: <Home/>},
      {path: 'products', element: <Products/>, loader: productLoader},
      {path: 'products/:id', element: <ProductDetails/>, loader: productLoader},
      {path: '*', element: <ErrorPage/>},
      {path: 'cart', element: <Cart/>},
      {path: 'admin', element: <Admin/>},
    ],
  },
])

function App() {
  return (
    <RouterProvider router={router}/>
  );
}

export default App;
