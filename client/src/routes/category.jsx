import { useParams } from "react-router-dom";
import {url} from "../utils/serverUrl";
import InfiniteEntity from "../components/InfiniteEntity";
import PostCardClient from "../components/postCardClient";
export default function CategoryPosts() {
    const {name} = useParams()
    
    return (
      <div className="flex flex-col">
        <p className="text-5xl text-center font-bold lg:text-6xl text-white mb-10 leading-relaxed lg:leading-relaxed">
          {name}
        </p>
        <InfiniteEntity
          loaderRoute={`/loaders/categoryPosts?name=${name}`}
          fetchMoreURL={url + `/admin/post/category/${name}`}
          UnitEntity={PostCardClient}
        />
      </div>
    )
}