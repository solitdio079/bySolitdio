import { FaGithub, FaLinkedinIn, FaTwitter, FaYoutube } from "react-icons/fa6"
import InfiniteEntity from "../components/InfiniteEntity"
import PostCardClient from "../components/postCardClient"
import { url } from "../utils/serverUrl"
import CategoryList from "../components/categoryList"
export default function Home() {
    return (
      <div className="flex flex-col">
        <div className="flex flex-col border-b-2 border-gray-400 my-10 ">
          <p className="text-5xl font-bold lg:text-6xl text-white mb-10 text-center leading-relaxed lg:leading-relaxed">
            👋🏽 hey, I&apos;m <span className="text-primary">Djoko</span>.
            I&apos;m a fullstack web developer, founder of bySolitdio.
          </p>
          <div className="flex justify-between">
            <div id="socials" className="flex text-primary mb-8">
              <a
                href={'https://youtube.com'}
                className="flex items-center font-semibold  text-sm justify-between  m-2"
              >
                <FaYoutube className="mr-1" /> Youtube
              </a>
              <a
                href={'https://twitter.com'}
                className="flex items-center font-semibold text-sm justify-between m-2"
              >
                <FaTwitter className="mr-1" /> Twitter
              </a>
              <a
                href={'https://github.com'}
                className="flex items-center font-semibold text-sm justify-between  m-2"
              >
                <FaGithub className="mr-1" /> GitHub
              </a>
              <a
                href={'https://youtube.com'}
                className="flex items-center font-semibold text-sm justify-between m-2"
              >
                <FaLinkedinIn className="mr-1" /> LinkedIn
              </a>
            </div>
          </div>
        </div>
        <div className="flex flex-col lg:flex-row">
          <div className="lg:sticky lg:left-0 lg:w-2/5">
            {' '}
            <CategoryList />{' '}
          </div>
          <InfiniteEntity
            loaderRoute={'/loaders/posts'}
            fetchMoreURL={url + '/admin/post/'}
            UnitEntity={PostCardClient}
          />
        </div>
      </div>
    )
}