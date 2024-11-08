
import {useContext} from 'react'
import { NavLink,Form } from 'react-router-dom'
import { FaBars } from 'react-icons/fa6'
import { userContext } from '../utils/userContext'
export default function Navbar() {
  const user = useContext(userContext)
    return (
      <div className="navbar sticky top-0 backdrop-blur-sm text-white z-50">
        <div className="navbar-start">
          <div className="dropdown">
            <div tabIndex={0} role="button" className="btn btn-ghost lg:hidden">
              <FaBars className="h-5 w-5" />
            </div>
            <ul
              tabIndex={0}
              className="menu menu-sm dropdown-content bg-black text-white rounded-box z-[1] mt-3 w-52 p-2 shadow"
            >
              {' '}
              <li>
                <NavLink to="/parent/editor">Editor</NavLink>
              </li>
              {user ? (
                <>
                  <li>
                    <NavLink to="/admin">Admin</NavLink>
                  </li>
                  <li>
                    <Form action="/logout">
                      <button
                        type="submit"
                        className="btn btn-outline hover:bg-primary"
                      >
                        Logout
                      </button>
                    </Form>
                  </li>
                </>
              ) : (
                <li>
                  <NavLink to="/login">Login</NavLink>
                </li>
              )}
            </ul>
          </div>
          <NavLink to="/">
            <img width={120} src="/bysolitdio.svg" alt="lgo" />
          </NavLink>
        </div>
        <div className="navbar-end hidden lg:flex items-center">
          <ul className="menu menu-horizontal px-1">
            <li>
              <NavLink to="/parent/editor">Editor</NavLink>
            </li>
            {user ? (
              <>
                <li>
                  <NavLink to="/admin">Admin</NavLink>
                </li>
                <li>
                  <Form method="post" action="/logout">
                    <button
                      type="submit"
                      className="btn m-0 btn-sm btn-outline hover:bg-primary"
                    >
                      Logout
                    </button>
                  </Form>
                </li>
              </>
            ) : (
              <li>
                <NavLink to="/login">Login</NavLink>
              </li>
            )}
          </ul>
        </div>
      </div>
    )
}