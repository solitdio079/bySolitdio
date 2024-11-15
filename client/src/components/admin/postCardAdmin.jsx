/* eslint-disable react/prop-types */
import { FaCode, FaPencil } from 'react-icons/fa6'
import { Link} from 'react-router-dom'
export default function PostCardAdmin({ item }) {
  return (
    <div className="flex flex-col border-gray-400 border-b-2 p-2 w-full my-3">
      <div className="flex justify-between">
        <Link to={`/post/${item._id}`} className="text-2xl lg:text-3xl font-bold"> {item.title}</Link>
        <Link
          to={`/admin/posts/edit/${item._id}`}
          className="btn text-white border-white btn-outline btn-sm hover:btn-warning"
        >
          <FaPencil />
          Edit
        </Link>
      </div>
      <div className="flex">
        <span className="flex items-center text-sm justify-between text-gray-400 my-2">
          {' '}
          <FaCode className="mr-2" /> {item.category.name}{' '}
        </span>
        <span className="flex text-sm items-center justify-between text-gray-400 my-2 ml-4">
          {' '}
          <FaCode className="mr-2" />{' '}
          {new Date(item.createdAt).toLocaleDateString()}{' '}
        </span>
      </div>
    </div>
  )
}
