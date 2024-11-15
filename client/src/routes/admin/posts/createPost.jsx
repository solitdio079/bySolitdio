import { useEffect, useState } from 'react'
import CodeBlockLowlight from '@tiptap/extension-code-block-lowlight'
import { useFetcher } from "react-router-dom"
import toast, { Toaster } from 'react-hot-toast'
import { Color } from '@tiptap/extension-color'
import ListItem from '@tiptap/extension-list-item'
import TextStyle from '@tiptap/extension-text-style'
import Image from '@tiptap/extension-image'
import Youtube from '@tiptap/extension-youtube'
import {
  useEditor,
  EditorContent,
} from '@tiptap/react'
import StarterKit from '@tiptap/starter-kit'
import { MenuBar } from '../../../components/admin/postMenuBar'
//import { FaCheck } from 'react-icons/fa6'
import { url } from '../../../utils/serverUrl'
import { FaClipboard } from 'react-icons/fa6'
import copy from 'copy-to-clipboard'



// action to create Post
export async function action({ request }) {
    const formData = await request.formData()
    const bodyObject = Object.fromEntries(formData)
    console.log(bodyObject.images)
    try {
        const req = await fetch(url + "/admin/post/", {
            method: "POST",
            mode: 'cors',
            credentials: 'include',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(bodyObject)
        })
        const response = await req.json()
        return response
    } catch (error) {
        return {error: error.message}
    }
}

//lowlight 

// load all languages with "all" or common languages with "common"
import { common, createLowlight } from 'lowlight'
import CategoriesSelect from '../../../components/admin/categorieSelect'

// create a lowlight instance with all languages loaded
const lowlight = createLowlight(common)



export default function CreatePost() {
    const fetcher = useFetcher()
   

    //const [editorContent, setEditorContent]= useState('')
    const [imagesLink, setImagesLink] = useState([])
     const toastOptions = {
       duration: 5000,
     }
    useEffect(() => {
        if (fetcher.data) {
            toast.dismiss()
             fetcher.data.msg
           ? toast.success(fetcher.data.msg, toastOptions):fetcher.data.images ? setImagesLink(fetcher.data.images)
           : toast.error(fetcher.data.error, toastOptions)
        }
        //if(editor) setEditorContent(editor.getJSON())
      
     }, [fetcher.data])
    
    
    const extensions = [
      Color.configure({ types: [TextStyle.name, ListItem.name] }),
      TextStyle.configure({ types: [ListItem.name] }),
      CodeBlockLowlight.configure({
        lowlight,
      }),
      Image,
      Youtube.configure({
        controls: false,
        nocookie: true,
      }),
      StarterKit.configure({
        bulletList: {
          keepMarks: true,
          keepAttributes: false, // TODO : Making this as `false` becase marks are not preserved when I try to preserve attrs, awaiting a bit of help
        },
        orderedList: {
          keepMarks: true,
          keepAttributes: false, // TODO : Making this as `false` becase marks are not preserved when I try to preserve attrs, awaiting a bit of help
        },
      }),
    ]

    const content = `
<h2>
  Hi there,
</h2>
<p>
  this is a <em>basic</em> example of <strong>Tiptap</strong>. Sure, there are all kind of basic text styles you’d probably expect from a text editor. But wait until you see the lists:
</p>
<ul>
  <li>
    That’s a bullet list with one …
  </li>
  <li>
    … or two list items.
  </li>
</ul>
<p>
  Isn’t that great? And all of that is editable. But wait, there’s more. Let’s try a code block:
</p>
<pre><code class="language-css">body {
  display: none;
}</code></pre>
<p>
  I know, I know, this is impressive. It’s only the tip of the iceberg though. Give it a try and click a little bit around. Don’t forget to check the other examples too.
</p>
<blockquote>
  Wow, that’s amazing. Good work, boy! 👏
  <br />
  — Mom
</blockquote>
`
     const editor  = useEditor({
       extensions,
       content,
     })
    // console.log('editor: ' + editor)
    return (
      <div className="flex flex-col items-center">
        <fetcher.Form
          encType="multipart/form-data"
          method="post"
          action={'/admin/posts/imagesUpload'}
          className="flex items-center "
        >
          <input
            type="file"
            name="images"
            className="file-input w-full max-w-xs my-5"
            multiple
          />
          <div className="form-control mx-3">
            <button className="btn btn-primary text-white">
              {' '}
              {fetcher.state === 'submitting' ? (
                <span className="loading loading-infinity loading-md"></span>
              ) : (
                'Upload'
              )}
            </button>
          </div>
        </fetcher.Form>
        {imagesLink.length > 0
          ? imagesLink.map((item) => (
              <div
                role="alert"
                key={item}
                className="alert alert-success my-3 p-0"
              >
               
                <span className="flex items-center">
                  {' '}
                  <img className="m-2" src={url + '/' + item} width={60} />
                  <span className="italic text-white">
                    {' '}
                    {url + '/' + item}{' '}
                  </span>
                  <button
                    onClick={() => {
                      copy(url + '/' + item)
                      toast.dismiss()
                      toast.success('Copied to clipboard', toastOptions)
                    }}
                    className="btn btn-outline mx-3 hover:bg-primary text-white"
                  >
                    <FaClipboard className="h-5 w-5" />
                  </button>
                </span>
              </div>
            ))
          : ''}
        <fetcher.Form method="post" className="card-body">
          <div className="form-control">
            <label className="label">
              <span className="label-text text-white">Title</span>
            </label>
            <input
              type="text"
              placeholder="title"
              className="input input-bordered text-white bg-transparent border border-white"
              name="title"
              required
            />
            <MenuBar editor={editor} />
            <EditorContent editor={editor} />

            <input type="hidden" name="content" value={JSON.stringify(editor.getJSON(),null,1)} />
            <input type="hidden" name="images" value={imagesLink} />

            <Toaster />
          </div>
          <CategoriesSelect name="category" defaultValue="" />

          <div className="form-control mt-6">
            <button className="btn btn-primary text-white">
              {' '}
              {fetcher.state === 'submitting' ? (
                <span className="loading loading-infinity loading-md"></span>
              ) : (
                'Create Post'
              )}
            </button>
          </div>
        </fetcher.Form>
      </div>
    )
}