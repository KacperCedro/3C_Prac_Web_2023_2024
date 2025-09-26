import { useLoaderData } from "react-router-dom";
export async function loader() {
    const res = await fetch('/api/products.json')
    if (!res.ok) {
        throw new Response('Błąd', {status:res.status})
    }
    return res.json()
}

export default function Products() {
    const products = useLoaderData()
    return products.map(p => <div key={p.id}>{p.name}</div>)
}