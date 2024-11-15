import { useEffect } from "react"
import { useFetcher } from "react-router-dom"
import toast, { Toaster } from 'react-hot-toast'

export async function action({request}) {
  const formData = await request.formData()
  const bodyObject = Object.fromEntries(formData)

  console.log(bodyObject);
  try {
    const response = await fetch('http://localhost:5500/auth/login/email', {
      method: 'POST',
      mode: 'cors',
      //credentials: 'include',
      headers: {
        'Content-Type': 'application/json'
      },
      body: JSON.stringify(bodyObject),
    })

    const message = response.json()
    return message
    
  } catch (error) {
    return error.message
  }
  

}
export default function Login() {
  const fetcher = useFetcher()
  const toastOptions = {
    duration: 5000,
   
  }
  useEffect(() => {
   
    fetcher.data
      ? fetcher.data.msg
        ? toast.success(fetcher.data.msg, toastOptions)
        : toast.error(fetcher.data, toastOptions)
      : ''
   
    
  }, [fetcher])
    return (
      <div className="hero w-full">
        <div className="hero-content flex-col">
          <div className="text-center text-white">
            <h1 className="text-5xl font-bold">Login now!</h1>
            <p className="py-6">
              The verification emeil will be sent to your inbox.
            </p>
          </div>
          <div className="card  card-bordered w-full max-w-sm shrink-0 shadow-2xl">
            <fetcher.Form method="post" className="card-body">
              <div className="form-control">
                <label className="label">
                  <span className="label-text text-white">Email</span>
                </label>
                <input
                  type="email"
                  placeholder="email"
                  className="input input-bordered text-white bg-transparent border border-white"
                  name="email"
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
                    'Login'
                  )}
                </button>
              </div>
            </fetcher.Form>
          </div>
        </div>
      </div>
    )
}