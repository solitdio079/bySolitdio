import { useEffect } from 'react'
import { useFetcher, useNavigate } from 'react-router-dom'
import toast, { Toaster } from 'react-hot-toast'
import { url } from '../../../utils/serverUrl'

export async function action({ request }) {
    const body = await request.formData()
    const bodyObj = Object.fromEntries(body)

    try {
        const req = await fetch(url + '/admin/category/', {
            method: 'POST',
            credentials: 'include',
            mode: 'cors',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(bodyObj)
        })

        const res = await req.json()
        return res
    } catch (error) {
        return {error: error.message}
    }
}


export default function CreateCategory() {
    const fetcher = useFetcher()
    const navigate= useNavigate()
    const toastOptions = {
      duration: 5000,
    }
    useEffect(() => {
      fetcher.data
        ? fetcher.data.msg
          ? navigate('/admin/categories/view')
          : toast.error(fetcher.data.error, toastOptions)
        : ''
        
       
    }, [fetcher])
  return (
    <>
      <fetcher.Form method="post" className="card-body">
        <div className="form-control">
          <label className="label">
            <span className="label-text text-white">Name</span>
          </label>
          <input
            type="text"
            placeholder="category name"
            className="input input-bordered text-white bg-transparent border border-white"
            name="name"
            required
          />

          <Toaster />
        </div>

        <div className="form-control mt-6">
          <button className="btn btn-primary text-white">
            {' '}
            {fetcher.state === 'submitting' ? (
              <span className="loading loading-infinity loading-md"></span>
            ) : (
              'Create'
            )}
          </button>
        </div>
      </fetcher.Form>
    </>
  )
}
