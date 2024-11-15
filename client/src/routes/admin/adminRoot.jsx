import { Outlet, NavLink } from "react-router-dom";
import { FaEnvelopeOpenText, FaShapes, FaUsers } from 'react-icons/fa6'
export default function AdminRoot() {
  return (
    <div className="flex flex-col lg:flex-row p-5">
      <ul className="menu menu-horizontal w-full justify-center lg:justify-start lg:w-96 lg:menu-vertical text-white rounded-box">
        <li>
          <NavLink to={"/admin/posts/view"} className="btn btn-outline text-white border-white m-2 hover:bg-primary">
            <FaEnvelopeOpenText className="h-5 w-5" />
            Posts
          </NavLink>
        </li>
        <li>
          <NavLink to={"/admin/categories/view"} className="btn btn-outline m-2 text-white border-white hover:bg-primary">
            <FaShapes className="h-5 w-5" />
            Categories
          </NavLink>
        </li>
        <li>
          <NavLink className="btn btn-outline m-2 text-white border-white hover:bg-primary">
            <FaUsers className="h-5 w-5" />
            Users
          </NavLink>
        </li>
      </ul>
      <Outlet />
    </div>
  )
}