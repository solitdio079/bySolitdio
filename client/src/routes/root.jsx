import Navbar from "../components/navbar"
import Footer from "../components/footer"
import { Outlet, useLoaderData} from "react-router-dom"
import { url } from "../utils/serverUrl"
import { userContext } from "../utils/userContext"

export async function loader() {
    try {
        const user = await fetch(url + "/auth/login/status", {
            method: 'GET',
            credentials: 'include',
            mode: 'cors',
            headers: {
                'Content-Type': 'application/json,',
                
            },
           
        })
        const response = await user.json()
        console.log(response)
        if (response.error) return null
        return response
    } catch (error) {
        return error.message
    }
}
export default function Root() {
    const user = useLoaderData()
    return (
      <div className="backdrop-blur-xl px-10 lg:px-24">
        <userContext.Provider value={user}>
          <Navbar />

          <Outlet />
          <Footer />
        </userContext.Provider>
      </div>
    )
}