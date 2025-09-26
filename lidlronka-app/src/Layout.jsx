import { NavLink, Link, Links, Outlet } from "react-router-dom";
export default function Layout() {

    return (
        <div className="App">
            <header className="App-header">
                <h1 className='App-header-h1'>
                    LidlRonka
                </h1>
            </header>
            <nav className='App-nav'>
                <NavLink to={"/"}>Home</NavLink> | {" "}
                <NavLink to={'/products'}
                    className={({isActive}) => isActive ? 'active' : undefined}
                >
                    Products
                </NavLink> | {" "}
                <NavLink to={'/cart'}>Cart</NavLink> | {" "}
                <NavLink to={'/admin'}>Panel administracji</NavLink>
            </nav>
            <section className='App-section'>
                <Outlet />
            </section>
            <footer className='App-footer'>
                <p>
                    Kontakt:
                    <br />
                    Lidl.Bierdonka@MAUI.com
                    <br />
                    +72 455 64 45 55
                </p>

            </footer>
        </div>
    )
}