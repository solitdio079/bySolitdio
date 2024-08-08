import { useFetcher } from "react-router-dom"
import Toastify from 'toastify-js'

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
    return (
      <div className="hero bg-base-200 m-5">
        <div className="hero-content flex-col">
          <div className="text-center ">
            <h1 className="text-5xl font-bold">Login now!</h1>
            <p className="py-6">
              The verification emeil will be sent to your inbox.
            </p>
          </div>
          <div className="card bg-base-100 w-full max-w-sm shrink-0 shadow-2xl">
            <fetcher.Form method="post" className="card-body">
              <div className="form-control">
                <label className="label">
                  <span className="label-text">Email</span>
                </label>
                <input
                  type="email"
                  placeholder="email"
                  className="input input-bordered"
                  name="email"
                  required
                />
                {fetcher.data ? Toastify({
  text: fetcher.data.msg,
  duration: 3000,
  destination: "https://mail.google.com",
  newWindow: true,
  close: true,
  gravity: "top", // `top` or `bottom`
  position: "left", // `left`, `center` or `right`
  stopOnFocus: true, // Prevents dismissing of toast on hover
  style: {
    background: "linear-gradient(to right, #00b09b, #96c93d)",
  },
  onClick: function(){} // Callback after click
}).showToast(): ''}
              </div>

              <div className="form-control mt-6">
                <button className="btn btn-primary">
                  {' '}
                  {fetcher.state === 'submitting' ? (
                    ( <span className="loading loading-infinity loading-md"></span>)
                  ) : 'Login' 
                  }
                </button>
              </div>
            </fetcher.Form>
          </div>
        </div>
      </div>
    )
}