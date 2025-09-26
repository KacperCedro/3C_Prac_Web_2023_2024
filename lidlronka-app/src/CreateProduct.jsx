import { Form, useActionData, redirect } from "react-router-dom";
export async function action({request}) {
    const formData = await request.formData()
    const playload = Object.fromEntries(formData)
    const res = await fetch('/api/products', {method:'POST', body:JSON.stringify(payload)})
    if (res.ok) {
        return redirect('/products')
    }
    return {error:'nie udało się zapisać'};
    
}
export default function CreateProduct() {
    const data = useActionData()
    return(
        <>
            {data?.error && <p role="alert">{data.error}</p>}
            <Form method="POST">
                <input name="name" required/>
                <button type="submit">
                    Zapisz
                </button>
            </Form>
        </>
    )
}
