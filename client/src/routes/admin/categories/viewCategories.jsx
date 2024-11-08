import { useEffect, useState } from "react"
import { useFetcher, Link } from "react-router-dom"
import CategorieCard from "../../../components/admin/categorieCard"
import { FaPlus } from "react-icons/fa6"

export default function ViewCategoires() {
    const [categories, setCategories] = useState([])
    const fetcher = useFetcher()
    useEffect(() => {
        fetcher.load('/loaders/categories')
        if (fetcher.state === 'idle' && fetcher.data) {
            //console.log(fetcher.data)
            !fetcher.data.error ? setCategories(fetcher.data):''
        }
    },[fetcher.data])
    return (
      <div className="flex flex-col w-full justify-center flex-wrap">
        <h1 className="text-white text-3xl mx-auto my-5">All Categories</h1>
        <div className="flex flex-row flex-wrap">
          {categories && categories.length > 0 ? (
            categories.map((item) => (
              <CategorieCard key={item._id} name={item.name} id={item._id} />
            ))
          ) : (
            <span className="loading loading-infinity loading-lg"></span>
          )}
        </div>
        <Link to="/admin/categories/create" className="btn m-2 bg-primary btn-lg text-white">
                <FaPlus className="w-8 h-8" />
                Add New
        </Link>
      </div>
    )
}