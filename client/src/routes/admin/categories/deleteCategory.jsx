import { redirect } from "react-router-dom"
import { url } from "../../../utils/serverUrl"
export async function action({params}) {
    const { id } = params
    try {
        const req = await fetch(url + `/admin/category/${id}`, {
            method: 'DELETE',
            mode: 'cors',
            headers: {
                'Content-Type': 'application/json'
            }
        })
        const response = await req.json()
        if (response.error) console.log(response.error)
        return redirect("/admin/categories/view")
    } catch (error) {
        return {error: error.message}
    }
    
}